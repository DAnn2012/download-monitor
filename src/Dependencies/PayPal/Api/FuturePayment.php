<?php

namespace WPChill\DownloadMonitor\Dependencies\PayPal\Api;

use WPChill\DownloadMonitor\Dependencies\PayPal\Rest\ApiContext;
use WPChill\DownloadMonitor\Dependencies\PayPal\Transport\PayPalRestCall;

/**
 * Class FuturePayment
 *
 * @package WPChill\DownloadMonitor\Dependencies\PayPal\Api
 */
class FuturePayment extends Payment
{

    /**
     * Extends the Payment object to create future payments
     *
     * @param null $apiContext
     * @param string|null  $clientMetadataId
     * @param PayPalRestCall|null $restCall is the Rest Call Service that is used to make rest calls
     * @return $this
     */
    public function create($apiContext = null, $clientMetadataId = null, $restCall = null)
    {
        $headers = array();
        if ($clientMetadataId != null) {
            $headers = array(
                'PAYPAL-CLIENT-METADATA-ID' => $clientMetadataId
            );
        }
        $payLoad = $this->toJSON();
        $json = self::executeCall(
            "/v1/payments/payment",
            "POST",
            $payLoad,
            $headers,
            $apiContext,
            $restCall
        );
        $this->fromJson($json);
        return $this;
    }

    /**
     * Get a Refresh Token from Authorization Code
     *
     * @param $authorizationCode
     * @param ApiContext $apiContext
     * @return string|null refresh token
     */
    public static function getRefreshToken($authorizationCode, $apiContext = null)
    {
        $apiContext = $apiContext ? $apiContext : new ApiContext(self::$credential);
        $credential = $apiContext->getCredential();
        return $credential->getRefreshToken($apiContext->getConfig(), $authorizationCode);
    }

}
