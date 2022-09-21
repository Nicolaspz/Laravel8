@if ($errors->any())

<ul style="list-style: none">
    @foreach ($errors->all() as $error)
        <li> 
            <div class="alert alert-warning">
           <button type="button" aria-hidden="true" class="close">
            <i class="now-ui-icons ui-1_simple-remove"></i>
          </button>
          <span><b> Info - </b>{{$error}} </span>
        </div>
    </li>
    @endforeach
</ul>
    
@endif

@csrf


    <div class="form-group">
      <label for="exampleInputEmail1">Título</label>
   <textarea class="form-control" name="titulo" placeholder="ex: Solon .."></textarea>
     
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1" >Sobre a Empresa</label>
      <textarea class="form-control" name="sobre" placeholder="Ex:uma empresa ..."></textarea>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1"  >Nossa Diferença</label>
        <textarea class="form-control" name="difenca" placeholder="Ex:A nossa diferença consiste em ...."></textarea>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Missão</label>
        <textarea class="form-control" name="missao" placeholder="Ex:A nossa Misaa"></textarea>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Visão</label>
        <textarea class="form-control " name="visao" placeholder="Ex: Visao futurística ...."></textarea>
      </div>
       <div class="form-group">
      <label for="exampleInputPassword1">Valores</label>
      <textarea class="form-control" name="valor" placeholder="Ex:Integridade, Resistência"></textarea>
    </div>
   
  
    <button type="submit" class="btn btn-primary">Actualizar</button>
  