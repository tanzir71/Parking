<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">

        	<div class="panel panel-default" style="margin-top: 25px">
				<div class="panel-heading">
					<h3 class="panel-title">WELCOME <span style="text-transform: uppercase; color: #FA824C;font-weight: bold;">
					<?php
						$id=$this->session->userdata('admin');
						$this->db->where('id',$id);
						$info=$this->db->get('password');						
						$da=$info->row();						
						echo $da->user;
					?></span>
					</h3>
				</div>
				<div class="panel-body">

					<div class="col-md-4 col-lg-4 col-sm-4 col-xs-12">
			            <div class="dashModule">
			                <a href="<?php echo base_url() ?>admin/host-approval">
			                    <i class="fa fa-users"></i>
			                    <h3>BUYER &amp; VENDOR</h3>
			                </a>
			            </div>
			        </div>

			        <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12">
			            <div class="dashModule">
			                <a href="<?php echo base_url() ?>admin/host-approval">
			                    <i class="fa fa-list"></i>
			                    <h3>HOST LIST</h3>
			                </a>
			            </div>
			        </div>

			        <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12">
			            <div class="dashModule">
			                <a href="<?php echo base_url() ?>admin/payments">
			                    <i class="fa fa-credit-card"></i>
			                    <h3>PAYMENTS</h3>
			                </a>
			            </div>
			        </div>

				</div>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->