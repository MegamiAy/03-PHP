<?php 
    class Email{
        private $mailer; 

        public function __construct($host, $username, $senha, $name){
            $this->mailer = new PHPMailer;

            $this->mailer->isSMTP();
            $this->mailer->Host = $host;
            $this->mailer->SMTPAuth = true;
            $this->mailer->Username = $username;
            $this->mailer->Password = $senha;
            $this->mailer->SMTPSecure = 'ssl';
            $this->mailer->Port = 465;

            $this->mailer->setFrom($username, $name);
            $this->mailer->isHTML(true);
            $this->mailer->CharSet = 'UTF-8';
        }

        public function addAddress($email, $nome){
            $this->mailer->addAddress($email, $nome);
        }

        public function formatarEmail($info){
            $this->mailer->Subject = $info['assunto'];
            $this->mailer->Body = $info['corpo'];
            $this->mailer->AltBody = strip_tags($info['corpo']);
        }

        public function enviarEmail(){
            if($this->mailer->send()){
                return true;
            } else {
                return false;
            }
        }
        
    }
?>
