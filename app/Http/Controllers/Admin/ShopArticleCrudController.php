<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ShopArticleRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class ShopArticleCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class ShopArticleCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        CRUD::setModel(\App\Models\ShopArticle::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/shoparticle');
        CRUD::setEntityNameStrings('articulo', 'tienda articulos');
    }
    protected function setupListOperation()
    {
        $this->crud->addColumn([
            'name' => 'imagen',
            'label' => 'Imagen',
            'type'  => 'image',
        ]);
        $this->crud->addColumn([
            'name' => 'name',
            'label' => 'Nombre',
        ]);
        $this->crud->addColumn([
            'name' => 'descripcion',
            'label' => 'Descripcion',
        ]);
        $this->crud->addColumn([
            'name' => 'precio',
            'label' => 'Precio',
            'type' => 'number',
            'prefix'        => '$',
            'decimals'      => 2,
        ]);
        $this->crud->addColumn([
            'name' => 'activo',
            'label' => 'activo',
        ]);
    }
    protected function basicFields()
    {
        $this->crud->addFields([

            [
                'name' => 'name',
                'label' => 'Nombre',
                'type' => 'text',
                'attributes' => [
                    'required' => 'required',
                ],
            ],
            [
                'name' => 'descripcion',
                'label' => 'Descripcion',
                'type' => 'ckeditor',
                'limint' => -1,
                'attributes' => [
                    'required' => 'required',
                ],
            ],
            [
                'name' => 'imagen',
                'label' => 'Imagen',
                'type' => 'image',
            ],
            [
                'name' => 'precio',
                'label' => 'Precio',
                'type' => 'number',
                'attributes' => [
                    'step' => 'any',
                    'required' => 'required',
                ],
            ],
            [
                'name' => 'activo',
                'label' => 'Activo',
                'type' => 'checkbox',
            ],

        ]);
    }
    protected function setupCreateOperation()
    {
        CRUD::setValidation(ShopArticleRequest::class);
        $this->basicFields();
    }
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
