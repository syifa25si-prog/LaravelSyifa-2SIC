
@extends('layouts.admin.app')

@section('content')

{{-- start main content --}}

<div class="py-4">
    <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
        <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
            <li class="breadcrumb-item">
                <a href="{{ route('dashboard') }}">
                    <svg class="icon icon-xxs" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2"
                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0h6">
                        </path>
                    </svg>
                </a>
            </li>
            <li class="breadcrumb-item">
                <a href="{{ route('pelanggan.index') }}">Pelanggan</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
                Edit Data
            </li>
        </ol>
    </nav>

    <div class="d-flex justify-content-between w-100 flex-wrap">
        <div class="mb-3 mb-lg-0">
            <h1 class="h4">Edit Pelanggan</h1>
            <p class="mb-0">
                Form untuk memperbaharui data pelanggan.
            </p>
        </div>

        <div>
            <a href="{{ route('pelanggan.index') }}"
                class="btn btn-outline-gray-800">
                Kembali
            </a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12 mb-4">
        <div class="card border-0 shadow components-section">
            <div class="card-body">

                <form action="{{ route('pelanggan.update', $dataPelanggan->pelanggan_id) }}"
                    method="POST">

                    @csrf
                    @method('PUT')

                    <div class="row mb-4">

                        {{-- First Name dan Last Name --}}
                        <div class="col-lg-4 col-sm-6">

                            <div class="mb-3">
                                <label for="first_name" class="form-label">
                                    First name
                                </label>

                                <input type="text"
                                    class="form-control"
                                    id="first_name"
                                    name="first_name"
                                    value="{{ old('first_name', $dataPelanggan->first_name) }}"
                                    required>
                            </div>

                            <div class="mb-3">
                                <label for="last_name" class="form-label">
                                    Last name
                                </label>

                                <input type="text"
                                    class="form-control"
                                    id="last_name"
                                    name="last_name"
                                    value="{{ old('last_name', $dataPelanggan->last_name) }}"
                                    required>
                            </div>

                        </div>

                        {{-- Birthday dan Gender --}}
                        <div class="col-lg-4 col-sm-6">

                            <div class="mb-3">
                                <label for="birthday" class="form-label">
                                    Birthday
                                </label>

                                <input type="date"
                                    class="form-control"
                                    id="birthday"
                                    name="birthday"
                                    value="{{ old('birthday', $dataPelanggan->birthday ? \Carbon\Carbon::parse($dataPelanggan->birthday)->format('Y-m-d') : '') }}"
                                    required>
                            </div>

                            <div class="mb-3">
                                <label for="gender" class="form-label">
                                    Gender
                                </label>

                                <select class="form-select"
                                    id="gender"
                                    name="gender"
                                    required>

                                    <option value="">-- Pilih Gender --</option>

                                    <option value="Female"
                                        {{ old('gender', $dataPelanggan->gender) == 'Female' ? 'selected' : '' }}>
                                        Female
                                    </option>

                                    <option value="Male"
                                        {{ old('gender', $dataPelanggan->gender) == 'Male' ? 'selected' : '' }}>
                                        Male
                                    </option>

                                    <option value="Other"
                                        {{ old('gender', $dataPelanggan->gender) == 'Other' ? 'selected' : '' }}>
                                        Other
                                    </option>

                                </select>
                            </div>

                        </div>

                        {{-- Email dan Phone --}}
                        <div class="col-lg-4 col-sm-6">

                            <div class="mb-3">
                                <label for="email" class="form-label">
                                    Email
                                </label>

                                <input type="email"
                                    class="form-control"
                                    id="email"
                                    name="email"
                                    value="{{ old('email', $dataPelanggan->email) }}"
                                    required>
                            </div>

                            <div class="mb-3">
                                <label for="phone" class="form-label">
                                    Phone
                                </label>

                                <input type="text"
                                    class="form-control"
                                    id="phone"
                                    name="phone"
                                    value="{{ old('phone', $dataPelanggan->phone) }}"
                                    required>
                            </div>

                        </div>

                        {{-- Tombol --}}
                        <div class="col-12 mt-3">

                            <button type="submit" class="btn btn-info">
                                Simpan Perubahan
                            </button>

                            <a href="{{ route('pelanggan.index') }}"
                                class="btn btn-link text-gray-600 ms-2">
                                Batal
                            </a>

                        </div>

                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

{{-- end main content --}}

@endsection
