<?php

namespace JetCharters\AppBundle\Form\Admin;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class OperatorBillingType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('billingPlan','entity', array(
                "label" => "Select a Billing Plan: ",
                "class" => "JetCharters\AppBundle\Entity\BillingPlan"));
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'JetCharters\AppBundle\Entity\Operator'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'jetcharters_appbundle_contact';
    }
}
