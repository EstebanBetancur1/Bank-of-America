@extends('auth.layouts.app')

@section('title', 'Iniciar sesión')

@section('description', 'Inicia sesión en tu cuenta')

@section('contenido')
<div class="flex px-3 gap-5">
    <section class="w-11/12 mx-auto">
        <form action="" class="mt-5">
            <div class="flex flex-col gap-2">
                <label for="email">User ID</label>
                <input  type="text" id="email" name="email" required class="border block">
                <div class="flex items-center gap-2">
                    <input type="checkbox">
                    <span>
                        Save this User ID
                    </span>
                    <div>
                        <img class=" flex-shrink-0" src="{{ asset('storage/images/help-qm-fsd.png') }}" alt="">
                    </div>
                </div>
            </div>

            <div class="flex flex-col gap-2 mt-5">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required class="border-[1px] border-gray-10 block bg-gray-50 ">
                <span>
                    <a class="text-blue-600 text-sm" href="">Forgot your password?</a>
                </span>
            </div>

            <button class="bg-blue-500 text-white font-bold py-1 px-3 rounded mt-5">
                Log In
              </button>
        </form>
    </section>

    <section >
        <h4 class="mb-2">Stay connected with our app</h4>
        <div class="flex gap-3">
            <div>
                <img class=" flex-shrink-0" src="{{ asset('storage/images/mobile_llama.png') }}" alt="">
            </div>
            <div class="flex justify-center items-center">
                <div>
                    <span class="block">Secure, convenient banking anytime</span>
                    <button class="bg-[#dc1431] py-2 px-2 text-white rounded-lg block">
                        Get The App
                    </button>
                </div>
            </div>
        </div>
    </section>
</div>
<footer class=" bg-[#f3efea]">
   
    <span>Segure Area</span>
    <div>
        <span>Privacy & Security</span>
        <span> Security</span>
        <span> Your Privacy Choices</span>
    </div>
    <div>
        Bank of America, N.A. Member FDIC.  <a href="">Equal Housing Lender</a>
        © {{ date('Y') }} Bank of America Corporation.
    </div>
</footer>
@endsection