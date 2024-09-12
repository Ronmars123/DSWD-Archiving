<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 m-0 font-weight-bold text-primary">Dashboard</h1>
    </div>
    <!-- Content Row -->
    <div class="row">
        <!-- Total Documents Card -->
        <div class="col-xl-12 col-md-12 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col text-center">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Documents</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $totalDocument }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-file fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Charts Row -->
    <div class="row">
        <!-- Document Types Pie Chart -->
        <div class="col-xl-6 col-lg-6 mb-4">
            <div class="card shadow mb-4">
                <!-- Card Header -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Document Types</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="chart-pie pt-4 pb-2">
                        <canvas id="userPieChart"></canvas>
                    </div>
                    <div class="mt-4 text-center small">
                        <span class="mr-2">
                            <i class="fas fa-circle text-primary"></i> Permanent: {{ $totalDoctype }}
                        </span>
                        <span class="mr-2">
                            <i class="fas fa-circle text-success"></i> Temporary: {{ $totalDoctype1 }}
                        </span>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- File Types Bar Chart -->
        <div class="col-xl-6 col-lg-6 mb-4">
            <div class="card shadow mb-4">
                <!-- Card Header -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">File Types</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="chart-bar pt-4 pb-2">
                        <canvas id="recordBarChart"></canvas>
                    </div>
                    <div class="mt-4 text-center small">
                        <span class="mr-2">
                            <i class="fas fa-square text-primary"></i> Administrative: {{ $totalAdministrative }}
                        </span>
                        <span class="mr-2">
                            <i class="fas fa-square text-success"></i> Financial: {{ $totalFinancial }}
                        </span>
                        <span class="mr-2">
                            <i class="fas fa-square text-info"></i> Legal: {{ $totalLegalRecords }}
                        </span>
                        <span class="mr-2">
                            <i class="fas fa-square text-warning"></i> Personnel: {{ $totalPersonnelRecords }}
                        </span>
                        <span class="mr-2">
                            <i class="fas fa-square text-danger"></i> Social Services: {{ $totalSocialServices }}
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
