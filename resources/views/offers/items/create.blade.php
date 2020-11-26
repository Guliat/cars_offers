@extends('main')
@section('title', '| ОФЕРТИ')
@section('content')
<div class="columns is-centered">
	<div class="column is-half">
		<span class="is-size-3">НОВ</span>
		<div class="box">
			<form method="POST" action="{{ route('offers_items.store') }}" accept-charset="UTF-8" enctype="multipart/form-data">
				{{ csrf_field() }}


				<div class="field">
					<label class="label">КАТЕГОРИЯ</label>
					<div class="control">
				    	<div class="select">
					    	<select name="category_id">
								@foreach($categories as $category)
					        		<option value="{{ $category->id }}">{{ $category->name }}</option>
								@endforeach
					      	</select>
				    	</div>
				    </div>
				</div>



				<div class="field">
					<label class="label">ИМЕ / КРАТКО ОПИСАНИЕ (не се вижда в офертата)</label>
					<input type="text" name="name" autocomplete="off" placeholder="ИМЕ" class="input" value="{{ old('name') }}" />
				</div>
				<div class="field">
                    <label class="label">ОПИСАНИЕ</label>
                    <textarea name="description" class="textarea">{{ old('description') }}</textarea>
                </div>
                <div class="field">
                    <label class="label">МЯРКА</label>
                    <div class="select">
                        <select name="quantity_type">
                            <option value="бр." selected>БРОЙ</option>
                            <option value="м.">МЕТРА</option>
                        </select>
                    </div>
                </div>
				<div class="field">
                    <label class="label">ЦЕНА (без ДДС)</label>
                    <input type="number" name="price" autocomplete="off" placeholder="ЦЕНА" class="input" value="{{ old('price') }}" />
                </div>
                <div class="field">
                    <label class="label">СНИМКА</label>
                    <div class="file is-primary has-name">
                        <label class="file-label">
                            <input class="file-input" type="file" name="image" id="file">
                            <span class="file-cta">
                                <span class="file-icon">
                                    <i class="fas fa-upload"></i>
                                </span>
                                <span class="file-label">
                                    КАЧИ
                                </span>
                            </span>
                            <span class="file-name" id="filename">
                            	.....
                            </span>
                        </label>
                    </div>
                </div>
                <hr />
				<div class="field">
                    <label class="label">БЕЛЕЖКА (не се вижда в офертата)</label>
                    <textarea name="note" class="textarea">{{ old('note') }}</textarea>
                </div>
				<div class="field has-addons">
					<p class="control is-expanded"><input type="submit" value="ЗАПИШИ" class="button is-success is-fullwidth" /></p>
					<p class="control"><a href="{{ route('offers_items.index') }}" class="button is-danger"><i class="fas fa-times"></i></a></p>
				</div>
			</form>
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
