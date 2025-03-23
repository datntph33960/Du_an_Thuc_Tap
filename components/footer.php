<div style="border:1px solid #0A68FF;">

</div>
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-7">
                <div class="footer_about">
                    <div class="footer_logo">
                        <a href="./index.html">
                            <img src="upload/titki-logo.png" alt="">
                        </a>
                    </div>
                    <p>Chào mừng bạn đến với TIKI nơi cung cấp những loại sách chất lượng</p>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-5">
                <div class="footer_widget">
                    <h6>ĐƯỜNG DẪN </h6>
                    <ul>
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Blogs</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">FAQ</a></li>
                        
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4"> 
                <div class="footer_widget">
                    <h6>Tài Khoản</h6>
                    <ul>
                        <li><a href="#">Tài Khoản Của Tôi</a></li>
                        <li><a href="#">Theo dỗi đơn hànghàng</a></li>
                        <li><a href="#"></a>Thủ tục thanh toántoán</li>
                        <li><a href="#">Danh sách yêu thích</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-8 col-sm-8">
                <div class="footer_newslatter">
                    <h6>Bản Tin</h6>
                    <form action="#">
                        <input type="text" placeholder="Email">
                        <button type="submit" class="site-btn">Follows</button>
                    </form>
                    <div class="footer_payment">
                        <a href="#"> <img src="public/img/payment/payment-1.png" alt=""></a>
                        <a href="#"> <img src="public/img/payment/payment-2.png" alt=""></a>
                        <a href="#"> <img src="public/img/payment/payment-3.png" alt=""></a>
                        <a href="#"> <img src="public/img/payment/payment-4.png" alt=""></a>
                        <a href="#"> <img src="public/img/payment/payment-5.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="footer_copyright_text">
                    <p>Copyright &copy; <script>document.write(new Date().getFullYear());</script> </p>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="search-model">
    <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="search-close-switch">+</div>
        <form action="tim-kiem" method="get" class="search-model-form" >
            <input type="search" name="query" id="search-input" placeholder="Tìm Kiếm........."></input>


        </form>
    </div>
</div>

<script>
    $(document).ready(function (){
        $("#toastr-success-top-right").on("click",function(){
            toastr.success("1 sản phẩm đã thêm vào giỏ", "Thành công",{
                closeButton:true,
                debug:false,
                newestOntop:false,
                progressBar:true,
                positionClass:"toast-top-right",
                preventDuplicates:false,
                onclick:null,
                showDuration:"300",
                hideDuration:"1000",
                timeOut:"5000",
                extendedTimeOut:"1000",
                showEasing:"swing",
                hideEasing:"linear",
                showMethod:"fadeIn",
                hideMethod:"fadeOut",

            });
        });
    });
</script>
<script src="public/js/jquery-3.3.1.min.js"></script>
<script src="public/js/bootstrap.min.js"></script>
<script src="public/js/jquery.magnific-popup.min.js"></script>
<script src="public/js/jquery-ui.min.js"></script>
<script src="public/js/mixitup.min.js"></script>
<script src="public/js/jquery.countdown.min.js"></script>
<script src="public/js/jquery.slicknav.js"></script>
<script src="public/js/owl.carousel.min.js"></script>
<script src="public/js/jquery.nicescroll.min.js"></script>
<script src="public/js/main.js"></script>
<!-- dialogflow -->
<!-- <script src="https://www.gstatic.com/dialogflow-console/fast/messenger/bootstrap.js?v=1"></script>
<df-messenger
    intent="WELCOME"
    chat-title="Chat"
    agent-id="a111a74a-8334-4098-9636-0f1433d6fc97"
    language-code="vi"
></df-messenger> -->


</body>

</html>