<?php

namespace AppBundle\Admin;
use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
/**
 * Class StatsAdmin
 * @package AppBundle\Admin
 */
class StatsAdmin extends Admin
{
    /**
     * Configure the fields available in the edition and creation page
     * @param FormMapper $formMapper
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('points', 'number')
            ->add('totalKmTraveled', 'number', array('scale' => 2))
            ->add('totalSecondTraveled', 'number')
            ->add('kmWalk', 'number', array('scale' => 2))
            ->add('secondWalk', 'number')
            ->add('kmBicycle', 'number', array('scale' => 2))
            ->add('secondBicycle', 'number')
            ->add('kmOther', 'number', array('scale' => 2))
            ->add('secondOther', 'number')
            ->add('nbSession', 'number')
            ->add('longestSession', 'number', array('scale' => 2))
            ->add('carbonEco', 'number', array('scale' => 2));
    }
    /**
     * Configure all the filter available
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('owner');
    }
    /**
     * Configure the fields available in the list view
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('id')
            ->addIdentifier('owner')
            ->addIdentifier('points')
            ->addIdentifier('totalKmTraveled')
            ->addIdentifier('totalSecondTraveled')
            ->addIdentifier('kmWalk')
            ->addIdentifier('secondWalk')
            ->addIdentifier('kmBicycle')
            ->addIdentifier('secondBicycle')
            ->addIdentifier('kmOther')
            ->addIdentifier('secondOther')
            ->addIdentifier('nbSession')
            ->addIdentifier('longestSession')
            ->addIdentifier('carbonEco');
    }
}