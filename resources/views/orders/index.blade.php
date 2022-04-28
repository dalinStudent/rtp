@extends('layouts.app')
   
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Order Management</div>
                <div class="card-body">
                    
                    <table id="table_id" class="table table-striped table-bordered nowrap" style="width: 100%">
                        <thead>
                            <tr>
                                <th>Order ID</th>
                                <th>Customer Name</th>
                                <th>Cheif Name</th>
                                <th>Sub Total</th>
                                <th>Total</th>
                                <th>Shpping Status</th>
                                <th>Payment Status</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        @foreach ($orders as $order)
                            
                        <tbody>
                            <tr>
                                <td>{{ $order->id }}</td>
                                <th>{{ $order->user_id }}</th>
                                <td>{{ $order->cheif_id }}</td>
                                <td>{{ $order->status }}</td>
                                <td>{{ $order->sub_total }}</td>
                                <td>{{ $order->total }}</td>
                                <td>{{ $order->shpping_status }}</td>
                                <td>{{ $order->payment_status }}</td>
                                <td>
                                    <a class="btn btn-warning">Edit</a>
                                    <a class="btn btn-danger">Delete</a>
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