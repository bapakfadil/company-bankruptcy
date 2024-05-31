<!-- resources/views/companies/show.blade.php -->
<x-app-layout>
    <x-slot name="title">
        Detail Perusahaan
    </x-slot>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Detail Perusahaan</h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <tr>
                                <th>Nama Perusahaan:</th>
                                <td>{{ $company->company_name }}</td>
                            </tr>
                            <tr>
                                <th>Kode Perusahaan:</th>
                                <td>{{ $company->company_code }}</td>
                            </tr>
                            <tr>
                                <th>Tahun:</th>
                                <td>{{ $company->year_of_data }}</td>
                            </tr>
                            <tr>
                                <th>Asset Lancar:</th>
                                <td>{{ $company->current_assets }}</td>
                            </tr>
                            <tr>
                                <th>Hutang Lancar:</th>
                                <td>{{ $company->current_liabilities }}</td>
                            </tr>
                            <tr>
                                <th>Total Asset:</th>
                                <td>{{ $company->total_assets }}</td>
                            </tr>
                            <tr>
                                <th>Laba Kotor:</th>
                                <td>{{ $company->gross_profit }}</td>
                            </tr>
                            <tr>
                                <th>Laba Bersih:</th>
                                <td>{{ $company->net_income }}</td>
                            </tr>
                            <tr>
                                <th>G-Score:</th>
                                <td>{{ number_format($company->g_score, 2) }}</td>
                            </tr>
                        </table>
                        <a href="{{ route('companies.index') }}" class="btn btn-secondary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
