<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <base href="<?php echo URL; ?>">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="public/css/bootstrap.css" rel="stylesheet" type="text/css">
</head>
<style>
    @font-face {
        font-family: 'Vazir';!important;
        src: url('public/fonts/Vazir-Medium-FD.woff') format('woff');!important;
        font-weight: normal;
    }

    @import url(https://fonts.googleapis.com/css?family=Droid+Serif:400,400italic|Montserrat:400,700);
    html, body, div, span, applet, object, iframe,
    h1, h2, h3, h4, h5, h6, p, blockquote, pre,
    a, abbr, acronym, address, big, cite, code,
    del, dfn, em, img, ins, kbd, q, s, samp,
    small, strike, strong, sub, sup, tt, var,
    b, u, i, center,
    dl, dt, dd, ol, ul, li,
    fieldset, form, label, legend,
    table, caption, tbody, tfoot, thead, tr, th, td,
    article, aside, canvas, details, embed,
    figure, figcaption, footer, header, hgroup,
    menu, nav, output, ruby, section, summary,
    time, mark, audio, video {
        margin: 0;
        padding: 0;
        border: 0;
        font: inherit;
        font-size: 100%;
        vertical-align: baseline;
    }

    html {
        line-height: 1;
    }

    ol, ul {
        list-style: none;
    }

    table {
        border-collapse: collapse;
        border-spacing: 0;
    }

    caption, th, td {
        text-align: left;
        font-weight: normal;
        vertical-align: middle;
    }

    q, blockquote {
        quotes: none;
    }

    q:before, q:after, blockquote:before, blockquote:after {
        content: "";
        content: none;
    }

    a img {
        border: none;
    }

    article, aside, details, figcaption, figure, footer, header, hgroup, main, menu, nav, section, summary {
        display: block;
    }

    * {
        box-sizing: border-box;
    }

    body {
        color: #333;
        -webkit-font-smoothing: antialiased;
        font-family: "Droid Serif", serif;
    }

    img {
        max-width: 100%;
    }

    .cf:before, .cf:after {
        content: " ";
        display: table;
    }

    .cf:after {
        clear: both;
    }

    .cf {
        *zoom: 1;
    }

    .wrap {
        width: 75%;
        max-width: 960px;
        margin: 0 auto;
        padding: 5% 0;
        margin-bottom: 5em;
    }

    .projTitle {
        font-family: "Vazir";
        font-weight: bold;
        text-align: center;
        font-size: 2em;
        padding: 1em 0;
        border-bottom: 1px solid #dadada;
        /*letter-spacing: 3px;*/
        text-transform: uppercase;
    }

    .projTitle span {
        font-family: "Droid Serif", serif;
        font-weight: normal;
        font-style: italic;
        text-transform: lowercase;
        color: #777;
    }

    .heading {
        padding: 1em 0;
        border-bottom: 1px solid #D0D0D0;
    }

    .heading h1 {
        font-family: "Droid Serif", serif;
        font-size: 2em;
        float: left;
    }

    .heading a.continue:link, .heading a.continue:visited {
        text-decoration: none;
        font-family: "Montserrat", sans-serif;
        letter-spacing: -.015em;
        font-size: .75em;
        padding: 1em;
        color: #fff;
        background: #82ca9c;
        font-weight: bold;
        border-radius: 50px;
        float: right;
        text-align: right;
        -webkit-transition: all 0.25s linear;
        -moz-transition: all 0.25s linear;
        -ms-transition: all 0.25s linear;
        -o-transition: all 0.25s linear;
        transition: all 0.25s linear;
    }

    .heading a.continue:after {
        content: "\276f";
        padding: .5em;
        position: relative;
        right: 0;
        -webkit-transition: all 0.15s linear;
        -moz-transition: all 0.15s linear;
        -ms-transition: all 0.15s linear;
        -o-transition: all 0.15s linear;
        transition: all 0.15s linear;
    }

    .heading a.continue:hover, .heading a.continue:focus, .heading a.continue:active {
        background: #f69679;
    }

    .heading a.continue:hover:after, .heading a.continue:focus:after, .heading a.continue:active:after {
        right: -10px;
    }

    .tableHead {
        display: table;
        width: 100%;
        font-family: "Montserrat", sans-serif;
        font-size: .75em;
    }

    .tableHead li {
        display: table-cell;
        padding: 1em 0;
        text-align: center;
    }

    .tableHead li.prodHeader {
        text-align: left;
    }

    .cart {
        padding: 1em 0;
    }

    .cart .items {
        display: block;
        width: 100%;
        vertical-align: middle;
        padding: 1.5em;
        border-bottom: 1px solid #fafafa;
    }

    .cart .items.even {
        background: #fafafa;
    }

    .cart .items .infoWrap {
        display: table;
        width: 100%;
    }

    .cart .items .cartSection {
        display: table-cell;
        vertical-align: middle;
    }

    .cart .items .cartSection .itemNumber {
        font-size: .75em;
        color: #777;
        margin-bottom: .5em;
    }

    .cart .items .cartSection h3 {
        font-size: 1em;
        font-family: "Montserrat", sans-serif;
        font-weight: bold;
        text-transform: uppercase;
        letter-spacing: .025em;
    }

    .cart .items .cartSection p {
        display: inline-block;
        font-size: .85em;
        color: #777777;
        font-family: "Montserrat", sans-serif;
    }

    .cart .items .cartSection p .quantity {
        font-weight: bold;
        color: #333;
    }

    .cart .items .cartSection p.stockStatus {
        color: #82CA9C;
        font-weight: bold;
        padding: .5em 0 0 1em;
        text-transform: uppercase;
    }

    .cart .items .cartSection p.stockStatus.out {
        color: #F69679;
    }

    .cart .items .cartSection .itemImg {
        width: 4em;
        float: left;
    }

    .cart .items .cartSection.qtyWrap, .cart .items .cartSection.prodTotal {
        text-align: center;
    }

    .cart .items .cartSection.qtyWrap p, .cart .items .cartSection.prodTotal p {
        font-weight: bold;
        font-size: 1.25em;
    }

    .cart .items .cartSection input.qty {
        width: 2em;
        text-align: center;
        font-size: 1em;
        padding: .25em;
        margin: 1em .5em 0 0;
    }

    .cart .items .cartSection .itemImg {
        width: 8em;
        display: inline;
        padding-right: 1em;
    }

    .special {
        display: block;
        font-family: "Montserrat", sans-serif;
    }

    .special .specialContent {
        padding: 1em 1em 0;
        display: block;
        margin-top: .5em;
        border-top: 1px solid #dadada;
    }

    .special .specialContent:before {
        content: "\21b3";
        font-size: 1.5em;
        margin-right: 1em;
        color: #6f6f6f;
        font-family: helvetica, arial, sans-serif;
    }

    a.remove {
        text-decoration: none;
        font-family: "Montserrat", sans-serif;
        color: #ffffff;
        font-weight: bold;
        background: #e0e0e0;
        padding: .5em;
        font-size: .75em;
        display: inline-block;
        border-radius: 100%;
        line-height: .85;
        -webkit-transition: all 0.25s linear;
        -moz-transition: all 0.25s linear;
        -ms-transition: all 0.25s linear;
        -o-transition: all 0.25s linear;
        transition: all 0.25s linear;
    }

    a.remove:hover {
        background: #f30;
    }

    .promoCode {
        border: 2px solid #efefef;
        float: left;
        width: 35%;
        padding: 2%;
    }

    .promoCode label {
        display: block;
        width: 100%;
        font-style: italic;
        font-size: 1.15em;
        margin-bottom: .5em;
        letter-spacing: -.025em;
    }

    .promoCode input {
        width: 85%;
        font-size: 1em;
        padding: .5em;
        float: left;
        border: 1px solid #dadada;
    }

    .promoCode input:active, .promoCode input:focus {
        outline: 0;
    }

    .promoCode a.btn {
        float: left;
        width: 15%;
        padding: .75em 0;
        border-radius: 0 1em 1em 0;
        text-align: center;
        border: 1px solid #82ca9c;
    }

    .promoCode a.btn:hover {
        border: 1px solid #f69679;
        background: #f69679;
    }

    .btn:link, .btn:visited {
        text-decoration: none;
        font-family: "Montserrat", sans-serif;
        letter-spacing: -.015em;
        font-size: 1em;
        padding: 1em 3em;
        color: #fff;
        background: #82ca9c;
        font-weight: bold;
        border-radius: 50px;
        float: right;
        text-align: right;
        -webkit-transition: all 0.25s linear;
        -moz-transition: all 0.25s linear;
        -ms-transition: all 0.25s linear;
        -o-transition: all 0.25s linear;
        transition: all 0.25s linear;
    }

    .btn:after {
        content: "\276f";
        padding: .5em;
        position: relative;
        right: 0;
        -webkit-transition: all 0.15s linear;
        -moz-transition: all 0.15s linear;
        -ms-transition: all 0.15s linear;
        -o-transition: all 0.15s linear;
        transition: all 0.15s linear;
    }

    .btn:hover, .btn:focus, .btn:active {
        background: #f69679;
    }

    .btn:hover:after, .btn:focus:after, .btn:active:after {
        right: -10px;
    }

    .promoCode .btn {
        font-size: .85em;
        paddding: .5em 2em;
    }

    /* TOTAL AND CHECKOUT  */
    .subtotal {
        float: right;
        width: 35%;
    }

    .subtotal .totalRow {
        padding: .5em;
        text-align: right;
    }

    .subtotal .totalRow.final {
        font-size: 1.25em;
        font-weight: bold;
    }

    .subtotal .totalRow span {
        display: inline-block;
        padding: 0 0 0 1em;
        text-align: right;
    }

    .subtotal .totalRow .label {
        font-family: "Montserrat", sans-serif;
        font-size: .85em;
        text-transform: uppercase;
        color: #777;
    }

    .subtotal .totalRow .value {
        letter-spacing: -.025em;
        width: 35%;
    }

    @media only screen and (max-width: 39.375em) {
        .wrap {
            width: 98%;
            padding: 2% 0;
        }

        .projTitle {
            font-size: 1.5em;
            padding: 10% 5%;
        }

        .heading {
            padding: 1em;
            font-size: 90%;
        }

        .cart .items .cartSection {
            width: 90%;
            display: block;
            float: left;
        }

        .cart .items .cartSection.qtyWrap {
            width: 10%;
            text-align: center;
            padding: .5em 0;
            float: right;
        }

        .cart .items .cartSection.qtyWrap:before {
            content: "QTY";
            display: block;
            font-family: "Montserrat", sans-serif;
            padding: .25em;
            font-size: .75em;
        }

        .cart .items .cartSection.prodTotal, .cart .items .cartSection.removeWrap {
            display: none;
        }

        .cart .items .cartSection .itemImg {
            width: 25%;
        }

        .promoCode, .subtotal {
            width: 100%;
        }

        a.btn.continue {
            width: 100%;
            text-align: center;
        }
    }

    /* Chrome, Safari, Edge, Opera */
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    /* Firefox */
    input[type=number] {
        -moz-appearance: textfield;
    }
</style>
<body>
<?php
$username = $data['userName'];
//var_dump($data['carts']);
$carts = $data['carts'];
//var_dump($carts);
?>
<div class="wrap cf">
    <h1 class="projTitle">سبد خرید</h1>
    <div class="heading cf">
        <h1><?php echo $username ?></h1>
        <a href="index/index" class="continue">ادامه خرید</a>
    </div>
    <div class="cart">
        <!--    <ul class="tableHead">
              <li class="prodHeader">Product</li>
              <li>Quantity</li>
              <li>Total</li>
               <li>Remove</li>
            </ul>-->
        <ul class="cartWrap">



            <!--            <li class="items even">-->
            <!---->
            <!--                <div class="infoWrap">-->
            <!--                    <div class="cartSection">-->
            <!---->
            <!--                        <img src="http://lorempixel.com/output/technics-q-c-300-300-4.jpg" alt="" class="itemImg" />-->
            <!--                        <p class="itemNumber">#QUE-007544-002</p>-->
            <!--                        <h3>Item Name 1</h3>-->
            <!---->
            <!--                        <p> <input type="text"  class="qty" placeholder="3"/> x $5.00</p>-->
            <!---->
            <!--                        <p class="stockStatus"> In Stock</p>-->
            <!--                    </div>-->
            <!---->
            <!---->
            <!--                    <div class="prodTotal cartSection">-->
            <!--                        <p>$15.00</p>-->
            <!--                    </div>-->
            <!--                    <div class="cartSection removeWrap">-->
            <!--                        <a href="#" class="remove">x</a>-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--            </li>-->
            <!---->
            <!--            <li class="items odd">-->
            <!--                <div class="infoWrap">-->
            <!--                    <div class="cartSection">-->
            <!---->
            <!--                        <img src="http://lorempixel.com/output/technics-q-c-300-300-4.jpg" alt="" class="itemImg" />-->
            <!--                        <p class="itemNumber">#QUE-007544-002</p>-->
            <!--                        <h3>Item Name 1</h3>-->
            <!---->
            <!--                        <p> <input type="text"  class="qty" placeholder="3"/> x $5.00</p>-->
            <!---->
            <!--                        <p class="stockStatus out">  ناموجود</p>-->
            <!--                    </div>-->
            <!---->
            <!---->
            <!--                    <div class="prodTotal cartSection">-->
            <!--                        <p>$15.00</p>-->
            <!--                    </div>-->
            <!--                    <div class="cartSection removeWrap">-->
            <!--                        <a href="#" class="remove">x</a>-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--            </li>-->
            <!--            <li class="items even">-->
            <!--                <div class="infoWrap">-->
            <!--                    <div class="cartSection info">-->
            <!---->
            <!--                        <img src="http://lorempixel.com/output/technics-q-c-300-300-4.jpg" alt="" class="itemImg" />-->
            <!--                        <p class="itemNumber">#QUE-007544-002</p>-->
            <!--                        <h3>Item Name 1</h3>-->
            <!---->
            <!--                        <p> <input type="text"  class="qty" placeholder="3"/> x $5.00</p>-->
            <!---->
            <!--                        <p class="stockStatus"> In Stock</p>-->
            <!---->
            <!--                    </div>-->
            <!---->
            <!---->
            <!--                    <div class="prodTotal cartSection">-->
            <!--                        <p>$15.00</p>-->
            <!--                    </div>-->
            <!---->
            <!--                    <div class="cartSection removeWrap">-->
            <!--                        <a href="#" class="remove">x</a>-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--                    <div class="special"><div class="specialContent">Free gift with purchase!, gift wrap, etc!!</div></div>-->
            <!--            </li>-->

            <?php foreach ($carts as $key => $values): ?>
                <li class="items <?php echo (($key + 1) % 2 == 0) ? 'even' : 'odd'; ?>">
                    <div class="infoWrap">
                        <div class="cartSection">
                            <input type="hidden" value="<?php echo $values['0']; ?>" name="idCart">
                            <!--                            <img src="http://lorempixel.com/output/technics-q-c-300-300-4.jpg" alt="" class="itemImg"/>-->
                            <p class="itemNumber">0000</p>
                            <h3><?php echo $values['title']; ?></h3>
                            <p  id="priceProduct<?php echo $values['0'];?>"><input  id="<?php echo $values['0'];?>" type="number" class="qty countCart"
                                      value="<?php echo $values['count'] ?>"/> <?php echo $values['price'] ?> <span>x هزینه</span>
                            </p>
                            <p class="stockStatus">موجود</p>
                        </div>


                        <div class="prodTotal cartSection">
                            <p class="totalP" id="priceP<?php echo $values['0'];?>" ><?php echo $values['price']*$values['count']; ?> </p>
                        </div>
                        <div class="cartSection removeWrap">
                            <a href="#" class="remove" onclick="del(<?php echo $values['0'];?>)">x</a>
<!--                            <input type="number" id="countCart1">-->
                        </div>
                    </div>
                </li>
            <?php endforeach; ?>
            <!--<li class="items even">Item 2</li>-->
            </ul>
    </div>
<!--    <div class="promoCode"><label for="promo">کد تخفیف</label><input type="text" name="promo" placholder="Enter Code"/>-->
<!--        <a href="#" class="btn"></a></div>-->

    <div class="subtotal cf">
        <ul>
            <li class="totalRow"><span class="label">مجموع</span><span class="value" id="totalCartP"></span></li>

<!--            <li class="totalRow"><span class="label">هزینه حمل</span><span class="value">$5.00</span></li>-->

            <li class="totalRow"><span class="label">مالیات</span><span class="value" id="tax"></span></li>
            <li class="totalRow final"><span class="label">کل </span><span class="value" id="tt"></span></li>
            <li class="totalRow"><a href="cart/pay" id="pay" class="btn continue">پرداخت</a></li>
        </ul>
    </div>
</div>
</body>

<script src="public/javaScript/jquery-3.3.1.js" type="text/javascript"></script>
<script src="public/javaScript/bootstrap.js" type="text/javascript"></script>
<script src="public/javaScript/toastr.min.js"></script>
<script>
    // Remove Items From Cart
    // $(document).bind('DOMSubtreeModified', function () {
    //     var totalPp=0;
    //     $('.totalP').each(function (){
    //         totalPp += parseInt($(this).text());
    //     });
    //     $('#totalCartP').text(totalPp);
    //     console.log(totalPp);
    // });
    $('a.remove').click(function () {
        event.preventDefault();
        $(this).parent().parent().parent().hide(400);

    });
    //
    $(document).ready(function (){
        //$('#countCart').val(<?//php?>//)
        var totalP=0;
        $('.totalP').each(function (){
             totalP += parseInt($(this).text());
        });
        $('#totalCartP').text(totalP);
        $('#tax').text(totalP * 0.09);
        $('#tt').text(totalP + parseInt($('#tax').text()));

    });
    function del(id){
        var url='<?php echo URL.'cart/delCart'?>';
        var data={'id':id};
        var totalPp=0;

        $.post(url,data,function (msg){
            if(msg==1){
                // alert('yeah');
                var priceProductTmp=$('#priceProduct'+id).text();
                var priceProduct=priceProductTmp.replace(' x هزینه','');//price productDelete
                // console.log(parseInt(priceProduct));
                var totalCurent=parseInt($('#totalCartP').text())-(parseInt(priceProduct) * parseInt($('#'+id).val())) ;//total price
                var taxCurrent=parseInt(totalCurent) * 0.09;
                $('#totalCartP').text(totalCurent);
                $('#tax').text(taxCurrent);
                $('#tt').text(parseInt(totalCurent) + parseInt(taxCurrent));
                console.log(totalCurent);
                // $('#totalCartP').text(totalPp);
                // $('.countCart').keyup();
                // $('#tax').text(totalP * 0.09);
                // $('#tt').text(totalP + parseInt($('#tax').text()));
                // toastr.success('رکورد با موفقیت حذف شد');
            }else if(msg==0){
                toastr.error('عملیات حذف ناموفق بود');
            }
        });

    }
// function change(){
//     // $('#countCart1').on('input',function(){
//         alert('Changed!');
//     // });
// }
    $('.countCart').keyup(function (){
        var countCart=$(this).val();
        var idCurent=$(this).attr('id');
        var priceProductTmp=$('#priceProduct'+idCurent).text();
        var priceProduct=priceProductTmp.replace(' x هزینه','');
        $('#priceP'+idCurent).text(countCart * parseInt(priceProduct));
        var sum=0;
        $tax=0;
        $('.totalP').each(function (){
            sum+=parseInt($(this).text());
        });
        $('#totalCartP').text(sum);
        $('#tax').text(sum * 0.09);
        $('#tt').text(sum + parseInt($('#tax').text()));
        var data={'rowId':idCurent,'count':countCart};
        var url='<?php echo URL.'cart/updateCart'?>';
        $.post(url,data,function (msg){
           if(msg==1){
               alert('yeah Ok');
           }else if(msg==0){
               alert('oops');
           }

        });
        // console.log(sum);
        // console.log();
        // $('#priceProduct'+idCurent).html( $('#priceProduct'+idCurent).html() * countCart);
        // alert($(this).val());
        // alert(idCurent);
    });
    // Just for testing, show all items
    $('a.btn.continue').click(function () {
        $('li.items').show(400);
    });
    //$('#pay').click(function (){
    //   $url= <?php //echo URL.'cart/paid'?>//;
    //   $.post($url,function (){
    //       // if()
    //   })
    //})
    (function($) {
        $.fn.inputFilter = function(inputFilter) {
            return this.on("input keydown keyup mousedown mouseup select contextmenu drop", function() {
                if (inputFilter(this.value)) {
                    this.oldValue = this.value;
                    this.oldSelectionStart = this.selectionStart;
                    this.oldSelectionEnd = this.selectionEnd;
                } else if (this.hasOwnProperty("oldValue")) {
                    this.value = this.oldValue;
                    this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
                } else {
                    this.value = "";
                }
            });
        };
    }(jQuery));
</script>

</html>