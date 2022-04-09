@extends('layouts.admin_layout')

@section('title', 'Blogger Admin Panel')

@section('content')

    <div class="row">
        <div class="col-lg-8 mb-4 order-0">
            <div class="card">
                <div class="d-flex align-items-end row">
                    <div class="col-sm-7">
                        <div class="card-body">
                            <h5 class="card-title text-primary">Congratulations John! 🎉</h5>
                            <p class="mb-4">
                                You have done <span class="fw-bold">72%</span> more sales today. Check your new badge in
                                your profile.
                            </p>

                            <a href="javascript:;" class="btn btn-sm btn-outline-primary">View Badges</a>
                        </div>
                    </div>
                    <div class="col-sm-5 text-center text-sm-left">
                        <div class="card-body pb-0 px-0 px-md-4">
                            <img src="{{asset("assets")}}/admin/img/illustrations/man-with-laptop-light.png"
                                 alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png"
                                 data-app-light-img="illustrations/man-with-laptop-light.png" height="140">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 order-1">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <img src="{{asset("assets")}}/admin/img/icons/unicons/chart-success.png"
                                         alt="chart success" class="rounded">
                                </div>
                                <div class="dropdown">
                                    <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                                        <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                    </div>
                                </div>
                            </div>
                            <span class="fw-semibold d-block mb-1">Profit</span>
                            <h3 class="card-title mb-2">$12,628</h3>
                            <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +72.80%</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <img src="{{asset("assets")}}/admin/img/icons/unicons/wallet-info.png"
                                         alt="Credit Card" class="rounded">
                                </div>
                                <div class="dropdown">
                                    <button class="btn p-0" type="button" id="cardOpt6" data-bs-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt6">
                                        <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                    </div>
                                </div>
                            </div>
                            <span>Sales</span>
                            <h3 class="card-title text-nowrap mb-1">$4,679</h3>
                            <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +28.42%</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Total Revenue -->
        <div class="col-12 col-lg-8 order-2 order-md-3 order-lg-2 mb-4">
            <div class="card">
                <div class="row row-bordered g-0">
                    <div class="col-md-8">
                        <h5 class="card-header m-0 me-2 pb-3">Total Revenue</h5>
                        <div id="totalRevenueChart" class="px-2" style="min-height: 315px;">
                            <div id="apexchartsw8935ckqg"
                                 class="apexcharts-canvas apexchartsw8935ckqg apexcharts-theme-light"
                                 style="width: 595px; height: 300px;">
                                <svg id="SvgjsSvg1593" width="595" height="300" xmlns="http://www.w3.org/2000/svg"
                                     version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                                     xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS"
                                     transform="translate(0, 0)"
                                     style="background: transparent none repeat scroll 0% 0%;">
                                    <foreignObject x="0" y="0" width="595" height="300">
                                        <div class="apexcharts-legend apexcharts-align-left apx-legend-position-top"
                                             xmlns="http://www.w3.org/1999/xhtml"
                                             style="right: 0px; position: absolute; left: 0px; top: 4px; max-height: 150px;">
                                            <div class="apexcharts-legend-series" style="margin: 2px 10px;" rel="1"
                                                 seriesname="2021" data:collapsed="false"><span
                                                    class="apexcharts-legend-marker"
                                                    style="background: rgb(105, 108, 255) none repeat scroll 0% 0% !important; color: rgb(105, 108, 255); height: 8px; width: 8px; left: -3px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"
                                                    rel="1" data:collapsed="false"></span><span
                                                    class="apexcharts-legend-text"
                                                    style="color: rgb(161, 172, 184); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;"
                                                    rel="1" i="0" data:default-text="2021"
                                                    data:collapsed="false">2021</span></div>
                                            <div class="apexcharts-legend-series" style="margin: 2px 10px;" rel="2"
                                                 seriesname="2020" data:collapsed="false"><span
                                                    class="apexcharts-legend-marker"
                                                    style="background: rgb(3, 195, 236) none repeat scroll 0% 0% !important; color: rgb(3, 195, 236); height: 8px; width: 8px; left: -3px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"
                                                    rel="2" data:collapsed="false"></span><span
                                                    class="apexcharts-legend-text"
                                                    style="color: rgb(161, 172, 184); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;"
                                                    rel="2" i="1" data:default-text="2020"
                                                    data:collapsed="false">2020</span></div>
                                        </div>
                                        <style type="text/css">

                                            .apexcharts-legend {
                                                display: flex;
                                                overflow: auto;
                                                padding: 0 10px;
                                            }

                                            .apexcharts-legend.apx-legend-position-bottom, .apexcharts-legend.apx-legend-position-top {
                                                flex-wrap: wrap
                                            }

                                            .apexcharts-legend.apx-legend-position-right, .apexcharts-legend.apx-legend-position-left {
                                                flex-direction: column;
                                                bottom: 0;
                                            }

                                            .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-left, .apexcharts-legend.apx-legend-position-top.apexcharts-align-left, .apexcharts-legend.apx-legend-position-right, .apexcharts-legend.apx-legend-position-left {
                                                justify-content: flex-start;
                                            }

                                            .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-center, .apexcharts-legend.apx-legend-position-top.apexcharts-align-center {
                                                justify-content: center;
                                            }

                                            .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-right, .apexcharts-legend.apx-legend-position-top.apexcharts-align-right {
                                                justify-content: flex-end;
                                            }

                                            .apexcharts-legend-series {
                                                cursor: pointer;
                                                line-height: normal;
                                            }

                                            .apexcharts-legend.apx-legend-position-bottom .apexcharts-legend-series, .apexcharts-legend.apx-legend-position-top .apexcharts-legend-series {
                                                display: flex;
                                                align-items: center;
                                            }

                                            .apexcharts-legend-text {
                                                position: relative;
                                                font-size: 14px;
                                            }

                                            .apexcharts-legend-text *, .apexcharts-legend-marker * {
                                                pointer-events: none;
                                            }

                                            .apexcharts-legend-marker {
                                                position: relative;
                                                display: inline-block;
                                                cursor: pointer;
                                                margin-right: 3px;
                                                border-style: solid;
                                            }

                                            .apexcharts-legend.apexcharts-align-right .apexcharts-legend-series, .apexcharts-legend.apexcharts-align-left .apexcharts-legend-series {
                                                display: inline-block;
                                            }

                                            .apexcharts-legend-series.apexcharts-no-click {
                                                cursor: auto;
                                            }

                                            .apexcharts-legend .apexcharts-hidden-zero-series, .apexcharts-legend .apexcharts-hidden-null-series {
                                                display: none !important;
                                            }

                                            .apexcharts-inactive-legend {
                                                opacity: 0.45;
                                            }</style>
                                    </foreignObject>
                                    <g id="SvgjsG1595" class="apexcharts-inner apexcharts-graphical"
                                       transform="translate(55.81666564941406, 53)">
                                        <defs id="SvgjsDefs1594">
                                            <linearGradient id="SvgjsLinearGradient1599" x1="0" y1="0" x2="0" y2="1">
                                                <stop id="SvgjsStop1600" stop-opacity="0.4"
                                                      stop-color="rgba(216,227,240,0.4)" offset="0"></stop>
                                                <stop id="SvgjsStop1601" stop-opacity="0.5"
                                                      stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                                <stop id="SvgjsStop1602" stop-opacity="0.5"
                                                      stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                            </linearGradient>
                                            <clipPath id="gridRectMaskw8935ckqg">
                                                <rect id="SvgjsRect1604" width="529.1833343505859" height="223.348"
                                                      x="-5" y="-3" rx="0" ry="0" opacity="1" stroke-width="0"
                                                      stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                            </clipPath>
                                            <clipPath id="forecastMaskw8935ckqg"></clipPath>
                                            <clipPath id="nonForecastMaskw8935ckqg"></clipPath>
                                            <clipPath id="gridRectMarkerMaskw8935ckqg">
                                                <rect id="SvgjsRect1605" width="523.1833343505859" height="221.348"
                                                      x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0"
                                                      stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                            </clipPath>
                                        </defs>
                                        <rect id="SvgjsRect1603" width="24.47578576224191" height="217.348"
                                              x="178.84305935450962" y="0" rx="0" ry="0" opacity="1" stroke-width="0"
                                              stroke-dasharray="3" fill="url(#SvgjsLinearGradient1599)"
                                              class="apexcharts-xcrosshairs" y2="217.348" filter="none"
                                              fill-opacity="0.9" x1="178.84305935450962" x2="178.84305935450962"></rect>
                                        <g id="SvgjsG1625" class="apexcharts-xaxis" transform="translate(0, 0)">
                                            <g id="SvgjsG1626" class="apexcharts-xaxis-texts-g"
                                               transform="translate(0, -4)">
                                                <text id="SvgjsText1628" font-family="Helvetica, Arial, sans-serif"
                                                      x="37.08452388218471" y="246.348" text-anchor="middle"
                                                      dominant-baseline="auto" font-size="13px" font-weight="400"
                                                      fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label "
                                                      style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1629">Jan</tspan>
                                                    <title>Jan</title></text>
                                                <text id="SvgjsText1631" font-family="Helvetica, Arial, sans-serif"
                                                      x="111.25357164655414" y="246.348" text-anchor="middle"
                                                      dominant-baseline="auto" font-size="13px" font-weight="400"
                                                      fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label "
                                                      style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1632">Feb</tspan>
                                                    <title>Feb</title></text>
                                                <text id="SvgjsText1634" font-family="Helvetica, Arial, sans-serif"
                                                      x="185.42261941092357" y="246.348" text-anchor="middle"
                                                      dominant-baseline="auto" font-size="13px" font-weight="400"
                                                      fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label "
                                                      style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1635">Mar</tspan>
                                                    <title>Mar</title></text>
                                                <text id="SvgjsText1637" font-family="Helvetica, Arial, sans-serif"
                                                      x="259.59166717529297" y="246.348" text-anchor="middle"
                                                      dominant-baseline="auto" font-size="13px" font-weight="400"
                                                      fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label "
                                                      style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1638">Apr</tspan>
                                                    <title>Apr</title></text>
                                                <text id="SvgjsText1640" font-family="Helvetica, Arial, sans-serif"
                                                      x="333.7607149396624" y="246.348" text-anchor="middle"
                                                      dominant-baseline="auto" font-size="13px" font-weight="400"
                                                      fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label "
                                                      style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1641">May</tspan>
                                                    <title>May</title></text>
                                                <text id="SvgjsText1643" font-family="Helvetica, Arial, sans-serif"
                                                      x="407.9297627040319" y="246.348" text-anchor="middle"
                                                      dominant-baseline="auto" font-size="13px" font-weight="400"
                                                      fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label "
                                                      style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1644">Jun</tspan>
                                                    <title>Jun</title></text>
                                                <text id="SvgjsText1646" font-family="Helvetica, Arial, sans-serif"
                                                      x="482.0988104684013" y="246.348" text-anchor="middle"
                                                      dominant-baseline="auto" font-size="13px" font-weight="400"
                                                      fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label "
                                                      style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1647">Jul</tspan>
                                                    <title>Jul</title></text>
                                            </g>
                                        </g>
                                        <g id="SvgjsG1662" class="apexcharts-grid">
                                            <g id="SvgjsG1663" class="apexcharts-gridlines-horizontal">
                                                <line id="SvgjsLine1665" x1="0" y1="0" x2="519.1833343505859" y2="0"
                                                      stroke="#eceef1" stroke-dasharray="0" stroke-linecap="butt"
                                                      class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1666" x1="0" y1="43.4696" x2="519.1833343505859"
                                                      y2="43.4696" stroke="#eceef1" stroke-dasharray="0"
                                                      stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1667" x1="0" y1="86.9392" x2="519.1833343505859"
                                                      y2="86.9392" stroke="#eceef1" stroke-dasharray="0"
                                                      stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1668" x1="0" y1="130.40879999999999"
                                                      x2="519.1833343505859" y2="130.40879999999999" stroke="#eceef1"
                                                      stroke-dasharray="0" stroke-linecap="butt"
                                                      class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1669" x1="0" y1="173.8784" x2="519.1833343505859"
                                                      y2="173.8784" stroke="#eceef1" stroke-dasharray="0"
                                                      stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1670" x1="0" y1="217.348" x2="519.1833343505859"
                                                      y2="217.348" stroke="#eceef1" stroke-dasharray="0"
                                                      stroke-linecap="butt" class="apexcharts-gridline"></line>
                                            </g>
                                            <g id="SvgjsG1664" class="apexcharts-gridlines-vertical"></g>
                                            <line id="SvgjsLine1672" x1="0" y1="217.348" x2="519.1833343505859"
                                                  y2="217.348" stroke="transparent" stroke-dasharray="0"
                                                  stroke-linecap="butt"></line>
                                            <line id="SvgjsLine1671" x1="0" y1="1" x2="0" y2="217.348"
                                                  stroke="transparent" stroke-dasharray="0"
                                                  stroke-linecap="butt"></line>
                                        </g>
                                        <g id="SvgjsG1606" class="apexcharts-bar-series apexcharts-plot-series">
                                            <g id="SvgjsG1607" class="apexcharts-series" seriesName="2021" rel="1"
                                               data:realIndex="0">
                                                <path id="SvgjsPath1609"
                                                      d="M 24.846631001063756 118.40879999999999L 24.846631001063756 64.16351999999998Q 24.846631001063756 52.16351999999998 36.846631001063756 52.16351999999998L 31.322416763305668 52.16351999999998Q 43.32241676330567 52.16351999999998 43.32241676330567 64.16351999999998L 43.32241676330567 64.16351999999998L 43.32241676330567 118.40879999999999Q 43.32241676330567 130.40879999999999 31.322416763305668 130.40879999999999L 36.846631001063756 130.40879999999999Q 24.846631001063756 130.40879999999999 24.846631001063756 118.40879999999999z"
                                                      fill="rgba(105,108,255,0.85)" fill-opacity="1" stroke="#ffffff"
                                                      stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                      stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                      clip-path="url(#gridRectMaskw8935ckqg)"
                                                      pathTo="M 24.846631001063756 118.40879999999999L 24.846631001063756 64.16351999999998Q 24.846631001063756 52.16351999999998 36.846631001063756 52.16351999999998L 31.322416763305668 52.16351999999998Q 43.32241676330567 52.16351999999998 43.32241676330567 64.16351999999998L 43.32241676330567 64.16351999999998L 43.32241676330567 118.40879999999999Q 43.32241676330567 130.40879999999999 31.322416763305668 130.40879999999999L 36.846631001063756 130.40879999999999Q 24.846631001063756 130.40879999999999 24.846631001063756 118.40879999999999z"
                                                      pathFrom="M 24.846631001063756 118.40879999999999L 24.846631001063756 118.40879999999999L 43.32241676330567 118.40879999999999L 43.32241676330567 118.40879999999999L 43.32241676330567 118.40879999999999L 43.32241676330567 118.40879999999999L 43.32241676330567 118.40879999999999L 24.846631001063756 118.40879999999999"
                                                      cy="52.16351999999998" cx="96.01567876543318" j="0" val="18"
                                                      barHeight="78.24528000000001" barWidth="24.47578576224191"></path>
                                                <path id="SvgjsPath1610"
                                                      d="M 99.01567876543318 118.40879999999999L 99.01567876543318 111.98007999999999Q 99.01567876543318 99.98007999999999 111.01567876543318 99.98007999999999L 105.49146452767509 99.98007999999999Q 117.49146452767509 99.98007999999999 117.49146452767509 111.98007999999999L 117.49146452767509 111.98007999999999L 117.49146452767509 118.40879999999999Q 117.49146452767509 130.40879999999999 105.49146452767509 130.40879999999999L 111.01567876543318 130.40879999999999Q 99.01567876543318 130.40879999999999 99.01567876543318 118.40879999999999z"
                                                      fill="rgba(105,108,255,0.85)" fill-opacity="1" stroke="#ffffff"
                                                      stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                      stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                      clip-path="url(#gridRectMaskw8935ckqg)"
                                                      pathTo="M 99.01567876543318 118.40879999999999L 99.01567876543318 111.98007999999999Q 99.01567876543318 99.98007999999999 111.01567876543318 99.98007999999999L 105.49146452767509 99.98007999999999Q 117.49146452767509 99.98007999999999 117.49146452767509 111.98007999999999L 117.49146452767509 111.98007999999999L 117.49146452767509 118.40879999999999Q 117.49146452767509 130.40879999999999 105.49146452767509 130.40879999999999L 111.01567876543318 130.40879999999999Q 99.01567876543318 130.40879999999999 99.01567876543318 118.40879999999999z"
                                                      pathFrom="M 99.01567876543318 118.40879999999999L 99.01567876543318 118.40879999999999L 117.49146452767509 118.40879999999999L 117.49146452767509 118.40879999999999L 117.49146452767509 118.40879999999999L 117.49146452767509 118.40879999999999L 117.49146452767509 118.40879999999999L 99.01567876543318 118.40879999999999"
                                                      cy="99.98007999999999" cx="170.18472652980262" j="1" val="7"
                                                      barHeight="30.428720000000002"
                                                      barWidth="24.47578576224191"></path>
                                                <path id="SvgjsPath1611"
                                                      d="M 173.18472652980262 118.40879999999999L 173.18472652980262 77.20439999999998Q 173.18472652980262 65.20439999999998 185.18472652980262 65.20439999999998L 179.66051229204453 65.20439999999998Q 191.66051229204453 65.20439999999998 191.66051229204453 77.20439999999998L 191.66051229204453 77.20439999999998L 191.66051229204453 118.40879999999999Q 191.66051229204453 130.40879999999999 179.66051229204453 130.40879999999999L 185.18472652980262 130.40879999999999Q 173.18472652980262 130.40879999999999 173.18472652980262 118.40879999999999z"
                                                      fill="rgba(105,108,255,0.85)" fill-opacity="1" stroke="#ffffff"
                                                      stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                      stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                      clip-path="url(#gridRectMaskw8935ckqg)"
                                                      pathTo="M 173.18472652980262 118.40879999999999L 173.18472652980262 77.20439999999998Q 173.18472652980262 65.20439999999998 185.18472652980262 65.20439999999998L 179.66051229204453 65.20439999999998Q 191.66051229204453 65.20439999999998 191.66051229204453 77.20439999999998L 191.66051229204453 77.20439999999998L 191.66051229204453 118.40879999999999Q 191.66051229204453 130.40879999999999 179.66051229204453 130.40879999999999L 185.18472652980262 130.40879999999999Q 173.18472652980262 130.40879999999999 173.18472652980262 118.40879999999999z"
                                                      pathFrom="M 173.18472652980262 118.40879999999999L 173.18472652980262 118.40879999999999L 191.66051229204453 118.40879999999999L 191.66051229204453 118.40879999999999L 191.66051229204453 118.40879999999999L 191.66051229204453 118.40879999999999L 191.66051229204453 118.40879999999999L 173.18472652980262 118.40879999999999"
                                                      cy="65.20439999999998" cx="244.35377429417204" j="2" val="15"
                                                      barHeight="65.2044" barWidth="24.47578576224191"></path>
                                                <path id="SvgjsPath1612"
                                                      d="M 247.35377429417204 118.40879999999999L 247.35377429417204 16.346959999999967Q 247.35377429417204 4.346959999999967 259.353774294172 4.346959999999967L 253.82956005641392 4.346959999999967Q 265.8295600564139 4.346959999999967 265.8295600564139 16.346959999999967L 265.8295600564139 16.346959999999967L 265.8295600564139 118.40879999999999Q 265.8295600564139 130.40879999999999 253.82956005641392 130.40879999999999L 259.353774294172 130.40879999999999Q 247.35377429417204 130.40879999999999 247.35377429417204 118.40879999999999z"
                                                      fill="rgba(105,108,255,0.85)" fill-opacity="1" stroke="#ffffff"
                                                      stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                      stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                      clip-path="url(#gridRectMaskw8935ckqg)"
                                                      pathTo="M 247.35377429417204 118.40879999999999L 247.35377429417204 16.346959999999967Q 247.35377429417204 4.346959999999967 259.353774294172 4.346959999999967L 253.82956005641392 4.346959999999967Q 265.8295600564139 4.346959999999967 265.8295600564139 16.346959999999967L 265.8295600564139 16.346959999999967L 265.8295600564139 118.40879999999999Q 265.8295600564139 130.40879999999999 253.82956005641392 130.40879999999999L 259.353774294172 130.40879999999999Q 247.35377429417204 130.40879999999999 247.35377429417204 118.40879999999999z"
                                                      pathFrom="M 247.35377429417204 118.40879999999999L 247.35377429417204 118.40879999999999L 265.8295600564139 118.40879999999999L 265.8295600564139 118.40879999999999L 265.8295600564139 118.40879999999999L 265.8295600564139 118.40879999999999L 265.8295600564139 118.40879999999999L 247.35377429417204 118.40879999999999"
                                                      cy="4.346959999999967" cx="318.52282205854146" j="3" val="29"
                                                      barHeight="126.06184000000002"
                                                      barWidth="24.47578576224191"></path>
                                                <path id="SvgjsPath1613"
                                                      d="M 321.52282205854146 118.40879999999999L 321.52282205854146 64.16351999999998Q 321.52282205854146 52.16351999999998 333.52282205854146 52.16351999999998L 327.9986078207834 52.16351999999998Q 339.9986078207834 52.16351999999998 339.9986078207834 64.16351999999998L 339.9986078207834 64.16351999999998L 339.9986078207834 118.40879999999999Q 339.9986078207834 130.40879999999999 327.9986078207834 130.40879999999999L 333.52282205854146 130.40879999999999Q 321.52282205854146 130.40879999999999 321.52282205854146 118.40879999999999z"
                                                      fill="rgba(105,108,255,0.85)" fill-opacity="1" stroke="#ffffff"
                                                      stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                      stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                      clip-path="url(#gridRectMaskw8935ckqg)"
                                                      pathTo="M 321.52282205854146 118.40879999999999L 321.52282205854146 64.16351999999998Q 321.52282205854146 52.16351999999998 333.52282205854146 52.16351999999998L 327.9986078207834 52.16351999999998Q 339.9986078207834 52.16351999999998 339.9986078207834 64.16351999999998L 339.9986078207834 64.16351999999998L 339.9986078207834 118.40879999999999Q 339.9986078207834 130.40879999999999 327.9986078207834 130.40879999999999L 333.52282205854146 130.40879999999999Q 321.52282205854146 130.40879999999999 321.52282205854146 118.40879999999999z"
                                                      pathFrom="M 321.52282205854146 118.40879999999999L 321.52282205854146 118.40879999999999L 339.9986078207834 118.40879999999999L 339.9986078207834 118.40879999999999L 339.9986078207834 118.40879999999999L 339.9986078207834 118.40879999999999L 339.9986078207834 118.40879999999999L 321.52282205854146 118.40879999999999"
                                                      cy="52.16351999999998" cx="392.6918698229109" j="4" val="18"
                                                      barHeight="78.24528000000001" barWidth="24.47578576224191"></path>
                                                <path id="SvgjsPath1614"
                                                      d="M 395.6918698229109 118.40879999999999L 395.6918698229109 90.24527999999998Q 395.6918698229109 78.24527999999998 407.6918698229109 78.24527999999998L 402.16765558515283 78.24527999999998Q 414.16765558515283 78.24527999999998 414.16765558515283 90.24527999999998L 414.16765558515283 90.24527999999998L 414.16765558515283 118.40879999999999Q 414.16765558515283 130.40879999999999 402.16765558515283 130.40879999999999L 407.6918698229109 130.40879999999999Q 395.6918698229109 130.40879999999999 395.6918698229109 118.40879999999999z"
                                                      fill="rgba(105,108,255,0.85)" fill-opacity="1" stroke="#ffffff"
                                                      stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                      stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                      clip-path="url(#gridRectMaskw8935ckqg)"
                                                      pathTo="M 395.6918698229109 118.40879999999999L 395.6918698229109 90.24527999999998Q 395.6918698229109 78.24527999999998 407.6918698229109 78.24527999999998L 402.16765558515283 78.24527999999998Q 414.16765558515283 78.24527999999998 414.16765558515283 90.24527999999998L 414.16765558515283 90.24527999999998L 414.16765558515283 118.40879999999999Q 414.16765558515283 130.40879999999999 402.16765558515283 130.40879999999999L 407.6918698229109 130.40879999999999Q 395.6918698229109 130.40879999999999 395.6918698229109 118.40879999999999z"
                                                      pathFrom="M 395.6918698229109 118.40879999999999L 395.6918698229109 118.40879999999999L 414.16765558515283 118.40879999999999L 414.16765558515283 118.40879999999999L 414.16765558515283 118.40879999999999L 414.16765558515283 118.40879999999999L 414.16765558515283 118.40879999999999L 395.6918698229109 118.40879999999999"
                                                      cy="78.24527999999998" cx="466.86091758728037" j="5" val="12"
                                                      barHeight="52.163520000000005"
                                                      barWidth="24.47578576224191"></path>
                                                <path id="SvgjsPath1615"
                                                      d="M 469.86091758728037 118.40879999999999L 469.86091758728037 103.28615999999998Q 469.86091758728037 91.28615999999998 481.86091758728037 91.28615999999998L 476.3367033495223 91.28615999999998Q 488.3367033495223 91.28615999999998 488.3367033495223 103.28615999999998L 488.3367033495223 103.28615999999998L 488.3367033495223 118.40879999999999Q 488.3367033495223 130.40879999999999 476.3367033495223 130.40879999999999L 481.86091758728037 130.40879999999999Q 469.86091758728037 130.40879999999999 469.86091758728037 118.40879999999999z"
                                                      fill="rgba(105,108,255,0.85)" fill-opacity="1" stroke="#ffffff"
                                                      stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                      stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                      clip-path="url(#gridRectMaskw8935ckqg)"
                                                      pathTo="M 469.86091758728037 118.40879999999999L 469.86091758728037 103.28615999999998Q 469.86091758728037 91.28615999999998 481.86091758728037 91.28615999999998L 476.3367033495223 91.28615999999998Q 488.3367033495223 91.28615999999998 488.3367033495223 103.28615999999998L 488.3367033495223 103.28615999999998L 488.3367033495223 118.40879999999999Q 488.3367033495223 130.40879999999999 476.3367033495223 130.40879999999999L 481.86091758728037 130.40879999999999Q 469.86091758728037 130.40879999999999 469.86091758728037 118.40879999999999z"
                                                      pathFrom="M 469.86091758728037 118.40879999999999L 469.86091758728037 118.40879999999999L 488.3367033495223 118.40879999999999L 488.3367033495223 118.40879999999999L 488.3367033495223 118.40879999999999L 488.3367033495223 118.40879999999999L 488.3367033495223 118.40879999999999L 469.86091758728037 118.40879999999999"
                                                      cy="91.28615999999998" cx="541.0299653516498" j="6" val="9"
                                                      barHeight="39.122640000000004"
                                                      barWidth="24.47578576224191"></path>
                                            </g>
                                            <g id="SvgjsG1616" class="apexcharts-series" seriesName="2020" rel="2"
                                               data:realIndex="1">
                                                <path id="SvgjsPath1618"
                                                      d="M 24.846631001063756 154.40879999999999L 24.846631001063756 186.91928Q 24.846631001063756 198.91928 36.846631001063756 198.91928L 31.322416763305668 198.91928Q 43.32241676330567 198.91928 43.32241676330567 186.91928L 43.32241676330567 186.91928L 43.32241676330567 154.40879999999999Q 43.32241676330567 142.40879999999999 31.322416763305668 142.40879999999999L 36.846631001063756 142.40879999999999Q 24.846631001063756 142.40879999999999 24.846631001063756 154.40879999999999z"
                                                      fill="rgba(3,195,236,0.85)" fill-opacity="1" stroke="#ffffff"
                                                      stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                      stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                      clip-path="url(#gridRectMaskw8935ckqg)"
                                                      pathTo="M 24.846631001063756 154.40879999999999L 24.846631001063756 186.91928Q 24.846631001063756 198.91928 36.846631001063756 198.91928L 31.322416763305668 198.91928Q 43.32241676330567 198.91928 43.32241676330567 186.91928L 43.32241676330567 186.91928L 43.32241676330567 154.40879999999999Q 43.32241676330567 142.40879999999999 31.322416763305668 142.40879999999999L 36.846631001063756 142.40879999999999Q 24.846631001063756 142.40879999999999 24.846631001063756 154.40879999999999z"
                                                      pathFrom="M 24.846631001063756 154.40879999999999L 24.846631001063756 154.40879999999999L 43.32241676330567 154.40879999999999L 43.32241676330567 154.40879999999999L 43.32241676330567 154.40879999999999L 43.32241676330567 154.40879999999999L 43.32241676330567 154.40879999999999L 24.846631001063756 154.40879999999999"
                                                      cy="174.91928" cx="96.01567876543318" j="0" val="-13"
                                                      barHeight="-56.51048000000001"
                                                      barWidth="24.47578576224191"></path>
                                                <path id="SvgjsPath1619"
                                                      d="M 99.01567876543318 154.40879999999999L 99.01567876543318 208.65408Q 99.01567876543318 220.65408 111.01567876543318 220.65408L 105.49146452767509 220.65408Q 117.49146452767509 220.65408 117.49146452767509 208.65408L 117.49146452767509 208.65408L 117.49146452767509 154.40879999999999Q 117.49146452767509 142.40879999999999 105.49146452767509 142.40879999999999L 111.01567876543318 142.40879999999999Q 99.01567876543318 142.40879999999999 99.01567876543318 154.40879999999999z"
                                                      fill="rgba(3,195,236,0.85)" fill-opacity="1" stroke="#ffffff"
                                                      stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                      stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                      clip-path="url(#gridRectMaskw8935ckqg)"
                                                      pathTo="M 99.01567876543318 154.40879999999999L 99.01567876543318 208.65408Q 99.01567876543318 220.65408 111.01567876543318 220.65408L 105.49146452767509 220.65408Q 117.49146452767509 220.65408 117.49146452767509 208.65408L 117.49146452767509 208.65408L 117.49146452767509 154.40879999999999Q 117.49146452767509 142.40879999999999 105.49146452767509 142.40879999999999L 111.01567876543318 142.40879999999999Q 99.01567876543318 142.40879999999999 99.01567876543318 154.40879999999999z"
                                                      pathFrom="M 99.01567876543318 154.40879999999999L 99.01567876543318 154.40879999999999L 117.49146452767509 154.40879999999999L 117.49146452767509 154.40879999999999L 117.49146452767509 154.40879999999999L 117.49146452767509 154.40879999999999L 117.49146452767509 154.40879999999999L 99.01567876543318 154.40879999999999"
                                                      cy="196.65408" cx="170.18472652980262" j="1" val="-18"
                                                      barHeight="-78.24528000000001"
                                                      barWidth="24.47578576224191"></path>
                                                <path id="SvgjsPath1620"
                                                      d="M 173.18472652980262 154.40879999999999L 173.18472652980262 169.53143999999998Q 173.18472652980262 181.53143999999998 185.18472652980262 181.53143999999998L 179.66051229204453 181.53143999999998Q 191.66051229204453 181.53143999999998 191.66051229204453 169.53143999999998L 191.66051229204453 169.53143999999998L 191.66051229204453 154.40879999999999Q 191.66051229204453 142.40879999999999 179.66051229204453 142.40879999999999L 185.18472652980262 142.40879999999999Q 173.18472652980262 142.40879999999999 173.18472652980262 154.40879999999999z"
                                                      fill="rgba(3,195,236,0.85)" fill-opacity="1" stroke="#ffffff"
                                                      stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                      stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                      clip-path="url(#gridRectMaskw8935ckqg)"
                                                      pathTo="M 173.18472652980262 154.40879999999999L 173.18472652980262 169.53143999999998Q 173.18472652980262 181.53143999999998 185.18472652980262 181.53143999999998L 179.66051229204453 181.53143999999998Q 191.66051229204453 181.53143999999998 191.66051229204453 169.53143999999998L 191.66051229204453 169.53143999999998L 191.66051229204453 154.40879999999999Q 191.66051229204453 142.40879999999999 179.66051229204453 142.40879999999999L 185.18472652980262 142.40879999999999Q 173.18472652980262 142.40879999999999 173.18472652980262 154.40879999999999z"
                                                      pathFrom="M 173.18472652980262 154.40879999999999L 173.18472652980262 154.40879999999999L 191.66051229204453 154.40879999999999L 191.66051229204453 154.40879999999999L 191.66051229204453 154.40879999999999L 191.66051229204453 154.40879999999999L 191.66051229204453 154.40879999999999L 173.18472652980262 154.40879999999999"
                                                      cy="157.53143999999998" cx="244.35377429417204" j="2" val="-9"
                                                      barHeight="-39.122640000000004"
                                                      barWidth="24.47578576224191"></path>
                                                <path id="SvgjsPath1621"
                                                      d="M 247.35377429417204 154.40879999999999L 247.35377429417204 191.26623999999998Q 247.35377429417204 203.26623999999998 259.353774294172 203.26623999999998L 253.82956005641392 203.26623999999998Q 265.8295600564139 203.26623999999998 265.8295600564139 191.26623999999998L 265.8295600564139 191.26623999999998L 265.8295600564139 154.40879999999999Q 265.8295600564139 142.40879999999999 253.82956005641392 142.40879999999999L 259.353774294172 142.40879999999999Q 247.35377429417204 142.40879999999999 247.35377429417204 154.40879999999999z"
                                                      fill="rgba(3,195,236,0.85)" fill-opacity="1" stroke="#ffffff"
                                                      stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                      stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                      clip-path="url(#gridRectMaskw8935ckqg)"
                                                      pathTo="M 247.35377429417204 154.40879999999999L 247.35377429417204 191.26623999999998Q 247.35377429417204 203.26623999999998 259.353774294172 203.26623999999998L 253.82956005641392 203.26623999999998Q 265.8295600564139 203.26623999999998 265.8295600564139 191.26623999999998L 265.8295600564139 191.26623999999998L 265.8295600564139 154.40879999999999Q 265.8295600564139 142.40879999999999 253.82956005641392 142.40879999999999L 259.353774294172 142.40879999999999Q 247.35377429417204 142.40879999999999 247.35377429417204 154.40879999999999z"
                                                      pathFrom="M 247.35377429417204 154.40879999999999L 247.35377429417204 154.40879999999999L 265.8295600564139 154.40879999999999L 265.8295600564139 154.40879999999999L 265.8295600564139 154.40879999999999L 265.8295600564139 154.40879999999999L 265.8295600564139 154.40879999999999L 247.35377429417204 154.40879999999999"
                                                      cy="179.26623999999998" cx="318.52282205854146" j="3" val="-14"
                                                      barHeight="-60.857440000000004"
                                                      barWidth="24.47578576224191"></path>
                                                <path id="SvgjsPath1622"
                                                      d="M 321.52282205854146 154.40879999999999L 321.52282205854146 152.1436Q 321.52282205854146 164.1436 333.52282205854146 164.1436L 327.9986078207834 164.1436Q 339.9986078207834 164.1436 339.9986078207834 152.1436L 339.9986078207834 152.1436L 339.9986078207834 154.40879999999999Q 339.9986078207834 142.40879999999999 327.9986078207834 142.40879999999999L 333.52282205854146 142.40879999999999Q 321.52282205854146 142.40879999999999 321.52282205854146 154.40879999999999z"
                                                      fill="rgba(3,195,236,0.85)" fill-opacity="1" stroke="#ffffff"
                                                      stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                      stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                      clip-path="url(#gridRectMaskw8935ckqg)"
                                                      pathTo="M 321.52282205854146 154.40879999999999L 321.52282205854146 152.1436Q 321.52282205854146 164.1436 333.52282205854146 164.1436L 327.9986078207834 164.1436Q 339.9986078207834 164.1436 339.9986078207834 152.1436L 339.9986078207834 152.1436L 339.9986078207834 154.40879999999999Q 339.9986078207834 142.40879999999999 327.9986078207834 142.40879999999999L 333.52282205854146 142.40879999999999Q 321.52282205854146 142.40879999999999 321.52282205854146 154.40879999999999z"
                                                      pathFrom="M 321.52282205854146 154.40879999999999L 321.52282205854146 154.40879999999999L 339.9986078207834 154.40879999999999L 339.9986078207834 154.40879999999999L 339.9986078207834 154.40879999999999L 339.9986078207834 154.40879999999999L 339.9986078207834 154.40879999999999L 321.52282205854146 154.40879999999999"
                                                      cy="140.1436" cx="392.6918698229109" j="4" val="-5"
                                                      barHeight="-21.734800000000003"
                                                      barWidth="24.47578576224191"></path>
                                                <path id="SvgjsPath1623"
                                                      d="M 395.6918698229109 154.40879999999999L 395.6918698229109 204.30712Q 395.6918698229109 216.30712 407.6918698229109 216.30712L 402.16765558515283 216.30712Q 414.16765558515283 216.30712 414.16765558515283 204.30712L 414.16765558515283 204.30712L 414.16765558515283 154.40879999999999Q 414.16765558515283 142.40879999999999 402.16765558515283 142.40879999999999L 407.6918698229109 142.40879999999999Q 395.6918698229109 142.40879999999999 395.6918698229109 154.40879999999999z"
                                                      fill="rgba(3,195,236,0.85)" fill-opacity="1" stroke="#ffffff"
                                                      stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                      stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                      clip-path="url(#gridRectMaskw8935ckqg)"
                                                      pathTo="M 395.6918698229109 154.40879999999999L 395.6918698229109 204.30712Q 395.6918698229109 216.30712 407.6918698229109 216.30712L 402.16765558515283 216.30712Q 414.16765558515283 216.30712 414.16765558515283 204.30712L 414.16765558515283 204.30712L 414.16765558515283 154.40879999999999Q 414.16765558515283 142.40879999999999 402.16765558515283 142.40879999999999L 407.6918698229109 142.40879999999999Q 395.6918698229109 142.40879999999999 395.6918698229109 154.40879999999999z"
                                                      pathFrom="M 395.6918698229109 154.40879999999999L 395.6918698229109 154.40879999999999L 414.16765558515283 154.40879999999999L 414.16765558515283 154.40879999999999L 414.16765558515283 154.40879999999999L 414.16765558515283 154.40879999999999L 414.16765558515283 154.40879999999999L 395.6918698229109 154.40879999999999"
                                                      cy="192.30712" cx="466.86091758728037" j="5" val="-17"
                                                      barHeight="-73.89832000000001"
                                                      barWidth="24.47578576224191"></path>
                                                <path id="SvgjsPath1624"
                                                      d="M 469.86091758728037 154.40879999999999L 469.86091758728037 195.6132Q 469.86091758728037 207.6132 481.86091758728037 207.6132L 476.3367033495223 207.6132Q 488.3367033495223 207.6132 488.3367033495223 195.6132L 488.3367033495223 195.6132L 488.3367033495223 154.40879999999999Q 488.3367033495223 142.40879999999999 476.3367033495223 142.40879999999999L 481.86091758728037 142.40879999999999Q 469.86091758728037 142.40879999999999 469.86091758728037 154.40879999999999z"
                                                      fill="rgba(3,195,236,0.85)" fill-opacity="1" stroke="#ffffff"
                                                      stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                      stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                      clip-path="url(#gridRectMaskw8935ckqg)"
                                                      pathTo="M 469.86091758728037 154.40879999999999L 469.86091758728037 195.6132Q 469.86091758728037 207.6132 481.86091758728037 207.6132L 476.3367033495223 207.6132Q 488.3367033495223 207.6132 488.3367033495223 195.6132L 488.3367033495223 195.6132L 488.3367033495223 154.40879999999999Q 488.3367033495223 142.40879999999999 476.3367033495223 142.40879999999999L 481.86091758728037 142.40879999999999Q 469.86091758728037 142.40879999999999 469.86091758728037 154.40879999999999z"
                                                      pathFrom="M 469.86091758728037 154.40879999999999L 469.86091758728037 154.40879999999999L 488.3367033495223 154.40879999999999L 488.3367033495223 154.40879999999999L 488.3367033495223 154.40879999999999L 488.3367033495223 154.40879999999999L 488.3367033495223 154.40879999999999L 469.86091758728037 154.40879999999999"
                                                      cy="183.6132" cx="541.0299653516498" j="6" val="-15"
                                                      barHeight="-65.2044" barWidth="24.47578576224191"></path>
                                            </g>
                                            <g id="SvgjsG1608" class="apexcharts-datalabels" data:realIndex="0"></g>
                                            <g id="SvgjsG1617" class="apexcharts-datalabels" data:realIndex="1"></g>
                                        </g>
                                        <line id="SvgjsLine1673" x1="0" y1="0" x2="519.1833343505859" y2="0"
                                              stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                              stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                        <line id="SvgjsLine1674" x1="0" y1="0" x2="519.1833343505859" y2="0"
                                              stroke-dasharray="0" stroke-width="0" stroke-linecap="butt"
                                              class="apexcharts-ycrosshairs-hidden"></line>
                                        <g id="SvgjsG1675" class="apexcharts-yaxis-annotations"></g>
                                        <g id="SvgjsG1676" class="apexcharts-xaxis-annotations"></g>
                                        <g id="SvgjsG1677" class="apexcharts-point-annotations"></g>
                                    </g>
                                    <g id="SvgjsG1648" class="apexcharts-yaxis" rel="0"
                                       transform="translate(17.816665649414062, 0)">
                                        <g id="SvgjsG1649" class="apexcharts-yaxis-texts-g">
                                            <text id="SvgjsText1650" font-family="Helvetica, Arial, sans-serif" x="20"
                                                  y="54.5" text-anchor="end" dominant-baseline="auto" font-size="13px"
                                                  font-weight="400" fill="#a1acb8"
                                                  class="apexcharts-text apexcharts-yaxis-label "
                                                  style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1651">30</tspan>
                                                <title>30</title></text>
                                            <text id="SvgjsText1652" font-family="Helvetica, Arial, sans-serif" x="20"
                                                  y="97.9696" text-anchor="end" dominant-baseline="auto"
                                                  font-size="13px" font-weight="400" fill="#a1acb8"
                                                  class="apexcharts-text apexcharts-yaxis-label "
                                                  style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1653">20</tspan>
                                                <title>20</title></text>
                                            <text id="SvgjsText1654" font-family="Helvetica, Arial, sans-serif" x="20"
                                                  y="141.4392" text-anchor="end" dominant-baseline="auto"
                                                  font-size="13px" font-weight="400" fill="#a1acb8"
                                                  class="apexcharts-text apexcharts-yaxis-label "
                                                  style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1655">10</tspan>
                                                <title>10</title></text>
                                            <text id="SvgjsText1656" font-family="Helvetica, Arial, sans-serif" x="20"
                                                  y="184.90879999999999" text-anchor="end" dominant-baseline="auto"
                                                  font-size="13px" font-weight="400" fill="#a1acb8"
                                                  class="apexcharts-text apexcharts-yaxis-label "
                                                  style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1657">0</tspan>
                                                <title>0</title></text>
                                            <text id="SvgjsText1658" font-family="Helvetica, Arial, sans-serif" x="20"
                                                  y="228.3784" text-anchor="end" dominant-baseline="auto"
                                                  font-size="13px" font-weight="400" fill="#a1acb8"
                                                  class="apexcharts-text apexcharts-yaxis-label "
                                                  style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1659">-10</tspan>
                                                <title>-10</title></text>
                                            <text id="SvgjsText1660" font-family="Helvetica, Arial, sans-serif" x="20"
                                                  y="271.848" text-anchor="end" dominant-baseline="auto"
                                                  font-size="13px" font-weight="400" fill="#a1acb8"
                                                  class="apexcharts-text apexcharts-yaxis-label "
                                                  style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1661">-20</tspan>
                                                <title>-20</title></text>
                                        </g>
                                    </g>
                                    <g id="SvgjsG1596" class="apexcharts-annotations"></g>
                                </svg>
                                <div class="apexcharts-tooltip apexcharts-theme-light"
                                     style="left: 246.898px; top: 82.6333px;">
                                    <div class="apexcharts-tooltip-title"
                                         style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">Mar
                                    </div>
                                    <div class="apexcharts-tooltip-series-group apexcharts-active"
                                         style="order: 1; display: flex;"><span class="apexcharts-tooltip-marker"
                                                                                style="background-color: rgba(105, 108, 255, 0.85);"></span>
                                        <div class="apexcharts-tooltip-text"
                                             style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                            <div class="apexcharts-tooltip-y-group"><span
                                                    class="apexcharts-tooltip-text-y-label">2021: </span><span
                                                    class="apexcharts-tooltip-text-y-value">15</span></div>
                                            <div class="apexcharts-tooltip-goals-group"><span
                                                    class="apexcharts-tooltip-text-goals-label"></span><span
                                                    class="apexcharts-tooltip-text-goals-value"></span></div>
                                            <div class="apexcharts-tooltip-z-group"><span
                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                    class="apexcharts-tooltip-text-z-value"></span></div>
                                        </div>
                                    </div>
                                    <div class="apexcharts-tooltip-series-group" style="order: 2; display: none;"><span
                                            class="apexcharts-tooltip-marker"
                                            style="background-color: rgba(105, 108, 255, 0.85);"></span>
                                        <div class="apexcharts-tooltip-text"
                                             style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                            <div class="apexcharts-tooltip-y-group"><span
                                                    class="apexcharts-tooltip-text-y-label">2021: </span><span
                                                    class="apexcharts-tooltip-text-y-value">15</span></div>
                                            <div class="apexcharts-tooltip-goals-group"><span
                                                    class="apexcharts-tooltip-text-goals-label"></span><span
                                                    class="apexcharts-tooltip-text-goals-value"></span></div>
                                            <div class="apexcharts-tooltip-z-group"><span
                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                    class="apexcharts-tooltip-text-z-value"></span></div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                    <div class="apexcharts-yaxistooltip-text"></div>
                                </div>
                            </div>
                        </div>
                        <div class="resize-triggers">
                            <div class="expand-trigger">
                                <div style="width: 612px; height: 386px;"></div>
                            </div>
                            <div class="contract-trigger"></div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card-body">
                            <div class="text-center">
                                <div class="dropdown">
                                    <button class="btn btn-sm btn-outline-primary dropdown-toggle" type="button"
                                            id="growthReportId" data-bs-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                        2022
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="growthReportId">
                                        <a class="dropdown-item" href="javascript:void(0);">2021</a>
                                        <a class="dropdown-item" href="javascript:void(0);">2020</a>
                                        <a class="dropdown-item" href="javascript:void(0);">2019</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="growthChart" style="min-height: 176.95px;">
                            <div id="apexcharts13vsyehw"
                                 class="apexcharts-canvas apexcharts13vsyehw apexcharts-theme-light"
                                 style="width: 306px; height: 176.95px;">
                                <svg id="SvgjsSvg1565" width="306" height="176.9499969482422"
                                     xmlns="http://www.w3.org/2000/svg" version="1.1"
                                     xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                     class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                     style="background: transparent none repeat scroll 0% 0%;">
                                    <g id="SvgjsG1567" class="apexcharts-inner apexcharts-graphical"
                                       transform="translate(46, -25)">
                                        <defs id="SvgjsDefs1566">
                                            <clipPath id="gridRectMask13vsyehw">
                                                <rect id="SvgjsRect1569" width="222" height="285" x="-3" y="-1" rx="0"
                                                      ry="0" opacity="1" stroke-width="0" stroke="none"
                                                      stroke-dasharray="0" fill="#fff"></rect>
                                            </clipPath>
                                            <clipPath id="forecastMask13vsyehw"></clipPath>
                                            <clipPath id="nonForecastMask13vsyehw"></clipPath>
                                            <clipPath id="gridRectMarkerMask13vsyehw">
                                                <rect id="SvgjsRect1570" width="220" height="287" x="-2" y="-2" rx="0"
                                                      ry="0" opacity="1" stroke-width="0" stroke="none"
                                                      stroke-dasharray="0" fill="#fff"></rect>
                                            </clipPath>
                                            <linearGradient id="SvgjsLinearGradient1575" x1="1" y1="0" x2="0" y2="1">
                                                <stop id="SvgjsStop1576" stop-opacity="1"
                                                      stop-color="rgba(105,108,255,1)" offset="0.3"></stop>
                                                <stop id="SvgjsStop1577" stop-opacity="0.6"
                                                      stop-color="rgba(255,255,255,0.6)" offset="0.7"></stop>
                                                <stop id="SvgjsStop1578" stop-opacity="0.6"
                                                      stop-color="rgba(255,255,255,0.6)" offset="1"></stop>
                                            </linearGradient>
                                            <linearGradient id="SvgjsLinearGradient1586" x1="1" y1="0" x2="0" y2="1">
                                                <stop id="SvgjsStop1587" stop-opacity="1"
                                                      stop-color="rgba(105,108,255,1)" offset="0.3"></stop>
                                                <stop id="SvgjsStop1588" stop-opacity="0.6"
                                                      stop-color="rgba(105,108,255,0.6)" offset="0.7"></stop>
                                                <stop id="SvgjsStop1589" stop-opacity="0.6"
                                                      stop-color="rgba(105,108,255,0.6)" offset="1"></stop>
                                            </linearGradient>
                                        </defs>
                                        <g id="SvgjsG1571" class="apexcharts-radialbar">
                                            <g id="SvgjsG1572">
                                                <g id="SvgjsG1573" class="apexcharts-tracks">
                                                    <g id="SvgjsG1574"
                                                       class="apexcharts-radialbar-track apexcharts-track" rel="1">
                                                        <path id="apexcharts-radialbarTrack-0"
                                                              d="M 73.83506097560974 167.17541022773656 A 68.32987804878049 68.32987804878049 0 1 1 142.16493902439026 167.17541022773656"
                                                              fill="none" fill-opacity="1"
                                                              stroke="rgba(255,255,255,0.85)" stroke-opacity="1"
                                                              stroke-linecap="butt" stroke-width="17.357317073170734"
                                                              stroke-dasharray="0" class="apexcharts-radialbar-area"
                                                              data:pathOrig="M 73.83506097560974 167.17541022773656 A 68.32987804878049 68.32987804878049 0 1 1 142.16493902439026 167.17541022773656"></path>
                                                    </g>
                                                </g>
                                                <g id="SvgjsG1580">
                                                    <g id="SvgjsG1585"
                                                       class="apexcharts-series apexcharts-radial-series"
                                                       seriesName="Growth" rel="1" data:realIndex="0">
                                                        <path id="SvgjsPath1590"
                                                              d="M 73.83506097560974 167.17541022773656 A 68.32987804878049 68.32987804878049 0 1 1 175.95555982735613 100.85758285229481"
                                                              fill="none" fill-opacity="0.85"
                                                              stroke="url(#SvgjsLinearGradient1586)" stroke-opacity="1"
                                                              stroke-linecap="butt" stroke-width="17.357317073170734"
                                                              stroke-dasharray="5"
                                                              class="apexcharts-radialbar-area apexcharts-radialbar-slice-0"
                                                              data:angle="234" data:value="78" index="0" j="0"
                                                              data:pathOrig="M 73.83506097560974 167.17541022773656 A 68.32987804878049 68.32987804878049 0 1 1 175.95555982735613 100.85758285229481"></path>
                                                    </g>
                                                    <circle id="SvgjsCircle1581" r="54.65121951219512" cx="108" cy="108"
                                                            class="apexcharts-radialbar-hollow"
                                                            fill="transparent"></circle>
                                                    <g id="SvgjsG1582" class="apexcharts-datalabels-group"
                                                       transform="translate(0, 0) scale(1)" style="opacity: 1;">
                                                        <text id="SvgjsText1583" font-family="Public Sans" x="108"
                                                              y="123" text-anchor="middle" dominant-baseline="auto"
                                                              font-size="15px" font-weight="500" fill="#566a7f"
                                                              class="apexcharts-text apexcharts-datalabel-label"
                                                              style="font-family: Public Sans;">Growth
                                                        </text>
                                                        <text id="SvgjsText1584" font-family="Public Sans" x="108"
                                                              y="99" text-anchor="middle" dominant-baseline="auto"
                                                              font-size="22px" font-weight="500" fill="#566a7f"
                                                              class="apexcharts-text apexcharts-datalabel-value"
                                                              style="font-family: Public Sans;">78%
                                                        </text>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                        <line id="SvgjsLine1591" x1="0" y1="0" x2="216" y2="0" stroke="#b6b6b6"
                                              stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"
                                              class="apexcharts-ycrosshairs"></line>
                                        <line id="SvgjsLine1592" x1="0" y1="0" x2="216" y2="0" stroke-dasharray="0"
                                              stroke-width="0" stroke-linecap="butt"
                                              class="apexcharts-ycrosshairs-hidden"></line>
                                    </g>
                                    <g id="SvgjsG1568" class="apexcharts-annotations"></g>
                                </svg>
                                <div class="apexcharts-legend"></div>
                            </div>
                        </div>
                        <div class="text-center fw-semibold pt-3 mb-2">62% Company Growth</div>

                        <div class="d-flex px-xxl-4 px-lg-2 p-4 gap-xxl-3 gap-lg-1 gap-3 justify-content-between">
                            <div class="d-flex">
                                <div class="me-2">
                                    <span class="badge bg-label-primary p-2"><i
                                            class="bx bx-dollar text-primary"></i></span>
                                </div>
                                <div class="d-flex flex-column">
                                    <small>2022</small>
                                    <h6 class="mb-0">$32.5k</h6>
                                </div>
                            </div>
                            <div class="d-flex">
                                <div class="me-2">
                                    <span class="badge bg-label-info p-2"><i class="bx bx-wallet text-info"></i></span>
                                </div>
                                <div class="d-flex flex-column">
                                    <small>2021</small>
                                    <h6 class="mb-0">$41.2k</h6>
                                </div>
                            </div>
                        </div>
                        <div class="resize-triggers">
                            <div class="expand-trigger">
                                <div style="width: 307px; height: 386px;"></div>
                            </div>
                            <div class="contract-trigger"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ Total Revenue -->
        <div class="col-12 col-md-8 col-lg-4 order-3 order-md-2">
            <div class="row">
                <div class="col-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <img src="{{asset("assets")}}/admin/img/icons/unicons/paypal.png" alt="Credit Card"
                                         class="rounded">
                                </div>
                                <div class="dropdown">
                                    <button class="btn p-0" type="button" id="cardOpt4" data-bs-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt4">
                                        <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                    </div>
                                </div>
                            </div>
                            <span class="d-block mb-1">Payments</span>
                            <h3 class="card-title text-nowrap mb-2">$2,456</h3>
                            <small class="text-danger fw-semibold"><i class="bx bx-down-arrow-alt"></i> -14.82%</small>
                        </div>
                    </div>
                </div>
                <div class="col-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <img src="{{asset("assets")}}/admin/img/icons/unicons/cc-primary.png"
                                         alt="Credit Card" class="rounded">
                                </div>
                                <div class="dropdown">
                                    <button class="btn p-0" type="button" id="cardOpt1" data-bs-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="cardOpt1">
                                        <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                    </div>
                                </div>
                            </div>
                            <span class="fw-semibold d-block mb-1">Transactions</span>
                            <h3 class="card-title mb-2">$14,857</h3>
                            <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +28.14%</small>
                        </div>
                    </div>
                </div>
                <!-- </div>
<div class="row"> -->
                <div class="col-12 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between flex-sm-row flex-column gap-3"
                                 style="position: relative;">
                                <div class="d-flex flex-sm-column flex-row align-items-start justify-content-between">
                                    <div class="card-title">
                                        <h5 class="text-nowrap mb-2">Profile Report</h5>
                                        <span class="badge bg-label-warning rounded-pill">Year 2021</span>
                                    </div>
                                    <div class="mt-sm-auto">
                                        <small class="text-success text-nowrap fw-semibold"><i
                                                class="bx bx-chevron-up"></i> 68.2%</small>
                                        <h3 class="mb-0">$84,686k</h3>
                                    </div>
                                </div>
                                <div id="profileReportChart" style="min-height: 80px;">
                                    <div id="apexchartsloisb9bc"
                                         class="apexcharts-canvas apexchartsloisb9bc apexcharts-theme-light"
                                         style="width: 260px; height: 80px;">
                                        <svg id="SvgjsSvg1399" width="260" height="80"
                                             xmlns="http://www.w3.org/2000/svg" version="1.1"
                                             xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                             class="apexcharts-svg" xmlns:data="ApexChartsNS"
                                             transform="translate(0, 0)"
                                             style="background: transparent none repeat scroll 0% 0%;">
                                            <g id="SvgjsG1401" class="apexcharts-inner apexcharts-graphical"
                                               transform="translate(0, 0)">
                                                <defs id="SvgjsDefs1400">
                                                    <clipPath id="gridRectMaskloisb9bc">
                                                        <rect id="SvgjsRect1406" width="261" height="85" x="-4.5"
                                                              y="-2.5" rx="0" ry="0" opacity="1" stroke-width="0"
                                                              stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                    </clipPath>
                                                    <clipPath id="forecastMaskloisb9bc"></clipPath>
                                                    <clipPath id="nonForecastMaskloisb9bc"></clipPath>
                                                    <clipPath id="gridRectMarkerMaskloisb9bc">
                                                        <rect id="SvgjsRect1407" width="256" height="84" x="-2" y="-2"
                                                              rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                              stroke-dasharray="0" fill="#fff"></rect>
                                                    </clipPath>
                                                    <filter id="SvgjsFilter1413" filterUnits="userSpaceOnUse"
                                                            width="200%" height="200%" x="-50%" y="-50%">
                                                        <feFlood id="SvgjsFeFlood1414" flood-color="#ffab00"
                                                                 flood-opacity="0.15" result="SvgjsFeFlood1414Out"
                                                                 in="SourceGraphic"></feFlood>
                                                        <feComposite id="SvgjsFeComposite1415" in="SvgjsFeFlood1414Out"
                                                                     in2="SourceAlpha" operator="in"
                                                                     result="SvgjsFeComposite1415Out"></feComposite>
                                                        <feOffset id="SvgjsFeOffset1416" dx="5" dy="10"
                                                                  result="SvgjsFeOffset1416Out"
                                                                  in="SvgjsFeComposite1415Out"></feOffset>
                                                        <feGaussianBlur id="SvgjsFeGaussianBlur1417" stdDeviation="3 "
                                                                        result="SvgjsFeGaussianBlur1417Out"
                                                                        in="SvgjsFeOffset1416Out"></feGaussianBlur>
                                                        <feBlend id="SvgjsFeBlend1418" in="SourceGraphic"
                                                                 in2="SvgjsFeGaussianBlur1417Out" mode="normal"
                                                                 result="SvgjsFeBlend1418Out"></feBlend>
                                                    </filter>
                                                </defs>
                                                <line id="SvgjsLine1405" x1="0" y1="0" x2="0" y2="80" stroke="#b6b6b6"
                                                      stroke-dasharray="3" stroke-linecap="butt"
                                                      class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="80"
                                                      fill="#b1b9c4" filter="none" fill-opacity="0.9"
                                                      stroke-width="1"></line>
                                                <g id="SvgjsG1419" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                    <g id="SvgjsG1420" class="apexcharts-xaxis-texts-g"
                                                       transform="translate(0, -4)"></g>
                                                </g>
                                                <g id="SvgjsG1428" class="apexcharts-grid">
                                                    <g id="SvgjsG1429" class="apexcharts-gridlines-horizontal"
                                                       style="display: none;">
                                                        <line id="SvgjsLine1431" x1="0" y1="0" x2="252" y2="0"
                                                              stroke="#e0e0e0" stroke-dasharray="0"
                                                              stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1432" x1="0" y1="20" x2="252" y2="20"
                                                              stroke="#e0e0e0" stroke-dasharray="0"
                                                              stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1433" x1="0" y1="40" x2="252" y2="40"
                                                              stroke="#e0e0e0" stroke-dasharray="0"
                                                              stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1434" x1="0" y1="60" x2="252" y2="60"
                                                              stroke="#e0e0e0" stroke-dasharray="0"
                                                              stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1435" x1="0" y1="80" x2="252" y2="80"
                                                              stroke="#e0e0e0" stroke-dasharray="0"
                                                              stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                    </g>
                                                    <g id="SvgjsG1430" class="apexcharts-gridlines-vertical"
                                                       style="display: none;"></g>
                                                    <line id="SvgjsLine1437" x1="0" y1="80" x2="252" y2="80"
                                                          stroke="transparent" stroke-dasharray="0"
                                                          stroke-linecap="butt"></line>
                                                    <line id="SvgjsLine1436" x1="0" y1="1" x2="0" y2="80"
                                                          stroke="transparent" stroke-dasharray="0"
                                                          stroke-linecap="butt"></line>
                                                </g>
                                                <g id="SvgjsG1408"
                                                   class="apexcharts-line-series apexcharts-plot-series">
                                                    <g id="SvgjsG1409" class="apexcharts-series" seriesName="seriesx1"
                                                       data:longestSeries="true" rel="1" data:realIndex="0">
                                                        <path id="SvgjsPath1412"
                                                              d="M 0 76C 17.64 76 32.760000000000005 12 50.400000000000006 12C 68.04 12 83.16000000000001 62 100.80000000000001 62C 118.44000000000001 62 133.56 22 151.20000000000002 22C 168.84000000000003 22 183.96000000000004 38 201.60000000000002 38C 219.24 38 234.36 6 252 6"
                                                              fill="none" fill-opacity="1" stroke="rgba(255,171,0,0.85)"
                                                              stroke-opacity="1" stroke-linecap="butt" stroke-width="5"
                                                              stroke-dasharray="0" class="apexcharts-line" index="0"
                                                              clip-path="url(#gridRectMaskloisb9bc)"
                                                              filter="url(#SvgjsFilter1413)"
                                                              pathTo="M 0 76C 17.64 76 32.760000000000005 12 50.400000000000006 12C 68.04 12 83.16000000000001 62 100.80000000000001 62C 118.44000000000001 62 133.56 22 151.20000000000002 22C 168.84000000000003 22 183.96000000000004 38 201.60000000000002 38C 219.24 38 234.36 6 252 6"
                                                              pathFrom="M -1 120L -1 120L 50.400000000000006 120L 100.80000000000001 120L 151.20000000000002 120L 201.60000000000002 120L 252 120"></path>
                                                        <g id="SvgjsG1410" class="apexcharts-series-markers-wrap"
                                                           data:realIndex="0">
                                                            <g class="apexcharts-series-markers">
                                                                <circle id="SvgjsCircle1443" r="0" cx="0" cy="0"
                                                                        class="apexcharts-marker wufo9wfpg no-pointer-events"
                                                                        stroke="#ffffff" fill="#ffab00" fill-opacity="1"
                                                                        stroke-width="2" stroke-opacity="0.9"
                                                                        default-marker-size="0"></circle>
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g id="SvgjsG1411" class="apexcharts-datalabels"
                                                       data:realIndex="0"></g>
                                                </g>
                                                <line id="SvgjsLine1438" x1="0" y1="0" x2="252" y2="0" stroke="#b6b6b6"
                                                      stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"
                                                      class="apexcharts-ycrosshairs"></line>
                                                <line id="SvgjsLine1439" x1="0" y1="0" x2="252" y2="0"
                                                      stroke-dasharray="0" stroke-width="0" stroke-linecap="butt"
                                                      class="apexcharts-ycrosshairs-hidden"></line>
                                                <g id="SvgjsG1440" class="apexcharts-yaxis-annotations"></g>
                                                <g id="SvgjsG1441" class="apexcharts-xaxis-annotations"></g>
                                                <g id="SvgjsG1442" class="apexcharts-point-annotations"></g>
                                            </g>
                                            <rect id="SvgjsRect1404" width="0" height="0" x="0" y="0" rx="0" ry="0"
                                                  opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                                  fill="#fefefe"></rect>
                                            <g id="SvgjsG1427" class="apexcharts-yaxis" rel="0"
                                               transform="translate(-18, 0)"></g>
                                            <g id="SvgjsG1402" class="apexcharts-annotations"></g>
                                        </svg>
                                        <div class="apexcharts-legend" style="max-height: 40px;"></div>
                                        <div class="apexcharts-tooltip apexcharts-theme-light">
                                            <div class="apexcharts-tooltip-title"
                                                 style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                            <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                                    class="apexcharts-tooltip-marker"
                                                    style="background-color: rgb(255, 171, 0);"></span>
                                                <div class="apexcharts-tooltip-text"
                                                     style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                    <div class="apexcharts-tooltip-y-group"><span
                                                            class="apexcharts-tooltip-text-y-label"></span><span
                                                            class="apexcharts-tooltip-text-y-value"></span></div>
                                                    <div class="apexcharts-tooltip-goals-group"><span
                                                            class="apexcharts-tooltip-text-goals-label"></span><span
                                                            class="apexcharts-tooltip-text-goals-value"></span></div>
                                                    <div class="apexcharts-tooltip-z-group"><span
                                                            class="apexcharts-tooltip-text-z-label"></span><span
                                                            class="apexcharts-tooltip-text-z-value"></span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                            <div class="apexcharts-yaxistooltip-text"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="resize-triggers">
                                    <div class="expand-trigger">
                                        <div style="width: 398px; height: 118px;"></div>
                                    </div>
                                    <div class="contract-trigger"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <!-- Order Statistics -->
        <div class="col-md-6 col-lg-4 col-xl-4 order-0 mb-4">
            <div class="card h-100">
                <div class="card-header d-flex align-items-center justify-content-between pb-0">
                    <div class="card-title mb-0">
                        <h5 class="m-0 me-2">Order Statistics</h5>
                        <small class="text-muted">42.82k Total Sales</small>
                    </div>
                    <div class="dropdown">
                        <button class="btn p-0" type="button" id="orederStatistics" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                            <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="orederStatistics">
                            <a class="dropdown-item" href="javascript:void(0);">Select All</a>
                            <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                            <a class="dropdown-item" href="javascript:void(0);">Share</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-3" style="position: relative;">
                        <div class="d-flex flex-column align-items-center gap-1">
                            <h2 class="mb-2">8,258</h2>
                            <span>Total Orders</span>
                        </div>
                        <div id="orderStatisticsChart" style="min-height: 154.583px;">
                            <div id="apexchartsun5ii6t4"
                                 class="apexcharts-canvas apexchartsun5ii6t4 apexcharts-theme-light"
                                 style="width: 130px; height: 154.583px;">
                                <svg id="SvgjsSvg1678" width="130" height="154.58334350585938"
                                     xmlns="http://www.w3.org/2000/svg" version="1.1"
                                     xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                     class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                     style="background: transparent none repeat scroll 0% 0%;">
                                    <g id="SvgjsG1680" class="apexcharts-inner apexcharts-graphical"
                                       transform="translate(-7, 0)">
                                        <defs id="SvgjsDefs1679">
                                            <clipPath id="gridRectMaskun5ii6t4">
                                                <rect id="SvgjsRect1682" width="150" height="173" x="-4.5" y="-2.5"
                                                      rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                      stroke-dasharray="0" fill="#fff"></rect>
                                            </clipPath>
                                            <clipPath id="forecastMaskun5ii6t4"></clipPath>
                                            <clipPath id="nonForecastMaskun5ii6t4"></clipPath>
                                            <clipPath id="gridRectMarkerMaskun5ii6t4">
                                                <rect id="SvgjsRect1683" width="145" height="172" x="-2" y="-2" rx="0"
                                                      ry="0" opacity="1" stroke-width="0" stroke="none"
                                                      stroke-dasharray="0" fill="#fff"></rect>
                                            </clipPath>
                                        </defs>
                                        <g id="SvgjsG1684" class="apexcharts-pie">
                                            <g id="SvgjsG1685" transform="translate(0, 0) scale(1)">
                                                <circle id="SvgjsCircle1686" r="44.835365853658544" cx="70.5" cy="70.5"
                                                        fill="transparent"></circle>
                                                <g id="SvgjsG1687" class="apexcharts-slices">
                                                    <g id="SvgjsG1688" class="apexcharts-series apexcharts-pie-series"
                                                       seriesName="Electronic" rel="1" data:realIndex="0">
                                                        <path id="SvgjsPath1689"
                                                              d="M 70.5 10.71951219512195 A 59.78048780487805 59.78048780487805 0 0 1 97.63977353321047 123.7648046533095 L 90.85483014990785 110.44860348998213 A 44.835365853658544 44.835365853658544 0 0 0 70.5 25.664634146341456 L 70.5 10.71951219512195 z"
                                                              fill="rgba(105,108,255,1)" fill-opacity="1"
                                                              stroke-opacity="1" stroke-linecap="butt" stroke-width="5"
                                                              stroke-dasharray="0"
                                                              class="apexcharts-pie-area apexcharts-donut-slice-0"
                                                              index="0" j="0" data:angle="153" data:startAngle="0"
                                                              data:strokeWidth="5" data:value="85"
                                                              data:pathOrig="M 70.5 10.71951219512195 A 59.78048780487805 59.78048780487805 0 0 1 97.63977353321047 123.7648046533095 L 90.85483014990785 110.44860348998213 A 44.835365853658544 44.835365853658544 0 0 0 70.5 25.664634146341456 L 70.5 10.71951219512195 z"
                                                              stroke="#ffffff"></path>
                                                    </g>
                                                    <g id="SvgjsG1690" class="apexcharts-series apexcharts-pie-series"
                                                       seriesName="Sports" rel="2" data:realIndex="1">
                                                        <path id="SvgjsPath1691"
                                                              d="M 97.63977353321047 123.7648046533095 A 59.78048780487805 59.78048780487805 0 0 1 70.5 130.28048780487805 L 70.5 115.33536585365854 A 44.835365853658544 44.835365853658544 0 0 0 90.85483014990785 110.44860348998213 L 97.63977353321047 123.7648046533095 z"
                                                              fill="rgba(133,146,163,1)" fill-opacity="1"
                                                              stroke-opacity="1" stroke-linecap="butt" stroke-width="5"
                                                              stroke-dasharray="0"
                                                              class="apexcharts-pie-area apexcharts-donut-slice-1"
                                                              index="0" j="1" data:angle="27" data:startAngle="153"
                                                              data:strokeWidth="5" data:value="15"
                                                              data:pathOrig="M 97.63977353321047 123.7648046533095 A 59.78048780487805 59.78048780487805 0 0 1 70.5 130.28048780487805 L 70.5 115.33536585365854 A 44.835365853658544 44.835365853658544 0 0 0 90.85483014990785 110.44860348998213 L 97.63977353321047 123.7648046533095 z"
                                                              stroke="#ffffff"></path>
                                                    </g>
                                                    <g id="SvgjsG1692" class="apexcharts-series apexcharts-pie-series"
                                                       seriesName="Decor" rel="3" data:realIndex="2">
                                                        <path id="SvgjsPath1693"
                                                              d="M 70.5 130.28048780487805 A 59.78048780487805 59.78048780487805 0 0 1 10.71951219512195 70.50000000000001 L 25.664634146341456 70.5 A 44.835365853658544 44.835365853658544 0 0 0 70.5 115.33536585365854 L 70.5 130.28048780487805 z"
                                                              fill="rgba(3,195,236,1)" fill-opacity="1"
                                                              stroke-opacity="1" stroke-linecap="butt" stroke-width="5"
                                                              stroke-dasharray="0"
                                                              class="apexcharts-pie-area apexcharts-donut-slice-2"
                                                              index="0" j="2" data:angle="90" data:startAngle="180"
                                                              data:strokeWidth="5" data:value="50"
                                                              data:pathOrig="M 70.5 130.28048780487805 A 59.78048780487805 59.78048780487805 0 0 1 10.71951219512195 70.50000000000001 L 25.664634146341456 70.5 A 44.835365853658544 44.835365853658544 0 0 0 70.5 115.33536585365854 L 70.5 130.28048780487805 z"
                                                              stroke="#ffffff"></path>
                                                    </g>
                                                    <g id="SvgjsG1694" class="apexcharts-series apexcharts-pie-series"
                                                       seriesName="Fashion" rel="4" data:realIndex="3">
                                                        <path id="SvgjsPath1695"
                                                              d="M 10.71951219512195 70.50000000000001 A 59.78048780487805 59.78048780487805 0 0 1 70.48956633664653 10.719513105630845 L 70.4921747524849 25.664634829223125 A 44.835365853658544 44.835365853658544 0 0 0 25.664634146341456 70.5 L 10.71951219512195 70.50000000000001 z"
                                                              fill="rgba(113,221,55,1)" fill-opacity="1"
                                                              stroke-opacity="1" stroke-linecap="butt" stroke-width="5"
                                                              stroke-dasharray="0"
                                                              class="apexcharts-pie-area apexcharts-donut-slice-3"
                                                              index="0" j="3" data:angle="90" data:startAngle="270"
                                                              data:strokeWidth="5" data:value="50"
                                                              data:pathOrig="M 10.71951219512195 70.50000000000001 A 59.78048780487805 59.78048780487805 0 0 1 70.48956633664653 10.719513105630845 L 70.4921747524849 25.664634829223125 A 44.835365853658544 44.835365853658544 0 0 0 25.664634146341456 70.5 L 10.71951219512195 70.50000000000001 z"
                                                              stroke="#ffffff"></path>
                                                    </g>
                                                </g>
                                            </g>
                                            <g id="SvgjsG1696" class="apexcharts-datalabels-group"
                                               transform="translate(0, 0) scale(1)" style="opacity: 1;">
                                                <text id="SvgjsText1697" font-family="Helvetica, Arial, sans-serif"
                                                      x="70.5" y="90.5" text-anchor="middle" dominant-baseline="auto"
                                                      font-size="0.8125rem" font-weight="400" fill="#a1acb8"
                                                      class="apexcharts-text apexcharts-datalabel-label"
                                                      style="font-family: Helvetica, Arial, sans-serif; fill: rgb(161, 172, 184);">
                                                    Weekly
                                                </text>
                                                <text id="SvgjsText1698" font-family="Public Sans" x="70.5" y="71.5"
                                                      text-anchor="middle" dominant-baseline="auto" font-size="1.5rem"
                                                      font-weight="400" fill="#566a7f"
                                                      class="apexcharts-text apexcharts-datalabel-value"
                                                      style="font-family: Public Sans;">38%
                                                </text>
                                            </g>
                                        </g>
                                        <line id="SvgjsLine1699" x1="0" y1="0" x2="141" y2="0" stroke="#b6b6b6"
                                              stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"
                                              class="apexcharts-ycrosshairs"></line>
                                        <line id="SvgjsLine1700" x1="0" y1="0" x2="141" y2="0" stroke-dasharray="0"
                                              stroke-width="0" stroke-linecap="butt"
                                              class="apexcharts-ycrosshairs-hidden"></line>
                                    </g>
                                    <g id="SvgjsG1681" class="apexcharts-annotations"></g>
                                </svg>
                                <div class="apexcharts-legend"></div>
                                <div class="apexcharts-tooltip apexcharts-theme-dark">
                                    <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                            class="apexcharts-tooltip-marker"
                                            style="background-color: rgb(105, 108, 255);"></span>
                                        <div class="apexcharts-tooltip-text"
                                             style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                            <div class="apexcharts-tooltip-y-group"><span
                                                    class="apexcharts-tooltip-text-y-label"></span><span
                                                    class="apexcharts-tooltip-text-y-value"></span></div>
                                            <div class="apexcharts-tooltip-goals-group"><span
                                                    class="apexcharts-tooltip-text-goals-label"></span><span
                                                    class="apexcharts-tooltip-text-goals-value"></span></div>
                                            <div class="apexcharts-tooltip-z-group"><span
                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                    class="apexcharts-tooltip-text-z-value"></span></div>
                                        </div>
                                    </div>
                                    <div class="apexcharts-tooltip-series-group" style="order: 2;"><span
                                            class="apexcharts-tooltip-marker"
                                            style="background-color: rgb(133, 146, 163);"></span>
                                        <div class="apexcharts-tooltip-text"
                                             style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                            <div class="apexcharts-tooltip-y-group"><span
                                                    class="apexcharts-tooltip-text-y-label"></span><span
                                                    class="apexcharts-tooltip-text-y-value"></span></div>
                                            <div class="apexcharts-tooltip-goals-group"><span
                                                    class="apexcharts-tooltip-text-goals-label"></span><span
                                                    class="apexcharts-tooltip-text-goals-value"></span></div>
                                            <div class="apexcharts-tooltip-z-group"><span
                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                    class="apexcharts-tooltip-text-z-value"></span></div>
                                        </div>
                                    </div>
                                    <div class="apexcharts-tooltip-series-group" style="order: 3;"><span
                                            class="apexcharts-tooltip-marker"
                                            style="background-color: rgb(3, 195, 236);"></span>
                                        <div class="apexcharts-tooltip-text"
                                             style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                            <div class="apexcharts-tooltip-y-group"><span
                                                    class="apexcharts-tooltip-text-y-label"></span><span
                                                    class="apexcharts-tooltip-text-y-value"></span></div>
                                            <div class="apexcharts-tooltip-goals-group"><span
                                                    class="apexcharts-tooltip-text-goals-label"></span><span
                                                    class="apexcharts-tooltip-text-goals-value"></span></div>
                                            <div class="apexcharts-tooltip-z-group"><span
                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                    class="apexcharts-tooltip-text-z-value"></span></div>
                                        </div>
                                    </div>
                                    <div class="apexcharts-tooltip-series-group" style="order: 4;"><span
                                            class="apexcharts-tooltip-marker"
                                            style="background-color: rgb(113, 221, 55);"></span>
                                        <div class="apexcharts-tooltip-text"
                                             style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                            <div class="apexcharts-tooltip-y-group"><span
                                                    class="apexcharts-tooltip-text-y-label"></span><span
                                                    class="apexcharts-tooltip-text-y-value"></span></div>
                                            <div class="apexcharts-tooltip-goals-group"><span
                                                    class="apexcharts-tooltip-text-goals-label"></span><span
                                                    class="apexcharts-tooltip-text-goals-value"></span></div>
                                            <div class="apexcharts-tooltip-z-group"><span
                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                    class="apexcharts-tooltip-text-z-value"></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="resize-triggers">
                            <div class="expand-trigger">
                                <div style="width: 398px; height: 156px;"></div>
                            </div>
                            <div class="contract-trigger"></div>
                        </div>
                    </div>
                    <ul class="p-0 m-0">
                        <li class="d-flex mb-4 pb-1">
                            <div class="avatar flex-shrink-0 me-3">
                                <span class="avatar-initial rounded bg-label-primary"><i
                                        class="bx bx-mobile-alt"></i></span>
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <h6 class="mb-0">Electronic</h6>
                                    <small class="text-muted">Mobile, Earbuds, TV</small>
                                </div>
                                <div class="user-progress">
                                    <small class="fw-semibold">82.5k</small>
                                </div>
                            </div>
                        </li>
                        <li class="d-flex mb-4 pb-1">
                            <div class="avatar flex-shrink-0 me-3">
                                <span class="avatar-initial rounded bg-label-success"><i
                                        class="bx bx-closet"></i></span>
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <h6 class="mb-0">Fashion</h6>
                                    <small class="text-muted">T-shirt, Jeans, Shoes</small>
                                </div>
                                <div class="user-progress">
                                    <small class="fw-semibold">23.8k</small>
                                </div>
                            </div>
                        </li>
                        <li class="d-flex mb-4 pb-1">
                            <div class="avatar flex-shrink-0 me-3">
                                <span class="avatar-initial rounded bg-label-info"><i class="bx bx-home-alt"></i></span>
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <h6 class="mb-0">Decor</h6>
                                    <small class="text-muted">Fine Art, Dining</small>
                                </div>
                                <div class="user-progress">
                                    <small class="fw-semibold">849k</small>
                                </div>
                            </div>
                        </li>
                        <li class="d-flex">
                            <div class="avatar flex-shrink-0 me-3">
                                <span class="avatar-initial rounded bg-label-secondary"><i
                                        class="bx bx-football"></i></span>
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <h6 class="mb-0">Sports</h6>
                                    <small class="text-muted">Football, Cricket Kit</small>
                                </div>
                                <div class="user-progress">
                                    <small class="fw-semibold">99</small>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--/ Order Statistics -->

        <!-- Expense Overview -->
        <div class="col-md-6 col-lg-4 order-1 mb-4">
            <div class="card h-100">
                <div class="card-header">
                    <ul class="nav nav-pills" role="tablist">
                        <li class="nav-item">
                            <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab"
                                    data-bs-target="#navs-tabs-line-card-income"
                                    aria-controls="navs-tabs-line-card-income" aria-selected="true">
                                Income
                            </button>
                        </li>
                        <li class="nav-item">
                            <button type="button" class="nav-link" role="tab">Expenses</button>
                        </li>
                        <li class="nav-item">
                            <button type="button" class="nav-link" role="tab">Profit</button>
                        </li>
                    </ul>
                </div>
                <div class="card-body px-0">
                    <div class="tab-content p-0">
                        <div class="tab-pane fade show active" id="navs-tabs-line-card-income" role="tabpanel"
                             style="position: relative;">
                            <div class="d-flex p-4 pt-3">
                                <div class="avatar flex-shrink-0 me-3">
                                    <img src="{{asset("assets")}}/admin/img/icons/unicons/wallet.png" alt="User">
                                </div>
                                <div>
                                    <small class="text-muted d-block">Total Balance</small>
                                    <div class="d-flex align-items-center">
                                        <h6 class="mb-0 me-1">$459.10</h6>
                                        <small class="text-success fw-semibold">
                                            <i class="bx bx-chevron-up"></i>
                                            42.9%
                                        </small>
                                    </div>
                                </div>
                            </div>
                            <div id="incomeChart" style="min-height: 215px;">
                                <div id="apexchartsoy8as7nog"
                                     class="apexcharts-canvas apexchartsoy8as7nog apexcharts-theme-light"
                                     style="width: 445px; height: 215px;">
                                    <svg id="SvgjsSvg1720" width="445" height="215" xmlns="http://www.w3.org/2000/svg"
                                         version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                                         xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg apexcharts-zoomable"
                                         xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                         style="background: transparent none repeat scroll 0% 0%;">
                                        <g id="SvgjsG1722" class="apexcharts-inner apexcharts-graphical"
                                           transform="translate(0, 10)">
                                            <defs id="SvgjsDefs1721">
                                                <clipPath id="gridRectMaskoy8as7nog">
                                                    <rect id="SvgjsRect1727" width="433.6916666030884" height="177.348"
                                                          x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0"
                                                          stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                                <clipPath id="forecastMaskoy8as7nog"></clipPath>
                                                <clipPath id="nonForecastMaskoy8as7nog"></clipPath>
                                                <clipPath id="gridRectMarkerMaskoy8as7nog">
                                                    <rect id="SvgjsRect1728" width="455.6916666030884" height="203.348"
                                                          x="-14" y="-14" rx="0" ry="0" opacity="1" stroke-width="0"
                                                          stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                                <linearGradient id="SvgjsLinearGradient1748" x1="0" y1="0" x2="0"
                                                                y2="1">
                                                    <stop id="SvgjsStop1749" stop-opacity="0.5"
                                                          stop-color="rgba(105,108,255,0.5)" offset="0"></stop>
                                                    <stop id="SvgjsStop1750" stop-opacity="0.25"
                                                          stop-color="rgba(195,196,255,0.25)" offset="0.95"></stop>
                                                    <stop id="SvgjsStop1751" stop-opacity="0.25"
                                                          stop-color="rgba(195,196,255,0.25)" offset="1"></stop>
                                                </linearGradient>
                                            </defs>
                                            <line id="SvgjsLine1726" x1="0" y1="0" x2="0" y2="175.348" stroke="#b6b6b6"
                                                  stroke-dasharray="3" stroke-linecap="butt"
                                                  class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="175.348"
                                                  fill="#b1b9c4" filter="none" fill-opacity="0.9"
                                                  stroke-width="1"></line>
                                            <g id="SvgjsG1754" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                <g id="SvgjsG1755" class="apexcharts-xaxis-texts-g"
                                                   transform="translate(0, -4)">
                                                    <text id="SvgjsText1757" font-family="Helvetica, Arial, sans-serif"
                                                          x="0" y="204.348" text-anchor="middle"
                                                          dominant-baseline="auto" font-size="13px" font-weight="400"
                                                          fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label "
                                                          style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1758"></tspan>
                                                        <title></title></text>
                                                    <text id="SvgjsText1760" font-family="Helvetica, Arial, sans-serif"
                                                          x="61.098809514726916" y="204.348" text-anchor="middle"
                                                          dominant-baseline="auto" font-size="13px" font-weight="400"
                                                          fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label "
                                                          style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1761">Jan</tspan>
                                                        <title>Jan</title></text>
                                                    <text id="SvgjsText1763" font-family="Helvetica, Arial, sans-serif"
                                                          x="122.19761902945385" y="204.348" text-anchor="middle"
                                                          dominant-baseline="auto" font-size="13px" font-weight="400"
                                                          fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label "
                                                          style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1764">Feb</tspan>
                                                        <title>Feb</title></text>
                                                    <text id="SvgjsText1766" font-family="Helvetica, Arial, sans-serif"
                                                          x="183.29642854418074" y="204.348" text-anchor="middle"
                                                          dominant-baseline="auto" font-size="13px" font-weight="400"
                                                          fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label "
                                                          style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1767">Mar</tspan>
                                                        <title>Mar</title></text>
                                                    <text id="SvgjsText1769" font-family="Helvetica, Arial, sans-serif"
                                                          x="244.39523805890764" y="204.348" text-anchor="middle"
                                                          dominant-baseline="auto" font-size="13px" font-weight="400"
                                                          fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label "
                                                          style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1770">Apr</tspan>
                                                        <title>Apr</title></text>
                                                    <text id="SvgjsText1772" font-family="Helvetica, Arial, sans-serif"
                                                          x="305.49404757363453" y="204.348" text-anchor="middle"
                                                          dominant-baseline="auto" font-size="13px" font-weight="400"
                                                          fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label "
                                                          style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1773">May</tspan>
                                                        <title>May</title></text>
                                                    <text id="SvgjsText1775" font-family="Helvetica, Arial, sans-serif"
                                                          x="366.5928570883614" y="204.348" text-anchor="middle"
                                                          dominant-baseline="auto" font-size="13px" font-weight="400"
                                                          fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label "
                                                          style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1776">Jun</tspan>
                                                        <title>Jun</title></text>
                                                    <text id="SvgjsText1778" font-family="Helvetica, Arial, sans-serif"
                                                          x="427.6916666030883" y="204.348" text-anchor="middle"
                                                          dominant-baseline="auto" font-size="13px" font-weight="400"
                                                          fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label "
                                                          style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1779">Jul</tspan>
                                                        <title>Jul</title></text>
                                                </g>
                                            </g>
                                            <g id="SvgjsG1782" class="apexcharts-grid">
                                                <g id="SvgjsG1783" class="apexcharts-gridlines-horizontal">
                                                    <line id="SvgjsLine1785" x1="0" y1="0" x2="427.6916666030884" y2="0"
                                                          stroke="#eceef1" stroke-dasharray="3" stroke-linecap="butt"
                                                          class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1786" x1="0" y1="43.837" x2="427.6916666030884"
                                                          y2="43.837" stroke="#eceef1" stroke-dasharray="3"
                                                          stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1787" x1="0" y1="87.674" x2="427.6916666030884"
                                                          y2="87.674" stroke="#eceef1" stroke-dasharray="3"
                                                          stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1788" x1="0" y1="131.51100000000002"
                                                          x2="427.6916666030884" y2="131.51100000000002"
                                                          stroke="#eceef1" stroke-dasharray="3" stroke-linecap="butt"
                                                          class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1789" x1="0" y1="175.348" x2="427.6916666030884"
                                                          y2="175.348" stroke="#eceef1" stroke-dasharray="3"
                                                          stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                </g>
                                                <g id="SvgjsG1784" class="apexcharts-gridlines-vertical"></g>
                                                <line id="SvgjsLine1791" x1="0" y1="175.348" x2="427.6916666030884"
                                                      y2="175.348" stroke="transparent" stroke-dasharray="0"
                                                      stroke-linecap="butt"></line>
                                                <line id="SvgjsLine1790" x1="0" y1="1" x2="0" y2="175.348"
                                                      stroke="transparent" stroke-dasharray="0"
                                                      stroke-linecap="butt"></line>
                                            </g>
                                            <g id="SvgjsG1729" class="apexcharts-area-series apexcharts-plot-series">
                                                <g id="SvgjsG1730" class="apexcharts-series" seriesName="seriesx1"
                                                   data:longestSeries="true" rel="1" data:realIndex="0">
                                                    <path id="SvgjsPath1752"
                                                          d="M 0 175.348L 0 113.97619999999999C 21.384583330154417 113.97619999999999 39.714226184572496 127.12729999999999 61.09880951472691 127.12729999999999C 82.48339284488132 127.12729999999999 100.8130356992994 87.67399999999998 122.19761902945382 87.67399999999998C 143.58220235960823 87.67399999999998 161.9118452140263 122.74359999999999 183.2964285441807 122.74359999999999C 204.68101187433513 122.74359999999999 223.01065472875322 35.06959999999998 244.39523805890764 35.06959999999998C 265.779821389062 35.06959999999998 284.10946424348015 105.20879999999998 305.49404757363453 105.20879999999998C 326.8786309037889 105.20879999999998 345.20827375820704 65.75549999999998 366.5928570883614 65.75549999999998C 387.9774404185158 65.75549999999998 406.30708327293394 92.05769999999998 427.6916666030883 92.05769999999998C 427.6916666030883 92.05769999999998 427.6916666030883 92.05769999999998 427.6916666030883 175.348M 427.6916666030883 92.05769999999998z"
                                                          fill="url(#SvgjsLinearGradient1748)" fill-opacity="1"
                                                          stroke-opacity="1" stroke-linecap="butt" stroke-width="0"
                                                          stroke-dasharray="0" class="apexcharts-area" index="0"
                                                          clip-path="url(#gridRectMaskoy8as7nog)"
                                                          pathTo="M 0 175.348L 0 113.97619999999999C 21.384583330154417 113.97619999999999 39.714226184572496 127.12729999999999 61.09880951472691 127.12729999999999C 82.48339284488132 127.12729999999999 100.8130356992994 87.67399999999998 122.19761902945382 87.67399999999998C 143.58220235960823 87.67399999999998 161.9118452140263 122.74359999999999 183.2964285441807 122.74359999999999C 204.68101187433513 122.74359999999999 223.01065472875322 35.06959999999998 244.39523805890764 35.06959999999998C 265.779821389062 35.06959999999998 284.10946424348015 105.20879999999998 305.49404757363453 105.20879999999998C 326.8786309037889 105.20879999999998 345.20827375820704 65.75549999999998 366.5928570883614 65.75549999999998C 387.9774404185158 65.75549999999998 406.30708327293394 92.05769999999998 427.6916666030883 92.05769999999998C 427.6916666030883 92.05769999999998 427.6916666030883 92.05769999999998 427.6916666030883 175.348M 427.6916666030883 92.05769999999998z"
                                                          pathFrom="M -1 219.185L -1 219.185L 61.09880951472691 219.185L 122.19761902945382 219.185L 183.2964285441807 219.185L 244.39523805890764 219.185L 305.49404757363453 219.185L 366.5928570883614 219.185L 427.6916666030883 219.185"></path>
                                                    <path id="SvgjsPath1753"
                                                          d="M 0 113.97619999999999C 21.384583330154417 113.97619999999999 39.714226184572496 127.12729999999999 61.09880951472691 127.12729999999999C 82.48339284488132 127.12729999999999 100.8130356992994 87.67399999999998 122.19761902945382 87.67399999999998C 143.58220235960823 87.67399999999998 161.9118452140263 122.74359999999999 183.2964285441807 122.74359999999999C 204.68101187433513 122.74359999999999 223.01065472875322 35.06959999999998 244.39523805890764 35.06959999999998C 265.779821389062 35.06959999999998 284.10946424348015 105.20879999999998 305.49404757363453 105.20879999999998C 326.8786309037889 105.20879999999998 345.20827375820704 65.75549999999998 366.5928570883614 65.75549999999998C 387.9774404185158 65.75549999999998 406.30708327293394 92.05769999999998 427.6916666030883 92.05769999999998"
                                                          fill="none" fill-opacity="1" stroke="#696cff"
                                                          stroke-opacity="1" stroke-linecap="butt" stroke-width="2"
                                                          stroke-dasharray="0" class="apexcharts-area" index="0"
                                                          clip-path="url(#gridRectMaskoy8as7nog)"
                                                          pathTo="M 0 113.97619999999999C 21.384583330154417 113.97619999999999 39.714226184572496 127.12729999999999 61.09880951472691 127.12729999999999C 82.48339284488132 127.12729999999999 100.8130356992994 87.67399999999998 122.19761902945382 87.67399999999998C 143.58220235960823 87.67399999999998 161.9118452140263 122.74359999999999 183.2964285441807 122.74359999999999C 204.68101187433513 122.74359999999999 223.01065472875322 35.06959999999998 244.39523805890764 35.06959999999998C 265.779821389062 35.06959999999998 284.10946424348015 105.20879999999998 305.49404757363453 105.20879999999998C 326.8786309037889 105.20879999999998 345.20827375820704 65.75549999999998 366.5928570883614 65.75549999999998C 387.9774404185158 65.75549999999998 406.30708327293394 92.05769999999998 427.6916666030883 92.05769999999998"
                                                          pathFrom="M -1 219.185L -1 219.185L 61.09880951472691 219.185L 122.19761902945382 219.185L 183.2964285441807 219.185L 244.39523805890764 219.185L 305.49404757363453 219.185L 366.5928570883614 219.185L 427.6916666030883 219.185"></path>
                                                    <g id="SvgjsG1731" class="apexcharts-series-markers-wrap"
                                                       data:realIndex="0">
                                                        <g id="SvgjsG1733" class="apexcharts-series-markers"
                                                           clip-path="url(#gridRectMarkerMaskoy8as7nog)">
                                                            <circle id="SvgjsCircle1734" r="6" cx="0"
                                                                    cy="113.97619999999999"
                                                                    class="apexcharts-marker no-pointer-events woa61qybv"
                                                                    stroke="transparent" fill="transparent"
                                                                    fill-opacity="1" stroke-width="4"
                                                                    stroke-opacity="0.9" rel="0" j="0" index="0"
                                                                    default-marker-size="6"></circle>
                                                            <circle id="SvgjsCircle1735" r="6" cx="61.09880951472691"
                                                                    cy="127.12729999999999"
                                                                    class="apexcharts-marker no-pointer-events wc87or7fm"
                                                                    stroke="transparent" fill="transparent"
                                                                    fill-opacity="1" stroke-width="4"
                                                                    stroke-opacity="0.9" rel="1" j="1" index="0"
                                                                    default-marker-size="6"></circle>
                                                        </g>
                                                        <g id="SvgjsG1736" class="apexcharts-series-markers"
                                                           clip-path="url(#gridRectMarkerMaskoy8as7nog)">
                                                            <circle id="SvgjsCircle1737" r="6" cx="122.19761902945382"
                                                                    cy="87.67399999999998"
                                                                    class="apexcharts-marker no-pointer-events w2kd5sy3p"
                                                                    stroke="transparent" fill="transparent"
                                                                    fill-opacity="1" stroke-width="4"
                                                                    stroke-opacity="0.9" rel="2" j="2" index="0"
                                                                    default-marker-size="6"></circle>
                                                        </g>
                                                        <g id="SvgjsG1738" class="apexcharts-series-markers"
                                                           clip-path="url(#gridRectMarkerMaskoy8as7nog)">
                                                            <circle id="SvgjsCircle1739" r="6" cx="183.2964285441807"
                                                                    cy="122.74359999999999"
                                                                    class="apexcharts-marker no-pointer-events wyd4tixy6"
                                                                    stroke="transparent" fill="transparent"
                                                                    fill-opacity="1" stroke-width="4"
                                                                    stroke-opacity="0.9" rel="3" j="3" index="0"
                                                                    default-marker-size="6"></circle>
                                                        </g>
                                                        <g id="SvgjsG1740" class="apexcharts-series-markers"
                                                           clip-path="url(#gridRectMarkerMaskoy8as7nog)">
                                                            <circle id="SvgjsCircle1741" r="6" cx="244.39523805890764"
                                                                    cy="35.06959999999998"
                                                                    class="apexcharts-marker no-pointer-events wnia8pd55"
                                                                    stroke="transparent" fill="transparent"
                                                                    fill-opacity="1" stroke-width="4"
                                                                    stroke-opacity="0.9" rel="4" j="4" index="0"
                                                                    default-marker-size="6"></circle>
                                                        </g>
                                                        <g id="SvgjsG1742" class="apexcharts-series-markers"
                                                           clip-path="url(#gridRectMarkerMaskoy8as7nog)">
                                                            <circle id="SvgjsCircle1743" r="6" cx="305.49404757363453"
                                                                    cy="105.20879999999998"
                                                                    class="apexcharts-marker no-pointer-events wt2l04frm"
                                                                    stroke="transparent" fill="transparent"
                                                                    fill-opacity="1" stroke-width="4"
                                                                    stroke-opacity="0.9" rel="5" j="5" index="0"
                                                                    default-marker-size="6"></circle>
                                                        </g>
                                                        <g id="SvgjsG1744" class="apexcharts-series-markers"
                                                           clip-path="url(#gridRectMarkerMaskoy8as7nog)">
                                                            <circle id="SvgjsCircle1745" r="6" cx="366.5928570883614"
                                                                    cy="65.75549999999998"
                                                                    class="apexcharts-marker no-pointer-events wztyvs9aa"
                                                                    stroke="transparent" fill="transparent"
                                                                    fill-opacity="1" stroke-width="4"
                                                                    stroke-opacity="0.9" rel="6" j="6" index="0"
                                                                    default-marker-size="6"></circle>
                                                        </g>
                                                        <g id="SvgjsG1746" class="apexcharts-series-markers"
                                                           clip-path="url(#gridRectMarkerMaskoy8as7nog)">
                                                            <circle id="SvgjsCircle1747" r="6" cx="427.6916666030883"
                                                                    cy="92.05769999999998"
                                                                    class="apexcharts-marker no-pointer-events wo0ioo6sh"
                                                                    stroke="#696cff" fill="#ffffff" fill-opacity="1"
                                                                    stroke-width="4" stroke-opacity="0.9" rel="7" j="7"
                                                                    index="0" default-marker-size="6"></circle>
                                                        </g>
                                                    </g>
                                                </g>
                                                <g id="SvgjsG1732" class="apexcharts-datalabels" data:realIndex="0"></g>
                                            </g>
                                            <line id="SvgjsLine1792" x1="0" y1="0" x2="427.6916666030884" y2="0"
                                                  stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                                  stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                            <line id="SvgjsLine1793" x1="0" y1="0" x2="427.6916666030884" y2="0"
                                                  stroke-dasharray="0" stroke-width="0" stroke-linecap="butt"
                                                  class="apexcharts-ycrosshairs-hidden"></line>
                                            <g id="SvgjsG1794" class="apexcharts-yaxis-annotations"></g>
                                            <g id="SvgjsG1795" class="apexcharts-xaxis-annotations"></g>
                                            <g id="SvgjsG1796" class="apexcharts-point-annotations"></g>
                                            <rect id="SvgjsRect1797" width="0" height="0" x="0" y="0" rx="0" ry="0"
                                                  opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                                  fill="#fefefe" class="apexcharts-zoom-rect"></rect>
                                            <rect id="SvgjsRect1798" width="0" height="0" x="0" y="0" rx="0" ry="0"
                                                  opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                                  fill="#fefefe" class="apexcharts-selection-rect"></rect>
                                        </g>
                                        <rect id="SvgjsRect1725" width="0" height="0" x="0" y="0" rx="0" ry="0"
                                              opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                              fill="#fefefe"></rect>
                                        <g id="SvgjsG1780" class="apexcharts-yaxis" rel="0"
                                           transform="translate(-8, 0)">
                                            <g id="SvgjsG1781" class="apexcharts-yaxis-texts-g"></g>
                                        </g>
                                        <g id="SvgjsG1723" class="apexcharts-annotations"></g>
                                    </svg>
                                    <div class="apexcharts-legend" style="max-height: 107.5px;"></div>
                                    <div class="apexcharts-tooltip apexcharts-theme-light">
                                        <div class="apexcharts-tooltip-title"
                                             style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                        <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                                class="apexcharts-tooltip-marker"
                                                style="background-color: rgb(105, 108, 255);"></span>
                                            <div class="apexcharts-tooltip-text"
                                                 style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                <div class="apexcharts-tooltip-y-group"><span
                                                        class="apexcharts-tooltip-text-y-label"></span><span
                                                        class="apexcharts-tooltip-text-y-value"></span></div>
                                                <div class="apexcharts-tooltip-goals-group"><span
                                                        class="apexcharts-tooltip-text-goals-label"></span><span
                                                        class="apexcharts-tooltip-text-goals-value"></span></div>
                                                <div class="apexcharts-tooltip-z-group"><span
                                                        class="apexcharts-tooltip-text-z-label"></span><span
                                                        class="apexcharts-tooltip-text-z-value"></span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light">
                                        <div class="apexcharts-xaxistooltip-text"
                                             style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                    </div>
                                    <div
                                        class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                        <div class="apexcharts-yaxistooltip-text"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center pt-4 gap-2">
                                <div class="flex-shrink-0" style="position: relative;">
                                    <div id="expensesOfWeek" style="min-height: 57.7px;">
                                        <div id="apexchartsuy0320gs"
                                             class="apexcharts-canvas apexchartsuy0320gs apexcharts-theme-light"
                                             style="width: 60px; height: 57.7px;">
                                            <svg id="SvgjsSvg1701" width="60" height="57.7"
                                                 xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                 xmlns:xlink="http://www.w3.org/1999/xlink"
                                                 xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg"
                                                 xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                                 style="background: transparent none repeat scroll 0% 0%;">
                                                <g id="SvgjsG1703" class="apexcharts-inner apexcharts-graphical"
                                                   transform="translate(-10, -10)">
                                                    <defs id="SvgjsDefs1702">
                                                        <clipPath id="gridRectMaskuy0320gs">
                                                            <rect id="SvgjsRect1705" width="86" height="87" x="-3"
                                                                  y="-1" rx="0" ry="0" opacity="1" stroke-width="0"
                                                                  stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                        </clipPath>
                                                        <clipPath id="forecastMaskuy0320gs"></clipPath>
                                                        <clipPath id="nonForecastMaskuy0320gs"></clipPath>
                                                        <clipPath id="gridRectMarkerMaskuy0320gs">
                                                            <rect id="SvgjsRect1706" width="84" height="89" x="-2"
                                                                  y="-2" rx="0" ry="0" opacity="1" stroke-width="0"
                                                                  stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                        </clipPath>
                                                    </defs>
                                                    <g id="SvgjsG1707" class="apexcharts-radialbar">
                                                        <g id="SvgjsG1708">
                                                            <g id="SvgjsG1709" class="apexcharts-tracks">
                                                                <g id="SvgjsG1710"
                                                                   class="apexcharts-radialbar-track apexcharts-track"
                                                                   rel="1">
                                                                    <path id="apexcharts-radialbarTrack-0"
                                                                          d="M 40 18.098170731707313 A 21.901829268292687 21.901829268292687 0 1 1 39.99617740968999 18.098171065291247"
                                                                          fill="none" fill-opacity="1"
                                                                          stroke="rgba(236,238,241,0.85)"
                                                                          stroke-opacity="1" stroke-linecap="round"
                                                                          stroke-width="2.0408536585365864"
                                                                          stroke-dasharray="0"
                                                                          class="apexcharts-radialbar-area"
                                                                          data:pathOrig="M 40 18.098170731707313 A 21.901829268292687 21.901829268292687 0 1 1 39.99617740968999 18.098171065291247"></path>
                                                                </g>
                                                            </g>
                                                            <g id="SvgjsG1712">
                                                                <g id="SvgjsG1716"
                                                                   class="apexcharts-series apexcharts-radial-series"
                                                                   seriesName="seriesx1" rel="1" data:realIndex="0">
                                                                    <path id="SvgjsPath1717"
                                                                          d="M 40 18.098170731707313 A 21.901829268292687 21.901829268292687 0 1 1 22.2810479140526 52.873572242130095"
                                                                          fill="none" fill-opacity="0.85"
                                                                          stroke="rgba(105,108,255,0.85)"
                                                                          stroke-opacity="1" stroke-linecap="round"
                                                                          stroke-width="4.081707317073173"
                                                                          stroke-dasharray="0"
                                                                          class="apexcharts-radialbar-area apexcharts-radialbar-slice-0"
                                                                          data:angle="234" data:value="65" index="0"
                                                                          j="0"
                                                                          data:pathOrig="M 40 18.098170731707313 A 21.901829268292687 21.901829268292687 0 1 1 22.2810479140526 52.873572242130095"></path>
                                                                </g>
                                                                <circle id="SvgjsCircle1713" r="18.881402439024395"
                                                                        cx="40" cy="40"
                                                                        class="apexcharts-radialbar-hollow"
                                                                        fill="transparent"></circle>
                                                                <g id="SvgjsG1714" class="apexcharts-datalabels-group"
                                                                   transform="translate(0, 0) scale(1)"
                                                                   style="opacity: 1;">
                                                                    <text id="SvgjsText1715"
                                                                          font-family="Helvetica, Arial, sans-serif"
                                                                          x="40" y="45" text-anchor="middle"
                                                                          dominant-baseline="auto" font-size="13px"
                                                                          font-weight="400" fill="#697a8d"
                                                                          class="apexcharts-text apexcharts-datalabel-value"
                                                                          style="font-family: Helvetica, Arial, sans-serif;">
                                                                        $65
                                                                    </text>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <line id="SvgjsLine1718" x1="0" y1="0" x2="80" y2="0"
                                                          stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                                          stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                                    <line id="SvgjsLine1719" x1="0" y1="0" x2="80" y2="0"
                                                          stroke-dasharray="0" stroke-width="0" stroke-linecap="butt"
                                                          class="apexcharts-ycrosshairs-hidden"></line>
                                                </g>
                                                <g id="SvgjsG1704" class="apexcharts-annotations"></g>
                                            </svg>
                                            <div class="apexcharts-legend"></div>
                                        </div>
                                    </div>
                                    <div class="resize-triggers">
                                        <div class="expand-trigger">
                                            <div style="width: 61px; height: 59px;"></div>
                                        </div>
                                        <div class="contract-trigger"></div>
                                    </div>
                                </div>
                                <div>
                                    <p class="mb-n1 mt-1">Expenses This Week</p>
                                    <small class="text-muted">$39 less than last week</small>
                                </div>
                            </div>
                            <div class="resize-triggers">
                                <div class="expand-trigger">
                                    <div style="width: 446px; height: 377px;"></div>
                                </div>
                                <div class="contract-trigger"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ Expense Overview -->

        <!-- Transactions -->
        <div class="col-md-6 col-lg-4 order-2 mb-4">
            <div class="card h-100">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="card-title m-0 me-2">Transactions</h5>
                    <div class="dropdown">
                        <button class="btn p-0" type="button" id="transactionID" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                            <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="transactionID">
                            <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
                            <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                            <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <ul class="p-0 m-0">
                        <li class="d-flex mb-4 pb-1">
                            <div class="avatar flex-shrink-0 me-3">
                                <img src="{{asset("assets")}}/admin/img/icons/unicons/paypal.png" alt="User"
                                     class="rounded">
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <small class="text-muted d-block mb-1">Paypal</small>
                                    <h6 class="mb-0">Send money</h6>
                                </div>
                                <div class="user-progress d-flex align-items-center gap-1">
                                    <h6 class="mb-0">+82.6</h6>
                                    <span class="text-muted">USD</span>
                                </div>
                            </div>
                        </li>
                        <li class="d-flex mb-4 pb-1">
                            <div class="avatar flex-shrink-0 me-3">
                                <img src="{{asset("assets")}}/admin/img/icons/unicons/wallet.png" alt="User"
                                     class="rounded">
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <small class="text-muted d-block mb-1">Wallet</small>
                                    <h6 class="mb-0">Mac'D</h6>
                                </div>
                                <div class="user-progress d-flex align-items-center gap-1">
                                    <h6 class="mb-0">+270.69</h6>
                                    <span class="text-muted">USD</span>
                                </div>
                            </div>
                        </li>
                        <li class="d-flex mb-4 pb-1">
                            <div class="avatar flex-shrink-0 me-3">
                                <img src="{{asset("assets")}}/admin/img/icons/unicons/chart.png" alt="User"
                                     class="rounded">
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <small class="text-muted d-block mb-1">Transfer</small>
                                    <h6 class="mb-0">Refund</h6>
                                </div>
                                <div class="user-progress d-flex align-items-center gap-1">
                                    <h6 class="mb-0">+637.91</h6>
                                    <span class="text-muted">USD</span>
                                </div>
                            </div>
                        </li>
                        <li class="d-flex mb-4 pb-1">
                            <div class="avatar flex-shrink-0 me-3">
                                <img src="{{asset("assets")}}/admin/img/icons/unicons/cc-success.png" alt="User"
                                     class="rounded">
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <small class="text-muted d-block mb-1">Credit Card</small>
                                    <h6 class="mb-0">Ordered Food</h6>
                                </div>
                                <div class="user-progress d-flex align-items-center gap-1">
                                    <h6 class="mb-0">-838.71</h6>
                                    <span class="text-muted">USD</span>
                                </div>
                            </div>
                        </li>
                        <li class="d-flex mb-4 pb-1">
                            <div class="avatar flex-shrink-0 me-3">
                                <img src="{{asset("assets")}}/admin/img/icons/unicons/wallet.png" alt="User"
                                     class="rounded">
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <small class="text-muted d-block mb-1">Wallet</small>
                                    <h6 class="mb-0">Starbucks</h6>
                                </div>
                                <div class="user-progress d-flex align-items-center gap-1">
                                    <h6 class="mb-0">+203.33</h6>
                                    <span class="text-muted">USD</span>
                                </div>
                            </div>
                        </li>
                        <li class="d-flex">
                            <div class="avatar flex-shrink-0 me-3">
                                <img src="{{asset("assets")}}/admin/img/icons/unicons/cc-warning.png" alt="User"
                                     class="rounded">
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <small class="text-muted d-block mb-1">Mastercard</small>
                                    <h6 class="mb-0">Ordered Food</h6>
                                </div>
                                <div class="user-progress d-flex align-items-center gap-1">
                                    <h6 class="mb-0">-92.45</h6>
                                    <span class="text-muted">USD</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--/ Transactions -->
    </div>

@endsection
