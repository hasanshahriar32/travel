@extends('admin.layouts.app')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid my-2">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Create Destination</h1>
                </div>
                <div class="col-sm-6 text-right">
                    <a href="{{ route('destination.index') }}" class="btn btn-primary">Back</a>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <!-- Default box -->
        <div class="container-fluid">
            <form action="{{ route('destination.update', $destination->id) }}" method="POST" name="categoryForm"
                id="categoryForm" enctype="multipart/form-data">
                @csrf
                @method('POST')

                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="Name">Name</label>
                                    <input type="text" name="Name" id="Name" class="form-control"
                                        placeholder="Name" value="{{old($destination->Name) }}">

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="District">District</label>
                                    <input type="text" name="District" id="District" class="form-control"
                                        placeholder="District" value="{{ old($destination->District) }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="slug">Duration</label>
                                    <input type="text" name="Duration" id="Duration" class="form-control"
                                        placeholder="Duration" value="{{ old($destination->Duration) }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="Price">Price</label>
                                    <input type="text" name="Price" id="Price" class="form-control"
                                        placeholder="Price" value="{{ old($destination->Price) }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="Description">Description</label>
                                    <textarea id="Description" name="Description" class="form-control" placeholder="Description" rows="5">{{ old($destination->Description) }}</textarea>
                                </div>
                            </div>


                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="Image">Image</label>
                                    <input type="file" name="Image" id="Image" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="Number">Number</label>
                                    <input type="text" name="Number" id="Number" class="form-control"
                                        placeholder="Number" value="{{old($destination->number) }}">
                                </div>
                            </div>


                        </div>
                    </div>
                </div>

                <div class="pb-5 pt-3">
                    <button type="submit" class="btn btn-form btn-danger">Submit</button>
                    <a href="{{ route('destination.index') }}" class="btn btn-outline-dark ml-3">Cancel</a>
                </div>
            </form>
        </div>

        <!-- /.card -->
    </section>
    <!-- /.content -->
@endsection
@section('scripts')
    {{-- <script>
        $("#catagoryform").submit(function(event) {
            event.preventDefault();
            var element = $(this);
            $.ajax({
                url: "{{ route('destination.store') }}",
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
    </script> --}}
@endsection
