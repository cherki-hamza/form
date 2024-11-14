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
        <h5>Step 4: Client Confirmation</h5>
        <p>I, the undersigned, confirm that the above-mentioned works have been completed to my satisfaction and according to the agreed specifications. I have inspected the work and confirm there are no outstanding issues or rectifications  . From this point forward, <strong>capitalbaths</strong> will not be held responsible for any damages or modifications unless covered by the warranty agreement (if applicable). Any future work requested will be treated as a new project.</p>

        <div class="form-group">
            <label class="my-3" for="clientSignature">Signature of Client:</label>
            <!-- <input type="text" id="clientSignature" class="form-control" name="clientSignature" placeholder="Client Signature"  > -->
                <!-- Content -->
                 <!-- start signature 1 -->
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1>E-Signature</h1>
                            <p>Sign in the canvas below and save your signature as an image!</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="">
                                <div class="col-12 col-md-12 text-center">
                                    <canvas id="sig-canvas" width="350" height="160">
                                        Get a better browser, bro.
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
                            <button class="btn btn-primary" id="sig-submitBtn">Submit Signature</button>
                            <button class="btn btn-danger" id="sig-clearBtn">Clear Signature</button>
                        </div>
                    </div>
                    <br/>
                    <div class="row">
                        <div class="col-md-12">
                            <textarea style="display: none;" id="sig-dataUrl" class="form-control" rows="5">Data URL for your signature will go here!</textarea>
                        </div>
                    </div>
                    <br/>
                </div>
                <!-- end signature 1 -->

        </div>

        <div class="form-group">
            <label for="date">Date:</label>
            <input style="max-width: 400px;" type="date" id="form_date" class="form-control"  name="form_date">
        </div>
    </div>
</div>
