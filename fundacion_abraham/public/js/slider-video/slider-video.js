        jQuery(document).ready(function ($) {
            var options = {
                $AutoPlay: true, 
                $DragOrientation: 3,
                $AutoPlayInterval: 4000,
                $PauseOnHover: 1,
                $ArrowKeyNavigation: true,

                $BulletNavigatorOptions: {               
                    $Class: $JssorBulletNavigator$,
                    $ChanceToShow: 2,            
                    $ActionMode: 1,                 
                    $AutoCenter: 1,              
                    $Steps: 1,                    
                    $Lanes: 1,                      
                    $SpacingX: 10,            
                    $SpacingY: 0,             
                    $Orientation: 1 
                }
            };

            var jssor_slider1 = new $JssorSlider$("slider1_container", options);
            
            function ScaleSlider() {
                var parentWidth = jssor_slider1.$Elmt.parentNode.clientWidth;
                if (parentWidth)
                    jssor_slider1.$SetScaleWidth(Math.min(parentWidth, 640));
                else
                    window.setTimeout(ScaleSlider, 30);
            }

            ScaleSlider();

            if (!navigator.userAgent.match(/(iPhone|iPod|iPad|BlackBerry|IEMobile)/)) {
                $(window).bind('resize', ScaleSlider);
            }

            $JssorPlayer$.$FetchPlayers(document.body);
        });