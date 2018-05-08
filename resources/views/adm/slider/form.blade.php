<div class="modal fade" id="modalFormSlider">
	<div class="modal-dialog">
		{{ 
			Form::open([
				'route' => 'adm.slider.store',
				'files' => true,
				'id' => 'createSlider',
			])
		}}
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Thêm mới Slider</h4>
			</div>
			<div class="modal-body">
				<div class="form-group img-container" data-toggle="tooltip" title="Change your avatar">
					<label>
						<img id="previewSlider" src="{{ asset('images/slider-img/bg.jpg') }}">
						<input type="file" class="sr-only" id="inputSlider" name="inputSlider">
					</label>
				</div>
				<div class="form-group">
					<label for="sliderName">Tên Slider</label>
					{{
						Form::text(
							'sliderName',
							'',
							[
								'placeholder' => 'Nhập tên Slider',
								'class' => 'form-control'
							]
						)
					}}
				</div>
				<div class="form-group">
					<label for="descriptionSlider">Mô tả</label>
					{{
						Form::textarea(
							'descriptionSlider', 
							'', 
							[
								'placeholder' => 'Nhập mô tả',
								'class' => 'form-control',
								'rows' => 3
							]
						)
					}}
				</div>
				<div class="form-group">
					<label for="setActiveSlider">Chọn hiển thị</label>
					<div class="radio">
						<label>
						{{
							Form::radio(
								'setActiveSlider',
								1,
								false
							)
						}}
						Có
						</label>
					</div>
					<div class="radio">
						<label>
						{{
							Form::radio(
								'setActiveSlider',
								0,
								true
							)
						}}
						Không
						</label>
					</div>
				</div>
				<div class="form-group">
					<label for="positionActive">Vị trí hiển thị trên trang chủ</label>
					{{
						Form::select(
							'positionActive',
							[
								1 => '1',
								2 => '2',
								3 => '3'
							],
							'',
							[
								'class' => 'form-control'
							]
						)
					}}
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Hủy bỏ</button>
				<button type="submit" class="btn btn-primary">Thêm</button>
			</div>
		</div>
		{{
			Form::close()		
		}}
	</div>
</div>
