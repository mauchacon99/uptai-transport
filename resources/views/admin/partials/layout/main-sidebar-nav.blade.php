<div class="main-sidebar-nav dark-navigation">
    <div class="nano">
        <div class="nano-content sidebar-nav">
            <div class="card-body border-bottom text-center nav-profile">
                <div class="notify setpos"> <span class="heartbit"></span> <span class="point"></span> </div>
                <img alt="profile" class="margin-b-10  " src="{{ asset('admin/img/avtar-2.png') }}" width="80">
                <p class="lead margin-b-0 toggle-none">
                @if( Auth::check() )
                    {{ auth()->user()->name }}
                @else
                    John Doe
                @endif
                </p>
                <p class="text-muted mv-0 toggle-none"> Bienvenido</p>
            </div>
            <ul class="metisMenu nav flex-column" id="menu">
                <li class="nav-heading"><span>TRABAJO</span></li>
                <li class="nav-item"><a class="nav-link" href=""><i class="fa fa-home"></i> <span class="toggle-none">Dashboard</span></a></li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('carsexit.index')}}" aria-expanded="false"><i class="fa fa-sign-out-alt"></i> <span class="toggle-none"> Salidas </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('cars.index')}}" aria-expanded="false"><i class="fa fa-bus-alt"></i> <span class="toggle-none"> Autobuses </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('drivers.index')}}" aria-expanded="false"><i class="fa fa-group"></i> <span class="toggle-none"> Conductores </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('routes.index')}}" aria-expanded="false"><i class="fa fa-map"></i> <span class="toggle-none"> Rutas </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('address.index')}}" aria-expanded="false"><i class="fa fa-map-marker"></i> <span class="toggle-none">Ciudades </a>
                </li>

                <li class="nav-heading"><span> SEGURIDAD </span></li>
              
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('users.index')}}" aria-expanded="false"><i class="fa fa-user"></i> <span class="toggle-none"> Usuarios </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('bitacoras.index')}}" aria-expanded="false"><i class="fa fa-exchange-alt"></i> <span class="toggle-none"> Actividades </a>
                </li>
            </ul>
        </div>
    </div>
</div>
