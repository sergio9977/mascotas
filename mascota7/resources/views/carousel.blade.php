<!--Carousel Wrapper-->
<div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
    <!--Indicators-->
    <ol class="carousel-indicators">
        <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-2" data-slide-to="1"></li>
        <li data-target="#carousel-example-2" data-slide-to="2"></li>
        <li data-target="#carousel-example-2" data-slide-to="3"></li>
    </ol>
    <!--/.Indicators-->

    <!--Slides-->
    <div class="carousel-inner" role="listbox">
        <!--First slide-->
        <div class="carousel-item active">
            <!--Mask color-->
            <div class="view hm-black-light">
                <img src="http://mdbootstrap.com/img/Photos/Slides/img%20(22).jpg" class="img-fluid" alt="">
                <div class="full-bg-img">
                </div>
            </div>
            <!--Caption-->
            <div class="carousel-caption">
                <div class="animated fadeInDown">
                    <h3 class="h3-responsive">Light mask</h3>
                    <p>Secondary text</p>
                </div>
            </div>
            <!--Caption-->
        </div>
        <!--/First slide-->

        <!--Second slide-->
        @foreach ($datos as $da)




        <div class="carousel-item">
            <!--Mask color-->
            <div class="view hm-black-strong">
                <img src="imgUser/{{$da->urlimage}}" class="img-fluid" alt="">
                <div class="full-bg-img">
                </div>
            </div>
            <!--Caption-->
            <div class="carousel-caption">
                <div class="animated fadeInDown">
                    <h3 class="h3-responsive">{{$da->name}}</h3>
                    <p>{{$da->email}}</p>
                </div>
            </div>
            <!--Caption-->
        </div>
        <!--/Second slide-->
  @endforeach
        <!--Third slide-->

        <!--/Third slide-->
    </div>
    <!--/.Slides-->

    <!--Controls-->
    <a class="left carousel-control" href="#carousel-example-2" role="button" data-slide="prev">
        <span class="icon-prev" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-example-2" role="button" data-slide="next">
        <span class="icon-next" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    <!--/.Controls-->
</div>
<!--/.Carousel Wrapper-->
