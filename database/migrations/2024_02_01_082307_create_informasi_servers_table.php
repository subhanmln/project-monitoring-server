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
        Schema::create('informasi_servers', function (Blueprint $table) {
            $table->id();
            $table->string('id_lokasi');
            $table->string('id_os');
            $table->string('id_dns');
            $table->string('id_compatibility');
            $table->string('id_cp');
            $table->string('nama_server');
            $table->string('host_server')->nullable()->change();
            $table->string('rak_server')->nullable()->change();
            $table->string('IP1_server')->nullable()->change();
            $table->string('IP2_server')->nullable()->change();
            $table->string('IP3_server')->nullable()->change();
            $table->string('status_server')->nullable()->change();
            $table->string('tipe_server')->nullable()->change();
            $table->string('merk_server')->nullable()->change();
            $table->string('serial_number_server')->nullable()->change();
            $table->date('tahun_pengadaan_server')->nullable()->change();
            $table->string('pengadaan_server')->nullable()->change();
            $table->string('kondisi_server')->nullable()->change();
            $table->string('cluster_server')->nullable()->change();
            $table->integer('provisioned_space_server')->nullable()->change();
            $table->integer('used_space_server')->nullable()->change();
            $table->string('host_cpu_server')->nullable()->change();
            $table->string('host_mem_server')->nullable()->change();
            $table->string('memory_size_server')->nullable()->change();
            $table->integer('cpus_server')->nullable()->change();
            $table->integer('port_server')->nullable()->change();
            $table->integer('uptime_server')->nullable()->change();
            $table->integer('downtime_server')->nullable()->change();
            $table->string('tipe_processor_server')->nullable()->change();
            $table->text('keterangan_server')->nullable()->change();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('informasi_servers');
    }
};
