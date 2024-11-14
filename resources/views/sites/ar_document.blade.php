<!DOCTYPE html>
<html lang="ar" dir="rtl">

<!-- Mirrored from up2client.com/envato/digital-invoica/main-file/movie_booking.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Nov 2024 12:51:06 GMT -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>ar Capitalbaths</title>
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
            left: 60px; /* Adjust the horizontal position */
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

          /* Hide specific elements when printing */
          @media print {
            .no_print {
                display: none;
            }
        }
    </style>
</head>
<body>
	<!--Invoice wrap start here -->
	<div class="invoice_wrap movie">
		<div class="invoice-container">
			<div class="invoice-content-wrap" id="download_section">
				<!--Header start here -->
				<header dir="ltr" class="invoice-header" id="invo_header">
					<div class="invoice-logo-content">
						<div class="invoice-logo invoice-logo-movie width-50">
							<a href="#" class="logo-movie"><img style="width: 200px;" src="{{ Voyager::image($project->company->logo) }}" alt="this is a invoice logo"></a>
							<div class="pt-30">
								<div class="invo-cont-wrap invo-contact-wrap">
									<div class="invo-social-icon">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_6_94)"><path d="M5 4H9L11 9L8.5 10.5C9.57096 12.6715 11.3285 14.429 13.5 15.5L15 13L20 15V19C20 19.5304 19.7893 20.0391 19.4142 20.4142C19.0391 20.7893 18.5304 21 18 21C14.0993 20.763 10.4202 19.1065 7.65683 16.3432C4.8935 13.5798 3.23705 9.90074 3 6C3 5.46957 3.21071 4.96086 3.58579 4.58579C3.96086 4.21071 4.46957 4 5 4" stroke="#3742FA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path><path d="M15 7C15.5304 7 16.0391 7.21071 16.4142 7.58579C16.7893 7.96086 17 8.46957 17 9" stroke="#3742FA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path><path d="M15 3C16.5913 3 18.1174 3.63214 19.2426 4.75736C20.3679 5.88258 21 7.4087 21 9" stroke="#3742FA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></g><defs><clipPath id="clip0_6_94"><rect width="24" height="24" fill="#3742FA"></rect></clipPath></defs></svg>
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
								<p class="font-md  text-right pos-relative">Capitalbaths, وارسون 3 مواد مول إمارة دبي</p>
							</div>
							<div class="movie-title pt-40">
								<h1 style="font-size: 22px;color: black;" class="movie-txt text-right">وثيقة تعليمات العناية الخاصة </h1>
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
									<h2 style="float: right;" class="font-lg color-dark-blue pt-10">السيد/السيدة: {{ $project->getTranslatedAttribute('salesperson') ?? '' }}</h2>
                                    <p style="position: absolute;float: right;margin-top: 55px;">الهاتف: {{ $project->client->mobile ?? '' }}  </p>
                                    <p style="position: absolute;float: right;margin-top: 90px;">البريد الإلكتروني: {{ $project->client->email ?? '' }}</p>
								</div>
							</div>
							<div class="invo-pay-to-wrap stadium-first-sec">
								<div class="invo-head-content pt-20  ">
									<div class="invo-head-wrap invo-head-wrap-photo">
										<div style="width: 500px;" class="color-light-black font-md"> رقم الفاتورة:</div>
										<div style="width: 500px;" class="font-md-grey color-light-black ">#{{ $project->id ?? '' }}</div>
									</div>
									<div class="invo-head-wrap invo-head-wrap-photo">
										<div style="width: 500px;" class="color-light-black font-md">مندوب المبيعات :</div>
										<div style="width: 500px;"  class="font-md-grey color-light-black "> {{ $project->client->getTranslatedAttribute('full_name') }} </div>
									</div>
								</div>
							</div>
						</div>
						<!--Invoice owner name end here -->

                        <!-- start project address & date -->
                        <div class="invoice-owner-conte-wrap pt-40">
							<div class="invo-to-wrap stadium-second-sec">
								<div style="margin-top: 20px;" class="invoice-to-content">
									<h2 style="float: right;" class="font-lg color-dark-blue pt-10">عنوان المشروع:</h2>
									<p style="float: right;" class="font-md-grey color-grey pt-10"> {{ $project->getTranslatedAttribute('project_address') ?? '' }} </p>
								</div>
							</div>
							<div class="invo-pay-to-wrap stadium-first-sec">
								<div class="invo-head-content pt-20">
                                    <div class="invoice-to-content">
                                        <h2 style="float: right;" class="font-lg color-dark-blue pt-10">تاريخ الإنجاز:</h2>
                                        <p style="float: right;" class="font-md-grey color-grey pt-10">{{ $project->date_of_completation() }}</p>
                                    </div>
								</div>
							</div>
						</div>
                        <!-- end project address & date -->


                         <!-- start description -->
                    <!--Movie must read start here -->
						<div class="">
							<div class="movie-must-title">
                                <h2 class="font-lg color-dark-blue pt-10">وصف المشروع:</h2>
								<p style="text-align: justify" class="mx-4 font-sm color-grey pt-10">
                                    {!! $project->getTranslatedAttribute('project_description') !!}
                                </p>
							</div>
						</div>
						<!--Movie must read end here -->
                <!-- end description -->


						<!--start scop of work -->
						<div class="table-wrapper movie-details-table-wrapper pt-40">
                            <h2 class="font-lg color-dark-blue pt-10">نطاق العمل:</h2>
							<table class="invoice-table movie-table">
								<thead>
									<tr class="invo-tb-header">
										<th style="float: right;" class="font-md color-light-black qty-wid text-left">المنتج</th>
                                        <th  class="font-md color-light-black w-40 text-center">الوصف</th>
										<th style="float: initial;" class="font-md color-light-black qty-wid text-center">الحالة</th>
									</tr>
								</thead>
								<tbody class="invo-tb-body">

                                    {{--
                                    <td class="font-sm text-center">❌  غير مكتمل</td>
                                        <td class="font-sm text-center">✅ مكتمل</td>
                                    --}}

                                    @forelse ($project->products as $product)
                                    <tr class="invo-tb-row {{ $product->status ? 'مكتمل' : 'غير مكتمل' }}">
                                        <td class="font-sm">{{ $product->getTranslatedAttribute('name') }}</td>
                                        <td style="font-size: 10px" class="font-sm">{!! $product->getTranslatedAttribute('description') !!}</td>
                                        <td class="font-sm text-center">
                                            {{ $product->status == 1 ? '✅ مكتمل' : '❌ غير مكتمل' }}
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="3" class="text-center">لم يتم العثور على منتجات لهذا المشروع.</td>
                                    </tr>
                                    @endforelse

								</tbody>
							</table>
						</div>
						<!--end scop of work -->

                        <!-- start rating -->
                        <div class="container my-5">
                            <h2 class="font-lg color-dark-blue pt-10">تقييم جودة المنتجات المثبتة:</h2>
                            <div class="invoice-owner-conte-wrap pt-40">
                                <div class="row col-md-12">

                                    @foreach ($project->products as $product)
                                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                            <div style="border: 1px solid #3742FA;padding: 5px 5px;border-radius: 20px;height: 220px;" class="form-group my-3">
                                                <label for="productQuality{{ $product->id }}"><strong>{{ $product->getTranslatedAttribute('name') }}:</strong></label>
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
                                                            @if ($i == 1) ضعيف 😕
                                                            @elseif ($i == 2) مقبول 😐
                                                            @elseif ($i == 3) جيد 🙂
                                                            @elseif ($i == 4) جيد جداً  😊
                                                            @elseif ($i == 5) ممتاز 😃
                                                            @endif
                                                        </label>
                                                    </div>
                                                    @endfor
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach


                                    <div class="container">
                                        <h6 style="color: black;">تعليق:</h6>
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
                            <h2 class="font-lg color-dark-blue pt-10">تقييم أداء فريق التثبيت</h2>
                            <div class="invoice-owner-conte-wrap pt-40">
                                <div class="row col-md-12">

                                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                        <div style="border: 1px solid #3742FA;padding: 5px 5px;border-radius: 20px;height: 220px;" class="form-group my-3">
                                            <label for="teamProfessionalism"><strong>الاحترافية:</strong></label>
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
                                                        @if ($i == 1) ضعيف 😕
                                                        @elseif ($i == 2) مقبول 😐
                                                        @elseif ($i == 3) جيد 🙂
                                                        @elseif ($i == 4) جيد جداً  😊
                                                        @elseif ($i == 5)  ممتاز  😃
                                                        @endif
                                                    </label>
                                                </div>
                                                @endfor
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                        <div style="border: 1px solid #3742FA;padding: 5px 5px;border-radius: 20px;height: 220px;" class="form-group my-3">
                                            <label for="teamPunctuality"><strong>الالتزام بالمواعيد:</strong></label>
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
                                                        @if ($i == 1) ضعيف 😕
                                                        @elseif ($i == 2) مقبول 😐
                                                        @elseif ($i == 3) جيد 🙂
                                                        @elseif ($i == 4) جيد جداً  😊
                                                        @elseif ($i == 5)  ممتاز  😃
                                                        @endif
                                                    </label>
                                                </div>
                                                @endfor
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                        <div style="border: 1px solid #3742FA;padding: 5px 5px;border-radius: 20px;height: 220px;" class="form-group my-3">
                                            <label for="teamCleanliness"><strong>النظافة:</strong></label>
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
                                                        @if ($i == 1) ضعيف 😕
                                                        @elseif ($i == 2) مقبول 😐
                                                        @elseif ($i == 3) جيد 🙂
                                                        @elseif ($i == 4) جيد جداً  😊
                                                        @elseif ($i == 5)  ممتاز  😃
                                                        @endif
                                                    </label>
                                                </div>
                                                @endfor
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                        <div style="border: 1px solid #3742FA;padding: 5px 5px;border-radius: 20px;height: 220px;" class="form-group my-3">
                                            <label for="teamSkill"><strong>المهارة / و الحرفية:</strong></label>
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
                                                        @if ($i == 1) ضعيف 😕
                                                        @elseif ($i == 2) مقبول 😐
                                                        @elseif ($i == 3) جيد 🙂
                                                        @elseif ($i == 4) جيد جداً  😊
                                                        @elseif ($i == 5)  ممتاز  😃
                                                        @endif
                                                    </label>
                                                </div>
                                                @endfor
                                            </div>
                                        </div>
                                    </div>


                                    <div class="container">
                                        <h6 style="color: black;">تعليق:</h6>
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
                                <h2 class="font-lg color-dark-blue pt-10 my-5">الخطوة 3: إخلاء المسؤولية: تعليمات العناية</h2>
                                <div style="text-align: justify;" class="content_desclaimer">
                                    <!-- تعليمات العناية الخاصة بأسطح البورسلين -->
                                    <div class="mb-3">
                                        <div class="">
                                            <h6 style="text-decoration: underline;">تعليمات العناية الخاصة بأسطح البورسلين</h6>
                                            <p>تحتاج أسطح البورسلين إلى عناية خاصة نظراً لتركيبها. على عكس المواد الصلبة مثل الرخام أو الجرانيت، فإن أسطح البورسلين أكثر عرضة للتلف بسبب الصدمات أو منتجات التنظيف أو الاستخدام غير السليم. يُرجى اتباع الإرشادات أدناه للحفاظ على مظهر وصلابة الأسطح البورسلينية:</p>

                                            <h6 style="text-decoration: underline;">التعامل والاستخدام:</h6>
                                            <ul>
                                                <li><strong>تحذير من الصدمات:</strong> أسطح البورسلين ليست مواد صلبة مثل الرخام أو الجرانيت. قد يؤدي ضرب أو نقر حواف أو سطح البورسلين إلى <strong>تشقق</strong> يظهر الجسم الداخلي.
                                                    <br><em>نصيحة:</em> تجنب وضع أشياء ثقيلة أو صلبة بالقرب من الحواف، وكن حذرًا عند التعامل مع الأشياء على السطح.</li>
                                                <li><strong>استخدام غطاء الحوض:</strong>
                                                    <ul>
                                                        <li>يُوصى <strong>بعدم استخدام غطاء الحوض بكثرة</strong> في الأماكن ذات الحركة العالية مثل المطابخ أو الأماكن التي تُنظف بشكل متكرر.</li>
                                                        <li><strong>العناية المناسبة:</strong> عند إزالة أو وضع غطاء الحوض، تعامل معه بحذر لتجنب ضرب أو خدش سطح البورسلين. أي ضرر ناتج عن التعامل غير السليم <strong>لن يتم تغطيته ضمن الضمان</strong>.</li>
                                                    </ul>
                                                </li>
                                            </ul>

                                            <h6 style="text-decoration: underline;">إرشادات التنظيف:</h6>
                                            <ul>
                                                <li><strong>تجنب المواد الكيميائية القاسية:</strong> قد تتسبب المواد الكيميائية القوية أو الكاشطة في <strong>تغير لون المواد الرابطة والإيبوكسيات</strong> المستخدمة حول أسطح البورسلين.
                                                    <ul>
                                                        <li><strong>المنظفات الموصى بها:</strong> استخدم منظفات خفيفة مثل صابون الأطباق المخفف أو منظف بدرجة حموضة محايدة لتنظيف السطح والرابطة دون الإضرار باللمعة أو التسبب في تغير اللون.</li>
                                                        <li><strong>تجنب المنظفات الحمضية:</strong> يجب تجنب المنتجات التي تحتوي على مبيضات أو الأمونيا أو المركبات الحمضية لأنها قد تتلف كل من البورسلين والرابطة.</li>
                                                    </ul>
                                                </li>
                                                <li><strong>أدوات تنظيف ناعمة:</strong> استخدم دائمًا قطع قماش ناعمة أو إسفنج غير كاشط لتجنب خدش السطح. لتنظيف خطوط الرابطة، استخدم فرشاة ناعمة لتنظيفها دون إتلاف المادة.</li>
                                            </ul>

                                            <h6 style="text-decoration: underline;">إخلاء المسؤولية عن الضمان:</h6>
                                            <ul>
                                                <li><strong>التشقق والأضرار الناتجة عن الصدمات:</strong> أي ضرر ناتج عن ضرب أو إسقاط أشياء على سطح أو حواف البورسلين <strong>غير مشمول بالضمان</strong>.</li>
                                                <li><strong>تغير اللون بسبب المواد الكيميائية القاسية:</strong> تلف في المواد الرابطة أو الإيبوكسيات الناتج عن استخدام منظفات قاسية أو غير مناسبة <strong>غير مشمول بالضمان</strong>.</li>
                                            </ul>

                                            <p>باتباع هذه الإرشادات للعناية، يمكنك الحفاظ على جمال ووظيفة أسطح البورسلين لسنوات قادمة.</p>
                                        </div>
                                    </div>

                                    <!-- تعليمات العناية بأعمال النجارة (MR MDF) -->
                                    <div class="mb-3">
                                        <div class="">
                                            <h6 style="text-decoration: underline;">تعليمات العناية بأعمال النجارة (MR MDF)</h6>
                                            <p>لأعمال النجارة المصنوعة من <strong>لوح الألياف متوسط الكثافة المقاوم للرطوبة (MR MDF)</strong>، من الضروري الحفاظ على مستويات مستقرة من درجة الحرارة والرطوبة لمنع الالتواء أو التمدد أو الانكماش. هنا الظروف المثالية:</p>

                                            <h6 style="text-decoration: underline;">درجة الحرارة:</h6>
                                            <ul>
                                                <li><strong>المدى المثالي:</strong> من 18°م إلى 24°م (64°ف إلى 75°ف).</li>
                                                <li><strong>تجنب التطرف:</strong> لا تعرض MR MDF لدرجات حرارة أقل من 10°م (50°ف) أو أكثر من 30°م (86°ف) لفترات طويلة، حيث يمكن أن يؤثر ذلك على استقرار المادة.</li>
                                            </ul>

                                            <h6 style="text-decoration: underline;">الرطوبة:</h6>
                                            <ul>
                                                <li><strong>المدى المثالي:</strong> من 40% إلى 60% رطوبة نسبية.</li>
                                                <li><strong>تجنب:</strong> مستويات الرطوبة فوق 70% يمكن أن تتسبب في امتصاص المادة للرطوبة، مما يؤدي إلى الانتفاخ، في حين أن المستويات تحت 30% يمكن أن تجفف المادة، مسببة تشققات أو انكماش.</li>
                                            </ul>

                                            <h6 style="text-decoration: underline;">إرشادات التنظيف:</h6>
                                            <ul>
                                                <li><strong>استخدام قطعة قماش مبللة:</strong> نظف السطح باستخدام قطعة قماش مبللة قليلاً بدلاً من نقعه بالماء. تأكد من أن القماش معصور جيداً لتقليل تعرض السطح للرطوبة.</li>
                                                <li><strong>جفف فوراً:</strong> بعد المسح، تأكد من تجفيف السطح بسرعة باستخدام قطعة قماش جافة لتجنب ترك الرطوبة على السطح.</li>
                                                <li><strong>تجنب المنظفات القاسية:</strong> لا تستخدم الماء الزائد أو منتجات التنظيف التي يمكن أن تضيف رطوبة إضافية إلى المادة.</li>
                                            </ul>

                                            <p><strong>ملاحظة:</strong> <em>التقصير في الحفاظ على هذه الظروف والعناية غير الصحيحة ستبطل الضمان</em> على منتجات النجارة المصنوعة من MR MDF.</p>
                                        </div>
                                    </div>

                                    <!-- تعليمات العناية الخاصة بالمرايا LED والإطارات -->
                                    <div class="mb-3">
                                        <div class="">
                                            <h6 style="text-decoration: underline;">تعليمات العناية الخاصة بالمرايا LED والإطارات</h6>
                                            <p>تتطلب مرايا LED وإطاراتها ممارسات تنظيف وعناية محددة لتجنب التلف. يمكن أن تتأثر المرايا، خاصة تلك ذات الإطارات الملونة، بمواد التنظيف، مما يؤدي إلى تغير اللون أو التدهور. يُرجى اتباع هذه الإرشادات لضمان عمر طويل لمرايا LED وإطاراتها:</p>

                                            <h6 style="text-decoration: underline;">إرشادات التنظيف للمرايا:</h6>
                                            <ul>
                                                <li><strong>تجنب المواد الكيميائية القاسية:</strong> يمكن أن تتضرر المرايا من المنتجات القوية أو الكاشطة، خاصة تلك التي تحتوي على الأمونيا أو المبيضات أو المركبات الحمضية.
                                                    <ul>
                                                        <li><strong>طريقة التنظيف الموصى بها:</strong> استخدم <em>قطعة قماش مبللة</em> لتنظيف سطح المرآة بلطف. هذا كافٍ لإزالة بصمات الأصابع والغبار والبقع البسيطة دون المخاطرة بإتلاف الطلاء العاكس.</li>
                                                        <li><strong>العناية بالحواف:</strong> كن حذرًا عند تنظيف حواف المرآة لأن التعرض الزائد للرطوبة أو المواد الكيميائية يمكن أن يضعف الطبقة الخلفية للمرآة ويؤدي إلى التقشر أو تغير اللون مع مرور الوقت.</li>
                                                    </ul>
                                                </li>
                                            </ul>

                                            <h6 style="text-decoration: underline;">العناية الخاصة بالإطارات الملونة:</h6>
                                            <ul>
                                                <li><strong>تجنب جميع عوامل التنظيف على الإطارات:</strong> يمكن أن تتعرض الإطارات الملونة حول المرايا، خاصة تلك ذات الطلاء، للتلف بسهولة بسبب المواد الكيميائية.
                                                    <ul>
                                                        <li><strong>طريقة التنظيف الموصى بها:</strong> يجب مسح الإطار فقط بقطعة قماش <em>ناعمة وجافة أو مبللة قليلاً</em>. تجنب استخدام أي مواد تنظيف على الإطار للحفاظ على لونه وسلامته.</li>
                                                        <li><strong>تجنب التعرض للماء:</strong> كن حذراً بشأن السماح للماء أو الرطوبة بالتراكم حول الإطار، حيث أن التعرض الطويل يمكن أن يؤثر على كل من اللون والمادة للإطار.</li>
                                                    </ul>
                                                </li>
                                            </ul>

                                            <h6 style="text-decoration: underline;">إخلاء المسؤولية عن الضمان:</h6>
                                            <ul>
                                                <li><strong>التلف الناتج عن مواد التنظيف:</strong> أي ضرر لسطح المرآة أو الإطار بسبب استخدام منظفات غير مناسبة أو قاسية <strong>لن يتم تغطيته ضمن الضمان</strong>.</li>
                                                <li><strong>تغير لون أو تقشر الإطار:</strong> الضرر أو تغير اللون للإطار الناتج عن استخدام مواد تنظيف أو ممارسات تنظيف غير صحيحة <strong>لن يتم تغطيته ضمن الضمان</strong>.</li>
                                            </ul>

                                            <p>باتباع هذه التعليمات للعناية، يمكنك الحفاظ على جودة ومظهر مرايا LED وإطاراتها لسنوات قادمة.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- end Disclaimer: Care Instructions -->



						<!--Movie must read start here -->
						<div class="movie-must-read-wrap">
                            <div class="movie-must-title">
                                <h3 class="font-md color-light-black pt-40">**ملاحظات هامة:**</h3>
                                <p class="font-sm color-grey pt-10">
                                    - الشركة غير مسؤولة عن أي أضرار ناتجة عن سوء الاستخدام، أو التعامل الخاطئ، أو العوامل الخارجية بعد تسليم العمل والتوقيع عليه.
                                    <br>- **عدم الالتزام بتعليمات العناية بـ MR MDF قد يؤدي إلى إلغاء الضمان** على الأعمال الخشبية.
                                    - سيتم احتساب تكاليف أي تعديلات بعد التسليم وفقاً لأسعار الشركة القياسية.
                                </p>
                            </div>
                        </div>

						<!--Movie must read end here -->

                        <hr style="border: 2px solid #3742FA;color: #3742FA !important;">

                        <br><br>
                        <!-- start signature -->
                        <div style="margin-bottom: 169px;" class="container">
							<div class="movie-must-title">
								<div class="font-sm color-grey pt-10">
                                    <span style="position: absolute;left: 10px;" class="text-right"> <strong>السيد/السيدة: {{ $project->client->getTranslatedAttribute('full_name') }}</strong></span>
                                    <span style="float: left;margin-top: 60px;"><img style="width: 200px;height: 100px;" src="{{ Voyager::image($project->img_signatur) }}" alt="signature"></span>
                                    <span style="position: absolute;right: 70px;margin-top: -55px;" class="text-right"> <strong id="currentDate"></strong></span>
                                    <span style="position: absolute;right: 70px;" class="text-right"> <strong>السيد: Shujjat</strong></span>
                                    <span style="float: right;margin-right: -49px;" class="text-right"><img style="height: 200px;margin-right: 43px;" src="{{ asset('assets/document/img/signature.svg') }}" alt="Mr: Shujjat"/></span>

                                </div>
							</div>
						</div><br><br>

                        <hr style="border: 2px solid #3742FA;color: #3742FA !important;">

					</div>
				</section>
				<!--Invoice content end here -->


			</div>
			<!--Bottom content start here -->
			<section class="agency-bottom-content d-print-none" id="agency_bottom">
				<!--Print-download content start here -->

                <style>
                    .invo-buttons-wrap .invo-btns .print-btn{
                        border-radius: 0px 24px 24px 0px;
                    }
                    .invo-buttons-wrap .invo-btns .download-btn{
                        border-radius: 24px 0px 0px 24px;
                    }
                </style>
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
							<span class="inter-700 medium-font">طباعة</span>
						</a>
					</div>
					<div class="invo-down-btn invo-btns">
						<a class="download-btn" id="generatePDF">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_5_246)">
								<path d="M4 17V19C4 19.5304 4.21071 20.0391 4.58579 20.4142C4.96086 20.7893 5.46957 21 6 21H18C18.5304 21 19.0391 20.7893 19.4142 20.4142C19.7893 20.0391 20 19.5304 20 19V17" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M7 11L12 16L17 11" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M12 4V16" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></g><defs><clipPath id="clip0_5_246"><rect width="24" height="24" fill="white"/></clipPath></defs>
							</svg>
							<span class="inter-700 medium-font">تحميل</span>
						</a>
					</div>
				</div>
				<!--Print-download content end here -->
				<!--Note content start -->
				<div class="invo-note-wrap">
					<div class="note-title">
						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_8_240)"><path d="M14 3V7C14 7.26522 14.1054 7.51957 14.2929 7.70711C14.4804 7.89464 14.7348 8 15 8H19" stroke="#12151C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M17 21H7C6.46957 21 5.96086 20.7893 5.58579 20.4142C5.21071 20.0391 5 19.5304 5 19V5C5 4.46957 5.21071 3.96086 5.58579 3.58579C5.96086 3.21071 6.46957 3 7 3H14L19 8V19C19 19.5304 18.7893 20.0391 18.4142 20.4142C18.0391 20.7893 17.5304 21 17 21Z" stroke="#12151C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M9 7H10" stroke="#12151C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M9 13H15" stroke="#12151C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M13 17H15" stroke="#12151C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></g><defs><clipPath id="clip0_8_240"><rect width="24" height="24" fill="white"/>
						</clipPath></defs></svg>
						<span class="font-md color-light-black">ملاحظة:</span>
					</div>
					<h3 class="font-md-grey color-grey note-desc">هذا هو الإيصال الذي تم إنشاؤه بواسطة الكمبيوتر ولا يتطلب توقيعًا فعليًا.</h3>
				</div>
				<!--Note content end -->
			</section>
			<!--Bottom content end here -->
		</div>
	</div>

  <div class="float-div no_print">
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
