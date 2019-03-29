@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">Inventario de Equipos Vendidos</div>
                    <div>

                    </div>
                
                        <button type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#myModal">Alta</button>
                 
                    <div class="modal fade" id="myModal" role="dialog">
                            <div class="modal-dialog modal-lg">
                              <div class="modal-content">
                                    <div class="modal-header">
                                            <h4 class="modal-title">Agregar</h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                                <div class="col-6">
                                                        <div class="form-group {{ $errors->has('part') ? 'has-danger' : '' }}">
                                                            <label>Nombre del Cliente:</label>
                                                            <input class="form-control" type="text" name="anticipo" placeholder="nombre de cliente">
                                                            {!! $errors->first('part', '<span class="help-block">:message</span>') !!}
                                                        </div>
                                                </div>
                                                <div class="col-6">
                                                        <div class="form-group {{ $errors->has('descripcion') ? 'has-danger' : '' }}">
                                                            <label>Dirección: </label>
                                                            <input class="form-control" type="text" name="descripcion" placeholder="Dirección">
                                                            {!! $errors->first('descripcion', '<span class="help-block">:message</span>') !!}
                                                        </div>
                                                </div>
                                        </div><div class="row">
                                            <div class="col-6">
                                                    <div class="form-group {{ $errors->has('part') ? 'has-danger' : '' }}">
                                                        <label>Contacto:</label>
                                                        <input class="form-control" type="text" name="anticipo" placeholder="contacto">
                                                        {!! $errors->first('part', '<span class="help-block">:message</span>') !!}
                                                    </div>
                                            </div>
                                            <div class="col-6">
                                                    <div class="form-group {{ $errors->has('descripcion') ? 'has-danger' : '' }}">
                                                        <label>Dirección: </label>
                                                        <input class="form-control" type="text" name="descripcion" placeholder="Dirección">
                                                        {!! $errors->first('descripcion', '<span class="help-block">:message</span>') !!}
                                                    </div>
                                            </div>
                                    </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-block btn-outline-primary" data-dismiss="modal">Guardar</button>
                                    </div>
                              </div>
                            </div>
                          </div>
                <div class="row">
                        <div class="table-responsive">
                                <div class="card-body">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>CLIENTE / CONTACTO</th>
                                                    <th>MARCA</th>
                                                    <th>MODELO</th>
                                                    <th>NO.DE SERIE</th>
                                                    <th>NO. DE FACTURA </th>
                                                    <th>FECHA DE IMPORTACIÓN</th>
                                                    <th>FECHA ENTREGA AL CLIENTE</th>
                                                    <th>TIEMPO DE GARANTIA CON FABRICANTE</th>
                                                    <th>TIEMPO DE GARANTIA CON PERSIS</th>
                                                    <th>OBSERVACIONES</th>

                                                </tr>
                                            </thead>
                                            <tbody>
            
                                            </tbody>
                                        </table>
                                    </div>
                              </div>
                      </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
