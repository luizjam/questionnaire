<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Resposta
 *
 * @author luizcarlos.fonseca
 */
class Resposta extends AppModel
{
    public $useTable = 'tb_respostas';
    public $primaryKey = 'cd_resposta';
    public $displayField = 'Resposta';
        
    public $belongsTo = array(
        'User' => array(
            'className' => 'User',
            'foreignKey' => 'user_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        ),
        'Pergunta' => array(
            'className' => 'Pergunta',
            'foreignKey' => 'cd_pergunta',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        )
    );
}
