<?php
namespace Custom\Module\Controller\Page;
//require_once __DIR__ . '/app/autoload.php'; 
require '/app/autoload.php';
    use Magento\Framework\App\Action\Action;
   // use Magento\Framework\Controller\ResultFactory;
    use PhpAmqpLib\Connection\AMQPStreamConnection;
   // use Custom\Module\Helper\invioRabbit;
    use PhpAmqpLib\Message\AMQPMessage;

    class Send extends Action
    {

        protected $connection;
        protected $message;
        
    public function execute()
    {
        $this->connection=new AMQPStreamConnection('139.161.211.87', 5672, 'guest', 'guest','/');
        $msg=new AMQPMessage("HELLO ZIO");
        
        //$connection = new AMQPStreamConnection(HOST, PORT, USER, PASS, VHOST);
        
        $channel = $this->connection->channel();
        $channel->queue_declare('hello', false, false, false, false);
        $channel->basic_publish($msg, '', 'hello');

       /* echo " [*] Waiting for messages. To exit press CTRL+C\n";

        $callback = function ($msgg) {
            echo ' [x] Received ', $msgg->body, "\n";
        };

        $channel->basic_consume('hello', '', false, true, false, false, $callback);

        while ($channel->is_open()) {
            $channel->wait();
        }
*/
        $channel->close();
        $this->connection->close();

   }
 }
    ?>
