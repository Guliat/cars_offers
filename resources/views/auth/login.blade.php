@extends('main')

@section('header', 'ВХОД')

@section('content')

<div class="columns">
    <div class="column is-one-third is-offset-one-third m-t-50">
        <div class="card">
           <img src="car.png" width="50%" class="m-l-100" />
            <div class="card-content">
                <form action="{{route('login')}}" method="POST" role="form">
                  {{csrf_field()}}
                  <div class="field">
                    <label for="email" class="label">EMAIL</label>
                    <p class="control">
                      <input class="input {{$errors->has('email') ? 'is-danger' : ''}}" type="text" name="email" id="email" placeholder="name@example.com" value="{{old('email')}}">
                    </p>
                    @if ($errors->has('email'))
                      <p class="help is-danger">{{$errors->first('email')}}</p>
                    @endif
                  </div>
                  <div class="field">
                    <label for="password" class="label">ПАРОЛА</label>
                    <p class="control">
                      <input class="input {{$errors->has('password') ? 'is-danger' : ''}}" type="password" name="password" id="password">
                    </p>
                    @if ($errors->has('password'))
                      <p class="help is-danger">{{$errors->first('password')}}</p>
                    @endif

                  </div>
                  <div class="has-text-centered m-t-30">ЗАПОМНИ МЕ</div>
                    <div class="field has-text-centered">
                        <input id="switchThinColorDanger" type="checkbox" name="switchThinColorDanger" class="switch is-thin is-primary is-medium">
                         <label for="switchThinColorDanger"></label>
                    </div>
                    <hr>
                  <button type="submit" class="button is-primary is-fullwidth">ВЛЕЗ</button>
                </form>
            </div> <!-- end of .card-content -->
        </div> <!-- end of .card -->
    <!-- <h5 class="has-text-centered m-t-20"><a href="{{route('password.request')}}" class="has-text-dark">Забравена парола?</a></h5> -->
    </div>
</div>

@endsection

@section('scripts')

<script>
var App = new Vue({
    el: '#app',
    data: {}
})
</script>

@endsection
