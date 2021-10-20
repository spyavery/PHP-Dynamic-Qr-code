<form class="form" action="./add_static.php?type=text" method="post" id="static_form" enctype="multipart/form-data">
    <?php include BASE_PATH.'/forms/qrcode_options.php'; ?>
<!-- Input forms -->
    <!-- <div class="col-sm-6">
        <div class="form-group">
            <label>ID Number (Kimlik Numaralı) *</label>
             <textarea class="form-control" name="text" value="" rows="5" placeholder=""></textarea> 
            <input type="text" class="form-control" name="text" value="" placeholder=""></textarea>
        </div>
    </div> -->

    <div class="col-sm-12 mb-2">
    <div class="row">
    <div class="col-6 col-md-3">
            <div class="form-group">
                <label>Patient Full Name (Ad Soyad) *</label>
                <input type="text" name="uname" value="" placeholder="" class="form-control">
            </div>
        </div>

        <div class="col-6 col-md-3">
            <div class="form-group">
                <label>ID Number (Kimlik Numaralı) *</label>
                <input type="text" name="text" value="" placeholder="" class="form-control">
            </div>
        </div>
    
        <div class="col-6 col-md-4">
            <div class="form-group">
                <label>Date : *</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-clock"></i></span>
                    </div>
                    <input type="text" name="start" value="" class="form-control float-right" id="start">
                </div><!-- /.input group -->
            </div>
        </div>
    </div>
</div>

<div class="col-sm-12 mb-2">
    <div class="row">
    <div class="col-6 col-md-4">
            <div class="form-group">
                <label>Time: *</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-clock"></i></span>
                    </div>
                    <input type="text" name="end" value="" class="form-control float-right" id="end">
                </div><!-- /.input group -->
            </div>
        </div>

        <div class="col-6 col-md-3">
            <div class="form-group">
                <label>Result: </label>
                <input type="text" name="result" value="" placeholder="" class="form-control">
            </div>
        </div>
    </div>
</div>
    
    <div class="col-sm-12 mb-2">
    <div class="row">
        <div class="col-6 col-md-3">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>    
    </div>
</div>
                
</form>

<script src="plugins/moment/moment.min.js"></script>