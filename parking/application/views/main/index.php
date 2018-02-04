<div class="navbar-section">
    <nav class="navbar navbar-inverse find-park-nav" role="navigation">
        <div class="container">
            
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <form class="navbar-form navbar-left" role="search" action="#">
                    <div class="form-group">
                        <input type="text" id="location_input" autofocus="1" placeholder="Enter location" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <input type="text" id="from" class="picker" placeholder="Check In">
                    </div>
                    <button type="submit" id="final_search">Search <img src="<?php echo base_url() ?>assets/images/icons/search.png" alt="" /> </button>
                </form>
            </div><!-- /.navbar-collapse -->
        </div>
    </nav>
</div>

<div id="demo"></div>

<div class="search-content blog-content">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="side-widget space30">
                    <h5>Maps</h5>
                    <div class="side-cat2" style="padding: 10px">
                        <div id="maps"  style="min-height: 600px"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 dir-search">
                <div class="search-filter">
                    <ul>
                        <li><a href="#">Featured</a> </li>
                        <li><a href="#">Popular</a> </li>
                        <li><a href="#">Best rated</a> </li>
                        <li><a href="#">Most recent</a> </li>
                        <li></li>
                        <li></li>
                    </ul>
                </div>
                <div id="filterig_result">

                <?php
                $today = date("Y-m-d");
                $this->db->where('to_date >=', $today); //previus date have show
                $this->db->where('reviews',1);
                $this->db->where('status',1);
                $this->db->order_by('id','desc');
                $this->db->limit(6);
                $query = $this->db->get('host');
                if ($query->num_rows()>0) {
                    foreach ($query->result_array() as $value) {
                ?>

                        <div class="listing mob-space30 space30">
                            <?php  $results = $this->user_model->get_host_by_data($value['id'],$value['userid'],'files');
                            if ($results->num_rows() > 0) { 
                            $image_data = $results->row();  ?>

                            <div class="col-md-4 pad0">
                                <div class="listing-img bg-image" data-image-src="<?php echo base_url() ?>assets/images/hosts/<?php echo $image_data->file_name ?>" style="background: rgba(0, 0, 0, 0) url(&quot;http://placehold.it/360x245&quot;) no-repeat scroll center center / cover ;">
                                    <div class="li-overlay">
                                        <div class="li-overlay-inner">
                                            <a href="<?php echo base_url() ?>home/host_rv/<?php echo $value['id'].'/'.preg_replace('/\s+/', '-', $value['title']) ?>" target="_blank" class="link"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                            <div class="col-md-8 pad0">
                                <div class="listing-info">

                                    <div class="col-md-10 col-sm-10 col-xs-8 pad0">
                                        <h4 class="li-name">
                                            <a href="<?php echo base_url() ?>home/host_rv/<?php echo $value['id'].'/'.preg_replace('/\s+/', '-', $value['title']) ?>" target="_blank"><?php echo $value['title'] ?>
                                            </a>
                                        </h4>
                                    </div>
                                    <div class="col-md-2 col-sm-2 col-xs-4 pad0">
                                        <h4 class="btn btn-default"><i class="fa fa-usd" aria-hidden="true"></i><?php echo $value['amount'] ?></h4>
                                    </div>
                                    <ul class="list-icon">
                                        <li> <i class="fa fa-map-marker"></i> <?php echo $value['street'] ?></li>
                                    </ul>
                                    <h5><span class="parking_capacity">Parking Capacity</span></h5>
                                    <ul class="list-icon">
                                        <li> RV Types: <?php echo $value['rv_types'] ?></li>
                                        <li> Upto <u><?php echo $value['rv_sizes'] ?></u> feet long.</li>
                                    </ul>
                                    <ul class="list-icon">
                                        <li> <i class="fa fa-calendar-check-o"></i> Available till: <?php echo $value['to_date'] ?></li>
                                    </ul>

                                </div>
                            </div>
                        </div>


                <?php }} ?>


                </div>


            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
function initAutocomplete() {
  var map = new google.maps.Map(document.getElementById('maps'), {
    center: {lat: 36.1848607, lng: -95.9798563},
    zoom: 4,
    draggable: true
  });
}

</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCKf3D0CKv98W_EGTk5QfKANDh0CZuAlNc&libraries=places&callback=initAutocomplete" async defer></script>