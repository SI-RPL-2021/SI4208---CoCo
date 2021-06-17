<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <nav class="navbar sticky-top navbar-expand-lg navbar-light"style="background-color: #FD7EC2;">
        <a class="navbar-brand"><img src="/img/logo.png" alt="logo" width="150px"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            
            <ul class="navbar-nav ml-auto" style="margin-right: 20px;">
            <li class="nav-item">
                    <a class="nav-link" href="{{ route('user_mgt') }}" style="color: #FFF2F9; font-weight :600">{{ __('User Management') }}</span></a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{ route('report_mgt') }}" style="color: #FFF2F9; font-weight :600">{{ __('Post Management') }}</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('dashboard') }}" style="color: #FFF2F9; font-weight :600">{{ __('Dashboard') }}</span></a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{ route('admin') }}" style="color: #FFF2F9; font-weight :600">{{ __('Home') }}</span></a>
            </li>
            </ul>
        </div>
        <div class="dropdown">
            <a class="btn btn-light dropdown-toggle"style="background-color:#FD7EC2; color:#FFF2F9"  href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            {{ Auth::user()->name }} <span class="caret"></span>
            </a>

            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="{{ route('logout') }}">{{ __('Logout') }}</a>
                
            </div>
        </div>
    </nav>

    @foreach($post as $key => $data)
        {{$hasil = $data->jumlah}}
        {{$hasil}}
    @endforeach

    @foreach($user as $key => $data)
        {{$hasil1 = $data->jumlah1}}
        {{$hasil1}}
    @endforeach
    

    <div id ='chart-pengguna' style="padding-20%"></div>

    <div id ='chart1'></div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>

    <script>
        Highcharts.chart('chart-pengguna', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'Jumlah Pengguna Web COCO'
            },
            
            xAxis: {
                categories: [
                    'Post',
                    'User',

                ],
                crosshair: true
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Jumlah (User)'
                }
            },
            tooltip: {
                headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y:.0f} Orang</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series: [{
                name: 'User',
                data: [{{$hasil}},{{$hasil1}}]

            }]
        });
    </script>

    <script>
        Highcharts.chart('chart1', {
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: 'Browser market shares in January, 2018'
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
            },
            accessibility: {
                point: {
                    valueSuffix: ''
                }
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: true,
                        format: '<b>{point.name}</b>: {point.y:.0f}'
                    }
                }
            },
            series: [{
                name: 'Total',
                colorByPoint: true,
                data: [{
                    name: 'Post',
                    y: {{$hasil}},
                    sliced: true,
                    selected: true
                }, {
                    name: 'User',
                    y: {{$hasil1}}
                }]
            }]
        });
    </script>
    
</body>
</html>