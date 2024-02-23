@extends('app')

@section('content')
<main>
    <h1>Acceuil</h1>
    @if(!$users)
        <p>Aucun associé trouvé...</p>
    @endif
    @foreach ($users as $user)
        <h4>{{ $user['name'] }}</h4>
        <p>{{ $user['email'] }}</p>
        @isset($admin)
            <form method="post" action="{{ route('destroy') }}">
                @csrf
                <input type='hidden' value="{{ $user['id'] }}" name='id'>
                <input type='submit' value="Supprimer">
            </form>
        @endisset
    @endforeach
</main>
@endsection
