<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title>Solon</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
   <link rel="stylesheet" href="../../../css/fontawesome.css">
    <link rel="stylesheet" href="../../../css/templatemo-eduwell-style.css">
    <link rel="stylesheet" href="../../../css/owl.css">
    <link rel="stylesheet" href="../../../css/lightbox.css">
<!--

TemplateMo 573 EduWell

https://templatemo.com/tm-573-eduwell

-->
<style>
    /*

TemplateMo 573 EduWell

https://templatemo.com/tm-573-eduwell

*/

/* ---------------------------------------------
Table of contents
------------------------------------------------
01. font & reset css
02. reset
03. global styles
04. header
05. banner
06. features
07. testimonials
08. contact
09. footer
10. preloader
11. search
12. portfolio

--------------------------------------------- */
/* 
---------------------------------------------
font & reset css
--------------------------------------------- 
*/
@import url("https://fonts.googleapis.com/css?family=Open+Sans:100,200,300,400,500,600,700,800,900");
/* 
---------------------------------------------
reset
--------------------------------------------- 
*/
html, body, div, span, applet, object, iframe, h1, h2, h3, h4, h5, h6, p, blockquote, div
pre, a, abbr, acronym, address, big, cite, code, del, dfn, em, font, img, ins, kbd, q,
s, samp, small, strike, strong, sub, sup, tt, var, b, u, i, center, dl, dt, dd, ol, ul, li,
figure, header, nav, section, article, aside, footer, figcaption {
  margin: 0;
  padding: 0;
  border: 0;
  outline: 0;
}

.clearfix:after {
  content: ".";
  display: block;
  clear: both;
  visibility: hidden;
  line-height: 0;
  height: 0;
}

.clearfix {
  display: inline-block;
}

html[xmlns] .clearfix {
  display: block;
}

* html .clearfix {
  height: 1%;
}

ul, li {
  padding: 0;
  margin: 0;
  list-style: none;
}

header, nav, section, article, aside, footer, hgroup {
  display: block;
}

* {
  box-sizing: border-box;
}

html, body {
  font-family: 'Open Sans', sans-serif;
  font-weight: 400;
  background-color: #fff;
  font-size: 16px;
  -ms-text-size-adjust: 100%;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

a {
  text-decoration: none !important;
}

h1, h2, h3, h4, h5, h6 {
  margin-top: 0px;
  margin-bottom: 0px;
}

ul {
  margin-bottom: 0px;
}

p {
  font-size: 14px;
  line-height: 25px;
  color: #4a4a4a;
}

img {
  width: 100%;
  overflow: hidden;
}

/* 
---------------------------------------------
global styles
--------------------------------------------- 
*/
html,
body {
  background: #fff;
  font-family: 'Open Sans', sans-serif;
}

::selection {
  background: #dc8cdb;
  color: #fff;
}

::-moz-selection {
  background: #dc8cdb;
  color: #fff;
}

@media (max-width: 991px) {
  html, body {
    overflow-x: hidden;
  }
  .mobile-top-fix {
    margin-top: 30px;
    margin-bottom: 0px;
  }
  .mobile-bottom-fix {
    margin-bottom: 30px;
  }
  .mobile-bottom-fix-big {
    margin-bottom: 60px;
  }
}

.main-button-gradient a {
  font-size: 13px;
  color: #fff;
  background: rgb(219,138,222);
  background: linear-gradient(-145deg, rgba(219,138,222,1) 0%, rgba(246,191,159,1) 100%);
  padding: 12px 30px;
  display: inline-block;
  border-radius: 5px;
  font-weight: 500;
  text-transform: uppercase;
  transition: all .3s;
}

.main-button-gradient a:hover {
  background: rgb(219,138,222);
  background: linear-gradient(-145deg, rgba(219,138,222,1) 0%, rgba(246,191,159,1) 100%);
  opacity: 0.9;
}

.white-button a {
  font-size: 13px;
  color: #dc8cdb;
  background-color: #fff;
  padding: 12px 30px;
  display: inline-block;
  border-radius: 5px;
  font-weight: 500;
  text-transform: uppercase;
  transition: all .3s;
}

.white-button a:hover {
  opacity: 0.9;
}

.text-button a {
  font-size: 14px;
  font-weight: 500;
  color: #dc8cdb;
  text-decoration: underline !important;
  transition: all .3s;
}

.text-button a:hover {
  opacity: 0.75;
}

section {
  margin-top: 140px;
}

#contact-section {
  padding-top: 20px;
}

.section-heading {
  position: relative;
  z-index: 2;
  padding-top: 20px;
  margin-top: 0px;
  text-align: center;
  margin-bottom: 60px;
}

.section-heading h6 {
  font-size: 13px;
  text-transform: uppercase;
  color: #7a7a7a;
  font-weight: 600;
}

.section-heading h4 {
  margin-top: 10px;
  line-height: 40px;
  font-size: 28px;
  font-weight: 900;
  text-transform: capitalize;
  color: #111;
}

.section-heading h4 em {
  font-style: normal;
  color: #dc8cdb;
}

.section-heading p {
  margin-top: 30px;
}


/* 
---------------------------------------------
header
--------------------------------------------- 
*/
.background-header {
  background: rgb(219,138,222) !important;
  background: linear-gradient(-145deg, rgba(219,138,222,1) 0%, rgba(246,191,159,1) 100%) !important;
  height: 80px!important;
  position: fixed!important;
  top: 0!important;
  left: 0;
  right: 0;
  box-shadow: 0px 0px 10px rgba(0,0,0,0.15)!important;
}

.header-area {
  background-image: url(../images/header-bg.png);
  background-size: contain;
  background-repeat: no-repeat;
  background-position: center;
  position: absolute;
  height: 110px;
  top: 0;
  left: 0;
  right: 0;
  z-index: 100;
  -webkit-transition: all .5s ease 0s;
  -moz-transition: all .5s ease 0s;
  -o-transition: all .5s ease 0s;
  transition: all .5s ease 0s;
}

.header-area .main-nav {
  min-height: 80px;
  background: transparent;
}

.header-area .main-nav .logo {
  line-height: 100px;
  color: #fff;
  font-size: 28px;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 2px;
  float: left;
  -webkit-transition: all 0.3s ease 0s;
  -moz-transition: all 0.3s ease 0s;
  -o-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
}

.background-header .main-nav .logo {
  line-height: 75px;
}

.background-header .nav {
  margin-top: 20px !important;
}

.header-area .main-nav .nav {
  float: right;
  margin-top: 35px;
  margin-right: 0px;
  background-color: transparent;
  -webkit-transition: all 0.3s ease 0s;
  -moz-transition: all 0.3s ease 0s;
  -o-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
  position: relative;
  z-index: 999;
}

.header-area .main-nav .nav li {
  padding-left: 30px;
  padding-right: 30px;
}

.header-area .main-nav .nav li:last-child {
  padding-right: 0px;
}

.header-area .main-nav .nav li a {
  display: block;
  font-weight: 400;
  font-size: 14px;
  text-transform: capitalize;
  color: #fff;
  -webkit-transition: all 0.3s ease 0s;
  -moz-transition: all 0.3s ease 0s;
  -o-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
  height: 40px;
  line-height: 40px;
  border: transparent;
  letter-spacing: 1px;
}

.header-area .main-nav .nav li:hover a,
.header-area .main-nav .nav li a.active {
  color: #fff!important;
  opacity: 0.75;
}

.background-header .main-nav .nav li:hover a,
.background-header .main-nav .nav li a.active {
  color: #fff!important;
  opacity: 1;
}

.header-area .main-nav .nav li.has-sub {
  position: relative;
  padding-right: 15px;
}

.header-area .main-nav .nav li.has-sub:after {
  font-family: FontAwesome;
  content: "\f107";
  font-size: 12px;
  color: #fff;
  position: absolute;
  right: 5px;
  top: 12px;
}

.header-area .main-nav .nav li.has-sub ul.sub-menu {
  position: absolute;
  width: 140px;
  box-shadow: 0 2px 28px 0 rgba(0, 0, 0, 0.06);
  overflow: hidden;
  top: 40px;
  border-radius: 5px;
  opacity: 0;
  transition: all .3s;
  transform: translateY(+2em);
  visibility: hidden;
  z-index: -1;
}

.header-area .main-nav .nav li.has-sub ul.sub-menu li {
  margin-left: 0px;
  padding-left: 0px;
  padding-right: 0px;
}

.header-area .main-nav .nav li.has-sub ul.sub-menu li a {
  opacity: 1;
  display: block;
  background: #f7f7f7;
  color: #2a2a2a!important;
  padding-left: 20px;
  height: 40px;
  line-height: 40px;
  -webkit-transition: all 0.3s ease 0s;
  -moz-transition: all 0.3s ease 0s;
  -o-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
  position: relative;
  font-size: 12px;
  font-weight: 400;
  border-bottom: 1px solid #eee;
}

.header-area .main-nav .nav li.has-sub ul li a:hover {
  background: #fff;
  color: #dc8cdb!important;
  padding-left: 25px;
}

.header-area .main-nav .nav li.has-sub ul li a:hover:before {
  width: 3px;
}

.header-area .main-nav .nav li.has-sub:hover ul.sub-menu {
  visibility: visible;
  opacity: 1;
  z-index: 1;
  transform: translateY(0%);
  transition-delay: 0s, 0s, 0.3s;
}

.header-area .main-nav .menu-trigger {
  cursor: pointer;
  display: block;
  position: absolute;
  top: 33px;
  width: 32px;
  height: 40px;
  text-indent: -9999em;
  z-index: 99;
  right: 40px;
  display: none;
}

.background-header .main-nav .menu-trigger {
  top: 23px;
}

.header-area .main-nav .menu-trigger span,
.header-area .main-nav .menu-trigger span:before,
.header-area .main-nav .menu-trigger span:after {
  -moz-transition: all 0.4s;
  -o-transition: all 0.4s;
  -webkit-transition: all 0.4s;
  transition: all 0.4s;
  background-color: #fff;
  display: block;
  position: absolute;
  width: 30px;
  height: 2px;
  left: 0;
}

.background-header .main-nav .menu-trigger span,
.background-header .main-nav .menu-trigger span:before,
.background-header .main-nav .menu-trigger span:after {
  background-color: #fff;
}

.header-area .main-nav .menu-trigger span:before,
.header-area .main-nav .menu-trigger span:after {
  -moz-transition: all 0.4s;
  -o-transition: all 0.4s;
  -webkit-transition: all 0.4s;
  transition: all 0.4s;
  background-color: #fff;
  display: block;
  position: absolute;
  width: 30px;
  height: 2px;
  left: 0;
  width: 75%;
}

.background-header .main-nav .menu-trigger span:before,
.background-header .main-nav .menu-trigger span:after {
  background-color: #fff;
}

.header-area .main-nav .menu-trigger span:before,
.header-area .main-nav .menu-trigger span:after {
  content: "";
}

.header-area .main-nav .menu-trigger span {
  top: 16px;
}

.header-area .main-nav .menu-trigger span:before {
  -moz-transform-origin: 33% 100%;
  -ms-transform-origin: 33% 100%;
  -webkit-transform-origin: 33% 100%;
  transform-origin: 33% 100%;
  top: -10px;
  z-index: 10;
}

.header-area .main-nav .menu-trigger span:after {
  -moz-transform-origin: 33% 0;
  -ms-transform-origin: 33% 0;
  -webkit-transform-origin: 33% 0;
  transform-origin: 33% 0;
  top: 10px;
}

.header-area .main-nav .menu-trigger.active span,
.header-area .main-nav .menu-trigger.active span:before,
.header-area .main-nav .menu-trigger.active span:after {
  background-color: transparent;
  width: 100%;
}

.header-area .main-nav .menu-trigger.active span:before {
  -moz-transform: translateY(6px) translateX(1px) rotate(45deg);
  -ms-transform: translateY(6px) translateX(1px) rotate(45deg);
  -webkit-transform: translateY(6px) translateX(1px) rotate(45deg);
  transform: translateY(6px) translateX(1px) rotate(45deg);
  background-color: #fff;
}

.background-header .main-nav .menu-trigger.active span:before {
  background-color: #fff;
}

.header-area .main-nav .menu-trigger.active span:after {
  -moz-transform: translateY(-6px) translateX(1px) rotate(-45deg);
  -ms-transform: translateY(-6px) translateX(1px) rotate(-45deg);
  -webkit-transform: translateY(-6px) translateX(1px) rotate(-45deg);
  transform: translateY(-6px) translateX(1px) rotate(-45deg);
  background-color: #fff;
}

.background-header .main-nav .menu-trigger.active span:after {
  background-color: #fff;
}

.header-area.header-sticky {
  min-height: 80px;
}

.header-area .nav {
  margin-top: 30px;
}

.header-area.header-sticky .nav li a.active {
  color: #dc8cdb;
}

@media (max-width: 1200px) {
  .header-area .main-nav .nav li {
    padding-left: 7px;
    padding-right: 7px;
  }
  .header-area .main-nav:before {
    display: none;
  }
}

@media (max-width: 767px) {
  .header-area .main-nav .logo {
    color: #1e1e1e;
  }
  .header-area.header-sticky .nav li a:hover,
  .header-area.header-sticky .nav li a.active {
    color: #dc8cdb!important;
    opacity: 1;
  }
  .header-area.header-sticky .nav li.search-icon a {
    width: 100%;
  }
  .header-area {
    background-color: #f7f7f7;
    padding: 0px 15px;
    height: 100px;
    box-shadow: none;
    text-align: center;
  }
  .header-area .container {
    padding: 0px;
  }
  .header-area .logo {
    margin-left: 30px;
  }
  .header-area .menu-trigger {
    display: block !important;
  }
  .header-area .main-nav {
    overflow: hidden;
  }
  .header-area .main-nav .nav {
    float: none;
    width: 100%;
    display: none;
    -webkit-transition: all 0s ease 0s;
    -moz-transition: all 0s ease 0s;
    -o-transition: all 0s ease 0s;
    transition: all 0s ease 0s;
    margin-left: 0px;
  }
  .header-area .main-nav .nav li:first-child {
    border-top: 1px solid #eee;
  }
  .header-area.header-sticky .nav {
    margin-top: 100px !important;
  }
  .header-area .main-nav .nav li {
    width: 100%;
    background: #fff;
    border-bottom: 1px solid #eee;
    padding-left: 0px !important;
    padding-right: 0px !important;
  }
  .header-area .main-nav .nav li a {
    height: 50px !important;
    line-height: 50px !important;
    padding: 0px !important;
    border: none !important;
    background: #f7f7f7 !important;
    color: #191a20 !important;
  }
  .header-area .main-nav .nav li a:hover {
    background: #eee !important;
    color: #dc8cdb!important;
  }
  .header-area .main-nav .nav li.has-sub ul.sub-menu {
    position: relative;
    visibility: inherit;
    opacity: 1;
    z-index: 1;
    transform: translateY(0%);
    top: 0px;
    width: 100%;
    box-shadow: none;
    height: 0px;
    transition: all 0s;
  }
  .header-area .main-nav .nav li.submenu ul li a {
    font-size: 12px;
    font-weight: 400;
  }
  .header-area .main-nav .nav li.submenu ul li a:hover:before {
    width: 0px;
  }
  .header-area .main-nav .nav li.has-sub ul.sub-menu {
    height: auto;
  }
  .header-area .main-nav .nav li.has-sub:after {
    color: #3B566E;
    right: 30px;
    font-size: 14px;
    top: 15px;
  }
  .header-area .main-nav .nav li.submenu:hover ul, .header-area .main-nav .nav li.submenu:focus ul {
    height: 0px;
  }
}

@media (min-width: 767px) {
  .header-area .main-nav .nav {
    display: flex !important;
  }
}


/* 
---------------------------------------------
banner
--------------------------------------------- 
*/

section.main-banner {
  margin-top: 0px;
}

.main-banner {
  padding-top: 180px;
}

.main-banner .right-image {
  margin-left: 120px;
  position: relative;
  z-index: 2;
}

.main-banner .right-image img {
  position: relative;
  z-index: 2;
}

.main-banner .right-image::after {
  position: absolute;
  background-image: url(../images/banner-right-dec.png);
  width: 378px;
  height: 378px;
  content: '';
  right: -25%;
  z-index: 1;
}

.main-banner .header-text::after {
  position: absolute;
  background-image: url(../images/banner-left-dec.png);
  width: 214px;
  height: 429px;
  content: '';
  left: 0;
  bottom: -240px;
  z-index: 1;
}

.main-banner .header-text h6 {
  position: relative;
  z-index: 2;
  font-size: 17px;
  font-weight: 500;
  text-transform: capitalize;
  color: #777777;;
}

.main-banner .header-text h2 {
  position: relative;
  z-index: 2;
  margin-top: 20px;
  font-size: 64px;
  color: #111111;
  font-weight: 900;
  line-height: 74px;
  margin-bottom: 40px;
}

.main-banner .header-text h2 em {
  font-style: normal;
  color: #dc8cdb;
}

.main-banner .main-button-gradient {
  position: relative;
  z-index: 2;
}


/*
---------------------------------------------
services
---------------------------------------------
*/ 

.services .item {
  border-radius: 15px;
  text-align: center;
  padding: 50px 30px;
  margin: 15px;
  transition: all .3s;
}

.services .item:hover {
  box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.06);
}

.services .item .icon {
  max-width: 75px;
  margin: 0 auto;
  min-height: 80px;
  line-height: 80px;
  vertical-align: middle;
}

.services .item h4 {
  margin-top: 15px;
  margin-bottom: 15px;
  font-size: 20px;
  font-weight: 800;
}

.services .owl-dots {
  text-align: center;
  margin-top: 30px;
}

.services .owl-dots .owl-dot {
  width: 10px;
  height: 10px;
  background-color: #ddd;
  border-radius: 50%;
  margin: 0px 4px;
}

.services .owl-dots .active {
  background-color: #dc8cdb;
}


/*
---------------------------------------------
our courses
---------------------------------------------
*/

section.our-courses {
  position: relative;
}

section.our-courses .section-heading p {
  padding: 0px 60px;
}

section.our-courses:before {
  position: absolute;
  content: '';
  background-image: url(../images/our-courses-left-dec.png);
  left: 45px;
  top: -140px;
  width: 291px;
  height: 231px;
  z-index: 1;
}

section.our-courses:after {
  position: absolute;
  content: '';
  background-image: url(../images/our-courses-right-dec.png);
  right: 45px;
  top: -140px;
  width: 291px;
  height: 231px;
  z-index: 1;
}

section.our-courses .naccs {
  position: relative;
}

section.our-courses .naccs .menu div {
  padding: 15px 30px;
  text-align: center;
  border-radius: 5px !important;
  margin-bottom: 40px;
  font-size: 20px;
  color: #111;
  background-color: #fff;
  cursor: pointer;
  vertical-align: middle;
  font-weight: 900;
  transition: 1s all cubic-bezier(0.075, 0.82, 0.165, 1);
  border: 3px solid rgba(219,138,222,0.5);
}

section.our-courses .naccs .menu div.active {
  color: #dc8cdb;
  border: 3px solid rgba(219,138,222,1);
  box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.05);
}

section.our-courses ul.nacc {
  margin-left: 100px !important;
  position: relative;
  min-height: 100%;
  list-style: none;
  margin: 0;
  padding: 0;
  transition: 0.5s all cubic-bezier(0.075, 0.82, 0.165, 1);
}

section.our-courses ul.nacc li {
  background-color: #fff;
  overflow: hidden;
  opacity: 0;
  transform: translateX(50px);
  position: absolute;
  list-style: none;
  transition: 1s all cubic-bezier(0.075, 0.82, 0.165, 1);
  border-radius: 15px;
  box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.05);
  padding-right: 50px;
}

section.our-courses ul.nacc li .left-image {
  position: absolute;
  margin-right: 50px;
  top: 50%;
  transform: translateY(-50%);
}

section.our-courses ul.nacc li .left-image img {
  border-top-left-radius: 15px;
  border-bottom-left-radius: 15px;
}

section.our-courses ul.nacc li .left-image .price h6 {
  position: absolute;
  background: rgb(219,138,222);
  background: linear-gradient(-145deg, rgba(219,138,222,1) 0%, rgba(246,191,159,1) 100%);
  color: #fff;
  top: 20px;
  left: 20px;
  font-size: 20px;
  font-weight: 700;
  width: 50px;
  height: 50px;
  border-radius: 3px;
  display: inline-block;
  text-align: center;
  line-height: 50px;
}

section.our-courses ul.nacc li .right-content {
  padding: 40px 0px;
  margin-left: 350px;
}

section.our-courses ul.nacc li .right-content h4 {
  font-size: 20px;
  color: #111;
  margin-bottom: 25px;
  font-weight: 800;
}

section.our-courses ul.nacc li .right-content ul {
  margin-top: 20px;
  margin-bottom: 20px;
}

section.our-courses ul.nacc li .right-content span {
  font-size: 14px;
  font-weight: 600;
  margin-right: 30px;
  padding-right: 30px;
  border-right: 2px solid #111;
}

section.our-courses ul.nacc li .right-content .last-span {
  margin-right: 0px;
  padding-right: 0px;
  border-right: none;
}

section.our-courses ul.nacc li .right-content p {
  margin-bottom: 20px;
}

section.our-courses ul.nacc li .right-content .text-button {
  margin-top: 20px;
}

section.our-courses ul.nacc li.active {
  position: relative;
  transition-delay: 0.3s;
  z-index: 2;
  opacity: 1;
  transform: translateX(0px);
}

section.our-courses ul.nacc li p {
  margin: 0;
}


/*
---------------------------------------------
cta
---------------------------------------------
*/

section.simple-cta {
  background-image: url(../images/cta-bg.png);
  background-repeat: no-repeat;
  background-position: center center;
  background-size: cover;
  width: 100%;
  padding: 180px 0px 180px 0px;
}

section.simple-cta .left-image {
  margin-right: 45px;
}

section.simple-cta h6 {
  font-size: 17px;
  color: #fff;
}

section.simple-cta h4 {
  font-size: 62px;
  font-weight: 900;
  color: #fff;
  line-height: 74px;
  margin-top: 20px;
}

section.simple-cta p {
  color: #fff;
  margin-top: 30px;
  margin-bottom: 40px;
}


/* 
---------------------------------------------
testimonials
--------------------------------------------- 
*/

section.testimonials {
  position: relative;
}

section.testimonials:before {
  position: absolute;
  content: '';
  background-image: url(../images/testimonials-left-dec.png);
  left: 0px;
  top: -140px;
  width: 593px;
  height: 352px;
  z-index: 1;
}

section.testimonials:after {
  position: absolute;
  content: '';
  background-image: url(../images/testimonials-right-dec.png);
  right: 0px;
  bottom: -140px;
  width: 632px;
  height: 352px;
  z-index: 1;
}

.testimonials .item {
  border-radius: 15px;
  padding: 30px;
  background-color: #fff;
  margin: 15px;
  transition: all .3s;
  position: relative;
  z-index: 2;
}

.testimonials .item:hover {
  box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.06);
}

.testimonials .item p {
  font-size: 16px;
  font-style: italic;
}

.testimonials .item h4 {
  margin-top: 30px;
  font-size: 20px;
  font-weight: 900;
  position: relative;
}

.testimonials .item span {
  font-size: 13px;
  font-weight: 700;
  color: #dc8cdb;
}

.testimonials .item img {
  max-width: 44px;
  z-index: 2;
  position: absolute;
  right: 30px;
  bottom: 30px
}

.testimonials .owl-dots {
  text-align: center;
  margin-top: 30px;
}

.testimonials .owl-dots .owl-dot {
  width: 10px;
  height: 10px;
  background-color: #ddd;
  border-radius: 50%;
  margin: 0px 4px;
}

.testimonials .owl-dots .active {
  background-color: #dc8cdb;
}



/* 
---------------------------------------------
contact us
--------------------------------------------- 
*/

section.contact-us {
  background-image: url(../images/footer-bg.png);
  background-position: center center;
  background-repeat: no-repeat;
  background-size: cover;
  padding: 0px;
  position: relative;
}

section.contact-us:after {
  position: absolute;
  content: '';
  background-image: url(../images/footer-left-dec.png);
  left: 0px;
  top: 60px;
  width: 267px;
  height: 396px;
  z-index: 1;
}

section.contact-us .contact-info {
  background-color: #fff;
  margin-top: -30px;
  box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.05);
  border-radius: 15px;
  z-index: 5;
  position: relative;
  padding: 20px;
}

section.contact-us .contact-info .icon i {
  float: left;
  margin-right: 15px;
  width: 50px;
  height: 50px;
  display: inline-block;
  text-align: center;
  line-height: 50px;
  border-radius: 50%;
  background: rgb(219,138,222);
  background: linear-gradient(-145deg, rgba(219,138,222,1) 0%, rgba(246,191,159,1) 100%);
  color: #fff;
}

section.contact-us .contact-info h4 {
  font-size: 18px;
  font-weight: 900;
  text-transform: uppercase;
}

section.contact-us .contact-info span {
  font-size: 15px;
  color: #dc8cdb;
  font-weight: 700;
}

section.contact-us .section-heading {
  text-align: left;
  margin-bottom: 40px;
}

section.contact-us #contact {
  margin-left: -100px;
  position: relative;
  z-index: 5;
  background-color: #fff;
  margin-top: 40px;
  box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.05);
  border-radius: 15px;
  padding: 40px;
}

section.contact-us #contact input {
  width: 100%;
  height: 40px;
  border-radius: 5px;
  background-color: #f4f7fb;
  outline: none;
  border: none;
  box-shadow: none;
  font-size: 13px;
  font-weight: 500;
  color: #7a7a7a;
  padding: 0px 15px;
  margin-bottom: 30px;
}

section.contact-us #contact textarea {
  width: 100%;
  min-height: 140px;
  max-height: 180px;
  border-radius: 5px;
  background-color: #f4f7fb;
  outline: none;
  border: none;
  box-shadow: none;
  font-size: 13px;
  font-weight: 500;
  color: #7a7a7a;
  padding: 15px;
  margin-bottom: 30px;
}

section.contact-us #contact button {
  float: right;
  font-size: 13px;
  color: #fff;
  background: rgb(219,138,222);
  background: linear-gradient(-145deg, rgba(219,138,222,1) 0%, rgba(246,191,159,1) 100%);
  padding: 12px 30px;
  display: inline-block;
  border-radius: 5px;
  font-weight: 500;
  text-transform: uppercase;
  transition: all .3s;
  transition: all .3s;
  border: none;
  outline: none;
}

section.contact-us #contact button:hover {
  opacity: 0.9;
}

section.contact-us ul.social-icons li {
  display: inline-block;
  margin: 0px 5px;
}

section.contact-us ul.social-icons {
  text-align: center;
  margin-top: 70px;
}

section.contact-us ul.social-icons li a {
  width: 44px;
  height: 44px;
  display: inline-block;
  text-align: center;
  line-height: 44px;
  background-color: #fff;
  color: #dc8cdb;
  border-radius: 50%;
  transition: all .5s;
}

section.contact-us ul.social-icons li a:hover {
  background-color: #dc8cdb;
  color: #fff;
}

p.copyright {
  text-align: center;
  color: #fff;
  margin: 40px 0px;
}

p.copyright a {
  font-weight: 700;
  color: #fff;
}

/*
---------------------------------------------
heading page
---------------------------------------------
*/

section.page-heading {
  margin-top: 190px;
  text-align: center;
}

section.page-heading .header-text {
  border-bottom: 3px solid #eee;
  padding-bottom: 80px;
}

section.page-heading .header-text h4 {
  font-size: 17px;
  text-transform: capitalize;
  color: #7a7a7a;
}

section.page-heading .header-text h1 {
  font-size: 62px;
  font-weight: 900;
  color: #111;
  margin-top: 10px;
}


/*
---------------------------------------------
about us page
---------------------------------------------
*/

section.get-info .left-image {
  margin-right: 30px;
}

section.get-info .section-heading {
  text-align: left;
}

section.get-info .info-item {
  border-radius: 15px;
  text-align: left;
  padding: 60px 30px 30px 30px;
  box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.06);
  position: relative;
}

section.get-info .info-item .icon {
  position: absolute;
  left: 30px;
  top: -30px;
  width: 80px;
  height: 80px;
  display: inline-block;
  border-radius: 15px;
  text-align: center;
  line-height: 80px;
  background-color: #fff;
  box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.06);
}

section.get-info .info-item .icon img {
  max-width: 60%;
}

section.get-info .info-item h4 {
  margin-top: 15px;
  margin-bottom: 15px;
  font-size: 20px;
  font-weight: 800;
}

section.our-team {
  position: relative;
}

section.our-team .section-heading p {
  padding: 0px 60px;
}

section.our-team:before {
  position: absolute;
  content: '';
  background-image: url(../images/our-courses-left-dec.png);
  left: 45px;
  top: -140px;
  width: 291px;
  height: 231px;
  z-index: 1;
}

section.our-team:after {
  position: absolute;
  content: '';
  background-image: url(../images/our-courses-right-dec.png);
  right: 45px;
  top: -140px;
  width: 291px;
  height: 231px;
  z-index: 1;
}

section.our-team .naccs {
  position: relative;
  text-align: center;
}

section.our-team .naccs .menu {
  position: relative;
  display: inline-block;
}

section.our-team .naccs .menu div {
  margin: 0px 15px;
  text-align: center;
  display: inline-block;
  width: 15%;
  text-align: center;
  font-size: 20px;
  color: #111;
  background-color: #fff;
  cursor: pointer;
  vertical-align: middle;
  font-weight: 900;
}

section.our-team .naccs .menu div img {
  border-radius: 50%;
  max-width: 120px;
}

section.our-team .naccs .menu div h4 {
  font-size: 15px;
  font-weight: 900;
  margin-top: 15px;
  margin-bottom: 5px;
}

section.our-team .naccs .menu div span {
  font-size: 12px;
  text-transform: uppercase;
  color: #dc8cdb;
  font-weight: 700;
  display: block;
}

section.our-team .naccs .menu div.active h4 {
  color: #dc8cdb;
}

section.our-team ul.nacc {
  margin-top: 40px !important;
  position: relative;
  min-height: 100%;
  height: 100% !important;
  list-style: none;
  margin: 0;
  padding: 0;
}

section.our-team ul.nacc li {
  z-index: -1;
  opacity: 0;
  transform: translateX(50px);
  background-color: #fff;
  position: absolute;
  list-style: none;
  transition: 1s all cubic-bezier(0.075, 0.82, 0.165, 1);
  border-radius: 15px;
  box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.05);
  padding: 40px;
}

section.our-team ul.nacc li.active {
  position: relative !important;
  overflow: hidden;
}

section.our-team ul.nacc li .right-image {
  position: absolute;
  right: 0;
  top: 50%;
  transform: translateY(-50%);
}

section.our-team ul.nacc li .right-image img {
  border-top-right-radius: 15px;
  border-bottom-right-radius: 15px;
}

section.our-team ul.nacc li .left-content {
  text-align: left;
  margin-right: 380px;
}

section.our-team ul.nacc li .left-content h4 {
  font-size: 20px;
  color: #111;
  margin-bottom: 25px;
  font-weight: 800;
}

section.our-team ul.nacc li .left-content span a {
  font-size: 14px;
  font-weight: 600;
  margin-right: 30px;
  padding-right: 30px;
  color: #111;
  border-right: 2px solid #111;
  transition: all .3s;
}

section.our-team ul.nacc li .left-content span a:hover {
  color: #dc8cdb;
}

section.our-team ul.nacc li .left-content .last-span a {
  margin-right: 0px;
  padding-right: 0px;
  border-right: none;
}

section.our-team ul.nacc li .left-content p {
  margin-bottom: 30px;
}

section.our-team ul.nacc li .left-content .text-button {
  margin-top: 30px;
}

section.our-team ul.nacc li.active {
  transition-delay: 0.3s;
  z-index: 2;
  opacity: 1;
  transform: translateX(0px);
}

section.our-team ul.nacc li p {
  margin: 0;
}

section.our-office .left-info {
  margin-right: 0px;
  position: relative;
  z-index: 5;
  background-color: #fff;
  margin-top: 40px;
  box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.05);
  border-radius: 15px;
  padding: 40px;
}

section.our-office .left-info p {
  margin-bottom: 40px;
}

section.our-office .left-info ul li {
  display: block;
  font-size: 14px;
  font-weight: 600;
  color: #4a4a4a;
  font-style: italic;
  margin-bottom: 20px;
}

section.our-office .left-info ul li:last-child {
  margin-bottom: 0px;
}

section.our-office .left-info .main-button-gradient {
  margin-top: 40px;
}

section.our-office #video {
  margin-left: -70px;
}

section.our-office #video .thumb {
  position: relative;
}

section.our-office #video .thumb .play-button {
  position: absolute;
  top: 50%;
  left: 50%;
}

section.our-office #video .thumb .play-button a {
  width: 80px;
  height: 80px;
  display: inline-block;
  text-align: center;
  line-height: 80px;
  border-radius: 50%;
  transform: translate(-40px, -40px);
  color: #fff;
  font-size: 22px;
  background: rgb(219,138,222);
  background: linear-gradient(-145deg, rgba(219,138,222,1) 0%, rgba(246,191,159,1) 100%);
}

section.our-office #video img {
  border-radius: 20px;
}



/*
---------------------------------------------
our services page
---------------------------------------------
*/

section.featured-product {
  position: relative;
}

section.featured-product:before {
  position: absolute;
  content: '';
  background-image: url(../images/testimonials-left-dec.png);
  left: 0px;
  top: -140px;
  width: 593px;
  height: 352px;
  z-index: 1;
}

section.featured-product:after {
  position: absolute;
  content: '';
  background-image: url(../images/testimonials-right-dec.png);
  right: 0px;
  bottom: -140px;
  width: 632px;
  height: 352px;
  z-index: 1;
}

section.featured-product .info-item {
  border-radius: 15px;
  text-align: left;
  padding: 60px 30px 30px 30px;
  box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.06);
  position: relative;
  margin-bottom: 90px;
}

section.featured-product .last-info {
  margin-bottom: 0px;
}

section.featured-product .left-info .info-item .icon {
  right: 30px;
  top: -30px;
}

section.featured-product .left-info .info-item {
  text-align: right;
}

section.featured-product .right-info .info-item .icon {
  left: 30px;
  top: -30px;
}

section.featured-product .info-item .icon {
  position: absolute;
  width: 80px;
  height: 80px;
  display: inline-block;
  border-radius: 15px;
  text-align: center;
  line-height: 80px;
  background-color: #fff;
  box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.06);
}

section.featured-product .info-item .icon img {
  max-width: 60%;
}

section.featured-product .info-item h4 {
  margin-top: 15px;
  margin-bottom: 15px;
  font-size: 20px;
  font-weight: 800;
}

section.featured-product .product-image {
  margin: 0px 60px;
}


/*
---------------------------------------------
contact us page
---------------------------------------------
*/

section.more-info .section-heading {
  margin-bottom: 40px;
  text-align: left;
}

section.more-info p {
  margin-bottom: 40px;
}

section.more-info ul li {
  display: block;
  font-size: 14px;
  font-weight: 600;
  color: #4a4a4a;
  font-style: italic;
  margin-bottom: 20px;
}

section.more-info ul li:last-child {
  margin-bottom: 0px;
}

section.more-info .count-area-content {
  margin-bottom: 20px;
  margin-top: 20px;
}

section.more-info .count-area-content .count-digit {
  background-color: #fff;
  box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.05);
  border-radius: 15px;
  text-align: center;
  display: inline-block;
  margin-left: 50%;
  transform: translateX(-40px);
  width: 80px;
  height: 80px;
  line-height: 80px;
  font-size: 28px;
  color: #dc8cdb;
  font-weight: 900;
  margin-bottom: -40px;
  position: relative;
  z-index: 2;
}

section.more-info .count-area-content .count-title {
  background-color: #fff;
  box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.05);
  border-radius: 15px;
  text-align: center;
  font-size: 20px;
  font-weight: 900;
  color: #111;
  padding: 50px 30px 30px 30px;
  position: relative;
  z-index: 1;
}


/* 
---------------------------------------------
responsive
--------------------------------------------- 
*/


body {
  overflow-x: hidden;
}

@media (max-width: 1330px) {
  .services .owl-nav .owl-next{
    right: -30px;
  }
  .services .owl-nav .owl-prev{
    left: -25px;
  }
  .our-courses .owl-nav .owl-next{
    right: -30px;
  }
  .our-courses .owl-nav .owl-prev{
    left: -25px;
  }
}

@media (max-width: 1200px) {
  .main-banner .right-image {
    margin-left: 60px;
  }
  .main-banner .header-text h2 {
    font-size: 62px;
  }
  .header-area {
    background: rgb(219,138,222) !important;
    background: linear-gradient(-145deg, rgba(219,138,222,1) 0%, rgba(246,191,159,1) 100%) !important;
  }
  .services .owl-nav .owl-next{
    right: -70px;
  }
  .services .owl-nav .owl-prev{
    left: -65px;
  }
  .our-courses .owl-nav .owl-next{
    right: -70px;
  }
  .our-courses .owl-nav .owl-prev{
    left: -65px;
  }
}

@media (max-width: 1085px) {
  .services .owl-nav .owl-next{
    right: -30px;
  }
  .services .owl-nav .owl-prev{
    left: -25px;
  }
  .our-courses .owl-nav .owl-next{
    right: -30px;
  }
  .our-courses .owl-nav .owl-prev{
    left: -25px;
  }
}

@media (max-width: 1005px) {
  .services .owl-nav .owl-next{
    display: none;
  }
  .services .owl-nav .owl-prev{
    display: none;
  }
  .our-courses .owl-nav .owl-next{
    display: none;
  }
  .our-courses .owl-nav .owl-prev{
    display: none;
  }
}

@media (max-width: 992px) {

  .main-banner .header-text {
    text-align: center;
    margin-bottom: 60px;
  }
  .main-banner .right-image {
    margin-left: 0px;
  }
  section.our-courses ul.nacc {
    margin-left: 0px !important;
  }
  section.simple-cta {
    margin-top: 0px;
  }
  section.simple-cta .left-image {
    margin-right: 0px;
    margin-bottom: 45px;
  }
  section.contact-us .contact-info {
    margin-top: 15px;
  }
  section.contact-us #contact {
    margin-left: 0px;
  }
  section.contact-us #contact button {
    float: none;
  }
  section.get-info .left-image {
    margin-right: 0px;
    margin-bottom: 30px;
  }
  section.get-info .info-item {
    margin-top: 60px;
  }
  section.our-office #video {
    margin-left: 0px;
    margin-top: 30px;
  }
  section.featured-product .left-info .info-item,
  section.featured-product .right-info .info-item {
    text-align: center;
    background-color: #fff;
    position: relative;
    z-index: 2;
  }
  section.featured-product .left-info .info-item .icon {
    right: 50%;
    transform: translateX(40px);
  }
  section.featured-product .right-info .info-item .icon {
    left: 50%;
    transform: translateX(-40px);
  }
  section.featured-product .product-image {
    margin: 60px
  }
  section.our-team ul.nacc li .left-content span a,
  section.our-courses ul.nacc li .right-content span {
    margin-right: 15px;
    padding-right: 15px;
  }
}

@media (max-width: 767px) {
  .header-area .main-nav .nav li.has-sub ul.sub-menu {
    display: none;
  }
  section.our-courses ul.nacc li .left-image,
  section.our-team ul.nacc li .right-image {
    position: relative;
    margin-right: 0px;
    margin-left: 0px;
    transform: translateY(-0%);
  }
  section.our-courses ul.nacc li .left-image img,
  section.our-team ul.nacc li .right-image img {
    border-radius: 15px;
  }
  section.our-courses ul.nacc li,
  section.our-team ul.nacc li {
    padding: 0px;
  }
  section.our-courses ul.nacc li .right-content {
    margin-left: 0px;
    padding: 30px;
  }
  section.our-team ul.nacc li .left-content {
    margin-right: 0px;
    padding: 30px;
  }
  section.our-team .naccs .menu div {
    width: 14%;
    margin: 0px 5px;
  }
  section.our-team .naccs .menu div.active img {
    border: 3px solid #dc8cdb;
  }
  section.our-team .naccs .menu div h4,
  section.our-team .naccs .menu div span {
    display: none;
  }
  section.more-info .count-area-content .count-title {
    font-size: 22px;
  }
  /**
 * Owl Carousel v2.3.4
 * Copyright 2013-2018 David Deutsch
 * Licensed under: SEE LICENSE IN https://github.com/OwlCarousel2/OwlCarousel2/blob/master/LICENSE
 */
/*
 *  Owl Carousel - Core
 */
.owl-carousel {
  display: none;
  width: 100%;
  -webkit-tap-highlight-color: transparent;
  /* position relative and z-index fix webkit rendering fonts issue */
  position: relative;
  z-index: 1; }
  .owl-carousel .owl-stage {
    position: relative;
    -ms-touch-action: pan-Y;
    touch-action: manipulation;
    -moz-backface-visibility: hidden;
    /* fix firefox animation glitch */ }
  .owl-carousel .owl-stage:after {
    content: ".";
    display: block;
    clear: both;
    visibility: hidden;
    line-height: 0;
    height: 0; }
  .owl-carousel .owl-stage-outer {
    position: relative;
    overflow: hidden;
    /* fix for flashing background */
    -webkit-transform: translate3d(0px, 0px, 0px); }
  .owl-carousel .owl-wrapper,
  .owl-carousel .owl-item {
    -webkit-backface-visibility: hidden;
    -moz-backface-visibility: hidden;
    -ms-backface-visibility: hidden;
    -webkit-transform: translate3d(0, 0, 0);
    -moz-transform: translate3d(0, 0, 0);
    -ms-transform: translate3d(0, 0, 0); }
  .owl-carousel .owl-item {
    position: relative;
    min-height: 1px;
    float: left;
    -webkit-backface-visibility: hidden;
    -webkit-tap-highlight-color: transparent;
    -webkit-touch-callout: none; }
  .owl-carousel .owl-item img {
    display: block;
    width: 100%; }
  .owl-carousel .owl-nav.disabled,
  .owl-carousel .owl-dots.disabled {
    display: none; }
  .owl-carousel .owl-nav .owl-prev,
  .owl-carousel .owl-nav .owl-next,
  .owl-carousel .owl-dot {
    cursor: pointer;
    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none; }
  .owl-carousel .owl-nav button.owl-prev,
  .owl-carousel .owl-nav button.owl-next,
  .owl-carousel button.owl-dot {
    background: none;
    color: inherit;
    border: none;
    padding: 0 !important;
    font: inherit; }
  .owl-carousel.owl-loaded {
    display: block; }
  .owl-carousel.owl-loading {
    opacity: 0;
    display: block; }
  .owl-carousel.owl-hidden {
    opacity: 0; }
  .owl-carousel.owl-refresh .owl-item {
    visibility: hidden; }
  .owl-carousel.owl-drag .owl-item {
    -ms-touch-action: pan-y;
        touch-action: pan-y;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none; }
  .owl-carousel.owl-grab {
    cursor: move;
    cursor: grab; }
  .owl-carousel.owl-rtl {
    direction: rtl; }
  .owl-carousel.owl-rtl .owl-item {
    float: right; }

/* No Js */
.no-js .owl-carousel {
  display: block; }

/*
 *  Owl Carousel - Animate Plugin
 */
.owl-carousel .animated {
  animation-duration: 1000ms;
  animation-fill-mode: both; }

.owl-carousel .owl-animated-in {
  z-index: 0; }

.owl-carousel .owl-animated-out {
  z-index: 1; }

.owl-carousel .fadeOut {
  animation-name: fadeOut; }

@keyframes fadeOut {
  0% {
    opacity: 1; }
  100% {
    opacity: 0; } }

/*
 * 	Owl Carousel - Auto Height Plugin
 */
.owl-height {
  transition: height 500ms ease-in-out; }

/*
 * 	Owl Carousel - Lazy Load Plugin
 */
.owl-carousel .owl-item {
  /**
			This is introduced due to a bug in IE11 where lazy loading combined with autoheight plugin causes a wrong
			calculation of the height of the owl-item that breaks page layouts
		 */ }
  .owl-carousel .owl-item .owl-lazy {
    opacity: 0;
    transition: opacity 400ms ease; }
  .owl-carousel .owl-item .owl-lazy[src^=""], .owl-carousel .owl-item .owl-lazy:not([src]) {
    max-height: 0; }
  .owl-carousel .owl-item img.owl-lazy {
    transform-style: preserve-3d; }

/*
 * 	Owl Carousel - Video Plugin
 */
.owl-carousel .owl-video-wrapper {
  position: relative;
  height: 100%;
  background: #000; }

.owl-carousel .owl-video-play-icon {
  position: absolute;
  height: 80px;
  width: 80px;
  left: 50%;
  top: 50%;
  margin-left: -40px;
  margin-top: -40px;
  background: url("owl.video.play.png") no-repeat;
  cursor: pointer;
  z-index: 1;
  -webkit-backface-visibility: hidden;
  transition: transform 100ms ease; }

.owl-carousel .owl-video-play-icon:hover {
  -ms-transform: scale(1.3, 1.3);
      transform: scale(1.3, 1.3); }

.owl-carousel .owl-video-playing .owl-video-tn,
.owl-carousel .owl-video-playing .owl-video-play-icon {
  display: none; }

.owl-carousel .owl-video-tn {
  opacity: 0;
  height: 100%;
  background-position: center center;
  background-repeat: no-repeat;
  background-size: contain;
  transition: opacity 400ms ease; }

.owl-carousel .owl-video-frame {
  position: relative;
  z-index: 1;
  height: 100%;
  width: 100%; }
  html.lb-disable-scrolling {
  overflow: hidden;
  /* Position fixed required for iOS. Just putting overflow: hidden; on the body is not enough. */
  position: fixed;
  height: 100vh;
  width: 100vw;
}

.lightboxOverlay {
  position: absolute;
  top: 0;
  left: 0;
  z-index: 9999;
  background-color: black;
  filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=95);
  opacity: 0.95;
  display: none;
}

.lightbox {
  position: absolute;
  left: 0;
  width: 100%;
  z-index: 10000;
  text-align: center;
  line-height: 0;
  font-weight: normal;
}

.lightbox .lb-image {
  display: block;
  height: auto;
  max-width: inherit;
  max-height: none;
  border-radius: 5px;
}

.lightbox a img {
  border: none;
}

.lb-outerContainer {
  position: relative;
  *zoom: 1;
  width: 250px;
  height: 250px;
  margin: 0 auto;
  border-radius: 4px;
  background-color: white;
}

.lb-outerContainer:after {
  content: "";
  display: table;
  clear: both;
}

.lb-loader {
  position: absolute;
  top: 43%;
  left: 0;
  height: 25%;
  width: 100%;
  text-align: center;
  line-height: 0;
}

.lb-cancel {
  display: block;
  width: 32px;
  height: 32px;
  margin: 0 auto;
  background: url(../images/loading.gif) no-repeat;
}

.lb-nav {
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  z-index: 10;
}

.lb-container > .nav {
  left: 0;
}

.lb-nav a {
  outline: none;
  background-image: url('data:image/gif;base64,R0lGODlhAQABAPAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==');
}

.lb-prev, .lb-next {
  height: 100%;
  cursor: pointer;
  display: block;
}

.lb-nav a.lb-prev {
  width: 34%;
  left: 0;
  float: left;
  background: url(../images/prev.png) left 48% no-repeat;
  filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
  opacity: 0;
  -webkit-transition: opacity 0.6s;
  -moz-transition: opacity 0.6s;
  -o-transition: opacity 0.6s;
  transition: opacity 0.6s;
}

.lb-nav a.lb-prev:hover {
  filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
  opacity: 1;
}

.lb-nav a.lb-next {
  width: 64%;
  right: 0;
  float: right;
  background: url(../images/next.png) right 48% no-repeat;
  filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
  opacity: 0;
  -webkit-transition: opacity 0.6s;
  -moz-transition: opacity 0.6s;
  -o-transition: opacity 0.6s;
  transition: opacity 0.6s;
}

.lb-nav a.lb-next:hover {
  filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
  opacity: 1;
}

.lb-dataContainer {
  margin: 0 auto;
  padding-top: 5px;
  *zoom: 1;
  width: 100%;
  border-bottom-left-radius: 4px;
  border-bottom-right-radius: 4px;
}

.lb-dataContainer:after {
  content: "";
  display: table;
  clear: both;
}

.lb-data {
  padding: 0 4px;
  color: #ccc;
}

.lb-data .lb-details {
  margin-top: 10px;
  width: 85%;
  float: left;
  text-align: left;
  line-height: 1.1em;
}

.lb-data .lb-caption {
  font-size: 13px;
  font-weight: bold;
  line-height: 1em;
}

.lb-data .lb-caption a {
  color: #4ae;
}

.lb-data .lb-number {
  display: block;
  clear: left;
  padding-bottom: 1em;
  font-size: 12px;
  color: #999999;
}

.lb-data .lb-close {
  display: block;
  float: right;
  width: 30px;
  height: 30px;
  margin-top: 15px;
  background: url(../images/close.png) top right no-repeat;
  text-align: right;
  outline: none;
  filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=70);
  opacity: 0.7;
  -webkit-transition: opacity 0.2s;
  -moz-transition: opacity 0.2s;
  -o-transition: opacity 0.2s;
  transition: opacity 0.2s;
}

.lb-data .lb-close:hover {
  cursor: pointer;
  filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
  opacity: 1;
}
/*
 * jQuery FlexSlider v2.7.1
 * http://www.woothemes.com/flexslider/
 *
 * Copyright 2012 WooThemes
 * Free to use under the GPLv2 and later license.
 * http://www.gnu.org/licenses/gpl-2.0.html
 *
 * Contributing author: Tyler Smith (@mbmufffin)
 *
 */
/* ====================================================================================================================
 * FONT-FACE
 * ====================================================================================================================*/
 @font-face {
  font-family: 'flexslider-icon';
  src: url('../fonts/flexslider-icon.eot');
  src: url('../fonts/flexslider-icon.eot?#iefix') format('embedded-opentype'), url('../fonts/flexslider-icon.woff') format('woff'), url('../fonts/flexslider-icon.ttf') format('truetype'), url('../fonts/flexslider-icon.svg#flexslider-icon') format('svg');
  font-weight: normal;
  font-style: normal;
}
/* ====================================================================================================================
 * RESETS
 * ====================================================================================================================*/
.flex-container a:hover,
.flex-slider a:hover {
  outline: none;
}
.slides,
.slides > li,
.flex-control-nav,
.flex-direction-nav {
  margin: 0;
  padding: 0;
  list-style: none;
}
.flex-pauseplay span {
  text-transform: capitalize;
}
/* ====================================================================================================================
 * BASE STYLES
 * ====================================================================================================================*/
.flexslider {
  margin: 0;
  padding: 0;
}
.flexslider .slides > li {
  display: none;
  -webkit-backface-visibility: hidden;
}
.flexslider .slides img {
  width: 100%;
  display: block;
}
.flexslider .slides:after {
  content: "\0020";
  display: block;
  clear: both;
  visibility: hidden;
  line-height: 0;
  height: 0;
}
html[xmlns] .flexslider .slides {
  display: block;
}
* html .flexslider .slides {
  height: 1%;
}
.no-js .flexslider .slides > li:first-child {
  display: block;
}
/* ====================================================================================================================
 * DEFAULT THEME
 * ====================================================================================================================*/
.flexslider {
  margin: 0;
  background: #fff;
  border: 4px solid #fff;
  position: relative;
  zoom: 1;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  border-radius: 4px;
  -webkit-box-shadow: '' 0 1px 4px rgba(0, 0, 0, 0.2);
  -moz-box-shadow: '' 0 1px 4px rgba(0, 0, 0, 0.2);
  -o-box-shadow: '' 0 1px 4px rgba(0, 0, 0, 0.2);
  box-shadow: '' 0 1px 4px rgba(0, 0, 0, 0.2);
}
.flexslider .slides {
  zoom: 1;
}
.flexslider .slides img {
  height: auto;
  -moz-user-select: none;
}
.flex-viewport {
  max-height: 2000px;
  -webkit-transition: all 1s ease;
  -moz-transition: all 1s ease;
  -ms-transition: all 1s ease;
  -o-transition: all 1s ease;
  transition: all 1s ease;
}
.loading .flex-viewport {
  max-height: 300px;
}
@-moz-document url-prefix() {
  .loading .flex-viewport {
    max-height: none;
  }
}
.carousel li {
  margin-right: 5px;
}
.flex-direction-nav {
  *height: 0;
}
.flex-direction-nav a {
  text-decoration: none;
  display: block;
  width: 40px;
  height: 40px;
  line-height: 40px;
  margin: -20px 0 0;
  position: absolute;
  top: 50%;
  z-index: 10;
  overflow: hidden;
  opacity: 0;
  cursor: pointer;
  color: rgba(0, 0, 0, 0.8);
  text-shadow: 1px 1px 0 rgba(255, 255, 255, 0.3);
  -webkit-transition: all 0.3s ease-in-out;
  -moz-transition: all 0.3s ease-in-out;
  -ms-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}
.flex-direction-nav a:before {
  font-family: "flexslider-icon";
  font-size: 26px;
  display: inline-block;
  content: '\f001';
  color: rgba(0, 0, 0, 0.8);
  text-shadow: 1px 1px 0 rgba(255, 255, 255, 0.3);
}
.flex-direction-nav a.flex-next:before {
  content: '\f002';
}
.flex-direction-nav .flex-prev {
  left: -50px;
}
.flex-direction-nav .flex-next {
  right: -50px;
  text-align: right;
}
.flexslider:hover .flex-direction-nav .flex-prev {
  opacity: 0.7;
  left: 10px;
}
.flexslider:hover .flex-direction-nav .flex-prev:hover {
  opacity: 1;
}
.flexslider:hover .flex-direction-nav .flex-next {
  opacity: 0.7;
  right: 10px;
}
.flexslider:hover .flex-direction-nav .flex-next:hover {
  opacity: 1;
}
.flex-direction-nav .flex-disabled {
  opacity: 0!important;
  filter: alpha(opacity=0);
  cursor: default;
  z-index: -1;
}
.flex-pauseplay a {
  display: block;
  width: 20px;
  height: 20px;
  position: absolute;
  bottom: 5px;
  left: 10px;
  opacity: 0.8;
  z-index: 10;
  overflow: hidden;
  cursor: pointer;
  color: #000;
}
.flex-pauseplay a:before {
  font-family: "flexslider-icon";
  font-size: 20px;
  display: inline-block;
  content: '\f004';
}
.flex-pauseplay a:hover {
  opacity: 1;
}
.flex-pauseplay a.flex-play:before {
  content: '\f003';
}
.flex-control-nav {
  width: 100%;
  position: absolute;
  bottom: -40px;
  text-align: center;
}
.flex-control-nav li {
  margin: 0 6px;
  display: inline-block;
  zoom: 1;
  *display: inline;
}
.flex-control-paging li a {
  width: 11px;
  height: 11px;
  display: block;
  background: #666;
  background: rgba(0, 0, 0, 0.5);
  cursor: pointer;
  text-indent: -9999px;
  -webkit-box-shadow: inset 0 0 3px rgba(0, 0, 0, 0.3);
  -moz-box-shadow: inset 0 0 3px rgba(0, 0, 0, 0.3);
  -o-box-shadow: inset 0 0 3px rgba(0, 0, 0, 0.3);
  box-shadow: inset 0 0 3px rgba(0, 0, 0, 0.3);
  -webkit-border-radius: 20px;
  -moz-border-radius: 20px;
  border-radius: 20px;
}
.flex-control-paging li a:hover {
  background: #333;
  background: rgba(0, 0, 0, 0.7);
}
.flex-control-paging li a.flex-active {
  background: #000;
  background: rgba(0, 0, 0, 0.9);
  cursor: default;
}
.flex-control-thumbs {
  margin: 5px 0 0;
  position: static;
  overflow: hidden;
}
.flex-control-thumbs li {
  width: 25%;
  float: left;
  margin: 0;
}
.flex-control-thumbs img {
  width: 100%;
  height: auto;
  display: block;
  opacity: .7;
  cursor: pointer;
  -moz-user-select: none;
  -webkit-transition: all 1s ease;
  -moz-transition: all 1s ease;
  -ms-transition: all 1s ease;
  -o-transition: all 1s ease;
  transition: all 1s ease;
}
.flex-control-thumbs img:hover {
  opacity: 1;
}
.flex-control-thumbs .flex-active {
  opacity: 1;
  cursor: default;
}
/* ====================================================================================================================
 * RESPONSIVE
 * ====================================================================================================================*/
@media screen and (max-width: 860px) {
  .flex-direction-nav .flex-prev {
    opacity: 1;
    left: 10px;
  }
  .flex-direction-nav .flex-next {
    opacity: 1;
    right: 10px;
  }
}

}
</style>

  </head>

<body>


  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <nav class="main-nav">
                      <!-- ***** Logo Start ***** -->
                      <a href="index.html" class="logo">
                          <img src="assets/images/templatemo-eduwell.png" alt="EduWell Template">
                      </a>
                      <!-- ***** Logo End ***** -->
                      <!-- ***** Menu Start ***** -->
                      <ul class="nav">
                          <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                          <li class="scroll-to-section"><a href="#services">Services</a></li>
                          <li class="scroll-to-section"><a href="#courses">Courses</a></li>
                          <li class="has-sub">
                              <a href="javascript:void(0)">Pages</a>
                              <ul class="sub-menu">
                                  <li><a href="about-us.html">About Us</a></li>
                                  <li><a href="our-services.html">Our Services</a></li>
                                  <li><a href="contact-us.html">Contact Us</a></li>
                              </ul>
                          </li>
                          <li class="scroll-to-section"><a href="#testimonials">Testimonials</a></li> 
                          <li class="scroll-to-section"><a href="#contact-section">Contact Us</a></li> 
                      </ul>        
                      <a class='menu-trigger'>
                          <span>Menu</span>
                      </a>
                      <!-- ***** Menu End ***** -->
                  </nav>
              </div>
          </div>
      </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <!-- ***** Main Banner Area Start ***** -->
  <section class="main-banner" id="top">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center">
          <div class="header-text">
            <h6>Welcome to our school</h6>
            <h2>Best Place To Learn Graphic <em>Design!</em></h2>
            <div class="main-button-gradient">
              <div class="scroll-to-section"><a href="#contact-section">Join Us Now!</a></div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="right-image">
            <img src="assets/images/banner-right-image.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ***** Main Banner Area End ***** -->

  <section class="services" id="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading">
            <h6>Our Services</h6>
            <h4>Provided <em>Services</em></h4>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="owl-service-item owl-carousel">
            <div class="item">
              <div class="service-item">
                <div class="icon">
                  <img src="assets/images/service-icon-01.png" alt="">
                </div>
                <h4>Useful Tricks</h4>
                <p>EduWell is the professional HTML5 template for your school or university websites.</p>
              </div>
            </div>
            <div class="item">
              <div class="service-item">
                <div class="icon">
                  <img src="assets/images/service-icon-02.png" alt="">
                </div>
                <h4>Creative Ideas</h4>
                <p>You can download and use this EduWell Template for your teaching and learning stuffs.</p>
              </div>
            </div>
            <div class="item">
              <div class="service-item">
                <div class="icon">
                  <img src="assets/images/service-icon-03.png" alt="">
                </div>
                <h4>Ready Target</h4>
                <p>Please tell your friends about the best CSS template website that is TemplateMo.</p>
              </div>
            </div>
            <div class="item">
              <div class="service-item">
                <div class="icon">
                  <img src="assets/images/service-icon-04.png" alt="">
                </div>
                <h4>Technology</h4>
                <p>Aenean bibendum consectetur ex eu porttitor. Pellentesque id ultrices metus.</p>
              </div>
            </div>
            <div class="item">
              <div class="service-item">
                <div class="icon">
                  <img src="assets/images/service-icon-01.png" alt="">
                </div>
                <h4>Useful Tricks</h4>
                <p>In non nisi eget magna efficitur ultricies non quis sapien. Pellentesque tellus.</p>
              </div>
            </div>
            <div class="item">
              <div class="service-item">
                <div class="icon">
                  <img src="assets/images/service-icon-02.png" alt="">
                </div>
                <h4>Creative Ideas</h4>
                <p>Aenean bibendum consectetur ex eu porttitor. Pellentesque id ultrices metus.</p>
              </div>
            </div>
            <div class="item">
              <div class="service-item">
                <div class="icon">
                  <img src="assets/images/service-icon-03.png" alt="">
                </div>
                <h4>Ready Target</h4>
                <p>In non nisi eget magna efficitur ultricies non quis sapien. Pellentesque tellus.</p>
              </div>
            </div>
            <div class="item">
              <div class="service-item">
                <div class="icon">
                  <img src="assets/images/service-icon-04.png" alt="">
                </div>
                <h4>Technology</h4>
                <p>Aenean bibendum consectetur ex eu porttitor. Pellentesque id ultrices metus.</p>
              </div>
            </div>
            <div class="item">
              <div class="service-item">
                <div class="icon">
                  <img src="assets/images/service-icon-01.png" alt="">
                </div>
                <h4>Useful Tricks</h4>
                <p>In non nisi eget magna efficitur ultricies non quis sapien. Pellentesque tellus.</p>
              </div>
            </div>
            <div class="item">
              <div class="service-item">
                <div class="icon">
                  <img src="assets/images/service-icon-02.png" alt="">
                </div>
                <h4>Creative Ideas</h4>
                <p>Aenean bibendum consectetur ex eu porttitor. Pellentesque id ultrices metus.</p>
              </div>
            </div>
            <div class="item">
              <div class="service-item">
                <div class="icon">
                  <img src="assets/images/service-icon-03.png" alt="">
                </div>
                <h4>Ready Target</h4>
                <p>In non nisi eget magna efficitur ultricies non quis sapien. Pellentesque tellus.</p>
              </div>
            </div>
            <div class="item">
              <div class="service-item">
                <div class="icon">
                  <img src="assets/images/service-icon-04.png" alt="">
                </div>
                <h4>Technology</h4>
                <p>Praesent accumsan condimentum arcu, id porttitor est semper nec. Nunc diam lorem.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="our-courses" id="courses">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading">
            <h6>OUR COURSES</h6>
            <h4>What You Can <em>Learn</em></h4>
            <p>You just think about TemplateMo whenever you need free CSS templates for your business website</p>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="naccs">
            <div class="tabs">
              <div class="row">
                <div class="col-lg-3">
                  <div class="menu">
                    <div class="active gradient-border"><span>Web Development</span></div>
                    <div class="gradient-border"><span>Graphic Design</span></div>
                    <div class="gradient-border"><span>Web Design</span></div>
                    <div class="gradient-border"><span>WordPress</span></div>
                  </div>
                </div>
                <div class="col-lg-9">
                  <ul class="nacc">
                    <li class="active">
                      <div>
                        <div class="left-image">
                          <img src="assets/images/courses-01.jpg" alt="">
                          <div class="price"><h6>$128</h6></div>
                        </div>
                        <div class="right-content">
                          <h4>Web Development</h4>
                          <p>Did you know that you can visit <a rel="nofollow" href="https://www.toocss.com/" target="_blank">TooCSS website</a> for latest listing of HTML templates and a variety of useful templates. 
                          <br><br>You just need to go and visit that website right now. IF you have any suggestion or comment about this template, you can feel free to go to contact page for our email address.</p>
                          <span>36 Hours</span>
                          <span>4 Weeks</span>
                          <span class="last-span">3 Certificates</span>
                          <div class="text-button">
                            <a href="contact-us.html">Subscribe Course</a>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div>
                        <div class="left-image">
                          <img src="assets/images/courses-02.jpg" alt="">
                          <div class="price"><h6>$156</h6></div>
                        </div>
                        <div class="right-content">
                          <h4>Creative Graphic Design</h4>
                          <p>You are not allowed to redistribute this template ZIP file on any other website without a permission from us.<br><br>There are some unethical people on this world copied and reposted our templates without any permission from us. Their Karma will hit them really hard. Yeah!</p>
                          <span>48 Hours</span>
                          <span>6 Weeks</span>
                          <span class="last-span">1 Certificate</span>
                          <div class="text-button">
                            <a href="contact-us.html">Subscribe Course</a>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div>
                        <div class="left-image">
                          <img src="assets/images/courses-03.jpg" alt="">
                          <div class="price"><h6>$184</h6></div>
                        </div>
                        <div class="right-content">
                          <h4>Web Design</h4>
                          <p>Quinoa roof party squid prism sustainable letterpress cray hammock tumeric man bun mixtape tofu subway tile cronut. Deep v ennui subway tile organic seitan.<br><br>Kogi VHS freegan bicycle rights try-hard green juice probably haven't heard of them cliche la croix af chillwave.</p>
                          <span>28 Hours</span>
                          <span>4 Weeks</span>
                          <span class="last-span">1 Certificate</span>
                          <div class="text-button">
                            <a href="contact-us.html">Subscribe Course</a>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div>
                        <div class="left-image">
                          <img src="assets/images/courses-04.jpg" alt="">
                          <div class="price"><h6>$76</h6></div>
                        </div>
                        <div class="right-content">
                          <h4>WordPress Introduction</h4>
                          <p>Quinoa roof party squid prism sustainable letterpress cray hammock tumeric man bun mixtape tofu subway tile cronut. Deep v ennui subway tile organic seitan.<br><br>Kogi VHS freegan bicycle rights try-hard green juice probably haven't heard of them cliche la croix af chillwave.</p>
                          <span>48 Hours</span>
                          <span>4 Weeks</span>
                          <span class="last-span">2 Certificates</span>
                          <div class="text-button">
                            <a href="contact-us.html">Subscribe Course</a>
                          </div>
                        </div>
                      </div>
                      </li>
                    </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="simple-cta">
    <div class="container">
      <div class="row">
        <div class="col-lg-5 offset-lg-1">
          <div class="left-image">
            <img src="assets/images/cta-left-image.png" alt="">
          </div>
        </div>
        <div class="col-lg-5 align-self-center">
          <h6>Get the sale right now!</h6>
          <h4>Up to 50% OFF For 1+ courses</h4>
          <p>Kogi VHS freegan bicycle rights try-hard green juice probably haven't heard of them cliche la croix af chillwave.</p>
          <div class="white-button">
            <a href="contact-us.html">View Courses</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="testimonials" id="testimonials">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading">
            <h6>Testimonials</h6>
            <h4>What They <em>Think</em></h4>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="owl-testimonials owl-carousel" style="position: relative; z-index: 5;">
            <div class="item">
              <p>“just think about TemplateMo if you need free CSS templates for your website”</p>
                <h4>Catherine Walk</h4>
                <span>CEO &amp; Founder</span>
                <img src="assets/images/quote.png" alt="">
            </div>
            <div class="item">
              <p>“think about our website first when you need free HTML templates for your website”</p>
                <h4>David Martin</h4>
                <span>CTO of Tech Company</span>
                <img src="assets/images/quote.png" alt="">
            </div>
            <div class="item">
              <p>“just think about our website wherever you need free templates for your website”</p>
                <h4>Sophia Whity</h4>
                <span>CEO and Co-Founder</span>
                <img src="assets/images/quote.png" alt="">
            </div>
            <div class="item">
              <p>“Praesent accumsan condimentum arcu, id porttitor est semper nec. Nunc diam lorem.”</p>
                <h4>Helen Shiny</h4>
                <span>Tech Officer</span>
                <img src="assets/images/quote.png" alt="">
            </div>
            <div class="item">
              <p>“Praesent accumsan condimentum arcu, id porttitor est semper nec. Nunc diam lorem.”</p>
                <h4>George Soft</h4>
                <span>Gadget Reviewer</span>
                <img src="assets/images/quote.png" alt="">
            </div>
            <div class="item">
              <p>“Praesent accumsan condimentum arcu, id porttitor est semper nec. Nunc diam lorem.”</p>
                <h4>Andrew Hall</h4>
                <span>Marketing Manager</span>
                <img src="assets/images/quote.png" alt="">
            </div>
            <div class="item">
              <p>“Praesent accumsan condimentum arcu, id porttitor est semper nec. Nunc diam lorem.”</p>
                <h4>Maxi Power</h4>
                <span>Fashion Designer</span>
                <img src="assets/images/quote.png" alt="">
            </div>
            <div class="item">
              <p>“Praesent accumsan condimentum arcu, id porttitor est semper nec. Nunc diam lorem.”</p>
                <h4>Olivia Too</h4>
                <span>Creative Designer</span>
                <img src="assets/images/quote.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="contact-us" id="contact-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div id="map">
          
            <!-- You just need to go to Google Maps for your own map point, and copy the embed code from Share -> Embed a map section -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7151.84524236698!2d-122.19494600413192!3d47.56605883252286!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5490695e625f8965%3A0xf99b055e76477def!2sNewcastle%20Beach%20Park%20Playground%2C%20Bellevue%2C%20WA%2098006%2C%20USA!5e0!3m2!1sen!2sth!4v1644335269264!5m2!1sen!2sth" width="100%" height="420px" frameborder="0" style="border:0; border-radius: 15px; position: relative; z-index: 2;" allowfullscreen=""></iframe>
            <div class="row">
              <div class="col-lg-4 offset-lg-1">
                <div class="contact-info">
                  <div class="icon">
                    <i class="fa fa-phone"></i>
                  </div>
                  <h4>Phone</h4>
                  <span>010-020-0340</span>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="contact-info">
                  <div class="icon">
                    <i class="fa fa-phone"></i>
                  </div>
                  <h4>Mobile</h4>
                  <span>090-080-0760</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <form id="contact" action="" method="post">
            <div class="row">
              <div class="col-lg-12">
                <div class="section-heading">
                  <h6>Contact us</h6>
                  <h4>Say <em>Hello</em></h4>
                  <p>IF you need a working contact form by PHP script, please visit TemplateMo's contact page for more info.</p>
                </div>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <input type="name" name="name" id="name" placeholder="Full Name" autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email" required="">
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <textarea name="message" id="message" placeholder="Your Message"></textarea>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <button type="submit" id="form-submit" class="main-gradient-button">Send Message</button>
                </fieldset>
              </div>
            </div>
          </form>
        </div>
        <div class="col-lg-12">
          <ul class="social-icons">
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            <li><a href="#"><i class="fa fa-rss"></i></a></li>
            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
          </ul>
        </div>
        <div class="col-lg-12">
          <p class="copyright">Copyright © 2022 EduWell Co., Ltd. All Rights Reserved. 
          
          <br>Design: <a rel="sponsored" href="https://templatemo.com" target="_blank">TemplateMo</a></p>
        </div>
      </div>
    </div>
  </section>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="../js/isotope.min.js"></script>
    <script src="../js/owl-carousel.js"></script>
    <script src="../js/lightbox.js"></script>
    <script src="../js/tabs.js"></script>
    <script src="../js/video.js"></script>
    <script src="../js/slick-slider.js"></script>
    <script src="../js/custom.js"></script>
    <script>
        //according to loftblog tut
        $('.nav li:first').addClass('active');

        var showSection = function showSection(section, isAnimate) {
          var
          direction = section.replace(/#/, ''),
          reqSection = $('.section').filter('[data-section="' + direction + '"]'),
          reqSectionPos = reqSection.offset().top - 0;

          if (isAnimate) {
            $('body, html').animate({
              scrollTop: reqSectionPos },
            800);
          } else {
            $('body, html').scrollTop(reqSectionPos);
          }

        };

        var checkSection = function checkSection() {
          $('.section').each(function () {
            var
            $this = $(this),
            topEdge = $this.offset().top - 80,
            bottomEdge = topEdge + $this.height(),
            wScroll = $(window).scrollTop();
            if (topEdge < wScroll && bottomEdge > wScroll) {
              var
              currentId = $this.data('section'),
              reqLink = $('a').filter('[href*=\\#' + currentId + ']');
              reqLink.closest('li').addClass('active').
              siblings().removeClass('active');
            }
          });
        };

        $('.main-menu, .responsive-menu, .scroll-to-section').on('click', 'a', function (e) {
          e.preventDefault();
          showSection($(this).attr('href'), true);
        });

        $(window).scroll(function () {
          checkSection();
        });
    </script>
</body>

</html>