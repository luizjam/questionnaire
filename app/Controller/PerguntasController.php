<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PerguntasController
 *
 * @author luizcarlos.fonseca
 */
class PerguntasController extends AppController
{
    public $name = 'Perguntas';
    public $helpers = array('Html', 'Form', 'Session');
    
    public function index()
    {
        $this->set('perguntas', $this->Pergunta->find('all'));
    }
    
    public function view($id = null)
    {
        if(!$id)
        {
            throw new NotFoundException(__('Pergunta não encontrada.'));
        }
        
        $pergunta = $this->Pergunta->findById($id);
        if(!$pergunta)
        {
            throw new NotFoundException(__('Código da pergunta inválido.'));
        }
        $this->set('pergunta', $pergunta);
    }
    
    public function add()
    {
        if($this->request->is('post'))
        {
            $this->Pergunta->create();
            if($this->Pergunta->save($this->request->data))
            {
                $this->Session->setFlash(__('Pergunta salvo.'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(__('Impossível salvar pergunta.'));
        }
        $editais = $this->Pergunta->Edital->find('list');
        $this->set(compact('editais'));
    }
}
