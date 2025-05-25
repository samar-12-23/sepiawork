@include('admin/includes.header') 
 <main id="main" class="main">
    <div class="pagetitle">
      <h1>Total Purchases Overview</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Dashboard</li>
          <li class="breadcrumb-item active">Total Purchases</li>
        </ol>
      </nav>
    </div>
  
    <section class="section dashboard">
      <div class="container py-4">
  
        <!-- Purchase Stats Cards -->
        <div class="row g-4 mb-4">
          <div class="col-md-4">
            <div class="card text-white bg-success shadow rounded-3">
              <div class="card-body d-flex align-items-center justify-content-between">
                <div>
                  <h5 class="card-title">Total Purchases</h5>
                  <h3 class="card-text">3,200</h3>
                </div>
                <i class="bi bi-cart-fill fs-1"></i>
              </div>
            </div>
          </div>
        </div>
  
        <!-- Charts Row -->
        <div class="row g-4 mb-5">
          <!-- Monthly Purchases Bar Chart -->
          <div class="col-md-6">
            <div class="card shadow rounded-3">
              <div class="card-body">
                <h5 class="card-title">Monthly Purchase Trends</h5>
                <canvas id="purchaseChart" height="200"></canvas>
              </div>
            </div>
          </div>
  
          <!-- Purchase Category Pie Chart -->
          <div class="col-md-6">
            <div class="card shadow rounded-3">
              <div class="card-body">
                <h5 class="card-title">Purchase by Category</h5>
                <canvas id="categoryChart" height="200"></canvas>
              </div>
            </div>
          </div>
        </div>
  
        <!-- Purchases Table -->
        <div class="card shadow rounded-3">
          <div class="card-body">
            <h5 class="card-title">Recent Purchases</h5>
            <div class="table-responsive">
              <table class="table table-bordered table-hover align-middle">
                <thead class="table-light">
                  <tr>
                    <th>Order ID</th>
                    <th>Buyer Name</th>
                    <th>Item</th>
                    <th>Amount</th>
                    <th>Status</th>
                    <th>Purchase Date</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>#ORD12098</td>
                    <td>Ravi Kumar</td>
                    <td>Wedding Package A</td>
                    <td>₹15,000</td>
                    <td><span class="badge bg-success">Completed</span></td>
                    <td>2025-04-10</td>
                  </tr>
                  <tr>
                    <td>#ORD12099</td>
                    <td>Neha Singh</td>
                    <td>Birthday Shoot</td>
                    <td>₹7,500</td>
                    <td><span class="badge bg-warning">Pending</span></td>
                    <td>2025-04-18</td>
                  </tr>
                  <!-- More purchase records -->
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
  
      <!-- Chart Scripts -->
      <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
      <script>
        const purchaseCtx = document.getElementById('purchaseChart').getContext('2d');
        new Chart(purchaseCtx, {
          type: 'bar',
          data: {
            labels: ['Nov', 'Dec', 'Jan', 'Feb', 'Mar', 'Apr'],
            datasets: [{
              label: 'Purchases',
              data: [450, 560, 620, 580, 640, 720],
              backgroundColor: '#198754'
            }]
          },
          options: {
            responsive: true,
            scales: {
              y: { beginAtZero: true }
            }
          }
        });
  
        const categoryCtx = document.getElementById('categoryChart').getContext('2d');
        new Chart(categoryCtx, {
          type: 'pie',
          data: {
            labels: ['Wedding', 'Birthday', 'Corporate', 'Others'],
            datasets: [{
              data: [1400, 800, 600, 400],
              backgroundColor: ['#0d6efd', '#ffc107', '#20c997', '#dc3545']
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
 