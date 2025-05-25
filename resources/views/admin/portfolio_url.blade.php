@include('admin/includes.header') 
    <main class="main">
        <div class="pagetitle">
        <h1>Portfolio URLs / Uploaded Samples</h1>
        </div>
        <section class="section dashboard">
        <div class="row">
            <div class="col-12">
            <div class="card">
                <div class="card-body">
                <h5 class="card-title">Photographer Portfolios</h5>
                <div class="row">
                    <div class="col-md-3" v-for="n in 8">
                    <div class="card">
                        <img src="assets/img/sample-portfolio.jpg" class="card-img-top" alt="Portfolio Sample">
                        <div class="card-body">
                        <h6 class="card-title">John Doe Studio</h6>
                        <a href="#" class="btn btn-outline-primary btn-sm">View Portfolio</a>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        </section>
    </main>
    @include('admin/includes.footer')
  



 