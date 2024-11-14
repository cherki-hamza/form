<div id="first" class="tab">
    <div class="form-step active">

        <style>
            .status-label {
              font-weight: bold;
            }

            table {
                border-collapse: collapse;
              }

              thead tr {
                background: pink;
              }

              td {
                border: 1px solid pink;
                width: 200px;
                padding: 10px;
              }

              td.collapse {
                padding: 0;
              }

              [data-collapse-toggle] {
                cursor: pointer;
              }

              [data-collapse] {
                text-align: justify;
                display: block;
                overflow: hidden;
                transition: height 0.33s;
              }

              [data-collapse].hidden {
                height: 0;
              }

              [data-collapse-content] {
                padding: 10px;
              }

              /* .hidden [data-collapse-content] {
                visibility: hidden;
              } */

              .hidden {
                display: none;
            }
            .collapse {
                overflow: hidden;
                transition: height 0.3s ease;
            }


          </style>
        </head>
        <body>
          <div class="container mt-4">
            <h4 class="my-5">scope of works:</h4>
            <div class="table-responsive">
              <table class="table table-bordered">
                <thead class="table-primary">
                  <tr>
                    <th style="width: 210px;" scope="col">Item</th>
                    <th style="width: 210px;" scope="col">Description</th>
                    <th style="width: 210px;" scope="col">Status</th>
                  </tr>
                </thead>
                <tbody>
                    <!-- start product -->
                    @foreach ($project->products as $p)
            <tr>
                <td>{{ $p->getTranslatedAttribute('name') }}</td>
                <td data-collapse-toggle onClick="toggleRow(this)">
                    <i style="color: rgb(94, 168, 230);" class="fa fa-eye mx-2" aria-hidden="true"></i>
                    <span id="text_content">show Content</span>
                </td>
                <td>
                    <input type="hidden" name="selected_products[{{ $p->id }}]" value="0"> <!-- Hidden field to ensure unchecked boxes are submitted -->
                    <input type="checkbox"
                           class="form-check-input status-checkbox"
                           name="selected_products[{{ $p->id }}]"
                           value="1"
                           id="product_{{$p->id}}"
                           onchange="toggleStatusLabel(this)">

                    <label class="ms-2" for="product_{{$p->id}}">
                        confirm the product status
                    </label>
                </td>
            </tr>
            <tr>
                <td colspan="3" class="collapse hidden">
                    <div data-collapse>
                        <div data-collapse-content>
                            {!! $p->getTranslatedAttribute('description') !!}
                        </div>
                    </div>
                </td>
            </tr>
        @endforeach

                   {{--  @foreach ($project->products as $p)
                    <tr>
                        <td>{{ $p->getTranslatedAttribute('name') }}</td>
                        <td data-collapse-toggle onClick="toggleRow(this)">
                            <i style="color: rgb(94, 168, 230);" class="fa fa-eye mx-2" aria-hidden="true"></i>
                            <span id="text_content">show Content</span>
                        </td>
                        <td>
                            <input type="checkbox" class="form-check-input status-checkbox" @if ($p->status == '1') checked @endif id="status{{$p->id}}" onchange="toggleStatusLabel(this)">
                            <label class="ms-2 status-label text-success" for="status1">{{ $p->my_status() }}</label>
                        </td>

                    </tr>

                    <tr>
                        <td colspan="3" class="collapse hidden">
                            <div data-collapse>
                                <div data-collapse-content>
                                    {!! $p->getTranslatedAttribute('description') !!}
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach --}}
                    <!-- end product -->


                </tbody>
              </table>
            </div>
          </div>

          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
          <script>
            function toggleStatusLabel(checkbox) {
              const label = checkbox.nextElementSibling;
              if (checkbox.checked) {
                label.classList.remove("text-danger");
                label.classList.add("text-success");
                label.innerHTML = "✅ Completed";
                checkbox.value = 1; // Set value to 1 when checked
              } else {
                label.classList.remove("text-success");
                label.classList.add("text-danger");
                label.innerHTML = "❌ Not Completed";
                checkbox.value = 0; // Set value to 0 when unchecked
              }
            }
          </script>

    </div>
</div>
