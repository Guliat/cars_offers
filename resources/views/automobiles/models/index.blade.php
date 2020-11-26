
@extends('main')
@section('title', '| МОДЕЛИ')
@section('content')
<div class="columns">
    <div class="column is-4">
        <div class="box">
            <aside class="menu">
                <p class="menu-label is-size-3">
                    МАРКИ
                </p>
                <ul class="menu-list">
                    <li>
                        <ul>
                            @foreach($brands as $brand)
                                <li>
                                    <a href="{{ route('automobiles_brands.show', $brand->id) }}" @if($brand->id == $selectedbrand->id ) class="is-active" @endif>
                                        <span class="is-size-5">
                                            {{ $brand->brand }}
                                        </span>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                </ul>
                <form method="POST" action="{{ route('automobiles_brands.store') }}">
                    {{ csrf_field() }}
                    <div class="field has-addons m-t-30">
                        <div class="control">
                            <input type="text" name="brand" value="" placeholder="нова марка" class="input">
                        </div>
                        <div class="control">
                            <button type="submit" class="button is-success">ДОБАВИ</button>
                        </div>
                    </div>
                </form>
            </aside>
        </div>
    </div>
    <div class="column is-8">
        <div class="box">
            <aside class="menu">
                <p class="menu-label is-size-3">
                    МОДЕЛИ
                </p>
                <ul class="menu-list">
                    <li>
                        <ul>
                            @foreach($selectedbrand->models as $model)
                                <li>
                                    <a href="{{ url('automobiles_models/'.$selectedbrand->id.'/'.$model->id) }}" class="is-size-5"> {{ $model->model }} </a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                </ul>
                <form method="POST" action="{{ route('automobiles_models.store') }}">
                    {{ csrf_field() }}
                    <input type="hidden" name="brand_id" value="{{ $selectedbrand->id }}">
                    <div class="field has-addons m-t-30">
                        <div class="control">
                            <input type="text" name="model" value="" placeholder="нов модел" class="input">
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
