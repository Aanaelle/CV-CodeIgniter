<?php

namespace App\Controllers;

class Contact extends BaseController
{
    public function __construct()
    {
        helper(['form']);
    }
    public function index()
    {
        echo view('commun/nav');
        echo view('contactVue');
        echo view('commun/bas');
    }

    public function send()
    {
        //Utilisation de la librairie Email
        $email = \Config\Services::email();
        //paramètres du mail
        $from = $this->request->getPost('from');
        $to = 'anaellemimi27@gmail.com';
        $subject = $this->request->getPost('subject');
        $message = $this->request->getPost('message');
        //Préparation du mail
        $email->setTo($to);
        $email->setFrom($from);
        $email->setSubject($subject);
        $email->setMessage($message);
        //Traitement de la pièce jointe

        $attachment = $this->request->getFile('userfile');
       

        if ($attachment!==null && $attachment->isValid() && !$attachment->hasMoved())
        {
            $email->attach($attachment->getPathname(), 'inline', $attachment->getName());
        }

        //Envoi du mail
        if ($email->send()) {
            //Affichage de la vue
            echo view('commun/nav');
            echo view('contactVue');
            echo view('commun/bas');
        } else {
            echo 'Erreur lors de l\'envoi de l\'e-mail : ' . $email->printDebugger();
        }
    }
}
