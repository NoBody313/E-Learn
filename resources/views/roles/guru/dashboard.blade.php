@extends('layouts.layout')

@php
    $roleAliases = [
        'admin' => 'Administrator',
        'guru' => 'Guru',
        'siswa' => 'Siswa',
    ];
@endphp

@section('title')
    Dashboard &raquo; {{ $roleAliases[$data->role] }} &raquo; {{ $data->name }}
@endsection

@section('content')
    @include('components.sidebar')
    <div class="flex flex-col w-full px-4 pt-2 mt-4 ms-3 lg:ms-0 sm:px-6 md:px-8 lg:ps-72 lg:mt-8">

    </div>
@endsection
