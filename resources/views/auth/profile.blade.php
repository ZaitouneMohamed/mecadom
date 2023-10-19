@extends('layouts.master')

@section('content')
    <main>

        <div
            class="overflow-hidden  border border-stroke pt-6  rounded-3xl  rounded-b-3xl  shadow-default dark:border-strokedark dark:bg-boxdark max-w-5xl mt-24 mx-auto">

            <div class="px-4   pb-10">

                <div class="mt-4">
                    <!-- ======== =========   Profil Tab =============== -->
                    <!--Tabs navigation-->
                    <div class="tab flex  flex-wrap gap-5">

                        <ul class=" flex list-none w-full lg:w-auto py-3  lg:flex-col  flex-row flex-wrap rounded-2xl lg:bg-white  lg:shadow-md lg:px-10 px-2 items-center"
                            role="tablist" data-te-nav-ref>
                            <div class="mx-auto  p-1 flex justify-center items-center text-center ">
                                <div class="drop-shadow-2 flex flex-col items-center  gap-3">
                                    <img src="https://tecdn.b-cdn.net/img/Photos/Avatars/img%20(9).jpg"
                                        class="w-32 rounded-full shadow-lg dark:shadow-black/30" />
                                    <!-- ========== user name ============== -->
                                    <div class="name">
                                        <h3 class=" text-2xl font-semibold text-black ">
                                            {{ Auth::user()->FullName }}
                                        </h3>
                                        <p class="font-medium text-slate-400">User</p>
                                    </div>
                                </div>

                            </div>
                            <div
                                class="navigation lg:shadow-none bg-white shadow-md flex list-none w-full lg:w-auto py-3  lg:flex-col  flex-row flex-wrap rounded-2xl  lg:px-10 px-2 items-center">
                                <li role="presentation" class="flex-grow text-center">
                                    <a href="#tabs-home03"
                                        class="my-2 block border-x-0 border-b-2 border-t-0 border-transparent px-7 pb-3.5 pt-4 text-xs font-medium uppercase leading-tight text-neutral-500 hover:isolate hover:border-transparent hover:bg-neutral-100 focus:isolate focus:border-transparent data-[te-nav-active]:border-primary data-[te-nav-active]:text-primary dark:text-neutral-400 dark:hover:bg-transparent dark:data-[te-nav-active]:border-primary-400 dark:data-[te-nav-active]:text-primary-400"
                                        data-te-toggle="pill" data-te-target="#tabs-home03" data-te-nav-active
                                        role="tab" aria-controls="tabs-home03" aria-selected="true">Profile</a>
                                </li>
                                <li role="presentation" class="flex-grow text-center">
                                    <a href="#tabs-profile03"
                                        class="my-2 block border-x-0 border-b-2 border-t-0 border-transparent px-7 pb-3.5 pt-4 text-xs font-medium uppercase leading-tight text-neutral-500 hover:isolate hover:border-transparent hover:bg-neutral-100 focus:isolate focus:border-transparent data-[te-nav-active]:border-primary data-[te-nav-active]:text-primary dark:text-neutral-400 dark:hover:bg-transparent dark:data-[te-nav-active]:border-primary-400 dark:data-[te-nav-active]:text-primary-400"
                                        data-te-toggle="pill" data-te-target="#tabs-profile03" role="tab"
                                        aria-controls="tabs-profile03" aria-selected="false">Fovoris</a>
                                </li>
                                <li role="presentation" class="flex-grow text-center">
                                    <a href="#tabs-messages03"
                                        class="my-2 block border-x-0 border-b-2 border-t-0 border-transparent px-7 pb-3.5 pt-4 text-xs font-medium uppercase leading-tight text-neutral-500 hover:isolate hover:border-transparent hover:bg-neutral-100 focus:isolate focus:border-transparent data-[te-nav-active]:border-primary data-[te-nav-active]:text-primary dark:text-neutral-400 dark:hover:bg-transparent dark:data-[te-nav-active]:border-primary-400 dark:data-[te-nav-active]:text-primary-400"
                                        data-te-toggle="pill" data-te-target="#tabs-messages03" role="tab"
                                        aria-controls="tabs-messages03" aria-selected="false">Edit</a>
                                </li>
                                <li role="presentation" class="flex-grow text-center hidden">
                                    <a href="#tabs-contact03"
                                        class="disabled pointer-events-none my-2 block border-x-0 border-b-2 border-t-0 border-transparent bg-transparent px-7 pb-3.5 pt-4 text-xs font-medium uppercase leading-tight text-neutral-400 hover:isolate hover:border-transparent hover:bg-neutral-100 focus:isolate focus:border-transparent dark:text-neutral-600"
                                        data-te-toggle="pill" data-te-target="#tabs-contact03" role="tab"
                                        aria-controls="tabs-contact03" aria-selected="false">Contact</a>
                                </li>
                            </div>
                        </ul>

                        <!--Tabs content-->
                        <div class=" p-5 bg-white rounded-2xl flex-1 shadow-md">
                            <div class="hidden opacity-100 transition-opacity duration-150 ease-linear data-[te-tab-active]:block  "
                                id="tabs-home03" role="tabpanel" aria-labelledby="tabs-home-tab03" data-te-tab-active>
                                <div class="title text-left">
                                    <h2 class="font-semibold py-5">Votre Profile</h2>
                                    <p>From your My Account Dashboard you have the ability to view a snapshot of your
                                        recent account activity and update your account information. Select a link below
                                        to view or edit information.
                                    </p>
                                </div>
                                <div
                                    class="profile-container flex gap-3 justify-center flex-wrap  mt-4 lg:flex-row flex-col ">
                                    <div
                                        class="personal-infos flex-1 p-2 bg-slate-50 rounded-2xl flex-1 border border-stroke h-52">
                                        <h3 class="font-bold mb-2 ">
                                            Informations personnelles
                                        </h3>
                                        <p class="text-gray-400">{{ Auth::user()->FullName }}</p>
                                        <p class="text-gray-400">{{ Auth::user()->email }}</p>
                                    </div>
                                    <div class="adress flex-1 p-2 bg-slate-50 rounded-2xl flex-1 border border-stroke h-52">
                                        <h3 class="font-bold mb-2 ">Carnet d'adress</h3>
                                        <p class="text-gray-400">Maroc</p>
                                        <p class="text-gray-400">Casabalanca</p>
                                        <p class="text-gray-400">4247 Ashford Drive Virginia - VA-20006 - USA
                                            (+0) 900901904</p>
                                    </div>
                                </div>

                            </div>
                            <div class="hidden opacity-0 transition-opacity duration-150 ease-linear data-[te-tab-active]:block"
                                id="tabs-profile03" role="tabpanel" aria-labelledby="tabs-profile-tab03">
                                Tab 2 content
                            </div>
                            <div class="hidden opacity-0 transition-opacity duration-150 ease-linear data-[te-tab-active]:block"
                                id="tabs-messages03" role="tabpanel" aria-labelledby="tabs-profile-tab03">
                                <div class="title text-left">
                                    <h2 class="font-semibold py-5">Edit Profile</h2>
                                </div>
                                <div
                                    class="profile-container flex gap-3 justify-center flex-wrap  mt-4 lg:flex-row flex-col ">
                                    <div
                                        class="personal-infos flex-1 p-2 bg-slate-50 rounded-2xl flex-1 border border-stroke h-52">
                                        <h3 class="font-bold mb-2 ">
                                            Informations personnelles
                                        </h3>
                                        <form data-te-validation-init>
                                            <div class="relative flex flex-nowrap items-start mb-2">
                                                <span
                                                    class="flex items-center whitespace-nowrap rounded-l border border-r-0 border-solid border-neutral-300 px-3 py-[0.25rem] text-center text-base font-normal leading-[1.6] text-neutral-700 dark:border-neutral-600 dark:text-neutral-200 dark:placeholder:text-neutral-200"
                                                    id="addon-wrapping">@</span>
                                                <div class="relative inline-block w-full" data-te-validate="basic"
                                                    data-te-validation-ruleset="isRequired">
                                                    <input type="text"
                                                        class="relative m-0 block w-full min-w-0 flex-auto rounded-r border border-solid border-neutral-300 bg-transparent bg-clip-padding px-3 py-[0.25rem] text-base font-normal leading-[1.6] text-neutral-700 outline-none transition duration-200 ease-in-out focus:z-[3] focus:border-primary focus:text-neutral-700 focus:shadow-[inset_0_0_0_1px_rgb(59,113,202)] focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:focus:border-primary"
                                                        placeholder="New UserName" aria-label="Username" id="name"
                                                        aria-describedby="basic-addon1" />
                                                </div>
                                            </div>
                                            <div class="relative mb-4 flex items-stretch" data-te-input-wrapper-init
                                                data-te-input-group-ref data-te-validate="input"
                                                data-te-validation-ruleset="isRequired">
                                                <span
                                                    class="flex items-center whitespace-nowrap rounded-l border border-solid border-neutral-300 px-3 py-[0.25rem] text-center text-base font-normal leading-[1.6] text-neutral-700 dark:border-neutral-600 dark:text-neutral-200 dark:placeholder:text-neutral-200"
                                                    id="basic-addon1" data-te-input-group-text-ref>@</span>
                                                <input type="email"
                                                    class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                                                    placeholder="New email" aria-label="Username" id="email"
                                                    aria-describedby="basic-addon1" />

                                            </div>
                                            <button type="button"
                                                class="mt-2 inline-block rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
                                                data-te-submit-btn-ref>
                                                Valider
                                            </button>
                                        </form>
                                    </div>
                                    <div
                                        class="adress flex-1 p-2 bg-slate-50 rounded-2xl flex-1 border border-stroke h-52">
                                        <h3 class="font-bold mb-2 ">Carnet d'adress</h3>
                                        <p class="text-gray-400">Maroc</p>
                                        <p class="text-gray-400">Casabalanca</p>
                                        <p class="text-gray-400">4247 Ashford Drive Virginia - VA-20006 - USA
                                            (+0) 900901904</p>
                                    </div>
                                </div>
                            </div>
                            <div class="hidden opacity-0 transition-opacity duration-150 ease-linear data-[te-tab-active]:block"
                                id="tabs-contact03" role="tabpanel" aria-labelledby="tabs-contact-tab03">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection


@section('script')
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script>
    <script>
        // Initialization for ES Users
        import {
            Tab,
            Input,
            Validation,
            initTE,
        } from "tw-elements";

        initTE({
            Tab
        });
        initTE({
            Input
        });
        initTE({
            Validation
        });
    </script>
@endsection
