@extends('layouts.master')
 @section('title')
     cadastrar
 @endsection

 @section('style')
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

 @endsection


@section('content')
<div class="row">
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <h4> Lista dos serviços </h4>
        </div>
        <div class="card-body">
            <h5 class="card-title" style="text-align: center">Lista dos Serviços</h5>
        </div>
       
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th class="text-center">#</th>
                        <th>Titulo</th>
                        <th>conteúdo</th>
                        <th class="text-right">Ações</th>
                    </tr>
                </thead>
                <tbody>
@foreach ($services as $item)
         <tr>
                        <td class="text-center">{{$item->id}}</td>
                        <td> {{$item->title}} </td>
                        <td> {{$item->content}} </td>
                        
                        <td class="td-actions text-right">
                          <a href="{{route('post.show',$item->id)}}" >  <button style="margin-bottom: 2.5px"  type="button" rel="tooltip" class="btn btn-info btn-sm btn-icon" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <i class="now-ui-icons design-2_ruler-pencil"></i>
                            </button>
                        
                        <form action="{{route('post.destroy',$item->id)}}" method="POST">
                           <a href="">
                             <button style="margin-bottom: 2.5px" type="submit" rel="tooltip" class="btn btn-danger btn-sm btn-icon">
                                <i class="now-ui-icons ui-1_simple-remove"></i>
                            </button>
                       
                       </form>
                     </td>
                    </tr>
                    @endforeach
                    
                    
                </tbody>
            </table>
        </div>
        
        
    </div>
    


   
    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    <i class="now-ui-icons ui-1_simple-add"></i> 
  </button>

  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Novo Serviço </h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action=" {{route('post.store')}} " method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="exampleInputPassword1">Titulo do Serviço</label>
                    <textarea class="form-control" style="font-weight: 200" name="titulo" placeholder="ex:Cartões virtuais pre-pago"></textarea>
                  </div>
                  <div class="form-group">
                      <label for="exampleInputPassword1">Descrição</label>
                      <textarea style="font-weight: 200" class="form-control" name="content" placeholder=" Ex: Cartão pre-pago para ...."></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Imagem</label>
                        <input type="file" name="image" id="image">
                      </div>
                      <button type="submit" class="btn btn-primary" >salvar</button>
                    </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
         
        
        </div>
      </div>
    </div>
  </div>
  
   
</div>
</div>
@endsection




@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  
@endsection