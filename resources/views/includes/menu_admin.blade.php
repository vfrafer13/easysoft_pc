<!-- MENU -->
<div class="pull-right">
    <nav class="navmenu center">
        <ul>
            <li class="first active"><a href="{{ url('/admin') }}" >Inicio</a></li>
            <li class="sub-menu">
                <a href="{{ url('/admin/services') }}" >Servicios</a>
                <ul>
                    <li><a href="{{ url('/admin/services/create') }}">Nuevo Servicio</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="{{ url('/admin/clients') }}" >Clientes</a>
                <ul>
                    <li><a href="{{ url('/admin/clients/create') }}">Nuevo Cliente</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="{{ url('/admin/slides') }}" >Slides</a>
                <ul>
                    <li><a href="{{ url('/admin/slides/create') }}">Nueva Slide</a></li>
                </ul>
            </li>
        </ul>
    </nav>
</div>
<!-- //MENU -->