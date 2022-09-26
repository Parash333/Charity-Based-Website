<?php require('config.php'); ?>

<?php include("layouts/head.php"); ?>

<!-- end of header -->
<!-- .wpo-breadcumb-area start -->
<div class="wpo-breadcumb-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="wpo-breadcumb-wrap">
                    <h2>Donate Now</h2>
                    <ul>
                        <li><a href="home.html">Home</a></li>
                        <li><span>Donate</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- .wpo-breadcumb-area end -->
<!-- wpo-event-area start -->
<div class="wpo-donation-page-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <div class="wpo-donate-header">
                    <h2>Make a Donation</h2>
                </div>
                <form action="success.php" method="post">
                    <div class="wpo-donations-amount">
                        <h2>Your Donation</h2>
                        <div class="row">
                        <div class="col-lg-10 col-md-10 col-sm-10 col-10 form-group">
                               <input type="number" class="form-control" name="amount" id="amount" placeholder="Enter Donation Amount" onchange="document.getElementById('realamount').value = this.value * 100;">
                        </div>
                        <div style="display: none;"><input tye="number" name="realamount" id="realamount"></div> 
                        <div class="col-lg-2 col-md-2 col-sm-2 col-2 form-group">
                               <p style="padding-top:0.5rem;margin-left:-0.5rem;font-size:larger;font-weight:bolder;">USD</p>
                        </div>
                        </div>
                        
                    </div>

                    <div class="wpo-donations-details">
                        <h2>Details</h2>

                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-12 form-group">
                                <input type="text" class="form-control" name="fname" id="fname" placeholder="First Name">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-12 form-group">
                                <input type="text" class="form-control" name="lname" id="lname" placeholder="Last Name">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-12 form-group clearfix">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-12 form-group">
                                <input type="text" class="form-control" name="adress" id="adress" placeholder="Adress">
                            </div>
                            <div class="col-lg-12 col-12 form-group">
                                <textarea class="form-control" name="note" id="note" placeholder="Message"></textarea>
                            </div>
                        </div>
                    </div>
                    
                    <script 
                        src = "https://checkout.stripe.com/checkout.js" class="stripe-button"
                        data-key = "<?php echo $publishableKey ?>"
                        data-name = "Donation Dash - Donate For Ukraine"
                        data-image = "https://image.shutterstock.com/image-vector/vector-vintage-ukraine-flag-drawing-260nw-2127567584.jpg"
                        data-amount = "document.getElementById("realamount").value;"
                        data-currency = "USD"
                    >
                    </script>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- wpo-event-area end -->

    <?php include "layouts/footer.php" ?>