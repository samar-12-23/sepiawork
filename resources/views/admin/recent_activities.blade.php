@include('admin/includes.header')
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Recent Activities</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Dashboard</li>
          <li class="breadcrumb-item active">Recent Activities</li>
        </ol>
      </nav>
    </div>
  
    <section class="section dashboard">
      <div class="container py-4">
  
        <!-- Timeline / Logs -->
        <div class="card shadow rounded-3 mb-4">
          <div class="card-body">
            <h5 class="card-title">Activity Timeline</h5>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">
                <i class="bi bi-person-plus text-success"></i> New user <strong>Ravi Kumar</strong> registered.
                <span class="text-muted float-end">2 minutes ago</span>
              </li>
              <li class="list-group-item">
                <i class="bi bi-camera-fill text-info"></i> Photographer <strong>Anjali Verma</strong> uploaded new photos.
                <span class="text-muted float-end">10 minutes ago</span>
              </li>
              <li class="list-group-item">
                <i class="bi bi-cash-coin text-warning"></i> Purchase made by <strong>Sneha Joshi</strong> - $299.
                <span class="text-muted float-end">30 minutes ago</span>
              </li>
              <li class="list-group-item">
                <i class="bi bi-check-circle-fill text-success"></i> Photographer <strong>Rohan Singh</strong> verified.
                <span class="text-muted float-end">1 hour ago</span>
              </li>
              <!-- More items can be added -->
            </ul>
          </div>
        </div>
  
        <!-- Activities Table -->
        <div class="card shadow rounded-3">
          <div class="card-body">
            <h5 class="card-title">System Activity Log</h5>
            <div class="table-responsive">
              <table class="table table-bordered table-hover align-middle">
                <thead class="table-light">
                  <tr>
                    <th>Time</th>
                    <th>User</th>
                    <th>Activity</th>
                    <th>Role</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>2025-04-23 11:32 AM</td>
                    <td>admin01</td>
                    <td>Updated photographer status</td>
                    <td>Admin</td>
                    <td><span class="badge bg-success">Success</span></td>
                  </tr>
                  <tr>
                    <td>2025-04-23 10:50 AM</td>
                    <td>photographer45</td>
                    <td>Uploaded portfolio images</td>
                    <td>Photographer</td>
                    <td><span class="badge bg-success">Completed</span></td>
                  </tr>
                  <tr>
                    <td>2025-04-23 09:15 AM</td>
                    <td>user202</td>
                    <td>Attempted failed payment</td>
                    <td>User</td>
                    <td><span class="badge bg-danger">Failed</span></td>
                  </tr>
                  <!-- Additional log entries -->
                </tbody>
              </table>
            </div>
          </div>
        </div>
  
      </div>
  
      <!-- Bootstrap Icons and Styles -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  
    </section>
  
  </main>
  @include('admin/includes.footer')
  
  
  
