<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Models\User;


class CreatePesanansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pesanans', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            // $table->foreign('user_id')->references('id')->on('users');
            $table->foreignIdFor(User::class);
            $table->string('varian');
            $table->string('ukuran');
            $table->string('nama_penerima');
            $table->string('no_telp');
            $table->text('alamat');
            $table->text('bukti_tranfer');
            $table->string('resi')->nullable();
            $table->integer('jumlah');
            // $table->int('total_harga');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pesanans');
    }
}
