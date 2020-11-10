<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Fonts -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <script src="{{asset('js/ios-orientationchange-fix.min.js')}}"></script>
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
            /* @font-face {  
                font-family: MyriadPro;
                src: url('../../fonts/lato-light.ttf');
            } */

            body {
                font-family: 'Nunito';
                width: 100%;
            }
            /* :root {
                --ratio: 16 / 9;
                --width: 100vw;
                --height: calc(var(--width) * var(--ratio));
            } */
            .antialiased {
                display: flex;
                justify-content: center;
                align-items: center;
            }
            .container {
                position: relative;
                width: 100vw;
                height: calc(100vw * (9/16));
            }
            .header {
                height: 20%;
                align-items: stretch;
            }
            .header-main-1 {
                width: 90%;
            }
            .header-main-2 {
                flex-grow: 4;
                color: white;
                font-size: 30px;
                text-align: center;
            }
            .header-main-3 {
                flex-grow: 2;
                text-align: center;
            }
            .header-main {
            }
            .main {
                height: 60%;
                width: 100%;
                /* border: 2px solid rgb(116, 111, 111); */
                /* position: relative; */
                display: flex;
                justify-content: center;
                align-items: center;
            }
            .footer {
                height: 20%;
                width: 100%;
            }
            .display-flex {
                display: flex;
                justify-content: center;
                align-items: center;
            }
            .footer-main {
                width: 80%;
                display: flex;
                justify-content: center;
                align-items: center;
            }
            .div-footer {
                border: 3px solid white;
                border-radius: 20px;
                color: white;
                font-size: 20px;
                padding: 10px 100px 10px 100px;
                margin: 10px;
                background: linear-gradient(to right, #164171 0%, #0e7d91 100%);
                font-weight: bold;
                cursor: pointer;
            }
            
            .div-footer:hover, 
            .div-footer:focus {
                box-shadow: 0 5px 15px white;
            }
            @keyframes pulse {
            0% { box-shadow: 0 0 0 0 var(--hover); }
            }
            /*  */
            .btn-link {
                /* border: 2px solid white; */
                display: inline-block;
            }
            .btn-link a {
                text-decoration: none;
                background: #1f92d1;
                padding: 25px 160px;
                padding-top: 30px;
                color: #fff;
                position: relative;
                border-radius: 20px;
                font-size: 45px;
                font-weight: bold;
                border: 3px solid white;
                padding-left: 215px;
                font-family: MyriadPro;
                box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);
            }
            .btn-link a span {
                border-radius: 50%;
                padding: 1px 50px;
                padding-top: 7px;
                position: absolute;
                background: #f4f4f4;
                top: 50%;
                left: -20px;
                transform: translateY(-50%);
                font-size: 90px;
                border-top: 10px solid #00d4fc;
                border-bottom: 10px solid #0087f7;
                border-left: 10px solid #00d4fc;
                border-right: 10px solid #0087f7;
                font-weight: bold;
                color: #1f92d1;
                font-family: MyriadPro;
                box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);
            }
            .btn-link .info {
                padding: 5px;
                background-color: #fff;
                margin-right: 2px;
                border: 1px solid #fff;
                border-bottom-right-radius: 30px;
                border-bottom-left-radius: 30px;
            }
            .btn-link .info .SG {
                padding: 0px;
                list-style-type: none;
                padding-top: 5px;
                margin-left: 60px;
                margin-right: 60px;
            }
            .btn-link .info .SG-change {
                padding-top: 40px !important;
                padding-bottom: 20px !important;
            }
            .btn-link .info .SG li{
                text-align: center;
                border-bottom: 4px solid #1f92d1;
                padding-top: 5px;
                padding-bottom: 5px;
                font-size: 22px;
                color: #033c71;
                font-weight: 600;
            }
            .btn-link .info .SG-change li {
                font-size: 25px !important;
            }
            .btn-link .info .SG li p {
                margin-top: 0px !important;
                margin-bottom: 0px !important;
                font-size: 18px;
            }
            .btn-link .info .SG .li-not-br {
                padding-bottom: 23px;
                padding-top: 23px;
            }
            .btn-link .info .SG .finnal-li {
                border-bottom: none;
            }
            #test {
                border: 2px solid black;
            }

            /*  */
            img[usemap] {
                border: none;
                height: auto;
                max-width: 100%;
                width: auto;
            }
            .link-rivera {
                background:#fff;
                display:block;
                height:475px;
                opacity:0;
                position:absolute;
                width:320px;
            }
            .link-rivera:focus {
                opacity:0.2;
            }
            /*  */
            /* .contry-club {
                display: none;
            } */
            .main-club {
                width: 50%;
                /* border: 2px solid white; */
                position: relative;
                display: none;
                justify-content: center;
                align-items: center;
            }
            /* lunch */
            .lunch {
                flex-direction: column;
            }
            .lunch .title {
                color: white;
                font-size: 40px;
                font-weight: bold;
                width: 100%;
                text-align: center;
                margin-bottom: 150px;
            } 
            .lunch .input {
                width: 70%;
                margin-bottom: 100px;
            }
            .lunch .input input {
                display: inline-block;
                margin:15px 0;
                padding:15px 10px;
                width:100%;
                outline:none;
                border:1px solid #bbb;
                border-radius:38px;
                display:inline-block;
                -webkit-box-sizing:border-box;
                -moz-box-sizing:border-box;
                        box-sizing:border-box;
                -webkit-transition:0.2s ease all;
                -moz-transition:0.2s ease all;
                    -ms-transition:0.2s ease all;
                    -o-transition:0.2s ease all;
                        transition:0.2s ease all;
                text-align: center;
                font-size: 30px;
                font-weight: bold;
                box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
            }
            ::-webkit-input-placeholder { /* Edge */
                color: #7f9db7;
                }

                :-ms-input-placeholder { /* Internet Explorer */
                    color: #7f9db7;
                }

                ::placeholder {
                    color: #7f9db7;
                }
            .lunch button {
                display: inline-block;
                padding: 20px 50px 20px 50px;
                font-size: 23px;
                font-weight: bold;
                border-radius: 21px;
                border: 1px solid white;
                color: white;
                background: linear-gradient(to right, #174372 0%, #0e7b90 100%);
                margin-bottom: 40px;
            }
            .lunch button:focus {
                outline: none;
            }
            .lunch button:hover, 
            .lunch button:focus {
                box-shadow: 0 5px 15px white;
            }
            .lunch .hotline {
                font-size: 25px;
                font-weight: bold;
                color: white;
                margin-bottom: 267px;
            }
            /*  */
            .lunch2 .title2 {
                margin-bottom: 50px !important;
            }
            .lunch2 .notice {
                font-size: 25px;
                font-weight: bold;
                color: white;
                margin-bottom: 70px;
                text-align: center;
            }
            .lunch2 .input {
                margin-bottom: 70px;
            }
            .lunch3 .btn-link {
                margin-bottom: 70px;
                width: 100%;
            }
            .lunch3 .btn-link a {
                padding: 18px 48px;
                padding-top: 25px;
                padding-left: 192px;
                display: block;
                width: 100%;
                text-align: right;
            }
            .lunch3 .btn-link a .icon_in_a {
                display: inline;
                padding-left: 200px;
                vertical-align: middle;
                font-size: 30px;
                font-weight: normal;
                margin-right: 10px;
            }
            .lunch3 .btn-link a .icon_in_a_3 {
                padding-left: 228px;
            }
            .lunch3 .btn-link a i {
                font-size: 20px;
                vertical-align: middle;
                margin-bottom: 3px;
                margin-right: 2px;
            }
            /*  */
            .lunch4 .div-choose-min {
                width: 100%;
                display: flex;
                justify-content: center;
                align-items: center;
                flex-direction: column;

            }
            .lunch4 .title {
                margin-bottom: 100px;
            }
            .lunch4 .div-choose-min .specific {
                border: 1px solid white;
                width: 80%;
                border-radius: 50px;
                padding: 15px 40px 15px 40px;
                background: white;
                display: flex;
                justify-content: center;
                align-items: center;
                margin-bottom: 50px;
                box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);
            }
            .lunch4 .div-choose-min .specific .specific-left {
                width: 50%;
                text-align: left;
                font-size: 35px;
                font-weight: bold;
                color: #01396a;
            }
            .lunch4 .div-choose-min .specific .specific-right {
                width: 50%;
                text-align: right;
            }
            .lunch4 .div-choose-min .specific .specific-right .specific-right-1 {
                font-size: 30px;
                font-weight: bold;
                margin-right: 43px;
                color: #01396a;
            }
            .lunch4 .div-choose-min .specific .specific-right .specific-right-2 {
                font-size: 30px;
                margin-right: 15px;
                color: #0ddbdb;
            }
            .lunch4 .div-choose-min .specific .specific-right i {
                font-size: 25px;
                margin-right: 3px;
                color: #02a8a8;
            }
            .style-hover:focus,
            .style-hover:hover {
                box-shadow: 0 5px 15px white !important;
                cursor: pointer;
            }
            /* lunch5 */
            .lunch5 .parent-qr {
                padding: 20px;
                background-color: white;
                box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);
                margin-bottom: 50px;
                border-radius: 20px;
            }
            .lunch5 .title2 {
                margin-top: 20px;
                margin-bottom: 60px !important;
            }
            .lunch5 .notice {
                font-size: 25px;
                color: white;
                text-align: center;
            }
            @media only screen  and (max-width: 1366px)  {
                /* lunch5 */
                .lunch5 .parent-qr {
                    padding: 15px;
                    margin-bottom: 15px;
                }
                .lunch5 .title2 {
                    margin-top: 10px;
                    margin-bottom: 30px !important;
                }
                canvas {  /* or some other selector */
                    width: 150px !important;
                    height: 150px !important;
                    }
                .lunch5 .title {
                    font-size: 25px;
                }
                /*  */
                .lunch4 .div-choose-min .specific {
                    width: 100%;
                    margin-bottom: 30px;
                    padding: 13px 40px 13px 40px;
                }
                .lunch4 .div-choose-min .specific .specific-left {
                    font-size: 27px;
                }
                .lunch4 .div-choose-min .specific .specific-right .specific-right-1 {
                    font-size: 27px;
                }
                .lunch4 .div-choose-min .specific .specific-right .specific-right-2 {
                    font-size: 27px;
                }
                .lunch4 .div-choose-min .specific .specific-right i {
                    font-size: 21px;
                }
                /*  */
                .lunch3  .btn-link a span {
                    padding: 0px 33px;
                    padding-top: 10px;
                    left: -20px;
                    font-size: 53px;
                }
                .lunch3 {
                    width: 60%;
                }
                .lunch3 .btn-link a {
                    padding: 12px 48px;
                    padding-top: 15px;
                    padding-left: 172px;
                    display: block;
                    width: 100%;
                }
                .lunch3 .btn-link a i {
                    font-size: 15px;
                    vertical-align: middle;
                    margin-bottom: 1px;
                    margin-right: 2px;
                }
                .lunch3 .btn-link {
                    margin-bottom: 54px;
                    width: 85%;
                }
                .lunch3 .btn-link a .icon_in_a {
                    display: inline;
                    padding-left: 74px;
                    vertical-align: middle;
                    font-size: 21px;
                    font-weight: normal;
                    margin-right: 10px;
                }
                /*  */
                /*  */
                .lunch2 .title2 {
                    margin-bottom: 40px !important;
                }
                .lunch2 .input {
                    margin-bottom: 0px !important;
                }
                .lunch2 .notice {
                    margin-bottom: 40px;
                }
                /*  */
                .lunch .title {
                    font-size: 30px;
                    margin-bottom: 80px;
                }
                .lunch .input {
                    width: 90%;
                    margin-bottom: 40px;
                }
                .lunch .input input {
                    padding: 15px 10px;
                    font-size: 20px;
                }
                .lunch button {
                    padding: 15px 50px 15px 50px;
                    margin-bottom: 10px;
                }
                .lunch .hotline {
                    margin-bottom: 60px;
                }
                .div-footer {
                    font-size: 14px;
                    padding: 5px 60px 5px 60px;
                }
                .header-main-1 img {
                    width: 11% !important;
                }
                .footer-main {
                    width: 90%;
                }
                /* set css container */
                .btn-link a {
                    padding: 18px 160px;
                    padding-top: 20px;
                    font-size: 30px;
                    border: 3px solid white;
                    padding-left: 163px;
                }
                .btn-link a span {
                    padding: 1px 31px;
                    padding-top: 7px;
                    left: -20px;
                    font-size: 55px;
                }
                .btn-link .info .SG li {
                    border-bottom: 2px solid #1f92d1;
                    padding-top: 5px;
                    padding-bottom: 5px;
                    font-size: 20px;
                }
                .btn-link .info .SG li p {
                    margin-top: 0px !important;
                    margin-bottom: 0px !important;
                    font-size: 15px;
                }
                .btn-link .info .SG .li-not-br {
                    padding-bottom: 10px;
                    padding-top: 10px;
                }
                .btn-link .info .SG-change li {
                    font-size: 19px !important;
                }
            }
            @media only screen and  (max-width: 1024px)  {
                 /* lunch5 */
                 .lunch5 .icon-cuss {
                     width: 80px !important;
                     height: 80px !important;
                 }
                 .lunch5 {
                    width: 65% !important;
                 }
                 .lunch5 .parent-qr {
                    padding: 15px;
                    margin-bottom: 10px;
                }
                .lunch5 .title2 {
                    margin-top: 10px;
                    margin-bottom: 20px !important;
                }
                canvas {  /* or some other selector */
                    width: 100px !important;
                    height: 100px !important;
                    }
                .lunch5 .title {
                    font-size: 20px !important;
                }
                
                .lunch5 .notice {
                    font-size: 15px;
                }
                /*  */
                /* 
                 */
                 
                 .lunch4 .title {
                    font-size: 25px;
                    margin-bottom: 48px;
                }
                 .lunch4 .div-choose-min .specific {
                    width: 100%;
                    margin-bottom: 25px;
                    padding: 5px  40px 5px  40px;
                }
                .lunch4 .div-choose-min .specific .specific-left {
                    font-size: 20px;
                }
                .lunch4 .div-choose-min .specific .specific-right .specific-right-1 {
                    font-size: 20px;
                }
                .lunch4 .div-choose-min .specific .specific-right .specific-right-2 {
                    font-size: 20px;
                }
                .lunch4 .div-choose-min .specific .specific-right i {
                    font-size: 17px;
                }
                 /*  */
                .lunch3  .btn-link a span {
                    padding: 1px 21px;
                    padding-top: 1px;
                    left: -20px;
                    font-size: 36px;
                }
                .lunch3 {
                    width: 60%;
                }
                .lunch3 .btn-link a {
                    padding: 7px 48px;
                    padding-top: 10px;
                    padding-left: 95px;
                    display: block;
                    width: 100%;
                }
                .lunch3 .btn-link a i {
                    font-size: 12px;
                    vertical-align: middle;
                    margin-bottom: 1px;
                    margin-right: 2px;
                }
                .lunch3 .btn-link {
                    margin-bottom: 54px;
                    width: 85%;
                }
                .lunch3 .btn-link a .icon_in_a {
                    display: inline;
                    padding-left: 74px;
                    vertical-align: middle;
                    font-size: 17px;
                    font-weight: normal;
                    margin-right: 10px;
                }
                /*  */
                .lunch2 .title2 {
                    margin-bottom: 20px !important;
                }
                .lunch2 .input {
                    margin-bottom: 0px !important;
                }
                .lunch2 .notice {
                    margin-bottom: 20px;
                    margin-top: 10px;
                }
                /*  */
                .lunch .title {
                    font-size: 25px;
                    margin-bottom: 80px;
                }
                .lunch .input {
                    width: 90%;
                    margin-bottom: 40px;
                }
                .lunch .input input {
                    padding: 10px 10px;
                    font-size: 20px;
                }
                
                .div-footer {
                    font-size: 13px;
                    padding: 3px 30px 3px 30px;
                    border: 2px solid white;
                }
                .header-main-1 img {
                    width: 11% !important;
                }
                .antialiased {
                    /* height: 100vh; */
                }
                .btn-link .info .SG {
                    padding: 0px;
                    list-style-type: none;
                    padding-top: 5px;
                    margin-left: 38px;
                    margin-right: 38px;
                }
                .btn-link a {
                    padding: 15px 139px;
                    padding-top: 20px;
                    font-size: 20px;
                    border: 3px solid white;
                    padding-left: 148px;
                }
                .btn-link a span {
                    padding: 1px 31px;
                    padding-top: 7px;
                    left: -20px;
                    font-size: 46px;
                }
                .btn-link .info .SG li {
                    border-bottom: 2px solid #1f92d1;
                    padding-top: 2px;
                    padding-bottom: 2px;
                    font-size: 15px;
                }
                .btn-link .info .SG li p {
                    font-size: 12px;
                }
                .btn-link .info .SG-change li {
                    font-size: 17px !important;
                }
            }
            @media screen and (max-width: 823px){
                 /* lunch5 */
                 .lunch5 .icon-cuss {
                     width: 50px !important;
                     height: 50px !important;
                 }
                 .lunch5 {
                    width: 65% !important;
                 }
                 .lunch5 .parent-qr {
                    padding: 15px;
                    margin-bottom: 5px;
                }
                .lunch5 .title2 {
                    margin-top: 10px;
                    margin-bottom: 20px !important;
                }
                canvas {  /* or some other selector */
                    width: 80px !important;
                    height: 80px !important;
                    }
                .lunch5 .title {
                    font-size: 15px !important;
                }
                
                .lunch5 .notice {
                    font-size: 15px;
                }
                /*  */
                .lunch4 .title {
                    font-size: 25px;
                    margin-bottom: 48px;
                }
                 .lunch4 .div-choose-min .specific {
                    width: 100%;
                    margin-bottom: 25px;
                    padding: 5px  40px 5px  40px;
                }
                .lunch4 .div-choose-min .specific .specific-left {
                    font-size: 18px;
                }
                .lunch4 .div-choose-min .specific .specific-right .specific-right-1 {
                    font-size: 18px;
                }
                .lunch4 .div-choose-min .specific .specific-right .specific-right-2 {
                    font-size: 18px;
                }
                .lunch4 .div-choose-min .specific .specific-right i {
                    font-size: 15px;
                }
                .lunch4  {
                    width: 65%;
                }
                /*  */
                .lunch3 .btn-link a i {
                    font-size: 6px;
                    vertical-align: middle;
                    margin-bottom: 1px;
                    margin-right: 2px;
                }
                .lunch3 .btn-link a .icon_in_a {
                    display: inline;
                    padding-left: 57px;
                    vertical-align: middle;
                    font-size: 9px;
                    font-weight: normal;
                    margin-right: 10px;
                }
                .lunch3 .btn-link a {
                    padding: 7px 48px;
                    padding-top: 10px;
                    padding-left: 72px;
                    display: block;
                    width: 100%;
                }
                .lunch3 .btn-link a span {
                    padding: 1px 16px;
                    padding-top: 1px;
                    left: -20px;
                    font-size: 31px;
                }
                .lunch3 .btn-link {
                    margin-bottom: 32px;
                    width: 85%;
                }
                /*  */
                .lunch2 .input input {
                    font-size: 20px;
                    margin-bottom: 5px;
                    margin-top: 5px;
                }
                .lunch2 .title2 {
                    margin-bottom: 20px !important;
                }
                .lunch2 .input {
                    margin-bottom: 0px !important;
                }
                .lunch2 .notice {
                    font-size: 20px;
                    margin-bottom: 20px;
                    margin-top: 10px;
                }
                /*  */
                .main-club {
                    width: 60%;
                }
                .lunch .title {
                    font-size: 20px;
                    margin-bottom: 35px;
                }
                .lunch .input {
                    margin-bottom: 20px;
                }
                .lunch button {
                    padding: 10px 50px 10px 50px;
                    margin-bottom: 10px;
                }
                .lunch button {
                    padding: 15px  50px 15px  50px;
                    font-size: 20px;
                }
                .lunch .hotline {
                    font-size: 20px;
                }
                .btn-link a {
                    padding: 8px 102px;
                    padding-top: 12px;
                    font-size: 20px;
                    padding-left: 120px;
                }
                .btn-link a span {
                    padding: 1px 20px;
                    padding-top: 7px;
                    left: -20px;
                    font-size: 31px;
                }
                .btn-link .info .SG {
                    padding-top: 3px;
                    margin-left: 25px;
                    margin-right: 25px;
                }
                .btn-link .info {
                    margin-right: 7px;
                }
                .btn-link .info .SG .li-not-br {
                    padding-bottom: 5px;
                    padding-top: 5px;
                }
                .btn-link .info .SG li {
                    border-bottom: 2px solid #1f92d1;
                    padding-top: 2px;
                    padding-bottom: 2px;
                    font-size: 12px;
                }
                .btn-link .info .SG {
                    padding-top: 3px;
                    margin-left: 25px;
                    margin-right: 25px;
                    margin-bottom: 3px;
                }
                .btn-link .info .SG-change li {
                    font-size: 13px !important;
                }
                .btn-link .info .SG-change {
                    padding-top: 20px !important;
                    padding-bottom: 20px !important;
                }
            }
            @media screen and (max-width: 768px){
                .main-club {
                    width: 60%;
                }
                .lunch .title {
                    font-size: 20px;
                    margin-bottom: 40px;
                }
                .lunch .input input {
                    padding: 8px 10px;
                    font-size: 20px;
                }
                .lunch .hotline {
                    font-size: 20px;
                }
                .lunch button {
                    padding: 10px 50px 10px 50px;
                }
                .lunch .input {
                    width: 90%;
                    margin-bottom: 30px;
                }
                .lunch .hotline {
                    margin-bottom: 43px;
                }
                .lunch button {
                    font-size: 20px;
                }
                .div-footer {
                    font-size: 9px;
                    padding: 3px 20px 3px 20px;
                    border: 2px solid white;
                }
                .header-main-1 img {
                    width: 11% !important;
                }
                .antialiased {
                    /* height: 100vh; */
                }
                .btn-link a {
                    padding: 11px 100px;
                    padding-top: 12px;
                    border-radius: 20px;
                    font-size: 15px;
                    border: 3px solid white;
                    padding-left: 115px;
                }
                .btn-link a span {
                    border-radius: 50%;
                    padding: 1px 16px;
                    padding-top: 5px;
                    left: -20px;
                    font-size: 30px;
                    /* border-top: 5px solid #00d4fc;
                    border-bottom: 5px solid #0087f7;
                    border-left: 5px solid #00d4fc;
                    border-right: 5px solid #0087f7; */
                }
                .btn-link .info .SG li {
                    border-bottom: 1px solid #1f92d1;
                    padding-top: 2px;
                    padding-bottom: 2px;
                    font-size: 12px;
                }
                .btn-link .info .SG li p {
                    margin-top: 0px !important;
                    margin-bottom: 0px !important;
                    font-size: 11px;
                }
                .btn-link .info .SG {
                    padding: 0px;
                    padding-top: 1px;
                    margin-left: 25px;
                    margin-right: 25px;
                }
                .btn-link .info .SG .li-not-br {
                    padding-bottom: 1px;
                    padding-top: 5px;
                }
                .btn-link .info .SG-change {
                    padding-top: 15px !important;
                    padding-bottom: 15px !important;
                }
                .btn-link .info .SG-change li {
                    font-size: 13px  !important;
                }

            }
            @media screen and (max-width: 700px){
                /* lunch5 */
                .lunch5 .icon-cuss {
                     width: 50px !important;
                     height: 50px !important;
                 }
                 .lunch5 {
                    width: 65% !important;
                 }
                 .lunch5 .parent-qr {
                    padding: 15px;
                    margin-bottom: 5px;
                }
                .lunch5 .title2 {
                    margin-top: 10px;
                    margin-bottom: 20px !important;
                }
                canvas {  /* or some other selector */
                    width: 60px !important;
                    height: 60px !important;
                    margin-bottom: -10px;
                    }
                .lunch5 .title {
                    font-size: 12px !important;
                }
                
                .lunch5 .notice {
                    font-size: 10px;
                }
                /*  */
                /*  */
                .lunch4 .title {
                    font-size: 25px;
                    margin-bottom: 48px;
                }
                 .lunch4 .div-choose-min .specific {
                    width: 100%;
                    margin-bottom: 15px;
                    padding: 2px  30px 2px  30px;
                }
                .lunch4 .div-choose-min .specific .specific-left {
                    font-size: 15px;
                }
                .lunch4 .div-choose-min .specific .specific-right .specific-right-1 {
                    font-size: 15px;
                }
                .lunch4 .div-choose-min .specific .specific-right .specific-right-2 {
                    font-size: 15px;
                }
                .lunch4 .div-choose-min .specific .specific-right i {
                    font-size: 12px;
                }
                .lunch4 {
                    width: 70% !important;
                }
                /*  */
                .lunch3 .btn-link a span {
                    border-top: 5px solid #19dc76 !important;
                    border-bottom: 5px solid #109b42 !important;
                    border-left: 5px solid #19dc76 !important;
                    border-right: 5px solid #109b42 !important;
                }
                .lunch3 .btn-link a {
                    padding: 5px 48px;
                    padding-top: 6px;
                    padding-left: 72px;
                    display: block;
                    width: 100%;
                }
                .lunch3 {
                    width: 70% !important;
                }
                .lunch3 .btn-link a {
                    padding: 2px 48px;
                    padding-top: 3px;
                    padding-left: 72px;
                    display: block;
                    width: 100%;
                }
                .lunch3 .btn-link a span {
                    padding: 3px 16px;
                    padding-top: 3px;
                    left: -14px;
                    font-size: 22px;
                }
                /*  */
                .lunch2 .notice {
                    font-size: 15px;
                }
                /*  */
                .main-club {
                    width: 70%;
                }
                .lunch .title {
                    font-size: 15px;
                    margin-bottom: 25px;
                }
                .lunch .input {
                    margin-bottom: 15px;
                }
                .lunch .hotline {
                    margin-bottom: 15px;
                }
                .lunch .input input {
                    font-size: 15px;
                }
                .lunch .input {
                    width: 80%;
                }
                .lunch .hotline {
                    font-size: 15px;
                }
                .lunch button {
                    font-size: 15px;
                    margin-bottom: 5px;
                }
                .btn-link a {
                    padding: 6px 100px;
                    padding-top: 9px;
                    border-radius: 20px;
                    font-size: 15px;
                    border: 3px solid white;
                    padding-left: 115px;
                }
                .main-club {
                    width: 60%;
                }
                .btn-link .info .SG {
                    margin-bottom: 4px;
                }
                .btn-link .info {
                    padding: 0px;
                }
                .btn-link a span {
                    border-radius: 50%;
                    padding: 0px 16px;
                    padding-top: 5px;
                    left: -20px;
                    font-size: 25px;
                }
                .btn-link .info .SG-change {
                    padding-top: 15px !important;
                    padding-bottom: 15px !important;
                }
                .contry-club .btn-link a span {
                    border-top: 5px solid #00d4fc;
                    border-bottom: 5px solid #0087f7;
                    border-left: 5px solid #00d4fc;
                    border-right: 5px solid #0087f7;
                }
                .river-club .btn-link a span {
                    border-top: 5px solid #19dc76 !important;
                    border-bottom: 5px solid #109b42 !important;
                    border-left: 5px solid #19dc76 !important;
                    border-right: 5px solid #109b42 !important;
                }
                .sale .btn-link a span {
                    border-top: 5px solid #0ddbdb!important;
                    border-bottom: 5px solid #02a8a8 !important;
                    border-left: 5px solid #0ddbdb !important;
                    border-right: 5px solid #02a8a8 !important;
                }
                .rivera .btn-link a span {
                    border-top: 5px solid #f6c343!important;
                    border-bottom: 5px solid #ed8a37!important;
                    border-left: 5px solid #f6c343!important;
                    border-right: 5px solid #ed8a37 !important;
                }
                .club-house .btn-link a span {
                    border-top: 2px solid #0064ba!important;
                    border-bottom: 2px solid #01396a!important;
                    border-left: 2px solid #0064ba!important;
                    border-right: 2px solid #01396a !important;
                }
            }
            @media screen and (max-width: 430px){
                /* lunch5 */
                .lunch5 .icon-cuss {
                     width: 30px  !important;
                     height: 30px  !important;
                 }
                 .lunch5 {
                    width: 65% !important;
                 }
                 .lunch5 .parent-qr {
                    padding: 9px;
                    margin-bottom: 5px;
                    border-radius: 10px;
                }
                .lunch5 .title2 {
                    margin-top: 5px;
                    margin-bottom: 7px !important;
                }
                canvas {  /* or some other selector */
                    width: 37px  !important;
                    height: 37px  !important;
                    margin-bottom: -8px;
                    }
                .lunch5 .title {
                    font-size: 7px  !important;
                }
                
                .lunch5 .notice {
                    font-size: 6px;
                }
                /*  */
                /*  */
                .lunch4 .title {
                    font-size: 10px !important;
                    margin-bottom: 8px   !important;
                }
                 .lunch4 .div-choose-min .specific {
                    width: 100%;
                    margin-bottom: 9px;
                    padding: 1px  20px 1px  20px
                }
                .lunch4 .div-choose-min .specific .specific-left {
                    font-size: 7px;
                }
                .lunch4 .div-choose-min .specific .specific-right .specific-right-1 {
                    font-size: 7px;
                    margin-right: 19px;
                }
                .lunch4 .div-choose-min .specific .specific-right .specific-right-2 {
                    font-size: 7px;
                }
                .lunch4 .div-choose-min .specific .specific-right i {
                    font-size: 5px;
                }
                .lunch4 {
                    width: 65%% !important;
                }
                .lunch4 .div-choose-min .specific .specific-right {
                    width: 50%;
                    text-align: right;
                    padding: 0px;
                    margin-top: -7px;
                }
                /*  */
                /*  */
                .lunch3 .title {
                    font-size: 10px;
                    margin-bottom: 18px !important;
                }
                .lunch3 .btn-link a span {
                    border-top: 2px solid #19dc76 !important;
                    border-bottom: 2px solid #109b42 !important;
                    border-left: 2px solid #19dc76 !important;
                    border-right: 2px solid #109b42 !important;
                }
                .lunch3 .btn-link a span {
                    padding: 1px 10px;
                    padding-top: 1px;
                    left: -14px;
                    font-size: 17px;
                }
                .lunch3 .btn-link a {
                    padding: 2px 27px;
                    padding-top: 3px;
                    padding-left: 9px;
                    display: block;
                    width: 100%;
                }
                .lunch3 .btn-link a i {
                    font-size: 5px;
                }
                .lunch3 .btn-link a .icon_in_a {
                    display: inline;
                    padding-left: 38px;
                    vertical-align: middle;
                    font-size: 6px;
                    font-weight: normal;
                    margin-right: 10px;
                }
                .lunch3 .btn-link {
                    margin-bottom: 18px;
                    width: 85%;
                }
                /*  */
                .lunch2 .input input {
                    font-size: 7px;
                    padding: 5px 10px;
                }
                .lunch2 .notice {
                    font-size: 8px;
                }
                .lunch2 .notice {
                    margin-top: 7px;
                    margin-bottom: 7px;
                }
                .lunch2 .title2 {
                    margin-bottom: 10px !important;
                }
                /*  */
                .lunch .title {
                    font-size: 10px;
                    margin-bottom: 5px;
                }
                .lunch button {
                    padding: 5px 30px 6px 30px;
                    font-size: 9px;
                }
                .lunch .input {
                    margin-bottom: 5px;
                }
                .div-footer {
                    font-size: 4px;
                    padding: 3px 13px 3px 13px;
                    border: 1px solid white;
                }
                .lunch .input input {
                    font-size: 7px;
                    padding: 5px 10px;
                }
                .lunch .hotline {
                    font-size: 10px;
                }
                .antialiased {
                    /* height: 100vh; */
                }
                .btn-link .info .SG li p {
                    font-size: 5px;
                }
                .btn-link .info .SG li {
                    font-size: 6px;
                }
                .btn-link a {
                    padding: 4px 55px;
                    padding-top: 4px;
                    border-radius: 20px;
                    font-size: 8px;
                    border: 1px solid white;
                    padding-left: 55px;
                }
                .btn-link a span {
                    border-radius: 50%;
                    padding: 1px 10px;
                    padding-top: 1px;
                    left: -9px;
                    font-size: 14px;
                }
                .contry-club .btn-link a span {
                    border-top: 2px solid #00d4fc;
                    border-bottom: 2px solid #0087f7;
                    border-left: 2px solid #00d4fc;
                    border-right: 2px solid #0087f7;
                }
                .river-club .btn-link a span {
                    border-top: 2px solid #19dc76 !important;
                    border-bottom: 2px solid #109b42 !important;
                    border-left: 2px solid #19dc76 !important;
                    border-right: 2px solid #109b42 !important;
                }
                .sale .btn-link a span {
                    border-top: 2px solid #0ddbdb!important;
                    border-bottom: 2px solid #02a8a8 !important;
                    border-left: 2px solid #0ddbdb !important;
                    border-right: 2px solid #02a8a8 !important;
                }
                .rivera .btn-link a span {
                    border-top: 2px solid #f6c343!important;
                    border-bottom: 2px solid #ed8a37!important;
                    border-left: 2px solid #f6c343!important;
                    border-right: 2px solid #ed8a37 !important;
                }
                .club-house .btn-link a span {
                    border-top: 2px solid #0064ba!important;
                    border-bottom: 2px solid #01396a!important;
                    border-left: 2px solid #0064ba!important;
                    border-right: 2px solid #01396a !important;
                }
                .btn-link .info .SG {
                    padding: 0px;
                    padding-top: 1px;
                    margin-left: 15px;
                    margin-right: 15px;
                }
                .btn-link .info .SG {
                    margin-bottom: 0px !important;
                    margin-top: 5px;
                }
                .btn-link .info {
                    border-bottom-right-radius: 10px;
                    border-bottom-left-radius: 10px;
                }
                .btn-link .info .SG .li-not-br {
                    padding-bottom: 1px;
                    padding-top: 3px;
                }
                .btn-link .info .SG-change li {
                    font-size: 6px !important;
                }
                .btn-link .info .SG-change {
                    padding-top: 10px !important;
                    padding-bottom: 10px !important;
                }
                .btn-link .info {
                    margin-right: 5px;
                    margin-top: -5px;
                }
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
                    <p class="hotline">Hotline: 0909.0909.09</p>
                </div>
                <div class="main-club lunch lunch2">
                    <div class="title title2">VUI LÒNG ĐIỀN ĐẦY ĐỦ THÔNG TIN</div>
                    <div class="input">
                        <input name="number_lunch" id="number_lunch" type="text" placeholder="Số lượng" autocomplete="off"/>
                        <input name="tel_lunch" id="tel_lunch" type="text" placeholder="Số điện thoại" autocomplete="off"/>
                    </div>
                    <p class="notice">*Lưu ý: Số lượng đăng ký ăn trưa được tính cho người lớn và trẻ em trên 2 tuôi</p>
                    <button id="register_full_lunch">ĐĂNG KÝ</button>
                </div>
                <div class="main-club lunch lunch3">
                    <div class="title title2">VUI LÒNG CHỌN KHU VỰC ĐĂNG KÝ ĂN TRƯA</div>
                    <div class="btn-link style-hover">
                        <a class="btn-register-lunch" id="country_club"><span>1</span><p style="display: inline;">COUNTRY CLUB</p><p class="icon_in_a">20/200</p><i class="fa fa-user"></i><i class="fa fa-user"></i><i class="fa fa-user"></i></a>
                    </div>
                    <div class="btn-link style-hover">
                        <a  class="btn-register-lunch"  id="club_house" style="background: #085a7f"><span style="color: #085a7f;border-top: 10px solid #0064ba;border-bottom: 10px solid #01396a;border-left: 10px solid #0064ba;border-right: 10px solid #01396a;">2</span>CLUB HOUSE<p class="icon_in_a">20/200</p><i class="fa fa-user"></i><i class="fa fa-user"></i><i class="fa fa-user"></i></a>
                    </div>
                    <div class="btn-link style-hover">
                        <a  class="btn-register-lunch" id="river_club" style="background: #0d9d46"><span style="color: #0ea347;border-top: 10px solid #19dc76;border-bottom: 10px solid #109b42;border-left: 10px solid #19dc76;border-right: 10px solid #109b42;">3</span>RIVER CLUB<p class="icon_in_a icon_in_a_3">20/200</p><i class="fa fa-user"></i><i class="fa fa-user"></i><i class="fa fa-user"></i></a>
                    </div>
                </div>
                <div class="main-club lunch lunch4">
                    <div class="title title2">VUI LÒNG LỰA CHỌN KHUNG GIỜ</div>
                    <div class="div-choose-min">
                        <div  class="specific style-hover" id="min_1">
                            <div class="specific-left">11:30 - 11:50</div>
                            <div class="specific-right"><span class="specific-right-1">Còn</span><span class="specific-right-2">10/20</span><i class="fa fa-user"></i><i class="fa fa-user"></i><i class="fa fa-user"></i></div>
                        </div>
                        <div  class="specific style-hover"  id="min_2">
                            <div class="specific-left">12:00 - 12:20</div>
                            <div class="specific-right"><span class="specific-right-1">Còn</span><span class="specific-right-2">10/20</span><i class="fa fa-user"></i><i class="fa fa-user"></i><i class="fa fa-user"></i></div>
                        </div>
                        <div  class="specific style-hover"  id="min_3">
                            <div class="specific-left">12:30 - 12:50</div>
                            <div class="specific-right"><span class="specific-right-1">Còn</span><span class="specific-right-2">10/20</span><i class="fa fa-user"></i><i class="fa fa-user"></i><i class="fa fa-user"></i></div>
                        </div>
                        <div  class="specific style-hover"  id="min_4">
                            <div class="specific-left">13:00 - 13:30</div>
                            <div class="specific-right"><span class="specific-right-1">Còn</span><span class="specific-right-2">10/20</span><i class="fa fa-user"></i><i class="fa fa-user"></i><i class="fa fa-user"></i></div>
                        </div>
                    </div>
                </div>
                <div class="main-club lunch lunch5">
                    <img class="icon-cuss" src="{{asset('images/icon1.png')}}" width="100" height="100">
                    <div class="title title2">CHÚC MỪNG BẠN ĐÃ ĐĂNG KÝ THÀNH CÔNG <br/><span style="font-weight: normal">SUẤT ĂN TRƯA TẠI </span><span style="text-transform: uppercase;" id="area_success"></span><br/>VÀO LÚC <span style="text-transform: uppercase;" id="start_success" style="text-transform: uppercase;"></span>-<span id="end_success"></span></div>
                    <div class="parent-qr">
                        <div id="example"></div>
                    </div>
                    <p class="notice">Vui lòng lưu giữ và đưa mã QR Code này cho nhân viên <br/> Nhà hàng để được xác nhận</p>
                </div>
            </div>
            <div class="footer display-flex">
                <div class="footer-main"  style="z-index: 5;">
                    <div class="div-footer">ĐĂNG KÝ TRẢI NGHIỆM DU THUYỀN</div>
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
    var codeArr = <?php echo json_encode($codeArr); ?>;
    console.log(codeArr);
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

    $('#btn_lunch').on('click', function(){
        var src_current = $('#img_background').attr("src");
        var src_new = src_current.replace("logo", "image");
        $('#img_background').attr("src", src_new);
        $('.main-club').hide();
        $('.main').css("position", "relative");
        $('.main').css("display", "block");
        $('.main').css("height", "80%");
        $('.lunch1').css({"display": "flex", "margin": "auto"});
        $('.footer').css('display', 'none');
    });
    $('#register_code_house').on('click', function(){
        var t0 = $('#code_house').val();
        if(jQuery.inArray(t0, codeArr) !== -1){
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
        if(t1 != '' && t2 != '' && $.isNumeric(t1) && validatePhone(t2)){
            $('.main-club').hide();
            $('.lunch3').css({"display": "flex", "margin": "auto"});
            $('.footer').css('display', 'none');
            dataLunch.append("Amount", t1);
            dataLunch.append("Tel", t2);
        }else{
            if(t1 == '' || !$.isNumeric(t1)){
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
        $('.lunch4').css({"display": "flex", "margin": "auto"});
        $('.footer').css('display', 'none');
        var id = $(this).attr('id');
        dataLunch.append("Area", id);
    });
    $('.specific').on('click', function(){
        var id = $(this).attr('id');
        dataLunch.append("Time", id);
        console.log(data);
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
