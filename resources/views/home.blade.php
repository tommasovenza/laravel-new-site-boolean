@extends('layouts.app')

@section('content')
    <main>
        <section id="above-the-fold">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 claim">
                        <h1>Cambia la tua vita. <br>Entra in Boolean.</h1>
                        <h3>Segui il corso, diventi un web developer e trovi lavoro.</h3>

                        <div class="text">
                            <ul>
                                <li><a href="#"><i class="fas fa-chevron-right"></i> 6 mesi di corso full time, online e in diretta</a></li>
                                <li><a href="#"><i class="fas fa-chevron-right"></i> Nessuna competenza di programmazione richiesta</a></li>
                                <li><a href="#"><i class="fas fa-chevron-right"></i> Se non trovi lavoro ti rimborsiamo</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 image-claim">
                        <img src="{{asset('img/students.gif')}}" alt="studenti">
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

