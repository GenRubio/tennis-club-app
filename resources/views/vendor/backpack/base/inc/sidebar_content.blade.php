<!-- This file is used to store sidebar items, starting with Backpack\Base 0.9.0 -->
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i>
        {{ trans('backpack::base.dashboard') }}</a></li>
@if (backpack_user()->role->rol == 'Superadmin' || backpack_user()->role->rol == 'Administrador')

    <li class="nav-title">Usuarios</li>
    <li class="nav-item nav-dropdown">
        <a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon la la-newspaper-o"></i>Autentificación</a>
        <ul class="nav-dropdown-items">
            <li class='nav-item'><a class='nav-link' href='{{ backpack_url('user') }}'><i
                        class='nav-icon la la-question'></i> Usuarios</a></li>
            <li class='nav-item'><a class='nav-link' href='{{ backpack_url('role') }}'><i
                        class='nav-icon la la-question'></i> Roles</a></li>
        </ul>
    </li>
    <li class="nav-item nav-dropdown">
        <a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon la la-newspaper-o"></i>Clientes</a>
        <ul class="nav-dropdown-items">
            <li class='nav-item'><a class='nav-link' href='{{ backpack_url('client') }}'><i
                        class='nav-icon la la-question'></i>
                    Datos cliente</a></li>
            <li class='nav-item'><a class='nav-link' href='{{ backpack_url('clienttipospariente') }}'><i
                        class='nav-icon la la-question'></i> Pariente tipos</a></li>
        </ul>
    </li>
    <li class='nav-item'><a class='nav-link' href='{{ backpack_url('newsletter') }}'><i
                class='nav-icon la la-question'></i> Newsletters</a></li>
    <li class="nav-title">Socios</li>
    <li class='nav-item'><a class='nav-link' href='{{ backpack_url('quotasocio') }}'><i
                class='nav-icon la la-question'></i> Quotas</a></li>
    <li class='nav-item'><a class='nav-link' href='{{ backpack_url('servicio') }}'><i
                class='nav-icon la la-question'></i> Servicios</a></li>

    <li class="nav-title">ACTIVIDADES</li>
    <li class='nav-item'><a class='nav-link' href='{{ backpack_url('actividade') }}'><i
                class='nav-icon la la-question'></i> Actividades</a></li>

    <li class='nav-item'><a class='nav-link' href='{{ backpack_url('actividadtipo') }}'><i
                class='nav-icon la la-question'></i> Tipos actividad</a></li>

    <li class='nav-item'><a class='nav-link' href='{{ backpack_url('actividadformsimple') }}'><i
                class='nav-icon la la-question'></i> Formulario simple</a></li>
    <li class='nav-item'><a class='nav-link' href='{{ backpack_url('actividadformmultiple') }}'><i
                class='nav-icon la la-question'></i> Formulario multiple</a></li>
    <li class='nav-item'><a class='nav-link' href='{{ backpack_url('actividadextra') }}'><i
                class='nav-icon la la-question'></i> Extras</a></li>
@endif

<li class="nav-title">Tenis y Padel Blanes</li>

@if (backpack_user()->role->rol == 'Superadmin' || backpack_user()->role->rol == 'Administrador')
    <li class='nav-item'><a class='nav-link' href='{{ backpack_url('noticia') }}'><i
                class='nav-icon la la-question'></i>
            Noticias</a></li>
    <li class='nav-item'><a class='nav-link' href='{{ backpack_url('instalacione') }}'><i
                class='nav-icon la la-question'></i> Instalaciones</a></li>
    {{-- <li class='nav-item'><a class='nav-link' href='{{ backpack_url('alquilerpista') }}'><i class='nav-icon la la-question'></i> Alquiler pistas</a></li> --}}
    <li class='nav-item'><a class='nav-link' href='{{ backpack_url('galleriaimage') }}'><i
                class='nav-icon la la-question'></i> Multimedia</a></li>
    <li class='nav-item'><a class='nav-link' href='{{ backpack_url('calendarevento') }}'><i
                class='nav-icon la la-question'></i> Calendario eventos</a></li>
    <li class="nav-item nav-dropdown">
        <a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon la la-newspaper-o"></i>Tienda articulos</a>
        <ul class="nav-dropdown-items">
            <li class='nav-item'><a class='nav-link' href='{{ backpack_url('shoparticle') }}'><i
                        class='nav-icon la la-question'></i> Articulos</a></li>
            <li class='nav-item'><a class='nav-link' href='{{ backpack_url('shopcategorie') }}'><i
                        class='nav-icon la la-question'></i> Categorias</a></li>
            <li class='nav-item'><a class='nav-link' href='{{ backpack_url('shopbannerimage') }}'><i
                        class='nav-icon la la-question'></i> Carusel Imagenes</a></li>
        </ul>
    </li>
@endif

<li class="nav-item nav-dropdown">
    <a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon la la-newspaper-o"></i>Restaurante</a>
    <ul class="nav-dropdown-items">
        <li class='nav-item'><a class='nav-link' href='{{ backpack_url('restaurantecategoria') }}'><i
                    class='nav-icon la la-question'></i> Categorias</a></li>
        <li class='nav-item'><a class='nav-link' href='{{ backpack_url('restauranteplato') }}'><i
                    class='nav-icon la la-question'></i> Platos menu</a></li>
        <li class='nav-item'><a class='nav-link' href='{{ backpack_url('restauranteimage') }}'><i
                    class='nav-icon la la-question'></i> Galería</a></li>
    </ul>
</li>