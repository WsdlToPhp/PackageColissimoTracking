<?php
/**
 * Composer autoload
 */
require_once __DIR__ . '/../vendor/autoload.php';
/**
 * Used classes
 */
use WsdlToPhp\PackageBase\AbstractSoapClientBase;
use ColissimoTracking\ClassMap;
use ColissimoTracking\ServiceType\Track as TrackService;
use ColissimoTracking\StructType\Track as TrackType;

/**
 * Your Colissimo credentials
 */
define('COLISSIMO_WS_CONTRACT_NUMBER', '******');
/**
 * Your Office 365 passowrd
 */
define('COLISSIMO_WS_PASSWORD', '********');
/**
 * Minimal options
 */
$options = array(
    AbstractSoapClientBase::WSDL_URL => 'https://www.coliposte.fr/tracking-chargeur-cxf/TrackingServiceWS?wsdl',
    AbstractSoapClientBase::WSDL_CLASSMAP => ClassMap::get()
);
/**
 * Samples for Track ServiceType
 */
$track = new TrackService($options);
/**
 * Send the request
 */
$result = $track->track(new TrackType(COLISSIMO_WS_CONTRACT_NUMBER, COLISSIMO_WS_PASSWORD, $skybillNumber = '*************'));
/**
 * Debug informations provided by the utility methods
 */
if (true) {
    echo 'XML Request: ' . $track->getLastRequest() . "\r\n";
    echo 'Headers Request: ' . $track->getLastRequestHeaders() . "\r\n";
    echo 'XML Response: ' . $track->getLastResponse() . "\r\n";
    echo 'Headers Response: ' . $track->getLastResponseHeaders() . "\r\n";
}
/**
 * Sample call for getProductInter operation/method
 */
if ($result !== false) {
    /**
     * @var ColissimoTracking\StructType\SkybillInformationResult
     */
    $return = $result->getReturn();
    echo PHP_EOL . sprintf('ErrorCode: %s', $return->getErrorCode());
    echo PHP_EOL . sprintf('ErrorMessage: %s', $return->getErrorMessage());
    echo PHP_EOL . sprintf('EventCode: %s', $return->getEventCode());
    echo PHP_EOL . sprintf('EventDate: %s', $return->getEventDate());
    echo PHP_EOL . sprintf('EventLibelle: %s', $return->getEventLibelle());
    echo PHP_EOL . sprintf('EventSite: %s', $return->getEventSite());
    echo PHP_EOL . sprintf('RecipientCity: %s', $return->getRecipientCity());
    echo PHP_EOL . sprintf('RecipientCountryCode: %s', $return->getRecipientCountryCode());
    echo PHP_EOL . sprintf('RecipientZipCode: %s', $return->getRecipientZipCode());
    echo PHP_EOL . sprintf('SkybillNumber: %s', $return->getSkybillNumber()) . PHP_EOL;
} else {
    echo PHP_EOL . 'An error occurred: ' . $track->getLastErrorForMethod(sprintf('%s::Track', TrackService::class))->getMessage() . PHP_EOL;
}
