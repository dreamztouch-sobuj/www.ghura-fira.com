<div class="col-md-3">
    <div class="row sidebar">
        <div class="col-md-12">
            <div class="col-md-12 sidebar-search-form">
                <h2>Book this tour</h2>

                <form id="sidebar-search-form">
                    <input type="text" name="" class="form-control" placeholder="&#xf007; Name*">
                    <input type="text" name="" class="form-control" placeholder="&#xf0e0; Email*">
                    <input type="text" name="" class="form-control country-code" value="880" readonly><input type="text" name="" class="form-control mob-no" placeholder="&#xf095; Contact No*">
                    <input type="text" name="" class="form-control" id="tour-date" placeholder="&#xf073; Select Date*">
                    <input type="text" name="" class="form-control" placeholder="&#xf0c0; No of Tickets*">
                    <textarea class="form-control" name="" placeholder="Message" rows="3"></textarea>

                    <button class="search-btn availability">Check Availability</button>
                    <button class="search-btn">Book Now</button>
                </form>
            </div>

            <div class="col-md-12 side-ad mt3">
                <img src="<?php echo base_url(); ?>assets/images/dummy_ad.png">
            </div>

            <div class="col-md-12 subscribe mt3">
                <h3>Subscribe</h3>
                <form id="side-subscribe-form">
                    <input type="email" name="" class="form-control" placeholder="&#xf0e0; Your Email">
                    <button class="subscribe-btn">Search</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        $( '#tour-date' ).datepicker({
            minDate: 0
        });
    });
</script>