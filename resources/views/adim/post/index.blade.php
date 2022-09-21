@section('style')
<link href="../../../css/style.css" rel="stylesheet">

@endsection
@extends('layouts.master')

@section('content')
<div class="row">
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <h4>Secção Quem Somos</h4>
        </div>
        <div class="card-body">

        <form action="">
            @include('adim.post._partials.form')
        </form>
    
        
        </div>
    </div>
</div>
</div>

@endsection