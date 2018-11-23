<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateLibrosTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'Libros';
    /**
     * Run the migrations.
     * @table Libros
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
            $table->string('editorial', 45)->nullable();
            $table->date('año')->nullable();
            $table->string('ubicacion', 45)->nullable();
            $table->string('autor', 45)->nullable();
            $table->string('area_conocimiento', 45)->nullable();
            $table->integer('diasP')->nullable();
            $table->integer('id_tipo');

            $table->index(["id_tipo"], 'fk_Libros_tipo1_idx');


            $table->foreign('id_tipo', 'fk_Libros_tipo1_idx')
                ->references('id')->on('Tipo')
                ->onDelete('no action')
                ->onUpdate('no action');
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
