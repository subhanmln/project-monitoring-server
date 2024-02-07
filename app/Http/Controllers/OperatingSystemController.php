<?php

namespace App\Http\Controllers;

//import Model "OperatingSystem"
use App\Models\OperatingSystem;

use Illuminate\Http\Request;

//return type View
use Illuminate\View\View;

//return type redirectResponse
use Illuminate\Http\RedirectResponse;

//import Facade "Storage"
use Illuminate\Support\Facades\Storage;

class OperatingSystemController extends Controller
{
    /**
     * index
     *
     * @return View
     */
    public function index(): View
    {
        //get OperatingSystem
        $operatingsystems = OperatingSystem::latest()->paginate(5);

        $title = 'Data Operating System (OS)';

        //render view with OperatingSystem
        return view('operatingsystem.index', compact('operatingsystems', 'title'));
    }

    // /**
    //  * create
    //  *
    //  * @return View
    //  */
    // public function create(): View
    // {
    //     return view('operatingsystems.create');
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
            'nama_os'     => 'required|min:3',
        ]);



        //create OperatingSystem
        OperatingSystem::create([
            'nama_os'     => $request->nama_os,
        ]);

        //redirect to index
        return redirect()->route('operatingsystem.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    // /**
    //  * show
    //  *
    //  * @param  mixed $id
    //  * @return View
    //  */
    // public function show(string $id): View
    // {
    //     //get operatingsystem by ID
    //     $operatingsystem = Penanggungjawab::findOrFail($id);

    //     //render view with operatingsystem
    //     return view('operatingsystems.show', compact('operatingsystem'));
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
        $operatingsystem = OperatingSystem::findOrFail($id);

        //render view with Pengelola
        return view('operatingsystem.index', compact('operatingsystem'));
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
            'nama_os'     => 'required|min:3',
        ]);

        //get Pengelola by ID
        $operatingsystem = OperatingSystem::findOrFail($id);


            //update Pengelola without image
        $operatingsystem -> update([
            'nama_os'     => $request->nama_os,
        ]);

        //redirect to index
        return redirect()->route('operatingsystem.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    /**
     * destroy
     *
     * @param  mixed $operatingsystem
     * @return void
     */
    public function destroy($id): RedirectResponse
    {
        //get Pengelola by ID
        $operatingsystem = OperatingSystem::findOrFail($id);

        //delete Pengelola
        $operatingsystem->delete();

        //redirect to index
        return redirect()->route('operatingsystem.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
