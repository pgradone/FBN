@extends('layouts.app')
@section('content')
<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body> -->
<div class="container-fluid bg-gray" id="accordion-style-1">
    <div class="container">
        <section>
            <div class="row">
                <div class="col-12">
                    <h1 class="text-green mb-4 text-center">Frequently Asked Questions</h1>
                </div>
                <div class="col-10 mx-auto">
                    <div class="accordion" id="accordionExample">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h5 class="mb-0">
                                    <button class="btn btn-link btn-block text-left" type="button"
                                        data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                                        aria-controls="collapseOne">
                                        <i class="fa fa-amazon main"></i><i class="fa fa-angle-double-right mr-3"></i>
                                        What is a Whole Food Plant Based diet?
                                    </button>
                                </h5>
                            </div>

                            <div id="collapseOne" class="collapse show fade" aria-labelledby="headingOne"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    A WFPB vegan diet is a low fat of vegan, composed only of plants, but without processed foods.
                                    It shall not include any oil or margarines, even of plant origin
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed btn-block text-left" type="button"
                                        data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                                        aria-controls="collapseTwo">
                                        <i class="fa fa-plus main"></i><i class="fa fa-angle-double-right mr-3"></i>
                                        What's the difference compared to other vegan diets?
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseTwo" class="collapse fade" aria-labelledby="headingTwo"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    Vegans do not consume any product derived from animals, such as meat, dairy and eggs.
                                    Vegans still consume processed foods such as french fries, oils and oreos. Although
                                    it is excellent for the environment and WAY much better than eating animals,
                                    you can still be overweight on an unhelthy vegan diet.
                                    Veganism is mainly a doctrine not based on serious scientific studies
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed btn-block text-left" type="button"
                                        data-toggle="collapse" data-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        <i class="fa fa-expeditedssl main"></i><i
                                            class="fa fa-angle-double-right mr-3"></i>What do you have to consider when
                                        going vegan?
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseThree" class="collapse fade" aria-labelledby="headingThree"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    Those who follow a vegan diet have to put their food together carefully to avoid
                                    deficiencies and starvation. You cannot merely live on fruits and greens alone,
                                    because they are not enough calorie-dense, even though they contain a lot of very
                                    healthy micro-nutrients. A WFPB diet is perfectly sustainable on whole grains and legumens,
                                    in other words also known as STARCHES
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingFour">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed btn-block text-left" type="button"
                                        data-toggle="collapse" data-target="#collapseFour" aria-expanded="false"
                                        aria-controls="collapseFour">
                                        <i class="fa fa-envelope main"></i><i
                                            class="fa fa-angle-double-right mr-3"></i>Is a WFPB
                                        diet Healthy?
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseFour" class="collapse fade" aria-labelledby="headingFour"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    Of course, and it is way cheaper, healthier, nutritious and helps reduce human's ecological footprint
                                    better than the industry and transportation sectors combined.
                                    If everybody went vegan or WFPB, our planet would be able to sustain more than 20 billion
                                    humans, without compromising the global eclogical balance and climate.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingFour">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed btn-block text-left" type="button"
                                        data-toggle="collapse" data-target="#collapseFour" aria-expanded="false"
                                        aria-controls="collapseFour">
                                        <i class="fa fa-envelope main"></i><i
                                            class="fa fa-angle-double-right mr-3"></i>Why
                                        should you eat vegan?
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseFour" class="collapse fade" aria-labelledby="headingFour"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    Eine gesunde, ausgewogene vegane Ernährung kann unseren Körper mit allen
                                    lebensnotwendigen Nährstoffen versorgen. Eine Ausnahme stellt Vitamin B12 dar, das
                                    nur in bakterien Produkten. Keine anderen speziell angereicherte Lebensmittel
                                    und Nahrungsergänzungsmittel mussen supplementiert werden.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
<!-- </body>

</html> -->


@endsection