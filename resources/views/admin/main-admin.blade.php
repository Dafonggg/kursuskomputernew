@extends('layouts.admin')

@section('title', 'Dashboard | Sistem Kursus Komputer')
@section('content')
    @include('admin.index-admin')
    @include('admin.jadwal-kursus')
    @include('admin.kursus')
    @include('admin.materi-kursus')
    @include('admin.katalog-produk')
    @include('admin.laporan-keuangan')
    @include('admin.analisis-peserta')
    @include('admin.chat')
@endsection