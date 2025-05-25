@include('admin/includes.header') 
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Total Photographers Overview</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Dashboard</li>
          <li class="breadcrumb-item active">Photographers</li>
        </ol>
      </nav>
    </div>
  
    <section class="section dashboard">
      <div class="container py-4">
        <!-- Stats Cards -->
        <div class="row g-4 mb-4">
          <div class="col-md-4">
            <div class="card text-white bg-primary shadow rounded-3">
              <div class="card-body d-flex align-items-center justify-content-between">
                <div>
                  <h5 class="card-title">Total Photographers</h5>
                  <h3 class="card-text">400</h3>
                </div>
                <i class="bi bi-camera-fill fs-1"></i>
              </div>
            </div>
          </div>
        </div>
  
        <!-- Charts Row -->
        <div class="row g-4 mb-5">
          <!-- Verification Pie -->
          <div class="col-md-6">
            <div class="card shadow rounded-3">
              <div class="card-body">
                <h5 class="card-title">Verification Status</h5>
                <canvas id="verificationChart" height="200"></canvas>
              </div>
            </div>
          </div>
  
          <!-- Region Map Placeholder -->
          <div class="col-md-6">
            <div class="card shadow rounded-3">
              <div class="card-body">
                <h5 class="card-title">Photographers by Region</h5>
                <div class="text-center">
                  <img src="assets/img/map-placeholder.png" alt="Map" class="img-fluid rounded">
                  <small class="d-block mt-2 text-muted">Interactive map goes here</small>
                </div>
              </div>
            </div>
          </div>
        </div>
  
        <!-- Top-Rated Photographers Table -->
        <div class="card shadow rounded-3">
          <div class="card-body">
            <h5 class="card-title">Top Rated Photographers</h5>
            <div class="table-responsive">
              <table class="table table-bordered table-hover align-middle">
                <thead class="table-light">
                  <tr>
                    <th>Picture</th>
                    <th>Full Name</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>Gender</th>
                    <th>Joined Date</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><img src="assets/img/photographer1.jpg" alt="Photographer" class="rounded-circle" width="50" height="50"></td>
                    <td>Aarav Mehta</td>
                    <td>+91 98765 43210</td>
                    <td>21 Sunrise Street</td>
                    <td>Mumbai</td>
                    <td>Male</td>
                    <td>2022-06-15</td>
                  </tr>
                  <tr>
                    <td><img src="assets/img/photographer2.jpg" alt="Photographer" class="rounded-circle" width="50" height="50"></td>
                    <td>Shruti Sharma</td>
                    <td>+91 91234 56789</td>
                    <td>88 Dream Ave</td>
                    <td>Delhi</td>
                    <td>Female</td>
                    <td>2023-02-22</td>
                  </tr>
                  <!-- Add more photographer rows from backend -->
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
  
      <!-- Chart Scripts -->
      <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
      <script>
        const verificationCtx = document.getElementById('verificationChart').getContext('2d');
        new Chart(verificationCtx, {
          type: 'pie',
          data: {
            labels: ['Verified', 'Non-Verified'],
            datasets: [{
              data: [300, 100],
              backgroundColor: ['#198754', '#dc3545']
            }]
          },
          options: {
            responsive: true
          }
        });
      </script>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    </section>
  
</main>
@include('admin/includes.footer')
