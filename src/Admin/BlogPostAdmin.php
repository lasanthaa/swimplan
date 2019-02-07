<?php

namespace App\Admin;

use Sonata\AdminBundle\Form\FormMapper;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use App\Entity\Category;

final class BlogPostAdmin  extends AbstractAdmin {

  protected function configureFormFields(FormMapper $formMapper)
   {
       $formMapper
           ->add('title', TextType::class)
           ->add('body', TextareaType::class)
           ->add('category', EntityType::class, [
               'class' => Category::class,
               'choice_label' => 'name',
           ])
       ;
   }
   protected function configureDatagridFilters(DatagridMapper $datagridMapper)
   {
       $datagridMapper->add('title')
                      ->add('body');
   }

   protected function configureListFields(ListMapper $listMapper)
   {
       $listMapper->addIdentifier('title')
                  ->add('body');
   }
  

}
