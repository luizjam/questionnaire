<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
    echo $this->Form->create('Group', array('action' => 'add'));
    echo $this->Form->input('name', array('label' => 'Perfil', 'type' => 'text'));
    echo $this->Form->end('Salvar');

