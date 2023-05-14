@extends('layouts.backend')
@section('content')
<!-- Content -->

<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Pesanan</span> Laundry Kite</h4>
    
    <!-- Hoverable Table rows -->
    <div class="card border-0 shadow rounded">
        <div class="card-body">
            <a href="{{ route('pesanan.create') }}" class="btn btn-md btn-success mb-3">TAMBAH POST</a>
            <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">User</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Paket</th>
                    <th scope="col">Status</th>
                    <th scope="col">Jumlah</th>
                    <th scope="col">Selesai</th>
                  </tr>
                </thead>
                <tbody>
                  @forelse ($pesanans as $pesanan)
                    <tr>
                        <td>{{ $pesanan->user_id }}</td>
                        <td>{{ $pesanan->created_at }}</td>
                        <td>{{ $pesanan->paket_id }}</td>
                        <td>{{ $pesanan->status_id }}</td>
                        <td>{{ $pesanan->jumlah }}</td>
                        <td>{{ $pesanan->tanggal_selesai }}</td>
                        <td class="text-center">
                            <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('pesanans.destroy', $pesanan->id) }}" method="POST">
                                <a href="{{ route('posts.edit', $pesanan->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                            </form>
                        </td>
                    </tr>
                  @empty
                      <div class="alert alert-danger">
                          Data Post belum Tersedia.
                      </div>
                  @endforelse
                </tbody>
              </table>  
              {{ $pesanans->links() }}
        </div>
    </div>
<!-- / Content -->
    @endsection