@extends('front.layouts.layout')

@section('content')

    <div class="container">
        @foreach($jobTypes as $item)
            <a href="{{ route('jobtypes.show', ['slug' => $item->slug]) }}">
                <div class="row mt-5 mb-5 mx-auto">
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 mt-5 mb-5 align-self-auto ">
                        <img class="mx-auto d-block" src="{{ $item->thumbnail }}" alt="">
                    </div>
                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-12 mt-5 mb-5 align-self-auto ">
                        <h5 class="mt-4 text-center">
                            <strong>
                                {{ $item->title }}
                            </strong>
                        </h5>
                    </div>
                </div>
            </a>
            <hr class="solid">
        @endforeach
    </div>

@endsection
