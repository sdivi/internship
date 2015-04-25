<!DOCTYPE html>
<html>
  <head>
    <meta name="generator"
    content="HTML Tidy for HTML5 (experimental) for Windows https://github.com/w3c/tidy-html5/tree/c63cc39" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link href="css/bootstrap3.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" />
    <link href="css/style.css" rel="stylesheet" />
    <link rel="icon" href="http://d33rxv6e3thba6.cloudfront.net/540ec485192ad8064fd6fae3/31763-1wvoko5.ico" />
    <style type='text/css'>
[data-drag=&quot;MP6&quot;] {position: absolute; margin-top: -10px;}

body {font-family: &#39;Open Sans&#39;, sans-serif;}
.nav&gt;li&gt;a:hover {border-top: 5px solid #c7a761 !important; padding-top: 20px !important;}
.nav&gt;li&gt;a {padding-top: 25px !important; padding-bottom: 25px !important}
.navbar {margin-bottom: 0px;}


@media (max-width: 991px) {
[data-drag=&quot;MP4&quot;] {display:none;}
[data-drag=&quot;MP21&quot;] img {margin-left: 0px !important;}
[data-drag=&quot;MP22&quot;] img {margin-left: 0px !important;}
[data-drag=&quot;MP15&quot;] {margin-top: 20px;}
}

.form-control {color: #fff !important;}
#MP28 .index0 {padding-left:0px; padding-right:0px;}
#MP28 .index1 {padding-left:10px; padding-right:0px;}
#MP30 .index0 {padding-left:0px; padding-right:0px;}
#MP30 .index1 {padding-left:10px; padding-right:0px;}
#MP32 .index0 {padding-left:0px; padding-right:0px;}
#MP32 .index1 {padding-left:10px; padding-right:0px;}
[data-drag=&quot;36&quot;] {padding-top: 8px;}
[data-drag=&quot;24&quot;] {padding-bottom: 8px;}


#Name {background-color: #294258}
#Email {background-color: #294258}
#Phone {background-color: #294258}
.form-control{background-color: #294258}


#Name input {color:#fff}
[data-drag=&quot;54&quot;] {border-bottom: 1px solid #333;}
placholder {color:white;}

.form-control {
height: 60px;
border:1px solid #C7A761;
border-radius:0px;}

.form-control::-webkit-input-placeholder { color: white; }

.form-control:-moz-placeholder { /* Mozilla Firefox 4 to 18 */
    color:    #FFF;
    opacity:  1;
}
.form-control::-moz-placeholder { /* Mozilla Firefox 19+ */
    color:    #FFF;
    opacity:  1;
}
.form-control:-ms-input-placeholder { /* Internet Explorer 10+ */
    color:    #FFF;
}


.bolt-button-cta {
font-size: 18px;
        border-radius: 0;
        border: 1px solid #C7A761;
        color: #1C2F40;
        background-color: #C7A761;
        padding: 13px 54px 13px 54px;
        margin-top: 20px;
}

.bolt-button-cta:hover, .bolt-button-cta:focus {
        background-color: #1C2F40;
        border-color: #C7A761;
        color: #C7A761;
        -webkit-transition: color 0.5s ease;
        -moz-transition: color 0.5s ease;
        -o-transition: color 0.5s ease;
        transition: color 0.5s ease;
}

label {margin-bottom: 22px;}


[data-drag=&quot;36&quot;] .textContainer {width: 98% !important; margin-left: 1% !important;}


@media (max-width: 991px) {
[data-drag=&quot;36&quot;] .textContainer {width: 94% !important; margin-left: 3% !important;}
[data-drag=&quot;36&quot;] font {font-size: 20px !important;}
[data-drag=&quot;42&quot;] {display: none;}
[data-drag=&quot;24&quot;] font {font-size: 15px !important;}
[data-drag=&quot;24&quot;] .textContainer {width: 94% !important; margin-left: 3% !important;}
[data-drag=&quot;32&quot;] {display: none;}
[data-drag=&quot;33&quot;] {display: none;}
[data-drag=&quot;28&quot;] .textContainer {padding-left: 15px !important; padding-right: 15px !important;}
}

.carousel-indicators {display: none;}
</style>
    <script src="js/jquery.js"></script>
    <meta name="page-source"
    content="site-id=540ec485192ad8064fd6fae3, page-id=540ee442284aee137c1d4120, master-page-id=540ec647192ad8064fd6fae4" />
    <title></title>
  </head>
  <body>
    <div id="windowDiv" style="">
      <div id="MarginsTop" style="height: 0px;" class="row"></div>
      <div id="bodyContainer" style="width:100%">
        <div class="simblaEL containerHolder" data-drag="MP1" id="MP1" style="">
          <div class="container"
          style="width: 100%; border: 1px solid rgb(193, 193, 193); border-radius: 0px; background-color: rgb(28, 47, 64);"
          data-border-type="All">
            <div class="simblaEL containerHolder" data-drag="MP36" id="MP36">
              <div class="container">
                <div class="row simblaEL rDivider" data-drag="MP7" id="MP7"
                style="border-top-left-radius: 0px; border-top-right-radius: 0px; border-bottom-right-radius: 0px; border-bottom-left-radius: 0px; padding-top: 40px; padding-bottom: 40px;">

                  <div class="sDivider col-md-2 index0" data-colsize="2">
                    <div class="simblaEL simblaImg" data-drag="MP6" id="MP6">
                      <img class="" src="images/18704-9egsf.png" alt="leonardo.png" data-id="" title="leonardo.png" />
                    </div>
                  </div>
                  <div class="sDivider col-md-8 index1" data-colsize="8">
                    <?php 
                                     
                                     session_start();
                             $session_id_val = '';
                            //echo "Session echo  ".$_SESSION["userId"];
                                    
                                 if(isset($_SESSION["userId"]))
                                {
                                    $session_id_val = $_SESSION["userId"];
                                } 
                                     //echo $session_id_val; 
                                     echo $_SESSION["userId"];
                                     ?>
                  </div>
                  <div class="sDivider col-md-2 index2" data-colsize="2">
                    <div class="simblaEL simblaImg" data-drag="MP4" id="MP4">
                      <img class="" src="images/31763-170lgrm.png" alt="social2.png" data-id="" title="social2.png" />
                    </div>
                  </div>
                </div>
                <nav class="simblaEL menuHolder navbar navbar-default" data-drag="MP8" id="MP8"
                style="border-top-width: 1px; border-top-style: solid; border-top-color: rgb(199, 167, 97); border-radius: 0px;"
                data-border-type="Top">
                  <div class="container-fluid">
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle" data-toggle="collapse"
                      data-target="[data-drag=&quot;MP8&quot;] .navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                      </button>
                    </div>
                    <div class="collapse navbar-collapse">
                      <ul class="nav navbar-nav" data-hover-color="#ffffff" data-hover-backgroundcolor="#c7a761"
                      data-current-color="#ffffff" data-current-backgroundcolor="#c7a761" data-hover-fontfamily="inherit"
                      data-current-fontfamily="inherit" data-hover-fontsize="14px" data-current-fontsize="14px"
                      data-current-bgtype="none" data-hover-bgtype="none" data-bgtype="none" data-hover-opacity="1"
                      data-hover-fontweight="normal">
                        <li>
                          <a href="Home.php" pageid="540ee442284aee137c1d4120"
                          style="color: rgb(255, 255, 255); font-family: inherit; font-size: 14px; font-weight: 400; border: none; border-radius: 0px; margin-right: 0px; margin-left: 0px; background-color: transparent;"
                          class="current">HOME</a>
                        </li>
                        <li>
                          <a href="Gallery.php" pageid="541189dc9a58f374239b8b1f"
                          style="color: rgb(255, 255, 255); font-family: inherit; font-size: 14px; font-weight: 400; border: none; border-radius: 0px; margin-right: 0px; margin-left: 0px; background-color: transparent;">
                          STUDENT</a>
                        </li>
                        <li>
                          <a href="Pricing.php" pageid="541161769a58f374239b8b18"
                          style="color: rgb(255, 255, 255); font-family: inherit; font-size: 14px; font-weight: 400; border: none; border-radius: 0px; margin-right: 0px; margin-left: 0px; background-color: transparent;">
                          ADMIN</a>
                        </li>
                        <li>
                          <a href="About.php" pageid="541060129a58f374239b8b06"
                          style="color: rgb(255, 255, 255); font-family: inherit; font-size: 14px; font-weight: 400; border: none; border-radius: 0px; margin-right: 0px; margin-left: 0px; background-color: transparent;">
                          BUSINESS</a>
                        </li>
                        <li>
                          <a href="logout.php" pageid="5411529c284aee137c1d412e"
                          style="color: rgb(255, 255, 255); font-family: inherit; font-size: 14px; font-weight: 400; border: none; border-radius: 0px; margin-right: 0px; margin-left: 0px; background-color: transparent;">
                          LOGOUT</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </nav>
              </div>
            </div>
          </div>
        </div>
        <div class="_dynamicContentArea simblaEL" type="dynamicContainer" data-drag="MP12" id="_MPID0">
          <div class="simblaEL containerHolder" data-drag="13" id="13" style="">
            <div class="container"
            style="width: 100%; padding: 195px 0px; border-bottom-width: 4px; border-bottom-style: solid; border-bottom-color: rgb(199, 167, 97); border-radius: 0px; background: url(images/9076-1l04r9n.jpg) repeat;"
            data-border-type="Bottom">
              <div class="simblaEL containerHolder" data-drag="23" id="23">
                <div class="container">
                  <div class="simblaEL containerHolder" data-drag="27" id="27" style="position: relative;">
                    <div class="container" style="width: 55%; border: 3px solid rgba(255, 255, 255,0.85);">
                      <div class="simblaEL tc" data-drag="36" id="36">
                        <div class="textContainer"
                        style="border-radius: 0px; width: 98%; margin-left: 1%; padding: 5px 0px; font-family: &#39;Cantata One&#39;, serif; background-color: rgba(255, 255, 255, 0.85098);">

                          <div style="text-align: center;">
                            <span style="line-height: 1.428571429; background-color: transparent;">
                              <font style="font-size: 72px;" color="#C7A761">HOLDINGS</font>
                            </span>
                          </div>
                        </div>
                      </div>
                      <div class="simblaEL tc" data-drag="42" id="42">
                        <div class="textContainer"
                        style="border-radius: 0px; width: 98%; margin-left: 1%; padding: 5px 0px 0px; background-color: rgba(255, 255, 255, 0.85098);">

                          <div style="text-align: center;">
                            <font color="#C7A761">
                            <span style="line-height: 1.428571429; background-color: transparent;">_________    </span>
                            <img src="images/9076-fzeua.png" alt="" data-id="" title=""
                            style="line-height: 1.428571429; background-color: transparent;" />    __
                            <span style="line-height: 1.428571429; background-color: transparent;">_______</span></font>
                          </div>
                        </div>
                      </div>
                      <div class="simblaEL tc" data-drag="24" id="24">
                        <div class="textContainer"
                        style="border-radius: 0px; width: 98%; margin-left: 1%; padding: 5px 0px 20px; font-family: Montserrat, sans-serif; background-color: rgba(255, 255, 255, 0.85098);">

                          <div style="text-align: center;">
                            <br />
                          </div>
                          <div style="text-align: center;">
                            <div class="simblaEL simblaImg"
                            style="color: rgb(199, 167, 97); line-height: 1.428571429; background-color: transparent;">
                              <font style="font-size: 18px;">WE ARE THE BEST IN THE CITY</font>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="simblaEL containerHolder" data-drag="40" id="40" style="">
            <div class="container"
            style="border-top-left-radius: 0px; border-top-right-radius: 0px; border-bottom-right-radius: 0px; border-bottom-left-radius: 0px; background-color: rgb(247, 247, 247); width: 100%;">

              <div class="simblaEL simblaImg" data-drag="34" id="34">
                <img class="" src="images/9076-1d88vuy.png" alt="carouselpuller.png" data-id="" title="carouselpuller.png" />
              </div>
              <div class="simblaEL containerHolder" data-drag="1" id="1" style="">
                <div class="container"
                style="border-top-left-radius: 0px; border-top-right-radius: 0px; border-bottom-right-radius: 0px; border-bottom-left-radius: 0px; padding: 10px 10px 80px; margin-top: 0px;">

                  <div class="row simblaEL rDivider" data-drag="2" id="2">
                    <div class="sDivider col-md-4 index0" data-colsize="4">
                      <div class="simblaEL simblaImg" data-drag="3" id="3">
                        <img class="" src="images/31763-rhoq2a.png" alt="seperationphombus.png" data-id=""
                        title="seperationphombus.png"
                        style="border-top-left-radius: 0px; border-top-right-radius: 0px; border-bottom-right-radius: 0px; border-bottom-left-radius: 0px; margin-top: 80px;" />
                      </div>
                      <div class="simblaEL simblaImg" data-drag="4" id="4"></div>
                      <div class="simblaEL iconElm" data-drag="45" id="45" style="position: relative; margin-top: 70px;"></div>
                      <div class="simblaEL tc" data-drag="37" id="37">
                        <div class="textContainer"
                        style="border-radius: 0px; margin: 60px 0px 0px; padding-top: 20px; font-family: Montserrat, sans-serif; background-color: rgb(199, 167, 97);">

                          <div style="text-align: center;">
                            <span style="line-height: 1.428571429; background-color: transparent;">
                              <font color="#FFFFFF" style="font-size: 18px;">REALESTATE MANAGEMENT </font>
                            </span>
                          </div>
                        </div>
                      </div>
                      <div class="simblaEL tc" data-drag="5" id="5">
                        <div class="textContainer"
                        style="padding: 0px 20px 30px; border-radius: 0px; background-color: rgb(199, 167, 97);">
                          <div style="text-align: center;">
                            <br />
                          </div>
                          <div style="text-align: center;">
                            <img src="images/31763-1hqr3ru.png" alt="whiteseperators.png" data-id="" title="whiteseperators.png"
                            class="" style="line-height: 1.428571429;" />
                            <br />
                          </div>
                          <div style="text-align: center;">
                            <div class="simblaEL simblaImg">
                              <br />
                            </div>
                          </div>
                          <div style="text-align: center;">
                            <div class="simblaEL simblaImg">
                              <font color="#FFFFFF">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                              incididunt ut labore et dolore magna aliqua.</font>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="sDivider col-md-4 index1" data-colsize="4">
                      <div class="simblaEL simblaImg" data-drag="7" id="7">
                        <img class="" src="images/31763-rhoq2a.png" alt="" data-id="" title=""
                        style="border-top-left-radius: 0px; border-top-right-radius: 0px; border-bottom-right-radius: 0px; border-bottom-left-radius: 0px; margin-top: 80px;" />
                      </div>
                      <div class="simblaEL simblaImg" data-drag="8" id="8"></div>
                      <div class="simblaEL iconElm" data-drag="46" id="46" style="position: relative; margin-top: 52px;"></div>
                      <div class="simblaEL tc" data-drag="38" id="38">
                        <div class="textContainer"
                        style="border-radius: 0px; margin: 60px 0px 0px; padding-top: 20px; font-family: Montserrat, sans-serif; background-color: rgb(199, 167, 97);">

                          <div style="text-align: center;">
                            <span style="font-size: 18px; line-height: 1.428571429; background-color: transparent;">
                              <font color="#FFFFFF">REALESTATE MANAGEMENT </font>
                            </span>
                          </div>
                        </div>
                      </div>
                      <div class="simblaEL tc" data-drag="6" id="6">
                        <div class="textContainer"
                        style="padding: 20px 20px 31px; border-radius: 0px; background-color: rgb(199, 167, 97);">
                          <div style="text-align: center;">
                            <img src="images/31763-1hqr3ru.png" alt="" data-id="" title=""
                            style="color: rgb(255, 255, 255); line-height: 1.428571429;" />
                            <br />
                          </div>
                          <div style="text-align: center;">
                            <div class="simblaEL simblaImg">
                              <font color="#FFFFFF">
                                <br />
                              </font>
                            </div>
                          </div>
                          <div style="text-align: center;">
                            <font color="#FFFFFF">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua.</font>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="sDivider col-md-4 index2" data-colsize="4">
                      <div class="simblaEL simblaImg" data-drag="9" id="9">
                        <img class="" src="images/31763-rhoq2a.png" alt="seperationphombus.png" data-id=""
                        title="seperationphombus.png"
                        style="border-top-left-radius: 0px; border-top-right-radius: 0px; border-bottom-right-radius: 0px; border-bottom-left-radius: 0px; padding-top: 80px;" />
                      </div>
                      <div class="simblaEL simblaImg" data-drag="10" id="10"></div>
                      <div class="simblaEL iconElm" data-drag="47" id="47" style="position: relative; margin-top: 46px;"></div>
                      <div class="simblaEL tc" data-drag="39" id="39">
                        <div class="textContainer"
                        style="border-radius: 0px; margin: 60px 0px 0px; padding-top: 20px; font-family: Montserrat, sans-serif; background-color: rgb(199, 167, 97);">

                          <div style="text-align: center;">
                            <span style="font-size: 18px; line-height: 1.428571429; background-color: transparent;">
                              <font color="#FFFFFF">REALESTATE MANAGEMENT  </font>
                            </span>
                          </div>
                        </div>
                      </div>
                      <div class="simblaEL tc" data-drag="11" id="11">
                        <div class="textContainer"
                        style="padding: 20px 20px 32px; border-radius: 0px; background-color: rgb(199, 167, 97);">
                          <div style="text-align: center;">
                            <img src="images/31763-1hqr3ru.png" alt="" data-id="" title=""
                            style="line-height: 1.428571429; color: rgb(255, 255, 255); background-color: transparent;" />
                            <br />
                          </div>
                          <div style="text-align: center;">
                            <font color="#FFFFFF">
                              <br />
                            </font>
                          </div>
                          <div style="text-align: center;">
                            <font color="#FFFFFF">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua.</font>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="simblaEL containerHolder" data-drag="12" id="12" style="">
            <div class="container"
            style="width: 100%; padding-top: 100px; border-top-left-radius: 0px; border-top-right-radius: 0px; border-bottom-right-radius: 0px; border-bottom-left-radius: 0px; border-color: rgb(193, 193, 193); background-image: url(images/9076-1eo2nw3.png), url(images/9076-gb92wy.png); background-color: rgb(215, 218, 221); background-position: 0% 0%, 100% 100%; background-repeat: no-repeat;">

              <div class="simblaEL containerHolder" data-drag="14" id="14">
                <div class="container">
                  <div class="simblaEL tc" data-drag="15" id="15">
                    <div class="textContainer" style="font-family: Montserrat, sans-serif;">
                      <div style="text-align: center;">
                        <span style="line-height: 1.428571429; background-color: transparent;">
                          <font style="font-size: 24px;">WELCOME TO RAPHEL GROUP</font>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="simblaEL tc" data-drag="16" id="16">
                    <div class="textContainer"
                    style="border-radius: 0px; padding: 1px 70px; border-color: rgb(51, 51, 51); margin-top: 60px;">
                      <div style="text-align: center;">
                        <span style="line-height: 1.428571429; background-color: transparent;">Lorem ipsum dolor sit amet,
                        consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</span>
                      </div>
                      <div style="text-align: center;">
                        <span style="line-height: 1.428571429; background-color: transparent;"> et dolore magna aliqua. Ut enim ad
                        minim veniam, quis nostrud exercitation ullamco </span>
                      </div>
                      <div style="text-align: center;">
                        <span style="line-height: 1.428571429; background-color: transparent;">laboris nisi ut aliquip ex ea
                        commodo consequat</span>
                      </div>
                    </div>
                  </div>
                  <div class="simblaEL carouselHolder" data-drag="17" id="17">
                    <div class="" style="display: block;">
                      <div id="carous979" class="carousel slide" data-interval="2500" data-ride="carousel"
                      style="width: 66.66667%; display: block; border-top-left-radius: 0px; border-top-right-radius: 0px; border-bottom-right-radius: 0px; border-bottom-left-radius: 0px; margin-top: 100px;">

                        <ol class="carousel-indicators"></ol>
                        <div class="carousel-inner">
                          <div class="item slide0 active">
                            <img src="images/9076-c5hrep.png" />
                            <div class="carousel-caption"></div>
                          </div>
                        </div>
                        <a class="left carousel-control" href="#carous979" data-slide="prev"></a>
                        <a class="right carousel-control" href="#carous979" data-slide="next"></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="simblaEL containerHolder" data-drag="19" id="19" style="">
            <div class="container" style="width: 100%; background-color: rgb(28, 47, 64);">
              <div class="simblaEL containerHolder" data-drag="49" id="49">
                <div class="container">
                  <div class="simblaEL tc" data-drag="20" id="20">
                    <div class="textContainer"
                    style="border-radius: 0px; margin: 80px 0px 0px; font-family: Montserrat, sans-serif;">
                      <div style="text-align: center;">
                        <span style="line-height: 1.428571429; background-color: transparent;">
                          <font style="font-size: 20px;" color="#C7A761">CONTACT US</font>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="simblaEL htmlEditor" data-drag="18" id="18"
                  style="border-top-left-radius: 0px; border-top-right-radius: 0px; border-bottom-right-radius: 0px; border-bottom-left-radius: 0px; margin: 30px 0px 50px;">

                    <div class="htmlContent">
                      <div class="container">
                        <div class="row">
                          <div class="col-md-4">
                            <input id="Name" name="Name" type="text" placeholder="Name" class="form-control input-md"
                            required="" />
                          </div>
                          <div class="col-md-4">
                            <input id="Email" name="Email" type="text" placeholder="E-mail" class="form-control input-md"
                            required="" />
                          </div>
                          <div class="col-md-4">
                            <input id="Phone" name="Phone" type="text" placeholder="Phone" class="form-control input-md"
                            required="" />
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-12">
                            <textarea class="form-control" id="message" name="message" placeholder="Message" rows="5"></textarea>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-10"></div>
                          <div class="col-md-2">
                            <a href="#" data-id="section6" class="btn btn-default bolt-button-cta scroll-link">SEND</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="simblaEL containerHolder" data-drag="41" id="41">
            <div class="container"
            style="border-top-left-radius: 0px; border-top-right-radius: 0px; border-bottom-right-radius: 0px; border-bottom-left-radius: 0px; background-color: rgb(247, 247, 247); width: 100%;">

              <div class="simblaEL simblaImg" data-drag="35" id="35">
                <img class="" src="images/9076-qqbx0z.png" alt="blupuller.png" data-id="" title="blupuller.png" />
              </div>
              <div class="simblaEL containerHolder" data-drag="21" id="21">
                <div class="container"
                style="border-top-left-radius: 0px; border-top-right-radius: 0px; border-bottom-right-radius: 0px; border-bottom-left-radius: 0px; padding-bottom: 120px;">

                  <div class="simblaEL iconElm" data-drag="50" id="50" style="position: relative; margin-top: 80px;"></div>
                  <div class="simblaEL simblaImg" data-drag="22" id="22" style="position: relative;"></div>
                  <div class="simblaEL tc" data-drag="25" id="25">
                    <div class="textContainer" style="border-radius: 0px; margin-top: 25px; font-family: Montserrat, sans-serif;">
                      <div style="text-align: center;">
                        <span style="line-height: 1.428571429; background-color: transparent;">
                          <font style="font-size: 24px;" color="#C7A761">CUSTOMERS SAY</font>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="row simblaEL rDivider" data-drag="30" id="30"
                  style="border-top-left-radius: 0px; border-top-right-radius: 0px; border-bottom-right-radius: 0px; border-bottom-left-radius: 0px; margin-top: 50px;">

                    <div class="sDivider col-md-3 index0" data-colsize="3"></div>
                    <div class="sDivider col-md-2 index1" data-colsize="2">
                      <div class="simblaEL tc" data-drag="32" id="32">
                        <div class="textContainer"
                        style="margin-right: -90px; margin-top: 5px; border-width: 1px; border-style: solid none none; border-color: rgb(199, 167, 97); border-radius: 0px;"
                        data-border-type="All"></div>
                      </div>
                    </div>
                    <div class="sDivider col-md-2 index2" data-colsize="2">
                      <div class="simblaEL simblaImg" data-drag="31" id="31">
                        <img class="" src="images/9076-w6zzwi.png" alt="" data-id="" title="" />
                      </div>
                    </div>
                    <div class="sDivider col-md-2 index3" data-colsize="2">
                      <div class="simblaEL tc" data-drag="33" id="33">
                        <div class="textContainer"
                        style="margin-left: -90px; margin-top: 5px; border-width: 1px; border-style: solid none none; border-color: rgb(199, 167, 97); border-radius: 0px;"
                        data-border-type="All"></div>
                      </div>
                    </div>
                    <div class="sDivider col-md-3 index4" data-colsize="3"></div>
                  </div>
                  <div class="simblaEL tc" data-drag="28" id="28">
                    <div class="textContainer"
                    style="border-radius: 4px; margin: 50px 0px 0px; border-color: rgb(51, 51, 51); padding: 1px 100px;">
                      <div style="text-align: center;">
                        <span style="line-height: 1.428571429; background-color: transparent;">
                          <font color="#C7A761">&quot;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                          ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                          reprehenderit&quot;</font>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="simblaEL tc" data-drag="29" id="29">
                    <div class="textContainer" style="border-radius: 4px; margin-top: 20px;">
                      <div style="text-align: center;">
                        <span style="line-height: 1.428571429; background-color: transparent;">
                          <b>
                            <font color="#C7A761">Jack huges, Construction business owner</font>
                          </b>
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="simblaEL containerHolder" data-drag="MP9" id="MP9" style="">
          <div class="container" data-border-type="All"
          style="width: 100%; border: 1px solid rgb(193, 193, 193); border-radius: 0px; background-color: rgb(28, 47, 64);">
            <div class="simblaEL containerHolder" data-drag="MP37" id="MP37">
              <div class="container">
                <div class="simblaEL tc" data-drag="MP10" id="MP10">
                  <div class="textContainer"
                  style="cursor: text; border-top-left-radius: 4px; border-top-right-radius: 4px; border-bottom-right-radius: 4px; border-bottom-left-radius: 4px; margin-top: 30px; font-family: &#39;Montserrat&#39;, sans-serif;">

                    <h3 style="text-align: center;">
                      <font color="#C7A761" style="font-size: 24px;">OUR OFFICES</font>
                    </h3>
                  </div>
                </div>
                <div class="simblaEL simblaImg" data-drag="MP11" id="MP11">
                  <img class="" src="images/9076-w6zzwi.png" alt="seperator gold.png" data-id="" title="seperator gold.png"
                  style="border-top-left-radius: 0px; border-top-right-radius: 0px; border-bottom-right-radius: 0px; border-bottom-left-radius: 0px; margin-top: 15px;" />
                </div>
                <div class="row simblaEL rDivider" data-drag="MP13" id="MP13"
                style="border-top-left-radius: 0px; border-top-right-radius: 0px; border-bottom-right-radius: 0px; border-bottom-left-radius: 0px; margin-top: 20px;">

                  <div class="sDivider col-md-4 index0" data-colsize="4" style="">
                    <div class="row simblaEL rDivider" data-drag="MP28" id="MP28" data-border-type="Bottom"
                    style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: rgb(199, 167, 97); border-radius: 0px;">

                      <div class="sDivider col-md-1 index0" data-colsize="1">
                        <div class="simblaEL iconElm" data-drag="MP29" id="MP29"></div>
                      </div>
                      <div class="sDivider col-md-11 index1" data-colsize="11">
                        <div class="simblaEL tc" data-drag="MP14" id="MP14">
                          <div class="textContainer"
                          style="cursor: text; padding-bottom: 15px; font-family: Montserrat, sans-serif; border-radius: 4px;"
                          data-border-type="All">
                            <div class="simblaEL simblaImg"> 
                            <font color="#C7A761" style="font-size: 18px;">About</font></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="simblaEL tc" data-drag="MP17" id="MP17">
                      <div class="textContainer" style="cursor: text; border-radius: 0px; padding: 15px 50px 1px 0px;">
                        <font color="#C7A761">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                        Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a
                        galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but
                        also the leap into electronic typesetting, remaining essentially unchanged. </font>
                      </div>
                    </div>
                  </div>
                  <div class="sDivider col-md-4 index1" data-colsize="4" style="">
                    <div class="row simblaEL rDivider" data-drag="MP30" id="MP30" data-border-type="Bottom"
                    style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: rgb(199, 167, 97); border-radius: 0px;">

                      <div class="sDivider col-md-1 index0" data-colsize="1">
                        <div class="simblaEL iconElm" data-drag="MP31" id="MP31"></div>
                      </div>
                      <div class="sDivider col-md-11 index1" data-colsize="11">
                        <div class="simblaEL tc" data-drag="MP15" id="MP15">
                          <div class="textContainer"
                          style="cursor: text; padding-bottom: 15px; font-family: Montserrat, sans-serif; border-radius: 4px;"
                          data-border-type="All">
                            <div class="simblaEL simblaImg">
                              <font color="#C7A761" style="font-size: 18px;">Offices</font>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row simblaEL rDivider" data-drag="MP18" id="MP18"
                    style="border-top-left-radius: 0px; border-top-right-radius: 0px; border-bottom-right-radius: 0px; border-bottom-left-radius: 0px; margin-top: 15px;">

                      <div class="sDivider col-md-2 index0" data-colsize="2">
                        <div class="simblaEL iconElm" data-drag="MP34" id="MP34"></div>
                      </div>
                      <div class="sDivider col-md-10 index1" data-colsize="10">
                        <div class="simblaEL tc" data-drag="MP19" id="MP19">
                          <div class=" textContainer" style="cursor: text;">
                            <font color="#C7A761">5th Avenue, New York, USA</font>
                            <div>
                              <font color="#C7A761">+1-232-456789</font>
                            </div>
                            <div>
                              <font color="#C7A761">+1-232-456789</font>
                            </div>
                            <div>
                              <font color="#C7A761">info@company.com</font>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row simblaEL rDivider" data-drag="MP20" id="MP20"
                    style="border-top-left-radius: 0px; border-top-right-radius: 0px; border-bottom-right-radius: 0px; border-bottom-left-radius: 0px; margin: 40px 0px 0px;">

                      <div class="sDivider col-md-2 index0" data-colsize="2">
                        <div class="simblaEL iconElm" data-drag="MP35" id="MP35"></div>
                      </div>
                      <div class="sDivider col-md-10 index1" data-colsize="10">
                        <div class="simblaEL tc" data-drag="MP23" id="MP23">
                          <div class=" textContainer" style="cursor: text;">
                            <font color="#C7A761">Monday-Friday: 08am to 9pm</font>
                            <div>
                              <font color="#C7A761">Saturday: 09am to 3pm</font>
                            </div>
                            <div>
                              <font color="#C7A761">Sunday: closed
                              <br /></font>
                              <div>
                                <br />
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="sDivider col-md-4 index2" data-colsize="4" style="">
                    <div class="row simblaEL rDivider" data-drag="MP32" id="MP32" data-border-type="Bottom"
                    style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: rgb(199, 167, 97); border-radius: 0px;">

                      <div class="sDivider col-md-1 index0" data-colsize="1">
                        <div class="simblaEL iconElm" data-drag="MP33" id="MP33"></div>
                      </div>
                      <div class="sDivider col-md-11 index1" data-colsize="11">
                        <div class="simblaEL tc" data-drag="MP16" id="MP16">
                          <div class="textContainer"
                          style="cursor: text; padding-bottom: 15px; font-family: Montserrat, sans-serif; border-radius: 4px;"
                          data-border-type="All">
                            <div class="simblaEL simblaImg">
                              <font color="#C7A761">
                                <font style="font-size: 18px;">Social</font>
                              </font>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="simblaEL tc" data-drag="MP24" id="MP24">
                      <div class=" textContainer"
                      style="cursor: text; border-top-left-radius: 0px; border-top-right-radius: 0px; border-bottom-right-radius: 0px; border-bottom-left-radius: 0px; padding: 1px 50px 1px 0px; margin-top: 15px;">

                        <font color="#C7A761">Lorem Ipsum is simply dummy text of the printing and typesetting industry.  Lorem
                        Ipsum has been the industry&#39;s standard dummy text.</font>
                      </div>
                    </div>
                    <div class="simblaEL simblaImg" data-drag="MP25" id="MP25" style="">
                      <img class="" src="images/20230-z847r0.png" alt="" data-id="" title=""
                      style="margin-left: 0px; border-top-left-radius: 0px; border-top-right-radius: 0px; border-bottom-right-radius: 0px; border-bottom-left-radius: 0px; margin-top: 60px;" />
                    </div>
                  </div>
                </div>
                <div class="row simblaEL rDivider" data-drag="MP38" id="MP38">
                  <div class="sDivider col-md-5 index0" data-colsize="5"></div>
                  <div class="sDivider col-md-2 index1" data-colsize="2">
                    <div class="simblaEL simblaImg" data-drag="MP26" id="MP26" style="">
                      <img class="" src="images/18704-w4ptng.png" alt="leonard1.png" data-id="" title="leonard1.png"
                      style="margin-top: 60px;" />
                    </div>
                    <div class="simblaEL tc" data-drag="MP27" id="MP27">
                      <div class="textContainer" style="margin-top: 10px; margin-bottom: 60px; cursor: text;">
                        <div style="text-align: center;">
                          <span style="line-height: 1.428571429; background-color: transparent;">
                            <font color="#3B4956">all rights reserved</font>
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="sDivider col-md-5 index2" data-colsize="5"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--.container-->
    </div>
    <a href="http://www.simbla.com" target="_blank" id="linkToSimbla">
    <span class="main">SIMBLA</span> 
    <span class="s">Website Builder</span></a>
    <script src="js/bootstrap3.min.js"></script>
    <script src="js/simbla.js"></script>
    <script>
 WebFontConfig = {
    google: {families: [ &#39;Cantata+One::latin&#39;, &#39;Montserrat::latin&#39;, &#39;Open+Sans:300:latin&#39; ] }
  };
  (function() {
    var wf = document.createElement(&#39;script&#39;);
    wf.src = (&#39;https:&#39; == document.location.protocol ? &#39;https&#39; : &#39;http&#39;) +
      &#39;://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js&#39;;
    wf.type = &#39;text/javascript&#39;;
    wf.async = &#39;true&#39;;
    var s = document.getElementsByTagName(&#39;script&#39;)[0];
    s.parentNode.insertBefore(wf, s);
  })();
var jumboHeight = $(&#39;.jumbotron&#39;).outerHeight();
function parallax(){
    var scrolled = $(window).scrollTop();
    $(&#39;.bg&#39;).css(&#39;height&#39;, (jumboHeight-scrolled) + &#39;px&#39;);
}

$(window).scroll(function(e){
    parallax();
});
</script>
  </body>
</html>
