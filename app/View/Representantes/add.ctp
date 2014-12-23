<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
    echo $this->Form->create('Representante', array('action' => 'add'));
    echo $this->Form->input('nm_representante', array('label' => 'Nome', 'type' => 'text'));
    echo $this->Form->input('ds_cpf', array('label' => 'CPF', 'type' => 'text'));
    echo $this->Form->input('ds_email', array('label' => 'E-mail', 'type' => 'text'));
    echo $this->Form->input('ds_fone', array('label' => 'Telefone', 'type' => 'text'));
    echo $this->Form->input('ds_celular', array('label' => 'Celular', 'type' => 'text'));
    echo $this->Form->end('Salvar');
