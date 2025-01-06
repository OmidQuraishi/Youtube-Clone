<nav class="bg-black py-4 px-3 grid grid-cols-3 justify-between items-center relative">
    <div class="flex gap-5 items-center">
        <i class="text-white hover:bg-accent w-12 h-12 flex items-center justify-center rounded-full desktop-menu-btn "><svg
                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
        </i>
        <a href="/" class="flex items-center gap-1 text-white capitalize font-medium">
            <img src="./img/icons.svg" class="w-10" alt="">
            youtube
        </a>
    </div>
    <!-- mobile -->
    <div class="flex justify-center text-white md:hidden search-btn">
        <i class="w-12 h-12 flex items-center justify-center rounded-full hover:bg-accent">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
            </svg>
        </i>
    </div>
    <div class=" bg-black gap-7 justify-between absolute w-full items-center px-3 mobile-search hidden ">
        <i class="text-white close-search">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
            </svg>
        </i>
        <div class="flex items-center flex-grow bg-accent rounded-full border w-full border-accent overflow-hidden  ">
            <input type="text" class="bg-black py-3 px-4 w-full text-white/50 outline-none" placeholder="Search">
            <button class="text-white py-2 px-6">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                </svg>
            </button>
        </div>
    </div>
    <!-- desktop -->
    <div class="md:flex items-center bg-accent rounded-full border border-accent overflow-hidden hidden ">
        <input type="text" class="bg-black py-3 px-4 w-full text-white/50 outline-none" placeholder="Search">
        <button class="text-white py-2 px-6">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
            </svg>
        </button>
    </div>
    <div class=" place-self-end">
        <ul class="flex gap-5">
            <li
                class="bg-accent text-white flex justify-center items-center gap-2 rounded-full py-2 px-3 hover:bg-hover cursor-pointer">
                <i>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                    </svg>
                </i>
                <span>Create</span>
            </li>
            <li
                class="hover:bg-accent text-white flex gap-2 rounded-full p-2 w-12 h-12 items-center justify-center cursor-pointer">
                <i>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" />
                    </svg>

                </i>
            </li>
            <li class=" md:block gap-2 rounded-full cursor-pointer hidden">
                <img src="../img/guy-fawkes-mask-background-5a-1920x1080.jpg"
                    class=" w-12 h-12 rounded-full object-cover" alt="">
            </li>
        </ul>
    </div>

</nav>