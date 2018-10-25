<?php declare(strict_types=1);

namespace Symplify\CodingStandard\Fixer\Naming;

use Nette\Utils\Strings;
use PhpCsFixer\AbstractFixer;
use PhpCsFixer\FixerDefinition\CodeSample;
use PhpCsFixer\FixerDefinition\FixerDefinition;
use PhpCsFixer\FixerDefinition\FixerDefinitionInterface;
use PhpCsFixer\Tokenizer\Token;
use PhpCsFixer\Tokenizer\Tokens;
use SplFileInfo;

final class MagicMethodsNamingFixer extends AbstractFixer
{
    /**
     * @var string[]
     */
    private $lowercaseMagicMethods = [
        '__construct',
        '__destruct',
        '__call',
        '__get',
        '__set',
        '__isset',
        '__unset',
        '__sleep',
        '__wakeup',
        '__invoke',
        '__set_state',
        '__clone',
    ];

    /**
     * @var string[]
     */
    private $pascalCaseMagicMethods = ['__callStatic', '__toString', '__debugInfo'];

    public function getDefinition(): FixerDefinitionInterface
    {
        return new FixerDefinition('Magic PHP methods (__*()) should respect their casing form', [
            new CodeSample('<?php
class SomeClass
{
    public function __CONSTRUCT()
    {
    }
}'),
        ]);
    }

    public function isCandidate(Tokens $tokens): bool
    {
        return $tokens->isAllTokenKindsFound([T_FUNCTION, T_STRING])
            && $tokens->isAnyTokenKindsFound(Token::getClassyTokenKinds());
    }

    protected function applyFix(SplFileInfo $file, Tokens $tokens): void
    {
        foreach ($tokens as $index => $token) {
            if (! $token->isGivenKind(T_FUNCTION)) {
                continue;
            }

            $methodNamePosition = (int) $tokens->getNextMeaningfulToken($index);
            $methodNameToken = $tokens[$methodNamePosition];

            if (! $this->isMethodNameCandidate($methodNameToken)) {
                continue;
            }

            $correctName = $this->getCorrectedNameIfNeeded($methodNameToken->getContent());
            if ($correctName === false) {
                continue;
            }

            $this->fixMethodName($tokens, $correctName, $methodNamePosition);
        }
    }

    private function isMethodNameCandidate(Token $methodNameToken): bool
    {
        if (! $methodNameToken->isGivenKind(T_STRING)) {
            // expected next token is not a method name, not our match
            return false;
        }

        if (! Strings::startsWith($methodNameToken->getContent(), '__')) {
            // not PHP internal method
            return false;
        }

        return true;
    }

    private function fixMethodName(Tokens $tokens, string $correctName, int $methodNamePosition): void
    {
        $tokens[$methodNamePosition] = new Token([T_STRING, $correctName]);
    }

    /**
     * @return false|string
     */
    private function getCorrectedNameIfNeeded(string $methodName)
    {
        foreach ($this->pascalCaseMagicMethods as $otherMagicMethod) {
            if ($otherMagicMethod !== $methodName && strtolower($otherMagicMethod) === strtolower($methodName)) {
                return $otherMagicMethod;
            }
        }

        $lowercasedMethodName = strtolower($methodName);
        if (in_array($lowercasedMethodName, $this->lowercaseMagicMethods, true)) {
            return $lowercasedMethodName;
        }

        return false;
    }
}
