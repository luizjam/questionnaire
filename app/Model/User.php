<?php
App::uses('AppModel', 'AuthComponent', 'Controller/Component', 'Model');
/**
 * User Model
 *
 * @property TbRepresentante $TbRepresentante
 * @property Group $Group
 */
class User extends AppModel 
{
    public $useTable = 'users';
/**
 * Display field
 *
 * @var string
 */
    public $displayField = 'username';
    
    public $actAs = array('Acl' => array('type' => 'requester', 'enable' => 'false'));

/**
 * Validation rules
 *
 * @var array
 */
    public $validate = array(
        'username' => array(
            'notEmpty' => array(
                'rule' => array('notEmpty'),
                    'message' => 'Campo obrigatório.',
                        //'allowEmpty' => false,
                        //'required' => false,
                        //'last' => false, // Stop validation after this rule
                        //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'password' => array(
            'notEmpty' => array(
                'rule' => array('notEmpty'),
                    'message' => 'Campo obrigatório',
                    //'allowEmpty' => false,
                    //'required' => false,
                    //'last' => false, // Stop validation after this rule
                    //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
            'between' => array(
                'rule' => array('between', 4, 8),
                    'message' => 'No mínimo 4 e no máximo 8 caracteres.',
                    //'allowEmpty' => false,
                    //'required' => false,
                    //'last' => false, // Stop validation after this rule
                    //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'group_id' => array(
            'numeric' => array(
                'rule' => array('numeric'),
                'message' => 'Campo obrigatório.',
                //'allowEmpty' => false,
                //'required' => false,
                //'last' => false, // Stop validation after this rule
                //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
    );

    //The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasOne associations
 *
 * @var array
 */
    public $hasOne = array(
        'Representante' => array(
            'className' => 'Representante',
            'foreignKey' => 'user_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        )
    );

/**
 * belongsTo associations
 *
 * @var array
 */
    public $belongsTo = array(
        'Group' => array(
            'className' => 'Group',
            'foreignKey' => 'group_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        )
    );
        
/**
 * hasMany associations
 * 
 * $var array
 */
    public $hasMany = array(
        'Edital' => array(
            'className' => 'Edital',
            'foreignKey' => 'user_id'
        ),
        'Pergunta' => array(
            'className' => 'Pergunta',
            'foreignKey' => 'user_id'
        )
    );
        
    public function beforeSave($options = array()) 
    {
        $this->data['User']['password'] = AuthComponent::password(
                $this->data['User']['password']
        );
        return true;
    }
    
    public function parentNode() {
        if (!$this->id && empty($this->data)) {
            return null;
        }
        if (isset($this->data['User']['group_id'])) {
            $groupId = $this->data['User']['group_id'];
        } else {
            $groupId = $this->field('group_id');
        }
        if (!$groupId) {
            return null;
        }
        return array('Group' => array('id' => $groupId));
    }
    
    public function bindNode($user) 
    {
        return array('model' => 'Group', 'foreign_key' => $user['User']['group_id']);
    }
}
