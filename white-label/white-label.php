<?php
    
/*
Plugin Name: Custom Functions
Description: Security / Scripts / Styles
Author: Josh S.
Version: 1.0
*/
    

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) { exit; }
   
    /*FRONT END ADMIN*/
    function override_admin_bar_css() { 
     global $current_user;
     $user_id = get_current_user_id();
       if ( is_admin_bar_showing() && $user_id == '2' || is_admin_bar_showing() && $user_id == '1' ) { ?>
    
          <style type="text/css">
         #wp-admin-bar-theme-dashboard, #wp-admin-bar-appearance, #wp-admin-bar-new-user, 
         #wpadminbar .ab-top-menu>.menupop:nth-child(1)>.ab-sub-wrapper,
         li#wp-admin-bar-runcloud-hub-setting {
             display:none;
              }
    #wp-admin-bar-runcloud-hub .ab-empty-item::after {
        content: "Cache";
        color: white;
        position: absolute;
        left: 10px;
    }
    #wp-admin-bar-runcloud-hub .ab-empty-item {
        color: transparent!important;
    }
              
    #wp-admin-bar-wp-logo .ab-icon:before {
    	content: "";
    	background: url("/wp-content/mu-plugins/front-back-design/images/WL_logo.svg");
    	background-size: contain;
        background-repeat: no-repeat;
    	background-position: center center;
    	color:transparent!important;
    }
              
          </style>
    
       <?php }
    
    }
    
    
    /**********BACKEND ADMIN**********/
    add_action( 'wp_head', 'override_admin_bar_css' );
    
    function override_admin_head() {
     global $current_user;
     $user_id = get_current_user_id();
     if( is_admin() && $user_id == '2' || is_admin() && $user_id == '1' ){
            echo '<style>
    #wp-admin-bar-runcloud-hub .ab-empty-item::after {
        content: "Cache";
        color: white;
        position: absolute;
        left: 10px;
    }
    
    #wp-admin-bar-runcloud-hub .ab-empty-item {
        color: transparent!important;
    }
    
    /*install plugins theme editor*/
    
    	#wp-admin-bar-wp-logo .ab-sub-wrapper, aside.rci-linkmenu, .rci-sidemenu li:nth-child(4), #wp-admin-bar-wp-logo .ab-sub-wrapper, #wpfooter, #menu-settings li:nth-child(n+9), li#menu-appearance li:nth-child(n+6), li#wp-admin-bar-runcloud-hub-setting {
    	display:none!important;
      }
       /*install plugins theme editor*/
    #wp-admin-bar-wp-logo .ab-icon:before {
    	content: "";
    	background: url("/wp-content/mu-plugins/front-back-design/images/WL_logo.svg");
    	background-size: contain;
        background-repeat: no-repeat;
    	background-position: center center;
    	color:transparent!important;
    }
    

        </style>';
    }}
    
    add_action('admin_head', 'override_admin_head');
    
    function wpb_login_logo() { ?>
         <style type="text/css">
        #login h1 {position:relative;transition: all 700ms ease;will-change:transform;}
        #login h1::after {
    content: '';
    width: 197px;
    height: 197px;
    position: absolute;
    left: 50%;
    top: 50%;
    border-radius: 100%;
    box-shadow: 0 0 1px 0 rgba(0,0,0,.35), 0 0 5px -3px rgba(0,0,0,.3), 0 0 20px 0 rgb(0 0 0 / 30%);
    z-index: -3;
    background-color: white;
    background: linear-gradient(211deg, #4a4a4a 20%, rgb(139 139 139) 100%);
    translate: -50% -50%;
    transition: all 700ms ease;
    will-change:box-shadow;
}
h1:hover {
  transform: rotate3d(1, 0, 1, 45deg);
}
h1:hover::after {
    box-shadow:5px 15px 25px 5px rgba(0,0,0,.3), 3px 8px 10px 3px rgba(0,0,0,.1), 2px 4px 5px 2px rgba(0,0,0,.1)!important;
}
             #login h1 a {
                background-image: url('/wp-content/mu-plugins/front-back-design/images/WL_logo.svg');
                height:135px;
                width:300px;
                pointer-events:none;
                background-position: 51% 75%;
                background-size: 110px 115px;
                background-repeat: no-repeat;
                padding-bottom: 0;
                margin: 65px auto;
                overflow: visible;
               position:relative;
               animation: fade 700ms ease-in backwards;
            }
            
            #login #login_error {
                margin: 0 auto;
                border-radius: 10px;
                border: none;
                background: #2271b1;
                color: white;
                width: 92%;
                margin-top: 65px;
                text-align: center;
            }

            /* Log in button WP Admin */
            #wp-submit {
                box-shadow: 0 0 15px -5px rgba(0,0,0,.5);
                background: linear-gradient(161deg, rgba(23,229,224,1) 0%, rgba(7,135,132,1) 100%);
                border: none;
                transition: all 500ms ease;
            }
           #wp-submit:hover{
                box-shadow: -2px 7px 20px 0px rgba(0,0,0,.4);
                background: linear-gradient(161deg, rgba(23,229,224,1) 0%, rgba(23,229,224,1) 100%);
                transform-origin: center center;
            }
            #loginform  {
                border: none;
                box-shadow: 0 0 1px 0 rgba(0,0,0,.25), 0 0 5px -3px rgba(0,0,0,.1), 0 0 25px 0 rgb(0 0 0 / 10%);
                border-radius: 10px;
            }
          
          /* Back-drop on WP Backend Login circle logo */

            #login h1 a::after {
  content:'';
  height: 200px;
  width: 200px;
  position:absolute;
  background-image: radial-gradient(100% 100% at 50% 100%, #5cc6cd 0%, rgb(104 177 215) 25%, rgb(92 198 205 / 78%) 50%, rgba(190, 227, 248, 0) 100%), linear-gradient(90deg, #ffffff 0%, #eaeaea 8.33%, #ffffff 16.67%, #ffffff 25%, #ffffff 33.33%, #fafafa 41.67%, #ffffff 50%, #ffffff 58.33%, #ffffff 66.67%, #ffffff 75%, #eaeaea 83.33%, #ffffff 100%);
  top:50%;
  left:50%;
  translate: -50% -50%;
  rotate: -130deg;
  z-index:-2;
  -webkit-mask-image: url("data:image/svg+xml;charset=UTF-8,%3csvg version='1.1' id='Layer_1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' x='0px' y='0px' viewBox='0 0 381.8 381.8' style='enable-background:new 0 0 381.8 381.8;' xml:space='preserve'%3e%3cstyle type='text/css'%3e .st0%7bfill:none;stroke:%23000000;stroke-width:16;stroke-miterlimit:16;%7d %3c/style%3e%3ccircle class='st0' cx='190.9' cy='190.9' r='181.3'/%3e%3cg%3e%3c/g%3e%3cg%3e%3c/g%3e%3cg%3e%3c/g%3e%3cg%3e%3c/g%3e%3cg%3e%3c/g%3e%3cg%3e%3c/g%3e%3c/svg%3e ");
  mask-image: url("data:image/svg+xml;charset=UTF-8,%3csvg version='1.1' id='Layer_1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' x='0px' y='0px' viewBox='0 0 381.8 381.8' style='enable-background:new 0 0 381.8 381.8;' xml:space='preserve'%3e%3cstyle type='text/css'%3e .st0%7bfill:none;stroke:%23000000;stroke-width:16;stroke-miterlimit:16;%7d %3c/style%3e%3ccircle class='st0' cx='190.9' cy='190.9' r='181.3'/%3e%3cg%3e%3c/g%3e%3cg%3e%3c/g%3e%3cg%3e%3c/g%3e%3cg%3e%3c/g%3e%3cg%3e%3c/g%3e%3cg%3e%3c/g%3e%3c/svg%3e ");
}
 #login h1 a::before {
  content:'';
  height: 200px;
  width: 200px;
  position:absolute;
  background-image:linear-gradient(90deg, #ffffff00 0%, #fff 50%, #ffffff00 100%);
  top:50%;
  left:50%;
  translate: -50% -50%;
  opacity:.8;
  z-index:-1;
  animation: rotate 3s linear infinite;
  -webkit-mask-image: url("data:image/svg+xml;charset=UTF-8,%3csvg version='1.1' id='Layer_1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' x='0px' y='0px' viewBox='0 0 381.8 381.8' style='enable-background:new 0 0 381.8 381.8;' xml:space='preserve'%3e%3cstyle type='text/css'%3e .st0%7bfill:none;stroke:%23000000;stroke-width:6;stroke-miterlimit:7;%7d %3c/style%3e%3ccircle class='st0' cx='190.9' cy='190.9' r='181.3'/%3e%3cg%3e%3c/g%3e%3cg%3e%3c/g%3e%3cg%3e%3c/g%3e%3cg%3e%3c/g%3e%3cg%3e%3c/g%3e%3cg%3e%3c/g%3e%3c/svg%3e ");
  mask-image: url("data:image/svg+xml;charset=UTF-8,%3csvg version='1.1' id='Layer_1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' x='0px' y='0px' viewBox='0 0 381.8 381.8' style='enable-background:new 0 0 381.8 381.8;' xml:space='preserve'%3e%3cstyle type='text/css'%3e .st0%7bfill:none;stroke:%23000000;stroke-width:6;stroke-miterlimit:7;%7d %3c/style%3e%3ccircle class='st0' cx='190.9' cy='190.9' r='181.3'/%3e%3cg%3e%3c/g%3e%3cg%3e%3c/g%3e%3cg%3e%3c/g%3e%3cg%3e%3c/g%3e%3cg%3e%3c/g%3e%3cg%3e%3c/g%3e%3c/svg%3e ");
}

@keyframes rotate {
  from {
    transform: rotate(0deg);
  }
  to {
    transform: rotate(360deg);
  }
}
@keyframes fade {
  from {
    opacity:0;
  }
  to {
    opacity:1;
  }
}
        </style>
    <?php }
    
    add_action( 'login_enqueue_scripts', 'wpb_login_logo' );

    
    
    
    
    ?>