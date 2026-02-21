<?php include 'include/head.html'; ?>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->

    <?php include 'include/navbar.html'; ?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->

      <?php include 'include/sidebar.html'; ?>

      <!-- partial -->
      <div class="main-panel">
     <div class="content-wrapper">

  <!-- Page Title -->
  <div class="row mb-4">
    <div class="col-md-12">
      <h3 class="font-weight-bold">Admin Dashboard</h3>
      <p class="text-muted">Monitor and manage complete event system</p>
    </div>
  </div>

  <!-- Summary Cards -->
  <div class="row">

    <div class="col-md-3 grid-margin stretch-card">
      <div class="card bg-primary text-white shadow-sm">
        <div class="card-body text-center">
          <h6>Total Students</h6>
          <h2 class="mb-0">250</h2>
        </div>
      </div>
    </div>

    <div class="col-md-3 grid-margin stretch-card">
      <div class="card bg-info text-white shadow-sm">
        <div class="card-body text-center">
          <h6>Total Organizers</h6>
          <h2 class="mb-0">18</h2>
        </div>
      </div>
    </div>

    <div class="col-md-3 grid-margin stretch-card">
      <div class="card bg-success text-white shadow-sm">
        <div class="card-body text-center">
          <h6>Total Events</h6>
          <h2 class="mb-0">32</h2>
        </div>
      </div>
    </div>

    <div class="col-md-3 grid-margin stretch-card">
      <div class="card bg-danger text-white shadow-sm">
        <div class="card-body text-center">
          <h6>Total Revenue</h6>
          <h2 class="mb-0">₹ 1,20,000</h2>
        </div>
      </div>
    </div>

  </div>


 <!-- Quick Actions -->
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="card">
                <div class="card-header">
                  <h5>Quick Actions</h5>
                </div>
                <div class="card-body d-flex justify-content-around">

                  <a href="manage-students.php" class="btn btn-primary">
                    <i class="icon-user"></i> Manage Students
                  </a>

                  <a href="manage-organizers.php" class="btn btn-info">
                    <i class="icon-people"></i> Manage Organizers
                  </a>

                  <a href="manage-events.php" class="btn btn-success">
                    <i class="icon-calendar"></i> Manage Events
                  </a>

                  <a href="view-registrations.php" class="btn btn-warning">
                    <i class="icon-list"></i> View Registrations
                  </a>

                </div>
              </div>
            </div>
          </div>

  <!-- Tables Section -->
  <div class="row">

    <!-- Student List -->
    <div class="col-lg-6 grid-margin stretch-card">
      <div class="card shadow-sm">
        <div class="card-body">
          <h4 class="card-title mb-3">Student List</h4>

          <div class="table-responsive">
            <table class="table table-hover table-bordered">
              <thead class="bg-light">
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Department</th>
                  <th>Year</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Rahul Sharma</td>
                  <td>MCA</td>
                  <td>2nd Year</td>
                  <td><span class="badge badge-success">Active</span></td>
                  <td>
                    <a href="#" class="btn btn-sm btn-info">View</a>
                    <a href="#" class="btn btn-sm btn-danger">Delete</a>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>

        </div>
      </div>
    </div>

    <!-- Event List -->
    <div class="col-lg-6 grid-margin stretch-card">
      <div class="card shadow-sm">
        <div class="card-body">
          <h4 class="card-title mb-3">Event List</h4>

          <div class="table-responsive">
            <table class="table table-hover table-bordered">
              <thead class="bg-light">
                <tr>
                  <th>ID</th>
                  <th>Event</th>
                  <th>Date</th>
                  <th>Fee</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Tech Fest 2026</td>
                  <td>15 Mar 2026</td>
                  <td>₹500</td>
                  <td><span class="badge badge-warning">Pending</span></td>
                  <td>
                    <a href="#" class="btn btn-sm btn-success">Approve</a>
                    <a href="#" class="btn btn-sm btn-danger">Delete</a>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>

        </div>
      </div>
    </div>

  </div>

</div>
        <!-- content-wrapper ends -->
        <?php include 'include/foot.html'; ?>