<?php

namespace App\Form;

use App\Entity\Format;
use App\Entity\Order;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class OrderType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', null, [
                'label' => 'NOM PRENOM / PSEUDO*',
            ])
            ->add('email',null,[
                'label' => 'EMAIL*',
            ])
            ->add('format', EntityType::class, [
                'class' => Format::class,
                'label' => 'TYPE DE COMMISSION*',
                'choice_label' => 'name',
            ])
            ->add('description',null,[
                'label' => 'DESCRIPTION*',
            ])
            ->add('picture',null,[
                'label' => 'URL POUR RÉFÉRENCE',
            ])
            ->add('acceptPrivacyPolicy', CheckboxType::class, [
                'label' => false,
                'required' => true,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Order::class,
        ]);
    }
}
