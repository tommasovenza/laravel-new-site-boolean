@extends('layouts.app')

@section('title')
    FAQ - Boolean Careers
@endsection


@section('content')
    <div class="green">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-12 hero">
                    <h2>Domande frequenti</h2>
                    <p>Le nostre risposte alle tue domande sul corso e sull'inizio della tua carriera da web developer</p>
                </div>
            </div>
        </div>
    </div>

    <section id="white_blue">
        <div class="background"></div>

        <div class="container pseudo">
            <div class="row">
                <div class="col-lg-6 padding white">
                    <h2>Prima del corso</h2>
                    {{-- i quadrati sotto al titolo --}}
                    <div class="regulus-container">
                        <div class="rettangolo"></div>
                        <div class="square-1"></div>
                        <div class="square-2"></div>
                        <div class="square-3"></div>
                    </div>
                    {{-- riempio i campi dinamicamente --}}
                    @foreach ($data as $item)
                        <h3>{{$item['question']}}</h3>
                        <p class="hide">{{$item['answer']}}</p>
                        <hr>
                    @endforeach

                </div>
                <div class="col-lg-6 padding blue">
                    <h2>Dopo il corso</h2>
                    {{-- i quadrati sotto al titolo --}}
                    <div class="regulus-container">
                        <div class="rettangolo primary"></div>
                        <div class="square-1"></div>
                        <div class="square-2"></div>
                        <div class="square-3"></div>
                    </div>
                    {{-- riempio i campi dinamicamente --}}
                    @foreach ($an_data as $item)
                        <h3>{{$item['question']}}</h3>
                        <p class="hide">{{$item['answer']}}</p>
                        <hr>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection


