@extends('layouts.app')

@section('personal-style')
    <style>
        .color-red {
            color: #e3342f;
        }

        .text-white {
            color: whitesmoke;
            font-size: 16px;
        }

            {
            background-color: #f0eded;
        }

        /*PRICE COLOR CODE START*/
        .generic_content {
            background-color: black;
        }

        .generic_content .generic_head_price {
            background-color: #f6f6f6;
        }

        .generic_content .generic_head_price .generic_head_content .head_bg {
            border-color: black rgba(0, 0, 0, 0) rgba(0, 0, 0, 0) black;
        }

        .generic_content .generic_head_price .generic_head_content .head span {
            color: #e3342f;
        }

        .generic_content .generic_head_price .generic_price_tag .price .sign {
            color: #414141;
        }

        .generic_content .generic_head_price .generic_price_tag .price .currency {
            color: #414141;
        }

        .generic_content .generic_head_price .generic_price_tag .price .cent {
            color: #414141;
        }

        .generic_content .generic_head_price .generic_price_tag .month {
            color: #414141;
        }

        .generic_content .generic_feature_list ul li {
            color: #ffffff;
        }

        .generic_content .generic_feature_list ul li span {
            color: #414141;
        }

        .generic_content .generic_feature_list ul li:hover {
            background-color: #575555;
            border-left: 5px solid #e3342f;
        }

        .generic_content .generic_price_btn a {
            border: 1px solid #e3342f;
            color: #e3342f;
        }

        .generic_content.active .generic_head_price .generic_head_content .head_bg,
        .generic_content:hover .generic_head_price .generic_head_content .head_bg {
            border-color: #e3342f rgba(0, 0, 0, 0) rgba(0, 0, 0, 0) #e3342f;
            color: #fff;
        }

        .generic_content:hover .generic_head_price .generic_head_content .head span,
        .generic_content.active .generic_head_price .generic_head_content .head span {
            color: #fff;
        }

        .generic_content:hover .generic_price_btn a,
        .generic_content.active .generic_price_btn a {
            background-color: #e3342f;
            color: #fff;
        }

            {
            margin: 50px 0 50px 0;
            font-family: 'Raleway', sans-serif;
        }

        .row .table {
            padding: 28px 0;
        }

        /*PRICE BODY CODE START*/
        @import url(https://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700italic,700,900italic,900);
        @import url(https://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900);
        @import url(https://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900);

        .generic_content {
            overflow: hidden;
            position: relative;
            text-align: center;
        }

        .generic_content .generic_head_price {
            margin: 0 0 20px 0;
        }

        .generic_content .generic_head_price .generic_head_content {
            margin: 0 0 50px 0;
        }

        .generic_content .generic_head_price .generic_head_content .head_bg {
            border-style: solid;
            border-width: 90px 1411px 23px 399px;
            position: absolute;
        }

        .generic_content .generic_head_price .generic_head_content .head {
            padding-top: 40px;
            position: relative;
            z-index: 1;
        }

        .generic_content .generic_head_price .generic_head_content .head span {
            font-size: 28px;
            font-weight: 400;
            letter-spacing: 2px;
            margin: 0;
            padding: 0;
            text-transform: uppercase;
            font-weight: bold;
        }

        .generic_content .generic_head_price .generic_price_tag {
            padding: 0 0 20px;
        }

        .generic_content .generic_head_price .generic_price_tag .price {
            display: block;
        }

        .generic_content .generic_head_price .generic_price_tag .price .sign {
            display: inline-block;
            font-family: "Lato", sans-serif;
            font-size: 28px;
            font-weight: 400;
            vertical-align: middle;
        }

        .generic_content .generic_head_price .generic_price_tag .price .currency {
            font-family: "Lato", sans-serif;
            font-size: 60px;
            font-weight: 300;
            letter-spacing: -2px;
            line-height: 60px;
            padding: 0;
            vertical-align: middle;
        }

        .generic_content .generic_head_price .generic_price_tag .price .cent {
            display: inline-block;
            font-family: "Lato", sans-serif;
            font-size: 24px;
            font-weight: 400;
            vertical-align: bottom;
        }

        .generic_content .generic_head_price .generic_price_tag .month {
            font-family: "Lato", sans-serif;
            font-size: 18px;
            font-weight: 400;
            letter-spacing: 3px;
            vertical-align: bottom;
        }

        .generic_content .generic_feature_list ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .generic_content .generic_feature_list ul li {
            font-family: "Lato", sans-serif;
            font-size: 16px;
            padding: 4px 0;
            transition: all 0.3s ease-in-out 0s;
        }

        .generic_content .generic_feature_list ul li:hover {
            transition: all 0.3s ease-in-out 0s;
            -moz-transition: all 0.3s ease-in-out 0s;
            -ms-transition: all 0.3s ease-in-out 0s;
            -o-transition: all 0.3s ease-in-out 0s;
            -webkit-transition: all 0.3s ease-in-out 0s;

        }

        .generic_content .generic_feature_list ul li .fa {
            padding: 0 10px;
        }

        .generic_content .generic_price_btn {
            margin: 20px 0 32px;
        }

        .generic_content .generic_price_btn a {
            border-radius: 50px;
            -moz-border-radius: 50px;
            -ms-border-radius: 50px;
            -o-border-radius: 50px;
            -webkit-border-radius: 50px;
            display: inline-block;
            font-family: "Lato", sans-serif;
            font-size: 18px;
            outline: medium none;
            padding: 12px 30px;
            text-decoration: none;
            text-transform: uppercase;
        }

        .generic_content,
        .generic_content:hover,
        .generic_content .generic_head_price .generic_head_content .head_bg,
        .generic_content:hover .generic_head_price .generic_head_content .head_bg,
        .generic_content .generic_head_price .generic_head_content .head h2,
        .generic_content:hover .generic_head_price .generic_head_content .head h2,
        .generic_content .price,
        .generic_content:hover .price,
        .generic_content .generic_price_btn a,
        .generic_content:hover .generic_price_btn a {
            transition: all 0.3s ease-in-out 0s;
            -moz-transition: all 0.3s ease-in-out 0s;
            -ms-transition: all 0.3s ease-in-out 0s;
            -o-transition: all 0.3s ease-in-out 0s;
            -webkit-transition: all 0.3s ease-in-out 0s;
        }

        @media (max-width: 320px) {}

        @media (max-width: 767px) {
            .generic_content {}
        }

        @media (min-width: 768px) and (max-width: 991px) {
            .col-md-3 {
                float: left;
                width: 50%;
            }

            .col-md-4 {
                float: left;
                width: 50%;
            }

            .generic_content {}
        }

        @media (min-width: 992px) and (max-width: 1199px) {}

        @media (min-width: 1200px) {}

        _home {
            font-family: 'Raleway', sans-serif;
        }

        .text-center h1,
        .text-center h1 a {
            color: #7885CB;
            font-size: 30px;
            font-weight: 300;
            text-decoration: none;
        }

        .demo-pic {
            margin: 0 auto;
        }

        .demo-pic:hover {
            opacity: 0.7;
        }

        _home ul {
            margin: 0 auto;
            padding: 0;
            list-style: none;
            display: table;
        }

        _home li {
            float: left;
        }

        _home li+li {
            margin-left: 10px;
            padding-bottom: 10px;
        }

        _home li a {
            display: block;
            width: 50px;
            height: 50px;
            font-size: 0px;
        }

        _home .blue {
            background: #3498DB;
            transition: all 0.3s ease-in-out 0s;
        }

        _home .emerald {
            background: #e3342f;
            transition: all 0.3s ease-in-out 0s;
        }

        _home .grey {
            background: #7F8C8D;
            transition: all 0.3s ease-in-out 0s;
        }

        _home .midnight {
            background: #34495E;
            transition: all 0.3s ease-in-out 0s;
        }

        _home .orange {
            background: #E67E22;
            transition: all 0.3s ease-in-out 0s;
        }

        _home .purple {
            background: #9B59B6;
            transition: all 0.3s ease-in-out 0s;
        }

        _home .red {
            background: #E74C3C;
            transition: all 0.3s ease-in-out 0s;
        }

        _home .turquoise {
            background: #e3342f;
            transition: all 0.3s ease-in-out 0s;
        }

        _home .blue:hover,
        _home .emerald:hover,
        _home .grey:hover,
        _home .midnight:hover,
        _home .orange:hover,
        _home .purple:hover,
        _home .red:hover,
        _home .turquoise:hover {
            border-bottom-left-radius: 50px;
            border-bottom-right-radius: 50px;
            border-top-left-radius: 50px;
            border-top-right-radius: 50px;
            transition: all 0.3s ease-in-out 0s;
        }

        _home .divider {
            border-bottom: 1px solid #ddd;
            margin-bottom: 20px;
            padding: 20px;
        }

        _home .divider span {
            width: 100%;
            display: table;
            height: 2px;
            background: #ddd;
            margin: 50px auto;
            line-height: 2px;
        }

        _home .itemname {
            text-align: center;
            font-size: 50px;
            padding: 50px 0 20px;
            border-bottom: 1px solid #ddd;
            margin-bottom: 40px;
            text-decoration: none;
            font-weight: 300;
        }

        _home .itemnametext {
            text-align: center;
            font-size: 20px;
            padding-top: 5px;
            text-transform: uppercase;
            display: inline-block;
        }

        _home .footer {
            padding: 40px 0;
        }

        .price-heading {
            text-align: center;
        }

        .price-heading h1 {
            color: #666;
            margin: 0;
            padding: 0 0 50px 0;
        }

        .demo-button {
            background-color: #333333;
            color: #ffffff;
            display: table;
            font-size: 20px;
            margin-left: auto;
            margin-right: auto;
            margin-top: 20px;
            margin-bottom: 50px;
            outline-color: -moz-use-text-color;
            outline-style: none;
            outline-width: medium;
            padding: 10px;
            text-align: center;
            text-transform: uppercase;
        }

        .bottom_btn {
            background-color: #333333;
            color: #ffffff;
            display: table;
            font-size: 28px;
            margin: 60px auto 20px;
            padding: 10px 25px;
            text-align: center;
            text-transform: uppercase;
        }

        .demo-button:hover {
            background-color: #666;
            color: #FFF;
            text-decoration: none;

        }

        .bottom_btn:hover {
            background-color: #666;
            color: #FFF;
            text-decoration: none;
        }

        .div-image {
            position: relative;
            height: 300px;
            overflow: hidden;
            margin: 5px;
            border-radius: 2% !important;
            border: 0;
            border-radius: 5.5px;
            box-shadow: 0 10px 30px 0 rgba(255, 0, 0, 0.43) !important;
            overflow: hidden;
        }

        .div-img-img {
            height: 100% !important;
            left: 50% !important;
            position: absolute !important;
            top: 50% !important;
            transform: translate(-50%, -50%) !important;
            transition: 0.3s !important;
            max-width: none !important;
            width: auto !important;
        }

    </style>
@endsection

@section('content')
    <div class="container">
        <h1 class="color-red" style="font-weight: bold;">
            {{ translate('socio_fes') }}
        </h1>
        <hr class="featurette-divider">
        <br>
        <div class="row">
            <div class="col-md-6">
                <div class="text-white" style="font-size: 18px;">
                    {!! translate('socios_text') !!}
                </div>
            </div>
            <div class="col-md-6">
                <div class="div-image shadow-lg ronded">
                    <img class="div-img-img" src="{{ url('/uploads/socios/socios.jpg') }}">
                </div>
            </div>
        </div>
        <br><br>
        <div class="text-white" style="font-weight: bold;color:#e3342f !important; font-size: 18px !important;">
            {{ translate('nuevas_quotas') }}:
        </div>
        <br>
        <div class="row">
            @foreach ($quotas as $item)
                <div class="col-md-6 col-lg-6 col-sm-12 col-xl-4 mb-5">
                    <div class="generic_content clearfix rounded" style="border: 1px solid #e3342f;">
                        <div class="generic_head_price clearfix">
                            <div class="generic_head_content clearfix">
                                <div class="head_bg"></div>
                                <div class="head">
                                    <span>{{ $item->titulo }}</span>
                                </div>
                            </div>
                            <div class="generic_price_tag clearfix">
                                <span class="price">
                                    <span class="sign">$</span>
                                    <span class="currency">{{ $item->precio }}</span>
                                    <span class="cent">.00</span>
                                    <span class="month">/MÉS</span>
                                </span>
                            </div>
                        </div>
                        <div class="generic_feature_list">
                            <ul>
                                @foreach ($servicios as $servicio)
                                    @php
                                        $content = false;
                                    @endphp
                                    @foreach ($item->servicios as $item2)
                                        @if ($item2->id == $servicio->id)
                                            @php
                                                $content = true;
                                            @endphp
                                        @endif
                                    @endforeach
                                    @if ($content == false)
                                        <li><span style="color: #e3342f;"><i class="fas fa-times"></i></span>
                                            {{ $servicio->titulo }}</li>
                                    @else
                                        <li>
                                            {{ $servicio->titulo }}</li>
                                    @endif
                                @endforeach
                            </ul>
                            <br>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
@endsection
