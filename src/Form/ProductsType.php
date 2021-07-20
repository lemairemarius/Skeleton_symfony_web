<?php

namespace App\Form;

use App\Entity\Products;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProductsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('productname')
            ->add('categoryid')
            ->add('quantityperunit')
            ->add('unitprice')
            ->add('unitsinstock')
            ->add('unitsonorder')
            ->add('reorderlevel')
            ->add('discontinued')
            ->add('picture')
            ->add('supplierid')

        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Products::class,
        ]);
    }
}
