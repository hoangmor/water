@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Danh sách đăng ký') }}</div>

                <div class="card-body">
                    <div class="col-md-12" style="padding-bottom:10px">
                    <a href="{{ route('QRcode') }}" class="btn btn-primary">Quét QRcode</a>                
                    </div>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    
                    <table class="table table-bordered" id="users-table">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>SĐT</th>
                                <th>Mã căn hộ</th>
                                <th>Số lượng</th>
                                <th>Thời gian</th>
                                <th>Ngày</th>
                                <th>Khu vực/Du thuyền</th>
                                <th>Phân loại</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="{{ asset('js/jquery-3.5.1.min.js') }}" ></script>
<script src = "http://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>

    <script>
        // $(document).ready(function(){
            $('#users-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{!! route('getData') !!}",
                columns: [
                    { data: 'id', name: 'id' },
                    { data: 'tel', name: 'tel' },
                    { data: 'home_id', name: 'home_id' },
                    { data: 'amount', name: 'amount' },
                    { data: 'time', name: 'time' , orderable: false, searchable: false},
                    { data: 'date', name: 'date' },
                    { data: 'area', name: 'area' },
                    { data: 'type', name: 'type' }
                ]
            });
        // });        
    </script>
@endsection
