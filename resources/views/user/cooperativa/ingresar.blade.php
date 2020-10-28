@extends('user/plantilla')
@section('contenido-dinamico')


 <!-- Start About area -->
 <div id="about" class="about-area area-padding">
    <div class="container">
        <div class="row">


            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="section-headline text-center">
                    <h2 style="margin-top: 50px;">Ingresa Cooperativa</h2>
                </div>


                <div class="py-5" style="padding: 0 300px;" >

                <form action="{{url('crear/cooperativa')}}" method="POST" enctype="multipart/form-data">

                    @csrf

                    <div class="form-group">
                        <label for="empresa"><i id="fa-icon" class="fa fa-bus"></i> Empresa</label>
                        <input type="text" class="form-control" id="empresa" name="empresa" required/>
                    </div>


                    <div class="row">
                          <div class="col-md-6">
                            <label for="origen"><i id="fa-icon" class="fa fa-map-marker"></i> Origen</label>
                        <input type="text" class="form-control" id="origen" name="origen" required/>
                          </div>
                          <div class="col-md-6">
                            <label for="destino"><i id="fa-icon" class="fa fa-map-marker"></i> Destino</label>
                        <input type="text" class="form-control" id="destino" name="destino" required/>
                          </div>
                    </div><br>

                    <div class="row">
                        <div class="col-md-6">
                          <label for="tipo"><i id="fa-icon" class="fa fa-font"></i> Tipo</label>
                      <input type="text" class="form-control" id="tipo" name="tipo" value="Especial" required/>
                        </div>
                        <div class="col-md-6">
                          <label for="turno"><i id="fa-icon" class="fa fa-ticket"></i> Turno</label>
                      <input type="text" class="form-control" id="turno" name="turno" value="Normal" required/>
                        </div>
                  </div><br>
                     

                  <div class="row">
                    <div class="col-md-6">
                      <label for="asiento"><i id="fa-icon" class="fa fa-list-ol"></i> Número de Asiento</label>
                  <input type="text" class="form-control" id="asiento" name="asiento" required/>
                    </div>
                    <div class="col-md-6">
                      <label for="numero"><i id="fa-icon" class="fa fa-list-ol"></i> Numero de bus</label>
                  <input  type="text" class="form-control" id="numero" name="numero" required/>
                    </div>
              </div><br>


              <div class="form-group">
                <label for="precio"><i id="fa-icon" class="fa fa-dollar"></i> Precio</label>
                <input  type="text" class="form-control" id="precio" name="precio" required/>
            </div>

              <div class="row">
                <div class="col-md-6">
                    <label for="fecha"><i id="fa-icon" class="fa fa-calendar"></i> Selecciona fecha</label>
                    <input type="date" class="form-control" id="fecha" name="fecha" required/>
                </div>
                <div class="col-md-6">
                  <label for="hora"><i id="fa-icon" class="fa fa-history"></i> Selecciona hora</label>
              <input type="time" class="form-control" id="hora" name="hora" required/>
                </div>
          </div><br>


            <button class="form-btn" type="submit">Registrar cooperativa</button>

                </form>

                </div>





            </div>


        </div>
    </div>
</div>
<!-- End About area -->

    
@endsection