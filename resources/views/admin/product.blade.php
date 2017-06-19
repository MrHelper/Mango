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
					<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 text-right tmargin">
						<label class="control-label">Tên sản phẩm:</label>
					</div>
					<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 tmargin">
						<input type="text" class="form-control" id="TenSP" placeholder="Tên SP">
					</div>
					<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 text-right tmargin">
						<label>Danh mục sản phẩm:</label>
					</div>
					<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 tmargin">
						<select id="DanhMuc" class="form-control" required="required">
						@foreach($Menu as $m)
							<option value="{{$m->id}}" oName="{{$m->name}}">{{$m->name}}</option>
						@endforeach
						</select>
					</div>
					<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 text-right tmargin">
						<label class="control-label"> Thông tin sản phẩm:</label>
					</div>
					<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 tmargin">
						<textarea id="TTSP" placeholder="Thông tin sản phẩm" class="form-control" rows="3" required="required"></textarea>
					</div>
					<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 text-right tmargin">
						<label>Hình ảnh:</label>
					</div>
					<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 tmargin">
						<input id="HinhAnh" type="file" name="imageup" value="" placeholder="">
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center tmargin">
						<button class="btn btn-primary" id="btnAdd"><i class="fa fa-plus"></i> Thêm mới</button>
						<button class="btn btn-primary hidden" id="btnEdit"><i class="fa fa-pencil-square-o"></i> Chỉnh sửa</button>
						<button class="btn btn-primary" id="btnCancel"><i class="fa fa-undo"></i> Huỷ</button>			
					</div>
				</div>
				<hr>
				<div class="row">
					<table class="table table-responsive table-hover table-outline mb-0" id="ProductDT">
						<thead class="thead-default">
							<tr>
								<th style="width:55px"><i class="fa fa-star"></i></th>
								<th data-sort="string" style="width:50px;"></th>
								<th data-sort="string">Sảm phẩm</th>
								<th data-sort="string">Danh mục</th>
								<th data-sort="string" colspan="2">Thông tin</th>
							</tr>
						</thead>
						<tbody>
						@foreach($Product as $p)
							<tr>
								@if($p->star == 0)
									<td><i pid="{{$p->id}}" class="fa fa-star-o"></i></td>
								@else
									<td><i pid="{{$p->id}}" class="fa fa-star"></i></td>
								@endif
								<td><img src="{{$p->images}}" alt="{{$p->name}}" class="productimg"></td>
								<td>{{$p->name}}</td>
								<td>{{$p->Mname}}</td>
								<td>{!! $p->description !!}</td>
								<td class="TdQuickMenu">
									<a pid="{{$p->id}}" pname="{{$p->name}}" pdes="{{$p->description}}" pmenu="{{$p->menu_id}}" style="margin-right:10px;" class="prod_edit text-primary"><i class="fa fa-pencil-square-o"></i> </a>
									<a pid="{{$p->id}}" class="prod_delete text-danger"><i class="fa fa-times"></i></a>
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
@stop

@section('body.script')
<script type="text/javascript">
	$(document).ready(function() {
      $('#TTSP').summernote({
        lang: 'vi-VN',
        height:200
      });
    });
	$('#ProductDT').stupidtable();
	$('#btnCancel').on('click',function(){
		$('#TenSP').val("");
      	$('#TTSP').summernote('reset');
      	$('#HinhAnh').val("");
      	$('#btnEdit').addClass('hidden');
      	$('#btnAdd').removeClass('hidden');
      	$('#DanhMuc').val(0);
	});

	$('#ProductDT').on('click','.prod_edit',function(){
		$('#btnAdd').addClass('hidden');
		$('#btnEdit').removeClass('hidden');
		$('#TenSP').val($(this).attr('pname'));
		$('#TTSP').summernote('code', $(this).attr('pdes'));
		//$('#TTSP').val($(this).attr('pdes'));
		$('#DanhMuc').val($(this).attr('pmenu'));
		$('#btnEdit').attr('pid',$(this).attr('pid'));
	})

	$('#ProductDT tbody').on('click','.fa-star-o',function(){
		$(this).removeClass('fa-star-o');
		$(this).addClass('fa-star');
		var ID = $(this).attr('pid');
		StarProduct(ID,1);
	});

	$('#ProductDT tbody').on('click','.fa-star',function(){
		$(this).addClass('fa-star-o');
		$(this).removeClass('fa-star');
		var ID = $(this).attr('pid');
		StarProduct(ID,0);
	});

	function StarProduct(ID,mode){
		var formData = new FormData;
		formData.append('mode',mode);
		formData.append('id',ID);
		$.ajax({
            headers: {
        	'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    		},
            url: '{{route('admincp.StarProduct')}}',
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

	$('#ProductDT').on('click','.EditProd',function(){
		$('#DanhMuc').val();
		$('#TenSP').val();
		$('#TTSP').val();
	});

	$('#btnAdd').on('click',function(){
		if(CheckInput()){
			CreateProduct();
		}
	});

	$('#btnEdit').on('click',function(){
		if(CheckInput()){
			EditProduct($(this).attr('pid'));
		}
	});

	function CheckInput(){
		if($('#TenSP').val()==""){
			alert('Chưa nhập tên sản phẩm');
			return false
		}
		else if( $('#TTSP').val()=="" ){
			alert('Chưa nhập thông tin sản phẩm');
			return false
		}
		return true;
	}

	function EditProduct(ID){
		var formData = new FormData;
		var uploadfile = $('input[name=imageup]')[0].files[0];
		var TTSP = $('#TTSP').val();
		//TTSP.replace(/\"/g, "\'");
		
		formData.append('id',ID);
		formData.append('menu_id',$('#DanhMuc').val());
		formData.append('name',$('#TenSP').val());
		formData.append('description',TTSP);
		formData.append('images',uploadfile);
		$.ajax({
            headers: {
        	'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    		},
            url: '{{route('admincp.EditProduct')}}',
            type: 'POST',
            processData: false,
            contentType: false,
            cache: false,
            data: formData,
            dataType: 'JSON',
            success:function(data){
            	$('#ProductDT tbody tr').each(function(){
					if($(this).find("td:first i").attr('pid')==ID){
						var row="";
				      	row += "<td><i class='"+ $(this).find("td:first i").attr('class') +"' pid='"+ID+"'></i></td>"
				      	if(data.img !="")
				      		row += "<td><img src='"+ data.img + "' class='productimg'></td>";
				      	else
				      		row += "<td><img src='"+ $(this).find('td img').attr('src') + "' class='productimg'></td>";
				      	row += "<td>" + $('#TenSP').val() + "</td>";
				      	row += "<td>" + $("#DanhMuc option:selected").text(); + "</td>";
				      	row += "<td>" + $('#TTSP').val() + "</td>"
				      	row += "<td class='TdQuickMenu'>"
		      			row += "<a pid='" + ID + "' pname='"+ $('#TenSP').val() +"' pdes='"+ $('#TTSP').val() +"' pmenu='"+ $("#DanhMuc").val() +"' style='margin-right:10px;' class='prod_edit text-primary'><i class='fa fa-pencil-square-o EditProd'></i> </a>"
						row += "<a pid='" + ID + "' class='prod_delete text-danger'><i class='fa fa-times'></i></a>"
				      	row += "</td>";
				      	$(this).html(row);
					}
				});
		      	$('#TenSP').val("");
		      	$('#TTSP').val("");
		      	$('#HinhAnh').val("");
		      	$('#DanhMuc').val(0);
		      	$('#btnEdit').addClass('hidden');
				$('#btnAdd').removeClass('hidden');
            }
        });
	}

	function CreateProduct(){
		var formData = new FormData;
		var uploadfile = $('input[name=imageup]')[0].files[0];
		var TTSP = $('#TTSP').val();
		//TTSP.replace(/\"/g, "\'");
		formData.append('menu_id',$('#DanhMuc').val());
		formData.append('name',$('#TenSP').val());
		formData.append('description',TTSP);
		formData.append('images',uploadfile);
		$.ajax({
            headers: {
        	'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    		},
            url: '{{route('admincp.CreateProduct')}}',
            type: 'POST',
            processData: false,
            contentType: false,
            cache: false,
            data: formData,
            dataType: 'JSON',
            success:function(data){
                var row ="";
		      	row += "<tr>";
		      	row += "<td><i class='fa fa-star-o' pid='"+ data.id +"'></i></td>"
		      	row += "<td><img src='"+ data.img + "' class='productimg'></td>";
		      	row += "<td>" + $('#TenSP').val() + "</td>";
		      	row += "<td>" + $("#DanhMuc option:selected").text(); + "</td>";
		      	row += "<td>" + $('#TTSP').val() + "</td>"
		      	row += "<td class='TdQuickMenu'>"
      			row += "<a pid='" + data.id + "' pname='"+ $('#TenSP').val() +"' pdes='"+ $('#TTSP').val() +"' pmenu='"+ $("#DanhMuc").val() +"' style='margin-right:10px;' class='prod_edit text-primary'><i class='fa fa-pencil-square-o EditProd'></i> </a>"
				row += "<a pid='" + data.id + "' class='prod_delete text-danger'><i class='fa fa-times'></i></a>"
		      	row += "</td>";
		      	row +="</tr>";
		      	$('#ProductDT tbody').prepend(row);
		      	$('#TenSP').val("");
		      	$('#TTSP').val("");
		      	$('#HinhAnh').val("");
            }
        });
	}

	$('.prod_delete').on('click',function(e){
		var ID = $(this).attr('pid');
		DeleteProduct(ID);
		$(this).closest('tr').remove();
	})

	function DeleteProduct(ID){
		var formData = new FormData;
		formData.append('id',ID);
		$.ajax({
	      headers: {
	    	'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			},
	      url: '{{route('admincp.DeleteProduct')}}',
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
</script>
@stop