@extends('layouts.painel')

@section('content')
    <!-- Page Content  -->
    <div id="content-page" class="content-page">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <div class="iq-card iq-card-block iq-card-stretch iq-card-height iq-border-box iq-border-box-1 text-primary">
                        <div class="iq-card-body">
                            <div class="d-flex align-items-center justify-content-between">
                                <h5>Worked Today</h5>
                                <h3>08:00 Hr</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="iq-card iq-card-block iq-card-stretch iq-card-height iq-border-box iq-border-box-2 text-warning">
                        <div class="iq-card-body">
                        <div class="d-flex align-items-center justify-content-between">
                            <h5>Worked This Week</h5>
                            <h3>40:00 Hr</h3>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="iq-card iq-card-block iq-card-stretch iq-card-height iq-border-box iq-border-box-3 text-danger">
                        <div class="iq-card-body">
                        <div class="d-flex align-items-center justify-content-between">
                            <h5>Worked Issue</h5>
                            <h3>1200</h3>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="iq-card iq-card-block iq-card-stretch iq-card-height iq-border-box iq-border-box-4 text-info">
                        <div class="iq-card-body">
                        <div class="d-flex align-items-center justify-content-between">
                            <h5>Worked Income</h5>
                            <h3>$54000</h3>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                        <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title">
                                <h4 class="card-title">User Overview</h4>
                            </div>
                        </div>
                        <div class="iq-card-body">
                        <div class="row">
                            <div class="col text-center">
                                <div class="mt-3">
                                    <h5 class="">3500</h5>
                                    <span class="">users</span>
                                </div>
                            </div>
                            <div class="col text-center">
                                <div class="mt-3">
                                    <h5 class="">4253</h5>
                                    <span class="">clicks</span>
                                </div>
                            </div>
                            <div class="col text-center">
                                <div class="mt-3">
                                    <h5 class="">$8569</h5>
                                    <span class="">revenue</span>
                                </div>
                            </div>
                        </div>
                        <div id="user-chart" style="height: 400px;"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                        <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                            <h4 class="card-title">Worker Overview</h4>
                        </div>
                        </div>
                        <div class="iq-card-body">
                        <div class="row">
                            <div class="col text-center">
                                <div class="mt-3">
                                    <h5 class="">3500</h5>
                                    <span class="">Worker</span>
                                </div>
                            </div>
                            <div class="col text-center">
                                <div class="mt-3">
                                    <h5 class="">4253</h5>
                                    <span class="">clicks</span>
                                </div>
                            </div>
                            <div class="col text-center">
                                <div class="mt-3">
                                    <h5 class="">$8569</h5>
                                    <span class="">revenue</span>
                                </div>
                            </div>
                        </div>
                        <div id="worker-chart" style="height: 400px;"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                        <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                            <h4 class="card-title">Review</h4>
                        </div>
                        </div>
                        <div class="iq-card-body">
                        <div class="iq-details">
                            <span class="title text-dark">5 Star</span>
                            <div class="percentage float-right text-primary">95 <span>%</span></div>
                            <div class="iq-progress-bar-linear d-inline-block w-100">
                                <div class="iq-progress-bar">
                                    <span class="bg-primary" data-percent="95"></span>
                                </div>
                            </div>
                        </div>
                        <div class="iq-details mt-4">
                            <span class="title text-dark">4 Star</span>
                            <div class="percentage float-right text-warning">75 <span>%</span></div>
                            <div class="iq-progress-bar-linear d-inline-block w-100">
                                <div class="iq-progress-bar">
                                    <span class="bg-warning" data-percent="75"></span>
                                </div>
                            </div>
                        </div>
                        <div class="iq-details mt-4">
                            <span class="title text-dark">3 Star</span>
                            <div class="percentage float-right text-success">55 <span>%</span></div>
                            <div class="iq-progress-bar-linear d-inline-block w-100">
                                <div class="iq-progress-bar">
                                    <span class="bg-success" data-percent="55"></span>
                                </div>
                            </div>
                        </div>
                        <div class="iq-details mt-4">
                            <span class="title text-dark">2 Star</span>
                            <div class="percentage float-right text-info">25 <span>%</span></div>
                            <div class="iq-progress-bar-linear d-inline-block w-100">
                                <div class="iq-progress-bar">
                                    <span class="bg-info" data-percent="25"></span>
                                </div>
                            </div>
                        </div>
                        <div class="iq-details mt-4">
                            <span class="title text-dark">1 Star</span>
                            <div class="percentage float-right text-danger">10 <span>%</span></div>
                            <div class="iq-progress-bar-linear d-inline-block w-100">
                                <div class="iq-progress-bar">
                                    <span class="bg-danger" data-percent="10"></span>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                        <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                            <h4 class="card-title">Over Time</h4>
                        </div>
                        <div class="iq-card-header-toolbar d-flex align-items-center">
                            <div class="dropdown">
                                <span class="dropdown-toggle text-primary" id="dropdownMenuButton5" data-toggle="dropdown">
                                <i class="ri-more-2-fill"></i>
                                </span>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton5">
                                    <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                                    <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                    <a class="dropdown-item" href="#"><i class="ri-pencil-fill mr-2"></i>Edit</a>
                                    <a class="dropdown-item" href="#"><i class="ri-printer-fill mr-2"></i>Print</a>
                                    <a class="dropdown-item" href="#"><i class="ri-file-download-fill mr-2"></i>Download</a>
                                </div>
                            </div>
                        </div>
                        </div>
                        <div class="iq-card-body">
                        <div id="menu-overtime-chart" style="height: 400px;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
