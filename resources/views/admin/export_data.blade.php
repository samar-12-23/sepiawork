@include('admin/includes.header')  

  <!-- export_data.html -->
<main id="main" class="main">
    <div class="pagetitle">
      <h1>Export Data</h1>
    </div>
    <section class="section dashboard">
      <form>
        <div class="mb-3">
          <label for="dataType" class="form-label">Select Data Type</label>
          <select class="form-select" id="dataType">
            <option>Users</option>
            <option>Photographers</option>
            <option>Purchases</option>
            <option>Revenue</option>
          </select>
        </div>
        <div class="mb-3">
          <label for="fileFormat" class="form-label">Choose Format</label>
          <select class="form-select" id="fileFormat">
            <option value="csv">CSV</option>
            <option value="xlsx">Excel</option>
          </select>
        </div>
        <button class="btn btn-primary" type="submit">Export</button>
      </form>
    </section>
  </main>
  @include('admin/includes.footer')





 



  


  


