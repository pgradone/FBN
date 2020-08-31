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
                                        What is a plant based diet?
                                    </button>
                                </h5>
                            </div>

                            <div id="collapseOne" class="collapse show fade" aria-labelledby="headingOne"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    The vegan diet is a very strict form of vegetarian diet in which only plant-based
                                    foods are consumed.
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
                                        What's the difference to
                                        other vegetarian diets?
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseTwo" class="collapse fade" aria-labelledby="headingTwo"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    All animal foods and additives are rejected, in some cases honey as well as foods in
                                    whose production processes animal ingredients are used (see question 19). In
                                    addition, many vegans do not use any objects or materials derived from animals, such
                                    as wool, fur and leather.
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
                                        going
                                        vegan?
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseThree" class="collapse fade" aria-labelledby="headingThree"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    Those who follow a vegan diet have to put their food together carefully to avoid
                                    deficits. In addition to plenty of fruit and vegetables, especially dark green
                                    vegetables, whole grain products and legumes, including soy products, should be on
                                    the menu on a regular basis.
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
                                            class="fa fa-angle-double-right mr-3"></i>Is
                                        Vegan Diet Healthy?
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseFour" class="collapse fade" aria-labelledby="headingFour"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    Vegan nutrition is cheap, healthy and helps to reduce the ecological footprint.
                                    A vegan diet can lead to deficiency symptoms. Without animal husbandry one can -
                                    practically practiced - no agriculture.
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
                                    nur in tierischen Produkten vorkommt und durch speziell angereicherte Lebensmittel
                                    und Nahrungsergänzungsmittel supplementiert werden muss.
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