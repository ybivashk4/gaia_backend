
    @error('email')
    <div class="alert alert-warning">{{$message}}</div>
    @enderror

    @error('password')
    <div class="alert alert-warning">{{$message}}</div>
    @enderror

    @error('error')
    <div class="alert alert-warning">{{$message}}</div>
    @enderror

    @error('success')
    <div class="alert alert-success">{{$message}}</div>
    @enderror
