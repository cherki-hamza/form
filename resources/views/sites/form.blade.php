<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client Feedback Form - Step Wizard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link href="https://capitalbathsdev.com/assets/img/favicon.png" rel="icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


    <!-- Place the first <script> tag in your HTML's <head> -->
    <link rel="stylesheet" href="{{ asset('assets/richtexbox/rte_theme_default.css') }}" />
    <script type="text/javascript" src="{{ asset('assets/richtexbox/rte.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/richtexbox/plugins/all_plugins.js') }}"></script>


</head>
<body>

    <div class="container">

        <div class="row">
            <div class="col-md-8">
                <h1 style="font-size: 18px;font-weight: 400;">Capitalbaths Client Feedback Form - Step Wizard </h1>
            </div>
            <div class="col-md-4">
                <span style="float: right">

                    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                    <span>
                        @php
                            if ( $localeCode == 'ar') {
                                $code = 'ae';
                            }elseif ($localeCode == 'en') {
                                $code = 'us';
                            }else {
                                $code = $localeCode;
                            }
                        @endphp
                    <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                        <img style="width: 30px;height: 30px;border-radius: 100%; margin-right: 5px;" src='{{ asset("assets/img/{$code}.png")}}'>
                    </a>

                    </span>
                   @endforeach


                </span>
            </div>
        </div>



            <div class="card my-3">
                <div  class="d-flex justify-content-between" style="padding: 20px;">

                    <span id="responsive_username" style="margin-top: 20px;font-size: 18px;"><strong>Mr/Ms: <span style="text-decoration: underline;">{{ $project->client->getTranslatedAttribute('full_name') }}</span></strong></span>

                    <span id="responsive_logo">
                        <img id="responsive_img" style="max-width: 220px;" class="img-fluid" src="{{ Voyager::image($project->company->logo) }}" alt="logo">
                    </span>

                    <span id="responsive_date" style="margin-top: 20px;font-size: 18px;"> <strong>Date: </strong><span id="currentDate"></span></span>
                </div>

                    <div id="responsive_buttom_space" style="padding: 10px 20px;" class="row">
                        <p><strong>Project Address:</strong> {{ $project->getTranslatedAttribute('project_address') }}</p>
                        <p><strong>Date of Completion:</strong> {{ $project->date_of_completion() }}</p>
                    </div>


                <div style="padding: 5px 20px;">
                    <div class="form-group">
                        <label class="my-2" for="description"><strong>Project Description:</strong> </label>
                         <textarea class="form-control" readonly name="description" id="desc" cols="10" rows="5">{!! $project->getTranslatedAttribute('project_description')!!}</textarea>
                    </div>
                </div>
            </div>
            <div class="card mt-2">
                <div class="card-header">
                        <div class="steps">
                                <div  class="step active">
                                    <span>
                                            1
                                    </span>
                                </div>
                                <div class="step">
                                    <span>
                                            2
                                    </span>
                                </div>
                                <div class="step">
                                    <span>
                                            3
                                    </span>
                                </div>
                                <div class="step">
                                    <span>
                                            4
                                    </span>
                                </div>
                                <div class="step">
                                    <span>
                                            5
                                    </span>
                                </div>
                    </div>
                </div>
                <form id="myForm" onclick="return 0;" action="{{ route('store_form_wizzard' , ['project_id' => $project->id ]) }}" method="POST">
                    @csrf
                <div id="cardBody" class="card-body">
                    <div class="tabs">
                             <!-- start first steep -->
                              @include('sites.inc.en.steep1')
                            <!-- end first steep -->

                            <!-- start second steep -->
                            @include('sites.inc.en.steep2')
                            <!-- start secod steep -->

                            <!-- start thired steep -->
                            @include('sites.inc.en.steep3')
                            <!-- start thired steep -->


                            <!-- start forth steep -->
                            @include('sites.inc.en.steep4')
                            <!-- end forth steep -->

                            <!-- start fift steep -->
                            @include('sites.inc.en.steep5')
                            <!-- end fift steep -->

                    </div>
                </div>

                <style>
                     .btn_style{
                        border-radius: 5px;
                        padding: 15px 25px;
                        width: 150px;
                        margin: 10px auto;
                        border: none;
                        border-radius: 0.085rem;
                        font-weight: 500;
                        font-size: 16px;
                        color: white;
                        background: rgb(94, 168, 230);
                        box-shadow: 0px 5px 0px 0px rgb(94, 168, 230);
                     }
                </style>

                <div class="card-footer">
                    <button id="prevBtn" onclick="next(-1)">Prev</button>
                    <button id="nextBtn" onclick="next(1)">Next</button>

                    {{-- <button onclick="submitForm()" class="btn_style text-success" type="submit">Send</button> --}}
                </div>
               </form>
        </div>
    </div>

   <!--  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
     -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="{{ asset('assets/js/script.js') }}"></script>


</body>
</html>
