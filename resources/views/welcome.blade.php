<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
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
            @media only screen  and (max-width: 1366px)  {
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
                    font-size: 10px;
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
                    <a href="/"><img src="{{asset('images/logo.png')}}"  style="z-index: 300;"/></a>
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
                <div class="main-club lunch">
                    <div class="title">VUI LÒNG ĐIỀN ĐẦY ĐỦ THÔNG TIN</div>
                    <div class="input">
                        <input name="code_house" type="text" placeholder="Mã căn hộ"/>
                    </div>
                    <button>ĐĂNG KÝ</button>
                    <p class="hotline">Hotline: 0909.0909.09</p>
                </div>
            </div>
            <div class="footer display-flex">
                <div class="footer-main"  style="z-index: 5;">
                    <div class="div-footer">ĐĂNG KÝ TRẢI NGHIỆM DU THUYỀN</div>
                    <div class="div-footer" id="btn_lunch">ĐĂNG KÝ THAM DỰ TIỆC TRƯA</div>
                </div>
            </div>
       </div>
       <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="{{asset('js/jquery.rwdImageMaps.min.js')}}"></script>
<script type="text/javascript">


</script>
<script>
$(document).ready(function(e) {
	$('img[usemap]').rwdImageMaps();
	
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
        $('.lunch').css("display", "flex");
        $('.lunch').css("margin", "auto");
        $('.footer').css('display', 'none');
    });

    

});
</script>
    </body>
</html>
