@extends('layouts.app')

@section('content')
    <main class="main">

        <section class="image-bg" style="--bg-img-url: url('{{ asset('images/pictures/phot.jpg') }}')">

            <div class="navigationZone">
                <a class="page" href="/"><span>Accueil</span></a>
                <a class="page" href="/services"><span>Nos services</span></a>
                <a class="page" href="#"><span>Photonique</span></a>
            </div>

            <div class="contentsZone">
                <h1>Photonique</h1>
                <h2>Nos compétences :</h2>
                <p>Nos élèves-ingénieurs en photonique sont formés à l'optique de manière générale. Leur formation comprend de l'optique linéaire ou non, les lasers et leurs applications, les fibres optiques, la propagation guidée, ...</p>

                <h2> Exemple de projet réalisé par des étudiants:</h2>
                <h3>Le projet Smart-Spectro: </h3>
                <p>Le projet Smart – Spectro allie ingénieusement photonique et informatique afin de réaliser un spectromètre innovant. Modulaire et capable de s’adapter sur smartphone, cet instrument portable et intuitif permet d'analyser l'eau de mer afin de contrôler sa concentration d'algues. Ce projet s'inscrit dans un but de prévention et de sécurité locale. Les étudiants-ingénieurs ayant réalisé cette mission ont dû mettre en œuvre des compétences variées notamment en :</p>
                <ul>
                    <li>
                        Optique
                    </li>
                    <li>
                        Physique
                    </li>
                    <li>
                        Modélisation et impression 3D
                    </li>
                    <li>
                        Développement informatique avec application mobile
                    </li>
                </ul>
                <br>

                <p>Mots clefs : #Photonique, #Santé, #Environnement, #Informatique, #Application_mobile</p>

            </div>
        </section>

    </main>
@endsection
