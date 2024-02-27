<?php

// add_action( 'init', 'Redpishi_Preloader' );
// function Redpishi_Preloader() { if(!is_admin() &&  $GLOBALS["pagenow"] !== "wp-login.php" ) { 
	
// $delay = 1;	//seconds
// $loader = get_template_directory_uri()."/assets/images/preloader3.svg";
// // $loader = 'https://redpishi.com/wp-content/uploads/2022/06/preloader3.svg';
// //$loader='https://upload.wikimedia.org/wikipedia/commons/b/b9/Youtube_loading_symbol_1_(wobbly).gif';
// $overlayColor = '#ffffff';	
	
// echo '<div class="Preloader"><img src="'.$loader.'" alt="" style="height: 150px;"></div>
//  <style>
// .Preloader {
//     position: fixed;
//     top: 0;
//     bottom: 0;
//     left: 0;
//     right: 0;
//     background-color: '.$overlayColor.';
//     z-index: 100000;
//     display: flex;
//     align-items: center;
//     justify-content: space-around;
// }
// </style>
// <script>
// document.body.style.overflow = "hidden";
// document.addEventListener("DOMContentLoaded", () => setTimeout( function() { document.querySelector("div.Preloader").remove(); document.body.style.overflow = "visible"; } , '.$delay.' * 1000));
// </script>
// '; }}