  <!-- Sidebar Start -->
  <div class="sidebar pe-4 pb-3">
      <nav class="navbar bg-secondary navbar-dark">
          <a href="/dashboard" class="navbar-brand mx-4 mb-3">
              <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>Golden Dream Ltd</h3>
          </a>
          <div class="d-flex align-items-center ms-4 mb-4">
              <div class="position-relative">
                  <img class="rounded-circle" src="/images/man.jpeg" alt="" style="width: 40px; height: 40px;">
                  <div
                      class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1">
                  </div>
              </div>
              <div class="ms-3">
                  <h6 class="mb-0">{{ $loggedInUser->first_name }} {{ $loggedInUser->last_name }}</h6>
                  <span>Admin</span>
              </div>
          </div>
          <div class="navbar-nav w-100">
              <a href="/dashboard" class="nav-item nav-link active"><i
                      class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
              {{-- <div class="nav-item dropdown">
                  <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i
                          class="fa fa-laptop me-2"></i>Elements</a>
                  <div class="dropdown-menu bg-transparent border-0">
                      <a href="button.html" class="dropdown-item">Buttons</a>
                      <a href="typography.html" class="dropdown-item">Typography</a>
                      <a href="element.html" class="dropdown-item">Other Elements</a>
                  </div>
              </div>
              <a href="" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Widgets</a>
              <a href="/forms" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Forms</a> --}}

              <div class="nav-item dropdown">
                  <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i
                          class="far fa-file-alt me-2"></i>Categories</a>
                  <div class="dropdown-menu bg-transparent border-0">
                      <a href="{{ route('create_category') }}" class="dropdown-item">Add a Category</a>
                      <a href="{{ route('showCategory') }}" class="dropdown-item">All Categories</a>
                      {{-- <a href="404.html" class="dropdown-item">404 Error</a>
                      <a href="blank.html" class="dropdown-item">Blank Page</a> --}}
                  </div>
              </div>

              {{-- <a href="/tables" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Blogs</a> --}}

              <div class="nav-item dropdown">
                  <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                      <i class="fa fa-table me-2"></i> Blogs </a>
                  <div class="dropdown-menu bg-transparent border-0">
                      <a href="{{ route('createBlogs') }}" class="dropdown-item">Add a Blog </a>
                      <a href="{{ route('showBlogs') }}" class="dropdown-item">Show Blogs</a>

                  </div>
              </div>

              {{-- <a href="chart.html" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Charts</a> --}}
              {{-- <div class="nav-item dropdown">
                  <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i
                          class="far fa-file-alt me-2"></i>Pages</a>
                  <div class="dropdown-menu bg-transparent border-0">
                      <a href="signin.html" class="dropdown-item">Sign In</a>
                      <a href="signup.html" class="dropdown-item">Sign Up</a>
                      <a href="404.html" class="dropdown-item">404 Error</a>
                      <a href="blank.html" class="dropdown-item">Blank Page</a>
                  </div>
              </div> --}}

              <div class="nav-item dropdown">
                  <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                      <i class="fa fa-th me-2"></i> Properties </a>
                  <div class="dropdown-menu bg-transparent border-0">
                      <a href="{{ route('createProperty') }}" class="dropdown-item">Add a Property </a>
                      <a href="{{ route('showProperty') }}" class="dropdown-item">Show Properties</a>

                  </div>
              </div>

          </div>
      </nav>
  </div>
  <!-- Sidebar End -->
