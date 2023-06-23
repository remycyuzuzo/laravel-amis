<x-app pageTitle="Register a client">
    <x-page-title-bar :breadcrumbMenuItems="[['text' => 'Customers', 'link' => '/']]" title="Client Registration" />
    <div class="row justify-content-center">
        <div class="col-md-6">
            @if (session('message'))
                <x-alert type="success" message="{{ session('message') }}" />
            @endif
            <form action="{{ route('client_register') }}" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <x-form.input-text name="fname" label="First Name" placeholder="First name" required />
                    </div>
                    <div class="col-md-6">
                        <x-form.input-text name="lname" label="Last Name" placeholder="Last name" />
                    </div>
                </div>
                <x-form.input-text type="email" name="email" label="Email Address" required />
                <x-form.input-text type="tel" name="phone_number" label="Phone number" />
                @php
                    $options = [];
                    for ($i = 0; $i < count($services); $i++) {
                        $options[$i]['text'] = $services[$i]['service_name'];
                        $options[$i]['value'] = $services[$i]['id'];
                    }
                @endphp
                <x-form.select :options="$options" label="Service" placeholder="Please select the service" name="service"
                    required />
                <x-form.textarea name="description" label="Service Description (optional)"
                    placeholder="Fill this if you have selected 'other' in services"></x-form.textarea>
                <div class="form-input mb-3">
                    <button class="btn btn-primary"><i class="fas fa-check-circle"></i> save</button>
                </div>
            </form>
        </div>
    </div>

</x-app>
