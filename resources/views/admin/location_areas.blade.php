@include('admin/includes.header')  

<main class="main">
    <div class="pagetitle">
      <h1>Location / Service Areas</h1>
    </div>
    <section class="section dashboard">
      <div class="row">
        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Service Area Selection</h5>
              <select class="form-select">
                <option selected>Mumbai</option>
                <option>Delhi</option>
                <option>Bangalore</option>
                <option>Kolkata</option>
              </select>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Map Preview</h5>
              <img src="assets/img/map-placeholder.png" alt="Map" class="img-fluid">
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  @include('admin/includes.footer')

  


