<div class="flex justify-between p-5  bg-white">
   
    <nav class="flex justify-between gap-3  menu-toggle">
        <div id="hamburger" class="  hamburger-lines cursor-pointer flex flex-col items-center justify-center ">
            <div class="bg-slate-500 h-[3px] w-6 mb-[3px]"></div>
            <div class="bg-slate-500 h-[3px] w-6 mb-[3px]"></div>
            <div class="bg-slate-500 h-[3px] w-6 mb-[3px]"></div>
            <p class="text-xs">Menu</p>
        </div> 
    </nav>
    
    <div class="flex  gap-5">
    <a href="{{ route('home') }}">
        <img class="w-[42px]" src="{{ asset('storage/images/logomin.svg') }}" alt="">
    </a>
        <a class="flex  flex-col items-center" href="{{ route('home') }}"><img class="w-[24px]" src="{{ asset('storage/images/inbox.svg') }}" alt=""><p class="text-xs">inbox</p></a>
        <a class="flex  flex-col items-center" href="{{ route('home') }}"><img class="w-[24px]" src="{{ asset('storage/images/carrito.svg') }}" alt=""><p class="text-xs">products</p></a>
        <a class="flex  flex-col items-center" href="{{ route('home') }}"><img class="w-[24px]" src="{{ asset('storage/images/login.svg') }}" alt=""><p class="text-xs">Sigh out</p></a>
            
        

    </div>
</div>

<div class="navigation flex-col justify-center">
    <div class="flex justify-between items-center  py-1 px-3 bg-[#f2f2f2] border border-y-[#aeaeae]  border-solid">
        <input class=" rounded-md h-12 focus:bg-[#eff5ff] focus:border-secondary cursor-pointer outline-none border border-[#262626] border-solid text-xl w-[280px] "type="password " id="input" name="">
        <button class="  bg-white text-[#012169] rounded-full  font-semibold text-xl px-6 py-2 border border-[#012169] border-solid ">Search
        </button>
    </div>
    <ul class=" grid gap-2 justify-center py-5 text-lg bg-[#f2f2f2]   " >
        <li><a href="#">Enroll</a></li>
        <li><a href="#">Schedule an appointment</a></li>
        <li><a href="#">Get the app</a></li>
        <li><a href="#">help</a></li>
        <li><a href="#">Find a Location</a></li>
        <li><a href="#">Contact us</a></li>
        <li><a href="#"> Privacy & Segurity</a></li>
        <li><a href="#">Small bussines</a></li>
        <li><a href="#">Wealth Management</a></li>
        <li><a href="#"></a>Businesses & Intitutions</li>
        <li><a href="#"></a>Need help with home loan payments</li>
        <li class="flex"><a href="#"></a> <img class="w-[24px]" src="{{ asset('storage/images/mini-logo.svg') }}" alt=""> About Us</li>
        <li><a href="#">En español</a></li>
    </ul>
</div>
   

<div class=" bg-white border-b border-gray-400 shadow-xl flex">
    <a id="tabAccounts" class="tab text-xl w-[200px] flex justify-center cursor-pointer border-b  hover:border-red-600 hover:text-red-600" href="{{ route('accounts') }}">
      <p>Accounts</p>
    </a>
    <a id="tabDashboard" class="tab text-xl w-[200px] flex justify-center cursor-pointer border-b  hover:border-red-600 hover:text-red-600" href="{{ route('internalclient') }}">
      <p>Dashboard</p>
    </a>    
</div>
  
  
