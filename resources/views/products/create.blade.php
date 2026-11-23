@extends('default')

@section('contenu')
    <h1>Nouveau produit</h1>

    <form action="/store"
     method="POST">

    <label for="titre">titre</label>
    <input type="text" id="titre"
     name="tt"> <br><br>
    <label for="prix">prix</label>
    <input type="number" id="prix"
    name="pp"> <br><br>

    <input type="submit" value="ajouter + ">
    </form>
@endsection
