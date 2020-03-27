<?php
namespace App\Form;

use App\Entity\Usuario;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\CallbackTransformer;

class UsuarioType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email', EmailType::class,[
                'attr' => array(
                    'placeholder' => 'Email'
                )
            ])
            ->add('password', PasswordType::class,[
                'attr' => array(
                    'placeholder' => 'Contraseña'
                )
            ])
            ->add('roles', ChoiceType::class,array(
                "expanded"=>true,
                "multiple"=>false,
                'label' => 'Tipo de Usuario',
                "choices"=>array(
                    'Encargado'=>"ROLE_ENCARGADO"
                ))
                
                
            )
        ;
        //Transformar el array de los roles a string
        $builder->get('roles')
        ->addModelTransformer(new CallbackTransformer(
            function ($rolesArray) {
                return implode(', ', $rolesArray);
            },
            function ($rolesString) {
                return [$rolesString];
            }
        ));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Usuario::class,
        ));
    }
}