@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Danh sách đăng ký') }} <button data-toggle="modal" data-target="#create_code">Thêm mới</button></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    
                    <table class="table table-bordered" id="codes-table">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Mã căn hộ</th>
                                <th>Tên khách hàng</th>
                                <th>Số lượng</th>
                                <th>chú thích</th>
                                <th>Chỉnh sửa</th>
                                <th>Xóa</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="create_code" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header border-bottom-0">
        <h5 class="modal-title" id="exampleModalLabel">Thêm thông tin khách hàng</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="form_create_code">
      @csrf
        <div class="modal-body">
          <div class="form-group">
            <label for="code_number">Mã căn hộ</label>
            <input type="text" class="form-control" name="code_number" id="code_number" placeholder="Mã căn hộ">
          </div>
          <div class="form-group">
            <label for="name_customer">Tên khách hàng</label>
            <input type="text" class="form-control" id="name_customer" name="name_customer" placeholder="Tên khách hàng">
          </div>
          <div class="form-group">
            <label for="no">Số lượng</label>
            <input type="text" class="form-control" id="no" name="no" placeholder="Số lượng">
          </div>
          <div class="form-group">
            <label for="notice">Chú thích</label>
            <input type="text" class="form-control" id="notice" name="notice" placeholder="Chú thích">
          </div>
          <p style="color: red;" id="err_create_code"></p>
        </div>
        <div class="modal-footer border-top-0 d-flex justify-content-center">
          <button type="button" id="btn_create_code" class="btn btn-success">Thêm</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- edit -->
<div class="modal fade" id="edit_code" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header border-bottom-0">
        <h5 class="modal-title" id="exampleModalLabel">Thêm thông tin khách hàng</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="form_edit_code">
      @csrf
        <div class="modal-body">
          <div class="form-group">
            <input type="hidden" id="hidden_id_code" name="id_edit"/>
            <label for="code_number_edit">Mã căn hộ</label>
            <input type="text" class="form-control" name="code_number_edit" id="code_number_edit" placeholder="Mã căn hộ">
          </div>
          <div class="form-group">
            <label for="name_customer_edit">Tên khách hàng</label>
            <input type="text" class="form-control" id="name_customer_edit" name="name_customer_edit" placeholder="Tên khách hàng">
          </div>
          <div class="form-group">
            <label for="no_edit">Số lượng</label>
            <input type="text" class="form-control" id="no_edit" name="no_edit" placeholder="Số lượng">
          </div>
          <div class="form-group">
            <label for="notice_edit">Chú thích</label>
            <input type="text" class="form-control" id="notice_edit" name="notice_edit" placeholder="Chú thích">
          </div>
          <p style="color: red;" id="err_edit_code"></p>
        </div>
        <div class="modal-footer border-top-0 d-flex justify-content-center">
          <button type="button" id="btn_edit_code" class="btn btn-success">Thêm</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection

@section('scripts')
<script src="{{ asset('js/jquery-3.5.1.min.js') }}" ></script>
<script src = "http://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>

    <script>
        // $(document).ready(function(){
            $('#codes-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{!! route('getCode') !!}",
                columns: [
                    { data: 'id', name: 'id' },
                    { data: 'code_number', name: 'code_number' },
                    { data: 'name_customer', name: 'name_customer' },
                    { data: 'no', name: 'no' },
                    { data: 'notice', name: 'notice'},
                    { data: 'edit', name: 'edit' },
                    { data: 'delete', name: 'delete' },
                ]
            });
        // });        
    </script>
    <script>
    $(document).ready(function(e) {
        $("#codes-table").on('click',".del-code",function(e){
            var data = new FormData();
            var id = $(this).data('value');
            data.append("id", id);
            $.ajaxSetup({
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            });
            $.ajax({
                type:'POST',
                url:'{{route('deleteCode')}}',
                data: data,
                processData: false,
                contentType: false,
                success:function(data){
                    location.reload();
                }
            });
        });
    });
    </script>
    <script>
    $(document).ready(function(e) {
        $("#btn_create_code").on('click',function(e){
            var formData = new FormData();
            var listData = $('#form_create_code').serializeArray();
            $.each( listData, function( i, field ) {
                formData.append(field.name, field.value);
            });
            $.ajaxSetup({
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            });
            $.ajax({
                type:'POST',
                url:'{{route('createCode')}}',
                data: formData,
                processData: false,
                contentType: false,
                success:function(data){
                    if(data['success']){
                        $("#err_create_code").html('Đã thêm mới thành công');
                        setTimeout(function(){ location.reload(); }, 2000);
                        
                    }else{
                        $("#err_create_code").html(data);
                    }
                }
            });
        });
    });
    </script>
    <script>
    $(document).ready(function(e) {
        $("#codes-table").on('click',".edit-code",function(e){
            var id = $(this).data('value');
            $("#edit_code").modal('show');
            var formData2 = new FormData();
            formData2.append('id', id);
            $.ajaxSetup({
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            });
            $.ajax({
                type:'POST',
                url:'{{route('getEditCode')}}',
                data: formData2,
                processData: false,
                contentType: false,
                success:function(data){
                   $('#code_number_edit').val(data['code_number']);
                   $('#name_customer_edit').val(data['name_customer']);
                   $('#no_edit').val(data['no']);
                   $('#notice_edit').val(data['notice']);
                   $('#hidden_id_code').val(data['id']);
                }
            });
        });
    });
    </script>
      <script>
    $(document).ready(function(e) {
        $("#btn_edit_code").on('click',function(e){
            var formData3 = new FormData();
            var listData = $('#form_edit_code').serializeArray();
            $.each( listData, function( i, field ) {
                formData3.append(field.name, field.value);
            });
            $.ajaxSetup({
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            });
            $.ajax({
                type:'POST',
                url:'{{route('updateCode')}}',
                data: formData3,
                processData: false,
                contentType: false,
                success:function(data){
                    if(data['success']){
                        $("#err_edit_code").html('Đã chỉnh sửa thành công');
                        setTimeout(function(){ location.reload(); }, 2000);
                        
                    }else{
                        $("#err_edit_code").html(data);
                    }
                }
            });
        });
    });
    </script>
@endsection
