<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
    echo $this->Form->create('Resposta', array('action' => 'add'));
    echo $this->Form->input('user_id', array('label' => 'Usuário', 'type' => 'select',
        'options' => '$users'));
    echo $this->Form->input('cd_pergunta', array('label' => 'Pergunta', 'type' => 'select',
        'options' => '$perguntas'));
    echo $this->Form->end('Salvar');
