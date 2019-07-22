<?php require_once 'includes/body/coverformscontroller/cateringcoverformccontroller.php'; ?>
<form class="form-horizontal"  role="form" method="POST" data-parsley-validate enctype="multipart/form-data">
    <?php
        if(isset($error))
        {
            foreach($error as $error)
            {
                 ?>
                 <div class="alert alert-danger" style = "">
                    <i class="glyphicon glyphicon-warning-sign"></i> &nbsp; <?php echo $error; ?>
                 </div>
                 <?php
            }
        }
    ?>

    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Banner image<span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="hidden" id="user_id" name="user_id" value="<?php echo $user->user_id; ?>" />
        <input type="hidden" id="user_name" name="user_name" value="<?php echo $user->user_name; ?>" />
            <input type="file" id="bannerimage" name="bannerimage" required="required" class="form-control col-md-7 col-xs-12" />
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">About catring service <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <textarea type="text" id="about" name="about" required="required" class="form-control col-md-7 col-xs-12" rows="5" ></textarea>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">About service delivery<span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <textarea type="text" id="servicedelivery" name="servicedelivery" required="required" class="form-control col-md-7 col-xs-12" rows="5" ></textarea>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Background color<span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="text" id="backgroundcolor" name="backgroundcolor" required="required" class="form-control col-md-7 col-xs-12" />
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Container color<span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="containercolor" name="containercolor" required="required" class="form-control col-md-7 col-xs-12" />
        </div>
    </div>

    <div class="form-group">
        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
            <button class="btn btn-primary" type="button">Cancel</button>
            <button class="btn btn-primary" type="reset">Reset</button>
            <button type="submit" id="postcateringcover" name="postcateringcover" class="btn btn-success">Submit</button>
        </div>
    </div>
</form>
