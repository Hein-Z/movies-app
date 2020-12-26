@extends('layout.app')
@section('content')
    <div class="bg-gray-900 py-6" style="min-height:calc(100vh - 82px)">
        <div class="container mx-auto text-white px-4">
            <div class="grid grid-cols-1 gap-10 md:grid-cols-3">
                <div class="col-span-1">
                    <img src="https://www.computerhope.com/jargon/r/random-dice.jpg" class="mb-3" alt="img">
                </div>
                <div class="md:col-span-2 col-span-1">
                    <h1 class="font-semibold text-3xl">Parasite (2019)</h1>
                    <div class="flex space-x-1 flex-wrap">
                        <span> <i class="fa fa-star text-yellow-400"></i></span>
                        <span>80%</span>
                        <span>|</span>
                        <span class="break-normal">12 Fab 2020 </span>
                        <span>|</span>
                        <span>Action, </span>
                        <span>Thriller, </span>
                        <span>Drama, </span>
                    </div>
                    <div class="my-10"><p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus
                            accusantium
                            aliquid deserunt dolores eum iusto laboriosam mollitia, nam provident quasi quo recusandae
                            voluptate? Amet atque exercitationem non porro sint soluta.</p></div>
                    <div class="font-semibold "><h1 class="mb-5">Featured Cast</h1></div>
                    <div class="flex flex-wrap mb-10">
                        <div class="mb-5 mx-3">
                            <div> Boon jon hon</div>
                            <div class="text-xs">Screen Play, Director, Story</div>
                        </div>
                        <div class="mx-3">
                            <div> Boon jon hon</div>
                            <div class="text-xs">Screen Play, Director, Story</div>
                        </div>
                    </div>
                    <button class="px-6 font-semibold py-4 bg-blue-700 text-2xl"><i
                            class="fas  fa-play-circle mx-3"></i>Play Trailer
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection
