<?php
/*
 *  $Id: config.php 2753 2007-10-07 20:58:08Z Jonathan.Wage $
 *
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR
 * A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT
 * OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL,
 * SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT
 * LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE,
 * DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY
 * THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
 * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE
 * OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 *
 * This software consists of voluntary contributions made by many individuals
 * and is licensed under the LGPL. For more information, see
 * <http://www.doctrine-project.org>.
 */

/**
 * Doctrine Configuration File
 *
 * This is a sample implementation of Doctrine
 * 
 * @package     Doctrine
 * @subpackage  Config
 * @license     http://www.opensource.org/licenses/lgpl-license.php LGPL
 * @link        www.doctrine-project.org
 * @since       1.0
 * @version     $Revision: 2753 $
 * @author      Konsta Vesterinen <kvesteri@cc.hut.fi>
 * @author      Jonathan H. Wage <jwage@mac.com>
 */

define('DS', DIRECTORY_SEPARATOR);
define('APP_PATH', dirname(dirname(__FILE__)) . DS . 'system' . DS . 'application');
define('SANDBOX_PATH', dirname(__FILE__));
define('BASEPATH', dirname(__FILE__));
define('DOCTRINE_PATH', APP_PATH . DS . 'plugins' . DS . 'doctrine' . DS . 'lib');
define('DATA_FIXTURES_PATH', dirname(SANDBOX_PATH) . DS . 'orm' . DS . 'fixtures');
define('MODELS_PATH', APP_PATH . DS . 'models');
define('MIGRATIONS_PATH', dirname(SANDBOX_PATH) . DS . 'orm' . DS . 'migrations');
define('SQL_PATH', dirname(SANDBOX_PATH) . DS . 'orm' . DS . 'sql');
define('YAML_SCHEMA_PATH', dirname(SANDBOX_PATH) . DS . 'orm' . DS . 'schema/schema.yml');
//define('DB_PATH', SANDBOX_PATH . DS . 'sandbox.db');
define('DSN', 'mysql://root:strato1986@localhost/db_lola');


require_once(DOCTRINE_PATH . DS . 'Doctrine.php');
require_once APP_PATH . DS . 'config' . DS . 'database.php';

Doctrine_Core::setModelsDirectory(MODELS_PATH); 
//Doctrine_Core::setExtensionsPath(dirname(__FILE__).'/extensions');

spl_autoload_register(array('Doctrine', 'autoload'));
spl_autoload_register(array('Doctrine', 'modelsAutoload'));
//spl_autoload_register(array('Doctrine', 'extensionsAutoload'));

$manager = Doctrine_Manager::getInstance();

//$manager->setAttribute(Doctrine_Core::ATTR_MODEL_LOADING, Doctrine_Core::MODEL_LOADING_PEAR);

        $manager->setAttribute(Doctrine::ATTR_AUTO_ACCESSOR_OVERRIDE, true);
        $manager->setAttribute(
          Doctrine::ATTR_MODEL_LOADING,
          DOctrine::MODEL_LOADING_CONSERVATIVE
        );
        $manager->setAttribute(Doctrine::ATTR_AUTOLOAD_TABLE_CLASSES, true);
        
        // telling Doctrine where our models are located
Doctrine::loadModels(MODELS_PATH . DS);

        
//$manager->openConnection(DSN, 'doctrine');
// we load our database connections into Doctrine_Manager
// this loop allows us to use multiple connections later on
/*
foreach ($db as $connection_name => $db_values) {

    // first we must convert to dsn format
    $dsn = $db[$connection_name]['dbdriver'] . '://' . $db[$connection_name]['username'] .
        ':' . $db[$connection_name]['password'] . '@' . $db[$connection_name]['hostname'] .
        '/' . $db[$connection_name]['database'];

    
    

}
*/
$manager->connection(DSN, 'doctrine');

//$manager->setAttribute(Doctrine::ATTR_USE_NATIVE_ENUM, true);

