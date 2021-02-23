<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\AlquilerPistaRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class AlquilerPistaCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class AlquilerPistaCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        CRUD::setModel(\App\Models\AlquilerPista::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/alquilerpista');
        CRUD::setEntityNameStrings('pista', 'Alquiler pistas');
    }
    protected function setupListOperation()
    {
        $this->crud->addColumn([
            'name' => 'url',
            'label' => 'Imagen',
            'type'  => 'image',
        ]);
        $this->crud->addColumn([
            'name' => 'tipo_pista',
            'label' => 'Tipo Pista',
            'type'  => 'text',
        ]);
        $this->crud->addColumn([
            'name' => 'titulo',
            'label' => 'Titulo',
            'type'  => 'text',
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
            'name' => 'precio_persona',
            'label' => 'Precio por persona',
            'type' => 'number',
            'prefix'        => '$',
            'decimals'      => 2,
        ]);
        $this->crud->addColumn([
            'name' => 'activo',
            'label' => 'Activo',
        ]);

    }
    protected function basicFields()
    {
        $this->crud->addFields([

            [
                'name' => 'tipo_pista',
                'label' => 'Tipo pista',
                'type' => 'text',
            ],
            [
                'name' => 'titulo',
                'label' => 'Titulo',
                'type' => 'text',
            ],
            [
                'name' => 'descripcion',
                'label' => 'Descripcion',
                'type' => 'ckeditor',
                'limint' => -1,
            ],
            [
                'name' => 'url',
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
                'name' => 'precio_persona',
                'label' => 'Precio por persona',
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
        CRUD::setValidation(AlquilerPistaRequest::class);
        $this->basicFields();

    }
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
