<?php require_once(__DIR__ . "/inc/config.php"); ?>
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<link rel="canonical" href="<?=DOMAIN?>">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--
                                                        .,;+###+;:.
                                                  .##;`             .'@:
                                              `@+                        +#
                                            #'                             `@`
                                         `@`                                 `@
                        ``:::.`         @.                                     +.
                    `#+`        ;@    `#                                        '.
                  `@              `@ :;                                          @
                 @`                 @;                                            +
                @                   ;                                             @
               @                                                                  @
               @                                                                 `+
               @                                                                 @
                @`                `..                             ..`           #.
                 `@;            '+#@. ';                      `:++@' .#        @.
                 `+#;.``       ;;#@@  ,@.                     `;+@@, `@@     `;;#+`
               .@              ::'######                       :;######+           @`
              :,                ,;;'''+`                       `;;'''+:             .+
              @                             `+'++++++++'++`                          ;,
              ##   ``` `                    ''''''''''''''+                           @
               @#, ```````                  '''''''''''''':                          .@
                :#@# ``.```                  ''''''''''''+                         '#@
                :,.;@@```.`````               ;'''''''''                        :@@@`
                @``@  +'+.@'```````               ```                           '#@
                ',`.   ..+  ,@@`@.```                ``    `::   '@@@#  #@@@# @;   @`
                 @`.   ,..  ;.,' ,`##``@@@.  '@@@. @'..;# @'''+:@     '#;;;;;@      @
                 @..,  ...   ...  @.`#,   `#@;;;;'#      @;;;;;'       ;;;;;;       @
                 ':..   ..   ,.:   ..       ;;;;;;`      ';;;;;'      ,;;;;;;       @
                  @..   ,..  ,.:   ..       ;;;;;;.      ';;;;;;      :;;;;;'      ;,
                  @,..  ,.:  `..   ...      ;;;;;;.      ';;;;;,      ';;;;;;      @
                  ':.,   ,.   ..   .,.      ';;;;;.      ';;;;;.      ';;;;;.      @
                   @.,   ..   ,.   :.:      ';;;;;.      ';;;;;       ;;;;;;       @
                   @,,.  :,.  :,.  ,.:      ';;;;;.      ;;;;;;       ;;;;;'      ;.
                   ;;,;  :,:  :,:  ,,:      ';;;;;.      ;;;;;;      `;;;;;'      @
                    @,,   ,:  `,:  .,:      ';;;;;.      ;;;;;'      :;;;;;:      @
                    @:,`  ,,   ,,   ,,      ';;;;;.      ;;;;;'      ';';;;`      #
                    :;:;  ;,`  ,,   ,,      ;;;;;;.      ;;;;;'      ';;;;;      '`
                     @,,  ,,:  ;,   ,,      :;;';;.      ;;;;;'      ';;';'      @
                     @::   :;  :,.  :,      :;;;;;.      ;;;;;:      ;';;;'      @
                     ,;::  ::  ,:;  ;,      :;;;;'.     `;;';',      ;;';',      +
                      @::  ;:   :;  :,`     .;;;;;.     ,;;';;.     :;;;''`     '
                      @::  .:,  ::  :,.     `;';;;.     :';;;;      ;;'';'      @
                      .#:,  :;  ;:  ,:,     `;';;;.     :;;'';      '';';'      @
                        `#; ;:  ::   :;      ;;';;.     ;';'''      ''';''     `'
                           `@'  ,:,  :;      ''';;.     ;'''''      ;'''',     +
                              .@,::  :;      ;''''.     ';;'''      ;';;;    `.@
                                 :@. ;:      ;''';.     ';;;'',:'#@@#+';,`
                                    :@;     `'++#@@##';,.`
                                       ;,.`                                                          -->

	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
	<link rel="icon" href="images/favicon.ico" type="image/x-icon">

	<title>Popcorn Time - <?=$langsite["TITLE_INDEX"]?></title>
	<meta name="description" content="<?=$langsite["SITE_DESC"]?>">
	<link rel="image_src" href="images/header-ui.jpg">
	
	<?php include_once('inc/social_tags.php'); ?>
</head>
<body class="beta">
	<section id="header">

		<nav class="fixed-width fadeInDown wow">
			<a href="<?=LINK_HOME?>" id="logo">Popcorn Time</a>
			<ul class="align-right">
				<?php if(defined('LINK_FCBK')) { ?><li class="social"><a href="<?=LINK_FCBK?>" target="_blank" class="icon-facebook"></a></li><?php } ?>
				<?php if(defined('LINK_BLOG')) { ?><li class="social"><a href="<?=LINK_BLOG?>" target="_blank" class="icon-ghost"></a></li><?php } ?>
				<?php if(defined('LINK_TWTR')) { ?><li class="social"><a href="<?=LINK_TWTR?>" target="_blank" class="icon-twitter"></a></li><?php } ?>
				<?php if(defined('LINK_GTHB')) { ?><li class="social"><a href="<?=LINK_GTHB?>" target="_blank" class="icon-github"></a></li><?php } ?>
			</ul>

			<ul class="align-left">
				<div id="langswitch">
					<form action="#" method="post">
						<select name="lang">
							<?=$l->printLanguageOptions()?>
						</select>
					</form>
				</div>
				<li class="text"><a href="<?=LINK_FAQ?>">FAQ</a></li>
				<li class="text"><a href="<?=LINK_TOS?>">TOS</a></li>
			</ul>
		</nav>

		<div class="text fadeInDown wow">
			<h1><?=$langsite["HEADER"]?></h1>
			<p><?=$langsite["SUBHEADER"]?></p>
		</div>

		<ul id="links">
			<li class="download dl-mac">
				<a href="<?=LINK_DL?>/mac" class="btn-main icon-mac" target="_blank"><?=sprintf($langsite["BTN_DOWNLOAD"], VERSION)?></a><br>
				<small><?=$langsite["DL_DESC_MAC"]?></small>
			</li>
			<li class="download dl-win">
				<a href="<?=LINK_DL?>/win" class="btn-main icon-win" target="_blank"><?=sprintf($langsite["BTN_DOWNLOAD"], VERSION)?></a><br>
				<small><?=$langsite["DL_DESC_WIN"]?></small>
			</li>
			<li class="download dl-lin-32">
				<a href="<?=LINK_DL?>/linux32" class="btn-main icon-linux" target="_blank"><?=sprintf($langsite["BTN_DOWNLOAD"], VERSION)?></a><br>
				<small><?=$langsite["DL_DESC_LIN32"]?></small>
			</li>
			<li class="download dl-lin-64">
				<a href="<?=LINK_DL?>/linux64" class="btn-main icon-linux" target="_blank"><?=sprintf($langsite["BTN_DOWNLOAD"], VERSION)?></a><br>
				<small><?=$langsite["DL_DESC_LIN64"]?></small>
			</li>
		</ul>
		<img src="images/header-ui.jpg" class="ui-screenshot fadeInUp wow" alt="Popcorn Time UI">
	</section>

	<div class="container">
		<div class="warning fadeIn wow">
			<h5 class="icon-info"><?=$langsite["DISCLAIMER_TITLE"]?></h5>
			<p><?=$langsite["DISCLAIMER_DESC"]?></p>
		</div>
		<section id="features" class="fixed-width">
			<div class="clear-fix">
				<article class="fadeInLeft wow">
					<img src="images/icon-best.gif" alt="">
					<h5><?=$langsite["FEAT_MOVIES"]?></h5>
					<p><?=$langsite["FEAT_MOVIES_DESC"]?></p>
				</article>

				<article class="fadeInRight wow">
					<img src="images/icon-watch.gif" alt="">
					<h5><?=$langsite["FEAT_NORESTRICTION"]?></h5>
					<p><?=$langsite["FEAT_NORESTRICTION_DESC"]?></p>
				</article>

				<article class="fadeInLeft wow">
					<img src="images/icon-search.gif" alt="">
					<h5><?=$langsite["FEAT_CATALOGUE"]?></h5>
					<p><?=$langsite["FEAT_CATALOGUE_DESC"]?></p>
				</article>

				<article class="fadeInRight wow">
					<img src="images/icon-subs.gif" alt="">
					<h5><?=$langsite["FEAT_QUALITY"]?></h5>
					<p><?=$langsite["FEAT_QUALITY_DESC"]?></p>
				</article>
			</div>

			<div class="width-70 align-center action fadeInUp wow">
				<img src="images/pochoclin.gif" alt="Pochoclin" class="align-center pochoclin">
				<hr>
				<h2><?=$langsite["FEAT_BEST"]?></h2>
				<br>
				<div class="dl-mac">
					<a href="<?=LINK_DL?>/mac" class="btn-main icon-mac" target="_blank"><?=sprintf($langsite["BTN_DOWNLOAD"], VERSION)?></a>
					<small><?=$langsite["DL_DESC_MAC"]?></small>
				</div>
				<div class="dl-win">
					<a href="<?=LINK_DL?>/win" class="btn-main icon-win" target="_blank"><?=sprintf($langsite["BTN_DOWNLOAD"], VERSION)?></a>
					<small><?=$langsite["DL_DESC_WIN"]?></small>
				</div>
				<div class="dl-lin-32">
					<a href="<?=LINK_DL?>/linux32" class="btn-main icon-linux" target="_blank"><?=sprintf($langsite["BTN_DOWNLOAD"], VERSION)?></a>
					<small><?=$langsite["DL_DESC_LIN32"]?></small>
				</div>
				<div class="dl-lin-64">
					<a href="<?=LINK_DL?>/linux64" class="btn-main icon-linux" target="_blank"><?=sprintf($langsite["BTN_DOWNLOAD"], VERSION)?></a>
					<small><?=$langsite["DL_DESC_LIN64"]?></small>
				</div>
			</div>
		</section>

		<section id="how">
			<div class="fixed-width fadeInLeft wow">
				<h2><?=$langsite["HOW_TITLE"]?></h2>
				<h4><?=$langsite["HOW_DESC"]?></h4>
				<ul class="steps">
					<li class="icon-eye"><?=$langsite["HOW_1"]?></li>
					<li class="icon-hd"><?=$langsite["HOW_2"]?></li>
					<li class="icon-play"><?=$langsite["HOW_3"]?></li>
				</ul>
			</div>
			<img src="images/how-ui.jpg" class="ui-screenshot fadeInRight wow" alt="Popcorn Time UI">
		</section>

		<section id="get-app">
			<div class="text fadeIn wow">
				<h2><?=$langsite["GET_TITLE"]?></h2>
				<p><?=$langsite["GET_DESC"]?></p>
			</div>
			<ul class="platforms">
				<li class="mac icon-laptop fadeInUp wow" data-wow-delay=".2s">
					<a href="<?=LINK_DL?>/mac" class="btn-main icon-mac" target="_blank"><?=sprintf($langsite["BTN_DOWNLOAD"], VERSION)?></a>
					<small><?=$langsite["DL_DESC_MAC"]?></small>
				</li>
				<li class="win icon-screen fadeInUp wow" data-wow-delay=".4s">
					<a href="<?=LINK_DL?>/win" class="btn-main icon-win" target="_blank"><?=sprintf($langsite["BTN_DOWNLOAD"], VERSION)?></a>
					<small><?=$langsite["DL_DESC_WIN"]?></small>
				</li>
				<li class="lin-32 icon-window fadeInUp wow" data-wow-delay=".6s">
					<a href="<?=LINK_DL?>/linux32" class="btn-main icon-linux" target="_blank"><?=sprintf($langsite["BTN_DOWNLOAD"], VERSION)?></a>
					<small><?=$langsite["DL_DESC_LIN32"]?></small>
				</li>
				<li class="lin-64 icon-window fadeInUp wow" data-wow-delay=".8s">
					<a href="<?=LINK_DL?>/linux64" class="btn-main icon-linux" target="_blank"><?=sprintf($langsite["BTN_DOWNLOAD"], VERSION)?></a>
					<small><?=$langsite["DL_DESC_LIN64"]?></small>
				</li>
			</ul>
		</section>
		<section id="mailchimp-signup">
			<p>
				<!-- Begin MailChimp Signup Form -->
				<link href="http://cdn-images.mailchimp.com/embedcode/classic-081711.css" rel="stylesheet" type="text/css">
				<style type="text/css">
					#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
				</style>
				<div id="mc_embed_signup" class="fadeInUp wow">
					<form action="http://get-popcorn.us8.list-manage2.com/subscribe/post?u=afbd4b6f42dd2b6ddb4f34b9b&amp;id=b1d0d0a4a1" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
						<h2><?=$langsite["MAIL_SUBSCRIBE"]?></h2>
						<div class="mc-field-group">
							<label for="mce-EMAIL"><?=$langsite["MAIL_EMAIL"]?></label>
							<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" >
						</div>
						<div id="mce-responses" class="clear">
							<div class="response" id="mce-error-response" style="display:none"></div>
							<div class="response" id="mce-success-response" style="display:none"></div>
						</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
						<div style="position: absolute; left: -5000px;"><input type="text" name="b_afbd4b6f42dd2b6ddb4f34b9b_b1d0d0a4a1" value=""></div>
						<div class="clear"><input type="submit" value="<?=$langsite["MAIL_SUBSCRIBE_BTN"]?>" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
					</form>
				</div>
				<script type="text/javascript">
				var fnames = new Array();var ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';
				try {
				    var jqueryLoaded=jQuery;
				    jqueryLoaded=true;
				} catch(err) {
				    var jqueryLoaded=false;
				}
				var head= document.getElementsByTagName('head')[0];


				var err_style = '';
				try{
				    err_style = mc_custom_error_style;
				} catch(e){
				    err_style = '#mc_embed_signup input.mce_inline_error{border-color:#6B0505;} #mc_embed_signup div.mce_inline_error{margin: 0 0 1em 0; padding: 5px 10px; background-color:#6B0505; font-weight: bold; z-index: 1; color:#fff;}';
				}
				var head= document.getElementsByTagName('head')[0];
				var style= document.createElement('style');
				style.type= 'text/css';
				if (style.styleSheet) {
				  style.styleSheet.cssText = err_style;
				} else {
				  style.appendChild(document.createTextNode(err_style));
				}
				head.appendChild(style);
				setTimeout('mce_preload_check();', 250);

				var mce_preload_checks = 0;
				function mce_preload_check(){
				    if (mce_preload_checks>40) return;
				    mce_preload_checks++;
				    try {
				        var jqueryLoaded=jQuery;
				    } catch(err) {
				        setTimeout('mce_preload_check();', 250);
				        return;
				    }
				    var script = document.createElement('script');
				    script.type = 'text/javascript';
				    script.src = 'http://downloads.mailchimp.com/js/jquery.form-n-validate.js';
				    head.appendChild(script);
				    try {
				        var validatorLoaded=jQuery("#fake-form").validate({});
				    } catch(err) {
				        setTimeout('mce_preload_check();', 250);
				        return;
				    }
				    mce_init_form();
				}
				function mce_init_form(){
				    jQuery(document).ready( function($) {
				      var options = { errorClass: 'mce_inline_error', errorElement: 'div', onkeyup: function(){}, onfocusout:function(){}, onblur:function(){}  };
				      var mce_validator = $("#mc-embedded-subscribe-form").validate(options);
				      $("#mc-embedded-subscribe-form").unbind('submit');//remove the validator so we can get into beforeSubmit on the ajaxform, which then calls the validator
				      options = { url: 'http://get-popcorn.us8.list-manage.com/subscribe/post-json?u=afbd4b6f42dd2b6ddb4f34b9b&id=b1d0d0a4a1&c=?', type: 'GET', dataType: 'json', contentType: "application/json; charset=utf-8",
				                    beforeSubmit: function(){
				                        $('#mce_tmp_error_msg').remove();
				                        $('.datefield','#mc_embed_signup').each(
				                            function(){
				                                var txt = 'filled';
				                                var fields = new Array();
				                                var i = 0;
				                                $(':text', this).each(
				                                    function(){
				                                        fields[i] = this;
				                                        i++;
				                                    });
				                                $(':hidden', this).each(
				                                    function(){
				                                        var bday = false;
				                                        if (fields.length == 2){
				                                            bday = true;
				                                            fields[2] = {'value':1970};//trick birthdays into having years
				                                        }
				                                    	if ( fields[0].value=='MM' && fields[1].value=='DD' && (fields[2].value=='YYYY' || (bday && fields[2].value==1970) ) ){
				                                    		this.value = '';
													    } else if ( fields[0].value=='' && fields[1].value=='' && (fields[2].value=='' || (bday && fields[2].value==1970) ) ){
				                                    		this.value = '';
													    } else {
													        if (/\[day\]/.test(fields[0].name)){
				    	                                        this.value = fields[1].value+'/'+fields[0].value+'/'+fields[2].value;									        
													        } else {
				    	                                        this.value = fields[0].value+'/'+fields[1].value+'/'+fields[2].value;
					                                        }
					                                    }
				                                    });
				                            });
				                        $('.phonefield-us','#mc_embed_signup').each(
				                            function(){
				                                var fields = new Array();
				                                var i = 0;
				                                $(':text', this).each(
				                                    function(){
				                                        fields[i] = this;
				                                        i++;
				                                    });
				                                $(':hidden', this).each(
				                                    function(){
				                                        if ( fields[0].value.length != 3 || fields[1].value.length!=3 || fields[2].value.length!=4 ){
				                                    		this.value = '';
													    } else {
													        this.value = 'filled';
					                                    }
				                                    });
				                            });
				                        return mce_validator.form();
				                    }, 
				                    success: mce_success_cb
				                };
				      $('#mc-embedded-subscribe-form').ajaxForm(options);
				      
				      
				    });
				}
				function mce_success_cb(resp){
				    $('#mce-success-response').hide();
				    $('#mce-error-response').hide();
				    if (resp.result=="success"){
				        $('#mce-'+resp.result+'-response').show();
				        $('#mce-'+resp.result+'-response').html(resp.msg);
				        $('#mc-embedded-subscribe-form').each(function(){
				            this.reset();
				    	});
				    } else {
				        var index = -1;
				        var msg;
				        try {
				            var parts = resp.msg.split(' - ',2);
				            if (parts[1]==undefined){
				                msg = resp.msg;
				            } else {
				                i = parseInt(parts[0]);
				                if (i.toString() == parts[0]){
				                    index = parts[0];
				                    msg = parts[1];
				                } else {
				                    index = -1;
				                    msg = resp.msg;
				                }
				            }
				        } catch(e){
				            index = -1;
				            msg = resp.msg;
				        }
				        try{
				            if (index== -1){
				                $('#mce-'+resp.result+'-response').show();
				                $('#mce-'+resp.result+'-response').html(msg);            
				            } else {
				                err_id = 'mce_tmp_error_msg';
				                html = '<div id="'+err_id+'" style="'+err_style+'"> '+msg+'</div>';
				                
				                var input_id = '#mc_embed_signup';
				                var f = $(input_id);
				                if (ftypes[index]=='address'){
				                    input_id = '#mce-'+fnames[index]+'-addr1';
				                    f = $(input_id).parent().parent().get(0);
				                } else if (ftypes[index]=='date'){
				                    input_id = '#mce-'+fnames[index]+'-month';
				                    f = $(input_id).parent().parent().get(0);
				                } else {
				                    input_id = '#mce-'+fnames[index];
				                    f = $().parent(input_id).get(0);
				                }
				                if (f){
				                    $(f).append(html);
				                    $(input_id).focus();
				                } else {
				                    $('#mce-'+resp.result+'-response').show();
				                    $('#mce-'+resp.result+'-response').html(msg);
				                }
				            }
				        } catch(e){
				            $('#mce-'+resp.result+'-response').show();
				            $('#mce-'+resp.result+'-response').html(msg);
				        }
				    }
				}

				</script>
				<!--End mc_embed_signup-->				

			</p>

		</section>

		<section id="footer" class="fadeInUp wow">
			<hr style="display: none">
			<nav class="clear-fix">
				<a href="<?=LINK_HOME?>" class="logo">Popcorn time</a>
				<ul>
					<?php if(defined('LINK_FCBK')) { ?><li class="social"><a href="<?=LINK_FCBK?>" target="_blank" class="icon-facebook"></a></li><?php } ?>
					<?php if(defined('LINK_BLOG')) { ?><li class="social"><a href="<?=LINK_BLOG?>" target="_blank" class="icon-ghost"></a></li><?php } ?>
					<?php if(defined('LINK_TWTR')) { ?><li class="social"><a href="<?=LINK_TWTR?>" target="_blank" class="icon-twitter"></a></li><?php } ?>
					<?php if(defined('LINK_GTHB')) { ?><li class="social"><a href="<?=LINK_GTHB?>" target="_blank" class="icon-github"></a></li><?php } ?>
                </ul>
			</nav>
			<footer>
				<hr>
				<i class="film"></i>
				<p><?=$langsite["FOOTER"]?><br> <small><a href="<?=LINK_TOS?>">Terms of Service</a> — <a href="<?=LINK_FAQ?>">FAQ</a></small></p>
			</footer>
		</section>
	</div>
	<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
	<script type="text/javascript" src="js/wow.js"></script>
	<script type="text/javascript" src="js/site.js"></script>
    <script type="text/javascript" src="js/jquery.polyglot.language.switcher.js"></script>
</body>
</html>
