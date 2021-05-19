<!-- This file is used to store sidebar items, starting with Backpack\Base 0.9.0 -->
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i>
        {{ trans('backpack::base.dashboard') }}</a></li>
@if (backpack_user()->role->rol == 'Superadmin' || backpack_user()->role->rol == 'Administrador')
    <li class="nav-item nav-dropdown">
        <a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon la la-cogs"></i>Ajustes</a>
        <ul class="nav-dropdown-items">
            <li class="nav-item"><a class="nav-link" href="{{ backpack_url('elfinder') }}"><i
                        class="nav-icon la la-files-o"></i>
                    <span>{{ trans('backpack::crud.file_manager') }}</span></a></li>
        </ul>
    </li>
    <li class="nav-item nav-dropdown">
        <a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon la la-globe"></i>
            Traducciones</a>
        <ul class="nav-dropdown-items">
            <li class='nav-item'><a class='nav-link' href='{{ backpack_url('idioma') }}'><i
                        class='nav-icon la la-flag-checkered'></i> Idiomas</a></li>
            <li class='nav-item'><a class='nav-link' href='{{ backpack_url('transaltion') }}'><i
                        class='nav-icon la la-language'></i> Traducciones</a></li>
        </ul>
    </li>
    <li class="nav-title">Usuarios</li>
    <li class="nav-item nav-dropdown">
        <a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon la la-group"></i>Autentificación</a>
        <ul class="nav-dropdown-items">
            <li class='nav-item'><a class='nav-link' href='{{ backpack_url('user') }}'><i
                        class='nav-icon la la-user'></i> Usuarios</a></li>
            <li class='nav-item'><a class='nav-link' href='{{ backpack_url('role') }}'><i
                        class='nav-icon la la-group'></i> Roles</a></li>
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
    <li class="nav-item nav-dropdown">
        <a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon la la-newspaper-o"></i>Formularios</a>
        <ul class="nav-dropdown-items">
            <li class="nav-title">Grupos de opciones</li>
            <li class='nav-item'><a class='nav-link' href='{{ backpack_url('formgrupoopcione') }}'><i
                        class='nav-icon la la-question'></i> Grupos</a></li>
            <li class='nav-item'><a class='nav-link' href='{{ backpack_url('formgrupoextra') }}'><i
                        class='nav-icon la la-question'></i> Grupos extras</a></li>
        </ul>
    </li>
    <li class='nav-item'><a class='nav-link' href='{{ backpack_url('actividadtipo') }}'><i
                class='nav-icon la la-question'></i> Tipos actividad</a></li>
    <li class='nav-item'><a class='nav-link' href='{{ backpack_url('actividadcategoria') }}'><i
                class='nav-icon la la-list'></i> Categorias</a></li>

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
    <li class="nav-item nav-dropdown">
        <a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon la la-newspaper-o"></i>Tienda articulos</a>
        <ul class="nav-dropdown-items">
            <li class='nav-item'><a class='nav-link' href='{{ backpack_url('shoparticle') }}'><i
                        class='nav-icon la la-question'></i> Articulos</a></li>
            <li class='nav-item'><a class='nav-link' href='{{ backpack_url('shopcategorie') }}'><i
                        class='nav-icon la la-list'></i> Categorias</a></li>
            <li class='nav-item'><a class='nav-link' href='{{ backpack_url('shopbannerimage') }}'><i
                        class='nav-icon la la-question'></i> Carusel Imagenes</a></li>
        </ul>
    </li>
@endif

<li class="nav-item nav-dropdown">
    <a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon la la-newspaper-o"></i>Restaurante</a>
    <ul class="nav-dropdown-items">
        <li class='nav-item'><a class='nav-link' href='{{ backpack_url('restaurantecategoria') }}'><i
                    class='nav-icon la la-list'></i> Categorias</a></li>
        <li class='nav-item'><a class='nav-link' href='{{ backpack_url('restauranteplato') }}'><i
                    class='nav-icon la la-question'></i> Platos menu</a></li>
        <li class='nav-item'><a class='nav-link' href='{{ backpack_url('restauranteimage') }}'><i
                    class='nav-icon la la-question'></i> Galería</a></li>
    </ul>
</li>

<li class="nav-item nav-dropdown">
    <a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon la la-newspaper-o"></i>Web</a>
    <ul class="nav-dropdown-items">
        <li class='nav-item'><a class='nav-link' href='{{ backpack_url('webvista') }}'><i
                    class='nav-icon la la-question'></i> Web Vistas</a></li>

        <li class='nav-item'><a class='nav-link' href='{{ backpack_url('socialnetwork') }}'><i
                    class='nav-icon la la-question'></i> Social Networks</a></li>
    </ul>
</li>
