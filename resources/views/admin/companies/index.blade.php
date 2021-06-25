@extends('admin.layout.app')

@section('title', 'Users')

@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-10">
                                <h3 class="card-title">Companies List</h3>
                            </div>
                            <div class="col-md-2">
                                <a class="btn btn-sm btn-warning" href="/companies/create-company">Add Company</a>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Rendering engine</th>
                                <th>Browser</th>
                                <th>Platform(s)</th>
                                <th>Engine version</th>
                                <th>CSS grade</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>Trident</td>
                                <td>Internet
                                    Explorer 5.5
                                </td>
                                <td>Win 95+</td>
                                <td>5.5</td>
                                <td>A</td>
                                <td>
                                    <button class="btn btn-sm btn-warning ">Edit</button>
                                    <button class="btn btn-sm btn-danger ">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Trident</td>
                                <td>Internet
                                    Explorer 6
                                </td>
                                <td>Win 98+</td>
                                <td>6</td>
                                <td>A</td>
                                <td>
                                    <button class="btn btn-sm btn-warning ">Edit</button>
                                    <button class="btn btn-sm btn-danger ">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Trident</td>
                                <td>Internet
                                    Explorer 6
                                </td>
                                <td>Win 98+</td>
                                <td>6</td>
                                <td>A</td>
                                <td>
                                    <button class="btn btn-sm btn-warning ">Edit</button>
                                    <button class="btn btn-sm btn-danger ">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Trident</td>
                                <td>Internet
                                    Explorer 6
                                </td>
                                <td>Win 98+</td>
                                <td>6</td>
                                <td>A</td>
                                <td>
                                    <button class="btn btn-sm btn-warning ">Edit</button>
                                    <button class="btn btn-sm btn-danger ">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Trident</td>
                                <td>Internet
                                    Explorer 6
                                </td>
                                <td>Win 98+</td>
                                <td>6</td>
                                <td>A</td>
                                <td>
                                    <button class="btn btn-sm btn-warning ">Edit</button>
                                    <button class="btn btn-sm btn-danger ">Delete</button>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
    </div>
    </div>



@endsection
