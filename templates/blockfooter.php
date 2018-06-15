<div class="block-footer tex-center">
<div class="onhapform">  
    <div class="col-sm-12 col-md-12 col-xs-12 odieuform">
        <div class="row">
        <div class="col-sm-6 col-md-6 col-xs-6">
            <p class="firsttitle">ĐĂNG KÝ NGAY ĐỂ ĐƯỢC TƯ VẤN</p>
            <p class="secondtitle">HOÀN TOÀN MIỄN PHÍ</p>
            <div class="social-zone" style="width:100%">
                <a href="#"><img src="images/facebook.png"></a>
                <a href="#"><img src="images/linkedin.png"></a>
                <a href="#"><img src="images/mail.png"></a>
            </div>
        </div>
        <div class="col-sm-6 col-md-6 col-xs-6 contactform">
            <form action="exe/addcontact.php" method="post">
                <input type="text" name="hoten" class="form-control" placeholder="Họ tên">
                <input type="text" name="sdt" class="form-control" placeholder="Số điện thoại">
                <input type="email" name="email" class="form-control" placeholder="Email">
                <button class="btn btn-warning btn-block nutgui" name="submit" type="submit">GỬI</button>
                <?php
                if(isset($_SESSION['flash'])){
                    echo $_SESSION['flash'];
                    unset($_SESSION['flash']);
                }
                ?>
            </form>
        </div>
        </div>
    </div>
    <div class="col-sm-12 col-md-12 col-xs-12 thongtin">
        <div class="row">
        <div class="col-sm-6 col-md-6 col-xs-6 othongin">
           <p class="title-thongtin">LIÊN HỆ</p>
           <p class="dienthoai-thongtin">Điện thoại : 0938 75 10 85</p>
           <p class="mail-thongtin">Mail : quocthai@chautho.com.vn</p>
           <p class="diachi-thongtin">Địa chỉ : Villa 24, Đô Đốc Tuyết, khu Mỹ Giang 1, P. Tân Phong, Q.7, TP. HCM</p>
        </div>
        <div class="col-sm-6 col-md-6 col-xs-6 facebooklike text-center">
        <div class="fb-page" data-href="https://www.facebook.com/thietkenoithat.chautho/" data-tabs="timeline" data-width="500px" data-height="250px" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/thietkenoithat.chautho/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/thietkenoithat.chautho/">THIẾT KẾ NỘI THẤT</a></blockquote></div>
        </div>
        </div>
        </div>
</div>
</div>