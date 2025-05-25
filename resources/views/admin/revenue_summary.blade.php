@include('admin/includes.header') 
 
 <main id="main" class="main">

    <div class="pagetitle">
      <h1>Revenue Summary</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Dashboard</li>
          <li class="breadcrumb-item active">Revenue Summary</li>
        </ol>
      </nav>
    </div>
  
    <section class="section dashboard">
      <div class="container py-4">
        <!-- Stats Cards -->
        <div class="row g-4 mb-4">
          <div class="col-md-4">
            <div class="card text-white bg-success shadow rounded-3">
              <div class="card-body d-flex align-items-center justify-content-between">
                <div>
                  <h5 class="card-title">Total Revenue</h5>
                  <h3 class="card-text">$250,000</h3>
                </div>
                <i class="bi bi-cash fs-1"></i>
              </div>
            </div>
          </div>
        </div>
  
        <!-- Charts Row -->
        <div class="row g-4 mb-5">
          <!-- Monthly Revenue Trends -->
          <div class="col-md-6">
            <div class="card shadow rounded-3">
              <div class="card-body">
                <h5 class="card-title">Revenue Trends (Last 6 Months)</h5>
                <canvas id="revenueTrendsChart" height="200"></canvas>
              </div>
            </div>
          </div>
  
          <!-- Revenue by Category -->
          <div class="col-md-6">
            <div class="card shadow rounded-3">
              <div class="card-body">
                <h5 class="card-title">Revenue by Category</h5>
                <canvas id="categoryRevenueChart" height="200"></canvas>
              </div>
            </div>
          </div>
        </div>
  
        <!-- Recent Revenue Table -->
        <div class="card shadow rounded-3">
          <div class="card-body">
            <h5 class="card-title">Recent Revenue Transactions</h5>
            <div class="table-responsive">
              <table class="table table-bordered table-hover align-middle">
                <thead class="table-light">
                  <tr>
                    <th>Date</th>
                    <th>Transaction ID</th>
                    <th>Amount</th>
                    <th>Category</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>2025-04-01</td>
                    <td>#TX12345</td>
                    <td>$5,000</td>
                    <td>Photography</td>
                    <td><span class="badge bg-success">Completed</span></td>
                  </tr>
                  <tr>
                    <td>2025-04-10</td>
                    <td>#TX12346</td>
                    <td>$2,500</td>
                    <td>Subscription</td>
                    <td><span class="badge bg-warning">Pending</span></td>
                  </tr>
                  <tr>
                    <td>2025-04-15</td>
                    <td>#TX12347</td>
                    <td>$1,800</td>
                    <td>Photography</td>
                    <td><span class="badge bg-success">Completed</span></td>
                  </tr>
                  <!-- More rows can be added dynamically -->
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
  
      <!-- Chart Scripts -->
      <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
      <script>
        const trendsCtx = document.getElementById('revenueTrendsChart').getContext('2d');
        new Chart(trendsCtx, {
          type: 'line',
          data: {
            labels: ['Nov', 'Dec', 'Jan', 'Feb', 'Mar', 'Apr'],
            datasets: [{
              label: 'Revenue',
              data: [18000, 22000, 25000, 20000, 28000, 30000],
              backgroundColor: 'rgba(0, 123, 255, 0.2)',
              borderColor: '#007bff',
              fill: true,
              tension: 0.4
            }]
          },
          options: {
            responsive: true,
            scales: {
              y: { beginAtZero: true }
            }
          }
        });
  
        const categoryCtx = document.getElementById('categoryRevenueChart').getContext('2d');
        new Chart(categoryCtx, {
          type: 'pie',
          data: {
            labels: ['Photography', 'Subscription', 'Advertising'],
            datasets: [{
              data: [120000, 80000, 50000],
              backgroundColor: ['#28a745', '#ffc107', '#17a2b8']
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



 