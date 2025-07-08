@extends('layouts.app')

@section('content')
<div class="container">
  <h2 class="mb-4 text-center">📊 Dashboard</h2>

  <div class="row mb-5">
    <div class="col-md-6 mb-3">
      <div class="card border-0 shadow-sm bg-gradient bg-success text-white">
        <div class="card-body">
          <h5 class="card-title">📚 Total Books</h5>
          <p class="display-5 fw-bold">{{ $totalBooks }}</p>
        </div>
      </div>
    </div>

    <div class="col-md-6 mb-3">
      <div class="card border-0 shadow-sm bg-gradient bg-info text-white">
        <div class="card-body">
          <h5 class="card-title">🖋️ Total Authors</h5>
          <p class="display-5 fw-bold">{{ $totalAuthors }}</p>
        </div>
      </div>
    </div>
  </div>

  <div class="d-flex justify-content-center gap-3">
    <a href="{{ route('authors.index') }}" class="btn btn-outline-primary px-4 py-2">
      👤 Manage Authors
    </a>
    <a href="{{ route('books.index') }}" class="btn btn-outline-secondary px-4 py-2">
      📘 Manage Books
    </a>
    <a href="{{ route('reports.form') }}" class="btn btn-outline-warning px-4 py-2">
      🧾 Generate Report
    </a>
  </div>
</div>
@endsection

