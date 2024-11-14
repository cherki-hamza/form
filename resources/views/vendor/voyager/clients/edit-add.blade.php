@php
    $edit = !is_null($dataTypeContent->getKey());
    $add = is_null($dataTypeContent->getKey());
@endphp

@extends('voyager::master')

@section('css')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        /* .tox {
            height: 300px;
        } */

        body {
            font-size: 25px;
            color: black;
            font-weight: bold;
        }

        .voyager-x {
            color: rgba(234, 9, 9, 0.543)
        }

        .language-selector {
            position: fixed;
            float: right !important;
            z-index: 99;
            right: 50px;
            top: 60px;
        }

        .panel-footer {
            position: fixed;
            float: right !important;
            z-index: 99;
            right: 50px;
            bottom: 110px;
        }

        .iti{
            width: 380px !important;
        }
    </style>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
@stop

@section('page_title', __('voyager::generic.' . ($edit ? 'edit' : 'add')) . ' ' .
    $dataType->getTranslatedAttribute('display_name_singular'))

@section('page_header')
    <h1 class="page-title">
        <i class="{{ $dataType->icon }}"></i>
        {{ __('voyager::generic.' . ($edit ? 'edit' : 'add')) . ' ' . $dataType->getTranslatedAttribute('display_name_singular') }}
    </h1>
    @include('voyager::multilingual.language-selector')
@stop

@section('content')
    <div class="page-content edit-add container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="panel panel-bordered">
                    <!-- form start -->
                    <form role="form" class="form-edit-add"
                        action="{{ $edit ? route('voyager.' . $dataType->slug . '.update', $dataTypeContent->getKey()) : route('voyager.' . $dataType->slug . '.store') }}"
                        method="POST" enctype="multipart/form-data">
                        <!-- PUT Method if we are editing -->
                        @if ($edit)
                            {{ method_field('PUT') }}
                        @endif

                        <!-- CSRF TOKEN -->
                        {{ csrf_field() }}

                        <div class="panel-body">

                            @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <!-- Adding / Editing -->
                            @php
                                $dataTypeRows = $dataType->{$edit ? 'editRows' : 'addRows'};
                            @endphp

                            @foreach ($dataTypeRows as $row)
                            @php
                                $display_options = $row->details->display ?? null;
                                if ($dataTypeContent->{$row->field . '_' . ($edit ? 'edit' : 'add')}) {
                                    $dataTypeContent->{$row->field} = $dataTypeContent->{$row->field . '_' . ($edit ? 'edit' : 'add')};
                                }
                            @endphp

                            @if ($row->field == 'country' || $row->field == 'city')
                                <div class="form-group col-md-6">
                                    <label style="color:#0799e7;font-weight: bold;" class="control-label"
                                        for="{{ $row->field }}">{{ $row->getTranslatedAttribute('display_name') }}</label>

                                        @if ($row->field == 'country')
                                            <select name="{{ $row->field }}" id="{{ $row->field }}" onchange="loadCities()" class="form-control">
                                                <option selected value="{{$dataTypeContent->country}}">Select Country</option>
                                            </select>
                                        @elseif ($row->field == 'city')
                                          <select selected name="{{ $row->field }}" id="{{ $row->field }}"  class="form-control">
                                            <option value="{{$dataTypeContent->city}}">Select City</option>
                                          </select>
                                        @endif

                                </div>
                            @elseif ($row->field == 'mobile')

                            <div class="form-group col-md-{{ $display_options->width ?? 12 }} {{ $errors->has($row->field) ? 'has-error' : '' }}"
                                @if (isset($display_options->id)) id="{{ $display_options->id }}" @endif>
                                <label style="color:#0799e7;font-weight: bold;" class="control-label"
                                    for="{{ $row->field }}">{{ $row->getTranslatedAttribute('display_name') }}</label> <br>
                                @include('voyager::multilingual.input-hidden-bread-edit-add')
                                <input  type="phone" class="form-control" name="mobile" id="mobile" value="{{$dataTypeContent->mobile ?? ''}}" placeholder="Phone Number">
                                <input type="hidden" value="United Arab Emirates" name="country_name" id="country_name">
                                <input type="hidden" value="+971" name="area_code" id="area_code">
                                <input type="hidden" value="ae" name="country_code" id="country_code">
                                <input type="hidden" value="https://flagicons.lipis.dev/flags/4x3/ae.svg" name="country_flag" id="country_flag">
                            </div>

                            @else
                                <div class="form-group col-md-{{ $display_options->width ?? 12 }} {{ $errors->has($row->field) ? 'has-error' : '' }}"
                                    @if (isset($display_options->id)) id="{{ $display_options->id }}" @endif>
                                    <label style="color:#0799e7;font-weight: bold;" class="control-label"
                                        for="{{ $row->field }}">{{ $row->getTranslatedAttribute('display_name') }}</label>
                                    @include('voyager::multilingual.input-hidden-bread-edit-add')
                                    {!! app('voyager')->formField($row, $dataType, $dataTypeContent) !!}
                                </div>
                            @endif
                            @endforeach


                        </div><!-- panel-body -->

                        <div class="panel-footer">
                        @section('submit-buttons')
                            <button type="submit" class="btn btn-primary save">{{ __('voyager::generic.save') }}</button>
                        @stop
                        @yield('submit-buttons')
                    </div>
                </form>

                <div style="display:none">
                    <input type="hidden" id="upload_url" value="{{ route('voyager.upload') }}">
                    <input type="hidden" id="upload_type_slug" value="{{ $dataType->slug }}">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade modal-danger" id="confirm_delete_modal">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title"><i class="voyager-warning"></i> {{ __('voyager::generic.are_you_sure') }}</h4>
            </div>

            <div class="modal-body">
                <h4>{{ __('voyager::generic.are_you_sure_delete') }} '<span class="confirm_delete_name"></span>'</h4>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-default"
                    data-dismiss="modal">{{ __('voyager::generic.cancel') }}</button>
                <button type="button" class="btn btn-danger"
                    id="confirm_delete">{{ __('voyager::generic.delete_confirm') }}</button>
            </div>
        </div>
    </div>
</div>
<!-- End Delete File Modal -->
@stop

@section('javascript')

<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
<script>
    tinyMCE.init({
        mode: "textareas",
        theme: "advanced",
        force_br_newlines: false,
        force_p_newlines: false,
        forced_root_block: '',
    });

    var params = {};
    var $file;

    function deleteHandler(tag, isMulti) {
        return function() {
            $file = $(this).siblings(tag);

            params = {
                slug: '{{ $dataType->slug }}',
                filename: $file.data('file-name'),
                id: $file.data('id'),
                field: $file.parent().data('field-name'),
                multi: isMulti,
                _token: '{{ csrf_token() }}'
            }

            $('.confirm_delete_name').text(params.filename);
            $('#confirm_delete_modal').modal('show');
        };
    }

    $('document').ready(function() {
        $('.toggleswitch').bootstrapToggle();

        //Init datepicker for date fields if data-datepicker attribute defined
        //or if browser does not handle date inputs
        $('.form-group input[type=date]').each(function(idx, elt) {
            if (elt.hasAttribute('data-datepicker')) {
                elt.type = 'text';
                $(elt).datetimepicker($(elt).data('datepicker'));
            } else if (elt.type != 'date') {
                elt.type = 'text';
                $(elt).datetimepicker({
                    format: 'L',
                    extraFormats: ['YYYY-MM-DD']
                }).datetimepicker($(elt).data('datepicker'));
            }
        });

        @if ($isModelTranslatable)
            $('.side-body').multilingual({
                "editing": true
            });
        @endif

        $('.side-body input[data-slug-origin]').each(function(i, el) {
            $(el).slugify();
        });

        $('.form-group').on('click', '.remove-multi-image', deleteHandler('img', true));
        $('.form-group').on('click', '.remove-single-image', deleteHandler('img', false));
        $('.form-group').on('click', '.remove-multi-file', deleteHandler('a', true));
        $('.form-group').on('click', '.remove-single-file', deleteHandler('a', false));

        $('#confirm_delete').on('click', function() {
            $.post('{{ route('voyager.' . $dataType->slug . '.media.remove') }}', params, function(
                response) {
                if (response &&
                    response.data &&
                    response.data.status &&
                    response.data.status == 200) {

                    toastr.success(response.data.message);
                    $file.parent().fadeOut(300, function() {
                        $(this).remove();
                    })
                } else {
                    toastr.error("Error removing file.");
                }
            });

            $('#confirm_delete_modal').modal('hide');
        });
        $('[data-toggle="tooltip"]').tooltip();
    });

    /* countries script */
        const gccCountries = [
            {
                id: 1,
                name: "Saudi Arabia",
                cities: [
                    { id: 1, name: "Riyadh" },
                    { id: 2, name: "Jeddah" },
                    { id: 3, name: "Mecca" },
                    { id: 4, name: "Medina" },
                    { id: 5, name: "Dammam" }
                ]
            },
            {
                id: 2,
                name: "United Arab Emirates",
                cities: [
                    { id: 6, name: "Dubai" },
                    { id: 7, name: "Abu Dhabi" },
                    { id: 8, name: "Sharjah" },
                    { id: 9, name: "Al Ain" },
                    { id: 10, name: "Ajman" }
                ]
            },
            {
                id: 3,
                name: "Qatar",
                cities: [
                    { id: 11, name: "Doha" },
                    { id: 12, name: "Al Rayyan" },
                    { id: 13, name: "Umm Salal" },
                    { id: 14, name: "Al Wakrah" },
                    { id: 15, name: "Al Khor" }
                ]
            },
            {
                id: 4,
                name: "Kuwait",
                cities: [
                    { id: 16, name: "Kuwait City" },
                    { id: 17, name: "Al Ahmadi" },
                    { id: 18, name: "Hawalli" },
                    { id: 19, name: "Salmiya" },
                    { id: 20, name: "Jahra" }
                ]
            },
            {
                id: 5,
                name: "Bahrain",
                cities: [
                    { id: 21, name: "Manama" },
                    { id: 22, name: "Muharraq" },
                    { id: 23, name: "Isa Town" },
                    { id: 24, name: "Riffa" },
                    { id: 25, name: "Hamad Town" }
                ]
            },
            {
                id: 6,
                name: "Oman",
                cities: [
                    { id: 26, name: "Muscat" },
                    { id: 27, name: "Salalah" },
                    { id: 28, name: "Sohar" },
                    { id: 29, name: "Nizwa" },
                    { id: 30, name: "Sur" }
                ]
            }
        ];

        // Load countries into the country dropdown
        document.addEventListener('DOMContentLoaded', function () {
        loadCountries(); // Load countries first
        preSelectCountryAndCity(); // Pre-select values
        });

        function loadCountries() {
            const countrySelect = document.getElementById('country');
            countrySelect.innerHTML = '<option value="">Select Country</option>'; // Clear options
            gccCountries.forEach(country => {
                const option = document.createElement('option');
                option.value = country.name;
                option.text = country.name;
                countrySelect.add(option);
            });
        }

        function loadCities() {
            const countrySelect = document.getElementById('country');
            const citySelect = document.getElementById('city');
            citySelect.innerHTML = '<option value="">Select City</option>'; // Clear previous cities

            const selectedCountry = gccCountries.find(country => country.name === countrySelect.value);

            if (selectedCountry) {
                selectedCountry.cities.forEach(city => {
                    const option = document.createElement('option');
                    option.value = city.name;
                    option.text = city.name;
                    citySelect.add(option);
                });

                // Pre-select the city if it matches the database value
                const cityFromDb = '{{ $dataTypeContent->city }}'.trim();
                if (cityFromDb) {
                    citySelect.value = cityFromDb;
                }
            }
        }

        function preSelectCountryAndCity() {
            // Pre-select country
            const countryFromDb = '{{ $dataTypeContent->country }}'.trim(); // Trim whitespace
            const countrySelect = document.getElementById('country');
            if (countryFromDb) {
                setTimeout(() => {
                    countrySelect.value = countryFromDb; // Attempt to set the value
                    if (countrySelect.value !== countryFromDb) {
                        console.error("Country value not found in dropdown:", countryFromDb);
                    }
                    loadCities(); // Trigger city dropdown
                }, 100); // Small delay to ensure options are loaded
            }
        }

    /* countries script */

    /* mobile script */


    $(document).ready(function(){
        const input = document.querySelector("#mobile");
        const iti = window.intlTelInput(input, {
        separateDialCode: true,
        initialCountry: "ae",
        //utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@23.0.4/build/js/utils.js",
        });

        // store the instance variable so we can access it in the console e.g. window.iti.getNumber()
        window.iti = iti;

        var countryData = iti.getSelectedCountryData();

        @if ($edit)
        const dialCode = countryData.dialCode;
           input.value = `{{ $dataTypeContent->mobile  }}`;
        @else
          const dialCode = countryData.dialCode;
          input.value = `+${dialCode} {{ $dataTypeContent->mobile  }}`; // Set the dial code in the input field
        @endif

        //detect onchange for the text input
        $("body").on('DOMSubtreeModified', ".iti__selected-dial-code", function() {
            var area_code = $('.iti__selected-dial-code').text();
            document.getElementById('area_code').value = area_code;



            var countryData = iti.getSelectedCountryData();
            // Extract the country code
            var  countryCode = countryData.iso2;
            var  country_name = countryData.name;

            console.log(countryData)

            // Construct the URL for the flag image
            // https://flagicons.lipis.dev/flags/4x3/af.svg
            var flagUrl = "https://flagicons.lipis.dev/flags/4x3/" + countryCode +".svg";

            document.getElementById('country_code').value = countryCode;
            document.getElementById('country_flag').value = flagUrl;
            document.getElementById('country_name').value = country_name;

            let result =  document.getElementById('phone').value = countryCode;
            console.log(result);


            console.log(country_name);
        });


   });
    /* mobile script */
</script>


@stop
