@extends('layouts/master')

@section('content')
    <a href="{{route('fruitgetpg', ['fruit' => 'mango'])}}">Mango</a>
    <a href="{{route('fruitgetpg', ['fruit' => 'papaya'])}}">Papaya</a>
    <a href="{{route('fruitgetpg', ['fruit' => 'pineapple'])}}">Pineapple</a>
    
    <form method="post" action="{{route('fruitpostpg')}}">
        <select id="select-fruit" name="fruit">
            <option value="mango">Mango</option>
            <option value="papaya">Papaya</option>
            <option value="pineapple">Pineapple</option>
        </select>
        <input type="text" name="name">
        <input type="submit" value="Get a fruit!">
        <input type="hidden" value="{{Session::token()}}" name="_token"/>
    </form>
    
@endsection
