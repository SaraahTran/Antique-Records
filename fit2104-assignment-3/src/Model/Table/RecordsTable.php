<?php
class RecordsTable extends Table{
    /**
     * @param array $config The configuration for the table
     * @return void
     */

    public function initialize(array $config): void{
        parent::initialize($config);

        $this->setTable('records');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
    }
}
