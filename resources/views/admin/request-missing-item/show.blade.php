@extends('layouts.app')

@section('title','Replacement Class')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">requestMissingItem {{ $requestmissingitem->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/request-missing-item') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/request-missing-item/' . $requestmissingitem->id . '/edit') }}" title="Edit requestMissingItem"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('admin/requestmissingitem' . '/' . $requestmissingitem->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete requestMissingItem" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $requestmissingitem->id }}</td>
                                    </tr>
                                    <tr><th> Missing Item Id </th><td> {{ $requestmissingitem->missing_item_id }} </td></tr><tr><th> User Id </th><td> {{ $requestmissingitem->user_id }} </td></tr><tr><th> Missting Item Status Id </th><td> {{ $requestmissingitem->missting_item_status_id }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
