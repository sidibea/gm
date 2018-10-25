<?php

/*
 * This file is part of catalog promotion plugin for Sylius.
 *
 * (c) Ahmed Kooli
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */


namespace SnakeTn\CatalogPromotion\Form\Type\Rule;

use SnakeTn\CatalogPromotion\Form\Type\OptionAutocompleteChoiceType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\DataTransformerInterface;
use Symfony\Component\Form\FormBuilderInterface;

class HasOptionValueConfigurationType extends AbstractType
{
    private $dataTransformer;

    public function __construct(DataTransformerInterface $dataTransformer)
    {
        $this->dataTransformer = $dataTransformer;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder
            ->add('options', OptionAutocompleteChoiceType::class, [
                'label' => 'Option value',
                'multiple' => true,
            ]);
        $builder->get('options')->addModelTransformer($this->dataTransformer);

    }


}
