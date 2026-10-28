<?php

class Notificacao{
    protected string $mensagem;

    public function __construct($mensagem){
        $this->mensagem=$mensagem;
    }

    public function enviar(){
        echo "Mensagem recebida!";
    }
}

class notificacaoEmail extends Notificacao{
    public function __construct($mensagem){
        parent::__construct($mensagem);
    }
    public function enviar(){
        echo "Notifação do email: Sua inscrição foi realizada com sucesso!";
    }
}

class notificacaoSMS extends Notificacao{
    public function __construct($mensagem){
        parent:: __construct($mensagem);
    }
    public function enviar(){
        echo "Notifação do SMS: Sua inscrição foi realizada com sucesso!";
    }
}

class notificacaoPush extends Notificacao{
    public function __construct ($mensagem){
        parent::__construct($mensagem);
    }
    public function enviar(){
        echo "Notifação do Push: Sua inscrição foi realizada com sucesso!";
    }
}
 

$notificacaoEmail= new notificacaoEmail ('Notifação do email: Sua inscrição foi realizada com sucesso!');
$notificacaoEmail->enviar();
echo "<br>";
$notificacaoSMS= new notificacaoSMS ('Notifação do SMS: Sua inscrição foi realizada com sucesso!');
$notificacaoSMS->enviar();
echo "<br>";
$notificacaoPush= new notificacaoPush ('Notifação do Push: Sua inscrição foi realizada com sucesso!');
$notificacaoPush->enviar();