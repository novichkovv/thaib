<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="<?php echo SITE_DIR; ?>css/libs/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo SITE_DIR; ?>css/frontend/style.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="<?php echo SITE_DIR; ?>js/jquery.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo SITE_DIR; ?>js/libs/bootstrap.min.js"></script>
    <script src="<?php echo SITE_DIR; ?>js/common/common.js"></script>
</head>
<body>
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="background-color: #fff">
    <div class="container">

    </div>
</div>

<div class="container">

    <div class="main-body col-md-4 col-md-offset-4 col-sm-8 col-sm-offset-2">
        <div class="text-center">
            <img src="<?php echo SITE_DIR; ?>images/paypal.png" alt="Paypal" title="Paypal">
        </div>
        <br>
        <div class="credit-card-div">
            <div class="panel panel-default" >
                <div class="panel-heading">
                    <form id="payment_form" method="post">

                        <br><br>
                        <div class="row ">
                            <div class="col-md-12">
                                <input type="text" data-require="1" name="cc_number" class="form-control" placeholder="XXXX XXXX XXXX XXXX" />
                                <div class="error-require validate-message">
                                    Required Field
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row ">
                            <div class="col-md-3 col-sm-3 col-xs-6">
                                <span class="help-block text-muted small-font" > Expiry Month</span>
                                <input name="cc_month" type="text" class="form-control" data-require="1" placeholder="MM" />
                                <div class="error-require validate-message">
                                    Required Field
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-6">
                                <span class="help-block text-muted small-font" >  Expiry Year</span>
                                <input name="cc_year" type="text" class="form-control" data-require="1" placeholder="YY" />
                                <div class="error-require validate-message">
                                    Required Field
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-6">
                                <span class="help-block text-muted small-font" >  CCV &nbsp; &nbsp; &nbsp; &nbsp; </span>
                                <input name="ccv" type="text" class="form-control" data-require="1" placeholder="CCV" />
                                <div class="error-require validate-message">
                                    Required Field
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-6">
                                <span class="help-block text-muted small-font" >  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </span>
                                <img style="margin-top: 8px;" src="<?php echo SITE_DIR; ?>images/card.png" class="img-rounded" />
                            </div>
                        </div>
                        <br>
                        <div class="row ">
                            <div class="col-md-12 pad-adjust">

                                <input name="cc_name" type="text" class="form-control" data-require="1" placeholder="CARDHOLDER NAME" />
                                <div class="error-require validate-message">
                                    Required Field
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <!--                        <div class="col-md-12 pad-adjust">-->
                            <!--                            <div class="checkbox">-->
                            <!--                                <label>-->
                            <!--                                    <input type="checkbox" checked class="text-muted"> Save details for fast payments <a href="#"> learn how ?</a>-->
                            <!--                                </label>-->
                            <!--                            </div>-->
                            <!--                        </div>-->
                        </div>
                        <div class="row ">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <input id="pay_btn" type="submit" name="pay_btn" class="btn btn-lg btn-info btn-block" value="PAY NOW" />
                            </div>
                        </div>


                    </form>
                </div>
            </div>
        </div>
        <!-- CREDIT CARD DIV END -->
    </div>

</div><!-- /.container -->
<script type="text/javascript">
    $ = jQuery.noConflict();
    $(document).ready(function () {
        $("body").on("submit", "#payment_form", function () {
           return validate('payment_form');
        });
    });
</script>
<style>
    .main-body {
        margin-top: 70px;

    }
    #pay_btn {
        background-color: #395da1;
        border-radius: 0;
        border-color: #596d75;
        width: 100%;
        margin: auto;
    }
    #pay_btn:hover {
        background-color: #436ebd;
        border-color: #596d75;
        width: 100%;
        margin: auto;
    }
</style>
</body>
</html>