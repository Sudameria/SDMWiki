@extends('layouts.base')

@section('content')

    <div class="flex-fill flex">
        <div class="content flex">
            <div id="main-content" class="scroll-body mb-xl">
                @yield('body')
            </div>
        </div>
    </div>

@stop
