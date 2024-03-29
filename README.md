[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/WsdlToPhp/PackageColissimoTracking/badges/quality-score.png?b=develop)](https://scrutinizer-ci.com/g/WsdlToPhp/PackageColissimoTracking/?branch=develop)
[![TeamCity build status](https://teamcity.mikael-delsol.fr/app/rest/builds/buildType:id:PackageColissimoTracking_Build/statusIcon.svg)](https://github.com/WsdlToPhp/PackageColissimoTracking)
[![Latest Stable Version](https://poser.pugx.org/wsdltophp/package-colissimo-tracking/v/stable)](https://packagist.org/packages/wsdltophp/package-colissimo-tracking)
[![Dependency Status](https://www.versioneye.com/user/projects/570df28ffcd19a0039f16b4c/badge.svg?style=flat)](https://www.versioneye.com/user/projects/570df28ffcd19a0039f16b4c)
[![StyleCI](https://styleci.io/repos/56129051/shield)](https://styleci.io/repos/56129051)
[![Total Downloads](https://poser.pugx.org/wsdltophp/package-colissimo-tracking/downloads)](https://packagist.org/packages/wsdltophp/package-colissimo-tracking)

# PackageColissimoTracking
This package has been generated from the [Colissimo Tracking Web Services](https://www.coliposte.fr/tracking-chargeur-cxf/TrackingServiceWS?wsdl) WSDL using the [PackageGenerator](https://github.com/WsdlToPhp/PackageGenerator) project.

# Summary
- [Generating again the package](#generating-again-the-package)
- [How to use the generated package?](#how-to-use-the-generated-package)
    - [Install the project](#install-the-project)
    - [Learn from the tutorial](#learn-from-the-tutorial)
    - [Start from the samples](#start-from-the-samples)
        - [Track](samples/Track.php)
- [Need support or having a question?](#need-support-or-having-a-question)

# Generating again the package
You can generate again the package's sources using the [generate.sh](generate.sh) script:
```bash
$ git clone https://github.com/WsdlToPhp/PackageColissimoTracking.git package-colissimo-tracking
$ cd package-colissimo-tracking
$ ./generate.sh
```
After generating the package, don't forget to edit the generated [composer.json](composer.json) file in order to update the psr-4 autoloading:
```json
"psr-4": {
    "ColissimoTracking\\": "./src/",
    "SoapClient\\": "./SoapClient/"
}
```
Then run:
```bash
$ composer update
```
 To learn how to customize the generated package, please read the PackageGenerator's [README](https://github.com/WsdlToPhp/PackageGenerator/blob/master/README.md).

# How to use the generated package?

## Install the project
```bash
$ git clone https://github.com/WsdlToPhp/PackageColissimoTracking.git package-colissimo-tracking
$ cd package-colissimo-tracking
$ composer update
```

## Learn from the tutorial
Start looking into the auto-generated [tutorial.php](tutorial.php) file. This file contains the starting code to use this package. In addition it contains all the operations provided by the Exchange Web Services and the way to call them.

## Start from the samples
Sample script is available under the [samples](samples) folder:

- [Track](samples/Track.php)

# Need support or having a question?
We can help you understand how to use it and how to customize it. Feel free to contact us at contact@wsdltophp.com.
