@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
        <div class="col-md-12">
            @if(session('sukses'))
                <div class="alert alert-success mt-5" role="alert">
                        {{ session('sukses') }}
                    </div>
                @endif
            </div>
</div>
<div class="row">
            <div class="col-md-12">
                <!-- BASIC TABLE -->
                <div class="panel">
                    <div class="panel-heading">
                    <h2>Selamat Datang Kembali <span class="text-danger">{{ auth()->user()->name }}</span> Diwebsite Kami</h2>
                    </div>
                    <div class="panel-body">

                    </div>
                </div>
                <!-- END BASIC TABLE -->
            </div>
		</div>



@endsection


