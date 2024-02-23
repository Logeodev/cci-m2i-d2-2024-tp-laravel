@extends('app')

@section('content')
<main>
    <h1>Admin</h1>

    <form action="{{ route('admin.connect') }}" method="post">
        @csrf
        <input type="password" name="password" placeholder="Password">
        <input type="submit" value="Passer administrateur">
    </form>
</main>
@endsection
