<header class="modal-header  pe-auto me-auto">
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="container-fluid">
            <a href="#" class="navbar-brand">Gaia project</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navBarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" aria-current="page" data-bs-toggle="dropdown" href="{{url('menu')}}"> Меню ресторана</a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="{{url('menu')}}">Открыть меню</a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <a href="{{url('menu/create')}}">Созать позицию</a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" aria-current="page" data-bs-toggle="dropdown" href="{{url('shop')}}"> лавка</a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="{{url('shop')}}">Открыть лавку</a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <a href="{{url('shop/create')}}">Созать позицию</a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" aria-current="page" data-bs-toggle="dropdown" href="{{url('shop')}}"> Залы</a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="{{url('hall')}}">Открыть Залы</a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <a href="{{url('hall/create')}}">Созать зал</a>
                            </li>
                        </ul>
                    </li>

                </ul>
                @if(!Auth::user())
                    <form class="d-flex" method="POST" action="{{url('auth')}}">
                        @csrf
                        <input class="form-control me-2" type="text" placeholder="Логин" name="email" aria-label="Логин" value="{{old('email')}}" >
                        <input class="form-control me-2" type="password" placeholder="Пароль" name="password" aria-label="Пароль" value="{{old('email')}}" >
                        <button class="btn btn-outline-success" type="submit">Войти</button>
                    </form>
                @else
                    <ul class="navbar-nav">
                        <a href="#" class="nav-link active">
                            <i class="fa fa-user">

                            </i>
                            <span>

                            </span>
                            {{Auth::user()->name}}
                        </a>
                        <a href="{{url('logout')}}" class="btn btn-outline-success my-2 my-sm-0">Выйти</a>
                    </ul>

                @endif
            </div>
        </div>
    </nav>
</header>
