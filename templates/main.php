<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>We love Javascript</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<link href="<?=$assets_path?>css/bootstrap.min.css" rel="stylesheet">
	<style type="text/css">
		body { padding-top: 60px; padding-bottom: 40px;	}
		.inline li { display: inline; }
		.softonic_logo_micro {
			width: 70px;
			height: 20px;
			display: inline-block;
			vertical-align:text-top;
			margin: 0 4px;
			background-image:url('<?=$assets_path?>img/softonic_logo_micro.png');
		}
	</style>
	<link href="<?=$assets_path?>css/bootstrap-responsive.min.css" rel="stylesheet">
	<link href="<?=$assets_path?>css/social.css" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script src="<?=$assets_path?>js/bootstrap.min.js"></script>
</head>
<body>
	<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="./">{WE [&hearts;] JS}</a>
				<div class="nav-collapse">
					<ul class="nav">
						<?php foreach($pages as $item_page => $item_title):
						$url = ($item_page == 'home') ? '' : $item_page; ?>
						<li class="<?php if($item_page == $page) echo 'active'?>"><a
							href="<?=$base_path?><?=$url?>"><?=$item_title?></a></li>
						<?php endforeach ?>
						<li class="<?php if($page == $next_event_url) echo 'active'?>"><a
							href="<?=$base_path?><?=$next_event_url?>" title="<?=$next_event_name?>">Próximo
							evento: <?=$next_event_name?></a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Anteriores <b
								class="caret"></b>
							</a>
							<ul class="dropdown-menu">
								<?php foreach($past_events as $item_page => $item_title): ?>
								<li class="<?php if($item_page == $page) echo 'active'?>"><a
									href="<?=$base_path?><?=$item_page?>"><?=$item_title?></a></li>
								<?php endforeach ?>
							</ul>
						</li>
					</ul>
				</div><!--/.nav-collapse -->
			</div><!-- /.container -->
		</div><!-- /.navbar-inner -->
	</div><!-- /.navbar-fixed-top -->
	<div class="container">
<?php if( file_exists( $page_filename ) ) require( $page_filename ); ?>
	</div> <!-- /.container -->
</body>
</html>