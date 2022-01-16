<!doctype html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/fontiran.css')}}">
    <link rel="stylesheet" href="{{asset('css/magnify.css')}}">
    <title>Project1</title>
</head>
<body>
<div class="home_body">
    <div id="app" class="product">
        @if(strlen($product['title']) != '')
            <div class="product_header">
                <div class="product_title">
                    <h1>{{$product['title']}}</h1>
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
                        @if(! is_null($product['attr']) )
                            @foreach( $product['attr'] as $item)
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
                             src="{{$product['src']}}"
                             class="zoom"
                             data-magnify-src="{{$product['src']}}">
                    </div>
                </div>
                <div class="product_price_details">
                    <div>
                        <div class="product_status">
                            <span class="status">وضعیت :</span>
                            @if($product['price'] != "")
                                <span class="status_ok">موجود</span>
                            @else
                                <span class="status_notok">ناموجود</span>
                            @endif
                        </div>
                        <div class="price_section">
                            @if($product['price'] != "")
                                <div class="off_price">
                                    <span class="off_price_number">{{$product['price']}}</span>
                                    <span class="unit">تومان</span>
                                </div>
                            @endif
                        </div>
                    </div>
                    @if($product['price'] == "" )
                        <div style="background-color: #626262; cursor: default" class="add_to_basket">
                            <span>موجود نیست</span>
                        </div>
                    @endif
                </div>
            </div>
        @else
            <span>محصولی یافت نشد !!</span>
        @endif
            <a href="{{route('viewSearch')}}" class="btnn btnn-red">بازگشت</a>
    </div>
</div>
<script src="js/jquery-3.5.1.min.js" type="text/javascript"></script>
<script src="{{asset('js/app.js')}}"></script>
<script>
    master_imgage = $('#master_image');
    $('.other_img_item').click(function () {
        new_src = $(this).attr('src');
        master_imgage.attr("src", new_src);
        master_imgage.attr("data-magnify-src", new_src);
        $(document).ready(function () {
            $('.zoom').magnify();
        });
    });

    $(document).ready(function () {
        $('.zoom').magnify({
            speed: 1,
        });
    });
</script>
</body>
</html>




