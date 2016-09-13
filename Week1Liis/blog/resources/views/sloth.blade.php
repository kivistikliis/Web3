<!DOCTYPE html>
<html>
    <head>
        <title>Sloths</title>

        <link href="//fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body  {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 600;
                font-family: 'Lato';
            }
            body a, a:hover {
                color: darkgreen;
            }

            .title {
                margin-top: 3%;
                font-size: 70px;
                text-align: center;
                color:darkgreen;
            }
            .table p, td, tr {
                font-size: 20px;
                border: 1px solid darkgreen;
                
            }
            .table {
                margin-top: 7%;
                border-collapse: collapse;
            }
        </style>
        <?php

        use App\Sloth;
        $sloths=App\Sloth::all();?>
    </head>
    
    <body>
        <div class="title">Meet our sloths!
        </div>
        <p align=center>or return to <a href="/">home</a></p>
        
          <div class="table">
              <table width=85% align=center cellpadding=25 >
                  <tr align=center ><td>NAME</td><td>BIRTHDAY</td><td>WIVES</td><td>KIDS</td><td>BACKGROUND</td></tr>
                  @foreach($sloths as $sloth)
                  <tr><td>{{$sloth->name}}</td><td>{{$sloth->birthday}}</td><td>{{$sloth->wives}}</td><td>{{$sloth->kids}}</td><td>{{$sloth->background}}</td></tr>
                  @endforeach
              </table>
        </div> 
        


