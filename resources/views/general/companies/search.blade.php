@extends('main')
@section('title', '| ФИРМИ')
@section('content')
    <div class="field has-addons">
        <div class="m-r-30"><a href="{{ route('companies.create') }}" class="button is-success">НОВА ФИРМА</a></div>
        <form method="POST" action="{{ route('companies.search') }}">
            {{ csrf_field() }}
            <div class="field has-addons">
                <div class="control"><input class="input" type="text" name="word" placeholder="ТЪРСЕНЕ ..."></div>
                <div class="control"><button type="submit" class="button is-dark"> ТЪРСИ </button></div>
            </div>
        </form>
    </div>
    <hr />
<table class="table is-bordered is-striped is-hoverable is-fullwidth">
    <thead>
        <tr>
            <th class="has-text-centered">
                НОМЕР
            </th>
            <th>
                ФИРМА
            </th>
            <th>
                ЕИК
            </th>
            <th>
                МОЛ
            </th>
            <th>
                ИН по ДДС
            </th>
        </tr>
    </thead>
    @foreach($companies as $company)
        <tr>
            <td class="is-size-5 has-text-centered has-text-weight-bold">
                <a href="{{ route('companies.show', $company->id) }}">
                    #{{ $company->id }}
                </a>
            </td>
            <td>
                {{ $company->name }}
            </td>
            <td>
                {{ $company->number }}
            </td>
            <td>
                {{ $company->manager }}
            </td>
            <td>
                {{ $company->vat_number }}
            </td>
        </tr>
    @endforeach
</table>

@endsection
