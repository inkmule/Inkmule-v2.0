<!DOCTYPE html>
<html lang="en">
<head>
   <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="description" content="">
   <meta name="keywords" content="">
   <meta name="author" content="">

   <link rel="icon" href="<?php echo base_url('assets/img/ico/favicon.ico') ?>" type="image/gif">
   <title>Inkmule | Custom T-shirts and Merchandise</title>

   <link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
   <link href="<?php echo base_url('assets/css/font-awesome.css') ?>" rel="stylesheet">
   <link href="<?php echo base_url('assets/css/custom.css') ?>" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-default navbar-fixed-top navbar-inverse" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo base_url();?>">
      	<img src="<?php echo base_url("assets/img/brand/inkmule_logo_final.png");?>"/>
      </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li <?php if(!$this->uri->segment(1)) echo('class="active"');?> >
        	<a href="<?php echo base_url();?>">Home</a>
        </li>
		<li <?php if($this->uri->segment(1) == 'quote') echo('class="active"');?>>
			<a href="<?php echo base_url("quote/");?>">Start Designing!</a>
		</li>
		<li <?php if($this->uri->segment(1) == 'samples') echo('class="active"');?>>
			<a href="<?php echo base_url("samples/");?>">Examples</a>
		</li>
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Get in touch<b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="mailto:logan@inkmule.com" target="_blank">send us an email</a></li>
			<li><a href="https://www.facebook.com/pages/inkmule/273839796082073" target="_blank">facebook</a></li>
            <li><a href="https://twitter.com/inkmule" target="_blank">twitter</a></li>
            <li><a href="http://instagram.com/inkmule" target="_blank">instagram</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
