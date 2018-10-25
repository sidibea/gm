<?php

declare(strict_types=1);

namespace Loevgaard\SyliusBrandPlugin\Form\Type;

use Loevgaard\SyliusBrandPlugin\Entity\BrandInterface;
use Sylius\Component\Resource\Repository\RepositoryInterface;
use Symfony\Bridge\Doctrine\Form\DataTransformer\CollectionToArrayTransformer;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\Options;
use Symfony\Component\OptionsResolver\OptionsResolver;

final class BrandChoiceType extends AbstractType
{
    /**
     * @var RepositoryInterface
     */
    private $brandRepository;

    /**
     * @param RepositoryInterface $brandRepository
     */
    public function __construct(RepositoryInterface $brandRepository)
    {
        $this->brandRepository = $brandRepository;
    }

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        if ($options['multiple']) {
            $builder->addModelTransformer(new CollectionToArrayTransformer());
        }
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'choices' => function (Options $options): array {
                $brands = $this->brandRepository->findBy([], ['name' => 'ASC']);

                $choices = [];

                /** @var BrandInterface $brand */
                foreach ($brands as $brand) {
                    $choices[$brand->getName()] = $brand;
                }

                return $choices;
            },
        ]);
    }

    public function getParent(): string
    {
        return ChoiceType::class;
    }

    public function getBlockPrefix(): string
    {
        return 'loevgaard_sylius_brand_choice';
    }
}
