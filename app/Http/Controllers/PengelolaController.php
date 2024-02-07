<?php

namespace App\Http\Controllers;

//import Model "Pengelola"
use App\Models\Pengelola;

use Illuminate\Http\Request;

//return type View
use Illuminate\View\View;

//return type redirectResponse
use Illuminate\Http\RedirectResponse;

//import Facade "Storage"
use Illuminate\Support\Facades\Storage;

class PengelolaController extends Controller
{
    /**
     * index
     *
     * @return View
     */
    public function index(): View
    {
        //get Pengelola
        $pengelolas = Pengelola::latest()->paginate(5);

        $title = 'Data Pengelola Server';

        //render view with Pengelola
        return view('pengelola.index', compact('pengelolas', 'title'));
    }

    // /**
    //  * create
    //  *
    //  * @return View
    //  */
    // public function create(): View
    // {
    //     return view('pengelolas.create');
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
            'nama_pengelola'     => 'required|min:3',
            'kontak_pengelola'   => 'required|min:9'
        ]);



        //create pengelola
        Pengelola::create([
            'nama_pengelola'     => $request->nama_pengelola,
            'kontak_pengelola'   => $request->kontak_pengelola
        ]);

        //redirect to index
        return redirect()->route('pengelola.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    // /**
    //  * show
    //  *
    //  * @param  mixed $id
    //  * @return View
    //  */
    // public function show(string $id): View
    // {
    //     //get pengelola by ID
    //     $pengelola = Penanggungjawab::findOrFail($id);

    //     //render view with pengelola
    //     return view('pengelolas.show', compact('pengelola'));
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
        $pengelola = Pengelola::findOrFail($id);

        //render view with Pengelola
        return view('pengelola.index', compact('pengelola'));
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
            'nama_pengelola'     => 'required|min:3',
            'kontak_pengelola'   => 'required|min:9'
        ]);

        //get Pengelola by ID
        $pengelola = Pengelola::findOrFail($id);


            //update Pengelola without image
        $pengelola -> update([
            'nama_pengelola'     => $request->nama_pengelola,
            'kontak_pengelola'   => $request->kontak_pengelola
        ]);

        //redirect to index
        return redirect()->route('pengelola.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    /**
     * destroy
     *
     * @param  mixed $pengelola
     * @return void
     */
    public function destroy($id): RedirectResponse
    {
        //get Pengelola by ID
        $pengelola = Pengelola::findOrFail($id);

        //delete Pengelola
        $pengelola->delete();

        //redirect to index
        return redirect()->route('pengelola.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
