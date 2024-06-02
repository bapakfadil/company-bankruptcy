<!-- resources/views/companies/index.blade.php -->
<x-app-layout>
    <x-slot name="title">
        Data Perusahaan
    </x-slot>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Data Perusahaan
                            <a href="{{ route('companies.create') }}" class="btn btn-primary float-end">Tambah Perusahaan</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        <table class="table table-bordered">
                            <thead class="text-center">
                                <tr>
                                    <th>ID</th>
                                    <th>Kode Perusahaan</th>
                                    <th>Tahun</th>
                                    <th>Working Capital</th>
                                    <th>X1</th>
                                    <th>X2</th>
                                    <th>ROA</th>
                                    <th>G-Score</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($companies as $company)
                                    <tr>
                                        <td>{{ $company->id }}</td>
                                        <td>{{ $company->company_code }}</td>
                                        <td>{{ $company->year_of_data }}</td>
                                        <td>{{ number_format($company->working_capital, 0, ',', '.') }}</td>
                                        <td>{{ number_format($company->x1, 3, ',', '.') }}</td>
                                        <td>{{ number_format($company->x2, 3, ',', '.') }}</td>
                                        <td>{{ number_format($company->roa, 3, ',', '.') }}</td>
                                        <td>{{ number_format($company->g_score, 3, ',', '.') }}</td>
                                        <td>{{ $company->status }}</td>
                                        <td class="text-center">
                                            <a href="{{ route('companies.show', $company->id) }}" class="btn btn-info btn-sm">Lihat</a>
                                            <a href="{{ route('companies.edit', $company->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                            <form action="{{ route('companies.destroy', $company->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Anda yakin ingin menghapus data ini?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
