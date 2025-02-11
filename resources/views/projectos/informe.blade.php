<center>
<img src="{{$image}}" class="icon" />
<h1> Gobierno de El Salvador </h1>
</center>
<h2>Nombre de su institucion</h2>
<p> fecha: {{now()->format('d/m/y')}} </p>
<table style="width:100%; border-collapse:collapse;" border="1">
     <thead>
          <tr>
               <th>ID</th>
               <th>Nombre Proyecto</th>
               <th>Fuente Fondos</th>
               <th>Monto Planificado</th>
               <th>Monto Patrocinado</th>
               <th>Monto Fondos Propios</th>
          </tr>
     </thead>
     <tbody>
          @foreach ($projectos as $projecto)
                    <tr>
                         <td>{{$projecto->id}}</td>
                         <td>{{$projecto->NombreProjecto}}</td>
                         <td>{{$projecto->fuenteFondos}}</td>
                         <td>{{$projecto->MontoPlanificado}}</td>
                         <td>{{$projecto->MontoPatrocinado}}</td>
                         <td>{{$projecto->MontoFondosPropios}}</td>
                    </tr>
          @endforeach
     </tbody>
</table>
<br>
<center>

</center>