@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Crear Blog</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">     
                                                                      
                        @if ($errors->any())                                                
                            <div class="alert alert-dark alert-dismissible fade show" role="alert">
                            <strong>¡Revise los campos!</strong>                        
                                @foreach ($errors->all() as $error)                                    
                                    <span class="badge badge-danger">{{ $error }}</span>
                                @endforeach                        
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                        @endif

                    <form action="{{ route('blogs.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                   <label for="titulo">Item</label>
                                   <input type="text" name="titulo" class="form-control">
                                </div>
                                <!-- <div class="form-group">
                                   <label for="titulo">Cantidad</label>
                                   <input class="form-control" type="number" name="cantidad" min="1" max="12" step="1"/>
                                </div> -->
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                    
                                <div class="form-group">
                                <label for="contenido">Cantidad</label>
                                <!-- <textarea class="form-control" name="contenido" style="height: 100px"></textarea> -->
                                <input class="form-control" type="number" name="contenido" min="1" max="1000" step="1"/>
                                <br>
                                </div>
                            
                            <button type="submit" class="btn btn-primary">Guardar</button>                            
                        </div>
                    </form>
                    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
