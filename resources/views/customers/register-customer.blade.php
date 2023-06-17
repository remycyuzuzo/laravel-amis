<x-app pageTitle="Register a client">
    <x-page-title-bar :breadcrumbMenuItems="[['text' => 'Customers', 'link' => '/']]" title="Client Registration" />
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form action="{{ route('client_register') }}" method="post">
                <div class="row">
                    <div class="col-md-6">
                        <x-form.input-text name="fname" label="First Name" placeholder="First name" required />
                    </div>
                    <div class="col-md-6">
                        <x-form.input-text name="lname" label="First Name" placeholder="First name" />
                    </div>
                </div>
                <x-form.input-text type="email" name="email" label="Email Address" required />
                <x-form.input-text type="tel" name="phone_number" label="Phone number" />
                <x-form.select :options="[
                    ['text' => 'Request New ID Card', 'value' => 'RequestNewID'],
                    ['text' => 'ID info correction', 'value' => 'correction'],
                    ['text' => 'Special service', 'value' => 'special'],
                ]" label="Service" placeholder="Please select the service" name="service"
                    required />
                <div class="form-input mb-3">
                    <button class="btn btn-primary"><i class="fas fa-check-circle"></i> save</button>
                </div>
            </form>
        </div>
    </div>

</x-app>
