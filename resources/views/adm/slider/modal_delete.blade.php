{{ 
	Form::open([
		'id' => 'deleteSlider',
		'method' => 'delete',
	])
}}
<div class="modal fade" id="modalDelete">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Xóa Slider</h4>
			</div>
			<div class="modal-body">
				Bạn chắc chắn xóa slider <b class="name-item"></b>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Hủy bỏ</button>
				<button type="submit" class="btn btn-danger" id="btnDeleteSlider">Đồng ý</button>
			</div>
		</div>
	</div>
</div>
{{ 
	Form::close()
}}