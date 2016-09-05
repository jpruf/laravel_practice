@extends('layouts/master')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>
        function send(event){
            event.preventDefault();
            $.ajax({
               url: "{{route('add_fruit')}}",
               type: 'POST',
               data:{name: $('#name').val(), taste: $('#taste').val(), _token:"{{Session::token()}}"}
            });
        };
    </script>
@section('content')
    @foreach($fruits as $fruit)
        <a href="{{ route('fruitgetpg', ['fruit' =>lcfirst($fruit->name)]) }}">{{$fruit->name}}</a> 
    @endforeach
    @if (count($errors)>0)
        @foreach ($errors->all() as $error)
        <ul>
            {{$error}}
        </ul>
        @endforeach
    @endif
    <form method="post" action="{{route('add_fruit')}}">

        <input type="text" id="name" name="name" placeholder="fruit">
        <input type="text" id="taste" name="taste" placeholder="taste">
        <button type="submit" onclick="send(event)">Add fruit!</button>
        <input type="hidden" value="{{Session::token()}}" name="_token"/>
    </form>
    <br><br>
    <ul>
        @foreach($logged_fruits as $logged_fruit)
            <li>
                {{$logged_fruit->fruit->name}}
                @foreach($logged_fruit->fruit->categories as $category)
                    {{$category->name}}
                @endforeach
            </li>
        @endforeach
    </ul>
    @if($logged_fruits->lastPage() > 1)
        @for($i = 1; $i <= $logged_fruits->lastPage(); $i++)
            <a href="{{$logged_fruits->url($i)}}">{{$i}}</a>
        @endfor
    @endif

@endsection