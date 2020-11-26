@extends('main')
@section('title', '| ФИРМА')
@section('content')
<div class="columns is-multiline">


    <div class="column is-4">
        <div class="box has-text-centered">
            <div class="has-text-right">
                <a href="{{ route('companies.edit', $company->id) }}" class="button is-dark is-small is-outlined">
                    РЕДАКТИРАНЕ
                </a>
            </div>
            @if($company->is_provider == 1)
                <span class="tag is-success is-small">ДОСТАВЧИК</span>
                <br />
            @endif
            <i class="fas fa-users fa-5x"></i>
            <hr />
            <span class="is-size-5">
                {{ $company->name }} <br  />
                {{ $company->number }} <br />
                @if($company->vat_number)
                    {{ $company->vat_number }} <br  />
                @endif
                {{ $company->manager }}
            </span>
            <hr />
            {{ $company->note }}
        </div>
    </div>


    <div class="column is-12">
        <div class="box">
            <span class="is-size-5">УСЛУГИ</span>
            <hr />
            <br />
            <br />
            <br />
        </div>
    </div>


    <div class="column is-12">
        <div class="box">
            <span class="is-size-5">ФАКТУРИ</span>
            <hr />
            <br />
            <br />
            <br />
        </div>
    </div>


    <div class="column is-12">
        <div class="box">
            <span class="is-size-5">ВРЪЗКИ С КЛИЕНТИ</span>
            <hr />
            <br />
            <br />
            <br />
        </div>
    </div>



</div>
@endsection
