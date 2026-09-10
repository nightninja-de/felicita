@extends('staff.layout')

@section('title', 'Staff Login')

@section('content')
<div class="card">
    <h1>Felicità &ndash; Staff Login</h1>
    <form method="POST" action="{{ route('staff.login') }}">
        @csrf
        <label for="email">E-Mail</label>
        <input type="email" id="email" name="email" value="{{ old('email') }}" required autofocus>

        <label for="password">Passwort</label>
        <input type="password" id="password" name="password" required>

        @if ($errors->any())
            <div class="error">{{ $errors->first() }}</div>
        @endif

        <button type="submit">Anmelden</button>
    </form>
</div>
@endsection
