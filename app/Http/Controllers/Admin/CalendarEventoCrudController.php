<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CalendarEventoRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class CalendarEventoCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class CalendarEventoCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     * 
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\CalendarEvento::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/calendarevento');
        CRUD::setEntityNameStrings('evento', 'Calendario eventos');
    }
    protected function setupListOperation()
    {
        $this->crud->addColumn([
            'name' => 'url',
            'label' => 'Imagen',
            'type'  => 'image',
        ]);
        $this->crud->addColumn([
            'name' => 'titulo',
            'label' => 'Titulo',
            'type'  => 'text',
        ]);
        $this->crud->addColumn([
            'name' => 'data_inicio',
            'label' => 'Data inicio',
            'type'  => 'date',
        ]);
        $this->crud->addColumn([
            'name' => 'data_final',
            'label' => 'Data final',
            'type'  => 'date',
        ]);
        $this->crud->addColumn([
            'name' => 'active',
            'label' => 'Activado',
            'type'  => 'text',
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
                'name' => 'data_inicio',
                'label' => 'Data inicio',
                'type' => 'datetime',
            ],
            [
                'name' => 'data_final',
                'label' => 'Data final',
                'type' => 'datetime',
            ],
            [
                'name' => 'url',
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
        CRUD::setValidation(CalendarEventoRequest::class);

        $this->basicFields();
    }
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
