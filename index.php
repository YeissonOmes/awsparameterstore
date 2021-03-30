<?php

require 'vendor/autoload.php';

use Aws\Ssm\SsmClient; 
use Aws\Exception\AwsException;
use Aws\Credentials\Credentials;
use Aws\AwsClient;
use Aws\Credentials\CredentialProvider;

$client = new SsmClient([
  'version' => 'latest',
  'region'  => 'us-east-2'
]);

$result = $client->getParameters([
  'Names'          => ['parametervalue'],
  'WithDecryption' => false
  ]);

print_r($result);

?>