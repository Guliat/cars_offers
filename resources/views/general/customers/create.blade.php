@extends('main')
@section('title', '| ДОБАВЯНЕ НА КЛИЕНТ')
@section('content')
<div class="columns is-centered">
	<div class="column is-half">
		<span class="is-size-3">НОВ КЛИЕНТ</span>
		<div class="box">
			<form method="POST" action="{{ route('customers.store') }}">
				{{ csrf_field() }}
				<div class="field">
					<span class="has-text-danger "><i class="fas fa-asterisk"></i></span>
					ИМЕНА
                    <input type="text" name="names" autocomplete="off" placeholder="имена" class="input" value="{{ old('names') }}" />
                </div>
				<div class="field">
                    ПРЯКОР / НАПОМНЯНЕ
                    <input type="text" name="nick" autocomplete="off" placeholder="прякор / напомняне" class="input" value="{{ old('nick') }}" />
                </div>
				<div class="field">
					<span class="has-text-danger "><i class="fas fa-asterisk"></i></span>
                    ТЕЛЕФОН
                    <input type="text" name="phone" autocomplete="off" placeholder="телефон" class="input" value="{{ old('phone') }}" />
                </div>
				<div class="field">
                    ВТОРИ ТЕЛЕФОН
                    <input type="text" name="second_phone" autocomplete="off" placeholder="втори телефон" class="input" value="{{ old('second_phone') }}" />
                </div>
				<div class="field">
                    БЕЛЕЖКА
                    <textarea name="note" class="textarea">{{ old('note') }}</textarea>
                </div>
				<div class="field has-addons">
					<p class="control is-expanded"><input type="submit" value="ЗАПИШИ" class="button is-success is-fullwidth" /></p>
					<p class="control"><a href="{{ route('customers.index') }}" class="button is-danger"><i class="fas fa-times"></i></a></p>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection
