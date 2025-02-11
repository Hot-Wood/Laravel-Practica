@extends('layouts.app')
@section('titulo')
Editar
@endsection
@section('content')
<div class="container">
    <center>
    <img src="{{asset('images/Gobierno.png')}}" alt="Gobierno" />
    <h1><font color="#FFFFF"> <font size="100px">Editar Proyecto</font></font></h1>

    <form action="{{ route('projectos.update', $projecto->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="formgroup file">
            <label for="NombreProjecto" class="formlabel">Nombre del Proyecto</label><br>
            <input type="text" class="formfile" id="NombreProjecto" name="NombreProjecto" value="{{ $projecto->NombreProjecto }}" required>
        </div>
        <br>
        <div class="formgroup file">
            <label for="fuenteFondos" class="formlabel">Fuente de Fondos</label><br>
            <input type="text" class="formfile" id="fuenteFondos" name="fuenteFondos" value="{{ $projecto->fuenteFondos }}" required>
        </div>
        <br>
        <div class="formgroup file">
            <label for="MontoPlanificado" class="formlabel">Monto Planificado</label><br>
            <input type="number" step="0.01" class="formfile" id="MontoPlanificado" name="MontoPlanificado" value="{{ $projecto->MontoPlanificado }}" required>
        </div>
        <br>
        <div class="formgroup file">
            <label for="MontoPatrocinado" class="formlabel">Monto Patrocinado</label><br>
            <input type="number" step="0.01" class="formfile" id="MontoPatrocinado" name="MontoPatrocinado" value="{{ $projecto->MontoPatrocinado }}" required>
        </div>
        <br>
        <div class="formgroup file">
            <label for="MontoFondosPropios" class="formlabel">Monto Fondos Propios</label><br>
            <input type="number" step="0.01" class="formfile" id="MontoFondosPropios" name="MontoFondosPropios" value="{{ $projecto->MontoFondosPropios }}" required>
        </div>
        <br>
        <button type="submit" class="boton">Actualizar Proyecto</button>
        <a href="{{ route('projectos.index') }}" class="boton1">Cancelar</a>
    </form>
    </center>
</div>
@endsection