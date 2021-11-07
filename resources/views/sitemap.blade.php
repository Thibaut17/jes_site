@extends('layouts.app')

@section('content')

    <main class="main">

        <section class="navigation">
            <div class="contentsZone">
                <a class="page" href="/"><span>Accueil</span></a>
                <a class="page" href="#"><span>Plan du site</span></a>
            </div>
        </section>

        <section class="siteMap">
            <div class="contentsZone">
                <h1>Plan du site</h1>
                <a href="/"><p>Accueil</p></a>
                <div class="siteMapBox">
                    <a href="/services/"><p>Nos services</p></a>
                    <div class="siteMapBox">
                        <a href="/services/informatique/"><p>Informatique</p></a>
                        <a href="/services/electronique/"><p>Electronique</p></a>
                        <a href="/services/photonique/"><p>Photonique</p></a>
                    </div>
                    <a href="/equipe/"><p>Notre équipe</p></a>
                    <a href="/actualites/"><p>Nos actualités</p></a>
                    <a href="/contact/"><p>Nous contacter</p></a>

                    <a href="/sitemap/"><p>Plan du site</p></a>
                    <a href="/legal/"><p>Mentions légales</p></a>
                    <a href="/confidentialite/"><p>Déclaration de confidentialité</p></a>
                </div>
            </div>
        </section>

    </main>
@endsection
