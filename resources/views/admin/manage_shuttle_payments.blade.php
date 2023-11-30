<!doctype html>
<html lang="en">

<head>
    @include('admin.templates.links')
    <title>Manage payments</title>
</head>

<body>

    <section class="main-tem">
        @include('admin.templates.sidebar-template')
        <div class="right-content p-0" style="background: #FAFBFE;">
          @include('admin.templates.adminheader')

            <div class="px-4 py-4 m-content px-lg-5">
            @if (count($payments) > 0)
                <div class="tbl-main mt-3 table-responsive">
                    <table class="table">
                        <thead>
                          <tr>
                            <th>User Name</th>
                            <th>Email</th>
                            <th>Pick-up location</th>
                            <th>Drop-of location</th>
                            <th>Date</th>
                            <th>Travelers</th>
                            <th>Car type</th>
                            <th>Status</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($payments as $payment)
                          <tr>
                            <td>{{$payment['user_name']}}</td>
                            <td>{{$payment['email']}}</td>
                            <td>{{$payment['pick_location']}}</td>
                            <td>{{$payment['drop_location']}}</td>
                            <td class="text-nowrap">{{$payment['date']}}</td>
                            <td>{{$payment['people']}}</td>
                            <td>{{$payment['type']}}</td>
                            <td>  
                              <p class="fw-bold {{ $payment->status === 'Paid' ? 'text-success' : 'text-danger' }}">
                              {{ $payment->status }}
                              </p>
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                </div>
             @else
                <div class="d-flex align-items-center mt-3 ">
                    <i class="fas fa-exclamation-triangle text-danger fs-4 me-2"></i><p class="text-danger fs-5">No record to show</p>
                </div>
             @endif
            </div>
        </div>
    </section>
    @include('admin.templates.scripts')
</body>
</html>