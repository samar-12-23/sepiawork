@include('admin/includes.header')
<!-- ratings_review.html -->
<main class="main">
    <div class="pagetitle">
      <h1>Ratings & Reviews</h1>
    </div>
    <section class="section dashboard">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Photographer Reviews</h5>
          <table class="table table-striped">
            <thead>
              <tr>
                <th>Name</th>
                <th>Rating</th>
                <th>Review</th>
                <th>Date</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Studio Capture</td>
                <td>
                  <span class="text-warning">★★★★☆</span>
                </td>
                <td>Excellent outdoor coverage!</td>
                <td>2024-11-12</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </section>
  </main>
  @include('admin/includes.footer')

  


