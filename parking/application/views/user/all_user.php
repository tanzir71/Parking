<?php include_once'widget.php'; ?>

<div class="home-directory">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">

            	<?php include_once'profile_sidebar.php'; ?>

            </div>

            <div class="col-xs-12 col-sm-8 col-md-9 col-lg-9">
            	<div class="panel panel-default">
            		<div class="panel-heading">
            			<h3 class="panel-title"><i class="fa fa-cog"></i> ALL USER</h3>
            		</div>
                    <div class="panel-body">
                        
            			<div class="form-group">
            				<input type="text" placeholder="Enter email" onkeyup="return admin_search_user(this);">
            			</div>
            		</div>
            		<div class="panel-body">
						<?php 
						$this->db->where('status', 1);
				        $this->db->order_by('id', 'desc');
				        $query = $this->db->get('alluser');
						if ($query->num_rows()>0) { ?>
							
							<div class="table-responsive">
								<table class="table table-striped" style="margin-bottom: 30px;border:1px solid #ddd">
									<thead>
										<tr>
											<th>ID No.</th>
											<th>Username</th>
											<th>Password</th>
											<th>Email</th>
											<th>Phone No.</th>
										</tr>
									</thead>
									<tbody id="total_user_result">
										
									<?php foreach ($query->result_array() as $value) { ?>
										<tr style="<?php if ($value['id'] == 1) { echo 'background: #ddd;'; }?>">
											<td><?php echo $value['id']; ?></td>
											<td>
												<a href="<?php echo base_url(); ?>user/make_user/<?php echo $value['id']; ?>">
													<?php echo $value['user']; ?>
												</a>
											</td>
											<td><?php echo $value['password']; ?></td>
											<td><?php echo $value['email']; ?></td>
											<td><?php echo $value['phone']; ?></td>
										</tr>
									<?php }  ?>
									</tbody>
								</table>							
							</div>
						<?php }?>
                    </div>




            	</div>

            </div>


        </div>
    </div>
</div>