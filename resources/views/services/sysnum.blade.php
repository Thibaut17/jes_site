@extends('layouts.app')

@section('content')
    <main class="main">

        <section class="image-bg" style="--bg-img-url: url('{{ asset('images/pictures/sysnum.jpg') }}')">

            <div class="navigationZone">
                <a class="page" href="/"><span>Accueil</span></a>
                <a class="page" href="/services"><span>Nos services</span></a>
                <a class="page" href="#"><span>Systèmes numériques</span></a>
            </div>

            <div class="contentsZone">
                <h1>Systèmes numériques</h1>
                <h2>Nos compétences :</h2>
                <p>Nos élèves-ingénieurs en systèmes numériques sont formés à la conception de systèmes embarqués. Leur formation comprend de l'informatique, de l'analyse des signaux, de la théorie de l'information. Les technologies qu'ils étudient sont : les microcontroleurs, le VHDL, le java, les systèmes d'exploitation temps réels ou non,... </p>


            </div>
        </section>

    </main>
@endsection
