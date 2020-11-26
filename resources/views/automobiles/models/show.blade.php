@extends('main')
@section('title', '| МОДЕЛИ')
@section('content')
<div class="columns">
    <div class="column is-4">
        <div class="box">
            <aside class="menu">
                <p class="menu-label is-size-3">
                    МОДЕЛИ
                </p>
                <p class="menu-label is-size-4">
                    <a href="{{ route('automobiles_brands.show', $selectedbrand->id) }}" class="button is-success is-inverted"><i class="fas fa-arrow-left fa-lg"></i></a>
                    <u>{{ $selectedbrand->brand }}</u>
                </p>
                <ul class="menu-list">
                    <li>
                        <ul>
                            @foreach($models as $model)
                                <li>
                                    <a href="{{ url('automobiles_models/'.$selectedbrand->id.'/'.$model->id) }}" @if($model->id == $selectedmodel->id) class="is-active" @endif >
                                        <span class="is-size-5">{{ $model->model }}</span>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                </ul>
            </aside>
        </div>
    </div>
    <div class="column is-8">
        <div class="box">
            <aside class="menu">
                <p class="menu-label is-size-3">
                    ПОДМОДЕЛИ
                </p>
                <ul class="menu-list">
                    <li>
                        <ul>
                            @foreach($selectedmodel->submodels as $submodel)
                                <li>
                                    <a class="is-size-5">{{ $submodel->submodel }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                </ul>
                <form method="POST" action="{{ route('automobiles_submodels.store') }}">
                    {{ csrf_field() }}
                    <input type="hidden" name="model_id" value="{{ $selectedmodel->id }}">
                    <input type="hidden" name="brand_id" value="{{ $selectedbrand->id }}">
                    <div class="field has-addons m-t-30">
                        <div class="control">
                            <input type="text" name="submodel" value="" placeholder="нов подмодел" class="input">
                        </div>
                        <div class="control">
                            <button type="submit" class="button is-success">ДОБАВИ</button>
                        </div>
                    </div>
                </form>
            </aside>
        </div>
    </div>
</div>
@endsection
