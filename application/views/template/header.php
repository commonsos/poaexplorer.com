<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title><?php echo (!empty($title) ? $title : 'POA Explorer'); ?></title>
        <meta name="description" content="<?php echo (!empty($description) ? $description : 'POA Network block explorer.'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="google" content="notranslate" />

        <link rel="manifest" href="site.webmanifest">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css?v=<?php echo strtotime("now"); ?>">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-theme.min.css?v=<?php echo strtotime("now"); ?>">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/main.css?v=<?php echo strtotime("now"); ?>">
        <link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url(); ?>favicon.png">
		<link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url(); ?>favicon.png">
		<link rel="shortcut icon" href="<?php echo base_url(); ?>favicon.ico">
    </head>
    <body>
	    
	    <?php $active = $this->uri->segment(1); ?>
	    
	    
	    
	    <nav class="navbar bg-dark">
		  <div class="container-fluid">
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>                        
		      </button>
		      <a class="navbar-brand" href="/"><img src="<?php echo base_url(); ?>assets/img/avatar_site.png" /></a>
		    </div>
		    <div class="collapse navbar-collapse" id="myNavbar">
		      <ul class="nav navbar-nav">
		        <li class="active"><a class="<?php echo (empty($active) ? 'active' : ''); ?>" href="/">Home</a></li>
		        
		        <li><a class="<?php echo ($active == 'blocks' ? 'active' : ''); ?>" href="<?php echo base_url(); ?>blocks">Blocks</a></li>
		        <li><a class="<?php echo ($active == 'transactions' ? 'active' : ''); ?>" href="<?php echo base_url(); ?>transactions">Transactions</a></li>
		        <li><a class="<?php echo ($active == 'accounts' ? 'active' : ''); ?>" href="<?php echo base_url(); ?>accounts">Accounts</a></li>
				<li class="dropdown">
		          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Tools <span class="caret"></span></a>
		          <ul class="dropdown-menu">
		            <li><a href="<?php echo base_url(); ?>tools/api">API</a></li>
					<li><a href="<?php echo base_url(); ?>tools/verify">Verify Contract</a></li>
					<li><a href="<?php echo base_url(); ?>tools/opcode">Byte to OPCode</a></li>
					<li role="separator" class="divider"></li>
					<li class="dropdown-header">Contribute</li>
					<li><a target="_blank" href="https://github.com/acravenho/poaexplorer.com">Github</a></li>
		          </ul>
		        </li>
		      </ul>
		      
		      <ul class="nav navbar-nav navbar-right">
			     
			  	<li class="nav-item">
			  		<a target="_blank" class="header_icon" href="https://github.com/poanetwork" title="POA Network Github"><i class="fa fa-github-alt"></i></a>
			  	</li>
			  	<li class="nav-item">
			  		<a target="_blank" class="header_icon" href="https://medium.com/@poanetwork" title="Official POA Medium"><i class="fa fa-medium"></i></a>
			  	</li>
			  	<li class="nav-item">
			  		<a target="_blank" class="header_icon" href="https://twitter.com/poanetwork" title="Official POA Twitter"><i class="fa fa-twitter"></i></a>
			  	</li>
			  	<li class="nav-item">
			  		<a target="_blank" class="header_icon" href="https://t.me/joinchat/FlX0FD_ndCsB4_n60sCu2w" title="Official POA Telegram"><i class="fa fa-telegram"></i></a>
			  	</li>
			  	<li>
		        	<form class="form-inline my-2 my-lg-0" method="post" action="<?php echo base_url(); ?>search">
						<input class="form-control mr-sm-2" style="width:275px;" type="text" placeholder="Search Address / TX / Block" aria-label="Search" name="hash">
						<button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
		    		</form>
			  	</li>
		      </ul>
		    </div>
		  </div>
		</nav>
	    
	    	    
	    <main role="main">
		    <div class="container">