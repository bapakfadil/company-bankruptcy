<!-- resources/views/companies/edit.blade.php -->
<x-app-layout>
    <x-slot name="title">
        Edit Data Perusahaan
    </x-slot>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit Data Perusahaan</h4>
                    </div>
                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('companies.update', $company->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="company_name" class="form-label">Nama Perusahaan</label>
                                <input type="text" class="form-control" id="company_name" name="company_name" value="{{ $company->company_name }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="company_code" class="form-label">Kode Perusahaan</label>
                                <input type="text" class="form-control" id="company_code" name="company_code" value="{{ $company->company_code }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="year_of_data" class="form-label">Tahun</label>
                                <input type="number" class="form-control" id="year_of_data" name="year_of_data" value="{{ $company->year_of_data }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="current_assets" class="form-label">Asset Lancar</label>
                                <input type="number" class="form-control" id="current_assets" name="current_assets" step="0.01" value="{{ $company->current_assets }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="current_liabilities" class="form-label">Hutang Lancar</label>
                                <input type="number" class="form-control" id="current_liabilities" name="current_liabilities" step="0.01" value="{{ $company->current_liabilities }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="total_assets" class="form-label">Total Asset</label>
                                <input type="number" class="form-control" id="total_assets" name="total_assets" step="0.01" value="{{ $company->total_assets }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="gross_profit" class="form-label">Laba Kotor</label>
                                <input type="number" class="form-control" id="gross_profit" name="gross_profit" step="0.01" value="{{ $company->gross_profit }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="net_income" class="form-label">Laba Bersih</label>
                                <input type="number" class="form-control" id="net_income" name="net_income" step="0.01" value="{{ $company->net_income }}" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
