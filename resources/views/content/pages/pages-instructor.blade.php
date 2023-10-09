@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'instructor')

@section('content')

<h4>Formulario</h4>
<img src="img/carrera.gif" alt="logo" height="150" width="350" class="rounded float-end"><div class="mb-3">
<img src="img/logoitca2.png" alt="logo" height="150" width="600" class="rounded border-Dark"> <div class="mb-3">
<div class="col-8" class="form-floating form-floating-outline mb-4">
    <label for="exampleFormControlInput1">nombre</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="nombre" />

  </div>
  <img src="img/img1.jpg" height="300" width="300"  class="rounded float-end" alt="img1.jpg"> 
  
  <div class="col-8" class="form-floating form-floating-outline mb-4">
    
    <label for="exampleFormControlInput1">apellido paterno</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="apellido paterno" />
  </div>
  
  

  <div class="col-8" class="form-floating form-floating-outline mb-4">
    <label for="exampleFormControlInput1">apellido materno</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="apellido materno" />
    
  </div>

  <div class="col-8" class="form-floating form-floating-outline mb-4">
    <label for="exampleFormControlSelect1">sexo</label>
    <select class="form-select" id="exampleFormControlSelect1" aria-label="">
      <option selected>sexo</option>
      <option value="1">mujer</option>
      <option value="2">hombre</option>
      
    </select>
  </div>
  <div class="col-8" class="form-floating form-floating-outline mb-4">
    <label for="exampleFormControlInput1">RFC</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="RFC" />

    </div>

  <div class="col-8" class="form-floating form-floating-outline mb-4">
    <label for="exampleFormControlInput1">Formacion</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Formacion" />
    
    </div>


 

    <br>

    <button type="button" class="btn btn-primary">Registrar</button>


    


    
  
@endsection


