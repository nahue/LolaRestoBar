<?php
require_once('config.php');
ini_set('display_errors',1);

// Configure Doctrine Cli
// Normally these are arguments to the cli tasks but if they are set here the arguments will be auto-filled
$config = array(
    'data_fixtures_path'  =>  DATA_FIXTURES_PATH,
    'models_path'         =>  MODELS_PATH,
    'migrations_path'     =>  MIGRATIONS_PATH,
    'sql_path'            =>  SQL_PATH,
    'yaml_schema_path'    =>  YAML_SCHEMA_PATH,
    'generate_models_options' => array(
        'pearStyle' => true,
        'generateTableClasses' => false,
        'generateBaseClasses' => true,
        'baseClassPrefix' => 'Base_',
        'baseClassesDirectory' => null,
        
    )
);

$cli = new Doctrine_Cli($config);
$cli->run($_SERVER['argv']);