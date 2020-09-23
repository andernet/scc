@extends('layouts.app')


@section('content')
<div class="container">
    <!-- -------------- -->
    <div class="col-lg-3 col-md-3 mb-3 mb-lg-0 mx-auto">
        <div class="card text-center">
            <div class="card-body">
                <h5 class="card-title">Administração</h5>
                <a href="{{ route('home')}}" target=_blank class="btn btn-danger"><i class="fas fa-address-card fa-7x"></i></a>
            </div>
        </div>
    </div>
    <!-- ---------------- -->
@endsection
