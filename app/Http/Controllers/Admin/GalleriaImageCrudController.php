<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\GalleriaImageRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class GalleriaImageCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class GalleriaImageCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;


    public function setup()
    {
        CRUD::setModel(\App\Models\GalleriaImage::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/galleriaimage');
        CRUD::setEntityNameStrings('contenido', 'Multimedia');
    }

    protected function setupListOperation()
    {
        $this->crud->addColumn([
            'name' => 'image',
            'label' => 'Imagen',
            'type'  => 'image',
        ]);
        $this->crud->addColumn([
            'name' => 'url_youtube',
            'label' => 'Video',
            'type'  => 'video',
        ]);
        $this->crud->addColumn([
            'name' => 'carusel',
            'type' => 'btnToggle',
            'label' => 'Carusel',
        ]);
        $this->crud->addColumn([
            'name' => 'destacada',
            'type' => 'btnToggle',
            'label' => 'Destacada',
        ]);
        $this->crud->addColumn([
            'name' => 'activo',
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
                'tab' => 'Imagen',
            ],
            [
                'name' => 'destacada',
                'label' => 'Imagen destacada',
                'type' => 'checkbox',
                'tab' => 'Imagen',
            ],
            [
                'name'  => 'separator',
                'type'  => 'custom_html',
                'value' => '<hr>',
                'tab' => 'Imagen',
            ],
            [
                'name'  => 'p1',
                'type'  => 'custom_html',
                'value' => '
                <h3>Opciones del carusel</h3>
                <p style="color:red">Dejar todos campos vacios en caso de no querer colocar la imagen en el carusel</p>',
                'tab' => 'Imagen',
            ],
            [
                'name' => 'carusel',
                'label' => 'Colocar imagen en carusel',
                'type' => 'checkbox',
                'tab' => 'Imagen',
            ],
            [
                'name' => 'titulo',
                'label' => 'Titulo de la imagen en carusel',
                'type' => 'text',
                'tab' => 'Imagen',
            ],
            [
                'name' => 'descripcion',
                'label' => 'Descripcion de la imagen en carusel',
                'type' => 'text',
                'tab' => 'Imagen',
            ],
            [
                'name'  => 'separator2',
                'type'  => 'custom_html',
                'value' => '<hr>',
                'tab' => 'Imagen',
            ],
            [
                'name' => 'activo',
                'label' => 'Activo',
                'type' => 'checkbox',
                'tab' => 'Imagen',
            ],
          
            [
                'name' => 'activo',
                'label' => 'Activo',
                'type' => 'checkbox',
            ],
            [ 
                'name'  => 'url_youtube',
                'type'  => 'video',
                'label' => 'Url de video YouTube o Vimeo',
                'tab' => 'Video',
            ],

        ]);
    }

    protected function setupCreateOperation()
    {
        CRUD::setValidation(GalleriaImageRequest::class);

        $this->basicFields();
    }
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
