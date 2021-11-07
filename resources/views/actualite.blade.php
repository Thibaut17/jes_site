@extends('layouts.app')

@section('content')
<main class="main">
    <section class="image-bg" style="--bg-img-url: url('{{ asset('images/pictures/banniere.png') }}')">

        <div class="navigationZone">
            <a class="page" href="/"><span>Accueil</span></a>
            <a class="page" href="/actualites"><span>Nos actualités</span></a>
            <a class="page" href="#"><span>Lancement de l'activité</span></a>
        </div>

        <div class="contentsZone">
            <h1>Lancement de l'activité</h1>
            <p>Bonjour,</p>
            <p>
            Après deux mois de travail pour la mise en route, l'équipe Junior Enssat Services lance enfin son activité.

            La JES (Junior ENSSAT Services) est une association à but non lucratif qui vous propose de réaliser des missions dans nos domaines de compétences, à savoir la photonique, les systèmes numériques et l'informatique. Nous sommes composés uniquement d'élèves-ingénieurs de l'ENSSAT.

            Nous vous proposons par exemple des missions de développement de sites web / applications, de conseils, étude de systèmes ...
            </p>
            <p>
            Nous sommes impatients de pouvoir répondre à vos besoins.
            </p>
            <p>
            N'hésitez pas à nous contacter dès à présent pour voir ensemble ce que nous pouvons vous apporter.
            </p>
            <p>
                Mail : <a href="mailto:contact@junior-enssat-services.fr">contact@junior-enssat-services.fr</a>
            </p>
            <p>
            L'élève ingénieur en charge de la communication pour l'équipe JES
            </p>
        </div>
    </section>
</main>
@endsection
