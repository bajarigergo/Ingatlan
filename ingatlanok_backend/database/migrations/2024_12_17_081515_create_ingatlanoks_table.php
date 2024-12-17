<?php

use App\Models\ingatlanok;
use App\Models\kategoriak;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('ingatlanoks', function (Blueprint $table) {
            $table->id('id');
            $table->foreignId('kategoria')->references('id')->on('kategoriaks');
            $table->string('leiras');
            $table->date('hirdetesDatuma')->default(today());
            $table->boolean('tehermentes');
            $table->integer('ar');
            $table->string('kepUrl')->nullable();
            $table->timestamps();
        });
        ingatlanok::create([
            'kategoria'=>1,
            'leiras' => 'Családi ház a 14. kerületben',
            'hirdetesDatuma'=>'20220620',
            'tehermentes'=>0,
            'ar'=>30000000,
        ]);
        ingatlanok::create([
            'kategoria'=>2,
            'leiras' => 'Lakás a 13. kerületben',
            'hirdetesDatuma'=>'20240330',
            'tehermentes'=>0,
            'ar'=>45000000,
        ]);
        ingatlanok::create([
            'kategoria'=>3,
            'leiras' => 'Építési telek Pécsen',
            'hirdetesDatuma'=>'20171007',
            'tehermentes'=>1,
            'ar'=>10000000,
        ]);
        ingatlanok::create([
            'kategoria'=>4,
            'leiras' => 'Garázs a belvárosban',
            'hirdetesDatuma'=>'20230219',
            'tehermentes'=>0,
            'ar'=>20000000,
        ]);
        ingatlanok::create([
            'kategoria'=>5,
            'leiras' => 'Mezőgazdasági terület Győrben',
            'hirdetesDatuma'=>'20180810',
            'tehermentes'=>0,
            'ar'=>25000000,
        ]);
        ingatlanok::create([
            'kategoria'=>6,
            'leiras' => 'Ipari ingatlan Gödöllőn',
            'tehermentes'=>1,
            'ar'=>90000000,
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ingatlanoks');
    }
};
