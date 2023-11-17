@extends('layouts.app')

@section('title', 'Celliers')

@section('content')
<main class="cellier-index-container">
    <header class="cellier-index-titre">
        <h3>Vos celliers</h3>
        <div class="cellier-index-btn">
            <form action="{{ route('cellier.create') }}" method="GET">
                <button type="submit" class="cellier-index-btn-ajouter">AJOUTER UN CELLIER</button>
        </div>
    </header>
    <section class="cellier-index-list">
        @foreach($items as $index => $item)
        <article class="cellier-index-item">
            <div>
                <a href="{{ route('cellier.show', $item->id) }}" class="cellier-index-select">
                    <div class="cellier-index-item-content">
                        <div class="cellier-index-item-image">
                            <img alt="{{ $item->nom }}" src="{{ asset('icons/' . $random_icon) }}" class="cellier-index-icon" />
                        </div>
                        <div class="cellier-index-name">{{ $item->nom }}</div>
                    </div>
                </a>
            </div>
            <div class="cellier-index-bottle-count-container">
                <a href="{{ route('bouteille.recherche') }}" class="cellier-index-bottle-count-link">
                    <small class="cellier-index-bottle-count">{{ $index }} Bouteille</small>
                </a>
            </div>
        </article>
        @endforeach
    </section>

    



</main>
@endsection

@include('layouts.footer')