<header>
    <h1>Cursos Prog</h1>

    <nav>
        <ul>
            <li><a href="{{route('home')}}" class="{{request()->routeIs('home') ? 'active' : ''}}">Home</a>
                {{--  con esto  verifi en q ruta/url me encuentro actualmnt -> si es así retorna TRUE sino FALSE--}}
                {{--  <?php 
                    @@dump(request()->routeIs('home'));
                ?>  --}}
            </li>
            {{--  el * es para q la class funcione en todos los enlaces de curso  Y me deje el link cursos en rojo--}}
            <li><a href="{{route('cursos.index')}}" class="{{request()->routeIs('cursos.*') ? 'active' : ''}}">Cursos</a>
                {{--  <?php 
                    @@dump(request()->routeIs('cursos.index'));
                ?>  --}}
            </li>
            <li><a href="{{route('nosotros')}}" class="{{request()->routeIs('nosotros') ? 'active' : ''}}"> Nosotros</a>
                {{--   <?php 
                    @@dump(request()->routeIs('nosotros'));
                ?> --}}
            </li>
        </ul>
    </nav>
</header>