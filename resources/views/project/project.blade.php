@extends('layout.app')

@section('title', 'Project ' . $type_project->name)
@push('style')
    <style>
        .float-end {
            float: right;
        }
    </style>
@endpush
@section('main')
    <div class="content-viewport">
        <div class="row">
            <div class="col-lg-12">
                @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible alert-has-icon show fade">
                        <div class="alert-icon"><i class="far fa-circle-check"></i></div>
                        <div class="alert-body">
                            <div class="alert-title">Sukses</div>
                            <button class="close" data-dismiss="alert">
                                <span>&times;</span>
                            </button>
                            {{ session('success') }}!
                        </div>
                    </div>
                @endif
                <div class="grid">
                    <div class="grid-header">
                        <p class="d-inline start">Project <strong>{{ $type_project->name }}</strong></p>
                        <a href="{{ route('project.create', $type_project->slug) }}">
                            <button type="button" class="d-inline btn btn-outline-success mb-3 float-end">
                                Add Document
                            </button>
                        </a>
                    </div>
                    <div class="item-wrapper">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Tanggal Pembelian</th>
                                        <th>Inventory Card</th>
                                        <th>Nama</th>
                                        <th>Project</th>
                                        <th>Harga</th>
                                        <th>Lokasi</th>
                                        <th>Kondisi</th>
                                        <th>Tanggal Peminjaman</th>
                                        <th>Pemakai</th>
                                        <th>Deskripsi</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    @if (count($projects) === 0)
                                        <tr>
                                            <td colspan="12"><strong>Data tidak ditemukan</strong></td>
                                        </tr>
                                    @endif
                                    @foreach ($projects as $item)
                                        <tr>
                                            <td>{{ $projects->firstItem() + $loop->index }}</td>
                                            <td>{{ $item->buy_date?->isoFormat('dddd, D MMMM Y') ?? '-' }}</td>
                                            <td>{{ $item->inventory_card ?? '-' }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->project }}</td>
                                            <td>{{ Helper::formatRupiah($item->price) }}</td>
                                            <td>{{ $item->location }}</td>
                                            <td>
                                                @if ($item->condition == 'Baik')
                                                    <label class="badge badge-success">{{ $item->condition }}</label>
                                                @elseif($item->condition == 'Rusak')
                                                    <label class="badge badge-danger">{{ $item->condition }}</label>
                                                @else
                                                    <label class="badge badge-info">{{ $item->condition }}</label>
                                                @endif
                                            </td>
                                            <td>{{ $item->loan_date?->isoFormat('dddd, D MMMM Y') ?? '-' }}</td>
                                            <td>{{ $item->user ?? '-' }}</td>
                                            <td>{{ $item->description ?? '-' }}</td>
                                            <td>
                                                <a href="{{ route('project.edit', [$type_project->slug, $item->id]) }}">
                                                    <button class="btn btn-primary btn-xs has-icon"><i
                                                            class="mdi mdi-pencil mr-0"></i></button>
                                                </a>
                                                <form method="POST"
                                                    action="{{ route('project.destroy', [$type_project->slug, $item->id]) }}"
                                                    class="d-inline">
                                                    @csrf
                                                    {{ method_field('delete') }}
                                                    <button type="submit" class="btn btn-danger btn-xs has-icon"><i
                                                            class="mdi mdi-delete mr-0"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="float-end">
                    {!! $projects->links() !!}
                </div>
            </div>
            <!-- content viewport ends -->
            <!-- partial:../../partials/_footer.html -->
            <!-- content viewport ends -->
            <!-- partial:partials/_footer.html -->
            @include('component.footer')
            <!-- partial -->
        </div>
        <!-- page content ends -->
    </div>
@endsection
