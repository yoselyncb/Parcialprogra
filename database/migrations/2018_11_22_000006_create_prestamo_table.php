<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreatePrestamoTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'prestamo';
    /**
     * Run the migrations.
     * @table prestamo
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->timestamp('create_time')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('update_time')->nullable();
            $table->increments('id');
            $table->date('fecha_prestamo')->nullable();
            $table->date('fecha_entrega')->nullable();
            $table->integer('id_estudiante');
            $table->integer('id_empleado');
            $table->integer('id_libro');

            $table->index(["id_libro"], 'fk_prestamo_Libros1_idx');

            $table->index(["id_empleado"], 'fk_prestamo_Empleados1_idx');

            $table->index(["id_estudiante"], 'fk_prestamo_Estudiantes_idx');


            $table->foreign('id_estudiante', 'fk_prestamo_Estudiantes_idx')
                ->references('id')->on('Estudiantes')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('id_empleado', 'fk_prestamo_Empleados1_idx')
                ->references('id')->on('Empleados')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('id_libro', 'fk_prestamo_Libros1_idx')
                ->references('id')->on('Libros')
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
