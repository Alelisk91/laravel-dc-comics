@extends('layouts.main')

@section('page-content')
    <div class="container">
        <h2>Lista Fumetti</h2>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Titolo</th>
                    <th scope="col">Thumb</th>
                    <th scope="col">Serie</th>
                    <th scope="col">Data di Vendita</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Prezzo</th>
                    <th scope="col">Descrizione</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td colspan="2">Larry the Bird</td>
                    <td>@twitter</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
