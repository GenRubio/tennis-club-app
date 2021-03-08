@extends('layouts.app')
@section('personal-style')
    <style>
        .product-grid4,
        .product-grid4 .product-image4 {
            position: relative
        }

        .product-grid4 {
            font-family: Poppins, sans-serif;
            text-align: center;
            border-radius: 5px;
            overflow: hidden;
            z-index: 1;
            transition: all .3s ease 0s
        }

        .product-grid4:hover {
            box-shadow: 0 0 10px rgba(0, 0, 0, .2)
        }

        .product-grid4 .product-image4 a {
            display: block
        }

        .product-grid4 .product-image4 img {
            width: 100%;
            height: auto
        }

        .product-grid4 .pic-1 {
            opacity: 1;
            transition: all .5s ease-out 0s
        }

        .product-grid4:hover .pic-1 {
            opacity: 0
        }

        .product-grid4 .pic-2 {
            position: absolute;
            top: 0;
            left: 0;
            opacity: 0;
            transition: all .5s ease-out 0s
        }

        .product-grid4:hover .pic-2 {
            opacity: 1
        }

        .product-grid4 .social {
            width: 180px;
            padding: 0;
            margin: 0 auto;
            list-style: none;
            position: absolute;
            right: 0;
            left: 0;
            top: 50%;
            transform: translateY(-50%);
            transition: all .3s ease 0s
        }

        .product-grid4 .social li {
            display: inline-block;
            opacity: 0;
            transition: all .7s
        }

        .product-grid4 .social li:nth-child(1) {
            transition-delay: .15s
        }

        .product-grid4 .social li:nth-child(2) {
            transition-delay: .3s
        }

        .product-grid4 .social li:nth-child(3) {
            transition-delay: .45s
        }

        .product-grid4:hover .social li {
            opacity: 1
        }

        .product-grid4 .social li a {
            color: #222;
            background: #fff;
            font-size: 17px;
            line-height: 36px;
            width: 40px;
            height: 36px;
            border-radius: 2px;
            margin: 0 5px;
            display: block;
            transition: all .3s ease 0s
        }

        .product-grid4 .social li a:hover {
            color: #fff;
            background: #e3342f
        }

        .product-grid4 .social li a:after,
        .product-grid4 .social li a:before {
            content: attr(data-tip);
            color: #fff;
            background-color: #000;
            font-size: 12px;
            line-height: 20px;
            border-radius: 3px;
            padding: 0 5px;
            white-space: nowrap;
            opacity: 0;
            transform: translateX(-50%);
            position: absolute;
            left: 50%;
            top: -30px
        }

        .product-grid4 .social li a:after {
            content: '';
            height: 15px;
            width: 15px;
            border-radius: 0;
            transform: translateX(-50%) rotate(45deg);
            top: -22px;
            z-index: -1
        }

        .product-grid4 .social li a:hover:after,
        .product-grid4 .social li a:hover:before {
            opacity: 1
        }

        .product-grid4 .product-discount-label,
        .product-grid4 .product-new-label {
            color: #fff;
            background-color: #e3342f;
            font-size: 13px;
            font-weight: 800;
            text-transform: uppercase;
            line-height: 45px;
            height: 45px;
            width: 45px;
            border-radius: 50%;
            position: absolute;
            left: 10px;
            top: 15px;
            transition: all .3s
        }

        .product-grid4 .product-discount-label {
            left: auto;
            right: 10px;
            background-color: #d7292a
        }

        .product-grid4:hover .product-new-label {
            opacity: 0
        }

        .product-grid4 .product-content {
            padding: 25px
        }

        .product-grid4 .title {
            font-size: 15px;
            font-weight: 400;
            text-transform: capitalize;
            margin: 0 0 7px;
            transition: all .3s ease 0s
        }

        .product-grid4 .title a {
            color: #222
        }

        .product-grid4 .title a:hover {
            color: #e3342f
        }

        .product-grid4 .price {
            color: #e3342f;
            font-size: 17px;
            font-weight: 700;
            margin: 0 2px 15px 0;
            display: block
        }

        .product-grid4 .price span {
            color: #909090;
            font-size: 13px;
            font-weight: 400;
            letter-spacing: 0;
            text-decoration: line-through;
            text-align: left;
            vertical-align: middle;
            display: inline-block
        }

        .product-grid4 .add-to-cart {
            border: 1px solid #e5e5e5;
            display: inline-block;
            padding: 10px 20px;
            color: #888;
            font-weight: 600;
            font-size: 14px;
            border-radius: 4px;
            transition: all .3s
        }

        .product-grid4:hover .add-to-cart {
            border: 1px solid transparent;
            background: #16a085;
            color: #fff
        }

        .product-grid4 .add-to-cart:hover {
            background-color: #505050;
            box-shadow: 0 0 10px rgba(0, 0, 0, .5)
        }

        @media only screen and (max-width:990px) {
            .product-grid4 {
                margin-bottom: 30px
            }
        }

    </style>
@endsection
@section('content')
    <br><br><br>
    <livewire:home.tienda/>
    <br><br>
    <div class="container-fluid border-top border-danger">
        <div class="container p-3">
            <div class="d-flex justify-content-center">
                <a href="https://www.esports-ferrer.com/" target="_blank">
                    <img src="{{ url('/images/logow.png') }}">
                </a>
            </div>
        </div>
    </div>
    @include('components.footer')
@endsection
