<?php

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
        Schema::create('server1s', function (Blueprint $table) {
            $table->id();
            $table->string('id_lokasi');
            $table->string('id_os');
            $table->string('id_dns');
            $table->string('id_compatibility');
            $table->string('id_cp');
            $table->string('nama_server')->nullable();
            $table->string('host_server')->nullable();
            $table->string('rak_server')->nullable();
            $table->string('IP1_server')->nullable();
            $table->string('IP2_server')->nullable();
            $table->string('IP3_server')->nullable();
            $table->string('status_server')->nullable();
            $table->string('tipe_server')->nullable();
            $table->string('merk_server')->nullable();
            $table->string('serial_number_server')->nullable();
            $table->date('tahun_pengadaan_server')->nullable();
            $table->string('pengadaan_server')->nullable();
            $table->string('kondisi_server')->nullable();
            $table->string('cluster_server')->nullable();
            $table->integer('provisioned_space_server')->nullable();
            $table->integer('used_space_server')->nullable();
            $table->string('host_cpu_server')->nullable();
            $table->string('host_mem_server')->nullable();
            $table->string('memory_size_server')->nullable();
            $table->integer('cpus_server')->nullable();
            $table->integer('port_server')->nullable();
            $table->integer('uptime_server')->nullable();
            $table->integer('downtime_server')->nullable();
            $table->string('tipe_processor_server')->nullable();
            $table->text('keterangan_server')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('servers');
    }
};
