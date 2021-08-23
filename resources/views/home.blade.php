@extends('layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-2">
                @livewire('category-list')
            </div>
            <div class="col-10"></div>
        </div>
    </div>
@endsection