<?php include("layouts/head.php"); ?>
<?php
require('config.php');

if(isset($_POST['stripeToken'])){
	\Stripe\Stripe::setVerifySslCerts(false);

	$token = $_POST['stripeToken'];

	$data = \Stripe\Charge::create(array(
	"amount"=>$_POST['realamount'],
	"currency" => "USD",
	"description" => "Donation Dash",
	"source" => $token,
	));

	echo '<pre><div style="display: none;">';
	print_r($data);
	echo "</div></pre>";
?>
<!-- world area start -->
<div class="wpo-world-area" style="margin-bottom:4rem;">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="wpo-world-section">
                    <h2>Thank You For Supporting Ukraine. <br> Your donation of USD <?=$data['amount']/100?> has been received <?=$data['source']['name']?></h2>
                    <a href="#"><img src="assets/images/team/1.png" alt="">Become A Volunteer</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- world area end -->

<?php }else{ ?>

<div class="wpo-world-area" style="margin-bottom:4rem;">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="wpo-world-section">
                    <h2>Invalid Stripe Token. Please Try Again</h2>
                    <a href="donate.php"><img src="assets/images/team/1.png" alt="">Donate Again</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php } ?>

<?php include "layouts/footer.php" ?>