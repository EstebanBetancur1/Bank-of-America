@extends('dashboard.layouts.app')


@section('title', 'Cliente')


@section('contenido')
    @section('content')
    <form class="w-11/12 mx-auto px-10" action="{{ route('create_user_post') }}" method="POST">  
        @csrf
          <div class="border-b border-gray-900/10 pb-12">
            <h2 class="text-base font-semibold leading-7 text-gray-900">Información del usuario 
              <span class="text-red-500">{{ $user->{'first-name'} }} {{ $user->{'last-name'} }} </span>
            </h2>
          
      
            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
              <div class="sm:col-span-3">
                <label for="first-name" class="block text-sm font-medium leading-6 text-gray-900">Primer nombre</label>
                <div class="mt-2">
                  <input required type="text" name="first-name" id="first-name" autocomplete="given-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" value="{{ $user->{'first-name'} }}">
                </div>
              </div>
      
              <div class="sm:col-span-3">
                <label for="last-name" class="block text-sm font-medium leading-6 text-gray-900">Apellido</label>
                <div class="mt-2">
                  <input required type="text" name="last-name" id="last-name" autocomplete="family-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" value="{{ $user->{'last-name'} }}">
                </div>
              </div>
      
              <div class="sm:col-span-3">
                <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Correo electrónico</label>
                <div class="mt-2">
                  <input required id="email" name="email" type="email" autocomplete="email" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" value="{{ $user->email }}">
                </div>
              </div>

              <div class="sm:col-span-3">
                <label for="AccountNumber" class="block text-sm font-medium leading-6 text-gray-900">Número de cuenta</label>
                <div class="mt-2">
                  <input required readonly id="AccountNumber" name="AccountNumber" type="text" autocomplete="email" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" value="{{ $user->AccountNumber }}">
                </div>
              </div>

              <div class="sm:col-span-3">
                <label for="number-phone" class="block text-sm font-medium leading-6 text-gray-900">Número de teléfono</label>
                <div class="mt-2">
                  <input required type="text" name="number-phone" id="number-phone" autocomplete="given-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" value="{{ $user->{'number-phone'} }}">
                </div>
              </div>
              
              <div class="col-span-3">
                <label required for="street-address" class="block text-sm font-medium leading-6 text-gray-900">Dirección</label>
                <div class="mt-2">
                  <input required type="text" name="street-address" id="street-address" autocomplete="street-address" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" value="{{ $user->{'street-address'} }}">
                </div>
              </div>
              
              <div class="sm:col-span-2 sm:col-start-1">
                <label for="city" class="block text-sm font-medium leading-6 text-gray-900">Ciudad</label>
                <div class="mt-2">
                  <input  required type="text" name="city" id="city" autocomplete="address-level2" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" value="{{ $user->city }}">
                </div>
              </div>
              
              <div class="sm:col-span-2">
                <label for="region" class="block text-sm font-medium leading-6 text-gray-900">State / Provincia</label>
                <div class="mt-2">
                  <input required type="text" name="region" id="region" autocomplete="address-level1" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" value="{{ $user->region }}">
                </div>
              </div>
              
              <div class="sm:col-span-2">
                <label for="country" class="block text-sm font-medium leading-6 text-gray-900">Country / Region</label>
                <div class="mt-2">
                  <select id="country" name="country" autocomplete="country-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    <option selected>{{ $user->country }}</option>
                    <option>United States</option>
                    <option>Canada</option>
                    <option>Mexico</option>
                  </select>
                </div>
              </div>

              <div class="sm:col-span-2">
                <label for="AccountAmount" class="block text-sm font-medium leading-6 text-gray-900">Monto de la cuenta</label>
                <div class="mt-2">
                  <input required id="AccountAmount" name="AccountAmount" type="number" autocomplete="email" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" value="{{ $user->AccountAmount }}">
                </div>
              </div>

      
              <div class="sm:col-span-2">
                <label for="postal-code" class="block text-sm font-medium leading-6 text-gray-900">Código postal</label>
                <div class="mt-2">
                  <input required type="text" name="postal-code" id="postal-code" autocomplete="postal-code" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" value="{{ $user->{'postal-code'} }}">
                </div>
              </div>

              <div class="sm:col-span-2">
                <label for="UserAccount" class="block text-sm font-medium leading-6 text-gray-900">Ingreso de usuario</label>
                <div class="mt-2">
                  <input required type="text" name="UserAccount" id="UserAccount" autocomplete="UserAccount" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" value="{{ $user->UserAccount }}">
                </div>
              </div>

              <div class="sm:col-span-2">
                <label for="NumberDocument" class="block text-sm font-medium leading-6 text-gray-900">Número de documento</label>
                <div class="mt-2">
                  <input required type="text" name="NumberDocument" id="NumberDocument" autocomplete="NumberDocument" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" value="{{ $user->NumberDocument }}">
                </div>
              </div>

            </div>
            <div class="mt-6 flex items-center justify-end gap-x-6">
              {{-- <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button> --}}
              <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                Crear usuario
              </button>
              
            </div>
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
          @if(session('success'))
          <div class="mt-4">
              <div class="font-medium text-green-600">
              {{ __('Usuario creado con éxito.') }}
              </div>

          @endif
          </div>
        </div>
    </form>
    @endsection
@endsection
