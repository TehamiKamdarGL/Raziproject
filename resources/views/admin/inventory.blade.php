@extends('layouts.adminmain')

@section('main-section')

<div class="container mt-4">

    <a href="/addproduct" class="btn btn-outline-secondary my-3">Add Products</a>

    <div class="table-responsive-lg">
        <table class="table table-default">
            <thead>
                <tr>
                    <th scope="col">Column 1</th>
                    <th scope="col">Column 2</th>
                    <th scope="col">Column 3</th>
                </tr>
            </thead>
            <tbody>
                <tr class="">
                    <td scope="row">R1C1</td>
                    <td>R1C2</td>
                    <td>R1C3</td>
                </tr>
            </tbody>
        </table>
    </div>

</div>

@endsection