@extends('layouts.master')

@section('content')
    <main>
        <div id="Search"
            class="carousel w-full flex flex-col items-center justify-center lg:mt-24 mt-[91px] lg:px-24 z-20">
            <div class="w-full    max-w-[1440px] relative lg:mb-4">

                <div id="carouselDarkVariant" class="relative " data-te-carousel-init data-te-ride="carousel">
                    <!-- Carousel indicators -->
                    <div class="absolute inset-x-0 bottom-0 z-[2] mx-[15%] mb-4 flex list-none justify-center p-0 "
                        data-te-carousel-indicators>
                        <button data-te-target="#carouselDarkVariant" data-te-slide-to="0" data-te-carousel-active
                            class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-black bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none"
                            aria-current="true" aria-label="Slide 1"></button>
                        <button data-te-target="#carouselDarkVariant"
                            class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-black bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none"
                            data-te-slide-to="1" aria-label="Slide 1"></button>
                        <button data-te-target="#carouselDarkVariant"
                            class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-black bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none"
                            data-te-slide-to="2" aria-label="Slide 1"></button>
                    </div>

                    <!-- Carousel items -->
                    <div
                        class="relative w-full overflow-hidden after:clear-both after:block after:content-[''] lg:rounded-3xl lg:h-[400px]">
                        <!-- First item -->
                        <div class="relative float-left -mr-[100%] w-full !transform-none opacity-0 transition-opacity duration-[600ms] ease-in-out motion-reduce:transition-none"
                            data-te-carousel-fade data-te-carousel-item data-te-carousel-active>
                            <video class=" w-full object-cover  lg:rounded-2xl bg-black shadow-lg" autoplay loop muted
                                playsinline>
                                <source
                                    src="{{ asset('assets/videos/mixkit-man-leaning-over-a-brokendown-car-engine-48743-medium.mp4') }}" />
                            </video>
                            <div
                                class="absolute inset-x-[15%] bottom-5 hidden py-5 text-center text-black md:block backdrop-blur-xl bg-white/30 rounded-xl">
                                <h5 class="text-xl">First slide label</h5>
                                <p>
                                    Some representative placeholder content for the first slide.
                                </p>
                            </div>
                        </div>
                        <!-- Second item -->
                        <div class="relative float-left -mr-[100%] hidden w-full !transform-none opacity-0 transition-opacity duration-[600ms] ease-in-out motion-reduce:transition-none "
                            data-te-carousel-fade data-te-carousel-item>
                            <video class=" w-full object-cover  lg:rounded-2xl bg-black shadow-lg" autoplay loop muted
                                playsinline>
                                <source
                                    src="{{ asset('assets/videos/vecteezy-man-use-mobile-phone-check-insurance-due-to-accident-car-16872788-345_ecC7IN3P.mp4') }}"
                                    type="video/mp4" />
                            </video>
                            <div
                                class="absolute inset-x-[15%] bottom-5 hidden py-5 text-center text-black md:block backdrop-blur-xl bg-white/30 rounded-xl">
                                <h5 class="text-xl">Second slide label</h5>
                                <p>
                                    Some representative placeholder content for the second slide.
                                </p>
                            </div>
                        </div>
                        <!-- Third item -->
                        <div class="relative float-left -mr-[100%] hidden w-full !transform-none opacity-0 transition-opacity duration-[600ms] ease-in-out motion-reduce:transition-none"
                            data-te-carousel-fade data-te-carousel-item>
                            <video class=" w-full object-cover  lg:rounded-2xl bg-black shadow-lg" autoplay loop muted
                                playsinline>
                                <source src="{{ asset('assets/videos/pexels-artem-podrez-8986876 (720p).mp4') }}" />
                            </video>
                            <div class="absolute inset-x-[15%] bottom-5 hidden py-5 text-center text-black md:block">
                                <h5 class="text-xl">Third slide label</h5>
                                <p>
                                    Some representative placeholder content for the third slide.
                                </p>
                            </div>
                        </div>


                    </div>

                    <!-- Carousel controls - prev item-->
                    <button
                        class="absolute bottom-0 left-0 top-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-black opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-black hover:no-underline hover:opacity-90 hover:outline-none focus:text-black focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none"
                        type="button" data-te-target="#carouselDarkVariant" data-te-slide="prev">
                        <span class="inline-block h-8 w-8 dark:grayscale">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="h-6 w-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                            </svg>
                        </span>
                        <span
                            class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]">Previous</span>
                    </button>
                    <!-- Carousel controls - next item-->
                    <button
                        class="absolute bottom-0 right-0 top-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-black opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-black hover:no-underline hover:opacity-90 hover:outline-none focus:text-black focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none"
                        type="button" data-te-target="#carouselDarkVariant" data-te-slide="next">
                        <span class="inline-block h-8 w-8 dark:grayscale">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="h-6 w-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                            </svg>
                        </span>
                        <span
                            class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]">Next</span>
                    </button>
                </div>
            </div>
        </div>

        <!-- <div class="w-full flex flex-col items-center justify-centerpx-24 px-5 relative -mt-5 lg:-mt-10">

                        <div class="search-page-form w-full  max-w-[1440px] relative mb-4 absolute z-[999] ">
                            <form>
                                <div class="flex lg:items-center lg:justify-center w-full">
                                    <div class="relative lg:w-96 w-full ">
                                        <input type="search" id="search-dropdown" style="border-radius: 12px; padding: 1rem ;"
                                            class="block p-2.5 py-5 w-full z-20 text-sm text-gray-900 bg-gray-50  border-l-gray-50 border-l-2 border border-gray-300 focus:ring-blue-500 focus:border-blue-500   bg-blue-500 shadow-lg "
                                            placeholder="Dépannage, Lavage, Batterie, Change Pneu..." required>
                                        <button type="submit"
                                            class="absolute top-0 right-0  text-sm font-medium h-full text-white bg-blue-700 rounded-md px-5  border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 20 20">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                            </svg>
                                            <span class="sr-only">Rechercher</span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div> -->


        <div class="w-full flex flex-col items-center justify-center px-4  mt-4">
            <div class="content-filter w-full  max-w-[1440px] relative mb-4">
                <div class="flex lg:items-center wrap justify-center w-full gap-5">

                    <select data-te-select-init class="rounded-full">
                        <option value="1" class="text-gray-800">Casabalanca</option>
                        <option value="2">Tanger</option>
                        <option value="3">Marrakech</option>
                        <option value="4">Rabat</option>
                        <option value="5">Fes</option>
                        <option value="6">Meknes</option>
                        <option value="7">Salé</option>
                        <option value="8">Kenitra</option>
                    </select>
                </div>



            </div>
        </div>
        <div class="categoties  w-full flex flex-col items-center justify-center px-4  mt-4 ">

            <div
                class="cursor-grab lg:cursor-pointer  filter content-filter w-full lg:justify-center  max-w-[1440px] relative mb-4 flex gap-3 overflow-x-auto">
                <button
                    class="button button_all border-solid border-[1px] focus:bg-yellow-400 border-indigo-600 py-1 px-3 rounded-full hover:bg-yellow-400 hover:text-white"
                    data-filter="all">
                    Tout
                </button>
                <button
                    class="button button_clothing border-solid border-[1px] focus:bg-yellow-400 border-indigo-600 py-1 px-3 rounded-full hover:bg-yellow-400 hover:text-white"
                    data-filter="Dépannage">
                    Dépannage
                </button>
                <button
                    class="button button_decor border-solid border-[1px] focus:bg-yellow-400 border-indigo-600 py-1 px-3 rounded-full hover:bg-yellow-400 hover:text-white"
                    data-filter="Maintenance">
                    Maintenance
                </button>
                <button
                    class="button button_bags border-solid border-[1px] focus:bg-yellow-400 border-indigo-600 py-1 px-3 rounded-full hover:bg-yellow-400 hover:text-white"
                    data-filter="Pneumatique">
                    Pneumatique
                </button>
                <button
                    class="button button_bags border-solid border-[1px] focus:bg-yellow-400 border-indigo-600 py-1 px-3 rounded-full hover:bg-yellow-400 hover:text-white"
                    data-filter="Lavage">
                    Lavage
                </button>
            </div>
        </div>


        <!-- cards service -->


        <section class='px-2 lg:px-4 w-full flex flex-col gap-10 items-center justify-center py-5 px-5 min-h-max '>
            <div
                class="wrapper grid lg:grid-cols-3 gap-8 justify-items-center items-center mx-auto grid-cols-1 md:grid-cols-2 sm:grid-cols-1">

                <div
                    class="card Maintenance h-full shadow-lg rounded-2xl w-full lg:w-96 grid pb-5 bg-white ease-in duration-300 hover:translate-y-[-1rem]">
                    <div class="card-content ">
                        <div class="image-cover">
                            <img src="https://unsplash.it/1051" class="object-cover rounded-t-xl w-full h-48"
                                alt="">
                        </div>
                        <div class="image-profile w-full flex justify-center items-center px-2">
                            <a href="" class=" w-28 -mt-14  ">
                                <img src="https://tecdn.b-cdn.net/img/Photos/Avatars/img%20(9).jpg"
                                    class="rounded-full drop-shadow-2xl w-52 object-cover" alt="">
                            </a>
                        </div>
                        <div class="card-profile-wrapper w-full flex  justify-between items-center px-4 self-center my-4">
                            <a href='/' class="user flex gap-2">
                                <div class="flex flex-col">
                                    <h3 class="text-slate-950 font-bold">Jhon Doe</h3>
                                    <span class="text-slate-600 text-sm"> Entrepise </span>
                                </div>
                            </a>
                            <div class="flex gap-5">
                                <button class="favorite " onclick="favorite()">
                                    <svg id="fav" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="#DC2626" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                    </svg>

                                </button>
                                <a href='/' class="call text-slate-600 text-sm pr-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="var(--vibrant)"
                                        class="w-6 h-6">
                                        <path fill-rule="evenodd"
                                            d="M1.5 4.5a3 3 0 013-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 01-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 006.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 011.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 01-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5z"
                                            clip-rule="evenodd" />
                                    </svg>

                                </a>
                            </div>

                        </div>
                    </div>
                </div>
                <div
                    class="card Maintenance shadow-lg rounded-2xl w-full lg:w-96 grid pb-5 bg-white ease-in duration-300 hover:translate-y-[-1rem]">
                    <div class="card-content ">
                        <div class="image-cover">
                            <img src="https://unsplash.it/1052" class="object-cover rounded-t-xl w-full h-48"
                                alt="">
                        </div>
                        <div class="image-profile w-full flex justify-center items-center px-2">
                            <a href="" class=" w-28 -mt-14  ">
                                <img src="https://tecdn.b-cdn.net/img/Photos/Avatars/img%20(3).jpg"
                                    class="rounded-full drop-shadow-2xl w-52 object-cover" alt="">
                            </a>
                        </div>
                        <div class="card-profile-wrapper w-full flex  justify-between items-center px-4 self-center my-4">
                            <a href='/' class="user flex gap-2">
                                <div class="flex flex-col">
                                    <h3 class="text-slate-950 font-bold">Jhon Doe</h3>
                                    <span class="text-slate-600 text-sm"> Entrepise </span>
                                </div>
                            </a>
                            <div class="flex gap-5">
                                <button class="favorite " onclick="favorite()">
                                    <svg id="fav" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="#DC2626" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                    </svg>

                                </button>
                                <a href='/' class="call text-slate-600 text-sm pr-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="var(--vibrant)"
                                        class="w-6 h-6">
                                        <path fill-rule="evenodd"
                                            d="M1.5 4.5a3 3 0 013-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 01-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 006.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 011.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 01-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5z"
                                            clip-rule="evenodd" />
                                    </svg>

                                </a>
                            </div>

                        </div>
                    </div>
                </div>
                <div
                    class="card Maintenance shadow-lg rounded-2xl w-full lg:w-96 grid pb-5 bg-white ease-in duration-300 hover:translate-y-[-1rem]">
                    <div class="card-content ">
                        <div class="image-cover">
                            <img src="https://unsplash.it/1053" class="object-cover rounded-t-xl w-full h-48"
                                alt="">
                        </div>
                        <div class="image-profile w-full flex justify-center items-center px-2">
                            <a href="" class=" w-28 -mt-14  ">
                                <img src="https://tecdn.b-cdn.net/img/Photos/Avatars/img%20(6).jpg"
                                    class="rounded-full drop-shadow-2xl w-52 object-cover" alt="">
                            </a>
                        </div>
                        <div class="card-profile-wrapper w-full flex  justify-between items-center px-4 self-center my-4">
                            <a href='/' class="user flex gap-2">
                                <div class="flex flex-col">
                                    <h3 class="text-slate-950 font-bold">Jhon Doe</h3>
                                    <span class="text-slate-600 text-sm"> Entrepise </span>
                                </div>
                            </a>
                            <div class="flex gap-5">
                                <button class="favorite " onclick="favorite()">
                                    <svg id="fav" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="#DC2626" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                    </svg>

                                </button>
                                <a href='/' class="call text-slate-600 text-sm pr-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="var(--vibrant)"
                                        class="w-6 h-6">
                                        <path fill-rule="evenodd"
                                            d="M1.5 4.5a3 3 0 013-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 01-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 006.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 011.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 01-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5z"
                                            clip-rule="evenodd" />
                                    </svg>

                                </a>
                            </div>

                        </div>
                    </div>
                </div>
                <div
                    class="card Maintenance card-container bg-white  pt-0 pb-3 rounded-2xl m-2 flex flex-col items-center gap-3 shadow-xl lg:w-96 w-full ease-in duration-300 hover:translate-y-2">
                    <div class="card-cover">
                        <img src="https://unsplash.it/856" alt="card__image"
                            class="card__image  rounded-t-xl w-96 object-cover h-52" width="300px" />
                    </div>
                    <div class="title-service w-full text-center flex text-xl px-4">
                        <h2 class="text-slate-950 font-extrabold">Maintenance</h2>
                    </div>
                    <div class="service px-4">
                        <span class="call text-slate-900 text-sm">Vidange - </span>
                        <span class="call text-slate-900 text-sm">Vidange - </span>
                        <span class="call text-slate-900 text-sm">Vidange - </span>
                        <span class="call text-slate-900 text-sm"> Lavage - </span>
                        <span class="call text-slate-900 text-sm"> Lavage - </span>
                    </div>
                    <div class="card-profile-wrapper w-full flex justify-between items-center px-4 self-center my-2">
                        <a href='/' class="user flex gap-2">
                            <div class="profile-pic">
                                <img src="https://i.pravatar.cc/40?Image=456" alt="user__image"
                                    class="user__image rounded-full " />
                            </div>
                            <div class="flex flex-col">
                                <h3 class="text-slate-950 font-bold">Jhon Doe</h3>
                                <span class="text-slate-600 text-sm"> Entrepisene </span>
                            </div>
                        </a>
                        <a href='/' class="call text-slate-600 text-sm pr-2">
                            <i class='bx bxs-phone' style="font-size: 24px; color:var(--vibrant)"></i>
                        </a>

                    </div>
                </div>
                <div
                    class="card Pneumatique card-container bg-white  pt-0 pb-3 rounded-2xl m-2 flex flex-col items-center gap-3 shadow-xl lg:w-96 w-full ease-in duration-300 hover:translate-y-2">
                    <div class="card-cover">
                        <img src="https://unsplash.it/888" alt="card__image"
                            class="card__image  rounded-t-xl  w-96 object-cover h-52" width="300px" />
                    </div>
                    <div class="title-service w-full text-center flex text-xl px-4">
                        <h2 class="text-slate-950 font-extrabold">Pneumatique</h2>
                    </div>
                    <div class="service px-4">
                        <span class="call text-slate-900 text-sm">Vidange - </span>
                        <span class="call text-slate-900 text-sm">Vidange - </span>
                    </div>
                    <div class="card-profile-wrapper w-full flex justify-between items-center px-4 self-center my-2">
                        <a href='/' class="user flex gap-2">
                            <div class="profile-pic">
                                <img src="https://i.pravatar.cc/40?Image=457" alt="user__image"
                                    class="user__image rounded-full " />
                            </div>
                            <div class="flex flex-col">
                                <h3 class="text-slate-950 font-bold">Jhon Doe</h3>
                                <span class="text-slate-600 text-sm"> Entrepisene </span>
                            </div>
                        </a>
                        <a href='/' class="call text-slate-600 text-sm pr-2">
                            <i class='bx bxs-phone' style="font-size: 24px; color:var(--vibrant)"></i>
                        </a>

                    </div>
                </div>

                <div
                    class="card Lavage card-container bg-white  pt-0 pb-3 rounded-2xl m-2 flex flex-col items-center gap-3 shadow-xl lg:w-96 w-full ease-in duration-300 hover:translate-y-2">
                    <div class="card-cover">
                        <img src="https://unsplash.it/852" alt="card__image"
                            class="card__image  rounded-t-xl  w-96 object-cover h-52" width="300px" />
                    </div>
                    <div class="title-service w-full text-center flex text-xl px-4">
                        <h2 class="text-slate-950 font-extrabold">Lavage</h2>
                    </div>
                    <div class="service px-4">
                        <span class="call text-slate-900 text-sm">Vidange - </span>
                        <span class="call text-slate-900 text-sm">Vidange - </span>
                        <span class="call text-slate-900 text-sm"> Lavage - </span>
                        <span class="call text-slate-900 text-sm"> Lavage - </span>
                    </div>
                    <div class="card-profile-wrapper w-full flex justify-between items-center px-4 self-center my-2">
                        <a href='/' class="user flex gap-2">
                            <div class="profile-pic">
                                <img src="https://i.pravatar.cc/40?Image=480" alt="user__image"
                                    class="user__image rounded-full " />
                            </div>
                            <div class="flex flex-col">
                                <h3 class="text-slate-950 font-bold">Jhon Doe</h3>
                                <span class="text-slate-600 text-sm"> Entrepisene </span>
                            </div>
                        </a>
                        <a href='/' class="call text-slate-600 text-sm pr-2">
                            <i class='bx bxs-phone' style="font-size: 24px; color:var(--vibrant)"></i>
                        </a>

                    </div>
                </div>

                <div
                    class="card Dépannage card-container bg-white  pt-0 pb-3 rounded-2xl m-2 flex flex-col items-center gap-3 shadow-xl lg:w-96 w-full ease-in duration-300 hover:translate-y-2">
                    <div class="card-cover">
                        <img src="https://unsplash.it/854" alt="card__image"
                            class="card__image  rounded-t-xl  w-96 object-cover h-52" width="300px" />
                    </div>
                    <div class="title-service w-full text-center flex text-xl px-4">
                        <h2 class="text-slate-950 font-extrabold">Dépanneur</h2>
                    </div>
                    <div class="service px-4">
                        <span class="call text-slate-900 text-sm">Vidange - </span>
                        <span class="call text-slate-900 text-sm">Vidange - </span>
                        <span class="call text-slate-900 text-sm"> Déppannage -</span>
                    </div>
                    <div class="card-profile-wrapper w-full flex justify-between items-center px-4 self-center my-2">
                        <a href='/' class="user flex gap-2">
                            <div class="profile-pic">
                                <img src="https://i.pravatar.cc/40?Image=461" alt="user__image"
                                    class="user__image rounded-full " />
                            </div>
                            <div class="flex flex-col">
                                <h3 class="text-slate-950 font-bold">Jhon Doe</h3>
                                <span class="text-slate-600 text-sm"> Entrepisene </span>
                            </div>
                        </a>
                        <a href='/' class="call text-slate-600 text-sm pr-2">
                            <i class='bx bxs-phone' style="font-size: 24px; color:var(--vibrant)"></i>
                        </a>

                    </div>
                </div>

                <div class="card Lavage">
                    <video class=" w-96 object-cover h-96 rounded-2xl bg-black shadow-lg" autoplay loop muted playsinline>
                        <source src="../../assets/videos/pexels-tima-miroshnichenko-6872477 (720p).mp4"
                            type="video/mp4" />
                    </video>
                </div>

                <div
                    class="card Dépannage card-container bg-white  pt-0 pb-3 rounded-2xl m-2 flex flex-col items-center gap-3 shadow-xl lg:w-96 w-full ease-in duration-300 hover:translate-y-2">
                    <div class="card-cover">
                        <img src="https://unsplash.it/856" alt="card__image"
                            class="card__image  rounded-t-xl  w-96 object-cover h-52" width="300px" />
                    </div>
                    <div class="title-service w-full text-center flex text-xl px-4">
                        <h2 class="text-slate-950 font-extrabold">Dépanneur</h2>
                    </div>
                    <div class="service px-4">
                        <span class="call text-slate-900 text-sm">Vidange - </span>
                        <span class="call text-slate-900 text-sm">Vidange - </span>
                        <span class="call text-slate-900 text-sm"> Lavage - </span>
                        <span class="call text-slate-900 text-sm"> Lavage - </span>
                        <span class="call text-slate-900 text-sm"> Déppannage -</span>
                    </div>
                    <div class="card-profile-wrapper w-full flex justify-between items-center px-4 self-center my-2">
                        <a href='/' class="user flex gap-2">
                            <div class="profile-pic">
                                <img src="https://i.pravatar.cc/40?Image=453" alt="user__image"
                                    class="user__image rounded-full " />
                            </div>
                            <div class="flex flex-col">
                                <h3 class="text-slate-950 font-bold">Jhon Doe</h3>
                                <span class="text-slate-600 text-sm"> Entrepisene </span>
                            </div>
                        </a>
                        <a href='/' class="call text-slate-600 text-sm pr-2">
                            <i class='bx bxs-phone' style="font-size: 24px; color:var(--vibrant)"></i>
                        </a>

                    </div>
                </div>
                <div
                    class="card Dépannage  card-container bg-white  pt-0 pb-3 rounded-2xl m-2 flex flex-col items-center gap-3 shadow-xl lg:w-96 w-full ease-in duration-300 hover:translate-y-2">
                    <div class="card-cover">
                        <img src="https://unsplash.it/859" alt="card__image"
                            class="card__image  rounded-t-xl  w-96 object-cover h-52" width="300px" />
                    </div>
                    <div class="title-service w-full text-center flex text-xl px-4">
                        <h2 class="text-slate-950 font-extrabold">Dépanneur</h2>
                    </div>
                    <div class="service px-4">
                        <span class="call text-slate-900 text-sm">Vidange - </span>
                        <span class="call text-slate-900 text-sm">Vidange - </span>
                        <span class="call text-slate-900 text-sm"> Lavage - </span>
                        <span class="call text-slate-900 text-sm"> Lavage - </span>
                        <span class="call text-slate-900 text-sm"> Déppannage -</span>
                    </div>
                    <div class="card-profile-wrapper w-full flex justify-between items-center px-4 self-center my-2">
                        <a href='/' class="user flex gap-2">
                            <div class="profile-pic">
                                <img src="https://i.pravatar.cc/40?Image=450" alt="user__image"
                                    class="user__image rounded-full " />
                            </div>
                            <div class="flex flex-col">
                                <h3 class="text-slate-950 font-bold">Jhon Doe</h3>
                                <span class="text-slate-600 text-sm"> Entrepisene </span>
                            </div>
                        </a>
                        <a href='/' class="call text-slate-600 text-sm pr-2">
                            <i class='bx bxs-phone' style="font-size: 24px; color:var(--vibrant)"></i>
                        </a>

                    </div>
                </div>




                <div
                    class="card Dépannage  card-container bg-white  pt-0 pb-3 rounded-2xl m-2 flex flex-col items-center gap-3 shadow-xl lg:w-96 w-full ease-in duration-300 hover:translate-y-2">
                    <div class="card-cover">
                        <img src="https://unsplash.it/859" alt="card__image"
                            class="card__image  rounded-t-xl  w-96 object-cover h-52" width="300px" />
                    </div>
                    <div class="title-service w-full text-center flex text-xl px-4">
                        <h2 class="text-slate-950 font-extrabold">Dépanneur</h2>
                    </div>
                    <div class="service px-4">
                        <span class="call text-slate-900 text-sm">Vidange - </span>
                        <span class="call text-slate-900 text-sm">Vidange - </span>
                        <span class="call text-slate-900 text-sm"> Lavage - </span>
                        <span class="call text-slate-900 text-sm"> Lavage - </span>
                        <span class="call text-slate-900 text-sm"> Déppannage -</span>
                    </div>
                    <div class="card-profile-wrapper w-full flex justify-between items-center px-4 self-center my-2">
                        <a href='/' class="user flex gap-2">
                            <div class="profile-pic">
                                <img src="https://i.pravatar.cc/40?Image=450" alt="user__image"
                                    class="user__image rounded-full " />
                            </div>
                            <div class="flex flex-col">
                                <h3 class="text-slate-950 font-bold">Jhon Doe</h3>
                                <span class="text-slate-600 text-sm"> Entrepisene </span>
                            </div>
                        </a>
                        <a href='/' class="call text-slate-600 text-sm pr-2">
                            <i class='bx bxs-phone' style="font-size: 24px; color:var(--vibrant)"></i>
                        </a>

                    </div>
                </div>


                <!-- component -->
                <div class="card Maintenance bg-cover bg-center rounded-2xl   text-white py-20 px-9 object-fill"
                    style="background-image: url(https://plus.unsplash.com/premium_photo-1661954236764-6c567b653d49?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80)">
                    <div class="md:w-1/2  bg-blend-overlay ">
                        <p class="font-bold text-sm text-white uppercase">Services</p>
                        <p class="text-3xl font-bold text-white">Garage Maarif</p>
                        <p class="text-2xl mb-10 leading-none text-gray-200">Équipe spécialisée pour vous</p>
                        <a href="#"
                            class="bg-red-700 py-4 px-8 text-white font-bold uppercase text-xs rounded hover:bg-gray-200 hover:text-gray-800">
                            Contact us</a>
                    </div>
                </div>


                <div
                    class="card Dépannage  card-container bg-white  pt-0 pb-3 rounded-2xl m-2 flex flex-col items-center gap-3 shadow-xl lg:w-96 w-full ease-in duration-300 hover:translate-y-2">
                    <div class="card-cover">
                        <img src="https://unsplash.it/899" alt="card__image"
                            class="card__image  rounded-t-xl  w-96 object-cover h-52" width="300px" />
                    </div>
                    <div class="title-service w-full text-center flex text-xl px-4">
                        <h2 class="text-slate-950 font-extrabold">Dépanneur</h2>
                    </div>
                    <div class="service px-4">
                        <span class="call text-slate-900 text-sm">Vidange - </span>
                        <span class="call text-slate-900 text-sm">Vidange - </span>
                        <span class="call text-slate-900 text-sm"> Lavage - </span>
                        <span class="call text-slate-900 text-sm"> Lavage - </span>
                        <span class="call text-slate-900 text-sm"> Déppannage -</span>
                    </div>
                    <div class="card-profile-wrapper w-full flex justify-between items-center px-4 self-center my-2">
                        <a href='/' class="user flex gap-2">
                            <div class="profile-pic">
                                <img src="https://i.pravatar.cc/40?Image=450" alt="user__image"
                                    class="user__image rounded-full " />
                            </div>
                            <div class="flex flex-col">
                                <h3 class="text-slate-950 font-bold">Jhon Doe</h3>
                                <span class="text-slate-600 text-sm"> Entrepisene </span>
                            </div>
                        </a>
                        <a href='/' class="call text-slate-600 text-sm pr-2">
                            <i class='bx bxs-phone' style="font-size: 24px; color:var(--vibrant)"></i>
                        </a>

                    </div>
                </div>

                <div
                    class="card Lavage card-container bg-white  pt-0 pb-3 rounded-2xl m-2 flex flex-col items-center gap-3 shadow-xl lg:w-96 w-full ease-in duration-300 hover:translate-y-2">
                    <div class="card-cover">
                        <img src="https://unsplash.it/839" alt="card__image"
                            class="card__image  rounded-t-xl  w-96 object-cover h-52" width="300px" />
                    </div>
                    <div class="title-service w-full text-center flex text-xl px-4">
                        <h2 class="text-slate-950 font-extrabold">Lavage</h2>
                    </div>
                    <div class="service px-4">
                        <span class="call text-slate-900 text-sm">Vidange - </span>
                        <span class="call text-slate-900 text-sm">Vidange - </span>
                        <span class="call text-slate-900 text-sm"> Lavage - </span>
                        <span class="call text-slate-900 text-sm"> Lavage - </span>
                    </div>
                    <div class="card-profile-wrapper w-full flex justify-between items-center px-4 self-center my-2">
                        <a href='/' class="user flex gap-2">
                            <div class="profile-pic">
                                <img src="https://i.pravatar.cc/40?Image=450" alt="user__image"
                                    class="user__image rounded-full " />
                            </div>
                            <div class="flex flex-col">
                                <h3 class="text-slate-950 font-bold">Jhon Doe</h3>
                                <span class="text-slate-600 text-sm"> Entrepisene </span>
                            </div>
                        </a>
                        <a href='/' class="call text-slate-600 text-sm pr-2">
                            <i class='bx bxs-phone' style="font-size: 24px; color:var(--vibrant)"></i>
                        </a>

                    </div>
                </div>
                <div
                    class="card Lavage card-container bg-white  pt-0 pb-3 rounded-2xl m-2 flex flex-col items-center gap-3 shadow-xl lg:w-96 w-full ease-in duration-300 hover:translate-y-2">
                    <div class="card-cover">
                        <img src="https://unsplash.it/852" alt="card__image"
                            class="card__image  rounded-t-xl  w-96 object-cover h-52" width="300px" />
                    </div>
                    <div class="title-service w-full text-center flex text-xl px-4">
                        <h2 class="text-slate-950 font-extrabold">Lavage</h2>
                    </div>
                    <div class="service px-4">
                        <span class="call text-slate-900 text-sm">Vidange - </span>
                        <span class="call text-slate-900 text-sm">Vidange - </span>
                        <span class="call text-slate-900 text-sm"> Lavage - </span>
                        <span class="call text-slate-900 text-sm"> Lavage - </span>
                    </div>
                    <div class="card-profile-wrapper w-full flex justify-between items-center px-4 self-center my-2">
                        <a href='/' class="user flex gap-2">
                            <div class="profile-pic">
                                <img src="https://i.pravatar.cc/40?Image=450" alt="user__image"
                                    class="user__image rounded-full " />
                            </div>
                            <div class="flex flex-col">
                                <h3 class="text-slate-950 font-bold">Jhon Doe</h3>
                                <span class="text-slate-600 text-sm"> Entrepisene </span>
                            </div>
                        </a>
                        <a href='/' class="call text-slate-600 text-sm pr-2">
                            <i class='bx bxs-phone' style="font-size: 24px; color:var(--vibrant)"></i>
                        </a>

                    </div>
                </div>



            </div>
        </section>


        <!-- Loadging -->
        <section class="px-2 lg:px-4 w-full flex flex-col gap-10 items-center justify-center py-5 px-5 min-h-max ">

            <!-- <button disabled="" type="button"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded text-sm px-5 py-2.5 text-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 inline-flex items-center">
                            <svg aria-hidden="true" role="status" class="inline mr-3 w-4 h-4 text-white animate-spin"
                                viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z"
                                    fill="#E5E7EB"></path>
                                <path
                                    d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z"
                                    fill="currentColor"></path>
                            </svg>
                            Loading...
                        </button> -->
            <button disabled="" type="button"
                class="py-2.5 px-5 mr-2 text-sm font-medium text-gray-900 bg-white rounded border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:outline-none focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700 inline-flex items-center">
                <svg aria-hidden="true" role="status"
                    class="inline mr-2 w-4 h-4 text-gray-200 animate-spin dark:text-gray-600" viewBox="0 0 100 101"
                    fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z"
                        fill="currentColor"></path>
                    <path
                        d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z"
                        fill="#1C64F2"></path>
                </svg>
                Chargement ...
            </button>
        </section>


    </main>
@endsection

@section('style')
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"></script>

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/general.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/services.css') }}">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/tw-elements.min.css" />
    <script src="https://cdn.tailwindcss.com/3.3.0"></script>
    @endsection

    @section('script')
    <script src="{{ asset('assets/js/nav.js') }} "></script>
    <script src="{{ asset('assets/js/filter.js') }} "></script>
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script>
    <script>
        // Initialization for ES Users
        import {
            Carousel,
            initTE,
            Select,
            initTE
        } from "tw-elements";

        initTE({
            Carousel
        });

        initTE({
            Select
        });
    </script>
@endsection
