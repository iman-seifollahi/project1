<!doctype html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <style>
        html a {
            text-decoration: none;
        }
        ul {
            list-style: none;
        }
        html {
            font-family: IRANSans;
            font-size: 0.8rem;
            height: 100%;
        }
        body {
            background-color: #fff;
            width: 100%;
            display: flex;
            flex-direction: column;
            justify-items: center;
            align-items: center;
            margin-bottom: 20px;
        }
        .btnn a {
            color: #fafafa !important;
            font-family: inherit;
            margin: 0 auto !important;
        }

        .product {
            display: grid;
            grid-template-columns: 1fr;
            padding: 20px;
            width: 90%;
            height: 100%;
            align-items: center;
            justify-items: center;
            background-color: #fff !important;
            border-radius: 10px;
            margin: 20px 0;
        }
        .product .product_header {
            display: flex;
            flex-direction: column;
            width: 100%;
        }
        .product .product_header .product_title {
            border-bottom: 1px solid rgba(0, 0, 0, 0.1);
        }
        .product .product_header .product_title h1 {
            font-size: 1.2rem;
            color: #4e555b;
        }
        .product .product_header .product_details {
            display: flex;
            flex-direction: column;
        }
        .product .product_header .product_details .product_details_1 {
            display: flex;
            align-items: center;
            padding: 15px;
        }
        .product .product_header .product_details .product_details_1 .product_comments span {
            font-size: 0.9rem;
            font-weight: 500;
            color: #0fabc6;
            font-family: IRANSans;
        }
        .product .product_header .product_details .product_details_2 {
            display: flex;
            align-items: center;
            padding: 10px;
        }
        .product .product_header .product_details .product_details_2 .product_brand span {
            font-size: 1rem;
            font-weight: 500;
            color: #666;
            font-family: Yekan;
        }
        .product .product_header .product_details .product_details_2 .product_category span {
            font-size: 1rem;
            font-weight: 500;
            color: #666;
            font-family: Yekan;
            margin-right: 20px;
        }
        .product .product_header .product_details .product_details_2 .product_category a {
            font-size: 1rem;
            font-weight: 500;
            color: #0fabc6;
            font-family: Yekan;
            border-bottom: 1px dotted #0fabc6;
        }
        .product .product_body {
            display: grid;
            grid-template-columns: 1fr;
            grid-gap: 20px;
        }
        .product .product_body .product_images {
            display: flex;
            flex-direction: column;
            justify-items: center;
            align-items: center;
            max-width: 370px;
        }
        .product .product_body .product_images .master_img {
            align-items: center;
            justify-content: center;
            margin-bottom: 10px;
            display: flex;
            border: 1px solid rgba(0, 0, 0, 0.08);
            border-radius: 10px;
            max-width: 200px !important;
        }
        .product .product_body .product_images .master_img img {
            border-radius: 5px;
            max-width: 200px !important;
            padding: 10px;
        }
        .product .product_body .product_description {
            display: flex;
            flex-direction: column;
            width: 100%;
            border-bottom: 1px solid rgba(0, 0, 0, 0.2);
            padding: 20px 0;
        }
        .product .product_body .product_description .product_description_title {
            border-bottom: 1px solid rgba(0, 0, 0, 0.1);
            padding: 20px 0;
            margin-top: 20px;
        }
        .product .product_body .product_description .product_description_title span {
            font-size: 1.1rem;
            color: #4e555b;
            border-bottom: 2px solid #ff5d5d;
            padding: 15px;
        }
        .product .product_body .product_description .product_description_body {
            display: flex;
            flex-direction: column;
            width: 100%;
            margin-top: 15px;
        }
        .product .product_body .product_description .product_description_body .product_description_body_item {
            display: flex;
            width: 100%;
            border-radius: 3px;
            background-color: #efefef;
            margin-top: 10px;
            padding: 10px 0px;
        }
        .product .product_body .product_description .product_description_body .product_description_body_item span:first-child {
            font-size: 1rem;
            color: #4e555b;
            margin-right: 20px;
            line-height: 2;
            text-align: justify;
            white-space: nowrap;
        }
        .product .product_body .product_description .product_description_body .product_description_body_item span:last-child {
            font-size: 1rem;
            color: #4e555b;
            margin: 0 20px;
            line-height: 2;
            text-align: justify;
        }
        .product .product_body .product_price_details {
            display: flex;
            flex-direction: column;
            width: 100%;
            margin-top: 15px;
            background-color: #e9e9e9;
            border-radius: 5px;
            justify-items: center;
            align-items: center;
            border: 2px solid rgba(0, 0, 0, 0.1);
        }
        .product .product_body .product_price_details > div {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 99%;
            padding: 20px;
        }
        .product .product_body .product_price_details > div .price_section .price .unit {
            font-size: 0.9rem;
            color: #444;
        }
        .product .product_body .product_price_details > div .price_section .off_price .off_price_number {
            font-size: 1.3rem;
            color: #ff5b5b;
        }
        .product .product_body .product_price_details > div .price_section .off_price .unit {
            font-size: 0.9rem;
            color: #ff5b5b;
        }
        .product .product_body .product_price_details > div .attribute label {
            font-size: 1rem;
        }
        .product .product_body .product_price_details > div .attribute select {
            border-style: none;
            padding: 3px;
            font-family: 'IRANSans';
            border-radius: 5px;
            margin-right: 7px;
            font-size: 0.9rem;
            cursor: pointer;
        }
        .product .product_body .product_price_details > div .attribute select option {
            font-family: 'IRANSans';
            font-size: 0.9rem;
            border-radius: 5px;
        }
        .product .product_body .product_price_details > div .product_status .status {
            font-size: 0.9rem;
            color: #4e555b;
        }
        .product .product_body .product_price_details > div .product_status .status_ok {
            font-size: 1rem;
            color: #0cca12;
        }
        .product .product_body .product_price_details > div .product_status .status_notok {
            font-size: 1rem;
            color: #ff2020;
        }
        .product .product_body .product_price_details .add_to_basket {
            border-radius: 5px;
            background-color: #ef394e;
            width: max-content;
            padding: 10px;
            margin: 15px 0;
            cursor: pointer;
        }
        .product .product_body .product_price_details .add_to_basket:hover {
            background-color: #ef263d;
        }
        .product .product_body .product_price_details .add_to_basket span {
            font-size: 0.9rem;
            color: #fff;
        }

    </style>
</head>
<body>
<div class="home_body">
    <div id="app" class="product">

        @if(strlen($title) != '')
            <div class="product_header">
                <div class="product_title">
                    <h1>{{$title}}</h1>

                </div>
                <div class="product_details">
                    <div class="product_details_1">

                    </div>
                    <div class="product_details_2">

                    </div>
                </div>
            </div>
            <div class="product_body">
                <div class="product_description">
                    <div class="product_description_title">
                        <span>ویژگی های محصول</span>
                    </div>
                    <div class="product_description_body">
                        @if(! is_null($attr) )
                            @foreach( $attr as $item)
                                <div class="product_description_body_item">
                                    @if(strlen((string)$item) > 3 && strlen((string)$item) < 200)
                                        <span> {{$item}} : </span>
                                    @endif
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
                <div class="product_images">
                    <div class="master_img">
                        <img id="master_image"
                             src="{{$src}}"
                             class="zoom"
                             data-magnify-src="{{$src}}">
                    </div>

                </div>
                <div class="product_price_details">
                    <div>
                        <div class="product_status">
                            <span class="status">وضعیت :</span>
                            @if($price != "")
                                <span class="status_ok">موجود</span>
                            @else
                                <span class="status_notok">ناموجود</span>
                            @endif
                        </div>
                        <div class="price_section">
                            @if($price != "")
                                <div class="off_price">
                                    <span class="off_price_number">{{$price}}</span>
                                    <span class="unit">تومان</span>
                                </div>
                            @endif

                        </div>
                    </div>
                    @if($price == "" )
                        <div style="background-color: #626262; cursor: default" class="add_to_basket">
                            <span>موجود نیست</span>
                        </div>
                    @endif
                </div>
            </div>
        @else
            <span>محصولی یافت نشد !!</span>
        @endif

    </div>


</div>
</body>
</html>




