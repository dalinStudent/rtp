@extends('layouts.app')
   
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Menu Management</div>
                <div class="card-body">
                    <table id="table_id" class="table table-striped table-bordered nowrap" style="width: 100%">
                        <thead>
                            <tr>
                                <th>Menu ID</th>
                                <th>Customer Name</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Quanty</th>
                                <th>Price</th>
                                <th>Sub Total</th>
                                <th>Total</th>
                                <th>Shpping Status</th>
                                <th>Payment Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        @foreach ($menus as $menu)
                            
                        <tbody>
                            <tr>
                                <td>{{ $menu->id }}</td>
                                <td>{{ $menu->user_id }}</td>
                                <td>{{ $menu->title }}</td>
                                <td>{{ $menu->desc }}</td>
                                <td>{{ $menu->qty }}</td>
                                <td>{{ $menu->price }}</td>
                                <td>{{ $menu->sub_total }}</td>
                                <td>{{ $menu->total }}</td>
                                <td>{{ $menu->shpping_status }}</td>
                                <td>{{ $menu->payment_status }}</td>
                                <td>
                                    <a class="btn btn-warning btn-sm">Edit</a>
                                    <a class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script lang="">
    $(document).ready(function() {
    $('#table_id').DataTable();
} );
</script>
@endsection