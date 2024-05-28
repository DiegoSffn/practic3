<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class SearchType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('searchTermTecnicatura', TextType::class, [
                'label' => 'Buscar por Tecnicatura',
                'required' => false,
                'attr' => [
                    'placeholder' => 'Ingresa tu búsqueda de Tecnicatura...',
                ],
            ])
            ->add('buscar', SubmitType::class);
    }
}


