@extends('main')
@section('content')
@if (session()->has('success'))
<div class="alert alert-success col-lg-10" role="alert">
    {{ session('success') }}
</div>
@elseif(session()->has('error'))
<div class="alert alert-danger col-lg-10" role="alert">
    {{ session('error') }}
</div>
@endif
<div class="card mt-3 col-4">
    <div class="card-header">
        Login
    </div>
    <form action="/login" method="post">
        @csrf
    <div class="card-body">
            <div class="mb-3">
                <label for="">Email</label>
                <input type="text" class="form-control" name="email">
            </div>
            <div class="mb-3">
                <label for="" class="mb-2">Password</label>
                <input type="password" class="form-control" name="password">
            </div>
        </div>
        <div class="card-footer text-center">
            <button type="submit" class="btn btn-sm btn-primary mb-2">Log In</button><br>
            <a href="/daftar" style="border: none" ><label> Daftar ? .....</label></a>
        </div>
    </form>
</div>
@endsection