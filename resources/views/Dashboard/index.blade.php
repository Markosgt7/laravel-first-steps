@extends("layout/master")

@section("content")
    <h1>Bienvenidos a laravel </h1>
    @include("fragment/subview")
    <hr>
    
    <p>Condicionales forelse con blade</p>
    @forelse ($posts as $a )
        <p>{{$a}}</p>
    @empty
        No hay data
    @endforelse
    <hr>
    
@endsection("content")