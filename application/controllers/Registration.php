<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registration extends CI_Controller {

  function __construct(){
    parent::__construct();
    $this->load->model('usertmp_model');
  }


  function trial(){
    $this->index("trial");
  }


  public function index($sub = NULL){

    $error = "";
    $success = false;

    if( $this->input->post() ){

      if( !$this->input->post('email') || !filter_var($this->input->post('email'), FILTER_VALIDATE_EMAIL) ){
        $error = "Не введен email";
      }

      if( !$error && !$this->input->post('password') ){
        $error = "Не введен пароль";
      }

      if( !$error && $this->input->post('password') != $this->input->post('password') ){
        $error = "Пароли не совпадают";
      }

      // Проверка есть ли уже такой пользователь

      $this->db->where('email' , $this->input->post('email'));
      $res = $this->db->get('usertmp');
      if( !$error && $res->num_rows() ){
        $error = "Пользователь уже подал заявку.";
      }


      $this->db->where('email' , $this->input->post('email'));
      $res = $this->db->get('user');
      if( !$error && $res->num_rows() ){
        $error = "Пользователь уже зарегестрирован.";
      }


      if( !$error ){

        $_POST["is_trial"] = $sub == "trial" ? 1 : 0;

        $usertmp = new Usertmp_model($this->input->post());
        $usertmp = $usertmp->insert();


        require_once APPPATH.'libraries/swift_mailer/swift_required.php';

        $transport = Swift_SmtpTransport::newInstance('smtp.mail.ru', 465,'ssl')
        ->setUsername('didox.notification@mail.ru')
        ->setPassword('writer3595');

        $message = Swift_Message::newInstance();


        $this->smarty->assign('linkdisableregistration' , base_url()."registration/disabled/?hash=" . $usertmp->hash);
        $this->smarty->assign('linkregistration' , base_url()."registration/success/?email=" . $usertmp->hash );
        $message->setSubject('Регистрация в системе DIDOX')
        ->setFrom('didox.notification@mail.ru')
        ->setTo($this->input->post('email'))
        ->setBody($this->smarty->fetch("registration/RU/success.html"), 'text/html');

        $mailer = Swift_Mailer::newInstance($transport);

        $result = @$mailer->send($message);
        if( $result ){
          $success = true;
        }else{
          $success = false;
          $error = "Не смогли отправить Email";
        }
      }
    }

    $this->smarty->assign('error' , $error);
    $this->smarty->assign('success' , $success);
    $this->smarty->assign('is_trial' , $sub == "trial");

    $this->smarty->view('registration/index.html');
  }



  public function success(){
    
    if( $this->input->get('email') ){

      $this->db->where('hash' ,$this->input->get('email') );
      $res = $this->db->get('usertmp');
      if( $res->num_rows() ){
        $usertmp = new Usertmp_model((array)$res->row());
        $new_user = $usertmp->move();
        $this->session->set_userdata('api_key' , $new_user->api_key);
        redirect("admin/" , "refresh" , 200);
      }else{
        redirect( "/registration" , "redirect" , 200);
      }
    }
    redirect("/registration" , "redirect" , 200);

  }
}
