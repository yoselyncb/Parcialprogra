<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateEstudiantesTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'Estudiantes';
    /**
     * Run the migrations.
     * @table Estudiantes
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->timestamp('create_at')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('update_at')->nullable();
            $table->increments('id');
            $table->string('nombre', 45)->nullable();
            $table->string('apellido', 45)->nullable();
            $table->integer('cedula')->nullable();
            $table->string('carrera', 45)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists($this->set_schema_table);
     }
}
