<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
    echo $this->Form->create('Edital', array('action' => 'add'));
    echo $this->Form->input('nm_edital', array('label' => 'Titulo', 'type' => 'text'));
    echo $this->Form->input('cd_processo', array('label' => 'Processo nº', 'type' => 'text'));
    echo $this->Form->input('dt_publicação', array('label' => 'Data Publicação', 'type' => 'text'));
    echo $this->Form->input('dt_iniciovisita', array('label' => 'Inicio Visita', 'type' => 'text'));
    echo $this->Form->input('dt_fimvisita', array('label' => 'Fim Visita', 'type' => 'text'));
    echo $this->Form->input('user_id', array('label' => 'Usuário', 'type' => 'select',
            'options' => $users));
    echo $this->Form->end('Salvar');
