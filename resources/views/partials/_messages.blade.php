@if (Session::has('success'))

	<b-notification type="is-success" id="successnotify" class="noPrint">
		{!! Session::get('success') !!}
	</b-notification>

@endif

@if (Session::has('notsuccess'))

	<b-notification type="is-danger" id="dangernotify" class="noPrint">
		{{ Session::get('notsuccess') }}
	</b-notification>

@endif

@if(!empty($errors))
	@if(count($errors) > 0)
		<b-notification type="is-danger" id="dangernotify" class="noPrint">
			{{-- <ul> --}}
			@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
			{{-- </ul> --}}
		</b-notification>
	@endif
@endif
