<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
    echo $this->Form->create('Pergunta', array('action' => 'add'));
    echo $this->Form->input('cd_edital', array('label' => 'Edital', 'type' => 'select',
        'options' => $editais));
    echo $this->Form->input('ds_titulo', array('label' => 'Pergunta', 'type' => 'text'));
    echo $this->Form->input('ds_conteúdo', array('label' => 'Informações adicionais', 
        'type' => 'textarea'));
    echo $this->Form->end('Salvar');
    
