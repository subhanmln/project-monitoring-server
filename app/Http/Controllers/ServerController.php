<?php

namespace App\Http\Controllers;

//import Model "Server"
use App\Models\Server;

//import Model "Lokasi"
use App\Models\Lokasi;

//import Model "OperatingSystem"
use App\Models\OperatingSystem;

//import Model "DomainNameSystem"
use App\Models\DomainNameSystem;

//import Model "Pengelola"
use App\Models\Pengelola;

//import Model "Compatibility"
use App\Models\Compatibility;

use Illuminate\Http\Request;

//return type View
use Illuminate\View\View;

//return type redirectResponse
use Illuminate\Http\RedirectResponse;

//import Facade "Storage"
use Illuminate\Support\Facades\Storage;

class ServerController extends Controller
{
    /**
     * index
     *
     * @return View
     */
    public function index(): View
    {
        //get Pengelola
        $servers         = Server::join('lokasis', 'lokasis.id', '=', 'servers.id_lokasi')
                                    ->join('operating_systems', 'operating_systems.id', '=', 'servers.id_os')
                                    ->join('domain_name_systems', 'domain_name_systems.id', '=', 'servers.id_dns')
                                    ->join('compatibilities', 'compatibilities.id', '=', 'servers.id_compatibility')
                                    ->join('pengelolas', 'pengelolas.id', '=', 'servers.id_pengelola')
                                    ->select('servers.*', 'lokasis.nama_lokasi', 'operating_systems.nama_os', 'domain_name_systems.nama_dns', 'compatibilities.nama_compatibility', 'pengelolas.nama_pengelola')
                                    ->latest()->paginate(5);
        $lokasis         = Lokasi::all();
        $oss             = OperatingSystem::all();
        $dnss            = DomainNameSystem::all();
        $compatibilitys  = Compatibility::all();
        $pengelolas      = Pengelola::all();

        // 'data_barang' => Barang::join('tbl_jenis_barang', 'tbl_jenis_barang.id', '=', 'tbl_barang.id_jenis')
        //                             -> select('tbl_barang.*', 'tbl_jenis_barang.nama_jenis')
        //                             ->get();


        $title = 'Data Server';

        //render view with Pengelola
        return view('server.index', compact('servers', 'title', 'lokasis', 'oss', 'dnss','compatibilitys', 'pengelolas'));
    }

    // /**
    //  * create
    //  *
    //  * @return View
    //  */
    // public function create(): View
    // {
    //     return view('servers.create');
    // }

    /**
     * store
     *
     * @param  mixed $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        //validate form
        $this->validate($request, [
            'id_lokasi'         => 'required',
            'id_os'             => 'required',
            'id_dns'            => 'required',
            'id_compatibility'  => 'required',
            'id_pengelola'      => 'required',
        ]);

        //create server
        Server::create([
            'id_lokasi'                     => $request->id_lokasi,
            'id_os'                         => $request->id_os,
            'id_dns'                        => $request->id_dns,
            'id_compatibility'              => $request->id_compatibility,
            'id_pengelola'                  => $request->id_pengelola,
            'nama_server'                   => $request->nama_server,
            'host_server'                   => $request->host_server,
            'rak_server'                    => $request->rak_server,
            'IP1_server'                    => $request->IP1_server,
            'IP2_server'                    => $request->IP2_server,
            'IP3_server'                    => $request->IP3_server,
            'status_server'                 => $request->status_server,
            'tipe_server'                   => $request->tipe_server,
            'merk_server'                   => $request->merk_server,
            'serial_number_server'          => $request->serial_number_server,
            'tahun_pengadaan_server'        => $request->tahun_pengadaan_server,
            'pengadaan_server'              => $request->pengadaan_server,
            'kondisi_server'                => $request->kondisi_server,
            'cluster_server'                => $request->cluster_server,
            'provisioned_space_server'      => $request->provisioned_space_server,
            'used_space_server'             => $request->used_space_server,
            'host_cpu_server'               => $request->host_cpu_server,
            'host_mem_server'               => $request->host_mem_server,
            'memory_size_server'            => $request->memory_size_server,
            'cpus_server'                   => $request->cpus_server,
            'port_server'                   => $request->port_server,
            'uptime_server'                 => $request->uptime_server,
            'downtime_server'               => $request->downtime_server,
            'tipe_processor_server'         => $request->tipe_processor_server,
            'keterangan_server'             => $request->keterangan_server,

        ]);

        //redirect to index
        return redirect()->route('server.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    // /**
    //  * show
    //  *
    //  * @param  mixed $id
    //  * @return View
    //  */
    // public function show(string $id): View
    // {
    //     //get server by ID
    //     $server = Penanggungjawab::findOrFail($id);

    //     //render view with server
    //     return view('servers.show', compact('server'));
    // }

    /**
     * edit
     *
     * @param  mixed $id
     * @return View
     */
    public function edit(string $id): View
    {
        //get Pengelola by ID
        $server = Server::findOrFail($id);

        //render view with Pengelola
        return view('server.index', compact('server'));
    }

    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $id
     * @return RedirectResponse
     */
    public function update(Request $request, $id): RedirectResponse
    {
        //validate form
        $this->validate($request, [
            'id_lokasi'         => 'required',
            'id_os'             => 'required',
            'id_dns'            => 'required',
            'id_compatibility'  => 'required',
            'id_cp'             => 'required',
        ]);

        //get Pengelola by ID
        $server = Server::findOrFail($id);


            //update Pengelola without image
        $server -> update([
            'id_lokasi'                     => $request->id_lokasi,
            'id_os'                         => $request->id_os,
            'id_dns'                        => $request->id_dns,
            'id_compatibility'              => $request->id_compatibility,
            'id_pengelola'                  => $request->id_pengelola,
            'nama_server'                   => $request->nama_server,
            'host_server'                   => $request->host_server,
            'rak_server'                    => $request->rak_server,
            'IP1_server'                    => $request->IP1_server,
            'IP2_server'                    => $request->IP2_server,
            'IP3_server'                    => $request->IP3_server,
            'status_server'                 => $request->status_server,
            'tipe_server'                   => $request->tipe_server,
            'merk_server'                   => $request->merk_server,
            'serial_number_server'          => $request->serial_number_server,
            'tahun_pengadaan_server'        => $request->tahun_pengadaan_server,
            'pengadaan_server'              => $request->pengadaan_server,
            'kondisi_server'                => $request->kondisi_server,
            'cluster_server'                => $request->cluster_server,
            'provisioned_space_server'      => $request->provisioned_space_server,
            'used_space_server'             => $request->used_space_server,
            'host_cpu_server'               => $request->host_cpu_server,
            'host_mem_server'               => $request->host_mem_server,
            'memory_size_server'            => $request->memory_size_server,
            'cpus_server'                   => $request->cpus_server,
            'port_server'                   => $request->port_server,
            'uptime_server'                 => $request->uptime_server,
            'downtime_server'               => $request->downtime_server,
            'tipe_processor_server'         => $request->tipe_processor_server,
            'keterangan_server'             => $request->keterangan_server,
        ]);

        //redirect to index
        return redirect()->route('server.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    /**
     * destroy
     *
     * @param  mixed $server
     * @return void
     */
    public function destroy($id): RedirectResponse
    {
        //get Pengelola by ID
        $server = Server::findOrFail($id);

        //delete Pengelola
        $server->delete();

        //redirect to index
        return redirect()->route('server.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
