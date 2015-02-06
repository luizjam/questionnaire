<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of EmpresasController
 *
 * @author LuizCarlos
 */
class EmpresasController extends AppController
{
    public $name = 'Empresas';
    //public $helpers = array('Html', 'Form', 'Session');
    
    public function index()
    {
        $this->set('empresas', $this->Empresa->find('all'));
    }
    
    public function view($id = null)
    {
        if(!$id)
        {
            throw new NotFoundException(__('Empresa inválida'));
        }
        
        $empresa = $this->Empresa->findById($id);
        if(!$empresa)
        {
            throw new NotFoundException(__('Empresa inválida'));
        }
        $this->set('empresa', $empresa);
    }
    
    public function add()
    {
        if($this->request->is('post'))
        {
        //    debug($this->request(data));
            $this->Empresa->create();
            if($this->Empresa->save($this->request->data))
            {
                $this->Session->setFlash(__('Empresa salva.'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(__('Impossível salvar empresa.'));
        }
    }
}
