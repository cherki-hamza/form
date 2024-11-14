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

    </style>
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
        <div class="row d-flex">
            <div class="@if($edit)  col-md-6 @else  col-md-12 @endif">

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
                                <!-- GET THE DISPLAY OPTIONS -->
                                @php
                                    $display_options = $row->details->display ?? null;
                                    if ($dataTypeContent->{$row->field . '_' . ($edit ? 'edit' : 'add')}) {
                                        $dataTypeContent->{$row->field} = $dataTypeContent->{$row->field . '_' . ($edit ? 'edit' : 'add')};
                                    }
                                @endphp
                                @if (isset($row->details->legend) && isset($row->details->legend->text))
                                    <legend class="text-{{ $row->details->legend->align ?? 'center' }}"
                                        style="background-color: {{ $row->details->legend->bgcolor ?? '#f0f0f0' }};padding: 5px;">
                                        {{ $row->details->legend->text }}</legend>
                                @endif

                                <div class="form-group @if ($row->type == 'hidden') hidden @endif col-md-{{ $display_options->width ?? 12 }} {{ $errors->has($row->field) ? 'has-error' : '' }}"
                                    @if (isset($display_options->id)) {{ "id=$display_options->id" }} @endif>
                                    {{ $row->slugify }}
                                    <label style="color:#0799e7;font-weight: bold;" class="control-label"
                                        for="name">{{ $row->getTranslatedAttribute('display_name') }}</label><span
                                        class="mx-2" style="color:#0799e7;font-weight: bold;">:</span>
                                    @include('voyager::multilingual.input-hidden-bread-edit-add')
                                    @if ($add && isset($row->details->view_add))
                                        @include($row->details->view_add, [
                                            'row' => $row,
                                            'dataType' => $dataType,
                                            'dataTypeContent' => $dataTypeContent,
                                            'content' => $dataTypeContent->{$row->field},
                                            'view' => 'add',
                                            'options' => $row->details,
                                        ])
                                    @elseif ($edit && isset($row->details->view_edit))
                                        @include($row->details->view_edit, [
                                            'row' => $row,
                                            'dataType' => $dataType,
                                            'dataTypeContent' => $dataTypeContent,
                                            'content' => $dataTypeContent->{$row->field},
                                            'view' => 'edit',
                                            'options' => $row->details,
                                        ])
                                    @elseif (isset($row->details->view))
                                        @include($row->details->view, [
                                            'row' => $row,
                                            'dataType' => $dataType,
                                            'dataTypeContent' => $dataTypeContent,
                                            'content' => $dataTypeContent->{$row->field},
                                            'action' => $edit ? 'edit' : 'add',
                                            'view' => $edit ? 'edit' : 'add',
                                            'options' => $row->details,
                                        ])
                                    @elseif ($row->type == 'relationship')
                                        @include('voyager::formfields.relationship', [
                                            'options' => $row->details,
                                        ])
                                    @else
                                        {!! app('voyager')->formField($row, $dataType, $dataTypeContent) !!}
                                    @endif

                                    @foreach (app('voyager')->afterFormFields($row, $dataType, $dataTypeContent) as $after)
                                        {!! $after->handle($row, $dataType, $dataTypeContent) !!}
                                    @endforeach
                                    @if ($errors->has($row->field))
                                        @foreach ($errors->get($row->field) as $error)
                                            <span class="help-block">{{ $error }}</span>
                                        @endforeach
                                    @endif
                                </div>
                            @endforeach


                            @php
                                $poject_products = \App\Project::where('id',request()->id)->with('products')->first();
                                $products = $poject_products->products ?? [];
                            @endphp

                            @if (count($products) > 0)
                            <div class="row">
                                <div class="form-group my-3 col-md-12 ">

                                    <label style="color:#0799e7;font-weight: bold;" class="control-label" for="name">Products</label>
                                    <span class="mx-2" style="color:#0799e7;font-weight: bold;">:</span>

                                    <div class="list-group">
                                        <ul style="list-style: none" class="list-group-item">

                                            @foreach ($products as $product)
                                            <li class="list-group-item list-group-item-secondary">
                                              <a href="{{ route('voyager.products.edit' , ['id' => $product->id]) }}">
                                                {{ $product->name }}
                                            </a>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>

                                </div>
                            </div>
                            @endif

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

            @if($edit)
            <div style="min-height: 1060px" class="col-md-6 panel panel-bordered">
                <h2 class="text-center">Add Products:</h2>
                <div class="panel-body">
                    <div class="card mt-2">
                        <div style="display: block;font-size: 20px" id="alert_package" class="aler alert-warning py-2 mx-2 text-center">Oops At least one Item must be entered.</div>
                        <div class="card-body table-responsive">
                          <style>
                            .scrollable-div {
                                height: 200px; /* Set the height */
                                overflow-y: auto; /* Enable vertical scrolling */
                                border: 1px solid #ccc; /* Optional: Add a border for better visibility */
                                padding: 10px; /* Optional: Add some padding for aesthetics */
                                box-sizing: border-box; /* Ensure padding is included in height calculation */
                            }
                          </style>
                        <form  id="productsForm">
                            @csrf
                            <div class="input-group inputTemplate scrollable_div mb-3" id="inputTemplate">

                                <hr style="border: 2px solid #85bbe7">
                                <div class="row col-md-12">
                                    <div class="col-md-6">

                                        <label for="">Product Name:</label>
                                        <input type="hidden" name="projectIds" id="projectIds" value="{{ request()->id }}">
                                        {{-- <input type="text" class="form-control mx-2" placeholder="example : Bathroom Furniture , Shower Glass .." name="productsName[]"> --}}
                                        <textarea required style="border: 1px solid #85bbe7" class="form-control" name="productsName[]" id="productsName" cols="2" rows="2"></textarea>
                                    </div>
                                    <div class="col-md-5">
                                        <label for="">Product Status:</label>
                                        <select class="form-control" name="productsStatus[]" id="productsStatus">
                                            <option value="0" >🚧 Still in Construction</option>
                                            <option value="1">✅ Completed</option>
                                            <option value="2">❌ Not Completed</option>
                                        </select>
                                    </div>
                                    <div class="col-md-1">
                                        <label for=""></label>
                                        <button class="btn btn-danger" type="button" onclick="removeInput(this)">Remove</button>
                                    </div>
                                </div>

                                <div class="row col-md-12">
                                    <label for="">Product Description:</label>
                                    <textarea required style="border: 1px solid #85bbe7" class="form-control" name="productsDescription[]" id="productsDescription" cols="5" rows="5"></textarea>
                                </div>




                            </div>


                            <div class="row" style="margin-top: 10px; margin-left: 0px;">
                                <button type="button" class="btn btn-primary ml-5 mb-3" onclick="cloneInput()">Add More</button>
                                <button type="submit" class="btn btn-success ml-5 mb-3">Save Products</button>
                            </div>

                            <hr style="border: 2px solid #85bbe7">

                        </form>

                        </div>
                    </div>
                </div>
             </div>
             @endif

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

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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

</script>

{{-- start script for clone input --}}
<script>

    let cloneCount = 0;
    function cloneInput() {
        var original = document.getElementById('inputTemplate');
        if (!original) {
            console.error('Element with id "inputTemplate" not found!');
            return;
        }

        // Hide the remove button in the original input group
        original.querySelector('button').style.display = 'none';

        // Clone the original input group
        var clone = original.cloneNode(true);
        clone.id = ""; // Remove the ID for the cloned element

        // Show the remove button in the cloned input group
        clone.querySelector('button').style.display = 'inline-block';

        // Insert the cloned input group after the original
        original.parentNode.insertBefore(clone, original.nextSibling);
        }

        function removeInput(button) {
        // Check the total number of input groups
        const inputGroups = document.querySelectorAll('.input-group');

        // If there is more than one input group, allow removal
        if (inputGroups.length > 1) {
            button.closest('.input-group').remove();
        } else {
            // If only the original input group remains, prevent removal
            alert("The original package cannot be removed. At least one package must be entered.");
        }
    }
</script>
{{-- end script for clone input --}}

{{-- start script for store products by ajax --}}
 <script>
    // AJAX submission
document.getElementById('productsForm').addEventListener('submit', function(e) {
    e.preventDefault(); // Prevent form submission

      // Initialize arrays to store the data
        let projectIds = [];
        let productsName = [];
        let productsStatus = [];
        let productsDescription = [];



        // Collect data from the form
        $('input[name="projectIds"]').each(function () {
            projectIds.push($(this).val());
        });

        //console.log(projectIds);


        $('textarea[name="productsName[]"]').each(function () {
            productsName.push($(this).val());
        });

        $('select[name="productsStatus[]"]').each(function () {
            productsStatus.push($(this).val());
        });

        $('textarea[name="productsDescription[]"]').each(function () {
            productsDescription.push($(this).val());
        });

        // Create an object to send to the server
        let formData = {
            projectIds: projectIds,
            productsName: productsName,
            productsStatus: productsStatus,
            productsDescription: productsDescription
        };


    // Send AJAX request
    $.ajax({
            url: '/store_products', // Replace with your actual endpoint
            type: 'POST', // Specify POST request
            data: JSON.stringify(formData), // Send JSON data
            contentType: 'application/json', // Set the content type to JSON
            headers: {
                'X-CSRF-TOKEN': $('input[name="_token"]').val() // Include CSRF token
            },
            success: function (response) {
                if (response.success) {
                    // alert
                    Swal.fire({
                        position: "top-end",
                        icon: "success",
                        title: response.message,
                        showConfirmButton: false,
                        timer: 1500
                    });
                    $('#productsForm')[0].reset(); // Reset the form
                }

                if(!response.success){
                     Swal.fire({
                        position: "top-end",
                        icon: "warning",
                        title: 'error validation',
                        showConfirmButton: false,
                        timer: 1500
                    });
                    console.log('Error0:', response.errors);
                    //alert('An error occurred: ' + response.message);
                }
            },


            error: function (xhr, status, error) {


                    if (xhr.status === 422) {
                    // Parse validation errors
                    const errors = xhr.responseJSON.errors;

                    // Display validation errors dynamically
                    for (const key in errors) {
                        if (errors.hasOwnProperty(key)) {
                            const errorField = key.split('.')[0]; // Get the main field name
                            const index = key.split('.')[1]; // Get the index if available
                            const errorMessage = errors[key][0]; // Get the error message

                            // Find the corresponding input field and display the error
                            let targetElement;
                            if (errorField === 'productsName') {
                                targetElement = $('textarea[name="productsName[]"]').eq(index);
                            } else if (errorField === 'productsStatus') {
                                targetElement = $('select[name="productsStatus[]"]').eq(index);
                            } else if (errorField === 'productsDescription') {
                                targetElement = $('textarea[name="productsDescription[]"]').eq(index);
                            } else if (errorField === 'projectIds') {
                                targetElement = $('input[name="productId"]').eq(index);
                            }

                            // Append the error message to the corresponding field
                            if (targetElement) {
                                Swal.fire({
                                    position: "top-end",
                                    icon: "warning",
                                    title: errorMessage,
                                    showConfirmButton: false,
                                    timer: 1500
                                });
                               /*  targetElement
                                    .after(`<br><span class="error-message text-danger">${errorMessage}</span>`); */
                            }
                        }
                    }
                } else {
                    alert('An unexpected error occurred. Please try again.');
                }
            }
        });
});
 </script>
{{-- end script for store products by ajax --}}



@stop
