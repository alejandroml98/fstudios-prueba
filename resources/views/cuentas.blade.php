@extends('dashboard')
@section('content')
<div>
  <a class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded" href="{{route('cuentas.create')}}">Agregar</a>  
</div>

<table class="table-auto justify-content-center">  
  <thead>
      <tr>
        <th class="w-1/2 px-4 py-2">Cuenta</th>
        <th class="w-1/4 px-4 py-2">Naturaleza</th>
        <th class="w-1/4 px-4 py-2">Saldo</th>
        <th class="w-1/4 px-4 py-2">Acciones</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($cuentas as $cuenta)
      <tr>
        <td class="border px-4 py-2">{{$cuenta->nombre_cuenta}}</td>
        @if ($cuenta->naturaleza == true)
        <td class="border px-4 py-2">Se carga</td>    
        @else
        <td class="border px-4 py-2">Se abona</td>
        @endif
        
        <td class="border px-4 py-2">{{$cuenta->saldo}}</td>
        <td class="border px-4 py-2"><button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit">Editar</button></td>
      </tr>
      @endforeach         
    </tbody>
  </table>
@endsection
