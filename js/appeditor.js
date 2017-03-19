/* Copyright (C) Sandeep Mogla
 * Unauthorized copying of this file, via any medium is strictly prohibited
 * Proprietary and confidential
 * Written by Sandeep Mogla <sandeep.mogla@gmail.com>, October 2016
 */
var canvas;
var a;
var b;
var line1;
var line2;
var line3;
var line4;
var imgIns;
var lnX;
var lnY;

$(document).on("shown.bs.dropdown", ".dropdown", function() {
        // calculate the required sizes, spaces
        var $ul = $(this).children(".dropdown-menu");
        var $button = $(this).children(".dropdown-toggle");
        var ulOffset = $ul.offset();
        // how much space would be left on the top if the dropdown opened that direction
        var spaceUp = (ulOffset.top - $button.height() - $ul.height()) - $(window).scrollTop();
        // how much space is left at the bottom
        var spaceDown = $(window).scrollTop() + $(window).height() - (ulOffset.top + $ul.height());
        // switch to dropup only if there is no space at the bottom AND there is space at the top, or there isn't either but it would be still better fit
        if (spaceDown < 0 && (spaceUp >= 0 || spaceUp > spaceDown))
            $(this).addClass("dropup");
    }).on("hidden.bs.dropdown", ".dropdown", function() {
        $(this).removeClass("dropup");
    })
    //$(document).ready(function() {
    .ready(function() {
        $('#data').hide();
        //setup front side canvas
        canvas = new fabric.Canvas('tc');

        fabric.Object.prototype.set({
            hoverCursor: 'pointer',
            transparentCorners: false,
            borderColor: 'rgba(255,255,255,1)',
            cornerColor: 'rgba(220,220,220,0.9)',
            cornerStyle: 'circle',
            cornerSize: 20
        });

        var mov = false;
        var newleft = 0,
            edgedetection = 10, //pixels to snap
            cmdetection = 10,
            canvasWidth = canvas.width,
            canvasHeight = canvas.height,
            canvasCenterWidth = canvas.width / 2,
            canvasMiddleHeight = canvas.height / 2;
        canvas.on({
            'mouse:out': function(e) {
                //console.log("mouse:out");
                mov = false;
            },
            'mouse:over': function(e) {
                //console.log("mouse:over");
                mov = true;
            },
            'mouse:up': function(e) {
                console.log("mouse:up");
                lnY.setVisible(false);
                lnX.setVisible(false);
            },
            'object:moving': function(e) {
                var obj = e.target;
                obj.setCoords(); //Sets corner position coordinates based on current angle, width and height

                if (Math.abs(Math.round(obj.getLeft())) < edgedetection) {
                    obj.setLeft(0);
                }

                if (Math.abs(Math.round(obj.getTop())) < edgedetection) {
                    obj.setTop(0);
                }

                if (Math.abs(Math.round(obj.getHeight() / 2 + obj.getTop() - canvasMiddleHeight)) < cmdetection) {
                    lnY.setVisible(true);
                    obj.setTop(canvasMiddleHeight - obj.getHeight() / 2);
                } else {
                    lnY.setVisible(false);
                }


                if (Math.abs(Math.round(canvasCenterWidth - (obj.getWidth() / 2 + obj.getLeft()))) < cmdetection) {
                    lnX.setVisible(true);
                    obj.setLeft(canvasCenterWidth - obj.getWidth() / 2);
                } else {
                    lnX.setVisible(false);
                }

                //console.log(Math.abs(Math.round(obj.getLeft() - edgedetection)));
                // if ((obj.getWidth() + obj.getLeft()) > (canvasWidth - edgedetection)) {
                //     obj.setLeft(canvasWidth - obj.getWidth());
                // }

                if (Math.abs(Math.round(canvasWidth - (obj.getWidth() + obj.getLeft()))) < edgedetection) {
                    obj.setLeft(canvasWidth - obj.getWidth());
                }

                if (Math.abs(Math.round(canvasHeight - (obj.getHeight() + obj.getTop()))) < edgedetection) {
                    obj.setTop(canvasHeight - obj.getHeight());
                }
            },
            'object:modified': function(e) {
                e.target.opacity = 1;
            },
            'object:scaling': function(e) {
                var obj = e.target;
                obj.setCoords(); //Sets corner position coordinates based on current angle, width and height

                if (obj.getLeft() < 0) {
                    obj.setLeft(0);
                }

                if (obj.getTop() < 0) {
                    obj.setTop(0);
                }

                if (obj.getWidth() > canvasWidth) {
                    obj.setWidth(canvasWidth);
                }

                if (obj.getHeight() > canvasHeight) {
                    obj.setHeight(canvasHeight);
                }

                console.log('scaling');
            },
            'object:selected': onObjectSelected,
            'selection:cleared': onSelectedCleared
        });

        // piggyback on `canvas.findTarget`, to fire "object:over" and "object:out" events
        canvas.findTarget = (function(originalFn) {
            return function() {
                var target = originalFn.apply(this, arguments);
                if (target) {
                    if (this._hoveredTarget !== target) {
                        canvas.fire('object:over', {
                            target: target
                        });
                        if (this._hoveredTarget) {
                            canvas.fire('object:out', {
                                target: this._hoveredTarget
                            });
                        }
                        this._hoveredTarget = target;
                    }
                } else if (this._hoveredTarget) {
                    canvas.fire('object:out', {
                        target: this._hoveredTarget
                    });
                    this._hoveredTarget = null;
                }
                return target;
            };
        })(canvas.findTarget);
        canvas.on('object:over', function(e) { //TO DO
        });
        canvas.on('object:out', function(e) { //TO DO
        });
        //canvas.selection = false;

        $('.language-control').change(function() { //TO DO
        });

        lnY = new fabric.Line([0, canvas.height / 2, canvas.width, canvas.height / 2], {
            "stroke": "#0006ff",
            "strokeWidth": 2,
            hasBorders: false,
            hasControls: false,
            hasRotatingPoint: false,
            selectable: false,
            visible: false
        });
        lnX = new fabric.Line([canvas.width / 2, 0, canvas.width / 2, canvas.height], {
            "stroke": "#0006ff",
            "strokeWidth": 2,
            hasBorders: false,
            hasControls: false,
            hasRotatingPoint: false,
            selectable: false,
            visible: false
        });

        canvas.add(lnX);
        canvas.add(lnY);

        //function setStyle(object, styleName, value) {
        var setStyle = function(object, styleName, value) {
            if (object.setSelectionStyles && object.isEditing) {
                var style = {};
                style[styleName] = value;
                object.setSelectionStyles(style);
                object.renderCursorOrSelection();
            } else {
                object[styleName] = value;
            }
        }

        var getStyle = function(object, styleName) {
            return (object.getSelectionStyles && object.isEditing) ?
                object.getSelectionStyles()[styleName] :
                object[styleName];
        }

        //$("body").on("click", ":not(canvas, #drawingArea, .canvas-container, div:first:#drawingArea)", function (event) {
        $(document).on("mouseup", function(event) {
            if (!mov) {
                var _deselect = false;
                var _target = event.target;
                if (event.target.id == "text-string") {
                    _deselect = false;
                } else if (_target.parentNode) {
                    while (_target["parentNode"]) {
                        if (_target["parentNode"].id == "texteditor" ||
                            _target["parentNode"].id == "imageeditor" ||
                            $(_target).hasClass("color-picker")) {
                            console.log('_deselect > ');
                            _deselect = false;
                            break;
                        }
                        _target = _target["parentNode"];
                        _deselect = true;
                    }
                }
                if (_deselect) {
                    var activeObject = canvas.getActiveObject();
                    if (activeObject && activeObject.type === 'textbox') {
                        activeObject.exitEditing();
                    }
                    canvas.renderAll();
                    canvas.deactivateAll().renderAll();
                    onSelectedCleared();
                }
            }
        });

        $(".well.text-edit").css('display', 'none');

        $('.bg-filter .list-group div').click(function(e) {
            e.preventDefault();
            $that = $(this);
            $that.parent().find('div').removeClass('active');
            $that.addClass('active');

            //$('.bg-filter .dropdown-toggle').html($that.html() + '<span class="caret"style="float:right;margin-top: 10px;margin-right:-4px;"></span>');
            $dropdowntoggle = $('.bg-filter .dropdown-toggle');
            var img = $dropdowntoggle.children('img');
            img.attr('src', $that.children('img').attr('src'));
            var h5 = $dropdowntoggle.children('h5');
            h5.text($that.children('h5').text().substring(0, 14));

            var filter = null;
            if (canvas.backgroundImage == null) return;
            if ($that.data('value') == "none") {
                filter = null;
            } else if ($that.data('value') == "greyscale") {
                filter = new fabric.Image.filters.Grayscale();
            } else if ($that.data('value') == "lblurred") {
                filter = new fabric.Image.filters.StackBlur(10);
            } else if ($that.data('value') == "sblurred") {
                filter = new fabric.Image.filters.StackBlur(20);
            } else if ($that.data('value') == "bright") {
                filter = new fabric.Image.filters.Brightness({
                    brightness: 50
                });
            } else if ($that.data('value') == "lcontrast") {
                filter = new fabric.Image.filters.Contrast({
                    contrast: 15
                });
            } else if ($that.data('value') == "scontrast") {
                filter = new fabric.Image.filters.Contrast({
                    contrast: 30
                });
            }
            canvas.backgroundImage.filters = [filter];
            canvas.backgroundImage.applyFilters((function() {
                canvas.renderAll();
            }).bind(this));
        });

        var textFooter;
        var textHeader;
        var textBody;
        $('.btn-checkbox').click(function(e) {
            console.log("$(this).hasClass('active') " + $(this).hasClass('active'));
            if (!$(this).hasClass('active')) {
                if ($(this).attr('data-value') == 1) {
                    if (textHeader != undefined) {
                        return;
                    }
                    textHeader = new fabric.Textbox("hey! Header here", {
                        left: 104,
                        top: 30,
                        width: 250,
                        fontFamily: 'Arial',
                        angle: 0,
                        fill: '#000000',
                        scaleX: 1,
                        scaleY: 1,
                        fontSize: 20,
                        fontWeight: '',
                        padding: 5,
                        hasRotatingPoint: false
                    });
                    textHeader.setControlsVisibility({
                        'mtr': false
                    });
                    textHeader.textAlign = 'center';
                    canvas.add(textHeader);
                } else if ($(this).attr('data-value') == 2) {
                    if (textBody != undefined) {
                        return;
                    }
                    textBody = new fabric.Textbox("hey! Body here", {
                        left: 80,
                        top: 150,
                        width: 300,
                        fontFamily: 'Arial',
                        angle: 0,
                        fill: '#000000',
                        scaleX: 1,
                        scaleY: 1,
                        fontWeight: '',
                        fontSize: 24,
                        padding: 5,
                        hasRotatingPoint: false
                    });
                    textBody.setControlsVisibility({
                        'mtr': false
                    });
                    textBody.textAlign = 'center';
                    canvas.add(textBody);
                } else if ($(this).attr('data-value') == 3) {
                    if (textFooter != undefined) {
                        return;
                    }
                    textFooter = new fabric.Textbox("hey! footer here", {
                        // left: 300,
                        left: 160,
                        top: 280,
                        width: 150,
                        fontFamily: 'Arial',
                        angle: 0,
                        fill: '#000000',
                        scaleX: 1,
                        scaleY: 1,
                        fontWeight: '',
                        fontStyle: 'italic',
                        fontSize: 18,
                        padding: 5,
                        hasRotatingPoint: false
                    });
                    textFooter.setControlsVisibility({
                        'mtr': false
                    });
                    textFooter.textAlign = 'center';
                    canvas.add(textFooter);
                }
                $("#texteditor").css('display', 'none');
                $(this).addClass('active');
            } else {
                if ($(this).attr('data-value') == 1) {
                    canvas.remove(textHeader);
                    textHeader = undefined;
                } else if ($(this).attr('data-value') == 2) {
                    canvas.remove(textBody);
                    textBody = undefined;
                } else if ($(this).attr('data-value') == 3) {
                    canvas.remove(textFooter);
                    textFooter = undefined;
                }
                $(this).removeClass('active');
            }
        });

        function keepPosFixed(obj) {
            obj.setCoords();
            // top-left  corner
            if (obj.getBoundingRect().top < 0 || obj.getBoundingRect().left < 0) {
                obj.top = Math.max(obj.top, obj.top - obj.getBoundingRect().top);
                obj.left = Math.max(obj.left, obj.left - obj.getBoundingRect().left);
            }
            // bot-right corner
            if (obj.getBoundingRect().top + obj.getBoundingRect().height > obj.canvas.height || obj.getBoundingRect().left + obj.getBoundingRect().width > obj.canvas.width) {
                obj.top = Math.min(obj.top, obj.canvas.height - obj.getBoundingRect().height + obj.top - obj.getBoundingRect().top);
                obj.left = Math.min(obj.left, obj.canvas.width - obj.getBoundingRect().width + obj.left - obj.getBoundingRect().left);
            }
        }

        $("#text-string").keyup(function() {
            var activeObject = canvas.getActiveObject();
            if (activeObject && activeObject.type === 'textbox') {
                activeObject.text = this.value;
                canvas.renderAll();
            }
        });
        $("#sizesTypes").change(function(e) {
            debugger;
            if ($(this).val() == "1") {
                line1 = new fabric.Line([0, 0, 420, 0], {
                    "stroke": "#EEEEEE",
                    "strokeWidth": 1,
                    hasBorders: false,
                    hasControls: false,
                    hasRotatingPoint: false,
                    selectable: false
                });
                line2 = new fabric.Line([479, 0, 480, 320], {
                    "stroke": "#EEEEEE",
                    "strokeWidth": 1,
                    hasBorders: false,
                    hasControls: false,
                    hasRotatingPoint: false,
                    selectable: false
                });
                line3 = new fabric.Line([0, 0, 0, 320], {
                    "stroke": "#EEEEEE",
                    "strokeWidth": 1,
                    hasBorders: false,
                    hasControls: false,
                    hasRotatingPoint: false,
                    selectable: false
                });
                line4 = new fabric.Line([0, 320, 480, 319], {
                    "stroke": "#EEEEEE",
                    "strokeWidth": 1,
                    hasBorders: false,
                    hasControls: false,
                    hasRotatingPoint: false,
                    selectable: false
                });
            }
        });

        $("#background .img-polaroid").click(function(e) {
            var el = e.target;
            $("#background .img-polaroid").removeClass("active");
            $(el).addClass("active");
            var design = $(this).attr("src");
            design = design.replace("bg_thumb", "background");
            var sw = canvas.width;
            var sh = canvas.height;
            canvas.setBackgroundImage(design, canvas.renderAll.bind(canvas), {
                width: sw,
                height: sh,
                opacity: 1
            });
        });
        var clipart, el;
        var left,
            top,
            sx, sy,
            w, h;
        var doing = false;
        $(".img-art").click(function(e) {
            if (doing) {
                return;
            }
            el = e.target;
            $("input[type='checkbox'][id^='cb']").prop('checked', false);
            $(el).prop('checked', true);
            var offset = 50;
            if (left == undefined) {
                left = canvas.width / 2;
                top = canvas.height / 2;
                sx = 1;
                sy = 1;
            } else {
                left = clipart.left;
                top = clipart.top;
                sx = clipart.scaleX;
                sy = clipart.scaleY;
            }
            doing = true;
            var pngElSrc = (el.src).replace("clipart_thumb", "clipart");
            pngElSrc = pngElSrc.replace(".jpg", ".png");
            fabric.Image.fromURL(pngElSrc, function(image) {
                if (clipart != null) {
                    canvas.remove(clipart);
                }
                image.set({
                    left: left,
                    top: top,
                    angle: 0,
                    padding: 5,
                    cornersize: 10,
                    hasRotatingPoint: true,
                    scaleX: sx,
                    scaleY: sy
                });
                clipart = image;
                canvas.add(image);
                doing = false;
            });
        });
        document.getElementById('remove-selected').onclick = function() {
            var activeObject = canvas.getActiveObject(),
                activeGroup = canvas.getActiveGroup();
            if (activeObject) {
                canvas.remove(activeObject);
                $("#text-string").val("");
                $("input[type='checkbox'][id^='cb']").prop('checked', false);
            } else if (activeGroup) {
                var objectsInGroup = activeGroup.getObjects();
                canvas.discardActiveGroup();
                objectsInGroup.forEach(function(object) {
                    canvas.remove(object);
                });
            }
        };
        document.getElementById('bring-to-front').onclick = function() {
            var activeObject = canvas.getActiveObject(),
                activeGroup = canvas.getActiveGroup();
            if (activeObject) {
                activeObject.bringToFront();
            } else if (activeGroup) {
                var objectsInGroup = activeGroup.getObjects();
                canvas.discardActiveGroup();
                objectsInGroup.forEach(function(object) {
                    object.bringToFront();
                });
            }
        };
        document.getElementById('send-to-back').onclick = function() {
            var activeObject = canvas.getActiveObject(),
                activeGroup = canvas.getActiveGroup();
            if (activeObject) {
                activeObject.sendToBack();
            } else if (activeGroup) {
                var objectsInGroup = activeGroup.getObjects();
                canvas.discardActiveGroup();
                objectsInGroup.forEach(function(object) {
                    object.sendToBack();
                });
            }
        };

        $('#background .img-polaroid').first().addClass("active");
        $('#background .img-polaroid').first().trigger("click");
        //$('.bg-filter .list-group div:nth-child(5)').addClass("active");
        //$('.bg-filter .list-group div:nth-child(5)').trigger("click");
        canvas.renderAll();

        // $(".dropdown-menu li a").click(function() {
        //     $(this).parents(".dropdown").find('.btn').html($(this).text() + ' <span class="caret"></span>');
        //     $(this).parents('li').addClass("active");
        // });
        $("#font-family ~ ul>li a")
            .click(function() {
                $('#font-family.dropdown-toggle').html($(this).html().substring(0, 9) + '<span class="caret" style="margin-left: 7px;"></span>');
                $("#font-family ~ ul>li a").removeClass("active");
                $(this).addClass("active");
                //.dropdown-menu>li>a
            });

        $("#font-size ~ ul>li a")
            .click(function() {
                $('#font-size.dropdown-toggle').html($(this).html() + '<span class="caret" style="margin-left: 6px;"></span>');
            });

        $("#text-bold").click(function() {
            var activeObject = canvas.getActiveObject();
            if (activeObject && activeObject.type === 'textbox') {
                //setStyle(activeObject, 'fontWeight', isBold ? '' : 'bold');
                var isBold = getStyle(activeObject, 'fontWeight') === 'bold';
                setStyle(activeObject, 'fontWeight', isBold ? '' : 'bold');
                //activeObject.fontWeight = (activeObject.fontWeight == 'bold' ? '' : 'bold');
                canvas.renderAll();
            }
        });
        $("#text-italic").click(function() {
            var activeObject = canvas.getActiveObject();
            if (activeObject && activeObject.type === 'textbox') {
                activeObject.fontStyle = (activeObject.fontStyle == 'italic' ? '' : 'italic');
                canvas.renderAll();
            }
        });
        // $("#text-strike").click(function() {
        //     var activeObject = canvas.getActiveObject();
        //     if (activeObject && activeObject.type === 'textbox') {
        //         activeObject.textDecoration = (activeObject.textDecoration == 'line-through' ? '' : 'line-through');
        //         canvas.renderAll();
        //     }
        // });
        $("#text-underline").click(function() {
            var activeObject = canvas.getActiveObject();
            var isUnderline = (getStyle(obj, 'textDecoration') || '').indexOf('underline') > -1;
            setStyle(obj, 'textDecoration', isUnderline ? '' : 'underline');
            canvas.renderAll();
            // if (activeObject && activeObject.type === 'textbox') {
            //     activeObject.textDecoration = (activeObject.textDecoration == 'underline' ? '' : 'underline');
            //     canvas.renderAll();
            // }
        });
        $("#text-left").click(function() {
            var activeObject = canvas.getActiveObject();
            if (activeObject && activeObject.type === 'textbox') {
                activeObject.textAlign = 'left';
                canvas.renderAll();
            }
        });
        $("#text-center").click(function() {
            var activeObject = canvas.getActiveObject();
            if (activeObject && activeObject.type === 'textbox') {
                activeObject.textAlign = 'center';
                canvas.renderAll();
            }
        });
        $("#text-right").click(function() {
            var activeObject = canvas.getActiveObject();
            if (activeObject && activeObject.type === 'textbox') {
                activeObject.textAlign = 'right';
                canvas.renderAll();
            }
        });
        $("#font-family").change(function() {
            var activeObject = canvas.getActiveObject();
            setStyle(activeObject, 'fontFamily', this.value);
            canvas.renderAll();
            // if (activeObject && activeObject.type === 'textbox') {
            //     activeObject.fontFamily = this.value;
            //     canvas.renderAll();
            // }
        });
        $('#text-bgcolor').miniColors({
            change: function(hex, rgb) {
                var activeObject = canvas.getActiveObject();
                setStyle(activeObject, 'backgroundColor', this.value);
                canvas.renderAll();
                // if (activeObject && activeObject.type === 'textbox') {
                //     activeObject.backgroundColor = this.value;
                //     canvas.renderAll();
                // }
            },
            open: function(hex, rgb) { //
            },
            close: function(hex, rgb) { //
            }
        });
        $('#text-fontcolor').miniColors({
            change: function(hex, rgb) {
                var activeObject = canvas.getActiveObject();
                setStyle(activeObject, 'fill', this.value);
                canvas.renderAll();

                // if (activeObject && activeObject.type === 'textbox') {
                //     activeObject.fill = this.value;
                //     canvas.renderAll();
                // }
            },
            open: function(hex, rgb) { //
            },
            close: function(hex, rgb) { //
            }
        });
        $('#text-strokecolor').miniColors({
            change: function(hex, rgb) {
                var activeObject = canvas.getActiveObject();
                if (activeObject && activeObject.type === 'textbox') {
                    activeObject.strokeStyle = this.value;
                    canvas.renderAll();
                }
            },
            open: function(hex, rgb) { //
            },
            close: function(hex, rgb) { //
            }
        });
        $(".clearfix button,a").tooltip();
        window.setStyle = setStyle;
        window.getStyle = getStyle;
    });

function onObjectSelected(e) {
    var selectedObject = e.target;
    $("#text-string").val("");
    selectedObject.hasRotatingPoint = true
    if (selectedObject && selectedObject.type === 'textbox') {
        //display text editor
        $("#texteditor").css('enable', 'true');
        $("#texteditor").css('display', 'block');
        $(".well.text-edit").css('display', 'block');
        $("#text-string").val(selectedObject.getText());
        $('#text-fontcolor').miniColors('value', selectedObject.fill);
        $('#text-strokecolor').miniColors('value', selectedObject.strokeStyle);
        $("#imageeditor").css('display', 'none');
    } else if (selectedObject && selectedObject.type === 'image') {
        //display image editor
        $("#texteditor").css('display', 'none');
        $("#imageeditor").css('display', 'block');
    }
}

function onSelectedCleared(e) {
    $("#text-string").val("");
    $("#texteditor").css('display', 'none');
    $("#texteditor").css('enable', 'false');
    $("#imageeditor").css('display', 'none');
    $(".well.text-edit").css('display', 'none');
}

function setFont(font) {
    var activeObject = canvas.getActiveObject();
    this.setStyle(activeObject, 'fontFamily', font);
    canvas.renderAll();
    // if (activeObject && activeObject.type === 'textbox') {
    //     activeObject.fontFamily = font;
    //     canvas.renderAll();
    // }
}

function setFontSize(size) {
    var activeObject = canvas.getActiveObject();
    this.setStyle(activeObject, 'fontSize', size);
    canvas.renderAll();
    // if (activeObject && activeObject.type === 'textbox') {
    //     activeObject.fontSize = size;
    //     canvas.renderAll();
    // }
}

function removeWhite() {
    var activeObject = canvas.getActiveObject();
    if (activeObject && activeObject.type === 'image') {
        activeObject.filters[2] = new fabric.Image.filters.RemoveWhite({
            hreshold: 100,
            distance: 10
        });
        //0-255, 0-255
        activeObject.applyFilters(canvas.renderAll.bind(canvas));
    }
}
