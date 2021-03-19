<?php

namespace App\Form;

use App\Entity\Oferta;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

class OfertaType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titol', TextType::Class, array('attr' => array('class' => 'form-control border border-dark')))
            ->add('descripcio')

            ->add('ubicacio')
            ->add('estat')
            ->add('categoria')
            ->add('empresa')
            ->add('candidats')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Oferta::class,
        ]);
    }
}
