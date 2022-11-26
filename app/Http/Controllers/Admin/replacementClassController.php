<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\replacementClass;
use Illuminate\Http\Request;

class replacementClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $replacementclass = replacementClass::where('nama_lengkap', 'LIKE', "%$keyword%")
                ->orWhere('nama_mata_kuliah', 'LIKE', "%$keyword%")
                ->orWhere('kelas', 'LIKE', "%$keyword%")
                ->orWhere('jadwal_tanggal_yang_akan_di_replace', 'LIKE', "%$keyword%")
                ->orWhere('jadwal_jam_kuliah', 'LIKE', "%$keyword%")
                ->orWhere('tanggal_replacement', 'LIKE', "%$keyword%")
                ->orWhere('jam_replacement', 'LIKE', "%$keyword%")
                ->orWhere('alasan_melakukan_replacement_class', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $replacementclass = replacementClass::latest()->paginate($perPage);
        }

        return view('admin.replacement-class.index', compact('replacementclass'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.replacement-class.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        replacementClass::create($requestData);

        return redirect('admin/replacement-class')->with('flash_message', 'replacementClass added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $replacementclass = replacementClass::findOrFail($id);

        return view('admin.replacement-class.show', compact('replacementclass'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $replacementclass = replacementClass::findOrFail($id);

        return view('admin.replacement-class.edit', compact('replacementclass'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $replacementclass = replacementClass::findOrFail($id);
        $replacementclass->update($requestData);

        return redirect('admin/replacement-class')->with('flash_message', 'replacementClass updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        replacementClass::destroy($id);

        return redirect('admin/replacement-class')->with('flash_message', 'replacementClass deleted!');
    }
}
