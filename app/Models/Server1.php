<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Server extends Model
{
    use HasFactory;
    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'id_lokasi',
        'id_os',
        'id_dns',
        'id_compatibility',
        'id_pengelola',
        'nama_server',
        'host_server',
        'rak_server',
        'IP1_server',
        'IP2_server',
        'IP3_server',
        'status_server',
        'tipe_server',
        'merk_server',
        'serial_number_server',
        'tahun_pengadaan_server',
        'pengadaan_server',
        'kondisi_server',
        'cluster_server',
        'provisioned_space_server',
        'used_space_server',
        'host_cpu_server',
        'host_mem_server',
        'memory_size_server',
        'cpus_server',
        'port_server',
        'uptime_server',
        'downtime_server',
        'tipe_processor_server',
        'keterangan_server',
    ];
}
