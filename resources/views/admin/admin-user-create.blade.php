<!-- admin-user-create.html -->
@include('admin/includes.header') 
        <main id="main" class="main">
            <div class="pagetitle">
            <h1>Create User</h1>
            </div>
            <section class="section">
            <div class="card">
                <div class="card-body">
                <h5 class="card-title">New User Form</h5>
                <form>
                    <div class="mb-3">
                    <label for="name" class="form-label">Full Name</label>
                    <input type="text" class="form-control" id="name">
                    </div>
                    <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email">
                    </div>
                    <div class="mb-3">
                    <label for="contact" class="form-label">Contact Number</label>
                    <input type="text" class="form-control" id="contact">
                    </div>
                    <button type="submit" class="btn btn-success">Create</button>
                </form>
                </div>
            </div>
            </section>
        </main>
@include('admin/includes.footer')

  


  

  
  
