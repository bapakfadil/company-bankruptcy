<!-- resources/views/companies/create.blade.php -->
<x-app-layout>
    <x-slot name="title">
        Add Company
    </x-slot>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Add Company</h4>
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

                        <form action="{{ route('companies.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="company_name" class="form-label">Company Name</label>
                                <input type="text" class="form-control" id="company_name" name="company_name" required>
                            </div>
                            <div class="mb-3">
                                <label for="company_code" class="form-label">Company Code</label>
                                <input type="text" class="form-control" id="company_code" name="company_code" required>
                            </div>
                            <div class="mb-3">
                                <label for="year_of_data" class="form-label">Year of Data</label>
                                <input type="number" class="form-control" id="year_of_data" name="year_of_data" required>
                            </div>
                            <div class="mb-3">
                                <label for="current_assets" class="form-label">Current Assets</label>
                                <input type="number" class="form-control" id="current_assets" name="current_assets" step="0.01" required>
                            </div>
                            <div class="mb-3">
                                <label for="current_liabilities" class="form-label">Current Liabilities</label>
                                <input type="number" class="form-control" id="current_liabilities" name="current_liabilities" step="0.01" required>
                            </div>
                            <div class="mb-3">
                                <label for="total_assets" class="form-label">Total Assets</label>
                                <input type="number" class="form-control" id="total_assets" name="total_assets" step="0.01" required>
                            </div>
                            <div class="mb-3">
                                <label for="ebit" class="form-label">Earnings Before Interest and Tax (EBIT)</label>
                                <input type="number" class="form-control" id="ebit" name="ebit" step="0.01" required>
                            </div>
                            <div class="mb-3">
                                <label for="net_income" class="form-label">Net Income</label>
                                <input type="number" class="form-control" id="net_income" name="net_income" step="0.01" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
