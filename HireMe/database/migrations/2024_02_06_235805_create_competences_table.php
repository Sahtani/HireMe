<?php

use App\Models\Competence;
use App\Models\Cv;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('competences', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            
            $table->timestamps();
        });
        Schema::create('cv_competence', function (Blueprint $table){
            $table->id();
            $table->foreignIdFor(Cv::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Competence::class)->constrained()->cascadeOnDelete();
            

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('competences');
    }
};
