<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContactoEventoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('nombre')
        ->add('numpersonas', IntegerType::class)
        ->add('fecha', DateType::class, array(
            'widget' => 'single_text',
            'input_format' => 'd-m-y',
            'years' => range(date('Y'), date('Y') - 100),
            'months' => range(date('m'), 12),
            'days' => range(1, 31),
        ))
        ->add('email', EmailType::class)
        ->add('mensaje', TextareaType::class)
        ->add('enviar', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
