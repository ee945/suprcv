<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ready to View&nbsp;&nbsp;|&nbsp;&nbsp;SuprCV HTML5 vCard</title>
    <link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <style type="text/css">
        body{
            background:#555;
            background-image:url(<?php echo base_url('resources/common/admin/access-bg.jpg');?>);
            background-repeat:no-repeat;
            background-size:cover;
            background-attachment:fixed;
        }

        .login-box{
            width:80%;
            height:50%;
            margin-top:40%;
            margin-left:auto;
            margin-right:auto;
            padding:50px;
            border:0px solid grey;
            border-radius:10px;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 text-center">
                <div class="login-box">
                    <span id="notify"></span>
                    <div class="input-group input-group-lg">
                        <input id="acc" type="text" class="form-control" placeholder="Please Input Access Code...">
                        <span class="input-group-btn">
                            <button id="accbtn" class="btn btn-lg btn-info" type="button">
                                <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
                            </button>
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
<script src="http://cdn.bootcss.com/jquery/1.11.2/jquery.min.js"></script>
<script src="http://cdn.bootcss.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
    $("#acc").focus();
    $("#accbtn").click(function(){
        acc=$("#acc").val().trim();
        location.href="<?php echo base_url()?>view/access/"+acc;
    });
    $("#acc").bind('keypress',function(event){
        if(event.keyCode=="13"){
            $("#accbtn").click(); 
        }
    });
});
</script>
</body>
</html>
