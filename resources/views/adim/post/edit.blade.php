@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <img class="imagePost" src=" {{url("storage/{$post->image}")}} " alt="{{$post->nome}}  ">     <h4>Editar o Post {{$post->id}}   </h4>
            </div>
            <div class="card-body">
                
                <form action=" {{route('post.update',$post->id)}} " method="post" enctype="multipart/form-data">
                    
                    @method('put')
                    @include('adim.post._partials.form')
                    
                </form>
            </div>
        </div>
    </div>
</div>
    
@endsection
