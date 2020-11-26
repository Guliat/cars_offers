@extends('main')

@section('content')


НАЧАЛО

<hr />

<a class="button is-danger" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">ИЗХОД</a>
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;"> {{ csrf_field() }} </form>



@endsection
