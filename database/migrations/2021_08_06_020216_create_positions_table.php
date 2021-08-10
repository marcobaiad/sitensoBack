<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreatePositionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('positions', function (Blueprint $table) {
            $table->id('positionID');
            $table->string('positionName', 20)->comment("Nombre Posición");
            $table->enum('positionState', ["0", "1"])->default("1")->comment("0=Inactivo, 1=Activo");
        });

        $prePositions = [[
            'positionName' => 'FullStack',
        ], [
            'positionName' => 'Backend',
        ], [
            'positionName' => 'Frontend',
        ], [
            'positionName' => 'Produc Owner',
        ], [
            'positionName' => 'Graphyc Desingner',
        ]];

        // Insert some stuff
        DB::table('positions')->insert($prePositions);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('positions');
    }
}
