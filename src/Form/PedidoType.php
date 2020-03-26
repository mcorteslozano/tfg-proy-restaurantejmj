<?php

namespace App\Form;

use App\Entity\Pedido;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PedidoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('fecha_entrega',DateType::class,array(
                'widget' => 'single_text',
                'input_format' => 'd-m-Y',
                'years' => range(date('Y'),date('Y')-100),
                'months' => range(1,12),
                'days' => range(1,31),
                'label' => 'Fecha de Entrega'
            ))
            ->add('id_proveedor',null,[
                'label' => 'Proveedor',
                'multiple' => false,
                'expanded' => false,
                'required' => true,
                'label_attr' =>['class' => 'proveedor'],
                //'required' => true,
                'placeholder' => 'Seleccione un proveedor'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            
        ]);
    }
}
