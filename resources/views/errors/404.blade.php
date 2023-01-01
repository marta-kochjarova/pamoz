@extends('dashboard.layouts.auth')
@section('title', "404")
@section('content')
    <div class="app-body indigo bg-auto w-full">
        <div class="text-center pos-rlt p-y-md">
            <h1 class="text-shadow text-white text-4x">
                <span class="text-2x font-bold block m-t-lg">404</span>
            </h1>
            <p class="h5 m-y-lg text-u-c font-bold">{{ __('backend.notFound') }}.</p>
        </div>
    </div>
@endsection

