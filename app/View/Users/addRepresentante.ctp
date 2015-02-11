<?php
    debug($groups);
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
    echo $this->Form->create();
    echo $this->Form->input('Representante.nm_representante', array(
        'label' => 'Nome', 'type' => 'text'));
    echo $this->Form->input('Representante.ds.cpf', array('label' => 'CPF',
        'type' => 'text'));
    echo $this->Form->input('Representante.ds_email', array('label' => 'E-mail',
        'type' => 'email'));
    echo $this->Form->input('Representante.ds_fone', array('label' => 'Telefone', 
        'type' => 'text'));
    echo $this->Form->input('Representante.ds_celular', array('label' => 'Celular',
        'type' => 'text'));
    echo $this->Form->input('User.username', array('label' => 'Usuário', 
        'type' => 'text'));
    echo $this->Form->input('User.password', array('label' => 'senha', 
        'type' => 'password'));
    echo $this->Form->input('User.group_id', array('label' => 'Perfil',
        'type' => 'select', 'options' => $groups));
    echo $this->Form->end('Salvar');
