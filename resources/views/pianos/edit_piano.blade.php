@extends('layouts.template')

@section('content')
    <h1>Vous êtes sur la page de modification</h1>

    <form method="POST" action="{{ route('update', $piano->id) }}">
        @csrf
        <div class="form-group">
            <label for="marque">marque</label>
            <input type="text" class="form-control" name="marque" id="marque" placeholder="Entre marque" value={{ $piano->name }}>
            
        </div>
        <div class="form-group">
            <label for="couleur">Couleur</label>
            <select name="couleur_id">
                @foreach ($couleurs as $couleur)
                    <option value={{ $couleur->id }} @if ($couleur->id == $piano->couleur_id)
                        selected
                @endif>{{$couleur->name}}</option>

                <option value={{ $couleur->id }} {{ $couleur->id == $piano->couleur_id ?'selected':'' }}>{{ $couleur->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="annee">Année</label>
            <input type="number" class="form-control" name="annee" id="date" placeholder="Année du piano"value={{ $piano->annee }}>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection