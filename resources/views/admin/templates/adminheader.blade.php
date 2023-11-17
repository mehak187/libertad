 <div class="top-nav d-flex justify-content-between align-items-center px-3 position-relative">
     <img class="position-absolute togg-btn" src="{{ asset('imgs/white-ham.png') }}" alt="" style="left: 15px;">
     <div class="search-box d-flex align-items-center">
         <h1 class="text-nowrap">Welcome, {{ auth()->user()->name }}!</h1>
     </div>
     <div class="d-flex align-items-center">
        {{-- <img src="{{ asset('imgs/profile.png') }}" alt=""> --}}
         <div class="d-flex align-items-center">
            <div>
                <a class="text-white d-block fs-5 text-decoration-none ms-2 fw-bold" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                                      
                {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
         </div>
     </div>
 </div>
