<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKhademsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('khadems', function (Blueprint $table) {
            $table->id();
            $table->string('namesr')->nullable();
            $table->string('familysr');
            $table->string('codemsr',10);
            $table->string('tdatesr',10);
            $table->string('moavenat',10);
            $table->integer('sanvatsr');
            $table->integer('enzebatsr');
            $table->integer('keifisr');
            $table->integer('isarsr');
            $table->integer('tahsilsr');
            $table->integer('nokhbehsr');            
            $table->string('bkhademyarsr');
            $table->string('mobilesr');
            $table->string('dateshsr');
            $table->string('madraksr');
            $table->text('descriptionsr')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('khadems');
    }
}
