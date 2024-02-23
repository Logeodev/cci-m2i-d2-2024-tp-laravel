@extends('app')

@section('content')
<main>
    <form action="{{ route('store') }}" method="post">
        @csrf
        <label for='name'>Nom de l'associé :</label>
        <input type='text' name='name'>
        <br>
        <label for='email'>Email de l'associé :</label>
        <input type='email' name='email'>
        <br>
        <input type='submit' value='Ajouter la personne'>
    </form>
</main>
@endsection
