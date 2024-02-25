@extends('AdminDashBoard.layouts.app')


@section('title', 'Register Admin')
@section('description', 'Register Admin')

@section('contenido')
<div class="h-full bg-white">
    <div class="h-full">
        <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
            <div class="sm:mx-auto sm:w-full sm:max-w-sm">
              <img class="" 
              src="{{ asset('storage/images/imagen12.svg') }}" title="Logo" alt="Logo">
              <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Registrate en tu cuenta</h2>
            </div>
            <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
              <form class="space-y-6" action="{{ route('registerPost') }}" method="POST" >
                @csrf
                <div>
                  <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Dirección de correo</label>
                  <div class="mt-2">
                    <input id="email" name="email" type="email" autocomplete="email" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                  </div>
                </div>
          
                <div>
                  <div class="flex items-center justify-between">
                    <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Contraseña</label>
                    
                  </div>
                  <div class="mt-2">
                    <input id="password" name="password" type="password" autocomplete="current-password" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                  </div>
                </div>
          
                <div>
                  <button type="submit" class="flex w-full justify-center rounded-md bg-primary-1000 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                    Registrate</button>
                </div>
              </form>
            @if ($errors->any())
            <div class="mt-4">
              <div class="font-medium text-red-600">
                {{ __('Opps! Algo salió mal.') }}
              </div>
              <ul class="mt-3 list-disc list-inside text-sm text-red-600">
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
              @endif
            </div>
        </div>
    </div>
</div>
  
@endsection

