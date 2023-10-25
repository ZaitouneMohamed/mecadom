@extends("layouts.master")

@section("content")
<main>

    <div
        class="overflow-hidden  border border-stroke pt-6  rounded-3xl    shadow-default dark:border-strokedark  max-w-5xl mt-24 mx-auto">

        <div class="lg:px-4   pb-10 rounded-3xl">

            <div class="mt-4 rounded-3xl">
                <!-- ======== =========   Profil Tab =============== -->
                <!--Tabs navigation-->
                <div class="flex flex-col   flex-wrap bg-white shadow-md rounded-3xl ">

                    <section
                        class="lg:shadow-none rounded-3xl border-1  flex  w-full lg:w-auto py-3  lg:flex-col  flex-row flex-wrap  lg:bg-white  lg:shadow-md lg:px-10 px-2 items-center">
                        <div class="mx-auto  p-1 flex justify-center items-center text-center ">
                            <div class="drop-shadow-2 flex flex-col items-center  gap-3">
                                <img src="https://tecdn.b-cdn.net/img/Photos/Avatars/img%20(9).jpg"
                                    class="w-32 rounded-full shadow-lg dark:shadow-black/30" />
                                <!-- ========== user name ============== -->
                                <div class="name">
                                    <h3 class=" text-2xl font-semibold text-black ">
                                        {{ $user->full_name }}
                                    </h3>
                                    <p class="font-medium text-slate-400"></p>
                                    <div class="pt-3">
                                        <a href="tel:555-555-555"
                                            class="text-white text-xl bg-[#1a237e] duration-300 hover:bg-blue-800  focus:ring-4 focus:ring-primary-200 font-medium rounded-full text-sm px-8 mx-auto py-2.5 w-max text-center dark:text-white  dark:focus:ring-primary-900">
                                            Contacter</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </section>

                    <!--Tabs content-->
                    <div class="pb-5 px-5 bg-white shadow-md">
                        <div class="opacity-100 transition-opacity duration-150 ease-linear">
                            <div class="title text-left">
                                <h2 class="font-semibold py-5">Profile</h2>
                                <p class="bio">Mécanicien passionné et expérimenté, je mets mon expertise à votre service pour
                                    assurer la maintenance et la réparation de votre véhicule, à votre domicile ou
                                    sur votre lieu de travail.

                                </p>
                            </div>
                            <div class="flex lg:flex-row flex-col">
                                <div
                                    class="profile-container flex gap-3 justify-center  mt-4 lg:flex-row flex-col ">

                                    <div
                                        class="adress flex-1 p-2 bg-slate-50 rounded-2xl border border-stroke h-52">
                                        <div>
                                            <h3 class="font-bold mb-2 ">Services</h3>
                                            <div class="service px-4 py-4 flex flex-wrap gap-2">
                                                @forelse ($user->Services as $item)
                                                <span
                                                    class="call text-slate-500 text-xs p-2 rounded-full border-gray-300 border">Vidange</span>
                                                @empty
                                                    No Service Found
                                                @endforelse
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="adress flex-1 p-2 bg-slate-50 rounded-2xl flex-1 border border-stroke h-52">
                                        <h3 class="font-bold mb-2 ">Aadress</h3>
                                        <p class="text-gray-400">Maroc</p>
                                        <p class="text-gray-400">Casabalanca</p>
                                        <p class="text-gray-400">4247 Ashford Drive Virginia - VA-20006 - USA
                                            (+0) 900901904</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="hidden opacity-0 transition-opacity duration-150 ease-linear data-[te-tab-active]:block"
                            id="tabs-profile03" role="tabpanel" aria-labelledby="tabs-profile-tab03">
                            Tab 2 content
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
