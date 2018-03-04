<div class="col-md-3">
    <div class="row sidebar">
        <div class="col-md-12">
            <div class="col-md-12 sidebar-search-form">
            <h2>Find Your<br>Destination</h2>

            <form id="sidebar-search-form">
                <input type="text" name="" class="form-control" placeholder="&#xf002; Search Tour">
                <input type="text" name="" class="form-control" placeholder="&#xf041; Where To">
                <input type="text" name="" class="form-control" placeholder="&#xf073; Month" id="fromWhen">

                <h3>Price Range</h3>
                <p><input type="radio" name="priceRange">&nbsp; Below 2500 BDT</p>
                <p><input type="radio" name="priceRange">&nbsp; 2500-5000 BDT</p>
                <p><input type="radio" name="priceRange">&nbsp; Above 5000 BDT</p>

                <h3 style="margin-top: 20px !important;">Place Category</h3>
                <p><input type="checkbox" name="tourCategory"> &nbsp; Romantic</p>
                <p><input type="checkbox" name="tourCategory"> &nbsp; Exotic</p>
                <p><input type="checkbox" name="tourCategory"> &nbsp; Adventure</p>
                <p><input type="checkbox" name="tourCategory"> &nbsp; Vacation</p>

                <button class="search-btn">Search</button>
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
        $( '#fromWhen' ).datepicker({
            minDate: 0
        });
    });
</script>