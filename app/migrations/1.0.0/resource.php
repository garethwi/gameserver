<?php 

use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Mvc\Model\Migration;

/**
 * Class ResourceMigration_100
 */
class ResourceMigration_100 extends Migration
{
    /**
     * Define the table structure
     *
     * @return void
     */
    public function morph()
    {
        $this->morphTable('resource', [
                'columns' => [
                    new Column(
                        'id',
                        [
                            'type' => Column::TYPE_INTEGER,
                            'unsigned' => true,
                            'notNull' => true,
                            'autoIncrement' => true,
                            'size' => 11,
                            'first' => true
                        ]
                    ),
                    new Column(
                        'map_resource_id',
                        [
                            'type' => Column::TYPE_INTEGER,
                            'size' => 11,
                            'after' => 'id'
                        ]
                    ),
                    new Column(
                        'x',
                        [
                            'type' => Column::TYPE_INTEGER,
                            'default' => "0",
                            'size' => 11,
                            'after' => 'map_resource_id'
                        ]
                    ),
                    new Column(
                        'y',
                        [
                            'type' => Column::TYPE_INTEGER,
                            'default' => "0",
                            'size' => 11,
                            'after' => 'x'
                        ]
                    ),
                    new Column(
                        'z',
                        [
                            'type' => Column::TYPE_INTEGER,
                            'default' => "0",
                            'size' => 11,
                            'after' => 'y'
                        ]
                    ),
                    new Column(
                        'type_id',
                        [
                            'type' => Column::TYPE_INTEGER,
                            'default' => "1",
                            'size' => 11,
                            'after' => 'z'
                        ]
                    )
                ],
                'indexes' => [
                    new Index('PRIMARY', ['id'], 'PRIMARY')
                ],
                'options' => [
                    'TABLE_TYPE' => 'BASE TABLE',
                    'AUTO_INCREMENT' => '1',
                    'ENGINE' => 'InnoDB',
                    'TABLE_COLLATION' => 'latin1_swedish_ci'
                ],
            ]
        );
    }

    /**
     * Run the migrations
     *
     * @return void
     */
    public function up()
    {

    }

    /**
     * Reverse the migrations
     *
     * @return void
     */
    public function down()
    {

    }

}
