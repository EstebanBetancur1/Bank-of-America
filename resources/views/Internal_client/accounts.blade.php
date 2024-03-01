@extends('Internal_client.layouts.app')

@section('title', 'Accounts')

@section('contenido')
<body class="bg-[#f7f7f7]">

    <?php 
        $user = Auth::user();
    ?>
    <div class=" mt-5  bg-white h-[200px] flex flex-col  shadow-lg mx-5 rounded-t-lg  rounded-b-lg border-b">
        <div class="px-5  py-2 border-b border-[#c9c2c2]">
            <h1 class="text-3xl font-semibold  ">Hello, {{ $user->{'first-name'} }}</h1>
            <span class=" text-sm font-semibold"> Roward Basic Member</span>
        </div>
        <div class="border-b border-[#c9c2c2] pt-2 px-5 flex items-center gap-2 ">
            <img class="h-[24px]" src="{{ asset('storage/images/send.png') }}" alt="">
            <div class="mb-2 ">
                <p class="text-lg font-semibold flex gap-1">Bank of America Life Plan</p>
                <p class="text-[#a6a2a2] text-xs font-bold ">Turn your dreams into an action plan</p>
            </div>
        </div>
        <div class="px-5 text-lg font-semibold mb-2 my-1 ">
            <p>My Rewards</p>
        </div>
    </div>
    <div class=" mt-5  bg-white shadow-lg mx-5 rounded-t-lg rounded-b-lg  border-b">
        <div class="px-5 border-b bg-red-700 text-white border-[#c9c2c2] rounded-t-lg py-3">
            <h1 class="text-xl font-semibold  ">Bank of America</h1>
        </div>
        <div class="border-b border-[#c9c2c2] pt-2 mx-5 flex items-center  justify-between ">
            <div class="mb-2">
                <p class="text-[#a6a2a2] text-sm ">My Checking</p>
                <p class="text-2xl font-bold flex gap-1">${{ number_format($user->AccountAmount, 0, '.', ',') }}</p>
            </div>
            <div class="bg-gray-200 rounded-full px-2 "><p class="font-bold text-blue-950">VIEW</p></div>
        </div>
        
        <div class="border-b border-[#c9c2c2] pt-2 px-5 flex  justify-between items-center gap-2  ">
            <div class="mb-2">
                <p class="text-[#a6a2a2] text-sm ">My Cash Rewards Card</p>
                <p class="text-2xl font-bold flex gap-1">$0</p>
            </div>
            <div class="bg-gray-200 rounded-full px-2 "><p class="font-bold text-blue-950">VIEW</p></div>
        </div>
        <div class=" justify-center flex px-5 py-3">
            <h1 class="text-xl font-semibold text-blue-600 ">Bank of America</h1>
        </div>
    </div>
    <div class="p-5">
        <h1 class="pb-3 text-3xl font-semibold ">{{ $user->{'first-name'} }} that is your currently card:</h1>
        <img class="" src="{{ asset('storage/images/roja.webp') }}" alt="">
    </div>
</body>
@endsection