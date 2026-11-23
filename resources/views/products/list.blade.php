@extends('default')

@section('contenu')
    <h1>liste des produits</h1>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table">
        <tr>
            <th>id</th>
            <th>titre</th>
            <th>prix</th>
            <th>actions</th>
        </tr>
        @foreach ($prods as $p)
            <tr>
                <td>{{ $p->id }}</td>
                <td>{{ $p->titre }}</td>
                <td>{{ $p->prix }} dh</td>
                <td>
                    <a href="/product/{{ $p->id }}">detail</a>
                </td>

            </tr>
        @endforeach
    </table>
@endsection
