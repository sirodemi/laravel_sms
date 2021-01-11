<html>
    <head>
        <title>@yield('title')</title>
        <style>
            body{
                font-size: 16pt;color: #999;margin: 5px;
            }
            th{
                background-color: #999;color: #fff;padding: 5px 10px;
            }

            td{
                border: solid 1px #aaa;color: #999;padding: 5px 10px;
            }
            hr{
                margin: 25px 100px;border-top: 1px dashed #ddd;
            }
            .header{
                font-size: 20pt;
                margin: 10px;
            }
            .content{
                margin: 10px;
            }
            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .footer{
                text-align: right;font-size: 10pt;margin: 10px;border-bottom: solid 1px #ccc;color: #ccc;
            }
        </style>
    </head>
    <body>
        <div class="header">
            @yield('header')
        </div>
        {{-- <hr size="1"> --}}
        <div class="content">
            @yield('content')
        </div>
        <div class="footer">
            @yield('footer')
        </div>
    </body>
</html>
