<!doctype html>
<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!-->
<html <?php language_attributes(); ?> class="no-js">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <?php // force Internet Explorer to use the latest rendering engine available
    ?>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php wp_title(''); ?></title>

    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Cache-control" content="public">




    <link rel="preload" as="script" href="https://js.hsforms.net/forms/v2.js">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
    <link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
    <!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
    <?php // or, set /favicon.ico for IE10 win
    ?>

    <meta name="msapplication-TileColor" content="#f01d4f">
    <meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/favicon.ico">
    <meta name="theme-color" content="#121212">

    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

    <style>
        h1,h2,h3,li,p{margin:0;padding:0}blockquote{margin:0}body{margin:0;padding:0;background:#fff;font-weight:400;line-height:1.7;color:#192d3e;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;font-size:1.15rem;font-family:Verdana,sans-serif;font-size:1rem;letter-spacing:.01rem}h1,h2,h3{font-style:normal;font-weight:400;color:inherit;text-rendering:optimizeLegibility;margin:0 0 20px;font-family:Verdana,sans-serif;font-family:Nunito,sans-serif}h2.sec-title{font-size:2.8rem;font-weight:800;line-height:1.15;letter-spacing:-.1rem}@media screen and (max-width:700px){h2.sec-title{font-size:7.88235vw}}h3{line-height:1.4;margin-top:0;margin-bottom:.5rem}p{margin-bottom:1rem;font-size:inherit;line-height:1.6;text-rendering:optimizeLegibility}.sub-headline{text-transform:uppercase;color:#038ed8;font-weight:600;font-size:1.125rem;padding:0;display:block;margin:0 0 10px}@media screen and (max-width:700px){.sub-headline{font-size:.8rem}}.button{display:inline-block;vertical-align:middle;margin:0 0 1rem;padding:.85em 3em;border:1px solid transparent;border-radius:0;-webkit-transition:background-color .25s ease-out,color .25s ease-out;transition:background-color .25s ease-out,color .25s ease-out;font-family:inherit;font-size:.9rem;line-height:1;text-align:center;cursor:pointer;background-color:#0088ce;color:#fff;background-image:-webkit-gradient(linear,left top,left bottom,from(hsla(0,0%,100%,.1)),to(rgba(0,0,0,.1)));background-image:linear-gradient(-180deg,hsla(0,0%,100%,.1),rgba(0,0,0,.1))}ul{-webkit-padding-start:40px;padding-inline-start:40px}a{line-height:inherit;color:#0088ce;text-decoration:none;cursor:pointer}a img{border:0}.page-template-default>main{margin:200px auto 60px}@media screen and (max-width:1280px){.page-template-default>main{margin:90px auto 60px}}@media screen and (max-width:400px){.page-template-default>main{margin-top:90px}}img{display:inline-block;vertical-align:middle;max-width:100%;height:auto}header.main{padding:20px 20px 0;position:fixed;left:0;right:0;z-index:11234;top:0;-webkit-transition:all 0s;transition:all 0s}@media screen and (max-width:1280px){header.main{padding:0;background-color:#fff}}header.main .content{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-align:center;-webkit-align-items:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-webkit-justify-content:center;-ms-flex-pack:center;justify-content:center;position:relative;-webkit-transition:all 0s;transition:all 0s;padding:20px 30px}@media screen and (max-width:1280px){header.main .content{padding:0}}@media screen and (max-width:1280px){header.main .content,header.main .content .rlcontainer{-webkit-box-orient:horizontal;-webkit-box-direction:reverse;-webkit-flex-direction:row-reverse;-ms-flex-direction:row-reverse;flex-direction:row-reverse}header.main .content .rlcontainer{width:100%;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;position:relative;background:#fff;padding:15px 20px;z-index:123;-webkit-flex-wrap:wrap;-ms-flex-wrap:wrap;flex-wrap:wrap}}header.main .linksmsall{margin-right:40px;display:none}@media screen and (max-width:1280px){header.main .linksmsall{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;margin:0 40px 0 auto;-webkit-box-align:center;-webkit-align-items:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-webkit-justify-content:center;-ms-flex-pack:center;justify-content:center}}@media screen and (max-width:700px){header.main .linksmsall{width:100%;-webkit-box-ordinal-group:3;-webkit-order:2;-ms-flex-order:2;order:2;border-top:1px solid #eee;margin:10px 0 0;display:none}}header.main .responsive-bar{position:relative;display:none}@media screen and (max-width:1280px){header.main .responsive-bar{display:block;position:relative;margin-left:0;margin-right:0;-webkit-box-align:center;-webkit-align-items:center;-ms-flex-align:center;align-items:center;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex}}header.main .responsive-bar a.menu-icon-toggle{position:relative;top:0;left:0;font-weight:700;color:#192d3e;font-size:1.1rem;padding-right:0;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-align:center;-webkit-align-items:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-webkit-justify-content:center;-ms-flex-pack:center;justify-content:center;-webkit-box-orient:horizontal;-webkit-box-direction:normal;-webkit-flex-direction:row;-ms-flex-direction:row;flex-direction:row}header.main .responsive-bar a.menu-icon-toggle img{width:20px;height:20px;margin-right:15px}@media screen and (max-width:1280px){header.main .logo-block{margin-right:auto;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-align:center;-webkit-align-items:center;-ms-flex-align:center;align-items:center}}header.main a.main-nav-logo{max-width:158px;position:relative;display:block}header.main a.main-nav-logo figure.sk{margin:0}header.main nav.top{margin-left:auto;-webkit-transition:all 0s cubic-bezier(.22,1,.36,1);transition:all 0s cubic-bezier(.22,1,.36,1);width:100%;padding-left:30px}@media screen and (max-width:1280px){header.main nav.top{position:absolute;top:100%;left:0;right:0;opacity:0;visibility:hidden;background:#fff;padding:0;margin:0 -10px;width:auto;max-height:0;-webkit-transform:translateY(-20px);transform:translateY(-20px);overflow:hidden}}header.main ul.nav{margin:0;padding:0;list-style:none;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-align:center;-webkit-align-items:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:end;-webkit-justify-content:flex-end;-ms-flex-pack:end;justify-content:flex-end;max-height:calc(100vh - 70px)}@media screen and (max-width:1280px){header.main ul.nav{-webkit-box-orient:vertical;-webkit-box-direction:normal;-webkit-flex-direction:column;-ms-flex-direction:column;flex-direction:column;padding:20px 30px;height:auto;-webkit-box-align:start;-webkit-align-items:flex-start;-ms-flex-align:start;align-items:flex-start;-webkit-box-pack:start;-webkit-justify-content:flex-start;-ms-flex-pack:start;justify-content:flex-start}}@media screen and (max-height:670px){header.main ul.nav{padding-top:0}}@media screen and (max-width:1280px){header.main ul.nav li{width:100%;border-bottom:2px solid #ececec}header.main ul.nav li:last-child{border:none}}@media screen and (max-width:1280px){header.main ul.nav li a{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-pack:start;-webkit-justify-content:flex-start;-ms-flex-pack:start;justify-content:flex-start;width:100%;-webkit-box-align:center;-webkit-align-items:center;-ms-flex-align:center;align-items:center;color:#000;border:none;padding:30px 0}}@media screen and (max-height:670px){header.main ul.nav li a{padding:20px 0;margin:0 0 0 10px}}@media screen and (max-width:1280px){header.main ul.nav li a .tk{width:100%;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-webkit-flex-direction:column;-ms-flex-direction:column;flex-direction:column;font-size:1.2rem;font-weight:500;line-height:1.15}}@media screen and (max-height:670px){header.main ul.nav li a .tk{font-size:1rem}}header.main ul.nav li a .tk span.sub{display:none}@media screen and (max-width:1280px){header.main ul.nav li a .tk span.sub{display:block;font-size:1rem;font-weight:300;line-height:1.2;margin:5px 0 0;color:#7d7d7d}}header.main ul.nav a{margin:0 20px;color:#192d3e;font-size:.9rem;display:block;border-bottom:1px solid transparent;cursor:pointer;position:relative;font-family:Nunito,sans-serif;-webkit-transition:all 0s;transition:all 0s}@media screen and (max-width:1040px){header.main ul.nav a{padding:.8rem 8.8px 0}}header.main ul.nav a:after{content:close-quote;position:absolute;top:100%;left:0;right:0;background:#1f88ca;height:2px;width:0;-webkit-transition:all .3s;transition:all .3s;margin:0 auto}header.main ul.nav a:hover:after{width:100%}header.main ul.nav a:hover{background:transparent}@media screen and (max-width:1280px){header.main ul.nav a{color:#fff;font-size:1.5rem;padding:10px 20px}}h1,h2{margin-bottom:1rem}section.hero-home{padding:50px 0 0;position:relative;margin:110px 0 0}@media screen and (max-width:1280px){section.hero-home{margin:175px 0 0;padding-top:0}}@media screen and (max-width:700px){section.hero-home{margin:170px 0 0}}@media screen and (max-width:400px){section.hero-home{margin:150px 0 0}}@media screen and (min-width:1280px){section.hero-home.videodev .content{max-width:1400px;margin:0 auto;position:relative}section.hero-home.videodev .content .column-half.content-col{-webkit-box-shadow:0 5px 30px -25px rgba(0,0,0,.72);box-shadow:0 5px 30px -25px rgba(0,0,0,.72);background:#fff;position:absolute;top:50%;left:10px;-webkit-transform:translateY(-50%);transform:translateY(-50%);z-index:123;border-radius:0 30px}section.hero-home.videodev .content .column-half.image-col figure.image{margin:0;display:none}}@media screen and (max-width:1280px){section.hero-home.videodev{padding:0;margin:142px 0 0}}@media screen and (max-width:1280px) and (max-width:700px){section.hero-home.videodev{margin:125px 0 0}}@media screen and (max-width:1280px){section.hero-home.videodev .content .column-half.image-col{margin:0}section.hero-home.videodev .container{padding:0 6px}section.hero-home.videodev .content .column-half.content-col{background:#fff;-webkit-box-shadow:0 0 20px -25px rgba(0,0,0,.72);box-shadow:0 0 20px -25px rgba(0,0,0,.72);margin:-110px 0 0;padding:20px 10px;position:relative;z-index:21;width:auto;border-radius:0 15px;width:95%}section.hero-home.videodev .content .column-half.content-col h1{font-size:10.2vw;margin:0 0 20px;font-size:calc(34.97647px + .88235vw);padding:0 5px}}@media screen and (max-width:1280px) and (max-width:400px){section.hero-home.videodev .content .column-half.content-col h1{font-size:calc(26.976px + .88235vw)}}@media screen and (max-width:1280px) and (max-width:375px){section.hero-home.videodev .content .column-half.content-col h1{font-size:7.88235vw}}@media screen and (max-width:1280px){section.hero-home.videodev .content .column-half.content-col p{max-width:540px;font-size:14px}section.hero-home.videodev .column-half.image-col{margin:0;padding:0;border-radius:15px 0;overflow:hidden}section.hero-home.videodev .column-half.image-col figure.image{margin:0;width:100%}section.hero-home.videodev .column-half.image-col figure.image img.pic.limg{width:100%;height:51vh;-o-object-fit:cover;object-fit:cover;-o-object-position:center;object-position:center}}@media screen and (max-width:1280px) and (max-width:700px){section.hero-home.videodev .column-half.image-col figure.image img.pic.limg{height:36vh}}@media screen and (max-width:1280px){section.hero-home{padding:0 0 20px}}@media screen and (max-width:1280px) and (max-width:700px){section.hero-home{padding:0 0 20px}}section.hero-home .content{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-align:center;-webkit-align-items:center;-ms-flex-align:center;align-items:center;max-width:1400px;margin:0 auto;position:relative}@media screen and (max-width:1280px){section.hero-home .content{-webkit-box-orient:vertical;-webkit-box-direction:normal;-webkit-flex-direction:column;-ms-flex-direction:column;flex-direction:column}}section.hero-home .content span.sub-headline{font-weight:900;letter-spacing:0;color:#038ed8;display:block;margin:0 0 10px;white-space:nowrap;text-transform:uppercase;font-family:Nunito Sans,sans-serif;font-size:1.1rem}@media screen and (max-width:700px){section.hero-home .content span.sub-headline{font-size:calc(10.976px + .88235vw)}}@media screen and (max-width:400px){section.hero-home .content span.sub-headline{font-size:3.2vw}}section.hero-home .content .column-half.content-col{width:100%;padding:0}@media screen and (min-width:1280px){section.hero-home .content .column-half.content-col{background:#fff;max-width:540px;padding:40px 0;position:absolute;top:50%;left:0;-webkit-transform:translateY(-50%);transform:translateY(-50%);z-index:123;border-radius:0 30px}}@media screen and (max-width:1280px){section.hero-home .content .column-half.content-col{max-width:100%}}@media screen and (max-width:1200px){section.hero-home .content .column-half.content-col{padding:40px 30px}}section.hero-home .content .column-half.content-col p{max-width:540px}@media screen and (max-width:700px){section.hero-home .content .column-half.content-col p{font-size:14px}}section.hero-home .content .column-half.image-col{width:100%;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-align:center;-webkit-align-items:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-webkit-justify-content:center;-ms-flex-pack:center;justify-content:center;position:relative;margin-left:auto;max-width:50%}@media screen and (max-width:1280px){section.hero-home .content .column-half.image-col{width:100%;max-width:100%;max-width:700px;margin:0 auto}}section.hero-home .content .column-half.image-col picture{width:100%}@media screen and (max-width:1280px){section.hero-home .content .column-half.content-col{width:100%;text-align:center;background:#fff;-webkit-box-shadow:0 0 20px -25px rgba(0,0,0,.72);box-shadow:0 0 20px -25px rgba(0,0,0,.72);margin:-20px 0 0;padding:20px 10px;position:relative;z-index:21;width:auto;border-radius:0 15px;width:95%}}@media screen and (max-width:1280px) and (min-width:700px){section.hero-home .content .column-half.content-col{padding:40px 20px}}@media screen and (max-width:700px){section.hero-home .content .column-half.content-col{margin:0}}section.hero-home .content h1{margin:0 0 20px;font-size:3rem;font-weight:800;line-height:1.15;letter-spacing:-.1rem}@media screen and (min-width:1280px) and (max-width:1100px){section.hero-home .content h1{font-size:2.5rem}}@media screen and (max-width:1280px){section.hero-home .content h1{margin:0 0 20px;padding:0 5px;font-size:calc(34.97647px + .88235vw)}}@media screen and (max-width:700px){section.hero-home .content h1{font-size:calc(30.97647px + .88235vw)}}@media screen and (max-width:400px){section.hero-home .content h1{font-size:calc(26.976px + .88235vw)}}@media screen and (max-width:375px){section.hero-home .content h1{font-size:7.88235vw}}@media screen and (max-width:1280px){section.hero-home .content p{max-width:700px;margin:0 auto}}section.hero-home .container{max-width:100%;margin-left:auto;margin-right:auto;padding:0 20px}@media screen and (max-width:1280px){section.hero-home .container{padding:0 5px}}section.how-it-works{padding:90px 0}section.how-it-works p{text-align:left}section.how-it-works h3{font-size:1.275rem;font-weight:700;position:relative;margin:0 0 10px}@media screen and (max-width:992px){section.how-it-works h3{font-size:1rem;text-align:left}}.button{font-size:1.25rem;border-radius:30px}.footer{padding:60px 0 0}@media screen and (max-width:992px){.footer{padding-bottom:150px}}.footer a{color:#192d3e}.hs_email label{display:none}.button{font-family:Nunito Sans,sans-serif}h1,h2,h3{font-weight:800}h2{line-height:1.2;font-size:44px}h3{font-size:calc(1.3rem + .6vw)}h2{font-size:2rem}@media screen and (max-width:992px){h2{font-size:1.5rem;line-height:1.3}}h1{font-size:2.5rem;line-height:1em}@media screen and (max-width:39.9375em){section.hero-home{text-align:center}section.hero-home h1{font-size:3rem;letter-spacing:0;text-align:center}}section.meetteam{padding:90px 0}@media screen and (max-width:700px){section.meetteam{padding:20px 0}}section.meetteam .container{max-width:1400px;margin-left:auto;margin-right:auto;padding:0 20px}@media screen and (max-width:700px){section.meetteam .container{padding:0 10px}}section.meetteam h2.sec-title{text-align:center;font-size:2.8rem;font-weight:800;line-height:1.15;letter-spacing:-.1rem;margin:0 0 60px}@media screen and (max-width:1280px){section.meetteam h2.sec-title{font-size:calc(30.97647px + .88235vw)}}@media screen and (max-width:700px){section.meetteam h2.sec-title{font-size:calc(26.97647px + .88235vw);margin:10px 0 20px}}@media screen and (max-width:400px){section.meetteam h2.sec-title{font-size:calc(23.176px + .88235vw)}}section.meetteam .contentprofile{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-flex-wrap:wrap;-ms-flex-wrap:wrap;flex-wrap:wrap}@media screen and (max-width:700px){section.meetteam .contentprofile{-webkit-box-orient:vertical;-webkit-box-direction:normal;-webkit-flex-direction:column;-ms-flex-direction:column;flex-direction:column}}section.meetteam .profile{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;width:100%;max-width:33%;border-radius:5px 0;margin:30px auto;-webkit-box-orient:vertical;-webkit-box-direction:normal;-webkit-flex-direction:column;-ms-flex-direction:column;flex-direction:column;position:relative}@media screen and (max-width:1280px){section.meetteam .profile{padding:0 10px;max-width:50%}}@media screen and (max-width:700px){section.meetteam .profile{-webkit-box-align:start;-webkit-align-items:flex-start;-ms-flex-align:start;align-items:flex-start;-webkit-box-pack:center;-webkit-justify-content:center;-ms-flex-pack:center;justify-content:center;-webkit-box-orient:vertical;-webkit-box-direction:normal;-webkit-flex-direction:column;-ms-flex-direction:column;flex-direction:column;padding:0;width:100%;max-width:100%}}section.meetteam .profile .image{width:100%;max-width:540px;padding:0 20px}@media screen and (max-width:700px){section.meetteam .profile .image{max-width:150px;max-width:600px}}section.meetteam .profile figure{margin:0}section.meetteam .profile .text{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-align:start;-webkit-align-items:flex-start;-ms-flex-align:start;align-items:flex-start;-webkit-box-pack:center;-webkit-justify-content:center;-ms-flex-pack:center;justify-content:center;-webkit-box-orient:vertical;-webkit-box-direction:normal;-webkit-flex-direction:column;-ms-flex-direction:column;flex-direction:column;width:100%;position:absolute;bottom:-20px;width:auto;left:30px;right:30px;padding:10px 20px;background:#038ed8;border-radius:3px}section.meetteam .profile .text p{max-height:0;overflow:hidden;-webkit-transition:all .3s;transition:all .3s;margin:0}section.meetteam .profile .text h3.sec-title{margin:0;color:#fff;font-size:1.5rem}@media screen and (max-width:700px){section.meetteam .profile .text{max-width:100%}}section.meetteam .profile:hover p{max-height:300px}section.meetteam .profile .text p{font-size:.8rem;color:#fff}@media screen and (min-width:0){section.meetteam .profile .image img.orbit-image.lozad{border-radius:5px}}section.meetteam .profile .subtitle{font-weight:900;letter-spacing:0;color:hsla(0,0%,100%,.59);display:block;margin:0;text-transform:capitalize;font-size:.8rem}header.main.investorhead{border-bottom:1px #f3f3f3;background-color:#fff;background-image:none;-webkit-box-shadow:1px 1px 60px 0 rgba(69,139,201,.16);box-shadow:1px 1px 60px 0 rgba(69,139,201,.16);border-radius:0 0 5px 5px;background:#fff;padding:25px 90px;max-width:100%;margin:0 auto}@media screen and (max-width:1280px){header.main.investorhead{padding:0}}@media screen and (max-width:700px){header.main.investorhead{padding:0}}header.main.investorhead .container{max-width:100%!important}header.main.investorhead .psedo{content:close-quote;position:fixed;top:0;left:0;right:0;bottom:0;z-index:-1;height:100vh;opacity:0;visibility:hidden;-webkit-transition:all .3s;transition:all .3s}@media screen and (max-width:1280px){header.main.investorhead ul.nav{height:auto}header.main.investorhead ul.nav li:last-child{margin-top:30px}}header.main.investorhead .content{padding:0}@media screen and (max-width:1280px){header.main.investorhead .content{padding:0 30px}}header.main.investorhead .button{display:inline-block;width:auto!important}@media screen and (max-width:700px){header.main.investorhead .logo-block{-webkit-box-ordinal-group:4;-webkit-order:3;-ms-flex-order:3;order:3}}@media screen and (max-width:700px){header.main.investorhead .responsive-bar{-webkit-box-ordinal-group:2;-webkit-order:1;-ms-flex-order:1;order:1}}@media screen and (max-width:700px){header.main.investorhead .responsive-bar a.menu-icon-toggle img{margin-right:7px}}header.main.investorhead .linksmsall{margin-right:40px;display:none;border:none}@media screen and (max-width:1280px){header.main.investorhead .linksmsall{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;margin:0 40px 0 auto;-webkit-box-align:center;-webkit-align-items:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-webkit-justify-content:center;-ms-flex-pack:center;justify-content:center}}@media screen and (max-width:700px){header.main.investorhead .linksmsall{-webkit-box-ordinal-group:3;-webkit-order:2;-ms-flex-order:2;order:2;width:auto;margin:0}}header.main.investorhead .linksmsall a{color:#1a2c3d;font-size:1rem;padding:0 10px}@media screen and (max-width:1280px){header.main.investorhead .linksmsall a{margin:0}}@media screen and (max-width:700px){header.main.investorhead .linksmsall a{margin:0 auto;font-size:12px;padding:9px 21px!important;min-width:0!important;margin-right:15px!important;font-size:10px!important}}@media screen and (max-width:340px){header.main.investorhead .linksmsall a{padding:9px 11px!important}}@media screen and (max-width:1280px){header.main.investorhead .content .rlcontainer{padding:10px 35px}}@media screen and (max-width:700px){header.main.investorhead .content .rlcontainer{padding:5px}}header.main.investorhead a.main-nav-logo figure.sk{position:absolute;width:180px;margin:-30px 0 0;top:0;padding:30px 15px;background-color:#fff;-webkit-box-shadow:0 6px 40px 9px rgba(69,139,201,.12);box-shadow:0 6px 40px 9px rgba(69,139,201,.12);border-radius:8px}@media screen and (max-width:1280px){header.main.investorhead a.main-nav-logo figure.sk{margin:-34px 0 0;top:0;padding:21px 10px}}@media screen and (max-width:700px){header.main.investorhead a.main-nav-logo figure.sk{width:29vw;margin:-34px 0 0;top:0;padding:27px 10px}}@media screen and (max-width:400px){header.main.investorhead a.main-nav-logo figure.sk{width:120px;padding:27px 5px}}@media screen and (max-width:330px){header.main.investorhead a.main-nav-logo figure.sk{width:105px;padding:27px 9px}}@media screen and (max-width:700px){header.main.investorhead .content{padding:10px}}@media screen and (max-width:400px){header.main.investorhead .content{padding:10px 0}}header.main.investorhead nav.top{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-pack:end;-webkit-justify-content:flex-end;-ms-flex-pack:end;justify-content:flex-end}@media screen and (max-width:1280px){header.main.investorhead nav.top{-webkit-box-pack:start;-webkit-justify-content:flex-start;-ms-flex-pack:start;justify-content:flex-start}}@media screen and (max-width:1280px){header.main.investorhead ul.nav{padding:0 20px 20px}}@media screen and (max-width:700px){header.main.investorhead ul.nav{width:100%;max-width:100vw;padding:50px 20px 20px}}@media screen and (max-width:1280px){header.main.investorhead ul.nav li a .tk{width:100%;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-webkit-flex-direction:column;-ms-flex-direction:column;flex-direction:column;font-size:1.6rem;font-weight:800;line-height:1.15;letter-spacing:-.1rem;letter-spacing:-.6px}}header.main.investorhead ul.nav a{padding:0 25px;margin:0}@media screen and (max-width:1280px){header.main.investorhead ul.nav a{padding:20px 0}}header.main.investorhead ul.nav a:after{content:close-quote;position:absolute;top:100%;left:0;right:0;background:#1f88ca;height:2px;width:0;-webkit-transition:all .3s;transition:all .3s;margin:0 auto}header.main.investorhead ul.nav a:hover:after{width:100%}header.main.investorhead ul.nav a.button.button-nav.buy-now.w-button{border-radius:30px!important;background-image:none!important}@media screen and (min-width:1280px){header.main.investorhead ul.nav a.button.button-nav.buy-now.w-button{margin-left:60px;min-width:200px}}body#investor{font-family:Nunito,sans-serif}body#investor main{overflow:hidden;margin:90px 0 0}@media screen and (max-width:1280px){body#investor main{margin-top:40px}}body#investor .stl{width:100%;font-weight:200;font-size:18px;line-height:23px;max-width:100%;margin:100px 0 -100px;background:#d54439;background:linear-gradient(147deg,#038ed8,#d54439 50%,#d54439);padding:10px;color:#fff;text-align:center;top:0;position:absolute}@media screen and (max-width:1280px){body#investor .stl{text-align:center;margin:86px auto 0;font-size:1rem;line-height:1;padding:12px 10px 10px}}@media screen and (max-width:700px){body#investor .stl{-webkit-box-align:center;-webkit-align-items:center;-ms-flex-align:center;align-items:center;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;margin:70px auto 0;-webkit-box-pack:center;-webkit-justify-content:center;-ms-flex-pack:center;justify-content:center}}body#investor .stl div#time{display:-webkit-inline-box;display:-webkit-inline-flex;display:-ms-inline-flexbox;display:inline-flex}@media screen and (max-width:700px){body#investor .stl div#time{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex}}body#investor .stl div#time span{margin:0 0 0 5px}body#investor .hs_type.hs-type.hs-fieldtype-select.field.hs-form-field{position:relative}body#investor .swiper.cnko{width:100%;height:auto}body#investor section.infoslider{background:#0687d1;margin:0 0 60px;padding:15px 0}body#investor section.hero-home.videodev.invested{padding:50px 0 125px;margin:130px 0 0;overflow:visible}@media screen and (max-width:1280px){body#investor section.hero-home.videodev.invested{margin-top:70px;padding:20px 0 125px}}body#investor section.hero-home.videodev.invested .container{max-width:100%}@media screen and (max-width:1280px){body#investor section.hero-home.videodev.invested .column-half.content-col{margin:0}}body#investor section.hero-home.videodev.invested .content{max-width:100%;margin:0 9vw}@media screen and (max-width:1310px){body#investor section.hero-home.videodev.invested .content{margin:0 5vw}}@media screen and (max-width:1280px){body#investor section.hero-home.videodev.invested .content{-webkit-box-orient:vertical;-webkit-box-direction:normal;-webkit-flex-direction:column;-ms-flex-direction:column;flex-direction:column}}@media screen and (max-width:700px){body#investor section.hero-home.videodev.invested .content{margin:0}}@media screen and (max-width:1280px){body#investor section.hero-home.videodev.invested .column-half.content-col{padding-bottom:30px}}body#investor section.hero-home.videodev.invested .image{position:relative;left:auto;top:0;right:0;bottom:auto;width:auto;display:none}@media screen and (max-width:1280px){body#investor section.hero-home.videodev.invested .image{display:block}}body#investor section.hero-home.videodev.invested .content .column-half.image-col{max-width:50%;width:750px;-webkit-box-orient:vertical;-webkit-box-direction:normal;-webkit-flex-direction:column;-ms-flex-direction:column;flex-direction:column}body#investor section.hero-home.videodev.invested video{-o-object-fit:contain;object-fit:contain;-o-object-position:center;object-position:center;display:block;height:auto;border-radius:15px;position:relative;top:0;width:100%;right:0;background:transparent;max-height:450px;-webkit-box-shadow:0 4px 67px rgba(63,133,201,.14);box-shadow:0 4px 67px rgba(63,133,201,.14)}@media screen and (max-width:1280px){body#investor section.hero-home.videodev.invested video{min-height:0}}body#investor section.hero-home.videodev.invested .relative-pos{position:relative}body#investor section.hero-home.videodev.invested .points{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;margin:0;position:absolute;top:calc(100% + 30px)}@media screen and (max-width:1280px){body#investor section.hero-home.videodev.invested .points{margin:30px 0 0;position:relative;top:0}}@media screen and (max-width:700px){body#investor section.hero-home.videodev.invested .points{margin:20px 0 10px;-webkit-box-align:center;-webkit-align-items:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-webkit-justify-content:center;-ms-flex-pack:center;justify-content:center}}body#investor section.hero-home.videodev.invested .points .point{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-align:center;-webkit-align-items:center;-ms-flex-align:center;align-items:center;margin-right:20px;position:relative;padding-right:20px}@media screen and (max-width:700px){body#investor section.hero-home.videodev.invested .points .point{-webkit-box-orient:vertical;-webkit-box-direction:normal;-webkit-flex-direction:column;-ms-flex-direction:column;flex-direction:column;margin-right:5px;padding-right:5px}}body#investor section.hero-home.videodev.invested .points .point img{max-width:40px}body#investor section.hero-home.videodev.invested .points .point:after{content:close-quote;position:absolute;top:0;right:0;height:20px;width:1px;background:#b3b2b2;-webkit-transform:translateY(50%);transform:translateY(50%);border-radius:5px}body#investor section.hero-home.videodev.invested .points .point .text{font-size:14px;font-weight:700;color:#5f5f5f;line-height:1.2}@media screen and (min-width:700px){body#investor section.hero-home.videodev.invested .points .point .text{padding-left:8px}}@media screen and (max-width:700px){body#investor section.hero-home.videodev.invested .points .point .text{font-size:14px;font-weight:700;color:#5f5f5f;line-height:1.2;min-height:60px;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-align:center;-webkit-align-items:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-webkit-justify-content:center;-ms-flex-pack:center;justify-content:center}}body#investor section.hero-home.videodev.invested .points .point:nth-child(3){padding:0;margin:0}body#investor section.hero-home.videodev.invested .points .point:nth-child(3):after{display:none}@media screen and (max-width:1280px){body#investor section.hero-home.videodev.invested .videomain{display:none}}body#investor section.hero-home.videodev.invested video#vidov{position:absolute;top:0;left:0;right:0;bottom:0;height:100%;width:100%;-o-object-fit:cover;object-fit:cover}body#investor section.hero-home.videodev.invested .mobilevideo{display:none}@media screen and (max-width:1280px){body#investor section.hero-home.videodev.invested .mobilevideo{display:block;position:relative}}body#investor section.hero-home.videodev.invested video#mobvidov{position:absolute;top:0;left:0;right:0;bottom:0;display:none}@media screen and (max-width:1280px){body#investor section.hero-home.videodev.invested video#mobvidov{display:block}}body#investor section.hero-home.videodev.invested .content .sub-headline{line-height:1;font-size:1.3rem;font-family:Nunito,sans-serif}@media screen and (max-width:700px){body#investor section.hero-home.videodev.invested .content .sub-headline{font-size:1rem}}body#investor section.hero-home.videodev.invested .content h1{font-style:normal;font-weight:700;font-size:3.5rem;font-size:3.3vw;line-height:1.2;letter-spacing:-.025em;color:#192d3e;max-width:44vw}@media screen and (max-width:1280px){body#investor section.hero-home.videodev.invested .content h1{font-style:normal;font-weight:700;font-size:2rem;line-height:1.2;letter-spacing:-.025em;color:#192d3e;max-width:450px;margin-left:auto;margin-right:auto}}@media screen and (max-width:700px){body#investor section.hero-home.videodev.invested .content h1{font-style:normal;font-weight:700;font-size:2.2rem;line-height:1.2;letter-spacing:-.025em;color:#192d3e;padding:0;margin:0 auto 5px}}@media screen and (max-width:365px){body#investor section.hero-home.videodev.invested .content h1{font-size:1.7rem}}body#investor section.hero-home.videodev.invested .content h1 .kd{display:block}@media screen and (max-width:700px){body#investor section.hero-home.videodev.invested .content p{font-size:1.1rem;margin:0 0 15px}}@media screen and (max-width:365px){body#investor section.hero-home.videodev.invested .content p{font-size:1.1rem;margin:0 0 15px}}body#investor section.hero-home.videodev.invested .column-half.content-col{background:transparent;-webkit-box-shadow:none;box-shadow:none;max-width:600px;padding:40px 40px 40px 0;max-width:49vw}@media screen and (max-width:1280px){body#investor section.hero-home.videodev.invested .column-half.content-col{max-width:600px;background:#fff;-webkit-box-shadow:0 4px 67px rgba(63,133,201,.14);box-shadow:0 4px 67px rgba(63,133,201,.14);border-radius:10px;margin-bottom:60px;padding:30px 30px 10px}}@media screen and (max-width:700px){body#investor section.hero-home.videodev.invested .column-half.content-col{padding:30px 10px 10px}}body#investor section.hero-home.videodev.invested .column-half.content-col .infk{max-width:36vw;max-width:600px}@media screen and (max-width:1600px){body#investor section.hero-home.videodev.invested .column-half.content-col .infk{max-width:500px}}@media screen and (max-width:1310px){body#investor section.hero-home.videodev.invested .column-half.content-col .infk{max-width:40vw}}@media screen and (max-width:1280px){body#investor section.hero-home.videodev.invested .column-half.content-col .infk{max-width:100%}}@media screen and (max-width:700px){body#investor section.hero-home.videodev.invested .column-half.content-col .infk{position:relative;z-index:23;margin:15px 0 0;max-width:100%}}body#investor section.hero-home.videodev.invested .column-half.content-col form{max-width:100%;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;border-radius:100px;-webkit-box-pack:justify;-webkit-justify-content:space-between;-ms-flex-pack:justify;justify-content:space-between;-webkit-box-align:center;-webkit-align-items:center;-ms-flex-align:center;align-items:center;margin:20px 0 0}@media screen and (min-width:1280px){body#investor section.hero-home.videodev.invested .column-half.content-col form{-webkit-box-shadow:0 5px 30px -10px rgba(0,0,0,.52);box-shadow:0 5px 30px -10px rgba(0,0,0,.52);background:#fff;padding:10px;border:1px solid #e6e6e6}}@media screen and (max-width:1280px){body#investor section.hero-home.videodev.invested .column-half.content-col form{-webkit-box-orient:vertical;-webkit-box-direction:normal;-webkit-flex-direction:column;-ms-flex-direction:column;flex-direction:column}}@media screen and (max-width:700px){body#investor section.hero-home.videodev.invested .column-half.content-col form{margin:10px 0 0}}body#investor section.hero-home.videodev.invested .column-half.content-col form label{position:absolute;top:0;left:-9999px;width:1px;height:1px;overflow:hidden}@media screen and (max-width:1280px){body#investor section.hero-home.videodev.invested .column-half.content-col .hs_email.hs-email.hs-fieldtype-text.field.hs-form-field{display:block;width:100%}}body#investor section.hero-home.videodev.invested .column-half.content-col form .input input{border:none;margin:0 auto 0 0;-webkit-box-shadow:none;box-shadow:none;padding:0 0 0 20px;font-style:normal;font-weight:400;font-size:16px;line-height:1.3;letter-spacing:-.015em}@media screen and (max-width:1280px){body#investor section.hero-home.videodev.invested .column-half.content-col form .input input{background:#fff;-webkit-box-shadow:0 4px 36px rgba(0,0,0,.07);box-shadow:0 4px 36px rgba(0,0,0,.07);border-radius:110px;width:100%;height:60px;padding:10px;text-align:center;margin:0 0 15px}}@media screen and (max-width:700px){body#investor section.hero-home.videodev.invested .column-half.content-col form .input input{margin:0 0 10px}}body#investor section.hero-home.videodev.invested .column-half.content-col form .input input::-webkit-input-placeholder{font-style:normal;font-weight:400;font-size:16px;line-height:1.3;letter-spacing:-.015em}body#investor section.hero-home.videodev.invested .column-half.content-col form .input input::-moz-placeholder{font-style:normal;font-weight:400;font-size:16px;line-height:1.3;letter-spacing:-.015em}body#investor section.hero-home.videodev.invested .column-half.content-col form .input input:-ms-input-placeholder{font-style:normal;font-weight:400;font-size:16px;line-height:1.3;letter-spacing:-.015em}body#investor section.hero-home.videodev.invested .column-half.content-col form .input input::-ms-input-placeholder{font-style:normal;font-weight:400;font-size:16px;line-height:1.3;letter-spacing:-.015em}body#investor section.hero-home.videodev.invested .column-half.content-col form input.hs-button.primary.large{background:#d54439;width:auto;min-width:auto;text-transform:uppercase;font-weight:700;margin:0;padding:20px}body#investor section.hero-home.videodev.invested .column-half.content-col form input.hs-button.primary.large:hover{background-color:#038ed8}@media screen and (max-width:1280px){body#investor section.hero-home.videodev.invested .column-half.content-col form input.hs-button.primary.large{padding:20px;max-width:100%;width:100%;text-transform:uppercase}}@media screen and (max-width:700px){body#investor section.hero-home.videodev.invested .column-half.content-col form input.hs-button.primary.large{padding:20px 14px}}@media screen and (max-width:1280px){body#investor section.hero-home.videodev.invested .column-half.content-col .fig{position:relative}}body#investor section.hero-home.videodev.invested .column-half.content-col .fig img{max-height:90px;margin:0 0 -30px}@media screen and (max-width:1280px){body#investor section.hero-home.videodev.invested .column-half.content-col .fig img{max-height:90px;margin:0 auto;position:absolute;left:0;right:0;top:20px}}body#investor section.hero-home.videodev.invested .column-half.content-col .contentblock{padding:40px 0 20px;border-radius:20px;background:transparent;-webkit-box-shadow:0 4px 67px rgba(63,133,201,.14);box-shadow:0 4px 67px rgba(63,133,201,.14);-webkit-box-shadow:none;box-shadow:none;border-radius:10px;margin:-50px 0 0}body#investor section.hero-home.videodev.invested p{font-size:1.2rem;font-style:normal;font-weight:400;font-size:18px;line-height:22px;margin-bottom:30px;color:#192d3e}@media screen and (max-width:700px){body#investor section.hero-home.videodev.invested p{margin:0 0 15px}}body#investor section.hero-home.videodev.invested .plauft{position:absolute;top:50%;left:50%;width:95px;height:95px;background:hsla(0,0%,100%,.9);border-radius:50%;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-align:center;-webkit-align-items:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-webkit-justify-content:center;-ms-flex-pack:center;justify-content:center;cursor:pointer;-webkit-transform:translate(-50%,-50%);transform:translate(-50%,-50%)}@media screen and (max-width:1280px){body#investor section.hero-home.videodev.invested .plauft{width:55px;height:55px}}body#investor section.hero-home.videodev.invested .plauft:hover{background:#038ed8}body#investor section.hero-home.videodev.invested .plauft:hover svg{fill:#fff}body#investor section.hero-home.videodev.invested .plauft svg{color:#fff;fill:#4e4e4e;width:30px}@media screen and (max-width:1280px){body#investor section.hero-home.videodev.invested .plauft svg{width:20px}}body#investor:before{display:none}body#investor .footer{padding:0}body#investor .button.buy-now{display:inline-block;margin-right:0;margin-left:60px;border-radius:30px!important;background-image:none!important}body#investor .button.white-button{margin-right:25px;padding:20px 30px;border-style:none;border-radius:3px;background-color:#fff;-webkit-transition-property:all;transition-property:all;color:#038ed8;font-size:14px;font-weight:600;letter-spacing:0;min-width:300px;text-transform:none}@media screen and (max-width:700px){body#investor .button.white-button{width:360px;max-width:calc(100vw - 45px);min-width:0}}body#investor .button{padding:15px 20px 15px 15px;border-style:none;-webkit-transition:-webkit-transform .4s ease;transition:-webkit-transform .4s ease;transition:transform .4s ease;transition:transform .4s ease,-webkit-transform .4s ease;background-image:none;border-radius:30px;text-transform:capitalize}body#investor .w-button{display:inline-block;padding:9px 15px;background-color:#3898ec;color:#fff;border:0;line-height:inherit;text-decoration:none;cursor:pointer;border-radius:0}body#investor .button{display:inline-block;padding:15px 20px;border-radius:4px;background-color:#038ed8;-webkit-transition:all .4s ease;transition:all .4s ease;color:#fff;line-height:20px;font-weight:900;letter-spacing:0;text-decoration:none;text-transform:none;font-size:14px;font-weight:800;letter-spacing:.01rem;background-image:-webkit-gradient(linear,left top,left bottom,from(hsla(0,0%,100%,.1)),to(rgba(0,0,0,.1)));background-image:linear-gradient(-180deg,hsla(0,0%,100%,.1),rgba(0,0,0,.1))}body#investor .button:hover{color:#fff;background-color:#024c73}@media screen and (max-width:700px){body#investor .button{width:360px;max-width:calc(100vw - 95px)}}body#investor .section.section-bottom-padding{padding-bottom:120px}body#investor .section{position:relative;z-index:1;overflow:visible;height:auto;max-width:1280px;margin-right:auto;margin-left:auto;padding:50px 0;background-color:#fff;background-image:none;background-size:auto;background-repeat:repeat;background-attachment:scroll;-webkit-perspective-origin:0 0;perspective-origin:0 0;-webkit-transform-origin:0 0;transform-origin:0 0;text-align:center}@media screen and (max-width:700px){body#investor .section{padding:20px 0}}body#investor .container{position:static;z-index:1;display:block;width:100%;max-width:1280px;margin-right:auto;margin-left:auto;padding-top:0;padding-bottom:0}body#investor .w-layout-grid{grid-template-columns:1fr 1fr 1fr}@media screen and (max-width:700px){body#investor .div-block-11 .swiper{max-width:100%}}@media screen and (max-width:700px){body#investor .div-block-11 span.imgs{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;width:100%;max-width:70vw;margin:0 auto}}body#investor span.m img{max-height:130px;margin:10px 0;width:auto;height:auto;-o-object-fit:contain;object-fit:contain;-o-object-position:center;object-position:center;display:block}body#investor .m.swiper-slide-active{opacity:1!important}body#investor span.imgs span.m{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;font-size:2rem;font-weight:700;color:rgba(25,58,87,.6392156862745098);-webkit-box-align:center;-webkit-align-items:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-webkit-justify-content:center;-ms-flex-pack:center;justify-content:center;opacity:.1;-webkit-transition:all .3s;transition:all .3s}body#investor h3.fttitle{font-size:1rem;color:#fff;margin:0}@media screen and (max-width:700px){body#investor h3.fttitle{font-size:.9rem}}body#investor .h2-box{margin-bottom:46px;color:#000;font-size:42px;font-weight:500;letter-spacing:-2px}body#investor h2{margin-top:0;margin-bottom:25px;color:#303236;font-size:36px;line-height:48px;line-height:1.2;font-weight:700}body#investor .w-layout-grid{display:-ms-grid;display:grid;grid-auto-columns:1fr;-ms-grid-columns:1fr 1fr;grid-template-columns:1fr 1fr;-ms-grid-rows:auto auto;grid-template-rows:auto auto;grid-row-gap:16px;grid-column-gap:16px}body#investor .div-block-11{padding:8px;text-align:center}body#investor .cta{position:relative;width:100%;max-width:1280px;margin:15px auto;padding:46px 144px 65px;border-radius:10px;background-color:#d11038;background-size:auto,auto;background-repeat:repeat,no-repeat}@media screen and (min-width:1280px){body#investor .cta{overflow:hidden}}@media screen and (max-width:700px){body#investor .cta{padding:60px 20px}}@media screen and (max-width:400px){body#investor .cta{padding:20px}}@media screen and (max-width:1280px){body#investor .cta .grid-9{grid-template-columns:1fr;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-webkit-flex-direction:column;-ms-flex-direction:column;flex-direction:column;-webkit-box-align:center;-webkit-align-items:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-webkit-justify-content:center;-ms-flex-pack:center;justify-content:center;text-align:center}}body#investor .cta label#label-email-df2a6935-1139-426a-b373-0917788189ad_7{display:none}body#investor .grid-9{-webkit-box-align:end;-webkit-align-items:end;-ms-flex-align:end;align-items:end;grid-column-gap:75px;-ms-grid-rows:auto;grid-template-rows:auto;z-index:12;position:relative}body#investor .h2-left{width:400px;max-width:100%;margin-bottom:0;padding-top:1px;padding-right:26px;padding-bottom:0;color:#fff;font-size:42px;line-height:48px;font-weight:400;text-align:left}@media screen and (max-width:700px){body#investor .h2-left{-webkit-flex-wrap:wrap;-ms-flex-wrap:wrap;flex-wrap:wrap;font-size:1.6rem;line-height:1;font-weight:400;text-align:center;width:100%;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;margin:0 auto .2rem;padding:0;-webkit-box-pack:center;-webkit-justify-content:center;-ms-flex-pack:center;justify-content:center;display:block;font-size:2rem;line-height:1.4}}body#investor .h2-left strong{color:#fff}@media screen and (max-width:700px){body#investor .h2-left strong{display:block}}body#investor .form-block{margin-bottom:0;border-radius:10px}@media screen and (max-width:700px){body#investor .form-block{width:100%}}body#investor .w-container{margin-left:auto;margin-right:auto;max-width:940px}body#investor header.tl{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-webkit-flex-direction:column;-ms-flex-direction:column;flex-direction:column;-webkit-box-align:center;-webkit-align-items:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-webkit-justify-content:center;-ms-flex-pack:center;justify-content:center;text-align:center;margin:0 0 20px;padding:0 10px}@media screen and (max-width:700px){body#investor header.tl h2.h2-box.h2-op{text-align:center}}body#investor section#how-it-works{margin:30px 0 0;padding:0}body#investor section#how-it-works div#how{padding:60px 0}body#investor .section.section-bussiness.hand-bg{width:100%;max-width:100%;padding-top:0;padding-bottom:0;border-radius:9px;margin:40px auto;background-position:100% 20%;background-size:40%;background-repeat:no-repeat}body#investor .pricing-wrapper{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;padding-bottom:0}@media screen and (max-width:700px){body#investor .pricing-wrapper{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;padding-bottom:0;-webkit-box-orient:vertical;-webkit-box-direction:normal;-webkit-flex-direction:column;-ms-flex-direction:column;flex-direction:column}}body#investor .business-model.model-1{width:100%;padding:82px 0}@media screen and (max-width:700px){body#investor .business-model.model-1{width:100%;padding:40px 20px 20px}}body#investor .h2-box.h2-op{font-size:50px;font-weight:500}body#investor .pricing-wrapper p.p-sub.p-short{text-align:center}body#investor .p-sub.p-short{width:560px;max-width:100%;margin-bottom:25px;font-size:18px;line-height:27px}body#investor .business-box{max-width:1280px;margin:0 auto;-webkit-box-align:center;-webkit-align-items:center;-ms-flex-align:center;align-items:center}body#investor .business-box .button-wrapper{margin:30px 0 0}@media screen and (max-width:700px){body#investor .business-box .button-wrapper{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-align:center;-webkit-align-items:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-webkit-justify-content:center;-ms-flex-pack:center;justify-content:center;width:100%}}body#investor .invesments-list.list-full.hor{padding:0 0 0 30px;margin:15px 0}body#investor .invesments-list.list-full.hor img{margin-right:10px}@media screen and (max-width:700px){body#investor .invesments-list.list-full.hor img{-webkit-box-ordinal-group:3;-webkit-order:2;-ms-flex-order:2;order:2;margin:0 0 10px}}@media screen and (max-width:700px){body#investor .invesments-list.list-full{padding:10px 5px}}body#investor .p-sub.p-short.p-margin.small-dot.no-dot{background-image:none!important}body#investor blockquote{margin:0 0 10px;padding:10px 20px;border-left:5px solid #e2e2e2;font-size:18px;line-height:22px;color:#fff}@media screen and (max-width:700px){body#investor .btninvst{-webkit-box-pack:center;-webkit-justify-content:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:center;-webkit-align-items:center;-ms-flex-align:center;align-items:center}body#investor .btninvst{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex}}body#investor .shadow{-webkit-box-shadow:1px 1px 40px 0 rgba(0,0,0,.05);box-shadow:1px 1px 40px 0 rgba(0,0,0,.05)}body#investor .business-box{-webkit-box-align:start;-webkit-align-items:flex-start;-ms-flex-align:start;align-items:flex-start}body#investor .h2-box.h2-op{margin-bottom:7px;font-size:3.2rem;font-weight:400;text-align:left}@media screen and (max-width:700px){body#investor .h2-box.h2-op{font-size:2rem}}@media screen and (max-width:400px){body#investor .h2-box.h2-op{font-size:2rem;line-height:1.2}}body#investor .p-sub.p-short{width:700px;margin-top:0;color:#000;font-size:1.2rem;line-height:1.4;font-weight:400;letter-spacing:0;margin-bottom:30px}@media screen and (max-width:700px){body#investor .p-sub.p-short{font-size:17px}}body#investor .section.section-bottom-padding.team-sec{width:100%;margin-top:25px;padding:60px 80px;border-radius:10px;background-color:#f5f8fc}@media screen and (max-width:700px){body#investor .section.section-bottom-padding.team-sec{padding:60px 20px}}@media screen and (max-width:400px){body#investor .section.section-bottom-padding.team-sec{padding:40px 0}}@media screen and (max-width:1280px){body#investor .section.section-bottom-padding.team-sec .grid-5{width:100%;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-webkit-flex-direction:column;-ms-flex-direction:column;flex-direction:column}}body#investor .team-intro.less-m{margin-bottom:50px}@media screen and (max-width:700px){body#investor .team-intro.less-m{margin-bottom:0}}body#investor .team-intro.less-m .h2-box.h2-op{text-align:center}body#investor .team-intro{max-width:900px;margin-right:auto;margin-bottom:100px;margin-left:auto;color:#a3a3a3;font-size:32px;line-height:42px;text-align:center}body#investor .team-intro .h2-box.h2-op{text-align:center}body#investor .team{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex}@media screen and (max-width:1280px){body#investor .team{-webkit-box-orient:vertical;-webkit-box-direction:normal;-webkit-flex-direction:column;-ms-flex-direction:column;flex-direction:column}}body#investor .grid-5{width:100%;-ms-grid-columns:1fr 1fr 1fr 1fr 1fr 1fr;grid-template-columns:1fr 1fr 1fr 1fr 1fr 1fr}@media screen and (min-width:1280px){body#investor .grid-5>img{display:none}}body#investor #w-node-_5f6c87f4-8d40-ac83-0a71-ac3837c92298-a3cc193b{-ms-grid-column-span:4;grid-column-end:5;-ms-grid-column:1;grid-column-start:1;-ms-grid-row-span:1;grid-row-end:2;-ms-grid-row:1;grid-row-start:1}@media screen and (max-width:1280px){body#investor #w-node-_5f6c87f4-8d40-ac83-0a71-ac3837c92298-a3cc193b{display:none}}body#investor #w-node-_46417f79-3a8d-7813-ccfe-2b88b8550b62-a3cc193b{-ms-grid-column-span:2;grid-column-end:7;-ms-grid-column:5;grid-column-start:5;-ms-grid-row-span:1;grid-row-end:2;-ms-grid-row:1;grid-row-start:1}@media screen and (max-width:1280px){body#investor #w-node-_46417f79-3a8d-7813-ccfe-2b88b8550b62-a3cc193b{display:none}}@media screen and (max-width:700px){body#investor .full-time{width:100%}}@media screen and (max-width:700px){body#investor .timeline-box{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;padding:10px;border:1px solid #dceeff;margin:0 10px}}@media screen and (max-width:700px){body#investor .timeline-box .year{width:110px;font-size:14px}}@media screen and (max-width:700px){body#investor .year{color:#f8c3c1;font-size:16px;line-height:1em;font-weight:500;margin:20px 10px 0 0;text-align:left}}body#investor .white-box.time{height:110px;margin-bottom:20px;padding:19px 17px;color:#000;font-size:13px;line-height:18px;font-weight:400}@media screen and (max-width:1280px){body#investor .white-box.time{height:auto;padding:5px}}body#investor .white-box{border-radius:2px;background-color:#fff;-webkit-box-shadow:0 0 40px 0 rgba(29,74,4,.09);box-shadow:0 0 40px 0 rgba(29,74,4,.09)}body#investor .year.deatil{margin-bottom:26px;font-size:15px;min-height:35px;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-align:center;-webkit-align-items:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-webkit-justify-content:center;-ms-flex-pack:center;justify-content:center}@media screen and (max-width:700px){body#investor .year.deatil{width:100%;margin:0;text-align:left;font-size:12px;-webkit-box-pack:start;-webkit-justify-content:flex-start;-ms-flex-pack:start;justify-content:flex-start;min-height:0}}@media screen and (max-width:700px){body#investor .div-block-9{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex}}body#investor .year{margin-bottom:15px;color:#f8c3c1;font-size:24px;line-height:1em;font-weight:500}@media screen and (max-width:700px){body#investor .year{color:rgba(206,18,53,.6705882352941176)}}body#investor .section.white{overflow:visible;width:100%;max-width:1300px;margin-top:50px;margin-right:auto;margin-left:auto;padding:130px 40px;border-radius:9px;background-color:#fff;background-position:168% 50%;background-size:auto;background-repeat:no-repeat;background-attachment:scroll}@media screen and (max-width:700px){body#investor .section.white{padding:40px 20px}}body#investor .h2-box.h2-op.center._2{margin-bottom:40px}body#investor .h2-box.h2-op.center{text-align:center}body#investor .invesments-list.list-full.hor{margin-bottom:10px;padding-right:28px;padding-left:28px;min-height:200px;overflow:hidden}@media screen and (max-width:700px){body#investor .invesments-list.list-full.hor{-webkit-box-orient:vertical;-webkit-box-direction:reverse;-webkit-flex-direction:column-reverse;-ms-flex-direction:column-reverse;flex-direction:column-reverse;padding:20px;margin:0 0 20px}}body#investor .invesments-list.list-full.hor .km{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;width:100%;-webkit-box-align:center;-webkit-align-items:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-webkit-justify-content:center;-ms-flex-pack:center;justify-content:center;-webkit-box-orient:vertical;-webkit-box-direction:normal;-webkit-flex-direction:column;-ms-flex-direction:column;flex-direction:column;padding:30px 20px;text-align:center;min-height:320px;-webkit-box-pack:start;-webkit-justify-content:flex-start;-ms-flex-pack:start;justify-content:flex-start}@media screen and (max-width:700px){body#investor .invesments-list.list-full.hor .km{width:100%;padding:0 0 30px;min-height:0;-webkit-box-align:center;-webkit-align-items:center;-ms-flex-align:center;-webkit-box-align:start;-webkit-align-items:flex-start;-ms-flex-align:start;align-items:flex-start}}@media screen and (max-width:700px){body#investor .invesments-list.list-full.hor .cm,body#investor .invesments-list.list-full.hor .km{-webkit-box-orient:vertical;-webkit-box-direction:normal;-webkit-flex-direction:column;-ms-flex-direction:column;flex-direction:column;-webkit-box-pack:center;-webkit-justify-content:center;-ms-flex-pack:center;justify-content:center;align-items:center}body#investor .invesments-list.list-full.hor .cm{text-align:left;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-align:center;-webkit-align-items:center;-ms-flex-align:center;padding:0;margin:0 0 10px}body#investor .invesments-list.list-full.hor .cm h3{margin-left:0;text-align:center}}@media screen and (max-width:700px){body#investor .invesments-list.list-full.hor .kl{padding:0}}body#investor .invesments-list.list-full.hor .p-sub.p-short.p-margin.small-dot.no-dot{padding-left:0;background-image:none;font-size:1.1rem;color:#353535}@media screen and (max-width:700px){body#investor .invesments-list.list-full.hor .p-sub.p-short.p-margin.small-dot.no-dot{padding:0;margin:0 auto;max-width:100%;-webkit-box-ordinal-group:4;-webkit-order:3;-ms-flex-order:3;order:3;font-size:1rem;line-height:1.4;text-align:left;text-align:center}}body#investor .invesments-list.list-full.hor h3.title{color:#1e4f8c;font-size:1.4rem;margin:15px 0 10px}@media screen and (max-width:700px){body#investor .invesments-list.list-full.hor h3.title{margin:0 0 0 20px}}body#investor .invesments-list.list-full.hor figure{width:50%;width:100%;overflow:hidden;margin:0 0 0 auto}@media screen and (max-width:700px){body#investor .invesments-list.list-full.hor figure{max-width:100%;margin:0 auto 20px;width:100%;-webkit-box-ordinal-group:2;-webkit-order:1;-ms-flex-order:1;order:1}}body#investor .invesments-list.list-full.hor figure img{display:inline-block;vertical-align:middle;max-width:100%;height:260px;-o-object-fit:cover;object-fit:cover;width:100%;-o-object-position:center;object-position:center;min-height:0}@media screen and (max-width:700px){body#investor .invesments-list.list-full.hor figure img{margin:0;border-radius:10px;height:auto}}body#investor .p-sub.p-short.p-margin.small-dot.no-dot{font-size:1rem}body#investor .column{width:50%;padding-right:20px;padding-left:20px}body#investor .business-box{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;width:100%;padding:0 0 27px;-webkit-box-pack:center;-webkit-justify-content:center;-ms-flex-pack:center;justify-content:center;-webkit-flex-wrap:wrap;-ms-flex-wrap:wrap;flex-wrap:wrap;border:1px #f4f4f4;background-color:transparent;color:#5a5858;text-align:left}body#investor .invesments-list.list-full{width:100%;margin-top:0;margin-bottom:6px;padding:20px 4px 20px 13px;border-radius:4px;background-color:#fff}body#investor .invesments-list.list-full.hor{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-align:center;-webkit-align-items:center;-ms-flex-align:center;align-items:center;min-height:0;padding:0;background:#fff;-webkit-box-shadow:0 0 34px #d5e3f8;box-shadow:0 0 34px #d5e3f8;-webkit-box-shadow:1px 1px 40px 0 rgba(0,0,0,.05);box-shadow:1px 1px 40px 0 rgba(0,0,0,.05);border-radius:10px;-webkit-box-orient:vertical;-webkit-box-direction:reverse;-webkit-flex-direction:column-reverse;-ms-flex-direction:column-reverse;flex-direction:column-reverse;width:29.3%;margin:0 2%}@media screen and (max-width:700px){body#investor .invesments-list.list-full.hor{-webkit-box-orient:vertical;-webkit-box-direction:reverse;-webkit-flex-direction:column-reverse;-ms-flex-direction:column-reverse;flex-direction:column-reverse;padding:20px;margin:0 0 20px;width:100%}}body#investor .p-sub.p-short.p-margin{width:auto;margin-bottom:25px;padding-bottom:7px;padding-left:58px;background-repeat:no-repeat;font-size:18px;line-height:30px}body#investor .p-sub.p-short.p-margin.small-dot{margin-bottom:0;padding-left:23px;background-position:0 9px;background-size:8px;font-weight:400}body#investor .p-sub.p-short.p-margin.small-dot.no-dot{padding-left:0;background-image:none}body#investor .footer-links{margin-top:0;padding-top:32px;padding-bottom:0;border-top:1px #131313;border-bottom:0 hsla(0,0%,100%,.04);background-color:#132c3e;-webkit-box-shadow:none;box-shadow:none;text-align:center}body#investor .footer-top{margin-top:0;margin-bottom:0;padding-top:20px;padding-bottom:20px;background-color:#132c3e;color:#269f6c}body#investor .footer-bottom-text{width:100%;margin-right:auto;margin-left:auto;color:#6e6e6e;font-size:12px;line-height:24px;font-weight:400;padding:0 20px}body#investor .bold-text{font-weight:400}body#investor .footer-link{display:block;margin-bottom:6px;padding-bottom:10px;border-bottom:1px #d5d5e0;color:#668cad;font-size:14px;font-weight:300;text-decoration:none}body#investor .footer .footer-link{color:#cf404d}body#investor .hide-d{display:none}body#investor .white-box.time.blue-box{background-color:#448bc9;color:#fff}body#investor .year.blue{color:#6d96c9}body#investor .p-sub.p-short.p-center{margin-right:auto;margin-left:auto;font-weight:400;text-align:center}body#investor .p-sub.p-short.p-margin{background-position:12px 0}body#investor .image{position:absolute;left:auto;top:0;right:0;bottom:auto;width:20%}body#investor .button.white-button.button-menu{margin-top:0;margin-right:0;padding-right:15px;padding-left:15px;border-radius:4px;background-color:#038ed8}@media screen and (max-width:700px){body#investor .button.white-button.button-menu{margin:0}}body#investor .button.white-button.button-menu:hover{background-color:#444}body#investor .swiper-button-next:after,body#investor .swiper-button-prev:after{font-size:0}body#investor .button.white-button.button-menu{-webkit-box-shadow:0 14px 16px -4px rgba(0,41,77,.22);box-shadow:0 14px 16px -4px rgba(0,41,77,.22);color:#fff;font-size:14px}body#investor .cta{background-repeat:no-repeat;background-position:100% 50%}body#investor .cta:after{content:close-quote;position:absolute;top:0;left:0;right:0;bottom:0;background:rgba(209,16,55,.8);z-index:1}body#investor .cta form{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-align:end;-webkit-align-items:flex-end;-ms-flex-align:end;align-items:flex-end;border-radius:5px;overflow:hidden}@media screen and (max-width:700px){body#investor .cta form{-webkit-box-orient:vertical;-webkit-box-direction:normal;-webkit-flex-direction:column;-ms-flex-direction:column;flex-direction:column;overflow:hidden;-webkit-box-align:center;-webkit-align-items:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-webkit-justify-content:center;-ms-flex-pack:center;justify-content:center}}body#investor .cta form .hs_email{min-width:230px}@media screen and (max-width:700px){body#investor .cta form .hs_email{width:100%}}body#investor .cta form .hs_email label{position:absolute;top:0;left:-9999px;width:1px;height:1px;overflow:hidden}body#investor .cta form input.hs-button.primary.large{margin:0;border-radius:0;position:relative;left:auto;top:0;right:0;bottom:auto;width:auto;height:60px;padding-right:36px;padding-left:36px;background-color:#3b99d9;color:#fff;font-size:18px;font-weight:700;text-transform:uppercase;-webkit-appearance:button;background-image:-webkit-gradient(linear,left top,left bottom,from(hsla(0,0%,100%,.1)),to(rgba(0,0,0,.1)));background-image:linear-gradient(-180deg,hsla(0,0%,100%,.1),rgba(0,0,0,.1))}body#investor .cta form input.hs-button.primary.large:hover{background-color:#024c73}@media screen and (max-width:700px){body#investor .cta form input.hs-button.primary.large{margin:0;width:100%;font-size:1rem;height:50px;text-align:center;padding:10px}}body#investor .cta form input{display:block;width:100%;height:38px;padding:8px 12px;font-size:14px;line-height:1.42857143;color:#333;background-color:#fff;height:60px;margin-bottom:0;border:1px #000;border-radius:0}@media screen and (max-width:700px){body#investor .cta form input{height:50px;text-align:center;padding:10px}}body#investor .hs_submit.hs-submit{margin:0!important}@media screen and (max-width:700px){body#investor .hs_submit.hs-submit,body#investor .hs_submit.hs-submit .actions{width:100%}}body#investor section.meetteam h2{color:#303236;font-size:36px;line-height:48px;font-weight:700;font-size:50px;font-weight:500;text-align:center;margin:0 0 30px}@media screen and (max-width:700px){body#investor section.meetteam h2{font-size:2rem;margin:0}}@media screen and (max-width:400px){body#investor section.meetteam h2{font-size:2rem;line-height:1.2;margin-bottom:0}}@media screen and (max-width:700px){body#investor section.meetteam .profile .text h3.sec-title{margin:0;color:#fff;font-size:1.1rem}}body#investor section.meetteam .profile .text p{font-size:.8rem;color:#fff;text-align:left}body#investor section.meetteam .profile .image{position:relative;width:100%}@media screen and (max-width:992px){body#investor section.meetteam .profile .image{padding:0}}body#investor .section.section-bottom-padding.lab{padding:30px 0;max-width:100%}@media screen and (max-width:700px){body#investor .section.section-bottom-padding.lab{padding:20px 0;margin-top:0}}body#investor .section.section-bottom-padding.lab .team-intro{max-width:900px;margin-right:auto;margin-bottom:0;margin-left:auto;color:#a3a3a3;font-size:32px;line-height:42px;text-align:center;padding:0 20px}body#investor .section.section-bottom-padding.lab .owl-item.swiper-slide.swiper-slide-active{opacity:1}body#investor .section.section-bottom-padding.lab .owl-item{opacity:.3;-webkit-transition:all .3s cubic-bezier(.55,.085,.68,.53);transition:all .3s cubic-bezier(.55,.085,.68,.53);display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-align:center;-webkit-align-items:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-webkit-justify-content:center;-ms-flex-pack:center;justify-content:center}@media screen and (max-width:700px){body#investor .section.section-bottom-padding.lab .owl-item{min-height:0}}body#investor .section.section-bottom-padding.lab .relnav{position:static;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-align:center;-webkit-align-items:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-webkit-justify-content:center;-ms-flex-pack:center;justify-content:center;padding:30px 0 0}body#investor .section.section-bottom-padding.lab .relnav .swiper-button-next,body#investor .section.section-bottom-padding.lab .relnav .swiper-button-prev{top:40%;background:#fff;border-radius:50px;width:50px;height:50px}body#investor .section.section-bottom-padding.lab .relnav svg{color:#038ed8;width:15px}body#investor .section.section-bottom-padding.lab a.button{min-width:260px;margin:0 auto}body#investor .section.section-bottom-padding.lab .slider1{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;padding:30px;-webkit-box-orient:vertical;-webkit-box-direction:normal;-webkit-flex-direction:column;-ms-flex-direction:column;flex-direction:column;-webkit-box-pack:center;-webkit-justify-content:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:start;-webkit-align-items:flex-start;-ms-flex-align:start;align-items:flex-start;background-repeat:no-repeat;-webkit-transition:all .2s cubic-bezier(.165,.84,.44,1);transition:all .2s cubic-bezier(.165,.84,.44,1);color:#444;font-size:14px;line-height:24px;font-style:normal;text-align:left;cursor:-webkit-grab;cursor:grab;min-height:300px;border-radius:10px;background-color:#fff;margin:0 1rem}@media screen and (max-width:700px){body#investor .section.section-bottom-padding.lab .slider1{padding:0 70px;min-height:0;margin:0;background-color:transparent}}body#investor .section.section-bottom-padding.lab p.p-light{font-size:1rem;line-height:1.6}body#investor .section.section-bottom-padding.lab .swiper.owlswiper{padding:0}body#investor .section.section-bottom-padding.lab strong{font-weight:700;color:#333131}body#investor .section.section-bottom-padding.lab .team-intro.labs-intro{max-width:100%;padding:0}body#investor .section.section-bottom-padding.lab .review-w{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex}body#investor .section.section-bottom-padding.lab .divider{width:50px;height:1px;margin:10px auto;background-color:#e2e2e2;color:#458bc9}body#investor .section.section-bottom-padding.lab .divider.d{width:100%;margin-left:0;background-color:#f8f8f8}body#investor .section.section-bottom-padding.lab .p-light{font-family:Gotham rounded book,sans-serif;font-size:16px;line-height:28px}body#investor .section.section-bottom-padding.lab .p-light.left-al{font-weight:400;text-align:left}body#investor .section.section-bottom-padding.lab .reviews{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;font-family:Montserrat,sans-serif;font-weight:300}body#investor .logo-wrapper img{width:auto;height:auto;max-width:100%}@media screen and (max-width:700px){body#investor .logo-wrapper img{max-height:100px}}body#investor .logo-wrapper{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-align:center;-webkit-align-items:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-webkit-justify-content:center;-ms-flex-pack:center;justify-content:center;min-height:110px}@media screen and (max-width:700px){body#investor .logo-wrapper{min-height:0}}body#investor section.companyhighlighta{padding:130px 0 100px;position:relative;margin:-60px 0 -20px}@media screen and (max-width:1280px){body#investor section.companyhighlighta{padding:50px 0}}body#investor section.companyhighlighta .container figure.image{width:23%;position:absolute;top:48%;left:-14%;-webkit-transform:translate(50%,-50%);transform:translateY(-50%);z-index:-1;margin:0}@media screen and (max-width:1280px){body#investor section.companyhighlighta .container figure.image{width:50%;position:relative;top:30px;-webkit-transform:rotate(90deg);transform:rotate(90deg);z-index:-1;max-width:260px;max-height:300px;margin:0 auto;display:block;right:0;left:0;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-align:center;-webkit-align-items:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-webkit-justify-content:center;-ms-flex-pack:center;justify-content:center}}body#investor section.companyhighlighta .content{width:85%;margin-left:auto;position:relative;right:-60px}@media screen and (max-width:1400px){body#investor section.companyhighlighta .content{right:0}}@media screen and (max-width:1280px){body#investor section.companyhighlighta .content{margin:0;width:100%}}body#investor section.companyhighlighta .container figure.image img{width:100%}body#investor section.companyhighlighta:after{content:close-quote;position:absolute;top:0;left:0;bottom:0;width:9%;background:#f5f8fc;z-index:-21}@media screen and (max-width:1280px){body#investor section.companyhighlighta:after{content:close-quote;position:absolute;top:auto;left:0;bottom:0;width:100%;background:#f5f8fc;z-index:-21;height:15%}}@media screen and (max-width:700px){body#investor section.companyhighlighta:after{height:15%}}body#investor section.companyhighlighta .container{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-align:center;-webkit-align-items:center;-ms-flex-align:center;align-items:center;position:relative;-webkit-box-pack:center;-webkit-justify-content:center;-ms-flex-pack:center;justify-content:center}@media screen and (max-width:1280px){body#investor section.companyhighlighta .container{-webkit-box-orient:vertical;-webkit-box-direction:reverse;-webkit-flex-direction:column-reverse;-ms-flex-direction:column-reverse;flex-direction:column-reverse}}body#investor section.companyhighlighta .callitem{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-align:center;-webkit-align-items:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-webkit-justify-content:center;-ms-flex-pack:center;justify-content:center;margin:0}body#investor section.companyhighlighta .callitem a{min-width:310px}@media screen and (max-width:700px){body#investor section.companyhighlighta .callitem a{min-width:400px;min-width:0;margin:0 auto}}@media screen and (max-width:400px){body#investor section.companyhighlighta .callitem a{min-width:300px}}body#investor section.companyhighlighta .content .blockitems{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-flex-wrap:wrap;-ms-flex-wrap:wrap;flex-wrap:wrap;margin:0 auto;-webkit-box-align:center;-webkit-align-items:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-webkit-justify-content:center;-ms-flex-pack:center;justify-content:center;padding:65px 0 75px}@media screen and (max-width:700px){body#investor section.companyhighlighta .content .blockitems{padding:30px 0}}body#investor section.companyhighlighta .content .item{width:31.3%;padding:10px 20px;margin:1%;min-height:235px;border:1px solid #e7eaed;-webkit-box-shadow:0 0 34px #d5e3f8;box-shadow:0 0 34px #d5e3f8;border-radius:10px;background:#fff;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-align:center;-webkit-align-items:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-webkit-justify-content:center;-ms-flex-pack:center;justify-content:center;-webkit-box-orient:vertical;-webkit-box-direction:normal;-webkit-flex-direction:column;-ms-flex-direction:column;flex-direction:column;color:#eee}@media screen and (max-width:1280px){body#investor section.companyhighlighta .content .item{width:29%}}@media screen and (max-width:700px){body#investor section.companyhighlighta .content .item{width:46%;padding:10px;margin:1%;min-height:185px}}@media screen and (max-width:400px){body#investor section.companyhighlighta .content .item{width:46%}}body#investor section.companyhighlighta .numb{font-size:2.2rem;font-weight:700;color:#000;line-height:1.2}@media screen and (max-width:700px){body#investor section.companyhighlighta .numb{font-size:2rem}}body#investor section.companyhighlighta .mnk{font-weight:700;color:#0b87cc;font-size:1.3rem;margin:5px 0 10px;line-height:1.2;text-align:center;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-align:center;-webkit-align-items:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-webkit-justify-content:center;-ms-flex-pack:center;justify-content:center}@media screen and (max-width:700px){body#investor section.companyhighlighta .mnk{font-size:.9rem}}body#investor section.companyhighlighta .content h2{text-align:center;font-size:50px;line-height:1.2;margin:0}@media screen and (max-width:700px){body#investor section.companyhighlighta .content h2{font-size:2rem;padding:0 10px}}body#investor section.companyhighlighta .content h2 b{color:#0b87cd}body#investor section.companyhighlighta .info{font-size:.9rem;line-height:1.2;text-align:center;margin-bottom:0;color:#444}body#investor section.how-it-works .container,body#investor section.how-it-works .container .business-box{max-width:1400px}body#investor section.section-competetive{padding:0 20px;margin:120px 0 0}@media screen and (max-width:700px){body#investor section.section-competetive{padding:0;margin:60px 0 40px}}body#investor section.section-competetive .context h3.sec-title{position:relative;line-height:1;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-align:center;-webkit-align-items:center;-ms-flex-align:center;align-items:center;max-width:500px}@media screen and (max-width:1280px){body#investor section.section-competetive .context h3.sec-title{font-size:1rem;margin:10px 0}}body#investor section.section-competetive .context p{max-width:500px}body#investor section.section-competetive .image-block{-webkit-transition:all .3s;transition:all .3s}@media screen and (max-width:1280px){body#investor section.section-competetive .context h3.sec-title{cursor:pointer}}body#investor section.section-competetive .context h3.sec-title span.click{-webkit-transition:all .3s;transition:all .3s;display:block;width:30px;height:30px;margin-left:auto;display:none}@media screen and (max-width:1280px){body#investor section.section-competetive .context h3.sec-title span.click{display:block}}body#investor section.section-competetive .context h3.sec-title span.click svg{width:30px;height:30px}body#investor section.section-competetive .context h3.sec-title:after{content:close-quote;position:absolute;height:30px;width:4px;background:#0388cd;right:calc(100% + 15px);border-radius:2px;top:0}@media screen and (max-width:700px){body#investor section.section-competetive .context h3.sec-title:after{width:3px;right:calc(100% + 9px)}}body#investor section.section-competetive h2.sec-title{margin-bottom:7px;font-size:3.2rem;letter-spacing:-2px;font-weight:700;font-weight:100;font-weight:400}body#investor section.section-competetive h2.sec-title strong{color:#0988d0}@media screen and (max-width:700px){body#investor section.section-competetive h2.sec-title{font-size:2rem;line-height:1.2}}body#investor section.section-competetive .title p{color:#000;font-size:1.2rem;line-height:1.4;font-weight:400;letter-spacing:0;margin-bottom:30px}body#investor section.section-competetive .title p strong{color:#0988d0}@media screen and (max-width:1280px){body#investor section.section-competetive .title p{font-size:1.1rem}}@media screen and (max-width:700px){body#investor section.section-competetive .title p{font-size:1.063rem}}body#investor section.section-competetive .row-item{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-align:center;-webkit-align-items:center;-ms-flex-align:center;align-items:center;background-color:#f5f8fc;padding:0 20px 0 60px;border-radius:10px;margin:40px 0}@media screen and (min-width:1280px){body#investor section.section-competetive .row-item:nth-child(2){-webkit-box-shadow:none;box-shadow:none}}@media screen and (max-width:1280px){body#investor section.section-competetive .row-item{-webkit-box-orient:vertical;-webkit-box-direction:normal;-webkit-flex-direction:column;-ms-flex-direction:column;flex-direction:column;padding:0;max-width:600px;margin:0 10px 30px}}@media screen and (max-width:700px){body#investor section.section-competetive .row-item{margin-bottom:10px}}@media screen and (max-width:1280px){body#investor section.section-competetive .columns{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-align:center;-webkit-align-items:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-webkit-justify-content:center;-ms-flex-pack:center;justify-content:center;-webkit-box-orient:vertical;-webkit-box-direction:normal;-webkit-flex-direction:column;-ms-flex-direction:column;flex-direction:column}}body#investor section.section-competetive figure.image-item{margin:0}@media screen and (min-width:1280px){body#investor section.section-competetive figure.image-item{min-height:290px;padding:20px 0}}@media screen and (max-width:1280px){body#investor section.section-competetive figure.image-item{max-width:100%}}body#investor section.section-competetive figure.image-item img{-o-object-fit:contain;object-fit:contain;-o-object-position:center;object-position:center;border-radius:10px}body#investor section.section-competetive .context{margin-right:auto;width:100%;padding:30px 90px 30px 0}@media screen and (max-width:1280px){body#investor section.section-competetive .context{padding:10px 20px 10px 30px}}@media screen and (max-width:1280px){body#investor section.section-competetive .context p{display:none}}body#investor section.section-competetive .image-block{margin:0;max-width:460px;border-radius:10px 0;overflow:hidden;width:100%}@media screen and (max-width:1280px){body#investor section.section-competetive .image-block{max-height:0;overflow:hidden}}body#investor section.section-competetive .image-block p{display:none;margin:20px 0 0}@media screen and (max-width:1280px){body#investor section.section-competetive .image-block p{display:block;padding:0 20px}}body#investor section.section-competetive header.title{max-width:700px;margin:0 0 60px}@media screen and (max-width:1280px){body#investor section.section-competetive header.title{max-width:720px;margin:0 auto 30px;padding:0 20px}}body#investor section.section-competetive .container{max-width:1320px;margin:0 auto}body#investor section.quickfill-section{padding:60px 0}@media screen and (max-width:700px){body#investor section.quickfill-section{padding:0}}body#investor section.quickfill-section header.title{max-width:700px}body#investor section.quickfill-section header.title h2.sec-title{margin-bottom:7px;font-size:3.2rem;letter-spacing:-2px;font-weight:700;font-weight:400}@media screen and (max-width:700px){body#investor section.quickfill-section header.title h2.sec-title{font-size:2rem}}body#investor section.quickfill-section header.title strong{color:#0e88d0}body#investor section.quickfill-section header.title p{color:#000;font-size:1.2rem;line-height:1.4;font-weight:400;letter-spacing:0;margin-bottom:30px}@media screen and (max-width:700px){body#investor section.quickfill-section header.title p{font-size:1.063rem}}body#investor section.quickfill-section .container{padding:0 20px;border-radius:10px;max-width:1320px}@media screen and (max-width:1280px){body#investor section.quickfill-section .container{padding:1rem}}body#investor section.quickfill-section .container>.content{margin:0 auto}@media screen and (max-width:700px){body#investor section.quickfill-section .container>.content{padding:20px 0}}body#investor section.quickfill-section .columns{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;margin:0 auto}@media screen and (max-width:700px){body#investor section.quickfill-section .columns{-webkit-box-orient:vertical;-webkit-box-direction:normal;-webkit-flex-direction:column;-ms-flex-direction:column;flex-direction:column}}body#investor section.quickfill-section .column.side{width:50%;padding:0;min-width:280px;max-width:500px;margin:30px 0 0}@media screen and (max-width:700px){body#investor section.quickfill-section .column.side{width:100%;min-width:0}}body#investor section.quickfill-section .column.side>h3{margin-top:20px}body#investor section.quickfill-section ul.list{padding:0;margin:0;list-style:none}body#investor section.quickfill-section ul.list li{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;-webkit-box-shadow:1px 1px 40px 0 rgba(0,0,0,.05);box-shadow:1px 1px 40px 0 rgba(0,0,0,.05);border-radius:10px;margin:10px 0;display:flex;-webkit-box-align:center;-webkit-align-items:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:start;-webkit-justify-content:flex-start;-ms-flex-pack:start;justify-content:flex-start;padding:5px 0 5px 20px;background:#fff}body#investor section.quickfill-section ul.list li span.text{padding:0 20px}body#investor section.quickfill-section ul.list li figure{margin:0}body#investor section.quickfill-section ul.list li figure img{width:70px}body#investor section.quickfill-section .patents{margin:40px 0 0}body#investor section.quickfill-section .patents ul{margin:0;padding:20px 20px 20px 40px;border-radius:10px;background-color:#038ed8;line-height:20px;text-decoration:none;text-transform:none;font-weight:800;letter-spacing:.01rem;background-image:-webkit-gradient(linear,left top,left bottom,from(hsla(0,0%,100%,.1)),to(rgba(0,0,0,.1)));background-image:linear-gradient(-180deg,hsla(0,0%,100%,.1),rgba(0,0,0,.1))}body#investor section.quickfill-section .patents ul li{color:#fff;font-size:.8rem;line-height:1.4;margin:10px 0}body#investor section.review-block{margin:90px 0}@media screen and (max-width:700px){body#investor section.review-block{margin-bottom:30px}}body#investor section.review-block header.title{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-webkit-flex-direction:column;-ms-flex-direction:column;flex-direction:column;-webkit-box-align:center;-webkit-align-items:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-webkit-justify-content:center;-ms-flex-pack:center;justify-content:center;padding:0 20px}body#investor section.review-block .number{font-weight:800;font-size:3.6rem;color:#0888cc;width:auto;min-width:80px;line-height:1}@media screen and (max-width:700px){body#investor section.review-block .number{font-size:2.5rem;min-width:60px}}body#investor section.review-block .review-item blockquote{padding:0;margin:0}body#investor section.review-block .review-item blockquote span.text{font-size:1rem;line-height:1.4;background:#0988d0;display:block;padding:30px;color:#fff;position:relative;margin-bottom:30px;border-radius:5px;background-image:-webkit-gradient(linear,left top,left bottom,from(hsla(0,0%,100%,.1)),to(rgba(0,0,0,.1)));background-image:linear-gradient(-180deg,hsla(0,0%,100%,.1),rgba(0,0,0,.1))}body#investor section.review-block .review-item blockquote span.text:after{content:close-quote;position:absolute;left:30px;top:100%;border:15px solid hsla(0,0%,100%,0);border-top-color:#127bbc}body#investor section.review-block .star-rating{-webkit-box-orient:vertical;-webkit-box-direction:normal;-webkit-flex-direction:column;-ms-flex-direction:column;flex-direction:column}@media screen and (max-width:700px){body#investor section.review-block .star-rating{margin:30px 0 0}}body#investor section.review-block .star-rating .stars{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-align:center;-webkit-align-items:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-webkit-justify-content:center;-ms-flex-pack:center;justify-content:center;margin:8px 0 0}body#investor section.review-block .star-rating .stars img{min-width:180px}@media screen and (max-width:700px){body#investor section.review-block .star-rating .stars{-webkit-box-orient:vertical;-webkit-box-direction:normal;-webkit-flex-direction:column;-ms-flex-direction:column;flex-direction:column}}body#investor section.review-block .swiper-wrapper{-webkit-box-align:center;-webkit-align-items:center;-ms-flex-align:center;align-items:center}body#investor section.review-block .star-rating .star,body#investor section.review-block .swiper-wrapper{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex}@media screen and (max-width:700px){body#investor section.review-block .star-rating .star{margin:0 0 20px}}body#investor section.review-block .star-rating .title{font-weight:700;text-align:center;font-size:1.9rem;line-height:1;margin:60px 0 10px}@media screen and (max-width:700px){body#investor section.review-block .star-rating .title{font-size:1rem}}body#investor section.review-block .star-rating .stars .text{margin-left:20px;font-size:1rem;font-weight:700;line-height:1}@media screen and (max-width:700px){body#investor section.review-block .star-rating .stars .text{margin-left:0}}body#investor section.review-block header.title{margin:0 auto 80px;max-width:720px;text-align:center}@media screen and (max-width:1280px){body#investor section.review-block header.title{margin-bottom:30px}}body#investor section.review-block header.title h2.title{margin:0 0 7px;font-size:3.2rem;letter-spacing:-2px;font-weight:700;font-weight:400}@media screen and (max-width:700px){body#investor section.review-block header.title h2.title{font-size:2rem}}body#investor section.review-block header.title p{margin:0;color:#000;font-size:1.2rem;line-height:1.4;font-weight:400;letter-spacing:0}@media screen and (max-width:700px){body#investor section.review-block header.title p{font-size:1.063rem}}body#investor section.review-block header.title h2.title strong{color:#0687d1}body#investor section.review-block .promote-scores blockquote figure.image{position:relative;margin:0;padding:0;border-radius:50%;overflow:hidden;width:100px;height:100px;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-align:center;-webkit-align-items:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-webkit-justify-content:center;-ms-flex-pack:center;justify-content:center}@media screen and (max-width:700px){body#investor section.review-block .promote-scores blockquote figure.image{width:70px;height:70px}}body#investor section.review-block .container-11{width:100%;max-width:1280px;margin:30px auto 0}body#investor section.review-block cite{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex}body#investor section.review-block .promote-scores blockquote figure.image img{height:100%;width:100%;-o-object-fit:cover;object-fit:cover;-o-object-position:center;object-position:center}body#investor section.review-block .promote-scores blockquote .text-block{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-align:start;-webkit-align-items:flex-start;-ms-flex-align:start;align-items:flex-start;-webkit-box-pack:center;-webkit-justify-content:center;-ms-flex-pack:center;justify-content:center;-webkit-box-orient:vertical;-webkit-box-direction:normal;-webkit-flex-direction:column;-ms-flex-direction:column;flex-direction:column;padding-left:30px}body#investor section.review-block cite .name{font-weight:700;font-size:1rem;line-height:1.4}body#investor section.review-block cite{font-style:normal}body#investor section.review-block cite .title{font-size:.8rem;line-height:1.4}body#investor section.review-block h3{line-height:1;font-weight:700}@media screen and (max-width:700px){body#investor section.review-block h3{font-size:1.4rem}}body#investor section.review-block h3 strong{color:#d01337}body#investor section.review-block cite .handle{line-height:1.4;font-size:.8rem}body#investor section.review-block .review-item{padding-left:60px;padding-top:50px}body#investor section.review-block .promote-scores{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;padding:0 20px}@media screen and (max-width:1280px){body#investor section.review-block .promote-scores{-webkit-box-orient:vertical;-webkit-box-direction:normal;-webkit-flex-direction:column;-ms-flex-direction:column;flex-direction:column;-webkit-box-align:center;-webkit-align-items:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-webkit-justify-content:center;-ms-flex-pack:center;justify-content:center}}body#investor section.review-block .promote-scores .review-item{width:50%}@media screen and (max-width:1280px){body#investor section.review-block .promote-scores .review-item{width:auto;padding:30px 0;max-width:540px}}body#investor section.review-block .promote-scores .score-item{width:100%;max-width:540px;margin-right:auto}@media screen and (max-width:1280px){body#investor section.review-block .promote-scores .score-item{margin:30px auto}}body#investor section.review-block .promote-scores .main-content{margin:0;-webkit-flex-wrap:nowrap;-ms-flex-wrap:nowrap;flex-wrap:nowrap;-webkit-box-shadow:1px 1px 40px 0 rgba(0,0,0,.05);box-shadow:1px 1px 40px 0 rgba(0,0,0,.05);padding:40px 20px;border-radius:5px;position:relative}@media screen and (max-width:1280px){body#investor section.review-block .promote-scores .main-content{-webkit-box-orient:horizontal;-webkit-box-direction:normal;-webkit-flex-direction:row;-ms-flex-direction:row;flex-direction:row}}body#investor section.review-block .promote-scores .main-content:after{content:close-quote;position:absolute;top:20px;left:20px;width:50px;height:50px;background:#fdf4f3;border-radius:5px;z-index:-1}body#investor section.review-block .promote-scores .main-content:before{content:close-quote;position:absolute;top:50px;left:60px;width:110px;height:100px;background:#f7fafd;border-radius:5px;z-index:-1}body#investor section.review-block .promote-scores .star-rating{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex}body#investor section.review-block .promote-scores blockquote{color:#000;border:none}body#investor span.patents-block{position:relative;display:block;width:100%}body#investor span.patents-block h3.title{position:absolute;top:-50%;-webkit-transform:translate(40px,-50%);transform:translate(40px,-50%);font-size:1rem;background:#d54439;border-radius:5px;color:#fff;padding:5px 10px}body#investor section.growth-section{padding:120px 0}@media screen and (max-width:1280px){body#investor section.growth-section{padding:60px 0}}body#investor section.growth-section .block{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;padding:60px 0}@media screen and (max-width:1280px){body#investor section.growth-section .block{-webkit-box-orient:vertical;-webkit-box-direction:normal;-webkit-flex-direction:column;-ms-flex-direction:column;flex-direction:column;-webkit-box-align:center;-webkit-align-items:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-webkit-justify-content:center;-ms-flex-pack:center;justify-content:center;padding:60px 20px}}body#investor section.growth-section figure.image{position:relative;width:50%;left:0;margin:0;top:0}@media screen and (max-width:1280px){body#investor section.growth-section figure.image{width:auto}}body#investor section.growth-section figure.image img{width:100%;left:175px;top:1217px;border-radius:20px;-o-object-fit:cover;object-fit:cover;-o-object-position:center;object-position:center}@media screen and (min-width:1280px){body#investor section.growth-section figure.image img{min-height:410px}}@media screen and (max-width:1280px){body#investor section.growth-section .text-content{text-align:center}}@media screen and (min-width:1280px){body#investor section.growth-section .block.reverse{-webkit-box-pack:start;-webkit-justify-content:flex-start;-ms-flex-pack:start;justify-content:flex-start;-webkit-box-orient:horizontal;-webkit-box-direction:reverse;-webkit-flex-direction:row-reverse;-ms-flex-direction:row-reverse;flex-direction:row-reverse}}body#investor section.growth-section header.title{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-webkit-justify-content:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:center;-webkit-align-items:center;-ms-flex-align:center;align-items:center;-webkit-box-orient:vertical;-webkit-box-direction:normal;-webkit-flex-direction:column;-ms-flex-direction:column;flex-direction:column}@media screen and (min-width:1280px){body#investor section.growth-section header.title{margin:0 0 30px}}body#investor section.growth-section .block .text{padding:0;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-align:start;-webkit-align-items:flex-start;-ms-flex-align:start;align-items:flex-start;-webkit-box-orient:vertical;-webkit-box-direction:normal;-webkit-flex-direction:column;-ms-flex-direction:column;flex-direction:column;-webkit-box-pack:center;-webkit-justify-content:center;-ms-flex-pack:center;justify-content:center;max-width:300px;margin:0 auto}@media screen and (max-width:1280px){body#investor section.growth-section .block .text{max-width:500px;margin:30px auto 0;-webkit-box-align:center;-webkit-align-items:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-webkit-justify-content:center;-ms-flex-pack:center;justify-content:center}}body#investor section.growth-section .block .text .number span{font-size:3rem;font-weight:700;background:#fff;-webkit-box-shadow:0 4px 19px rgba(231,51,46,.18);box-shadow:0 4px 19px rgba(231,51,46,.18);border-radius:10px;width:84px;height:84px;display:-webkit-inline-box;display:-webkit-inline-flex;display:-ms-inline-flexbox;display:inline-flex;-webkit-box-align:center;-webkit-align-items:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-webkit-justify-content:center;-ms-flex-pack:center;justify-content:center;color:#e7332e}body#investor section.growth-section .block .text .number{margin:0 0 20px}body#investor section.growth-section .text-content h3.title{font-weight:700;font-size:24px;line-height:29px;letter-spacing:-.04em;color:#000}body#investor section.growth-section .text-content p{margin:0;font-style:normal;font-weight:400;font-size:18px;color:#000;line-height:149%}body#investor section.growth-section h2.title{margin:0 0 20px;font-size:48px;line-height:58px;text-align:center;letter-spacing:-.04em;font-weight:100}@media screen and (max-width:1280px){body#investor section.growth-section h2.title{font-size:2rem}}body#investor section.popupform,section.popupform{position:fixed;bottom:20px;right:40px;background:#fafdff;z-index:14123;border-radius:20px;background-position:top;background-size:cover;display:none;padding:40px;border-radius:15px;-webkit-box-shadow:0 5px 10px 0 rgba(0,0,0,.2);box-shadow:0 5px 10px 0 rgba(0,0,0,.2);margin:0;max-width:600px}@media screen and (max-width:700px){body#investor section.popupform,section.popupform{padding:20px 10px 10px;border-radius:5px;-webkit-box-shadow:-7px 0 23px -12px #000;box-shadow:-7px 0 23px -12px #000;margin:0 5px 5px;right:10px;left:10px;bottom:0}}body#investor section.popupform h2.title,section.popupform h2.title{font-size:1.7rem;margin-top:0;margin-bottom:10px;color:#274c8d;font-size:2rem;line-height:1;font-weight:700;max-width:350px}@media screen and (max-width:700px){body#investor section.popupform h2.title,section.popupform h2.title{font-size:1.5rem;font-weight:bolder;letter-spacing:0;max-width:100%;max-width:350px;margin:0 auto 10px;text-align:center}}@media screen and (max-width:400px){body#investor section.popupform h2.title,section.popupform h2.title{font-size:1.6rem}}body#investor section.popupform svg,section.popupform svg{width:12px;height:12px;fill:#000}body#investor section.popupform p,section.popupform p{color:#6f6f6f;line-height:1.6}@media screen and (max-width:700px){body#investor section.popupform p,section.popupform p{text-align:center}}body#investor section.popupform .closebutton,section.popupform .closebutton{position:absolute;top:-15px;left:-5px;width:30px;height:30px;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-align:center;-webkit-align-items:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-webkit-justify-content:center;-ms-flex-pack:center;justify-content:center;font-weight:700;cursor:pointer;background:#fff;border-radius:50%;-webkit-box-shadow:0 0 7px 1px rgba(0,0,0,.14);box-shadow:0 0 7px 1px rgba(0,0,0,.14)}body#investor section.popupform .closebutton:hover,section.popupform .closebutton:hover{opacity:.3}body#investor section.popupform label,section.popupform label{width:1px;height:1px;overflow:hidden;position:absolute;top:0;left:-9999px}body#investor section.popupform form,section.popupform form{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;border-radius:30px}@media screen and (min-width:700px){body#investor section.popupform form,section.popupform form{-webkit-box-shadow:0 5px 20px -5px rgba(0,0,0,.19);box-shadow:0 5px 20px -5px rgba(0,0,0,.19);background:#fff;padding:10px 10px 10px 20px;margin:20px 0 0}}@media screen and (max-width:700px){body#investor section.popupform form,section.popupform form{-webkit-box-orient:vertical;-webkit-box-direction:normal;-webkit-flex-direction:column;-ms-flex-direction:column;flex-direction:column;-webkit-box-align:center;-webkit-align-items:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-webkit-justify-content:center;-ms-flex-pack:center;justify-content:center;text-align:center;background:transparent;border:none}}body#investor section.popupform form input,section.popupform form input{background:#fff;border:none;border-radius:0;-webkit-box-shadow:none;box-shadow:none;margin:0}@media screen and (max-width:700px){body#investor section.popupform form input,section.popupform form input{border-radius:30px;text-align:center;padding:15px 10px;height:auto;font-size:16px;-webkit-box-shadow:0 5px 30px -5px rgba(0,0,0,.19);box-shadow:0 5px 30px -5px rgba(0,0,0,.19);background:#fff}}body#investor section.popupform form input.hs-button.primary.large,section.popupform form input.hs-button.primary.large{margin:0;border-radius:40px;min-width:0;width:auto;display:-webkit-inline-box;display:-webkit-inline-flex;display:-ms-inline-flexbox;display:inline-flex;text-transform:uppercase;-webkit-box-shadow:none;box-shadow:none;background:#d54439;padding:15px 30px;min-width:210px;text-align:center;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-align:center;-webkit-align-items:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-webkit-justify-content:center;-ms-flex-pack:center;justify-content:center}@media screen and (max-width:700px){body#investor section.popupform form input.hs-button.primary.large,section.popupform form input.hs-button.primary.large{margin:10px auto 0;display:block;font-size:14px;width:100%}}body#investor section.popupform form .hs_submit.hs-submit,section.popupform form .hs_submit.hs-submit{margin:0 0 0 auto}@media screen and (max-width:700px){body#investor section.popupform form .hs_submit.hs-submit,section.popupform form .hs_submit.hs-submit{margin:0 auto}}@media screen and (max-width:700px){body#investor section.popupform .actions,section.popupform .actions{display:block;width:100%}}body#investor section.popupform form .hs_email.hs-email,section.popupform form .hs_email.hs-email{margin-right:auto}@media screen and (max-width:700px){body#investor section.popupform form .hs_email.hs-email,section.popupform form .hs_email.hs-email{margin:0 auto;width:100%}}@media screen and (max-width:1280px){footer.main-footer .block .social{-webkit-box-pack:center;-webkit-justify-content:center;-ms-flex-pack:center;margin:0 0 30px;justify-content:center;-webkit-box-orient:vertical;-webkit-box-direction:normal;-webkit-flex-direction:column;-ms-flex-direction:column;flex-direction:column}}body{font-family:Nunito Sans,sans-serif;letter-spacing:0}body h1,body h2,body h3{font-family:Nunito,sans-serif;font-weight:700}body h1{line-height:1.2;margin:0 0 20px;font-size:3.4vw}@media screen and (max-width:1280px){body h1{font-size:2.425rem}}@media screen and (max-width:1000px){body h1{font-size:2.6rem}}@media screen and (max-width:700px){body h1{font-size:7vw}}@media screen and (max-width:400px){body h1{font-size:30px}}.container{max-width:1200px;padding:0 20px;margin:0 auto}@media screen and (max-width:1400px){.container{max-width:1200px}}@media screen and (max-width:700px){.container{padding:0 10px}}.container.fluid{max-width:100%}h2.title{font-size:36px}@media screen and (min-width:1000px){h2.title{font-size:2.8vw}}@media screen and (max-width:700px){h2.title{font-size:28px}}body{word-break:break-word}@media screen and (min-width:700px){body:before{content:close-quote;position:absolute;top:0;left:0;right:0;height:120vh;background-position:0;background-size:auto 100%;z-index:-1;background-repeat:no-repeat}}.main-content{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-flex-wrap:wrap;-ms-flex-wrap:wrap;flex-wrap:wrap;margin:100px 0 0}@media screen and (max-width:1280px){.main-content{-webkit-box-orient:vertical;-webkit-box-direction:normal;-webkit-flex-direction:column;-ms-flex-direction:column;flex-direction:column;margin:170px 0 0}}*,:after,:before{-webkit-box-sizing:border-box;box-sizing:border-box}input.hs-button.primary.large{-webkit-font-smoothing:antialiased;background-color:#038ed8;text-decoration:none;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;letter-spacing:1px;font-weight:600;display:inline-block;vertical-align:middle;padding:15px 40px;border:1px solid transparent;-webkit-transition:all .25s ease-out,color .25s ease-out;transition:all .25s ease-out,color .25s ease-out;font-family:inherit;line-height:1;text-align:center;cursor:pointer;background-color:#33a532;color:#fff;font-size:14px;text-transform:capitalize;border-radius:30px;margin:10px;-webkit-box-shadow:0 5px 5px 0 rgba(0,0,0,.15);box-shadow:0 5px 5px 0 rgba(0,0,0,.15);min-width:200px;-webkit-appearance:none}input[type=email]{font-size:16px}[type=email]{border-radius:5px}.hs_email label{display:initial}.hs_submit.hs-submit{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-align:center;-webkit-align-items:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-webkit-justify-content:center;-ms-flex-pack:center;justify-content:center;margin:0 0 30px}[type=email]{display:block;-webkit-box-sizing:border-box;box-sizing:border-box;width:100%;height:2.4375rem;margin:0 0 1rem;padding:.5rem;border:1px solid #cacaca;border-radius:0;background-color:#fff;-webkit-box-shadow:inset 0 1px 2px rgba(25,45,62,.1);box-shadow:inset 0 1px 2px rgba(25,45,62,.1);font-family:inherit;font-size:1rem;font-weight:400;line-height:1.5;color:#192d3e;-webkit-transition:border-color .25s ease-in-out,-webkit-box-shadow .5s;transition:border-color .25s ease-in-out,-webkit-box-shadow .5s;transition:box-shadow .5s,border-color .25s ease-in-out;transition:box-shadow .5s,border-color .25s ease-in-out,-webkit-box-shadow .5s;-webkit-appearance:none;-moz-appearance:none;appearance:none}[type=email]{border-radius:5px}.p-sub.p-short.p-margin{width:auto;margin-bottom:25px;padding-bottom:7px;padding-left:5px;background-image:url(https://nowrx.com/wp-content/themes/nowrx-live/library/images/5e7e6b8%E2%80%A6_dot.svg);background-position:12px 0}footer.main-footer{background:#122d3f;color:#fff;padding:90px 9vw 30px;font-family:Nunito Sans,sans-serif;letter-spacing:0}@media screen and (max-width:1280px){footer.main-footer{padding:90px 0 30px}}@media screen and (max-width:700px){footer.main-footer{padding:40px 20px}}footer.main-footer .container{padding:0;margin:0 auto}footer.main-footer .blocks{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex}@media screen and (max-width:1280px){footer.main-footer .blocks{-webkit-box-orient:vertical;-webkit-box-direction:normal;-webkit-flex-direction:column;-ms-flex-direction:column;flex-direction:column;-webkit-box-align:center;-webkit-align-items:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-webkit-justify-content:center;-ms-flex-pack:center;justify-content:center}}@media screen and (max-width:700px){footer.main-footer .blocks{-webkit-box-orient:vertical;-webkit-box-direction:normal;-webkit-flex-direction:column;-ms-flex-direction:column;flex-direction:column}}footer.main-footer .social-icons,footer.main-footer .social-icons a{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex}footer.main-footer .social-icons a{color:#8b899d;position:relative;-webkit-transition:all .6s;transition:all .6s}footer.main-footer .social-icons a:after{content:"";position:absolute;top:calc(100% + 3px);width:0;left:0;-webkit-transform:translate(0);transform:translate(0);height:1px;background:#8b899d;border-radius:3px;margin:0 auto;right:0;-webkit-transition:all .6s;transition:all .6s}footer.main-footer .social-icons a:hover{color:#8b899d}footer.main-footer .social-icons a:hover:after{width:100%}footer.main-footer .block.right{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;width:40%;-webkit-box-align:center;-webkit-align-items:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-webkit-justify-content:center;-ms-flex-pack:center;justify-content:center}@media screen and (max-width:1280px){footer.main-footer .block.right{width:100%}}@media screen and (max-width:700px){footer.main-footer .block.right{width:100%;margin:30px 0 0;-webkit-box-pack:start;-webkit-justify-content:flex-start;-ms-flex-pack:start;justify-content:flex-start}}footer.main-footer .block.right ul.menu-items{margin:0;padding:0;width:50%;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-webkit-flex-direction:column;-ms-flex-direction:column;flex-direction:column;-webkit-box-align:center;-webkit-align-items:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-webkit-justify-content:center;-ms-flex-pack:center;justify-content:center}@media screen and (max-width:700px){footer.main-footer .block.right ul.menu-items{-webkit-box-align:center;-webkit-align-items:center;-ms-flex-align:center;align-items:center}}footer.main-footer .block.right ul.menu-items li{list-style:none}footer.main-footer .block.right ul.menu-items li a{color:#fbfbfb;line-height:1;margin:15px 0;display:-webkit-inline-box;display:-webkit-inline-flex;display:-ms-inline-flexbox;display:inline-flex;font-size:1.2rem;line-height:1.2;position:relative;-webkit-transition:all .6s;transition:all .6s}@media screen and (max-width:700px){footer.main-footer .block.right ul.menu-items li a{font-size:.8rem}}footer.main-footer .block.right ul.menu-items li a:after{content:"";position:absolute;top:calc(100% + 3px);width:0;left:0;-webkit-transform:translate(0);transform:translate(0);height:1px;background:#8b899d;border-radius:3px;margin:0 auto;right:0;-webkit-transition:all .6s;transition:all .6s}footer.main-footer .block.right ul.menu-items li a:hover{color:#8b899d}footer.main-footer .block.right ul.menu-items li a:hover:after{width:100%}footer.main-footer .block.left{width:60%}@media screen and (max-width:1280px){footer.main-footer .block.left{width:100%;max-width:600px}}footer.main-footer .block.left span.line{margin:0 0 50px;display:-webkit-inline-box;display:-webkit-inline-flex;display:-ms-inline-flexbox;display:inline-flex;font-weight:700;line-height:1.15;font-size:2.3rem;max-width:690px;letter-spacing:-.1rem}@media screen and (max-width:700px){footer.main-footer .block.left span.line{font-size:2rem;margin-bottom:20px;text-align:center;font-size:1.7rem}}footer.main-footer .block.left .icon{width:40px;height:40px;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-align:center;-webkit-align-items:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-webkit-justify-content:center;-ms-flex-pack:center;justify-content:center}footer.main-footer .block.left .icon svg{width:20px;height:20px}footer.main-footer .block .social{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-align:center;-webkit-align-items:center;-ms-flex-align:center;align-items:center}@media screen and (max-width:1280px){footer.main-footer .block .social{-webkit-box-pack:center;-webkit-justify-content:center;-ms-flex-pack:center;margin:0 0 30px;justify-content:center;-webkit-box-orient:vertical;-webkit-box-direction:normal;-webkit-flex-direction:column;-ms-flex-direction:column;flex-direction:column}}footer.main-footer .block .social .text{color:#8b899d}@media screen and (min-width:1280px){footer.main-footer .block .social .text{margin-right:20px}}footer.main-footer .u-list{width:100%;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-align:center;-webkit-align-items:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-webkit-justify-content:center;-ms-flex-pack:center;justify-content:center;max-width:380px;margin-left:auto}@media screen and (max-width:1280px){footer.main-footer .u-list{max-width:580px;margin:0 auto}}@media screen and (max-width:700px){footer.main-footer .u-list{margin:0}}footer.main-footer .footer-rect{margin:60px 0 0;padding:30px 0 0;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;border-top:1px solid #254256}@media screen and (max-width:700px){footer.main-footer .footer-rect{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:reverse;-webkit-flex-direction:column-reverse;-ms-flex-direction:column-reverse;flex-direction:column-reverse;-webkit-box-pack:end;-webkit-justify-content:flex-end;-ms-flex-pack:end;justify-content:flex-end}}footer.main-footer .footer-rect .copright{width:60%;color:#8b899d;font-size:.8rem;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-align:center;-webkit-align-items:center;-ms-flex-align:center;align-items:center}@media screen and (max-width:700px){footer.main-footer .footer-rect .copright{width:100%;-webkit-box-pack:center;-webkit-justify-content:center;-ms-flex-pack:center;justify-content:center}}footer.main-footer .footer-rect .app{width:40%;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-align:center;-webkit-align-items:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:end;-webkit-justify-content:flex-end;-ms-flex-pack:end;justify-content:flex-end}@media screen and (max-width:700px){footer.main-footer .footer-rect .app{width:100%;-webkit-box-pack:center;-webkit-justify-content:center;-ms-flex-pack:center;justify-content:center;margin-bottom:20px}}footer.main-footer .footer-rect .app .icon{width:140px;height:auto;margin:0 0 0 20px}@media screen and (max-width:700px){footer.main-footer .footer-rect .app .icon{margin:0 20px 0 0}}footer.main-footer .footer-rect .app .icon img{width:100%;height:auto;-o-object-fit:contain;object-fit:contain}
     </style>

    <!-- WP HEAD -->
    <?php wp_head(); ?>



    <?php
        // include modals
        get_template_part('components/investscripts');
    ?>

        <script>
            !function (w, d, t) {
            w.TiktokAnalyticsObject=t;var ttq=w[t]=w[t]||[];ttq.methods=["page","track","identify","instances","debug","on","off","once","ready","alias","group","enableCookie","disableCookie"],ttq.setAndDefer=function(t,e){t[e]=function(){t.push([e].concat(Array.prototype.slice.call(arguments,0)))}};for(var i=0;i<ttq.methods.length;i++)ttq.setAndDefer(ttq,ttq.methods[i]);ttq.instance=function(t){for(var e=ttq._i[t]||[],n=0;n<ttq.methods.length;n++)ttq.setAndDefer(e,ttq.methods[n]);return e},ttq.load=function(e,n){var i="https://analytics.tiktok.com/i18n/pixel/events.js";ttq._i=ttq._i||{},ttq._i[e]=[],ttq._i[e]._u=i,ttq._t=ttq._t||{},ttq._t[e]=+new Date,ttq._o=ttq._o||{},ttq._o[e]=n||{};var o=document.createElement("script");o.type="text/javascript",o.async=!0,o.src=i+"?sdkid="+e+"&lib="+t;var a=document.getElementsByTagName("script")[0];a.parentNode.insertBefore(o,a)};
            ttq.load('C7S8A2DGL1ARI64QOCJ0');
            ttq.page();
            }(window, document, 'ttq');
        </script>

    <script>
        !function(w,d){if(!w.rdt){var p=w.rdt=function(){p.sendEvent?p.sendEvent.apply(p,arguments):p.callQueue.push(arguments)};p.callQueue=[];var t=d.createElement("script");t.src="https://www.redditstatic.com/ads/pixel.js",t.async=!0;var s=d.getElementsByTagName("script")[0];s.parentNode.insertBefore(t,s)}}(window,document);rdt('init','t2_4ewc263l');rdt('track', 'PageVisit');
    </script>

    <!-- Twitter universal website tag code -->
        <script>
        !function(e,t,n,s,u,a){e.twq||(s=e.twq=function(){s.exe?s.exe.apply(s,arguments):s.queue.push(arguments);
        },s.version='1.1',s.queue=[],u=t.createElement(n),u.async=!0,u.src='//static.ads-twitter.com/uwt.js',
        a=t.getElementsByTagName(n)[0],a.parentNode.insertBefore(u,a))}(window,document,'script');
        // Insert Twitter Pixel ID and Standard Event data below
        twq('init','o8fgz');
        twq('track','PageView');
        </script>
    <!-- End Twitter universal website tag code -->

</head>

<body <?php body_class(); ?> id="investor">

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5LWZKR7"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <header class="main investorhead" role="banner" itemscope itemtype="http://schema.org/WPHeader">
        <div class="psedo"></div>

        <div class="container">
            <div class="content">
                <div class="rlcontainer">
                    <div class="responsive-bar">
                        <a class="menu-icon-toggle" href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/menu.svg" alt="menu toggle">
                            <div class="txt">Menu</div>
                        </a>
                    </div>
                    <div class="linksmsall">
                        <a href="https://www.seedinvest.com/nowrx/series.c" magic-link="invest-button" target="_blank" class="button button-nav buy-now w-button">
                            INVEST NOW
                        </a>
                    </div>
                    <!-- logo -->
                    <div class="logo-block">
                        <a class="main-nav-logo" href="<?php echo get_site_url(); ?>/" title="Pharmacy delivery in hours. Just pay your normal copay.">
                            <figure class="sk">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/best-investment-tech-nowrx-logo.webp" class="orbit-image " alt="NowRx Pharmacy Delivery Logo" height="60px" width="150px">
                            </figure>
                        </a>
                    </div>
                </div>
                <!-- nav -->
                <nav class="top">
                    <ul class="nav" itemscope itemtype="http://www.schema.org/SiteNavigationElement">

                        <li itemprop="name">
                            <a itemprop="url" href="#highlights" title="See what customers are saying about NowRx Pharmacy.">
                                <div class="tk">
                                    Highlights
                                    <span class="sub">
                                        Highlights for NowRx investors
                                    </span>
                                </div>
                            </a>
                        </li>

                        <li itemprop="name">
                            <a itemprop="url" href="#how-it-works">
                                <div class="tk">
                                    How it Works
                                    <span class="sub">
                                        How NowRx works for customers
                                    </span>
                                </div>
                            </a>
                        </li>
                        <li itemprop="name">
                            <a itemprop="url" href="#competetitive-advantage">
                                <div class="tk">
                                Competitive Advantage
                                    <span class="sub">
                                    What makes NowRx different
                                    </span>
                                </div>
                            </a>
                        </li>
                        <li itemprop="name">
                            <a itemprop="url" href="#testimonials">
                                <div class="tk">
                                Testimonials
                                    <span class="sub">
                                    Real patient & doctor reviews
                                    </span>
                                </div>
                            </a>
                        </li>
                        <li itemprop="name">
                            <a href="https://www.seedinvest.com/nowrx/series.c"  magic-link="invest-button" target="_blank" class="button button-nav buy-now w-button">
                                INVEST NOW
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>


    <?php


function number_format_short( $n, $precision = 1 ) {
	if ($n < 900) {
		// 0 - 900
		$n_format = number_format($n, $precision);
		$suffix = '';
	} else if ($n < 900000) {
		// 0.9k-850k
		$n_format = number_format($n / 1000, $precision);
		$suffix = 'K';
	} else if ($n < 900000000) {
		// 0.9m-850m
		$n_format = number_format($n / 1000000, $precision);
		$suffix = 'M';
	} else if ($n < 900000000000) {
		// 0.9b-850b
		$n_format = number_format($n / 1000000000, $precision);
		$suffix = 'B';
	} else {
		// 0.9t+
		$n_format = number_format($n / 1000000000000, $precision);
		$suffix = 'T';
	}

  // Remove unecessary zeroes after decimal. "1.0" -> "1"; "1.00" -> "1"
  // Intentionally does not affect partials, eg "1.50" -> "1.50"
	if ( $precision > 0 ) {
		$dotzero = '.' . str_repeat( '0', $precision );
		$n_format = str_replace( $dotzero, '', $n_format );
	}

	return $n_format . $suffix;
}
$curl = curl_init('https://www.seedinvest.com/nowrx/series.c');
curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);

$page = curl_exec($curl);

if(curl_errno($curl)) // check for execution errors
{
echo 'Scraper error: ' . curl_error($curl);
exit;
}

curl_close($curl);





$regex = '/<span class="primary-count">(.*?)<\/span>/s';

if ( preg_match_all($regex, $page, $list) ){
    $itemTotal = $list[0][0];
    $itemUsers = $list[0][1];
}

$numConvert = str_replace("$",'', $itemTotal);


$int = (int) filter_var($numConvert, FILTER_SANITIZE_NUMBER_INT);

$flo = (float)$int;


// echo number_format_short(abs($flo));
?>

<?php
$enddate = strtotime("2022-05-21 8:00:00+0400"); // or whenever the enddate is
$secondsLeft = $enddate - time();

// $enddatettest = strtotime("2022-04-19 10:7:00-0700"); // or whenever the enddatettest is
// $secondsLeftte = $enddatettest - time();




$days = floor($secondsLeft / (60*60*24)); // here the brackets
$hours = floor(($secondsLeft - ($days*60*60*24)) / (60*60)); // and here too
$m = floor(($secondsLeft%3600)/60);

?>

    <main>
        <article>
        <div class="stl <?php if($secondsLeft < 0){ echo 'done';} ?>">
                    <!-- *NowRx has already raised over <strong>$<?php echo number_format_short(abs($flo)); ?></strong> from more than <strong><?php echo $itemUsers; ?></strong> investors in this round! -->


    <strong>Time Left to Invest: <div class="countdown pt-4" id="time"></div></strong>


                </div>
            <section class="hero-home videodev invested">
                <div class="container">
                    <div class="content">
                        <!-- content -->
                        <div class="column-half content-col">

                            <div class="contentblock">

                                <span class="sub-headline ">
                                    <strong>
                                        Invest in NowRx
                                    </strong>
                                </span>
                                <h1>
                                    <span class="kd">Tech-Powered</span>
                                    <span class="kd">Retail Pharmacy</span>
                                </h1>
                                <p>
                                    With Amazing Service and Free Same Day Medication Delivery
                                </p>
                                <div class="mobilevideo">
                                    <div class="relative-pos">
                                    <video title="nowrx pharmacy delivery website video" preload="none" class="lvimage lozad" id="mobilelvc" poster="<?php echo get_template_directory_uri(); ?>/images/best-startup-to-invest-2021-nowrx-technology.webp">
                                        <source type="video/mp4" data-src="<?php echo get_template_directory_uri(); ?>/images/NowRx Pharmacy The Way It Should Be (Series C Investor Video).mp4" type="video/mp4">
                                        Sorry, your browser doesn't support embedded videos.
                                        <track default kind="metadata" srclang="en" src="<?php echo get_template_directory_uri(); ?>/images/my_captions.vtt" />
                                    </video>

                                    <video title="video overlay mobile" class="mobilevideooverlay lozad" id="mobvidov" muted autoplay loop   width="400" height="200">
                                        <source type="video/mp4" data-src="<?php echo get_template_directory_uri(); ?>/images/nowrx-pharmacy-delivery-investor-webpage-video-thumbnail-image-3mbps.mp4" type="video/mp4">
                                        Sorry, your browser doesn't support embedded videos.
                                    </video>

                                    <div class="plauft mobileplauft">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 263.374 263.374" style="enable-background:new 0 0 263.374 263.374;" xml:space="preserve">
                                            <g>
                                                <g>
                                                    <path d="M238.163,115.57l-68.127-39.741c-15.201-8.899-40.064-23.393-55.296-32.256L44.115,3.831    C28.919-5.067,13.974,2.07,13.974,19.698v224c0,17.567,14.945,24.735,30.147,15.872l69.376-39.741    c15.232-8.863,40.735-23.357,55.936-32.256l68.449-39.741C253.047,138.933,253.334,124.433,238.163,115.57z"/>
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                    </div>
                                    <div class="points">
                                        <div class="point">
                                            <img class="lozad" data-src="<?php echo get_template_directory_uri(); ?>/images/rx.png" alt="toe" width="400px" height="200px">
                                            <div class="text">Licensed Pharmacy</div>
                                        </div>
                                        <div class="point">
                                            <img class="lozad" data-src="<?php echo get_template_directory_uri(); ?>/images/tool.png" alt="toe" width="400px" height="200px">
                                            <div class="text">U.S. Licensed Doctors</div>
                                        </div>
                                        <div class="point">
                                            <img class="lozad" data-src="<?php echo get_template_directory_uri(); ?>/images/fda-c.png" alt="toe" width="400px" height="200px">
                                            <div class="text">FDA Approved Meds</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="infk">
                                        <div id="fm16"></div>

                                    <script defer async>

                                    var $document = document.querySelector("body");

                                    document.addEventListener('load', function(evt) {

                                        var $script = document.querySelector("script[src='//js.hsforms.net/forms/v2.js']");

                                        if (!evt.target.isEqualNode($script)) {
                                            return;
                                        }

                                        setTimeout(() => {
                                            hbspt.forms.create({
                                                region: "na1",
                                                portalId: "5952677",
                                                formInstanceId: "6",
                                                formId: "df2a6935-1139-426a-b373-0917788189ad",
                                                locale: 'en',
                                                target:'#fm16',
                                                translations: {
                                                    en: {
                                                        submitText: "Download Investor Brief",
                                                        fieldLabels: {
                                                            email: "Electronic mail"
                                                        }
                                                    }
                                                }
                                            });
                                        }, 0);

                                        setTimeout(() => {
                                            let formDisplayed = document.getElementsByClassName('dynamic-prep-form');

                                            if (formDisplayed.length > 0) {
                                                console.log('exists', formDisplayed.length);

                                            } else {

                                                hbspt.forms.create({
                                                region: "na1",
                                                portalId: "5952677",
                                                formInstanceId: "6",
                                                formId: "df2a6935-1139-426a-b373-0917788189ad",
                                                locale: 'en',
                                                target:'#fm16',
                                                translations: {
                                                    en: {
                                                        submitText: "Download Investor Brief",
                                                        fieldLabels: {
                                                            email: "Electronic mail"
                                                        }
                                                    }
                                                }
                                            });
                                            }

                                        }, 4400);

                                    }, true);
                                    </script>
                                </div>
                            </div>
                            <div class="fig">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/best-investment-2021-nowrx-sec-qualified-and-crowdcheck-approved1.webp" alt="best investment 2021 nowrx sec qualified and crowdcheck approved1" class="">
                            </div>
                        </div>

                        <!-- image -->
                        <div class="column-half image-col videomain">
                            <video title="nowrx pharmacy delivery website video" preload="none" class="lvimage" id="lvc" poster="<?php echo get_template_directory_uri(); ?>/images/best-startup-to-invest-2021-nowrx-technology.webp"  >
                                <source type="video/mp4" src="<?php echo get_template_directory_uri(); ?>/images/NowRx Pharmacy The Way It Should Be (Series C Investor Video).mp4" type="video/mp4">
                                Sorry, your browser doesn't support embedded videos.
                                <track default kind="metadata" srclang="en" src="<?php echo get_template_directory_uri(); ?>/images/my_captions.vtt" />
                            </video>
                            <video title="video overlay" class="videooverlay" id="vidov" preload="none" muted autoplay loop width="560" height="300">
                                <source type="video/mp4" src="<?php echo get_template_directory_uri(); ?>/images/nowrx-pharmacy-delivery-investor-webpage-video-thumbnail-image.mp4" type="video/mp4">
                                Sorry, your browser doesn't support embedded videos.
                            </video>
                            <div class="plauft deskplauft">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 263.374 263.374" style="enable-background:new 0 0 263.374 263.374;" xml:space="preserve">
                                    <g>
                                        <g>
                                            <path d="M238.163,115.57l-68.127-39.741c-15.201-8.899-40.064-23.393-55.296-32.256L44.115,3.831    C28.919-5.067,13.974,2.07,13.974,19.698v224c0,17.567,14.945,24.735,30.147,15.872l69.376-39.741    c15.232-8.863,40.735-23.357,55.936-32.256l68.449-39.741C253.047,138.933,253.334,124.433,238.163,115.57z"/>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                            <figure class="image">
                                <picture class="lozad">
                                    <img data-src="<?php echo get_template_directory_uri(); ?>/images/Pharmacy-delivery-employee-from-nowrx-smiling.webp" class="pic limg lozad" height="900px" width="1600px" alt="Pharmacy delivery employee from nowrx smiling">
                                </picture>
                            </figure>


                            <div class="points">
                                        <div class="point">
                                            <img class="" src="<?php echo get_template_directory_uri(); ?>/images/rx.png" alt="toe" width="400px" height="200px">
                                            <div class="text">Licensed Pharmacy</div>
                                        </div>
                                        <div class="point">
                                            <img class="" src="<?php echo get_template_directory_uri(); ?>/images/tool.png" alt="toe" width="400px" height="200px">
                                            <div class="text">U.S. Licensed Doctors</div>
                                        </div>
                                        <div class="point">
                                            <img class="" src="<?php echo get_template_directory_uri(); ?>/images/fda-c.png" alt="toe" width="400px" height="200px">
                                            <div class="text">FDA Approved Meds</div>
                                        </div>
                                    </div>
                        </div>
                    </div>
                </div>

            </section>










            <section class="infoslider">
                    <div  class="div-block-11">
                            <h3 class="fttitle">As Seen In</h3>
                            <span class="imgs">
                                <div class="swiper cnko">
                                    <!-- Additional required wrapper -->
                                    <div class="swiper-wrapper">
                                        <span class="m swiper-slide" id="1">
                                            <img class="" src="<?php echo get_template_directory_uri(); ?>/images/top-investment-nowrx-featured-in-fortune.webp"
                                                alt="top investment nowrx featured in fortune" width="400px" height="200px">
                                        </span>
                                        <span class="m swiper-slide" id="2">
                                            <img class="" src="<?php echo get_template_directory_uri(); ?>/images/top-investment-nowrx-featured-in-venture-beat.webp"
                                                alt="top investment nowrx featured in venture beat.webp" width="400px" height="200px">
                                        </span>
                                        <span class="m swiper-slide" id="3">
                                            <img class="" src="<?php echo get_template_directory_uri(); ?>/images/top-investment-nowrx-featured-in-tech-crunch.webp"
                                                alt="top investment nowrx featured in tech crunch" width="400px" height="200px">
                                        </span>
                                        <span class="m swiper-slide" id="4">
                                            <img class="" src="<?php echo get_template_directory_uri(); ?>/images/top-investment-nowrx-featured-in-entrepreneur.webp"
                                                alt="top investment nowrx featured in entrepreneur" width="400px" height="200px">
                                        </span>

                                        <span class="m swiper-slide" id="5">
                                            <img class="" src="<?php echo get_template_directory_uri(); ?>/images/top-investment-nowrx-featured-in-yahoo.webp"
                                                alt="top investment nowrx featured in yahoo" width="400px" height="200px">
                                        </span>
                                        <span class="m swiper-slide" id="6">
                                            <img class="" src="<?php echo get_template_directory_uri(); ?>/images/top-investment-nowrx-featured-in-forbes.webp"
                                                alt="top investment nowrx featured in forbes" width="400px" height="200px">
                                        </span>
                                        <span class="m swiper-slide" id="7">
                                            <img class="" src="<?php echo get_template_directory_uri(); ?>/images/top-investment-nowrx-featured-in-crunchbase.webp"
                                                alt="top investment nowrx featured in crunchbase" width="400px" height="200px">
                                        </span>
                                        <span class="m swiper-slide" id="8">
                                            <img class="" src="<?php echo get_template_directory_uri(); ?>/images/top-investment-nowrx-featured-in-fierce-healthcare.webp"
                                                alt="top investment nowrx featured in fierce healthcare" width="400px" height="200px">
                                        </span>
                                        <span class="m swiper-slide" id="9">
                                            <img class="" src="<?php echo get_template_directory_uri(); ?>/images/top-investment-nowrx-featured-in-barrons.webp"
                                                alt="top investment nowrx featured in barrons" width="400px" height="200px">
                                        </span>

                                    </div>
                                </div>
                            </span>
                        </div>
            </section>






            <section class="companyhighlighta" id="highlights">
                <div class="container">
                    <figure class="image">
                        <img data-src="<?php echo get_template_directory_uri(); ?>/images/medical-stock-nowrx-prescription-bag.webp" alt="medical stock nowrx prescription bag" class="lozad">
                    </figure>
                    <div class="content">
                        <h2 class="title">Company <b>Highlights</b></h2>
                        <div class="blockitems">
                                   <!-- item -->
                                   <div class="item">
                                <div class="numb">
                                $32.3M

                                </div>
                                <div class="mnk">
                                Annualized Revenue
                                </div>
                                <div class="info">
                                Based on March 2022 revenue of $2.69M

                                </div>
                            </div>
                            <!-- item -->
                            <div class="item">
                                <div class="numb">
                                90%
                                </div>
                                <div class="mnk">
                                YoY Growth
                                </div>
                                <div class="info">
                                In revenue during 2020. *2021 results coming in April.
                                </div>
                            </div>
                              <!-- item -->
                              <div class="item">
                                <div class="numb">
                                1,200%
                                </div>
                                <div class="mnk">
                                    Revenue Growth
                                </div>
                                <div class="info">
                                NowRx Telehealth from Q1 to Q4 in 2021
                                </div>
                            </div>


                            <!-- item -->
                            <div class="item">
                                <div class="numb">
                                $<?php echo number_format_short(abs($flo)); ?>

                                </div>
                                <div class="mnk">
                                Shares Sold
                                </div>
                                <div class="info">
                                To over <?php echo $itemUsers; ?> investors in the current round.

                                </div>
                            </div>



                            <!-- item -->
                            <div class="item">
                                <div class="numb">
                                8

                                </div>
                                <div class="mnk">
                                Pharmacies
                                </div>
                                <div class="info">
                                DEA licensed and delivering prescriptions.

                                </div>
                            </div>
                            <!-- item -->
                            <div class="item">
                                <div class="numb">
                                2

                                </div>
                                <div class="mnk">
                                Patents Pending
                                </div>
                                <div class="info">
                                On QuickFilll’s award winning pharmacy tech.

                                </div>
                            </div>

                        </div>
                        <div class="callitem">
                            <a href="https://www.seedinvest.com/nowrx/series.c" magic-link="invest-button" target="_blank" class="button button-mobile buy-now w-button">
                                Invest Now
                            </a>
                        </div>
                    </div>
                </div>
            </section>






            <div class="cta lozad"
            data-background-image="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/5d5da5103e9e5a775604e1aa_pill2.svg">
                <div class="w-layout-grid grid-9">
                    <h2 class="h2-left">Get the NowRx<strong> Investor Brief</strong></h2>
                    <div class="form-block w-form">
                        <div id="fm7"></div>


 <script defer async>

var $document = document.querySelector("body");

document.addEventListener('load', function(evt) {

    var $script = document.querySelector("script[src='//js.hsforms.net/forms/v2.js']");

    if (!evt.target.isEqualNode($script)) {
        return;
    }

    setTimeout(() => {
        hbspt.forms.create({
                                    region: "na1",
                                    portalId: "5952677",
                                    formInstanceId: "7",
                                    formId: "df2a6935-1139-426a-b373-0917788189ad",
                                    target:'#fm7'
                                });
    }, 0);

    setTimeout(() => {
        let formDisplayed = document.getElementsByClassName('dynamic-prep-form');

        if (formDisplayed.length > 0) {
            console.log('exists', formDisplayed.length);

        } else {

            hbspt.forms.create({
                                    region: "na1",
                                    portalId: "5952677",
                                    formInstanceId: "7",
                                    formId: "df2a6935-1139-426a-b373-0917788189ad",
                                    target:'#fm7'
                                });
        }

    }, 4400);

}, true);
</script>
                    </div>
                </div>
            </div>





            <section id="how-it-works" class="section lozad section-bussiness hand-bg how-it-works" data-background-image="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/5d5ed1486e0dbce67eac23b9_hexagon.svg">
                <div class="container">
                    <div class="pricing-wrapper">
                        <div id="how" class="business-model model-1">

                            <header class="tl">
                                <h2 class="h2-box h2-op">How It <strong>Works</strong></h2>
                                <p class="p-sub p-short">
                                    NowRx is easy to use and transforms hours at a traditional pharmacy into minutes on the phone - here's how it works.
                                </p>
                            </header>

                            <div class="business-box">
                                <div class="invesments-list list-full hor">
                                    <div class="km">

                                        <div class="cm">
                                        <div class="kl">
                                            <img width="60px" height="60px" class="lozad" data-src="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/61489905e242c2c0d1558b0c_Group%2078.svg"
                                            loading="lazy" alt="1" class="image-10">
                                        </div>
                                        <h3 class="title">Send Us Your Prescription</h3>
                                        </div>

                                        <p class="p-sub p-short p-margin small-dot no-dot works-paragraph">
                                            Doctors can send prescriptions to NowRx using their existing prescribing method or patients can use our mobile app and website for transfers/refills.
                                        </p>
                                    </div>
                                    <figure>
                                        <img data-src="<?php echo get_template_directory_uri(); ?>/images/doctor-writing-prescription-to-nowrx-investor.webp" alt="doctor writing prescription to nowrx copy" class="lozad">
                                    </figure>
                                </div>
                                <div class="invesments-list list-full hor">

                                    <div class="km">

                                        <div class="cm">
                                        <div class="kl">
                                            <img width="60px" height="60px"
                                            class="lozad" data-src="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/614899051151975fdb36a408_Group%2079.svg"
                                            loading="lazy" alt="2" class="image-10">
                                        </div>
                                        <h3 class="title">We Confirm Delivery</h3>
                                        </div>

                                        <p class="p-sub p-short p-margin small-dot no-dot works-paragraph">
                                            Once NowRx receives the prescription, a pharmacy team member reaches out by phone to set up delivery, take payment, and answer any medication questions.
                                        </p>
                                    </div>
                                    <figure>
                                        <img data-src="<?php echo get_template_directory_uri(); ?>/images/AdobeStock_91568410.webp" alt="We Confirm Delivery" class="lozad">
                                    </figure>
                                </div>
                                <div class="invesments-list list-full hor">
                                    <div class="km">

                                        <div class="cm">
                                        <div class="kl">
                                            <img width="60px" height="60px"
                                                class="lozad" data-src="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/614899065cc8091c4d8b5b18_Group%2080.svg"
                                                loading="lazy" alt="3" class="image-10">
                                        </div>
                                        <h3 class="title">Medication is Delivered</h3>
                                        </div>

                                        <p class="p-sub p-short p-margin small-dot no-dot works-paragraph">
                                            Finally, a HIPAA certified NowRx pharmacy employee delivers the prescription in hours for free! For refills, patients can opt for auto-refill for maximum convenience.
                                        </p>
                                    </div>
                                    <figure>
                                        <img data-src="<?php echo get_template_directory_uri(); ?>/images/prescription-delivery-car-nowrx-investor.webp" alt="Medication is Delivered" class="lozad">
                                    </figure>
                                </div>
                                <div class="button-wrapper">
                                    <a href="https://www.seedinvest.com/nowrx/series.c" target="_blank" magic-link="invest-button" class="button white-button button-menu buy-now w-button">Invest Now</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </section>

            <div class="cta lozad" data-background-image="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/5d5da5103e9e5a775604e1aa_pill2.svg">
                <div class="w-layout-grid grid-9">
                    <h2 class="h2-left">Get the NowRx<strong> Investor Brief</strong></h2>
                    <div class="form-block w-form">
                            <div id="fm22"></div>


            <script defer async>

var $document = document.querySelector("body");

document.addEventListener('load', function(evt) {

    var $script = document.querySelector("script[src='//js.hsforms.net/forms/v2.js']");

    if (!evt.target.isEqualNode($script)) {
        return;
    }

    setTimeout(() => {
        hbspt.forms.create({
                                    region: "na1",
                                    portalId: "5952677",
                                    formInstanceId: "22",
                                    formId: "df2a6935-1139-426a-b373-0917788189ad",
                                    target:'#fm22'
                                });
    }, 0);

    setTimeout(() => {
        let formDisplayed = document.getElementsByClassName('dynamic-prep-form');

        if (formDisplayed.length > 0) {
            console.log('exists', formDisplayed.length);

        } else {

            hbspt.forms.create({
                                    region: "na1",
                                    portalId: "5952677",
                                    formInstanceId: "22",
                                    formId: "df2a6935-1139-426a-b373-0917788189ad",
                                    target:'#fm22'
                                });
        }

    }, 4400);

}, true);
</script>

                    </div>
                </div>
            </div>

            <section class="section-competetive" id="competetitive-advantage">
                <div class="container">

                    <header class="title">
                        <h2 class="sec-title ">
                            Competitive <strong>Advantage</strong>
                        </h2>
                        <p>
                            NowRx has several competitive advantages over traditional pharmacy and mail order delivery options that provide a <strong>sustainable defense now and in the near future</strong>.
                        </p>
                    </header>

                    <div class="columns">

                        <div class="row-item">
                            <div class="context">
                                <h3 class="sec-title click-pop" data-view="false">With Free Same Day Prescription Delivery
                                    <span class="click">
                                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" class="svg-inline--fa fa-angle-right fa-w-8 fa-3x"><path fill="currentColor" d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z" class=""></path></svg>
                                    </span>
                                </h3>
                                <p>
                                Award winning “QuickFill” software increases pharmacy efficiency and reduces dispensing costs while minimizing common retail pharmacy problems like insurance issues, medications out of stock, etc.
                                </p>
                            </div>
                            <div class="image-block">
                            <figure class="image-item">
                                <img data-src="<?php echo get_template_directory_uri(); ?>/images/mechanical.webp" class="lozad" alt="Proprietary Pharmacy Software & Robotics" >
                            </figure>
                            <p>
                                Award winning “QuickFill” software increases pharmacy efficiency and reduces dispensing costs while minimizing common retail pharmacy problems like insurance issues, medications out of stock, etc.
                                </p>
                            </div>
                        </div>

                        <div class="row-item">
                            <div class="context">
                                <h3 class="sec-title click-pop" data-view="false">Low Cost Microfulfillment Pharmacies
                                    <span class="click">
                                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" class="svg-inline--fa fa-angle-right fa-w-8 fa-3x"><path fill="currentColor" d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z" class=""></path></svg>
                                    </span>
                                </h3>
                                <p>
                                A single NowRx can service the same volume as up to 20 traditional pharmacies and free same day delivery removes the need for prime retail store front that maximizes walk-in traffic. As a result, NowRx’s fixed overhead is less than 1% of typical large retail chains.
                                </p>
                            </div>
                            <div class="image-block">
                            <figure class="image-item">
                                <img data-src="<?php echo get_template_directory_uri(); ?>/images/cvs.webp" alt="Low Cost Microfulfillment Pharmacies" class="lozad">
                            </figure>
                            <p>
                                A single NowRx can service the same volume as up to 20 traditional pharmacies and free same day delivery removes the need for prime retail store front that maximizes walk-in traffic. As a result, NowRx’s fixed overhead is less than 1% of typical large retail chains.
                                </p>
                            </div>
                        </div>

                        <div class="row-item">
                            <div class="context">
                                <h3 class="sec-title click-pop" data-view="false">Digital Based Service Model
                                    <span class="click">
                                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" class="svg-inline--fa fa-angle-right fa-w-8 fa-3x"><path fill="currentColor" d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z" class=""></path></svg>
                                    </span>
                                </h3>
                                <p>
                                NowRx can continue expanding within existing territories without the need for major capital expenditure. In addition, NowRx Telehealth is completely software based and requires zero capital expenditure.
                                </p>
                            </div>
                           <div class="image-block">
                            <figure class="image-item">
                                    <img data-src="<?php echo get_template_directory_uri(); ?>/images/doc-perscriptions.webp" class="lozad" alt="Digital Based Service Model">
                                </figure>
                             <p>
                                NowRx can continue expanding within existing territories without the need for major capital expenditure. In addition, NowRx Telehealth is completely software based and requires zero capital expenditure.
                                </p>
                           </div>
                        </div>

                    </div>
                </div>
            </section>

            <section class="quickfill-section">
                <div class="container">
                    <div class="content">

                        <div class="columns">
                            <div class="column main">
                            <header class="title">
                            <h2 class="sec-title">NowRx <strong>"QuickFill"</strong> System</h2>
                            <p>
                            Streamlines backend pharmacy operations while reducing bottlenecks and common pharmacy issues that result in bad customer experiences.
                            </p>
                        </header>
                                <figure>
                                    <img data-src="<?php echo get_template_directory_uri(); ?>/images/Invest-in-NowRx-QuickFill.webp" class="lozad" alt="Invest in NowRx QuickFill" width="460" height="250">
                                </figure>
                                <div class="content">

                                <p>
                                NowRx's QuickFill pharmacy technology won a White Coat Award for Highest Accuracy from SureScripts - <b>the leading health information network in the US.</b>
                                </p>
                                </div>
                            </div>
                            <div class="column side">
                                <h3 class="title">Features</h3>
                                <ul class="list">
                                    <li>
                                        <figure>
                                        <img
                                            data-src="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/613ded89edac67851e60fc3c_Group%2057.svg"
                                            loading="lazy" width="66px" height="60px" alt="Intelligent Claim Adjudication" class="icon-b nom lozad">
                                        </figure>
                                        <span class="text">Intelligent Claim Adjudication</span>
                                    </li>
                                    <li>
                                        <figure>
                                        <img
                                            data-src="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/613ded8bcd671550459ff14d_Group%2058.svg"
                                            loading="lazy"  width="66px" height="60px" alt="Predictive Inventory System(ML)" class="icon-b nom lozad">
                                        </figure>
                                        <span class="text">Predictive Inventory System(ML)</span>
                                    </li>
                                    <li>
                                        <figure>
                                        <img
                                            data-src="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/613ded8939123e236ce04fcc_Group%2014.svg"
                                            loading="lazy"  width="66px" height="60px" alt="Chatbot-Assisted Call Center" class="icon-b nom lozad">
                                        </figure>
                                        <span class="text">Chatbot-Assisted Call Center</span>
                                    </li>
                                    <li>
                                        <figure>
                                        <img
                                            data-src="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/613ded8839123ef5f5e04fcb_Group%2015.svg"
                                            loading="lazy"  width="66px" height="60px" alt="Logistics & Automated Triage" class="icon-b nom lozad">
                                        </figure>
                                        <span class="text">Logistics & Automated Triage</span>
                                    </li>
                                    <li>
                                        <figure>
                                        <img
                                            data-src="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/613ded8b9900f83fb124f372_Group%2060.svg"
                                            loading="lazy"  width="66px" height="60px" alt="End-to-End Robotic Dispensing" class="icon-b nom lozad">
                                        </figure>
                                        <span class="text">End-to-End Robotic Dispensing</span>
                                    </li>
                                    <li>
                                        <figure>
                                        <img
                                            data-src="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/613ded8a69891454acc1569c_Group%2059.svg"
                                            loading="lazy"  width="66px" height="60px" alt="Automated Physician Comms" class="icon-b nom lozad">
                                        </figure>
                                        <span class="text">Automated Physician Comms</span>
                                    </li>
                                </ul>
                                <div class="patents">
                                    <span class="patents-block">
                                        <h3 class="title">Patents</h3>
                                    </span>
                                    <ul>
                                        <li>
                                        Application (Pending) #: 16249899 – Method and System of an Automated Medication Dispensing and Delivery System
                                        </li>
                                        <li>
                                        Application (Pending) #: 17243575 - Systems, methods, and apparatuses for implementing machine learning model training and deployment for predictive inventory purchasing database
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>



            <div class="cta lozad" data-background-image="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/5d5da5103e9e5a775604e1aa_pill2.svg">
                <div class="w-layout-grid grid-9">
                    <h2 class="h2-left">Get the NowRx<strong> Investor Brief</strong></h2>
                    <div class="form-block w-form">
                            <div id="fm2"></div>

 <script defer async>

var $document = document.querySelector("body");

document.addEventListener('load', function(evt) {

    var $script = document.querySelector("script[src='//js.hsforms.net/forms/v2.js']");

    if (!evt.target.isEqualNode($script)) {
        return;
    }

    setTimeout(() => {
        hbspt.forms.create({
                                    region: "na1",
                                    portalId: "5952677",
                                    formInstanceId: "2",
                                    formId: "df2a6935-1139-426a-b373-0917788189ad",
                                    target:'#fm2'
                                });
    }, 0);

    setTimeout(() => {
        let formDisplayed = document.getElementsByClassName('dynamic-prep-form');

        if (formDisplayed.length > 0) {
            console.log('exists', formDisplayed.length);

        } else {

            hbspt.forms.create({
                                    region: "na1",
                                    portalId: "5952677",
                                    formInstanceId: "2",
                                    formId: "df2a6935-1139-426a-b373-0917788189ad",
                                    target:'#fm2'
                                });
        }

    }, 4400);

}, true);
</script>

                    </div>
                </div>
            </div>


            <section class="review-block" >

                <div class="container"><div id="testimonials"></div>
                    <header class="title">
                        <h2 class="title">NowRx <strong>Reviews</strong></h2>
                        <p>
                        NowRx's "QuickFill" system produces a significantly better experience - here's what doctors and patients are saying about the tech-powered pharmacy.
                        </p>
                    </header>
                    <div class="promote-scores">
                        <div class="score-item">
                            <div class="main-content">
                                <div class="number">
                                    91
                                </div>
                                <div class="text">
                                    <h3>Net Promoter <strong>Score</strong></h3>
                                    <p>
                                    Based on an ongoing survey of over 300 physician office staff. NPS is one of the most widely used metrics to measure the willingness of customers to recommend a company's products or services to others.
                                    </p>
                                </div>
                            </div>
                            <div class="star-rating">
                                <div class="title"><strong>[</strong> 5 Star Rating For All Locations <strong>]</strong></div>
                                <div class="stars">
                                    <div class="star">
                                    <img
                                                        data-src="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/5d614c3245d89329dc50d417_stars.svg"
                                                        alt="star" class="stars lozad">
                                     </div>
                                    <div class="text">
                                        <a href="<?php echo get_site_url(); ?>/testimonials/" class="link-review">
                                            See All Reviews
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="review-item">
                            <blockquote>
                                <span class="text">
                                I highly recommend NowRx Pharmacy. I
                        use them professionally as well as personally for my own prescriptions and they really
                        are as good as advertised. They accept standing orders which has saved my office staff
                        significant time and energy in addition to accurately applying drug coupons to lower out
                        of pocket costs for my patients. I could not be happier with
                        NowRx!
                                </span>
                                <cite>
                                    <figure class="image">
                                        <img data-src="<?php echo get_template_directory_uri(); ?>/images/DrJamesETearseMD.webp" alt="Dr James E Tearse MD" class="lozad">
                                    </figure>
                                    <div class="text-block">
                                    <div class="name">Dr. James E Tearse, MD</div>
                                    <div class="title">Ophthalmologist</div>
                                    <div class="handle">Redwood City, CA</div>
                                    </div>
                                </cite>
                            </blockquote>
                        </div>
                    </div>
                    </div>

            <section  class="section section-bottom-padding lab">
                <div class=" testimonials">
                    <div class="team-intro labs-intro">
                        <div class="container-11">
                            <div id="loop" class="owl-carousel owl-loaded owl-drag">
                                <div class="owl-stage-outer">
                                    <div class="owl-stage">

                                    <!-- Slider main container -->
                                    <div class="swiper owlswiper" style="width:100%;height:auto;">
                                    <!-- Additional required wrapper -->
                                    <div class="swiper-wrapper">

                                    <div class="owl-item swiper-slide">
                                            <div class="slider1 lozad" data-background-image="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/5d614c32e3123d3b484375f9_quote.svg" >
                                                <div class="reviews"><img
                                                        data-src="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/5d614c3245d89329dc50d417_stars.svg"
                                                        alt="star" class="stars lozad"></div>
                                                <div class="divider d"></div>
                                                <p class="p-light left-al">
                                                <span class="fullquote"> "Companies that <strong>ACTUALLY PROVIDE CUSTOMER SERVICE</strong> are so rare in this day and age. These guys are awesome!"</span>
                                                <br>
                                                </p>
                                                <div class="review-w">
                                                    <!-- <div>NowRx Customer</div> -->
                                                </div>
                                            </div>
                                        </div>

                                        <div class="owl-item swiper-slide">
                                            <div class="slider1 lozad" data-background-image="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/5d614c32e3123d3b484375f9_quote.svg" >
                                                <div class="reviews"><img
                                                        data-src="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/5d614c3245d89329dc50d417_stars.svg"
                                                        alt="star" class="stars lozad"></div>
                                                <div class="divider d"></div>
                                                <p class="p-light left-al">
                                                <span class="fullquote"> <strong>Best pharmacy I have ever used!</strong> I have nothing but good things to say about them. Exemplary customer service, delivery right to your door with text updates, and great pricing. I will be using them for as long as I can! </span>
                                                <br>
                                                </p>
                                                <div class="review-w">
                                                    <!-- <div>NowRx Customer</div> -->
                                                </div>
                                            </div>
                                        </div>

                                        <div class="owl-item swiper-slide">
                                            <div class="slider1 lozad" data-background-image="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/5d614c32e3123d3b484375f9_quote.svg" >
                                                <div class="reviews"><img
                                                        data-src="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/5d614c3245d89329dc50d417_stars.svg"
                                                        alt="star" class="stars lozad"></div>
                                                <div class="divider d"></div>
                                                <p class="p-light left-al">
                                                <span class="fullquote"> "<strong>Best Pharmacy experience EVER</strong>! These guys are like going to your old neighborhood pharmacy, you know the one, where they deliver your medications to you and actually care about the customer? You don't get better service than this." </span>
                                                <br>
                                                </p>
                                                <div class="review-w">
                                                    <!-- <div>NowRx Customer</div> -->
                                                </div>
                                            </div>
                                        </div>


                                        <div class="owl-item swiper-slide">
                                            <div class="slider1 lozad" data-background-image="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/5d614c32e3123d3b484375f9_quote.svg" >
                                                <div class="reviews"><img
                                                        data-src="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/5d614c3245d89329dc50d417_stars.svg"
                                                        alt="star" class="stars lozad"></div>
                                                <div class="divider d"></div>
                                                <p class="p-light left-al">This is my new pharmacy. <strong>Not only was
                                                        their price lower, but they do same day delivery</strong> to my
                                                    neighborhood. And when you call it's easy to reach a real person. My
                                                    kind of store!<br></p>
                                                <div class="review-w">
                                                    <!-- <div class="review-person"><em>-Julie B.<br></em></div> -->
                                                    <!-- <div>NowRx Customer</div> -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item swiper-slide">
                                            <div class="slider1 lozad" data-background-image="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/5d614c32e3123d3b484375f9_quote.svg">
                                                <div class="reviews"><img
                                                        data-src="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/5d614c3245d89329dc50d417_stars.svg"
                                                        alt="star" class="stars lozad"></div>
                                                <div class="divider d"></div>
                                                <p class="p-light left-al"><strong>NowRx is the best pharmacy I've ever used.</strong>
                                                    They take all the work out of prescription management, they have
                                                    incredible communication (text and phone, whichever is your
                                                    preference), and they keep providing service at a level I never
                                                    expect.<br></p>
                                                <div class="review-w">
                                                    <!-- <div>NowRx Customer</div> -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item swiper-slide">
                                            <div class="slider1 lozad" data-background-image="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/5d614c32e3123d3b484375f9_quote.svg">
                                                <div class="reviews"><img
                                                        data-src="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/5d614c3245d89329dc50d417_stars.svg"
                                                        alt="star" class="stars lozad"></div>
                                                <div class="divider d"></div>
                                                <p class="p-light left-al">"Super easy to use. <strong>Fast and WAY
                                                        cheaper</strong> than Costco or any other place I've ever
                                                    checked."<br></p>
                                                <div class="review-w">
                                                    <!-- <div>NowRx Customer</div> -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item swiper-slide">
                                            <div class="slider1 lozad" data-background-image="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/5d614c32e3123d3b484375f9_quote.svg">
                                                <div class="reviews"><img
                                                        data-src="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/5d614c3245d89329dc50d417_stars.svg"
                                                        alt="star" class="stars lozad"></div>
                                                <div class="divider d"></div>
                                                <p class="p-light left-al">"We have been using NowRx for the last year
                                                    and the service is great as well as all the staff we have talked to
                                                    in getting our prescriptions filled. <strong>They go the extra mile
                                                        in customer service!</strong>"<br></p>
                                                <div class="review-w">
                                                    <!-- <div>NowRx Customer</div> -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item swiper-slide">
                                            <div class="slider1 lozad" data-background-image="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/5d614c32e3123d3b484375f9_quote.svg">
                                                <div class="reviews"><img
                                                        data-src="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/5d614c3245d89329dc50d417_stars.svg"
                                                        alt="star" class="stars lozad"></div>
                                                <div class="divider d"></div>
                                                <p class="p-light left-al">"<strong>Best Pharmacy experience
                                                        EVER!</strong> These guys are like going to your old
                                                    neighborhood pharmacy, you know the one, where they deliver your
                                                    medications to you and actually care about the customer? You don't
                                                    get better service than this."<br></p>
                                                <div class="review-w">
                                                    <!-- <div>NowRx Customer</div> -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item swiper-slide">
                                            <div class="slider1 lozad" data-background-image="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/5d614c32e3123d3b484375f9_quote.svg">
                                                <div class="reviews"><img
                                                        data-src="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/5d614c3245d89329dc50d417_stars.svg"
                                                        alt="star" class="stars lozad"></div>
                                                <div class="divider d"></div>
                                                <p class="p-light left-al">
                                                <span class="fullquote"> "<strong>Hands down best pharmacy you could ask for!</strong> I no longer have to wait in line to fill my grandmother's medications, and the customer service is amazing. Try them out and you won't regret it!" </span>
                                                <br></p>
                                                <div class="review-w">
                                                    <!-- <div>NowRx Customer</div> -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="owl-item swiper-slide">
                                            <div class="slider1 lozad" data-background-image="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/5d614c32e3123d3b484375f9_quote.svg">
                                                <div class="reviews"><img
                                                        data-src="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/5d614c3245d89329dc50d417_stars.svg"
                                                        alt="star" class="stars lozad"></div>
                                                <div class="divider d"></div>
                                                <p class="p-light left-al">
                                                Responsible business. <strong>Actually the best pharmacy I've used so far.</strong> Delivery is always on time. Customer service is awesome and service is very reliable.
                                                <br></p>
                                                <div class="review-w">
                                                    <!-- <div>NowRx Customer</div> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="relnav">

                                    <div class="swiper-button-prev">
                                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="svg-inline--fa fa-chevron-left fa-w-10 fa-3x"><path fill="currentColor" d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z" class=""></path></svg>
                                    </div>
                                    <div class="swiper-button-next">
                                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="svg-inline--fa fa-chevron-right fa-w-10 fa-3x"><path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z" class=""></path></svg>
                                    </div>
                                    </div>

                                    </div>

                                    </div>
                                </div>

                            </div>
                            <div class="btninvst">
                                <a href="https://www.seedinvest.com/nowrx/series.c" magic-link="invest-button" target="_blank" class="button button-mobile buy-now w-button">
                                    Invest Now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            </section>



            <!-- <div class="quote-section"><img
                    data-src="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/614895c983afd43a4f8ad190_image%2021-min.jpg"
                    loading="lazy" width="169px" height="212px" alt="" class="image-11 lozad">
                <blockquote class="block-quote"><em class="italic-text">“I highly recommend NowRx Pharmacy. I
                        use them professionally as well as personally for my own prescriptions and they really
                        are as good as advertised. They accept standing orders which has saved my office staff
                        significant time and energy in addition to accurately applying drug coupons to lower out
                        of pocket costs for my patients. I could not be happier with
                        NowRx!”</em><br><br><strong>-Dr. James E Tearse, MD</strong></blockquote>
            </div> -->


            <section class="section section-bottom-padding team-sec">

                <div class="container">
                    <div class="team-intro less-m">
                        <h2 class="h2-box h2-op h2-center">We’re <strong>growing</strong></h2>
                        <p class="p-sub p-short p-center"><strong>NowRx Has Plans To Expand Nationwide</strong></p>
                    </div>
                    <div class="team">
                        <div class="w-layout-grid grid-5">
                            <div id="w-node-_5f6c87f4-8d40-ac83-0a71-ac3837c92298-a3cc193b"><img
                                    data-src="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/6140c92d117d8b068379aa99_Group%2075.svg"
                                    loading="lazy" width="400px" height="200px" alt="" class="image-13 lozad"></div>
                            <div id="w-node-_46417f79-3a8d-7813-ccfe-2b88b8550b62-a3cc193b"><img
                                    data-src="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/6137693b89c4889e4c5fa396_Group%2049.svg"
                                    loading="lazy" alt="" width="400px" height="200px" class="hide-m lozad"></div>

                            <div class="timeline-box">
                                <div class="year">2016</div>
                                <div class="full-time">
                                    <div class="white-box time">
                                        <div>Launch 1st micro-fulfillment location in Mountain View, CA</div>
                                    </div>
                                    <div class="year deatil">LAUNCH</div>
                                </div>
                                <div class="logo-wrapper hide2"></div>
                            </div>

                            <div class="timeline-box">
                                <div class="year">2017</div>
                                <div class="full-time">
                                    <div class="white-box time">
                                        <div>Industry’s first modern Pharmacy Mgt System: QuickFill</div>
                                    </div>
                                    <div class="div-block-9">
                                        <div class="year deatil">QUICKFILL<br>V1.0</div>
                                        <div class="logo-wrapper"><img
                                                data-src="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/613ddeb5ee7de4b899a82f59_image%204.png"
                                                loading="lazy" width="400px" height="200px" class="lozad" alt="surescripts approves nowrx"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="timeline-box">
                                <div class="year">2018</div>
                                <div class="full-time">
                                    <div class="white-box time">
                                        <div>Pharmacy-Optimized Logistics Solution:Wheelz</div>
                                    </div>
                                    <div class="div-block-9">
                                        <div class="year deatil">QUICKFILL<br>V2.0</div>
                                        <div class="logo-wrapper"><img
                                                data-src="<?php echo get_template_directory_uri(); ?>/images/cvs-caremark-approves-nowrx.webp"
                                                loading="lazy" class="lozad" width="400px" height="200px" alt="cvs caremark approves nowrx"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="timeline-box">
                                <div class="year">2019</div>
                                <div class="full-time">
                                    <div class="white-box time">
                                        <div>Natural Language AI Chatbot and Predictive Inventory (ML)</div>
                                    </div>
                                    <div class="div-block-9">
                                        <div class="year deatil">QUICKFILL<br>V3.0</div>
                                        <div class="logo-wrapper"><img
                                                data-src="<?php echo get_template_directory_uri(); ?>/images/controlled-substance-eprescribe-certification-for-nowrx.webp"
                                                loading="lazy" class="lozad" width="400px" height="200px" alt="controlled substance eprescribe certification for nowrx"></div>
                                    </div>
                                </div>
                            </div><img
                                data-src="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/6137693b89c4889e4c5fa396_Group%2049.svg"
                                loading="lazy" alt=""  width="400px" height="200px"  class="hide-m lozad hide-d">
                            <div class="timeline-box">
                                <div class="year blue">2020</div>
                                <div class="full-time">
                                    <div class="white-box time blue-box">
                                        <div>Expand to 2nd state, Arizona</div>
                                    </div>
                                    <div class="div-block-9">
                                        <div class="year deatil blue">MULTI-STATE</div>
                                        <div class="logo-wrapper"><img
                                                data-src="<?php echo get_template_directory_uri(); ?>/images/surescripts-whoite-coat-award-winner-nowrx.webp"
                                                loading="lazy" width="400px" height="200px" class="lozad" alt="surescripts whoite coat award winner nowrx"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="timeline-box">
                                <div class="year blue">2021-2022 E</div>
                                <div class="full-time">
                                    <div class="white-box time blue-box">
                                        <div>Expand to top 15 metro areas across 10 states</div>
                                    </div>
                                    <div class="year deatil blue">NATIONAL</div>
                                </div>
                                <div class="logo-wrapper hide2"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>



            <section class="section white shadow no-pill">
                <div class="container">
                    <h2 class="h2-box h2-op center _2">Geographic <strong>Expansion</strong></h2><img
                        src="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/614a202469484c5b84e195a3_NowRX_WebsiteMap_091721%20(1).gif"
                        loading="lazy" alt="" class="image-8">
                </div>
                <div class="button-wrapper button-center"><a
                        href="https://www.seedinvest.com/nowrx/series.c" magic-link="invest-button"
                        target="_blank" class="button white-button button-menu buy-now w-button">Invest Now</a>
                </div>
            </section>

            <div class="cta lozad"
            data-background-image="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/5d5da5103e9e5a775604e1aa_pill2.svg"
                >
                <div class="w-layout-grid grid-9">
                    <h2 class="h2-left">Get the NowRx<strong> Investor Brief</strong></h2>
                    <div class="form-block w-form">
                                <div id="fm3"></div>

<script defer async>

var $document = document.querySelector("body");

document.addEventListener('load', function(evt) {

    var $script = document.querySelector("script[src='//js.hsforms.net/forms/v2.js']");

    if (!evt.target.isEqualNode($script)) {
        return;
    }

    setTimeout(() => {
        hbspt.forms.create({
                                    region: "na1",
                                    portalId: "5952677",
                                    formInstanceId: "3",
                                    formId: "df2a6935-1139-426a-b373-0917788189ad",
                                    target:'#fm3'
                                });
    }, 0);

    setTimeout(() => {
        let formDisplayed = document.getElementsByClassName('dynamic-prep-form');

        if (formDisplayed.length > 0) {
            console.log('exists', formDisplayed.length);

        } else {

            hbspt.forms.create({
                                    region: "na1",
                                    portalId: "5952677",
                                    formInstanceId: "3",
                                    formId: "df2a6935-1139-426a-b373-0917788189ad",
                                    target:'#fm3'
                                });
        }

    }, 4400);

}, true);
</script>

                    </div>
                </div>
            </div>

           <section id="opportunity" class="growth-section">
               <div class="container">
                   <header class="title">
                       <h2 class="title">Growth <strong>Strategy</strong></h2>
                       <p>
                       NowRx has been able to consistently grow its customer base and total revenue using a number of successful growth strategies.
                       </p>
                   </header>
                   <div class="content">
                       <div class="block">
                           <figure class="image">
                               <img data-src="<?php echo get_template_directory_uri(); ?>/images/nowrx-physician-referral-meeting.webp" alt="nowrx physician referral meeting" class="lozad">
                           </figure>
                           <div class="text">
                               <div class="number">
                                   <span>1</span>
                               </div>
                               <div class="text-content">
                                   <h3 class="title">Physician Referral Channel</h3>
                                   <p>NowRx’s sales team sets appointments with physicians to promote the benefits of NowRx for their patients. This strategy has been successful for the top pharma companies and is the top performing channel to date.</p>
                               </div>
                           </div>
                       </div>
                       <div class="block reverse">
                           <figure class="image">
                               <img data-src="<?php echo get_template_directory_uri(); ?>/images/daughter-showing-mother-nowrx-pharmacy-delivery-website.webp" alt="daughter showing mother nowrx pharmacy delivery website" class="lozad">
                           </figure>
                           <div class="text">
                               <div class="number">
                                   <span>2</span>
                               </div>
                               <div class="text-content">
                                   <h3 class="title">Digital Marketing</h3>
                                   <p>NowRx promotes awareness through several proven digital marketing channels that will continue to become more effective and efficient as the company expands its nationwide footprint.</p>
                               </div>
                           </div>
                       </div>
                       <div class="block">
                           <figure class="image">
                               <img data-src="<?php echo get_template_directory_uri(); ?>/images/nowrx-pharmacy-facility-.webp" alt="nowrx pharmacy facility " class="lozad">
                           </figure>
                           <div class="text">
                               <div class="number">
                                   <span>3</span>
                               </div>
                               <div class="text-content">
                                   <h3 class="title">Nationwide Expansion</h3>
                                   <p>NowRx has plans to announce roughly 10 new facilities in 2022 which will more than double its number of existing facilities and provide rapid revenue growth.</p>
                               </div>
                           </div>
                       </div>
                       <div class="block reverse">
                           <figure class="image">
                               <img data-src="<?php echo get_template_directory_uri(); ?>/images/telehealth-doctor-for-nowrx.webp" alt="telehealth doctor for nowrx" class="lozad">
                           </figure>
                           <div class="text">
                               <div class="number">
                                   <span>4</span>
                               </div>
                               <div class="text-content">
                                   <h3 class="title">Additional Products & Services</h3>
                                   <p>NowRx will expand its telehealth service (1,200% growth in 2021) in addition to adding specialty pharmacy for complex conditions and non-prescription health products which offers tremendous opportunities for revenue growth.</p>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </section>


            <section id="our-team" class="section section-bottom-padding team-sec">
                <section class="meetteam" id="execteam">
                    <div class="container">
                        <div class="header">
                            <h2 class="sec-title">Leadership <strong>Team</strong>
                            </h2>
                        </div>
                        <div class="contentprofile">
                            <!-- profile -->
                            <div class="profile">
                                <div class="image">
                                    <figure>
                                        <picture class="lozad" data-toggle-class="active">
                                            <img data-src="<?php echo get_template_directory_uri(); ?>/library/images/cary-breese.jpg"
                                                class="orbit-image lozad" height="500px" width="650px"
                                                alt="Cary Breese">
                                        </picture>
                                    </figure>
                                </div>
                                <div class="text">
                                    <h3 class="sec-title">Cary Breese</h3>
                                    <div class="subtitle">
                                        CEO/Founder
                                    </div>
                                    <p>
                                        Successful, serial entrepreneur with expertise in technology, healthcare, and
                                        financial services. Former CEO of financial services startup acquired for 18x
                                        cash-on-cash. Led $100M product line as EVP, CIGNA. B.S. in Electrical
                                        Engineering from Drexel University and credentialed actuary.


                                    </p>
                                </div>
                            </div>
                            <!-- profile -->
                            <div class="profile">
                                <div class="image">
                                    <figure>
                                        <picture class="lozad" data-toggle-class="active">
                                            <img data-src="<?php echo get_template_directory_uri(); ?>/library/images/sumeet-sheokand.jpg"
                                                class="orbit-image lozad" height="500px" width="650px"
                                                alt="Sumeet Sheokand">
                                        </picture>
                                    </figure>
                                </div>
                                <div class="text">
                                    <h3 class="sec-title">
                                        Sumeet Sheokand

                                    </h3>
                                    <div class="subtitle">
                                        CTO/Founder


                                    </div>
                                    <p>
                                        15+ years of senior leadership in software and technology startups (CTO – Genie
                                        DB, VP Engineering – X1). Extensive expertise in building business line and
                                        enterprise grade software. Adept at utilizing Big Data techniques to solve real
                                        business problems.
                                    </p>
                                </div>
                            </div>
                            <!-- profile -->
                            <div class="profile">
                                <div class="image">
                                    <figure>
                                        <picture class="lozad" data-toggle-class="active">
                                            <img data-src="<?php echo get_template_directory_uri(); ?>/library/images/melissa-bostock.jpg"
                                                class="orbit-image lozad" height="500px" width="650px"
                                                alt="Melissa Bostock">
                                        </picture>
                                    </figure>
                                </div>
                                <div class="text">
                                    <h3 class="sec-title">
                                        Melissa Bostock
                                    </h3>
                                    <div class="subtitle">
                                        Director of Pharmacy


                                    </div>
                                    <p>
                                        Doctor of Pharmacy (Pharm D) from UCSF, Master's Degree in Public Health and
                                        B.S. in Microbiology, Immunology, & Molecular Genetics from UCLA. Former Target
                                        managing pharmacist trained in medication therapy management, diabetes
                                        screening, pain management, pediatrics, and immunizations.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </section>

            <section class="popupform lozad" data-background-image="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/5d5ed1486e0dbce67eac23b9_hexagon.svg">
                <div class="content">
                    <div class="closebutton">
                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                width="348.333px" height="348.334px" viewBox="0 0 348.333 348.334" style="enable-background:new 0 0 348.333 348.334;"
                xml:space="preserve">
                    <g>
                        <path d="M336.559,68.611L231.016,174.165l105.543,105.549c15.699,15.705,15.699,41.145,0,56.85
                            c-7.844,7.844-18.128,11.769-28.407,11.769c-10.296,0-20.581-3.919-28.419-11.769L174.167,231.003L68.609,336.563
                            c-7.843,7.844-18.128,11.769-28.416,11.769c-10.285,0-20.563-3.919-28.413-11.769c-15.699-15.698-15.699-41.139,0-56.85
                            l105.54-105.549L11.774,68.611c-15.699-15.699-15.699-41.145,0-56.844c15.696-15.687,41.127-15.687,56.829,0l105.563,105.554
                            L279.721,11.767c15.705-15.687,41.139-15.687,56.832,0C352.258,27.466,352.258,52.912,336.559,68.611z"/>
                    </g>
                    </svg>
                    </div>
                    <h2 class="title">Get the NowRx Investor Deck</h2>
                    <p>
                    Download the NowRx investor pitch deck and see what is driving record demand for shares of NowRx!
                    </p>
                    <div class="formcall">
                                    <div id="fm5"></div>

<script defer async>

var $document = document.querySelector("body");

document.addEventListener('load', function(evt) {

    var $script = document.querySelector("script[src='//js.hsforms.net/forms/v2.js']");

    if (!evt.target.isEqualNode($script)) {
        return;
    }

    setTimeout(() => {
        hbspt.forms.create({
                                                region: "na1",
                                                portalId: "5952677",
                                                formInstanceId: "5",
                                                formId: "df2a6935-1139-426a-b373-0917788189ad",
                                                target:'#fm5'
                                            });
    }, 0);

    setTimeout(() => {
        let formDisplayed = document.getElementsByClassName('dynamic-prep-form');

        if (formDisplayed.length > 0) {
            console.log('exists', formDisplayed.length);

        } else {

            hbspt.forms.create({
                                                region: "na1",
                                                portalId: "5952677",
                                                formInstanceId: "5",
                                                formId: "df2a6935-1139-426a-b373-0917788189ad",
                                                target:'#fm5'
                                            });
        }

    }, 4400);

}, true);
</script>
                    </div>
                </div>
            </section>


            <footer class="main-footer">
  <div class="container fluid">
    <div class="blocks">
      <div class="block left">
        <span class="line">Get prescriptions delivered right to your door in hours for free.</span>
        <div class="social">
          <div class="text">Follow Us</div>
          <div class="social-icons">
            <div class="icon">
              <a href="https://www.instagram.com/nowrxpharmacy/?hl=en" target="_blank">
                <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="instagram" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-inline--fa fa-instagram fa-w-14 fa-7x">
                  <path fill="currentColor" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" class=""></path>
                </svg>
              </a>
            </div>
            <div class="icon">
              <a href="https://twitter.com/NowRx" target="_blank">
                <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="twitter" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-twitter fa-w-16 fa-7x">
                  <path fill="currentColor" d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z" class=""></path>
                </svg>
              </a>
            </div>
            <div class="icon">
              <a href="https://www.youtube.com/channel/UCk50FgUjUrddyWKG3ajxdGA" target="_blank">
                <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="youtube" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="svg-inline--fa fa-youtube fa-w-18 fa-7x">
                  <path fill="currentColor" d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z" class=""></path>
                </svg>
              </a>
            </div>
            <div class="icon">
              <a href="https://www.facebook.com/NowRx/" target="_blank">
                <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook-f" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="svg-inline--fa fa-facebook-f fa-w-10 fa-7x">
                  <path fill="currentColor" d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z" class=""></path>
                </svg>
              </a>
            </div>
          </div>

        </div>
      </div>
      <div class="block right">
        <div class="u-list">
          <ul class="menu-items">
            <li><a href="<?= get_site_url(); ?>/nowprep/">NowPrEP</a></li>
            <li><a href="<?= get_site_url(); ?>/for-doctors/">For Doctors</a></li>
            <li><a href="<?= get_site_url(); ?>/contact-us/">Contact Us</a></li>
            <li><a href="<?= get_site_url(); ?>/locations/">Locations</a></li>
          </ul>
          <ul class="menu-items">
            <li><a href="<?= get_site_url(); ?>/about-us/">About Us</a></li>
            <li> <a href="<?= get_site_url(); ?>/privacy-policy/">Privacy Policy</a></li>
            <li><a href="<?= get_site_url(); ?>/hipaa-privacy/">HIPAA Privacy</a></li>
            <li><a href="<?= get_site_url(); ?>/telehealth/terms-and-conditions/">Telehealth T&C</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="container fluid">
    <div class="footer-rect">
      <div class="copright">
        &copy; NowRx <?= date('Y'); ?> - All Rights Reserved
      </div>
      <div class="app">
        <div class="icon">
          <a target="_blank" href="https://apps.apple.com/us/app/nowrx-pharmacy-on-demand/id1066924988">
            <img data-src="<?php echo get_template_directory_uri(); ?>/images/Download_on_the_App_Store_Badge.svg" height="42" width="140" alt="apple play" class="lozad">
          </a>
        </div>
        <div class="icon">
          <a target="_blank" href="https://play.google.com/store/apps/details?id=com.nowrx.client">
            <img data-src="<?php echo get_template_directory_uri(); ?>/images/Google_Play_Store_badge_EN.svg" height="42" width="140" alt="google play" class="lozad">
          </a>
        </div>
      </div>
    </div>
  </div>
</footer>



            <footer class="footer wf-section">
                <div class="footer-links">
                    <!-- <div class="container-10 footer-container w-container"><img
                            data-src="https://assets.website-files.com/5d5d56675dd8937a8bcc193c/5d690b818dfed925245b6de0_NowRx-Logo-900px-white.png"
                            height="200px" width="600"
                            alt="" class="logo-2 lozad">
                        <div class="footer-nav-wrapper">
                            <a href="#highlights" class="footer-nav-link">HIGHLIGHTS</a>
                            <a href="#how-it-works" class="footer-nav-link">HOW IT WORKS</a>
                            <a href="#our-team" class="footer-nav-link">OUR TEAM</a>
                        </div>
                    </div> -->
                    <div class="footer-top">
                        <div class="w-container">
                            <div class="footer-bottom-text"><strong class="bold-text">NowRx is offering securities
                                    through
                                    the use of an Offering Statement that has been qualified by the Securities and
                                    Exchange
                                    Commission under Tier II of Regulation A. A copy of the Final Offering Circular that
                                    forms a part of the Offering Statement may be obtained from: NowRx<br></strong><a
                                    target="_blank" href="https://www.seedinvest.com/nowrx" magic-link="invest-button" class="footer-link"><strong
                                        class="bold-text">https://www.seedinvest.com/nowrx</strong></a>You should read
                                the
                                Offering Circular before making any investment. This presentation contains offering
                                materials prepared solely by NowRx without the assistance of SI Securities, and not
                                subject
                                to FINRA Rule 2210. In addition, this presentation may contain forward-looking
                                statements
                                and information relating to, among other things, the company, its business plan and
                                strategy, and its industry. These statements reflect management’s current views with
                                respect
                                to future events based information currently available and are subject to risks and
                                uncertainties that could cause the company’s actual results to differ materially.
                                Investors
                                are cautioned not to place undue reliance on these forward-looking statements as they
                                are
                                meant for illustrative purposes and they do not represent guarantees of future results,
                                levels of activity, performance, or achievements, all of which cannot be made. Moreover,
                                no
                                person nor any other person or entity assumes responsibility for the accuracy and
                                completeness of forward-looking statements, and is under no duty to update any such
                                statements to conform them to actual results.<br><br>The statement regarding "share
                                price"
                                does not represent guarantees of future valuation growth and/or declines.</div>
                        </div>
                    </div>
            </footer>



        </article>
    </main>

    <?php wp_footer(); ?>

    </div> <!-- closes off canvas content -->

    <?php
        // include modals
        get_template_part('components/investfooterscripts');
    ?>

<script src="//code.jquery.com/jquery.js"></script>
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/lodash.js/2.4.1/lodash.min.js"></script>
  <script src="//cdn.rawgit.com/hilios/jQuery.countdown/2.2.0/dist/jquery.countdown.min.js"></script>
 <script>




    $(document).ready(function () {
        $("#time").countdown("2022/5/21 <?= $hours; ?>:<?= $hours; ?>:<?= $m; ?>").on("update.countdown", function (event) {
            var $this = $(this).html(
            event.strftime(
                "" +
                '<span>%D</span> d' +
                '<span>%H</span> h' +
                '<span>%M</span> m' +
                '<span>%S</span> s'
            )
            );
        });

});
</script>
  <!--  -->
    <!--[if lte IE 8]>
    <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2-legacy.js"></script>
    <![endif]-->
    <script charset="utf-8"  type="text/javascript" src="//js.hsforms.net/forms/v2.js"></script>

<!-- <link
    rel="stylesheet"
    href="<?php echo get_template_directory_uri(); ?>/public/frontend.css?=2123"
    media="print"
    onload="this.media='all'"
    /> -->

    <script defer async>
    setTimeout(() => {
      var giftofspeed = document.createElement('link');
      giftofspeed.rel = 'stylesheet';
      giftofspeed.href = '<?php echo get_template_directory_uri(); ?>/public/frontend.css';
      giftofspeed.type = 'text/css';
      var godefer = document.getElementsByTagName('link')[0];
      godefer.parentNode.insertBefore(giftofspeed, godefer);
    }, 3000);
  </script>

    <noscript>
        <link
            href="<?php echo get_template_directory_uri(); ?>/public/frontend.css?=2123"
            rel="stylesheet"
            type="text/css"
        />
    </noscript>

    <link
    rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&family=Nunito:wght@200;300;400;500;600;700;800;900&display=swap"
    media="print"
    onload="this.media='all'"
    />
    <noscript>
        <link
            href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&family=Nunito:wght@200;300;400;500;600;700;800;900&display=swap"
            rel="stylesheet"
            type="text/css"
        />
    </noscript>


    </body>


</html> <!-- end of site. what a ride! -->