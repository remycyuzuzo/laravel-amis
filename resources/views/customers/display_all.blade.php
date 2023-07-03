@section('page-css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
@endsection

@section('page-js')
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script>
        let table = new DataTable('#customer_table');
    </script>
@endsection

@php
    use Carbon\Carbon;
@endphp
<x-app pageTitle="Customers">
    <x-page-title-bar title="Customers" />
    @if (isset($customers) && $customers->count() > 0)
        <div class="table-responsive">
            <table class="table" id="customer_table">
                <thead>
                    <th>#</th>
                    <th>First name</th>
                    <th>surname</th>
                    <th>Email address</th>
                    <th>Phone number</th>
                    <th>Date registered</th>
                    <th>S/N</th>
                    <th>actions</th>
                </thead>
                <tbody>
                    @foreach ($customers as $customer)
                        <tr>
                            <td>1</td>
                            <td>{{ $customer->first_name }}</td>
                            <td>{{ $customer->last_name }}</td>
                            <td>{{ $customer->email }}</td>
                            <td>{{ $customer->phone_number }}</td>
                            <td>{{ Carbon::parse($customer->created_at)->diffForHumans() }}</td>
                            <td>{{ '' }}</td>
                            <td>
                                <a href="edit={{ $customer->id }}" class="btn btn-secondary btn-xs"><i
                                        class="fas fa-edit"></i> edit</a>
                                <a href="delete={{ $customer->id }}" class="btn btn-danger btn-xs"><i
                                        class="fas fa-trash"></i> delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @else
        <x-alert type="info">NO CUSTOMERS REGISTERED</x-alert>
    @endif
</x-app>
