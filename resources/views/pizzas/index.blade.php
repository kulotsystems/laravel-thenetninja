@extends('layouts.layout')

@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            Pizza List
        </div>

        <p>{{ $name }}</p>
        <p>{{ $age }}</p>

        @foreach($pizzas as $pizza)
            <div>
                {{ $pizza->name }} - {{ $pizza->type }} - {{ $pizza->base }}
            </div>
        @endforeach
    </div>
</div>
@endsection
