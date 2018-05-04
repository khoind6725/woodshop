@extends('adm.layout')
@section('css_files')
<!-- Cropper.js's CSS -->
<link rel="stylesheet" href="{{ asset('css/cropper.min.css') }}">

<style>
	.table>thead>tr>th,
	.table>tbody>tr>td:first-child,
	.table>tbody>tr>td:nth-child(2),
	.table>tbody>tr>td:nth-child(4) {
		text-align: center;
	}
	
	.table>tbody>tr>td:first-child,
	.table>tbody>tr>td:nth-child(4) {
		vertical-align: middle;
	}

	.img-container {
		text-align: center;
	}

	.img-container img {
		max-width: 100%;
		max-height: 400px;
	}

	.img-container label {
		padding: 0;
	}

	.img-slider img{
		width: 240px;
		height: 135px;
	}
</style>
@endsection

@section('content')
<div class="form-group">
	<button type="button" data-toggle="modal" class="btn btn-success" href="#modal-id"><span class="fa fa-plus"></span>&nbsp;Thêm mới</button>
</div>
<div class="panel panel-info">
	<div class="panel-heading">
		<h3 class="panel-title">Danh sách các slider</h3>
	</div>
	<div class="panel-body">
		<table class="table table-bordered table-hover">
			<thead>
				<tr>
					<th class="col-md-1">STT</th>
					<th class="col-md-3">Image Slider</th>
					<th class="col-md-6">Description</th>
					<th class="col-md-2">Hành động</th>
				</tr>
			</thead>
			<tbody>
				@foreach (glob(public_path() . '/images/slider-img/*') as $index => $filename)
				<tr>
					<td>
						{{ $index + 1 }}
					</td>
					<td class="img-slider">
						<img src="{{ URL::to('/images/slider-img') . '/' .basename($filename) }}" alt="{{ $index }}">
					</td>
					<td></td>
					<td>
						<div class="form-group">
							<button type="button" class="btn btn-info"><span class="fa fa-eye"></span></button>
							<button type="button" class="btn btn-warning"><span class="fa fa-pencil-square-o"></span></button>
							<button type="button" class="btn btn-danger"><span class="fa fa-trash"></span></button>
						</div>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
@endsection
@include('adm.slider.form')

@section('js_files')
<!-- Cropper.js's JS -->
<script src="{{ asset('js/cropper.min.js') }}"></script>
<script>
$(document).ready(function() {
	$('[data-toggle="tooltip"]').tooltip();
	var previewSlider = document.getElementById('previewSlider');
	var $inputSlider = $('#inputSlider');
	var options = {
		aspectRatio: 16/9,
		viewMode: 3
	};
	var cropper = new Cropper(previewSlider, options);
	$inputSlider.change(function() {
  		if (this.files && this.files[0]) {
	    	previewSlider.src = URL.createObjectURL(this.files[0]);
	    	cropper.destroy();
	  		cropper = new Cropper(previewSlider, options);
	  	}
	});

	$('#createSlider').submit(function(event) {
		var imgData = cropper.getCroppedCanvas().toDataURL();
		$inputSlider.attr('type', 'text');
		$inputSlider.val(imgData);
	});
});
</script>
@endsection