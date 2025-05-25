
@include('admin/includes.header') 
  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Daily/Monthly User Registrations</h1>
    </div>
    <section class="section dashboard">
      <canvas id="registrationChart" height="100"></canvas>
      <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
      <script>
        const regCtx = document.getElementById('registrationChart').getContext('2d');
        new Chart(regCtx, {
          type: 'bar',
          data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr'],
            datasets: [{
              label: 'User Registrations',
              data: [120, 150, 180, 220],
              backgroundColor: '#0d6efd'
            }]
          },
          options: { responsive: true }
        });
      </script>
    </section>
  </main>
  @include('admin/includes.footer')

  


  



