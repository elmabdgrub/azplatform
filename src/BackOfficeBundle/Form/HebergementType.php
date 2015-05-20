<?php

namespace BackOfficeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class HebergementType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('description',    'textarea')
            ->add('datecreation','date',array( 'widget' => 'single_text',
                'format' => 'yyyy-MM-dd'))

            ->add('dateexpiration','date',array( 'widget' => 'single_text',
                'format' => 'yyyy-MM-dd'))

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
            'data_class' => 'BackOfficeBundle\Entity\Hebergement'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'backofficebundle_hebergement';
    }
}
