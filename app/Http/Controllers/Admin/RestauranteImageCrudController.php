<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\RestauranteImageRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;


class RestauranteImageCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

  
    public function setup()
    {
        CRUD::setModel(\App\Models\RestauranteImage::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/restauranteimage');
        CRUD::setEntityNameStrings('imagen', 'Restaurante galería');
    }

    protected function setupListOperation()
    {
        $this->crud->addColumn([
            'name' => 'image',
            'label' => 'Imagen',
            'type'  => 'image',
        ]);
       
        $this->crud->addColumn([
            'name' => 'active',
            'type' => 'btnToggle',
            'label' => 'Activo',
        ]);

    }
    protected function basicFields()
    {
        $this->crud->addFields([
            [
                'name' => 'image',
                'label' => 'Imagen',
                'type' => 'image',
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
        CRUD::setValidation(RestauranteImageRequest::class);

        $this->basicFields();; 
    }

    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
