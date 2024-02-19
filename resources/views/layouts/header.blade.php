<div class="flex justify-between p-5">
    <a href="{{ route('home') }}">
        <img class="w-[234px]" src="{{ asset('storage/images/imagen12.svg') }}" alt="">
    </a>
    <nav class="flex gap-3 ">
        <span class="text-primary font-semibold">LOGIN</span>
        <div class="bg-primary h-[24px] w-[2px]"></div>
        <div id="hamburger" class="hamburger-lines cursor-pointer flex flex-col items-center justify-center ">
            <div class="bg-primary h-[3px] w-6 mb-[3px]"></div>
            <div class="bg-primary h-[3px] w-6 mb-[3px]"></div>
            <div class="bg-primary h-[3px] w-6 mb-[3px]"></div>
        </div> 

        <ul>
            <li><a href="#">Enroll</a></li>
            <li><a href="#">Schedule an appointment</a></li>
        </ul>
    </nav>
</div>
