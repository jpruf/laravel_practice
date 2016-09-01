@extends('layouts/master')

@section('content')
    <a href="{{route('fruitgetpg', ['fruit' => 'mango'])}}">Mango</a>
    <a href="{{route('fruitgetpg', ['fruit' => 'papaya'])}}">Papaya</a>
    <a href="{{route('fruitgetpg', ['fruit' => 'pineapple'])}}">Pineapple</a>
<<<<<<< HEAD
    @if (count($errors)>0)
        @foreach ($errors->all() as $error)
        <ul>
            {{$error}}
        </ul>
        @endforeach
    @endif
=======
    
>>>>>>> f0169dca169277fba863f84b259db1eac8e910fd
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
    
<<<<<<< HEAD
@endsection
=======
@endsection
>>>>>>> f0169dca169277fba863f84b259db1eac8e910fd
