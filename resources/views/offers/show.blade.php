@extends('main')
@section('title', '| ОФЕРТИ')
@section('content')
@section('stylesheets')
<style>
	@media print {
	    .noPrint {
	        display: none;
	    }
		#offer {
			zoom: 50%;
		}
		* {
			background-color: #fff;
		}
	}
</style>
@endsection
<div class="columns is-centered" id="offer">
	<div class="column is-12">
		<button class="button is-danger noPrint" onclick="window.print()"><i class="fas fa-print"></i>&nbsp;ПРИНТИРАЙ</button>
		<hr class="noPrint" />
		<div class="">
            <div class="columns is-multiline">

                <div class="column is-4 has-text-left">
                    <div style="border-left: 3px solid #FF9933;">
                        <div class="m-l-10 is-size-2 has-text-weight-light">
                            ОФЕРТА
                        </div>
                        <div class="m-l-10 is-size-4">
                            #{{ $offer->id }} <br />
							<small>срок на офертата:</small> {{ $offer->deadline }} дни <br />
                            <small>дата на създаване:</small> {{ date('d.m.Y', strtotime($offer->date)) }} <br />
                        </div>
                    </div>
                </div>

                <div class="column is-6 has-text-right">
                    <img src="{{ asset('/') }}logo-invoices.jpg" width="400px" />
                </div>

                <div class="column is-2 has-text-left">
                    <div style="border-left: 2px solid #FF9933;">
                        <div class="m-l-10 is-size-6">
                            0893 / 62 47 47 <br />
							Компютри <br />
                            Видеонаблюдение <br />
                            Компютърни мрежи
                        </div>
                    </div>
                </div>
                {{-- <div class="column is-12" style="border-bottom: 1px solid #ccc;"></div> --}}
            </div>

            <div class="columns">
                <div class="column is-12 has-text-left m-t-50">
                    <div style="border-left: 3px solid #FF9933;">
                        <div class="m-l-10 is-size-4">
                            <small>ПОЛУЧАТЕЛ:</small> {{ $offer->recipient }} <br />
                        </div>
                    </div>
                </div>
            </div>


            <div class="columns is-multiline">
                <div class="column is-12 has-text-centered">
                    <table class="table is-fullwidth is-bordered">
                        <tr>
                            <td class="has-text-centered has-text-white" style="background-color: #ff9933">#</td>
                            <td class="has-text-centered has-text-white" style="background-color: #ff9933">СНИМКА</td>
                            <td class="has-text-centered has-text-white" style="background-color: #ff9933" width="700px">НАИМЕНОВАНИЕ НА СТОКИТЕ И УСЛУГИТЕ</td>
                            <td class="has-text-centered has-text-white" style="background-color: #ff9933">МЯРКА</td>
                            <td class="has-text-centered has-text-white" style="background-color: #ff9933" width="90px">КОЛ-ВО</td>
                            <td class="has-text-centered has-text-white" style="background-color: #ff9933">ЕД.ЦЕНА</td>
                            <td class="has-text-centered has-text-white" style="background-color: #ff9933">СТОЙНОСТ</td>
                        </tr>
                        @if($offer->items->isEmpty())
                            <tr>
                                <td colspan="7" class="has-text-centered">
                                    <br />
                                    НЯМА ДОБАВЕНИ СТОКИ / УСЛУГИ
                                    <br /><br />
                                </td>
                            </tr>
                        @endif
						<?php $i = 1; $total = null; ?>
                        @foreach($offer->items as $item)
						<?php $rowN = $i++; ?>
                        <tr>
                            <td class="has-text-centered">
								<div class="noPrint"><button class="button is-danger is-fullwidth" @click="modalRemove{{ $item->id }}{{ $rowN }} = true"><i class="fas fa-trash"></i></button></div>
								{{ $rowN }}
                                <b-modal :active.sync="modalRemove{{ $item->id }}{{ $rowN }}">
                                    <div class="box has-text-centered">
                                        <form method="post" action="{{ route('offers.update', $offer) }}" >
                                            {{ csrf_field() }}
                                            {{ method_field('put') }}
                                            <input type="hidden" name="item_id" value="{{ $item->id }}">
                                            <input type="hidden" name="is_active" value="2">
                                            <span class="is-size-3">ИЗТРИВАНЕ на {{ $item->name }} <br /></span>
                                            <button type="submit" class="button is-danger m-t-30"> ИЗТРИЙ </button>
                                            <a class="button m-t-30"  @click="modalRemove{{ $item->id }}{{ $rowN }} = false">ОТКАЗ</a>
                                        </form>
                                    </div>
                                </b-modal>
                            </td>
                            <td><img src="{{ asset('/images') }}/{{ $item->image }}" /></td>
                            <td>{{ $item->description }}</td>
                            <td>{{ $item->quantity_type }}</td>
                            <td class="has-text-centered">
                                {{-- <form method="post" action="#">
                                    {{ csrf_field() }}
                                    {{ method_field('put') }}
                                    <button type="submit" class="button is-success"><i class="fa fa-arrow-up "></i></button>
                                </form> --}}
                                <b-modal :active.sync="modalQuantity{{ $item->id }}{{ $rowN }}">
                                    <div class="box has-text-centered">
                                        <form method="post" action="{{ route('offers.update', $offer) }}" >
                                            {{ csrf_field() }}
                                            {{ method_field('put') }}
                                            <span class="is-size-3">КОЛИЧЕСТВО</span>
                                            <input type="hidden" name="item_id" value="{{ $item->id }}">
                                            <input type="text" name="quantity" value="{{ $item->pivot->quantity }}" autocomplete="off" class="input is-size-3 has-text-centered" />
                                            <button type="submit" class="button is-success m-t-30"> ЗАПИШИ </button>
                                            <a class="button m-t-30"  @click="modalQuantity{{ $item->id }}{{ $rowN }} = false">ОТКАЗ</a>
                                        </form>
                                    </div>
                                </b-modal>
                                <div class="noPrint"><button class="button is-warning is-small" @click="modalQuantity{{ $item->id }}{{ $rowN }} = true">промени</button></div>
                                {{-- <form method="post" action="#">
                                    {{ csrf_field() }}
                                    {{ method_field('put') }}
                                        <button type="submit" class="button is-danger" @if($item->pivot->quantity <= 1) disabled @endif><i class="fa fa-arrow-down "></i></button>
                                </form> --}}
								{{ $item->pivot->quantity }}
                            </td>
                            <td class="has-text-centered">
                                <b-modal :active.sync="modalPrice{{ $item->id }}{{ $rowN }}">
                                    <div class="box has-text-centered">
                                        <form method="post" action="{{ route('offers.update', $offer) }}" >
                                            {{ csrf_field() }}
                                            {{ method_field('put') }}
                                            <span class="is-size-3">ЦЕНА</span>
                                            <input type="hidden" name="item_id" value="{{ $item->id }}">
                                            <input type="text" name="price" value="@if($item->pivot->price){{ $item->pivot->price }}@else{{ $item->price }}@endif" autocomplete="off" class="input is-size-3 has-text-centered" />
                                            <button type="submit" class="button is-success m-t-30"> ЗАПИШИ </button>
                                            <a class="button m-t-30"  @click="modalPrice{{ $item->id }}{{ $rowN }} = false">ОТКАЗ</a>
                                        </form>
                                    </div>
                                </b-modal>
								<div class="noPrint"><button class="button is-warning is-small" @click="modalPrice{{ $item->id }}{{ $rowN }} = true">промени</button></div>
                                @if($item->pivot->price)
                                    {{ number_format($item->pivot->price, 2) }}лв.
                                @else
                                    {{ number_format($item->price, 2) }}лв.
                                @endif
                            </td>
                            <td>
                                @if($item->pivot->price)
                                    {{ number_format($item->pivot->quantity*$item->pivot->price, 2) }}лв.
									<?php $total +=  $item->pivot->quantity*$item->pivot->price; ?>
                                @else
                                	{{ number_format($item->pivot->quantity*$item->price, 2) }}лв.
									<?php $total +=  $item->pivot->quantity*$item->price; ?>
                                @endif
                            </td>
                        </tr>
                        @endforeach
						<tr>
							<td colspan="7" class="has-text-right is-size-5">
								ОБЩО: {{ number_format($total, 2) }}лв. <br />
								<?php $tax = ($total * 1.2) - $total; ?>
								ДДС: {{ number_format($tax, 2) }}лв. <br />
								<span class="is-size-4">КРАЙНА СУМА: {{ number_format(($total * 1.2), 2) }}лв.</span>
							</td>
						</tr>
                    </table>
                    <a href="{{ route('offers.addItem', $offer->id) }}" class="button is-success is-small noPrint">ДОБАВИ</a>
                </div><!-- end COLUMN -->
            </div><!-- end COLUMNS -->



        </div><!-- end BOX -->
    </div> <!-- end COLUMN -->
</div><!-- end COLUMNS -->
@endsection
@section('scripts')
<script>
new Vue({
    el: '#offer',
    data: { <?php $i=1; foreach($offer->items as $item) { $rowN = $i++; echo 'modalQuantity'.$item->id.$rowN.': false, '.'modalPrice'.$item->id.$rowN.': false, '.'modalRemove'.$item->id.$rowN.': false, '; } ?> },
})
</script>
@endsection
