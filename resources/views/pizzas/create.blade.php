@extends('layouts.layout')

@section('content')
    <div class="wrapper create-pizza">
        <h1>Create a New Pizza</h1>
        <form action="/pizzas" method="POST">

            <label for="name">Your name:</label>
            <input type="text" id="name" name="name">

            <label for="type">Choose pizza type:</label>
            <select name="type" id="type">
                <option value="margarita">Margarita</option>
                <option value="hawaiian">Hawaiian</option>
                <option value="vege supreme">Veg Supreme</option>
                <option value="volcano">Volcano</option>
            </select>

            <label for="type">Choose base type:</label>
            <select name="base" id="base">
                <option value="cheesy crust">Cheesy Crust</option>
                <option value="garlic crust">Garlic Crust</option>
                <option value="thin & crispy">Thin & Crispy</option>
                <option value="thick">Thick</option>
            </select>

            <input type="submit" value="Order Pizza">

        </form>
    </div>
@endsection
