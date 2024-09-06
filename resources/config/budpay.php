<?php

/*
 * This file is part of the Laravel BUDPAY package.
 *
 * (c) Tolulope Oyeniyi <toluxsys@yahoo.ca>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

return [

    /**
     * Public Key From BUDPAY Dashboard
     *
     */
    'publicKey' => getenv('BUDPAY_PUBLIC_KEY'),

    /**
     * Secret Key From BUDPAY Dashboard
     *
     */
    'secretKey' => getenv('BUDPAY_SECRET_KEY'),

    /**
     * BUDPAY Payment URL
     *
     */
    'paymentUrl' => getenv('BUDPAY_PAYMENT_URL'),

    /**
     * Optional email address of the merchant
     *
     */
    'merchantEmail' => getenv('MERCHANT_EMAIL'),

    'signature_hmac' => env('BUDPAY_HMAC_SIGNATURE'),
];
