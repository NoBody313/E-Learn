@extends('layouts.layout')

@section('title', 'Login E-Learning')

@section('content')
    <div class="flex flex-col h-screen w-screen justify-center items-center">
        <form action="{{ route('login') }}" method="POST" class="bg-white shadow-md rounded-sm w-1/3 px-8 py-16">
            @csrf
            <img src="{{ asset('images/logo-eLearning.svg') }}" alt="logo e-learning" class="w-40 mx-auto">
            <div class="mb-4">
                <label for="email" class="block text-gray-700 text-base font-bold mb-2">Email:</label>
                <input type="email" name="email" id="email" placeholder="Masukan alamat email anda"
                    class="shadow appearance-none border rounded w-full p-4 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    value="{{ old('email') }}" required>
                @error('email')
                    <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="password" class="block text-gray-700 text-base font-bold mb-2">Password:</label>
                <input type="password" name="password" id="password" placeholder="Masukan password anda"
                    class="shadow appearance-none border rounded w-full p-4 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                    required>
                @error('password')
                    <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex items-center justify-between">
                <button type="submit"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold p-4 w-full rounded focus:outline-none focus:shadow-outline">
                    Login
                </button>
            </div>
        </form>
    </div>
@endsection
