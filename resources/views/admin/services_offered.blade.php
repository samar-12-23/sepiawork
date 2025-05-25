@include('admin/includes.header') 
<!-- services_offered.html -->
<main class="main">
    <div class="pagetitle">
      <h1>Services Offered</h1>
    </div>
    <section class="section dashboard">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Select Services</h5>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="wedding">
            <label class="form-check-label" for="wedding">Wedding Photography</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="portrait">
            <label class="form-check-label" for="portrait">Portrait</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="fashion">
            <label class="form-check-label" for="fashion">Fashion</label>
          </div>
        </div>
      </div>
    </section>
  </main>

  @include('admin/includes.footer')

  



 