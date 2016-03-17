@extends('layouts.default')

@section('content')
    <div class="container-fluid pt-20">
        @loop
        @include(empty(\Themosis\Page\Option::get('theme-option-layout', 'productLoopType')) ? 'partials.unique.unique2' :\Themosis\Page\Option::get('theme-option-layout', 'productLoopType'), [

        'title' =>\Themosis\Facades\Loop::title(),
        'link' =>\Themosis\Facades\Loop::link(),
        'category' =>\Themosis\Facades\Loop::terms('product-category'),
        'tags' =>\Themosis\Facades\Loop::terms('product-tags'),
        'excerpt' =>\Themosis\Facades\Loop::excerpt(),
        'thumbnail' =>\Themosis\Facades\Loop::thumbnailUrl(empty(\Themosis\Metabox\Meta::get(\Themosis\Facades\Loop::id(), 'loopType')) ? 'partials.unique.unique1' :\Themosis\Metabox\Meta::get(\Themosis\Facades\Loop::id(), 'loopType')),
        'date' =>\Themosis\Facades\Loop::date(),
        'year' =>\Themosis\Facades\Loop::date('Y'),
        'month' =>\Themosis\Facades\Loop::date('m'),
        'day' =>\Themosis\Facades\Loop::date('d'),
        'description' =>\Themosis\Metabox\Meta::get(\Themosis\Facades\Loop::id(), 'description'),
    ])
        @endloop
        @if(!have_posts())
            @include('partials.empty.default')
        @endif
        <div class="row">
            <div class="">
                @include('partials.pagination')
            </div>
        </div>
    </div>
@stop