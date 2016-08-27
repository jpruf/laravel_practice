@extends('layouts.master')

@section('content')
    <div class="centered">
        <a href="{{route('niceaction', ['action'=>'greet'])}}">Greet</a>
        <a href="{{route('niceaction', ['action'=>'greet'])}}">Handshake</a>
        <a href="{route('niceaction', ['action'=>'greet'])}}">Hug</a>
        <br>
        <form method="post" action="{{route('be_nice')}}">
            <label for="select-action">I want to..</label>
            <select id="select-action" name="action">
                <option value="greet">Greet</option>
                <option value="handshake">Handshake</option>
                <option value="hug">Hug</option>
            </select>
            <input type="text" name="name"/>
            <input type="submit" value="Do something!"/>
            <input type="hidden" value={{Session::token()}} name="_token"/>
        </form>
    </div>
@endsection