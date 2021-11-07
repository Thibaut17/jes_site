@extends('layouts.app')
@section('body')
    class="home"
@endsection
@section('content')
<main class="main">

    <section class="intro slanted-container foreground">
        <h2>Bienvenue sur le site de <em>Junior ENSSAT Services</em>.</h2>
        <p>
            Association étudiante implantée au cœur de l’<em>ENSSAT</em> en Bretagne, nous avons pour objectif la valorisation des savoirs et la mise en pratique des étudiants-ingénieurs au sein des entreprises. Riche de nos formations à la pointe des technologies : <em>Photonique</em>, <em>Informatique</em> et <em>Systèmes Numériques</em>, notre objectif est de vous accompagner au sein de la réalisation de vos projets.
        </p>
        <p>De la réalisation de site web pour mettre en avant votre entreprise jusqu’à la conception d’un système optique spécifique, nos étudiants-ingénieurs sont prêt à relever tous vos défis.</p>
        <!--<p>Choisissez l'expertise de <em>JES</em> pour la réalisation de vos projets d'ingénierie <em>en photonique</em>, <em>informatique</em> et <em>électronique</em> !</p>-->
        <br>
        <a href="/services" class="button fancy">Découvrez nos services</a>
        <!--<div class="contentsZone">

        </div>-->
    </section>

    <section class="chiffres">
        <div class="contentsZone">
            <div class="num-data">
                <p class="bignum">3</p>
                <p class="text">Domaines d'expertise technologique</p>
            </div>
            <div class="num-data">
                <p class="bignum">48H</p>
                <p class="text">Délais d'attente de réponse maximal</p>
            </div>
            <div class="num-data">
                <p class="bignum">200</p>
                <p class="text">Elèves-ingénieurs à votre service</p>
            </div>
        </div>
    </section>

    <section class="projets slanted-container mirror foreground">
        <div class="contentsZone">
            <h1>Choisissez JES pour vos projets en ingénierie !</h1>
            <!--<p>JES bénéficie de l'excellence académique de l'ENSSAT de Lannion, qui accueille des pôles de recherche spécialisés en <b>informatique</b>, <b>électronique</b> et <b>photonique</b>.</p>-->
            <p><em>Junior ENSSAT Services</em> est un acteur local offrant des solutions à la pointe de la technologie à vos problèmes techniques.</p>
            <p>Choisir <em>JES</em>, c'est également participer à la réussite de demain en choisissant de faire confiance à la prochaine génération d'ingénieurs. En leur offrant leurs premières expériences professionnelles, vous tissez des liens forts avec l'<em>ENSSAT</em>, ses promotions, et avec les futures ingénieurs du plateau industriel lannionnais.</p>
        </div>
    </section>

    <section class="projets-illustration">
        <div class="contentsZone">
            <a href="/contact" class="button fancy light">
                <b>Obtenir un devis</b>
            </a>
        </div>
    </section>

    <section class="partenaires">
        <div class="contentsZone">
            <h1>Des partenaires de confiance</h1>
            <ul class="partenairesZone">
                <li><a href="https://enssat.fr/" title="ENSSAT">
                        <img class="partenaire" src="{{ asset('images/partners/enssat.png') }}" alt="Logo de l'ENSSAT">
                    </a></li>
                <li><a href="https://mabanque.bnpparibas/" title="BNP Paribas">
                        <img class="partenaire" src="{{ asset('images/partners/bnp.png') }}" alt="Logo de BNP paribas">
                    </a></li>
                <li><a href="https://upgrowy.com/" title="Upgrowy">
                        <img class="partenaire" src="{{ asset('images/partners/upgrowy_2.png') }}" alt="Logo d'Upgrowy">
                    </a></li>
            </ul>
        </div>
    </section>

</main>
@endsection


