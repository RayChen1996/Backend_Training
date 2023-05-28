<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

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
             
          </div>
        </div>






        <div class="row h-90 mt-auto py-3  ">
          <div class="col-md-12 col-sm-12 col-lg-12  ">
            <!-- 底部内容 -->
           
            <div class="  col-12   text-center ">
               


                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">帳號</span>
                        <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">密碼</span>
                        <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                    </div>


                    <div class="input-group mb-3">
                      
                        <button class="btn btn-primary" onclick="location.href='/'" >登入</button>
                    </div>


            </div>
        
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

</body>

</html>

 