@extends('admin.layouts.app')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid my-2">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Create Category</h1>
                </div>
                <div class="col-sm-6 text-right">
                    <a href="{{ route('catagory.catagories') }}" class="btn btn-primary">Back</a>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="container-fluid">
            <form action="{{ route('catagory.update',$catagory->id) }}" method="POST" name="categoryForm" id="categoryForm">
                @csrf
                @method('POST')

                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" id="name" class="form-control"
                                        value="{{ $catagory->name }}">
                                    @error('name')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="slug">Slug</label>
                                    <input type="text" name="slug" id="slug" class="form-control"
                                        value="{{ $catagory->slug }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="status">Status</label>
                                    <select name="status" id="status" class="form-control">
                                        <option value="1" {{ $catagory->status == 1 ? 'selected' : '' }}>Active
                                        </option>
                                        <option value="0" {{ $catagory->status == 0 ? 'selected' : '' }}>Block</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="pb-5 pt-3">
                    <input type="submit" class="btn btn-form">
                    <a href="#" class="btn btn-outline-dark ml-3">Cancel</a>
                </div>
            </form>
        </div>

        <!-- /.card -->
    </section>
    <!-- /.content -->
@endsection
@section('scripts')
    <script>
        $("#catagoryform").submit(function(event) {
            event.preventDefault();
            var element = $(this);
            $.ajax({
                url: "{{ route('category.store') }}",
                type: "POST",
                data: element.serializeArray(),
                dataType: "json",
                success: function(response) {
                    // if(response){
                    //     $("#catagoryform")[0].reset();
                    //     alert("Data Inserted Successfully");
                    // }
                },
                error: function(jqXHR, exception) {
                    console.log("Data Not Inserted");

                }
            });
        });
    </script>
@endsection
