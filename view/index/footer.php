
</body>

<script src="public/javaScript/jquery-3.3.1.js" type="text/javascript"></script>
<script src="public/javaScript/jquery.simple.timer.js" type="text/javascript"></script>
<script src="public/javaScript/bootstrap.js" type="text/javascript"></script>
<script src="public/javaScript/owl.carousel.min.js" type="text/javascript"></script>
<script src="public/javaScript/js.js" type="text/javascript"></script>
<script src="public/javaScript/toastr.min.js" type="text/javascript"></script>
<script>
$('#regEmail').submit(function (e){
    e.preventDefault();
    var url=$(this).attr('action');
    var email=$('input[name=email]').val();
    var data={'email':email};
    // alert(data['email']);
    $.post(url,data,function (msg){
        if(msg==1){
            email='';
            toastr.success('شما عضو شدید');
        }else if (msg==2){
            toastr.warning('این ایمیل قبلا ثبت شده است');
        }
        else {
            toastr.error('عضویت موفقیت آمیز نبود');
        }
    })
})
</script>
</html>