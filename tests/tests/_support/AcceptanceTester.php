<?php


/**
 * Inherited Methods
 * @method void wantToTest($text)
 * @method void wantTo($text)
 * @method void execute($callable)
 * @method void expectTo($prediction)
 * @method void expect($prediction)
 * @method void amGoingTo($argumentation)
 * @method void am($role)
 * @method void lookForwardTo($achieveValue)
 * @method void comment($description)
 * @method \Codeception\Lib\Friend haveFriend($name, $actorClass = NULL)
 *
 * @SuppressWarnings(PHPMD)
*/
class AcceptanceTester extends \Codeception\Actor
{
    use _generated\AcceptanceTesterActions;

    public function goToSite(){
        $I = $this;
        $I->amOnPage('/');
        $I->maximizeWindow();
        $I->click('//*[@id="ext-gen44"]/body/isactivedatahead/div/div/div/a[1]/div/div/p[1]');

    }

    /**
     * @throws Exception
     */
    public function addVariationToCart($qty){
        $I = $this;
        $I->amOnPage('/1010000-12.html');

       // $I->fillField("//input[@class='quantity-select form-control']",$qty);
        $I->wait('3');
        $I->click("//span[contains(text(),'Add to Cart')]");
        $I->wait("5");
        $I->click("//*[@class='close-icon icon']");



    }

    public function checkoutLogin($email, $pass){
        $I=$this;

        $I->wait("3");

        $I->click("//*[@class='minicart-icon']");
        $I->wait("3");
        $I->click("Checkout");
        $I->fillField("//input[@id='login-form-email']", $email);
        $I->fillField("//input[@id='login-form-password']", $pass);
        $I->click("//button[contains(text(),'Log in')]");
        $I->wait("2");
    }
    public function shippingDetails(){
        $I=$this;
        $I->fillField('dwfrm_shipping_shippingAddress_addressFields_firstName', 'Test');
        $I->fillField('dwfrm_shipping_shippingAddress_addressFields_lastName', 'Test');
        $I->fillField('dwfrm_shipping_shippingAddress_addressFields_phone', '89234567890');
        $I->fillField('dwfrm_shipping_shippingAddress_addressFields_companyName', 'ewave');
        $I->fillField('dwfrm_shipping_shippingAddress_addressFields_address1', 'Address1');
        $I->selectOption('State','New South Wales');
        //$I->click("New South Wales");
        $I->fillField('dwfrm_shipping_shippingAddress_addressFields_city', 'Sydney');
        $I->fillField('dwfrm_shipping_shippingAddress_addressFields_postalCode', '2000');
        $I->click("//div[@class='next-step-button next-step']//button[1]");
        $I->wait("2");

    }

    public function newPayment(){
        $I=$this;
        //$I->click('Add Payment');
        $I->fillField('dwfrm_billing_creditCardFields_cardOwner', 'TEST TEST');
        $I->fillField('dwfrm_billing_creditCardFields_cardNumber', '4111 1111 4555 1142');
        $I->selectOption('dwfrm_billing_creditCardFields_expirationMonth', '10');
        $I->selectOption('dwfrm_billing_creditCardFields_expirationYear', '2020');
        $I->fillField('dwfrm_billing_creditCardFields_securityCode', '737');
        $I->click("/html[1]/body[1]/div[2]/div[1]/div[1]/div[1]/div[1]/div[1]/div[7]/div[1]/div[2]/button[2]");
        $I->wait("2");
        $I->click("/html[1]/body[1]/div[2]/div[1]/div[1]/div[1]/div[1]/div[1]/div[7]/div[1]/div[2]/button[3]");
        $I->wait("5");
    }
    /**
    * Define custom actions here
    */

}
