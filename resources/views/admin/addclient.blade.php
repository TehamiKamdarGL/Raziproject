@extends('layouts.adminmain')

@section('main-section')

<div class="container w-50 mt-5">
    <form action="/upload" method="post">
        @csrf
        <input type="text" class="form-control" placeholder="Name" name="name">
        <input type="email" class="form-control mt-2" placeholder="Email" name="email">
        <input type="date" class="form-control mt-2" name="date">
        <input type="time" class="form-control mt-2" name="time">
        <input type="text" class="form-control mt-2" placeholder="Service" name="service">
        <input type="text" class="form-control mt-2" placeholder="Phone" name="phone">
        <input type="submit" class="btn btn-info mt-4" value="Add Client">
    </form>
</div>

@endsection