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
        Pendaftaran
    </div>
    <form action="/daftar" method="post">
        @csrf
    <div class="card-body">
            <div class="mb-3">
                <label for="">Username</label>
                <input type="text" class="form-control" name="name">
            </div>
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
            <button type="submit" class="btn btn-sm btn-primary mb-2">Daftar</button><br>
            <a href="/login" style="border: none" ><label>Sudah Punya Akun?</label></a>
        </div>
    </form>
</div>
@endsection