@extends('app')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Pengalaman Kuliah</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        @foreach ($data as $item)

        <!-- Default box -->
        <div class="card">

            <div class="card-header">
                <h3 class="card-title">{{ $item->title }}</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
                {{ $item->content }}
            </div>
            <!-- /.card-body -->
            <!-- /.card-footer-->

        </div>
        <!-- /.card -->

        @endforeach

    </section>
    <!-- /.content -->
@endsection
