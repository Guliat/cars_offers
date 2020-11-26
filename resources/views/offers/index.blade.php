@extends('main')
@section('title', '| ОФЕРТИ')
@section('content')

    <div class="m-b-10"><a href="{{ route('offers.create') }}" class="button is-success">НОВА ОФЕРТА</a></div>

    <table class="table is-bordered is-striped is-hoverable is-fullwidth">
        <thead>
            <tr>
                <th>
                    НОМЕР
                </th>
                <th>
                    ПОЛУЧАТЕЛ
                </th>
                <th>
                    ДАТА (Д/М/Г)
                </th>
                <th>
                    СРОК НА ОФЕРТАТА
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($offers as $offer)
            <tr>
                <td class="is-size-4"><a href="{{ route('offers.show', $offer->id) }}">{{ $offer->id }}</a></td>
                <td>{{ $offer->recipient }}</td>
                <td>{{ date('d/m/Y', strtotime($offer->date)) }}</td>
                <td>{{ $offer->deadline }} ДНИ</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $offers->render('partials._pagination') }}
@endsection
