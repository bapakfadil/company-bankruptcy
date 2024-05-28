<!-- resources/views/companies/index.blade.php -->
<x-app-layout>
    <x-slot name="title">
        Companies
    </x-slot>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Companies
                            <a href="{{ route('companies.create') }}" class="btn btn-primary float-end">Add Company</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Company Name</th>
                                    <th>Company Code</th>
                                    <th>Year of Data</th>
                                    <th>G-Score</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($companies as $company)
                                    <tr>
                                        <td>{{ $company->id }}</td>
                                        <td>{{ $company->company_name }}</td>
                                        <td>{{ $company->company_code }}</td>
                                        <td>{{ $company->year_of_data }}</td>
                                        <td>{{ number_format($company->g_score, 2) }}</td>
                                        <td>
                                            <a href="{{ route('companies.show', $company->id) }}" class="btn btn-info btn-sm">View</a>
                                            <a href="{{ route('companies.edit', $company->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                            <form action="{{ route('companies.destroy', $company->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Are you sure you want to delete this company?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
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
