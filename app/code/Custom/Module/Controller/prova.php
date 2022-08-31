<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


require_once __DIR__.'/vendor/autoload.php';

use PhpAmqpLib\Connection\AMQPStreamConnection;
use PhpAmqpLib\Message\AMQPMessage;


$connection = new AMQPStreamConnection('localhost', 5672, 'guest', 'guest');
$cnn = new AMQPConnection();

$channel = $connection->channel();


if ($cnn->connect()) {
    echo "Established a connection to the broker";
}
else {
    echo "Cannot connect to the broker";
}


$channel->queue_declare('rand', false, false, false, false);

$data = rand(35,887);

$msg = new AMQPMessage($data, array('delivery_mode' => 2));
$channel->basic_publish($msg, '', 'rand');

$channel->close();
$connection->close();
?>