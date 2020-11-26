@extends('main')
@section('title', '| ОФЕРТИ')
@section('content')

    <div class="m-b-10"><a href="{{ route('offers_items.create') }}" class="button is-success">НОВ ПРОДУКТ</a></div>

    <div class="m-b-10">
        КАТЕГОРИИ <br />
        @foreach($categories as $category)
            <a href="{{ route('offers.items.sort.category', $category->id) }}" class="button is-small"> {{ $category->name }} </a>
        @endforeach
    </div>

    <table class="table is-bordered is-fullwidth">
        <thead>
            <tr>
                <th>
                    СНИМКА
                </th>
                <th>
                    ИМЕ / КРАТКО ОПИСАНИЕ
                </th>
                <th>
                    ОПИСАНИЕ
                </th>
                <th>
                    ЦЕНА (без ДДС)
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($items as $item)
                <tr>
                    <td width="150px" class="has-text-centered">
                        <a href="{{ route('offers_items.edit', $item->id) }}">
                            <img src="{{ asset('/images') }}/{{ $item->image }}" />
                        </a>
                    </td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->description }}</td>
                    <td>{{ $item->price }}лв.</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $items->render('partials._pagination') }}
@endsection
