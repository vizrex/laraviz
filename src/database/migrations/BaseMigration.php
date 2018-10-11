<?php

namespace Vizrex\Laraviz\Database\Migrations;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

abstract class BaseMigration extends Migration
{
    public $tableName = null;

    
    public function __construct($tableName)
    {
        $this->tableName = $tableName;
    }


    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(Schema::hasTable($this->tableName))
        {
            Schema::table($this->tableName, function(Blueprint $table)
            {
                $this->doChanges($table);
            });
        }
        else
        {
            Schema::create($this->tableName, function(Blueprint $table)
            {
                $this->doChanges($table);
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $this->undoChanges($this->tableName);
    }
    
    abstract protected function doChanges(Blueprint $table);
    abstract protected function undoChanges(string $tableName);

}
