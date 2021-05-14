@extends('layouts.app')

@push('styles')
    {{-- ESTO SOLO AFECTA A ESTA PÁGINA --}}
    <style>
        nav {
            background-color: #9ca3af !important;
        }
    </style>
@endpush

@section('content')
    <section>
        <div class="flex bg-white" style="height:600px;">
            <div class="flex items-center text-center lg:text-left px-8 md:px-12 lg:w-1/2">
                <div>
                    <h2 class="text-3xl font-semibold text-gray-800 md:text-4xl">Build Your New <span class="text-indigo-600">Idea</span></h2>
                    <p class="mt-2 text-sm text-gray-500 md:text-base">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis commodi cum cupiditate ducimus, fugit harum id necessitatibus odio quam quasi, quibusdam rem tempora voluptates. Cumque debitis dignissimos id quam vel!</p>
                    <div class="flex justify-center lg:justify-start mt-6">
                        <a class="px-4 py-3 bg-gray-900 text-gray-200 text-xs font-semibold rounded hover:bg-gray-800" href="#">Get Started</a>
                        <a class="mx-4 px-4 py-3 bg-gray-300 text-gray-900 text-xs font-semibold rounded hover:bg-gray-400" href="#">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="hidden lg:block lg:w-1/2" style="clip-path:polygon(10% 0, 100% 0%, 100% 100%, 0 100%)">
                <div class="h-full object-cover" style="background-image: url(https://images.unsplash.com/photo-1498050108023-c5249f4df085?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1352&q=80)">
                    <div class="h-full bg-black opacity-25"></div>
                </div>
            </div>
        </div>
    </section>



    <section class="mt-12">
        <div class="max-w-md w-full lg:flex">
            <div class="h-48 lg:h-auto lg:w-48 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden"
                style="background-image: url('{{ asset('img/homer.jpg') }}')" title="Woman holding a mug">
            </div>
            <div class="border-r border-b border-l border-grey-light lg:border-l-0 lg:border-t lg:border-grey-light bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
              <div class="mb-8">
                <p class="text-sm text-grey-dark flex items-center">
                  <svg class="text-grey w-3 h-3 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path d="M4 8V6a6 6 0 1 1 12 0v2h1a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-8c0-1.1.9-2 2-2h1zm5 6.73V17h2v-2.27a2 2 0 1 0-2 0zM7 6v2h6V6a3 3 0 0 0-6 0z" />
                  </svg>
                  Members only
                </p>
                <div class="text-black font-bold text-xl mb-2">Can coffee make you a better developer?</div>
                <p class="text-grey-darker text-base">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.</p>
              </div>
              <div class="flex items-center">
                <img class="w-10 h-10 rounded-full mr-4" src="{{ asset('img/homer.jpg') }}" alt="Avatar of Jonathan Reinink">
                <div class="text-sm">
                  <p class="text-black leading-none">Jonathan Reinink</p>
                  <p class="text-grey-dark">Aug 18</p>
                </div>
              </div>
            </div>
          </div>
    </section>
@endsection

@push('scripts')
    {{-- ESTO SOLO AFECTA A ESTA PÁGINA --}}
    <script>
        console.log('PAGE:HOME')
    </script>
@endpush
