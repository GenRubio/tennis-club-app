<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\NewsletterRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class NewsletterCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class NewsletterCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        CRUD::setModel(\App\Models\Newsletter::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/newsletter');
        CRUD::setEntityNameStrings('newsletter', 'newsletters');
    }

    protected function setupListOperation()
    {
        $this->crud->addColumn([
            'name' => 'email',
            'label' => 'Email',
            'type'  => 'email',
        ]);
        $this->crud->addColumn([
            'name' => 'activo',
            'label' => 'Activo',
            'type' => 'btnToggle'
        ]);
    }

    protected function basicFields()
    {
        $this->crud->addFields([
            [
                'name' => 'email',
                'label' => 'Email',
                'type'  => 'text',
            ],
            [
                'name' => 'active',
                'label' => 'Activo',
                'type' => 'checkbox',
            ],
        ]);
    }

    protected function setupCreateOperation()
    {
        CRUD::setValidation(NewsletterRequest::class);

        $this->basicFields();

    }

    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
