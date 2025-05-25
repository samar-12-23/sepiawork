@include('admin/includes.header')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Quick Access Buttons</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Dashboard</li>
          <li class="breadcrumb-item active">Quick Access</li>
        </ol>
      </nav>
    </div>
  
    <section class="section dashboard">
      <div class="container py-4">
  
        <!-- Quick Buttons Grid -->
        <div class="row g-4">
          <!-- Add New User -->
          <div class="col-md-4">
            <div class="card shadow text-center p-4 rounded-3">
              <i class="bi bi-person-plus-fill display-4 text-primary mb-3"></i>
              <h5 class="card-title">Add New User</h5>
              <a href="add_user.html" class="btn btn-primary mt-2">Go</a>
            </div>
          </div>
  
          <!-- Verify Photographers -->
          <div class="col-md-4">
            <div class="card shadow text-center p-4 rounded-3">
              <i class="bi bi-patch-check-fill display-4 text-success mb-3"></i>
              <h5 class="card-title">Verify Photographers</h5>
              <a href="verify_photographers.html" class="btn btn-success mt-2">Go</a>
            </div>
          </div>
  
          <!-- View Reports -->
          <div class="col-md-4">
            <div class="card shadow text-center p-4 rounded-3">
              <i class="bi bi-graph-up-arrow display-4 text-warning mb-3"></i>
              <h5 class="card-title">View Reports</h5>
              <a href="revenue_summary.html" class="btn btn-warning mt-2">Go</a>
            </div>
          </div>
  
          <!-- Upload Gallery -->
          <div class="col-md-4">
            <div class="card shadow text-center p-4 rounded-3">
              <i class="bi bi-images display-4 text-info mb-3"></i>
              <h5 class="card-title">Upload Gallery</h5>
              <a href="upload_gallery.html" class="btn btn-info mt-2">Go</a>
            </div>
          </div>
  
          <!-- Manage Purchases -->
          <div class="col-md-4">
            <div class="card shadow text-center p-4 rounded-3">
              <i class="bi bi-cart-check-fill display-4 text-secondary mb-3"></i>
              <h5 class="card-title">Manage Purchases</h5>
              <a href="total_purchases.html" class="btn btn-secondary mt-2">Go</a>
            </div>
          </div>
  
          <!-- Access Recent Logs -->
          <div class="col-md-4">
            <div class="card shadow text-center p-4 rounded-3">
              <i class="bi bi-clock-history display-4 text-danger mb-3"></i>
              <h5 class="card-title">Recent Logs</h5>
              <a href="recent_activities.html" class="btn btn-danger mt-2">Go</a>
            </div>
          </div>
        </div>
  
      </div>
  
      <!-- Bootstrap Icons -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  
    </section>
  
  </main>
  @include('admin/includes.footer')
  

  
  


