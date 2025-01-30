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
                        <form action="{{ route('save.messages') }}" method="POST">
                            @csrf
                            <h5 class="card-title">Form Edit English Messages</h5>
                            <textarea class="form-control" name="messages_en" rows="20" cols="50">{{ $messagesEn }}</textarea>

                            <h5 class="card-title mt-3">Form Edit Indonesian Messages</h5>
                            <textarea class="form-control" name="messages_id" rows="20" cols="50">{{ $messagesId }}</textarea>

                            <button type="submit" class="btn btn-primary mt-2">Save Changes</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

@endsection
