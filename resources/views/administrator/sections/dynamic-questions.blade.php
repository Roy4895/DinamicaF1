@extends('administrator.layouts.app-admin')

@section('content')
<section class="content">
    <div class="container-fluid">
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                        	<div class="row">
                        		<div class="col-md-6">
                        			<h2>
                                		Preguntas
                            		</h2>
                        		</div>
                        		<div class="col-md-6 text-right">
                        			<button type="button" class="btn btn-success waves-effect" data-toggle="modal" data-target="#addPreguntaModal">Agregar pregunta</button>
                        		</div>
                        	</div>


            
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>Pregunta</th>
                                            <th>Respuesta</th>
                                            <th>Opciones</th>
                                            <th>Fecha</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table_preguntas">
                                        @foreach($preguntas as $item)
                                        <tr id="div_producto_{{$item->id}}">

                                            <td>{{utf8_decode($item->titulo)}}</td>
                                            <td>{{utf8_decode($item->respuesta)}}</td>
                                            <td>
                                                @foreach($item->opcionesPregunta as $v => $itemO)
                                                    <li>{{utf8_decode($itemO->opcion)}}</li>
                                                @endforeach
                                            </td>

                                            <td>{{utf8_decode($item->fecha)}}</td>
                                            <td align="center">
                                         
                                                <div class="col-xs-6 col-sm-3 col-md-6 col-lg-6">
                                                    <a href="#" class="EditarPregunta" data-id="{{$item->id}}" data-toggle="modal" data-target="#EditarPreguntaModal">
                                                        <i class="fa fa-edit fa-2x" title="Editar pregunta"></i>
                                                    </a>
                                                </div>
                                                
                                                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                                    <a href="#" class="eliminarPregunta" data-id="{{$item->id}}">
                                                         <i class="fa fa-trash-o fa-2x" title="Eliminar pregunta"></i> 
                                                    </a>
                                                </div>
                                             
                                            </td>  
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Examples -->
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="addPreguntaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
      	<div class="row">
      		<div class="col-md-8 col-8">
      			<h5 class="modal-title" id="exampleModalLabel">Agregar pregunta</h5>
      		</div>
      		<div class="col-md-4 col-4">
      			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
      		</div>
      	</div>
      </div>
      <div class="modal-body">
        <div class="row">
        	<div class="col-md-12">
                <!-- Basic Validation -->
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="body">
                                <form id="addPreguntaForm" method="POST" enctype="multipart/form-data">


                                    <div class="form-group form-float">
                                    	<label class="form-label">Título</label>
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="titulo" id="titulo">
                                        </div>
                                    </div>

                                    <div class="card" style="padding: 0px 20px;">
                                        <div class="card-header" style="padding: 10px 0px;">
                                            <h4 class="">Opciones</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="form-group form-float">
                                                <label>Escribe las opciones de las preguntas</label>
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="opcion" id="opcion">
                                                </div>
                                            </div>
                                            <button class="btn btn-success waves-effect" id="btnAddOption" type="button">añadir</button>
                                            <hr>
                                            <small>Opciones</small>        
                                            <div class="form-group" id="etiquetasAdd"></div>
                                        </div>
                                    </div>

                                    <div class="form-group form-float">
                                    	<label class="form-label">Respuesta</label>
                                        <div class="form-line">
                                            <input type="text" class="form-control SinLe" name="respuesta" id="respuesta" maxlength="2">
                                        </div>
                                    </div>

                                    <button class="btn btn-primary waves-effect" id="btnAddQuestion" type="submit">Agregar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- #END# Basic Validation -->
        	</div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection