@extends('front.layouts.layout')

@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col-lg-12 my-auto">
                <h1 class="mt-4 text-center mt-5 mb-5">
                    <strong>
                        {{ $jobType->title }}
                    </strong>
                </h1>
            </div>
            <div class="col-lg-12 my-auto">
                <img class="mx-auto d-block mt-5 mb-5" src="{{ asset($jobType->thumbnail) }}" alt="">
            </div>
            <div class="col-lg-12 my-auto">
                <div class=" mt-5 mb-5">{{ $jobType->content }}</div>
            </div>
        </div>
    </div>

@endsection



