@extends('layouts.app')
   
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">User Management</div>
                <div class="card-body">
                    <table id="table_id" class="table table-striped table-bordered nowrap" style="width: 100%">
                        <thead>
                            <tr>
                                <th>User ID</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                                          
                        <tbody>
                            <tr>
                                <td>001</td>
                                <td>dalin@gmail</td>
                                <td>password</td>
                                <td>
                                    <a class="btn btn-warning">Edit</a>
                                    <a class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<br>

<script lang="">
$(document).ready(function() {
    var table = $('#table_id').DataTable( {
        fixedHeader: true
    } );
} );
</script>
@endsection