@extends("layout") @section("content")
<br>
<div class="preview">

</div>
<div class="container" style="width:50%">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <a href="/tutorials"><img class="d-block w-100" src="/img/panda.jpg" alt="First slide" >
                    <div class="carousel-caption d-none d-md-block">
                        <h5>...</h5>
                        <p>...</p>
                      </div></a>

            </div>
            <div class="carousel-item">
                <a href="/tutorials"><img class="d-block w-100" src="/img/panda.jpg" alt="First slide" >
                    <div class="carousel-caption d-none d-md-block">
                        <h5>...</h5>
                        <p>...</p>
                      </div></a>

            </div>
            <div class="carousel-item">
                <a href="/tutorials"><img class="d-block w-100" src="/img/panda.jpg" alt="First slide" >
                    <div class="carousel-caption d-none d-md-block">
                        <h5>...</h5>
                        <p>...</p>
                      </div></a>

            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
    </div>
</div>

@endsection
