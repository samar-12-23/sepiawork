@include('admin/includes.header') 
 <!-- top_purchasing_users.html -->
<main id="main" class="main">
    <div class="pagetitle">
      <h1>Top Purchasing Users</h1>
    </div>
    <section class="section dashboard">
      <table class="table table-bordered">
        <thead class="table-light">
          <tr><th>User</th><th>Email</th><th>Total Purchases</th></tr>
        </thead>
        <tbody>
          <tr><td>Rohit Verma</td><td>rohit@example.com</td><td>$1200</td></tr>
          <tr><td>Anjali Nair</td><td>anjali@example.com</td><td>$1100</td></tr>
        </tbody>
      </table>
    </section>
  </main>
  @include('admin/includes.footer')



  


