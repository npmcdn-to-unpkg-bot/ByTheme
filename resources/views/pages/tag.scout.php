@extends('layouts.default')

@section('content')
<div class="container">
    <div class="container mt-50 mb-50">
        @loop
        @include('partials.unique.unique2',[
            'title' => Loop::title(),
            'link' => Loop::link(),
            'category' => Loop::category(),
            'tags' => Loop::tags(),
            'excerpt' => Loop::excerpt(),
            'thumbnail' => Loop::thumbnailUrl(),
            'date' => Loop::date(),
            'year' => Loop::date('Y'),
            'month' => Loop::date('m'),
            'day' => Loop::date('d'),

        ])
        @endloop
    </div>
</div>
@stop

@section('script')
<script></script>
@stop