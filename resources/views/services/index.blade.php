@extends('layouts.app')

@section('content')
    <main class="main">


        <section class="navigation gray">
            <div class="contentsZone">
                <a class="page" href="/"><span>Accueil</span></a>
                <a class="page" href="#"><span>Nos services</span></a>
            </div>
        </section>
        <section class="gray">
            <section class="cardsGrid">
                <div class="card buttonCard">
                    <div class="cardImg">
                        <img src="{{ asset('images/pictures/informatique.jpg') }}" alt="Services informatiques">
                    </div>
                    <div class="cardTextContents">
                        <h1 class="title"><a href="/services/informatique">Informatique</a></h1>
                        <p class="description">
                            Nos élèves-ingénieurs en informatique sont formés au génie logiciel. En dernière année, ils peuvent se spécialiser en cybersécurité ou en intelligence artificielle...
                        </p>
                    </div>
                    <a href="/services/informatique" class="button">Découvrez nos services</a>
                </div>
                <div class="card buttonCard">
                    <div class="cardImg">
                        <img src="{{ asset('images/pictures/sysnum.jpg') }}" alt="Services électroniques">
                    </div>
                    <div class="cardTextContents">
                        <h1 class="title"><a href="/services/sysnum">Systèmes numériques</a></h1>
                        <p class="description">
                            Nos élèves-ingénieurs en systèmes numériques sont formés à la conception de systèmes embarqués. Leur formation comprend de l'informatique, de l'analyse des signaux, ...
                        </p>
                    </div>
                    <a href="/services/sysnum" class="button">Découvrez nos services</a>
                </div>
                <div class="card buttonCard">
                    <div class="cardImg">
                        <img src="{{ asset('images/pictures/phot.jpg') }}" alt="Services photoniques">
                    </div>
                    <div class="cardTextContents">
                        <h1 class="title"><a href="/services/photonique">Photonique</a></h1>
                        <p class="description">
                            Nos élèves-ingénieurs en photonique sont formés à l'optique de manière générale. Leur formation comprend de l'optique linéaire ou non, les lasers et leurs applications,     ...
                        </p>
                    </div>
                    <a href="/services/photonique" class="button">Découvrez nos services</a>
                </div>
            </section>
        </section>

    </main>
@endsection
