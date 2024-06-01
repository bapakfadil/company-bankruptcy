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
                                <td>{{ number_format($company->current_assets, 0, ',', '.') }}</td>
                            </tr>
                            <tr>
                                <th>Hutang Lancar:</th>
                                <td>{{ number_format($company->current_liabilities, 0, ',', '.') }}</td>
                            </tr>
                            <tr>
                                <th>Working Capital:</th>
                                <td>{{ number_format($company->working_capital, 0, ',', '.') }}</td>
                            </tr>
                            <tr>
                                <th>Total Asset:</th>
                                <td>{{ number_format($company->total_assets, 0, ',', '.') }}</td>
                            </tr>
                            <tr>
                                <th>Variabel X1:</th>
                                <td>{{ number_format($company->x1, 3, ',', '.') }}</td>
                            </tr>
                            <tr>
                                <th>Laba Kotor:</th>
                                <td>{{ number_format($company->gross_profit, 0, ',', '.') }}</td>
                            </tr>
                            <tr>
                                <th>Variabel X2:</th>
                                <td>{{ number_format($company->x2, 3, ',', '.') }}</td>
                            </tr>
                            <tr>
                                <th>Laba Bersih:</th>
                                <td>{{ number_format($company->net_income, 0, ',', '.') }}</td>
                            </tr>
                            <tr>
                                <th>ROA:</th>
                                <td>{{ number_format($company->roa, 3, ',', '.') }}</td>
                            </tr>
                            <tr>
                                <th>G-Score:</th>
                                <td>{{ number_format($company->g_score, 3, ',', '.') }}</td>
                            </tr>
                        </table>
                        <a href="{{ route('companies.index') }}" class="btn btn-secondary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
