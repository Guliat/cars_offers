@extends('main')
@section('title', '| НАСТРОЙКИ')
@section('content')
<div class="columns is-multiline">

    <div class="column is-3">
        <div class="box">
            <span class="is-size-4">ТИПОВЕ <a href="#" class="button is-small is-success is-outlined m-t-5"> <i class="fas fa-plus"></i> </a></span>
            <table class="table is-fullwidth is-narrow">
                <tr>
                    <td>
                        <a href="#" class="button is-small is-danger is-inverted">
                            <i class="fas fa-pencil-alt fa-lg"></i>
                        </a>
                        КОЛА
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="#" class="button is-small is-danger is-inverted">
                            <i class="fas fa-pencil-alt fa-lg"></i>
                        </a>
                        ДЖИП
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="#" class="button is-small is-danger is-inverted">
                            <i class="fas fa-pencil-alt fa-lg"></i>
                        </a>
                        БУС
                    </td>
                </tr>
            </table>
        </div>
    </div>

    <div class="column is-3">
        <div class="box">
            <span class="is-size-4">ГОРИВА <a href="#" class="button is-small is-success is-outlined m-t-5"> <i class="fas fa-plus"></i> </a></span>
            <table class="table is-fullwidth is-narrow">
                <tr><td> БЕНЗИН </td></tr>
                <tr><td> ДИЗЕЛ </td></tr>
                <tr><td> ГАЗ/БЕНЗИН </td></tr>
                <tr><td> МЕТАН/БЕНЗИН </td></tr>
            </table>
        </div>
    </div>

    <div class="column is-3">
        <div class="box">
            <span class="is-size-4">КУПЕТА <a href="#" class="button is-small is-success is-outlined m-t-5"> <i class="fas fa-plus"></i> </a></span>
            <table class="table is-fullwidth is-narrow">
                <tr><td> СЕДАН </td></tr>
                <tr><td> ХЕЧБЕК </td></tr>
                <tr><td> КУПЕ </td></tr>
            </table>
        </div>
    </div>

    <div class="column is-3">
        <div class="box">
            <span class="is-size-4">СКОРОСТИ <a href="#" class="button is-small is-success is-outlined m-t-5"> <i class="fas fa-plus"></i> </a></span>
            <table class="table is-fullwidth is-narrow">
                <tr><td> РЪЧНИ </td></tr>
                <tr><td> АВТОМАТИЧНИ </td></tr>
            </table>
        </div>
    </div>


</div>
@endsection
