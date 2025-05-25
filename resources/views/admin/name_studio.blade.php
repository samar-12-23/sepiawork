<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pages / F.A.Q - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Updated: Apr 20 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">SepiaAdmin</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-bell"></i>
            <span class="badge bg-primary badge-number">4</span>
          </a><!-- End Notification Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
            <li class="dropdown-header">
              You have 4 new notifications
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-exclamation-circle text-warning"></i>
              <div>
                <h4>Lorem Ipsum</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>30 min. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-x-circle text-danger"></i>
              <div>
                <h4>Atque rerum nesciunt</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>1 hr. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-check-circle text-success"></i>
              <div>
                <h4>Sit rerum fuga</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>2 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-info-circle text-primary"></i>
              <div>
                <h4>Dicta reprehenderit</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>4 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>
            <li class="dropdown-footer">
              <a href="#">Show all notifications</a>
            </li>

          </ul><!-- End Notification Dropdown Items -->

        </li><!-- End Notification Nav -->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-chat-left-text"></i>
            <span class="badge bg-success badge-number">3</span>
          </a><!-- End Messages Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
            <li class="dropdown-header">
              You have 3 new messages
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages-1.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Maria Hudson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>4 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages-2.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Anna Nelson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>6 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages-3.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>David Muldon</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>8 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="dropdown-footer">
              <a href="#">Show all messages</a>
            </li>

          </ul><!-- End Messages Dropdown Items -->

        </li><!-- End Messages Nav -->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">K. Anderson</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Kevin Anderson</h6>
              <span>Web Designer</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      
    <ul class="sidebar-nav" id="sidebar-nav">


      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#dashboard-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-grid"></i><span>Dashboard</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="dashboard-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
          <li>
            <a href="./total_users.html">
              <i class="bi bi-circle"></i><span>Total Users</span>
            </a>
          </li>
          <li>
            <a href="total_photographers.html">
              <i class="bi bi-circle"></i><span>Total Photographers</span>
            </a>
          </li>
          <li>
            <a href="./total_purchases.html">
              <i class="bi bi-circle"></i><span>Total Purchases</span>
            </a>
          </li>
          <li>
            <a href="./revenue_summary.html">
              <i class="bi bi-circle"></i><span>Revenue Summary</span>
            </a>
          </li>
          <li>
            <a href="./recent_activities.html">
              <i class="bi bi-circle"></i><span>Recent Activities</span>
            </a>
          </li>
          <li>
            <a href="./quick_access_button.html">
              <i class="bi bi-circle"></i><span>Quick Access Buttons</span>
            </a>
          </li>
        </ul>
      </li><!-- End Dashboard Nav -->


      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#user-management-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-person-lines-fill"></i><span>User Management</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="user-management-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
          <li>
            <a href="./user_id.html">
              <i class="bi bi-circle"></i><span>User ID</span>
            </a>
          </li>
          <li>
            <a href="./full_name.html">
              <i class="bi bi-circle"></i><span>Full Name</span>
            </a>
          </li>
          <li>
            <a href="./email.html">
              <i class="bi bi-circle"></i><span>Email</span>
            </a>
          </li>
          <li>
            <a href="./contact_number.html">
              <i class="bi bi-circle"></i><span>Contact Number</span>
            </a>
          </li>
          <li>
            <a href="./profile_picture.html">
              <i class="bi bi-circle"></i><span>Profile Picture</span>
            </a>
          </li>
          <li>
            <a href="./account_creation_date.html">
              <i class="bi bi-circle"></i><span>Account Creation Date</span>
            </a>
          </li>
          <li>
            <a class="nav-link collapsed" data-bs-toggle="collapse" href="#user-admin-submenu" aria-expanded="false">
              <i class="bi bi-circle"></i><span>Admin Features CRUD</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="user-admin-submenu" class="nav-content collapse">
                <li>
                    <a href="admin-manage.html"><i class="bi bi-dot"></i><span>Admin Manage</span></a>
                 </li>
              <li>
                <a href="admin-user-create.html"><i class="bi bi-dot"></i><span>Create User</span></a>
              </li>
              <li>
                <a href="admin-user-read.html"><i class="bi bi-dot"></i><span>View User Info</span></a>
              </li>
              <li>
                <a href="admin-user-update.html"><i class="bi bi-dot"></i><span>Edit User Details</span></a>
              </li>
              <li>
                <a href="admin-user-delete.html"><i class="bi bi-dot"></i><span>Delete User</span></a>
              </li>
            </ul>
          </li>
        </ul>
      </li>
      

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#photographers-management-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-camera-fill"></i><span>Photographers Management</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="photographers-management-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
          <li>
            <a href="./photographer_id.html">
              <i class="bi bi-circle"></i><span>Photographer ID</span>
            </a>
          </li>
          <li>
            <a href="./name_studio.html">
              <i class="bi bi-circle"></i><span>Full name / Studio name</span>
            </a>
          </li>
          <li>
            <a href="./email1.html">
              <i class="bi bi-circle"></i><span>Email</span>
            </a>
          </li>
          <li>
            <a href="./phone_number.html">
              <i class="bi bi-circle"></i><span>Phone Number</span>
            </a>
          </li>
          <li>
            <a href="./portfolio_url.html">
              <i class="bi bi-circle"></i><span>Porfolio URL / Uploaded Samples</span>
            </a>
          </li>
          <li>
            <a href="./location_areas.html">
              <i class="bi bi-circle"></i><span>Location / Service Areas</span>
            </a>
          </li>
          <li>
            <a href="./ratings_review.html">
              <i class="bi bi-circle"></i><span>Ratings / Reviews</span>
            </a>
          </li>
          <li>
            <a href="./joining_date.html">
              <i class="bi bi-circle"></i><span>Joining Date</span>
            </a>
          </li>
          <li>
            <a href="./purchase_history.html">
              <i class="bi bi-circle"></i><span>Purchase History</span>
            </a>
          </li>
          <li>
            <a href="./services_offered.html">
              <i class="bi bi-circle"></i><span>Services Offered</span>
            </a>
          </li>
          <li>
            <a class="nav-link collapsed" data-bs-toggle="collapse" href="#photographer-admin-submenu" aria-expanded="false">
              <i class="bi bi-circle"></i><span>Admin Features</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="photographer-admin-submenu" class="nav-content collapse">
              <li>
                <a href="admin-photographer-verification.html"><i class="bi bi-dot"></i><span>Verification Control</span></a>
              </li>
              <li>
                <a href="admin-photographer-approval.html"><i class="bi bi-dot"></i><span>Approve Profiles</span></a>
              </li>
              <li>
                <a href="admin-photographer-payments.html"><i class="bi bi-dot"></i><span>Manage Payouts</span></a>
              </li>
              <li>
                <a href="admin-photographer-block.html"><i class="bi bi-dot"></i><span>Block/Unblock Access</span></a>
              </li>
            </ul>
          </li>
        </ul>
      </li>
      




      <!-- start Purchase Management Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#purchase-management-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-bag-fill"></i><span>Purchase Management</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="purchase-management-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
          <li>
            <a href="./purchase_id.html">
              <i class="bi bi-circle"></i><span>Purchase ID</span>
            </a>
          </li>
          <li>
            <a href="./buyer_type.html">
              <i class="bi bi-circle"></i><span>Buyer Type(Simple User/ Photographer)</span>
            </a>
          </li>
          <li>
            <a href="./buyer_id.html">
              <i class="bi bi-circle"></i><span>Buyer ID</span>
            </a>
          </li>
          <li>
            <a href="./item_services_purchased.html">
              <i class="bi bi-circle"></i><span>Items / Services Purchased</span>
            </a>
          </li>
          <li>
            <a href="./purchase_date.html">
              <i class="bi bi-circle"></i><span>Purchase Date</span>
            </a>
          </li>
          <li>
            <a href="./amount.html">
              <i class="bi bi-circle"></i><span>Amount</span>
            </a>
          </li>
          <li>
            <a href="./status.html">
              <i class="bi bi-circle"></i><span>Status (Paid/ Pending / Refunded)</span>
            </a>
          </li>
          <li>
            <a href="./payment_method.html">
              <i class="bi bi-circle"></i><span>Payment Method</span>
            </a>
          </li>
          <li>
            <a class="nav-link collapsed" data-bs-toggle="collapse" href="#admin-features-submenu" aria-expanded="false">
              <i class="bi bi-circle"></i><span>Admin Features</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="admin-features-submenu" class="nav-content collapse">
              <li>
                <a href="admin-feature1.html"><i class="bi bi-dot"></i><span>View all Transactions</span></a>
              </li>
              <li>
                <a href="admin-feature2.html"><i class="bi bi-dot"></i><span>Update Status of Purchase</span></a>
              </li>
              <li>
                <a href="admin-feature3.html"><i class="bi bi-dot"></i><span>Export Purchase Reports</span></a>
              </li>
              <li>
                <a href="admin-feature4.html"><i class="bi bi-dot"></i><span>Delete Purchase Method</span></a>
              </li>
            </ul>
          </li>
        </ul>
      </li>
      <!-- End of Purchase Management Nav-->
      

      
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#reports-analytics-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-bar-chart-line-fill"></i><span>Reports & Analytics</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="reports-analytics-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
          <li>
            <a href="./daily_monthly_report.html">
              <i class="bi bi-circle"></i><span>Daily/ Monthly User Registrations</span>
            </a>
          </li>
          <li>
            <a href="./top_purchasing_users.html">
              <i class="bi bi-circle"></i><span>Top Purchasing Users</span>
            </a>
          </li>
          <li>
            <a href="./photographer_service_trends.html">
              <i class="bi bi-circle"></i><span>Photographer Service Trends</span>
            </a>
          </li>
          <li>
            <a href="./revenue_reports.html">
              <i class="bi bi-circle"></i><span>Revenue Reports</span>
            </a>
          </li>
          <li>
            <a href="./export_data.html">
              <i class="bi bi-circle"></i><span>Export Data (CSV,Excel)</span>
            </a>
          </li>
        </ul>
      </li><!-- End Reports & Analytics Nav -->


      

      <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="users-profile.html">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link " href="pages-faq.html">
          <i class="bi bi-question-circle"></i>
          <span>F.A.Q</span>
        </a>
      </li><!-- End F.A.Q Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-contact.html">
          <i class="bi bi-envelope"></i>
          <span>Contact</span>
        </a>
      </li><!-- End Contact Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-register.html">
          <i class="bi bi-card-list"></i>
          <span>Register</span>
        </a>
      </li><!-- End Register Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-login.html">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Login</span>
        </a>
      </li><!-- End Login Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-error-404.html">
          <i class="bi bi-dash-circle"></i>
          <span>Error 404</span>
        </a>
      </li><!-- End Error 404 Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-blank.html">
          <i class="bi bi-file-earmark"></i>
          <span>Blank</span>
        </a>
      </li><!-- End Blank Page Nav -->

    </ul>

  </aside><!-- End Sidebar-->
       <!-- name_studio.html -->
        <main class="main container py-4">
            <h1 class="mb-4">Full Name / Studio Name</h1>
            <input type="text" class="form-control mb-3" placeholder="Search by name or studio...">
            <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between">
                <span>Vibrant Clicks Studio</span>
                <span><button class="btn btn-outline-primary btn-sm">View Profile</button></span>
            </li>
            </ul>
        </main>


    <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>