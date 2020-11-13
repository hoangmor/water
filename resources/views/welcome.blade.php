<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Water Point</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Fonts -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <script src="{{asset('js/ios-orientationchange-fix.min.js')}}"></script>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
        <link rel="icon" href="{{asset('images/icon2.png')}}">
        <!-- Styles -->
        <style>
            html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>

        <style>
            /* font */
            @font-face {
                font-family: MyriadPro;
                src: url('../../fonts/MyriadPro-Regular.otf');
            }

        </style>
    </head>
    <body class="antialiased">
       <div class="container">
           <img src="{{asset('images/logo3.jpg')}}" usemap="#powerpuffgirls" id="img_background" style="position: absolute; z-index: 0; width: 100%; height: 100%;"/>
           <map name="powerpuffgirls" id="image-map">
            <area  id="river" shape="rect" coords="873,438,1140,496" href="#ppg" title="RIVER CLUB" alt="RIVER CLUB" />
            <area id="rivera" class="" shape="rect" coords="803,560,1069,623" href="#cn" title="RIVERA 1&2" alt="RIVERA 1&2" />
            <area id="club_house" shape="rect" coords="1401,332,1124,268" href="#buttercup" title="CLUB HOUSE" alt="CLUB HOUSE" />
            <area id="sale" shape="rect" coords="1320,629,1590,695" href="#blossom" title="SALE GALLERY" alt="SALE GALLERY" />
            <area  id="country" shape="rect" coords="1219,739,1498,803" href="#bubbles" title="COUNTRY CLUB" alt="COUNTRY CLUB" />
            </map>

            <div class="header display-flex">
                <div class="header-main header-main-1" style="z-index: 5;">
                    <a href="{{route('welcome')}}"><img src="{{asset('images/logo.png')}}"  style="z-index: 300;"/></a>
                </div>
            </div>
            <div class="main">
                <div class="main-club contry-club">
                    <div class="btn-link">
                        <a href="#"><span>1</span>COUNTRY CLUB</a>
                        <div class="info">
                            <ul class="SG">
                                <li>Vườn trẻ Country Club <p>(dành cho trẻ em dưới 6 tuổi)</p></li>
                                <li>Câu lạc bộ trẻ em Country Club <p>(dành cho trẻ em trên 6 tuổi)</p></li>
                                <li class="li-not-br">Câu lạc bộ bóng đá Country Club</li>
                                <li class="li-not-br">Câu lạc bộ bóng rổ Country Club</li>
                                <li class="li-not-br">Câu lạc bộ quần vợt Country Club</li>
                                <li class="li-not-br">Nhà hàng Country Club</li>
                                <li class="li-not-br finnal-li">Cà phên sân vườn Country Club</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="main-club river-club">
                    <div class="btn-link">
                        <a href="#" style="background: #0d9d46"><span style="color: #0ea347;border-top: 10px solid #19dc76;border-bottom: 10px solid #109b42;border-left: 10px solid #19dc76;border-right: 10px solid #109b42;">4</span>RIVER CLUB</a>
                        <div class="info">
                            <ul class="SG">
                                <li class="li-not-br">Show trình diễn chủ đề Vàm Cỏ Đông</li>
                                <li class="li-not-br">Công viên sông nước Waterpoint</li>
                                <li class="li-not-br">Bến du thuyền Waterpoint</li>
                                <li class="li-not-br">Nhà hàng River Club</li>
                                <li class="li-not-br finnal-li">Cà phê bờ sông River Club</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="main-club club-house">
                    <div class="btn-link">
                        <a href="#" style="background: #085a7f"><span style="color: #085a7f;border-top: 10px solid #0064ba;border-bottom: 10px solid #01396a;border-left: 10px solid #0064ba;border-right: 10px solid #01396a;">2</span>CLUB HOUSE</a>
                        <div class="info">
                            <ul class="SG">
                                <li class="li-not-br">Câu lạc bộ bóng rổ Club House</li>
                                <li class="li-not-br">Tiệc hồ bơi Waterpoint</li>
                                <li class="li-not-br">Nhà hàng Club House</li>
                                <li class="li-not-br finnal-li">Cà phê hồ bơi Club House</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="main-club rivera">
                    <div class="btn-link">
                        <a href="#" style="background: #f47025"><span style="color: #f27326;border-top: 10px solid #f6c343;border-bottom: 10px solid #ed8a37;border-left: 10px solid #f6c343;border-right: 10px solid #ed8a37;">3</span>RIVERA 1&2</a>
                        <div class="info">
                            <ul class="SG SG-change">
                                <li class="li-not-br finnal-li">Tham Quan Khu Dân Cư Rivera 1 & 2</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="main-club sale">
                    <div class="btn-link">
                        <a href="#" style="background: #0a9a9b"><span style="color: #0c9899;border-top: 10px solid #0ddbdb;border-bottom: 10px solid #02a8a8;border-left: 10px solid #0ddbdb;border-right: 10px solid #02a8a8;">5</span>RIVERA 1&2</a>
                        <div class="info">
                            <ul class="SG SG-change">
                                <li class="li-not-br finnal-li">Thông tin dự án Waterpoint</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="main-club lunch lunch1">
                    <div class="title">VUI LÒNG ĐIỀN ĐẦY ĐỦ THÔNG TIN</div>
                    <div class="input">
                        <input name="code_house" id="code_house" type="text" placeholder="Mã căn hộ" autocomplete="off"/>
                    </div>
                    <button id="register_code_house">ĐĂNG KÝ</button>
                    <p class="hotline">Hotline: 0783.9907.75</p>
                </div>
                <div class="main-club lunch lunch2">
                    <div class="title title2">VUI LÒNG ĐIỀN ĐẦY ĐỦ THÔNG TIN</div>
                    <div class="input">
                        <input name="number_lunch" id="number_lunch" type="text" placeholder="Số lượng" autocomplete="off"/>
                        <input name="tel_lunch" id="tel_lunch" type="text" placeholder="Số điện thoại" autocomplete="off"/>
                    </div>
                    <p class="notice">*Lưu ý: Số lượng đăng ký ăn trưa được tính cho người lớn và trẻ em trên 2 tuổi</p>
                    <button id="register_full_lunch">ĐĂNG KÝ</button>
                </div>
                <div class="main-club lunch lunch3">
                    <div class="title title2">VUI LÒNG CHỌN KHU VỰC ĐĂNG KÝ ĂN TRƯA</div>
                    <div class="btn-link style-hover @if($arrDataArea['area1']['rest'] <= 0) stock @endif">
                        <a class="btn-register-lunch" id="country_club"><span>1</span><p style="display: inline;">COUNTRY CLUB</p><p class="icon_in_a">{{$arrDataArea['area1']['rest']}}/{{$arrDataArea['area1']['max']}}</p><i class="fa fa-user"></i><i class="fa fa-user"></i><i class="fa fa-user"></i></a>
                    </div>
                    <div class="btn-link style-hover @if($arrDataArea['area2']['rest'] <= 0) stock @endif">
                        <a  class="btn-register-lunch"  id="club_house" style="background: #085a7f"><span style="color: #085a7f;border-top: 10px solid #0064ba;border-bottom: 10px solid #01396a;border-left: 10px solid #0064ba;border-right: 10px solid #01396a;">2</span>CLUB HOUSE<p class="icon_in_a">{{$arrDataArea['area2']['rest']}}/{{$arrDataArea['area2']['max']}}</p><i class="fa fa-user"></i><i class="fa fa-user"></i><i class="fa fa-user"></i></a>
                    </div>
                    <div class="btn-link style-hover @if($arrDataArea['area3']['rest'] <= 0) stock @endif">
                        <a  class="btn-register-lunch" id="river_club" style="background: #0d9d46"><span style="color: #0ea347;border-top: 10px solid #19dc76;border-bottom: 10px solid #109b42;border-left: 10px solid #19dc76;border-right: 10px solid #109b42;">3</span>RIVER CLUB<p class="icon_in_a icon_in_a_3">{{$arrDataArea['area3']['rest']}}/{{$arrDataArea['area3']['max']}}</p><i class="fa fa-user"></i><i class="fa fa-user"></i><i class="fa fa-user"></i></a>
                    </div>
                </div>
                <div class="main-club lunch lunch4 lunch4-main">
                    <div class="title title2">KHUNG GIỜ THAM GIA TIỆC TRƯA</div>
                    <div class="div-choose-min">
                        <div  class="specific specific1 style-hover  @if($arrLunchTime['min_1']['rest'] <= 0) stock @endif" id="min_1">
                            <div class="specific-left">11:30 - 13:30</div>
                            <div class="specific-right"><span class="specific-right-1 @if($arrLunchTime['min_1']['rest'] <= 0) color-red @endif">@if($arrLunchTime['min_1']['rest'] <= 0) HẾT @else Còn @endif</span><span class="specific-right-2">{{$arrLunchTime['min_1']['rest']}}/{{$arrLunchTime['min_1']['max']}}</span><i class="fa fa-user"></i><i class="fa fa-user"></i><i class="fa fa-user"></i></div>
                        </div>
                    </div>
                </div>
                <div class="main-club lunch lunch5">
                    <img class="icon-cuss" src="{{asset('images/icon1.png')}}" width="100" height="100">
                    <div class="title title2">CHÚC MỪNG BẠN ĐÃ ĐĂNG KÝ THÀNH CÔNG <br/><span style="font-weight: normal"><span id="text-title">SUẤT ĂN TRƯA TẠI</span> </span><span style="text-transform: uppercase;" id="area_success"></span><br/>VÀO LÚC <span style="text-transform: uppercase;" id="start_success"></span>-<span style="text-transform: uppercase;" id="end_success"></span></div>
                    <div class="parent-qr">
                        <div id="example"></div>
                    </div>
                    <p class="notice">Vui lòng lưu giữ và đưa mã QR Code này cho nhân viên <br/> <span id="notice-cuss">Nhà hàng để được xác nhận</span><br/><span id="notice-cuss2"></span></p>
                </div>
                <div class="main-club lunch lunch1 pc0">
                    <div class="title">VUI LÒNG ĐIỀN ĐẦY ĐỦ THÔNG TIN</div>
                    <div class="input">
                        <input name="code_house_pc0" id="code_house_pc0" type="text" placeholder="Mã căn hộ" autocomplete="off"/>
                    </div>
                    <button id="register_code_house_pc0">ĐĂNG KÝ</button>
                    <p class="hotline">Hotline: 0783.9907.75</p>
                </div>
                <div class="main-club lunch lunch2 pc3">
                    <div class="title title2">VUI LÒNG ĐIỀN ĐẦY ĐỦ THÔNG TIN</div>
                    <div class="input pc3-input">
                        <input name="number_lunch_pc3" id="number_lunch_pc3" type="text" placeholder="Số lượng" autocomplete="off"/>
                        <input name="tel_lunch_pc3" id="tel_lunch_pc3" type="text" placeholder="Số điện thoại" autocomplete="off"/>
                    </div>
                    <button id="register_full_lunch_pc3">ĐĂNG KÝ</button>
                </div>
                <div class="main-club lunch pc1">
                    <div class="title title2">VUI LÒNG CHON THUYỀN ĐỂ THAM QUAN</div>
                    <div class="content-pc">
                        <div class="my-container-img ship1 ship-choose" id="princess">
                            <h1 style="text-align: center">Princess <span class="num-ship">56</span></h1>
                        </div>
                        <div class="my-container-img ship2 ship-choose" id="fortis">
                            <h1 style="text-align: center">Fortis <span class="num-ship">39</span></h1>
                        </div>
                    </div>
                    <button id="btn_choose_ship">ĐĂNG KÝ</button>
                </div>
                <div class="main-club lunch lunch4 pc5">
                    <div class="title title2">VUI LÒNG LỰA CHỌN KHUNG GIỜ</div>
                    <div class="contain-choose-ship">
                        <div class="contain-choose-ship-left contain-choose-ship-0 div-choose-min">
                            @foreach($arrTimeChooseShip1 as $key => $val)
                                <div class="contain-choose-ship-1 specific specific2 style-hover @if($val['flag'] == 0) stock @endif" id="{{$key}}">
                                    <input type="hidden" value="{{$val['rest']}}" id="time_ship_{{$key}}"/>
                                    <div class="specific-left">{{$val['time']}}</div>
                                    <div class="specific-right"><span class="specific-right-1 @if($val['flag'] == 0) color-red @endif">{{$val['stt']}}</span><span class="specific-right-2">{{$val['rest']}}/{{$val['max']}}</span><i class="fa fa-user"></i><i class="fa fa-user"></i><i class="fa fa-user"></i></div>
                                </div>
                            @endforeach
                        </div>
                        <div class="contain-choose-ship-right contain-choose-ship-0 div-choose-min">
                            @foreach($arrTimeChooseShip2 as $key => $val)
                                <div class="contain-choose-ship-1 specific  specific2 style-hover @if($val['flag'] == 0) stock @endif"  id="{{$key}}">
                                    <input type="hidden" value="{{$val['rest']}}" id="time_ship_{{$key}}"/>
                                    <div class="specific-left">{{$val['time']}}</div>
                                    <div class="specific-right"><span class="specific-right-1 @if($val['flag'] == 0) color-red @endif">{{$val['stt']}}</span><span class="specific-right-2">{{$val['rest']}}/{{$val['max']}}</span><i class="fa fa-user"></i><i class="fa fa-user"></i><i class="fa fa-user"></i></div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

            </div>
            <div class="footer display-flex">
                <div class="footer-main"  style="z-index: 5;">
                    <div class="div-footer" id="btn_pc">ĐĂNG KÝ TRẢI NGHIỆM DU THUYỀN</div>
                    <div class="div-footer" id="btn_lunch">ĐĂNG KÝ THAM DỰ TIỆC TRƯA</div>
                </div>
            </div>
       </div>
       <script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/jquery.rwdImageMaps.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/qrcode.min.js')}}"></script>
<script type="text/javascript">


</script>
<script>
$(document).ready(function(e) {
    // var codeArr = <?php echo json_encode($codeArr); ?>;
    //get code
    var codeArr = <?php echo json_encode($codes); ?>;
    // 
	$('img[usemap]').rwdImageMaps();
	var dataLunch = new FormData();
    var data = {};
	$('area').on('click', function() {
        var src_current = $('#img_background').attr("src");
        var src_new = src_current.replace("logo3", "logo4");
        $('#img_background').attr("src", src_new);
        $('.main').css("position", "relative");
        var id = $(this).attr('id');
        if(id == 'country'){
            $('.contry-club').css("display", "flex");
        }
        if(id == 'river'){
            $('.river-club').css("display", "flex");
        }
        if(id == 'club_house'){
            $('.club-house').css("display", "flex");
        }
        if(id == 'rivera'){
            $('.rivera').css("display", "flex");
        }
        if(id == 'sale'){
            $('.sale').css("display", "flex");
        }
	});

    $('.div-footer').on('click', function(){
        var src_current = $('#img_background').attr("src");
        var src_new = src_current.replace("logo", "image");
        $('#img_background').attr("src", src_new);
        $('.main-club').hide();
        $('.main').css("position", "relative");
        $('.main').css("display", "block");
        $('.main').css("height", "80%");
        var id = $(this).attr('id');
        if(id =='btn_pc'){
            $('.pc0').css({"display": "flex", "margin": "auto"});
            $('.pc0').addClass('importantRule');
        }
        if(id =='btn_lunch'){
            $('.lunch1').css({"display": "flex", "margin": "auto"});
        }
        $('.footer').css('display', 'none');
    });
    $('#register_code_house').on('click', function(){
        var t0 = $('#code_house').val();
        // if(jQuery.inArray(t0, codeArr) !== -1){
        if(codeArr[t0] != null){ 
            $('.main-club').hide();
            $('.lunch2').css({"display": "flex", "margin": "auto"});
            $('.footer').css('display', 'none');
            dataLunch.append("codeId", t0);
        }else{
            $('#code_house').css({"border-color": "red",
                        "border-width":"2px",
                        "border-style":"solid"});
        }

    });
    $('#register_full_lunch').on('click', function(){

        var t1 = $('#number_lunch').val();
        var t2 = $('#tel_lunch').val();
        $('#number_lunch').css({"border-color": "#bbb",
                        "border-width":"1px",
                        "border-style":"solid"});
        $('#tel_lunch').css({"border-color": "#bbb",
                        "border-width":"1px",
                        "border-style":"solid"});
        if(t1 != '' && t2 != '' && $.isNumeric(t1) && validatePhone(t2) && t1 <= codeArr[dataLunch.get('codeId')]){
            $('.main-club').hide();
            $('.lunch3').css({"display": "flex", "margin": "auto"});
            $('.footer').css('display', 'none');
            dataLunch.append("Amount", t1);
            dataLunch.append("Tel", t2);
        }else{
            if(t1 == '' || !$.isNumeric(t1) || t1 > codeArr[dataLunch.get('codeId')]){
                $('#number_lunch').css({"border-color": "red",
                        "border-width":"2px",
                        "border-style":"solid"});
            }
            if(t2 == '' || !validatePhone(t2)){
                $('#tel_lunch').css({"border-color": "red",
                        "border-width":"2px",
                        "border-style":"solid"});
            }


        }

    });
    $('.btn-register-lunch').on('click', function(){
        $('.main-club').hide();
        $('.lunch4-main').css({"display": "flex", "margin": "auto"});
        $('.footer').css('display', 'none');
        var id = $(this).attr('id');
        dataLunch.append("Area", id);
    });
    $('.specific1').on('click', function(){
        $('.specific1').addClass('not-click');
        var id = $(this).attr('id');
        dataLunch.append("Time", id);
        $.ajaxSetup({
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            });
        $.ajax({
            type:'POST',
            url:'{{route('register_lunch')}}',
            data: dataLunch,
          processData: false,
          contentType: false,
            success:function(data){
                $('.main-club').hide();
                $('.lunch5').css({"display": "flex", "margin": "auto"});
                $('.footer').css('display', 'none');
                $('#area_success').html(data['area_cuss']);
                $('#start_success').html(data['start_cuss']);
                $('#end_success').html(data['end_cuss']);
                var text = data['id'];
                var data = String(text);
                $('#example').qrcode(data);


            }
        });
    });
    function generateQRcode(width, height, text) {
      $('#example').qrcode({width: width,height: height,text: text});
   }

   var dataShip = new FormData();
    //
    $('#register_code_house_pc0').on('click', function(){
        var t0 = $('#code_house_pc0').val();
        if(codeArr[t0] != null){ 
            $('.main-club').hide();
            $('.pc0').removeClass('importantRule');
            $('.pc3').css({"display": "flex", "margin": "auto"});
            $('.pc3').addClass('importantRule');
            $('.footer').css('display', 'none');
            dataShip.append("codeId", t0);
        }else{
            $('#code_house_pc0').css({"border-color": "red",
                        "border-width":"2px",
                        "border-style":"solid"});
        }

    });
    $('#register_full_lunch_pc3').on('click', function(){
        // $('.pc1').removeClass('importantRule');
        var t1 = $('#number_lunch_pc3').val();
        var t2 = $('#tel_lunch_pc3').val();
        $('#number_lunch_pc3').css({"border-color": "#bbb",
                        "border-width":"1px",
                        "border-style":"solid"});
        $('#tel_lunch_pc3').css({"border-color": "#bbb",
                        "border-width":"1px",
                        "border-style":"solid"});
        if(t1 != '' && t2 != '' && $.isNumeric(t1) && validatePhone(t2) && t1 <= codeArr[dataShip.get('codeId')]){
            $('.main-club').hide();
            $('.pc3').removeClass('importantRule');
            $('.pc1').css({"display": "flex", "margin": "auto"});
            $('.pc1').addClass('importantRule');
            $('.footer').css('display', 'none');
            dataShip.append("Amount", t1);
            dataShip.append("Tel", t2);
        }else{
            if(t1 == '' || !$.isNumeric(t1) || t1 > codeArr[dataShip.get('codeId')]){
                $('#number_lunch_pc3').css({"border-color": "red",
                        "border-width":"2px",
                        "border-style":"solid"});
            }
            if(t2 == '' || !validatePhone(t2)){
                $('#tel_lunch_pc3').css({"border-color": "red",
                        "border-width":"2px",
                        "border-style":"solid"});
            }


        }

    });
    $('.ship-choose').on('click', function(){
        var id = $(this).attr('id');
        $('.ship-choose').css({"border": "none"});
        dataShip.delete('Area');
        $(this).css({"border-color": "white",
                        "border-width":"2px",
                        "border-style":"solid"});


        dataShip.append("Area", id);
    });
    $('#btn_choose_ship').on('click', function(){
        if(dataShip.get("Area") == "princess" || dataShip.get("Area") == "fortis"){
            $('.main-club').hide();
            $('.pc1').removeClass('importantRule');
            $('.pc5').removeClass('importantRule');
            $('.pc5').css({"display": "flex", "margin": "auto"});
            $('.footer').css('display', 'none');
       
        }
    });
    $('.specific2').on('click', function(){
        $('.specific2').addClass('not-click');
        var id = $(this).attr('id');
        var restTemp = $('#time_ship_'+id).val();
        // alert(dataShip.get("Amount"));
        // alert(restTemp);
        if(dataShip.get("Amount") > parseInt(restTemp)){
            $(this).css({"border-color": "red",
                        "border-width":"2px",
                        "border-style":"solid"});
            $('.specific2').removeClass('not-click');
        }else{
            dataShip.append("Time", id);
             $.ajaxSetup({
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            });
            $.ajax({
                type:'POST',
                url:'{{route('register_ship')}}',
                data: dataShip,
            processData: false,
            contentType: false,
                success:function(data){
                    $('.main-club').hide();
                    $(".pc1").removeClass('importantRule');
                    $('.lunch5').css({"display": "flex", "margin": "auto"});
                    $('.footer').css('display', 'none');
                    $('#text-title').html('TRẢI NGHIỆM TRÊN DU THUYỀN');
                    $('#area_success').html(data['area_cuss']);
                    $('#start_success').html(data['start_cuss']);
                    $('#end_success').html(data['end_cuss']);
                    $('#notice-cuss').html('Bến thuyền để đăng ký');
                    $('#notice-cuss2').html('Đến trước giờ khởi hành ít nhất 15 phút');
                    var text = data['id'];
                    var data = String(text);
                    $('#example').qrcode(data);
                }
            });
        }
        
    });



    function validatePhone(txtPhone) {
        var filter = /^((\+[1-9]{1,4}[ \-]*)|(\([0-9]{2,3}\)[ \-]*)|([0-9]{2,4})[ \-]*)*?[0-9]{3,4}?[ \-]*[0-9]{3,4}?$/;
        if (filter.test(txtPhone)) {
            return true;
        }
        else {
            return false;
    }
}


});
</script>
    </body>
</html>
