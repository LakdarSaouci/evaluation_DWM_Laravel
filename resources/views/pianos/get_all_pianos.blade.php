@extends('layouts.template')

@section('content')
    <h1>Liste des pianos</h1>
    <table class="text-center table table-striped">
        <thead>
            <tr>
                <th>marque</th>
                <th>couleur</th>
                <th>année</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach ($pianos as $piano)
            <tr>
                <td>{{ $piano->marque }}</td>
                <td>{{ $piano->couleur_id }}</td>
                <td>{{ $piano->annee }}</td>
                <td><a href="{{ route('edit', $piano->id) }}"><button class="btn btn-primary">modify</button></a></td>
                <td>
                    <form method="POST" action="{{ route('delete', $piano->id) }}">
                        @csrf
                        <button class="btn btn-danger">deleted</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection