<x-app pageTitle="Show Cases">
    <x-page-title-bar title="Customers cases" :breadcrumbMenuItems="[['text' => 'Dashboard', 'link' => '/']]" />
    <hr />
    <div class="d-flex gap-10">
        <h3>filters</h3>
        <select name="status_filter" id="status_filter">
            <option value="">Open cases</option>
            <option value="">Closed cases</option>
            <option value="">On hold</option>
        </select>
    </div>
    <hr />
    @if (isset($customer_cases) && $customer_cases->count() > 0)
        @php $i = 0 @endphp
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <th>#</th>
                    <th>Full name</th>
                    <th>S/N</th>
                    <th>Service</th>
                    <th>Status</th>
                    <th>appointment</th>
                    <th>Date created</th>
                    <th>Last updated</th>
                    <th>actions</th>
                </thead>
                <tbody>
                    @foreach ($customer_cases as $customer_case)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>
                                {{ $customer_case->customer->first_name . ' ' . $customer_case->customer->last_name }}
                            </td>
                            <td>{{ '' }}</td>
                            <td>{{ $customer_case->service->service_name }}</td>
                            <td>{{ $customer_case->status }}</td>
                            <td>{{ '' }}</td>
                            <td>{{ $customer_case->created_at }}</td>
                            <td>{{ $customer_case->updated_at }}</td>
                            <td>
                                <a href="" class="btn btn-info btn-xs">add appointment</a>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    @else
        <x-alert type="info" message="No cases found, you may want to change filters" />
    @endif

</x-app>
