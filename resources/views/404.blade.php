@extends('layouts.app')

@section('content')
    <main class="main">

        <section class="navigation">
            <div class="contentsZone">
                <a class="page" href="/"><span>Accueil</span></a>
                <a class="page" href="#"><span>Erreur 404</span></a>
            </div>
        </section>

        <section>
            <div class="contentsZone">
                <h1>Erreur 404</h1>

                <p>La page que vous recherchez n'existe pas vous pouvez retourner à l'<a href="/">accueil</a>.</p>
            </div>
        </section>

    </main>
@endsection
