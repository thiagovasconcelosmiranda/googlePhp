<?php
require_once 'dao/UserDaoMysql.php';

require_once 'src/PHPMailer.php';
require_once 'src/SMTP.php';
require_once 'src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;



class EnvEmail
{
  private $pdo;
  private $base;

  public function __construct(PDO $driver, $base)
  {
    $this->pdo = $driver;
    $this->base = $base;
  }

  public function envEmail($email, $firstName, $lastName)
  {
    $userDao = new UserDaoMysql($this->pdo);
    $token = md5(time() . rand(0, 9999));
    $user = $userDao->findByEmail($email);
    if ($user) {
      $user->setToken($token);
      $userDao->update($user);
      $this->_env_code_email($email, $firstName, $lastName, $token);
      return true;
    }

    return false;
  }


  private function _env_code_email($email, $firstName, $lastName, $token)
  {

    $base = $this->base;
    $mail = new PHPMailer(true);
    try {
      //email
      $mail = new PHPMailer();
      $mail->isSMTP();
      $mail->CharSet = 'UTF-8';
      $mail->Host = 'sandbox.smtp.mailtrap.io';
      $mail->SMTPAuth = true;
      $mail->Port = 2525;
      $mail->Username = '4f8886d800796d';
      $mail->Password = '960beed10dbfff';
      $mail->setFrom('profissao33@hmail.com');
      $mail->addAddress($email);
      $mail->isHTML(true);
      $mail->Subject = 'Recuperação de conta Google';

      $mail->Body =
        "
        <div style='width:100%; display: flex; justify-content: center; '>
          <img src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTogtpu7DNmm7gXzxB82tblHoY-d7QECnDCCg&usqp=CAU'
          height='150'>
        </div>
        <div style='width:100%; display: flex; justify-content: center;'>
           <h2> Olá, $firstName!</h2>
        </div>
        <div style='width:100%; display: flex; justify-content: center;'>
           <p> Segue o código de acesso.</p>
        </div>
        <div style='width:100%; display: flex; justify-content: center;'>
          <p>Code: $token </p> <br/> <br>
        </div>
        <div style='width: 100%; padding: 20px 0; display: flex; justify-content: center;'>
          <a href='$base/very_code.php?token=$token'>
             <button style='background-color: rgb(41, 103, 236); color: #fff;
               padding: 10px 10px; border-radius: 5px;
               cursor: pointer;
               outline: none; margin: 0 auto;
               border: 0;'
               type='button'>
               Acessar
            </button>
          </a>
        </div>
        <footer style='padding: 20px 5px'>
        <p>Email automático: Não Responda está email</p>
        </footer>
      ";
      $mail->AltBody = 'link:$token';

      if ($mail->send()) {
           return true;
      } else {
        echo 'Email não enviado';
      }

    } catch (Exception $e) {
      echo "Error ao enviar mensagem:" . $mail->ErrorInfo;
    }
  }
}