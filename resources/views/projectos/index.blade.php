@extends('layouts.app')
@section('titulo')
Inicio
@endsection
@section('content')
<div class="container">
     <center>
          <img src="{{asset('images/Gobierno.png')}}" alt="Gobierno" />
      <h1><font color="#FFFFF"> <font size="100px">Proyectos</font></font></h1>
     <br>
     <style>
          td, th {
               padding: 10px 15px;
               color: #FFF;
               border-bottom: 1px solid #ddd;
               transition-duration: 0.4;
          }
     </style>
     <table class="table-auto border-separate border-spacing-2">
          <thead>
               <tr>
                    <th>ID</th>
                    <th>Nombre Proyecto</th>
                    <th>Fuente Fondos </th>
                    <th> Monto Planificado </th>
                    <th> Monto Patrocinado </th>
                    <th> Monto Fondos Propios </th>
                    <th> Acciones</th>
                    
               </tr>
          </thead>
          <tbody>
               @foreach ($projectos as $projecto)
                    <tr class="trstyle">
                         <td>{{$projecto->id}}</td>
                         <td>{{$projecto->NombreProjecto}}</td>
                         <td>{{$projecto->fuenteFondos}}</td>
                         <td>{{$projecto->MontoPlanificado}}</td>
                         <td>{{$projecto->MontoPatrocinado}}</td>
                         <td>{{$projecto->MontoFondosPropios}}</td>
                         <td>
                              <a href="{{route('projectos.edit', $projecto)}}" class="Editar btn btn-warning">Editar</a>
                              <form action="{{route('projectos.destroy', $projecto)}}" method="POST" style="display:inline;">
                                   @csrf
                                   @method('DELETE')
                                   <button type="submit" class="Delete btn btn danger">Eliminar</button>
                              </form>
                         </td>
                    </tr>
               @endforeach
          </tbody>
     </table>
     </center>
@endsection
