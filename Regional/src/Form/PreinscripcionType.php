<?php

namespace App\Form;

use App\Entity\Preinscripcion;
use App\Entity\Alumno;
use App\Entity\OfertaEducativa;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;


class PreinscripcionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        
        $builder
            ->add('fecha') //ver fecha 
            ->add('alumno', AlumnoType::class) // Agrega el formulario de Alumno
            ->add('ofertaEducativa', OfertaEducativaType::class)   //OfertaEducativaType::class  se agrego              
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Preinscripcion::class,
        ]);
    }
}
