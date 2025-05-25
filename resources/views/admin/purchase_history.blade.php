@include('admin/includes.header') 
<!-- purchase_history.html -->
            <main class="main">
                <div class="pagetitle">
                <h1>Purchase History</h1>
                </div>
                <section class="section dashboard">
                <div class="card">
                    <div class="card-body">
                    <h5 class="card-title">Transactions</h5>
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Customer</th>
                            <th>Service</th>
                            <th>Amount</th>
                            <th>Date</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Ritika Joshi</td>
                            <td>Wedding Shoot</td>
                            <td>₹12,000</td>
                            <td>2024-10-01</td>
                        </tr>
                        </tbody>
                    </table>
                    </div>
                </div>
                </section>
            </main>
            @include('admin/includes.footer')
  



 