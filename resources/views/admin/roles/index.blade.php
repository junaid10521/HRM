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
                                <h3 class="card-title">Roles List</h3>
                            </div>
                            <div class="col-md-2">
                                <a class="btn btn-sm btn-warning" href="/roles/create-roles">Add Roles</a>
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
                                <td>Internet Explorer 7</td>
                                <td>Win XP SP2+</td>
                                <td>7</td>
                                <td>A</td>
                                <td>
                                    <button class="btn btn-sm btn-warning ">Edit</button>
                                    <button class="btn btn-sm btn-danger ">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Gecko</td>
                                <td>Mozilla 1.4</td>
                                <td>Win 95+ / OSX.1+</td>
                                <td>1.4</td>
                                <td>A</td>
                                <td>
                                    <button class="btn btn-sm btn-warning ">Edit</button>
                                    <button class="btn btn-sm btn-danger ">Delete</button>
                                </td>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
    </div>
    </div>



@endsection
