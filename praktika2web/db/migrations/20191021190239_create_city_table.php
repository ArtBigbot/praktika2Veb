<?php

use Phinx\Migration\AbstractMigration;

class CreateCityTable extends AbstractMigration
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
        $city = $this->table('city');
        $city->addColumn('id','integer');
        $city = $this->table('city');
        $city->addColumn('name', 'string')
        ->addColumn('countrycode', 'string')
        ->addColumn('district', 'string')
        ->addColumn('population', 'integer')
        ->create();
        //->save();
        // Using SQL
        // $sql = '
        // CREATE TABLE `authors` (
        // `id` int(11) NOT NULL,
        // `firstname` varchar(50) NOT NULL,
        // `lastname` varchar(50) NOT NULL,
        // ) ENGINE=InnoDB DEFAULT CHARSET=utf8;
        // ALTER TABLE `authors`
        // ADD PRIMARY KEY (`id`);
        // ALTER TABLE `authors`
        // MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;';
        // $this->execute($sql);
    }




    /*
    public function down()
    {
        $this->dropTable('city');
    }
    */
/*
    public function up()
    {
        $sqlQueries = [];
    
        $sqlQueries[] = "INSERT INTO city (id, name, countrycode, district, population) VALUES (3236, 'Helsinki [Helsingfors]', 'FIN', 'Newmaa', 555474);";
        $sqlQueries[] = "INSERT INTO city (id, name, countrycode, district, population) VALUES (134, 'Adelaide', 'AUS', 'South Australia', 978100);";
        $sqlQueries[] = "INSERT INTO city (id, name, countrycode, district, population) VALUES (1525, 'Linz ', 'AUT', 'North Austria', 188022);";
        $sqlQueries[] = "INSERT INTO city (id, name, countrycode, district, population) VALUES (1527, 'Innsbruck', 'AUT', 'Tiroli', 111752);";
        $sqlQueries[] = "INSERT INTO city (id, name, countrycode, district, population) VALUES (1528, 'Klagenfurt', 'AUT', 'Kärnten', 91141);";
    
        foreach ($sqlQueries as $sql) {
            $this->execute($sql);
        }
            }
*/



}
