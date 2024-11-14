<div id="second" class="tab">

    <div class="form-step">

        <h5><strong>Step 1: Rate the Quality of Installed Products</strong></h5>

        @foreach ($project->products as $p)
        <div style="border: 1px solid rgb(94, 168, 230); padding: 5px; border-radius: 20px;" class="form-group my-3">
            <label for="productQualityVanity{{ $p->id }}">
                <strong>{{ $p->getTranslatedAttribute('name') }}:</strong>
                <span style="color: green;">(check one of these five ratings)</span>
            </label>
            <div id="productQualityVanity{{ $p->id }}" class="form-control" style="border: none; padding: 0;">
                <div>
                    <input type="radio" id="rating1{{ $p->id }}" name="productQualityVanity[{{ $p->id }}]" value="1">
                    <label for="rating1{{ $p->id }}">1 - Poor 😕</label>
                </div>
                <div>
                    <input type="radio" id="rating2{{ $p->id }}" name="productQualityVanity[{{ $p->id }}]" value="2">
                    <label for="rating2{{ $p->id }}">2 - Fair 😐</label>
                </div>
                <div>
                    <input type="radio" id="rating3{{ $p->id }}" name="productQualityVanity[{{ $p->id }}]" value="3">
                    <label for="rating3{{ $p->id }}">3 - Good 🙂</label>
                </div>
                <div>
                    <input type="radio" id="rating4{{ $p->id }}" name="productQualityVanity[{{ $p->id }}]" value="4">
                    <label for="rating4{{ $p->id }}">4 - Very Good 😊</label>
                </div>
                <div>
                    <input type="radio" id="rating5{{ $p->id }}" name="productQualityVanity[{{ $p->id }}]" value="5">
                    <label for="rating5{{ $p->id }}">5 - Excellent 😃</label>
                </div>
            </div>
        </div>
    @endforeach




        <div style="border: 1px solid rgb(94, 168, 230);padding: 5px;border-radius: 20px;" class="form-group my-3">
            <label for="comment_quality"><strong>Comments on Product Quality:</strong></label>
            <textarea id="comment_quality" class="form-control" name="product_comment" rows="3" placeholder="Additional comments on the product quality"></textarea>
        </div>

        <br><br><br>
        <h5>Step 2: Rate the Performance of the Installation Team</h5>

          <!-- Professionalism Rating -->
    <div style="border: 1px solid rgb(94, 168, 230);padding: 5px;border-radius: 20px;" class="form-group my-3">
        <label for="teamProfessionalism"><strong>Professionalism:</strong> <span style="color: green;">(select one of these five ratings)</span></label>
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

    <!-- Punctuality Rating -->
    <div style="border: 1px solid rgb(94, 168, 230);padding: 5px;border-radius: 20px;" class="form-group my-3">
        <label for="teamPunctuality"><strong>Punctuality:</strong> <span style="color: green;">(select one of these five ratings)</span></label>
        <div id="teamPunctuality" class="form-control" style="border: none; padding: 0;">
            @for ($i = 1; $i <= 5; $i++)
                <div>
                    <input type="radio" id="punctualityRating{{ $i }}" name="teamPunctuality" value="{{ $i }}">
                    <label for="punctualityRating{{ $i }}">{{ $i }} -
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

    <!-- Cleanliness Rating -->
    <div style="border: 1px solid rgb(94, 168, 230);padding: 5px;border-radius: 20px;" class="form-group my-3">
        <label for="teamCleanliness"><strong>Cleanliness:</strong> <span style="color: green;">(select one of these five ratings)</span></label>
        <div id="teamCleanliness" class="form-control" style="border: none; padding: 0;">
            @for ($i = 1; $i <= 5; $i++)
                <div>
                    <input type="radio" id="cleanlinessRating{{ $i }}" name="teamCleanliness" value="{{ $i }}">
                    <label for="cleanlinessRating{{ $i }}">{{ $i }} -
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

    <!-- Skill/Workmanship Rating -->
    <div style="border: 1px solid rgb(94, 168, 230);padding: 5px;border-radius: 20px;" class="form-group my-3">
        <label for="teamSkill"><strong>Skill/Workmanship:</strong> <span style="color: green;">(select one of these five ratings)</span></label>
        <div id="teamSkill" class="form-control" style="border: none; padding: 0;">
            @for ($i = 1; $i <= 5; $i++)
                <div>
                    <input type="radio" id="skillRating{{ $i }}" name="teamSkill" value="{{ $i }}">
                    <label for="skillRating{{ $i }}">{{ $i }} -
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
            <label for="comment_performance"><strong>Comments on Installation Team Performance:</strong>  </label>
            <textarea id="comment_performance" class="form-control" name="team_performance_comments" rows="3" placeholder="Additional comments on the installation team performance"></textarea>
        </div>
    </div>

</div>

