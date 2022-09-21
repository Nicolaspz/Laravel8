@extends('layouts.master')
@section('title')
    detalhe
@endsection
@section('content')
<div class="row">
    <div class="card">
        <div class="card-header">
            <h4>Detalhe do Post {{$services->id}} </h4>
        </div>
        <div class="card-body">
           
            <ul>
            
            <li>
              
            </li>
            <li>
            
            <strong>Conteúdo</strong> {{$services->content}}
            </li>
            
            </ul>
            <hr>
            
            <form action=" {{ route('post.destroy', $services->id ) }} " method="post">
                @csrf
                <input type="hidden" name="_method" value="DELETE">
               
            </form>  
            @endsection
        </div>
    </div>
</div>

