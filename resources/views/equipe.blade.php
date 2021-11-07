@extends('layouts.app')

@section('content')
    <main class="main">
        <section class="gray">

            <div class="navigationZone">
                <a class="page" href="/"><span>Accueil</span></a>
                <a class="page" href="#"><span>Notre équipe</span></a>
            </div>

            <div class="contentsZone">
                <h1>Notre équipe</h1>
                <p>La Junior ENSSAT Services se décompose de la façon suivante :</p>
                <br>
                <section class="white">
                    <div class="cardsGrid">
                        <div class="card titleCard large-h-3 large-v-2">
                            <div class="cardImg">
                                <img src="{{ asset('images/pictures/presidence.png') }}" alt="Président de JES">
                            </div>
                            <div class="cardTextContents">
                                <h1 class="title">Présidence : Louis Blanchon</h1>
                            </div>
                        </div>
                    </div>
                    <div class="cardsGrid">
                        <div class="card titleCard large-h-3 large-v-2">
                            <div class="cardImg">
                                <img src="{{ asset('images/pictures/secretariat.png') }}" alt="Secrétariat de JES">
                            </div>
                            <div class="cardTextContents">
                                <h1 class="title">Secrétariat : Emma Bothereau</h1>
                            </div>
                        </div>
                    </div>
                    <div class="cardsGrid">
                        <div class="card titleCard large-h-3 large-v-2">
                            <div class="cardImg">
                                <img src="{{ asset('images/pictures/tresorerie.png') }}" alt="Trésorerie de Jes">
                            </div>
                            <div class="cardTextContents">
                                <h1 class="title">Trésorerie : Julien Garay</h1>
                            </div>
                        </div>
                    </div>
                    <div class="cardsGrid">
                        <div class="card titleCard large-h-3 large-v-2">
                            <div class="cardImg">
                                <img src="{{ asset('images/pictures/commercial.png') }}" alt="Pôle commercial de Jes">
                            </div>
                            <div class="cardTextContents">
                                <h1 class="title">Pôle commercial : Axelle Rieu</h1>
                            </div>
                        </div>
                    </div>
                    <div class="cardsGrid">
                        <div class="card titleCard large-h-3 large-v-2">
                            <div class="cardImg">
                                <img src="{{ asset('images/pictures/suivi_projet.png') }}" alt="Pôle suivi de projet de Jes">
                            </div>
                            <div class="cardTextContents">
                                <h1 class="title">Pôle suivi de projet : Ewan Josset</h1>
                            </div>
                        </div>
                    </div>
                    <div class="cardsGrid">
                        <div class="card titleCard large-h-3 large-v-2">
                            <div class="cardImg">
                                <img src="{{ asset('images/pictures/communication.png') }}" alt="Pôle communication de Jes">
                            </div>
                            <div class="cardTextContents">
                                <h1 class="title">Pôle communication : Thibaut Jolive</h1>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        </section>

    </main>
@endsection
