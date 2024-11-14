<div id="forth" class="tab">
    <style>
        #sig-canvas {
            border: 2px dotted #CCCCCC;
            border-radius: 15px;
            cursor: crosshair;
          }
          #sig-canvas2 {
            border: 2px dotted #CCCCCC;
            border-radius: 15px;
            cursor: crosshair;
          }
      </style>
      <div class="form-step">
        <h5>الخطوة 4: تأكيد العميل</h5>
        <p>أقر أنا الموقع أدناه بأن الأعمال المذكورة أعلاه قد تم إنجازها بما يرضيني وبحسب المواصفات المتفق عليها. لقد قمت بفحص العمل وأؤكد أنه لا توجد أي مشكلات عالقة أو تعديلات. اعتباراً من هذه النقطة، لن تتحمل <strong>كابيتال باثس</strong> أي مسؤولية عن الأضرار أو التعديلات ما لم يشملها اتفاق الضمان (إن وجد). سيتم التعامل مع أي أعمال مستقبلية مطلوبة كمشروع جديد.</p>

        <div class="form-group">
            <label class="my-3" for="clientSignature">توقيع العميل:</label>
            <!-- Content -->
            <!-- بداية توقيع إلكتروني -->
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>توقيع إلكتروني</h1>
                        <p>قم بالتوقيع في القماش أدناه واحفظ توقيعك كصورة!</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="">
                            <div class="col-12 col-md-12 text-center">
                                <canvas id="sig-canvas" width="350" height="160">
                                    قم باستخدام متصفح أفضل.
                                </canvas>
                            </div>
                            <div class="col-12 col-md-12 text-center my-3">
                               <img name="signature_image" style="width: 345px;" id="sig-image" src="https://img.freepik.com/premium-vector/fake-signature-hand-drawn-sample-own-autograph_649512-1796.jpg?semt=ais_hybrid" alt="Your signature will go here!"/>
                               <input type="hidden" name="img_signature" id="img_signature" value="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <button class="btn btn-primary" id="sig-submitBtn">إرسال التوقيع</button>
                        <button class="btn btn-danger" id="sig-clearBtn">مسح التوقيع</button>
                    </div>
                </div>
                <br/>
                <div class="row">
                    <div class="col-md-12">
                        <textarea style="display: none;" id="sig-dataUrl" class="form-control" rows="5">عنوان بيانات توقيعك سيظهر هنا!</textarea>
                    </div>
                </div>
                <br/>
            </div>
            <!-- نهاية توقيع إلكتروني -->
        </div>

        <div class="form-group">
            <label for="date">التاريخ:</label>
            <input style="max-width: 400px;" type="date" id="form_date" class="form-control"  name="form_date" >
        </div>
    </div>

</div>
