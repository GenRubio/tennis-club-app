<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\NoticiaComentarioRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use Illuminate\Support\Facades\Route;

class NoticiaComentarioCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    protected $noticiaId;

    public function setup()
    {
        CRUD::setModel(\App\Models\NoticiaComentario::class);

        $this->noticiaId = Route::current()->parameter('noticia_id');

        $this->crud->setRoute("admin/noticia/". $this->noticiaId . '/noticia-comentario');

        $this->breadCrumbs();
        $this->listFilter();


        CRUD::setEntityNameStrings('comentario', 'Comentarios');
    }

    protected function breadCrumbs(){
        $this->data['breadcrumbs'] = [
            trans('backpack::crud.admin') => backpack_url('dashboard'),
            'Noticias' => backpack_url('noticia'),
            'Comentarios' => backpack_url("noticia/" . $this->noticiaId . "/noticia-comentario"),
            trans('backpack::crud.list') => false,
        ];
    }

    protected function listFilter(){
        $this->crud->addClause('where', 'noticia_id', $this->noticiaId);
    }

    protected function setupListOperation()
    {
        $this->crud->addColumn([
            'name' => 'created_at',
            'type' => 'data',
            'label' => 'Publicado',
        ]);
        $this->crud->addColumn([
            'name' => 'user',
            'label' => 'Usuario',
            'type' => 'relationship',
            'attribute' => 'user_name',
            'model'     => App\Models\User::class,
        ]);
        $this->crud->addColumn([
            'name' => 'comentario',
            'type' => 'text',
            'label' => 'Comentario',
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
                'label' => 'Usuario',
                'type' => 'select2',
                'name' => 'user_id',
                'model'     => "App\Models\User",
                'attribute' => 'email',
                'options'   => (function ($query) {
                    return $query->where('users.email_validate', 1)
                        ->orderBy('email', 'ASC')->get();
                }),
            ],
            [
                'name' => 'comentario',
                'label' => 'Comentario',
                'type' => 'ckeditor',
                'limint' => -1,
            ],
            [
                'name' => 'noticia_id',
                'label' => '',
                'value' => $this->noticiaId,
                'type' => 'hidden',
            ],
        ]);
    }
    protected function setupCreateOperation()
    {
        CRUD::setValidation(NoticiaComentarioRequest::class);

        $this->basicFields();

    }

    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
