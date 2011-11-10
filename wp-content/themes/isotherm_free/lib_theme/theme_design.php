<?php

/*

  FILE STRUCTURE:

- LAYOUT BUILDER CLASS

*/

/* LAYOUT BUILDER CLASS (writes the layout.css file) */
/*------------------------------------------------------------------*/

class Bizz_CSS {	
	function build() {
		$this->layout();
	}
		
	function layout() {
	
	    $GLOBALS['optd'] = get_option('bizzthemes_design');
		$font_stacks = bizz_get_fonts();

		// Build CSS output.
		$this->css .= '
/*
File:			layout.css
Description:	Custom layout styles for Your Theme
Author:         You ;)

        IMPORTANT NOTE:
	
	    If you wish to make custom changes to your theme, DO NOT EDIT THIS FILE. 
	    Instead, use the Theme Design Options in your theme administration to 
	    define custom layout styles.
*/

/*--------- GENERAL STYLING Options --------- */

        '; // end css output
		
		if ($GLOBALS['optd']['bizzthemes_body_img'] <> '')
		    $body_bg = ''.$GLOBALS['optd']['bizzthemes_body_img_prop']['color'].' url('.$GLOBALS['optd']['bizzthemes_body_img'].') '.$GLOBALS['optd']['bizzthemes_body_img_prop']['repeat'].' '.$GLOBALS['optd']['bizzthemes_body_img_prop']['position'].'';
		else
		    $body_bg = $GLOBALS['optd']['bizzthemes_body_bg'];
		
		$this->css .= '

body { 
    font-family:'.$font_stacks[$GLOBALS['optd']['bizzthemes_f_general']['face']]['family'].'; 
	font-size:'.$GLOBALS['optd']['bizzthemes_f_general']['size'].'; 
	background:'.$body_bg.'; 
	color:'.$GLOBALS['optd']['bizzthemes_f_general']['color'].'; 
}
a { 
    color:'.$GLOBALS['optd']['bizzthemes_c_links'].'; 
}
a:hover { 
    color:'.$GLOBALS['optd']['bizzthemes_c_links_onhover'].'; 
}

h1 { font:'.$GLOBALS['optd']['bizzthemes_f_h1']['style'].' '.$GLOBALS['optd']['bizzthemes_f_h1']['size'].' '.$font_stacks[$GLOBALS['optd']['bizzthemes_f_h1']['face']]['family'].'; color:'.$GLOBALS['optd']['bizzthemes_f_h1']['color'].'; }
h2 { font:'.$GLOBALS['optd']['bizzthemes_f_h2']['style'].' '.$GLOBALS['optd']['bizzthemes_f_h2']['size'].' '.$font_stacks[$GLOBALS['optd']['bizzthemes_f_h2']['face']]['family'].'; color:'.$GLOBALS['optd']['bizzthemes_f_h2']['color'].'; }
h3 { font:'.$GLOBALS['optd']['bizzthemes_f_h3']['style'].' '.$GLOBALS['optd']['bizzthemes_f_h3']['size'].' '.$font_stacks[$GLOBALS['optd']['bizzthemes_f_h3']['face']]['family'].'; color:'.$GLOBALS['optd']['bizzthemes_f_h3']['color'].'; }
h4 { font:'.$GLOBALS['optd']['bizzthemes_f_h4']['style'].' '.$GLOBALS['optd']['bizzthemes_f_h4']['size'].' '.$font_stacks[$GLOBALS['optd']['bizzthemes_f_h4']['face']]['family'].'; color:'.$GLOBALS['optd']['bizzthemes_f_h4']['color'].'; }
h5 { font:'.$GLOBALS['optd']['bizzthemes_f_h5']['style'].' '.$GLOBALS['optd']['bizzthemes_f_h5']['size'].' '.$font_stacks[$GLOBALS['optd']['bizzthemes_f_h5']['face']]['family'].'; color:'.$GLOBALS['optd']['bizzthemes_f_h5']['color'].'; }
h6 { font:'.$GLOBALS['optd']['bizzthemes_f_h6']['style'].' '.$GLOBALS['optd']['bizzthemes_f_h6']['size'].' '.$font_stacks[$GLOBALS['optd']['bizzthemes_f_h6']['face']]['family'].'; color:'.$GLOBALS['optd']['bizzthemes_f_h6']['color'].'; }

a.button, input[type="submit"] { 
    background-color:'.$GLOBALS['optd']['bizzthemes_bg_button'].'; 
    border:'.$GLOBALS['optd']['bizzthemes_b_button']['width'].' '.$GLOBALS['optd']['bizzthemes_b_button']['style'].' '.$GLOBALS['optd']['bizzthemes_b_button']['color'].'; 
	font:'.$GLOBALS['optd']['bizzthemes_f_button']['style'].' '.$GLOBALS['optd']['bizzthemes_f_button']['size'].' '.$font_stacks[$GLOBALS['optd']['bizzthemes_f_button']['face']]['family'].'; color:'.$GLOBALS['optd']['bizzthemes_f_button']['color'].';
    padding:6px 12px; 
	margin:5px 0;	
}
a.button:hover, input[type="submit"]:hover { 
    background-color:'.$GLOBALS['optd']['bizzthemes_bg_button_onhover'].'; 
}

/*--------- LAYOUT STRUCTURE ---------  */

.sidebar { 
    border-left:1px '.$GLOBALS['optd']['bizzthemes_b_grid']['style'].' '.$GLOBALS['optd']['bizzthemes_b_grid']['color'].'; 
}
.sidebar.sidebar_left { 
    border-right:1px '.$GLOBALS['optd']['bizzthemes_b_grid']['style'].' '.$GLOBALS['optd']['bizzthemes_b_grid']['color'].'; 
}
.cbox-area { 
    border-top:1px '.$GLOBALS['optd']['bizzthemes_b_grid']['style'].' '.$GLOBALS['optd']['bizzthemes_b_grid']['color'].'; 
}
.widget { 
    border-bottom:1px '.$GLOBALS['optd']['bizzthemes_b_grid']['style'].' '.$GLOBALS['optd']['bizzthemes_b_grid']['color'].'; 
}

/*--------- NAVIGATION STYLING Options --------- */

.navigation-area { 
    background-color:'.$GLOBALS['optd']['bizzthemes_bg_nav'].'; 
}
.sf-menu a  { 
    font:'.$GLOBALS['optd']['bizzthemes_f_nav']['style'].' '.$GLOBALS['optd']['bizzthemes_f_nav']['size'].' '.$font_stacks[$GLOBALS['optd']['bizzthemes_f_nav']['face']]['family'].'; color:'.$GLOBALS['optd']['bizzthemes_f_nav']['color'].';
	line-height:20px;
}
.sf-menu li:hover, .sf-menu li ul li:hover { 
    background-color:'.$GLOBALS['optd']['bizzthemes_bg_nav_onhover'].';
}
.sf-menu li.current-menu-item a { 
    background-color:'.$GLOBALS['optd']['bizzthemes_bg_nav_current'].'; 
	border:'.$GLOBALS['optd']['bizzthemes_b_nav_current']['width'].' '.$GLOBALS['optd']['bizzthemes_b_nav_current']['style'].' '.$GLOBALS['optd']['bizzthemes_b_nav_current']['color'].'; 
	color:'.$GLOBALS['optd']['bizzthemes_c_nav_current'].'; 
}
.sf-menu li.current-menu-item ul li a:hover, .sf-menu li ul li.current-menu-item a:hover { 
    color:'.$GLOBALS['optd']['bizzthemes_c_nav_current'].';
}
.sf-menu li ul { 
    background-color:'.$GLOBALS['optd']['bizzthemes_bg_nav_dropdown'].'; 
}';

if ($GLOBALS['optd']['bizzthemes_w_nav_dropdown'] <> '')
    $main_nav_width = $GLOBALS['optd']['bizzthemes_w_nav_dropdown'];
else
    $main_nav_width = '150';
	
$this->css .= '
.sf-menu li ul { 
    width:'.($main_nav_width+30).'px; 
}
.sf-menu li ul li a { 
    width:'.($main_nav_width).'px; 
}

.feed-spot a.rss-button img { 
    background-color:'.$GLOBALS['optd']['bizzthemes_bg_rss'].'; 
}
.feed-spot a.rss-button img:hover { 
    background-color:'.$GLOBALS['optd']['bizzthemes_bg_rss_onhover'].'; 
}

/*--------- LOGO Options --------- */

.logo-area { 
    background-color:'.$GLOBALS['optd']['bizzthemes_bg_logo'].';
}

.logo-spot .blog-title a { 
    font:'.$GLOBALS['optd']['bizzthemes_f_tblog']['style'].' '.$GLOBALS['optd']['bizzthemes_f_tblog']['size'].' '.$font_stacks[$GLOBALS['optd']['bizzthemes_f_tblog']['face']]['family'].'; color:'.$GLOBALS['optd']['bizzthemes_f_tblog']['color'].';
}
.logo-spot .blog-description { 
    font:'.$GLOBALS['optd']['bizzthemes__f_dblog']['style'].' '.$GLOBALS['optd']['bizzthemes_f_dblog']['size'].' '.$font_stacks[$GLOBALS['optd']['bizzthemes_f_dblog']['face']]['family'].'; color:'.$GLOBALS['optd']['bizzthemes_f_dblog']['color'].';
}

/*--------- FEATURED POSTS Area ---------  */

.slider-area { 
    background-color:'.$GLOBALS['optd']['bizzthemes_bg_slid'].'; 
}

/*--------- Featured posts box --------- */

.top-featured { 
    background-color:'.$GLOBALS['optd']['bizzthemes_bg_slid_in'].'; 
    border:'.$GLOBALS['optd']['bizzthemes_b_slid']['width'].' '.$GLOBALS['optd']['bizzthemes_b_slid']['style'].' '.$GLOBALS['optd']['bizzthemes_b_slid']['color'].';
}
.top-featured span.cat, .top-featured span.cat a { 
    font:'.$GLOBALS['optd']['bizzthemes_f_slid_meta']['style'].' '.$GLOBALS['optd']['bizzthemes_f_slid_meta']['size'].' '.$font_stacks[$GLOBALS['optd']['bizzthemes_f_slid_meta']['face']]['family'].'; color:'.$GLOBALS['optd']['bizzthemes_f_slid_meta']['color'].';
	background-color:'.$GLOBALS['optd']['bizzthemes_bg_slid_meta'].'; 
}
.top-featured h2 a{ 
    font:'.$GLOBALS['optd']['bizzthemes_f_slid_title']['style'].' '.$GLOBALS['optd']['bizzthemes_f_slid_title']['size'].' '.$font_stacks[$GLOBALS['optd']['bizzthemes_f_slid_title']['face']]['family'].'; color:'.$GLOBALS['optd']['bizzthemes_f_slid_title']['color'].';
}

/*--------- Navigation --------- */

.cat-menu .sf-menu a  { 
    font:'.$GLOBALS['optd']['bizzthemes_f_cnav']['style'].' '.$GLOBALS['optd']['bizzthemes_f_cnav']['size'].' '.$font_stacks[$GLOBALS['optd']['bizzthemes_f_cnav']['face']]['family'].'; color:'.$GLOBALS['optd']['bizzthemes_f_cnav']['color'].';
	line-height:25px;
}
.cat-menu .sf-menu li:hover, .cat-menu .sf-menu li ul li:hover { 
    background-color:'.$GLOBALS['optd']['bizzthemes_bg_cnav_onhover'].';
}
.cat-menu .sf-menu li.current_page_item a, .cat-menu .sf-menu li.current-cat a { 
    background-color:'.$GLOBALS['optd']['bizzthemes_bg_cnav_current'].'; 
	color:'.$GLOBALS['optd']['bizzthemes_c_cnav_current'].'; 
}
.cat-menu .sf-menu li ul { 
    background-color:'.$GLOBALS['optd']['bizzthemes_bg_cnav_dropdown'].'; 
}
.cat-menu .sf-menu li ul { 
    width:'.($GLOBALS['optd']['bizzthemes_w_cnav_dropdown']+30).'px; 
}
.cat-menu .sf-menu li ul li a { 
    width:'.($GLOBALS['optd']['bizzthemes_w_cnav_dropdown']).'px; 
}

/*--------- PAGINATION Options ---------  */

ul.lpag li a, ul.lpag li.name span, ul.lpag li a.name { 
    font:'.$GLOBALS['optd']['bizzthemes_f_pag']['style'].' '.$GLOBALS['optd']['bizzthemes_f_pag']['size'].' '.$font_stacks[$GLOBALS['optd']['bizzthemes_f_pag']['face']]['family'].'; color:'.$GLOBALS['optd']['bizzthemes_f_pag']['color'].'; 
}
ul.lpag li a { 
    font-family: Tahoma; 
}
ul.lpag li a:hover { 
    background-color:'.$GLOBALS['optd']['bizzthemes_bg_pag_onhover'].';
}
ul.lpag li.active a, ul.lpag li.current span { 
    background-color:'.$GLOBALS['optd']['bizzthemes_bg_pag_active'].';
	color:'.$GLOBALS['optd']['bizzthemes_f_pag_active'].';
	font-size:'.$GLOBALS['optd']['bizzthemes_f_pag']['size'].';
}

/*--------- FOOTER NAVIGATION Options --------- */

.footer-area { 
    background-color:'.$GLOBALS['optd']['bizzthemes_bg_fnav'].'; 
}
.footer-area .date { 
    font:'.$GLOBALS['optd']['bizzthemes_f_fnav']['style'].' '.$GLOBALS['optd']['bizzthemes_f_fnav']['size'].' '.$font_stacks[$GLOBALS['optd']['bizzthemes_f_fnav']['face']]['family'].'; color:'.$GLOBALS['optd']['bizzthemes_f_fnav']['color'].'; 
}
.footer-area .sf-menu a  { 
    font:'.$GLOBALS['optd']['bizzthemes_f_fnav']['style'].' '.$GLOBALS['optd']['bizzthemes_f_fnav']['size'].' '.$font_stacks[$GLOBALS['optd']['bizzthemes_f_fnav']['face']]['family'].'; color:'.$GLOBALS['optd']['bizzthemes_f_fnav']['color'].';
	line-height:20px;
}
.footer-area .sf-menu li:hover, .footer-area .sf-menu li ul li:hover { 
    background-color:'.$GLOBALS['optd']['bizzthemes_bg_fnav_onhover'].';
}
.footer-area .sf-menu li.current-menu-item a { 
    background-color:'.$GLOBALS['optd']['bizzthemes_bg_fnav_current'].'; 
	border:'.$GLOBALS['optd']['bizzthemes_b_fnav_current']['width'].' '.$GLOBALS['optd']['bizzthemes_b_fnav_current']['style'].' '.$GLOBALS['optd']['bizzthemes_b_fnav_current']['color'].'; 
	color:'.$GLOBALS['optd']['bizzthemes_c_fnav_current'].'; 
}
.footer-area .sf-menu li.current-menu-item ul li a:hover, .sf-menu li ul li.current-menu-item a:hover { 
    color:'.$GLOBALS['optd']['bizzthemes_c_fnav_current'].';
}
.footer-area .sf-menu li ul { 
    background-color:'.$GLOBALS['optd']['bizzthemes_bg_fnav_dropdown'].'; 
}';

if ($GLOBALS['optd']['bizzthemes_w_fnav_dropdown'] <> '')
    $main_fnav_width = $GLOBALS['optd']['bizzthemes_w_fnav_dropdown'];
else
    $main_fnav_width = '150';
	
$this->css .= '
.footer-area .sf-menu li ul { 
    width:'.($main_fnav_width+30).'px; 
}
.footer-area .sf-menu li ul li a { 
    width:'.($main_fnav_width).'px; 
}

/*--------- CONTENT BOX STYLING Options --------- */

.cbox-area { 
    background:'.$GLOBALS['optd']['bizzthemes_bg_box'].'; 
}
.title-area { 
    background-color:'.$GLOBALS['optd']['bizzthemes_bg_mtitle'].'; 
	border-bottom:'.$GLOBALS['optd']['bizzthemes_bb_mtitle']['width'].' '.$GLOBALS['optd']['bizzthemes_bb_mtitle']['style'].' '.$GLOBALS['optd']['bizzthemes_bb_mtitle']['color'].'; 
}
.breadcrumbs-area { 
    background-color:'.$GLOBALS['optd']['bizzthemes_bg_bnav'].'; 
}
#breadcrumb p { 
    font:'.$GLOBALS['optd']['bizzthemes_f_bnav']['style'].' '.$GLOBALS['optd']['bizzthemes_f_bnav']['size'].' '.$font_stacks[$GLOBALS['optd']['bizzthemes_f_bnav']['face']]['family'].'; color:'.$GLOBALS['optd']['bizzthemes_f_bnav']['color'].'; 
}
#breadcrumb p a { 
    font:'.$GLOBALS['optd']['bizzthemes_f_bnav_link']['style'].' '.$GLOBALS['optd']['bizzthemes_f_bnav_link']['size'].' '.$font_stacks[$GLOBALS['optd']['bizzthemes_f_bnav_link']['face']]['family'].'; color:'.$GLOBALS['optd']['bizzthemes_f_bnav_link']['color'].'; 
}
h2.title, h1.title { 
    font:'.$GLOBALS['optd']['bizzthemes_f_mtitle']['style'].' '.$GLOBALS['optd']['bizzthemes_f_mtitle']['size'].' '.$font_stacks[$GLOBALS['optd']['bizzthemes_f_mtitle']['face']]['family'].'; color:'.$GLOBALS['optd']['bizzthemes_f_mtitle']['color'].';
}
.headline h2, .headline h2 a { 
    font:'.$GLOBALS['optd']['bizzthemes_f_atitle']['style'].' '.$GLOBALS['optd']['bizzthemes_f_atitle']['size'].' '.$font_stacks[$GLOBALS['optd']['bizzthemes_f_atitle']['face']]['family'].'; color:'.$GLOBALS['optd']['bizzthemes_f_atitle']['color'].'; line-height:25px; 
}
.meta, .meta a, .meta span, .meta abbr { 
    font:'.$GLOBALS['optd']['bizzthemes_f_meta']['style'].' '.$GLOBALS['optd']['bizzthemes_f_meta']['size'].' '.$font_stacks[$GLOBALS['optd']['bizzthemes_f_meta']['face']]['family'].'; color:'.$GLOBALS['optd']['bizzthemes_f_meta']['color'].';
	line-height:23px;
}
span.read-more a { 
    background-color:'.$GLOBALS['optd']['bizzthemes_bg_rmore'].'; 
    font:'.$GLOBALS['optd']['bizzthemes_f_rmore']['style'].' '.$GLOBALS['optd']['bizzthemes_f_rmore']['size'].' '.$font_stacks[$GLOBALS['optd']['bizzthemes_f_rmore']['face']]['family'].'; color:'.$GLOBALS['optd']['bizzthemes_f_rmore']['color'].';
}
span.read-more a:hover { 
    background-color:'.$GLOBALS['optd']['bizzthemes_bg_rmore_onhover'].';  
}
.single-sep, .sing { 
    border-bottom:'.$GLOBALS['optd']['bizzthemes_b_box']['width'].' '.$GLOBALS['optd']['bizzthemes_b_box']['style'].' '.$GLOBALS['optd']['bizzthemes_b_box']['color'].'; 
}


/*--------- COMMENTS Options ---------  */

h3.tcomm, h2.post-form { 
    font:'.$GLOBALS['optd']['bizzthemes_f_comm']['style'].' '.$GLOBALS['optd']['bizzthemes_f_comm']['size'].' '.$font_stacks[$GLOBALS['optd']['bizzthemes_f_comm']['face']]['family'].'; color:'.$GLOBALS['optd']['bizzthemes_f_comm']['color'].';
}
#comments .comment .avatar-wrap img, #comments .comment .text-right .comm-reply, #comments .comment .text-right .comment-entry ,
.cancel-comment-reply a#cancel-comment-reply-link { 
    border:'.$GLOBALS['optd']['bizzthemes_b_comm']['width'].' '.$GLOBALS['optd']['bizzthemes_b_comm']['style'].' '.$GLOBALS['optd']['bizzthemes_b_comm']['color'].';
}
#comments .comment.bypostauthor .text-right .comm-reply {
    border:'.$GLOBALS['optd']['bizzthemes_ab_comm']['width'].' '.$GLOBALS['optd']['bizzthemes_ab_comm']['style'].' '.$GLOBALS['optd']['bizzthemes_ab_comm']['color'].';
}

/*--------- WIDGET Area ---------  */

.widget h3 { 
    font:'.$GLOBALS['optd']['bizzthemes_f_w']['style'].' '.$GLOBALS['optd']['bizzthemes_f_w']['size'].' '.$font_stacks[$GLOBALS['optd']['bizzthemes_f_w']['face']]['family'].'; color:'.$GLOBALS['optd']['bizzthemes_f_w']['color'].';
}
.widget { 
    font:'.$GLOBALS['optd']['bizzthemes_f_wc']['style'].' '.$GLOBALS['optd']['bizzthemes_f_wc']['size'].' '.$font_stacks[$GLOBALS['optd']['bizzthemes_f_wc']['face']]['family'].'; color:'.$GLOBALS['optd']['bizzthemes_f_wc']['color'].';
	line-height:23px;
}

/*--------- ADDITIONAL INFO Area ---------  */
.addinfo-area { 
    background-color:'.$GLOBALS['optd']['bizzthemes_bg_addinfo_full'].';
}
.addinfo { 
    background-color:'.$GLOBALS['optd']['bizzthemes_bg_addinfo'].';
	border:'.$GLOBALS['optd']['bizzthemes_b_addinfo']['width'].' '.$GLOBALS['optd']['bizzthemes_b_addinfo']['style'].' '.$GLOBALS['optd']['bizzthemes_b_addinfo']['color'].';
}
.addinfo, .addinfo a { 
    color:'.$GLOBALS['optd']['bizzthemes_c_addinfo'].'; 
}

/*--------- TWITTER Options --------- */

.twitter-area { 
    background-color:'.$GLOBALS['optd']['bizzthemes_bg_twitter'].';
}
.twitter-spot-outer { 
    background-color:'.$GLOBALS['optd']['bizzthemes_bg_twitter_outer'].';
	border:'.$GLOBALS['optd']['bizzthemes_b_twitter_outer']['width'].' '.$GLOBALS['optd']['bizzthemes_b_twitter_outer']['style'].' '.$GLOBALS['optd']['bizzthemes_b_twitter_outer']['color'].'; 
}
.twitter-spot-inner { 
    background-color:'.$GLOBALS['optd']['bizzthemes_bg_twitter_inner'].';
	border:'.$GLOBALS['optd']['bizzthemes_b_twitter_inner']['width'].' '.$GLOBALS['optd']['bizzthemes_b_twitter_inner']['style'].' '.$GLOBALS['optd']['bizzthemes_b_twitter_inner']['color'].'; 
}
.twitter-area .blog-title a { 
    font:'.$GLOBALS['optd']['bizzthemes_f_tblog']['style'].' '.$GLOBALS['optd']['bizzthemes_f_tblog']['size'].' '.$font_stacks[$GLOBALS['optd']['bizzthemes_f_tblog']['face']]['family'].'; color:'.$GLOBALS['optd']['bizzthemes_f_tblog']['color'].';
}
.twitter-area .blog-description { 
    font:'.$GLOBALS['optd']['bizzthemes_f_dblog']['style'].' '.$GLOBALS['optd']['bizzthemes_f_dblog']['size'].' '.$font_stacks[$GLOBALS['optd']['bizzthemes_f_dblog']['face']]['family'].'; color:'.$GLOBALS['optd']['bizzthemes_f_dblog']['color'].';
}
.twitter-area ul#twitter_update_list li span { 
    font:'.$GLOBALS['optd']['bizzthemes_f_twitter']['style'].' '.$GLOBALS['optd']['bizzthemes_f_twitter']['size'].' '.$font_stacks[$GLOBALS['optd']['bizzthemes_f_twitter']['face']]['family'].'; color:'.$GLOBALS['optd']['bizzthemes_f_twitter']['color'].';
	line-height:22px;
}
.twitter-area ul#twitter_update_list li span.date { 
    font:'.$GLOBALS['optd']['bizzthemes_f_twitter_date']['style'].' '.$GLOBALS['optd']['bizzthemes_f_twitter_date']['size'].' '.$font_stacks[$GLOBALS['optd']['bizzthemes_f_twitter_date']['face']]['family'].'; color:'.$GLOBALS['optd']['bizzthemes_f_twitter_date']['color'].';
	line-height:22px;
}


        '; // end css output

	} // end layout (function)
		
} // end Bizz_CSS (class)

function bizz_generate_css() {
	if (is_writable(BIZZ_LAYOUT_CSS)) {
		$bizz_css = new Bizz_CSS;
		$bizz_css->build();
		$lid = @fopen(BIZZ_LAYOUT_CSS, 'w');
		@fwrite($lid, $bizz_css->css);
		@fclose($lid);
	}
}

?>