<?php 
    $this->db->where('id',$id);
    $query_main_data = $this->db->get("host");

    if ($query_main_data->num_rows() > 0) {
        $value = $query_main_data->row();


        $get_user_data = $this->user_model->get_user_email_phone($value->userid);
            if ($get_user_data->num_rows()>0) {
                $user_data = $get_user_data->row();

 
?>
<div class="directory-profile page_height">

    <div class="dp-header">
        <div class="dph-reviews" id="street_map" style="height: 400px"></div>
    </div>
 


    <div class="dp-header">
        <div class="container">
            <div class="row">
                <div class="col-md-8 dph-info">

                    <?php if ($user_data->oauth_provider == 'facebook'){ ?>
                        <img src="<?php echo $user_data->picture_url; ?>" class="profile-img" alt="host profile picture">
                    <?php }else{ ?>
                        <img src="<?php echo base_url() ?>assets/images/profile/<?php echo $user_data->images; ?>" class="profile-img"  onerror="this.src='<?php echo base_url() ?>assets/images/profile/alt.png';">
                    <?php } ?>

                    <div class="location_style">
                        <h4><?php echo $value->title; ?></h4>
                        <div class="col-sm-6" style="margin-bottom: 10px">
                            <div class="name_dollar">
                                <p style="font-size: 20px"><i class="fa fa-usd"></i> <?php echo $value->amount; ?></p>
                                <p style="font-size: 20px"><i class="fa fa-user"></i> <?php echo $user_data->fname.' '.$user_data->lname; ?></p>
                            </div>
                            
                        </div>
                        <div class="col-sm-6">
                            <div class="name_dollar">
                                <?php
                                if ($value->book == 0) {  ?>
                                    <p>
                                        <?php if (!empty($user_data->phone)) { ?>
                                        <i class="fa fa-phone-square"></i> <?php echo $user_data->phone; ?>
                                        <?php } ?>
                                    </p>
                                    <p>
                                        <?php if (!empty($user_data->email)) { ?>
                                        <i class="fa fa-fa fa-envelope-o"></i> <?php echo $user_data->email; ?>
                                        <?php } ?>
                                    </p>
                                    
                                <?php }else{ ?>
                                    

                                    <p><i class="fa fa-lock"></i> Contact information will be revealed here after you make a booking.</p>
                                <?php } ?>
                            </div>
                        </div>
                        
                        
                    </div>
                </div>
                <div class="col-md-4 dph-reviews">
                    
                    


                    <?php 
                        $sum = 0;
                        $get_reviews = $this->user_model->get_host_by_data($value->id,$value->userid,'reviews');
                        if ($get_reviews->num_rows() > 0) { 
                            $total_review = $get_reviews->num_rows();

                            foreach ($get_reviews->result_array() as $value_review) {
                                $sum = $value_review['star']+$sum;
                            }
                            $sum_show = $sum/$total_review;
                        ?>
                            <div class="review-count"> 
                                <p><span><?php echo number_format($sum_show, 1); ?></span> <?php echo $total_review ; ?> reviews</p>

                                <span class="star-ratings star_rating">
                                    <?php if ($sum_show==1 || $sum_show<1) {
                                        echo '<i class="fa fa-star"></i>';
                                    }else if ($sum_show==2 || $sum_show<2) {
                                        echo '<i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i>';
                                    }else if ($sum_show==3 || $sum_show<3) {
                                        echo '<i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star"></i>';
                                    }else if ($sum_show==4 || $sum_show<4) {
                                        echo '<i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i>';
                                    }else if ($sum_show==5 || $sum_show<5) {
                                        echo '<i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i>';
                                    }
                                    ?>
                                </span>
                            </div>
                        <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <div class="dp-info">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="dp-about">
                        <p class="space120"> 

                            <img src="<?php echo base_url() ?>assets/images/icons/2.png" alt=""> 
                            <span class="lead">Location</span>


                            <span class="lpps"><i class="fa fa-street-view" style="font-size: 12px"></i> Street: </span><?php echo $value->street; ?></br>
                            <?php if (!empty($value->borough)) { ?>
                               <span class="lpps"><i class="fa fa-location-arrow"></i> County/Borough: </span><?php echo $value->borough; ?></br>
                            <?php } ?>
                            <span class="lpps"><i class="fa fa-map-marker"></i> City: </span><?php echo $value->city; ?></br>
                            <span class="lpps"><i class="fa fa-map-marker"></i> State: </span><?php echo $value->state; ?></br>
                            <span class="lpps"><i class="fa fa-globe" style="font-size: 12px"></i> Country: </span><?php echo $value->country; ?></br>


                        </p>
                        <p class="space80">
                            <img src="<?php echo base_url() ?>assets/images/icons/3.png" alt=""> 
                            <span class="lead">Parking Capacity</span> 

                            <span class="lpps"><i class="fa fa-calendar-check-o"></i> Vehicles Types: </span><?php echo $value->rv_types; ?></br>
                            <span class="lpps"><i class="fa fa-hand-o-right"></i> Number of spaces: </span><u><?php echo $value->rv_sizes; ?></u> </br>
                        </p>
                        <p class="space80">
                            <img src="<?php echo base_url() ?>assets/images/icons/bt1.png" alt=""> 
                            <span class="lead">Availability</span> 

                            <span class="lpps"><i class="fa fa-calendar-check-o"></i> Available from: </span><?php echo $value->from_date; ?></br>
                            <span class="lpps"><i class="fa fa-calendar-times-o"></i> Available till: </span><?php echo $value->to_date; ?></br>
                        </p>
                        <p class="last"> 
                            <img src="<?php echo base_url() ?>assets/images/icons/bt3.png" alt=""> 
                            <span class="lead">Description</span> 

                            <span class="descript" style="text-align: justify;"><?php echo $value->description; ?></span> 
                        </p>
                    </div>



                    <div class="dp-reviews">
                        <div class="dpr-header">
                        <?php 
                        $sum = 0;
                        $get_reviews = $this->user_model->get_host_by_data($value->id,$value->userid,'reviews');
                        if ($get_reviews->num_rows() > 0) { 
                            $total_review = $get_reviews->num_rows();

                            foreach ($get_reviews->result_array() as $value_review) {
                                $sum = $value_review['star']+$sum;
                            }
                            $sum_show = $sum/$total_review;
                        ?>
                            <div class="review-count"> 
                                <?php
                                    echo number_format($sum_show, 1);
                                ?>

                                <span class="star-ratings star_rating">
                                    <?php if ($sum_show==1 || $sum_show<1) {
                                        echo '<i class="fa fa-star"></i>';
                                    }else if ($sum_show==2 || $sum_show<2) {
                                        echo '<i class="fa fa-star"></i> <i class="fa fa-star"></i>';
                                    }else if ($sum_show==3 || $sum_show<3) {
                                        echo '<i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>';
                                    }else if ($sum_show==4 || $sum_show<4) {
                                        echo '<i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>';
                                    }else if ($sum_show==5 || $sum_show<5) {
                                        echo '<i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>';
                                    }
                                    ?>
                                </span>


                                <p><?php echo $total_review ; ?> Reviews</p>
                            </div>
                        <?php }else{
                            echo('<div class="review-count"> <p>No reviews yet!</p></div>');
                        } ?>

                            <?php if (empty($this->session->userdata('airbnb')) || empty($this->session->userdata('web_session')) || empty($this->session->userdata('user'))) { ?>
                                <a href="#" class="dpr-btn" data-toggle="modal" data-target="#login_model" data-tab="login">Login</a>
                            <?php }else{ 

                                $this->db->where('m_userid', $this->session->userdata('airbnb'));
                                $this->db->where('hostid', $value->id);
                                $this->db->where('payment_status','success');
                                $this->db->where('status','1');
                                $pay_query = $this->db->get('payments');
                                if ($pay_query->num_rows()>0) {
                            ?>

                            <a href="#" class="dpr-btn" data-toggle="modal" data-target="#write_a_review"> <img src="<?php echo base_url() ?>assets/images/icons/4.png" alt="">Write a review</a>

                            <input type="hidden" id="hostid" value="<?php echo $value->id; ?>">
                            <input type="hidden" id="userid" value="<?php echo $value->userid; ?>">

                            <div class="modal fade-scale" id="write_a_review">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-close"></i></button>
                                            <h4 class="modal-title text-center">Write a review</h4>
                                        </div>
                                        <div class="modal-body" style="background: #ffffff;">

                                            <div class="col-md-offset-1 col-sm-offset-1 col-md-10 col-sm-10 col-lg-10" style="margin-top: 20px;">

                                                
                                                <div class="form-group" style="margin-bottom: 30px;">
                                                    <label for="name">Ratting: </label>
                                                    <div class="ratControl">
                                                        <div id="ratingBox" class="additional"></div>
                                                        <input name="rate" type="hidden"/><br>
                                                        <input type="hidden" name="rank" id="rating">
                                                    </div>
                                                </div>

                                                <div class="form-group" style="margin-bottom: 30px;">
                                                    <label for="name">Title: </label>
                                                    <input type="text" id="title" class="form-control">
                                                </div>

                                                <div class="form-group" style="margin-bottom: 30px;">
                                                    <label for="name">Comment: </label>
                                                    <textarea name="description" id="comments" rows="5" class="form-control"></textarea>
                                                </div>

                                                <div class="form-group text-right">
                                                    <button type="button" class="btn btn-default" onclick="review_submit()">Submit</button>
                                                </div>
                                                


                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                            <?php }} ?>

                        </div>

                        


                        <script type="text/javascript" src="<?php echo base_url() ?>assets/js/rating.js"></script>
                        <script type="text/javascript">
                        $(document).ready(function () {
                            $("#ratingBox").rating({
                                complete: function (index) {
                                    $("[name=rate], [name=rank]").val(index);
                                },
                                load: function (index) {
                                    $("[name=rate], [name=rank]").val(index);
                                }
                            });
                        });
                        </script> <!-- review end -->



                        <ul class="dpr-comments">

                            <?php
                                foreach ($get_reviews->result_array() as $values_review) {
                                    $star_db = $values_review['star'];

                                    $r_id = $values_review['r_id'];

                                    $this->db->where('id',$r_id);
                                    $row_query = $this->db->get('alluser');
                                    $row_user = $row_query->row();
                                    $user_name_review = $row_user->fname.' '.$row_user->lname;
                                    $user_name_id = $row_user->id;

                                    $file_image_user = $row_user->images;
                                    $file_image_url = $row_user->picture_url;
                            ?>
                                <li id="review<?php echo $values_review['id'] ?>">
                                    <?php 
                                    if ($row_user->oauth_provider == 'facebook') {
                                    ?>
                                        <img src="<?php echo $file_image_url ?>" alt="admin image" class="img -img-responsive img-cicrle image_review">
                                    <?php }else{ ?>
                                        <img src="<?php echo base_url() ?>assets/images/profile/<?php echo $file_image_user; ?>" alt="admin image" class="img -img-responsive img-cicrle image_review">
                                    <?php } ?>
                                        
                                    <p> 
                                        <span class="lead">
                                            <?php echo $values_review['title'] ?>
                                            <span class="star-ratings">
                                                <?php if ($star_db==1) {
                                                    echo '<i class="fa fa-star"></i>';
                                                }else if ($star_db==2) {
                                                    echo '<i class="fa fa-star"></i> <i class="fa fa-star"></i>';
                                                }else if ($star_db==3) {
                                                    echo '<i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>';
                                                }else if ($star_db==4) {
                                                    echo '<i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>';
                                                }else if ($star_db==5) {
                                                    echo '<i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>';
                                                }
                                                ?>
                                            </span>
                                            <?php 
                                            if ($row_user->id == $this->session->userdata('airbnb')) {
                                            ?>
                                            <button value="<?php echo $values_review['id'] ?>" class="btn btn-sm btn-default" onclick="remove_review(this)" style="margin-left: 414px"><i class="fa fa-times"></i></button>
                                            <?php } ?>
                                        </span> 

                                        <?php echo $values_review['comment'] ?>
                                    </p>
                                    <div class="dpr-like"><?php echo $user_name_review ?></div>
                                </li>


                            <?php } ?>

                        </ul>

                    </div>
                </div>

                <div class="col-md-4">
                    <div class="book-table">
                    <?php if($value->book==1){ ?>

                            <?php

                            $this->db->where('hostid', $value->id);
                            $this->db->where('payment_status','success');
                            $this->db->where('status','1');
                            $pay_query = $this->db->get('payments');
                            if ($pay_query->num_rows()>0) {
                                echo '<h5>Previous selected booking</h5>';
                                foreach ($pay_query->result_array() as $pay_query_value) {
                                    echo '<p class="book_date">'.$pay_query_value['from_date'].' to '.$pay_query_value['to_date'].'</p>';
                                }
                            }

                            ?>

                        
                        <div class="bt-head text-center">
                            <h5>Request to Book</h5>
                            <p>100% refundable · You won’t be charged yet</p>
                        </div>
                        <div id="tabs-container">
                            
                            <?php if (empty($this->session->userdata('airbnb')) || empty($this->session->userdata('web_session'))  || empty($this->session->userdata('user'))) { ?>
                                <a href="#" class="btn btn-block btn-default btn-lg" data-toggle="modal" data-target="#login_model" data-tab="login">Login</a>
                            <?php }else{ ?>

                                
                                <div class="input-group input-daterange">
                                    <input type="hidden" value="<?php echo $value->id; ?>" id="host_id">
                                    <input type="hidden" value="<?php echo $this->session->userdata('airbnb'); ?>" id="m_id">
                                    <input type="hidden" value="<?php echo $value->userid; ?>" id="c_id">

                                    <input id="from" type="text" class="form-control host_date_from" value="<?php echo $value->from_date ?>" readonly disable>

                                  <div class="input-group-addon">to</div>
                                    <input id="to" type="text" class="form-control host_date_to" value="<?php echo $value->to_date ?>" readonly disable>

                                </div>
                                <span id="show_payment_status" style="color:#FA824C"></span>
                                <center>
        
                                    <button class="btn btn-default btn-block btn-lg" onclick="return park_now()">Get this Spot</button>
                                    
                                </center>

                            <?php } ?>

                        </div>
                    <?php } ?>
                        <div class="call-rep">
                            <p class="lead">Would you like to report a problem?</p>
                            <p>Email our representative.</p> <a href="#">admin@airrv.com</a> 
                        </div>
                    </div>                   
                    

                </div>
            </div>
        </div>
    </div>
</div>


<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCKf3D0CKv98W_EGTk5QfKANDh0CZuAlNc&libraries=places&callback=initialized" async defer></script>

<script>

    function initialized() {


      var location = '<?php echo $value->location; ?>';

      geocoder = new google.maps.Geocoder();
      var mapOptions = 
      {
        zoom: 15
      }

      map = new google.maps.Map(document.getElementById('street_map'), mapOptions);
      
      codeAddresss(location);//call the function


      
    }
        

    function codeAddresss(address) 
    {
      geocoder.geocode( {address:address}, function(results, status) 
      {
        if (status == google.maps.GeocoderStatus.OK) 
        {
          map.setCenter(results[0].geometry.location);//center the map over the result
          //place a marker at the location
          var marker = new google.maps.InfoWindow(
          {
              map: map,
              position: results[0].geometry.location,
              zoom: 18,
              content: '<div class="map_info_style"><i class="fa fa-map-marker" aria-hidden="true"></i> ' +address+'</div>'
          });
        } else {
          alert('Geocode was not successful for the following reason: ' + status);
       }
      });
    }

</script>
<?php }} ?>