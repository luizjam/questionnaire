<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of EditaisController
 *
 * @author luizcarlos.fonseca
 */
class EditaisController extends AppController{
    public $name = 'Editais';
    public $helpers = array('Html', 'Form', 'Session');
    
    public function index()
    {
        $this->set('editais', $this->Edital->find('all'));
//        $users = $this->Edital->User->find('list');
//        $this->set(compact('users'));
    }
    
    public function view($id = null)
    {
        if(!$id)
        {
            throw new NotFoundException(__('Edital não encontrado.'));
        }
        
        $edital = $this->Edital->findById($id);
        if(!$edital)
        {
            throw new NotFoundException(__('Edital inválido.'));
        }
        
        $this->set('edital', $edital);
    }
    
    public function add()
    {
        if($this->request->is('post'))
        {
            // debug($this->request(data));
            $this->Edital->create();
            if($this->Edital->save($this->request->data))
            {
                $this->Session->setFlash(__('Edital salvo.'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(__('Impossível salvar edital.'));
        }
        $users = $this->Edital->User->find('list');
        $this->set(compact('users'));
    }
             
}
