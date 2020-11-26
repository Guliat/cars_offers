@extends('main')
@section('title', '| ДОБАВЯНЕ НА ФИРМА')
@section('content')
<div class="columns is-centered">
	<div class="column is-8">
		<span class="is-size-3">НОВА ФИРМА</span>
		<div class="box">
			<form method="POST" action="{{ route('companies.store') }}">
				{{ csrf_field() }}
				<div class="columns is-multiline">
					<div class="column is-half">
						<div class="field">
							<span class="has-text-danger "><i class="fas fa-asterisk"></i></span>
							ИМЕ
		                    <input type="text" name="name" autocomplete="off" placeholder="ИМЕ" class="input" value="{{ old('name') }}" />
		                </div>
						<div class="field">
							<span class="has-text-danger "><i class="fas fa-asterisk"></i></span>
		                    ЕИК
		                    <input type="text" name="number" autocomplete="off" placeholder="ЕИК" class="input" value="{{ old('number') }}" />
		                </div>
						<div class="field">
		                    ИН по ДДС
		                    <input type="text" name="vat_number" autocomplete="off" placeholder="ИН по ДДС" class="input" value="{{ old('vat_number') }}" />
		                </div>
						<div class="field">
							<span class="has-text-danger "><i class="fas fa-asterisk"></i></span>
		                    АДРЕС
		                    <input type="text" name="address" autocomplete="off" placeholder="АДРЕС" class="input" value="{{ old('address') }}" />
		                </div>
						<div class="field">
							<span class="has-text-danger "><i class="fas fa-asterisk"></i></span>
		                    МОЛ
		                    <input type="text" name="manager" autocomplete="off" placeholder="МОЛ" class="input" value="{{ old('manager') }}" />
		                </div>
					</div>
					<div class="column is-half">
						<div class="field">
		                    ТЕЛЕФОН
		                    <input type="text" name="phone" autocomplete="off" placeholder="ТЕЛЕФОН" class="input" value="{{ old('phone') }}" />
		                </div>
						<div class="field">
		                    БАНКА
		                    <input type="text" name="bank" autocomplete="off" placeholder="БАНКА" class="input" value="{{ old('bank') }}" />
		                </div>
						<div class="field">
		                    IBAN
		                    <input type="text" name="iban" autocomplete="off" placeholder="IBAN" class="input" value="{{ old('iban') }}" />
		                </div>
						<div class="field">
		                    BIC
		                    <input type="text" name="bic" autocomplete="off" placeholder="BIC" class="input" value="{{ old('bic') }}" />
		                </div>
						<div class="field has-text-centered m-t-30">
							<p>ДОСТАВЧИК</p>
							<input id="is_provider" type="checkbox" name="is_provider" class="switch is-thin is-success">
							<label for="is_provider"></label>
						</div>
					</div>
					<div class="column is-12">
						<div class="field">
							БЕЛЕЖКА
							<textarea name="note" class="textarea">{{ old('note') }}</textarea>
						</div>
					</div>
				</div>
				<div class="field has-addons">
					<p class="control is-expanded"><input type="submit" value="ЗАПИШИ" class="button is-success is-fullwidth" /></p>
					<p class="control"><a href="{{ route('companies.index') }}" class="button is-danger"><i class="fas fa-times"></i></a></p>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection
