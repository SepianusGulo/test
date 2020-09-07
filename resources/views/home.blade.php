@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @if(session('sukses'))
                <div class="alert alert-success mt-5" role="alert">
                        {{ session('sukses') }}
                    </div>
                @endif
            </div>
</div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                   <h3 class="text-left">Selamat Datang Kembali {{ auth()->user()->name }} Codingku</h3>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


