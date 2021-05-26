<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\SocialNetworkRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

use function PHPSTORM_META\type;

class SocialNetworkCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        CRUD::setModel(\App\Models\SocialNetwork::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/socialnetwork');
        CRUD::setEntityNameStrings('red', 'Social Networks');

        $this->crud->denyAccess('create');
    }

    protected function setupListOperation()
    {
        $this->crud->denyAccess('delete');
        
        $this->crud->addColumn([
            'name' => 'titulo',
            'label' => 'Nombre',
            'type' => 'text',
        ]);
        $this->crud->addColumn([
            'name' => 'url',
            'label' => 'Url',
            'type' => 'text',
        ]);
        $this->crud->addColumn([
            'name' => 'activo',
            'label' => 'Activo',
            'type' => 'btnToggle',
        ]);
    }
    protected function basicFields()
    {
        $this->crud->addFields([
            [
                'name' => 'icon',
                'label' => 'Icono',
                'type' => 'text',
                'attributes' => [
                    'readonly'    => 'readonly',
                ],
            ],
            [
                'name' => 'titulo',
                'label' => 'Nombre',
                'type' => 'text',
            ],
            [
                'name' => 'url',
                'label' => 'Url',
                'type' => 'text',
            ],
            [
                'name' => 'activo',
                'label' => 'Activar',
                'type' => 'checkbox',
            ],

        ]);
    }
    protected function setupCreateOperation()
    {
        CRUD::setValidation(SocialNetworkRequest::class);

        $this->basicFields();
    }
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
