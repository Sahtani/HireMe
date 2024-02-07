<?php

use App\Models\JobOffer;
use App\Models\Jobseeker;
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
        Schema::create('job_offers', function (Blueprint $table) {
            $table->id();
            $table->string('company_name');
            $table->string('title');
            $table->text('desc');
            $table->enum('type_contrat', ['remote', 'hybrid', 'full-time']);
            $table->string('location');
            $table->timestamps();
        });
        Schema::create('job_offer_jobseeker', function (Blueprint $table){
            $table->id();
            $table->foreignIdFor(Jobseeker::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(JobOffer::class)->constrained()->cascadeOnDelete();
            

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('job_offers');
    }
};
