<?php
    require_once('./function.php');
    if(@$_SESSION['level']!='999')
        header("Location:index.php");
    $right=10;
    if( @$_GET['data_opendata_page']=='' )
        $opendata_left=0;
    elseif(@$_GET['data_opendata_page']<0)
        $opendata_left=0;
    else
        $opendata_left=@$_GET['data_opendata_page'];
    
    if( @$_GET['data_userdata_page']=='' )
        $user_left=0;
    elseif(@$_GET['data_userdata_page']<0)
        $user_left=0;
    else
        $user_left=@$_GET['data_userdata_page'];

    if( @$_GET['account_page']=='' )
        $account_left=0;
    elseif(@$_GET['account_page']<0)
        $account_left=0;
    else
        $account_left=@$_GET['account_page'];
    $sql_account = "SELECT * FROM accounts LIMIT ".$account_left.",".$right."";
    $data_account = sql_q($sql_account,array());
    $sql_opendata = "SELECT * FROM data WHERE type=? LIMIT ".$opendata_left.",".$right." ";
    $data_opendata = sql_q($sql_opendata,array('opendata'));
    $sql_userdata = "SELECT * FROM data WHERE type=? LIMIT ".$user_left.",".$right." ";
    $data_userdata = sql_q($sql_userdata,array('user'));
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>庶民生活日記</title>
        <link rel="stylesheet" href="css/bootstrap.css">     
        <link rel="stylesheet" href="css/stylelayout.css"> 
<style type="text/css">
                  .hide_td{
            display: none;
        }
  </style>
    </head>
    <body>
        <header>
            <h1>PLD</h1>
            <nav role='navigation'>
                <ul>
                    <li><a class="link-1 entypo-home active" href="#home">Index</a></li>
                    <li><a class="link-3 entypo-user" href="#about">Account</a></li>
                    <li><a class="link-2 " href="#clients">Opendata</a></li>
                    <li><a class="link-4 " href="#contact-us">Userdata</a></li>
                </ul>
            </nav>  
        </header>
        
        <section id="home">
            <div class="container">
                <div class="row">
                    <div class="col-md-9"></div>
                </div>
                <div class="row">
                    <div class="col-md-9">
                        <ul>
                            <h1 class="font">首頁公告</h1>
                            <li><p class="font-li">管理人員在新增,刪除,異動的過程中請斟酌使用。以免不小心處理到使用者的相關資料,謝謝!</p></li>
                        </ul>
                        
                    </div>
                </div>
            </div>
        </section>
        <section id="clients">
            <div class="container">
                <div class="row">
                    <div class="col-md-9"></div>
                </div>
                <div class="row">
                    <div class="col-md-9">
                        <ul>
                            <h1 class="font">使用中的Open Data</h1>
                            <table class="table table-striped">
                                <tr class="active">
                                    <td class="active">編號</td>
                                    <td class="active">標題</td>
                                    <td class="active">備註</td>
                                    <td class="active">處理</td>
                                </tr>
                            <?php 
                                foreach ( $data_opendata as $dt ){?>
                                <tr>
                                <td><?php echo $dt['d_no']; ?> </td>
                                <td><?php echo $dt['title']; ?></td>
                                <td><?php echo $dt['note']; ?></td>
                                <td><?php echo '<button' ?></td>
                                </tr>
                            <?php }?>
                            </table>
                            <ul class="pagination">
                                                  
                            <?php
                                $lefturl='./main.php?data_opendata_page='.($opendata_left-10).'#clients';
                                echo '<li><a href="'.$lefturl.'">上一頁</a></li>';
                                $righturl='./main.php?data_opendata_page='.($opendata_left+10).'#clients';
                                echo '<li><a href="'.$righturl.'">下一頁</a></li>';
                            ?>
                            </ul>  
                        </ul>
                        
                    </div>
                </div>
            </div>
        </section>
        <section id="about">
            <div class="container">
                <div class="row">
                    <div class="col-md-9"></div>
                </div>
                <div class="row">
                    <div class="col-md-9">
                            <h1 class="font">相關帳號</h1>
                            <table class="table table-striped">
                                <tr class="active">
                                    <td class="active">暱稱</td>
                                    <td class="active">帳號</td>
                                    <td class="active">性別</td>
                                    <td class="active">權限</td>
                                </tr>
                            <?php 
                                foreach ( $data_account as $dt ){?>
                                <tr>
                                <td><?php echo $dt['name']; ?> </td>
                                <td><?php echo $dt['account']; ?></td>
                                <td><?php echo $dt['type']; ?></td>
                                <td><?php echo ($dt['level']=='999') ?'管理者' : '一般會員'; ?></td>
                                </tr>
                            <?php }?>
                            </table>
                            <ul class="pagination">         
                            <?php
                                $lefturl='./main.php?account_page='.($account_left-10).'#about';
                                echo '<li><a href="'.$lefturl.'">上一頁</a></li>';
                                $righturl='./main.php?account_page='.($account_left+10).'#about';
                                echo '<li><a href="'.$righturl.'">下一頁</a></li>';
                            ?>
                            </ul> 
                    </div>
                </div>
            </div>
        </section>
        <section id="contact-us">
            <div class="container">
                <div class="row">
                    <div class="col-md-9"></div>
                </div>
                <div class="row">
                    <div class="col-md-9">
                        <ul>
                            <h1 class="font">使用中的User Data</h1>
                            <table class="table table-striped">
                                <tr class="active">
                                    <td class="active">編號</td>
                                    <td class="active">標題</td>
                                    <td class="active">備註</td>
                                    <td class="active">處理</td>
                                </tr>
                            <?php 
                                foreach ( $data_userdata as $dt ){?>
                                <tr>
                                    <td><?php echo $dt['d_no']; ?> </td>
                                    <td><?php echo $dt['title']; ?></td>
                                    <td><?php echo $dt['note']; ?></td>
                                    <td><?php echo '<button type="button" class="btn btn-primary btn-lg open-message" 
                                        data-toggle="modal" 
                                        data-target=".myModal">
                                        詳細資料
                                        </button>';?><td>
                                </tr>
                                <tr class="hide_td">
                                    <td>
                                        <table class="table">
                                            <tr class="active">
                                                    <th>欄位</th>
                                                    <th>資料</th>
                                            </tr>
                                            <tr>
                                                <th> 標題 </th>
                                                <td><?php echo input_show( $dt['title'],'title' ); ?> </td>
                                            </tr>
                                            <tr>
                                                <th> 內文 </th>
                                                <td><?php echo input_show( $dt['content'],'content' ); ?> </td>
                                            </tr>
                                            
                            
                                            <tr>
                                                <th> lng </th>
                                                <td><?php echo $dt['lng']; ?> </td>
                                            </tr>
                                            <tr>
                                                <th> lat </th>
                                                <td><?php echo $dt['lat']; ?> </td>
                                            </tr>
                                            <tr>
                                                <th> 地址 </th>
                                                <td><?php echo $dt['address']; ?></td>
                                                <td><input type="hidden" name="d_no" class="edi_hidden" value="<?php echo $dt['d_no']; ?>"></td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            <?php }?>
                            </table>
                            <ul class="pagination">
                                                  
                            <?php
                                $lefturl='./main.php?data_userdata_page='.($user_left-10).'#contact-us';
                                echo '<li><a href="'.$lefturl.'">上一頁</a></li>';
                                $righturl='./main.php?data_userdata_page='.($user_left+10).'#contact-us';
                                echo '<li><a href="'.$righturl.'">下一頁</a></li>';
                            ?>
                            </ul>  
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <div class="myModal modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="myModalLabel">詳細資料</h4>
                </div>
                <form class="update_form" action="update.php" method="POST">
                    <div class="modal-body"> 
                            <table class="table table-hover" >
                                <tr class="surre">
                                </tr>
                            </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary edimessage" >編輯資料</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </form> 
                </div>
            </div>
        </div>
        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
        <script src="js/index.js"></script>
        <script src="js/bootstrap.js"></script>
        <script >
            $( ".open-message" )
            .click(function(){
                var msg = $(this).parent().parent().next().html();
                $(".surre" ).html(msg);
                
            });
            $( ".edimessage" )
            .click(function(){
                
                $(".update_form" ).submit();
                
            });
        </script>
    </body>
</html>
