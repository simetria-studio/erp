@extends('layouts.painel')

@section('content')
<div class="app-main__outer">
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="pe-7s-car icon-gradient bg-mean-fruit"></i>
                    </div>
                    <div>Analytics Dashboard
                        <div class="page-title-subheading">This is an example dashboard created using build-in elements and components.</div>
                    </div>
                </div>
                <div class="page-title-actions">
                    <button type="button" data-toggle="tooltip" title="" data-placement="bottom" class="btn-shadow mr-3 btn btn-dark" data-original-title="Example Tooltip">
                        <i class="fa fa-star"></i>
                    </button>
                    <div class="d-inline-block dropdown">
                        <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-shadow dropdown-toggle btn btn-info">
                            <span class="btn-icon-wrapper pr-2 opacity-7">
                                <i class="fa fa-business-time fa-w-20"></i>
                            </span>
                            Buttons
                        </button>
                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link">
                                        <i class="nav-link-icon lnr-inbox"></i>
                                        <span> Inbox</span>
                                        <div class="ml-auto badge badge-pill badge-secondary">86</div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link">
                                        <i class="nav-link-icon lnr-book"></i>
                                        <span> Book</span>
                                        <div class="ml-auto badge badge-pill badge-danger">5</div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link">
                                        <i class="nav-link-icon lnr-picture"></i>
                                        <span> Picture</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a disabled="" class="nav-link disabled">
                                        <i class="nav-link-icon lnr-file-empty"></i>
                                        <span> File Disabled</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>    </div>
        </div>        <ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
            <li class="nav-item">
                <a role="tab" class="nav-link active" href="index.html">
                    <span>Variation 1</span>
                </a>
            </li>
            <li class="nav-item">
                <a role="tab" class="nav-link" href="analytics-variation.html">
                    <span>Variation 2</span>
                </a>
            </li>
        </ul>
        <div class="tabs-animation">
            <div class="mb-3 card">
                <div class="card-header-tab card-header">
                    <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                        <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                        Portfolio Performance
                    </div>
                    <div class="btn-actions-pane-right text-capitalize">
                        <button class="btn-wide btn-outline-2x mr-md-2 btn btn-outline-focus btn-sm">View All</button>
                    </div>
                </div>
                <div class="no-gutters row">
                    <div class="col-sm-6 col-md-4 col-xl-4">
                        <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                            <div class="icon-wrapper rounded-circle">
                                <div class="icon-wrapper-bg opacity-10 bg-warning"></div>
                                <i class="lnr-laptop-phone text-dark opacity-8"></i>
                            </div>
                            <div class="widget-chart-content">
                                <div class="widget-subheading">Cash Deposits</div>
                                <div class="widget-numbers">1,7M</div>
                                <div class="widget-description opacity-8 text-focus">
                                    <div class="d-inline text-danger pr-1">
                                        <i class="fa fa-angle-down"></i>
                                        <span class="pl-1">54.1%</span>
                                    </div>
                                    less earnings
                                </div>
                            </div>
                        </div>
                        <div class="divider m-0 d-md-none d-sm-block"></div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-xl-4">
                        <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                            <div class="icon-wrapper rounded-circle">
                                <div class="icon-wrapper-bg opacity-9 bg-danger"></div>
                                <i class="lnr-graduation-hat text-white"></i>
                            </div>
                            <div class="widget-chart-content">
                                <div class="widget-subheading">Invested Dividents</div>
                                <div class="widget-numbers"><span>9M</span></div>
                                <div class="widget-description opacity-8 text-focus">
                                    Grow Rate:
                                    <span class="text-info pl-1">
                                        <i class="fa fa-angle-down"></i>
                                        <span class="pl-1">14.1%</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="divider m-0 d-md-none d-sm-block"></div>
                    </div>
                    <div class="col-sm-12 col-md-4 col-xl-4">
                        <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                            <div class="icon-wrapper rounded-circle">
                                <div class="icon-wrapper-bg opacity-9 bg-success"></div>
                                <i class="lnr-apartment text-white"></i>
                            </div>
                            <div class="widget-chart-content">
                                <div class="widget-subheading">Capital Gains</div>
                                <div class="widget-numbers text-success"><span>$563</span></div>
                                <div class="widget-description text-focus">
                                    Increased by
                                    <span class="text-warning pl-1">
                                        <i class="fa fa-angle-up"></i>
                                        <span class="pl-1">7.35%</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center d-block p-3 card-footer">
                    <button class="btn-pill btn-shadow btn-wide fsize-1 btn btn-primary btn-lg">
                        <span class="mr-2 opacity-7">
                            <i class="icon icon-anim-pulse ion-ios-analytics-outline"></i>
                        </span>
                        <span class="mr-1">View Complete Report</span>
                    </button>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-lg-6">
                    <div class="mb-3 card">
                        <div class="card-header-tab card-header">
                            <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                                <i class="header-icon lnr-cloud-download icon-gradient bg-happy-itmeo"></i>
                                Technical Support
                            </div>
                            <div class="btn-actions-pane-right text-capitalize actions-icon-btn">
                                <div class="btn-group dropdown">
                                    <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-icon btn-icon-only btn btn-link">
                                        <i class="pe-7s-menu btn-icon-wrapper"></i>
                                    </button>
                                    <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-right rm-pointers dropdown-menu-shadow dropdown-menu-hover-link dropdown-menu">
                                        <h6 tabindex="-1" class="dropdown-header">Header</h6>
                                        <button type="button" tabindex="0" class="dropdown-item">
                                            <i class="dropdown-icon lnr-inbox"> </i><span>Menus</span>
                                        </button>
                                        <button type="button" tabindex="0" class="dropdown-item">
                                            <i class="dropdown-icon lnr-file-empty"> </i><span>Settings</span>
                                        </button>
                                        <button type="button" tabindex="0" class="dropdown-item">
                                            <i class="dropdown-icon lnr-book"> </i><span>Actions</span>
                                        </button>
                                        <div tabindex="-1" class="dropdown-divider"></div>
                                        <div class="p-3 text-right">
                                            <button class="mr-2 btn-shadow btn-sm btn btn-link">View Details</button>
                                            <button class="mr-2 btn-shadow btn-sm btn btn-primary">Action</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="p-0 card-body">
                            <div class="p-1 slick-slider-sm mx-auto">
                                <div class="slick-slider slick-initialized slick-dotted"><button class="slick-prev slick-arrow" aria-label="Previous" type="button" style="">Previous</button><div class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 3374px; transform: translate3d(-482px, 0px, 0px);"><div class="slick-slide slick-cloned" data-slick-index="-1" id="" aria-hidden="true" tabindex="-1" style="width: 482px;"><div><div style="width: 100%; display: inline-block;">
                                        <div class="widget-chart widget-chart2 text-left p-0">
                                            <div class="widget-chat-wrapper-outer">
                                                <div class="widget-chart-content widget-chart-content-lg pb-0">
                                                    <div class="widget-chart-flex">
                                                        <div class="widget-title opacity-5 text-muted text-uppercase"> Helpdesk Tickets</div>
                                                    </div>
                                                    <div class="widget-numbers">
                                                        <div class="widget-chart-flex">
                                                            <div>
                                                                <span class="text-warning">34</span>
                                                            </div>
                                                            <div class="widget-title ml-2 font-size-lg font-weight-normal text-dark">
                                                                <span class="opacity-5 text-muted pl-2 pr-1">5%</span>
                                                                increase
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="widget-chart-wrapper he-auto opacity-10 m-0">
                                                    <div id="" style="min-height: 152px;"><div id="" class="apexcharts-canvas apexchartsej3xyva4i" style="width: 482px; height: 152px;"><svg id="" width="482" height="152" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id=""><clipPath id=""><rect id="" width="487" height="157" x="-2.5" y="-2.5" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><clipPath id=""><rect id="" width="496" height="166" x="-7" y="-7" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><linearGradient id="" x1="0" y1="0" x2="0" y2="1"><stop id="" stop-opacity="0.7" stop-color="rgba(247,185,36,0.7)" offset="0"></stop><stop id="" stop-opacity="0.9" stop-color="rgba(255,255,255,0.9)" offset="0.9"></stop><stop id="" stop-opacity="0.9" stop-color="rgba(255,255,255,0.9)" offset="1"></stop></linearGradient></defs><rect id="" width="1" height="152" x="0" y="0" rx="0" ry="0" fill="#b1b9c4" opacity="1" stroke-width="0" stroke-dasharray="0" class="apexcharts-xcrosshairs" filter="none" fill-opacity="0.9"></rect><g id="" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="" class="apexcharts-grid"><line id="" x1="0" y1="152" x2="482" y2="152" stroke="transparent" stroke-dasharray="0"></line><line id="" x1="0" y1="1" x2="0" y2="152" stroke="transparent" stroke-dasharray="0"></line></g><g id="" class="apexcharts-area-series apexcharts-plot-series"><g id="" class="apexcharts-series series-1" data:longestSeries="true" rel="1" data:realIndex="0"><path id="" d="M4.585872614234137 124.339808203168C8.14186019922017 124.339808203168 11.189849557779628 107.7436931250688 14.745837142765662 107.7436931250688C18.301824727751693 107.7436931250688 36.72897694354549 130.6621377567296 40.284964528531525 130.6621377567296C43.84095211351755 130.6621377567296 56.81231027687882 109.3242755134592 60.36829786186485 109.3242755134592C63.92428544685089 109.3242755134592 76.89564361021215 103.7922371540928 80.45163119519817 103.7922371540928C84.00761878018422 103.7922371540928 96.97897694354548 100.631072377312 100.5349645285315 100.631072377312C104.09095211351755 100.631072377312 117.0623102768788 127.5009729799488 120.61829786186485 127.5009729799488C124.17428544685087 127.5009729799488 137.14564361021215 136.9844673102912 140.7016311951982 136.9844673102912C144.25761878018423 136.9844673102912 157.2289769435455 121.9689346205824 160.78496452853153 121.9689346205824C164.34095211351757 121.9689346205824 177.31231027687883 119.5980610379968 180.86829786186487 119.5980610379968C184.42428544685092 119.5980610379968 197.39564361021218 111.6951490960448 200.95163119519822 111.6951490960448C204.50761878018426 111.6951490960448 217.47897694354552 110.1145667076544 221.03496452853156 110.1145667076544C224.5909521135176 110.1145667076544 237.56231027687886 114.85631387282561 241.1182978618649 114.85631387282561C244.67428544685094 114.85631387282561 257.6456436102122 103.0019459598976 261.2016311951982 103.0019459598976C264.75761878018426 103.0019459598976 277.72897694354555 78.50291893984641 281.2849645285316 78.50291893984641C284.8409521135176 78.50291893984641 297.81231027687886 130.6621377567296 301.3682978618649 130.6621377567296C304.9242854468509 130.6621377567296 317.8956436102122 116.436896261216 321.4516311951982 116.436896261216C325.0076187801842 116.436896261216 337.9789769435455 109.3242755134592 341.53496452853153 109.3242755134592C345.0909521135175 109.3242755134592 358.0623102768788 122.75922581477761 361.61829786186485 122.75922581477761C365.17428544685083 122.75922581477761 378.1456436102121 124.339808203168 381.70163119519816 124.339808203168C385.25761878018415 124.339808203168 398.22897694354543 115.6466050670208 401.7849645285315 115.6466050670208C405.34095211351746 115.6466050670208 418.31231027687875 121.1786434263872 421.8682978618648 121.1786434263872C425.4242854468508 121.1786434263872 438.39564361021206 118.0174786496064 441.9516311951981 118.0174786496064C445.5076187801841 118.0174786496064 458.4789769435454 133.0330113393152 462.0349645285314 133.0330113393152C462.0349645285314 133.0330113393152 471.9583333333332 133.0330113393152 471.9583333333332 133.0330113393152 " fill="none" fill-opacity="1" stroke="#f7b924" stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskej3xyva4i)" pathTo="M 10.041666666666666 97.32374100719424C 17.070833333333333 97.32374100719424 23.09583333333333 64.51798561151078 30.125 64.51798561151078C 37.15416666666666 64.51798561151078 43.17916666666667 109.82117163412127 50.20833333333333 109.82117163412127C 57.23749999999999 109.82117163412127 63.262499999999996 67.64234326824254 70.29166666666666 67.64234326824254C 77.32083333333333 67.64234326824254 83.34583333333332 56.70709146968139 90.37499999999999 56.70709146968139C 97.40416666666665 56.70709146968139 103.42916666666665 50.45837615621788 110.45833333333331 50.45837615621788C 117.48749999999998 50.45837615621788 123.51249999999999 103.57245632065775 130.54166666666666 103.57245632065775C 137.57083333333333 103.57245632065775 143.59583333333333 122.3186022610483 150.625 122.3186022610483C 157.65416666666667 122.3186022610483 163.67916666666667 92.6372045220966 170.70833333333334 92.6372045220966C 177.7375 92.6372045220966 183.76250000000002 87.95066803699896 190.79166666666669 87.95066803699896C 197.82083333333335 87.95066803699896 203.84583333333336 72.32887975334017 210.87500000000003 72.32887975334017C 217.9041666666667 72.32887975334017 223.9291666666667 69.20452209660843 230.95833333333337 69.20452209660843C 237.98750000000004 69.20452209660843 244.01250000000005 78.5775950668037 251.0416666666667 78.5775950668037C 258.0708333333334 78.5775950668037 264.09583333333336 55.144912641315514 271.12500000000006 55.144912641315514C 278.1541666666667 55.144912641315514 284.17916666666673 6.717368961973278 291.20833333333337 6.717368961973278C 298.2375 6.717368961973278 304.26250000000005 109.82117163412127 311.2916666666667 109.82117163412127C 318.3208333333333 109.82117163412127 324.34583333333336 81.70195272353546 331.375 81.70195272353546C 338.40416666666664 81.70195272353546 344.4291666666667 67.64234326824254 351.4583333333333 67.64234326824254C 358.48749999999995 67.64234326824254 364.5125 94.19938335046248 371.54166666666663 94.19938335046248C 378.57083333333327 94.19938335046248 384.5958333333333 97.32374100719424 391.62499999999994 97.32374100719424C 398.6541666666666 97.32374100719424 404.6791666666666 80.13977389516957 411.70833333333326 80.13977389516957C 418.7374999999999 80.13977389516957 424.76249999999993 91.07502569373072 431.7916666666666 91.07502569373072C 438.8208333333332 91.07502569373072 444.84583333333325 84.82631038026722 451.8749999999999 84.82631038026722C 458.9041666666665 84.82631038026722 464.92916666666656 114.5077081192189 471.9583333333332 114.5077081192189" pathFrom="M -1 152L -1 152L 30.125 152L 50.20833333333333 152L 70.29166666666666 152L 90.37499999999999 152L 110.45833333333331 152L 130.54166666666666 152L 150.625 152L 170.70833333333334 152L 190.79166666666669 152L 210.87500000000003 152L 230.95833333333337 152L 251.0416666666667 152L 271.12500000000006 152L 291.20833333333337 152L 311.2916666666667 152L 331.375 152L 351.4583333333333 152L 371.54166666666663 152L 391.62499999999994 152L 411.70833333333326 152L 431.7916666666666 152L 451.8749999999999 152L 471.9583333333332 152"></path><path id="" d="M4.564193411156426 152L4.564193411156426 124.44715954404963C8.106379933654875 124.44715954404963 26.58281347750155 107.9154552704794 30.125 107.9154552704794C33.66718652249845 107.9154552704794 46.66614681083488 130.74495164826686 50.20833333333333 130.74495164826686C53.750519855831776 130.74495164826686 66.74948014416822 109.4899032965337 70.29166666666666 109.4899032965337C73.83385318916511 109.4899032965337 86.83281347750153 103.97933520534363 90.37499999999999 103.97933520534363C93.91718652249844 103.97933520534363 106.91614681083486 100.83043915323502 110.45833333333331 100.83043915323502C114.00051985583177 100.83043915323502 126.9994801441682 127.59605559615824 130.54166666666666 127.59605559615824C134.0838531891651 127.59605559615824 147.08281347750156 137.04274375248409 150.625 137.04274375248409C154.16718652249844 137.04274375248409 167.1661468108349 122.08548750496816 170.70833333333334 122.08548750496816C174.25051985583178 122.08548750496816 187.24948014416825 119.7238154658867 190.79166666666669 119.7238154658867C194.33385318916513 119.7238154658867 207.3328134775016 111.85157533561517 210.87500000000003 111.85157533561517C214.41718652249847 111.85157533561517 227.41614681083493 110.27712730956085 230.95833333333337 110.27712730956085C234.5005198558318 110.27712730956085 247.49948014416827 115.00047138772378 251.0416666666667 115.00047138772378C254.58385318916515 115.00047138772378 267.5828134775016 103.19211119231647 271.12500000000006 103.19211119231647C274.66718652249847 103.19211119231647 287.66614681083496 78.78816678847471 291.20833333333337 78.78816678847471C294.7505198558318 78.78816678847471 307.7494801441683 130.74495164826686 311.2916666666667 130.74495164826686C314.8338531891651 130.74495164826686 327.8328134775016 116.57491941377809 331.375 116.57491941377809C334.9171865224984 116.57491941377809 347.9161468108349 109.4899032965337 351.4583333333333 109.4899032965337C355.0005198558317 109.4899032965337 367.9994801441682 122.87271151799531 371.54166666666663 122.87271151799531C375.08385318916504 122.87271151799531 388.08281347750153 124.44715954404963 391.62499999999994 124.44715954404963C395.16718652249835 124.44715954404963 408.16614681083485 115.78769540075093 411.70833333333326 115.78769540075093C415.25051985583167 115.78769540075093 428.24948014416816 121.29826349194101 431.7916666666666 121.29826349194101C435.333853189165 121.29826349194101 448.3328134775015 118.14936743983239 451.8749999999999 118.14936743983239C455.4171865224983 118.14936743983239 468.4161468108348 133.1066236873483 471.9583333333332 133.1066236873483C471.9583333333332 133.1066236873483 471.9583333333332 133.1066236873483 471.9583333333332 152M237.3364506039116 133.1066236873483C237.3364506039116 133.1066236873483 237.3364506039116 133.1066236873483 237.3364506039116 133.1066236873483 " fill="url(#SvgjsLinearGradient1050)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskej3xyva4i)" pathTo="M 10.041666666666666 152L 10.041666666666666 97.32374100719424C 17.070833333333333 97.32374100719424 23.09583333333333 64.51798561151078 30.125 64.51798561151078C 37.15416666666666 64.51798561151078 43.17916666666667 109.82117163412127 50.20833333333333 109.82117163412127C 57.23749999999999 109.82117163412127 63.262499999999996 67.64234326824254 70.29166666666666 67.64234326824254C 77.32083333333333 67.64234326824254 83.34583333333332 56.70709146968139 90.37499999999999 56.70709146968139C 97.40416666666665 56.70709146968139 103.42916666666665 50.45837615621788 110.45833333333331 50.45837615621788C 117.48749999999998 50.45837615621788 123.51249999999999 103.57245632065775 130.54166666666666 103.57245632065775C 137.57083333333333 103.57245632065775 143.59583333333333 122.3186022610483 150.625 122.3186022610483C 157.65416666666667 122.3186022610483 163.67916666666667 92.6372045220966 170.70833333333334 92.6372045220966C 177.7375 92.6372045220966 183.76250000000002 87.95066803699896 190.79166666666669 87.95066803699896C 197.82083333333335 87.95066803699896 203.84583333333336 72.32887975334017 210.87500000000003 72.32887975334017C 217.9041666666667 72.32887975334017 223.9291666666667 69.20452209660843 230.95833333333337 69.20452209660843C 237.98750000000004 69.20452209660843 244.01250000000005 78.5775950668037 251.0416666666667 78.5775950668037C 258.0708333333334 78.5775950668037 264.09583333333336 55.144912641315514 271.12500000000006 55.144912641315514C 278.1541666666667 55.144912641315514 284.17916666666673 6.717368961973278 291.20833333333337 6.717368961973278C 298.2375 6.717368961973278 304.26250000000005 109.82117163412127 311.2916666666667 109.82117163412127C 318.3208333333333 109.82117163412127 324.34583333333336 81.70195272353546 331.375 81.70195272353546C 338.40416666666664 81.70195272353546 344.4291666666667 67.64234326824254 351.4583333333333 67.64234326824254C 358.48749999999995 67.64234326824254 364.5125 94.19938335046248 371.54166666666663 94.19938335046248C 378.57083333333327 94.19938335046248 384.5958333333333 97.32374100719424 391.62499999999994 97.32374100719424C 398.6541666666666 97.32374100719424 404.6791666666666 80.13977389516957 411.70833333333326 80.13977389516957C 418.7374999999999 80.13977389516957 424.76249999999993 91.07502569373072 431.7916666666666 91.07502569373072C 438.8208333333332 91.07502569373072 444.84583333333325 84.82631038026722 451.8749999999999 84.82631038026722C 458.9041666666665 84.82631038026722 464.92916666666656 114.5077081192189 471.9583333333332 114.5077081192189C 471.9583333333332 114.5077081192189 471.9583333333332 114.5077081192189 471.9583333333332 152M 471.9583333333332 114.5077081192189z" pathFrom="M -1 152L -1 152L 30.125 152L 50.20833333333333 152L 70.29166666666666 152L 90.37499999999999 152L 110.45833333333331 152L 130.54166666666666 152L 150.625 152L 170.70833333333334 152L 190.79166666666669 152L 210.87500000000003 152L 230.95833333333337 152L 251.0416666666667 152L 271.12500000000006 152L 291.20833333333337 152L 311.2916666666667 152L 331.375 152L 351.4583333333333 152L 371.54166666666663 152L 391.62499999999994 152L 411.70833333333326 152L 431.7916666666666 152L 451.8749999999999 152L 471.9583333333332 152"></path><g id="" class="apexcharts-series-markers-wrap hidden"><g class="apexcharts-series-markers"><circle id="" r="0" cx="0" cy="0" class="apexcharts-marker wydd0k7mq no-pointer-events" stroke="#ffffff" fill="#f7b924" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle></g></g><g id="" class="apexcharts-datalabels"></g></g></g><line id="" x1="0" y1="0" x2="482" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="" x1="0" y1="0" x2="482" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="" class="apexcharts-yaxis-annotations hidden"></g><g id="" class="apexcharts-xaxis-annotations hidden"></g><g id="" class="apexcharts-point-annotations hidden"></g></g><g id="" class="apexcharts-yaxis" rel="0" transform="translate(-35, 0)"><g id="" class="apexcharts-yaxis-texts-g"></g></g></svg><div class="apexcharts-legend"></div><div class="apexcharts-tooltip light"><div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker" style="background-color: rgb(247, 185, 36);"></span><div class="apexcharts-tooltip-text"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div></div></div>
                                                <div class="resize-triggers"><div class="expand-trigger"><div style="width: 483px; height: 153px;"></div></div><div class="contract-trigger"></div></div></div>
                                            </div>
                                        </div>
                                    </div></div></div><div class="slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" role="tabpanel" id="slick-slide00" style="width: 482px;"><div><div style="width: 100%; display: inline-block;">
                                        <div class="widget-chart widget-chart2 text-left p-0">
                                            <div class="widget-chat-wrapper-outer">
                                                <div class="widget-chart-content widget-chart-content-lg pb-0">
                                                    <div class="widget-chart-flex">
                                                        <div class="widget-title opacity-5 text-muted text-uppercase"> New Accounts since 2018</div>
                                                    </div>
                                                    <div class="widget-numbers">
                                                        <div class="widget-chart-flex">
                                                            <div>
                                                                <span class="opacity-10 text-success pr-2">
                                                                    <i class="fa fa-angle-up"></i>
                                                                </span>
                                                                <span>78</span>
                                                                <small class="opacity-5 pl-1">%</small>
                                                            </div>
                                                            <div class="widget-title ml-2 font-size-lg font-weight-normal text-muted">
                                                                <span class="text-success pl-2">+14</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="widget-chart-wrapper he-auto opacity-10 m-0">
                                                    <div id="dashboard-sparkline-3" style="min-height: 152px;"><div id="apexchartsqr5pt8s7" class="apexcharts-canvas apexchartsqr5pt8s7" style="width: 482px; height: 152px;"><svg id="SvgjsSvg1068" width="482" height="152" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1070" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs1069"><clipPath id="gridRectMaskqr5pt8s7"><rect id="SvgjsRect1073" width="487" height="157" x="-2.5" y="-2.5" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><clipPath id="gridRectMarkerMaskqr5pt8s7"><rect id="SvgjsRect1074" width="496" height="166" x="-7" y="-7" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><linearGradient id="SvgjsLinearGradient1081" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop1082" stop-opacity="0.7" stop-color="rgba(58,196,125,0.7)" offset="0"></stop><stop id="SvgjsStop1083" stop-opacity="0.9" stop-color="rgba(255,255,255,0.9)" offset="0.9"></stop><stop id="SvgjsStop1084" stop-opacity="0.9" stop-color="rgba(255,255,255,0.9)" offset="1"></stop></linearGradient></defs><rect id="SvgjsRect1072" width="1" height="152" x="0" y="0" rx="0" ry="0" fill="#b1b9c4" opacity="1" stroke-width="0" stroke-dasharray="0" class="apexcharts-xcrosshairs" filter="none" fill-opacity="0.9"></rect><g id="SvgjsG1086" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1087" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG1090" class="apexcharts-grid"><line id="SvgjsLine1092" x1="0" y1="152" x2="482" y2="152" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine1091" x1="0" y1="1" x2="0" y2="152" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG1076" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG1077" class="apexcharts-series series-1" data:longestSeries="true" rel="1" data:realIndex="0"><path id="apexcharts-area-0" d="M10.041666666666666 114.5077081192189C17.070833333333333 114.5077081192189 23.09583333333333 97.32374100719424 30.125 97.32374100719424C37.15416666666666 97.32374100719424 43.17916666666667 55.144912641315514 50.20833333333333 55.144912641315514C57.23749999999999 55.144912641315514 63.262499999999996 56.70709146968139 70.29166666666666 56.70709146968139C77.32083333333333 56.70709146968139 83.34583333333332 67.64234326824254 90.37499999999999 67.64234326824254C97.40416666666665 67.64234326824254 103.42916666666665 122.3186022610483 110.45833333333331 122.3186022610483C117.48749999999998 122.3186022610483 123.51249999999999 64.51798561151078 130.54166666666666 64.51798561151078C137.57083333333333 64.51798561151078 143.59583333333333 94.19938335046248 150.625 94.19938335046248C157.65416666666667 94.19938335046248 163.67916666666667 84.82631038026722 170.70833333333334 84.82631038026722C177.7375 84.82631038026722 183.76250000000002 87.95066803699896 190.79166666666669 87.95066803699896C197.82083333333335 87.95066803699896 203.84583333333336 67.64234326824254 210.87500000000003 67.64234326824254C217.9041666666667 67.64234326824254 223.9291666666667 97.32374100719424 230.95833333333337 97.32374100719424C237.98750000000004 97.32374100719424 244.01250000000005 81.70195272353546 251.0416666666667 81.70195272353546C258.0708333333334 81.70195272353546 264.09583333333336 6.717368961973278 271.12500000000006 6.717368961973278C278.1541666666667 6.717368961973278 284.17916666666673 50.45837615621788 291.20833333333337 50.45837615621788C298.2375 50.45837615621788 304.26250000000005 103.57245632065775 311.2916666666667 103.57245632065775C318.3208333333333 103.57245632065775 324.34583333333336 109.82117163412127 331.375 109.82117163412127C338.40416666666664 109.82117163412127 344.4291666666667 92.6372045220966 351.4583333333333 92.6372045220966C358.48749999999995 92.6372045220966 364.5125 91.07502569373072 371.54166666666663 91.07502569373072C378.57083333333327 91.07502569373072 384.5958333333333 69.20452209660843 391.62499999999994 69.20452209660843C398.6541666666666 69.20452209660843 404.6791666666666 80.13977389516957 411.70833333333326 80.13977389516957C418.7374999999999 80.13977389516957 424.76249999999993 72.32887975334017 431.7916666666666 72.32887975334017C438.8208333333332 72.32887975334017 444.84583333333325 78.5775950668037 451.8749999999999 78.5775950668037C458.9041666666665 78.5775950668037 464.92916666666656 109.82117163412127 471.9583333333332 109.82117163412127C471.9583333333332 109.82117163412127 471.9583333333332 109.82117163412127 471.9583333333332 109.82117163412127 " fill="none" fill-opacity="1" stroke="#3ac47d" stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskqr5pt8s7)" pathTo="M 10.041666666666666 114.5077081192189C 17.070833333333333 114.5077081192189 23.09583333333333 97.32374100719424 30.125 97.32374100719424C 37.15416666666666 97.32374100719424 43.17916666666667 55.144912641315514 50.20833333333333 55.144912641315514C 57.23749999999999 55.144912641315514 63.262499999999996 56.70709146968139 70.29166666666666 56.70709146968139C 77.32083333333333 56.70709146968139 83.34583333333332 67.64234326824254 90.37499999999999 67.64234326824254C 97.40416666666665 67.64234326824254 103.42916666666665 122.3186022610483 110.45833333333331 122.3186022610483C 117.48749999999998 122.3186022610483 123.51249999999999 64.51798561151078 130.54166666666666 64.51798561151078C 137.57083333333333 64.51798561151078 143.59583333333333 94.19938335046248 150.625 94.19938335046248C 157.65416666666667 94.19938335046248 163.67916666666667 84.82631038026722 170.70833333333334 84.82631038026722C 177.7375 84.82631038026722 183.76250000000002 87.95066803699896 190.79166666666669 87.95066803699896C 197.82083333333335 87.95066803699896 203.84583333333336 67.64234326824254 210.87500000000003 67.64234326824254C 217.9041666666667 67.64234326824254 223.9291666666667 97.32374100719424 230.95833333333337 97.32374100719424C 237.98750000000004 97.32374100719424 244.01250000000005 81.70195272353546 251.0416666666667 81.70195272353546C 258.0708333333334 81.70195272353546 264.09583333333336 6.717368961973278 271.12500000000006 6.717368961973278C 278.1541666666667 6.717368961973278 284.17916666666673 50.45837615621788 291.20833333333337 50.45837615621788C 298.2375 50.45837615621788 304.26250000000005 103.57245632065775 311.2916666666667 103.57245632065775C 318.3208333333333 103.57245632065775 324.34583333333336 109.82117163412127 331.375 109.82117163412127C 338.40416666666664 109.82117163412127 344.4291666666667 92.6372045220966 351.4583333333333 92.6372045220966C 358.48749999999995 92.6372045220966 364.5125 91.07502569373072 371.54166666666663 91.07502569373072C 378.57083333333327 91.07502569373072 384.5958333333333 69.20452209660843 391.62499999999994 69.20452209660843C 398.6541666666666 69.20452209660843 404.6791666666666 80.13977389516957 411.70833333333326 80.13977389516957C 418.7374999999999 80.13977389516957 424.76249999999993 72.32887975334017 431.7916666666666 72.32887975334017C 438.8208333333332 72.32887975334017 444.84583333333325 78.5775950668037 451.8749999999999 78.5775950668037C 458.9041666666665 78.5775950668037 464.92916666666656 109.82117163412127 471.9583333333332 109.82117163412127" pathFrom="M -1 152L -1 152L 30.125 152L 50.20833333333333 152L 70.29166666666666 152L 90.37499999999999 152L 110.45833333333331 152L 130.54166666666666 152L 150.625 152L 170.70833333333334 152L 190.79166666666669 152L 210.87500000000003 152L 230.95833333333337 152L 251.0416666666667 152L 271.12500000000006 152L 291.20833333333337 152L 311.2916666666667 152L 331.375 152L 351.4583333333333 152L 371.54166666666663 152L 391.62499999999994 152L 411.70833333333326 152L 431.7916666666666 152L 451.8749999999999 152L 471.9583333333332 152"></path><path id="apexcharts-area-0" d="M10.041666666666666 152L10.041666666666666 114.5077081192189C17.070833333333333 114.5077081192189 23.09583333333333 97.32374100719424 30.125 97.32374100719424C37.15416666666666 97.32374100719424 43.17916666666667 55.144912641315514 50.20833333333333 55.144912641315514C57.23749999999999 55.144912641315514 63.262499999999996 56.70709146968139 70.29166666666666 56.70709146968139C77.32083333333333 56.70709146968139 83.34583333333332 67.64234326824254 90.37499999999999 67.64234326824254C97.40416666666665 67.64234326824254 103.42916666666665 122.3186022610483 110.45833333333331 122.3186022610483C117.48749999999998 122.3186022610483 123.51249999999999 64.51798561151078 130.54166666666666 64.51798561151078C137.57083333333333 64.51798561151078 143.59583333333333 94.19938335046248 150.625 94.19938335046248C157.65416666666667 94.19938335046248 163.67916666666667 84.82631038026722 170.70833333333334 84.82631038026722C177.7375 84.82631038026722 183.76250000000002 87.95066803699896 190.79166666666669 87.95066803699896C197.82083333333335 87.95066803699896 203.84583333333336 67.64234326824254 210.87500000000003 67.64234326824254C217.9041666666667 67.64234326824254 223.9291666666667 97.32374100719424 230.95833333333337 97.32374100719424C237.98750000000004 97.32374100719424 244.01250000000005 81.70195272353546 251.0416666666667 81.70195272353546C258.0708333333334 81.70195272353546 264.09583333333336 6.717368961973278 271.12500000000006 6.717368961973278C278.1541666666667 6.717368961973278 284.17916666666673 50.45837615621788 291.20833333333337 50.45837615621788C298.2375 50.45837615621788 304.26250000000005 103.57245632065775 311.2916666666667 103.57245632065775C318.3208333333333 103.57245632065775 324.34583333333336 109.82117163412127 331.375 109.82117163412127C338.40416666666664 109.82117163412127 344.4291666666667 92.6372045220966 351.4583333333333 92.6372045220966C358.48749999999995 92.6372045220966 364.5125 91.07502569373072 371.54166666666663 91.07502569373072C378.57083333333327 91.07502569373072 384.5958333333333 69.20452209660843 391.62499999999994 69.20452209660843C398.6541666666666 69.20452209660843 404.6791666666666 80.13977389516957 411.70833333333326 80.13977389516957C418.7374999999999 80.13977389516957 424.76249999999993 72.32887975334017 431.7916666666666 72.32887975334017C438.8208333333332 72.32887975334017 444.84583333333325 78.5775950668037 451.8749999999999 78.5775950668037C458.9041666666665 78.5775950668037 464.92916666666656 109.82117163412127 471.9583333333332 109.82117163412127C471.9583333333332 109.82117163412127 471.9583333333332 109.82117163412127 471.9583333333332 152M471.9583333333332 109.82117163412127C471.9583333333332 109.82117163412127 471.9583333333332 109.82117163412127 471.9583333333332 109.82117163412127 " fill="url(#SvgjsLinearGradient1081)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskqr5pt8s7)" pathTo="M 10.041666666666666 152L 10.041666666666666 114.5077081192189C 17.070833333333333 114.5077081192189 23.09583333333333 97.32374100719424 30.125 97.32374100719424C 37.15416666666666 97.32374100719424 43.17916666666667 55.144912641315514 50.20833333333333 55.144912641315514C 57.23749999999999 55.144912641315514 63.262499999999996 56.70709146968139 70.29166666666666 56.70709146968139C 77.32083333333333 56.70709146968139 83.34583333333332 67.64234326824254 90.37499999999999 67.64234326824254C 97.40416666666665 67.64234326824254 103.42916666666665 122.3186022610483 110.45833333333331 122.3186022610483C 117.48749999999998 122.3186022610483 123.51249999999999 64.51798561151078 130.54166666666666 64.51798561151078C 137.57083333333333 64.51798561151078 143.59583333333333 94.19938335046248 150.625 94.19938335046248C 157.65416666666667 94.19938335046248 163.67916666666667 84.82631038026722 170.70833333333334 84.82631038026722C 177.7375 84.82631038026722 183.76250000000002 87.95066803699896 190.79166666666669 87.95066803699896C 197.82083333333335 87.95066803699896 203.84583333333336 67.64234326824254 210.87500000000003 67.64234326824254C 217.9041666666667 67.64234326824254 223.9291666666667 97.32374100719424 230.95833333333337 97.32374100719424C 237.98750000000004 97.32374100719424 244.01250000000005 81.70195272353546 251.0416666666667 81.70195272353546C 258.0708333333334 81.70195272353546 264.09583333333336 6.717368961973278 271.12500000000006 6.717368961973278C 278.1541666666667 6.717368961973278 284.17916666666673 50.45837615621788 291.20833333333337 50.45837615621788C 298.2375 50.45837615621788 304.26250000000005 103.57245632065775 311.2916666666667 103.57245632065775C 318.3208333333333 103.57245632065775 324.34583333333336 109.82117163412127 331.375 109.82117163412127C 338.40416666666664 109.82117163412127 344.4291666666667 92.6372045220966 351.4583333333333 92.6372045220966C 358.48749999999995 92.6372045220966 364.5125 91.07502569373072 371.54166666666663 91.07502569373072C 378.57083333333327 91.07502569373072 384.5958333333333 69.20452209660843 391.62499999999994 69.20452209660843C 398.6541666666666 69.20452209660843 404.6791666666666 80.13977389516957 411.70833333333326 80.13977389516957C 418.7374999999999 80.13977389516957 424.76249999999993 72.32887975334017 431.7916666666666 72.32887975334017C 438.8208333333332 72.32887975334017 444.84583333333325 78.5775950668037 451.8749999999999 78.5775950668037C 458.9041666666665 78.5775950668037 464.92916666666656 109.82117163412127 471.9583333333332 109.82117163412127C 471.9583333333332 109.82117163412127 471.9583333333332 109.82117163412127 471.9583333333332 152M 471.9583333333332 109.82117163412127z" pathFrom="M -1 152L -1 152L 30.125 152L 50.20833333333333 152L 70.29166666666666 152L 90.37499999999999 152L 110.45833333333331 152L 130.54166666666666 152L 150.625 152L 170.70833333333334 152L 190.79166666666669 152L 210.87500000000003 152L 230.95833333333337 152L 251.0416666666667 152L 271.12500000000006 152L 291.20833333333337 152L 311.2916666666667 152L 331.375 152L 351.4583333333333 152L 371.54166666666663 152L 391.62499999999994 152L 411.70833333333326 152L 431.7916666666666 152L 451.8749999999999 152L 471.9583333333332 152"></path><g id="SvgjsG1078" class="apexcharts-series-markers-wrap"><g class="apexcharts-series-markers"><circle id="SvgjsCircle1098" r="0" cx="0" cy="0" class="apexcharts-marker winhfhgyt no-pointer-events" stroke="#ffffff" fill="#3ac47d" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle></g></g><g id="SvgjsG1079" class="apexcharts-datalabels"></g></g></g><line id="SvgjsLine1093" x1="0" y1="0" x2="482" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1094" x1="0" y1="0" x2="482" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1095" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1096" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1097" class="apexcharts-point-annotations"></g></g><g id="SvgjsG1088" class="apexcharts-yaxis" rel="0" transform="translate(-35, 0)"><g id="SvgjsG1089" class="apexcharts-yaxis-texts-g"></g></g></svg><div class="apexcharts-legend"></div><div class="apexcharts-tooltip light"><div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker" style="background-color: rgb(58, 196, 125);"></span><div class="apexcharts-tooltip-text"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div></div></div>
                                                <div class="resize-triggers"><div class="expand-trigger"><div style="width: 483px; height: 153px;"></div></div><div class="contract-trigger"></div></div></div>
                                            </div>
                                        </div>
                                    </div></div></div><div class="slick-slide" data-slick-index="1" aria-hidden="true" tabindex="-1" role="tabpanel" id="slick-slide01" style="width: 482px;"><div><div style="width: 100%; display: inline-block;">
                                        <div class="widget-chart widget-chart2 text-left p-0">
                                            <div class="widget-chat-wrapper-outer">
                                                <div class="widget-chart-content widget-chart-content-lg pb-0">
                                                    <div class="widget-chart-flex">
                                                        <div class="widget-title opacity-5 text-muted text-uppercase"> Last Year Total Sales</div>
                                                    </div>
                                                    <div class="widget-numbers">
                                                        <div class="widget-chart-flex">
                                                            <div>
                                                                <small class="opacity-3 pr-1">$</small>
                                                                <span>629</span>
                                                                <span class="text-primary pl-3">
                                                                    <i class="fa fa-angle-down"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="widget-chart-wrapper he-auto opacity-10 m-0">
                                                    <div id="dashboard-sparkline-1" style="min-height: 152px;"><div id="apexcharts9ziof55b" class="apexcharts-canvas apexcharts9ziof55b" style="width: 482px; height: 152px;"><svg id="SvgjsSvg1006" width="482" height="152" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1008" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs1007"><clipPath id="gridRectMask9ziof55b"><rect id="SvgjsRect1011" width="487" height="157" x="-2.5" y="-2.5" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><clipPath id="gridRectMarkerMask9ziof55b"><rect id="SvgjsRect1012" width="496" height="166" x="-7" y="-7" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><linearGradient id="SvgjsLinearGradient1019" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop1020" stop-opacity="0.7" stop-color="rgba(63,106,216,0.7)" offset="0"></stop><stop id="SvgjsStop1021" stop-opacity="0.9" stop-color="rgba(255,255,255,0.9)" offset="0.9"></stop><stop id="SvgjsStop1022" stop-opacity="0.9" stop-color="rgba(255,255,255,0.9)" offset="1"></stop></linearGradient></defs><rect id="SvgjsRect1010" width="1" height="152" x="0" y="0" rx="0" ry="0" fill="#b1b9c4" opacity="1" stroke-width="0" stroke-dasharray="0" class="apexcharts-xcrosshairs" filter="none" fill-opacity="0.9"></rect><g id="SvgjsG1024" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1025" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG1028" class="apexcharts-grid"><line id="SvgjsLine1030" x1="0" y1="152" x2="482" y2="152" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine1029" x1="0" y1="1" x2="0" y2="152" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG1014" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG1015" class="apexcharts-series series-1" data:longestSeries="true" rel="1" data:realIndex="0"><path id="apexcharts-area-0" d="M10.041666666666666 109.82117163412127C17.070833333333333 109.82117163412127 23.09583333333333 114.5077081192189 30.125 114.5077081192189C37.15416666666666 114.5077081192189 43.17916666666667 94.19938335046248 50.20833333333333 94.19938335046248C57.23749999999999 94.19938335046248 63.262499999999996 103.57245632065775 70.29166666666666 103.57245632065775C77.32083333333333 103.57245632065775 83.34583333333332 67.64234326824254 90.37499999999999 67.64234326824254C97.40416666666665 67.64234326824254 103.42916666666665 97.32374100719424 110.45833333333331 97.32374100719424C117.48749999999998 97.32374100719424 123.51249999999999 81.70195272353546 130.54166666666666 81.70195272353546C137.57083333333333 81.70195272353546 143.59583333333333 87.95066803699896 150.625 87.95066803699896C157.65416666666667 87.95066803699896 163.67916666666667 109.82117163412127 170.70833333333334 109.82117163412127C177.7375 109.82117163412127 183.76250000000002 92.6372045220966 190.79166666666669 92.6372045220966C197.82083333333335 92.6372045220966 203.84583333333336 69.20452209660843 210.87500000000003 69.20452209660843C217.9041666666667 69.20452209660843 223.9291666666667 55.144912641315514 230.95833333333337 55.144912641315514C237.98750000000004 55.144912641315514 244.01250000000005 84.82631038026722 251.0416666666667 84.82631038026722C258.0708333333334 84.82631038026722 264.09583333333336 72.32887975334017 271.12500000000006 72.32887975334017C278.1541666666667 72.32887975334017 284.17916666666673 122.3186022610483 291.20833333333337 122.3186022610483C298.2375 122.3186022610483 304.26250000000005 56.70709146968139 311.2916666666667 56.70709146968139C318.3208333333333 56.70709146968139 324.34583333333336 97.32374100719424 331.375 97.32374100719424C338.40416666666664 97.32374100719424 344.4291666666667 67.64234326824254 351.4583333333333 67.64234326824254C358.48749999999995 67.64234326824254 364.5125 78.5775950668037 371.54166666666663 78.5775950668037C378.57083333333327 78.5775950668037 384.5958333333333 50.45837615621788 391.62499999999994 50.45837615621788C398.6541666666666 50.45837615621788 404.6791666666666 80.13977389516957 411.70833333333326 80.13977389516957C418.7374999999999 80.13977389516957 424.76249999999993 6.717368961973278 431.7916666666666 6.717368961973278C438.8208333333332 6.717368961973278 444.84583333333325 91.07502569373072 451.8749999999999 91.07502569373072C458.9041666666665 91.07502569373072 464.92916666666656 64.51798561151078 471.9583333333332 64.51798561151078C471.9583333333332 64.51798561151078 471.9583333333332 64.51798561151078 471.9583333333332 64.51798561151078 " fill="none" fill-opacity="1" stroke="#3f6ad8" stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMask9ziof55b)" pathTo="M 10.041666666666666 109.82117163412127C 17.070833333333333 109.82117163412127 23.09583333333333 114.5077081192189 30.125 114.5077081192189C 37.15416666666666 114.5077081192189 43.17916666666667 94.19938335046248 50.20833333333333 94.19938335046248C 57.23749999999999 94.19938335046248 63.262499999999996 103.57245632065775 70.29166666666666 103.57245632065775C 77.32083333333333 103.57245632065775 83.34583333333332 67.64234326824254 90.37499999999999 67.64234326824254C 97.40416666666665 67.64234326824254 103.42916666666665 97.32374100719424 110.45833333333331 97.32374100719424C 117.48749999999998 97.32374100719424 123.51249999999999 81.70195272353546 130.54166666666666 81.70195272353546C 137.57083333333333 81.70195272353546 143.59583333333333 87.95066803699896 150.625 87.95066803699896C 157.65416666666667 87.95066803699896 163.67916666666667 109.82117163412127 170.70833333333334 109.82117163412127C 177.7375 109.82117163412127 183.76250000000002 92.6372045220966 190.79166666666669 92.6372045220966C 197.82083333333335 92.6372045220966 203.84583333333336 69.20452209660843 210.87500000000003 69.20452209660843C 217.9041666666667 69.20452209660843 223.9291666666667 55.144912641315514 230.95833333333337 55.144912641315514C 237.98750000000004 55.144912641315514 244.01250000000005 84.82631038026722 251.0416666666667 84.82631038026722C 258.0708333333334 84.82631038026722 264.09583333333336 72.32887975334017 271.12500000000006 72.32887975334017C 278.1541666666667 72.32887975334017 284.17916666666673 122.3186022610483 291.20833333333337 122.3186022610483C 298.2375 122.3186022610483 304.26250000000005 56.70709146968139 311.2916666666667 56.70709146968139C 318.3208333333333 56.70709146968139 324.34583333333336 97.32374100719424 331.375 97.32374100719424C 338.40416666666664 97.32374100719424 344.4291666666667 67.64234326824254 351.4583333333333 67.64234326824254C 358.48749999999995 67.64234326824254 364.5125 78.5775950668037 371.54166666666663 78.5775950668037C 378.57083333333327 78.5775950668037 384.5958333333333 50.45837615621788 391.62499999999994 50.45837615621788C 398.6541666666666 50.45837615621788 404.6791666666666 80.13977389516957 411.70833333333326 80.13977389516957C 418.7374999999999 80.13977389516957 424.76249999999993 6.717368961973278 431.7916666666666 6.717368961973278C 438.8208333333332 6.717368961973278 444.84583333333325 91.07502569373072 451.8749999999999 91.07502569373072C 458.9041666666665 91.07502569373072 464.92916666666656 64.51798561151078 471.9583333333332 64.51798561151078" pathFrom="M -1 152L -1 152L 30.125 152L 50.20833333333333 152L 70.29166666666666 152L 90.37499999999999 152L 110.45833333333331 152L 130.54166666666666 152L 150.625 152L 170.70833333333334 152L 190.79166666666669 152L 210.87500000000003 152L 230.95833333333337 152L 251.0416666666667 152L 271.12500000000006 152L 291.20833333333337 152L 311.2916666666667 152L 331.375 152L 351.4583333333333 152L 371.54166666666663 152L 391.62499999999994 152L 411.70833333333326 152L 431.7916666666666 152L 451.8749999999999 152L 471.9583333333332 152"></path><path id="apexcharts-area-0" d="M10.041666666666666 152L10.041666666666666 109.82117163412127C17.070833333333333 109.82117163412127 23.09583333333333 114.5077081192189 30.125 114.5077081192189C37.15416666666666 114.5077081192189 43.17916666666667 94.19938335046248 50.20833333333333 94.19938335046248C57.23749999999999 94.19938335046248 63.262499999999996 103.57245632065775 70.29166666666666 103.57245632065775C77.32083333333333 103.57245632065775 83.34583333333332 67.64234326824254 90.37499999999999 67.64234326824254C97.40416666666665 67.64234326824254 103.42916666666665 97.32374100719424 110.45833333333331 97.32374100719424C117.48749999999998 97.32374100719424 123.51249999999999 81.70195272353546 130.54166666666666 81.70195272353546C137.57083333333333 81.70195272353546 143.59583333333333 87.95066803699896 150.625 87.95066803699896C157.65416666666667 87.95066803699896 163.67916666666667 109.82117163412127 170.70833333333334 109.82117163412127C177.7375 109.82117163412127 183.76250000000002 92.6372045220966 190.79166666666669 92.6372045220966C197.82083333333335 92.6372045220966 203.84583333333336 69.20452209660843 210.87500000000003 69.20452209660843C217.9041666666667 69.20452209660843 223.9291666666667 55.144912641315514 230.95833333333337 55.144912641315514C237.98750000000004 55.144912641315514 244.01250000000005 84.82631038026722 251.0416666666667 84.82631038026722C258.0708333333334 84.82631038026722 264.09583333333336 72.32887975334017 271.12500000000006 72.32887975334017C278.1541666666667 72.32887975334017 284.17916666666673 122.3186022610483 291.20833333333337 122.3186022610483C298.2375 122.3186022610483 304.26250000000005 56.70709146968139 311.2916666666667 56.70709146968139C318.3208333333333 56.70709146968139 324.34583333333336 97.32374100719424 331.375 97.32374100719424C338.40416666666664 97.32374100719424 344.4291666666667 67.64234326824254 351.4583333333333 67.64234326824254C358.48749999999995 67.64234326824254 364.5125 78.5775950668037 371.54166666666663 78.5775950668037C378.57083333333327 78.5775950668037 384.5958333333333 50.45837615621788 391.62499999999994 50.45837615621788C398.6541666666666 50.45837615621788 404.6791666666666 80.13977389516957 411.70833333333326 80.13977389516957C418.7374999999999 80.13977389516957 424.76249999999993 6.717368961973278 431.7916666666666 6.717368961973278C438.8208333333332 6.717368961973278 444.84583333333325 91.07502569373072 451.8749999999999 91.07502569373072C458.9041666666665 91.07502569373072 464.92916666666656 64.51798561151078 471.9583333333332 64.51798561151078C471.9583333333332 64.51798561151078 471.9583333333332 64.51798561151078 471.9583333333332 152M471.9583333333332 64.51798561151078C471.9583333333332 64.51798561151078 471.9583333333332 64.51798561151078 471.9583333333332 64.51798561151078 " fill="url(#SvgjsLinearGradient1019)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMask9ziof55b)" pathTo="M 10.041666666666666 152L 10.041666666666666 109.82117163412127C 17.070833333333333 109.82117163412127 23.09583333333333 114.5077081192189 30.125 114.5077081192189C 37.15416666666666 114.5077081192189 43.17916666666667 94.19938335046248 50.20833333333333 94.19938335046248C 57.23749999999999 94.19938335046248 63.262499999999996 103.57245632065775 70.29166666666666 103.57245632065775C 77.32083333333333 103.57245632065775 83.34583333333332 67.64234326824254 90.37499999999999 67.64234326824254C 97.40416666666665 67.64234326824254 103.42916666666665 97.32374100719424 110.45833333333331 97.32374100719424C 117.48749999999998 97.32374100719424 123.51249999999999 81.70195272353546 130.54166666666666 81.70195272353546C 137.57083333333333 81.70195272353546 143.59583333333333 87.95066803699896 150.625 87.95066803699896C 157.65416666666667 87.95066803699896 163.67916666666667 109.82117163412127 170.70833333333334 109.82117163412127C 177.7375 109.82117163412127 183.76250000000002 92.6372045220966 190.79166666666669 92.6372045220966C 197.82083333333335 92.6372045220966 203.84583333333336 69.20452209660843 210.87500000000003 69.20452209660843C 217.9041666666667 69.20452209660843 223.9291666666667 55.144912641315514 230.95833333333337 55.144912641315514C 237.98750000000004 55.144912641315514 244.01250000000005 84.82631038026722 251.0416666666667 84.82631038026722C 258.0708333333334 84.82631038026722 264.09583333333336 72.32887975334017 271.12500000000006 72.32887975334017C 278.1541666666667 72.32887975334017 284.17916666666673 122.3186022610483 291.20833333333337 122.3186022610483C 298.2375 122.3186022610483 304.26250000000005 56.70709146968139 311.2916666666667 56.70709146968139C 318.3208333333333 56.70709146968139 324.34583333333336 97.32374100719424 331.375 97.32374100719424C 338.40416666666664 97.32374100719424 344.4291666666667 67.64234326824254 351.4583333333333 67.64234326824254C 358.48749999999995 67.64234326824254 364.5125 78.5775950668037 371.54166666666663 78.5775950668037C 378.57083333333327 78.5775950668037 384.5958333333333 50.45837615621788 391.62499999999994 50.45837615621788C 398.6541666666666 50.45837615621788 404.6791666666666 80.13977389516957 411.70833333333326 80.13977389516957C 418.7374999999999 80.13977389516957 424.76249999999993 6.717368961973278 431.7916666666666 6.717368961973278C 438.8208333333332 6.717368961973278 444.84583333333325 91.07502569373072 451.8749999999999 91.07502569373072C 458.9041666666665 91.07502569373072 464.92916666666656 64.51798561151078 471.9583333333332 64.51798561151078C 471.9583333333332 64.51798561151078 471.9583333333332 64.51798561151078 471.9583333333332 152M 471.9583333333332 64.51798561151078z" pathFrom="M -1 152L -1 152L 30.125 152L 50.20833333333333 152L 70.29166666666666 152L 90.37499999999999 152L 110.45833333333331 152L 130.54166666666666 152L 150.625 152L 170.70833333333334 152L 190.79166666666669 152L 210.87500000000003 152L 230.95833333333337 152L 251.0416666666667 152L 271.12500000000006 152L 291.20833333333337 152L 311.2916666666667 152L 331.375 152L 351.4583333333333 152L 371.54166666666663 152L 391.62499999999994 152L 411.70833333333326 152L 431.7916666666666 152L 451.8749999999999 152L 471.9583333333332 152"></path><g id="SvgjsG1016" class="apexcharts-series-markers-wrap"><g class="apexcharts-series-markers"><circle id="SvgjsCircle1036" r="0" cx="0" cy="0" class="apexcharts-marker w6d9gde4o no-pointer-events" stroke="#ffffff" fill="#3f6ad8" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle></g></g><g id="SvgjsG1017" class="apexcharts-datalabels"></g></g></g><line id="SvgjsLine1031" x1="0" y1="0" x2="482" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1032" x1="0" y1="0" x2="482" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1033" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1034" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1035" class="apexcharts-point-annotations"></g></g><g id="SvgjsG1026" class="apexcharts-yaxis" rel="0" transform="translate(-35, 0)"><g id="SvgjsG1027" class="apexcharts-yaxis-texts-g"></g></g></svg><div class="apexcharts-legend"></div><div class="apexcharts-tooltip light"><div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker" style="background-color: rgb(63, 106, 216);"></span><div class="apexcharts-tooltip-text"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div></div></div>
                                                <div class="resize-triggers"><div class="expand-trigger"><div style="width: 483px; height: 153px;"></div></div><div class="contract-trigger"></div></div></div>
                                            </div>
                                        </div>
                                    </div></div></div><div class="slick-slide" data-slick-index="2" aria-hidden="true" tabindex="-1" role="tabpanel" id="slick-slide02" style="width: 482px;"><div><div style="width: 100%; display: inline-block;">
                                        <div class="widget-chart widget-chart2 text-left p-0">
                                            <div class="widget-chat-wrapper-outer">
                                                <div class="widget-chart-content widget-chart-content-lg pb-0">
                                                    <div class="widget-chart-flex">
                                                        <div class="widget-title opacity-5 text-muted text-uppercase"> Helpdesk Tickets</div>
                                                    </div>
                                                    <div class="widget-numbers">
                                                        <div class="widget-chart-flex">
                                                            <div>
                                                                <span class="text-warning">34</span>
                                                            </div>
                                                            <div class="widget-title ml-2 font-size-lg font-weight-normal text-dark">
                                                                <span class="opacity-5 text-muted pl-2 pr-1">5%</span>
                                                                increase
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="widget-chart-wrapper he-auto opacity-10 m-0">
                                                    <div id="dashboard-sparkline-2" style="min-height: 152px;"><div id="apexchartsej3xyva4i" class="apexcharts-canvas apexchartsej3xyva4i" style="width: 482px; height: 152px;"><svg id="SvgjsSvg1037" width="482" height="152" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1039" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs1038"><clipPath id="gridRectMaskej3xyva4i"><rect id="SvgjsRect1042" width="487" height="157" x="-2.5" y="-2.5" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><clipPath id="gridRectMarkerMaskej3xyva4i"><rect id="SvgjsRect1043" width="496" height="166" x="-7" y="-7" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><linearGradient id="SvgjsLinearGradient1050" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop1051" stop-opacity="0.7" stop-color="rgba(247,185,36,0.7)" offset="0"></stop><stop id="SvgjsStop1052" stop-opacity="0.9" stop-color="rgba(255,255,255,0.9)" offset="0.9"></stop><stop id="SvgjsStop1053" stop-opacity="0.9" stop-color="rgba(255,255,255,0.9)" offset="1"></stop></linearGradient></defs><rect id="SvgjsRect1041" width="1" height="152" x="0" y="0" rx="0" ry="0" fill="#b1b9c4" opacity="1" stroke-width="0" stroke-dasharray="0" class="apexcharts-xcrosshairs" filter="none" fill-opacity="0.9"></rect><g id="SvgjsG1055" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1056" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG1059" class="apexcharts-grid"><line id="SvgjsLine1061" x1="0" y1="152" x2="482" y2="152" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine1060" x1="0" y1="1" x2="0" y2="152" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG1045" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG1046" class="apexcharts-series series-1" data:longestSeries="true" rel="1" data:realIndex="0"><path id="apexcharts-area-0" d="M10.041666666666666 97.32374100719424C17.070833333333333 97.32374100719424 23.09583333333333 64.51798561151078 30.125 64.51798561151078C37.15416666666666 64.51798561151078 43.17916666666667 109.82117163412127 50.20833333333333 109.82117163412127C57.23749999999999 109.82117163412127 63.262499999999996 67.64234326824254 70.29166666666666 67.64234326824254C77.32083333333333 67.64234326824254 83.34583333333332 56.70709146968139 90.37499999999999 56.70709146968139C97.40416666666665 56.70709146968139 103.42916666666665 50.45837615621788 110.45833333333331 50.45837615621788C117.48749999999998 50.45837615621788 123.51249999999999 103.57245632065775 130.54166666666666 103.57245632065775C137.57083333333333 103.57245632065775 143.59583333333333 122.3186022610483 150.625 122.3186022610483C157.65416666666667 122.3186022610483 163.67916666666667 92.6372045220966 170.70833333333334 92.6372045220966C177.7375 92.6372045220966 183.76250000000002 87.95066803699896 190.79166666666669 87.95066803699896C197.82083333333335 87.95066803699896 203.84583333333336 72.32887975334017 210.87500000000003 72.32887975334017C217.9041666666667 72.32887975334017 223.9291666666667 69.20452209660843 230.95833333333337 69.20452209660843C237.98750000000004 69.20452209660843 244.01250000000005 78.5775950668037 251.0416666666667 78.5775950668037C258.0708333333334 78.5775950668037 264.09583333333336 55.144912641315514 271.12500000000006 55.144912641315514C278.1541666666667 55.144912641315514 284.17916666666673 6.717368961973278 291.20833333333337 6.717368961973278C298.2375 6.717368961973278 304.26250000000005 109.82117163412127 311.2916666666667 109.82117163412127C318.3208333333333 109.82117163412127 324.34583333333336 81.70195272353546 331.375 81.70195272353546C338.40416666666664 81.70195272353546 344.4291666666667 67.64234326824254 351.4583333333333 67.64234326824254C358.48749999999995 67.64234326824254 364.5125 94.19938335046248 371.54166666666663 94.19938335046248C378.57083333333327 94.19938335046248 384.5958333333333 97.32374100719424 391.62499999999994 97.32374100719424C398.6541666666666 97.32374100719424 404.6791666666666 80.13977389516957 411.70833333333326 80.13977389516957C418.7374999999999 80.13977389516957 424.76249999999993 91.07502569373072 431.7916666666666 91.07502569373072C438.8208333333332 91.07502569373072 444.84583333333325 84.82631038026722 451.8749999999999 84.82631038026722C458.9041666666665 84.82631038026722 464.92916666666656 114.5077081192189 471.9583333333332 114.5077081192189C471.9583333333332 114.5077081192189 471.9583333333332 114.5077081192189 471.9583333333332 114.5077081192189 " fill="none" fill-opacity="1" stroke="#f7b924" stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskej3xyva4i)" pathTo="M 10.041666666666666 97.32374100719424C 17.070833333333333 97.32374100719424 23.09583333333333 64.51798561151078 30.125 64.51798561151078C 37.15416666666666 64.51798561151078 43.17916666666667 109.82117163412127 50.20833333333333 109.82117163412127C 57.23749999999999 109.82117163412127 63.262499999999996 67.64234326824254 70.29166666666666 67.64234326824254C 77.32083333333333 67.64234326824254 83.34583333333332 56.70709146968139 90.37499999999999 56.70709146968139C 97.40416666666665 56.70709146968139 103.42916666666665 50.45837615621788 110.45833333333331 50.45837615621788C 117.48749999999998 50.45837615621788 123.51249999999999 103.57245632065775 130.54166666666666 103.57245632065775C 137.57083333333333 103.57245632065775 143.59583333333333 122.3186022610483 150.625 122.3186022610483C 157.65416666666667 122.3186022610483 163.67916666666667 92.6372045220966 170.70833333333334 92.6372045220966C 177.7375 92.6372045220966 183.76250000000002 87.95066803699896 190.79166666666669 87.95066803699896C 197.82083333333335 87.95066803699896 203.84583333333336 72.32887975334017 210.87500000000003 72.32887975334017C 217.9041666666667 72.32887975334017 223.9291666666667 69.20452209660843 230.95833333333337 69.20452209660843C 237.98750000000004 69.20452209660843 244.01250000000005 78.5775950668037 251.0416666666667 78.5775950668037C 258.0708333333334 78.5775950668037 264.09583333333336 55.144912641315514 271.12500000000006 55.144912641315514C 278.1541666666667 55.144912641315514 284.17916666666673 6.717368961973278 291.20833333333337 6.717368961973278C 298.2375 6.717368961973278 304.26250000000005 109.82117163412127 311.2916666666667 109.82117163412127C 318.3208333333333 109.82117163412127 324.34583333333336 81.70195272353546 331.375 81.70195272353546C 338.40416666666664 81.70195272353546 344.4291666666667 67.64234326824254 351.4583333333333 67.64234326824254C 358.48749999999995 67.64234326824254 364.5125 94.19938335046248 371.54166666666663 94.19938335046248C 378.57083333333327 94.19938335046248 384.5958333333333 97.32374100719424 391.62499999999994 97.32374100719424C 398.6541666666666 97.32374100719424 404.6791666666666 80.13977389516957 411.70833333333326 80.13977389516957C 418.7374999999999 80.13977389516957 424.76249999999993 91.07502569373072 431.7916666666666 91.07502569373072C 438.8208333333332 91.07502569373072 444.84583333333325 84.82631038026722 451.8749999999999 84.82631038026722C 458.9041666666665 84.82631038026722 464.92916666666656 114.5077081192189 471.9583333333332 114.5077081192189" pathFrom="M -1 152L -1 152L 30.125 152L 50.20833333333333 152L 70.29166666666666 152L 90.37499999999999 152L 110.45833333333331 152L 130.54166666666666 152L 150.625 152L 170.70833333333334 152L 190.79166666666669 152L 210.87500000000003 152L 230.95833333333337 152L 251.0416666666667 152L 271.12500000000006 152L 291.20833333333337 152L 311.2916666666667 152L 331.375 152L 351.4583333333333 152L 371.54166666666663 152L 391.62499999999994 152L 411.70833333333326 152L 431.7916666666666 152L 451.8749999999999 152L 471.9583333333332 152"></path><path id="apexcharts-area-0" d="M10.041666666666666 152L10.041666666666666 97.32374100719424C17.070833333333333 97.32374100719424 23.09583333333333 64.51798561151078 30.125 64.51798561151078C37.15416666666666 64.51798561151078 43.17916666666667 109.82117163412127 50.20833333333333 109.82117163412127C57.23749999999999 109.82117163412127 63.262499999999996 67.64234326824254 70.29166666666666 67.64234326824254C77.32083333333333 67.64234326824254 83.34583333333332 56.70709146968139 90.37499999999999 56.70709146968139C97.40416666666665 56.70709146968139 103.42916666666665 50.45837615621788 110.45833333333331 50.45837615621788C117.48749999999998 50.45837615621788 123.51249999999999 103.57245632065775 130.54166666666666 103.57245632065775C137.57083333333333 103.57245632065775 143.59583333333333 122.3186022610483 150.625 122.3186022610483C157.65416666666667 122.3186022610483 163.67916666666667 92.6372045220966 170.70833333333334 92.6372045220966C177.7375 92.6372045220966 183.76250000000002 87.95066803699896 190.79166666666669 87.95066803699896C197.82083333333335 87.95066803699896 203.84583333333336 72.32887975334017 210.87500000000003 72.32887975334017C217.9041666666667 72.32887975334017 223.9291666666667 69.20452209660843 230.95833333333337 69.20452209660843C237.98750000000004 69.20452209660843 244.01250000000005 78.5775950668037 251.0416666666667 78.5775950668037C258.0708333333334 78.5775950668037 264.09583333333336 55.144912641315514 271.12500000000006 55.144912641315514C278.1541666666667 55.144912641315514 284.17916666666673 6.717368961973278 291.20833333333337 6.717368961973278C298.2375 6.717368961973278 304.26250000000005 109.82117163412127 311.2916666666667 109.82117163412127C318.3208333333333 109.82117163412127 324.34583333333336 81.70195272353546 331.375 81.70195272353546C338.40416666666664 81.70195272353546 344.4291666666667 67.64234326824254 351.4583333333333 67.64234326824254C358.48749999999995 67.64234326824254 364.5125 94.19938335046248 371.54166666666663 94.19938335046248C378.57083333333327 94.19938335046248 384.5958333333333 97.32374100719424 391.62499999999994 97.32374100719424C398.6541666666666 97.32374100719424 404.6791666666666 80.13977389516957 411.70833333333326 80.13977389516957C418.7374999999999 80.13977389516957 424.76249999999993 91.07502569373072 431.7916666666666 91.07502569373072C438.8208333333332 91.07502569373072 444.84583333333325 84.82631038026722 451.8749999999999 84.82631038026722C458.9041666666665 84.82631038026722 464.92916666666656 114.5077081192189 471.9583333333332 114.5077081192189C471.9583333333332 114.5077081192189 471.9583333333332 114.5077081192189 471.9583333333332 152M471.9583333333332 114.5077081192189C471.9583333333332 114.5077081192189 471.9583333333332 114.5077081192189 471.9583333333332 114.5077081192189 " fill="url(#SvgjsLinearGradient1050)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskej3xyva4i)" pathTo="M 10.041666666666666 152L 10.041666666666666 97.32374100719424C 17.070833333333333 97.32374100719424 23.09583333333333 64.51798561151078 30.125 64.51798561151078C 37.15416666666666 64.51798561151078 43.17916666666667 109.82117163412127 50.20833333333333 109.82117163412127C 57.23749999999999 109.82117163412127 63.262499999999996 67.64234326824254 70.29166666666666 67.64234326824254C 77.32083333333333 67.64234326824254 83.34583333333332 56.70709146968139 90.37499999999999 56.70709146968139C 97.40416666666665 56.70709146968139 103.42916666666665 50.45837615621788 110.45833333333331 50.45837615621788C 117.48749999999998 50.45837615621788 123.51249999999999 103.57245632065775 130.54166666666666 103.57245632065775C 137.57083333333333 103.57245632065775 143.59583333333333 122.3186022610483 150.625 122.3186022610483C 157.65416666666667 122.3186022610483 163.67916666666667 92.6372045220966 170.70833333333334 92.6372045220966C 177.7375 92.6372045220966 183.76250000000002 87.95066803699896 190.79166666666669 87.95066803699896C 197.82083333333335 87.95066803699896 203.84583333333336 72.32887975334017 210.87500000000003 72.32887975334017C 217.9041666666667 72.32887975334017 223.9291666666667 69.20452209660843 230.95833333333337 69.20452209660843C 237.98750000000004 69.20452209660843 244.01250000000005 78.5775950668037 251.0416666666667 78.5775950668037C 258.0708333333334 78.5775950668037 264.09583333333336 55.144912641315514 271.12500000000006 55.144912641315514C 278.1541666666667 55.144912641315514 284.17916666666673 6.717368961973278 291.20833333333337 6.717368961973278C 298.2375 6.717368961973278 304.26250000000005 109.82117163412127 311.2916666666667 109.82117163412127C 318.3208333333333 109.82117163412127 324.34583333333336 81.70195272353546 331.375 81.70195272353546C 338.40416666666664 81.70195272353546 344.4291666666667 67.64234326824254 351.4583333333333 67.64234326824254C 358.48749999999995 67.64234326824254 364.5125 94.19938335046248 371.54166666666663 94.19938335046248C 378.57083333333327 94.19938335046248 384.5958333333333 97.32374100719424 391.62499999999994 97.32374100719424C 398.6541666666666 97.32374100719424 404.6791666666666 80.13977389516957 411.70833333333326 80.13977389516957C 418.7374999999999 80.13977389516957 424.76249999999993 91.07502569373072 431.7916666666666 91.07502569373072C 438.8208333333332 91.07502569373072 444.84583333333325 84.82631038026722 451.8749999999999 84.82631038026722C 458.9041666666665 84.82631038026722 464.92916666666656 114.5077081192189 471.9583333333332 114.5077081192189C 471.9583333333332 114.5077081192189 471.9583333333332 114.5077081192189 471.9583333333332 152M 471.9583333333332 114.5077081192189z" pathFrom="M -1 152L -1 152L 30.125 152L 50.20833333333333 152L 70.29166666666666 152L 90.37499999999999 152L 110.45833333333331 152L 130.54166666666666 152L 150.625 152L 170.70833333333334 152L 190.79166666666669 152L 210.87500000000003 152L 230.95833333333337 152L 251.0416666666667 152L 271.12500000000006 152L 291.20833333333337 152L 311.2916666666667 152L 331.375 152L 351.4583333333333 152L 371.54166666666663 152L 391.62499999999994 152L 411.70833333333326 152L 431.7916666666666 152L 451.8749999999999 152L 471.9583333333332 152"></path><g id="SvgjsG1047" class="apexcharts-series-markers-wrap"><g class="apexcharts-series-markers"><circle id="SvgjsCircle1067" r="0" cx="0" cy="0" class="apexcharts-marker wydd0k7mq no-pointer-events" stroke="#ffffff" fill="#f7b924" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle></g></g><g id="SvgjsG1048" class="apexcharts-datalabels"></g></g></g><line id="SvgjsLine1062" x1="0" y1="0" x2="482" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1063" x1="0" y1="0" x2="482" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1064" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1065" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1066" class="apexcharts-point-annotations"></g></g><g id="SvgjsG1057" class="apexcharts-yaxis" rel="0" transform="translate(-35, 0)"><g id="SvgjsG1058" class="apexcharts-yaxis-texts-g"></g></g></svg><div class="apexcharts-legend"></div><div class="apexcharts-tooltip light"><div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker" style="background-color: rgb(247, 185, 36);"></span><div class="apexcharts-tooltip-text"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div></div></div>
                                                <div class="resize-triggers"><div class="expand-trigger"><div style="width: 483px; height: 153px;"></div></div><div class="contract-trigger"></div></div></div>
                                            </div>
                                        </div>
                                    </div></div></div><div class="slick-slide slick-cloned" data-slick-index="3" id="" aria-hidden="true" tabindex="-1" style="width: 482px;"><div><div style="width: 100%; display: inline-block;">
                                        <div class="widget-chart widget-chart2 text-left p-0">
                                            <div class="widget-chat-wrapper-outer">
                                                <div class="widget-chart-content widget-chart-content-lg pb-0">
                                                    <div class="widget-chart-flex">
                                                        <div class="widget-title opacity-5 text-muted text-uppercase"> New Accounts since 2018</div>
                                                    </div>
                                                    <div class="widget-numbers">
                                                        <div class="widget-chart-flex">
                                                            <div>
                                                                <span class="opacity-10 text-success pr-2">
                                                                    <i class="fa fa-angle-up"></i>
                                                                </span>
                                                                <span>78</span>
                                                                <small class="opacity-5 pl-1">%</small>
                                                            </div>
                                                            <div class="widget-title ml-2 font-size-lg font-weight-normal text-muted">
                                                                <span class="text-success pl-2">+14</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="widget-chart-wrapper he-auto opacity-10 m-0">
                                                    <div id="" style="min-height: 152px;"><div id="" class="apexcharts-canvas apexchartsqr5pt8s7" style="width: 482px; height: 152px;"><svg id="" width="482" height="152" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id=""><clipPath id=""><rect id="" width="487" height="157" x="-2.5" y="-2.5" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><clipPath id=""><rect id="" width="496" height="166" x="-7" y="-7" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><linearGradient id="" x1="0" y1="0" x2="0" y2="1"><stop id="" stop-opacity="0.7" stop-color="rgba(58,196,125,0.7)" offset="0"></stop><stop id="" stop-opacity="0.9" stop-color="rgba(255,255,255,0.9)" offset="0.9"></stop><stop id="" stop-opacity="0.9" stop-color="rgba(255,255,255,0.9)" offset="1"></stop></linearGradient></defs><rect id="" width="1" height="152" x="0" y="0" rx="0" ry="0" fill="#b1b9c4" opacity="1" stroke-width="0" stroke-dasharray="0" class="apexcharts-xcrosshairs" filter="none" fill-opacity="0.9"></rect><g id="" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="" class="apexcharts-grid"><line id="" x1="0" y1="152" x2="482" y2="152" stroke="transparent" stroke-dasharray="0"></line><line id="" x1="0" y1="1" x2="0" y2="152" stroke="transparent" stroke-dasharray="0"></line></g><g id="" class="apexcharts-area-series apexcharts-plot-series"><g id="" class="apexcharts-series series-1" data:longestSeries="true" rel="1" data:realIndex="0"><path id="" d="M4.520833333333332 133.25385405960947C8.035416666666665 133.25385405960947 11.047916666666664 124.66187050359713 14.562499999999998 124.66187050359713C18.077083333333327 124.66187050359713 36.65208333333333 103.57245632065776 40.166666666666664 103.57245632065776C43.68124999999999 103.57245632065776 56.73541666666666 104.35354573484071 60.24999999999999 104.35354573484071C63.76458333333333 104.35354573484071 76.81874999999998 109.82117163412127 80.33333333333331 109.82117163412127C83.84791666666665 109.82117163412127 96.90208333333331 137.15930113052414 100.41666666666664 137.15930113052414C103.93124999999998 137.15930113052414 116.98541666666665 108.2589928057554 120.49999999999999 108.2589928057554C124.01458333333332 108.2589928057554 137.06875 123.09969167523124 140.58333333333331 123.09969167523124C144.09791666666666 123.09969167523124 157.15208333333334 118.41315519013361 160.66666666666666 118.41315519013361C164.18125 118.41315519013361 177.23541666666668 119.9753340184995 180.75 119.9753340184995C184.26458333333335 119.9753340184995 197.31875000000002 109.82117163412127 200.83333333333334 109.82117163412127C204.3479166666667 109.82117163412127 217.40208333333337 124.66187050359713 220.91666666666669 124.66187050359713C224.43125000000003 124.66187050359713 237.4854166666667 116.85097636176774 241.00000000000003 116.85097636176774C244.51458333333338 116.85097636176774 257.56875 79.35868448098665 261.08333333333337 79.35868448098665C264.5979166666667 79.35868448098665 277.6520833333334 101.22918807810895 281.1666666666667 101.22918807810895C284.68125000000003 101.22918807810895 297.7354166666667 127.78622816032887 301.25 127.78622816032887C304.76458333333335 127.78622816032887 317.81875 130.91058581706065 321.3333333333333 130.91058581706065C324.84791666666666 130.91058581706065 337.90208333333334 122.3186022610483 341.41666666666663 122.3186022610483C344.93125 122.3186022610483 357.98541666666665 121.53751284686537 361.49999999999994 121.53751284686537C365.0145833333333 121.53751284686537 378.06874999999997 110.60226104830423 381.58333333333326 110.60226104830423C385.0979166666666 110.60226104830423 398.1520833333333 116.06988694758479 401.6666666666666 116.06988694758479C405.1812499999999 116.06988694758479 418.2354166666666 112.16443987667009 421.7499999999999 112.16443987667009C425.26458333333323 112.16443987667009 438.3187499999999 115.28879753340186 441.8333333333332 115.28879753340186C445.34791666666655 115.28879753340186 458.4020833333332 130.91058581706065 461.9166666666665 130.91058581706065C461.9166666666665 130.91058581706065 471.9583333333332 130.91058581706065 471.9583333333332 130.91058581706065 " fill="none" fill-opacity="1" stroke="#3ac47d" stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskqr5pt8s7)" pathTo="M 10.041666666666666 114.5077081192189C 17.070833333333333 114.5077081192189 23.09583333333333 97.32374100719424 30.125 97.32374100719424C 37.15416666666666 97.32374100719424 43.17916666666667 55.144912641315514 50.20833333333333 55.144912641315514C 57.23749999999999 55.144912641315514 63.262499999999996 56.70709146968139 70.29166666666666 56.70709146968139C 77.32083333333333 56.70709146968139 83.34583333333332 67.64234326824254 90.37499999999999 67.64234326824254C 97.40416666666665 67.64234326824254 103.42916666666665 122.3186022610483 110.45833333333331 122.3186022610483C 117.48749999999998 122.3186022610483 123.51249999999999 64.51798561151078 130.54166666666666 64.51798561151078C 137.57083333333333 64.51798561151078 143.59583333333333 94.19938335046248 150.625 94.19938335046248C 157.65416666666667 94.19938335046248 163.67916666666667 84.82631038026722 170.70833333333334 84.82631038026722C 177.7375 84.82631038026722 183.76250000000002 87.95066803699896 190.79166666666669 87.95066803699896C 197.82083333333335 87.95066803699896 203.84583333333336 67.64234326824254 210.87500000000003 67.64234326824254C 217.9041666666667 67.64234326824254 223.9291666666667 97.32374100719424 230.95833333333337 97.32374100719424C 237.98750000000004 97.32374100719424 244.01250000000005 81.70195272353546 251.0416666666667 81.70195272353546C 258.0708333333334 81.70195272353546 264.09583333333336 6.717368961973278 271.12500000000006 6.717368961973278C 278.1541666666667 6.717368961973278 284.17916666666673 50.45837615621788 291.20833333333337 50.45837615621788C 298.2375 50.45837615621788 304.26250000000005 103.57245632065775 311.2916666666667 103.57245632065775C 318.3208333333333 103.57245632065775 324.34583333333336 109.82117163412127 331.375 109.82117163412127C 338.40416666666664 109.82117163412127 344.4291666666667 92.6372045220966 351.4583333333333 92.6372045220966C 358.48749999999995 92.6372045220966 364.5125 91.07502569373072 371.54166666666663 91.07502569373072C 378.57083333333327 91.07502569373072 384.5958333333333 69.20452209660843 391.62499999999994 69.20452209660843C 398.6541666666666 69.20452209660843 404.6791666666666 80.13977389516957 411.70833333333326 80.13977389516957C 418.7374999999999 80.13977389516957 424.76249999999993 72.32887975334017 431.7916666666666 72.32887975334017C 438.8208333333332 72.32887975334017 444.84583333333325 78.5775950668037 451.8749999999999 78.5775950668037C 458.9041666666665 78.5775950668037 464.92916666666656 109.82117163412127 471.9583333333332 109.82117163412127" pathFrom="M -1 152L -1 152L 30.125 152L 50.20833333333333 152L 70.29166666666666 152L 90.37499999999999 152L 110.45833333333331 152L 130.54166666666666 152L 150.625 152L 170.70833333333334 152L 190.79166666666669 152L 210.87500000000003 152L 230.95833333333337 152L 251.0416666666667 152L 271.12500000000006 152L 291.20833333333337 152L 311.2916666666667 152L 331.375 152L 351.4583333333333 152L 371.54166666666663 152L 391.62499999999994 152L 411.70833333333326 152L 431.7916666666666 152L 451.8749999999999 152L 471.9583333333332 152"></path><path id="" d="M4.4774732555102394 152L4.4774732555102394 133.4010844318706C7.964453399678456 133.4010844318706 26.638019855831782 124.87658146314462 30.125 124.87658146314462C33.611980144168214 124.87658146314462 46.721353189165114 103.95280144899905 50.20833333333333 103.95280144899905C53.69531347750154 103.95280144899905 66.80468652249844 104.72775626433777 70.29166666666666 104.72775626433777C73.77864681083487 104.72775626433777 86.88801985583177 110.15243997170884 90.37499999999999 110.15243997170884C93.8619801441682 110.15243997170884 106.9713531891651 137.27585850856423 110.45833333333331 137.27585850856423C113.94531347750153 137.27585850856423 127.05468652249844 108.6025303410314 130.54166666666666 108.6025303410314C134.02864681083489 108.6025303410314 147.13801985583177 123.32667183246717 150.625 123.32667183246717C154.11198014416823 123.32667183246717 167.22135318916511 118.67694294043483 170.70833333333334 118.67694294043483C174.19531347750157 118.67694294043483 187.30468652249846 120.22685257111227 190.79166666666669 120.22685257111227C194.2786468108349 120.22685257111227 207.3880198558318 110.15243997170884 210.87500000000003 110.15243997170884C214.36198014416826 110.15243997170884 227.47135318916514 124.87658146314462 230.95833333333337 124.87658146314462C234.4453134775016 124.87658146314462 247.55468652249849 117.12703330975737 251.0416666666667 117.12703330975737C254.52864681083494 117.12703330975737 267.6380198558318 79.92920217349858 271.12500000000006 79.92920217349858C274.6119801441683 79.92920217349858 287.72135318916514 101.62793700298288 291.20833333333337 101.62793700298288C294.6953134775016 101.62793700298288 307.80468652249846 127.97640072449951 311.2916666666667 127.97640072449951C314.7786468108349 127.97640072449951 327.88801985583177 131.07621998585444 331.375 131.07621998585444C334.86198014416823 131.07621998585444 347.9713531891651 122.55171701712844 351.4583333333333 122.55171701712844C354.94531347750154 122.55171701712844 368.0546865224984 121.77676220178972 371.54166666666663 121.77676220178972C375.02864681083486 121.77676220178972 388.1380198558317 110.92739478704758 391.62499999999994 110.92739478704758C395.1119801441682 110.92739478704758 408.22135318916503 116.35207849441865 411.70833333333326 116.35207849441865C415.1953134775015 116.35207849441865 428.30468652249834 112.47730441772502 431.7916666666666 112.47730441772502C435.2786468108348 112.47730441772502 448.38801985583166 115.57712367907993 451.8749999999999 115.57712367907993C455.3619801441681 115.57712367907993 468.471353189165 131.07621998585444 471.9583333333332 131.07621998585444C471.9583333333332 131.07621998585444 471.9583333333332 131.07621998585444 471.9583333333332 152M233.62188272942157 131.07621998585444C233.62188272942157 131.07621998585444 233.62188272942157 131.07621998585444 233.62188272942157 131.07621998585444 " fill="url(#SvgjsLinearGradient1081)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskqr5pt8s7)" pathTo="M 10.041666666666666 152L 10.041666666666666 114.5077081192189C 17.070833333333333 114.5077081192189 23.09583333333333 97.32374100719424 30.125 97.32374100719424C 37.15416666666666 97.32374100719424 43.17916666666667 55.144912641315514 50.20833333333333 55.144912641315514C 57.23749999999999 55.144912641315514 63.262499999999996 56.70709146968139 70.29166666666666 56.70709146968139C 77.32083333333333 56.70709146968139 83.34583333333332 67.64234326824254 90.37499999999999 67.64234326824254C 97.40416666666665 67.64234326824254 103.42916666666665 122.3186022610483 110.45833333333331 122.3186022610483C 117.48749999999998 122.3186022610483 123.51249999999999 64.51798561151078 130.54166666666666 64.51798561151078C 137.57083333333333 64.51798561151078 143.59583333333333 94.19938335046248 150.625 94.19938335046248C 157.65416666666667 94.19938335046248 163.67916666666667 84.82631038026722 170.70833333333334 84.82631038026722C 177.7375 84.82631038026722 183.76250000000002 87.95066803699896 190.79166666666669 87.95066803699896C 197.82083333333335 87.95066803699896 203.84583333333336 67.64234326824254 210.87500000000003 67.64234326824254C 217.9041666666667 67.64234326824254 223.9291666666667 97.32374100719424 230.95833333333337 97.32374100719424C 237.98750000000004 97.32374100719424 244.01250000000005 81.70195272353546 251.0416666666667 81.70195272353546C 258.0708333333334 81.70195272353546 264.09583333333336 6.717368961973278 271.12500000000006 6.717368961973278C 278.1541666666667 6.717368961973278 284.17916666666673 50.45837615621788 291.20833333333337 50.45837615621788C 298.2375 50.45837615621788 304.26250000000005 103.57245632065775 311.2916666666667 103.57245632065775C 318.3208333333333 103.57245632065775 324.34583333333336 109.82117163412127 331.375 109.82117163412127C 338.40416666666664 109.82117163412127 344.4291666666667 92.6372045220966 351.4583333333333 92.6372045220966C 358.48749999999995 92.6372045220966 364.5125 91.07502569373072 371.54166666666663 91.07502569373072C 378.57083333333327 91.07502569373072 384.5958333333333 69.20452209660843 391.62499999999994 69.20452209660843C 398.6541666666666 69.20452209660843 404.6791666666666 80.13977389516957 411.70833333333326 80.13977389516957C 418.7374999999999 80.13977389516957 424.76249999999993 72.32887975334017 431.7916666666666 72.32887975334017C 438.8208333333332 72.32887975334017 444.84583333333325 78.5775950668037 451.8749999999999 78.5775950668037C 458.9041666666665 78.5775950668037 464.92916666666656 109.82117163412127 471.9583333333332 109.82117163412127C 471.9583333333332 109.82117163412127 471.9583333333332 109.82117163412127 471.9583333333332 152M 471.9583333333332 109.82117163412127z" pathFrom="M -1 152L -1 152L 30.125 152L 50.20833333333333 152L 70.29166666666666 152L 90.37499999999999 152L 110.45833333333331 152L 130.54166666666666 152L 150.625 152L 170.70833333333334 152L 190.79166666666669 152L 210.87500000000003 152L 230.95833333333337 152L 251.0416666666667 152L 271.12500000000006 152L 291.20833333333337 152L 311.2916666666667 152L 331.375 152L 351.4583333333333 152L 371.54166666666663 152L 391.62499999999994 152L 411.70833333333326 152L 431.7916666666666 152L 451.8749999999999 152L 471.9583333333332 152"></path><g id="" class="apexcharts-series-markers-wrap hidden"><g class="apexcharts-series-markers"><circle id="" r="0" cx="0" cy="0" class="apexcharts-marker winhfhgyt no-pointer-events" stroke="#ffffff" fill="#3ac47d" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle></g></g><g id="" class="apexcharts-datalabels"></g></g></g><line id="" x1="0" y1="0" x2="482" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="" x1="0" y1="0" x2="482" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="" class="apexcharts-yaxis-annotations hidden"></g><g id="" class="apexcharts-xaxis-annotations hidden"></g><g id="" class="apexcharts-point-annotations hidden"></g></g><g id="" class="apexcharts-yaxis" rel="0" transform="translate(-35, 0)"><g id="" class="apexcharts-yaxis-texts-g"></g></g></svg><div class="apexcharts-legend"></div><div class="apexcharts-tooltip light"><div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker" style="background-color: rgb(58, 196, 125);"></span><div class="apexcharts-tooltip-text"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div></div></div>
                                                <div class="resize-triggers"><div class="expand-trigger"><div style="width: 483px; height: 153px;"></div></div><div class="contract-trigger"></div></div></div>
                                            </div>
                                        </div>
                                    </div></div></div><div class="slick-slide slick-cloned" data-slick-index="4" id="" aria-hidden="true" tabindex="-1" style="width: 482px;"><div><div style="width: 100%; display: inline-block;">
                                        <div class="widget-chart widget-chart2 text-left p-0">
                                            <div class="widget-chat-wrapper-outer">
                                                <div class="widget-chart-content widget-chart-content-lg pb-0">
                                                    <div class="widget-chart-flex">
                                                        <div class="widget-title opacity-5 text-muted text-uppercase"> Last Year Total Sales</div>
                                                    </div>
                                                    <div class="widget-numbers">
                                                        <div class="widget-chart-flex">
                                                            <div>
                                                                <small class="opacity-3 pr-1">$</small>
                                                                <span>629</span>
                                                                <span class="text-primary pl-3">
                                                                    <i class="fa fa-angle-down"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="widget-chart-wrapper he-auto opacity-10 m-0">
                                                    <div id="" style="min-height: 152px;"><div id="" class="apexcharts-canvas apexcharts9ziof55b" style="width: 482px; height: 152px;"><svg id="" width="482" height="152" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id=""><clipPath id=""><rect id="" width="487" height="157" x="-2.5" y="-2.5" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><clipPath id=""><rect id="" width="496" height="166" x="-7" y="-7" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><linearGradient id="" x1="0" y1="0" x2="0" y2="1"><stop id="" stop-opacity="0.7" stop-color="rgba(63,106,216,0.7)" offset="0"></stop><stop id="" stop-opacity="0.9" stop-color="rgba(255,255,255,0.9)" offset="0.9"></stop><stop id="" stop-opacity="0.9" stop-color="rgba(255,255,255,0.9)" offset="1"></stop></linearGradient></defs><rect id="" width="1" height="152" x="0" y="0" rx="0" ry="0" fill="#b1b9c4" opacity="1" stroke-width="0" stroke-dasharray="0" class="apexcharts-xcrosshairs" filter="none" fill-opacity="0.9"></rect><g id="" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="" class="apexcharts-grid"><line id="" x1="0" y1="152" x2="482" y2="152" stroke="transparent" stroke-dasharray="0"></line><line id="" x1="0" y1="1" x2="0" y2="152" stroke="transparent" stroke-dasharray="0"></line></g><g id="" class="apexcharts-area-series apexcharts-plot-series"><g id="" class="apexcharts-series series-1" data:longestSeries="true" rel="1" data:realIndex="0"><path id="" d="M5.555334340942022 126.95882366361863C9.728484919496434 126.95882366361863 13.30547112968593 129.74117658988322 17.478621708240343 129.74117658988322C21.651772286794753 129.74117658988322 37.87513678874391 117.6843139094033 42.048287367298315 117.6843139094033C46.22143794585273 117.6843139094033 57.95847012207724 123.24901976193249 62.13162070063164 123.24901976193249C66.30477127918606 123.24901976193249 78.04180345541056 101.91764732723726 82.21495403396497 101.91764732723726C86.38810461251938 101.91764732723726 98.12513678874389 119.53921586024637 102.2982873672983 119.53921586024637C106.47143794585271 119.53921586024637 118.20847012207723 110.26470610603104 122.38162070063164 110.26470610603104C126.55477127918606 110.26470610603104 138.29180345541056 113.97451000771717 142.46495403396497 113.97451000771717C146.63810461251938 113.97451000771717 158.3751367887439 126.95882366361863 162.54828736729831 126.95882366361863C166.72143794585273 126.95882366361863 178.45847012207724 116.75686293398176 182.63162070063166 116.75686293398176C186.80477127918607 116.75686293398176 198.5418034554106 102.84509830265878 202.714954033965 102.84509830265878C206.8881046125194 102.84509830265878 218.62513678874393 94.498039523865 222.79828736729834 94.498039523865C226.97143794585276 94.498039523865 238.70847012207727 112.11960805687411 242.8816207006317 112.11960805687411C247.0547712791861 112.11960805687411 258.7918034554106 104.70000025350186 262.96495403396506 104.70000025350186C267.13810461251944 104.70000025350186 278.875136788744 134.3784314669909 283.04828736729837 134.3784314669909C287.22143794585276 134.3784314669909 298.9584701220773 95.42549049928652 303.1316207006317 95.42549049928652C307.30477127918607 95.42549049928652 319.0418034554106 119.53921586024637 323.214954033965 119.53921586024637C327.3881046125194 119.53921586024637 339.12513678874393 101.91764732723726 343.2982873672983 101.91764732723726C347.4714379458527 101.91764732723726 359.20847012207724 108.40980415518798 363.38162070063163 108.40980415518798C367.554771279186 108.40980415518798 379.29180345541056 91.71568659760041 383.46495403396494 91.71568659760041C387.6381046125193 91.71568659760041 399.3751367887439 109.33725513060952 403.54828736729826 109.33725513060952C407.72143794585264 109.33725513060952 419.4584701220772 65.7470592857975 423.6316207006316 65.7470592857975C427.80477127918596 65.7470592857975 439.5418034554105 115.82941195856023 443.7149540339649 115.82941195856023C447.88810461251927 115.82941195856023 459.6251367887438 100.06274537639419 463.7982873672982 100.06274537639419C463.7982873672982 100.06274537639419 471.9583333333332 100.06274537639419 471.9583333333332 100.06274537639419 " fill="none" fill-opacity="1" stroke="#3f6ad8" stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMask9ziof55b)" pathTo="M 10.041666666666666 109.82117163412127C 17.070833333333333 109.82117163412127 23.09583333333333 114.5077081192189 30.125 114.5077081192189C 37.15416666666666 114.5077081192189 43.17916666666667 94.19938335046248 50.20833333333333 94.19938335046248C 57.23749999999999 94.19938335046248 63.262499999999996 103.57245632065775 70.29166666666666 103.57245632065775C 77.32083333333333 103.57245632065775 83.34583333333332 67.64234326824254 90.37499999999999 67.64234326824254C 97.40416666666665 67.64234326824254 103.42916666666665 97.32374100719424 110.45833333333331 97.32374100719424C 117.48749999999998 97.32374100719424 123.51249999999999 81.70195272353546 130.54166666666666 81.70195272353546C 137.57083333333333 81.70195272353546 143.59583333333333 87.95066803699896 150.625 87.95066803699896C 157.65416666666667 87.95066803699896 163.67916666666667 109.82117163412127 170.70833333333334 109.82117163412127C 177.7375 109.82117163412127 183.76250000000002 92.6372045220966 190.79166666666669 92.6372045220966C 197.82083333333335 92.6372045220966 203.84583333333336 69.20452209660843 210.87500000000003 69.20452209660843C 217.9041666666667 69.20452209660843 223.9291666666667 55.144912641315514 230.95833333333337 55.144912641315514C 237.98750000000004 55.144912641315514 244.01250000000005 84.82631038026722 251.0416666666667 84.82631038026722C 258.0708333333334 84.82631038026722 264.09583333333336 72.32887975334017 271.12500000000006 72.32887975334017C 278.1541666666667 72.32887975334017 284.17916666666673 122.3186022610483 291.20833333333337 122.3186022610483C 298.2375 122.3186022610483 304.26250000000005 56.70709146968139 311.2916666666667 56.70709146968139C 318.3208333333333 56.70709146968139 324.34583333333336 97.32374100719424 331.375 97.32374100719424C 338.40416666666664 97.32374100719424 344.4291666666667 67.64234326824254 351.4583333333333 67.64234326824254C 358.48749999999995 67.64234326824254 364.5125 78.5775950668037 371.54166666666663 78.5775950668037C 378.57083333333327 78.5775950668037 384.5958333333333 50.45837615621788 391.62499999999994 50.45837615621788C 398.6541666666666 50.45837615621788 404.6791666666666 80.13977389516957 411.70833333333326 80.13977389516957C 418.7374999999999 80.13977389516957 424.76249999999993 6.717368961973278 431.7916666666666 6.717368961973278C 438.8208333333332 6.717368961973278 444.84583333333325 91.07502569373072 451.8749999999999 91.07502569373072C 458.9041666666665 91.07502569373072 464.92916666666656 64.51798561151078 471.9583333333332 64.51798561151078" pathFrom="M -1 152L -1 152L 30.125 152L 50.20833333333333 152L 70.29166666666666 152L 90.37499999999999 152L 110.45833333333331 152L 130.54166666666666 152L 150.625 152L 170.70833333333334 152L 190.79166666666669 152L 210.87500000000003 152L 230.95833333333337 152L 251.0416666666667 152L 271.12500000000006 152L 291.20833333333337 152L 311.2916666666667 152L 331.375 152L 351.4583333333333 152L 371.54166666666663 152L 391.62499999999994 152L 411.70833333333326 152L 431.7916666666666 152L 451.8749999999999 152L 471.9583333333332 152"></path><path id="" d="M4.6292276771263845 152L4.6292276771263845 130.49652274481798C8.212815258753634 130.49652274481798 26.54141241837275 132.88579799539377 30.125 132.88579799539377C33.70858758162725 132.88579799539377 46.62474575170608 122.5322719095654 50.20833333333333 122.5322719095654C53.79192091496058 122.5322719095654 66.70807908503942 127.31082241071695 70.29166666666666 127.31082241071695C73.87525424829391 127.31082241071695 86.79141241837273 108.99304548963599 90.37499999999999 108.99304548963599C93.95858758162724 108.99304548963599 106.87474575170606 124.12512207661592 110.45833333333331 124.12512207661592C114.04192091496057 124.12512207661592 126.9580790850394 116.16087124136332 130.54166666666666 116.16087124136332C134.1252542482939 116.16087124136332 147.04141241837274 119.34657157546437 150.625 119.34657157546437C154.20858758162726 119.34657157546437 167.1247457517061 130.49652274481798 170.70833333333334 130.49652274481798C174.2919209149606 130.49652274481798 187.20807908503943 121.73584682604013 190.79166666666669 121.73584682604013C194.37525424829394 121.73584682604013 207.29141241837277 109.78947057316125 210.87500000000003 109.78947057316125C214.45858758162728 109.78947057316125 227.37474575170612 102.6216448214339 230.95833333333337 102.6216448214339C234.54192091496063 102.6216448214339 247.45807908503946 117.75372140841384 251.0416666666667 117.75372140841384C254.62525424829397 117.75372140841384 267.5414124183728 111.38232074021177 271.12500000000006 111.38232074021177C274.7085875816273 111.38232074021177 287.62474575170614 136.86792341302007 291.20833333333337 136.86792341302007C294.7919209149606 136.86792341302007 307.70807908503946 103.41806990495917 311.2916666666667 103.41806990495917C314.8752542482939 103.41806990495917 327.7914124183728 124.12512207661592 331.375 124.12512207661592C334.9585875816272 124.12512207661592 347.8747457517061 108.99304548963599 351.4583333333333 108.99304548963599C355.04192091496054 108.99304548963599 367.9580790850394 114.56802107431281 371.54166666666663 114.56802107431281C375.12525424829386 114.56802107431281 388.0414124183727 100.23236957085814 391.62499999999994 100.23236957085814C395.20858758162717 100.23236957085814 408.12474575170603 115.36444615783806 411.70833333333326 115.36444615783806C415.2919209149605 115.36444615783806 428.20807908503934 77.93246723215087 431.7916666666666 77.93246723215087C435.3752542482938 77.93246723215087 448.29141241837266 120.93942174251488 451.8749999999999 120.93942174251488C455.4585875816271 120.93942174251488 468.374745751706 107.40019532258546 471.9583333333332 107.40019532258546C471.9583333333332 107.40019532258546 471.9583333333332 107.40019532258546 471.9583333333332 152M240.12212589834556 107.40019532258546C240.12212589834556 107.40019532258546 240.12212589834556 107.40019532258546 240.12212589834556 107.40019532258546 " fill="url(#SvgjsLinearGradient1019)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMask9ziof55b)" pathTo="M 10.041666666666666 152L 10.041666666666666 109.82117163412127C 17.070833333333333 109.82117163412127 23.09583333333333 114.5077081192189 30.125 114.5077081192189C 37.15416666666666 114.5077081192189 43.17916666666667 94.19938335046248 50.20833333333333 94.19938335046248C 57.23749999999999 94.19938335046248 63.262499999999996 103.57245632065775 70.29166666666666 103.57245632065775C 77.32083333333333 103.57245632065775 83.34583333333332 67.64234326824254 90.37499999999999 67.64234326824254C 97.40416666666665 67.64234326824254 103.42916666666665 97.32374100719424 110.45833333333331 97.32374100719424C 117.48749999999998 97.32374100719424 123.51249999999999 81.70195272353546 130.54166666666666 81.70195272353546C 137.57083333333333 81.70195272353546 143.59583333333333 87.95066803699896 150.625 87.95066803699896C 157.65416666666667 87.95066803699896 163.67916666666667 109.82117163412127 170.70833333333334 109.82117163412127C 177.7375 109.82117163412127 183.76250000000002 92.6372045220966 190.79166666666669 92.6372045220966C 197.82083333333335 92.6372045220966 203.84583333333336 69.20452209660843 210.87500000000003 69.20452209660843C 217.9041666666667 69.20452209660843 223.9291666666667 55.144912641315514 230.95833333333337 55.144912641315514C 237.98750000000004 55.144912641315514 244.01250000000005 84.82631038026722 251.0416666666667 84.82631038026722C 258.0708333333334 84.82631038026722 264.09583333333336 72.32887975334017 271.12500000000006 72.32887975334017C 278.1541666666667 72.32887975334017 284.17916666666673 122.3186022610483 291.20833333333337 122.3186022610483C 298.2375 122.3186022610483 304.26250000000005 56.70709146968139 311.2916666666667 56.70709146968139C 318.3208333333333 56.70709146968139 324.34583333333336 97.32374100719424 331.375 97.32374100719424C 338.40416666666664 97.32374100719424 344.4291666666667 67.64234326824254 351.4583333333333 67.64234326824254C 358.48749999999995 67.64234326824254 364.5125 78.5775950668037 371.54166666666663 78.5775950668037C 378.57083333333327 78.5775950668037 384.5958333333333 50.45837615621788 391.62499999999994 50.45837615621788C 398.6541666666666 50.45837615621788 404.6791666666666 80.13977389516957 411.70833333333326 80.13977389516957C 418.7374999999999 80.13977389516957 424.76249999999993 6.717368961973278 431.7916666666666 6.717368961973278C 438.8208333333332 6.717368961973278 444.84583333333325 91.07502569373072 451.8749999999999 91.07502569373072C 458.9041666666665 91.07502569373072 464.92916666666656 64.51798561151078 471.9583333333332 64.51798561151078C 471.9583333333332 64.51798561151078 471.9583333333332 64.51798561151078 471.9583333333332 152M 471.9583333333332 64.51798561151078z" pathFrom="M -1 152L -1 152L 30.125 152L 50.20833333333333 152L 70.29166666666666 152L 90.37499999999999 152L 110.45833333333331 152L 130.54166666666666 152L 150.625 152L 170.70833333333334 152L 190.79166666666669 152L 210.87500000000003 152L 230.95833333333337 152L 251.0416666666667 152L 271.12500000000006 152L 291.20833333333337 152L 311.2916666666667 152L 331.375 152L 351.4583333333333 152L 371.54166666666663 152L 391.62499999999994 152L 411.70833333333326 152L 431.7916666666666 152L 451.8749999999999 152L 471.9583333333332 152"></path><g id="" class="apexcharts-series-markers-wrap hidden"><g class="apexcharts-series-markers"><circle id="" r="0" cx="0" cy="0" class="apexcharts-marker w6d9gde4o no-pointer-events" stroke="#ffffff" fill="#3f6ad8" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle></g></g><g id="" class="apexcharts-datalabels"></g></g></g><line id="" x1="0" y1="0" x2="482" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="" x1="0" y1="0" x2="482" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="" class="apexcharts-yaxis-annotations hidden"></g><g id="" class="apexcharts-xaxis-annotations hidden"></g><g id="" class="apexcharts-point-annotations hidden"></g></g><g id="" class="apexcharts-yaxis" rel="0" transform="translate(-35, 0)"><g id="" class="apexcharts-yaxis-texts-g"></g></g></svg><div class="apexcharts-legend"></div><div class="apexcharts-tooltip light"><div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker" style="background-color: rgb(63, 106, 216);"></span><div class="apexcharts-tooltip-text"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div></div></div>
                                                <div class="resize-triggers"><div class="expand-trigger"><div style="width: 483px; height: 153px;"></div></div><div class="contract-trigger"></div></div></div>
                                            </div>
                                        </div>
                                    </div></div></div><div class="slick-slide slick-cloned" data-slick-index="5" id="" aria-hidden="true" tabindex="-1" style="width: 482px;"><div><div style="width: 100%; display: inline-block;">
                                        <div class="widget-chart widget-chart2 text-left p-0">
                                            <div class="widget-chat-wrapper-outer">
                                                <div class="widget-chart-content widget-chart-content-lg pb-0">
                                                    <div class="widget-chart-flex">
                                                        <div class="widget-title opacity-5 text-muted text-uppercase"> Helpdesk Tickets</div>
                                                    </div>
                                                    <div class="widget-numbers">
                                                        <div class="widget-chart-flex">
                                                            <div>
                                                                <span class="text-warning">34</span>
                                                            </div>
                                                            <div class="widget-title ml-2 font-size-lg font-weight-normal text-dark">
                                                                <span class="opacity-5 text-muted pl-2 pr-1">5%</span>
                                                                increase
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="widget-chart-wrapper he-auto opacity-10 m-0">
                                                    <div id="" style="min-height: 152px;"><div id="" class="apexcharts-canvas apexchartsej3xyva4i" style="width: 482px; height: 152px;"><svg id="" width="482" height="152" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id=""><clipPath id=""><rect id="" width="487" height="157" x="-2.5" y="-2.5" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><clipPath id=""><rect id="" width="496" height="166" x="-7" y="-7" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><linearGradient id="" x1="0" y1="0" x2="0" y2="1"><stop id="" stop-opacity="0.7" stop-color="rgba(247,185,36,0.7)" offset="0"></stop><stop id="" stop-opacity="0.9" stop-color="rgba(255,255,255,0.9)" offset="0.9"></stop><stop id="" stop-opacity="0.9" stop-color="rgba(255,255,255,0.9)" offset="1"></stop></linearGradient></defs><rect id="" width="1" height="152" x="0" y="0" rx="0" ry="0" fill="#b1b9c4" opacity="1" stroke-width="0" stroke-dasharray="0" class="apexcharts-xcrosshairs" filter="none" fill-opacity="0.9"></rect><g id="" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="" class="apexcharts-grid"><line id="" x1="0" y1="152" x2="482" y2="152" stroke="transparent" stroke-dasharray="0"></line><line id="" x1="0" y1="1" x2="0" y2="152" stroke="transparent" stroke-dasharray="0"></line></g><g id="" class="apexcharts-area-series apexcharts-plot-series"><g id="" class="apexcharts-series series-1" data:longestSeries="true" rel="1" data:realIndex="0"><path id="" d="M4.585872614234137 124.339808203168C8.14186019922017 124.339808203168 11.189849557779628 107.7436931250688 14.745837142765662 107.7436931250688C18.301824727751693 107.7436931250688 36.72897694354549 130.6621377567296 40.284964528531525 130.6621377567296C43.84095211351755 130.6621377567296 56.81231027687882 109.3242755134592 60.36829786186485 109.3242755134592C63.92428544685089 109.3242755134592 76.89564361021215 103.7922371540928 80.45163119519817 103.7922371540928C84.00761878018422 103.7922371540928 96.97897694354548 100.631072377312 100.5349645285315 100.631072377312C104.09095211351755 100.631072377312 117.0623102768788 127.5009729799488 120.61829786186485 127.5009729799488C124.17428544685087 127.5009729799488 137.14564361021215 136.9844673102912 140.7016311951982 136.9844673102912C144.25761878018423 136.9844673102912 157.2289769435455 121.9689346205824 160.78496452853153 121.9689346205824C164.34095211351757 121.9689346205824 177.31231027687883 119.5980610379968 180.86829786186487 119.5980610379968C184.42428544685092 119.5980610379968 197.39564361021218 111.6951490960448 200.95163119519822 111.6951490960448C204.50761878018426 111.6951490960448 217.47897694354552 110.1145667076544 221.03496452853156 110.1145667076544C224.5909521135176 110.1145667076544 237.56231027687886 114.85631387282561 241.1182978618649 114.85631387282561C244.67428544685094 114.85631387282561 257.6456436102122 103.0019459598976 261.2016311951982 103.0019459598976C264.75761878018426 103.0019459598976 277.72897694354555 78.50291893984641 281.2849645285316 78.50291893984641C284.8409521135176 78.50291893984641 297.81231027687886 130.6621377567296 301.3682978618649 130.6621377567296C304.9242854468509 130.6621377567296 317.8956436102122 116.436896261216 321.4516311951982 116.436896261216C325.0076187801842 116.436896261216 337.9789769435455 109.3242755134592 341.53496452853153 109.3242755134592C345.0909521135175 109.3242755134592 358.0623102768788 122.75922581477761 361.61829786186485 122.75922581477761C365.17428544685083 122.75922581477761 378.1456436102121 124.339808203168 381.70163119519816 124.339808203168C385.25761878018415 124.339808203168 398.22897694354543 115.6466050670208 401.7849645285315 115.6466050670208C405.34095211351746 115.6466050670208 418.31231027687875 121.1786434263872 421.8682978618648 121.1786434263872C425.4242854468508 121.1786434263872 438.39564361021206 118.0174786496064 441.9516311951981 118.0174786496064C445.5076187801841 118.0174786496064 458.4789769435454 133.0330113393152 462.0349645285314 133.0330113393152C462.0349645285314 133.0330113393152 471.9583333333332 133.0330113393152 471.9583333333332 133.0330113393152 " fill="none" fill-opacity="1" stroke="#f7b924" stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskej3xyva4i)" pathTo="M 10.041666666666666 97.32374100719424C 17.070833333333333 97.32374100719424 23.09583333333333 64.51798561151078 30.125 64.51798561151078C 37.15416666666666 64.51798561151078 43.17916666666667 109.82117163412127 50.20833333333333 109.82117163412127C 57.23749999999999 109.82117163412127 63.262499999999996 67.64234326824254 70.29166666666666 67.64234326824254C 77.32083333333333 67.64234326824254 83.34583333333332 56.70709146968139 90.37499999999999 56.70709146968139C 97.40416666666665 56.70709146968139 103.42916666666665 50.45837615621788 110.45833333333331 50.45837615621788C 117.48749999999998 50.45837615621788 123.51249999999999 103.57245632065775 130.54166666666666 103.57245632065775C 137.57083333333333 103.57245632065775 143.59583333333333 122.3186022610483 150.625 122.3186022610483C 157.65416666666667 122.3186022610483 163.67916666666667 92.6372045220966 170.70833333333334 92.6372045220966C 177.7375 92.6372045220966 183.76250000000002 87.95066803699896 190.79166666666669 87.95066803699896C 197.82083333333335 87.95066803699896 203.84583333333336 72.32887975334017 210.87500000000003 72.32887975334017C 217.9041666666667 72.32887975334017 223.9291666666667 69.20452209660843 230.95833333333337 69.20452209660843C 237.98750000000004 69.20452209660843 244.01250000000005 78.5775950668037 251.0416666666667 78.5775950668037C 258.0708333333334 78.5775950668037 264.09583333333336 55.144912641315514 271.12500000000006 55.144912641315514C 278.1541666666667 55.144912641315514 284.17916666666673 6.717368961973278 291.20833333333337 6.717368961973278C 298.2375 6.717368961973278 304.26250000000005 109.82117163412127 311.2916666666667 109.82117163412127C 318.3208333333333 109.82117163412127 324.34583333333336 81.70195272353546 331.375 81.70195272353546C 338.40416666666664 81.70195272353546 344.4291666666667 67.64234326824254 351.4583333333333 67.64234326824254C 358.48749999999995 67.64234326824254 364.5125 94.19938335046248 371.54166666666663 94.19938335046248C 378.57083333333327 94.19938335046248 384.5958333333333 97.32374100719424 391.62499999999994 97.32374100719424C 398.6541666666666 97.32374100719424 404.6791666666666 80.13977389516957 411.70833333333326 80.13977389516957C 418.7374999999999 80.13977389516957 424.76249999999993 91.07502569373072 431.7916666666666 91.07502569373072C 438.8208333333332 91.07502569373072 444.84583333333325 84.82631038026722 451.8749999999999 84.82631038026722C 458.9041666666665 84.82631038026722 464.92916666666656 114.5077081192189 471.9583333333332 114.5077081192189" pathFrom="M -1 152L -1 152L 30.125 152L 50.20833333333333 152L 70.29166666666666 152L 90.37499999999999 152L 110.45833333333331 152L 130.54166666666666 152L 150.625 152L 170.70833333333334 152L 190.79166666666669 152L 210.87500000000003 152L 230.95833333333337 152L 251.0416666666667 152L 271.12500000000006 152L 291.20833333333337 152L 311.2916666666667 152L 331.375 152L 351.4583333333333 152L 371.54166666666663 152L 391.62499999999994 152L 411.70833333333326 152L 431.7916666666666 152L 451.8749999999999 152L 471.9583333333332 152"></path><path id="" d="M4.564193411156426 152L4.564193411156426 124.44715954404963C8.106379933654875 124.44715954404963 26.58281347750155 107.9154552704794 30.125 107.9154552704794C33.66718652249845 107.9154552704794 46.66614681083488 130.74495164826686 50.20833333333333 130.74495164826686C53.750519855831776 130.74495164826686 66.74948014416822 109.4899032965337 70.29166666666666 109.4899032965337C73.83385318916511 109.4899032965337 86.83281347750153 103.97933520534363 90.37499999999999 103.97933520534363C93.91718652249844 103.97933520534363 106.91614681083486 100.83043915323502 110.45833333333331 100.83043915323502C114.00051985583177 100.83043915323502 126.9994801441682 127.59605559615824 130.54166666666666 127.59605559615824C134.0838531891651 127.59605559615824 147.08281347750156 137.04274375248409 150.625 137.04274375248409C154.16718652249844 137.04274375248409 167.1661468108349 122.08548750496816 170.70833333333334 122.08548750496816C174.25051985583178 122.08548750496816 187.24948014416825 119.7238154658867 190.79166666666669 119.7238154658867C194.33385318916513 119.7238154658867 207.3328134775016 111.85157533561517 210.87500000000003 111.85157533561517C214.41718652249847 111.85157533561517 227.41614681083493 110.27712730956085 230.95833333333337 110.27712730956085C234.5005198558318 110.27712730956085 247.49948014416827 115.00047138772378 251.0416666666667 115.00047138772378C254.58385318916515 115.00047138772378 267.5828134775016 103.19211119231647 271.12500000000006 103.19211119231647C274.66718652249847 103.19211119231647 287.66614681083496 78.78816678847471 291.20833333333337 78.78816678847471C294.7505198558318 78.78816678847471 307.7494801441683 130.74495164826686 311.2916666666667 130.74495164826686C314.8338531891651 130.74495164826686 327.8328134775016 116.57491941377809 331.375 116.57491941377809C334.9171865224984 116.57491941377809 347.9161468108349 109.4899032965337 351.4583333333333 109.4899032965337C355.0005198558317 109.4899032965337 367.9994801441682 122.87271151799531 371.54166666666663 122.87271151799531C375.08385318916504 122.87271151799531 388.08281347750153 124.44715954404963 391.62499999999994 124.44715954404963C395.16718652249835 124.44715954404963 408.16614681083485 115.78769540075093 411.70833333333326 115.78769540075093C415.25051985583167 115.78769540075093 428.24948014416816 121.29826349194101 431.7916666666666 121.29826349194101C435.333853189165 121.29826349194101 448.3328134775015 118.14936743983239 451.8749999999999 118.14936743983239C455.4171865224983 118.14936743983239 468.4161468108348 133.1066236873483 471.9583333333332 133.1066236873483C471.9583333333332 133.1066236873483 471.9583333333332 133.1066236873483 471.9583333333332 152M237.3364506039116 133.1066236873483C237.3364506039116 133.1066236873483 237.3364506039116 133.1066236873483 237.3364506039116 133.1066236873483 " fill="url(#SvgjsLinearGradient1050)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskej3xyva4i)" pathTo="M 10.041666666666666 152L 10.041666666666666 97.32374100719424C 17.070833333333333 97.32374100719424 23.09583333333333 64.51798561151078 30.125 64.51798561151078C 37.15416666666666 64.51798561151078 43.17916666666667 109.82117163412127 50.20833333333333 109.82117163412127C 57.23749999999999 109.82117163412127 63.262499999999996 67.64234326824254 70.29166666666666 67.64234326824254C 77.32083333333333 67.64234326824254 83.34583333333332 56.70709146968139 90.37499999999999 56.70709146968139C 97.40416666666665 56.70709146968139 103.42916666666665 50.45837615621788 110.45833333333331 50.45837615621788C 117.48749999999998 50.45837615621788 123.51249999999999 103.57245632065775 130.54166666666666 103.57245632065775C 137.57083333333333 103.57245632065775 143.59583333333333 122.3186022610483 150.625 122.3186022610483C 157.65416666666667 122.3186022610483 163.67916666666667 92.6372045220966 170.70833333333334 92.6372045220966C 177.7375 92.6372045220966 183.76250000000002 87.95066803699896 190.79166666666669 87.95066803699896C 197.82083333333335 87.95066803699896 203.84583333333336 72.32887975334017 210.87500000000003 72.32887975334017C 217.9041666666667 72.32887975334017 223.9291666666667 69.20452209660843 230.95833333333337 69.20452209660843C 237.98750000000004 69.20452209660843 244.01250000000005 78.5775950668037 251.0416666666667 78.5775950668037C 258.0708333333334 78.5775950668037 264.09583333333336 55.144912641315514 271.12500000000006 55.144912641315514C 278.1541666666667 55.144912641315514 284.17916666666673 6.717368961973278 291.20833333333337 6.717368961973278C 298.2375 6.717368961973278 304.26250000000005 109.82117163412127 311.2916666666667 109.82117163412127C 318.3208333333333 109.82117163412127 324.34583333333336 81.70195272353546 331.375 81.70195272353546C 338.40416666666664 81.70195272353546 344.4291666666667 67.64234326824254 351.4583333333333 67.64234326824254C 358.48749999999995 67.64234326824254 364.5125 94.19938335046248 371.54166666666663 94.19938335046248C 378.57083333333327 94.19938335046248 384.5958333333333 97.32374100719424 391.62499999999994 97.32374100719424C 398.6541666666666 97.32374100719424 404.6791666666666 80.13977389516957 411.70833333333326 80.13977389516957C 418.7374999999999 80.13977389516957 424.76249999999993 91.07502569373072 431.7916666666666 91.07502569373072C 438.8208333333332 91.07502569373072 444.84583333333325 84.82631038026722 451.8749999999999 84.82631038026722C 458.9041666666665 84.82631038026722 464.92916666666656 114.5077081192189 471.9583333333332 114.5077081192189C 471.9583333333332 114.5077081192189 471.9583333333332 114.5077081192189 471.9583333333332 152M 471.9583333333332 114.5077081192189z" pathFrom="M -1 152L -1 152L 30.125 152L 50.20833333333333 152L 70.29166666666666 152L 90.37499999999999 152L 110.45833333333331 152L 130.54166666666666 152L 150.625 152L 170.70833333333334 152L 190.79166666666669 152L 210.87500000000003 152L 230.95833333333337 152L 251.0416666666667 152L 271.12500000000006 152L 291.20833333333337 152L 311.2916666666667 152L 331.375 152L 351.4583333333333 152L 371.54166666666663 152L 391.62499999999994 152L 411.70833333333326 152L 431.7916666666666 152L 451.8749999999999 152L 471.9583333333332 152"></path><g id="" class="apexcharts-series-markers-wrap hidden"><g class="apexcharts-series-markers"><circle id="" r="0" cx="0" cy="0" class="apexcharts-marker wydd0k7mq no-pointer-events" stroke="#ffffff" fill="#f7b924" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle></g></g><g id="" class="apexcharts-datalabels"></g></g></g><line id="" x1="0" y1="0" x2="482" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="" x1="0" y1="0" x2="482" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="" class="apexcharts-yaxis-annotations hidden"></g><g id="" class="apexcharts-xaxis-annotations hidden"></g><g id="" class="apexcharts-point-annotations hidden"></g></g><g id="" class="apexcharts-yaxis" rel="0" transform="translate(-35, 0)"><g id="" class="apexcharts-yaxis-texts-g"></g></g></svg><div class="apexcharts-legend"></div><div class="apexcharts-tooltip light"><div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker" style="background-color: rgb(247, 185, 36);"></span><div class="apexcharts-tooltip-text"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div></div></div>
                                                <div class="resize-triggers"><div class="expand-trigger"><div style="width: 483px; height: 153px;"></div></div><div class="contract-trigger"></div></div></div>
                                            </div>
                                        </div>
                                    </div></div></div></div></div><button class="slick-next slick-arrow" aria-label="Next" type="button" style="">Next</button><ul class="slick-dots" style="" role="tablist"><li class="slick-active" role="presentation"><button type="button" role="tab" id="slick-slide-control00" aria-controls="slick-slide00" aria-label="1 of 3" tabindex="0" aria-selected="true">1</button></li><li role="presentation"><button type="button" role="tab" id="slick-slide-control01" aria-controls="slick-slide01" aria-label="2 of 3" tabindex="-1">2</button></li><li role="presentation"><button type="button" role="tab" id="slick-slide-control02" aria-controls="slick-slide02" aria-label="3 of 3" tabindex="-1">3</button></li></ul></div>
                            </div>
                            <h6 class="text-muted text-uppercase font-size-md opacity-5 pl-3 pr-3 pb-1 font-weight-normal">
                                Sales Progress</h6>
                            <ul class="list-group list-group-flush">
                                <li class="p-3 bg-transparent list-group-item">
                                    <div class="widget-content p-0">
                                        <div class="widget-content-outer">
                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-left">
                                                    <div class="widget-heading">Total Orders</div>
                                                    <div class="widget-subheading">Last year expenses</div>
                                                </div>
                                                <div class="widget-content-right">
                                                    <div class="widget-numbers text-success">
                                                        <small>$</small>
                                                        1896
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="widget-progress-wrapper">
                                                <div class="progress-bar-sm progress-bar-animated-alt progress">
                                                    <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100" style="width: 43%;">
                                                    </div>
                                                </div>
                                                <div class="progress-sub-label">
                                                    <div class="sub-label-left">YoY Growth</div>
                                                    <div class="sub-label-right">100%</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-6">
                    <div class="card-hover-shadow-2x mb-3 card">
                        <div class="card-header-tab card-header">
                            <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                                <i class="header-icon lnr-lighter icon-gradient bg-amy-crisp"></i>
                                Timeline Example
                            </div>
                            <div class="btn-actions-pane-right text-capitalize actions-icon-btn">
                                <div class="btn-group dropdown">
                                    <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-icon btn-icon-only btn btn-link">
                                        <i class="pe-7s-menu btn-icon-wrapper"></i>
                                    </button>
                                    <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-right rm-pointers dropdown-menu-shadow dropdown-menu-hover-link dropdown-menu">
                                        <h6 tabindex="-1" class="dropdown-header">Header</h6>
                                        <button type="button" tabindex="0" class="dropdown-item">
                                            <i class="dropdown-icon lnr-inbox"> </i><span>Menus</span>
                                        </button>
                                        <button type="button" tabindex="0" class="dropdown-item">
                                            <i class="dropdown-icon lnr-file-empty"> </i><span>Settings</span>
                                        </button>
                                        <button type="button" tabindex="0" class="dropdown-item">
                                            <i class="dropdown-icon lnr-book"> </i><span>Actions</span>
                                        </button>
                                        <div tabindex="-1" class="dropdown-divider"></div>
                                        <div class="p-3 text-right">
                                            <button class="mr-2 btn-shadow btn-sm btn btn-link">View Details</button>
                                            <button class="mr-2 btn-shadow btn-sm btn btn-primary">Action</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="scroll-area-lg">
                            <div class="scrollbar-container ps ps--active-y">
                                <div class="p-4">
                                    <div class="vertical-time-simple vertical-without-time vertical-timeline vertical-timeline--animate vertical-timeline--one-column">
                                        <div class="vertical-timeline-item dot-danger vertical-timeline-element">
                                            <div>
                                                <span class="vertical-timeline-element-icon bounce-in"></span>
                                                <div class="vertical-timeline-element-content bounce-in">
                                                    <h4 class="timeline-title">All Hands Meeting</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="vertical-timeline-item dot-warning vertical-timeline-element">
                                            <div>
                                                <span class="vertical-timeline-element-icon bounce-in"></span>
                                                <div class="vertical-timeline-element-content bounce-in">
                                                    <p>Yet another one, at <span class="text-success">15:00 PM</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="vertical-timeline-item dot-success vertical-timeline-element">
                                            <div>
                                                <span class="vertical-timeline-element-icon bounce-in"></span>
                                                <div class="vertical-timeline-element-content bounce-in">
                                                    <h4 class="timeline-title">Build the production release
                                                        <div class="badge badge-danger ml-2">NEW</div>
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="vertical-timeline-item dot-primary vertical-timeline-element">
                                            <div>
                                                <span class="vertical-timeline-element-icon bounce-in"></span>
                                                <div class="vertical-timeline-element-content bounce-in">
                                                    <h4 class="timeline-title">
                                                        Something not important
                                                        <div class="avatar-wrapper mt-2 avatar-wrapper-overlap">
                                                            <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                <div class="avatar-icon">
                                                                    <img src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMfaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjYtYzEzOCA3OS4xNTk4MjQsIDIwMTYvMDkvMTQtMDE6MDk6MDEgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkQ3MDQwMTFBRUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkQ3MDQwMTE5RUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE3IE1hY2ludG9zaCI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSI0RjBENjMzNUYyM0RFMUYwNjM4MTY4RTUyODFERkI3QSIgc3RSZWY6ZG9jdW1lbnRJRD0iNEYwRDYzMzVGMjNERTFGMDYzODE2OEU1MjgxREZCN0EiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYFBgkLCAYGCAsMCgoLCgoMEAwM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" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                <div class="avatar-icon">
                                                                    <img src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMfaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjYtYzEzOCA3OS4xNTk4MjQsIDIwMTYvMDkvMTQtMDE6MDk6MDEgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkQ3MDQwMTE2RUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkQ3MDQwMTE1RUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE3IE1hY2ludG9zaCI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJENDFFMzk5RUI1NDJFOUFCNzIzNzUzMDQ3QkJEMkQ3OSIgc3RSZWY6ZG9jdW1lbnRJRD0iRDQxRTM5OUVCNTQyRTlBQjcyMzc1MzA0N0JCRDJENzkiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYFBgkLCAYGCAsMCgoLCgoMEAwM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" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                <div class="avatar-icon">
                                                                    <img src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMxaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjYtYzEzOCA3OS4xNTk4MjQsIDIwMTYvMDkvMTQtMDE6MDk6MDEgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkQ3MDQwMTEyRUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkQ3MDQwMTExRUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE3IChNYWNpbnRvc2gpIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6RDgzQTU0RjlFQTY4MTFFODhGMzQ4NDBBMjJGNzJDODgiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6RDgzQTU0RkFFQTY4MTFFODhGMzQ4NDBBMjJGNzJDODgiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYF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" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                <div class="avatar-icon">
                                                                    <img src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMfaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjYtYzEzOCA3OS4xNTk4MjQsIDIwMTYvMDkvMTQtMDE6MDk6MDEgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkJFMEYwODFCRUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkJFMEYwODFBRUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE3IE1hY2ludG9zaCI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSIxQUMwRDYxNUU3RTUxRTAwNThENTY1NENGQTYxNTZCQyIgc3RSZWY6ZG9jdW1lbnRJRD0iMUFDMEQ2MTVFN0U1MUUwMDU4RDU2NTRDRkE2MTU2QkMiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYFBgkLCAYGCAsMCgoLCgoMEAwM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" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                <div class="avatar-icon">
                                                                    <img src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMfaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjYtYzEzOCA3OS4xNTk4MjQsIDIwMTYvMDkvMTQtMDE6MDk6MDEgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkJFMEYwODE3RUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkJFMEYwODE2RUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE3IE1hY2ludG9zaCI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSI1NDBBNzQ1MzA5RTU2OURFMUM5Qjk3QUIwRTVDNzYyRCIgc3RSZWY6ZG9jdW1lbnRJRD0iNTQwQTc0NTMwOUU1NjlERTFDOUI5N0FCMEU1Qzc2MkQiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYFBgkLCAYGCAsMCgoLCgoMEAwMDAwMDBAMDg8QDw4MExMUFBMTHBsbGxwfHx8fHx8fHx8fAQcHBw0MDRgQEBgaFREVGh8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx//wAARCABAAEADAREAAhEBAxEB/8QAiwABAAIDAQEAAAAAAAAAAAAABwMGBAUIAgEBAAIDAQEAAAAAAAAAAAAAAAIDAAQFAQYQAAIBAwMCBQIEAgsAAAAAAAECAxEEBQAhEhMGMUFRFAciMmFCIxVSM3GBkaHhYnKCQyQWEQACAgICAgEEAwEAAAAAAAAAARECIQMSBDEiE0FRMkJhYtIF/9oADAMBAAIRAxEAPwDp7RgnxiQNQh5klRELuwRFBZ3YgBQNySTsBqEKTN8x9gxZuTDTZWKCVeIjvGZWtpSxoVSRC1GB/ipqA5gxj85fHUeTisP3FWWRihuyyiMEGhqKk0/HQfIm4GvU1WT1f/J+MyceRssJyn6EYT9woej1JKghP4uK7/2a78tUxb12ayDjdl41r2VmjN7Ox5S397IWkr50FfDS3s5MOlK1RYYfZWlskVvGi8aKekvHw89RNBRJtO3PkrumKy4XuTt7iVW/TeXizOh3HIjjvqc7DL6az68iwxfKV+yAtFbSerRv5f0b649zX0FvVjyCPyv875/Ny3FjjrhrDEDnbyY5UV1uEB4l5pj48z4IuwXzrplLOxz44yDfubiWRpAhKg1bitFHoFHhTRkPLNLGzzSxsGfYhaEAetPHQ/Qn1NhD3pd20ga0nuYYkURxhJStdqBnXw0r458jvlU4Fz40y375FPDe3hub+NFkjlUUqh2YSU2qp8PUaXwyL2JJyi+QWD2tt0pZ2uCTVXYAcfwFNNSJa8hVaZC1kSSV45F6KryCspUilKgmm+3hpNIZoPmnBl2VxbXMwkluDGaHphUJrtUjY+Jpt+OosuJJdNKYC1rCfK9xrj6CFA31py5lN9lkYVBfehp56fKqpKUO1oOiez/jWztrOJjaJJIVp0mUGgKjY1GqN9ln4NTXopVSyHuvsTFdd3uLCJeYHUCrx2p+GgpsvW0NjL6aWrKQB93YCLCZL3NqvK3ikB6bbgiu4qfEa0k+SMfZThYzPiibFv3pbe8eS3NwzC0uIp/bGNt3UMx+llYCnDz0SFP7nRs05ZCsmwG9BtTRQL5BTaW2ZjleI2iHHczJJEyoyV402YUNdVFPg1G6+Z9iHIR1hV0hGPdWPTKBvqNK6F4+g3DxJP8AF/bnusld5W1i9xc06Ytn3PVROb708/Kml9i7aSR3r60nyFbB/KFq19bQwWaSFlUyI/UtbmJX+12hlDK6tTYo9fw0u861ygKjW1ukmN393DBPkJomE7XCgFra2iM0gWleTAU4r/mOq022XwXFw1UhsDfkO8gupLaztUcySL9kigSFpTxWgVmG5PrrS68ryZPah+Cw/DHaFnFjb+5yuJnXKW8gSZL+IiBYxuskayClQ3ifI6tYKGfCEtpBOyxqwkZvp4oag/16JNW8AXpajhoIvewyYx4kkdZmkVv1FIj4jx3B1TxBrOZTgmg9+FjRp4umdpDyJAB9NLS/ka/tBdfivIQ2OTe2ujEttI7SJMjtUMyhGHHwFeIPLx0rbhSx2hS2hGi/8quanSySOWQMvusk6ngkku4j8CORG7HbbSHsTwvxGV1Rlr2KQ2Gx/dOW7wtlvYpZHeOR2jfqB4Ubg1KHienItKf46KlrVzUG9K3fFlQxPY2Bm74xmHsoetb45myOZuD/AMhi/lK4Gw5SeQ1f6zd8sze7Ra1xQg9xe0v7uCCW8MCW/LnxrRwRTgT+HjqxdTgpatjplGyGJx/b2PgythG11bsrCYPVpBIB9LgeAB1xLgsDL7Htc2/ID4pIxbvcSWKtIZCsaJzEfAipqPWuq+PJd9piSW0uYpF9r+2tFGazO4LinFSa1I8NREbazJau3MHCvbz588UAUFbfkSWUuB9p/uOubdE62zmvttbVUQcJxx2Kilsnnjxs8bNIYYzOgkY1Z2FDSv5qnVHTD8mwuLX9g8v+5YrGTN3cEjWuMiUi3/662xnmb7qKD4V8x465bUm1Au+3hLNV8Sd6ds4w3lzm80LPIZl3NxVGISJDxiRpAGCV3ah1t6dfGp5vsbXe0suvdPePZWPW2kiyNvdxspdVtmE7t6Gibj/dTROn2F0ub3t/PZLufsq0mx2Mmmhv53jj6fFpCsbFWYoPtCkb11L19cHddlz9g5kynbhwwk95CJIECXdzyJ/VK1UKB9xOlqGsDYatLKDf975BUktLSSR+R/nyfmVRTiE8qn11K6ozYPZ2E8UQr2vanssTYVn6lxGsbzoTVnkdQWJ/0k0A8tZtuy7Nr9TVr1FVJ/sbJsT3faog7dyLWok+o2coJhr57jcDQLXVhWtevgPsp2L373TlbmS4mbKC1U9b2lRGCPymRwqRj1b7vQat6taWKoodjbK5XZFc/Anc9rY3M/Ey+yp7sW6coQDQ/oENzlp4Gi+O2r8Rj9jM5yVpcHDjpjbTKDMwEkRZeAZXBoSD4ny1zZSyHanVnQ3wd3NiYvje7t5n9uuKkupr+Zf0h0WdWiDyj7Vbka08hTXaanZIDZdKwXdn/GF/3TnZWkkWHBWxpE0gAa5ukgEsscca1q0aSL9R2WvmdtL0a0lIzt7m3CETuP457Nv45MZaxLFd9v4yGUR26dW9E33sYI497hwycG5VWpHoa3XetlFkZ6ratpqw+y/ynmcbLb2i4+SW/dHN1Hk4oVljlZ6QIotePJiu7Ky1rrMv0tbco2df/R2pZ42FrtD4+7myUVled7uRBNELtsWZzAxU06du9rF0wnGo6nJ23+nTKaqVWF7FfZ2dl3l+ptsXhv23uH9vx8clrjbC4abK8XZLKBpFE0TxBwvP6NvpHFK+b6tKztX2KLxbBAl3fXV5ce4vZcXeS3DTWTui9KPH8mMht4lWqFlXj1XJZq/TStdNrqommly/0A72zPqGXyv2nBme4Pd4ZvcZG6mihltrZqr1GqOIVqLEo41JLUrt56ZwmufyCV8/1I/hDKxY/vHIdpMEk9/eWjDrLzW4tbdZY54mUDj+YPvtsdVa1bmB+xrDZ//Z" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                <div class="avatar-icon">
                                                                    <img src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMfaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjYtYzEzOCA3OS4xNTk4MjQsIDIwMTYvMDkvMTQtMDE6MDk6MDEgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkJFMEYwODEzRUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkJFMEYwODEyRUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE3IE1hY2ludG9zaCI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSI5QTgyNDYyOTc1Rjk5RThBQTc3MDRCNDVGMkI4NDgwNyIgc3RSZWY6ZG9jdW1lbnRJRD0iOUE4MjQ2Mjk3NUY5OUU4QUE3NzA0QjQ1RjJCODQ4MDciLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYFBgkLCAYGCAsMCgoLCgoMEAwM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" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                <div class="avatar-icon">
                                                                    <img src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMfaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjYtYzEzOCA3OS4xNTk4MjQsIDIwMTYvMDkvMTQtMDE6MDk6MDEgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkExQjJCNTVFRUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkExQjJCNTVERUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE3IE1hY2ludG9zaCI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJGQTNDMzBENTkxNUNENDY3Qjg0REZERUVBM0VDRkYwMyIgc3RSZWY6ZG9jdW1lbnRJRD0iRkEzQzMwRDU5MTVDRDQ2N0I4NERGREVFQTNFQ0ZGMDMiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYFBgkLCAYGCAsMCgoLCgoMEAwM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" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                <div class="avatar-icon">
                                                                    <img src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMfaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjYtYzEzOCA3OS4xNTk4MjQsIDIwMTYvMDkvMTQtMDE6MDk6MDEgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkExQjJCNTVBRUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkExQjJCNTU5RUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE3IE1hY2ludG9zaCI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSI0OEUzM0U0MzQ4NzdGOTU0QzlCM0Y3Q0VBNTBGRDM1NiIgc3RSZWY6ZG9jdW1lbnRJRD0iNDhFMzNFNDM0ODc3Rjk1NEM5QjNGN0NFQTUwRkQzNTYiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYFBgkLCAYGCAsMCgoLCgoMEAwM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" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="avatar-icon-wrapper avatar-icon-sm avatar-icon-add">
                                                                <div class="avatar-icon"><i>+</i></div>
                                                            </div>
                                                        </div>
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="vertical-timeline-item dot-info vertical-timeline-element">
                                            <div>
                                                <span class="vertical-timeline-element-icon bounce-in"></span>
                                                <div class="vertical-timeline-element-content bounce-in">
                                                    <h4 class="timeline-title">This dot has an info state</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="vertical-timeline-item dot-dark vertical-timeline-element">
                                            <div>
                                                <span class="vertical-timeline-element-icon bounce-in"></span>
                                                <div class="vertical-timeline-element-content bounce-in">
                                                    <h4 class="timeline-title">This dot has a dark state</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="vertical-timeline-item dot-danger vertical-timeline-element">
                                            <div>
                                                <span class="vertical-timeline-element-icon bounce-in"></span>
                                                <div class="vertical-timeline-element-content bounce-in">
                                                    <h4 class="timeline-title">All Hands Meeting</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="vertical-timeline-item dot-warning vertical-timeline-element">
                                            <div>
                                                <span class="vertical-timeline-element-icon bounce-in"></span>
                                                <div class="vertical-timeline-element-content bounce-in">
                                                    <p>Yet another one, at <span class="text-success">15:00 PM</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="vertical-timeline-item dot-success vertical-timeline-element">
                                            <div>
                                                <span class="vertical-timeline-element-icon bounce-in"></span>
                                                <div class="vertical-timeline-element-content bounce-in">
                                                    <h4 class="timeline-title">Build the production release
                                                        <div class="badge badge-danger ml-2">NEW</div>
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="vertical-timeline-item dot-primary vertical-timeline-element">
                                            <div>
                                                <span class="vertical-timeline-element-icon bounce-in"></span>
                                                <div class="vertical-timeline-element-content bounce-in">
                                                    <h4 class="timeline-title">
                                                        Something not important
                                                        <div class="avatar-wrapper mt-2 avatar-wrapper-overlap">
                                                            <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                <div class="avatar-icon">
                                                                    <img src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMfaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjYtYzEzOCA3OS4xNTk4MjQsIDIwMTYvMDkvMTQtMDE6MDk6MDEgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkQ3MDQwMTFBRUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkQ3MDQwMTE5RUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE3IE1hY2ludG9zaCI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSI0RjBENjMzNUYyM0RFMUYwNjM4MTY4RTUyODFERkI3QSIgc3RSZWY6ZG9jdW1lbnRJRD0iNEYwRDYzMzVGMjNERTFGMDYzODE2OEU1MjgxREZCN0EiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYFBgkLCAYGCAsMCgoLCgoMEAwM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" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                <div class="avatar-icon">
                                                                    <img src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMfaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjYtYzEzOCA3OS4xNTk4MjQsIDIwMTYvMDkvMTQtMDE6MDk6MDEgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkQ3MDQwMTE2RUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkQ3MDQwMTE1RUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE3IE1hY2ludG9zaCI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJENDFFMzk5RUI1NDJFOUFCNzIzNzUzMDQ3QkJEMkQ3OSIgc3RSZWY6ZG9jdW1lbnRJRD0iRDQxRTM5OUVCNTQyRTlBQjcyMzc1MzA0N0JCRDJENzkiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYFBgkLCAYGCAsMCgoLCgoMEAwM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" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                <div class="avatar-icon">
                                                                    <img src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMxaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjYtYzEzOCA3OS4xNTk4MjQsIDIwMTYvMDkvMTQtMDE6MDk6MDEgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkQ3MDQwMTEyRUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkQ3MDQwMTExRUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE3IChNYWNpbnRvc2gpIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6RDgzQTU0RjlFQTY4MTFFODhGMzQ4NDBBMjJGNzJDODgiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6RDgzQTU0RkFFQTY4MTFFODhGMzQ4NDBBMjJGNzJDODgiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYF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" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                <div class="avatar-icon">
                                                                    <img src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMfaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjYtYzEzOCA3OS4xNTk4MjQsIDIwMTYvMDkvMTQtMDE6MDk6MDEgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkJFMEYwODFCRUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkJFMEYwODFBRUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE3IE1hY2ludG9zaCI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSIxQUMwRDYxNUU3RTUxRTAwNThENTY1NENGQTYxNTZCQyIgc3RSZWY6ZG9jdW1lbnRJRD0iMUFDMEQ2MTVFN0U1MUUwMDU4RDU2NTRDRkE2MTU2QkMiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYFBgkLCAYGCAsMCgoLCgoMEAwM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" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                <div class="avatar-icon">
                                                                    <img src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMfaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjYtYzEzOCA3OS4xNTk4MjQsIDIwMTYvMDkvMTQtMDE6MDk6MDEgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkJFMEYwODE3RUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkJFMEYwODE2RUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE3IE1hY2ludG9zaCI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSI1NDBBNzQ1MzA5RTU2OURFMUM5Qjk3QUIwRTVDNzYyRCIgc3RSZWY6ZG9jdW1lbnRJRD0iNTQwQTc0NTMwOUU1NjlERTFDOUI5N0FCMEU1Qzc2MkQiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYFBgkLCAYGCAsMCgoLCgoMEAwM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" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                <div class="avatar-icon">
                                                                    <img src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMfaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjYtYzEzOCA3OS4xNTk4MjQsIDIwMTYvMDkvMTQtMDE6MDk6MDEgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkJFMEYwODEzRUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkJFMEYwODEyRUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE3IE1hY2ludG9zaCI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSI5QTgyNDYyOTc1Rjk5RThBQTc3MDRCNDVGMkI4NDgwNyIgc3RSZWY6ZG9jdW1lbnRJRD0iOUE4MjQ2Mjk3NUY5OUU4QUE3NzA0QjQ1RjJCODQ4MDciLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYFBgkLCAYGCAsMCgoLCgoMEAwM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" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                <div class="avatar-icon">
                                                                    <img src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMfaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjYtYzEzOCA3OS4xNTk4MjQsIDIwMTYvMDkvMTQtMDE6MDk6MDEgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkExQjJCNTVFRUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkExQjJCNTVERUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE3IE1hY2ludG9zaCI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJGQTNDMzBENTkxNUNENDY3Qjg0REZERUVBM0VDRkYwMyIgc3RSZWY6ZG9jdW1lbnRJRD0iRkEzQzMwRDU5MTVDRDQ2N0I4NERGREVFQTNFQ0ZGMDMiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYFBgkLCAYGCAsMCgoLCgoMEAwM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" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                <div class="avatar-icon">
                                                                    <img src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMfaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjYtYzEzOCA3OS4xNTk4MjQsIDIwMTYvMDkvMTQtMDE6MDk6MDEgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkExQjJCNTVBRUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkExQjJCNTU5RUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE3IE1hY2ludG9zaCI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSI0OEUzM0U0MzQ4NzdGOTU0QzlCM0Y3Q0VBNTBGRDM1NiIgc3RSZWY6ZG9jdW1lbnRJRD0iNDhFMzNFNDM0ODc3Rjk1NEM5QjNGN0NFQTUwRkQzNTYiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYFBgkLCAYGCAsMCgoLCgoMEAwM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" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="avatar-icon-wrapper avatar-icon-sm avatar-icon-add">
                                                                <div class="avatar-icon"><i>+</i></div>
                                                            </div>
                                                        </div>
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="vertical-timeline-item dot-info vertical-timeline-element">
                                            <div>
                                                <span class="vertical-timeline-element-icon bounce-in"></span>
                                                <div class="vertical-timeline-element-content bounce-in">
                                                    <h4 class="timeline-title">This dot has an info state</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="vertical-timeline-item dot-dark vertical-timeline-element">
                                            <div>
                                                <span class="vertical-timeline-element-icon bounce-in"></span>
                                                <div class="vertical-timeline-element-content bounce-in">
                                                    <h4 class="timeline-title">This dot has a dark state</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="vertical-timeline-item dot-danger vertical-timeline-element">
                                            <div>
                                                <span class="vertical-timeline-element-icon bounce-in"></span>
                                                <div class="vertical-timeline-element-content bounce-in">
                                                    <h4 class="timeline-title">All Hands Meeting</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="vertical-timeline-item dot-warning vertical-timeline-element">
                                            <div>
                                                <span class="vertical-timeline-element-icon bounce-in"></span>
                                                <div class="vertical-timeline-element-content bounce-in">
                                                    <p>Yet another one, at <span class="text-success">15:00 PM</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="vertical-timeline-item dot-success vertical-timeline-element">
                                            <div>
                                                <span class="vertical-timeline-element-icon bounce-in"></span>
                                                <div class="vertical-timeline-element-content bounce-in">
                                                    <h4 class="timeline-title">Build the production release
                                                        <div class="badge badge-danger ml-2">NEW</div>
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="vertical-timeline-item dot-primary vertical-timeline-element">
                                            <div>
                                                <span class="vertical-timeline-element-icon bounce-in"></span>
                                                <div class="vertical-timeline-element-content bounce-in">
                                                    <h4 class="timeline-title">
                                                        Something not important
                                                        <div class="avatar-wrapper mt-2 avatar-wrapper-overlap">
                                                            <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                <div class="avatar-icon">
                                                                    <img src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMfaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjYtYzEzOCA3OS4xNTk4MjQsIDIwMTYvMDkvMTQtMDE6MDk6MDEgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkQ3MDQwMTFBRUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkQ3MDQwMTE5RUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE3IE1hY2ludG9zaCI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSI0RjBENjMzNUYyM0RFMUYwNjM4MTY4RTUyODFERkI3QSIgc3RSZWY6ZG9jdW1lbnRJRD0iNEYwRDYzMzVGMjNERTFGMDYzODE2OEU1MjgxREZCN0EiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYFBgkLCAYGCAsMCgoLCgoMEAwM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" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                <div class="avatar-icon">
                                                                    <img src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMfaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjYtYzEzOCA3OS4xNTk4MjQsIDIwMTYvMDkvMTQtMDE6MDk6MDEgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkQ3MDQwMTE2RUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkQ3MDQwMTE1RUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE3IE1hY2ludG9zaCI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJENDFFMzk5RUI1NDJFOUFCNzIzNzUzMDQ3QkJEMkQ3OSIgc3RSZWY6ZG9jdW1lbnRJRD0iRDQxRTM5OUVCNTQyRTlBQjcyMzc1MzA0N0JCRDJENzkiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYFBgkLCAYGCAsMCgoLCgoMEAwM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" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                <div class="avatar-icon">
                                                                    <img src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMxaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjYtYzEzOCA3OS4xNTk4MjQsIDIwMTYvMDkvMTQtMDE6MDk6MDEgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkQ3MDQwMTEyRUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkQ3MDQwMTExRUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE3IChNYWNpbnRvc2gpIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6RDgzQTU0RjlFQTY4MTFFODhGMzQ4NDBBMjJGNzJDODgiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6RDgzQTU0RkFFQTY4MTFFODhGMzQ4NDBBMjJGNzJDODgiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYFBgkLCAYGCAsMCgoLCgoMEAwMDAwMDBAMDg8QDw4MExMUFBMTHBsbGxwfHx8fHx8fHx8fAQcHBw0MDRgQEBgaFREVGh8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx8fHx//wAARCABAAEADAREAAhEBAxEB/8QAhwAAAgMBAQAAAAAAAAAAAAAABAYDBQcCAQEAAgMBAQAAAAAAAAAAAAAAAAUBAgMEBhAAAgECBAUDAwIHAQAAAAAAAQIDEQQAIRIFMVEiEwZBYXEyQgeBFJGhsXIjMxZiEQACAgIBAgUEAwAAAAAAAAAAARECAwQhMRJRgTITBUFhcSKhQhT/2gAMAwEAAhEDEQA/AE9BdGVhIiLGq17gzzxcyZNbW6vMM6kClfY4go7A+/73tOxWhE7d66JolpEyiUkitWr9K+5xMk1q2Jkv5D3pp+7bW8EESj/WQ0hy9SxI/piJNVRDBsPnVrdukG6Qi3nchY7hT/iJPAMDmtfQ8MEkOsDNd2UUsOl1oY6vmMwVzBxUoiOe7tuyjujgsF+01qcsXBJnM8GuMo4pXLPjX0xMEolEZDUI6SM8EAB71u8Ox7S9+Y+4QdEMYyq7/TnyHHEMFSTI44ZJ5GllJZ3JaSRjUtXMmpzOeKmwSI7ZYqDNq9XxgA8lmgYaftoRT0pgkINF/HHkp3BTt1yddzbQgJI2eqNcs/cYtVmdlA43UGuPUatp+n9MWggAjt17jFs8qivPADI2ljRB3K1JCggEip4YgCm/ItksvjDShgBbyxOaHJgx0EfzrgaJqyh8W8fguIIp5U1ySmi14AcgMKdvYacIcaevVqWaBB+PtumiTuWYISjBgKf0wt/1ZPozueHH4AO/eI2kMZAtUXLpooFKemJx7N0+WTbDRrohM8Sji2v8iwQLVILlJYtHAVZCyj+K49BrX7qpsQ7eNVs0jWjQppk6aCtTwpjpOQCa2BAkjNVY8efxiIABhK98BkIovSK5McBYD8tto7jxnc1VDVoKhBSmtSGBz5UxW7hSWpTuskiv8T1W0NrGtvPNEoV5pYYmmKBhUVC88I9nF7lnyh5hyqlUoZrmzT2O4Wuq0ugwj6XSSN4pFPJkcKwxyvC68SaLInyLflU0s0sllYQXN/dRjqdIlS3U8jNIVB+Bi1dddW1APPHCTM2gtp/+02i7aDtyo796OTmOmmX92WGmtftULnk4Nqnfy+OJNIuHjYiOn1kKNXCmGbFaI3t0RQIejSaaT9NMAQVNrBFJcagWqoNASfTLIHEIDu4tm/YXSue5qiYBGNFqBkD84rk9LNMT/dfkl8Q2Rd22yyX9w8IgUrLDE7RiTLT1FM+n7cefvZ1u2PFWajRaWabNuVjttrK7MtvKZDI7TPTT0anfqY1FanGWS/c5NceNJQBxeJ7Tv1ql9MqzXQR4JCzSVjJ+qgUhc+PMYvTLatYRW+NTLFa9sXi8ps7e2k1iyi0SlhVmXUB1H241x1aXLXH9jm2oVXzH6l3JDM+iPurrJqwAHPKmHYlJngnEx6hoU1NBmajAQmL24X72s6XKJqDjtvyA41xUsELeSaAQmoihNPT14HEkHHiO4XVgbn9tV5o5JkMNKtkO4lB7g4RblIyeA81bzjkP8Y8p8gm3aXdbTa0ug6mK4ErnuRn0BI4f204YhYlX7mnutrw8yNd88m27dhaSWCLdXzh5UhJQIjGlSCPficUthUTMFvdfHEgnjk37zyDc7oP3FiAgaX0Z2csR+igYZ6FGqiv5C6dkhkvoI44RdqmkQsHk0jNlXiMdwvR1DdR3MfejRirDIDjgASZryGWEoWozZBGBBryxBcavH/A9/wBxeAzr+zjmUdcg6yo+7R9uXPFoKuwn7hYb1t+/7xEjst3YzPb6E6dSR/QfkqePvhVsXTtFhrr42qTUuvG96u463+0XUcUs6gXCu0qFWXI5xEH9DjCXRwzrpdWXRP8AJRee7rfBCFull3S/ko6xF6KqZli7Es3uTjTCu6026Iy2MjSSX8FrsE1ttm229pErBWAlWZh/vL5tKCONcNqpJcCa0tyxvtL22nTtM61IoQ2X8jiYKQeW9o0aMoXQkblo6e/EfGIAufDPEdv2ySKRYzNdFdbXc4BkFftQfSg+M/fGiRDtI+WsYSYMoyQUrzJ4k4CEJv5K8PIvP+psU1wzosW6IPsdelJj/wCSOlj8YTfJ4H615jf4/OvQ/IzHcfG7SaQ3EYktpyeqSFimo8KsBkfnC3HtWXHVDG2CrclBd7ElpqMSvLNKKSzuSx08qnnjppsO3UythSXA/eJbUm4/j7bnZP8ALaTzwRv6hVckAH9cOddzRMSbK7cjB7ja9zgcOUEtuMmIFWGNjKTs7qYljMcanW3bOolQMuOAIP/Z" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                <div class="avatar-icon">
                                                                    <img src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMfaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjYtYzEzOCA3OS4xNTk4MjQsIDIwMTYvMDkvMTQtMDE6MDk6MDEgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkJFMEYwODFCRUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkJFMEYwODFBRUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE3IE1hY2ludG9zaCI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSIxQUMwRDYxNUU3RTUxRTAwNThENTY1NENGQTYxNTZCQyIgc3RSZWY6ZG9jdW1lbnRJRD0iMUFDMEQ2MTVFN0U1MUUwMDU4RDU2NTRDRkE2MTU2QkMiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYFBgkLCAYGCAsMCgoLCgoMEAwM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" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                <div class="avatar-icon">
                                                                    <img src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMfaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjYtYzEzOCA3OS4xNTk4MjQsIDIwMTYvMDkvMTQtMDE6MDk6MDEgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkJFMEYwODE3RUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkJFMEYwODE2RUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE3IE1hY2ludG9zaCI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSI1NDBBNzQ1MzA5RTU2OURFMUM5Qjk3QUIwRTVDNzYyRCIgc3RSZWY6ZG9jdW1lbnRJRD0iNTQwQTc0NTMwOUU1NjlERTFDOUI5N0FCMEU1Qzc2MkQiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYFBgkLCAYGCAsMCgoLCgoMEAwM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" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                <div class="avatar-icon">
                                                                    <img src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMfaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjYtYzEzOCA3OS4xNTk4MjQsIDIwMTYvMDkvMTQtMDE6MDk6MDEgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkJFMEYwODEzRUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkJFMEYwODEyRUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE3IE1hY2ludG9zaCI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSI5QTgyNDYyOTc1Rjk5RThBQTc3MDRCNDVGMkI4NDgwNyIgc3RSZWY6ZG9jdW1lbnRJRD0iOUE4MjQ2Mjk3NUY5OUU4QUE3NzA0QjQ1RjJCODQ4MDciLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYFBgkLCAYGCAsMCgoLCgoMEAwM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" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                <div class="avatar-icon">
                                                                    <img src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMfaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjYtYzEzOCA3OS4xNTk4MjQsIDIwMTYvMDkvMTQtMDE6MDk6MDEgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkExQjJCNTVFRUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkExQjJCNTVERUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE3IE1hY2ludG9zaCI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJGQTNDMzBENTkxNUNENDY3Qjg0REZERUVBM0VDRkYwMyIgc3RSZWY6ZG9jdW1lbnRJRD0iRkEzQzMwRDU5MTVDRDQ2N0I4NERGREVFQTNFQ0ZGMDMiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYFBgkLCAYGCAsMCgoLCgoMEAwM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" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                <div class="avatar-icon">
                                                                    <img src="data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QMfaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjYtYzEzOCA3OS4xNTk4MjQsIDIwMTYvMDkvMTQtMDE6MDk6MDEgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkExQjJCNTVBRUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkExQjJCNTU5RUNGMDExRThBNjRDQzQyMTE5Mjk5QTQ0IiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE3IE1hY2ludG9zaCI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSI0OEUzM0U0MzQ4NzdGOTU0QzlCM0Y3Q0VBNTBGRDM1NiIgc3RSZWY6ZG9jdW1lbnRJRD0iNDhFMzNFNDM0ODc3Rjk1NEM5QjNGN0NFQTUwRkQzNTYiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7/7gAOQWRvYmUAZMAAAAAB/9sAhAAGBAQEBQQGBQUGCQYFBgkLCAYGCAsMCgoLCgoMEAwM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" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="avatar-icon-wrapper avatar-icon-sm avatar-icon-add">
                                                                <div class="avatar-icon"><i>+</i></div>
                                                            </div>
                                                        </div>
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="vertical-timeline-item dot-info vertical-timeline-element">
                                            <div>
                                                <span class="vertical-timeline-element-icon bounce-in"></span>
                                                <div class="vertical-timeline-element-content bounce-in">
                                                    <h4 class="timeline-title">This dot has an info state</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="vertical-timeline-item dot-dark vertical-timeline-element">
                                            <div>
                                                <span class="vertical-timeline-element-icon bounce-in"></span>
                                                <div class="vertical-timeline-element-content bounce-in">
                                                    <h4 class="timeline-title">This dot has a dark state</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; height: 400px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 197px;"></div></div></div>
                        </div>
                        <div class="d-block text-center card-footer">
                            <button class="btn-shadow btn-wide btn-pill btn btn-focus">
                                <span class="badge badge-dot badge-dot-lg badge-warning badge-pulse">Badge</span>
                                View All Messages
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-xl-3">
                    <div class="card mb-3 widget-chart widget-chart2 text-left card-btm-border card-shadow-success border-success">
                        <div class="widget-chat-wrapper-outer">
                            <div class="widget-chart-content pt-3 pl-3 pb-1">
                                <div class="widget-chart-flex">
                                    <div class="widget-numbers">
                                        <div class="widget-chart-flex">
                                            <div class="fsize-4">
                                                <small class="opacity-5">$</small>
                                                <span>874</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h6 class="widget-subheading mb-0 opacity-5">sales last month</h6>
                            </div>
                            <div class="no-gutters widget-chart-wrapper mt-3 mb-3 pl-2 he-auto row">
                                <div class="col-md-9">
                                    <div id="dashboard-sparklines-1" style="min-height: 100px;"><div id="apexchartskiiw776xh" class="apexcharts-canvas apexchartskiiw776xh" style="width: 142px; height: 100px;"><svg id="SvgjsSvg1099" width="142" height="100" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1101" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs1100"><clipPath id="gridRectMaskkiiw776xh"><rect id="SvgjsRect1105" width="145" height="103" x="-1.5" y="-1.5" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><clipPath id="gridRectMarkerMaskkiiw776xh"><rect id="SvgjsRect1106" width="150" height="108" x="-4" y="-4" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath></defs><rect id="SvgjsRect1104" width="1" height="100" x="0" y="0" rx="0" ry="0" fill="#b1b9c4" opacity="1" stroke-width="0" stroke-dasharray="0" class="apexcharts-xcrosshairs" filter="none" fill-opacity="0.9"></rect><g id="SvgjsG1113" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1114" class="apexcharts-xaxis-texts-g" transform="translate(0, 1.875)"></g></g><g id="SvgjsG1117" class="apexcharts-grid"><line id="SvgjsLine1119" x1="0" y1="100" x2="142" y2="100" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine1118" x1="0" y1="1" x2="0" y2="100" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG1108" class="apexcharts-line-series apexcharts-plot-series"><g id="SvgjsG1109" class="apexcharts-series series-1" data:longestSeries="true" rel="1" data:realIndex="0"><path id="apexcharts-line-0" d="M2.9583333333333335 80.47276464542651C5.029166666666667 80.47276464542651 6.804166666666667 51.69578622816033 8.875 51.69578622816033C10.945833333333333 51.69578622816033 12.720833333333335 72.25077081192188 14.791666666666668 72.25077081192188C16.8625 72.25077081192188 18.637500000000003 57.8622816032888 20.708333333333336 57.8622816032888C22.77916666666667 57.8622816032888 24.55416666666667 36.27954779033916 26.625000000000004 36.27954779033916C28.695833333333336 36.27954779033916 30.47083333333334 33.19630010277493 32.54166666666667 33.19630010277493C34.612500000000004 33.19630010277493 36.3875 45.52929085303186 38.458333333333336 45.52929085303186C40.52916666666667 45.52929085303186 42.30416666666667 55.80678314491264 44.375 55.80678314491264C46.44583333333333 55.80678314491264 48.22083333333333 68.13977389516958 50.291666666666664 68.13977389516958C52.3625 68.13977389516958 54.137499999999996 72.25077081192188 56.20833333333333 72.25077081192188C58.27916666666666 72.25077081192188 60.05416666666666 61.973278520041106 62.12499999999999 61.973278520041106C64.19583333333333 61.973278520041106 65.97083333333333 4.419321685508734 68.04166666666666 4.419321685508734C70.1125 4.419321685508734 71.88749999999999 60.94552929085303 73.95833333333333 60.94552929085303C76.02916666666667 60.94552929085303 77.80416666666666 52.723535457348405 79.875 52.723535457348405C81.94583333333334 52.723535457348405 83.72083333333333 64.02877697841726 85.79166666666667 64.02877697841726C87.86250000000001 64.02877697841726 89.6375 64.02877697841726 91.70833333333334 64.02877697841726C93.77916666666668 64.02877697841726 95.55416666666667 59.917780061664956 97.62500000000001 59.917780061664956C99.69583333333335 59.917780061664956 101.47083333333335 53.751284686536486 103.54166666666669 53.751284686536486C105.61250000000003 53.751284686536486 107.38750000000002 75.33401849948612 109.45833333333336 75.33401849948612C111.5291666666667 75.33401849948612 113.30416666666669 44.50154162384378 115.37500000000003 44.50154162384378C117.44583333333337 44.50154162384378 119.22083333333336 42.44604316546762 121.2916666666667 42.44604316546762C123.36250000000004 42.44604316546762 125.13750000000003 47.58478931140802 127.20833333333337 47.58478931140802C129.2791666666667 47.58478931140802 131.0541666666667 44.50154162384378 133.12500000000003 44.50154162384378C135.19583333333335 44.50154162384378 136.97083333333336 37.30729701952723 139.04166666666669 37.30729701952723C139.04166666666669 37.30729701952723 139.04166666666669 37.30729701952723 139.04166666666669 37.30729701952723 " fill="none" fill-opacity="1" stroke="rgba(58,196,125,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMaskkiiw776xh)" pathTo="M 2.9583333333333335 80.47276464542651C 5.029166666666667 80.47276464542651 6.804166666666667 51.69578622816033 8.875 51.69578622816033C 10.945833333333333 51.69578622816033 12.720833333333335 72.25077081192188 14.791666666666668 72.25077081192188C 16.8625 72.25077081192188 18.637500000000003 57.8622816032888 20.708333333333336 57.8622816032888C 22.77916666666667 57.8622816032888 24.55416666666667 36.27954779033916 26.625000000000004 36.27954779033916C 28.695833333333336 36.27954779033916 30.47083333333334 33.19630010277493 32.54166666666667 33.19630010277493C 34.612500000000004 33.19630010277493 36.3875 45.52929085303186 38.458333333333336 45.52929085303186C 40.52916666666667 45.52929085303186 42.30416666666667 55.80678314491264 44.375 55.80678314491264C 46.44583333333333 55.80678314491264 48.22083333333333 68.13977389516958 50.291666666666664 68.13977389516958C 52.3625 68.13977389516958 54.137499999999996 72.25077081192188 56.20833333333333 72.25077081192188C 58.27916666666666 72.25077081192188 60.05416666666666 61.973278520041106 62.12499999999999 61.973278520041106C 64.19583333333333 61.973278520041106 65.97083333333333 4.419321685508734 68.04166666666666 4.419321685508734C 70.1125 4.419321685508734 71.88749999999999 60.94552929085303 73.95833333333333 60.94552929085303C 76.02916666666667 60.94552929085303 77.80416666666666 52.723535457348405 79.875 52.723535457348405C 81.94583333333334 52.723535457348405 83.72083333333333 64.02877697841726 85.79166666666667 64.02877697841726C 87.86250000000001 64.02877697841726 89.6375 64.02877697841726 91.70833333333334 64.02877697841726C 93.77916666666668 64.02877697841726 95.55416666666667 59.917780061664956 97.62500000000001 59.917780061664956C 99.69583333333335 59.917780061664956 101.47083333333335 53.751284686536486 103.54166666666669 53.751284686536486C 105.61250000000003 53.751284686536486 107.38750000000002 75.33401849948612 109.45833333333336 75.33401849948612C 111.5291666666667 75.33401849948612 113.30416666666669 44.50154162384378 115.37500000000003 44.50154162384378C 117.44583333333337 44.50154162384378 119.22083333333336 42.44604316546762 121.2916666666667 42.44604316546762C 123.36250000000004 42.44604316546762 125.13750000000003 47.58478931140802 127.20833333333337 47.58478931140802C 129.2791666666667 47.58478931140802 131.0541666666667 44.50154162384378 133.12500000000003 44.50154162384378C 135.19583333333335 44.50154162384378 136.97083333333336 37.30729701952723 139.04166666666669 37.30729701952723" pathFrom="M -1 100L -1 100L 8.875 100L 14.791666666666668 100L 20.708333333333336 100L 26.625000000000004 100L 32.54166666666667 100L 38.458333333333336 100L 44.375 100L 50.291666666666664 100L 56.20833333333333 100L 62.12499999999999 100L 68.04166666666666 100L 73.95833333333333 100L 79.875 100L 85.79166666666667 100L 91.70833333333334 100L 97.62500000000001 100L 103.54166666666669 100L 109.45833333333336 100L 115.37500000000003 100L 121.2916666666667 100L 127.20833333333337 100L 133.12500000000003 100L 139.04166666666669 100"></path><g id="SvgjsG1110" class="apexcharts-series-markers-wrap"><g class="apexcharts-series-markers"><circle id="SvgjsCircle1125" r="0" cx="0" cy="0" class="apexcharts-marker wel2wmiow no-pointer-events" stroke="#ffffff" fill="#3ac47d" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle></g></g><g id="SvgjsG1111" class="apexcharts-datalabels"></g></g></g><line id="SvgjsLine1120" x1="0" y1="0" x2="142" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1121" x1="0" y1="0" x2="142" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1122" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1123" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1124" class="apexcharts-point-annotations"></g></g><g id="SvgjsG1115" class="apexcharts-yaxis" rel="0" transform="translate(-35, 0)"><g id="SvgjsG1116" class="apexcharts-yaxis-texts-g"></g></g></svg><div class="apexcharts-legend"></div><div class="apexcharts-tooltip light"><div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker" style="background-color: rgb(58, 196, 125);"></span><div class="apexcharts-tooltip-text"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div></div></div>
                                <div class="resize-triggers"><div class="expand-trigger"><div style="width: 143px; height: 101px;"></div></div><div class="contract-trigger"></div></div></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="card mb-3 widget-chart widget-chart2 text-left card-btm-border card-shadow-primary border-primary">
                        <div class="widget-chat-wrapper-outer">
                            <div class="widget-chart-content pt-3 pl-3 pb-1">
                                <div class="widget-chart-flex">
                                    <div class="widget-numbers">
                                        <div class="widget-chart-flex">
                                            <div class="fsize-4">
                                                <small class="opacity-5">$</small>
                                                <span>1283</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h6 class="widget-subheading mb-0 opacity-5">sales Income</h6>
                            </div>
                            <div class="no-gutters widget-chart-wrapper mt-3 mb-3 pl-2 he-auto row">
                                <div class="col-md-9">
                                    <div id="dashboard-sparklines-2" style="min-height: 100px;"><div id="apexchartsdxpm2re3i" class="apexcharts-canvas apexchartsdxpm2re3i" style="width: 142px; height: 100px;"><svg id="SvgjsSvg1126" width="142" height="100" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1128" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs1127"><clipPath id="gridRectMaskdxpm2re3i"><rect id="SvgjsRect1132" width="145" height="103" x="-1.5" y="-1.5" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><clipPath id="gridRectMarkerMaskdxpm2re3i"><rect id="SvgjsRect1133" width="150" height="108" x="-4" y="-4" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath></defs><rect id="SvgjsRect1131" width="1" height="100" x="0" y="0" rx="0" ry="0" fill="#b1b9c4" opacity="1" stroke-width="0" stroke-dasharray="0" class="apexcharts-xcrosshairs" filter="none" fill-opacity="0.9"></rect><g id="SvgjsG1140" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1141" class="apexcharts-xaxis-texts-g" transform="translate(0, 1.875)"></g></g><g id="SvgjsG1144" class="apexcharts-grid"><line id="SvgjsLine1146" x1="0" y1="100" x2="142" y2="100" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine1145" x1="0" y1="1" x2="0" y2="100" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG1135" class="apexcharts-line-series apexcharts-plot-series"><g id="SvgjsG1136" class="apexcharts-series series-1" data:longestSeries="true" rel="1" data:realIndex="0"><path id="apexcharts-line-0" d="M2.9583333333333335 52.723535457348405C5.029166666666667 52.723535457348405 6.804166666666667 64.02877697841726 8.875 64.02877697841726C10.945833333333333 64.02877697841726 12.720833333333335 72.25077081192188 14.791666666666668 72.25077081192188C16.8625 72.25077081192188 18.637500000000003 75.33401849948612 20.708333333333336 75.33401849948612C22.77916666666667 75.33401849948612 24.55416666666667 80.47276464542651 26.625000000000004 80.47276464542651C28.695833333333336 80.47276464542651 30.47083333333334 51.69578622816033 32.54166666666667 51.69578622816033C34.612500000000004 51.69578622816033 36.3875 33.19630010277493 38.458333333333336 33.19630010277493C40.52916666666667 33.19630010277493 42.30416666666667 36.27954779033916 44.375 36.27954779033916C46.44583333333333 36.27954779033916 48.22083333333333 60.94552929085303 50.291666666666664 60.94552929085303C52.3625 60.94552929085303 54.137499999999996 44.50154162384378 56.20833333333333 44.50154162384378C58.27916666666666 44.50154162384378 60.05416666666666 45.52929085303186 62.12499999999999 45.52929085303186C64.19583333333333 45.52929085303186 65.97083333333333 53.751284686536486 68.04166666666666 53.751284686536486C70.1125 53.751284686536486 71.88749999999999 57.8622816032888 73.95833333333333 57.8622816032888C76.02916666666667 57.8622816032888 77.80416666666666 47.58478931140802 79.875 47.58478931140802C81.94583333333334 47.58478931140802 83.72083333333333 59.917780061664956 85.79166666666667 59.917780061664956C87.86250000000001 59.917780061664956 89.6375 68.13977389516958 91.70833333333334 68.13977389516958C93.77916666666668 68.13977389516958 95.55416666666667 64.02877697841726 97.62500000000001 64.02877697841726C99.69583333333335 64.02877697841726 101.47083333333335 72.25077081192188 103.54166666666669 72.25077081192188C105.61250000000003 72.25077081192188 107.38750000000002 4.419321685508734 109.45833333333336 4.419321685508734C111.5291666666667 4.419321685508734 113.30416666666669 55.80678314491264 115.37500000000003 55.80678314491264C117.44583333333337 55.80678314491264 119.22083333333336 42.44604316546762 121.2916666666667 42.44604316546762C123.36250000000004 42.44604316546762 125.13750000000003 61.973278520041106 127.20833333333337 61.973278520041106C129.2791666666667 61.973278520041106 131.0541666666667 37.30729701952723 133.12500000000003 37.30729701952723C135.19583333333335 37.30729701952723 136.97083333333336 44.50154162384378 139.04166666666669 44.50154162384378C139.04166666666669 44.50154162384378 139.04166666666669 44.50154162384378 139.04166666666669 44.50154162384378 " fill="none" fill-opacity="1" stroke="rgba(0,123,255,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMaskdxpm2re3i)" pathTo="M 2.9583333333333335 52.723535457348405C 5.029166666666667 52.723535457348405 6.804166666666667 64.02877697841726 8.875 64.02877697841726C 10.945833333333333 64.02877697841726 12.720833333333335 72.25077081192188 14.791666666666668 72.25077081192188C 16.8625 72.25077081192188 18.637500000000003 75.33401849948612 20.708333333333336 75.33401849948612C 22.77916666666667 75.33401849948612 24.55416666666667 80.47276464542651 26.625000000000004 80.47276464542651C 28.695833333333336 80.47276464542651 30.47083333333334 51.69578622816033 32.54166666666667 51.69578622816033C 34.612500000000004 51.69578622816033 36.3875 33.19630010277493 38.458333333333336 33.19630010277493C 40.52916666666667 33.19630010277493 42.30416666666667 36.27954779033916 44.375 36.27954779033916C 46.44583333333333 36.27954779033916 48.22083333333333 60.94552929085303 50.291666666666664 60.94552929085303C 52.3625 60.94552929085303 54.137499999999996 44.50154162384378 56.20833333333333 44.50154162384378C 58.27916666666666 44.50154162384378 60.05416666666666 45.52929085303186 62.12499999999999 45.52929085303186C 64.19583333333333 45.52929085303186 65.97083333333333 53.751284686536486 68.04166666666666 53.751284686536486C 70.1125 53.751284686536486 71.88749999999999 57.8622816032888 73.95833333333333 57.8622816032888C 76.02916666666667 57.8622816032888 77.80416666666666 47.58478931140802 79.875 47.58478931140802C 81.94583333333334 47.58478931140802 83.72083333333333 59.917780061664956 85.79166666666667 59.917780061664956C 87.86250000000001 59.917780061664956 89.6375 68.13977389516958 91.70833333333334 68.13977389516958C 93.77916666666668 68.13977389516958 95.55416666666667 64.02877697841726 97.62500000000001 64.02877697841726C 99.69583333333335 64.02877697841726 101.47083333333335 72.25077081192188 103.54166666666669 72.25077081192188C 105.61250000000003 72.25077081192188 107.38750000000002 4.419321685508734 109.45833333333336 4.419321685508734C 111.5291666666667 4.419321685508734 113.30416666666669 55.80678314491264 115.37500000000003 55.80678314491264C 117.44583333333337 55.80678314491264 119.22083333333336 42.44604316546762 121.2916666666667 42.44604316546762C 123.36250000000004 42.44604316546762 125.13750000000003 61.973278520041106 127.20833333333337 61.973278520041106C 129.2791666666667 61.973278520041106 131.0541666666667 37.30729701952723 133.12500000000003 37.30729701952723C 135.19583333333335 37.30729701952723 136.97083333333336 44.50154162384378 139.04166666666669 44.50154162384378" pathFrom="M -1 100L -1 100L 8.875 100L 14.791666666666668 100L 20.708333333333336 100L 26.625000000000004 100L 32.54166666666667 100L 38.458333333333336 100L 44.375 100L 50.291666666666664 100L 56.20833333333333 100L 62.12499999999999 100L 68.04166666666666 100L 73.95833333333333 100L 79.875 100L 85.79166666666667 100L 91.70833333333334 100L 97.62500000000001 100L 103.54166666666669 100L 109.45833333333336 100L 115.37500000000003 100L 121.2916666666667 100L 127.20833333333337 100L 133.12500000000003 100L 139.04166666666669 100"></path><g id="SvgjsG1137" class="apexcharts-series-markers-wrap"><g class="apexcharts-series-markers"><circle id="SvgjsCircle1152" r="0" cx="0" cy="0" class="apexcharts-marker w7kdpzdwg no-pointer-events" stroke="#ffffff" fill="#007bff" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle></g></g><g id="SvgjsG1138" class="apexcharts-datalabels"></g></g></g><line id="SvgjsLine1147" x1="0" y1="0" x2="142" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1148" x1="0" y1="0" x2="142" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1149" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1150" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1151" class="apexcharts-point-annotations"></g></g><g id="SvgjsG1142" class="apexcharts-yaxis" rel="0" transform="translate(-35, 0)"><g id="SvgjsG1143" class="apexcharts-yaxis-texts-g"></g></g></svg><div class="apexcharts-legend"></div><div class="apexcharts-tooltip light"><div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker" style="background-color: rgb(0, 123, 255);"></span><div class="apexcharts-tooltip-text"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div></div></div>
                                <div class="resize-triggers"><div class="expand-trigger"><div style="width: 143px; height: 101px;"></div></div><div class="contract-trigger"></div></div></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="card mb-3 widget-chart widget-chart2 text-left card-btm-border card-shadow-warning border-warning">
                        <div class="widget-chat-wrapper-outer">
                            <div class="widget-chart-content pt-3 pl-3 pb-1">
                                <div class="widget-chart-flex">
                                    <div class="widget-numbers">
                                        <div class="widget-chart-flex">
                                            <div class="fsize-4">
                                                <small class="opacity-5">$</small>
                                                <span>1286</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h6 class="widget-subheading mb-0 opacity-5">last month sales</h6>
                            </div>
                            <div class="no-gutters widget-chart-wrapper mt-3 mb-3 pl-2 he-auto row">
                                <div class="col-md-9">
                                    <div id="dashboard-sparklines-3" style="min-height: 100px;"><div id="apexcharts4962l4dkh" class="apexcharts-canvas apexcharts4962l4dkh" style="width: 142px; height: 100px;"><svg id="SvgjsSvg1153" width="142" height="100" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1155" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs1154"><clipPath id="gridRectMask4962l4dkh"><rect id="SvgjsRect1159" width="145" height="103" x="-1.5" y="-1.5" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><clipPath id="gridRectMarkerMask4962l4dkh"><rect id="SvgjsRect1160" width="150" height="108" x="-4" y="-4" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath></defs><rect id="SvgjsRect1158" width="1" height="100" x="0" y="0" rx="0" ry="0" fill="#b1b9c4" opacity="1" stroke-width="0" stroke-dasharray="0" class="apexcharts-xcrosshairs" filter="none" fill-opacity="0.9"></rect><g id="SvgjsG1167" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1168" class="apexcharts-xaxis-texts-g" transform="translate(0, 1.875)"></g></g><g id="SvgjsG1171" class="apexcharts-grid"><line id="SvgjsLine1173" x1="0" y1="100" x2="142" y2="100" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine1172" x1="0" y1="1" x2="0" y2="100" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG1162" class="apexcharts-line-series apexcharts-plot-series"><g id="SvgjsG1163" class="apexcharts-series series-1" data:longestSeries="true" rel="1" data:realIndex="0"><path id="apexcharts-line-0" d="M2.9583333333333335 64.02877697841726C5.029166666666667 64.02877697841726 6.804166666666667 80.47276464542651 8.875 80.47276464542651C10.945833333333333 80.47276464542651 12.720833333333335 61.973278520041106 14.791666666666668 61.973278520041106C16.8625 61.973278520041106 18.637500000000003 53.751284686536486 20.708333333333336 53.751284686536486C22.77916666666667 53.751284686536486 24.55416666666667 52.723535457348405 26.625000000000004 52.723535457348405C28.695833333333336 52.723535457348405 30.47083333333334 51.69578622816033 32.54166666666667 51.69578622816033C34.612500000000004 51.69578622816033 36.3875 4.419321685508734 38.458333333333336 4.419321685508734C40.52916666666667 4.419321685508734 42.30416666666667 64.02877697841726 44.375 64.02877697841726C46.44583333333333 64.02877697841726 48.22083333333333 33.19630010277493 50.291666666666664 33.19630010277493C52.3625 33.19630010277493 54.137499999999996 59.917780061664956 56.20833333333333 59.917780061664956C58.27916666666666 59.917780061664956 60.05416666666666 55.80678314491264 62.12499999999999 55.80678314491264C64.19583333333333 55.80678314491264 65.97083333333333 37.30729701952723 68.04166666666666 37.30729701952723C70.1125 37.30729701952723 71.88749999999999 36.27954779033916 73.95833333333333 36.27954779033916C76.02916666666667 36.27954779033916 77.80416666666666 44.50154162384378 79.875 44.50154162384378C81.94583333333334 44.50154162384378 83.72083333333333 72.25077081192188 85.79166666666667 72.25077081192188C87.86250000000001 72.25077081192188 89.6375 72.25077081192188 91.70833333333334 72.25077081192188C93.77916666666668 72.25077081192188 95.55416666666667 42.44604316546762 97.62500000000001 42.44604316546762C99.69583333333335 42.44604316546762 101.47083333333335 60.94552929085303 103.54166666666669 60.94552929085303C105.61250000000003 60.94552929085303 107.38750000000002 45.52929085303186 109.45833333333336 45.52929085303186C111.5291666666667 45.52929085303186 113.30416666666669 57.8622816032888 115.37500000000003 57.8622816032888C117.44583333333337 57.8622816032888 119.22083333333336 68.13977389516958 121.2916666666667 68.13977389516958C123.36250000000004 68.13977389516958 125.13750000000003 44.50154162384378 127.20833333333337 44.50154162384378C129.2791666666667 44.50154162384378 131.0541666666667 75.33401849948612 133.12500000000003 75.33401849948612C135.19583333333335 75.33401849948612 136.97083333333336 47.58478931140802 139.04166666666669 47.58478931140802C139.04166666666669 47.58478931140802 139.04166666666669 47.58478931140802 139.04166666666669 47.58478931140802 " fill="none" fill-opacity="1" stroke="rgba(247,185,36,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMask4962l4dkh)" pathTo="M 2.9583333333333335 64.02877697841726C 5.029166666666667 64.02877697841726 6.804166666666667 80.47276464542651 8.875 80.47276464542651C 10.945833333333333 80.47276464542651 12.720833333333335 61.973278520041106 14.791666666666668 61.973278520041106C 16.8625 61.973278520041106 18.637500000000003 53.751284686536486 20.708333333333336 53.751284686536486C 22.77916666666667 53.751284686536486 24.55416666666667 52.723535457348405 26.625000000000004 52.723535457348405C 28.695833333333336 52.723535457348405 30.47083333333334 51.69578622816033 32.54166666666667 51.69578622816033C 34.612500000000004 51.69578622816033 36.3875 4.419321685508734 38.458333333333336 4.419321685508734C 40.52916666666667 4.419321685508734 42.30416666666667 64.02877697841726 44.375 64.02877697841726C 46.44583333333333 64.02877697841726 48.22083333333333 33.19630010277493 50.291666666666664 33.19630010277493C 52.3625 33.19630010277493 54.137499999999996 59.917780061664956 56.20833333333333 59.917780061664956C 58.27916666666666 59.917780061664956 60.05416666666666 55.80678314491264 62.12499999999999 55.80678314491264C 64.19583333333333 55.80678314491264 65.97083333333333 37.30729701952723 68.04166666666666 37.30729701952723C 70.1125 37.30729701952723 71.88749999999999 36.27954779033916 73.95833333333333 36.27954779033916C 76.02916666666667 36.27954779033916 77.80416666666666 44.50154162384378 79.875 44.50154162384378C 81.94583333333334 44.50154162384378 83.72083333333333 72.25077081192188 85.79166666666667 72.25077081192188C 87.86250000000001 72.25077081192188 89.6375 72.25077081192188 91.70833333333334 72.25077081192188C 93.77916666666668 72.25077081192188 95.55416666666667 42.44604316546762 97.62500000000001 42.44604316546762C 99.69583333333335 42.44604316546762 101.47083333333335 60.94552929085303 103.54166666666669 60.94552929085303C 105.61250000000003 60.94552929085303 107.38750000000002 45.52929085303186 109.45833333333336 45.52929085303186C 111.5291666666667 45.52929085303186 113.30416666666669 57.8622816032888 115.37500000000003 57.8622816032888C 117.44583333333337 57.8622816032888 119.22083333333336 68.13977389516958 121.2916666666667 68.13977389516958C 123.36250000000004 68.13977389516958 125.13750000000003 44.50154162384378 127.20833333333337 44.50154162384378C 129.2791666666667 44.50154162384378 131.0541666666667 75.33401849948612 133.12500000000003 75.33401849948612C 135.19583333333335 75.33401849948612 136.97083333333336 47.58478931140802 139.04166666666669 47.58478931140802" pathFrom="M -1 100L -1 100L 8.875 100L 14.791666666666668 100L 20.708333333333336 100L 26.625000000000004 100L 32.54166666666667 100L 38.458333333333336 100L 44.375 100L 50.291666666666664 100L 56.20833333333333 100L 62.12499999999999 100L 68.04166666666666 100L 73.95833333333333 100L 79.875 100L 85.79166666666667 100L 91.70833333333334 100L 97.62500000000001 100L 103.54166666666669 100L 109.45833333333336 100L 115.37500000000003 100L 121.2916666666667 100L 127.20833333333337 100L 133.12500000000003 100L 139.04166666666669 100"></path><g id="SvgjsG1164" class="apexcharts-series-markers-wrap"><g class="apexcharts-series-markers"><circle id="SvgjsCircle1179" r="0" cx="0" cy="0" class="apexcharts-marker we7786tkk no-pointer-events" stroke="#ffffff" fill="#f7b924" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle></g></g><g id="SvgjsG1165" class="apexcharts-datalabels"></g></g></g><line id="SvgjsLine1174" x1="0" y1="0" x2="142" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1175" x1="0" y1="0" x2="142" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1176" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1177" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1178" class="apexcharts-point-annotations"></g></g><g id="SvgjsG1169" class="apexcharts-yaxis" rel="0" transform="translate(-35, 0)"><g id="SvgjsG1170" class="apexcharts-yaxis-texts-g"></g></g></svg><div class="apexcharts-legend"></div><div class="apexcharts-tooltip light"><div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker" style="background-color: rgb(247, 185, 36);"></span><div class="apexcharts-tooltip-text"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div></div></div>
                                <div class="resize-triggers"><div class="expand-trigger"><div style="width: 143px; height: 101px;"></div></div><div class="contract-trigger"></div></div></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="card mb-3 widget-chart widget-chart2 text-left card-btm-border card-shadow-danger border-danger">
                        <div class="widget-chat-wrapper-outer">
                            <div class="widget-chart-content pt-3 pl-3 pb-1">
                                <div class="widget-chart-flex">
                                    <div class="widget-numbers">
                                        <div class="widget-chart-flex">
                                            <div class="fsize-4">
                                                <small class="opacity-5">$</small>
                                                <span>564</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h6 class="widget-subheading mb-0 opacity-5">total revenue</h6>
                            </div>
                            <div class="no-gutters widget-chart-wrapper mt-3 mb-3 pl-2 he-auto row">
                                <div class="col-md-9">
                                    <div id="dashboard-sparklines-4" style="min-height: 100px;"><div id="apexchartslzqhdswhg" class="apexcharts-canvas apexchartslzqhdswhg" style="width: 142px; height: 100px;"><svg id="SvgjsSvg1180" width="142" height="100" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1182" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs1181"><clipPath id="gridRectMasklzqhdswhg"><rect id="SvgjsRect1186" width="145" height="103" x="-1.5" y="-1.5" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><clipPath id="gridRectMarkerMasklzqhdswhg"><rect id="SvgjsRect1187" width="150" height="108" x="-4" y="-4" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath></defs><rect id="SvgjsRect1185" width="1" height="100" x="0" y="0" rx="0" ry="0" fill="#b1b9c4" opacity="1" stroke-width="0" stroke-dasharray="0" class="apexcharts-xcrosshairs" filter="none" fill-opacity="0.9"></rect><g id="SvgjsG1194" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1195" class="apexcharts-xaxis-texts-g" transform="translate(0, 1.875)"></g></g><g id="SvgjsG1198" class="apexcharts-grid"><line id="SvgjsLine1200" x1="0" y1="100" x2="142" y2="100" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine1199" x1="0" y1="1" x2="0" y2="100" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG1189" class="apexcharts-line-series apexcharts-plot-series"><g id="SvgjsG1190" class="apexcharts-series series-1" data:longestSeries="true" rel="1" data:realIndex="0"><path id="apexcharts-line-0" d="M2.9583333333333335 61.973278520041106C5.029166666666667 61.973278520041106 6.804166666666667 72.25077081192188 8.875 72.25077081192188C10.945833333333333 72.25077081192188 12.720833333333335 4.419321685508734 14.791666666666668 4.419321685508734C16.8625 4.419321685508734 18.637500000000003 37.30729701952723 20.708333333333336 37.30729701952723C22.77916666666667 37.30729701952723 24.55416666666667 72.25077081192188 26.625000000000004 72.25077081192188C28.695833333333336 72.25077081192188 30.47083333333334 36.27954779033916 32.54166666666667 36.27954779033916C34.612500000000004 36.27954779033916 36.3875 47.58478931140802 38.458333333333336 47.58478931140802C40.52916666666667 47.58478931140802 42.30416666666667 80.47276464542651 44.375 80.47276464542651C46.44583333333333 80.47276464542651 48.22083333333333 51.69578622816033 50.291666666666664 51.69578622816033C52.3625 51.69578622816033 54.137499999999996 68.13977389516958 56.20833333333333 68.13977389516958C58.27916666666666 68.13977389516958 60.05416666666666 57.8622816032888 62.12499999999999 57.8622816032888C64.19583333333333 57.8622816032888 65.97083333333333 33.19630010277493 68.04166666666666 33.19630010277493C70.1125 33.19630010277493 71.88749999999999 44.50154162384378 73.95833333333333 44.50154162384378C76.02916666666667 44.50154162384378 77.80416666666666 75.33401849948612 79.875 75.33401849948612C81.94583333333334 75.33401849948612 83.72083333333333 52.723535457348405 85.79166666666667 52.723535457348405C87.86250000000001 52.723535457348405 89.6375 42.44604316546762 91.70833333333334 42.44604316546762C93.77916666666668 42.44604316546762 95.55416666666667 64.02877697841726 97.62500000000001 64.02877697841726C99.69583333333335 64.02877697841726 101.47083333333335 53.751284686536486 103.54166666666669 53.751284686536486C105.61250000000003 53.751284686536486 107.38750000000002 44.50154162384378 109.45833333333336 44.50154162384378C111.5291666666667 44.50154162384378 113.30416666666669 45.52929085303186 115.37500000000003 45.52929085303186C117.44583333333337 45.52929085303186 119.22083333333336 59.917780061664956 121.2916666666667 59.917780061664956C123.36250000000004 59.917780061664956 125.13750000000003 60.94552929085303 127.20833333333337 60.94552929085303C129.2791666666667 60.94552929085303 131.0541666666667 64.02877697841726 133.12500000000003 64.02877697841726C135.19583333333335 64.02877697841726 136.97083333333336 55.80678314491264 139.04166666666669 55.80678314491264C139.04166666666669 55.80678314491264 139.04166666666669 55.80678314491264 139.04166666666669 55.80678314491264 " fill="none" fill-opacity="1" stroke="rgba(217,37,80,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMasklzqhdswhg)" pathTo="M 2.9583333333333335 61.973278520041106C 5.029166666666667 61.973278520041106 6.804166666666667 72.25077081192188 8.875 72.25077081192188C 10.945833333333333 72.25077081192188 12.720833333333335 4.419321685508734 14.791666666666668 4.419321685508734C 16.8625 4.419321685508734 18.637500000000003 37.30729701952723 20.708333333333336 37.30729701952723C 22.77916666666667 37.30729701952723 24.55416666666667 72.25077081192188 26.625000000000004 72.25077081192188C 28.695833333333336 72.25077081192188 30.47083333333334 36.27954779033916 32.54166666666667 36.27954779033916C 34.612500000000004 36.27954779033916 36.3875 47.58478931140802 38.458333333333336 47.58478931140802C 40.52916666666667 47.58478931140802 42.30416666666667 80.47276464542651 44.375 80.47276464542651C 46.44583333333333 80.47276464542651 48.22083333333333 51.69578622816033 50.291666666666664 51.69578622816033C 52.3625 51.69578622816033 54.137499999999996 68.13977389516958 56.20833333333333 68.13977389516958C 58.27916666666666 68.13977389516958 60.05416666666666 57.8622816032888 62.12499999999999 57.8622816032888C 64.19583333333333 57.8622816032888 65.97083333333333 33.19630010277493 68.04166666666666 33.19630010277493C 70.1125 33.19630010277493 71.88749999999999 44.50154162384378 73.95833333333333 44.50154162384378C 76.02916666666667 44.50154162384378 77.80416666666666 75.33401849948612 79.875 75.33401849948612C 81.94583333333334 75.33401849948612 83.72083333333333 52.723535457348405 85.79166666666667 52.723535457348405C 87.86250000000001 52.723535457348405 89.6375 42.44604316546762 91.70833333333334 42.44604316546762C 93.77916666666668 42.44604316546762 95.55416666666667 64.02877697841726 97.62500000000001 64.02877697841726C 99.69583333333335 64.02877697841726 101.47083333333335 53.751284686536486 103.54166666666669 53.751284686536486C 105.61250000000003 53.751284686536486 107.38750000000002 44.50154162384378 109.45833333333336 44.50154162384378C 111.5291666666667 44.50154162384378 113.30416666666669 45.52929085303186 115.37500000000003 45.52929085303186C 117.44583333333337 45.52929085303186 119.22083333333336 59.917780061664956 121.2916666666667 59.917780061664956C 123.36250000000004 59.917780061664956 125.13750000000003 60.94552929085303 127.20833333333337 60.94552929085303C 129.2791666666667 60.94552929085303 131.0541666666667 64.02877697841726 133.12500000000003 64.02877697841726C 135.19583333333335 64.02877697841726 136.97083333333336 55.80678314491264 139.04166666666669 55.80678314491264" pathFrom="M -1 100L -1 100L 8.875 100L 14.791666666666668 100L 20.708333333333336 100L 26.625000000000004 100L 32.54166666666667 100L 38.458333333333336 100L 44.375 100L 50.291666666666664 100L 56.20833333333333 100L 62.12499999999999 100L 68.04166666666666 100L 73.95833333333333 100L 79.875 100L 85.79166666666667 100L 91.70833333333334 100L 97.62500000000001 100L 103.54166666666669 100L 109.45833333333336 100L 115.37500000000003 100L 121.2916666666667 100L 127.20833333333337 100L 133.12500000000003 100L 139.04166666666669 100"></path><g id="SvgjsG1191" class="apexcharts-series-markers-wrap"><g class="apexcharts-series-markers"><circle id="SvgjsCircle1206" r="0" cx="0" cy="0" class="apexcharts-marker wveb0ojmq no-pointer-events" stroke="#ffffff" fill="#d92550" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle></g></g><g id="SvgjsG1192" class="apexcharts-datalabels"></g></g></g><line id="SvgjsLine1201" x1="0" y1="0" x2="142" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1202" x1="0" y1="0" x2="142" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1203" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1204" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1205" class="apexcharts-point-annotations"></g></g><g id="SvgjsG1196" class="apexcharts-yaxis" rel="0" transform="translate(-35, 0)"><g id="SvgjsG1197" class="apexcharts-yaxis-texts-g"></g></g></svg><div class="apexcharts-legend"></div><div class="apexcharts-tooltip light"><div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker" style="background-color: rgb(217, 37, 80);"></span><div class="apexcharts-tooltip-text"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div></div></div>
                                <div class="resize-triggers"><div class="expand-trigger"><div style="width: 143px; height: 101px;"></div></div><div class="contract-trigger"></div></div></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3">
                <div class="card-header-tab card-header">
                    <div class="card-header-title font-size-lg text-capitalize font-weight-normal"><i class="header-icon lnr-laptop-phone mr-3 text-muted opacity-6"> </i>Easy Dynamic Tables
                    </div>
                    <div class="btn-actions-pane-right actions-icon-btn">
                        <div class="btn-group dropdown">
                            <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-icon btn-icon-only btn btn-link">
                                <i class="pe-7s-menu btn-icon-wrapper"></i>
                            </button>
                            <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-right rm-pointers dropdown-menu-shadow dropdown-menu-hover-link dropdown-menu">
                                <h6 tabindex="-1" class="dropdown-header">Header</h6>
                                <button type="button" tabindex="0" class="dropdown-item">
                                    <i class="dropdown-icon lnr-inbox"> </i><span>Menus</span>
                                </button>
                                <button type="button" tabindex="0" class="dropdown-item">
                                    <i class="dropdown-icon lnr-file-empty"> </i><span>Settings</span>
                                </button>
                                <button type="button" tabindex="0" class="dropdown-item">
                                    <i class="dropdown-icon lnr-book"> </i><span>Actions</span>
                                </button>
                                <div tabindex="-1" class="dropdown-divider"></div>
                                <div class="p-3 text-right">
                                    <button class="mr-2 btn-shadow btn-sm btn btn-link">View Details</button>
                                    <button class="mr-2 btn-shadow btn-sm btn btn-primary">Action</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div id="example_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="example_length"><label>Show <select name="example_length" aria-controls="example" class="custom-select custom-select-sm form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="example_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="example"></label></div></div></div><div class="row"><div class="col-sm-12"><table style="width: 100%;" id="example" class="table table-hover table-striped table-bordered dataTable dtr-inline" role="grid" aria-describedby="example_info">
                        <thead>
                            <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 147.2px;" aria-sort="ascending" aria-label="Name: activate to sort column descending">Name</th><th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 229.2px;" aria-label="Position: activate to sort column ascending">Position</th><th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 104.2px;" aria-label="Office: activate to sort column ascending">Office</th><th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 56.2px;" aria-label="Age: activate to sort column ascending">Age</th><th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 111.2px;" aria-label="Start date: activate to sort column ascending">Start date</th><th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 86.2px;" aria-label="Salary: activate to sort column ascending">Salary</th></tr>
                        </thead>
                        <tbody>
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                        <tr role="row" class="odd">
                                <td class="sorting_1 dtr-control">Airi Satou</td>
                                <td>Accountant</td>
                                <td>Tokyo</td>
                                <td>33</td>
                                <td>2008/11/28</td>
                                <td>$162,700</td>
                            </tr><tr role="row" class="even">
                                <td class="sorting_1 dtr-control">Angelica Ramos</td>
                                <td>Chief Executive Officer (CEO)</td>
                                <td>London</td>
                                <td>47</td>
                                <td>2009/10/09</td>
                                <td>$1,200,000</td>
                            </tr><tr role="row" class="odd">
                                <td class="sorting_1 dtr-control">Ashton Cox</td>
                                <td>Junior Technical Author</td>
                                <td>San Francisco</td>
                                <td>66</td>
                                <td>2009/01/12</td>
                                <td>$86,000</td>
                            </tr><tr role="row" class="even">
                                <td class="sorting_1 dtr-control">Bradley Greer</td>
                                <td>Software Engineer</td>
                                <td>London</td>
                                <td>41</td>
                                <td>2012/10/13</td>
                                <td>$132,000</td>
                            </tr><tr role="row" class="odd">
                                <td class="sorting_1 dtr-control">Brenden Wagner</td>
                                <td>Software Engineer</td>
                                <td>San Francisco</td>
                                <td>28</td>
                                <td>2011/06/07</td>
                                <td>$206,850</td>
                            </tr><tr role="row" class="even">
                                <td class="sorting_1 dtr-control">Brielle Williamson</td>
                                <td>Integration Specialist</td>
                                <td>New York</td>
                                <td>61</td>
                                <td>2012/12/02</td>
                                <td>$372,000</td>
                            </tr><tr role="row" class="odd">
                                <td class="sorting_1 dtr-control">Bruno Nash</td>
                                <td>Software Engineer</td>
                                <td>London</td>
                                <td>38</td>
                                <td>2011/05/03</td>
                                <td>$163,500</td>
                            </tr><tr role="row" class="even">
                                <td class="sorting_1 dtr-control">Caesar Vance</td>
                                <td>Pre-Sales Support</td>
                                <td>New York</td>
                                <td>21</td>
                                <td>2011/12/12</td>
                                <td>$106,450</td>
                            </tr><tr role="row" class="odd">
                                <td class="sorting_1 dtr-control">Cara Stevens</td>
                                <td>Sales Assistant</td>
                                <td>New York</td>
                                <td>46</td>
                                <td>2011/12/06</td>
                                <td>$145,600</td>
                            </tr><tr role="row" class="even">
                                <td class="sorting_1 dtr-control">Cedric Kelly</td>
                                <td>Senior Javascript Developer</td>
                                <td>Edinburgh</td>
                                <td>22</td>
                                <td>2012/03/29</td>
                                <td>$433,060</td>
                            </tr></tbody>
                        <tfoot>
                            <tr><th rowspan="1" colspan="1">Name</th><th rowspan="1" colspan="1">Position</th><th rowspan="1" colspan="1">Office</th><th rowspan="1" colspan="1">Age</th><th rowspan="1" colspan="1">Start date</th><th rowspan="1" colspan="1">Salary</th></tr>
                        </tfoot>
                    </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="example_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="example_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="example_previous"><a href="#" aria-controls="example" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="example" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example" data-dt-idx="6" tabindex="0" class="page-link">6</a></li><li class="paginate_button page-item next" id="example_next"><a href="#" aria-controls="example" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-lg-6">
                    <div class="card-hover-shadow-2x mb-3 card">
                        <div class="card-header-tab card-header">
                            <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                                <i class="header-icon lnr-database icon-gradient bg-malibu-beach"> </i>Tasks List
                            </div>
                            <div class="btn-actions-pane-right text-capitalize actions-icon-btn">
                                <div class="btn-group dropdown">
                                    <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-icon btn-icon-only btn btn-link">
                                        <i class="pe-7s-menu btn-icon-wrapper"></i>
                                    </button>
                                    <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-right rm-pointers dropdown-menu-shadow dropdown-menu-hover-link dropdown-menu">
                                        <h6 tabindex="-1" class="dropdown-header">Header</h6>
                                        <button type="button" tabindex="0" class="dropdown-item">
                                            <i class="dropdown-icon lnr-inbox"> </i><span>Menus</span>
                                        </button>
                                        <button type="button" tabindex="0" class="dropdown-item">
                                            <i class="dropdown-icon lnr-file-empty"> </i><span>Settings</span>
                                        </button>
                                        <button type="button" tabindex="0" class="dropdown-item">
                                            <i class="dropdown-icon lnr-book"> </i><span>Actions</span>
                                        </button>
                                        <div tabindex="-1" class="dropdown-divider"></div>
                                        <div class="p-3 text-right">
                                            <button class="mr-2 btn-shadow btn-sm btn btn-link">View Details</button>
                                            <button class="mr-2 btn-shadow btn-sm btn btn-primary">Action</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="scroll-area-lg">
                            <div class="scrollbar-container ps ps--active-y">
                                <div class="p-2">
                                    <ul class="todo-list-wrapper list-group list-group-flush">
                                        <li class="list-group-item">
                                            <div class="todo-indicator bg-warning"></div>
                                            <div class="widget-content p-0">
                                                <div class="widget-content-wrapper">
                                                    <div class="widget-content-left mr-2">
                                                        <div class="custom-checkbox custom-control">
                                                            <input type="checkbox" id="exampleCustomCheckbox12" class="custom-control-input">
                                                            <label class="custom-control-label" for="exampleCustomCheckbox12">&nbsp;</label>
                                                        </div>
                                                    </div>
                                                    <div class="widget-content-left">
                                                        <div class="widget-heading">Wash the car
                                                            <div class="badge badge-danger ml-2">Rejected</div>
                                                        </div>
                                                        <div class="widget-subheading"><i>Written by Bob</i></div>
                                                    </div>
                                                    <div class="widget-content-right widget-content-actions">
                                                        <button class="border-0 btn-transition btn btn-outline-success">
                                                            <i class="fa fa-check"></i>
                                                        </button>
                                                        <button class="border-0 btn-transition btn btn-outline-danger">
                                                            <i class="fa fa-trash-alt"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="todo-indicator bg-focus"></div>
                                            <div class="widget-content p-0">
                                                <div class="widget-content-wrapper">
                                                    <div class="widget-content-left mr-2">
                                                        <div class="custom-checkbox custom-control">
                                                            <input type="checkbox" id="exampleCustomCheckbox1" class="custom-control-input">
                                                            <label class="custom-control-label" for="exampleCustomCheckbox1">&nbsp;</label>
                                                        </div>
                                                    </div>
                                                    <div class="widget-content-left">
                                                        <div class="widget-heading">Task with dropdown menu</div>
                                                        <div class="widget-subheading">
                                                            <div>By Johnny
                                                                <div class="badge badge-pill badge-info ml-2">NEW</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="widget-content-right widget-content-actions">
                                                        <div class="d-inline-block dropdown">
                                                            <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="border-0 btn-transition btn btn-link">
                                                                <i class="fa fa-ellipsis-h"></i>
                                                            </button>
                                                            <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                                                <h6 tabindex="-1" class="dropdown-header">Header</h6>
                                                                <button type="button" disabled="" tabindex="-1" class="disabled dropdown-item">Action</button>
                                                                <button type="button" tabindex="0" class="dropdown-item">Another Action</button>
                                                                <div tabindex="-1" class="dropdown-divider"></div>
                                                                <button type="button" tabindex="0" class="dropdown-item">Another Action</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="todo-indicator bg-primary"></div>
                                            <div class="widget-content p-0">
                                                <div class="widget-content-wrapper">
                                                    <div class="widget-content-left mr-2">
                                                        <div class="custom-checkbox custom-control">
                                                            <input type="checkbox" id="exampleCustomCheckbox4" class="custom-control-input">
                                                            <label class="custom-control-label" for="exampleCustomCheckbox4">&nbsp;</label>
                                                        </div>
                                                    </div>
                                                    <div class="widget-content-left flex2">
                                                        <div class="widget-heading">Badge on the right task</div>
                                                        <div class="widget-subheading">This task has show on hover actions!</div>
                                                    </div>
                                                    <div class="widget-content-right widget-content-actions">
                                                        <button class="border-0 btn-transition btn btn-outline-success">
                                                            <i class="fa fa-check"></i>
                                                        </button>
                                                    </div>
                                                    <div class="widget-content-right ml-3">
                                                        <div class="badge badge-pill badge-success">Latest Task</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="todo-indicator bg-info"></div>
                                            <div class="widget-content p-0">
                                                <div class="widget-content-wrapper">
                                                    <div class="widget-content-left mr-2">
                                                        <div class="custom-checkbox custom-control">
                                                            <input type="checkbox" id="exampleCustomCheckbox2" class="custom-control-input">
                                                            <label class="custom-control-label" for="exampleCustomCheckbox2">&nbsp;</label>
                                                        </div>
                                                    </div>
                                                    <div class="widget-content-left mr-3">
                                                        <div class="widget-content-left">
                                                            <img width="42" class="rounded" src="assets/images/avatars/1.jpg" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="widget-content-left">
                                                        <div class="widget-heading">Go grocery shopping</div>
                                                        <div class="widget-subheading">A short description for this todo item</div>
                                                    </div>
                                                    <div class="widget-content-right widget-content-actions">
                                                        <button class="border-0 btn-transition btn btn-outline-success">
                                                            <i class="fa fa-check"></i>
                                                        </button>
                                                        <button class="border-0 btn-transition btn btn-outline-danger">
                                                            <i class="fa fa-trash-alt"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="todo-indicator bg-success"></div>
                                            <div class="widget-content p-0">
                                                <div class="widget-content-wrapper">
                                                    <div class="widget-content-left mr-2">
                                                        <div class="custom-checkbox custom-control">
                                                            <input type="checkbox" id="exampleCustomCheckbox3" class="custom-control-input">
                                                            <label class="custom-control-label" for="exampleCustomCheckbox3">&nbsp;</label>
                                                        </div>
                                                    </div>
                                                    <div class="widget-content-left flex2">
                                                        <div class="widget-heading">Development Task</div>
                                                        <div class="widget-subheading">Finish React ToDo List App</div>
                                                    </div>
                                                    <div class="widget-content-right">
                                                        <div class="badge badge-warning mr-2">69</div>
                                                    </div>
                                                    <div class="widget-content-right">
                                                        <button class="border-0 btn-transition btn btn-outline-success">
                                                            <i class="fa fa-check"></i>
                                                        </button>
                                                        <button class="border-0 btn-transition btn btn-outline-danger">
                                                            <i class="fa fa-trash-alt"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="todo-indicator bg-warning"></div>
                                            <div class="widget-content p-0">
                                                <div class="widget-content-wrapper">
                                                    <div class="widget-content-left mr-2">
                                                        <div class="custom-checkbox custom-control">
                                                            <input type="checkbox" id="exampleCustomCheckbox12" class="custom-control-input">
                                                            <label class="custom-control-label" for="exampleCustomCheckbox12">&nbsp;</label>
                                                        </div>
                                                    </div>
                                                    <div class="widget-content-left">
                                                        <div class="widget-heading">Wash the car
                                                            <div class="badge badge-danger ml-2">Rejected</div>
                                                        </div>
                                                        <div class="widget-subheading"><i>Written by Bob</i></div>
                                                    </div>
                                                    <div class="widget-content-right widget-content-actions">
                                                        <button class="border-0 btn-transition btn btn-outline-success">
                                                            <i class="fa fa-check"></i>
                                                        </button>
                                                        <button class="border-0 btn-transition btn btn-outline-danger">
                                                            <i class="fa fa-trash-alt"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="todo-indicator bg-focus"></div>
                                            <div class="widget-content p-0">
                                                <div class="widget-content-wrapper">
                                                    <div class="widget-content-left mr-2">
                                                        <div class="custom-checkbox custom-control">
                                                            <input type="checkbox" id="exampleCustomCheckbox1" class="custom-control-input">
                                                            <label class="custom-control-label" for="exampleCustomCheckbox1">&nbsp;</label>
                                                        </div>
                                                    </div>
                                                    <div class="widget-content-left">
                                                        <div class="widget-heading">Task with dropdown menu</div>
                                                        <div class="widget-subheading">
                                                            <div>By Johnny
                                                                <div class="badge badge-pill badge-info ml-2">NEW</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="widget-content-right widget-content-actions">
                                                        <div class="d-inline-block dropdown">
                                                            <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="border-0 btn-transition btn btn-link">
                                                                <i class="fa fa-ellipsis-h"></i>
                                                            </button>
                                                            <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                                                <h6 tabindex="-1" class="dropdown-header">Header</h6>
                                                                <button type="button" disabled="" tabindex="-1" class="disabled dropdown-item">Action</button>
                                                                <button type="button" tabindex="0" class="dropdown-item">Another Action</button>
                                                                <div tabindex="-1" class="dropdown-divider"></div>
                                                                <button type="button" tabindex="0" class="dropdown-item">Another Action</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="todo-indicator bg-primary"></div>
                                            <div class="widget-content p-0">
                                                <div class="widget-content-wrapper">
                                                    <div class="widget-content-left mr-2">
                                                        <div class="custom-checkbox custom-control">
                                                            <input type="checkbox" id="exampleCustomCheckbox4" class="custom-control-input">
                                                            <label class="custom-control-label" for="exampleCustomCheckbox4">&nbsp;</label>
                                                        </div>
                                                    </div>
                                                    <div class="widget-content-left flex2">
                                                        <div class="widget-heading">Badge on the right task</div>
                                                        <div class="widget-subheading">This task has show on hover actions!</div>
                                                    </div>
                                                    <div class="widget-content-right widget-content-actions">
                                                        <button class="border-0 btn-transition btn btn-outline-success">
                                                            <i class="fa fa-check"></i>
                                                        </button>
                                                    </div>
                                                    <div class="widget-content-right ml-3">
                                                        <div class="badge badge-pill badge-success">Latest Task</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="todo-indicator bg-info"></div>
                                            <div class="widget-content p-0">
                                                <div class="widget-content-wrapper">
                                                    <div class="widget-content-left mr-2">
                                                        <div class="custom-checkbox custom-control">
                                                            <input type="checkbox" id="exampleCustomCheckbox2" class="custom-control-input">
                                                            <label class="custom-control-label" for="exampleCustomCheckbox2">&nbsp;</label>
                                                        </div>
                                                    </div>
                                                    <div class="widget-content-left mr-3">
                                                        <div class="widget-content-left">
                                                            <img width="42" class="rounded" src="assets/images/avatars/1.jpg" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="widget-content-left">
                                                        <div class="widget-heading">Go grocery shopping</div>
                                                        <div class="widget-subheading">A short description for this todo item</div>
                                                    </div>
                                                    <div class="widget-content-right widget-content-actions">
                                                        <button class="border-0 btn-transition btn btn-outline-success">
                                                            <i class="fa fa-check"></i>
                                                        </button>
                                                        <button class="border-0 btn-transition btn btn-outline-danger">
                                                            <i class="fa fa-trash-alt"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="todo-indicator bg-success"></div>
                                            <div class="widget-content p-0">
                                                <div class="widget-content-wrapper">
                                                    <div class="widget-content-left mr-2">
                                                        <div class="custom-checkbox custom-control">
                                                            <input type="checkbox" id="exampleCustomCheckbox3" class="custom-control-input">
                                                            <label class="custom-control-label" for="exampleCustomCheckbox3">&nbsp;</label>
                                                        </div>
                                                    </div>
                                                    <div class="widget-content-left flex2">
                                                        <div class="widget-heading">Development Task</div>
                                                        <div class="widget-subheading">Finish React ToDo List App</div>
                                                    </div>
                                                    <div class="widget-content-right">
                                                        <div class="badge badge-warning mr-2">69</div>
                                                    </div>
                                                    <div class="widget-content-right">
                                                        <button class="border-0 btn-transition btn btn-outline-success">
                                                            <i class="fa fa-check"></i>
                                                        </button>
                                                        <button class="border-0 btn-transition btn btn-outline-danger">
                                                            <i class="fa fa-trash-alt"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; height: 400px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 232px;"></div></div></div>
                        </div>
                        <div class="d-block text-right card-footer">
                            <button class="mr-2 btn btn-link btn-sm">Cancel</button>
                            <button class="btn btn-primary">Add Task</button>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-6">
                    <div class="card-hover-shadow-2x mb-3 card">
                        <div class="card-header-tab card-header">
                            <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                                <i class="header-icon lnr-printer icon-gradient bg-ripe-malin"> </i>Chat Box
                            </div>
                            <div class="btn-actions-pane-right text-capitalize actions-icon-btn">
                                <div class="btn-group dropdown">
                                    <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-icon btn-icon-only btn btn-link">
                                        <i class="pe-7s-menu btn-icon-wrapper"></i>
                                    </button>
                                    <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-right rm-pointers dropdown-menu-shadow dropdown-menu-hover-link dropdown-menu">
                                        <h6 tabindex="-1" class="dropdown-header">Header</h6>
                                        <button type="button" tabindex="0" class="dropdown-item">
                                            <i class="dropdown-icon lnr-inbox"> </i><span>Menus</span>
                                        </button>
                                        <button type="button" tabindex="0" class="dropdown-item">
                                            <i class="dropdown-icon lnr-file-empty"> </i><span>Settings</span>
                                        </button>
                                        <button type="button" tabindex="0" class="dropdown-item">
                                            <i class="dropdown-icon lnr-book"> </i><span>Actions</span>
                                        </button>
                                        <div tabindex="-1" class="dropdown-divider"></div>
                                        <div class="p-3 text-right">
                                            <button class="mr-2 btn-shadow btn-sm btn btn-link">View Details</button>
                                            <button class="mr-2 btn-shadow btn-sm btn btn-primary">Action</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="scroll-area-lg">
                            <div class="scrollbar-container ps ps--active-y">
                                <div class="p-2">
                                    <div class="chat-wrapper p-1">
                                        <div class="chat-box-wrapper">
                                            <div>
                                                <div class="avatar-icon-wrapper mr-1">
                                                    <div class="badge badge-bottom btn-shine badge-success badge-dot badge-dot-lg">
                                                    </div>
                                                    <div class="avatar-icon avatar-icon-lg rounded">
                                                        <img src="assets/images/avatars/2.jpg" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="chat-box">But I must explain to you how all this mistaken
                                                    idea of denouncing pleasure and praising pain was born and I will
                                                    give you a complete account of the system.</div>
                                                <small class="opacity-6">
                                                    <i class="fa fa-calendar-alt mr-1"></i>
                                                    11:01 AM | Yesterday
                                                </small>
                                            </div>
                                        </div>
                                        <div class="float-right">
                                            <div class="chat-box-wrapper chat-box-wrapper-right">
                                                <div>
                                                    <div class="chat-box">Expound the actual teachings of the great
                                                        explorer of the truth, the master-builder of human happiness.
                                                    </div>
                                                    <small class="opacity-6">
                                                        <i class="fa fa-calendar-alt mr-1"></i>
                                                        11:01 AM | Yesterday
                                                    </small>
                                                </div>
                                                <div>
                                                    <div class="avatar-icon-wrapper ml-1">
                                                        <div class="badge badge-bottom btn-shine badge-success badge-dot badge-dot-lg">
                                                        </div>
                                                        <div class="avatar-icon avatar-icon-lg rounded">
                                                            <img src="assets/images/avatars/3.jpg" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="chat-box-wrapper">
                                            <div>
                                                <div class="avatar-icon-wrapper mr-1">
                                                    <div class="badge badge-bottom btn-shine badge-success badge-dot badge-dot-lg">
                                                    </div>
                                                    <div class="avatar-icon avatar-icon-lg rounded">
                                                        <img src="assets/images/avatars/2.jpg" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="chat-box">But I must explain to you how all this mistaken
                                                    idea of denouncing pleasure and praising pain was born and I will
                                                    give you a complete account of the system.</div>
                                                <small class="opacity-6">
                                                    <i class="fa fa-calendar-alt mr-1"></i>
                                                    11:01 AM | Yesterday
                                                </small>
                                            </div>
                                        </div>
                                        <div class="float-right">
                                            <div class="chat-box-wrapper chat-box-wrapper-right">
                                                <div>
                                                    <div class="chat-box">Denouncing pleasure and praising pain was born
                                                        and I will give you a complete account.</div>
                                                    <small class="opacity-6">
                                                        <i class="fa fa-calendar-alt mr-1"></i>
                                                        11:01 AM | Yesterday
                                                    </small>
                                                </div>
                                                <div>
                                                    <div class="avatar-icon-wrapper ml-1">
                                                        <div class="badge badge-bottom btn-shine badge-success badge-dot badge-dot-lg">
                                                        </div>
                                                        <div class="avatar-icon avatar-icon-lg rounded">
                                                            <img src="assets/images/avatars/2.jpg" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="float-right">
                                            <div class="chat-box-wrapper chat-box-wrapper-right">
                                                <div>
                                                    <div class="chat-box">The master-builder of human happiness.</div>
                                                    <small class="opacity-6">
                                                        <i class="fa fa-calendar-alt mr-1"></i>
                                                        11:01 AM | Yesterday
                                                    </small>
                                                </div>
                                                <div>
                                                    <div class="avatar-icon-wrapper ml-1">
                                                        <div class="badge badge-bottom btn-shine badge-success badge-dot badge-dot-lg">
                                                        </div>
                                                        <div class="avatar-icon avatar-icon-lg rounded">
                                                            <img src="assets/images/avatars/2.jpg" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; height: 400px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 265px;"></div></div></div>
                        </div>
                        <div class="card-footer">
                            <input placeholder="Write here and hit enter to send..." type="text" class="form-control-sm form-control">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card no-shadow bg-transparent no-border rm-borders mb-3">
                <div class="card">
                    <div class="no-gutters row">
                        <div class="col-md-12 col-lg-4">
                            <ul class="list-group list-group-flush">
                                <li class="bg-transparent list-group-item">
                                    <div class="widget-content p-0">
                                        <div class="widget-content-outer">
                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-left">
                                                    <div class="widget-heading">Total Orders</div>
                                                    <div class="widget-subheading">Last year expenses</div>
                                                </div>
                                                <div class="widget-content-right">
                                                    <div class="widget-numbers text-success">1896</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="bg-transparent list-group-item">
                                    <div class="widget-content p-0">
                                        <div class="widget-content-outer">
                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-left">
                                                    <div class="widget-heading">Clients</div>
                                                    <div class="widget-subheading">Total Clients Profit</div>
                                                </div>
                                                <div class="widget-content-right">
                                                    <div class="widget-numbers text-primary">$12.6k</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-12 col-lg-4">
                            <ul class="list-group list-group-flush">
                                <li class="bg-transparent list-group-item">
                                    <div class="widget-content p-0">
                                        <div class="widget-content-outer">
                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-left">
                                                    <div class="widget-heading">Followers</div>
                                                    <div class="widget-subheading">People Interested</div>
                                                </div>
                                                <div class="widget-content-right">
                                                    <div class="widget-numbers text-danger">45,9%</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="bg-transparent list-group-item">
                                    <div class="widget-content p-0">
                                        <div class="widget-content-outer">
                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-left">
                                                    <div class="widget-heading">Products Sold</div>
                                                    <div class="widget-subheading">Total revenue streams</div>
                                                </div>
                                                <div class="widget-content-right">
                                                    <div class="widget-numbers text-warning">$3M</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-12 col-lg-4">
                            <ul class="list-group list-group-flush">
                                <li class="bg-transparent list-group-item">
                                    <div class="widget-content p-0">
                                        <div class="widget-content-outer">
                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-left">
                                                    <div class="widget-heading">Total Orders</div>
                                                    <div class="widget-subheading">Last year expenses</div>
                                                </div>
                                                <div class="widget-content-right">
                                                    <div class="widget-numbers text-success">1896</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="bg-transparent list-group-item">
                                    <div class="widget-content p-0">
                                        <div class="widget-content-outer">
                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-left">
                                                    <div class="widget-heading">Clients</div>
                                                    <div class="widget-subheading">Total Clients Profit</div>
                                                </div>
                                                <div class="widget-content-right">
                                                    <div class="widget-numbers text-primary">$12.6k</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="app-wrapper-footer">
        <div class="app-footer">
            <div class="app-footer__inner">
                <div class="app-footer-left">
                    <div class="footer-dots">
                        <div class="dropdown">
                            <a aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="dot-btn-wrapper">
                                <i class="dot-btn-icon lnr-bullhorn icon-gradient bg-mean-fruit"></i>
                                <div class="badge badge-dot badge-abs badge-dot-sm badge-danger">Notifications</div>
                            </a>
                            <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-xl rm-pointers dropdown-menu">
                                <div class="dropdown-menu-header mb-0">
                                    <div class="dropdown-menu-header-inner bg-deep-blue">
                                        <div class="menu-header-image opacity-1" style="background-image: url('assets/images/dropdown-header/city3.jpg');"></div>
                                        <div class="menu-header-content text-dark">
                                            <h5 class="menu-header-title">Notifications</h5>
                                            <h6 class="menu-header-subtitle">You have <b>21</b> unread messages</h6>
                                        </div>
                                    </div>
                                </div>
                                <ul class="tabs-animated-shadow tabs-animated nav nav-justified tabs-shadow-bordered p-3">
                                    <li class="nav-item">
                                        <a role="tab" class="nav-link active" data-toggle="tab" href="#tab-messages-header1">
                                            <span>Messages</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a role="tab" class="nav-link" data-toggle="tab" href="#tab-events-header1">
                                            <span>Events</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a role="tab" class="nav-link" data-toggle="tab" href="#tab-errors-header1">
                                            <span>System Errors</span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab-messages-header1" role="tabpanel">
                                        <div class="scroll-area-sm">
                                            <div class="scrollbar-container ps">
                                                <div class="p-3">
                                                    <div class="notifications-box">
                                                        <div class="vertical-time-simple vertical-without-time vertical-timeline vertical-timeline--one-column">
                                                            <div class="vertical-timeline-item dot-danger vertical-timeline-element">
                                                                <div>
                                                                    <span class="vertical-timeline-element-icon bounce-in"></span>
                                                                    <div class="vertical-timeline-element-content bounce-in">
                                                                        <h4 class="timeline-title">All Hands Meeting</h4>
                                                                        <span class="vertical-timeline-element-date"></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="vertical-timeline-item dot-warning vertical-timeline-element">
                                                                <div>
                                                                    <span class="vertical-timeline-element-icon bounce-in"></span>
                                                                    <div class="vertical-timeline-element-content bounce-in">
                                                                        <p>Yet another one, at 
                                                                            <span class="text-success">15:00 PM</span>
                                                                        </p>
                                                                        <span class="vertical-timeline-element-date"></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="vertical-timeline-item dot-success vertical-timeline-element">
                                                                <div>
                                                                    <span class="vertical-timeline-element-icon bounce-in"></span>
                                                                    <div class="vertical-timeline-element-content bounce-in">
                                                                        <h4 class="timeline-title">Build the production release
                                                                            <span class="badge badge-danger ml-2">NEW</span>
                                                                        </h4>
                                                                        <span class="vertical-timeline-element-date"></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="vertical-timeline-item dot-primary vertical-timeline-element">
                                                                <div>
                                                                    <span class="vertical-timeline-element-icon bounce-in"></span>
                                                                    <div class="vertical-timeline-element-content bounce-in">
                                                                        <h4 class="timeline-title">Something not important
                                                                            <div class="avatar-wrapper mt-2 avatar-wrapper-overlap">
                                                                                <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                    <div class="avatar-icon">
                                                                                        <img src="assets/images/avatars/1.jpg" alt="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                    <div class="avatar-icon">
                                                                                        <img src="assets/images/avatars/2.jpg" alt="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                    <div class="avatar-icon">
                                                                                        <img src="assets/images/avatars/3.jpg" alt="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                    <div class="avatar-icon">
                                                                                        <img src="assets/images/avatars/4.jpg" alt="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                    <div class="avatar-icon">
                                                                                        <img src="assets/images/avatars/5.jpg" alt="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                    <div class="avatar-icon">
                                                                                        <img src="assets/images/avatars/9.jpg" alt="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                    <div class="avatar-icon">
                                                                                        <img src="assets/images/avatars/7.jpg" alt="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                    <div class="avatar-icon">
                                                                                        <img src="assets/images/avatars/8.jpg" alt="">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="avatar-icon-wrapper avatar-icon-sm avatar-icon-add">
                                                                                    <div class="avatar-icon"><i>+</i></div>
                                                                                </div>
                                                                            </div>
                                                                        </h4>
                                                                        <span class="vertical-timeline-element-date"></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="vertical-timeline-item dot-info vertical-timeline-element">
                                                                <div>
                                                                    <span class="vertical-timeline-element-icon bounce-in"></span>
                                                                    <div class="vertical-timeline-element-content bounce-in">
                                                                        <h4 class="timeline-title">This dot has an info state</h4>
                                                                        <span class="vertical-timeline-element-date"></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="vertical-timeline-item dot-danger vertical-timeline-element">
                                                                <div>
                                                                    <span class="vertical-timeline-element-icon bounce-in"></span>
                                                                    <div class="vertical-timeline-element-content bounce-in">
                                                                        <h4 class="timeline-title">All Hands Meeting</h4>
                                                                        <span class="vertical-timeline-element-date"></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="vertical-timeline-item dot-warning vertical-timeline-element">
                                                                <div>
                                                                    <span class="vertical-timeline-element-icon bounce-in"></span>
                                                                    <div class="vertical-timeline-element-content bounce-in">
                                                                        <p>Yet another one, at 
                                                                            <span class="text-success">15:00 PM</span>
                                                                        </p>
                                                                        <span class="vertical-timeline-element-date"></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="vertical-timeline-item dot-success vertical-timeline-element">
                                                                <div>
                                                                    <span class="vertical-timeline-element-icon bounce-in"></span>
                                                                    <div class="vertical-timeline-element-content bounce-in">
                                                                        <h4 class="timeline-title">Build the production release
                                                                            <span class="badge badge-danger ml-2">NEW</span>
                                                                        </h4>
                                                                        <span class="vertical-timeline-element-date"></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="vertical-timeline-item dot-dark vertical-timeline-element">
                                                                <div>
                                                                    <span class="vertical-timeline-element-icon bounce-in"></span>
                                                                    <div class="vertical-timeline-element-content bounce-in">
                                                                        <h4 class="timeline-title">This dot has a dark state</h4>
                                                                        <span class="vertical-timeline-element-date"></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab-events-header1" role="tabpanel">
                                        <div class="scroll-area-sm">
                                            <div class="scrollbar-container ps">
                                                <div class="p-3">
                                                    <div class="vertical-without-time vertical-timeline vertical-timeline--animate vertical-timeline--one-column">
                                                        <div class="vertical-timeline-item vertical-timeline-element">
                                                            <div>
                                                                <span class="vertical-timeline-element-icon bounce-in">
                                                                    <i class="badge badge-dot badge-dot-xl badge-success"></i>
                                                                </span>
                                                                <div class="vertical-timeline-element-content bounce-in">
                                                                    <h4 class="timeline-title">All Hands Meeting</h4>
                                                                    <p>Lorem ipsum dolor sic amet, today at 
                                                                        <a href="javascript:void(0);">12:00 PM</a>
                                                                    </p>
                                                                    <span class="vertical-timeline-element-date"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="vertical-timeline-item vertical-timeline-element">
                                                            <div>
                                                                <span class="vertical-timeline-element-icon bounce-in">
                                                                    <i class="badge badge-dot badge-dot-xl badge-warning"></i>
                                                                </span>
                                                                <div class="vertical-timeline-element-content bounce-in">
                                                                    <p>Another meeting today, at 
                                                                        <b class="text-danger">12:00 PM</b>
                                                                    </p>
                                                                    <p>Yet another one, at <span class="text-success">15:00 PM</span></p>
                                                                    <span class="vertical-timeline-element-date"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="vertical-timeline-item vertical-timeline-element">
                                                            <div>
                                                                <span class="vertical-timeline-element-icon bounce-in">
                                                                    <i class="badge badge-dot badge-dot-xl badge-danger"></i>
                                                                </span>
                                                                <div class="vertical-timeline-element-content bounce-in">
                                                                    <h4 class="timeline-title">Build the production release</h4>
                                                                    <p>Lorem ipsum dolor sit amit,consectetur eiusmdd tempor
                                                                        incididunt ut labore et dolore magna elit enim at
                                                                        minim veniam quis nostrud
                                                                    </p>
                                                                    <span class="vertical-timeline-element-date"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="vertical-timeline-item vertical-timeline-element">
                                                            <div>
                                                                <span class="vertical-timeline-element-icon bounce-in">
                                                                    <i class="badge badge-dot badge-dot-xl badge-primary"></i>
                                                                </span>
                                                                <div class="vertical-timeline-element-content bounce-in">
                                                                    <h4 class="timeline-title text-success">Something not important</h4>
                                                                    <p>Lorem ipsum dolor sit amit,consectetur elit enim at
                                                                        minim veniam quis nostrud</p>
                                                                    <span class="vertical-timeline-element-date"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="vertical-timeline-item vertical-timeline-element">
                                                            <div>
                                                                <span class="vertical-timeline-element-icon bounce-in">
                                                                    <i class="badge badge-dot badge-dot-xl badge-success"></i>
                                                                </span>
                                                                <div class="vertical-timeline-element-content bounce-in">
                                                                    <h4 class="timeline-title">All Hands Meeting</h4>
                                                                    <p>Lorem ipsum dolor sic amet, today at 
                                                                        <a href="javascript:void(0);">12:00 PM</a>
                                                                    </p>
                                                                    <span class="vertical-timeline-element-date"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="vertical-timeline-item vertical-timeline-element">
                                                            <div>
                                                                <span class="vertical-timeline-element-icon bounce-in">
                                                                    <i class="badge badge-dot badge-dot-xl badge-warning"></i>
                                                                </span>
                                                                <div class="vertical-timeline-element-content bounce-in">
                                                                    <p>Another meeting today, at 
                                                                        <b class="text-danger">12:00 PM</b>
                                                                    </p>
                                                                    <p>Yet another one, at <span class="text-success">15:00 PM</span></p>
                                                                    <span class="vertical-timeline-element-date"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="vertical-timeline-item vertical-timeline-element">
                                                            <div>
                                                                <span class="vertical-timeline-element-icon bounce-in">
                                                                    <i class="badge badge-dot badge-dot-xl badge-danger"></i>
                                                                </span>
                                                                <div class="vertical-timeline-element-content bounce-in">
                                                                    <h4 class="timeline-title">Build the production release</h4>
                                                                    <p>Lorem ipsum dolor sit amit,consectetur eiusmdd tempor
                                                                        incididunt ut labore et dolore magna elit enim at
                                                                        minim veniam quis nostrud
                                                                    </p>
                                                                    <span class="vertical-timeline-element-date"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="vertical-timeline-item vertical-timeline-element">
                                                            <div>
                                                                <span class="vertical-timeline-element-icon bounce-in">
                                                                    <i class="badge badge-dot badge-dot-xl badge-primary"></i>
                                                                </span>
                                                                <div class="vertical-timeline-element-content bounce-in">
                                                                    <h4 class="timeline-title text-success">Something not important</h4>
                                                                    <p>Lorem ipsum dolor sit amit,consectetur elit enim at
                                                                        minim veniam quis nostrud
                                                                    </p>
                                                                    <span class="vertical-timeline-element-date"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab-errors-header1" role="tabpanel">
                                        <div class="scroll-area-sm">
                                            <div class="scrollbar-container ps">
                                                <div class="no-results pt-3 pb-0">
                                                    <div class="swal2-icon swal2-success swal2-animate-success-icon">
                                                        <div class="swal2-success-circular-line-left" style="background-color: rgb(255, 255, 255);"></div>
                                                        <span class="swal2-success-line-tip"></span>
                                                        <span class="swal2-success-line-long"></span>
                                                        <div class="swal2-success-ring"></div>
                                                        <div class="swal2-success-fix" style="background-color: rgb(255, 255, 255);"></div>
                                                        <div class="swal2-success-circular-line-right" style="background-color: rgb(255, 255, 255);"></div>
                                                    </div>
                                                    <div class="results-subtitle">All caught up!</div>
                                                    <div class="results-title">There are no system errors!</div>
                                                </div>
                                            <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
                                        </div>
                                    </div>
                                </div>
                                <ul class="nav flex-column">
                                    <li class="nav-item-divider nav-item"></li>
                                    <li class="nav-item-btn text-center nav-item">
                                        <button class="btn-shadow btn-wide btn-pill btn btn-focus btn-sm">View Latest Changes</button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="dots-separator"></div>
                        <div class="dropdown">
                            <a class="dot-btn-wrapper" aria-haspopup="true" data-toggle="dropdown" aria-expanded="false">
                                <i class="dot-btn-icon lnr-earth icon-gradient bg-happy-itmeo"></i>
                            </a>
                            <div tabindex="-1" role="menu" aria-hidden="true" class="rm-pointers dropdown-menu">
                                <div class="dropdown-menu-header">
                                    <div class="dropdown-menu-header-inner pt-4 pb-4 bg-focus">
                                        <div class="menu-header-image opacity-05" style="background-image: url('assets/images/dropdown-header/city2.jpg');"></div>
                                        <div class="menu-header-content text-center text-white">
                                            <h6 class="menu-header-subtitle mt-0"> Choose Language</h6>
                                        </div>
                                    </div>
                                </div>
                                <h6 tabindex="-1" class="dropdown-header"> Popular Languages</h6>
                                <button type="button" tabindex="0" class="dropdown-item">
                                    <span class="mr-3 opacity-8 flag large US"></span> USA
                                </button>
                                <button type="button" tabindex="0" class="dropdown-item">
                                    <span class="mr-3 opacity-8 flag large CH"></span> Switzerland
                                </button>
                                <button type="button" tabindex="0" class="dropdown-item">
                                    <span class="mr-3 opacity-8 flag large FR"></span>France
                                </button>
                                <button type="button" tabindex="0" class="dropdown-item">
                                    <span class="mr-3 opacity-8 flag large ES"></span>Spain
                                </button>
                                <div tabindex="-1" class="dropdown-divider"></div>
                                <h6 tabindex="-1" class="dropdown-header">Others</h6>
                                <button type="button" tabindex="0" class="dropdown-item active">
                                    <span class="mr-3 opacity-8 flag large DE"></span>Germany
                                </button>
                                <button type="button" tabindex="0" class="dropdown-item">
                                    <span class="mr-3 opacity-8 flag large IT"></span> Italy
                                </button>
                            </div>
                        </div>
                        <div class="dots-separator"></div>
                        <div class="dropdown">
                            <a class="dot-btn-wrapper dd-chart-btn-2" aria-haspopup="true" data-toggle="dropdown" aria-expanded="false">
                                <i class="dot-btn-icon lnr-pie-chart icon-gradient bg-love-kiss"></i>
                                <div class="badge badge-dot badge-abs badge-dot-sm badge-warning">Notifications</div>
                            </a>
                            <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-xl rm-pointers dropdown-menu">
                                <div class="dropdown-menu-header">
                                    <div class="dropdown-menu-header-inner bg-premium-dark">
                                        <div class="menu-header-image" style="background-image: url('assets/images/dropdown-header/abstract4.jpg');"></div>
                                        <div class="menu-header-content text-white">
                                            <h5 class="menu-header-title">Users Online</h5>
                                            <h6 class="menu-header-subtitle">Recent Account Activity Overview</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-chart">
                                    <div class="widget-chart-content">
                                        <div class="icon-wrapper rounded-circle">
                                            <div class="icon-wrapper-bg opacity-9 bg-focus"></div>
                                            <i class="lnr-users text-white"></i>
                                        </div>
                                        <div class="widget-numbers">
                                            <span>344k</span>
                                        </div>
                                        <div class="widget-subheading pt-2"> Profile views since last login</div>
                                        <div class="widget-description text-danger">
                                            <span class="pr-1"> <span>176%</span></span>
                                            <i class="fa fa-arrow-left"></i>
                                        </div>
                                    </div>
                                    <div class="widget-chart-wrapper">
                                        <div id="dashboard-sparkline-carousel-4-pop"></div>
                                    </div>
                                </div>
                                <ul class="nav flex-column">
                                    <li class="nav-item-divider mt-0 nav-item"></li>
                                    <li class="nav-item-btn text-center nav-item">
                                        <button class="btn-shine btn-wide btn-pill btn btn-warning btn-sm">
                                            <i class="fa fa-cog fa-spin mr-2"></i> View Details
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="app-footer-right">
                    <ul class="header-megamenu nav">
                        <li class="nav-item">
                            <a data-placement="top" rel="popover-focus" data-offset="300" data-toggle="popover-custom" class="nav-link" data-original-title="" title="">
                                Footer Menu
                                <i class="fa fa-angle-up ml-2 opacity-8"></i>
                            </a>
                            <div class="rm-max-width rm-pointers">
                                <div class="d-none popover-custom-content">
                                    <div class="dropdown-mega-menu dropdown-mega-menu-sm">
                                        <div class="grid-menu grid-menu-2col">
                                            <div class="no-gutters row">
                                                <div class="col-sm-6 col-xl-6">
                                                    <ul class="nav flex-column">
                                                        <li class="nav-item-header nav-item">Overview</li>
                                                        <li class="nav-item">
                                                            <a class="nav-link">
                                                                <i class="nav-link-icon lnr-inbox"></i>
                                                                <span>Contacts</span>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link">
                                                                <i class="nav-link-icon lnr-book"></i>
                                                                <span>Incidents</span>
                                                                <div class="ml-auto badge badge-pill badge-danger">5</div>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link">
                                                                <i class="nav-link-icon lnr-picture"></i>
                                                                <span>Companies</span>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a disabled="" class="nav-link disabled">
                                                                <i class="nav-link-icon lnr-file-empty"></i>
                                                                <span>Dashboards</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-sm-6 col-xl-6">
                                                    <ul class="nav flex-column">
                                                        <li class="nav-item-header nav-item">Sales &amp; Marketing</li>
                                                        <li class="nav-item"><a class="nav-link">Queues</a></li>
                                                        <li class="nav-item"><a class="nav-link">Resource Groups</a></li>
                                                        <li class="nav-item">
                                                            <a class="nav-link">Goal Metrics
                                                                <div class="ml-auto badge badge-warning">3</div>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item"><a class="nav-link">Campaigns</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a data-placement="top" rel="popover-focus" data-offset="300" data-toggle="popover-custom" class="nav-link" data-original-title="" title="">
                                Grid Menu
                                <div class="badge badge-dark ml-0 ml-1">
                                    <small>NEW</small>
                                </div>
                                <i class="fa fa-angle-up ml-2 opacity-8"></i>
                            </a>
                            <div class="rm-max-width rm-pointers">
                                <div class="d-none popover-custom-content">
                                    <div class="dropdown-menu-header">
                                        <div class="dropdown-menu-header-inner bg-tempting-azure">
                                            <div class="menu-header-image opacity-1" style="background-image: url('assets/images/dropdown-header/city5.jpg');"></div>
                                            <div class="menu-header-content text-dark">
                                                <h5 class="menu-header-title">Two Column Grid</h5>
                                                <h6 class="menu-header-subtitle">Easy grid navigation inside popovers</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid-menu grid-menu-2col">
                                        <div class="no-gutters row">
                                            <div class="col-sm-6">
                                                <button class="btn-icon-vertical btn-transition-text btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-dark">
                                                    <i class="lnr-lighter text-dark opacity-7 btn-icon-wrapper mb-2"></i>Automation
                                                </button>
                                            </div>
                                            <div class="col-sm-6">
                                                <button class="btn-icon-vertical btn-transition-text btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-danger">
                                                    <i class="lnr-construction text-danger opacity-7 btn-icon-wrapper mb-2"></i>Reports
                                                </button>
                                            </div>
                                            <div class="col-sm-6">
                                                <button class="btn-icon-vertical btn-transition-text btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-success">
                                                    <i class="lnr-bus text-success opacity-7 btn-icon-wrapper mb-2"></i>Activity
                                                </button>
                                            </div>
                                            <div class="col-sm-6">
                                                <button class="btn-icon-vertical btn-transition-text btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-focus">
                                                    <i class="lnr-gift text-focus opacity-7 btn-icon-wrapper mb-2"></i>Settings
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="nav flex-column">
                                        <li class="nav-item-divider nav-item"></li>
                                        <li class="nav-item-btn clearfix nav-item">
                                            <div class="float-left">
                                                <button class="btn btn-link btn-sm">Link Button</button>
                                            </div>
                                            <div class="float-right">
                                                <button class="btn-shadow btn btn-info btn-sm">Info Button</button>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div></div>
@endsection
