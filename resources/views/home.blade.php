@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-6/12 p-6 bg-white rounded-lg">
            Welcome, <span class="font-bold">{{auth()->user()->name}}</span>
        </div>
    </div>
@endsection
