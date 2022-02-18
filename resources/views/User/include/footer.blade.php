<footer>
        <div class="footer-main">
            <div class="container">
                <div class="row">
                    @foreach($footer as $foot)
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-widget">
                            <h4>About Mohmaya</h4>
                            <p>{{ $foot-> about}}</p>
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-google-plus" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest-p" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-whatsapp" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-link">
                            <h4>Information</h4>
                            <ul>
                                <li><a href="about">About Us</a></li>
                                <li><a href="#">Customer Service</a></li>
                                <li><a href="#">Our Sitemap</a></li>
                                <li><a href="termsandcondition">Terms &amp; Conditions</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Delivery Information</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-link-contact">
                            <h4>Contact Us</h4>
                            <ul>
                                <li>
                                    <p><i class="fas fa-map-marker-alt"></i>Address:{{$foot->address}}</p>
                                </li>
                                <li>
                                    <p><i class="fas fa-phone-square"></i>Phone:{{$foot->phone}} <a href=""></a></p>
                                </li>
                                <li>
                                    <p><i class="fas fa-envelope"></i>Email:{{$foot->email}} <a href=""></a></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </footer>
    <div class="footer-copyright">
        <p class="footer-company">All Rights Reserved. &copy; 2022 <a href="#">Carlier</a> Design By :
            <a href="#">Yash &Prakruti</a></p>
    </div>
    <!-- End copyright  -->

    <a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

    <!-- ALL JS FILES -->
    <script src="{{asset('User/js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('User/js/popper.min.js')}}"></script>
    <script src="{{asset('User/js/bootstrap.min.js')}}"></script>
    <!-- ALL PLUGINS -->
    <script src="{{asset('User/js/jquery.superslides.min.js')}}"></script>
    <script src="{{asset('User/js/bootstrap-select.js')}}"></script>
    <script src="{{asset('User/js/inewsticker.js')}}"></script>
    <script src="{{asset('User/js/bootsnav.js.')}}"></script>
    <script src="{{asset('User/js/images-loded.min.js')}}"></script>
    <script src="{{asset('User/js/isotope.min.js')}}"></script>
    <script src="{{asset('User/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('User/js/baguetteBox.min.js')}}"></script>
    <script src="{{asset('User/js/form-validator.min.js')}}"></script>
    <script src="{{asset('User/js/contact-form-script.js')}}"></script>
    <script src="{{asset('User/js/custom.js')}}"></script>
</body>
</html>