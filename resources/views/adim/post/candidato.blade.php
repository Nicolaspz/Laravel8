@extends('layouts.master')
 @section('title')
     cadastrar
 @endsection

 @section('style')
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

 @endsection


@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4> Formulário Candidato </h4>
            </div>
            <div class="card-body">
                <h5 class="card-title" style="text-align: center"></h5>
            </div>

            <div class="card-body">
                <label for="exampleFormControlFile1"> <h5>Dados Pessoas do Candidato</h5></label>
                <form  action=" {{route('candidato.create')}} " method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                      <div class="col-md-6">
                        <div class="col form-group">
                            <label for="exampleFormControlSelect1"> nome completo</label>
                        <input type="text"  name="p_nome" class="form-control" placeholder="primeiro nome">
                      </div>
                    </div>
                    <div class="col-md-3">
                        <div class="col form-group">
                            <label for="exampleFormControlSelect1">Selecione o Género</label>
                            <select class="form-control" name="genero" id="exampleFormControlSelect1">
                                <option value="" >Género</option>
                                <option value="M">M</option>
                                <option value="F">F</option>

                            </select>
                          </div>
                    </div>

                    </div>
                    <br>
                    <div class="row">

                        <div class="col-md-4">
                            <div class="col form-group">
                            <label for="exampleFormControlSelect1">Data de Nascimento</label>
                          <input type="date" name="data" class="form-control" placeholder="ùltimo nome">
                        </div>
                    </div>
                    <div class="col-md-4">

                            <div class="form-group">
                                <label for="exampleFormControlFile1">Último Nível Académico</label>
                                <input type="text" name="nivel_acad" class="form-control" id="exampleFormControlFile1" placeholder="ex.. ensino  médio">

                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="col form-group">
                            <label for="exampleFormControlSelect1">contacto</label>
                            <input type="text" name="contacto" class="form-control" placeholder="telefone">
                          </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <div class="cima" style="position: absolute">

                            </div>
                            <label style="font-size: .9rem; margin-top: 20px; color:rgb(249, 91, 6)" for="exampleFormControlFile1">Carregar CV</label>
                            <input type="file" name="cv" class="form-control" id="exampleFormControlFile1">
                        </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Descrição/Nota</label>
                        <textarea class="form-control" name="desc" id="exampleFormControlTextarea1" rows="3"></textarea>
                      </div>
                </div>

            </div>

            </div>
            <div class="row">
                <div class="col-md-6">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalArea">
                        <i class="now-ui-icons ui-1_simple-add"></i> Cargos
                      </button>
                      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalArea">
                        <i class="now-ui-icons ui-1_simple-add"></i>Experiencia
                      </button>

                </div>

            </div>


            <div class="row">
                <div class="col">
                    <div class="center" style=" display: flex;align-items: center;align-content: center" >

                            <button type="submit" id="save_candidato" style="width: 50%; margin: 0 auto" class="btn btn-primary">
                                salvar
                               </button>

                    </div>

                </div>

            </div>

                  </form>
            </div>


        </div>




        <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalArea">
        <i class="now-ui-icons ui-1_simple-add"></i>
      </button>


      <!-- Modal -->
      <div class="modal fade bd-example-modal-lg" tabindex="-1" id="exampleModalArea" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
             Ab ex, ducimus tempora dicta facilis ullam consequuntur
              praesentium, error dolor labore, cupiditate voluptate iusto
              quibusdam debitis dolore doloremque nam rerum provident.
          </div>
        </div>
      </div>
{{--
  <div class="col-md-6">
    <div class="card">
        <div class="card-header">
            <h4> Lista dos Candidatos </h4>
        </div>
        <div class="card-body">
            <h5 class="card-title" style="text-align: center"></h5>
        </div>

        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th class="text-center">#</th>
                        <th>Nome</th>
                        <th>Área</th>
                        <th>Experiência</th>
                        <th>Área</th>
                        <th class="text-right">Ações</th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <td class="text-center"></td>
                        <td>  </td>
                        <td>  </td>
                        <td>  </td>
                        <td>  </td>
                        <td class="td-actions text-right">
                          <a href="#" >  <button style="margin-bottom: 2.5px"  type="button" rel="tooltip" class="btn btn-info btn-sm btn-icon" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <i class="now-ui-icons design-2_ruler-pencil"></i>
                            </button>

                        <form action="#" method="POST">
                           <a href="">
                             <button style="margin-bottom: 2.5px" type="submit" rel="tooltip" class="btn btn-danger btn-sm btn-icon">
                                <i class="now-ui-icons ui-1_simple-remove"></i>
                            </button>

                       </form>
                     </td>
                    </tr>



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
            <form action=" # " method="post" enctype="multipart/form-data">
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
--}}
</div>
@endsection




@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

@endsection
