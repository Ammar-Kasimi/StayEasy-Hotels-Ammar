@extends('layouts.app')
@section('content')
    <main class="w-full h-screen overflow-hidden">
        <div class="hidden lg:flex lg:w-1/2 relative">
            <div class="absolute inset-0 bg-center bg-no-repeat bg-cover" style="background-image: url('{{ asset('assets/images/hotel_illus.svg') }})" data-alt="hotel-illus"></div>
        </div>

        <div class="w-full lg:w-1/2 flex flex-col justify-center items-center px-6 md:px-20 bg-white dark:bg-background-dark relative overflow-y-auto">

        </div>
    </main>
@endsection