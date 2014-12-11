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
    public $helpers = array('Html', 'Form', 'Session');
    
    public function index()
    {
        $this->set('empresas', $this->Empresa->find('all'));
    }
    
    public function view()
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
}
