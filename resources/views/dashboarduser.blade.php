@extends('layouts.app')

@section('content')
<div class="p-6">
    <h1 class="text-2xl font-bold mb-6">User Dashboard</h1>

    <div class="flex justify-between items-center mb-4">
        <div class="w-1/3">
            <input type="text" id="search" placeholder="Search..." 
                class="block w-full p-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500">
        </div>

        <button type="button" 
            class="text-white bg-blue-700 hover:bg-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
            <i class="fas fa-sort mr-2"></i> Sort By
        </button>
    </div>

    <div class="relative overflow-x-auto shadow-md rounded-lg">
        <table class="w-full text-sm text-left text-gray-500">
            <thead class="text-xs text-gray-700 uppercase bg-gray-100">
                <tr>
                    <th scope="col" class="px-6 py-3">Name</th>
                    <th scope="col" class="px-6 py-3">Email</th>
                    <th scope="col" class="px-6 py-3">Telephone</th>
                    <th scope="col" class="px-6 py-3">Username</th>
                    <th scope="col" class="px-6 py-3">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <x-user-row :user="$user" />
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Tambahkan ini setelah tabel -->
    <x-edit-user-modal />
    <x-delete-user-modal />

    <a href="{{ route('catalog') }}" class="text-cyan-600 underline mt-4 inline-block">Back to catalog page</a>
</div>
@endsection
