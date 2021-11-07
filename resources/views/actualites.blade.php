@extends('layouts.app')

@section('content')

    <main class="main">

        <section class="gray">
            <div class="navigationZone">
                <a class="page" href="/"><span>Accueil</span></a>
                <a class="page" href="#"><span>Notre actualité</span></a>
            </div>
        </section>

        <section class="gray">
            <h1>Nos actualités : </h1>

            <div class="cardsGrid">
                <div class="card articleVcard">
                    <div class="cardImg">
                        <img src="{{ asset('images/logo.png') }}" alt="Illustration de l'article">
                    </div>
                    <div class="cardTextContents">
                        <h1 class="title"><a href="/actualite">Lancement de l'activité</a></h1>
                        <p class="description">
                            Après deux mois de travail pour la mise en route, l'équipe Junior Enssat Services lance enfin son activité. La JES (Junior ENSSAT Services) est une association à but non lucratif qui vous propose de réaliser des missions dans nos domaines de compétences, ...
                        </p>
                        <div class="extraInfo">
                            <a href="#">Catégorie</a>
                            <span>Écrit par <a href="#">Thibaut</a></span>
                        </div>
                    </div>
                </div>

        </section>



    </main>
@endsection
