<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateDevelopersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('developers', function (Blueprint $table) {
            $table->id('developerID');
            $table->string('developerName', 30)->comment("Nombre Desarrollador");
            $table->string('occupation', 20)->comment("Profesión");
            $table->string('position', 20)->comment("Puesto");
            $table->string('skill', 20)->comment("Lenguaje");
        });

        $preDevs = [[
            'developerName' => 'Marco Baiad',
            'occupation' => 'Desarrollador Web',
            'position' => 'FullStack',
            'skill' => 'React'
        ], [
            'developerName' => 'Andres Perlo',
            'occupation' => 'Desarrollador Web',
            'position' => 'Backend',
            'skill' => 'Node JS'
        ], [
            'developerName' => 'David Cano',
            'occupation' => 'Desarrollador Web',
            'position' => 'FullStack',
            'skill' => 'PHP'
        ], [
            'developerName' => 'Daniel Seme',
            'occupation' => 'Ingeniero',
            'position' => 'Produc Owner',
            'skill' => 'Fox'
        ]];

        // Insert some stuff
        DB::table('developers')->insert($preDevs);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('developers');
    }
}
