<x-guest-layout>
    
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">

    {{-- START OF HERO PAGE --}}
        <section id="heroSection" class="carousel slide col-12 pt-3 pb-5" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{url('/images/carousel1.png')}}" alt="carousel1" class="img-fluid"/>                
                </div>
                <div class="carousel-item">
                    <img src="{{url('/images/carousel2.png')}}" alt="carousel2" class="img-fluid"/>
                </div>
                <div class="carousel-item">
                    <img src="{{url('/images/carousel3.png')}}" alt="carousel3" class="img-fluid"/>
                </div>        
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#heroSection" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <!--End ofPrev Button-->
            <button class="carousel-control-next" type="button" data-bs-target="#heroSection" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
            <!--End of Next Button-->   
        </section>
        
    {{--END OF HERO PAGE  --}}
    
    <div class="row">
            <div class="col-12 text-center py-3 ">
                <h1>Artemis Organization</h1>
            </div>
           
            <div class="col-lg-1"></div>
            
            <div class="col-lg-10 col-12 text-jindigo">

                <div class="container">
                    <div class="row no-gutters">
                    <div class="col-lg-4 col-md-6">
                        <div class="icon-box">
                        <h3 ><i class="fa-solid fa-pen-to-square" ></i></h3>
                        <h4 class="title">Book an Appointment with Us</h4>
                        <p class="description">Fill up the user information form and check the available appointment near you.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="icon-box">
                            <h3 ><i class="fa-brands fa-readme"></i></h3>
                        <h4 class="title">Read About Birth Control</h4>
                        <p class="description">Learn more about birth control and how to support fellow women and youth to achieve sexual and reproductive health and rights.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="icon-box">
                            <h3 ><i class="fa-solid fa-people-roof"></i></h3>
                        <h4 class="title">Be part of the Community</h4>
                        <p class="description">Join the conversation and stay connected with the community.</p>
                        </div>
                    </div>
                    </div>
            
                </div>
                <br /><br />   
  
                <div class="bg-carmine text-bubbles col-12 pt-5 p-3 text-center">
                    <h2>Office Locations</h2>
                    <div class="container py-2">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="container p-2">
                                    <h4>Main Office</h4>
                                    <p>27 Ofelia St., Brgy. Bahay Toro, Project 8, Quezon City</p>
                                    <p>Monday 8AM to 3PM</p>
                                    <p>(02) 7116 6587</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="container p-2">
                                    <h4>E. Samar</h4>
                                    <p>Brgy. 05, Giporlos Municipality, E. Samar</p>
                                    <p>Tuesday 8AM to 3PM</p>
                                    <p>0908 827 2017</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="container p-2">
                                    <h4>Bulacan</h4>
                                    <p>Ebenezer Compound Hi-Way Brgy., Sto. Cristo, San Jose Del Monte, Bulacan</p>
                                    <p>Tue - Sat 8AM to 3PM</p>
                                    <p>0968 369 2079</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="container p-2">
                                    <h4>Pasay</h4>
                                    <p>704-A52 Apelo Cruz St., Brgy. 157, Pasay City</p>
                                    <p>Monday 8AM to 3PM</p>
                                    <p>0939 870 5370</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="container p-2">
                                    <h4>San Andres</h4>
                                    <p>2362-C Crisolita St., Brgy. 804, San Andres Bukid, Manila</p>
                                    <p>Tue - Sat 8AM to 3PM</p>
                                    <p>(02) 9732 0327</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="container p-2">
                                    <h4>Zaragosa</h4>
                                    <p>354 Zaragosa St., Brgy 13 Tondo, Manila</p>
                                    <p>Tue - Sat 8AM to 3PM</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="container p-2">
                                    <h4>Lila</h4>
                                    <p>i1909 Road 10, Brgy. 107 Tondo, Manila</p>
                                    <p>Tue - Sat 8AM to 3PM</p>
                                    <p>(02) 7975 9055</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="container p-2">
                                    <h4>Kai Center</h4>
                                    <p>TCI Building (1st Floor) Brgy. 128 Tondo Manila (Smokey Mountain)</p>
                                    <p>Tue - Sat 8AM to 3PM</p>
                                    <p>0968 297 4171</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="container p-2">
                                    <h4>Navotas</h4>
                                    <p>TCI Building (1st Floor) Brgy. 128 Tondo Manila (Smokey Mountain)</p>
                                    <p>Tue - Sat 8AM to 3PM</p>
                                    <p>0968 297 4171</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="container p-2">
                                    <h4>Cavite</h4>
                                    <p>TCI Building (1st Floor) Brgy. 128 Tondo Manila (Smokey Mountain)</p>
                                    <p>Tue - Sat 8AM to 3PM</p>
                                    <p>0968 297 4171</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br />
                {{-- <div class="row">
                    <div class="fb-grid col-12">
                            <div class="text-center  container-fluid py-4 bg-diamond fb-div" >
                                <h2 class="p-3">Facebook Feed</h2>
                                <div class="fb-post container-fluid p-1" data-href="https://web.facebook.com/ArtemisHealthNGO/posts/pfbid0xkWduf58SNCihmfstVM5HnoBPAjSpMfBngXG3HmoiDygjL5dRXezsDGgaTN1RMkDl" data-width="" data-show-text="true"><blockquote cite="https://www.facebook.com/ArtemisHealthNGO/posts/102331439292431" class="fb-xfbml-parse-ignore"><p>Anti-VAW (violence against women) info</p>Posted by <a href="https://www.facebook.com/ArtemisHealthNGO/">Artemis Organization</a> on&nbsp;<a href="https://www.facebook.com/ArtemisHealthNGO/posts/102331439292431">Monday, September 5, 2022</a></blockquote></div>
                                <div class="fb-post container-fluid p-1 f-post" data-href="https://www.facebook.com/ArtemisHealthNGO/posts/pfbid02G94r7J3ovnmp1CKHhqHkBYPdc6NKHMSjyPMStA6rYEgwugADi78RXgQv4YuwJGbjl" data-width="" data-show-text="true"><blockquote cite="https://www.facebook.com/ArtemisHealthNGO/posts/102144049311170" class="fb-xfbml-parse-ignore"><p>PSA: HAVING SAFE SEX IS AN OPTION!
                                    Together with the Safe in Cyberspace Youth Fellowship  and UP Center for Women&#039;s and...</p>Posted by <a href="https://www.facebook.com/ArtemisHealthNGO/">Artemis Organization</a> on&nbsp;<a href="https://www.facebook.com/ArtemisHealthNGO/posts/102144049311170">Sunday, September 4, 2022</a></blockquote></div>
                            </div>
                            <div class="text-center container-fluid py-4 bg-diamond fb-div">
                                <h2 class="p-3">Featured Posts</h2>
                                <div class="fb-post container-fluid p-1" data-href="https://www.facebook.com/ArtemisHealthNGO/posts/pfbid02G94r7J3ovnmp1CKHhqHkBYPdc6NKHMSjyPMStA6rYEgwugADi78RXgQv4YuwJGbjl" data-width="" data-show-text="true"><blockquote cite="https://www.facebook.com/ArtemisHealthNGO/posts/102144049311170" class="fb-xfbml-parse-ignore"><p>PSA: HAVING SAFE SEX IS AN OPTION!
                                    Together with the Safe in Cyberspace Youth Fellowship  and UP Center for Women&#039;s and...</p>Posted by <a href="https://www.facebook.com/ArtemisHealthNGO/">Artemis Organization</a> on&nbsp;<a href="https://www.facebook.com/ArtemisHealthNGO/posts/102144049311170">Sunday, September 4, 2022</a></blockquote></div>
                            </div>
                    </div>
                </div> --}}
                <br />
            </div>
            <div class="col-lg-1"></div>
        </div>
    </div>

</x-guest-layout>
