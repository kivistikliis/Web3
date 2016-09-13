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

            .title {
                margin-top: 3%;
                font-size: 70px;
                text-align: center;
                color:black;
                margin: 10%;
            }
            .table p, td, tr , a {
                font-size: 20px;
                border: none;
                font-weight:bold;
               color: black;
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
        <div class="title">Who will you meet on our page?
                    </div>
        <div class="table">
            <table width=20% align=center cellpadding=25 >
                
                @foreach($sloths as $sloth)
                <tr align=center><td><a href="sloth">Meet {{$sloth->name}}!</a></td></tr>
                @endforeach
            </table>
        </div> 

