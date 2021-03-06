<?php


namespace AppBundle\Admin;
use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Sonata\UserBundle\Admin\Model\UserAdmin as SonataUserAdmin;
/**
 * Class PersonAdmin
 * @package AppBundle\Admin
 */
class PersonAdmin extends SonataUserAdmin
{
    /**
     * Configure the fields available in the edition and creation page
     * @param FormMapper $formMapper
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->with('General')
            ->add('username')
            ->add('email')
            ->add('plainPassword', 'text', array(
                'required' => (!$this->getSubject() || is_null($this->getSubject()->getId()))
            ))
            ->add('stats')
            ->end()
            ->with('Profile')
            ->add('dateOfBirth', 'birthday', array('required' => false))
            ->add('firstname', null, array('required' => false))
            ->add('lastname', null, array('required' => false))
            ->add('gender', 'sonata_user_gender', array(
                'required' => true,
                'translation_domain' => $this->getTranslationDomain()
            ))
            ->end()
            ->with('Management')
            ->add('realRoles', 'sonata_security_roles', array(
                'label'    => 'form.label_roles',
                'expanded' => true,
                'multiple' => true,
                'required' => false
            ))
            ->add('locked', null, array('required' => false))
            ->add('expired', null, array('required' => false))
            ->add('enabled', null, array('required' => false))
            ->add('credentialsExpired', null, array('required' => false))
            ->end()
        ;
    }
    /**
     * {@inheritdoc}
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        parent::configureShowFields($showMapper);
    }
    /**
     * Configure all the filter available
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $filterMapper)
    {
        $filterMapper
            ->add('id')
            ->add('username')
            ->add('email')
        ;
    }
    /**
     * Configure the fields available in the list view
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('username')
            ->add('email')
            ->add('roles')
            ->add('enabled', null, array('editable' => true))
            ->add('locked', null, array('editable' => true))
            ->add('createdAt')
            ->add('stats');
    }
}