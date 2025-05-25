@include('admin/includes.header')

  <!-- revenue_reports.html -->
<main id="main" class="main">
    <div class="pagetitle">
      <h1>Revenue Reports</h1>
    </div>
    <section class="section dashboard">
      <table class="table table-striped">
        <thead>
          <tr><th>Month</th><th>Revenue</th></tr>
        </thead>
        <tbody>
          <tr><td>January</td><td>$8,000</td></tr>
          <tr><td>February</td><td>$10,500</td></tr>
          <tr><td>March</td><td>$12,000</td></tr>
        </tbody>
      </table>
      <canvas id="revenueChart" height="100"></canvas>
      <script>
        const revenueCtx = document.getElementById('revenueChart').getContext('2d');
        new Chart(revenueCtx, {
          type: 'line',
          data: {
            labels: ['Jan', 'Feb', 'Mar'],
            datasets: [{
              label: 'Revenue',
              data: [8000, 10500, 12000],
              backgroundColor: 'rgba(13,110,253,0.2)',
              borderColor: '#0d6efd',
              borderWidth: 2
            }]
          },
          options: { responsive: true }
        });
      </script>
    </section>
  </main>
  @include('admin/includes.footer')



 



  


  



 