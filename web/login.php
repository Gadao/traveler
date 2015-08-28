<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title>庶民生活日記管理者後台</title>
        <link href="http://fonts.googleapis.com/css?family=Abel" rel="stylesheet" type="text/css" />
        <meta ContentType=html/text; charset=utf-8>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/style.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Covered+By+Your+Grace' rel='stylesheet' type='text/css'>
        <style type="text/css">
            .box{
                width: 300px;
                height: 300px;
                
                position: absolute;
                left: 50%;
                top: 50%;

                margin-top: -325px;
                margin-left: -150px;
            }
            body{
                margin: 0;
                padding: 0;
                background: #000 url(lobg.jpg) center center fixed no-repeat;
                -moz-background-size: cover;
                background-size: cover;
            }  
            .tit{
                font-family: 'Covered By Your Grace', cursive;
                color:#3300CC;
                font-size: 1.2cm;
            }
            .wel{
                font-family: 'Covered By Your Grace', cursive;
                color:#3300CC;
                font-size: 0.8cm;
            }
            .username{
                background-color: #FFCCCC;
                height: 50px;
            }     
            .password{
                background-color: #FFCCCC;
                height: 50px;
            }
            .subbtn{
                height: 50px;
            }
        </style>
    </head>
    <body>
        <form class="inline">
            <div class="box animated fadeInDown">
                <div class="form-group" align="center">
                    <img src="./css/icon.png" 
                    class="img-circle" alt="庶民生活日記" width="200" height="200"> 
                </div>
                <div class="form-group" align="center">
                    <h2 class="tit">Plebeian life diary</h2>    
                </div> 
                <div class="input-control" >
                  <span id="basic-addon1" class=" input-group-addon glyphicon glyphicon-user"></span>
                  <input type="text" class="username form-control" placeholder="輸入您的使用者帳號" aria-describedby="basic-addon1">
                </div>
                <br>
                <div class="input-control">
                  <span class="input-group-addon glyphicon glyphicon-lock"></span>
                  <input type="text" class="password form-control" placeholder="輸入您的使用者密碼" aria-describedby="sizing-addon1">
                </div>
                <br>
                    <input type="submit" class="subbtn btn btn-primary block full-width m-b" value="登入"> 
            </div>     
        </form>

        <script src="PLDservice/js/jquery-2.1.1.min.js"></script>
        <script src="PLDservice/js/bootstrap.min.js"></script>
        <script src="PLDservice/js/bootstrap.js"></script>
        <script type="text/javascript">
        </script>
    </body>
</html>