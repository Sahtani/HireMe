<?php

use App\Models\Cv;
use App\Models\Experience;
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
        Schema::create('experiences', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('company');
            $table->string('periode');
            $table->string('desc');          
            $table->timestamps();
        });
        Schema::create('cv_experience', function (Blueprint $table){
            $table->id();
            $table->foreignIdFor(Cv::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Experience::class)->constrained()->cascadeOnDelete();
            

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('experiences');
    }
};
