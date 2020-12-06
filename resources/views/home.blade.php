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

        <section id="numbers">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2>I nostri numeri</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        
                        <div class="wrapper-three-items">
                            <div class="three-items">
                                <img src="{{asset('img/person.png')}}" alt="persona">
                                <h3>700 +</h3>
                                <p>GLI STUDENTI CHE FINO AD OGGI HANNO SEGUITO IL CORSO ONLINE DI BOOLEAN.</p>
                            </div>
                            <div class="three-items">
                                <img src="{{asset('img/pacman.png')}}" alt="pacman">
                                <h3>98 %</h3>
                                <p>LA PERCENTUALE DEI NOSTRI STUDENTI CHE ORA LAVORA IN CAMPO TECH.</p>
                            </div>
                            <div class="three-items">
                                <img src="{{asset('img/rettangolo.png')}}" alt="rettangolo">
                                <h3>23.000 €</h3>
                                <p>LO STIPENDIO MEDIO LORDO DI PARTENZA DEGLI STUDENTI ASSUNTI.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            

        </section>




    </main>
@endsection

