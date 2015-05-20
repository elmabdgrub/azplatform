<?php

namespace BackOfficeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;


class ProjetType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre')
            ->add('description',    'textarea')
            ->add('datedebut','date',array( 'widget' => 'single_text',
    'format' => 'yyyy-MM-dd'))
            ->add('datefin','date',array( 'widget' => 'single_text',
    'format' => 'yyyy-MM-dd'))
            ->add('datelivraison','date',array( 'widget' => 'single_text',
    'format' => 'yyyy-MM-dd'))
            ->add('montant')

            ->add('tags','hidden', array(

                'mapped' => false
            ))
            
            ->add('typeprojet', 'entity', array(
         'class'    => 'BackOfficeBundle:TypeProjet',
         'property' => 'libelle',
         'multiple' => false
            ))
            ->add('client', 'entity', array(
         'class'    => 'BackOfficeBundle:Client',
         'property' => 'nom',
         'multiple' => false
            ))
            ->add('Enregistrer',      'submit')
        ;
    }
    
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BackOfficeBundle\Entity\Projet'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'backofficebundle_projet';
    }
}
