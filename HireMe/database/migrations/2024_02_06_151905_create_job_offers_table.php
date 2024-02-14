<?php

use App\Models\Company;
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
            $table->foreignIdFor(Company::class)->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
        Schema::create('job_offer_jobseeker', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('jobseeker_id')->unsigned();
            $table->bigInteger('job_offer_id')->unsigned();
            
            $table->foreign('jobseeker_id')->references('id')->on('jobseekers')->onDelete('cascade');
            $table->foreign('job_offer_id')->references('id')->on('job_offers')->onDelete('cascade');
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
