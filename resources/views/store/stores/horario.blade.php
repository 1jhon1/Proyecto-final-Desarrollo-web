@extends('layouts.admin')
@section('contenido')
                                                
<h4 class="mt-0 header-title" align="center">Definir Horario</h4>
             
<form action="{{ url('stores/updatehorario')  }}" method="post">
                           @csrf
        
<div class="card-body row">                     
        <div class="col-md-12"> <label for="exampleInputEmail1"><strong>Lunes</strong></label></div>
          <div class="col-md-3">
                        <label for="exampleInputEmail1">Apertura</label>
                        <select class="form-control" name="lunes1" required>
                                <option value="7">7 am</option>
                                <option value="8">8 am</option>
                                <option value="9">9 am</option>
                                <option value="10">10 am</option>
                                <option value="11">11 am</option>
                                <option value="12">12 pm</option>
                                <option value="0">Cerrado</option>

                        </select>
                        </div> 
                        <div class="col-md-3">
                        <label for="exampleInputEmail1">Cierre</label>
                        <select class="form-control" name="lunes2" required>
                                <option value="13">1 pm</option>
                                <option value="14">2 pm</option>
                                <option value="15">3 pm</option>
                                <option value="16">4 pm</option>
                                <option value="17">5 pm</option>
                                <option value="18">6 pm</option>
                                <option value="19">7 pm</option>
                                <option value="20">8 pm</option>
                                <option value="21">9 pm</option>
                                <option value="22">10 pm</option>
                                <option value="23">11 pm</option>
                                <option value="24">12 pm</option>
                                <option value="0">Cerrado</option>
                        </select>
                        </div> 

                        <div class="col-md-12"><br> <label for="exampleInputEmail1"><strong>Martes</strong></label></div>
                        <div class="col-md-3">
                        <label for="exampleInputEmail1">Apertura</label>
                        <select class="form-control" name="martes1" required>
                                <option value="7">7 am</option>
                                <option value="8">8 am</option>
                                <option value="9">9 am</option>
                                <option value="10">10 am</option>
                                <option value="11">11 am</option>
                                <option value="12">12 pm</option>
                                <option value="0">Cerrado</option>

                        </select>
                        </div> 
                        <div class="col-md-3">
                        <label for="exampleInputEmail1">Cierre</label>
                        <select class="form-control" name="martes2" required>
                                <option value="13">1 pm</option>
                                <option value="14">2 pm</option>
                                <option value="15">3 pm</option>
                                <option value="16">4 pm</option>
                                <option value="17">5 pm</option>
                                <option value="18">6 pm</option>
                                <option value="19">7 pm</option>
                                <option value="20">8 pm</option>
                                <option value="21">9 pm</option>
                                <option value="22">10 pm</option>
                                <option value="23">11 pm</option>
                                <option value="24">12 pm</option>
                                <option value="0">Cerrado</option>
                        </select>
                        </div> 

                        <div class="col-md-12"><br> <label for="exampleInputEmail1"><strong>Miercoles</strong></label></div>
                        <div class="col-md-3">
                        <label for="exampleInputEmail1">Apertura</label>
                        <select class="form-control" name="miercoles1" required>
                                <option value="7">7 am</option>
                                <option value="8">8 am</option>
                                <option value="9">9 am</option>
                                <option value="10">10 am</option>
                                <option value="11">11 am</option>
                                <option value="12">12 pm</option>
                                <option value="0">Cerrado</option>
                        </select>
                        </div> 
                        <div class="col-md-3">
                        <label for="exampleInputEmail1">Cierre</label>
                        <select class="form-control" name="miercoles2" required>
                                <option value="13">1 pm</option>
                                <option value="14">2 pm</option>
                                <option value="15">3 pm</option>
                                <option value="16">4 pm</option>
                                <option value="17">5 pm</option>
                                <option value="18">6 pm</option>
                                <option value="19">7 pm</option>
                                <option value="20">8 pm</option>
                                <option value="21">9 pm</option>
                                <option value="22">10 pm</option>
                                <option value="23">11 pm</option>
                                <option value="24">12 pm</option>
                                <option value="0">Cerrado</option>
                        </select>
                        </div> 

                        <div class="col-md-12"><br> <label for="exampleInputEmail1"><strong>Jueves</strong></label></div>
                        <div class="col-md-3">
                        <label for="exampleInputEmail1">Apertura</label>
                        <select class="form-control" name="jueves1" required>
                                <option value="7">7 am</option>
                                <option value="8">8 am</option>
                                <option value="9">9 am</option>
                                <option value="10">10 am</option>
                                <option value="11">11 am</option>
                                <option value="12">12 pm</option>
                                <option value="0">Cerrado</option>
                        </select>
                        </div> 
                        <div class="col-md-3">
                        <label for="exampleInputEmail1">Cierre</label>
                        <select class="form-control" name="jueves2" required>
                                <option value="13">1 pm</option>
                                <option value="14">2 pm</option>
                                <option value="15">3 pm</option>
                                <option value="16">4 pm</option>
                                <option value="17">5 pm</option>
                                <option value="18">6 pm</option>
                                <option value="19">7 pm</option>
                                <option value="20">8 pm</option>
                                <option value="21">9 pm</option>
                                <option value="22">10 pm</option>
                                <option value="23">11 pm</option>
                                <option value="24">12 pm</option>
                                <option value="0">Cerrado</option>
                        </select>
                        </div> 

                        <div class="col-md-12"><br> <label for="exampleInputEmail1"><strong>Viernes</strong></label></div>
                        <div class="col-md-3">
                        <label for="exampleInputEmail1">Apertura</label>
                        <select class="form-control" name="viernes1" required>
                                <option value="7">7 am</option>
                                <option value="8">8 am</option>
                                <option value="9">9 am</option>
                                <option value="10">10 am</option>
                                <option value="11">11 am</option>
                                <option value="12">12 pm</option>
                                <option value="0">Cerrado</option>
                        </select>
                        </div> 
                        <div class="col-md-3">
                        <label for="exampleInputEmail1">Cierre</label>
                        <select class="form-control" name="viernes2" required>
                                <option value="13">1 pm</option>
                                <option value="14">2 pm</option>
                                <option value="15">3 pm</option>
                                <option value="16">4 pm</option>
                                <option value="17">5 pm</option>
                                <option value="18">6 pm</option>
                                <option value="19">7 pm</option>
                                <option value="20">8 pm</option>
                                <option value="21">9 pm</option>
                                <option value="22">10 pm</option>
                                <option value="23">11 pm</option>
                                <option value="24">12 pm</option>
                                <option value="0">Cerrado</option>
                        </select>
                        </div> 

                        <div class="col-md-12"><br> <label for="exampleInputEmail1"><strong>Sabado</strong></label></div>
                        <div class="col-md-3">
                        <label for="exampleInputEmail1">Apertura</label>
                        <select class="form-control" name="sabado1" required>
                                <option value="7">7 am</option>
                                <option value="8">8 am</option>
                                <option value="9">9 am</option>
                                <option value="10">10 am</option>
                                <option value="11">11 am</option>
                                <option value="12">12 pm</option>
                                <option value="0">Cerrado</option>
                        </select>
                        </div> 
                        <div class="col-md-3">
                        <label for="exampleInputEmail1">Cierre</label>
                        <select class="form-control" name="sabado2" required>
                                <option value="13">1 pm</option>
                                <option value="14">2 pm</option>
                                <option value="15">3 pm</option>
                                <option value="16">4 pm</option>
                                <option value="17">5 pm</option>
                                <option value="18">6 pm</option>
                                <option value="19">7 pm</option>
                                <option value="20">8 pm</option>
                                <option value="21">9 pm</option>
                                <option value="22">10 pm</option>
                                <option value="23">11 pm</option>
                                <option value="24">12 pm</option>
                                <option value="0">Cerrado</option>
                        </select>
                        </div> 


                        <div class="col-md-12"><br> <label for="exampleInputEmail1"><strong>Domingo</strong></label></div>
                        <div class="col-md-3">
                        <label for="exampleInputEmail1">Apertura</label>
                        <select class="form-control" name="domingo1" required>
                                <option value="7">7 am</option>
                                <option value="8">8 am</option>
                                <option value="9">9 am</option>
                                <option value="10">10 am</option>
                                <option value="11">11 am</option>
                                <option value="12">12 pm</option>
                                <option value="0">Cerrado</option>
                        </select>
                        </div> 
                        <div class="col-md-3">
                        <label for="exampleInputEmail1">Cierre</label>
                        <select class="form-control" name="domingo2" required>
¡                                <option value="13">1 pm</option>
                                <option value="14">2 pm</option>
                                <option value="15">3 pm</option>
                                <option value="16">4 pm</option>
                                <option value="17">5 pm</option>
                                <option value="18">6 pm</option>
                                <option value="19">7 pm</option>
                                <option value="20">8 pm</option>
                                <option value="21">9 pm</option>
                                <option value="0">Cerrado</option>
                        </select>
                       </div> 

      </div><br><br>

<div align="right"> 

<button type="submit" class="btn  btn-outline-success btn-block">
                                  Editar horario    
                                </button>
</div>
</div>

</form>

@endsection
