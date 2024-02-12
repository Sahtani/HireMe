<?php

use App\Models\Cv;
use App\Models\JobOffer;
use App\Models\Skill;
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
        Schema::create('skills', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });
        Schema::create('job_offer_skill', function (Blueprint $table){
            $table->id();
            $table->foreignIdFor(JobOffer::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Skill::class)->constrained()->cascadeOnDelete();
            

        });
        Schema::create('cv_skill', function (Blueprint $table){
            $table->id();
            $table->foreignIdFor(Cv::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Skill::class)->constrained()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('job_offer_skill');
        Schema::dropIfExists('cv_skill');
        Schema::dropIfExists('skills');
    }
};
