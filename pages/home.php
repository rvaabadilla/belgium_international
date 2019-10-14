<div class="row m-0 p-0">
    <div class="col-sm-12 m-0 p-0">
        <div class="jumbotron jumbotron-fluid text-light" style="
            background-image: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('./res/jumbotron-1.jpg');
            background-position: center;
            background-size: cover;
        ">
            <div class="container">
                <h1 class="display-3">Welcome to Belgium.</h1>
                <p class="lead">Unity Makes Strength.</p>
                <hr class="my-2" style="border-color: white;">
                <p>Take an in-depth look at what makes Belgium a country to visit.</p>
                <p class="lead">
                    <a class="btn btn-primary btn-lg" href="index.php?page=tour" role="button">Take a tour!</a>
                </p>
            </div>
        </div>
    </div>
</div>
<div class="row m-0 p-0">
    <div class="col-sm-12 m-0 p-0">
        <div class="container mb-4">
            <div class="row">
                <div class="col-sm-4 p-3">
                    <div class="card text-white" style="
                        height: 300px;
                        background-image: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url(res/card1-people.jpg);
                        background-position: center;
                        background-size: cover;
                    ">
                        <img class="card-img-top" src="holder.js/100x180/" alt="">
                        <div class="card-body d-flex flex-column">
                            <h4 class="card-title">The People</h4>
                            <p class="card-text">
                                With 3 distinct, primary dialects, Belgians
                                are a unique blend of people. From Dutch speaking
                                communities, to Walloons who speak french, 
                                to the German speaking community. All under one,
                                united banner: the Kingdom of Belgium.
                            </p>
                            <button type="button" name="btn_people" id="btn_people" class="btn btn-light btn-block mt-auto">Learn More</button>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 p-3">
                    <div class="card text-white" style="
                        height: 300px;
                        background-image: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url(res/card2-landscape.jpg);
                        background-position: center;
                        background-size: cover;
                    ">
                        <div class="card-body d-flex flex-column">
                            <h4 class="card-title">The Landscape</h4>
                            <p class="card-text">
                                Located in Western Europe and surrounded
                                with a complex mix of nature's most 
                                beautiful landscapes, Belgium stands as
                                one of the most beautiful countries
                                to date.
                            </p>
                            <button type="button" name="btn_landscape" id="btn_landscape" class="btn btn-light btn-block mt-auto">Learn More</button>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 p-3">
                    <div class="card text-white" style="
                        height: 300px;
                        background-image: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url(res/card3-cities.jpg);
                        background-position: center;
                        background-size: cover;
                    ">
                        <div class="card-body d-flex flex-column">
                            <h4 class="card-title">The Cities</h4>
                            <p class="card-text">
                                Brussels, the capital of Belgium, bustles
                                with one of the most diverse and unique
                                city landscapes to date, with a mix of
                                historic, victorian buildings and modern 
                                architecture.
                            </p>
                            <button type="button" name="btn_cities" id="btn_cities" class="btn btn-light btn-block mt-auto">Learn More</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row m-0 p-0">
    <div class="col-sm-12">
        <div class="container mb-3">
            <div id="belgium_showcase_carousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner rounded" role="listbox" style=" width:100%; height: 600px !important;">
                    <?php $active = true;
                        for($index=0; $index < 10; $index++):?>
                        <div class="carousel-item <?php
                            if($active) {
                                echo 'active';
                                $active = false;
                            }
                        ?>">
                            <img class="d-block w-100" src="res/showcase/<?=$index + 1?>.jpg" alt="">
                        </div>
                    <?php endfor;?>
                </div>
                <a class="carousel-control-prev" href="#belgium_showcase_carousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#belgium_showcase_carousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</div>