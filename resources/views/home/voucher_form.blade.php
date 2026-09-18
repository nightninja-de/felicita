@extends('layout.layout')

@php
    $title = 'Gutschein kaufen';
    $subTitle = 'Gutschein';
    $metaDescription = 'Verschenken Sie einen Felicità-Gutschein – das perfekte Geschenk für Liebhaber mediterraner Küche in Leipzig. Jetzt online kaufen.';
@endphp

@section('content')
<div class="container" style="max-width: 500px; margin: 40px auto;">
    <h2>Gutschein / Voucher Reservierung</h2>
    <form method="POST" action="{{ route('voucher.checkout') }}">
        @csrf
        <div class="form-group mb-3">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group mb-3">
            <label for="email">E-Mail</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group mb-3">
            <label for="amount">Gutscheinbetrag (€)</label>
            <input type="number" class="form-control" id="amount" name="amount" min="10" step="1" required>
        </div>
        <button type="submit" class="btn btn-primary">Weiter zur Zahlung</button>
    </form>
</div>
@endsection
