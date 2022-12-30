@extends('base')

@section('title', 'CMB Audio Player - Remote Controller')

@push('scripts')
    @vite(['resources/assets/js/remote/app.ts'])
@endpush
