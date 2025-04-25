@extends('layouts.app')
@section('title', 'Homepage')
@section('content')
    <div class="container mx-auto flex flex-col items-center justify-center h-screen bg-slate-400 
    dark:bg-black dark:text-white">
        <div class="flex flex-col items-center justify-center gap-5">
            <h1 class="text-4xl font-bold">Welcome to Manies Cakery</h1>
            <p class="text-lg">Delicious cakes made with love.</p>
            <p class="font-norican">Delicious cakes made with love.</p>
            @include('components.confirmModal')
        </div>
    </div>
@endsection