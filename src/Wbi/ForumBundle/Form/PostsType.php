<?php

namespace Wbi\ForumBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;


class PostsType extends AbstractType
{
    

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
              ->add('domain', 'entity', array('empty_value' => '--choisir un domaine--',
      'class' => 'WbiForumBundle:domain',
      'property' => 'label'))        
                
            ->add('underdomain', 'choice', 
                     array(
                        'empty_value' => null,
                        'empty_data' => '--choisir un sous domaine--',
                        'attr' => array('style'=>'width:60px'),
                         ))      


              ->add('type', 'choice', array(
                  'empty_value' => null,
                  'empty_data' => '--choisir un sous domaine--',
                   'attr' => array('style'=>'width:60px'),
                ))
                
            ->add('postTitle')
            ->add('postDescription')
            ->add('postAdresse')
            ->add('postPays')
            ->add('postVille')
            ->add('postRegion')
            ->add('postPrice')
            ->add('postPhone');
    }
     
 
        
    

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Wbi\ForumBundle\Entity\Posts'
        ));
    }

    public function getName()
    {
        return 'wbi_forumbundle_poststype';
    }
}




 