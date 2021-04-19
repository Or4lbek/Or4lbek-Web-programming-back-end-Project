<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>
            Almaty Credo
        </title>
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@500&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@700&family=Raleway:wght@600&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <link rel="stylesheet" type="text/css" href="lightbox.min.css">
        <script src="lightbox-plus-jquery.min.js"></script>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link rel="stylesheet" href="fontawesome-free/css/all.min.css">

        <link rel="icon" href="log.ico">

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body data-spy="scroll" data-target=".navbar" onload = "load()">
        <div class="page">
        <div id="credo1" class="header">
                <div class = "container1">
                    <div class="navbar">
                        <label for="toggle">&#9776;</label>
                    </div>
                    <input type="checkbox" name="" id="toggle">
                    <div class="header_innner">
                        <div class="nav">
                            <div><a class= "nav_link" href="#">{{__('index.header_1')}}</a></div>
                            <div><a class= "nav_link" href="#about_us">{{__('index.header_2')}}</a></div>
                            <div><a class= "nav_link" href="#Services">{{__('index.header_3')}}</a></div>
                            <div><a class= "nav_link" href="#cont">{{__('index.header_4')}}</a></div>
                        </div>
                        
                        <div class="header_logo"  onclick="window.location.reload()">
                            <img id="img1" src="images/Credo 22 png.png", height="70px">
                            
                        </div>
                        @php $locale = session()->get('locale'); @endphp
					<li class="nav-item dropdown">
						 <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                     @switch($locale)
                        @case('en')
                                <img src="{{asset('images/us.png')}}"> {{__('English') }}
                               @break
                          @case('ru')
                                <img  src="{{asset('images/ru.png')}}"> {{__('Russian') }}
                                @break
                         @default
                                <img src="{{asset('images/us.png')}}"> English
                            @endswitch

						<span class="caret"></span>
						</a>
						<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="/en"><img src="{{asset('images/us.png')}}"> English</a>
                            <a class="dropdown-item" href="/ru"><img src="{{asset('images/ru.png')}}"> Russian</a>

                        </div>
					</li>
				</ul>
				</div>
			</div>
		</nav>
 <main class="py-4">
        @yield('content')
    </main>
                    </div>
                    <img class="blin" id="img111" src="images/credo/Credo_2_png-removebg-preview.png", height="100px">
                </div>
           
        </div>
        <div class="main">
            <div class="container_main"></div>
            
                <div class="sub_container">
                <div class = "intro_img">
                    <img src="images/credo/credo a.png">
                </div>

				<div class="intro_inner">
					<h1 class="intro_title">
                        <strong>{{__('index.title')}}</strong>
                    </h1>
                    <p class="intro_subtitle">
                    {{__('index.subtitle')}}
                    </p>
                </div>
                </div>
            </div>
        </div>
        
        <div class="popup">
         <div class="popup-content">
         <form action = "/" method="POST"  enctype="multipart/form-data">

            <img onclick = "close_popup()" class = "x1" src="images/closed.png" width="5%">
            <img  src="images/Credo 33 png.png" width="40%" style="margin-top: 30px;margin-bottom: 30px;">
            <p>{{__('index.connect')}}</p>
            @csrf
            <input id="username" type="text" name="username" placeholder={{__('index.place_name')}}>
            <input  id ="usernumber" type="text" name="num" placeholder={{__('index.place_number')}}>
            <input  id ="usermail" type="text" name="mail" placeholder={{__('index.place_mail')}}>

            <button type="submit" id = "question"  onclick = "close_popup()" class="btn btn-success" style="color: #fff;">{{__('index.button_submit')}}</button>

         </form>
          </div>
         </div>
     </div>
        <br>
        <br>
        <br>


        <div class="about_us_main">
            <div class="about_us_content">
                <div class="giff_au">
                    <h2 id="about_us_text">{{__('index.title_company')}}</h2>
                    <img src="https://images.bhaskarassets.com/web2images/521/2019/04/27/0521_desktop.gif"  width="80%">    
                </div>
                <div class="a_main_text1">
                    <div class="text1">{{__('index.subtitle_company')}}</div> 
                    <div onclick="popup()" class="botton_info" ><button type="button" class="btn btn-outline-info">{{__('index.button_feedback1')}}</button></div>
                </div>
            </div>

        <br>
        <br>
        <section id="about_us">
            <div class="company" >
                <div class = "box1">
                    <div class="box1_content">
                        <h1>{{__('index.update_title')}}</h1>
                        <br>
                        <p>{{__('index.update_subtitle')}}</p>
                    </div>
                </div>
                <div class = "box2">
                    <img id = "boximg2"src="images/one.png" height="95px">
                    <br>
                    <img id="master" src="images/master.png" height="130px">
                    <p >{{__('index.one')}}</p>
                </div>
                <div class = "box3">
                    <img id = "boximg3"src="images/two.png" width="100px">
                    <br>
                    <img id="structure" src="images/structure.png" height="150px">
                    <p id="s_text">{{__('index.two')}}</p>
                </div>
                <div class = "box4">
                    <img id = "boximg4"src="images/three.png" width="130px">
                    <img id="rocket" src="images/rocket.png" height="150px">
                    <p id="r_text">{{__('index.there')}}</p>
                </div>
            </div>
        </div>
        </div>
        </section>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="video-box">
            <h3 class="posmotri_video">{{__('index.title_video')}}</h3>
            <img class="phon" src="images/Times-Square-7.JPG" height="550px" width="100%">

            <div onclick="popup_video()" class="play-btn">
                <i class="fa fa-play" aria-hidden="true"></i>
            </div>
        
            <div class="popup_video" onclick="close_popup_video()">
               <!---<img  onclick="close_popup_video()" class="x" src="closed.png" width="10%">--> 
                <video id = "video1" width="720" height="480" controls>
                    <source src="images/play.mp4" type="video/mp4">
                        Credo
                </video>
            </div>
        </div>
        <br>
        <br>
        <br>
        <div class="uslugi">
            <h2>{{__('index.services')}}</h2>
        </div>
        <div id ="Services" class="company2">
            
            <div class="gallery swiper-container">
                <div class="gallery_list swiper-wrapper">
                    <div class="gallery_item swiper-slide">
                        <img src="images/stroke2.png" alt="alt">
                        <div class="text">
                            <h3 class="title">{{__('index.c1_title')}}</h3>
                            <p>
                            {{__('index.c1_subtitle')}}
                            </p>
                        </div>
                    </div>
        
                    <div class="gallery_item swiper-slide">
                        <img src="images/mantana.png" alt="alt">
                        <div class="text">
                            <h3 class="title">{{__('index.c2_title')}}</h3>
                            <p>
                            {{__('index.c2_subtitle')}} </p>
                        </div>
                    </div>
        
                    <div class="gallery_item swiper-slide">
                        <img src="images/banner1.png" alt="alt">
                        <div class="text">
                            <h3 class="title">{{__('index.c3_title')}}</h3>
                            <p>
                            {{__('index.c3_subtitle')}}            
                            </p>
                        </div>
                    </div>

                    
                    <div class="gallery_item swiper-slide">
                        <img src="images/cars.png" alt="alt">
                        <div class="text">
                            <h3 class="title">{{__('index.c4_title')}}</h3>
                            <p>
                            {{__('index.c4_subtitle')}}                      
                            </p>
                        </div>
                    </div>
        

                    <div class="gallery_item swiper-slide">
                        <img src="images/kaz2.png" alt="alt">
                        <div class="text">
                            <h3 class="title">{{__('index.c5_title')}}</h3>
                            <p>
                            {{__('index.c5_subtitle')}}
                            </p>
                        </div>
                    </div>

                    <div class="gallery_item swiper-slide">
                        <img src="images/ramsey.png" alt="alt">
                        <div class="text">
                            <h3 class="title">{{__('index.c6_title')}}</h3>
                            <p>
                            {{__('index.c6_subtitle')}}
                            </p>
                        </div>
                    </div>

                    <div class="gallery_item swiper-slide">
                        <img src="images/litebox2.png" alt="alt">
                        <div class="text">
                            <h3 class="title">{{__('index.c7_title')}}</h3>
                            <p>
                            {{__('index.c7_subtitle')}}
                            </p>
                        </div>
                    </div>

                    <div class="gallery_item swiper-slide">
                        <img src="images/zona.png" alt="alt">
                        <div class="text">
                            <h3 class="title">{{__('index.c8_title')}}</h3>
                            <p>
                            {{__('index.c8_subtitle')}}   
                            </p>
                        </div>
                    </div>

                    

                    
                </div>
            </div>
        </div>
        

        <div class="btn_div">
            <button onclick="displayFn()" id="Btn">&#8595;</button>
        </div>
        <div id="second_gallery">
            <div id="gallery_2">
                <a href="images/mantana3.png" data-lightbox="mygallery" data-title=""><img src="images/mantana3.png" width="450px"></a>
                <a href="images/lemon.png" data-lightbox="mygallery" data-title=""><img src="images/lemon.png"  width="450px"></a>
                <a href="images/stol3.png" data-lightbox="mygallery" data-title=""><img src="images/stol3.png"  width="450px"></a>
                <a href="images/ramsey.png" data-lightbox="mygallery" data-title=""><img src="images/ramsey.png"  width="450px"></a>
                <a href="images/old.png" data-lightbox="mygallery" data-title=""><img src="images/old.png"  width="450px"></a>
                <a href="images/tolebi3.png" data-lightbox="mygallery" data-title=""><img src="images/tolebi3.png"  width="450px"></a>
                <a href="images/qaharman.png" data-lightbox="mygallery" data-title=""><img src="images/qaharman.png" width="450px"></a>
                <a href="images/stol 2.png" data-lightbox="mygallery" data-title=""><img src="images/stol 2.png"  width="450px"></a>
                <a href="images/mantana.png" data-lightbox="mygallery" data-title=""><img src="images/mantana.png"  width="450px"></a>
                <a href="images/med 2.png" data-lightbox="mygallery" data-title=""><img src="images/med 2.png"  width="450px"></a>
                <a href="images/sarai.png" data-lightbox="mygallery" data-title=""><img src="images/sarai.png"  width="450px"></a>

                <a href="images/lemon 2.png" data-lightbox="mygallery" data-title=""><img src="images/lemon 2.png"  width="450px"></a>
                <a href="images/med.png" data-lightbox="mygallery" data-title=""><img src="images/med.png"  width="450px"></a>
                <a href="images/krisha.png" data-lightbox="mygallery" data-title=""><img src="images/krisha.png"  width="450px"></a>
                <a href="images/atakent.png" data-lightbox="mygallery" data-title=""><img src="images/atakent.png"  width="450px"></a>
                <a href="images/lame.png" data-lightbox="mygallery" data-title=""><img src="images/lame.png"  width="450px"></a>

                <a href="images/rich.png" data-lightbox="mygallery" data-title=""><img src="images/rich.png"  width="450px"></a>
                <a href="images/work.png" data-lightbox="mygallery" data-title=""><img src="images/work.png"  width="450px"></a>
                <a href="images/karakat.png" data-lightbox="mygallery" data-title=""><img src="images/karakat.png"  width="450px"></a>
                <a href="images/arti.png" data-lightbox="mygallery" data-title=""><img src="images/arti.png"  width="450px"></a>
                <a href="images/lite.png" data-lightbox="mygallery" data-title=""><img src="images/lite.png"  width="450px"></a>
            </div>
        </div>
        </div>
        <br>
        <br>
        <br>

        <div class="about_work">
            <h3>{{__('index.scheme')}}</h3>
            <div class="container_about_work">
                <div class="process1">
                    <img src="images/call.png" width="95%">
                    <p>{{__('index.scheme_1')}}</p>
                </div>
                <div class="process2">
                    <img src="images/develop.png" width="95%">
                    <p>{{__('index.scheme_2')}}</p>
                </div>
                <div class="process3">
                    <img src="images/cost.png" width="95%">
                    <p>{{__('index.scheme_3')}}</p>
                </div>
                <div class="process4">
                    <img src="images/bilbord.png" width="95%">
                    <p>{{__('index.scheme_4')}}</p>
                </div>
                <div class="process5">
                    <img src="images/pay.png" width="95%">
                    <p>{{__('index.scheme_5')}}</p>
                </div>
                <div class="process6">
                    <img src="images/download.png" width="95%">
                    <p>{{__('index.scheme_6')}}</p>
                </div>
            </div>
        </div>
        <div class="feedback">
            <center>
                <form action = "/question" method="POST"  enctype="multipart/form-data">
                    <fieldset>
                        <legend align="center"><h3>{{__('index.Leave messages')}}</h3> </legend>
                        <table>
                            @csrf
                            <tr>
                                <td><label for = ""><h5>{{__('index.enter_name')}}</h5></label></td>
                                <td><input type = "text" placeholder = {{__('index.place_name')}} style="color: #000;" name="name"></td>
                            </tr>
                            <tr>
                                <td><label for = ""><h5>{{__('index.e_email')}}</h5></label></td>
                                <td><input type = "text" placeholder = {{__('index.place_mail')}} style="color: #000;" name="email"></td>
                            </tr>
                            <tr>
                                <td><label for = ""><h5>{{__('index.e_message')}}</h5> </label></td>
                                <td><textarea type = "text" placeholder = {{__('index.place_message')}} cols="50" rows="7" style="color: #000; margin-left: 125px" name="question"></textarea></td>
                            </tr>
                            <tr>
                                <td><label for = ""><h5>{{__('index.e_image')}}</h5> </label></td>
                                <td><input type="file" name="file"></td>
                            </tr>
                        </table>
                        <button type="submit" id = "question"  onclick = "" class="btn btn-outline-success" >{{__('index.submit_just')}}</button>
                    </fieldset>
    
                </form>
            </center>
        </div>
        <br>
        <br>
        <br>
        <h3 id="cont">
        {{__('index.find')}}
        </h3>
        <div class="footer">
            
            <div class="container_footer">
            <div class="mesenger">
                <div class="instagram_c">
                    <a href="https://www.instagram.com/reklama_almaty_credo/"><img class="instagram"  src="images/instagram.png" width="8%"></a>
                    <a href="https://www.instagram.com/reklama_almaty_credo/"><p  class="p1w" id="block1"><i class="fab fa-instagram"></i> @reklama_almaty_credo</p></a>
                </div>
                <div class="telegram_c">
                    <a href="https://t.me/Or4lbek"><img class="telegram" src="images/telegram.png" width="8%"></a>
                    <a href="https://t.me/Or4lbek"><p class = "p2w" id="block1"><i class="fab fa-telegram"></i> @almaty_credo</p></a>
                </div>
                <div class="whatsapp_c">
                    <a href="https://wa.me/77072060141"><img class="whatsapp" src="images/whatsapp2.png" width="8%" style="color: #fff;"></a>
                    <a href="https://wa.me/77072060141"><p class = "p3w" id="block1"><i class="fab fa-whatsapp"></i> +77072060141</p></a>
                </div>
                <div class="ad">
                    <a href="https://www.google.com/maps/place/Credo+Almaty/@43.224396,76.829279,17z/data=!4m5!3m4!1s0x0:0x10a246d84562fa65!8m2!3d43.224396!4d76.8292794?hl=ru"><img class="ad_img" src="location.png" width="8%"></a>
                    <a href="https://www.google.com/maps/place/Credo+Almaty/@43.224396,76.829279,17z/data=!4m5!3m4!1s0x0:0x10a246d84562fa65!8m2!3d43.224396!4d76.8292794?hl=ru"><p class = "p4w" id="block1"><i class="fas fa-map-marker-alt"></i>   <strong>{{__('index.address')}}</strong></p></a>
                </div>
            </div>
           
            <div class="address_footer">
                    <div class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d726.8222985089379!2d76.82927939999999!3d43.224396!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x388369e7cc065b9f%3A0x10a246d84562fa65!2sCredo%20Almaty!5e0!3m2!1sru!2skz!4v1605701398248!5m2!1sru!2skz" width="600" height="200" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
            </div>
            </div>
           
        </div>

        
 
        <p id="sdu">©SDU</p>
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
        <script type="text/javascript"  src="js/main.js ">
        </script>
        </div>
        
       
    </body>
</html>