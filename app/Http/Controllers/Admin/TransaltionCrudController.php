<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\TransaltionRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

class TransaltionCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        CRUD::setModel(\App\Models\Translation::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/transaltion');
        CRUD::setEntityNameStrings('texto', 'Traducciones');

        if (backpack_user()->role->rol != 'Superadmin'){
            $this->crud->denyAccess('create');
        }
    }

    protected function setupListOperation()
    {
        if (backpack_user()->role->rol != 'Superadmin'){
            $this->crud->denyAccess('delete');
        }
        
        $this->crud->addFilter(
            [
                'type'  => 'text',
                'name'  => 'key',
                'label' => 'Llave'
            ],
            false,
            function ($value) {
                $this->crud->addClause('where', 'key', 'LIKE', "%$value%");
            }
        );
        $this->crud->addFilter(
            [
                'type'  => 'text',
                'name'  => 'text',
                'label' => 'Texto corto'
            ],
            false,
            function ($value) {
                $this->crud->addClause('where', 'text', 'LIKE', "%$value%");
            }
        );
        $this->crud->addFilter(
            [
                'type'  => 'text',
                'name'  => 'text_description',
                'label' => 'Texto descriptivo'
            ],
            false,
            function ($value) {
                $this->crud->addClause('where', 'text_description', 'LIKE', "%$value%");
            }
        );
        $this->crud->addColumn([
            'name' => 'key',
            'label' => 'Llave',
            'type' => 'text',
        ]);
        $this->crud->addColumn([
            'name' => 'text',
            'label' => 'Texto corto',
            'type' => 'text',
        ]);
        $this->crud->addColumn([
            'name' => 'text_description',
            'label' => 'Texto descriptivo',
            'type' => 'text',
        ]);

    }
    protected function basicFields()
    {
        $this->crud->addFields([
            [
                'name' => 'key',
                'label' => 'Llave',
                'type' => 'text',
                'attributes' => [
                    'readonly'    => 'readonly',
                ],
            ],
            [
                'name' => 'text',
                'label' => 'Texto corto',
                'type' => 'text',
            ],
            [
                'name' => 'text_description',
                'label' => 'Texto descriptivo',
                'type' => 'ckeditor',
                'limint' => -1,
            ],

        ]);
    }
    protected function setupCreateOperation()
    {
        CRUD::setValidation(TransaltionRequest::class);

        $this->basicFields();

    }

    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
