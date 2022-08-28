<?php

//require_once __DIR__ . '/vendor/autoload.php';
namespace Custom\Module\Helper;

use Magento\Framework\App\Action\Action;
use Magento\Framework\Controller\ResultFactory;
use PhpAmqpLib\Connection\AMQPStreamConnection;
use PhpAmqpLib\Message\AMQPMessage;


class InvioRabbit extends Action
{
    protected $helper;
            protected function __construct(AMQPStreamConnection $amqpstream, AMQPMessage $amqpmessage )
            {
                $this->amqpmessage = $amqpmessage;
                $this->amqpstream = $amqpstream;
                
            }
         
    public function execute()
    {
        //$connection = $this->amqstream->AMQPStreamConnection('localhost', 5672, 'guest', 'guest');
      //  $connection = new AMQPStreamConnection(Config::get('rabbitmq.host'), Config::get('rabbitmq.port'), Config::get('rabbitmq.user'), Config::get('rabbitmq.pass'), Config::get('rabbitmq.vhost'));
        $connection= new AMQPStreamConnection('enrico.reflexmania.it', 5672, 'guest', 'guest','139.162.211.87');
        $channel = $connection->channel();

        $channel->queue_declare('hello', false, false, false, false);

        //$msg = $this->amqpmessage->AMQPMessage('Hello World!');
        
        $channel->basic_publish($this->amqpmessage, '', 'hello');

        echo " [x] Sent 'Hello World!'\n";

        $channel->close();
        $connection->close();
    }
}
?>