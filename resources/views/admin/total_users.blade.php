@include('admin/includes.header') 
 <main id="main" class="main">

    <div class="pagetitle">
      <h1>Frequently Asked Questions</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Pages</li>
          <li class="breadcrumb-item active">Frequently Asked Questions</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
  
    <section class="section faq">
      <div class="container py-4">
        <h2 class="mb-4">User Overview</h2>
  
        <!-- Summary Card -->
        <div class="row g-4 mb-4">
          <div class="col-md-4">
            <div class="card text-white bg-primary shadow rounded-3">
              <div class="card-body d-flex align-items-center justify-content-between">
                <div>
                  <h5 class="card-title">Total Users</h5>
                  <h3 class="card-text">1,250</h3>
                </div>
                <i class="bi bi-people-fill fs-1"></i>
              </div>
            </div>
          </div>
        </div>
  
        <!-- Charts Row -->
        <div class="row g-4 mb-5">
          <!-- User Growth Chart -->
          <div class="col-md-6">
            <div class="card shadow rounded-3">
              <div class="card-body">
                <h5 class="card-title">User Growth (Last 6 Months)</h5>
                <canvas id="growthChart" height="200"></canvas>
              </div>
            </div>
          </div>
  
          <!-- User Type Pie -->
          <div class="col-md-6">
            <div class="card shadow rounded-3">
              <div class="card-body">
                <h5 class="card-title">User Type Distribution</h5>
                <canvas id="userTypeChart" height="200"></canvas>
              </div>
            </div>
          </div>
        </div>
  
        <!-- Table View of Users -->
        <div class="card shadow rounded-3">
          <div class="card-body">
            <h5 class="card-title">Users List</h5>
            <div class="table-responsive">
              <table class="table table-bordered table-hover align-middle">
                <thead class="table-light">
                  <tr>
                    <th>Picture</th>
                    <th>Full Name</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>Gender</th>
                    <th>Joined Date</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><img src="assets/img/user1.jpg" alt="User" class="rounded-circle" width="50" height="50"></td>
                    <td>John Doe</td>
                    <td>123 Main St</td>
                    <td>New York</td>
                    <td>Male</td>
                    <td>2023-08-14</td>
                  </tr>
                  <tr>
                    <td><img src="assets/img/user2.jpg" alt="User" class="rounded-circle" width="50" height="50"></td>
                    <td>Jane Smith</td>
                    <td>456 Oak Ave</td>
                    <td>Los Angeles</td>
                    <td>Female</td>
                    <td>2023-11-02</td>
                  </tr>
                  <!-- Add more user rows dynamically from the backend -->
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
  
      <!-- Charts Script -->
      <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
      <script>
        const growthCtx = document.getElementById('growthChart').getContext('2d');
        new Chart(growthCtx, {
          type: 'bar',
          data: {
            labels: ['Nov', 'Dec', 'Jan', 'Feb', 'Mar', 'Apr'],
            datasets: [{
              label: 'New Users',
              data: [120, 150, 200, 180, 220, 240],
              backgroundColor: '#0d6efd'
            }]
          },
          options: {
            responsive: true,
            scales: {
              y: { beginAtZero: true }
            }
          }
        });
  
        const typeCtx = document.getElementById('userTypeChart').getContext('2d');
        new Chart(typeCtx, {
          type: 'pie',
          data: {
            labels: ['Simple Users', 'Photographers'],
            datasets: [{
              data: [850, 400],
              backgroundColor: ['#198754', '#ffc107']
            }]
          },
          options: {
            responsive: true
          }
        });
      </script>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    </section>
  
  </main><!-- End #main -->
  @include('admin/includes.footer')
  
