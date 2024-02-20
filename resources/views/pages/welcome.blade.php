@extends('layouts.app')


@section('title', 'Bienvenido')
@section('description', 'Esta es la descripción de la página de bienvenida')


@section('contenido')
<h1 class=" p-5 text-3xl">Choose the card thas works for you</h1>
<div class="flex">
   <div>
      <img class="w-[200px]" src="{{ asset('storage/images/tarjetas.jpg')}}" alt="">      
   </div>
   <div class="w-[220px] flex  gap-16 mt-10 flex-col text-[18px] font-normal">
      <a href="url" class="text-blue-800 hover:text-blue-800 visited:text-purple-600" target="_blank" rel="noopener noreferrer">
         3% cash back in the category of your choice >
      </a>
      <a href="url" class="text-blue-800 hover:text-blue-800 visited:text-purple-600" target="_blank" rel="noopener noreferrer">
         Unlimited 1.5% cash back on all purchases >
      </a>
      <a href="url" class="text-blue-800 hover:text-blue-800 visited:text-purple-600" target="_blank" rel="noopener noreferrer">
         Unlimited 1.5 points for every $1 spent on all purchases >
      </a>
      <a href="url" class="text-blue-800 hover:text-blue-800 visited:text-purple-600" target="_blank" rel="noopener noreferrer">
         Intro APR offer for 18 billing cycles >
      </a>
   </div>
</div>

<div class="  flex justify-center mt-10">
   <div class=" grid grid-cols-2 gap-x-10 gap-y-5 ">

      <a href="url" class="text-blue-800 flex gap-2 items-center">
         <svg focusable="false" width="28" height="16" viewBox="0 0 41.54 20.77" xmlns="http://www.w3.org/2000/svg"><path d="M3.34,15.26h35V13.1h-35ZM24.58,9.8H38.26V6.55H24.58ZM0,20.77H41.54V0H0Z" fill="#333" fill-rule="evenodd"></path>
         </svg>
         Checking
      </a>
      <a href="url" class="text-blue-800 flex gap-4 items-center">
         <svg focusable="false" width="28"  viewBox="0 0 49.17 25.03" xmlns="http://www.w3.org/2000/svg"><g><path fill="#333" fill-rule="evenodd" d="M49.14,20.13c-1.19.44-5,.23-5,.23l-2.94.06a6,6,0,0,1-11.61.07H17.27a6,6,0,0,1-11.58,0H.12C-.16,19.56,0,10,1.05,8.61,2.26,7,8.26.51,8.26.51,9,0,22.47-.31,25.79.4c1.6.34,10,6.94,10,6.94s10.26,3,11.46,4.17c2.3,2.3,1.85,8.62,1.85,8.62M11.48,15.21A3.84,3.84,0,1,0,15.32,19a3.84,3.84,0,0,0-3.84-3.84m23.94,0A3.84,3.84,0,1,0,39.26,19a3.84,3.84,0,0,0-3.84-3.83"></path></g>
         </svg>
         auto Loans
      </a>
      <a href="url" class="text-blue-800 flex gap-4 items-center">
         <svg focusable="false" width="24"  viewBox="0 0 35.48 41.05" xmlns="http://www.w3.org/2000/svg"><path fill="#333" fill-rule="evenodd" d="M0,25A14.73,14.73,0,0,1,14.85,10.18a17,17,0,0,1,8.65,2.25c3-3.75,8.73-2.81,8.73-2.81L29,16.5a22.06,22.06,0,0,0,6.5,4.34v7.1c-3.53,3.35-6.31,6.73-9.57,8.33L26.4,41,24.12,41l-2.29-3.34a26.83,26.83,0,0,1-6,.61,18.23,18.23,0,0,1-5.13-.73L8.34,41,6.06,41l.55-5.2C2.57,33.3,0,29.29,0,25"></path><path fill="#333" fill-rule="evenodd" d="M14.83,7.49a17.56,17.56,0,0,1,5.28.79,5.74,5.74,0,0,0,.56-2.45A5.85,5.85,0,0,0,9,5.84a5.76,5.76,0,0,0,.61,2.57,15.28,15.28,0,0,1,5.24-.91"></path>
         </svg>
         Savings & CDs
      </a>
      <a href="url" class="text-blue-800 flex gap-4 items-center">
         <svg xmlns="http://www.w3.org/2000/svg" width="28"  viewBox="-4.5 0 50 41"><path fill="#333" d="M36 3.7V1.8C32.9.7 27.3 0 20.9 0S8.9.7 5.8 1.8v1.9L0 12.9c0 3.2 2.6 5.8 5.7 5.8 2.1 0 4-1.2 5.1-3 1.5 2.8 5 3.8 7.8 2.3 1-.5 1.8-1.3 2.3-2.3 1.5 2.8 5 3.8 7.8 2.3 1-.5 1.8-1.3 2.3-2.3 1.5 2.8 5 3.8 7.8 2.3 1.8-1 3-2.9 3-5.1L36 3.7M18.4 30h-.8v1.9h.9c.5 0 .9-.3.9-.8v-.2c.1-.5-.3-.9-.7-.9h-.3z"></path><path fill="#333" d="M37.7 35V20.9c-.6.1-1.1.1-1.7.1-.5 0-1.1 0-1.6-.1v4.4H7.1v-4.4l-1.4.1c-.6 0-1.1 0-1.6-.1V35l-2.8 2v4h39.2v-4l-2.8-2zm-25.3.2c-2 0-2.9-1.2-2.9-3.1s.9-3.1 2.9-3.1 2.8 1.4 2.8 3.1c-.1 1.7-1 3.1-2.8 3.1zm6.2-2.4h-1v2.3h-1.3v-6h2.3c1.4 0 2 .7 2 1.9 0 1-.7 1.8-1.7 1.9-.1-.1-.2-.1-.3-.1zm7.1 2.3h-4.2v-6h4.2v.9h-2.8v1.5h2.4v.8h-2.4v1.8h3l-.2 1zm6.2 0h-1.2l-2-3.2-.6-1v4.2h-1.2v-6h1.3L30 32l.8 1.3v-4.1H32l-.1 5.9z"></path><path fill="#333" d="M12.4 29.9c-1.2 0-1.5 1.1-1.5 2.3s.4 2.2 1.5 2.2 1.4-.9 1.4-2.2-.3-2.3-1.4-2.3z"></path>
         </svg>
         Small bussines
      </a>
      
      
   </div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>


{{-- <div class="container mx-auto">
   <div class="flex flex-wrap">
     <div class="w-full">
       <div class="flex flex-wrap -mx-2">
         <div class="w-1/2 p-2">
            <img class="w-[234px]" src="{{ asset('storage/images/roja.webp')}}" alt=""> 
         </div>
         
           </div>
         </div>
       </div>
     </div>
     <!-- Repetir el bloque para otros elementos... -->
   </div>
 </div>
  --}}
   
@endsection
