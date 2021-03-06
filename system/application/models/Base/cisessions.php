<?php

/**
 * Base_cisessions
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $session_id
 * @property string $ip_address
 * @property string $user_agent
 * @property integer $last_activity
 * @property string $user_data
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class Base_cisessions extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('ci_sessions');
        $this->hasColumn('session_id', 'string', 40, array(
             'primary' => true,
             'type' => 'string',
             'length' => '40',
             ));
        $this->hasColumn('ip_address', 'string', 16, array(
             'default' => 0,
             'type' => 'string',
             'notnull' => true,
             'length' => '16',
             ));
        $this->hasColumn('user_agent', 'string', 150, array(
             'type' => 'string',
             'notnull' => true,
             'length' => '150',
             ));
        $this->hasColumn('last_activity', 'integer', 10, array(
             'default' => 0,
             'type' => 'integer',
             'notnull' => true,
             'length' => '10',
             ));
        $this->hasColumn('user_data', 'string', null, array(
             'type' => 'string',
             'notnull' => true,
             ));

        $this->option('collate', 'utf8_bin');
        $this->option('charset', 'utf8');
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}