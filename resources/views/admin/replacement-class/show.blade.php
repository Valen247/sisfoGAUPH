@extends('layouts.app')

@section('title','Replacement Class')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">replacementClass {{ $replacementclass->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/replacement-class') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/replacement-class/' . $replacementclass->id . '/edit') }}" title="Edit replacementClass"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('admin/replacementclass' . '/' . $replacementclass->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete replacementClass" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $replacementclass->id }}</td>
                                    </tr>
                                    <tr><th> Nama Lengkap </th><td> {{ $replacementclass->nama_lengkap }} </td></tr><tr><th> Nama Mata Kuliah </th><td> {{ $replacementclass->nama_mata_kuliah }} </td></tr><tr><th> Kelas </th><td> {{ $replacementclass->kelas }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
