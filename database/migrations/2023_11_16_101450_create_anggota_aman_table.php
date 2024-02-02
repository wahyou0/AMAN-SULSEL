<?php

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
        Schema::create('anggota_aman', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_anggota')->nullable();
            $table->string('pengesahan')->nullable();
            $table->string('pengurus_daerah')->nullable();
            $table->string('komunitas')->nullable();
            $table->integer('luas_indikatif')->nullable();
            $table->integer('luas_pemetaan')->nullable(); 
            $table->integer('hutan_adat')->nullable();
            $table->integer('jml_laki_laki')->nullable();
            $table->integer('jml_perempuan')->nullable();
            $table->string('status_brwa')->nullable();
            $table->string('profil')->nullable();
            $table->string('perda')->nullable();
            $table->string('sk_bupati')->nullable();
            $table->string('perbub')->nullable();
            $table->integer('perempuan_aman')->nullable();
            $table->integer('kader_pemula')->nullable();
            $table->integer('kader_penggerak')->nullable();
            $table->integer('kader_pemimpin')->nullable();
            $table->integer('bpan_laki_laki')->nullable();
            $table->integer('bpan_perempuan')->nullable();
            $table->timestamps();

            // $table->float('amount');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('anggota_aman');
    }
};
