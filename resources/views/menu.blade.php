<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <title>Document</title>
</head>
@include('header')
<hr>
<hr>
<body class="container font-monospace">
<h2 class="modal-header">Меню:</h2>
<div class="container flex-row">
    <h2 class="card-header">Основные блюда</h2>
    <hr>
    <div class="row">
    @foreach($menu as $menu_item)
        @if( !strcmp($menu_item->category,"m"))
        <div style="margin-left: 0.5em; margin-top: 0.5em" class="card mb-4 box-shadow w-25 h-25 me-auto">
            <img class="card-img-top w-75 h-75" src="{{ asset($menu_item->image)}}" alt="{{$menu_item->image}}">
            <div class="card-body">
                <p class="card-text">
                    {{$menu_item->name}}
                </p>
                <p class="card-text w-100">
                    {{$menu_item->description}}
                </p>
                <p class="card-text fs-4">
                    {{$menu_item->price}} P
                </p>
                <p class="card-text">
                    Аллергены {{$menu_item->allergens}}
                </p>
                <div class="d-flex justify-content-between align-content-center">
                    <div class="btn-group">
                        <button class="btn btn-sm btn-outline-secondary" type="button"><a class="link-warning" href="{{url('menu/edit' . '/' . $menu_item->id)}}">edit</a></button>
                        <button class="btn btn-sm btn-outline-secondary" type="button"><a class="link-danger" href="{{url('menu/delete' . '/' . $menu_item->id)}}">delete</a></button>
                    </div>
                </div>
            </div>
        </div>
        @endif
    @endforeach
    </div>

    <h2 class="card-header">Дессерты</h2>
    <hr>
    <div class="row">
        @foreach($menu as $menu_item)
            @if( !strcmp($menu_item->category,"d"))
                <div style="margin-left: 0.5em; margin-top: 0.5em" class="card mb-4 box-shadow w-25 h-25 me-auto">
                    <img class="card-img-top w-50 h-50" src="{{ asset($menu_item->image)}}" alt="{{$menu_item->image}}">
                    <div class="card-body">
                        <p class="card-text">
                            {{$menu_item->name}}
                        </p>
                        <p class="card-text w-100">
                            {{$menu_item->description}}
                        </p>
                        <p class="card-text fs-4">
                            {{$menu_item->price}} P
                        </p>
                        <p class="card-text">
                            Аллергены {{$menu_item->allergens}}
                        </p>
                        <div class="d-flex justify-content-between align-content-center">
                            <div class="btn-group">
                                <button class="btn btn-sm btn-outline-secondary" type="button"><a class="link-warning" href="{{url('menu/edit' . '/' . $menu_item->id)}}">edit</a></button>
                                <button class="btn btn-sm btn-outline-secondary" type="button"><a class="link-danger" href="{{url('menu/delete' . '/' . $menu_item->id)}}">delete</a></button>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
    </div>

    <h2 class="card-header">Кофе</h2>
    <hr>
    <div class="row">
        @foreach($menu as $menu_item)
            @if( !strcmp($menu_item->category,"c"))
                <div style="margin-left: 0.5em; margin-top: 0.5em" class="card mb-4 box-shadow w-25 h-25 me-auto">
                    <img class="card-img-top w-50 h-50" src="{{ asset($menu_item->image)}}" alt="{{$menu_item->image}}">
                    <div class="card-body">
                        <p class="card-text">
                            {{$menu_item->name}}
                        </p>
                        <p class="card-text w-100">
                            {{$menu_item->description}}
                        </p>
                        <p class="card-text fs-4">
                            {{$menu_item->price}} P
                        </p>
                        <p class="card-text">
                            Аллергены {{$menu_item->allergens}}
                        </p>
                        <div class="d-flex justify-content-between align-content-center">
                            <div class="btn-group">
                                <button class="btn btn-sm btn-outline-secondary" type="button"><a class="link-warning" href="{{url('menu/edit' . '/' . $menu_item->id)}}">edit</a></button>
                                <button class="btn btn-sm btn-outline-secondary" type="button"><a class="link-danger" href="{{url('menu/delete' . '/' . $menu_item->id)}}">delete</a></button>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
    </div>






</div>
<footer class="modal-footer align-content-start justify-content-start">
        <a href="{{url('menu/create')}}">create</a>
{{--    <div style="display: flex">--}}
{{--        {{ $menu->links() }}--}}
{{--    </div>--}}
</footer>

</body>
</html>
