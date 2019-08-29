@extends('layouts.app')

@section('content')
    <div class="center" id="content">
        <h1 class="bold">{{$exception}} ERROR</h1>
        <h2>
            NEIZDEVĀS IELĀDĒT LAPU
            @if ($exception == 404)
                <span class="text-lowercase">: {{$url}}</span>
            @endif
        </h2>
        <h3><a href="{{url('/')}}">DOTIES UZ GALVENO LAPU</a></h3>
    </div>
@endsection

@section('style')
<style>
    #content {  
        height: 100vh;
        padding-top: 30vh;
        background-color: rgba(255, 255, 255, 1);
    }
    #content h1 {font-size: 500%; color: rgba(0,0,0, 0.75);}
    #content h2 {
        font-size: 300%;
        color: gray;
        margin-top: 50px;
    }
    #content h3 a {color: gray;}    
</style>
@endsection