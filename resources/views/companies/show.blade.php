<!-- resources/views/companies/show.blade.php -->
<x-app-layout>
    <x-slot name="title">
        Company Details
    </x-slot>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Company Details</h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <tr>
                                <th>Company Name:</th>
                                <td>{{ $company->company_name }}</td>
                            </tr>
                            <tr>
                                <th>Company Code:</th>
                                <td>{{ $company->company_code }}</td>
                            </tr>
                            <tr>
                                <th>Year of Data:</th>
                                <td>{{ $company->year_of_data }}</td>
                            </tr>
                            <tr>
                                <th>Current Assets:</th>
                                <td>{{ $company->current_assets }}</td>
                            </tr>
                            <tr>
                                <th>Current Liabilities:</th>
                                <td>{{ $company->current_liabilities }}</td>
                            </tr>
                            <tr>
                                <th>Total Assets:</th>
                                <td>{{ $company->total_assets }}</td>
                            </tr>
                            <tr>
                                <th>Earnings Before Interest and Tax (EBIT):</th>
                                <td>{{ $company->ebit }}</td>
                            </tr>
                            <tr>
                                <th>Net Income:</th>
                                <td>{{ $company->net_income }}</td>
                            </tr>
                            <tr>
                                <th>G-Score:</th>
                                <td>{{ number_format($company->g_score, 2) }}</td>
                            </tr>
                        </table>
                        <a href="{{ route('companies.index') }}" class="btn btn-secondary">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
