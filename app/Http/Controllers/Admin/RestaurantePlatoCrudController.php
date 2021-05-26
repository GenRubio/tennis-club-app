<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\RestaurantePlatoRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

class RestaurantePlatoCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        CRUD::setModel(\App\Models\RestaurantePlato::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/restauranteplato');
        CRUD::setEntityNameStrings('plato', 'Restaurante platos');
    }
    protected function setupListOperation()
    {
        $this->crud->addColumn([
            'name' => 'image',
            'label' => 'Imagen',
            'type'  => 'image',
        ]);
        $this->crud->addColumn([
            'name' => 'name',
            'label' => 'Nombre',
        ]);
        $this->crud->addColumn([
            'name' => 'price',
            'label' => 'Precio',
            'type' => 'number',
            'prefix'        => '$',
            'decimals'      => 2,
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
                'name' => 'name',
                'label' => 'Nombre',
                'type' => 'text',
            ],
            [
                'name' => 'description',
                'label' => 'Descripcion',
                'type' => 'ckeditor',
                'limint' => -1,
            ],
            [
                'name' => 'ingredients',
                'label' => 'Ingredientes',
                'type' => 'text',
            ],
            /*[
                'name'  => 'separator2',
                'type'  => 'custom_html',
                'value' => '<p style="margin-bottom: -10px;color:red;">Si desea colocar el plato al menu principal seleccione imagen*</p>',
            ],
            [
                'name' => 'plato_especial',
                'label' => '¿Colocar el plato en menu principal?',
                'type' => 'checkbox',
            ],*/
            [
                'name' => 'image',
                'label' => 'Imagen',
                'type' => 'image',
            ],
            [
                'label' => 'Categoria',
                'type' => 'select2',
                'name' => 'restaurante_categoria_id',
                'model'     => "App\Models\RestauranteCategoria",
                'attribute' => 'name',
                'options'   => (function ($query) {
                    return $query->orderBy('name', 'ASC')->get();
                }),
            ],
            [
                'prefix'     => 'EUR €',
                'name' => 'price',
                'label' => 'Precio',
                'type' => 'number',
                'attributes' => [
                    'step' => 'any',
                ],
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
        CRUD::setValidation(RestaurantePlatoRequest::class);

        $this->basicFields();

    }

   
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
