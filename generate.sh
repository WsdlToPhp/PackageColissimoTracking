# get the latest wsdltophp.phar
if [ ! -f wsdltophp.phar ]; then
    echo "Download wsdltophp.phar once";
    wget https://phar.wsdltophp.com/wsdltophp.phar;
fi

# get current folder
DEST=`pwd`;

# clean current folder
rm -rf  $DEST/src/ \
        $DEST/tutorial.php \
        $DEST/composer.json \
        $DEST/composer.lock;

# package informations
php wsdltophp.phar generate:package \
    --urlorpath="https://www.coliposte.fr/tracking-chargeur-cxf/TrackingServiceWS?wsdl" \
    --destination=$DEST \
    --composer-name="wsdltophp/package-colissimo-tracking" \
    --composer-settings="autoload.psr-4.SoapClient\:./SoapClient/" \
    --composer-settings="type:library" \
    --composer-settings="license:MIT" \
    --addcomments="author:WsdlToPhp <contact@wsdltophp.com>" \
    --soapclient="SoapClient\SoapClientBase" \
    --namespace="ColissimoTracking";

# generate package
php wsdltophp.phar generate:package \
    --urlorpath="https://www.coliposte.fr/tracking-chargeur-cxf/TrackingServiceWS?wsdl" \
    --destination=$DEST \
    --composer-name="wsdltophp/package-colissimo-tracking" \
    --composer-settings="autoload.psr-4.SoapClient\:./SoapClient/" \
    --composer-settings="type:library" \
    --composer-settings="license:MIT" \
    --addcomments="author:WsdlToPhp <contact@wsdltophp.com>" \
    --soapclient="SoapClient\SoapClientBase" \
    --namespace="ColissimoTracking" \
    --force;
