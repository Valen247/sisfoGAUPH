<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\requestMissingItem;
use Illuminate\Http\Request;

class requestMissingItemController extends Controller
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
            $requestmissingitem = requestMissingItem::where('missing_item_id', 'LIKE', "%$keyword%")
                ->orWhere('user_id', 'LIKE', "%$keyword%")
                ->orWhere('missting_item_status_id', 'LIKE', "%$keyword%")
                ->orWhere('requested_at', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $requestmissingitem = requestMissingItem::latest()->paginate($perPage);
        }

        return view('admin.request-missing-item.index', compact('requestmissingitem'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.request-missing-item.create');
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
        
        requestMissingItem::create($requestData);

        return redirect('admin/request-missing-item')->with('flash_message', 'requestMissingItem added!');
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
        $requestmissingitem = requestMissingItem::findOrFail($id);

        return view('admin.request-missing-item.show', compact('requestmissingitem'));
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
        $requestmissingitem = requestMissingItem::findOrFail($id);

        return view('admin.request-missing-item.edit', compact('requestmissingitem'));
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
        
        $requestmissingitem = requestMissingItem::findOrFail($id);
        $requestmissingitem->update($requestData);

        return redirect('admin/request-missing-item')->with('flash_message', 'requestMissingItem updated!');
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
        requestMissingItem::destroy($id);

        return redirect('admin/request-missing-item')->with('flash_message', 'requestMissingItem deleted!');
    }
}
