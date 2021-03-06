<?php

namespace BackOfficeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class DepenseType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('libelle')
            ->add('description')

            ->add('typedepense', 'entity', array(
                'class'    => 'BackOfficeBundle:TypeDepense',
                'property' => 'libelle',
                'multiple' => false
            ))
            ->add('montant')
            ->add('Enregistrer',      'submit')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BackOfficeBundle\Entity\Depense'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'backofficebundle_depense';
    }
}
