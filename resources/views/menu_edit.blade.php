@extends('layout')
@section('content')
    <hr>

    <div class="row justify-content-center font-monospace">
        <div class="col-3">
            <h2 class="modal-header">Создание позиции в меню</h2>
        </div>
        <div class="col-9 ">
            <form class="form-control justify-content-center align-items-center flex-column w-25" enctype="multipart/form-data" method="post" action={{url('menu/update') . '/' . $menu->id}}>
                @csrf
                <div class="mb-3 col-form-label">
                    <label class="form-label">category</label>
                    <input class="input-group-text" type="text" name="category" value="{{old('category')}}"/>
                    @error('category')
                    <div class="wrong">{{$message}}</div>
                    @enderror
                </div>


                <div class="mb-3 col-form-label">
                    <label class="form-label">name</label>
                    <input class="input-group-text" type="text" name="name" value="{{old('name')}}"/>
                    @error('name')
                    <div class="wrong">{{$message}}</div>
                    @enderror
                </div>

                <div class="mb-3 col-form-label">
                    <label class="form-label">description</label>
                    <input class="input-group-text" type="text" name="description" value="{{old('description')}}"/>
                    @error('description')
                    <div class="wrong">{{$message}}</div>
                    @enderror
                </div>

                <div class="mb-3 col-form-label">
                    <label class="form-label">price</label>
                    <input class="input-group-text" type="text" name="price" value="{{old('price')}}"/>
                    @error('price')
                    <div class="wrong">{{$message}}</div>
                    @enderror
                </div>

                <div class="mb-3 col-form-label">
                    <label class="form-label">allergens</label>
                    <input class="input-group-text" type="text" name="allergens" value="{{old('allergens')}}"/>
                    @error('allergens')
                    <div class="wrong">{{$message}}</div>
                    @enderror
                </div>

                <div class="mb-3 col-form-label">
                    <input class="fa-file-image-o" type="file" accept="image/*" name="image" value="{{old('image')}}" alt="wrong image"/>
                    @error('image')
                    <div class="wrong">{{$message}}</div>
                    @enderror
                </div>
                <input type="submit" class="btn btn-primary">

            </form>
        </div>
    </div>

@endsection
