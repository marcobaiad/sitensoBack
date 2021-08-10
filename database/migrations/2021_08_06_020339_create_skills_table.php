<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateSkillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skills', function (Blueprint $table) {
            $table->id('skillID');
            $table->string('skillName', 20)->comment("Nombre Lenguaje");
            $table->enum('skillState', ["0", "1"])->default("1")->comment("0=Inactivo, 1=Activo");
        });

        $preSkills = [[
            'skillName' => 'React',
        ], [
            'skillName' => 'Node JS',
        ], [
            'skillName' => 'FOX',
        ], [
            'skillName' => 'PHP',
        ], [
            'skillName' => 'Python',
        ]];

        // Insert some stuff
        DB::table('skills')->insert($preSkills);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('skills');
    }
}
