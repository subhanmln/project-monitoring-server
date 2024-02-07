<?php

namespace App\Http\Controllers;

//import Model "Domain Name System"
use App\Models\Lokasi;

use Illuminate\Http\Request;

//return type View
use Illuminate\View\View;

//return type redirectResponse
use Illuminate\Http\RedirectResponse;

//import Facade "Storage"
use Illuminate\Support\Facades\Storage;

class LokasiController extends Controller
{
    /**
     * index
     *
     * @return View
     */
    public function index(): View
    {
        //get OperatingSystem
        $lokasis = Lokasi::latest()->paginate(5);

        $title = 'Data Lokasi Server';

        //render view with OperatingSystem
        return view('lokasi.index', compact('lokasis', 'title'));
    }

    // /**
    //  * create
    //  *
    //  * @return View
    //  */
    // public function create(): View
    // {
    //     return view('lokasis.create');
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
            'nama_lokasi'     => 'required|min:3',
        ]);



        //create OperatingSystem
        Lokasi::create([
            'nama_lokasi'     => $request->nama_lokasi,
        ]);

        //redirect to index
        return redirect()->route('lokasi.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    // /**
    //  * show
    //  *
    //  * @param  mixed $id
    //  * @return View
    //  */
    // public function show(string $id): View
    // {
    //     //get lokasi by ID
    //     $lokasi = Penanggungjawab::findOrFail($id);

    //     //render view with lokasi
    //     return view('lokasis.show', compact('lokasi'));
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
        $lokasi = Lokasi::findOrFail($id);

        //render view with Pengelola
        return view('lokasi.index', compact('lokasi'));
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
            'nama_lokasi'     => 'required|min:3',
        ]);

        //get Pengelola by ID
        $lokasi = Lokasi::findOrFail($id);


            //update Pengelola without image
        $lokasi -> update([
            'nama_lokasi'     => $request->nama_lokasi,
        ]);

        //redirect to index
        return redirect()->route('lokasi.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    /**
     * destroy
     *
     * @param  mixed $lokasi
     * @return void
     */
    public function destroy($id): RedirectResponse
    {
        //get Pengelola by ID
        $lokasi = Lokasi::findOrFail($id);

        //delete Pengelola
        $lokasi->delete();

        //redirect to index
        return redirect()->route('lokasi.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
