<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="<?php echo $this->config->item('meta_desc');?>" name="description" />
    <meta content="<?php echo $this->config->item('meta_key');?>" name="keywords" />
    <meta content="<?php echo $this->config->item('meta_author');?>" name="author" />
    <title><?php echo isset ($site_title)?$site_title.' | '.$this->config->item('site_title'):$this->config->item('site_title'); ?></title>
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/sb-admin-2.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/font-awesome/css/font-awesome.min.css?v=<?php echo time()?>" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/bootstrap-switch.min.css?v=3.3.2" rel="stylesheet">

    <link href="<?php echo base_url();?>assets/css/app.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Setup panel</h3>
                    </div>
                    <div class="panel-body">
                        <?php
                            $attributes = array('role'=>'form');
                            echo form_open('setup',$attributes);
                            if(validation_errors()) {
                                echo "<div class=\"bs-callout bs-callout-danger\">
                                        <h4>Error</h4>
                                        <p>".validation_errors()."</p>
                                    </div>";
                            }
                            $error = $this->session->flashdata('error');
                            if ($error != '') {
                                echo "<div class=\"bs-callout bs-callout-danger\">
                                        <h4>Error</h4>
                                        <p>".$error."</p>
                                    </div>";
                            }

                            $sukses = $this->session->flashdata('sukses'); 
                            if($sukses != '') {
                                echo "<div class=\"bs-callout bs-callout-success\">
                                        <h4>Sukses</h4>
                                        <p>".$sukses."</p>
                                    </div>";
                            }
                        ?>
                            <fieldset>
                                <div class="form-group">
                                	<label>Kode PT</label>
                                    <input class="form-control" placeholder="Kode Perguruan Tinggi" value="<?php echo set_value('kode_pt'); ?>" name="kode_pt" autofocus>
                                </div>
                                <div class="form-group">
                                	<label>URL Webservice Feeder</label>
                                    <input name="url_ws" class="form-control" placeholder="Example >> http://localhost:8082/ws/" value="<?php echo set_value('url_ws'); ?>" >
                                </div>
                                <button class="btn btn-info" type="submit">Save</button> <small>Klik di <a href="<?php echo base_url();?>ws">sini</a> untuk login</small>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/metisMenu.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/sb-admin-2.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap-switch.min.js?v=3.3.2"></script>

    <script>
        $(document).ready(function(){
          $("[name='db_ws']").bootstrapSwitch();
        });
    </script>

</body>

</html>
