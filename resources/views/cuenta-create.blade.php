@extends('dashboard')
@section('content')
<form action="{{route('cuentas.store')}}" method="post">
    @csrf
    <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="cuenta_nombre">
          Nombre de cuenta
        </label>
        <input name="nombre" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="cuenta_nombre" type="text" placeholder="Nombre de cuenta">
      </div>
      <div class="mb-6">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="naturaleza">
          Naturaleza
        </label>
        <div class="relative inline-block w-full text-gray-700">
            <select id="naturaleza"  name="naturaleza" class="w-full h-10 pl-3 pr-6 text-base placeholder-gray-600 border rounded-lg appearance-none focus:shadow-outline" placeholder="Regular input">
              <option>Se carga</option>
              <option>Se abona</option>              
            </select>            
          </div>
      </div>
      <div class="flex items-center justify-between">
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
          Guardar
        </button>        
      </div>
</form>
@endsection
