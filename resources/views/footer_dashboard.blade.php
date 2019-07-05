<div class="aa-footer-bottom">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="aa-footer-bottom-area">
                    <p>Designed by <a href={{URL::to("http://www.markups.io/")}}>MarkUps.io</a></p>
                    <div class="aa-footer-payment">
                        <span class="fa fa-cc-mastercard"></span>
                        <span class="fa fa-cc-visa"></span>
                        <span class="fa fa-paypal"></span>
                        <span class="fa fa-cc-discover"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</footer>
<!-- / footer -->

<!-- Login Modal -->
<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-body">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4>Login or Register</h4>
            <form class="aa-login-form" action="">
                <label for="">Username<span>*</span></label>
                <input type="text" name="username" placeholder="Username or email">
                <label for="">Password<span>*</span></label>
                <input type="password" name="password" placeholder="Password">
                <button class="aa-browse-btn" type="submit">Login</button>
                <label for="rememberme" class="rememberme"></label>
                <div class="aa-register-now">
                    Don't have an account?<a href="" data-target="#register-modal">Register now!</a>
                </div>
            </form>
        </div>
    </div>
    <!-- /.modal-content -->
    <div class="modal fade" id="register-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4>Register</h4>
                    <form class="aa-login-form" action="">
                        <label for="">Username<span>*</span></label>
                        <input type="text" name="username" placeholder="Username or email">
                        <label for="">Password<span>*</span></label>
                        <input type="password" name="password" placeholder="Password">
                        <button class="aa-browse-btn" type="submit">Login</button>
                    </form>
                </div>
            </div>
        </div>
</div>
<!-- /.modal-dialog -->
</div>

<!-- jQuery library -->
<script src={{URL::to("https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js")}}></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{URL::to('/js/bootstrap.js')}}"></script>
<!-- SmartMenus jQuery plugin -->
<script type="text/javascript" src="{{URL::to('/js/jquery.smartmenus.js')}}"></script>
<!-- SmartMenus jQuery Bootstrap Addon -->
<script type="text/javascript" src="{{URL::to('/js/jquery.smartmenus.bootstrap.js')}}"></script>
<!-- To Slider JS -->
<script src="{{URL::to('/js/sequence.js')}}"></script>
<script src="{{URL::to('/js/sequence-theme.modern-slide-in.js')}}"></script>
<!-- Product view slider -->
<script type="text/javascript" src="{{URL::to('/js/jquery.simpleGallery.js')}}"></script>
<script type="text/javascript" src="{{URL::to('/js/jquery.simpleLens.js')}}"></script>
<!-- slick slider -->
<script type="text/javascript" src="{{URL::to('/js/slick.js')}}"></script>
<!-- Price picker slider -->
<script type="text/javascript" src="{{URL::to('/js/nouislider.js')}}"></script>
<!-- Custom js -->
<script src="{{URL::to('/js/custom.js')}}"></script>

</body>

</html>