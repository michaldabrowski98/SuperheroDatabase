<?php

namespace App\Form;

use App\Entity\Character;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;


class CharacterType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, [
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
            ->add('ID', TextType::class, [
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
           ->add('ALIGN', TextType::class, [
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
            ->add('EYE', TextType::class, [
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
            ->add('HAIR', TextType::class, [
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
            ->add('SEX', TextType::class, [
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
           ->add('ALIVE', TextType::class, [
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
            ->add('APPEARANCES', TextType::class, [
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
            ->add('YEAR', TextType::class, [
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
            ->add('save', SubmitType::class, [
                'attr' => [
                    'class' => 'btn btn-success float-right'
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Character::class,
        ]);
    }
}
