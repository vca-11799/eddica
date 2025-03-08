<!doctype html>
<html lang="en">
<!--begin::Head-->

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Add Body Compoction Data</title>
  <!--begin::Primary Meta Tags-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="title" content="Developerd By AsquareX Digital India" />
  <meta name="author" content="AsquareX Digital India" />
  <meta name="description" content="Developerd By AsquareX Digital India" />
  <meta name="keywords" content="Developerd By AsquareX Digital India" />
  <!--end::Primary Meta Tags-->
  @include('inc.head')
</head>
<!--end::Head-->
<!--begin::Body-->

<body class="layout-fixed sidebar-expand-lg sidebar-mini sidebar-collapse bg-body-tertiary">
  <!--begin::App Wrapper-->
  <div class="app-wrapper">
    <!--begin::Header-->
    @include('inc.topbar')
    <!--end::Header-->
    <!--begin::Sidebar-->
    @include('inc.sidebar')
    <!--end::Sidebar-->
    <!--begin::App Main-->
    <main class="app-main">
      <!--begin::App Content Header-->
      <div class="app-content-header">
        <!--begin::Container-->
        <div class="container-fluid">
          <!--begin::Row-->
          <div class="row">
            <div class="col-sm-6">
              <h3 class="mb-0">Add Body Campoction Data</h3>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-end">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add Body Campoction Data</li>
              </ol>
            </div>
          </div>
          <!--end::Row-->
        </div>
        <!--end::Container-->
      </div>
      <!--end::App Content Header-->
      <!--begin::App Content-->
      <div class="app-content">
        <!--begin::Container-->
        <div class="container-fluid">
          <!--begin::Row-->
          <div class="row g-4">
            <!--begin::Col-->
            <div class="col-md-12">
              <!--begin::Horizontal Form-->
              <div class="card card-warning card-outline mb-4">
                <!--begin::Header-->
                <div class="card-header">
                  <div class="card-title">Add Body Campoction Master</div>
                </div>
                <!--end::Header-->
                <!--begin::Form-->
                <form action="{{ URL::to('dashboardController') }}" method="POST">
                  @csrf
                  
                  <!--begin::Body-->
                  <div class="card-body">
                    <div class="row mb-3">
                      <label for="soda" class="col-sm-2 col-form-label">Enter Soda Value :</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="sodaId" name="sodaName" />
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label for="potash" class="col-sm-2 col-form-label">Enter Potash Value :</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="potashId" name="potashName" />
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label for="jalor" class="col-sm-2 col-form-label">Enter Jalor Value :</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="jalorId" name="jalorName" />
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label for="Sn1" class="col-sm-2 col-form-label">Enter Sn1 Value :</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="sn1Id" name="sn1Name" />
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label for="sn2" class="col-sm-2 col-form-label">Enter Sn2 Value :</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="sn2Id" name="sn2Name" />
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label for="mj2" class="col-sm-2 col-form-label">Enter Mj2 Value :</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="mz2Id" name="mj2Name" />
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label for="rd2" class="col-sm-2 col-form-label">Enter Rd2 Value :</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="rd2Id" name="rd2Name" />
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label for="t clay" class="col-sm-2 col-form-label">Enter T clay Value :</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="t clayId" name="jalorName" />
                      </div>
                    </div>
                  </div>
                  <!--end::Body-->

                  <!--begin::Footer-->
                  <div class="card-footer">
                    <button type="submit" class="btn btn-warning">Submit</button>
                    <button type="submit" class="btn float-end">Cancel</button>
                  </div>

                  <!--end::Footer-->
                </form>
                <!--end::Form-->
                
              <!--end::Horizontal Form-->
    </main>
    <!--end::App Main-->
    <!--begin::Footer-->
    @include('inc.footer')
    <!--end::Footer-->
  </div>
  <!--end::App Wrapper-->
  <!--begin::Script-->
  <!--begin::Third Party Plugin(OverlayScrollbars)-->
  @include('inc.footer-js')
  
  <!--end::OverlayScrollbars Configure-->
  <!--end::Script-->
</body>
<!--end::Body-->

</html>