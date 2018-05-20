<li class="{{ Request::is('admin/patients*') ? 'active' : '' }}">
    <a href="{!! route('admin.patients.index') !!}">
    <i class="livicon" data-c="#31B0D5" data-hc="#31B0D5" data-name="user" data-size="18"
               data-loop="true"></i>
               Patients
    </a>
</li>

<li class="{{ Request::is('admin/businessDetails*') ? 'active' : '' }}">
    <a href="{!! route('admin.businessDetails.index') !!}">
    <i class="livicon" data-c="#EF6F6C" data-hc="#EF6F6C" data-name="globe" data-size="18"
               data-loop="true"></i>
               BusinessDetails
    </a>
</li>

<li class="{{ Request::is('admin/customerDetails*') ? 'active' : '' }}">
    <a href="{!! route('admin.customerDetails.index') !!}">
    <i class="livicon" data-c="#EF6F6C" data-hc="#EF6F6C" data-name="wrench" data-size="18"
               data-loop="true"></i>
               CustomerDetails
    </a>
</li>

<li class="{{ Request::is('admin/services*') ? 'active' : '' }}">
    <a href="{!! route('admin.services.index') !!}">
    <i class="livicon" data-c="#EF6F6C" data-hc="#EF6F6C" data-name="list" data-size="18"
               data-loop="true"></i>
               Services
    </a>
</li>

<li class="{{ Request::is('admin/appointments*') ? 'active' : '' }}">
    <a href="{!! route('admin.appointments.index') !!}">
    <i class="livicon" data-c="#EF6F6C" data-hc="#EF6F6C" data-name="map" data-size="18"
               data-loop="true"></i>
               Appointments
    </a>
</li>

<li class="{{ Request::is('admin/dentalCharts*') ? 'active' : '' }}">
    <a href="{!! route('admin.dentalCharts.index') !!}">
    <i class="livicon" data-c="#F89A14" data-hc="#F89A14" data-name="gear" data-size="18"
               data-loop="true"></i>
               DentalCharts
    </a>
</li>

