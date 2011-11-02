$(document).ready(function() {
        resizable_hover = $('<div id="resizable-hover">');

        $.fn.extend({
                zooming: false,
                resize: function(position, action) {
                    if (position == "right" && action == "zoomIn") {
                        left = "-200px";
                    }
                    else {
                        left = "";
                    }
                    if (action == "zoomIn") {
                        $(this).css("position", "absolute");
                        $(this).animate({             
                                        width: "507px",
                                        height: "374px",
                                        left: left, 
                                    }, "fast", function () { resizable_hover.css("z-index", "-1") });
                    }
                    else if (action == "zoomOut") {
                        $(this).css("position", "relative");
                        img.delay(1000).animate({
                                    width: "300px",
                                    height: "205px",
                                    left: left,
                                    }, "fast", function () { resizable_hover.css("z-index", "99") })
                    }                    
                }
            });

        $("#resizable-hover, img.resized").live("click", function () {
                if ($(this).attr("id") == "resizable-hover") {
                   img = $(this).next("img");               
                }
                else {
                    img = $(this);
                }
                resizable_hover.hide();
                if (img.hasClass("right-image")) {
                    position = "right";
                }
                else if (img.hasClass("left-image")) {
                    position = "leff";
                }
                console.log(position);
                if (!img.hasClass("resized")) {
                    img.zooming = true;
                    img.resize(position, "zoomIn");
                }
                else {
                    img.zooming = false;
                    img.resize(position, "zoomOut");
                    img.toggleClass("resized");
                }
                img.resize(position, "zoomOut");
             });

        $("#features-list .feature-image.resizable").mouseover(function () {
                resizable_hover.prependTo($(this));
                resizable_hover.show();
            });



        $("#resizable-hover").live("mouseout", function () {
                $(this).hide();
            }); 
       

    });


