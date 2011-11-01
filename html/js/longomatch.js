$(document).ready(function() {

        $.fn.extend({
                fixPosition: function() {
                        var pos = $(this).offset();
                        var top = Math.round(pos.top);
                        var left = Math.round(pos.left);
                        $(this).css("position", "absolute");
                        $(this).css("top", top);
                        $(this).css("left", left);
                },
                resize: function(position, action) {
                    if (position == "right") {
                        if (action == "zoomIn") {
                            $(this).animate({
                                    width: "507px",
                                    height: "374px",
                                    left: "-=200px"
                                    }, "fast");
                        }
                        else if (action == "zoomOut") {
                            $(this).animate({
                                    width: "300px",
                                    height: "205px",
                                    left: "+=200px"
                            }, "fast");
                        }
                    }
                    else if (position == "left") {
                        if (action == "zoomIn") {
                            $(this).animate({
                             width: "507px",
                             height: "374px"
                             }, "fast");
                        }
                        else if (action == "zoomOut") {
                            $(this).animate({
                                    width: "300px",
                                    height: "205px"
                            }, "fast");
                        }
                    }
                }
            });

        $("#features-list img.resizable").click(function () {
                if (!$(this).hasClass("resized")) {
                        $(this).fixPosition();
                        if ($(this).hasClass("right-image")) {
                            $(this).resize("right", "zoomIn");
                        }
                        else if ($(this).hasClass("left-image")) {
                            console.log($(this).clone());
                            $(this).resize("left", "zoomIn");
                        }
                }
                else {
                    if ($(this).hasClass("right-image")) {
                        $(this).resize("right", "zoomOut");
                    }
                    else if ($(this).hasClass("left-image")) {
                        $(this).resize("left", "zoomOut");
                    }
                }
                $(this).toggleClass("resized");
            });

        /* TODO: Make this work 
        $("#features-list img.resizable").mouseover(function () {
                hover = $('<div id="resizable-zoom-in-hover">');
                $('<div id="resizable-zoom-in-hover">').insertBefore($(this));
            });

        $("#resizable-zoom-in-hover").live("mouseout", function () {
                $(this).remove();
            });
        */
    });


