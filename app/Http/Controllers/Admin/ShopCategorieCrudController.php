<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ShopCategorieRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

class ShopCategorieCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;
    public function setup()
    {
        CRUD::setModel(\App\Models\ShopCategorie::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/shopcategorie');
        CRUD::setEntityNameStrings('categoria', 'Tienda categorias');
    }

    protected function setupListOperation()
    {
        $this->crud->addColumn([
            'name' => 'titulo',
            'label' => 'Nombre',
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
                'name' => 'titulo',
                'label' => 'Nombre',
                'type' => 'text',
            ],
            [
                'name' => 'activo',
                'label' => 'Activar',
                'type' => 'checkbox',
            ],
            [
                'name' => 'slug',
                'label' => '',
                'type' => 'hidden',
            ],

        ]);
    }
    protected function setupCreateOperation()
    {
        CRUD::setValidation(ShopCategorieRequest::class);

        $this->basicFields();
    }

    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
