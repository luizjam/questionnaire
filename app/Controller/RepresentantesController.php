<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of RepresentantesController
 *
 * @author codesp
 */
class RepresentantesController extends AppController{
    public $name = 'Representantes';
    public $helpers = array('Html', 'Form', 'Session');
    
    public function index()
    {
        $this->set('representantes', $this->Representante->find('all'));
    }
    
    public function view($id = null)
    {
        if(!$id)
        {
            throw new NotFoundException(__('Representante não encontrado.'));
        }
        
        $representante = $this->Representante->findById($id);
        if(!$representante)
        {
            throw new NotFoundException(__('Código de representante inválido.'));
        }
        $this->set('representante', $representante);
    }
    
    public function add()
    {
        if($this->request->is('post'))
        {
            $this->Representante->create();
            if($this->Representante->save($this->request->data))
            {
                $this->Session->setFlash(__('Representante salvo.'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(__('Impossível salvar empresa.'));
        }
    }
}
