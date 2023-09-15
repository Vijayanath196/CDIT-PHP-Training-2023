<?php

interface PaymentMethod {

    public function paymentByCard();
    public function paymentByGpay();
}

?>