@extends('layouts.app')

@section('content')

<body>

    <div class="container d-flex justify-content-around my-5">
        <div class="row">
            <div class="col-md d-flex align-items-center">
                <div>
                    <h1><strong>Facts-Based Nutrition</strong></h1>
                    <h5>A healthy Way </h5>


                    <button type="button" class="btn btn-warning">Learn more</>
                        <button type="button" class="btn btn-success">Join Now</>


                </div>
            </div>
            <div class="col-md ">
                <img class="img-thumbnail"
                    src="https://images.unsplash.com/photo-1503146234394-631200675614?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                    alt="picture" srcset="" style="max-width: 18rem;">
            </div>

        </div>
    </div>





    <div class="d-flex justify-content-center">
        <h1><strong>Recipes</strong></h1>
    </div>
    <hr class="my-4 " style="width: 18rem; border: dashed ; ">
    <!-- <div class="d-flex justify-content-center"> -->
    <div class="d-flex justify-content-center">
        <div class="card" style="width: 18rem;">
            <img src="https://images.unsplash.com/photo-1524859330668-c357331384f5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                class="card-img-top" alt="...">
            <div class="card-body">

                <a href="#" class="btn btn-primary">name of recipe</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="https://images.unsplash.com/photo-1593967858208-67ddb5b4c406?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                class="card-img-top" alt="...">
            <div class="card-body">

                <a href="#" class="btn btn-primary">name of recipe</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="https://images.unsplash.com/photo-1512621776951-a57141f2eefd?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                class="card-img-top" alt="...">
            <div class="card-body">

                <a href="#" class="btn btn-primary">name of recipe</a>
            </div>
        </div>

    </div>
    <!-- </div> -->
</body>
@endsection