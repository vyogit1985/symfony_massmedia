<?php

namespace MassMedia\BlogBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class CommentType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('author', TextType::class)
                ->add('content')
                //->add('created_at')
                //->add('post_id')
                ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'MassMedia\BlogBundle\Entity\Comment'
        ));
    }

    public function getBlockPrefix()
    {
        return 'massmedia_blogbundle_commenttype';
    }


}
