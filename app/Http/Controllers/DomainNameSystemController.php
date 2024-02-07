<?php

namespace App\Http\Controllers;

//import Model "Domain Name System"
use App\Models\DomainNameSystem;

use Illuminate\Http\Request;

//return type View
use Illuminate\View\View;

//return type redirectResponse
use Illuminate\Http\RedirectResponse;

//import Facade "Storage"
use Illuminate\Support\Facades\Storage;

class DomainNameSystemController extends Controller
{
    /**
     * index
     *
     * @return View
     */
    public function index(): View
    {
        //get OperatingSystem
        $domainnamesystems = DomainNameSystem::latest()->paginate(5);

        $title = 'Data Domain Name System (DNS)';

        //render view with OperatingSystem
        return view('domainnamesystem.index', compact('domainnamesystems', 'title'));
    }

    // /**
    //  * create
    //  *
    //  * @return View
    //  */
    // public function create(): View
    // {
    //     return view('domainnamesystems.create');
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
            'nama_dns'     => 'required|min:3',
        ]);



        //create OperatingSystem
        DomainNameSystem::create([
            'nama_dns'     => $request->nama_dns,
        ]);

        //redirect to index
        return redirect()->route('domainnamesystem.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    // /**
    //  * show
    //  *
    //  * @param  mixed $id
    //  * @return View
    //  */
    // public function show(string $id): View
    // {
    //     //get domainnamesystem by ID
    //     $domainnamesystem = Penanggungjawab::findOrFail($id);

    //     //render view with domainnamesystem
    //     return view('domainnamesystems.show', compact('domainnamesystem'));
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
        $domainnamesystem = DomainNameSystem::findOrFail($id);

        //render view with Pengelola
        return view('domainnamesystem.index', compact('domainnamesystem'));
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
            'nama_dns'     => 'required|min:3',
        ]);

        //get Pengelola by ID
        $domainnamesystem = DomainNameSystem::findOrFail($id);


            //update Pengelola without image
        $domainnamesystem -> update([
            'nama_dns'     => $request->nama_dns,
        ]);

        //redirect to index
        return redirect()->route('domainnamesystem.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    /**
     * destroy
     *
     * @param  mixed $domainnamesystem
     * @return void
     */
    public function destroy($id): RedirectResponse
    {
        //get Pengelola by ID
        $domainnamesystem = DomainNameSystem::findOrFail($id);

        //delete Pengelola
        $domainnamesystem->delete();

        //redirect to index
        return redirect()->route('domainnamesystem.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
