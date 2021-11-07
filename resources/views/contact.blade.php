@extends('layouts.app')

@section('content')
    <main class="main">

        <section class="navigation">
            <div class="contentsZone">
                <a class="page" href="/"><span>Accueil</span></a>
                <a class="page" href="#"><span>Nous contacter</span></a>
            </div>
        </section>

        <section>
            <div class="contentsZone">
                <h1>Nous contacter</h1>
                <h2>Par mail : </h2>
                <p>Vous pouvez nous adresser vos demandes à <a href="mailto:jes@enssat.fr">jes@enssat.fr</a></p>
                <h2>Par téléphone : </h2>
                <p>Vous pouvez nous adresser vos demandes à <a href="telto:+33 2 96 46 92 11">+33 2 96 46 92 11</a></p>
                <h2>Par voie postale : </h2>
                <p>Junior ENSSAT Services</p>
                <p>6 Rue de Kerampont CS 80518</p>
                <p>22305 Lannion</p>
            </div>
        </section>

    </main>
@endsection
