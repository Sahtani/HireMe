<?php

use App\Models\Cv;
use App\Models\Language;
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
        Schema::create('languages', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('level');
            $table->timestamps();
        });
        Schema::create('cv_language', function (Blueprint $table){
            $table->id();
            $table->foreignIdFor(Cv::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Language::class)->constrained()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cv_language');
        Schema::dropIfExists('languages');
    }
};
