<!DOCTYPE HTML>
<!--[if IE 6]>
<html class="oldie ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html class="oldie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="oldie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
    <head>
	
		<!-- page correct -->
	
        <meta name="google-site-verification" content="OkwI6HLZNd7hyXXeyvmA8k0StYkzZynefCmzbpdXeMc" />
        <!-- Global Site Tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-110980679-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments)};
          gtag('js', new Date());

          gtag('config', 'UA-110980679-1');
        </script>
        <!-- End Google Analytics -->
		
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-127886888-1"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'UA-127886888-1');
		</script>
		
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-53036593-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-53036593-1');
</script>


<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window,document,'script', 'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '1965042523604937');
fbq('track', 'PageView');
</script>

<noscript>

<img height="1" width="1"

src="https://www.facebook.com/tr?id=1965042523604937&ev=PageView

&noscript=1"/>

</noscript>
<script type="text/javascript" async src="https://d335luupugsy2.cloudfront.net/js/loader-scripts/e74a76b6-6138-45d2-b86c-df7cf2700d57-loader.js"></script>
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-781321312"></script> <script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'AW-781321312'); </script>
<script> function gtag_report_conversion(url) { var callback = function () { if (typeof(url) != 'undefined') { window.location = url; } }; gtag('event', 'conversion', { 'send_to': 'AW-781321312/WXieCM2TiZUBEOCIyPQC', 'event_callback': callback }); return false; } </script>

		<link rel="sitemap" type="application/xml" title="Sitemap" href="/sitemap.xml" />

        <meta charset="<?php bloginfo('charset'); ?>" />
        <title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $paged;

        if(is_front_page() && get_bloginfo('name')) {
            bloginfo('name'); echo ' | '; bloginfo('description');
        } else { wp_title('|', true, 'right'); }


        // Add a page number if necessary:
	if ( $paged >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'themeton' ), $paged );

	?></title>
	
	<?php 
	if (isset($_GET['newsletter-email'])) {
		 $customPost = get_page_by_title($postTitle, OBJECT, 'newsletter');

			if(!is_null($customPost)) {
				$new_post = array(
					'ID' => $customPost->ID,
					'post_title' => addslashes(trim($_GET['newsletter-email'])),
					'post_content' => addslashes(trim($_GET['newsletter-email'])),
					'post_type' => 'newsletter'
				);
				wp_update_post( $new_post );

				
			} else {
				$new_post = array(
				'post_title' => addslashes(trim($_GET['newsletter-email'])),
				'post_content' => addslashes(trim($_GET['newsletter-email'])),
				'post_type' => 'newsletter'
				);
				$id = wp_insert_post($new_post);
			}
				
	} 
	
	
	if (isset($_POST['contact-name']) && isset($_POST['contact-email']) && isset($_POST['contact-phone']) && isset($_POST['contact-message'])) {
		 $customPost = get_page_by_title($postTitle, OBJECT, 'mensagens_contato');
			
			$html = "";
			$html .= "Nome: " . "Contato - " . addslashes(trim($_POST['contact-name'])) . "<br />";
			$html .= "E-mail: " . addslashes(trim($_POST['contact-email'])) . "<br />";
			$html .= "Telefone: " . addslashes(trim($_POST['contact-phone'])) . "<br />";
			$html .= "Assunto: " . addslashes(trim($_POST['contact-subject'])) . "<br />";
			$html .= "Mensagem: " . addslashes(trim($_POST['contact-message'])) . "<br />";
			
			if(!is_null($customPost)) {
				$new_post = array(
					'ID' => $customPost->ID,
					'post_title' => addslashes(trim($_POST['contact-name'])),
					'post_content' => $html,
					'post_type' => 'mensagens_contato'
				);
				wp_update_post( $new_post );

				
			} else {
				$new_post = array(
				'post_title' => "Contato - " . addslashes(trim($_POST['contact-name'])),
					'post_content' => $html,
				'post_type' => 'mensagens_contato'
				);
				$id = wp_insert_post($new_post);
			}
				
	} 
	
	
	
	?>

        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="<?php echo get_template_directory_uri(); ?>/assets/js/html5shiv.js"></script>
        <![endif]-->
        <!--[if IE 8]>
            <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/ie8.css">
        <![endif]-->
        <!--[if IE 7]>
            <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/framework/Pagebuilder/css/font-awesome-ie7.min.css">
        <![endif]-->

        <?php
        tt_icons(); // Favicon and Touch icons 

        if (is_singular() && get_option('thread_comments'))
            wp_enqueue_script('comment-reply');


        /**
         * Layout variables 
         */
        global $smof_data;
        
        $boxed = $style = ''; $responsiveness= 'responsive = true;';
        // Responsiveness
        if($smof_data['use_responsive'] == 1) {
            echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
        } else {
            echo '<style>body{min-width:1240px !important}.container{min-width:1200px !important;}</style>';
            $responsiveness = 'responsive = false;';
        }
        
        if (is_page() && tt_getmeta('customize_page')) {
            if (tt_getmeta('layout') != 'full') {
                $boxed = "boxed";
                if (tt_getmeta('layout') == 'attached') {
                    $top = tt_getmeta('body_margin_top');
                    $bottom = tt_getmeta('body_margin_bottom');
                    $style = "margin-top:$top" . "px;margin-bottom:$bottom" . "px;";
                }
            }
        } elseif (isset($smof_data['layout']) && ($smof_data['layout'] == 'boxed' || $smof_data['layout'] == 'attached')) {
            $boxed = "boxed";
        }

        /**
         * Javascript variables 
         */
        echo '<script>var footer = false, colorful_footer = false, non_sticky_menu = false; '.$responsiveness.'</script>';
        if ($smof_data['footer'] == 1) {
            echo '<script>footer = true;var footer_layout = ' . $smof_data['footer_layout'] . ';</script>';
            if (isset($smof_data['use_footer_column_color']) && $smof_data['use_footer_column_color'] == 1) {
                echo '<script>colorful_footer = true;</script>';
            }
        }
        if(isset($smof_data['non_sticky_menu']) && $smof_data['non_sticky_menu'] == 1) {
            echo '<script>non_sticky_menu = true;</script>';
        }
        
        wp_head();
        ?>
    </head>
    <body <?php body_class($boxed); echo " style='$style'"; ?>>
        <div class="wrapper">
            <?php
            // Header Top layout type
            get_template_part('part', 'topbar');
            // Header layout type
            get_template_part('part', 'header');
            ?>