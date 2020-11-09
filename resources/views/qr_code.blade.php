@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Quét QRcode') }}</div>

                <div class="card-body">
                    <div class="col-md-12" style="padding-bottom:10px">
                    <input type="text" class="form-control" id="customer_id" autofocus>             
                    </div>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="col-md-12 info_result">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="{{ asset('js/jquery-3.5.1.min.js') }}" ></script>
    <script>
        $(document).ready(function(){

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $( "#customer_id" ).keypress(function(e) {
                if(e.which  == '13'){
                    var id = $(this).val();
                    $(this).val("");
                    $(".info_result").html('Đang lấy dữ liệu...')

                    $.ajax({
                        method: "POST",
                        url: "{{ route('getInfo') }}",
                        data: {id:id},
                        success: function(data){
                            $(".info_result").html(data);
                        }
                        
                    });

                }
            });
        });        
    </script>
@endsection
