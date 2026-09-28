@extends('layouts.base')

@push('html-class', 'page-edit-layout ')
@push('body-class', 'flexbox page-edit-layout ')

@push('head')
    <style>
        html.page-edit-layout {
            height: auto;
            overflow-y: auto;
        }

        body.flexbox.page-edit-layout {
            height: auto;
            max-height: none;
            min-height: 100%;
            overflow: visible;
        }

        body.flexbox.page-edit-layout #content {
            flex: 0 0 calc(100vh - 64px);
            height: calc(100vh - 64px);
            min-height: calc(100vh - 64px);
        }

        body.flexbox.page-edit-layout #main-content {
            flex: 1 0 auto;
            width: 100%;
            height: auto;
            min-height: calc(100vh - 64px);
        }

        body.flexbox.page-edit-layout #main-content > form {
            flex: 1 0 auto;
            width: 100%;
            min-height: 100%;
        }

        body.flexbox.page-edit-layout footer {
            flex: 0 0 auto;
        }
    </style>
@endpush

@section('content')

    <div id="main-content" class="flex-fill flex fill-height">
        <form action="{{ $page->getUrl() }}" autocomplete="off" data-page-id="{{ $page->id }}" method="POST" class="flex flex-fill">
            {{ csrf_field() }}

            @if(!$isDraft) {{ method_field('PUT') }} @endif
            @include('pages.parts.form', ['model' => $page])
        </form>
    </div>
    
    @include('pages.parts.image-manager', ['uploaded_to' => $page->id])
    @include('pages.parts.code-editor')
    @include('entities.selector-popup')
@stop
