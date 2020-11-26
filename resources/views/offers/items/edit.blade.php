@extends('main')
@section('title', '| ОФЕРТИ')
@section('content')
<div class="columns is-centered">
	<div class="column is-half">
		<nav class="breadcrumb" aria-label="breadcrumbs">
			<ul>
		    	<li><a href="{{ route('offers.index') }}">ОФЕРТИ</a></li>
		    	<li><a href="{{ route('offers_items.index') }}">ПРОДУКТИ</a></li>
		    	<li class="is-active"><a href="#" aria-current="page">РЕДАКТИРАНЕ</a></li>
		    </ul>
		</nav>
		<div class="box">
			<form method="POST" action="{{ route('offers_items.update', $item->id) }}" accept-charset="UTF-8" enctype="multipart/form-data">
				{{ csrf_field() }}
				{{ method_field('PUT') }}
				<div class="field">
					<label class="label">ИМЕ / КРАТКО ОПИСАНИЕ (не се вижда в офертата)</label>
					<input type="text" name="name" autocomplete="off" placeholder="ИМЕ" class="input" value="{{ $item->name }}{{ old('name') }}" />
				</div>
				<div class="field">
                    <label class="label">ОПИСАНИЕ</label>
                    <textarea name="description" class="textarea">{{ $item->description }}{{ old('description') }}</textarea>
                </div>
                <div class="field">
                    <label class="label">МЯРКА</label>
                    <div class="select">
                        <select name="quantity_type">
                            <option value="бр." @if($item->quantity_type == 'бр.') selected @endif>БРОЙ</option>
                            <option value="м." @if($item->quantity_type == 'м.') selected @endif>МЕТРА</option>
                        </select>
                    </div>
                </div>
				<div class="field">
                    <label class="label">ЦЕНА (без ДДС)</label>
                    <input type="text" name="price" autocomplete="off" placeholder="ЦЕНА" class="input" value="{{ $item->price }}{{ old('price') }}" />
                </div>
                <div class="field">
                    <label class="label">СНИМКА</label>
                    <div class="file is-primary has-name">
                        <label class="file-label">
                            <input class="file-input" type="file" name="image" id="file">
                            <span class="file-cta">
                                <span class="file-icon">
                                    <i class="fas fa-sync"></i>
                                </span>
                                <span class="file-label">
                                    СМЕНИ
                                </span>
                            </span>
                            <span class="file-name" id="filename">
                            	.....
                            </span>
                        </label>
                    </div>
					<img src="{{ asset('/images') }}/{{ $item->image }}" />
                </div>
                <hr />
				<div class="field">
                    <label class="label">БЕЛЕЖКА (не се вижда в офертата)</label>
                    <textarea name="note" class="textarea">{{ $item->note }}{{ old('note') }}</textarea>
                </div>
				<div class="field has-addons">
					<p class="control is-expanded"><input type="submit" value="ЗАПИШИ" class="button is-success is-fullwidth" /></p>
					<p class="control"><a href="{{ route('offers_items.index') }}" class="button is-danger"><i class="fas fa-times"></i></a></p>
				</div>
			{{-- </form> --}}
		</div>
	</div>
</div>
@endsection
@section('scripts')
<script>
var file = document.getElementById("file");
file.onchange = function(){
    if(file.files.length > 0)
        {
            document.getElementById('filename').innerHTML = file.files[0].name;
        }
    };
</script>
@endsection
