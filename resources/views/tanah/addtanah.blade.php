@extends('layout.app')

@section('title', 'Tanah')
@section('main')
    <div class="content-viewport">
        <div class="row">
            @if (session()->has('error'))
                <div class="col-12">
                    <div class="alert alert-danger alert-dismissible alert-has-icon show fade">
                        <div class="alert-icon"><i class="far fa-circle-check"></i></div>
                        <div class="alert-body">
                            <div class="alert-title">Gagal!!!</div>
                            <button class="close" data-dismiss="alert">
                                <span>&times;</span>
                            </button>
                            {{ session('error') }}!
                        </div>
                    </div>
                </div>
            @endif
            <div class="col-lg-12 equel-grid">
                <div class="grid">
                    <p class="grid-header">Tambah Data Tanah</p>
                    <div class="grid-body">
                        <div class="item-wrapper">
                            <form method="post" action="{{ route('tanah.store') }}">
                                @csrf
                                <div class="form-group row showcase_row_area">
                                    <div class="col-md-2 showcase_text_area">
                                        <label for="inp_name">Nama *</label>
                                    </div>
                                    <div class="col-md-8 showcase_content_area">
                                        <input type="text" class="form-control  @error('inp_name') is-invalid @enderror"
                                            id="inp_name" name="inp_name" placeholder="Masukan nama anda"
                                            value="{{ old('inp_name') }}">
                                        @error('inp_name')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row showcase_row_area">
                                    <div class="col-md-2 showcase_text_area">
                                        <label for="inp_inv_card">Inventory Card</label>
                                    </div>
                                    <div class="col-md-8 showcase_content_area">
                                        <input type="text"
                                            class="form-control  @error('inp_inv_card') is-invalid @enderror"
                                            id="inp_inv_card" name="inp_inv_card" placeholder="Masukan inventory card"
                                            value="{{ old('inp_inv_card') }}">
                                        @error('inp_inv_card')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row showcase_row_area">
                                    <div class="col-md-2 showcase_text_area">
                                        <label for="inp_tglpembelian">Tanggal Pembelian</label>
                                    </div>
                                    <div class="col-md-8 showcase_content_area">
                                        <input type="date"
                                            class="form-control  @error('inp_tglpembelian') is-invalid @enderror"
                                            id="inp_tglpembelian" name="inp_tglpembelian"
                                            value="{{ old('inp_tglpembelian') }}">
                                        @error('inp_tglpembelian')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row showcase_row_area">
                                    <div class="col-md-2 showcase_text_area">
                                        <label for="inp_project">Project *</label>
                                    </div>
                                    <div class="col-md-8 showcase_content_area">
                                        <select class="custom-select @error('inp_project') is-invalid @enderror"
                                            name="inp_project">
                                            <option value="">-- Pilih Project --</option>
                                            @foreach ($projects as $project)
                                                <option value="{{ $project->id }}" @selected(old('inp_project') == $project->id)>
                                                    {{ $project->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('inp_project')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row showcase_row_area">
                                    <div class="col-md-2 showcase_text_area">
                                        <label for="inp_harga">Harga</label>
                                    </div>
                                    <div class="col-md-8 showcase_content_area">
                                        <input type="number" class="form-control @error('inp_harga') is-invalid @enderror"
                                            id="inp_harga" name="inp_harga" placeholder="Masukan data harga"
                                            value="{{ old('inp_harga') }}">
                                        @error('inp_harga')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row showcase_row_area">
                                    <div class="col-md-2 showcase_text_area">
                                        <label for="inp_lokasi">Lokasi *</label>
                                    </div>
                                    <div class="col-md-8 showcase_content_area">
                                        <input type="text" class="form-control @error('inp_lokasi') is-invalid @enderror"
                                            id="inp_lokasi" name="inp_lokasi" placeholder="Masukan data lokasi"
                                            value="{{ old('inp_lokasi') }}">
                                        @error('inp_lokasi')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row showcase_row_area">
                                    <div class="col-md-2 showcase_text_area">
                                        <label for="inp_pemakai">Pemakai</label>
                                    </div>
                                    <div class="col-md-8 showcase_content_area">
                                        <input type="text"
                                            class="form-control @error('inp_pemakai') is-invalid @enderror" id="inp_pemakai"
                                            name="inp_pemakai" placeholder="Masukan data pemakai"
                                            value="{{ old('inp_pemakai') }}">
                                        @error('inp_pemakai')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row showcase_row_area">
                                    <div class="col-md-2 showcase_text_area">
                                        <label for="inp_kondisi">Kondisi *</label>
                                    </div>
                                    <div class="col-md-8 showcase_content_area">
                                        <select class="custom-select @error('inp_kondisi') is-invalid @enderror"
                                            name="inp_kondisi">
                                            <option selected="selected">-- Pilih --</option>
                                            <option value="Baik" @selected(old('inp_kondisi') == 'Baik')>Baik</option>
                                            <option value="Rusak" @selected(old('inp_kondisi') == 'Rusak')>Rusak</option>
                                            <option value="Dijual" @selected(old('inp_kondisi') == 'Dijual')>Dijual</option>
                                            <option value="Hilang" @selected(old('inp_kondisi') == 'Hilang')>Hilang</option>
                                        </select>
                                        @error('inp_kondisi')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row showcase_row_area">
                                    <div class="col-md-2 showcase_text_area">
                                    </div>
                                    <div class="col-md-8 showcase_content_area">
                                        <button type="submit" class="btn btn-sm btn-primary">Tambah</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
