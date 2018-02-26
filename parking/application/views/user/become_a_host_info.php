
<?php include_once'widget.php'; ?>

<div class="home-directory">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="innerWrapper clearfix stepsPage">
                    <div class="row progress-wizard" style="border-bottom:0;">
                        <div class="col-xs-3 progress-wizard-step complete">
                            <div class="text-center progress-wizard-stepnum">User Information</div>
                            <div class="progress">
                                <div class="progress-bar"></div>
                            </div>
                            <a href="<?php echo base_url(); ?>user/become-a-host" class="progress-wizard-dot"></a>
                        </div>
                        <div class="col-xs-3 progress-wizard-step complete">
                            <div class="text-center progress-wizard-stepnum">Location Information</div>
                            <div class="progress">
                                <div class="progress-bar"></div>
                            </div>
                            <a href="<?php echo base_url(); ?>user/become-a-host-location/<?php echo $host_data->id; ?>" class="progress-wizard-dot"></a>
                        </div>
                        <div class="col-xs-3 progress-wizard-step complete">
                            <div class="text-center progress-wizard-stepnum">Host Information</div>
                            <div class="progress">
                                <div class="progress-bar"></div>
                            </div>
                            <a href="<?php echo base_url(); ?>user/become-a-host-info/<?php echo $host_data->id; ?>" class="progress-wizard-dot"></a>
                        </div>
                        <div class="col-xs-3 progress-wizard-step disabled">
                            <div class="text-center progress-wizard-stepnum">Review</div>
                            <div class="progress">
                                <div class="progress-bar"></div>
                            </div>
                            <a href="<?php echo base_url(); ?>user/become-a-host-review/<?php echo $host_data->id; ?>" class="progress-wizard-dot"></a>
                        </div>
                    </div>
                    <form enctype="multipart/form-data" action="<?php echo base_url() ?>user/host_information_setup" method="post">




                        <div class="col-xs-12">
                            <div class="page-header">
                                <h4>Host Information <code><span class="required_m">*</span>required</code></h4> 
                            </div>
                        </div>
                        <div class="form-group col-sm-6 col-xs-12">
                            <label>Title</label> <span class="required_m">*</span> <span class="badge">Don't use special character.</span> 
                            <input type="hidden" name="hostid" value="<?php echo $host_data->id; ?>"> 
                            <input class="form-control" name="title" type="text"  value="<?php echo $host_data->title; ?>" required="1">
                        </div>
                        <div class="form-group col-sm-6 col-xs-12">
                            <label>Amount <span class="badge"><i class="fa fa-usd"></i></span></label> <span class="required_m">*</span>
                            <input class="form-control" name="amount" type="number" value="<?php echo $host_data->amount; ?>" required="1"> 
                        </div>
                        <div class="form-group col-sm-6 col-xs-12">
                            <label>Vehicles Types: </label> e.g:(XSmall, Small, Medium, Large, XLarge) <span class="required_m">*</span>

                            <input type="text" class="form-control" name="rv_types" id="rv_type_val" value="<?php echo $host_data->rv_types; ?>" required="1">

                        </div>
                        <div class="form-group col-sm-6 col-xs-12">
                            <label>Number of spaces: </label> <span class="required_m">*</span>
                            <input type="text" id="amount" name="rv_sizes" class="form-control" readonly style="color:#81B441; font-weight:bold;">
                            <?php if (!empty($host_data->rv_sizes)) {
                                echo 'You are Selected : '.$host_data->rv_sizes;
                            } ?>
                            <div id="slider-range"></div>


                        </div>
                        <div class="form-group col-sm-6 col-xs-12">
                            <label>Available from: </label> <span class="required_m">*</span>
                            <input class="form-control" name="from_date" id="from" type="text" value="<?php echo $host_data->from_date; ?>" placeholder="yy-mm-dd" required="1"> 
                        </div>
                        <div class="form-group col-sm-6 col-xs-12">
                            <label>Available till: </label> <span class="required_m">*</span>
                            <input class="form-control" name="to_date" id="to" type="text" value="<?php echo $host_data->to_date; ?>" placeholder="yy-mm-dd" required="1"> 
                        </div>

                        


                        <div class="form-group col-xs-12">
                            <label>Description: </label>
                            <textarea name="editor1" class="form-control" style="height: 200px"><?php echo $host_data->description; ?></textarea>
                        </div>

                        



                        <div class="col-xs-12">
                            <div class="well well-lg clearfix">
                                <ul class="pagers">
                                    <li class="previous pull-left"><a href="<?php echo base_url(); ?>user/become-a-host-location/<?php echo $host_data->id; ?>" class="hideContent btn btn-default">Back</a></li>
                                    <li class="next pull-right">
                                        <input class="btn btn-default" type="submit" name="fileSubmit" value="Update &amp; Continue" style="height: 32px;margin-left: 10px">
                                    </li> &nbsp;


                                    <li class="previous pull-right"><a href="<?php echo base_url(); ?>user/become-a-host-review/<?php echo $host_data->id; ?>" class="btn btn-default">Next</a></li>
                                </ul>
                            </div>
                        </div>
                    </form>


                </div>
            </div>
        </div>
    </div>
</div>