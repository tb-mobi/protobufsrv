<?php
include('src/Mobiplas/Mobiplas.php');
use Mobiplas\MobiplasPacketProto;
use Mobiplas\Response;
use Mobiplas\Fault;
$message='<a href="https://developers.google.com/protocol-buffers/" target="_blank">Protobuf</a> proxy server';
$rawRequest=file_get_contents('php://input');
echo $rawRequest;
if(strlen($rawRequest)){
    $parser=new MobiplasPacketProto();
    $rq=null;
    $rs=new Response();
    try {
        $parser->parseFromString($rawRequest);
        switch($parser->getId()){
            case MobiplasPacketProto\RequestId::Registration:
                $rq=new Mobiplas\RegistrationRequest();
                $rq->parseFromString($parser->getData());
                break;
            case MobiplasPacketProto\RequestId::Login:
    			$rq=new Mobiplas\LoginRequest();
    			$rq->parseFromString($parser->getData());
    			break;
            case MobiplasPacketProto\RequestId::Pinset:
    			$rq=new Mobiplas\PinsetRequest();
    			$rq->parseFromString($parser->getData());
    			break;
            case MobiplasPacketProto\RequestId::Pinchange:
    			$rq=new Mobiplas\PinchangeRequest();
    			$rq->parseFromString($parser->getData());
    			break;
            case MobiplasPacketProto\RequestId::Accounts:
    			$rq=new Mobiplas\AccountsRequest();
    			$rq->parseFromString($parser->getData());
    			break;
            case MobiplasPacketProto\RequestId::Cards:
    			$rq=new Mobiplas\CardsRequest();
    			$rq->parseFromString($parser->getData());
    			break;
            case MobiplasPacketProto\RequestId::History:
    			$rq=new Mobiplas\HistoryRequest();
    			$rq->parseFromString($parser->getData());
    			break;
            case MobiplasPacketProto\RequestId::Products:
    			$rq=new Mobiplas\ProductsRequest();
    			$rq->parseFromString($parser->getData());
    			break;
            case MobiplasPacketProto\RequestId::Transfer:
    			$rq=new Mobiplas\TransferRequest();
    			$rq->parseFromString($parser->getData());
    			break;
            case MobiplasPacketProto\RequestId::Payment:
    			$rq=new Mobiplas\PaymentRequest();
    			$rq->parseFromString($parser->getData());
    			break;
        }
        if(!is_null($rq)){
            $rs->setCode(0);
            $rs->setRequest(get_class($rq));
            $rs->setNeedConfirm(0);
            $rs->setMessage('Protobuf proxy server');
            $rs->setTodo('todo');
            echo $rs->serializeToString();
        }
    } catch (Exception $ex) {die('Upss.. there is a bug in this example');}
}else{
?>
<html><head>
        <title>Mobiplas</title>
        <link href="//fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Roboto+Mono:100&amp;subset=latin,cyrillic" rel="stylesheet" type="text/css">
        <link href="css/mobi.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title"><b>Mobi</b>plas<sup>2</sup></div>
                <div class="quote"><?php echo $message;?></div>
                <div class="block"><button id="start">Start</button></div>
            </div>
        </div>
</body></html>
<?php } ?>
