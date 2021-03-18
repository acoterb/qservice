<table style="font-size: 14px;">
  <tr>
    <th style="position: absolute;left: 70%; top: 20%"><b>{{$contrato->poliza}}</b></th>
    <th style="position: absolute;left: 15%; top: 25.5%"><b>{{$contrato->contrato->nombres}} {{$contrato->contrato->apellidos}}</b></th>
    <th></th>
  </tr>
  <tr>
    <td style="position: absolute;left: 15%;top: 28%;"><b>{{$direccion->calle}}</b></td>
    <th style="position: absolute;left: 75%;top: 28%"><b>{{$contrato->contrato->telefono}}</b></th>
  </tr>
  <tr>
    <td style="position: absolute;left: 17%;top: 31%"><b>{{$direccion->cruzes}}</b></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td style="position: absolute;left: 15%;top: 33.5%;"><b>{{$direccion->colonia}}</b></td>
  	<th style="position: absolute;left: 48%; top: 33.5%"><b>{{$direccion->ciudad}}</b></th>
    <th style="position: absolute;left: 77.5%; top: 33.5%"><b>{{$direccion->estado}}</b></th>
  </tr>
  <tr>
    <td style="position: absolute;left: 17%;top: 36%;"><b>{{$contrato->observaciones}}</b></td>
    <td style="position: absolute;left: 75%;top: 36%;"><b>{{$contrato->contrato->telefono_emergencia}}</b></td>
  </tr>


  <tr>
    <td style="position: absolute;left: 16%;top: 44%;"><b>{{$vehiculo->marca}}</b></td>
    <td style="position: absolute;left: 37.5%;top: 44%;"><b>{{$vehiculo->submarca}}</b></td>
    <td style="position: absolute;left: 63%;top: 44%;"><b>{{$vehiculo->tipo}}</b></td>
    <td style="position: absolute;left: 83%;top: 44%;"><b>{{$vehiculo->modelo}}</b></td>
  </tr>
  <tr>
    <td style="position: absolute;left: 16%;top: 47%;"><b>{{$vehiculo->servicio}}</b></td>
    <td style="position: absolute;left: 36%;top: 47%;"><b>{{$vehiculo->color}}</b></td>
    <td style="position: absolute;left: 62%;top: 47%;"><b>{{$vehiculo->placas}}</b></td>
    <td style="position: absolute;left: 80%;top: 47%;"><b>{{$vehiculo->estado}}</b></td>
  </tr>
   <tr>
    <td style="position: absolute;left: 18%;top: 50%;"><b>{{$vehiculo->nserie}}</b></td>
    <td style="position: absolute;left: 55%;top: 50%;"><b>{{$vehiculo->nregistro}}</b></td>
    <td style="position: absolute;left: 83%;top: 50%;"><b>{{$vehiculo->nmotor}}</b></td>
    
  </tr>

    <tr>
    <td style="position: absolute;left: 22%;top: 57%;"><b>{{$pagos->costoservicio}}</b></td>
    <td style="position: absolute;left: 56%;top: 57%;"><b>{{date("d/m/Y", strtotime($pagos->pagoinicial))}}</b></td>
  </tr>
  <tr>
    <td style="position: absolute;left: 15%;top: 87%;"><b>{{$contrato->plazo}} AÑOS</b></td>
    <td style="position: absolute;left: 40%;top: 87%;"><b>{{ date("d/m/Y", strtotime($contrato->desde))}}</b></td>
    <td style="position: absolute;left: 75%;top: 87%;"><b>{{ date("d/m/Y", strtotime($contrato->hasta))}}</b></td>
  </tr>
</table>

