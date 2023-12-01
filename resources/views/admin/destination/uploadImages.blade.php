@extends('admin.layouts.app')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid my-2">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Upload Destination Images </h1>
                </div>
                <div class="col-sm-6 text-right">
                    <a href="{{ route('admin.dashboard') }}" class="btn btn-primary">Back</a>
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
        
        @if (\Session::has('success'))

            <div class="alert alert-success">
                <p>{{ \Session::get('success') }}</p>
            </div>

        @endif
        <!-- Default box -->
        <div class="container-fluid">
            <form action="{{ route('destination.uploadImages.store') }}" method="POST" name="categoryForm" id="categoryForm"
                enctype="multipart/form-data">
                @csrf
                @method('POST')

                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="destination">Select Destination:</label>
                                    <select class="form-control" name="destination_id" id="destination">
                                        @foreach ($destinations as $destination)
                                            <option value="{{ $destination->id }}">{{ $destination->Name }}</option>
                                        @endforeach
                                    </select>

                                </div>
                            </div>







                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="images">Select Images:</label>
                                    <input class='form-control' type="file" name="images[]" multiple accept="image/*">
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
