<?php

namespace BackOfficeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CollaborateurType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('prenom')
            ->add('tags','hidden', array(

                'mapped' => false
            ))
            ->add('email',    'email')
            ->add('telephone')
            ->add('file')

              ->add('postecollaborateur', 'entity', array(
         'class'    => 'BackOfficeBundle:PosteCollaborateur',
         'property' => 'libelle',
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
            'data_class' => 'BackOfficeBundle\Entity\Collaborateur'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'backofficebundle_collaborateur';
    }
}
