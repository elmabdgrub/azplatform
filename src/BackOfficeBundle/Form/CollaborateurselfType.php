<?php

namespace BackOfficeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CollaborateurselfType extends AbstractType
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
            ->add('email',    'email')
            ->add('telephone')
            ->add('password', 'password')
            ->add('verif','password', array('mapped' => false))

            ->add('file')


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
