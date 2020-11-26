@extends('main')
@section('title', '| РЕДАКТИРАНЕ НА КЛИЕНТ')
@section('content')
<div class="columns is-centered">
	<!-- NEW CUSTOMER BOX -->
	<div class="column is-half">
		<span class="is-size-3">РЕДАКЦИЯ НА КЛИЕНТ</span>
		<div class="box">
			<form method="POST" action="{{ route('customers.update', $customer->id) }}">
				{{ csrf_field() }}
				{{ method_field('PUT') }}
				<div class="field">
					<span class="has-text-danger "><i class="fas fa-asterisk"></i></span>
					ИМЕНА
                    <input type="text" name="names" autocomplete="off" placeholder="имена" class="input" value="{{ $customer->names }}" />
                </div>
				<div class="field">
                    ПРЯКОР / НАПОМНЯНЕ
                    <input type="text" name="nick" autocomplete="off" placeholder="прякор / напомняне" class="input" value="{{ $customer->nick }}" />
                </div>
				<div class="field">
					<span class="has-text-danger "><i class="fas fa-asterisk"></i></span>
                    ТЕЛЕФОН
                    <input type="text" name="phone" autocomplete="off" placeholder="телефон" class="input" value="{{ $customer->phone }}" />
                </div>
				<div class="field">
                    ВТОРИ ТЕЛЕФОН
                    <input type="text" name="second_phone" autocomplete="off" placeholder="втори телефон" class="input" value="{{ $customer->second_phone }}" />
                </div>
				<div class="field">
                    БЕЛЕЖКА
                    <textarea name="note" class="textarea">{{ $customer->note }}</textarea>
                </div>
				<div class="field has-addons">
					<p class="control is-expanded"><input type="submit" value="ЗАПИШИ" class="button is-success is-fullwidth" /></p>
					<p class="control"><a href="{{ route('customers.show', $customer->id) }}" class="button is-danger"><i class="fas fa-times"></i></a></p>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection
