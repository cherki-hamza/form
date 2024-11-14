<div id="second" class="tab">

    <div class="form-step">

        <h5><strong>الخطوة 1: تقييم جودة المنتجات المثبتة</strong></h5>

        @foreach ($project->products as $p)
        <div style="border: 1px solid rgb(94, 168, 230);padding: 5px;border-radius: 20px;" class="form-group my-3">
            <label for="productQualityVanity{{ $p->id }}">
                <strong>{{ $p->getTranslatedAttribute('name') }}:</strong>
                <span style="color: green;">(اختر تقييمًا من هذه التقييمات الخمسة)</span>
            </label>
            <div id="productQualityVanity{{ $p->id }}" class="form-control" style="border: none; padding: 0;">
                <div>
                    <input type="radio" id="rating1{{ $p->id }}" name="productQualityVanity[{{ $p->id }}]" value="1">
                    <label for="rating1{{ $p->id }}">1 - ضعيف 😕</label>
                </div>
                <div>
                    <input type="radio" id="rating2{{ $p->id }}" name="productQualityVanity[{{ $p->id }}]" value="2">
                    <label for="rating2{{ $p->id }}">2 - عادل 😐</label>
                </div>
                <div>
                    <input type="radio" id="rating3{{ $p->id }}" name="productQualityVanity[{{ $p->id }}]" value="3">
                    <label for="rating3{{ $p->id }}">3 - جيد 🙂</label>
                </div>
                <div>
                    <input type="radio" id="rating4{{ $p->id }}" name="productQualityVanity[{{ $p->id }}]" value="4">
                    <label for="rating4{{ $p->id }}">4 - جيد جدًا 😊</label>
                </div>
                <div>
                    <input type="radio" id="rating5{{ $p->id }}" name="productQualityVanity[{{ $p->id }}]" value="5">
                    <label for="rating5{{ $p->id }}">5 - ممتاز 😃</label>
                </div>
            </div>
        </div>
        @endforeach


        <div style="border: 1px solid rgb(94, 168, 230);padding: 5px;border-radius: 20px;" class="form-group my-3">
            <label for="comment_quality"><strong>تعليقات حول جودة المنتج:</strong></label>
            <textarea id="comment_quality" class="form-control" name="product_comment" rows="3" placeholder="تعليقات إضافية حول جودة المنتج"></textarea>
        </div>

        <br><br><br>
        <h5>الخطوة 2: تقييم أداء فريق التركيب</h5>

        <div style="border: 1px solid rgb(94, 168, 230);padding: 5px;border-radius: 20px;" class="form-group my-3">
            <label for="teamProfessionalism"><strong>الاحترافية:</strong> <span style="color: green;">(اختر تقييمًا من هذه التقييمات الخمسة)</span></label>
            <div id="teamProfessionalism" class="form-control" style="border: none; padding: 0;">

                @for ($i = 1; $i <= 5; $i++)
                <div>
                    <input type="radio" id="professionalismRating{{ $i }}" name="teamProfessionalism" value="{{ $i }}">
                    <label for="professionalismRating{{ $i }}">{{ $i }} -
                        @if ($i === 1) Poor 😕
                        @elseif ($i === 2) Fair 😐
                        @elseif ($i === 3) Good 🙂
                        @elseif ($i === 4) Very Good 😊
                        @elseif ($i === 5) Excellent 😃
                        @endif
                    </label>
                </div>
            @endfor

            </div>
        </div>

        <div style="border: 1px solid rgb(94, 168, 230);padding: 5px;border-radius: 20px;" class="form-group my-3">
            <label for="teamPunctuality"><strong>الالتزام بالمواعيد:</strong> <span style="color: green;">(اختر تقييمًا من هذه التقييمات الخمسة)</span></label>
            <div id="teamPunctuality" class="form-control" style="border: none; padding: 0;">

                @for ($i = 1; $i <= 5; $i++)
                <div>
                    <input type="radio" id="punctualityRating{{ $i }}" name="teamPunctuality" value="{{ $i }}">
                    <label for="punctualityRating{{ $i }}">{{ $i }} -
                        @if ($i === 1) ضعيف 😕
                        @elseif ($i === 2) عادل 😐
                        @elseif ($i === 3) جيد 🙂
                        @elseif ($i === 4) جيد جدًا 😊
                        @elseif ($i === 5) ممتاز 😃
                        @endif
                    </label>
                </div>
                @endfor

            </div>
        </div>

        <div style="border: 1px solid rgb(94, 168, 230);padding: 5px;border-radius: 20px;" class="form-group my-3">
            <label for="teamCleanliness"><strong>النظافة:</strong> <span style="color: green;">(اختر تقييمًا من هذه التقييمات الخمسة)</span></label>
            <div id="teamCleanliness" class="form-control" style="border: none; padding: 0;">

                @for ($i = 1; $i <= 5; $i++)
                <div>
                    <input type="radio" id="cleanlinessRating{{ $i }}" name="teamCleanliness" value="{{ $i }}">
                    <label for="cleanlinessRating{{ $i }}">{{ $i }} -
                        @if ($i === 1) ضعيف 😕
                        @elseif ($i === 2) عادل 😐
                        @elseif ($i === 3) جيد 🙂
                        @elseif ($i === 4) جيد جدًا 😊
                        @elseif ($i === 5) ممتاز 😃
                        @endif
                    </label>
                </div>
                @endfor

            </div>
        </div>

        <div style="border: 1px solid rgb(94, 168, 230);padding: 5px;border-radius: 20px;" class="form-group my-3">
            <label for="teamSkill"><strong>المهارة/إتقان العمل:</strong> <span style="color: green;">(اختر تقييمًا من هذه التقييمات الخمسة)</span></label>
            <div id="teamSkill" class="form-control" style="border: none; padding: 0;">

                @for ($i = 1; $i <= 5; $i++)
                <div>
                    <input type="radio" id="skillRating{{ $i }}" name="teamSkill" value="{{ $i }}">
                    <label for="skillRating{{ $i }}">{{ $i }} -
                        @if ($i === 1) ضعيف 😕
                        @elseif ($i === 2) عادل 😐
                        @elseif ($i === 3) جيد 🙂
                        @elseif ($i === 4) جيد جدًا 😊
                        @elseif ($i === 5) ممتاز 😃
                        @endif
                    </label>
                </div>
                @endfor

            </div>
        </div>

        <div style="border: 1px solid rgb(94, 168, 230);padding: 5px;border-radius: 20px;" class="form-group my-3">
            <label for="comment_performance"><strong>تعليقات حول أداء فريق التركيب:</strong></label>
            <textarea id="comment_performance" class="form-control" name="team_performance_comments" rows="3" placeholder="تعليقات إضافية حول أداء فريق التركيب"></textarea>
        </div>
    </div>


</div>
