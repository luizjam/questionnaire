<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of RespostasController
 *
 * @author luizcarlos.fonseca
 */
class RespostasController extends AppController
{
    public $name = 'Respostas';
    public $helpers = array('Html', 'Form', 'Session');
    
    public function index()
    {
        $this->set('respostas', $this->Resposta->find('all'));
    }
    
    public function view($id = null)
    {
        if(!$id)
        {
            throw new NotFoundException(__('Resposta inválida'));
        }
        
        $resposta = $this->Resposta->findById($id);
        if(!$resposta)
        {
            throw new NotFoundException(__('Resposta inválida'));
        }
        $this->set('resposta', $resposta);
    }
    
    public function add()
    {
        $this->Resposta->create();
        if($this->Resposta->save($this->request->data))
        {
            $this->Session->setFlash(__('Resposta salva.'));
            return $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Impossível salvar resposta.'));
    }
    
}
