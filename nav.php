<style>
    .first{
        min-width:200px !important;
    }
</style>
<script>
$(document).ready(function(){
  $('.dropdown-submenu a.test').on("click", function(e){
    $(this).next('ul').toggle();
    e.stopPropagation();
    e.preventDefault();
  });
});
</script>
<header class="header-one">
            <!-- Start top bar -->
            <!-- <div class="topbar-area fix hidden-xs">
                <div class="container">
                    <div class="row">
                        <div class=" col-md-10 col-sm-9">
                            <div class="topbar-left">
                                <ul>
                                    <li><a href="https://maps.app.goo.gl/rQ8NRVFZ821dpDM1A"><i class="fa fa-map-marker"></i>Kannampalayam, Coimbatore</a></li>
                                    <li class="hidden-sm"><a href="#"><i class="fa fa-clock-o"></i> Mon - Fri: 09:00 - 17:30</a></li>
                                    <li><a href="mailto:enq@summitsgroup.in"><i class="fa fa-envelope"></i> enq@summitsgroup.in</a></li>
                                    <li><a href="tel:+91 95009 96000"><i class="fa fa-phone"></i> +91 95009 96000</a></li>
                                </ul>  
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-3">
                            <div class="quote-button">
								<a href="contact.html" class="quote-btn">Get a quote</a>
							</div>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- End top bar -->
            <!-- header-area start -->
            <div id="sticker" class="header-area hidden-xs">
                <div class="container">
                    <div class="row">
                        <!-- logo start -->
                        <div class="col-md-3 col-sm-3 logo-bg">
                            <div class="logo">
                                <!-- Brand -->
                                <a class="navbar-brand page-scroll sticky-logo" href="index.html">
                                    <img src="img/images/logo2.png" alt="">
                                </a>
                            </div>
                        </div>
                        <!-- logo end -->
                        <div class="col-md-9 col-sm-9">
                            <div class="header-right-link">
                                <!-- search option start -->
                                <!-- <form action="#">
                                    <div class="search-option">
                                        <input type="text" placeholder="Search...">
                                        <button class="button" type="submit"><i class="fa fa-search"></i></button>
                                    </div>
                                    <a class="main-search" href="#"><i class="fa fa-search"></i></a>
                                </form> -->
                                <!-- search option end -->
                            </div>
                            <!-- mainmenu start -->
                            <nav class="navbar navbar-default">
                                <div class="collapse navbar-collapse" id="navbar-example">
                                    <div class="main-menu">
                                        <ul class="nav navbar-nav navbar-right">
                                            <li><a class="" href="index.php">Home</a>
												
											</li>
                                            <li class="sub-menu dropdown-submenu">                                           
                                           <a class="test" tabindex="-1" href="">Segments</span></a>
                                           <ul class="dropdown-menu sub-menu">
                                             <!-- <li><a tabindex="-1" href="#">2nd level dropdown</a></li>
                                             <li><a tabindex="-1" href="#">2nd level dropdown</a></li> -->
                                             <li class="first dropdown-submenu">
                                               <a class="test" href="co2-capture.php">CO<sub>2</sub> Capturing System </a>
                                               <ul class="dropdown-menu" style="min-width:200px;margin-left:2px">
                                                 <li><a href="#">3rd level dropdown</a></li>
                                                 <li><a href="#">3rd level dropdown</a></li>
                                               </ul>
                                             </li>
                                             <li class="first dropdown-submenu">
                                               <a class="test" href="#">Hydrogen System</a>
                                               <ul class="dropdown-menu" style="min-width:200px;margin-left:2px">
                                                 <li><a href="#">3rd level dropdown</a></li>
                                                 <li><a href="#">3rd level dropdown</a></li>
                                               </ul>
                                             </li>
                                           </ul>
                                         </li>
                                            <!-- <li><a class="menu-item-has-children" href="">Segments</a>
                                        
                                        <ul class="sub-menu">
													<li><a href="about.html">About us</a></li>
													<li><a href="team.html">Team</a></li>
													<li><a href="review.html">Review</a></li>
													<li><a href="faq.html">FAQ</a></li>
													<li><a href="error.html">Error</a></li>
												</ul>
                                        
                                        </li> -->
                                        
											
											<li><a class="" href="">Products</a>
												<!-- <ul class="sub-menu">
													<li><a href="about.html">About us</a></li>
													<li><a href="team.html">Team</a></li>
													<li><a href="review.html">Review</a></li>
													<li><a href="faq.html">FAQ</a></li>
													<li><a href="error.html">Error</a></li>
												</ul> -->
											</li>
											
                                            <li><a href="news.php">News</a></li>
                                            <li><a href="contact.php">Contact</a></li>

                                           
                                        </ul>
                                    </div>
                                </div>
                            </nav>
                            <!-- mainmenu end -->
                        </div>
                    </div>
                </div>
            </div>
            <style>
                .dropdown-menu{
                    padding:1px;
                    
                }
.dropdown-submenu {
  position: relative;
}

.dropdown-submenu>.dropdown-menu {
  top: 0;
  left: 100%;
  margin-top: 0px;
  margin-left: -1px;
  -webkit-border-radius: 0 6px 6px 6px;
  -moz-border-radius: 0 6px 6px;
  border-radius: 0 6px 6px 6px;
}

.dropdown-submenu:hover>.dropdown-menu {
  display: block;
}

.dropdown-submenu>a:after {
  display: block;
 
  float: right;
  width: 0;
  height: 0;
  border-color: transparent;
  border-style: solid;
  border-width: 5px 0 5px 5px;
  border-left-color: #ccc;
  margin-top: 5px;
  margin-right: -10px;
}

.dropdown-submenu:hover>a:after {
  border-left-color: #fff;
}

.dropdown-submenu.pull-left {
  float: none;
}

.dropdown-submenu.pull-left>.dropdown-menu {
  left: -100%;
  margin-left: 10px;
  -webkit-border-radius: 6px 0 6px 6px;
  -moz-border-radius: 6px 0 6px 6px;
  border-radius: 6px 0 6px 6px;
}
</style>
            <!-- header-area end -->
            <!-- mobile-menu-area start -->
            <div class="mobile-menu-area hidden-lg hidden-md hidden-sm">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mobile-menu">
                                <div class="logo">
                                    <a href="index-2.html"><img src="img/images/logo1.png" alt="" /></a>
                                </div>
                                <nav id="dropdown">
                                    <ul>
                                        <li><a class="" href="index.php">Home</a>
                                            <!-- <ul class="sub-menu">  
                                                <li><a href="index-2.html">Home 01</a></li>
                                                <li><a href="index-3.html">Home 02</a></li>
                                                <li><a href="index-4.html">Home 03</a></li>
                                                <li><a href="index-5.html">Home 04</a></li>
                                                <li><a href="index-6.html">Home 05</a></li>
                                                <li><a href="index-7.html">Home 06</a></li>
                                            </ul> -->
                                        </li>
                                        <li><a class="" href="about.php">About</a>
                                            <!-- <ul class="sub-menu">
                                                <li><a href="blog.html">Blog grid</a></li>
                                                <li><a href="blog-sidebar.html">Blog Sidebar</a></li>
                                                <li><a href="blog-details.html">Blog Details</a></li>
                                            </ul> -->
                                        </li>
                                        <li class="sub-menu dropdown-submenu">                                           
                                           <a class="test" tabindex="-1" href="#">Segments</span></a>
                                           <ul class="sub-menu">
                                           <li class="sub-menu">
                                               <a class="test" href="co2-capture.php">Co<sub>2</sub> Capturing</a>
                                               <ul class="">
                                                 <li><a href="#">3rd level dropdown</a></li>
                                                 <li><a href="#">3rd level dropdown</a></li>
                                               </ul>
                                             </li>
                                             <li class="sub-menu">
                                               <a class="test" href="#">Hydrogen System</a>
                                               <ul class="">
                                                 <li><a href="#">3rd level dropdown</a></li>
                                                 <li><a href="#">3rd level dropdown</a></li>
                                               </ul>
                                             </li>
                                             
                                           </ul>
                                         </li>
                                        <li><a class="" href="">News</a>
                                            <!-- <ul class="sub-menu">
                                                <li><a href="about.html">About us</a></li>
                                                <li><a href="team.html">Team</a></li>
                                                <li><a href="review.html">Review</a></li>
                                                <li><a href="faq.html">FAQ</a></li>
                                                <li><a href="error.html">Error</a></li>
                                            </ul> -->
                                        </li>
                                        
                                        <li><a href="contact.php">Contact</a></li>

                                    </ul>
                                </nav>
                            </div>					
                        </div>
                    </div>
                </div>
            </div>
            <!-- mobile-menu-area end -->		
        </header>