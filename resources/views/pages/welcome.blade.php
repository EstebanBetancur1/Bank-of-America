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
<div class="flex gap-5 justify-center py-10 ">
   <div>
      <button class=" flex items-center text-xs text-primary-1000 border-2 border-primary-1000 border-solid rounded-[6px] gap-3 px-1 py-1">
         <div class=" w-6">
            <svg focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 44 44"><rect fill="#dc1431" height="44" width="44" rx="7.99" ry="7.99"></rect><path fill="#fff" fill-rule="evenodd" d="M30.25,16.25a67.2,67.2,0,0,0-9-3.12c-1,.2-1.95.42-2.91.67a61.64,61.64,0,0,1,8.86,3.3q1.5-.46,3-.85"></path><path fill="#fff" fill-rule="evenodd" d="M37.68,18.71A78.7,78.7,0,0,0,17.41,28.86q2.31,1.4,4.51,3A82.46,82.46,0,0,1,41.14,20.64q-1.71-1-3.46-1.93"></path><path fill="#fff" fill-rule="evenodd" d="M18.09,17.75c1.12.43,2.22.9,3.32,1.4a73.78,73.78,0,0,0-10,4.91c-1.08-.56-2.18-1.09-3.3-1.58a69.47,69.47,0,0,1,10-4.73"></path><path fill="#fff" fill-rule="evenodd" d="M13.95,16.31A57.84,57.84,0,0,0,3.58,20.69c1,.37,2.09.77,3.12,1.19a59.61,59.61,0,0,1,10.07-4.63q-1.39-.51-2.81-.94"></path><path fill="#fff" fill-rule="evenodd" d="M25.62,17.61a61.77,61.77,0,0,0-8.81-3.39c-1.06.3-2.12.63-3.17,1a61.52,61.52,0,0,1,9.07,3.43c1-.36,1.93-.71,2.91-1"></path><path fill="#fff" fill-rule="evenodd" d="M11.58,25.7q2.16,1,4.25,2.24a74.23,74.23,0,0,1,20.7-9.81q-1.9-.94-3.86-1.76A71.69,71.69,0,0,0,11.58,25.7Z"></path></svg>
         </div>
         Get the free app
      </button>
   </div>
   <div>
      <button class=" flex items-center text-xs text-secondary border-2 border-secondary border-solid rounded-[6px] gap-3 px-1 py-1">

            <svg focusable="false" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 30 29.372"><path d="M0 0v29.372h30V0H0zm24.889 2.248a1.738 1.738 0 1 1-1.739 1.737 1.736 1.736 0 0 1 1.739-1.737zm-20.007 0A1.738 1.738 0 1 1 3.14 3.984a1.737 1.737 0 0 1 1.742-1.736zm2.266 24.406H3.14v-4.007h4.008v4.007zm0-6.129H3.14v-4.008h4.008v4.008zm0-6.126H3.14v-4.008h4.008V14.4zm6.511 12.255H9.654v-4.007h4.006v4.007zm0-6.129H9.654v-4.008h4.006v4.008zm0-6.126H9.654v-4.008h4.006V14.4zm6.513 6.126h-4.007v-4.008h4.007v4.008zm0-6.126h-4.007v-4.008h4.007V14.4zm6.511 6.126h-4.01v-4.008h4.01v4.008zm0-6.126h-4.01v-4.008h4.01V14.4z" fill="currentColor"></path></svg>
         Schedule an appointment
      </button>
   </div>
</div>




 <div class="swiper justify-center items-center flex w-11/12 mx-auto">
   <div class="swiper-wrapper  pb-4">
         <div class="swiper-slide ">  
            <div class="h-[110px] ">
               <img class=" object-cover w-full " src="storage/images/200.jpg" >
            </div>
            <div class="bg-[#F2F2F2] h-[250px] pt-14">
               <div class="p-2 text-sm">
                  <p class=" ">NEW CUSTOMER OFFER</p>
                  <p class="text-2xl text-red-600">Open a checking account</p>
                  <div class="pt-2">
                     <b class="text-sm ">Earn a $200 cash offer</b>
                     <span class=""> when you open a new personal checking account and make qualifying direct deposits.</span>
                  </div>
                  <div class="mt-5 flex gap-1  items-center">
                     <a class="text-secondary underline" href="/">See offer details </a>
                     <img src="storage/images/flecha.svg" alt="">
                  </div>
               </div>
            </div>
         </div>
         <div class="swiper-slide ">  
            <div class="h-[110px] ">
               <img class=" object-cover w-full " src="storage/images/5.webp" >
            </div>
            <div class="bg-[#F2F2F2] h-[250px] pt-14">
               <div class="p-2 text-sm">
                  <p class=" ">NEW CUSTOMER OFFER</p>
                  <p class="text-2xl text-red-600">Open a checking account</p>
                  <div class="pt-2">
                     <b class="text-sm ">Earn a $200 cash offer</b>
                     <span class=""> when you open a new personal checking account and make qualifying direct deposits.</span>
                  </div>
                  <div class="mt-5 flex gap-1  items-center">
                     <a class="text-secondary underline" href="/">See offer details </a>
                     <img src="storage/images/flecha.svg" alt="">
                  </div>
               </div>
            </div>
         </div>
         
         <div class="swiper-slide ">  
            <div class="bg-[#F2F2F2] h-[360px] ">
               <div class=" justify-center flex p-5">
               <img class="  h-[80px] w-[130px] object-fit " src="storage/images/4.svg" >
               </div>
               <div class="py-12 px-2 text-sm">
                  <p class=" ">NEW CUSTOMER OFFER</p>
                  <p class="text-2xl text-red-600">Open a checking account</p>
                  <div class="pt-2">
                     <b class="text-sm ">Earn a $200 cash offer</b>
                     <span class=""> when you open a new personal checking account and make qualifying direct deposits.</span>
                  </div>
                  <div class="mt-5 flex gap-1  items-center">
                     <a class="text-secondary underline" href="/">See offer details </a>
                     <img src="storage/images/flecha.svg" alt="">
                  </div>
               </div>
            </div>
         </div>
         
         <div class="swiper-slide ">  
            <div class="bg-[#F2F2F2] h-[360px] ">
               <div class=" justify-center flex p-5">
               <img class="  h-[80px] w-[130px] object-fit " src="storage/images/3.svg" >
               </div>
               <div class="py-12 px-2 text-sm">
                  <p class=" ">NEW CUSTOMER OFFER</p>
                  <p class="text-2xl text-red-600">Open a checking account</p>
                  <div class="pt-2">
                     <b class="text-sm ">Earn a $200 cash offer</b>
                     <span class=""> when you open a new personal checking account and make qualifying direct deposits.</span>
                  </div>
                  <div class="mt-5 flex gap-1  items-center">
                     <a class="text-secondary underline" href="/">See offer details </a>
                     <img src="storage/images/flecha.svg" alt="">
                  </div>
               </div>
            </div>
         </div>
         
         <div class="swiper-slide ">  
            <div class="bg-[#F2F2F2] h-[360px] ">
               <div class=" justify-center flex p-5">
               <img class="  h-[80px] w-[130px] object-fit " src="storage/images/2.svg" >
               </div>
               <div class="py-12 px-2 text-sm">
                  <p class=" ">NEW CUSTOMER OFFER</p>
                  <p class="text-2xl text-red-600">Open a checking account</p>
                  <div class="pt-2">
                     <b class="text-sm ">Earn a $200 cash offer</b>
                     <span class=""> when you open a new personal checking account and make qualifying direct deposits.</span>
                  </div>
                  <div class="mt-5 flex gap-1  items-center">
                     <a class="text-secondary underline" href="/">See offer details </a>
                     <img src="storage/images/flecha.svg" alt="">
                  </div>
               </div>
            </div>
         </div>
         
         
         <div class="swiper-slide ">  
            <div class="bg-[#F2F2F2] h-[360px] ">
               <div class=" justify-center flex p-5">
               <img class="  h-[80px] w-[258px] object-fit " src="storage/images/1.svg" >
               </div>
               <div class="py-12 px-2 text-sm">
                  <p class=" ">NEW CUSTOMER OFFER</p>
                  <p class="text-2xl text-red-600">Open a checking account</p>
                  <div class="pt-2">
                     <b class="text-sm ">Earn a $200 cash offer</b>
                     <span class=""> when you open a new personal checking account and make qualifying direct deposits.</span>
                  </div>
                  <div class="mt-5 flex gap-1  items-center">
                     <a class="text-secondary underline" href="/">See offer details </a>
                     <img src="storage/images/flecha.svg" alt="">
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="swiper-scrollbar "></div>
   </div>


<div>
   <h1 class="px-10 pt-4 justify-center items-center flex  text-center text-3xl text-gray-700">Your financial goals matter</h1>
</div>

<div class="">
    <div class="swiperdos relative overflow-hidden ">
      <div class="swiper-wrapper ">
         <div class="swiper-slide   p-14"> 
            <div class="h-[110px] ">
               <img class=" object-cover w-full " src="storage/images/familia.jpg" >
            </div>
            
            <div class="bg-[#F2F2F2] h-[250px]  pt-14">
               <div class="py-20 px-2 text-sm flex items-center">
                  <img class="object-cover w-fullh-[40px] w-[40px] " src="storage/images/dollar.svg" >
                  <span class="  text-sm">Open a checking account</span>
                  
               </div>
            </div>
         </div>

         <div class="swiper-slide   p-14"> 
            <div class="h-[110px] ">
               <img class=" object-cover w-full " src="storage/images/senorcelular.jpg" >
            </div>
            <div class="bg-[#F2F2F2] h-[250px]  pt-14">
               <div class="py-20 px-2 text-sm flex items-center">
                  <img class="object-cover w-fullh-[40px] w-[40px] " src="storage/images/cd.svg" >
                  <span class="  text-sm">What is a CD?</span>
                  
               </div>
            </div>
         </div>

         <div class="swiper-slide   p-14 "> 
            <div class="h-[110px] ">
               <img class=" object-cover w-full " src="storage/images/map.svg" >
            </div>
            <div class="bg-[#F2F2F2] h-[250px]  pt-14">
               <div class="py-20 px-2 text-sm flex items-center">
                  <img class="object-cover w-fullh-[40px] w-[40px] " src="storage/images/card.svg" >
                  <span class="  text-sm">4 strategies to pay off credit card debt faster</span>
               </div>
            </div>
         </div>

         <div class="swiper-slide   p-14"> 
            <div class="h-[110px] ">
               <img class=" object-cover w-full " src="storage/images/casaazul.jpg" >
            </div>
            <div class="bg-[#F2F2F2] h-[250px]  pt-14">
               <div class="py-20 px-2 text-sm flex items-center">
                  <img class="object-cover w-fullh-[40px] w-[40px] " src="storage/images/enchufe.svg" >
                  <span class="  text-sm">how to save energy and money at home</span>
               </div>
            </div>
         </div>

      </div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>
   </div>
</div>
  

   <div class="flex flex-col justify-center px-14">
      <p class=" text-gray-700">Explore topics and build your dream financial know-how.</p>
      <button class="bg-secondary p-2 mt-2 text-white text-lg"> Visit better money habits</button>
   </div> 

<h1 class=" pt-12 justify-center items-center flex  text-3xl pb-5 ">Your news and information</h1>  

<div class="relative">
   <div class="absolute z-10 p-10">
      <h2 class="text-2xl text-gray-800 mb-5">Learn how to help reach your financial goals</h2>
      <p class="text-xl text-gray-600 mb-5">Get customized guidance and easy‑to‑use digital tools to help you make the most of your finances.</p>
      <button class="bg-red-600 p-2 mt-2 text-white text-lg"> Explore resources</button> 
   </div>
      <img class="object-cover h-[376px]  " src="storage/images/atras.webp" alt="">
</div>

<div class="h-[370px] overflow-hidden ">
   <div class="relative">
      <div class="absolute z-10 p-10">
         <p class="text-xl text-white mb-5">Get customized guidance and easy‑to‑use digital tools to help you make the most of your finances.</p>
         <button class="border border-white p-2 mt-2 text-white text-lg"> Explore our app</button> 
         <img class=" relative left-[169px] top-[-50px] object-cover" src="storage/images/celular.png" alt="">
      </div>
   </div>   
   <img class="object-cover h-[376px]  " src="storage/images/cosaazul.jpg" alt="">
</div>

<div class=" text-sm justify-center flex flex-col p-3 bg-[#f2f2f2]">
   <p class="text-secondary underline">Online Banking Service Agreement</p>
   <p class="text-gray-600">Investing in securities involves risks, and there is always the potential of losing money when you invest in securities. You should review any planned financial transactions that may have tax or legal implications with your personal tax or legal advisor.<br><br>Securities products are provided by Merrill Lynch, Pierce, Fenner &amp; Smith Incorporated (also referred to as "MLPF&amp;S", or "Merrill"), a registered broker-dealer, registered investment adviser, <a id="footer_sipc2" href="https://www.sipc.org/" class="spa-ui-layer-link spa-fn spa-ui-layer-modal-link" data-options="{&quot;interstitialType&quot;:&quot;leaving-site&quot;,&quot;interstitialBranding&quot;:&quot;default&quot;,&quot;targetAction&quot;:&quot;new-tab&quot;}" data-aaclickevent="true">Member SIPC<span class="spa-ada-text ada-hidden">&nbsp;layer</span></a>, and a wholly-owned subsidiary of Bank of America Corporation. MLPF&amp;S makes available certain investment products sponsored, managed, distributed or provided by companies that are affiliates of Bank of America Corporation.<br><br>Bank of America Private Bank is a division of Bank of America, N.A., Member FDIC and a wholly owned subsidiary of Bank of America Corporation. Trust and fiduciary services are provided by Bank of America, N.A. and U.S. Trust Company of Delaware. Both are indirect subsidiaries of Bank of America Corporation.<br><br>Insurance Products are offered through Merrill Lynch Life Agency Inc. (MLLA) and/or Banc of America Insurance Services, Inc., both of which are licensed insurance agencies and wholly-owned subsidiaries of Bank of America Corporation.<br><br>Banking, credit card, automobile loans, mortgage and home equity products are provided by Bank of America, N.A. and affiliated banks, Members FDIC and wholly owned subsidiaries of Bank of America Corporation. Credit and collateral are subject to approval. Terms and conditions apply. This is not a commitment to lend. Programs, rates, terms and conditions are subject to change without notice.</p>
   <img class="  object-cover" src="storage/images/rows.jpg" alt="">
</div>

<footer class=" mt-14 bg-[#012169] ">
   
      <div class="text-sm flex gap-5 P-5 justify-center">
         <ul class="text-xs flex text-white gap-2">
            <li class="">location</li>
            <li class="">|</li>
            <li class="">contact us</li>
            <li class="">|</li>
            <li class="">help and suport</li>
         </ul>
      </div>
      <div class="text-sm flex gap-5 P-5 justify-center">
         <ul class="text-xs flex text-white gap-2">
            <li class="">Browse with specialist</li>
            <li class="">|</li>
            <li class="">accesiblr banking</li>
            <li class="">|</li>
            <li class="">privacity</li>
         </ul>
      </div>
      <div class="text-sm flex gap-5 P-5 justify-center">
         <ul class="text-xs flex text-white gap-2">
            <li class="">Children´s privacity</li>
            <li class="">|</li>
            <li class="">Segurity</li>
         </ul>
      </div>
      <div class="text-sm flex gap-5 P-5 justify-center">
         <ul class="text-xs flex text-white gap-2">
            <li class="">Online banking servicr Agreement</li>
            <li class="">|</li>
            <li class=" underline-offset-8">adversing Practives</li>
         </ul>
      </div>
      <div class="text-sm flex gap-5 P-5 justify-center">
         <ul class="text-xs flex text-white gap-2">
            <li class="">Your practices choices</li>
            <li class="">|</li>
            <li class="">Site map</li>
            <li class="">|</li>
            <li class="">Careers</li>
         </ul>
      </div>
</footer>




   
@endsection
