@extends('layout.admincp')

@section('body.content')

<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<div class="card">
			<div class="card-header">
			Danh mục sản phẩm
			</div>
			<div class="card-block">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<div class="input-group">
							<span class="input-group-btn">
								<button class="btn btn-primary hidden" id="EditMenu"><i class="fa fa-pencil-square-o"></i> Chỉnh sửa</button>
								<button class="btn btn-primary" id="CreateMenu"><i class="fa fa-plus"></i> Thêm mới</button>
							</span>
							<input type="text" class="form-control" placeholder="Tên danh mục" id="MName">
							<button class="btn btn-default" id="btnCancel"><i class="fa fa-undo"></i> Huỷ</button>
						</div>
					</div>
				</div>
				<hr>
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<table class="table table-responsive table-hover table-outline mb-0" id="MenuDT">
							<thead class="thead-default">
								<tr>
									<th data-sort="string" colspan="2">Tên danh mục</th>
								</tr>
							</thead>
							<tbody>
							@foreach($Menu as $m)
								<tr>
									<td>{{$m->name}}</td>
									<td class="TdQuickMenu">
										<a mid="{{$m->id}}" mname="{{$m->name}}" style="margin-right:10px;" class="menu_edit text-primary"><i class="fa fa-pencil-square-o"></i> </a>
										<a mid="{{$m->id}}" class="dMenu text-danger"><i class="fa fa-times"></i></a>
									</td>
								</tr>
							@endforeach
							</tbody>     
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@stop

@section('body.script')
<script type="text/javascript">
	$('#MenuDT').stupidtable();
	$('#CreateMenu').on('click',function(){
		if($('#MName').val()!=""){
			InsertMenu($('#MName').val());
		}
	});
	$('.dMenu').on('click',function(e){
		var ID = $(this).attr('mid');
		DeleteMenu(ID);
		$(this).closest('tr').remove();
	})
	function InsertMenu(MName){
		var formData = new FormData;
		formData.append('Name',MName);
		$.ajax({
	      headers: {
        	'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    		},
	      url: '{{route('admincp.CreateMenu')}}',
	      type: 'POST',
	      processData: false,
	      contentType: false,
	      cache: false,
	      data: formData,
	      dataType: 'JSON',
	      success:function(data){
	          InsertTBRow(data.Name,data.ID);
	      }
	  });
  }
  function DeleteMenu(ID){
  	var formData = new FormData;
		formData.append('id',ID);
  	$.ajax({
	      headers: {
        	'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    		},
	      url: '{{route('admincp.DeleteMenu')}}',
	      type: 'POST',
	      processData: false,
	      contentType: false,
	      cache: false,
	      data: formData,
	      dataType: 'JSON',
	      success:function(data){
	      }
	  });
  }

  function InsertTBRow(Name,ID){
  	var Row = "";
		Row +='<tr>'
		Row +='<td>'+ Name +'</td>'
		Row +='<td class="TdQuickMenu">'
		Row +='<a mid="'+ID+'" mname="'+ Name +'" style="margin-right:10px;" class="menu_edit text-primary"><i class="fa fa-pencil-square-o"></i> </a>'
		Row +='<a mid="'+ID+'" class="dMenu text-danger"><i class="fa fa-times"></i></a>'
		Row +='</td>'
		Row +='</tr>'
  	$('#MenuDT tbody').append(Row);
  }

  $('#btnCancel').on('click',function(){
  	$('#EditMenu').addClass('hidden');
  	$('#CreateMenu').removeClass('hidden');
  	$('#MName').val("");
  });

  $('#MenuDT').on('click','.menu_edit',function(){
  	$('#EditMenu').removeClass('hidden');
  	$('#CreateMenu').addClass('hidden');
  	$('#MName').val($(this).attr('mname'));
  	$('#EditMenu').attr('mid',$(this).attr('mid'));
  });

  $('#EditMenu').on('click',function(){
  	var ID = $(this).attr('mid');
  	var Name = $('#MName').val();
  	EditMenu(ID,Name);
  });

  function EditMenu(ID,Name){
  	var formData = new FormData;
		formData.append('id',ID);
		formData.append('name',Name);
  	$.ajax({
	      headers: {
        	'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    		},
	      url: '{{route('admincp.EditMenu')}}',
	      type: 'POST',
	      processData: false,
	      contentType: false,
	      cache: false,
	      data: formData,
	      dataType: 'JSON',
	      success:function(data){
	      	var Row = "";
			Row +='<td>'+ Name +'</td>'
			Row +='<td class="TdQuickMenu">'
			Row +='<a mid="'+ID+'" mname="'+ Name +'" style="margin-right:10px;" class="menu_edit text-primary"><i class="fa fa-pencil-square-o"></i> </a>'
			Row +='<a mid="'+ID+'" class="dMenu text-danger"><i class="fa fa-times"></i></a>'
			Row +='</td>'
			$('#MenuDT tbody tr').each(function(){
				if($(this).find("td:eq(1) a").attr('mid')==ID){
					$(this).html(Row);
				}
			});
			$('#btnCancel').click();
	      }
	  });
  }
</script>
@stop