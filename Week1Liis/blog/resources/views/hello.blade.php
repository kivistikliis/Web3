<!DOCTYPE html>
<html>
    <head>
        <title>Sloths</title>

        <link href="//fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
            
            .links ul li{
                display: block;
                list-style-type: none;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Hello {{$name}}</div>
            </div>
        </div>
        
            <div class="flex-center position-ref full-height">
                
                <div class="content">
                    

                    <div class="links"><ul>
                        <li><a href="../">Go home</a></li> </ul></div></div>

<!--
                <div class="content">
                    <div class="title m-b-md">
                        Menu
                    </div>

                    <div class="links"><ul>
                        <li><a href="">Check me</a></li> 
                        <li><a href="">Click me</a></li> 
                        <li><a href="">Watch me</a></li> 
                        </ul>
                    </div>
                </div>
-->
            </div>
        
    </body>
</html>