<?php

/**
 * Base_Groups
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property Doctrine_Collection $Users
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class Base_Groups extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('groups');
        $this->hasColumn('id', 'integer', 8, array(
             'primary' => true,
             'type' => 'integer',
             'autoincrement' => true,
             'length' => '8',
             ));
        $this->hasColumn('name', 'string', 20, array(
             'type' => 'string',
             'notnull' => true,
             'length' => '20',
             ));
        $this->hasColumn('description', 'string', 100, array(
             'type' => 'string',
             'notnull' => true,
             'length' => '100',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('Users', array(
             'local' => 'id',
             'foreign' => 'group_id'));
    }
}