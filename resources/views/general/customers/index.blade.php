@extends('main')
@section('title', '| КЛИЕНТИ')
@section('content')
    <div class="field has-addons">
        <div class="m-r-30"><a href="{{ route('customers.create') }}" class="button is-success">НОВ КЛИЕНТ</a></div>
        <form method="POST" action="{{ route('customers.search') }}">
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
                ИМЕНА
            </th>
            <th>
                ПРЯКОР / НАПОМНЯНЕ
            </th>
            <th>
                ТЕЛЕФОН/И
            </th>
            <th>
                БЕЛЕЖКА
            </th>
            <th>
                ДОБАВЕН
            </th>
        </tr>
    </thead>
    @foreach($customers as $customer)
        <tr>
            <td class="is-size-5 has-text-centered has-text-weight-bold">
                <a href="{{ route('customers.show', $customer->id) }}">
                    #{{ $customer->id }}
                </a>
            </td>
            <td>
                {{ $customer->names }}
            </td>
            <td>
                {{ $customer->nick }}
            </td>
            <td>
                {{ $customer->phone }}
                @if($customer->second_phone) , {{ $customer->second_phone }} @endif
            </td>
            <td>
                {{ $customer->note }}
            </td>
            <td>
                {{ date('d.m.Y', strtotime($customer->created_at)) }}
            </td>
        </tr>
    @endforeach
</table>
{{ $customers->render('partials._pagination') }}

@endsection
