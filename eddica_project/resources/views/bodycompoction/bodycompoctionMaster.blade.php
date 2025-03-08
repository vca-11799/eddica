<!doctype html>
<html lang="en">
<!--begin::Head-->

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Body Compoction Master</title>
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
                <form>
                  <!--begin::Body-->
                  <div class="card-body">
                  <table id="myTable" class="display">
                  <thead>
                    <tr>
                      <th>Column 1</th>
                      <th>Column 2</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Row 1 Data 1</td>
                      <td>Row 1 Data 2</td>
                    </tr>
                    <tr>
                      <td>Row 2 Data 1</td>
                      <td>Row 2 Data 2</td>
                    </tr>
                  </tbody>
                </table>
                  </div>
                  <!--end::Body-->
                </form>
                <!--end::Form-->
                
              </div>
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