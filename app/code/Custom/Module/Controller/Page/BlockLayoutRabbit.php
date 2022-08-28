<?php
namespace Custom\Module\Controller\Page;
    
    use Magento\Framework\App\Action\Action;
   // use Magento\Framework\Controller\ResultFactory;
    use PhpAmqpLib\Connection\AMQPStreamConnection;
    use Custom\Module\Helper\invioRabbit;
    use PhpAmqpLib\Message\AMQPMessage;

    class BlockLayoutRabbit extends Action
    {

        protected $helper;
        protected $message;
        protected function __construct(InvioRabbit $helper)
        {
            $this->helper = $helper;
            $this->message="jo";
            
        }
    public function execute()
    {
        $connection=new AMQPStreamConnection('enrico.reflexmania.it', 5672, 'guest', 'guest','139.162.211.87');
        $msg=new AMQPMessage($this->message);
        $this->helper = new InvioRabbit($connection,$msg);
        //$connection = new AMQPStreamConnection(HOST, PORT, USER, PASS, VHOST);
        
        $channel = $connection->channel();

        $channel->queue_declare('hello', false, false, false, false);

        echo " [*] Waiting for messages. To exit press CTRL+C\n";

        $callback = function ($msgg) {
            echo ' [x] Received ', $msgg->body, "\n";
        };

        $channel->basic_consume('hello', '', false, true, false, false, $callback);

        while ($channel->is_open()) {
            $channel->wait();
        }

        $channel->close();
        $connection->close();

   }
 }
    ?>
