@extends('layouts.app')

@section('content')


<!-- Header Section -->
<div class="headerContainer  d-flex align-items-center ">
    <div class="col-6 test">
        <h1><strong>Facts-Based-Nutrition</strong></h1>
        <h5>The healthy way of living! </h5>
        <button type="button" class="btn btn-warning btn-lg learn-more-button"><i class="fas fa-caret-right"></i>
            Learn more</button>
        <button type="button" class="  btn btn-success btn-lg join-now-button">Join Now <i
                class="fas fa-leaf"></i></button>
    </div>
</div>



<!-- Recipes title and HR  -->
<div class=" d-flex justify-content-center">
    <h1><strong>Recipes</strong></h1>
</div>
<hr class="my-4 " style="width: 15rem;border-top: 5px dotted green;">


<!-- Recipes Section -->
<div class="bg-light">
    <div class="recipesContainer">
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                    <img class="card-img-top"
                        src="https://images.unsplash.com/photo-1512621776951-a57141f2eefd?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                        alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">This is a wider card with supporting text below as a natural
                            lead-in to
                            additional content. This content is a little bit longer.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                            </div>
                            <small class="text-muted">9 mins</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                    <img class="card-img-top"
                        src="https://images.unsplash.com/photo-1512621776951-a57141f2eefd?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                        alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">This is a wider card with supporting text below as a natural
                            lead-in to
                            additional content. This content is a little bit longer.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                            </div>
                            <small class="text-muted">9 mins</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                    <img class="card-img-top"
                        src="https://images.unsplash.com/photo-1512621776951-a57141f2eefd?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                        alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">This is a wider card with supporting text below as a natural
                            lead-in to
                            additional content. This content is a little bit longer.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                            </div>
                            <small class="text-muted">9 mins</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Recipes Section -->
<!-- <div class="row">
    <div class="col d-flex justify-content-center">
        <div class="col-lg-2 col-md-4 col-sm-12 card" style="width: 18rem;">
            <img src="https://images.unsplash.com/photo-1524859330668-c357331384f5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                class="card-img-top" alt="...">
            <div class="card-body">

                <a href="#" class="btn btn-primary">name of recipe</a>
            </div>
        </div>
        <div class="card col-lg-2 col-md-4 col-sm-12" style="width: 18rem;">
            <img src="https://images.unsplash.com/photo-1593967858208-67ddb5b4c406?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                class="card-img-top" alt="...">
            <div class="card-body">

                <a href="#" class="btn btn-primary">name of recipe</a>
            </div>
        </div>
        <div class="card col-lg-2 col-md-4 col-sm-12" style="width: 18rem;">
            <img src="https://images.unsplash.com/photo-1512621776951-a57141f2eefd?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                class="card-img-top" alt="...">
            <div class="card-body">

                <a href="#" class="btn btn-primary">name of recipe</a>
            </div>
        </div>
    </div>
</div> -->


<!-- Blog title and HR  -->
<div class="d-flex justify-content-center">
    <h1><strong>Blog Posts:</strong></h1>
</div>
<hr class="my-4 " style="width: 15rem;border-top: 5px dotted green;">


<!-- Blog posts Carroussel -->
<div class="container-fluid jumbotron">
    <div class="row">
        <div class="col-12">
            <div id="inam" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="container">
                            <div class="row d-flex justify-content-between">
                                <div class=" col-lg-4">
                                    <div class="card" style="width: 500px;margin: auto;">
                                        <img src="https://images.unsplash.com/photo-1524859330668-c357331384f5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                                            class="card-img-top">
                                        <div class="card-body">
                                            <h4 class="card-title">Why you should use skin masks ?</h4>
                                            <p class="card-text">Skin masks help us to make are skin fresh and also
                                                they
                                                protect our skin from the harm rays of sun</p>
                                            <button type="button" class="btn btn-warning">Read More</button>

                                        </div>

                                    </div>

                                </div>
                                <div class=" col-lg-4">
                                    <div class="card" style="width: 500px;">
                                        <img src="https://images.unsplash.com/photo-1524859330668-c357331384f5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                                            class="card-img-top">
                                        <div class="card-body">
                                            <h4 class="card-title">Why you should use skin masks ?</h4>
                                            <p class="card-text">Skin masks help us to make are skin fresh and also
                                                they
                                                protect our skin from the harm rays of sun</p>
                                            <button type="button" class="btn btn-warning">Read More</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="carousel-item">
                        <div class="container">
                            <div class="row d-flex justify-content-between">
                                <div class=" col-lg-4">
                                    <div class="card" style="width: 500px;margin: auto;">
                                        <img src="https://images.unsplash.com/photo-1524859330668-c357331384f5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                                            class="card-img-top">
                                        <div class="card-body">
                                            <h4 class="card-title">Why you should use skin masks ?</h4>
                                            <p class="card-text">Skin masks help us to make are skin fresh and also
                                                they
                                                protect our skin from the harm rays of sun</p>
                                            <button type="button" class="btn btn-warning">Read More</button>

                                        </div>

                                    </div>

                                </div>
                                <div class=" col-lg-4">
                                    <div class="card" style="width: 500px;">
                                        <img src="https://images.unsplash.com/photo-1524859330668-c357331384f5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                                            class="card-img-top">
                                        <div class="card-body">
                                            <h4 class="card-title">Why you should use skin masks ?</h4>
                                            <p class="card-text">Skin masks help us to make are skin fresh and also
                                                they
                                                protect our skin from the harm rays of sun</p>
                                            <button type="button" class="btn btn-warning">Read More</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Carroussel slide buttons -->
                <a href="#inam" class="carousel-control-prev" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a href="#inam" class="carousel-control-next" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>
            </div>
        </div>
    </div>





    @endsection