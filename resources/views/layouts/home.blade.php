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
    <title>Soca Web Access Control</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-1">
                123
            </div>
            <div class="col-10 text-center">
                123
            </div>

            <div class="col-1">
                123
            </div>
        </div>











        <div class="container">




        <div class="header">
            <div class="col-12 bg-success text-center text-white ">
                SOCA Web Access  
            </div>
        </div>

            <div class="col-12 ">
                <ul class="list-group">
                    <li class="list-group-item"><a href="/Reader">歷史資料</a> </li>
                    <li class="list-group-item">考勤紀錄</li>
                </ul>
                <div>
                    @section('online_user')
                    </div>
                </div>
                <div class="col-9 d-block text-center">
                    @yield('main_content')
                </div>
            </div>





            <div class="footer col-12 bg-success text-white text-center ">
                Copyright©2022 SOCATECH All Rights Reserved. ver 221124
            </div>
        </div>

    </body>

    </html>
