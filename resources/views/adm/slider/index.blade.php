@extends('adm.layout')
@section('css_files')
<!-- Cropper.js's CSS -->
<link rel="stylesheet" href="{{ asset('css/cropper.min.css') }}">

<style>
	.table>thead>tr>th,
	.table>tbody>tr>td:first-child,
	.table>tbody>tr>td:nth-child(2),
	.table>tbody>tr>td:nth-child(4),
	.table>tbody>tr>td:nth-child(5),
	.table>tbody>tr>td:nth-child(6) {
		text-align: center;
	}
	
	.table>tbody>tr>td:first-child,
	.table>tbody>tr>td:nth-child(4),
	.table>tbody>tr>td:nth-child(5),
	.table>tbody>tr>td:nth-child(6) {
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
	<button type="button" data-toggle="modal" class="btn btn-success" href="#addFormSlider"><span class="fa fa-plus"></span>&nbsp;Thêm mới</button>
</div>
<div class="panel panel-info">
	<div class="panel-heading">
		<h3 class="panel-title">Danh sách các slider</h3>
	</div>
	<div class="panel-body">
		<table class="table table-bordered table-hover">
			<thead>
				<tr>
					<th class="col-md-1">ID</th>
					<th class="col-md-3">Image Slider</th>
					<th class="col-md-4">Description</th>
					<th class="col-md-1">Set Active</th>
					<th class="col-md-1">Vị trí Active</th>
					<th class="col-md-2">Hành động</th>
				</tr>
			</thead>
			<tbody>
				@if (isset($sliders))
					@foreach ($sliders as $slider)
						<tr>
							<td>
								{{ $slider->id }}
							</td>
							<td class="img-slider">
								<img src="{{ asset($slider->img_url) }}" alt="{{ $slider->id }}">
							</td>
							<td>{{ $slider->description }}</td>
							<td>{{ $slider->set_active }}</td>
							<td>{{ $slider->position_active }}</td>
							<td>
								<div class="form-group">
									<button type="button" class="btn btn-danger" data-index={{ $slider->id }} data-toggle="modal" href='#modalDelete'><span class="fa fa-trash"></span></button>
								</div>
							</td>
						</tr>
					@endforeach
				@endif
			</tbody>
		</table>
	</div>
</div>
@endsection
@include('adm.slider.add_form')
@include('adm.slider.modal_delete', ['itemName' => 'Slider', 'id' => 1])

@section('js_files')
<!-- Cropper.js's JS -->
<script src="{{ asset('js/cropper.min.js') }}"></script>
<script>
$(document).ready(function() {
	$('[data-toggle="tooltip"]').tooltip();
	var previewSlider = document.getElementById('previewSlider');
	var $inputSlider = $('#inputSlider');
	var options = {
		aspectRatio: 192/74,
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

	$('#createSlider').submit(function() {
		var imgData = cropper.getCroppedCanvas().toDataURL();
		$inputSlider.attr('type', 'text');
		$inputSlider.val(imgData);
	});

	$('button[href="#modalDelete"]').click(function() {
		let index = $(this).attr('data-index');
		$('.name-item').html(index);
		$('#deleteSlider').attr('action', 'slider/' + index);
	});
});
</script>
@endsection