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
                            <th>Total Price</th>
                            <th>Date</th>
                            <th>Travelers</th>
                            <th>Plan</th>
                            <th>Status</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($payments as $payment)
                          <tr>
                            <td>{{$payment['user_name']}}</td>
                            <td>{{$payment['email']}}</td>
                            <td>{{$payment['t_price']}}</td>
                            <td class="text-nowrap">
                              @if ($payment['date']==NULL)
                                  {{"N/A"}}
                              @else
                              {{$payment['date']}}
                              @endif
                            </td>
                            <td>
                              @if ($payment['people']==0)
                                {{"N/A"}}
                              @else
                              {{$payment['people']}}
                              @endif
                            </td>
                            @php
                            $role = $payment['booking_role'];
                                if ($role == 1) {
                                    $role = "City Tour";
                                }
                                elseif($role == 2) {
                                  $role = "Musuem";
                                }
                                elseif($role == 3) {
                                  $role = "Accomodation";
                                }
                                elseif($role == 4) {
                                  $role = "Daily activities";
                                }
                                elseif($role == 5) {
                                  $role = "Special tour";
                                }
                                elseif($role == 6) {
                                  $role = "Products and tools";
                                }
                                elseif($role == 7) {
                                  $role = "Daily Activities";
                                }
                            @endphp
                            <td>{{$role}} - {{$payment['tour_name']}}</td>
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