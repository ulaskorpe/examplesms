<!DOCTYPE html>
<html lang="en">
@include('admin.partials.head')

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>{{Auth::user()->name}}</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />
            @include("admin.partials.side-menu")

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                &nbsp;
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                &nbsp;
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                &nbsp;
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>


        @include("admin.partials.top-nav")

        <!-- page content -->
        <div class="right_col" role="main">
   
          <br />

          <div class="row">

            <div class="col-md-12 col-sm-12 ">
              <div class="x_panel">
                <div class="x_title">
                  <h2>SMS SENT BY DAY</h2>
                  <ul class="nav navbar-right panel_toolbox">
           
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <canvas id="lineChart"></canvas>
                </div>
              </div>
            </div>

            <div class="col-md-12 col-sm-12 ">
              <div class="x_panel tile fixed_height_320">
                <div class="x_title">
                  <h2>App Versions</h2>
         
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <h4>App Usage across versions</h4>
                  <div class="widget_summary">
                    <div class="w_left w_25">
                      <span>0.1.5.2</span>
                    </div>
                    <div class="w_center w_55">
                      <div class="progress">
                        <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 66%;">
                          <span class="sr-only">60% Complete</span>
                        </div>
                      </div>
                    </div>
                    <div class="w_right w_20">
                      <span>123k</span>
                    </div>
                    <div class="clearfix"></div>
                  </div>

                  <div class="widget_summary">
                    <div class="w_left w_25">
                      <span>0.1.5.3</span>
                    </div>
                    <div class="w_center w_55">
                      <div class="progress">
                        <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 45%;">
                          <span class="sr-only">60% Complete</span>
                        </div>
                      </div>
                    </div>
                    <div class="w_right w_20">
                      <span>53k</span>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="widget_summary">
                    <div class="w_left w_25">
                      <span>0.1.5.4</span>
                    </div>
                    <div class="w_center w_55">
                      <div class="progress">
                        <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 25%;">
                          <span class="sr-only">60% Complete</span>
                        </div>
                      </div>
                    </div>
                    <div class="w_right w_20">
                      <span>23k</span>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="widget_summary">
                    <div class="w_left w_25">
                      <span>0.1.5.5</span>
                    </div>
                    <div class="w_center w_55">
                      <div class="progress">
                        <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 5%;">
                          <span class="sr-only">60% Complete</span>
                        </div>
                      </div>
                    </div>
                    <div class="w_right w_20">
                      <span>3k</span>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="widget_summary">
                    <div class="w_left w_25">
                      <span>0.1.5.6</span>
                    </div>
                    <div class="w_center w_55">
                      <div class="progress">
                        <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 2%;">
                          <span class="sr-only">60% Complete</span>
                        </div>
                      </div>
                    </div>
                    <div class="w_right w_20">
                      <span>1k</span>
                    </div>
                    <div class="clearfix"></div>
                  </div>

                </div>
              </div>
            </div>

            <div class="col-md-12 col-sm-12">
              <div class="x_panel tile fixed_height_320 overflow_hidden">
                <div class="x_title">
                  <h2>OS Usage</h2>
                   
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <table class="" style="width:100%">
                    <tr>
                      <th style="width:37%;">
                        <p>Top 5</p>
                      </th>
                      <th>
                        <div class="col-lg-7 col-md-7 col-sm-7 ">
                          <p class="">Device</p>
                        </div>
                        <div class="col-lg-5 col-md-5 col-sm-5 ">
                          <p class="">Progress</p>
                        </div>
                      </th>
                    </tr>
                    <tr>
                      <td>
                        <canvas class="canvasDoughnut" height="140" width="140" style="margin: 15px 10px 10px 0"></canvas>
                      </td>
                      <td>
                        <table class="tile_info">
                          <tr>
                            <td>
                              <p><i class="fa fa-square blue"></i>IOS </p>
                            </td>
                            <td>30%</td>
                          </tr>
                          <tr>
                            <td>
                              <p><i class="fa fa-square green"></i>Android </p>
                            </td>
                            <td>10%</td>
                          </tr>
                          <tr>
                            <td>
                              <p><i class="fa fa-square purple"></i>Blackberry </p>
                            </td>
                            <td>20%</td>
                          </tr>
                          <tr>
                            <td>
                              <p><i class="fa fa-square aero"></i>Symbian </p>
                            </td>
                            <td>15%</td>
                          </tr>
                          <tr>
                            <td>
                              <p><i class="fa fa-square red"></i>Others </p>
                            </td>
                            <td>30%</td>
                          </tr>
                        </table>
                      </td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>

      
          </div>


         
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
           
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>
@include("admin.partials.scripts")
<script>

   
  function init_charts() {
  
  console.log('run_chartssss  typeof [' + typeof (Chart) + ']');
  
  if (typeof (Chart) === 'undefined') { return; }
  
  console.log('init_charts');
  
  
  Chart.defaults.global.legend = {
      enabled: false
  };
  
   
  
  
  // Line chart
  
  if ($('#lineChart').length) {
  
      var ctx = document.getElementById("lineChart");
      var lineChart = new Chart(ctx, {
          type: 'line',
          data: {
            //  labels: ["January", "February", "March", "April", "May", "June", "July"],
            labels: [
              @foreach ( $dates as  $date )
                  '{{$date['date']}}',
              @endforeach
                  {{date('Y-m-d')}}
  
            ],
              datasets: [{
                  label: "CREATED SMS",
                  backgroundColor: "rgba(38, 185, 154, 0.31)",
                  borderColor: "rgba(38, 185, 154, 0.7)",
                  pointBorderColor: "rgba(38, 185, 154, 0.7)",
                  pointBackgroundColor: "rgba(38, 185, 154, 0.7)",
                  pointHoverBackgroundColor: "#fff",
                  pointHoverBorderColor: "rgba(220,220,220,1)",
                  pointBorderWidth: 1,
                  data: [
                      @foreach ( $dates as  $date )
                  '{{$date['created_msg']}}',
                       @endforeach
                      0
                  ]
              }, {
                  label: "SENT SMS",
                  backgroundColor: "rgba(3, 88, 106, 0.3)",
                  borderColor: "rgba(3, 88, 106, 0.70)",
                  pointBorderColor: "rgba(3, 88, 106, 0.70)",
                  pointBackgroundColor: "rgba(3, 88, 106, 0.70)",
                  pointHoverBackgroundColor: "#fff",
                  pointHoverBorderColor: "rgba(151,187,205,1)",
                  pointBorderWidth: 1,
                  data: [    @foreach ( $dates as  $date )
                  '{{$date['sent_msg']}}',
                       @endforeach
                      0]
              }]
          },
      });
  
  }
   
   
  
  
  
  }
  
  
  function init_chart_doughnut() {
  
  if (typeof (Chart) === 'undefined') { return; }
  
  console.log('init_chart_doughnut');
  
  if ($('.canvasDoughnut').length) {
  
      var chart_doughnut_settings = {
          type: 'doughnut',
          tooltipFillColor: "rgba(51, 51, 51, 0.55)",
          data: {
              labels: [
                  @foreach ( $os_array as  $os )
                  '{{$os['name']}}',
              @endforeach
                  
              ],
              datasets: [{
                  data: [  @foreach ( $os_array as  $os )
                  '{{$os['count']}}',
              @endforeach],
                  backgroundColor: [
                      "#BDC3C7",
                      "#9B59B6",
                      "#E74C3C",
                      "#26B99A",
                      "#3498DB"
                  ],
                  hoverBackgroundColor: [
                      "#CFD4D8",
                      "#B370CF",
                      "#E95E4F",
                      "#36CAAB",
                      "#49A9EA"
                  ]
              }]
          },
          options: {
              legend: false,
              responsive: false
          }
      }
  
      $('.canvasDoughnut').each(function () {
  
          var chart_element = $(this);
          var chart_doughnut = new Chart(chart_element, chart_doughnut_settings);
  
      });
  
  }
  
  }
  $(document).ready(function () {
  init_charts();
  init_chart_doughnut();
  });	
      </script>
  </body>
</html>
