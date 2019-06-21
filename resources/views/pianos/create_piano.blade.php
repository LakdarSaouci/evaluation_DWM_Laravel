@extends('layouts.template')

@section('content')
<h1>Créez pianos a proposer!!</h1>

<form method="POST" action="{{ route('store') }}">
        @csrf
        <div class="form-group">
            <label for="marque">Marque</label>
            <input type="text" class="form-control" name="marque" id="marque" placeholder="Marque du piano">
            
        </div>
        <div class="form-group">
            <label for="couleur">Couleur</label>
            <select name="couleur_id">
                @foreach ($couleurs as $couleur)
                    <option value={{ $couleur->id }}>{{ $couleur->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="annee">Année de fabrication</label>
            <input type="number" class="form-control" name="annee" id="date" placeholder="Annee de fabrication">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection