<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('perform actions and see result');
$I->goToSite();
$I->addVariationToCart(1);
$I->checkoutLogin('roman.pluzhnikov1@ewave.com', 'eWave@123');
$I->shippingDetails();
$I->newPayment();
