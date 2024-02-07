<?php

namespace App\Http\Controllers;

//import Model "Domain Name System"
use App\Models\Compatibility;

use Illuminate\Http\Request;

//return type View
use Illuminate\View\View;

//return type redirectResponse
use Illuminate\Http\RedirectResponse;

//import Facade "Storage"
use Illuminate\Support\Facades\Storage;

class CompatibilityController extends Controller
{
    /**
     * index
     *
     * @return View
     */
    public function index(): View
    {
        //get OperatingSystem
        $compatibilitys = Compatibility::latest()->paginate(5);

        $title = 'Data Compatibility Server';

        //render view with OperatingSystem
        return view('compatibility.index', compact('compatibilitys', 'title'));
    }

    // /**
    //  * create
    //  *
    //  * @return View
    //  */
    // public function create(): View
    // {
    //     return view('compatibilitys.create');
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
            'nama_compatibility'     => 'required|min:3',
        ]);



        //create OperatingSystem
        Compatibility::create([
            'nama_compatibility'     => $request->nama_compatibility,
        ]);

        //redirect to index
        return redirect()->route('compatibility.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    // /**
    //  * show
    //  *
    //  * @param  mixed $id
    //  * @return View
    //  */
    // public function show(string $id): View
    // {
    //     //get compatibility by ID
    //     $compatibility = Penanggungjawab::findOrFail($id);

    //     //render view with compatibility
    //     return view('compatibilitys.show', compact('compatibility'));
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
        $compatibility = Compatibility::findOrFail($id);

        //render view with Pengelola
        return view('compatibility.index', compact('compatibility'));
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
            'nama_compatibility'     => 'required|min:3',
        ]);

        //get Pengelola by ID
        $compatibility = Compatibility::findOrFail($id);


            //update Pengelola without image
        $compatibility -> update([
            'nama_compatibility'     => $request->nama_compatibility,
        ]);

        //redirect to index
        return redirect()->route('compatibility.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    /**
     * destroy
     *
     * @param  mixed $compatibility
     * @return void
     */
    public function destroy($id): RedirectResponse
    {
        //get Pengelola by ID
        $compatibility = Compatibility::findOrFail($id);

        //delete Pengelola
        $compatibility->delete();

        //redirect to index
        return redirect()->route('compatibility.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
