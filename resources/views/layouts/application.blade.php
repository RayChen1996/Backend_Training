<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/Page/Users/Users.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title> @yield('title') SOCA Web Access Control</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row h-5 bg-success mb-2">
          <div class="logo col-md-1 col-lg-1 text-center d-flex item-center">
            <img  class="p-3" src="ic_launcher.png" alt="socaLogo" >
          </div>
          <div class="col-md-6 col-lg-6 header">
    
          </div>
          <div class="col-md-6 col-lg-5 main">
                <ul class="d-flex  list-unstyled justify-content-around p-2 ">
                    <li>
                        <span class=" fw-bold text-white ">伺服器狀態</span> 
                        <div class="text-center bg-primary">
                            <button class="btn btn-primary">開啟</button>                            
                        </div>
                    </li>
                    <li class="fw-bold text-white">
                        目前線上使用者
                        <div>
                            <span id="OnlineUser"></span>
                        </div>
                        
                    </li>
                    <li>
                    <!-- Example single danger button -->
                        <span class=" fw-bold text-white ">登入者</span>
                        <div class="text-center bg-primary">
                            <div class="btn-group">
                                <button type="button" class="  dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                USER
                                </button>
                                <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">資訊</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="/Login">登出</a></li>
                                </ul>
                            </div>                                                       
                        </div>

                    </li>
                </ul>
          </div>
        </div>



        <div class="row h-90 ">
            <div class="nav col-lg-1 col-md-2 col-sm-12">
       
        
                  <div class="sidebar">
                    <ul class="nav flex-column">
                        <li class="nav-item ">
                            <a class="nav-link bg-dark text-white" data-bs-toggle="collapse" href="#submenu1">
                              <i class="bi bi-chevron-right"></i>基本資料
                            </a>
                            <div id="submenu1" class="collapse">
                              <ul class="nav flex-column">
                                <li class="nav-item">
                                  <a class="nav-link" href="/Users">使用者</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" href="/Group">群組</a>
                                </li>
                              </ul>
                            </div>
                          </li>
                          
                      <li class="nav-item ">
                        <a class="nav-link bg-dark text-white" data-bs-toggle="collapse" href="#submenu2">
                          <i class="bi bi-chevron-right"></i>資料查詢
                        </a>
                        <div id="submenu2" class="collapse">
                          <ul class="nav flex-column">
                            <li class="nav-item">
                              <a class="nav-link" href="/History">歷史紀錄查詢</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="/HistoryReport">資料報表</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/HistoryDelete">過期資料刪除</a>
                              </li>
                          </ul>
                        </div>
                      </li>


                      <li class="nav-item ">
                        <a class="nav-link bg-dark text-white" data-bs-toggle="collapse" href="#submenu3">
                          <i class="bi bi-chevron-right"></i>歷史紀錄轉檔
                        </a>
                        <div id="submenu3" class="collapse">
                          <ul class="nav flex-column">
                            <li class="nav-item">
                              <a class="nav-link" href="/ConvertFormat">手動轉檔</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="/ConvSetting">轉檔格式設定</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/AutoConvSetting">自動轉檔設定</a>
                              </li>
                          </ul>
                        </div>
                      </li>


                          <li class="nav-item ">
                            <a class="nav-link bg-dark text-white" data-bs-toggle="collapse" href="#submenu4">
                              <i class="bi bi-chevron-right"></i>考勤
                            </a>
                            <div id="submenu4" class="collapse">
                              <ul class="nav flex-column">
                                <li class="nav-item">
                                  <a class="nav-link" href="/Dep">部門</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" href="/WorkTime">班別</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/Holiday">例假日</a>
                                </li>   
                                <li class="nav-item">
                                    <a class="nav-link" href="/Absence">請假單</a>
                                </li>                                   
                                
                                <li class="nav-item">
                                    <a class="nav-link" href="/AttendRecord">考勤紀錄</a>
                                </li>   
                                <li class="nav-item">
                                    <a class="nav-link" href="/AttendReport">考勤報表</a>
                                </li>   


                              </ul>
                            </div>
                          </li>



                          <li class="nav-item ">
                            <a class="nav-link bg-dark text-white" data-bs-toggle="collapse" href="#submenu5">
                              <i class="bi bi-chevron-right"></i>讀卡機
                            </a>
                            <div id="submenu5" class="collapse">
                              <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="/Reader">讀卡機</a>
                                  </li>
                                <li class="nav-item">
                                  <a class="nav-link" href="/RealMonitor">即時監控</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" href="/Polling">電子地圖</a>
                                </li>

                              </ul>
                            </div>
                          </li>
                          



                      <li class="nav-item">
                        <a class="nav-link bg-dark text-white" data-bs-toggle="collapse" href="#submenu6">
                          <i class="bi bi-chevron-right"></i>系統設定
                        </a>
                        <div id="submenu6" class="collapse">
                          <ul class="nav flex-column">
                            <li class="nav-item">
                              <a class="nav-link" href="/Permission">權限設定</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/MailReport">郵件回報</a>
                              </li>
                            <li class="nav-item">
                              <a class="nav-link" href="/AutoWriteTime">自動校正時間</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/AutoUpdatCard">自動更新卡片</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="/AutoRecv">自動接收排程</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="/DataBackup">資料庫備份</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="/SystemParam">系統參數</a>
                              </li>
                          </ul>
                        </div>
                      </li>




                    </ul>
                  </div>
            </div>
            <div class="main col-md-10 col-sm-12 col-lg-11">
                @yield('alert_msg')
                @yield('message')
                @yield('main_content')
            </div>
        </div>



        <div class="row h-5  footer mt-auto py-3 fixed-bottom">
          <div class="col-md-12 footer">
            <!-- 底部内容 -->
            <div class="footer col-12   text-center ">
                Copyright©2022 SOCATECH All Rights Reserved. ver 221124
            </div>
          </div>
        </div>



      </div>
 

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">Modal Title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Modal content goes here...</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
</body>

</html>


<script>



</script>