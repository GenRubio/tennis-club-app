<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\InstalacioneRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

class InstalacioneCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;
    //Botton para eliminar multiples opciones
    use \Backpack\CRUD\app\Http\Controllers\Operations\BulkDeleteOperation;


    public function setup()
    {
        CRUD::setModel(\App\Models\Instalacione::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/instalacione');
        CRUD::setEntityNameStrings('instalacion', 'instalaciones');
    }

    protected function setupListOperation()
    {
        //Colocar el selector con el cual poder eliminar multiples opciones
        $this->crud->enableBulkActions();

        $this->crud->addButtonFromView('line', 'add-image-instalacion', 'add-image-instalacion', 'beginning');

        $this->crud->addColumn([
            'name' => 'image',
            'label' => 'Imagen',
            'type'  => 'image',
        ]);
        $this->crud->addColumn([
            'name' => 'titulo',
            'label' => 'Titulo',
        ]);
        $this->crud->addColumn([
            'name' => 'subtitulo',
            'label' => 'Subtitulo',
        ]);
        $this->crud->addColumn([
            'name' => 'activo',
            'label' => 'Activado',
            'type' => 'btnToggle'
        ]);
    }
    protected function basicFields()
    {
        $this->crud->addFields([
            [
                'name' => 'titulo',
                'label' => 'Titulo',
                'type' => 'text',
            ],
            
            [
                'name' => 'subtitulo',
                'label' => 'Subtitulo',
                'type' => 'text',
            ],
            [
                'name' => 'descripcion',
                'label' => 'Descripcion',
                'type' => 'ckeditor',
                'limint' => -1,
            ],
            [
                'name' => 'video',
                'label' => 'Video de YouTube o Vmeo',
                'type' => 'video',
            ],
            [
                'name' => 'image',
                'label' => 'Imagen principal',
                'type' => 'image',
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
        CRUD::setValidation(InstalacioneRequest::class);

        $this->basicFields();

       
    }
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
