@extends('front.layouts.layout')

@section('content')

    <div class="container mt-5">
        <div class="row">
            <div class="col-8 mx-auto">
                <form action="{{ route('contact-form-send') }}" method="POST" multiple="">
                    @csrf
                    @method('POST')
                    <div class="form-group">
                        <label for="name">Ваше Имя</label>
                        <input name="name" type="text" class="form-control @error('name') border-danger @enderror" id="name" placeholder="">
                        @if ($errors->has('name'))
                            <div class="error text-danger">
                                {{ $errors->first('name') }}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="email">Ваш email</label>
                        <input name="email" type="email" class="form-control @error('email') border-danger @enderror" id="email" placeholder="pushkin@mail.ru">
                        @if ($errors->has('email'))
                            <div class="error text-danger">
                                {{ $errors->first('email') }}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="letter">Ваше сообщение</label>
                        <textarea class="form-control @error('letter') border-danger @enderror" id="letter" rows="4" name="letter"></textarea>
                        @if ($errors->has('letter'))
                            <div class="error text-danger">
                                {{ $errors->first('letter') }}
                            </div>
                        @endif
                    </div>
{{--                    <div class="form-group mt-4 mb-4">--}}
{{--                        <div class="captcha">--}}
{{--                            <span>{!! captcha_img() !!}</span>--}}
{{--                            <a class="btn btn-danger reload" onClick="history.go(0);">↻</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="form-group mb-4">--}}
{{--                        <input id="captcha" type="text" class="form-control" placeholder="Enter Captcha" name="captcha">--}}
{{--                    </div>--}}

                    <!-- TODO display Captha errors-->

                    <button type="submit" class="btn btn-primary mb-2">Отправить</button>
                </form>
            </div>
        </div>
    </div>

@endsection
