@extends('layouts.app')

@section('content')
    <main class="main">

        <section class="image-bg" style="--bg-img-url: url({{ asset('images/pictures/informatique.jpg') }})">

        <div class="navigationZone">
            <a class="page" href="/"><span>Accueil</span></a>
            <a class="page" href="/services"><span>Nos services</span></a>
            <a class="page" href="#"><span>Informatique</span></a>
        </div>

        <div class="contentsZone">
            <h1>Informatique</h1>
            <h2>Nos compétences :</h2>
            <p>Nos élèves-ingénieurs en informatique sont formés au génie logiciel. En dernière année, ils peuvent se spécialiser en cybersécurité ou en intelligence artificielle. Leur formation est aussi transverse avec des éléments de réseaux, d'algorithmique, de web, ... Les technologies vues en cours sont par exemple : le java, le C, les réseaux locaux et distants...</p>
            <h2> Exemple de projet réalisé par des étudiants :</h2>
            <h3>Le projet JEE :</h3>
            <p>Bibliothèque musicale en ligne repose sur la création d’une véritable base de données musicales en web. Passant par l’inscription en ligne de l’utilisateur, la création de playlist et la navigation entre les différents morceaux disponibles ce projet repose sur des connaissances avancées en informatique :</p>
            <ul>
                <li>
                    Développement web avec la création d’une application : HTLM / JAVA / CSS
                </li>
                <li>
                    Gestion de base de données pour prendre en charge les utilisateurs, les playlists etc … : SQL
                </li>
            </ul>
            <br>

            <p>Mots clefs : #Informatique, #Application_web, #Java, #HTML, #CSS</p>

        </div>
        </section>

    </main>
@endsection
