<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Capitalbaths</title>
	<link href="https://capitalbathsdev.com/assets/img/favicon.png" rel="icon">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&amp;display=swap" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('assets/document/css/custom.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/document/css/media-query.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        /* Floating Div Styles */
        .float-div {
            position: fixed;
            top: 60px; /* Adjust the vertical position */
            right: 60px; /* Adjust the horizontal position */
            background-color: #f1f1f1;
            padding: 10px 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .float-div span {
            color: #333;
            font-size: 16px;
            font-weight: bold;
        }
    </style>
</head>
<body>
	<!--Invoice wrap start here -->
	<div class="invoice_wrap movie">
		<div class="invoice-container">
			<div class="invoice-content-wrap" id="download_section">
				<!--Header start here -->
				<header class="invoice-header" id="invo_header">
					<div class="invoice-logo-content">
						<div class="invoice-logo invoice-logo-movie width-50">
							<a href="#" class="logo-movie"><img style="width: 200px;" src="{{ Voyager::image($project->company->logo) }}" alt="this is a invoice logo"></a>
							<div class="pt-30">
								<div class="invo-cont-wrap invo-contact-wrap">
									<div class="invo-social-icon">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_6_94)"><path d="M5 4H9L11 9L8.5 10.5C9.57096 12.6715 11.3285 14.429 13.5 15.5L15 13L20 15V19C20 19.5304 19.7893 20.0391 19.4142 20.4142C19.0391 20.7893 18.5304 21 18 21C14.0993 20.763 10.4202 19.1065 7.65683 16.3432C4.8935 13.5798 3.23705 9.90074 3 6C3 5.46957 3.21071 4.96086 3.58579 4.58579C3.96086 4.21071 4.46957 4 5 4" stroke="#3742FA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path><path d="M15 7C15.5304 7 16.0391 7.21071 16.4142 7.58579C16.7893 7.96086 17 8.46957 17 9" stroke="#3742FA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path><path d="M15 3C16.5913 3 18.1174 3.63214 19.2426 4.75736C20.3679 5.88258 21 7.4087 21 9" stroke="#3742FA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></g><defs><clipPath id="clip0_6_94"><rect width="24" height="24" fill="#3742FA"></rect></clipPath></defs></svg>
									</div>
									<div class="invo-social-name">
										<a href="tel:+971045762781" class="font-18 color-light-black">+971 045762781</a>
									</div>
								</div>
								<div class="invo-cont-wrap pt-10">
									<div class="invo-social-icon">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_6_108)"><path d="M19 5H5C3.89543 5 3 5.89543 3 7V17C3 18.1046 3.89543 19 5 19H19C20.1046 19 21 18.1046 21 17V7C21 5.89543 20.1046 5 19 5Z" stroke="#3742FA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path><path d="M3 7L12 13L21 7" stroke="#3742FA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></g><defs><clipPath id="clip0_6_108"><rect width="24" height="24" fill="#3742FA"></rect></clipPath></defs></svg>
									</div>
									<div class="invo-social-name">
										<a href="mailto:shujjat@capitalbaths.com" class="font-18 color-light-black">shujjat@capitalbaths.com</a>
									</div>
								</div>
							</div>
						</div>
						<div class="invo-head-content width-50">
							<div class="invo-head-content-movie">
								<p class="font-md  text-right pos-relative">Capitalbaths , Warsan 3 Materials Mall Emirate Dubai</p>
							</div>
							<div class="movie-title pt-40">
								<h1 style="font-size: 22px;color: black;" class="movie-txt text-right">Special Care Instructions document </h1>
							</div>
						</div>
					</div>
				</header>
				<!--Header end here -->
				<!--Invoice content start here -->
				<section class="ticket-booking-content" id="ticket_booking">
					<div class="container">
						<!--Invoice owner name start here -->
						<div class="invoice-owner-conte-wrap pt-40">
							<div class="invo-to-wrap stadium-second-sec">
								<div class="invoice-to-content">
									<h2 class="font-lg color-dark-blue pt-10">Mr/Ms: {{ $project->client->full_name ?? '' }}</h2>
									<p class="font-md-grey color-grey pt-10">Phone: {{ $project->client->mobile ?? '' }} <br> Email: {{ $project->client->email ?? '' }}</p>
								</div>
							</div>
							<div class="invo-pay-to-wrap stadium-first-sec">
								<div class="invo-head-content pt-20  ">
									<div class="invo-head-wrap invo-head-wrap-photo">
										<div style="width: 500px;margin-left: -35px;" class="color-light-black font-md">Invoice No:</div>
										<div style="width: 500px;" class="font-md-grey color-light-black ">#{{ $project->id ?? '' }}</div>
									</div>
									<div class="invo-head-wrap invo-head-wrap-photo">
										<div style="width: 500px;" class="color-light-black font-md">Salesperson :</div>
										<div style="width: 500px;"  class="font-md-grey color-light-black ">{{ $project->salesperson ?? ''  }}</div>
									</div>
								</div>
							</div>
						</div>
						<!--Invoice owner name end here -->

                        <!-- start project address & date -->
                        <div class="invoice-owner-conte-wrap pt-40">
							<div class="invo-to-wrap stadium-second-sec">
								<div class="invoice-to-content">
									<h2 class="font-lg color-dark-blue pt-10">Project Address:</h2>
									<p class="font-md-grey color-grey pt-10">{{ $project->project_address ?? '' }}</p>
								</div>
							</div>
							<div class="invo-pay-to-wrap stadium-first-sec">
								<div class="invo-head-content pt-20">
                                    <div class="invoice-to-content">
                                        <h2 class="font-lg color-dark-blue pt-10">Date of Completion:</h2>
                                        <p class="font-md-grey color-grey pt-10">{{ $project->date_of_completation() }}</p>
                                    </div>
								</div>
							</div>
						</div>
                        <!-- end project address & date -->


                         <!-- start description -->
                    <!--Movie must read start here -->
						<div class="">
							<div class="movie-must-title">
                                <h2 class="font-lg color-dark-blue pt-10">Project Description:</h2>
								<p style="text-align: justify" class="mx-4 font-sm color-grey pt-10">
                                    {!! $project->project_description ?? '' !!}
                                </p>
							</div>
						</div>
						<!--Movie must read end here -->
                <!-- end description --> <br>
                <hr style="border: 2px solid #3742FA;color: #3742FA !important;">



						<!--start scop of work -->
                        <div class="table-wrapper movie-details-table-wrapper pt-40">
                            <h2 class="font-lg color-dark-blue pt-10">Scope of Works:</h2>
                            <table class="table table-striped table-bordered">
                                <thead class="table-Secondary">
                                    <tr class="table-Secondary">
                                        <th class="font-md color-light-black qty-wid text-left">Item</th>
                                        <th class="font-md color-light-black w-40 text-left">Description</th>
                                        <th class="font-md color-light-black qty-wid text-center">Status</th>
                                    </tr>
                                </thead>
                                <tbody class="invo-tb-body">
                                    @forelse ($project->products as $product)
                                    <tr class="invo-tb-row {{ $product->status ? 'completed' : 'not-completed' }}">
                                        <td class="font-sm">{{ $product->name }}</td>
                                        <td style="font-size: 10px" class="font-sm">{!! $product->description !!}</td>
                                        <td class="font-sm text-center">
                                            {{ $product->status == 1 ? '✅ Completed' : '❌ Not Completed' }}
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="3" class="text-center">No products found for this project.</td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>



                        <!-- start rating -->
                         <div class="container my-5">
                            <h2 class="font-lg color-dark-blue pt-10">Rate the Quality of Installed Products:</h2>
                                <div class="invoice-owner-conte-wrap pt-40">
                                    <div class="row col-md-12">

                                        @foreach ($project->products as $product)
                                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                            <div style="border: 1px solid #3742FA;padding: 5px 5px;border-radius: 20px;height: 220px;" class="form-group my-3">
                                                <label for="productQuality{{ $product->id }}"><strong>{{ $product->name }}:</strong></label>
                                                <div id="productQuality{{ $product->id }}" class="form-control" style="border: none; padding: 0;">
                                                    @for ($i = 1; $i <= 5; $i++)
                                                    <div>
                                                        <input
                                                            type="radio"
                                                            id="rating{{ $product->id }}_{{ $i }}"
                                                            name="productQuality{{ $product->id }}"
                                                            value="{{ $i }}"
                                                            {{ $product->rating == $i ? 'checked' : '' }}>
                                                        <label for="rating{{ $product->id }}_{{ $i }}">
                                                            {{ $i }} -
                                                            @if ($i == 1) Poor 😕
                                                            @elseif ($i == 2) Fair 😐
                                                            @elseif ($i == 3) Good 🙂
                                                            @elseif ($i == 4) Very Good 😊
                                                            @elseif ($i == 5) Excellent 😃
                                                            @endif
                                                        </label>
                                                    </div>
                                                    @endfor
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach

                                        <div class="container">
                                            <h6 style="color: black;">Comment:</h6>
                                            <p style="color: black;text-align: justify;">
                                                {!! $project->product_quality_comment ?? '' !!}
                                            </p>
                                        </div>

                                        <hr style="border: 2px solid #3742FA;color: #3742FA !important;">

                                    </div>

                                </div>
                        </div>
                        <!-- end rating -->

                        <!-- start rating 2 Performance -->
                         <div class="container my-5">
                            <h2 class="font-lg color-dark-blue pt-10">Rate the Performance of the Installation Team</h2>
                                <div class="invoice-owner-conte-wrap pt-40">
                                    <div class="row col-md-12">

                                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                            <div style="border: 1px solid #3742FA;padding: 5px 5px;border-radius: 20px;height: 220px;" class="form-group my-3">
                                                <label for="teamProfessionalism"><strong>Professionalism:</strong></label>
                                                <div id="teamProfessionalism" class="form-control" style="border: none; padding: 0;">
                                                    @for ($i = 1; $i <= 5; $i++)
                                                    <div>
                                                        <input
                                                            type="radio"
                                                            id="professionalismRating{{ $i }}"
                                                            name="teamProfessionalism"
                                                            value="{{ $i }}"
                                                            {{ $project->professionalism == $i ? 'checked' : '' }}>
                                                        <label for="professionalismRating{{ $i }}">
                                                            {{ $i }} -
                                                            @if ($i == 1) Poor 😕
                                                            @elseif ($i == 2) Fair 😐
                                                            @elseif ($i == 3) Good 🙂
                                                            @elseif ($i == 4) Very Good 😊
                                                            @elseif ($i == 5) Excellent 😃
                                                            @endif
                                                        </label>
                                                    </div>
                                                    @endfor
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                            <div style="border: 1px solid #3742FA;padding: 5px 5px;border-radius: 20px;height: 220px;" class="form-group my-3">
                                                <label for="teamPunctuality"><strong>Punctuality:</strong></label>
                                                <div id="teamPunctuality" class="form-control" style="border: none; padding: 0;">
                                                    @for ($i = 1; $i <= 5; $i++)
                                                    <div>
                                                        <input
                                                            type="radio"
                                                            id="punctualityRating{{ $i }}"
                                                            name="teamPunctuality"
                                                            value="{{ $i }}"
                                                            {{ $project->punctuality == $i ? 'checked' : '' }}>
                                                        <label for="punctualityRating{{ $i }}">
                                                            {{ $i }} -
                                                            @if ($i == 1) Poor 😕
                                                            @elseif ($i == 2) Fair 😐
                                                            @elseif ($i == 3) Good 🙂
                                                            @elseif ($i == 4) Very Good 😊
                                                            @elseif ($i == 5) Excellent 😃
                                                            @endif
                                                        </label>
                                                    </div>
                                                    @endfor
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                            <div style="border: 1px solid #3742FA;padding: 5px 5px;border-radius: 20px;height: 220px;" class="form-group my-3">
                                                <label for="teamCleanliness"><strong>Cleanliness:</strong></label>
                                                <div id="teamCleanliness" class="form-control" style="border: none; padding: 0;">
                                                    @for ($i = 1; $i <= 5; $i++)
                                                    <div>
                                                        <input
                                                            type="radio"
                                                            id="cleanlinessRating{{ $i }}"
                                                            name="teamCleanliness"
                                                            value="{{ $i }}"
                                                            {{ $project->cleanliness == $i ? 'checked' : '' }}>
                                                        <label for="cleanlinessRating{{ $i }}">
                                                            {{ $i }} -
                                                            @if ($i == 1) Poor 😕
                                                            @elseif ($i == 2) Fair 😐
                                                            @elseif ($i == 3) Good 🙂
                                                            @elseif ($i == 4) Very Good 😊
                                                            @elseif ($i == 5) Excellent 😃
                                                            @endif
                                                        </label>
                                                    </div>
                                                    @endfor
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                            <div style="border: 1px solid #3742FA;padding: 5px 5px;border-radius: 20px;height: 220px;" class="form-group my-3">
                                                <label for="teamSkill"><strong>Skill/Workmanship:</strong></label>
                                                <div id="teamSkill" class="form-control" style="border: none; padding: 0;">
                                                    @for ($i = 1; $i <= 5; $i++)
                                                    <div>
                                                        <input
                                                            type="radio"
                                                            id="skillRating{{ $i }}"
                                                            name="teamSkill"
                                                            value="{{ $i }}"
                                                            {{ $project->skill_workmanship == $i ? 'checked' : '' }}>
                                                        <label for="skillRating{{ $i }}">
                                                            {{ $i }} -
                                                            @if ($i == 1) Poor 😕
                                                            @elseif ($i == 2) Fair 😐
                                                            @elseif ($i == 3) Good 🙂
                                                            @elseif ($i == 4) Very Good 😊
                                                            @elseif ($i == 5) Excellent 😃
                                                            @endif
                                                        </label>
                                                    </div>
                                                    @endfor
                                                </div>
                                            </div>
                                        </div>


                                        <div class="container">
                                            <h6 style="color: black;">Comment:</h6>
                                            <p style="color: black;text-align: justify;">
                                                {!! $project->product_team_performance_comment ?? '' !!}
                                            </p>
                                        </div>

                                        <hr style="border: 2px solid #3742FA;color: #3742FA !important;">
                                    </div>
                                </div>
                        </div>
                        <!-- end rating 2 Performance -->

                        <!-- start Disclaimer: Care Instructions -->
                        <div class="movie-must-read-wrap">
							<div class="movie-must-title">
                                <h2 class="font-lg color-dark-blue pt-10 my-5">Step 3: Disclaimer: Care Instructions</h2>
                                <div style="text-align: justify;" class="content_desclaimer">
                                    <!-- Special Care Instructions for Porcelain Countertops -->
                                    <div class="mb-3">
                                        <div class="">
                                            <h6 style="text-decoration: underline;">Special Care Instructions for Porcelain Countertops</h6>
                                            <p>Porcelain countertops require specific care and handling due to their composition. Unlike full-body materials such as marble or granite, porcelain surfaces are more susceptible to damage from impacts, cleaning products, and improper use. Please follow the guidelines below to maintain the appearance and durability of your porcelain counters:</p>

                                            <h6 style="text-decoration: underline;">Handling & Usage:</h6>
                                            <ul>
                                                <li><strong>Impact Warning:</strong> Porcelain countertops are not full-body materials like marble or granite. Hitting or knocking the edges or surface of the porcelain can cause <strong>chipping</strong>, revealing the body underneath.
                                                    <br><em>Tip:</em> Avoid placing heavy or hard objects near the edges, and be cautious when handling items on the surface.</li>
                                                <li><strong>Basin Cover Usage:</strong>
                                                    <ul>
                                                        <li>It is recommended <strong>not to use the basin cover frequently</strong> in high-traffic areas like kitchens or often-cleaned spaces.</li>
                                                        <li><strong>Proper Care:</strong> When removing or placing the basin cover, handle it carefully to avoid hitting or scratching the porcelain. Any damage caused by improper handling will <strong>not be covered under warranty</strong>.</li>
                                                    </ul>
                                                </li>
                                            </ul>

                                            <h6 style="text-decoration: underline;">Cleaning Guidelines:</h6>
                                            <ul>
                                                <li><strong>Avoid Harsh Chemicals:</strong> Using strong or abrasive cleaning agents can cause <strong>discoloration of groutings and epoxies</strong> used around the porcelain countertops.
                                                    <ul>
                                                        <li><strong>Recommended Cleaners:</strong> Use mild cleaning agents, such as diluted dish soap or a pH-neutral cleaner, to clean the surface and grout without damaging the finish or causing discoloration.</li>
                                                        <li><strong>Avoid Acidic Cleaners:</strong> Products that contain bleach, ammonia, or acidic compounds should be avoided as they can damage both the porcelain and grout.</li>
                                                    </ul>
                                                </li>
                                                <li><strong>Soft Cleaning Tools:</strong> Always use soft, non-abrasive cleaning cloths or sponges to avoid scratching the surface. For grout lines, use a soft-bristle brush to clean without damaging the material.</li>
                                            </ul>

                                            <h6 style="text-decoration: underline;">Warranty Disclaimer:</h6>
                                            <ul>
                                                <li><strong>Chipping & Impact Damage:</strong> Any damage caused by hitting or dropping objects on the porcelain surface or edges is <strong>not covered under warranty</strong>.</li>
                                                <li><strong>Discoloration Due to Harsh Cleaning Agents:</strong> Damage to the groutings or epoxies due to the use of harsh or inappropriate cleaning agents is <strong>not covered under warranty</strong>.</li>
                                            </ul>

                                            <p>By following these care instructions, you can preserve the beauty and functionality of your porcelain countertops for years to come.</p>
                                        </div>
                                    </div>

                                    <!-- Care Instructions for Joinery Work (MR MDF) -->
                                    <div class="mb-3">
                                        <div class="">
                                            <h6 style="text-decoration: underline;">Care Instructions for Joinery Work (MR MDF)</h6>
                                            <p>For joinery work made from <strong>Moisture-Resistant Medium Density Fiberboard (MR MDF)</strong>, it is essential to maintain stable temperature and humidity levels to prevent warping, swelling, or shrinkage. Here are the ideal conditions:</p>

                                            <h6 style="text-decoration: underline;">Temperature:</h6>
                                            <ul>
                                                <li><strong>Ideal Range:</strong> 18°C to 24°C (64°F to 75°F).</li>
                                                <li><strong>Avoid extremes:</strong> Do not expose MR MDF to temperatures below 10°C (50°F) or above 30°C (86°F) for prolonged periods, as it could affect the material's stability.</li>
                                            </ul>

                                            <h6 style="text-decoration: underline;">Humidity:</h6>
                                            <ul>
                                                <li><strong>Ideal Range:</strong> 40% to 60% relative humidity.</li>
                                                <li><strong>Avoid:</strong> Humidity levels above 70% can cause the material to absorb moisture, leading to swelling, while levels below 30% can dry out the material, causing cracks or shrinkage.</li>
                                            </ul>

                                            <h6 style="text-decoration: underline;">Cleaning Instructions:</h6>
                                            <ul>
                                                <li><strong>Use Damp Cloth:</strong> Clean the surface using a slightly damp cloth instead of soaking it with water. Ensure the cloth is well-wrung to minimize moisture exposure.</li>
                                                <li><strong>Dry Immediately:</strong> After wiping, ensure the surface is quickly dried with a dry cloth to prevent moisture from sitting on the surface.</li>
                                                <li><strong>Avoid Harsh Cleaners:</strong> Do not use excessive water or cleaning products that could introduce additional moisture into the material.</li>
                                            </ul>

                                            <p><strong>Note:</strong> <em>Failure to maintain these conditions and improper care will void the warranty</em> on joinery products made from MR MDF.</p>
                                        </div>
                                    </div>

                                    <!-- Special Care Instructions for LED Mirrors and Frames -->
                                    <div class="mb-3">
                                        <div class="">
                                            <h6 style="text-decoration: underline;">Special Care Instructions for LED Mirrors and Frames</h6>
                                            <p>LED mirrors and their frames require specific cleaning and care practices to avoid damage. Mirrors, especially those with colored frames, can be affected by certain cleaning agents, leading to discoloration or degradation. Please follow these guidelines to ensure the longevity of your LED mirrors and frames:</p>

                                            <h6 style="text-decoration: underline;">Cleaning Guidelines for Mirrors:</h6>
                                            <ul>
                                                <li><strong>Avoid Harsh Chemicals:</strong> Mirrors can be damaged by strong or abrasive cleaning products, especially those containing ammonia, bleach, or acidic compounds.
                                                    <ul>
                                                        <li><strong>Recommended Cleaning Method:</strong> Use a <em>damp cloth</em> to gently clean the mirror surface. This is enough to remove fingerprints, dust, and minor smudges without risking damage to the reflective coating.</li>
                                                        <li><strong>Edge Care:</strong> Be cautious when cleaning the edges of the mirror as excessive moisture or chemical exposure can weaken the mirror’s backing and lead to peeling or discoloration over time.</li>
                                                    </ul>
                                                </li>
                                            </ul>

                                            <h6 style="text-decoration: underline;">Special Care for Colored Frames:</h6>
                                            <ul>
                                                <li><strong>Avoid All Cleaning Agents on Frames:</strong> Colored frames around mirrors, especially those with a finish, can easily be damaged by cleaning chemicals.
                                                    <ul>
                                                        <li><strong>Recommended Cleaning Method:</strong> The frame should only be wiped down with a <em>soft, dry, or slightly damp cloth</em>. Avoid using any cleaning agents on the frame to maintain its color and integrity.</li>
                                                        <li><strong>No Water Exposure:</strong> Be cautious about letting water or moisture accumulate around the frame, as prolonged exposure can affect both the color and the material of the frame.</li>
                                                    </ul>
                                                </li>
                                            </ul>

                                            <h6 style="text-decoration: underline;">Warranty Disclaimer:</h6>
                                            <ul>
                                                <li><strong>Damage to Mirrors from Cleaning Agents:</strong> Any damage to the mirror surface or frame caused by the use of inappropriate or harsh cleaning agents <strong>will not be covered under warranty</strong>.</li>
                                                <li><strong>Frame Discoloration or Peeling:</strong> Damage or discoloration to the frame due to the use of cleaning chemicals or improper cleaning practices <strong>will not be covered under warranty</strong>.</li>
                                            </ul>

                                            <p>By following these care instructions, you can maintain the quality and appearance of your LED mirrors and their frames for years to come.</p>
                                        </div>
                                    </div>
                                </div>
							</div>
						</div>
                        <!-- end Disclaimer: Care Instructions -->



						<!-- start note -->
						<div class="movie-must-read-wrap">
							<div class="movie-must-title">
								<h3 class="font-md color-light-black pt-40">**Important Notes:**</h3>
								<p class="font-sm color-grey pt-10">
                                    - The company is not liable for any damages caused by misuse, mishandling, or external factors after the work has been handed over and signed off.
                                    <br>- **Failure to comply with the MR MDF care instructions may void the warranty** on the joinery work.
                                    - Post-handover rectifications will be charged as per the company’s standard rates.

                                </p>
							</div>
						</div>
						<!-- end note -->
                        <hr style="border: 2px solid #3742FA;color: #3742FA !important;">

                        <br><br>
                        <!-- start signature -->
                        <div style="margin-bottom: 169px;" class="container">
							<div class="movie-must-title">
								<div class="font-sm color-grey pt-10">
                                    <span style="position: absolute;left: 10px;" class="text-right"> <strong>Mr/Ms: {{ $project->client->full_name ?? '' }}</strong></span>
                                    <span style="float: left;margin-top: 60px;"><img style="width: 200px;height: 100px;" src="{{ Voyager::image($project->img_signatur) }}" alt="signature"></span>
                                    <span style="position: absolute;right: 70px;margin-top: -55px;" class="text-right"> <strong id="currentDate"></strong></span>
                                    <span style="position: absolute;right: 70px;" class="text-right"> <strong>Mr: Shujjat</strong></span>
                                    <span style="float: right;margin-right: -49px;" class="text-right"><img style="height: 200px;margin-right: 43px;" src="{{ asset('assets/document/img/signature.svg') }}" alt="Mr: Shujjat"/></span>

                                </div>
							</div>
						</div><br><br>

                        <hr style="border: 2px solid #3742FA;color: #3742FA !important;">

						<!-- <div class="container">
							<div class="container">
                                <div style="margin-top: 10px;margin-right: 50px;">
                                    <span style="position: absolute;right: 70px;margin-top: -55px;" class="text-right"> <strong id="currentDate2"></strong></span>
                                    <span style="position: absolute;right: 70px;" class="text-right"> <strong>Mr: Shujjat</strong></span>
                                    <span style="float: right;margin-right: -49px;" class="text-right"><img style="height: 200px;" src="signature.svg" alt="Mr: Shujjat"/></span>
                                </div>
							</div>
						</div> -->
						<!-- end signature -->

					</div>
				</section>
				<!--Invoice content end here -->


			</div>
			<!--Bottom content start here -->
			<section class="agency-bottom-content d-print-none" id="agency_bottom">
				<!--Print-download content start here -->
				<div class="invo-buttons-wrap">
					<div class="invo-print-btn invo-btns">
						<a href="javascript:window.print()" class="print-btn">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
								<g clip-path="url(#clip0_10_61)">
									<path d="M17 17H19C19.5304 17 20.0391 16.7893 20.4142 16.4142C20.7893 16.0391 21 15.5304 21 15V11C21 10.4696 20.7893 9.96086 20.4142 9.58579C20.0391 9.21071 19.5304 9 19 9H5C4.46957 9 3.96086 9.21071 3.58579 9.58579C3.21071 9.96086 3 10.4696 3 11V15C3 15.5304 3.21071 16.0391 3.58579 16.4142C3.96086 16.7893 4.46957 17 5 17H7" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
									<path d="M17 9V5C17 4.46957 16.7893 3.96086 16.4142 3.58579C16.0391 3.21071 15.5304 3 15 3H9C8.46957 3 7.96086 3.21071 7.58579 3.58579C7.21071 3.96086 7 4.46957 7 5V9" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
									<path d="M7 15C7 14.4696 7.21071 13.9609 7.58579 13.5858C7.96086 13.2107 8.46957 13 9 13H15C15.5304 13 16.0391 13.2107 16.4142 13.5858C16.7893 13.9609 17 14.4696 17 15V19C17 19.5304 16.7893 20.0391 16.4142 20.4142C16.0391 20.7893 15.5304 21 15 21H9C8.46957 21 7.96086 20.7893 7.58579 20.4142C7.21071 20.0391 7 19.5304 7 19V15Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
								</g>
								<defs>
									<clipPath id="clip0_10_61">
										<rect width="24" height="24" fill="white"/>
									</clipPath>
								</defs>
							</svg>
							<span class="inter-700 medium-font">Print</span>
						</a>
					</div>
					<div class="invo-down-btn invo-btns">
						<a class="download-btn" id="generatePDF">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_5_246)">
								<path d="M4 17V19C4 19.5304 4.21071 20.0391 4.58579 20.4142C4.96086 20.7893 5.46957 21 6 21H18C18.5304 21 19.0391 20.7893 19.4142 20.4142C19.7893 20.0391 20 19.5304 20 19V17" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M7 11L12 16L17 11" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M12 4V16" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></g><defs><clipPath id="clip0_5_246"><rect width="24" height="24" fill="white"/></clipPath></defs>
							</svg>
							<span class="inter-700 medium-font">Download</span>
						</a>
					</div>
				</div>
				<!--Print-download content end here -->
				<!--Note content start -->
				<div class="invo-note-wrap">
					<div class="note-title">
						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_8_240)"><path d="M14 3V7C14 7.26522 14.1054 7.51957 14.2929 7.70711C14.4804 7.89464 14.7348 8 15 8H19" stroke="#12151C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M17 21H7C6.46957 21 5.96086 20.7893 5.58579 20.4142C5.21071 20.0391 5 19.5304 5 19V5C5 4.46957 5.21071 3.96086 5.58579 3.58579C5.96086 3.21071 6.46957 3 7 3H14L19 8V19C19 19.5304 18.7893 20.0391 18.4142 20.4142C18.0391 20.7893 17.5304 21 17 21Z" stroke="#12151C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M9 7H10" stroke="#12151C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M9 13H15" stroke="#12151C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M13 17H15" stroke="#12151C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></g><defs><clipPath id="clip0_8_240"><rect width="24" height="24" fill="white"/>
						</clipPath></defs></svg>
						<span class="font-md color-light-black">Note:</span>
					</div>
					<h3 class="font-md-grey color-grey note-desc">This is computer generated receipt and does not require physical signature.</h3>
				</div>
				<!--Note content end -->
			</section>
			<!--Bottom content end here -->
		</div>
	</div>

    <div class="float-div">
        <span id="qrcode"></span>
    </div>
	<!--Invoice wrap end here -->
	<script src="{{ asset('assets/document/js/jquery.min.js') }}"></script>
	<script src="{{ asset('assets/document/js/jspdf.min.js') }}"></script>
	<script src="{{ asset('assets/document/js/html2canvas.min.js') }}"></script>
	<script src="{{ asset('assets/document/js/custom.js') }}"></script>
    <script src="{{ asset('assets/document/js/qrcode.js') }}"></script>

    <script>
        // Get today's date
        const today = new Date();

        // Format the date as MM/DD/YYYY
        const month = String(today.getMonth() + 1).padStart(2, '0');
        const day = String(today.getDate()).padStart(2, '0');
        const year = today.getFullYear();

        const formattedDate = `${month}/${day}/${year}`;

        // Display the date in the HTML
        document.getElementById('currentDate').textContent = formattedDate;
</script>


<script type="text/javascript">
    var qrcode = new QRCode(document.getElementById("qrcode"), {
        text: "{{ route('document' , ['project_id' =>$project->id , 'client_name' => $project->client->full_name]) }}",
        width: 60,
        height: 60,
        colorDark : "#000000",
        colorLight : "#ffffff",
        correctLevel : QRCode.CorrectLevel.H
    });
    </script>
</body>
</html>
