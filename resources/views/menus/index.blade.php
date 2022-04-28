@extends('layouts.app')
   
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Menu Management</div>
                <div class="card-body">
                    <a class="btn btn-primary mb-2 btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#addModal"><i class="mdi mdi-plus" aria-hidden="true"></i> Add User</a>
                    <table id="table_id" class="table table-striped table-bordered nowrap" style="width: 100%">
                        <thead>
                            <tr>
                                <th>Menu ID</th>
                                <th>Customer Name</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Quanty</th>
                                <th>Price</th>
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

<!-- Modal -->
<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addModal">Add New Menu</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
            <div class="input-group mb-3">
                <input type="text" 
                    class="form-control" 
                    aria-label="title" 
                    placeholder="Enter food title..."
                    aria-describedby="basic-addon1"
                >
            </div>
            <div class="input-group mb-3">
                <input type="number" 
                    class="form-control" 
                    aria-label="price" 
                    placeholder="Enter food price..."
                    aria-describedby="basic-addon1"
                >
            </div>
            <div class="input-group mb-3">
                <input type="text" 
                    class="form-control" 
                    aria-label="quanty" 
                    placeholder="Enter food quanty..."
                    aria-describedby="basic-addon1"
                >
            </div>
            <div class="input-group mb-3">
                <input type="text" 
                    class="form-control" 
                    aria-label="sub total" 
                    placeholder="Enter food sub total..."
                    aria-describedby="basic-addon1"
                >
            </div>
            <div class="input-group mb-3">
                <input type="text" 
                    class="form-control" 
                    aria-label="total" 
                    placeholder="Enter food total..."
                    aria-describedby="basic-addon1"
                >
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Submit</button>
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