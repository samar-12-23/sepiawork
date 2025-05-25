@include('admin/includes.header') 
<main id="main" class="main">
    <div class="pagetitle">
      <h1>Contact Number</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">User Management</li>
          <li class="breadcrumb-item active">Contact Number</li>
        </ol>
      </nav>
    </div>
  
    <section class="section">
      <div class="container py-4">
        <div class="card shadow rounded-3">
          <div class="card-body">
            <h5 class="card-title">User Contact Numbers</h5>
            <div class="table-responsive">
              <table class="table table-bordered table-hover align-middle">
                <thead class="table-light">
                  <tr>
                    <th>User ID</th>
                    <th>Full Name</th>
                    <th>Contact Number</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>U001</td>
                    <td>Aarav Mehta</td>
                    <td>+91 98765 43210</td>
                  </tr>
                  <tr>
                    <td>U002</td>
                    <td>Shruti Sharma</td>
                    <td>+91 91234 56789</td>
                  </tr>
                  <!-- More rows from backend -->
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  @include('admin/includes.footer')


  

  
  

