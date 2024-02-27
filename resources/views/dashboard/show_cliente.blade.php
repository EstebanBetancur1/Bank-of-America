@extends('dashboard.layouts.app')


@section('title', 'Cliente')


@section('contenido')
    @section('content')
    <form class="w-11/12 mx-auto px-10" action="{{ route('edit_cliente', $user->id) }}" method="POST">
      @csrf
          <div class="border-b border-gray-900/10 pb-12">
            <div class="flex w-full justify-between items-center">
              <h2 class="text-base font-semibold leading-7 text-gray-900">Información del usuario 
                <span class="text-red-500">{{ $user->{'first-name'} }} {{ $user->{'last-name'} }} </span>
              </h2>
              <button type="button" class="modal-open flex items-center justify-center rounded-md bg-blue-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-blue-500 hover:text-white focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-cashapp" width="25" height="25" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                  <path d="M17.1 8.648a.568 .568 0 0 1 -.761 .011a5.682 5.682 0 0 0 -3.659 -1.34c-1.102 0 -2.205 .363 -2.205 1.374c0 1.023 1.182 1.364 2.546 1.875c2.386 .796 4.363 1.796 4.363 4.137c0 2.545 -1.977 4.295 -5.204 4.488l-.295 1.364a.557 .557 0 0 1 -.546 .443h-2.034l-.102 -.011a.568 .568 0 0 1 -.432 -.67l.318 -1.444a7.432 7.432 0 0 1 -3.273 -1.784v-.011a.545 .545 0 0 1 0 -.773l1.137 -1.102c.214 -.2 .547 -.2 .761 0a5.495 5.495 0 0 0 3.852 1.5c1.478 0 2.466 -.625 2.466 -1.614c0 -.989 -1 -1.25 -2.886 -1.954c-2 -.716 -3.898 -1.728 -3.898 -4.091c0 -2.75 2.284 -4.091 4.989 -4.216l.284 -1.398a.545 .545 0 0 1 .545 -.432h2.023l.114 .012a.544 .544 0 0 1 .42 .647l-.307 1.557a8.528 8.528 0 0 1 2.818 1.58l.023 .022c.216 .228 .216 .569 0 .773l-1.057 1.057z" />
                </svg>
                <span>Consignar</span>
              </button>
              
            
            </div>
      
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
                  <input readonly required type="text" name="UserAccount" id="UserAccount" autocomplete="UserAccount" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" value="{{ $user->UserAccount }}">
                </div>
              </div>

              <div class="sm:col-span-2">
                <label for="NumberDocument" class="block text-sm font-medium leading-6 text-gray-900">Número de documento</label>
                <div class="mt-2">
                  <input readonly required type="text" name="NumberDocument" id="NumberDocument" autocomplete="NumberDocument" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" value="{{ $user->NumberDocument }}">
                </div>
              </div>

            </div>
            <div class="mt-6 flex items-center justify-end gap-x-6">
              {{-- <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button> --}}
              <button type="submit" class="rounded-md bg-green-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-green-500 hover:text-black focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
               Actualizar usuario
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
              {{ session('success') }}
              </div>
          @endif
          @if(session('error'))
          <div class="mt-4">
              <div class="font-medium text-red-600">
                 <h3 class="text-red-500">Opps! Algo salió mal.</h3>
                {{ session('error') }}
              </div>
          @endif
          </div>
        </div>
    </form>


    <form class="modal-overlay fixed z-[100] inset-0 overflow-y-auto hidden" action="{{ route('consignar', $user->id) }}" method="POST">
      @csrf
      <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
        <div class="modal-content inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
          <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
            <div class="sm:flex sm:items-start">
              <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-headline">
                  Consignar dinero
                </h3>
                <div class="flex justify-center items-center mt-2 gap-4">
                  <div class="mt-2">
                    <p class="text-sm text-gray-500">
                      Ingrese el monto a consignar
                    </p>
                  </div>
                  <div class="mt-2">
                    <input type="number" name="consignar" id="consignar" autocomplete="consignar" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
            <button type="submit" class="w-full inline-flex justify-center rounded-md border border-transparent bg-green-600 px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:ml-3 sm:w-auto sm:text-sm">
              Consignar
            </button>
            <button type="button" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 bg-white px-4 py-2 text-base font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm modal-close">
              Cancelar
            </button>
          </div>
        </div>
      </div>
    </form>

    @endsection
@endsection

@section('scripts')
<script>
document.querySelector('.modal-open').addEventListener('click', function() {
  toggleModal();
});

const overlay = document.querySelector('.modal-overlay');
if (overlay) {
  overlay.addEventListener('click', function(event) {
    if (event.target.classList.contains('modal-overlay')) {
      toggleModal();
    }
  });
}

document.querySelectorAll('.modal-close').forEach(button => {
  button.addEventListener('click', toggleModal);
});

document.onkeydown = function(evt) {
  evt = evt || window.event;
  var isEscape = evt.key === "Escape" || evt.key === "Esc";
  if (isEscape && document.body.classList.contains('modal-active')) {
    toggleModal();
  }
};

function toggleModal() {
  const body = document.querySelector('body');
  const overlay = document.querySelector('.modal-overlay');
  overlay.classList.toggle('hidden');
  body.classList.toggle('modal-active');
}

</script>
@endsection
