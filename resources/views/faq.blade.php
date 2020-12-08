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
        <div class="container">
            <div class="row">
                <div class="col-lg-6 padding">
                    <h2>Prima del corso</h2>

                    @foreach ($data as $item)
                        <h3>{{$item['question']}}</h3>
                        <p class="hide">{{$item['answer']}}</p>
                    @endforeach

                </div>
                <div class="col-lg-6 blue padding">
                    <h2>Dopo il corso</h2>

                    @foreach ($an_data as $item)
                        <h3>{{$item['question']}}</h3>
                        <p class="hide">{{$item['answer']}}</p>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection


