<!Doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('fontawesome-5.15.4/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{asset('font-awesome-4.7.0/css/font-awesome.css')}}">

    <link href="{{asset('fontawesome-5.15.4/css/all.css')}}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Facebook</title>
</head>
<body class="bg-gray-100">
<nav class="w-full shadow-md bg-white  flex justify-between " >
    <div class="flex items-center rounded-full">
        <img  class="mx-3 my-1" width="35" height="35" src="{{asset('img/2021_Facebook_icon.svg')}}" alt="logo">
        <div class="bg-gray-200 rounded-full py-2 px-6 h-9 flex m-3 ">
            <i class="fa fa-search" ></i>
            <input class="bg-transparent w-full p-2 px-3 py-1 text-sm" type="text" placeholder="Rechercher sur Facebook" >
        </div>
    </div>
    <div class=" flex justify-between">
         <div class= " hover:bg-gray-200  flex border-b-2 border-blue-400 justify-center item-center py-3 px-6 ">
             <svg viewBox="0 0 28 28" class="a8c37x1j ms05siws hwsy1cff b7h9ocf4 aaxa7vy3" height="35" width="35"><path  fill="#036ae3" id="home" d="M25.825 12.29C25.824 12.289 25.823 12.288 25.821 12.286L15.027 2.937C14.752 2.675 14.392 2.527 13.989 2.521 13.608 2.527 13.248 2.675 13.001 2.912L2.175 12.29C1.756 12.658 1.629 13.245 1.868 13.759 2.079 14.215 2.567 14.479 3.069 14.479L5 14.479 5 23.729C5 24.695 5.784 25.479 6.75 25.479L11 25.479C11.552 25.479 12 25.031 12 24.479L12 18.309C12 18.126 12.148 17.979 12.33 17.979L15.67 17.979C15.852 17.979 16 18.126 16 18.309L16 24.479C16 25.031 16.448 25.479 17 25.479L21.25 25.479C22.217 25.479 23 24.695 23 23.729L23 14.479 24.931 14.479C25.433 14.479 25.921 14.215 26.132 13.759 26.371 13.245 26.244 12.658 25.825 12.29"></path></svg>
         </div>
        <div class=" hover:bg-gray-200  flex justify-center item-center py-3 px-6 ">
            <svg viewBox="0 0 28 28" class="a8c37x1j ms05siws hwsy1cff b7h9ocf4 em6zcovv" height="35" width="35"><path fill="#959191" id="tv" d="M8.75 25.25C8.336 25.25 8 24.914 8 24.5 8 24.086 8.336 23.75 8.75 23.75L19.25 23.75C19.664 23.75 20 24.086 20 24.5 20 24.914 19.664 25.25 19.25 25.25L8.75 25.25ZM17.163 12.846 12.055 15.923C11.591 16.202 11 15.869 11 15.327L11 9.172C11 8.631 11.591 8.297 12.055 8.576L17.163 11.654C17.612 11.924 17.612 12.575 17.163 12.846ZM21.75 20.25C22.992 20.25 24 19.242 24 18L24 6.5C24 5.258 22.992 4.25 21.75 4.25L6.25 4.25C5.008 4.25 4 5.258 4 6.5L4 18C4 19.242 5.008 20.25 6.25 20.25L21.75 20.25ZM21.75 21.75 6.25 21.75C4.179 21.75 2.5 20.071 2.5 18L2.5 6.5C2.5 4.429 4.179 2.75 6.25 2.75L21.75 2.75C23.821 2.75 25.5 4.429 25.5 6.5L25.5 18C25.5 20.071 23.821 21.75 21.75 21.75Z"></path></svg>
        </div>
        <div class=" hover:bg-gray-200   flex justify-center item-center py-3 px-6 ">
            <svg viewBox="0 0 28 28" class="a8c37x1j ms05siws hwsy1cff b7h9ocf4 em6zcovv" height="35" width="35"><path fill="#959191" d="M25.5 14C25.5 7.649 20.351 2.5 14 2.5 7.649 2.5 2.5 7.649 2.5 14 2.5 20.351 7.649 25.5 14 25.5 20.351 25.5 25.5 20.351 25.5 14ZM27 14C27 21.18 21.18 27 14 27 6.82 27 1 21.18 1 14 1 6.82 6.82 1 14 1 21.18 1 27 6.82 27 14ZM7.479 14 7.631 14C7.933 14 8.102 14.338 7.934 14.591 7.334 15.491 6.983 16.568 6.983 17.724L6.983 18.221C6.983 18.342 6.99 18.461 7.004 18.578 7.03 18.802 6.862 19 6.637 19L6.123 19C5.228 19 4.5 18.25 4.5 17.327 4.5 15.492 5.727 14 7.479 14ZM20.521 14C22.274 14 23.5 15.492 23.5 17.327 23.5 18.25 22.772 19 21.878 19L21.364 19C21.139 19 20.97 18.802 20.997 18.578 21.01 18.461 21.017 18.342 21.017 18.221L21.017 17.724C21.017 16.568 20.667 15.491 20.067 14.591 19.899 14.338 20.067 14 20.369 14L20.521 14ZM8.25 13C7.147 13 6.25 11.991 6.25 10.75 6.25 9.384 7.035 8.5 8.25 8.5 9.465 8.5 10.25 9.384 10.25 10.75 10.25 11.991 9.353 13 8.25 13ZM19.75 13C18.647 13 17.75 11.991 17.75 10.75 17.75 9.384 18.535 8.5 19.75 8.5 20.965 8.5 21.75 9.384 21.75 10.75 21.75 11.991 20.853 13 19.75 13ZM15.172 13.5C17.558 13.5 19.5 15.395 19.5 17.724L19.5 18.221C19.5 19.202 18.683 20 17.677 20L10.323 20C9.317 20 8.5 19.202 8.5 18.221L8.5 17.724C8.5 15.395 10.441 13.5 12.828 13.5L15.172 13.5ZM16.75 9C16.75 10.655 15.517 12 14 12 12.484 12 11.25 10.655 11.25 9 11.25 7.15 12.304 6 14 6 15.697 6 16.75 7.15 16.75 9Z"></path></svg>
        </div>
        <div class=" hover:bg-gray-200   flex justify-center item-center py-3 px-6 ">
            <svg viewBox="0 0 28 28" class="a8c37x1j ms05siws hwsy1cff b7h9ocf4 em6zcovv notify" height="35" width="35"><path fill="#959191" d="M23.5 9.5H10.25a.75.75 0 00-.75.75v7c0 .414.336.75.75.75H17v5.5H4.5v-19h19v5zm0 14h-5v-6.25a.75.75 0 00-.75-.75H11V11h12.5v12.5zm1.5.25V4.25C25 3.561 24.439 3 23.75 3H4.25C3.561 3 3 3.561 3 4.25v19.5c0 .689.561 1.25 1.25 1.25h19.5c.689 0 1.25-.561 1.25-1.25z"></path></svg>
        </div>
    </div>
    <div class=" h-full flex ">
        <div class="flex items-center rounded-full">
            <img src="{{asset('/images/01.jpg')}} " alt="" width="35" height="35" class="mr-2 rounded-full">
            <div class=" font-semibold py-2 px-1 h-9 flex  ">
                Pierre Agana
            </div>
        </div>
        <div class= " bg-gray-200 rounded-full p-2 mx-2 my-3 ">
            <i style="width:30px; height: 25px;font-size: 20px;padding: 18%;" class="fas fa-plus"></i>
        </div>
        <div class= " bg-gray-200 rounded-full p-2 mx-2 my-3 ">
            <svg viewBox="0 0 28 28" alt="" class="right-logo a8c37x1j ms05siws hwsy1cff b7h9ocf4 fzdkajry" height="30" width="30"><path d="M14 2.042c6.76 0 12 4.952 12 11.64S20.76 25.322 14 25.322a13.091 13.091 0 0 1-3.474-.461.956 .956 0 0 0-.641.047L7.5 25.959a.961.961 0 0 1-1.348-.849l-.065-2.134a.957.957 0 0 0-.322-.684A11.389 11.389 0 0 1 2 13.682C2 6.994 7.24 2.042 14 2.042ZM6.794 17.086a.57.57 0 0 0 .827.758l3.786-2.874a.722.722 0 0 1 .868 0l2.8 2.1a1.8 1.8 0 0 0 2.6-.481l3.525-5.592a.57.57 0 0 0-.827-.758l-3.786 2.874a.722.722 0 0 1-.868 0l-2.8-2.1a1.8 1.8 0 0 0-2.6.481Z"></path></svg>
        </div>
        <div class= " bg-gray-200 rounded-full p-2 mx-2 my-3 ">
            <svg viewBox="0 0 28 28" alt="" class="right-logo a8c37x1j ms05siws hwsy1cff b7h9ocf4 fzdkajry" height="30" width="30"><path d="M7.847 23.488C9.207 23.488 11.443 23.363 14.467 22.806 13.944 24.228 12.581 25.247 10.98 25.247 9.649 25.247 8.483 24.542 7.825 23.488L7.847 23.488ZM24.923 15.73C25.17 17.002 24.278 18.127 22.27 19.076 21.17 19.595 18.724 20.583 14.684 21.369 11.568 21.974 9.285 22.113 7.848 22.113 7.421 22.113 7.068 22.101 6.79 22.085 4.574 21.958 3.324 21.248 3.077 19.976 2.702 18.049 3.295 17.305 4.278 16.073L4.537 15.748C5.2 14.907 5.459 14.081 5.035 11.902 4.086 7.022 6.284 3.687 11.064 2.753 15.846 1.83 19.134 4.096 20.083 8.977 20.506 11.156 21.056 11.824 21.986 12.355L21.986 12.356 22.348 12.561C23.72 13.335 24.548 13.802 24.923 15.73Z"></path></svg>
        </div>
        <div class= "bg-gray-200 rounded-full p-2 mx-2 my-3 ">
            <i style="width:30px; height: 25px;font-size: 20px;padding: 18%;" class="fas fa-caret-down"></i>
        </div>
    </div>
</nav>
<div class="flex  ">
    <div class="w-1/5 h-screen bg-gray-100">
        <div class="flex px-3 py-2 font-semibold rounded-lg m-2 text-xs hover:bg-gray-200 items-center">
            <img src="{{asset('/images/01.jpg')}} " alt="" width="28" height="28" class="mr-2 rounded-full">
           Pierre Agana
        </div>
        <div class="flex px-3 py-2 font-semibold rounded-lg m-2 text-xs hover:bg-gray-200 items-center">
            <img src="{{asset('/images/1.png')}} " alt="" width="28" height="28" class="mr-2">
           Amis
        </div>
        <div class="flex px-3 py-2 font-semibold rounded-lg m-2 text-xs hover:bg-gray-200 items-center">
            <img src="{{asset('/images/2.png')}} " alt="" width="28" height="28" class="mr-2">
           Groupes
        </div>
        <div class="flex px-3 py-2 font-semibold rounded-lg m-2 text-xs hover:bg-gray-200 items-center">
            <img src="{{asset('/images/3.png')}} " alt="" width="28" height="28" class="mr-2">
            Marketplace
        </div>
        <div class="flex px-3 py-2 font-semibold rounded-lg m-2 text-xs hover:bg-gray-200 items-center">
            <img src="{{asset('/images/4.png')}} " alt="" width="28" height="28" class="mr-2">
            Watch
        </div>
        <div class="flex px-3 py-2 font-semibold rounded-lg m-2 text-xs hover:bg-gray-200 items-center">
            <img src="{{asset('/images/5.png')}} " alt="" width="28" height="28" class="mr-2">
            Souvenirs
        </div>
        <div class="flex px-3 py-2 font-semibold rounded-lg m-2 text-xs hover:bg-gray-200 items-center">
            <img src="{{asset('/images/6.png')}} " alt="" width="28" height="28" class="mr-2">
            Enregistrements
        </div>
        <div class="flex px-3 py-2 font-semibold rounded-lg m-2 text-xs hover:bg-gray-200 items-center">
            <img src="{{asset('/images/7.png')}} " alt="" width="28" height="28" class="mr-2">
            Pages
        </div>
        <div class="flex px-3 py-2 font-semibold rounded-lg m-2 text-xs hover:bg-gray-200 items-center">
            <img src="{{asset('/images/8.png')}} " alt="" width="28" height="28" class="mr-2">
            Evénements
        </div>
        <div class="flex px-3 py-2 font-semibold rounded-lg m-2 text-xs hover:bg-gray-200 items-center">
            <img src="{{asset('/images/9.png')}} " alt="" width="28" height="28" class="mr-2">
            Plus récentes
        </div>
        <div class="flex px-3 py-2 font-semibold rounded-lg m-2 text-xs hover:bg-gray-200 items-center">
            <img src="{{asset('/images/10.png')}} " alt="" width="28" height="28" class="mr-2">
            Favoris
        </div>
        <div class="flex px-3 py-2 font-semibold rounded-lg  m-2 text-xs hover:bg-gray-200 items-center">
            <i class=" bg-gray-300 mr-2  rounded-full p-2 fas fa-chevron-down" id="down-ico" aria-hidden="true"></i>
            Voir plus
        </div>
    </div>
    <div class="flex-grow h-screen flex flex-col items-center">
        <div class="shadow-md bg-white my-3 mx-6 w-3/5 h-16 rounded-md flex items-center">
            <div class="m-2 bg-blue-200 p-2 rounded-full">
                <i style="width:30px; height: 25px;font-size: 20px;padding: 18%; color: #036ae3" class="fas fa-plus"></i>
            </div>
            <div>
                <h4>Créer une story</h4>
                <div class="text-sm text-gray-500">Partager une photo ou écrire quelque chose</div>
            </div>
        </div>

        <div class="shadow-md bg-white my-3 mx-6 w-3/5 h-32 rounded-md ">
            <div class="flex items-center">
                <div class="flex items-center w-full mr-1">
                    <div class="m-3">
                        <img src="{{asset('/images/01.jpg')}} " alt="" width="50" height="50" class="mr-2 rounded-full">
                    </div>
                    <input  class="bg-gray-200 rounded-full h-8 flex-grow w-4/5 px-3 py-1 text-gray-700" type="text" placeholder="Quoi de neuf, Agana ?">
                </div>
            </div>
            <hr>
            <div class="flex justify-evenly ">
                <div class=" flex-grow flex px-3 py-2 font-semibold  justify-center items-center hover:bg-gray-200 hover:rounded-full text-gray-500">
                    <img class="mr-1" src="{{asset('/images/video-live.png')}}" alt="">
                    Vidéo en direct
                </div>
                <div class=" flex-grow flex px-3 py-2 font-semibold justify-center items-center hover:bg-gray-200 hover:rounded-full text-gray-500 ">
                    <img class="mr-1" src="{{asset('/images/photo-select.png')}}" alt="">
                    Photo/Vidéo
                </div>
                <div class=" flex-grow flex px-3 py-2 font-semibold justify-center items-center hover:bg-gray-200 hover:rounded-full text-gray-500">
                    <img class="mr-1" src="{{asset('/images/activity.png')}}" alt="">
                    Humeur/Activité
                </div>
            </div>
        </div>

        <div class="shadow-md bg-white my-3 mx-6 w-3/5 h-16 rounded-md flex items-center">
            <div class="ml-2 py-1 px-2 rounded-full border-blue-200 border-solid border-2 justify-center items-center">
                <div class="flex-grow flex px-2 py-1 font-semibold justify-center items-center  text-blue-600">
                    <img class="mr-1" src="{{asset('/images/room.png')}}" alt="">
                    Créer un salon
                </div>
            </div>
           <div class=" flex-grow flex">
               <div class=" py-1 px-1 items-center">
                   <img src="{{asset('/images/myday-p2.jpg')}} " alt="" width="45" height="45" class="mr-1 rounded-full">
                   <div class="w-1/5 p-1 bg-green-500 rounded-full relative md:relative sticky bottom-2 left-7">
                   </div>
               </div>
               <div class=" py-1 px-1 items-center">
                   <img src="{{asset('/images/myday-p3.jpg')}} " alt="" width="45" height="45" class="mr-1 rounded-full">
                   <div class="w-1/5 p-1 bg-green-500 rounded-full relative md:relative sticky bottom-2 left-7">
                   </div>
               </div>
               <div class=" py-1 px-1 items-center">
                   <img src="{{asset('/images/myday-p4.jpg')}} " alt="" width="45" height="45" class="mr-1 rounded-full">
                   <div class="w-1/5 p-1 bg-green-500 rounded-full relative md:relative sticky bottom-2 left-7">
                   </div>
               </div>
               <div class=" py-1 px-1 items-center">
                   <img src="{{asset('/images/pp8.jpg')}} " alt="" width="45" height="45" class="mr-1 rounded-full">
                   <div class="w-1/5 p-1 bg-green-500 rounded-full relative md:relative sticky bottom-2 left-7">
                   </div>
               </div>
               <div class=" py-1 px-1 items-center">
                   <img src="{{asset('/images/pp9.jpg')}} " alt="" width="45" height="45" class="mr-1 rounded-full">
                   <div class="w-1/5 p-1 bg-green-500 rounded-full relative md:relative sticky bottom-2 left-7">
                   </div>
               </div>
               <div class=" py-1 px-1 items-center">
                   <img src="{{asset('/images/pp10.jpg')}} " alt="" width="45" height="45" class="mr-1 rounded-full">
                   <div class="w-1/5 p-1 bg-green-500 rounded-full relative md:relative sticky bottom-2 left-7">
                   </div>
               </div>
               <div class=" py-1 px-1 items-center">
                   <img src="{{asset('/images/swd9.jpg')}} " alt="" width="45" height="45" class="mr-1 rounded-full">
                   <div class="w-1/5 p-1 bg-green-500 rounded-full relative md:relative sticky bottom-2 left-7">
                   </div>
               </div>
               <div class=" py-1 px-1 items-center">
                   <img src="{{asset('/images/boo.png')}} " alt="" width="45" height="45" class="mr-1 rounded-full">
                   <div class="w-1/5 p-1 bg-green-500 rounded-full relative md:relative sticky bottom-2 left-7">
                   </div>
               </div>

           </div>
        </div>

        <div class="shadow-md bg-white my-3 mx-6 w-3/5 rounded-md  ">
            <div class="flex items-center">
                <div class="m-2 rounded-full">
                    <img src="{{asset('/images/myday-p2.jpg')}} " alt="" width="45" height="45" class="mr-1 rounded-full">
                </div>
                <div>
                    <h4 class="font-semibold">Agana</h4>
                    <div class="text-sm text-gray-500">04 Mai, 90:30</div>
                </div>
                <div class="justify-end float-left">
                    <i class="fas fa-plus "></i>
                </div>
            </div>
            <div class="m-2">
               <div class="text-gray-500 font-semibold text-sm  ">
                   Officiel: L’arbitre Mauritanien DEHAN WOULD BEIDA désigné pour officier notre premier match des éliminatoires de la CAN 2023 contre la Zambie à domicile.
                   ©️SAE
               </div>
                <div class=" justify-center items-center ">
                    <img class="w-4/5 h-5/5" src="{{asset('/images/ab.jpg')}}" alt="">
                </div>
            </div>

        </div>
    </div>
    <div class="w-1/5 h-screen bg-gray-100">
       <div>
           <div class=" my-5 font-semibold text-lg" >
               <h1>Sponsorisé</h1>
           </div>
           <div class="flex items-center">
               <div class="m-2" >
                   <img src="{{asset('/images/emma-square-1.jpg')}} " alt="" width="100" height="45" class="mr-1 rounded-md">
               </div>
               <div>
                   <h4 class="font-semibold">Elite Software Engineer Wanted</h4>
                   <div class="text-sm text-gray-500">developers.turing.com</div>
               </div>

           </div>
           <div class="flex items-center">
               <div class="m-2" >
                   <img src="{{asset('/images/emma-square-1.jpg')}} " alt="" width="100" height="45" class="mr-1 rounded-md">
               </div>
               <div>
                   <h4 class="font-semibold">Elite Software Engineer Wanted</h4>
                   <div class="text-sm text-gray-500">developers.turing.com</div>
               </div>

           </div>
       </div>
        <hr class="my-4">
       <div>
           <div class="flex  ">
               <div class=" flex-grow flex px-3 py-2 font-semibold text-lg  justify-center items-center ">
                 <h1> Contacts</h1>
               </div>
               <div class="  flex justify-center">
                   <svg fill="currentColor" viewBox="0 0 16 16" width="20" height="20" class="a8c37x1j ms05siws l3qrxjdp b7h9ocf4 py1f6qlh gl3lb2sf hhz5lgdu"><g fill-rule="evenodd" transform="translate(-448 -544)"><path d="M457.25 552.5H455v2.25a.75.75 0 0 1-1.5 0v-2.25h-2.25a.75.75 0 0 1 0-1.5h2.25v-2.25a.75.75 0 0 1 1.5 0V551h2.25a.75.75 0 0 1 0 1.5m6.38-4.435a.62.62 0 0 0-.64.047l-2.49 1.634v-1.394a1.854 1.854 0 0 0-1.852-1.852l-8.796.002a1.854 1.854 0 0 0-1.851 1.852v6.793c0 1.021.83 1.852 1.852 1.852l1.147-.002h7.648a1.854 1.854 0 0 0 1.852-1.851v-1.392l2.457 1.61a.641.641 0 0 0 .673.071.663.663 0 0 0 .37-.601v-6.167c0-.26-.142-.49-.37-.602"></path></g></svg>
               </div>
               <div class="  flex  justify-center items-center">
                   <i class="fa fa-search" ></i>
               </div>
               <div class="  flex justify-center items-center ">
                   <img class="" src="{{asset('/images/activity.png')}}" alt="">
               </div>
           </div>

           <div class="-screen bg-gray-100">
               <div class="flex px-3 py-2 font-semibold rounded-lg  m-2 text-xs hover:bg-gray-200 items-center">
                   <img src="{{asset('/images/myday-p2.jpg')}} " alt="" width="45" height="45" class="mr-1 rounded-full">
                   <div class="w-1/7 p-1 bg-green-500 rounded-full relative md:relative sticky top-5 right-4"></div>
                   Toor
               </div>
               <div class="flex px-3 py-2 font-semibold rounded-lg  m-2 text-xs hover:bg-gray-200 items-center">
                   <img src="{{asset('/images/myday-p2.jpg')}} " alt="" width="45" height="45" class="mr-1 rounded-full">
                   <div class="w-1/7 p-1 bg-green-500 rounded-full relative md:relative sticky top-5 right-4"></div>
                   Toor
               </div>
               <div class="flex px-3 py-2 font-semibold rounded-lg  m-2 text-xs hover:bg-gray-200 items-center">
                   <img src="{{asset('/images/myday-p2.jpg')}} " alt="" width="45" height="45" class="mr-1 rounded-full">
                   <div class="w-1/7 p-1 bg-green-500 rounded-full relative md:relative sticky top-5 right-4"></div>
                   Toor
               </div>
               <div class="flex px-3 py-2 font-semibold rounded-lg  m-2 text-xs hover:bg-gray-200 items-center">
                   <img src="{{asset('/images/myday-p2.jpg')}} " alt="" width="45" height="45" class="mr-1 rounded-full">
                   <div class="w-1/7 p-1 bg-green-500 rounded-full relative md:relative sticky top-5 right-4"></div>
                   Toor
               </div>
               <div class="flex px-3 py-2 font-semibold rounded-lg  m-2 text-xs hover:bg-gray-200 items-center">
                   <img src="{{asset('/images/myday-p2.jpg')}} " alt="" width="45" height="45" class="mr-1 rounded-full">
                   <div class="w-1/7 p-1 bg-green-500 rounded-full relative md:relative sticky top-5 right-4"></div>
                   Toor
               </div>
               <div class="flex px-3 py-2 font-semibold rounded-lg  m-2 text-xs hover:bg-gray-200 items-center">
                   <img src="{{asset('/images/myday-p2.jpg')}} " alt="" width="45" height="45" class="mr-1 rounded-full">
                   <div class="w-1/7 p-1 bg-green-500 rounded-full relative md:relative sticky top-5 right-4"></div>
                   Toor
               </div>
               <div class="flex px-3 py-2 font-semibold rounded-lg  m-2 text-xs hover:bg-gray-200 items-center">
                   <img src="{{asset('/images/myday-p2.jpg')}} " alt="" width="45" height="45" class="mr-1 rounded-full">
                   <div class="w-1/7 p-1 bg-green-500 rounded-full relative md:relative sticky top-5 right-4"></div>
                   Toor
               </div>
               <div class="flex px-3 py-2 font-semibold rounded-lg  m-2 text-xs hover:bg-gray-200 items-center">
                   <img src="{{asset('/images/myday-p2.jpg')}} " alt="" width="45" height="45" class="mr-1 rounded-full">
                   <div class="w-1/7 p-1 bg-green-500 rounded-full relative md:relative sticky top-5 right-4"></div>
                   Toor
               </div>
               <div class="flex px-3 py-2 font-semibold rounded-lg  m-2 text-xs hover:bg-gray-200 items-center">
                   <img src="{{asset('/images/myday-p2.jpg')}} " alt="" width="45" height="45" class="mr-1 rounded-full">
                   <div class="w-1/7 p-1 bg-green-500 rounded-full relative md:relative sticky top-5 right-4"></div>
                   Toor
               </div>
               <div class="flex px-3 py-2 font-semibold rounded-lg  m-2 text-xs hover:bg-gray-200 items-center">
                   <img src="{{asset('/images/myday-p2.jpg')}} " alt="" width="45" height="45" class="mr-1 rounded-full">
                   <div class="w-1/7 p-1 bg-green-500 rounded-full relative md:relative sticky top-5 right-4"></div>
                   Toor
               </div>
           </div>
           <hr class="my-4">
       </div>
    </div>
</div>
</body>
</html>
