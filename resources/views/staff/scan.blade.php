@extends('staff.layout')

@section('title', 'Gutschein scannen')

@section('content')
<div class="card">
    <h1>Gutschein scannen</h1>
    <div id="qr-reader" style="width: 100%; border-radius: 12px; overflow: hidden;"></div>

    <div id="result" style="margin-top: 16px; display: none; padding: 14px; border-radius: 8px; text-align: center; font-weight: bold;"></div>

    <div id="redeem-action" style="display: none; margin-top: 8px;">
        <button id="redeem-btn" type="button">Jetzt einlösen</button>
    </div>

    <label for="manual-code" style="margin-top: 20px;">Code manuell eingeben</label>
    <input type="text" id="manual-code" placeholder="XXXX-XXXX">
    <button id="manual-check-btn" type="button">Prüfen</button>

    <form method="POST" action="{{ route('staff.logout') }}">
        @csrf
        <a class="logout" href="#" onclick="event.preventDefault(); this.closest('form').submit();">Abmelden</a>
    </form>
</div>

<script src="{{ asset('assets/js/plugins/html5-qrcode.min.js') }}"></script>
<script src="{{ asset('assets/js/staff-scan.js') }}"></script>
@endsection
