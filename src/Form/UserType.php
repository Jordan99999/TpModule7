<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email', null, ['attr' => ['class' => 'form-control']])
            ->add('password', null, ['attr' => ['class' => 'form-control']])
            ->add('pseudo', null, ['attr' => ['class' => 'form-control']])

            ->add('creer', SubmitType::class, [
                'label' => isset($options["label"]) ? $options["label"] : "Add",
                'attr' => ['class' => 'btn btn-outline-dark']
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}