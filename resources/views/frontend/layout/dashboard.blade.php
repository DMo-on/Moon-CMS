@extends('frontend/layout/layout')
@section('content')
@include('frontend/layout/menu')
{!! HTML::style("frontend/css/style.css") !!}
{!! HTML::script("frontend/js/theme.js") !!}


    <section id="banner" class="banner banner-huge banner-jumbotron" style="background-image: url('frontend/images/bg2.jpg');">

    <header id="header">
    <div class="container">

        <nav class="navbar">
            <div class="container-fluid">

                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="navigation"
                            data-target="#top-navbar">
                        <i class="fa fa-bars "></i>
                    </button>


                </div>

                <div class="collapse navbar-collapse" id="top-navbar">
                    
<ul class="nav navbar-nav navbar-right">
    
                <a 
                   href="https://pyrocms.com/login?redirect=https://pyrocms.com"
                target="_self"
                class=" ">
                   
        </a>
    
</ul>

                </div>

            </div>
        </nav>

    </div>
</header>

    
    <div class="banner-inner vertical-align">
        <div class="col-sm-7 col-lg-10 text-center">

            <h1 class="hidden-xs">
                Bienvenue chez <span class="typed" data-replace="[&quot;Moun.&quot;,&quot;Mounn.&quot;,&quot;Moon.^5000&quot;]">Moon.</span>
            </h1>

            <p>
                Le blog des passionés d'astronomie.
            </p>

            <a href="#" class="btn btn-sm btn-primary btn-rounded btn-gradient btn-xl text-uppercase">
                Blog
            </a>

        </div>
    </div>

</section>


@include('frontend/layout/project', $projects)

<section id="" class="">
           <div class="block">

    <div class="container-fluid vertical-align">

        <div class="col-lg-12">
            <div class="block-content text-center">

                
                <h2 class="block-title">
                    <small>Communauté</small>
                     <br>
                    Rejoins notre Team!
                </h2>
               

                <p>
                    Fais écouter ta voix, nous sommes interessés par ton histoire.
                </p>

                <a href="/slack" class="btn btn-dark btn-rounded btn-outline">
                    Rejoins nous
                </a>

            </div>
        </div>

    </div>

</div>
</section><!--/#testimonial-->
@stop
