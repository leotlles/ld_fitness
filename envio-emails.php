<?php 

require "./libs/PHPMailer/Exception.php";
require "./libs/PHPMailer/OAuth.php";
require "./libs/PHPMailer/PHPMailer.php";
require "./libs/PHPMailer/POP3.php";
require "./libs/PHPMailer/SMTP.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


class Mensagem {
    private $email = null;
    private $objetivo = null;
    private $mensagem = null;

    public function __get($atributo){
        return $this->$atributo;
    }

    public function __set($atributo, $valor){
        $this->$atributo = $valor;
    }

    public function mensagemValida(){
        if (empty($this->email)) {
            return false;
        }
        return true;
    }

}

$mensagem = new Mensagem();
$mensagem->__set('email', $_POST['email']);
$mensagem->__set('objetivo', $_POST['objetivo']);

if ($mensagem->mensagemValida()) {
    echo "Mensagem válida trem";
} else {
    echo "Mensagem inválida";
}


?>