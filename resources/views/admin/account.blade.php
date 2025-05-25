@include('admin/includes.header')
  <!-- account_creation_date.html -->
<main id="main" class="main">
    <div class="pagetitle">
      <h1>Account Creation Date</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">User Management</li>
          <li class="breadcrumb-item active">Account Creation Date</li>
        </ol>
      </nav>
    </div>
  
    <section class="section">
      <div class="container py-4">
        <div class="card shadow rounded-3">
          <div class="card-body">
            <h5 class="card-title">Users by Account Creation Date</h5>
            <div class="table-responsive">
              <table class="table table-bordered table-hover align-middle">
                <thead class="table-light">
                  <tr>
                    <th>User ID</th>
                    <th>Full Name</th>
                    <th>Creation Date</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>U001</td>
                    <td>Aarav Mehta</td>
                    <td>2022-06-15</td>
                  </tr>
                  <tr>
                    <td>U002</td>
                    <td>Shruti Sharma</td>
                    <td>2023-02-22</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
@include('admin/includes.footer')
  





  

  
  



