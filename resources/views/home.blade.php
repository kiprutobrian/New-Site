@extends('layouts.default')
@section('content')
    
<div class="container-fluid partners block-content">
        <div class="hgroup title-space wow fadeInRight" data-wow-delay="0.3s">
                <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-8">
                                <div class="card">                    
                                    <div class="card-body">
                                        @if (session('status'))
                                            <div class="alert alert-success" role="alert">
                                                {{ session('status') }}
                                            </div>
                                        @endif                                                                        
                                            <h1 >Brian Welcome</h1>
                                            <h2>You are logged in!</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        </div>
    </div>

  
    <div class="col-lg-12 ">
            <div  class="owl-carousel enable-owl-carousel" data-single-item="true"
            data-pagination="false" data-auto-play="true" data-main-slider="true" data-stop-on-hover="true">
       
               <div class="item">
                   <img src="image/bg/1.jpg" alt="slider">
                   <div class="container-fluid">
                       <div class="slider-content col-md-6 col-lg-6">
                           <div style="display:table;">
                               <div style="display:table-cell; width:100px; vertical-align:top;">
                                   <a class="prev"><i class="fa fa-angle-left"></i></a>
                                   <a class="next"><i class="fa fa-angle-right"></i></a>
                               </div>
                               <div style="display:table-cell;">
                                   <h1>BIENVENIDOS A <BR/>ASESORIA & CONSULTORIAS</h1>
                               </div>
                           </div>
                           <p>Contadores Publicos Especialistas en Politica y Legislacion Tributaria<br><a class="btn btn-success" href="#">AMPLIAR</a></p>
                       </div>
                   </div>
               </div>
           </div>
            <br>
        </div>
        <hr>
    
    <div class="container-fluid" >
        <div class="row column-info block-content">
            <div class="col-sm-4 col-md-8 col-lg-8 wow fadeInLeft" data-wow-delay="0.1s">
                <img src="image/bg/4.jpg" style="height:190px;" alt="slider">
                <span></span>
                <h3>FISCAL REVIEW FOCUSED ON </h3>
                <p align="justify"><p>The performance of the Statutory Audit is based on the applicability of the current regulations 
                    that indicate the fiscal control of the economic entity, guaranteeing ..  </p></p>
                <a class="btn btn-default btn-sm" href="/servicios1">MORE INFORMATION</a>
            </div>
            <?}?>
        </div>
    </div>
    
    <hr>
    <div class="big-hr color-1 wow zoomInUp" data-wow-delay="0.4s">
        <div class="text-left" style="margin-right:40px;">
            <h2>SUBSCRIBE TO OUR SITE AND RECEIVE INFORMATION OF INTEREST</h2>
            <p>Public Accountants Specialists in Politics and Tax Legislation</p>
        </div>
        <div><a class="btn btn-success btn-lg" href="#">SUBSCRIBE NOW</a></div>
    </div>
  
 
    <div class="block-content bg-image blog-section inner-offset">
        <div class="container-fluid">
            <div class="hgroup wow fadeInLeft" data-wow-delay="0.3s">
                <h1>ULTIMAS PUBLICACIONES</h1>
                <h2>Recent Posts</h2>
            </div>
            <a class="btn btn-danger pull-right read-all-news wow fadeInRight" data-wow-delay="0.3s" href="">SEE ALL PUBLICATIONS</a>
            <div class="row">

                <div class="col-sm-6 col-md-6 col-lg-6 one-news wow fadeInLeft" data-wow-delay="0.3s">
                    <div style="background-image:url(image/bg/4.jpg);">
                        <div>
                            <a href="/detalles"><h3>More than 2,000 companies of the first group have hosted the Niif</h3></a>
                            
                            <small>25/2/2016</small>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6 two-news wow fadeInRight" data-wow-delay="0.3s">

                    <div class="news-item row">
                        <div class="col-sm-6 col-md-6 col-lg-6">
                            <div style="background-image:url(image/bg/1.jpg);"></div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-6">
                            <div>
                                <a href="/detalles>"><h3>MMore than 2,000 companies of the first group have hosted the Niif</h3></a>
                               
                                <small>26/2/2016</small>
                            </div>
                        </div>
                    </div>
                    <?}?>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container-fluid partners block-content">
        <div class="hgroup title-space wow fadeInLeft" data-wow-delay="0.3s">
            <h1>Alianzas</h1>
            <h2>Alianzas con Nosotros</h2>
        </div>
        <div id="partners" class="owl-carousel enable-owl-carousel" data-pagination="false" data-navigation="true" data-min450="2" data-min600="2" data-min768="4">

            <div class="wow rotateIn" data-wow-delay="0.3s"><a href="#"><img src="image/bg/4.jpg" alt="Img"></a></div>
               <?}?>
        </div>
    </div>


@endsection
