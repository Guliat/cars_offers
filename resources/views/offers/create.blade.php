@extends('main')
@section('title', '| ОФЕРТИ')
@section('content')
<div class="columns is-centered">
	<div class="column is-half">
		<span class="is-size-3">НОВА ОФЕРТА</span>
		<div class="box">
			<form method="POST" action="{{ route('offers.store') }}">
				{{ csrf_field() }}
				<div class="field">
					<label class="label">ВАШИТЕ ИМЕНА</label>
					<input type="text" name="writer" autocomplete="off" placeholder="ВАШИТЕ ИМЕНА" class="input" value="Александър Енчев" />
				</div>
				<div class="field">
					<label class="label">ИМЕНА НА ПОЛУЧАТЕЛА</label>
					<input type="text" name="recipient" autocomplete="off" placeholder="ИМЕНА НА ПОЛУЧАТЕЛ" class="input" value="{{ old('recipient') }}" />
				</div>
				<div class="field">
					<label class="label">ДАТА НА ОФЕРТАТА</label>
					<input id="datepicker" name="date" class="input" type="text" value="{{ date('Y-m-d') }}">
				</div>
                <div class="field">
                    <label class="label">СРОК НА ОФЕРТАТА</label>
                    <div class="select">
                        <select name="deadline">
                            <option value="15">15 ДНИ</option>
                            <option value="30" selected>30 ДНИ</option>
                            <option value="60">60 ДНИ</option>
                            <option value="90">90 ДНИ</option>
                        </select>
                    </div>
                </div>
				<div class="field has-addons">
					<p class="control is-expanded"><input type="submit" value="ПРОДЪЛЖИ" class="button is-success is-fullwidth" /></p>
					<p class="control"><a href="{{ route('offers_items.index') }}" class="button is-danger"><i class="fas fa-times"></i></a></p>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection
@section('scripts')
<script src="{{ asset('/') }}js/bulma-calendar.min.js"></script>
<script>
document.addEventListener( 'DOMContentLoaded', function () {
  var datePicker = new bulmaCalendar( document.getElementById( 'datepicker' ), {
    startDate: new Date(), // Date selected by default
    dateFormat: 'yyyy-mm-dd', // the date format `field` value
    lang: 'bg', // internationalization
    overlay: true,
    closeOnOverlayClick: true,
    closeOnSelect: true,
    // callback functions
    onSelect: null,
    onOpen: null,
    onClose: null,
    onRender: null
  } );
} );
</script>
@endsection
