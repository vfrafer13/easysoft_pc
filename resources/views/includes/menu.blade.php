<!-- SEARCH FORM -->
<div id="search-form" class="pull-right">
    <form method="get" action="#">
        <input type="text" name="Search" value="Buscar" onFocus="if (this.value == 'Buscar') this.value = '';" onBlur="if (this.value == '') this.value = 'Buscar';" />
    </form>
</div>
<!-- SEARCH FORM -->
<!-- MENU -->
<div class="pull-right">
    <nav class="navmenu center">
        <ul>
            <li class="first active"><a href="{{ url('/') }}" >Inicio</a></li>
            <li class="sub-menu">
                <a href="{{ url('/servicios') }}" >Servicios</a>
                <ul>
                    @foreach($services as $key => $value)
                    <li><a href="{{ URL::to('servicios/' . $value->id) }}">{{ $value->name }}</a></li>
                    @endforeach
                </ul>
            </li>
            <li><a href="{{ url('/clientes') }}">Clientes</a></li>
            <li><a href="{{ url('/cotizacion') }}">Cotizaciones</a></li>
            <li><a href="{{ url('/contacto') }}">Contacto</a></li>
        </ul>
    </nav>
</div>
<!-- //MENU -->