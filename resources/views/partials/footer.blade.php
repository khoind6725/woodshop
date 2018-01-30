<footer class="row">
    <div class="row m0 footer-top">
        <div class="container">
            <div class="row footer-sidebar">
                <div class="widget about-us-widget col-sm-6 col-lg-3">
                    <a href="index.html" class="brand_logo">
                        <img src="images/header/logo.png" alt="logo image">
                    </a>
                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                    <div class="social-icon row m0">
                        <ul class="nav">
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
                            <li><a href="{{ Config::get('customs.info.facebook') }}"><i class="fa fa-facebook-square"></i></a></li>
                            <li><a href="#"><i class="fa fa-skype"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest-square"></i></a></li>  
                        </ul>
                    </div>
                </div>
                <div class="widget widget-links col-sm-6 col-lg-3">
                    <h4 class="widget_title">Dịch vụ của chúng tôi</h4>
                    <div class="widget-contact-list row m0">
                        <ul>
                            <li><a href="#"><i class="fa fa-angle-right"></i>Interior Furniture</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>Hardwood Flooring</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>Renovation of Office Furniture</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>Repairing of Wood Roof</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>Outdoor Furniture</a></li>
                        </ul>
                    </div>
                </div>
                <div class="widget widget-contact  col-sm-6 col-lg-3">
                    <h4 class="widget_title">Thông tin liên hệ</h4>
                    <div class="widget-contact-list row m0">
                       <ul>
                            <li>
                                <i class="fa fa-map-marker"></i>
                                <div class="fleft location_address">
                                    {{ Config::get('customs.info.address') }}
                                </div>
                                
                            </li>
                            <li>
                                <i class="fa fa-phone"></i>
                                <div class="fleft contact_no">
                                    <a href="#">{{ Config::get('customs.info.phone') }}</a>
                                </div>
                            </li>
                            <li>
                                <i class="fa fa-envelope-o"></i>
                                <div class="fleft contact_mail">
                                    <a href="#">{{ Config::get('customs.info.email') }}</a>
                                </div>
                            </li>
                            <li>
                                <i class="icon icon-WorldWide"></i>
                                <div class="fleft service_time">
                                    Mon - Sat : 9am to 6pm Sunday Close
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="widget widget4 widget-form col-sm-6 col-lg-3">
                    <h4 class="widget_title">Để lại lời nhắn</h4>
                    <div class="widget-contact-list row m0">
                        <form class="submet-form row m0" action="#" method="post">
                            <input type="text" class="form-control" id="name" placeholder="Tên">
                            <input type="email" class="form-control" id="email" placeholder="Email">
                            <textarea class="form-control message" placeholder="Lời nhắn"></textarea>
                            <button class="submit" type="submit">Gửi đi</button>
                        </form>
                       
                    </div>
                </div>
            </div>
        </div>
     </div>
     <div class="row m0 footer-bottom">
         <div class="container">
            <div class="row">
               <div class="col-sm-8">
                   Copyright &copy; <a href="index.html">WoodWorkshop</a> 2016. <br class="visible-xs"> All rights reserved.
               </div>
               <div class="right col-sm-4">
                   Created by: <a href="http://themeforest.net/user/designarc">DesignArc</a>
               </div>
            </div>
        </div>
     </div>
</footer>