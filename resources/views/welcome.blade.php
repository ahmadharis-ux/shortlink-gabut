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
    <div class="card">
        <div class="card-body">
            Shortlink gaboot
        </div>
        <div class="card-footer">
            <form method="POST" action="/logout">
                @csrf
                <button type="submit" class="btn btn-primary">Logout</button>
            </form>
        </div>
    </div>
@endsection
