<?php declare(strict_types=1);

namespace Symplify\CodingStandard\Fixer\Commenting;

use PhpCsFixer\Fixer\DefinedFixerInterface;
use PhpCsFixer\FixerDefinition\CodeSample;
use PhpCsFixer\FixerDefinition\FixerDefinition;
use PhpCsFixer\FixerDefinition\FixerDefinitionInterface;
use PhpCsFixer\Tokenizer\Token;
use PhpCsFixer\Tokenizer\Tokens;
use PhpCsFixer\WhitespacesFixerConfig;
use SplFileInfo;
use Symplify\TokenRunner\Wrapper\FixerWrapper\ClassWrapperFactory;

final class BlockPropertyCommentFixer implements DefinedFixerInterface
{
    /**
     * @var ClassWrapperFactory
     */
    private $classWrapperFactory;

    /**
     * @var WhitespacesFixerConfig
     */
    private $whitespacesFixerConfig;

    public function __construct(
        ClassWrapperFactory $classWrapperFactory,
        WhitespacesFixerConfig $whitespacesFixerConfig
    ) {
        $this->classWrapperFactory = $classWrapperFactory;
        $this->whitespacesFixerConfig = $whitespacesFixerConfig;
    }

    public function getDefinition(): FixerDefinitionInterface
    {
        return new FixerDefinition(
            'Block comment should be used instead of one liner.',
            [new CodeSample('<?php
/** @var SomeType */
private $property;
')]
        );
    }

    public function isCandidate(Tokens $tokens): bool
    {
        return $tokens->isAnyTokenKindsFound([T_CLASS, T_TRAIT]) &&
            $tokens->isAllTokenKindsFound([T_VARIABLE, T_DOC_COMMENT]) &&
            $tokens->isAnyTokenKindsFound([T_PUBLIC, T_PROTECTED, T_PRIVATE]);
    }

    public function fix(SplFileInfo $file, Tokens $tokens): void
    {
        for ($index = count($tokens) - 1; $index > 1; --$index) {
            $token = $tokens[$index];

            if (! $token->isGivenKind([T_CLASS, T_TRAIT])) {
                continue;
            }

            $classWrapper = $this->classWrapperFactory->createFromTokensArrayStartPosition($tokens, $index);
            foreach ($classWrapper->getPropertyWrappers() as $propertyWrapper) {
                $docBlockWrapper = $propertyWrapper->getDocBlockWrapper();
                if ($docBlockWrapper === null || ! $docBlockWrapper->isSingleLine()) {
                    continue;
                }

                $tokens[$docBlockWrapper->getTokenPosition()] = new Token(
                    [T_DOC_COMMENT, $this->convertDocBlockToMultiline($docBlockWrapper->getContent())]
                );
            }
        }
    }

    public function isRisky(): bool
    {
        return false;
    }

    public function getName(): string
    {
        return self::class;
    }

    /**
     * Must run before @see \PhpCsFixer\Fixer\Phpdoc\PhpdocVarWithoutNameFixer
     */
    public function getPriority(): int
    {
        return 1;
    }

    public function supports(SplFileInfo $file): bool
    {
        return true;
    }

    private function convertDocBlockToMultiline(string $docBlock): string
    {
        $newLineIndent = $this->whitespacesFixerConfig->getLineEnding() . $this->whitespacesFixerConfig->getIndent();

        return str_replace([' @', '/** ', ' */'], [
            $newLineIndent . ' * @',
            $newLineIndent . '/**',
            $newLineIndent . ' */',
        ], $docBlock);
    }
}
