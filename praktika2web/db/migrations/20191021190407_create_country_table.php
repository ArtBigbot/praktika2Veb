<?php
use Phinx\Migration\AbstractMigration;
class CreateCountryTable extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
     *
     * The following commands can be used in this method and Phinx will
     * automatically reverse them when rolling back:
     *
     *    createTable
     *    renameTable
     *    addColumn
     *    addCustomColumn
     *    renameColumn
     *    addIndex
     *    addForeignKey
     *
     * Any other destructive changes will result in an error when trying to
     * rollback the migration.
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change() 
{ 
$country = $this->table('country'); 
$country->addColumn('code', 'string') 
->addColumn('name', 'string') 
->addColumn('continent', 'string') 
->addColumn('region', 'string') 
->addColumn('surfacearea', 'integer') 
->addColumn('indepyear', 'integer') 
->addColumn('population', 'integer') 
->addColumn('lifeexpectancy', 'double') 
->addColumn('gnp', 'integer') 
->addColumn('gnpold', 'integer') 
->addColumn('localname', 'string') 
->addColumn('governmentform', 'string') 
->addColumn('headofstate', 'string') 
->addColumn('capital', 'integer') 
->addColumn('code2', 'string') 
->create(); 
}
 /*
     public function down()
     {
         $this->dropTable('country');
     }
 */
}