<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\NoticiaRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;


class NoticiaCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        CRUD::setModel(\App\Models\Noticia::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/noticia');
        CRUD::setEntityNameStrings('noticia', 'noticias');
    }

  
    protected function setupListOperation()
    {
        $this->crud->addColumn([
            'name' => 'created_at',
            'label' => 'Fecha',
            'type'  => 'text',
        ]);
        $this->crud->addColumn([
            'name' => 'image',
            'label' => 'Imagen',
            'type'  => 'image',
        ]);
        $this->crud->addColumn([
            'name' => 'titulo',
            'label' => 'Titulo',
            'type'  => 'text',
        ]);
        $this->crud->addColumn([
            'name' => 'titulo',
            'label' => 'Titulo',
            'type'  => 'text',
        ]);
        $this->crud->addColumn([
            'name' => 'activo',
            'type' => 'check',
            'label' => 'Activo',
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
                'name' => 'descripcion',
                'label' => 'Descripcion',
                'type' => 'ckeditor',
                'limint' => -1,
            ],
            [
                'name' => 'image',
                'label' => 'Imagen',
                'type' => 'image',
            ],
            [
                'name' => 'slug',
                'label' => '',
                'type' => 'hidden',
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
        CRUD::setValidation(NoticiaRequest::class);

        $this->basicFields();

      
    }
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
