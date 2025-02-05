@extends('backend.layouts.app')
@section('title', 'Cerindo | Service')

@section('content')


<main id="main" class="main">

    <div class="pagetitle">
        <h1>Service</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('service.index') }}">Service</a></li>
                <li class="breadcrumb-item active">Edit Service</li>
            </ol>
        </nav>
    </div><!-- End Page Name -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @elseif (session('error'))
                        <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                            {{ session('error') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif
                        <h5 class="card-title">Form Edit Service</h5>

                        <!-- General Form Elements -->

                        <form action="{{ route('service.update',$service->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="mb-3">
                                        <label class="form-label">Description ID</label>
                                        <textarea class="form-control" name="description_id" rows="7" required>{{ $service->description_id }}</textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Description EN</label>
                                        <textarea class="form-control" name="description_en" rows="7" required>{{ $service->description_en }}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="form-label">Title ID</label>
                                                <input type="text" name="title_id" class="form-control" required value="{{ $service->title_id }}">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="form-label">Title EN</label>
                                                <input type="text" name="title_en" class="form-control" required value="{{ $service->title_en }}">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="form-label">Category ID</label>
                                                <input type="text" name="category_id" class="form-control" required value="{{ $service->category_id }}">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="form-label">Category EN</label>
                                                <input type="text" name="category_en" class="form-control" required value="{{ $service->category_en }}">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="form-label">List ID</label>
                                                <input type="text" name="list_id" class="form-control" id="list-id-input" placeholder="Enter multiple IDs separated by commas"  value="{{ $service->list_id }}">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="form-label">List EN</label>
                                                <input type="text" name="list_en" class="form-control" id="list-id-input" placeholder="Enter multiple IDs separated by commas" value="{{ $service->list_en }}">
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="mb-3">
                                                <label class="form-label">
                                                    File Upload
                                                    <button type="button" class="btn btn-light btn-sm" data-bs-toggle="modal" data-bs-target="#showimage">
                                                        <i class="bi bi-eye-fill"></i>
                                                    </button></label>
                                                <input type="file" name="image" accept="image/png, image/gif, image/jpeg, image/webp" class="form-control mb-2">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="text-center mt-3 mb-2">
                        <button type="submit" class="btn btn-primary">Submit Form</button>
                    </div>

                    </form><!-- End General Form Elements -->

                </div>
            </div>
        </div>
        </div>
    </section>

</main><!-- End #main -->

<div class="modal fade" id="showimage" tabindex="-1" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">{{$service->image}}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <img src="{{ url('storage/service') }}/{{$service->image}}" width="100%">
            </div>
        </div>
    </div>
</div>

@endsection

@push('scripts')
<script>
    $('input[name="image"]').change(function() {
        console.log('tes')
        var maxSizeBytes = 10 * 1024 * 1024;
        var fileSize = this.files[0].size;
        if (fileSize > maxSizeBytes) {
            $(this).val('');
            Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "File size exceeds the maximum allowed size of 10MB!",
            });
        }
    });
</script>
@endpush