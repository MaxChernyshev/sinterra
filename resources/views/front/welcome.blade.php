@extends('front.layouts.layout')

@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col-lg-12 my-auto">

                @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                    </div>
                @endif


                @if ($message = Session::get('error'))
                    <div class="alert alert-danger alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                    </div>
                @endif


                @if ($message = Session::get('warning'))
                    <div class="alert alert-warning alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                    </div>
                @endif


                @if ($message = Session::get('info'))
                    <div class="alert alert-info alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                    </div>
                @endif


                @if ($errors->any())
                    <div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        Please check the form below for errors
                    </div>
                @endif
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row mx-auto">
            <div class="col-12 align-self-auto">
                <span class="lead">
                    Качественные и современные инженерные коммуникации – не менее важно для Вашего комфорта, чем дизайн интерьера.
                    А использование альтернативных источников энергии еще и обеспечивает максимальную энергоэффективность, снижение затрат на эксплуатацию.
                    Компания Синтерра предлагает комплексную реализацию всех внутренних инженерных систем «под ключ».
                    Это гарантирует ответственность компании за качество выполненных работ.
                    Заполните заявку и получите индивидуальный расчет для Вашего объекта.
                </span>
            </div>
        </div>

        <div class="row mx-auto">
            <div class="col-3 align-self-auto">
                <img src="{{ asset('img/mainpage/services-1.png') }}" alt="">
            </div>
            <div class="col-3 align-self-auto">
                <img src="{{ asset('img/mainpage/services-2.png') }}" alt="">
            </div>
            <div class="col-3 align-self-auto">
                <img src="{{ asset('img/mainpage/services-3.png') }}" alt="">
            </div>
            <div class="col-3 align-self-auto">
                <img src="{{ asset('img/mainpage/services-4.png') }}" alt="">
            </div>
            <div class="col-3 align-self-auto">
                <img src="{{ asset('img/mainpage/services-5.png') }}" alt="">
            </div>
            <div class="col-3 align-self-auto">
                <img src="{{ asset('img/mainpage/services-6.png') }}" alt="">
            </div>
            <div class="col-3 align-self-auto">
                <img src="{{ asset('img/mainpage/services-7.png') }}" alt="">
            </div>
            <div class="col-3 align-self-auto">
                <img src="{{ asset('img/mainpage/services-8.png') }}" alt="">
            </div>
        </div>

        <div class="row mx-auto">
            <div class="col-6 align-self-auto">
                <h3>Что мы предлагаем:</h3>
                <ul>
                    <li>Комплексный подход "под ключ": проектирование, подбор, поставка, монтаж</li>
                    <li>Помогаем разобраться с задачей и предлагаем несколько вариантов решения</li>
                    <li>Квалифицированный персонал - минимальный опыт любого нашего сотрудника от 10 лет в отрасли, каждый имеет профильное образование, ежегодное повышение квалификации</li>
                    <li>Экспертность по инженерному оборудованию и новинкам этого направления</li>
                </ul>
            </div>
            <div class="col-6 align-self-auto">
                <h3>Как мы работаем:</h3>
                <ul>
                    <li>Фиксируем все условия, бюджет и сроки выполнения в договоре</li>
                    <li>Детально обсуждаем задачу и предлагаем оптимальное решение</li>
                    <li>Поставляем оборудование только проверенных производителей в разных ценовых сегментах</li>
                    <li>Четко придерживаемся сроков. Осуществляем надзор за качеством. Тщательно тестируем системы.</li>
                    <li>Предоставляем гарантийное и сервисное обслуживание</li>
                </ul>
            </div>
        </div>
    </div>

@endsection
