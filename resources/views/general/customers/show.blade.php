@extends('main')
@section('title', '| КЛИЕНТ')
@section('content')
<div class="columns is-multiline">


    <div class="column is-4">
        <div class="box has-text-centered">
            <div class="has-text-right">
                <a href="{{ route('customers.edit', $customer->id) }}" class="button is-dark is-small is-outlined">
                    РЕДАКТИРАНЕ
                </a>
            </div>
            <i class="far fa-user-circle fa-5x"></i>
            <hr />
            <span class="is-size-5">
                {{ $customer->names }} <br  />
                {{ $customer->nick }} <br  />
                {{ $customer->phone }}
                @if($customer->second_phone) / {{ $customer->second_phone }} @endif
            </span>
            <hr />
            {{ $customer->note }}

        </div>
    </div>


    <div class="column is-12">
        <div class="box">

        </div>
    </div>


    <div class="column is-12">
        <div class="box">

        </div>
    </div>


    <div class="column is-12">
        <div class="box">

        </div>
    </div>



</div>
@endsection
