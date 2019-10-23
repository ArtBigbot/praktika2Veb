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
         $this->dropTable('country');
     }
 */

 /*
    public function up()
    {
     $sqlQueries = [];
 
     $sqlQueries[] = "INSERT INTO country (code, name, continent, region, surfacearea, indepyear, population, lifeexpectancy, gnp, gnpold, localname, governmentform, headofstate, capital, code2) VALUES ('KEN','Kenya','Africa','Eastern Africa', 580367, 1963, 30080000, 48, 9217, 10241,'Kenya','Republic','Daniel arap Moi', 1881,'KE');";
     $sqlQueries[] = "INSERT INTO country (code, name, continent, region, surfacearea, indepyear, population, lifeexpectancy, gnp, gnpold, localname, governmentform, headofstate, capital, code2) VALUES ('NLD','Netherlands','Europe','Western Europe', 41526, 1581, 15864000, 78.3000031, 371362, 360478,'Nederland','Constitutional Monarchy','Beatrix', 5,'NL');";
     $sqlQueries[] = "INSERT INTO country (code, name, continent, region, surfacearea, indepyear, population, lifeexpectancy, gnp, gnpold, localname, governmentform, headofstate, capital, code2) VALUES ('DZA','Algeria','Africa','Northern Africa', 2381740, 1962, 31471000, 69.6999969, 49982, 46963,'Al-JazaŠ²Š‚ā„¢ir','Republic','Abdelaziz Bouteflika', 35,'DZ');";
     $sqlQueries[] = "INSERT INTO country (code, name, continent, region, surfacearea, indepyear, population, lifeexpectancy, gnp, gnpold, localname, governmentform, headofstate, capital, code2) VALUES ('COL','Colombia','South America','South America', 1138910, 1810, 42321000, 70.3000031, 102896, 105116,'Colombia','Republic','AndrŠ“Ā©s Pastrana Arango', 2257,'CO');";
     $sqlQueries[] = "INSERT INTO country (code, name, continent, region, surfacearea, indepyear, population, lifeexpectancy, gnp, gnpold, localname, governmentform, headofstate, capital, code2) VALUES ('BEN','Benin','Africa','Western Africa', 112622, 1960, 6097000, 50.2000008, 2357, 2141,'BŠ“Ā©nin','Republic','Mathieu KŠ“Ā©rŠ“Ā©kou', 187,'BJ');";
 
     foreach ($sqlQueries as $sql) {
         $this->execute($sql);
     }
         }
*/
}
