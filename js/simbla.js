/**
 * B"H
 * Created by deren 10/29/13.
 */

function simblaFormSubmit(form) {
    var T = $(form)
    T.find('.simbla-form').remove()
    if (T.attr('action') == undefined) {
        function error() {
            spin.remove();
            if (T.data('failure-type') == 'text')
                T.append('<div class="text-danger simbla-form"><label>' + T.data('failure') + '</label></div>')
            else if (T.data('failure-type') == 'link') {
                window.location = T.data('failure')
            }
        }

        var serialize = T.serializeArray();
        var data = {};
        serialize.forEach(function (e) {
            var name = e.name
            if (!data[name])
                data[name] = e.value;
            else {
                if (!$.isArray(data[name]))
                    data[name] = [data[name]]
                data[name].push(e.value)
            }
        });
        data.formName = T.attr('name')
        var spin = $('<div class="simbla-form"><i class="fa fa-spinner fa-spin"></i></div>')
        T.append(spin)
        $.post('/', data, function (e) {

            if (e && e.err != null)
                error();
            else {
                spin.remove();
                if (T.data('success-type') == 'text')
                    T.append('<div class="text-success simbla-form"><label>' + T.data('success') + '</label></div>')
                else if (T.data('success-type') == 'link') {
                    window.location = T.data('success')
                }
            }


        }).fail(error)

        return false;

    }
}

function getColor(el, type) {
    var bgColor = "#fff";
    switch (type) {
        case "solid":
        case "rounded":
            bgColor = $(el).css('backgroundColor');
            break;
        case "underline":
            bgColor = $(el).css('borderBottomColor');
            break;
        case "border":
            bgColor = $(el).css('borderColor');
            break;
        case "divider":
            var borderR = $(el).parents('.rtl').length == 0 ? "borderRightColor" : "borderLeftColor";
            bgColor = $(el).css(borderR);
            break;
    }
    return bgColor;
}

function setBackgroundType(elem, color, type, hover) {

    type = type.toLowerCase();
    var cssObj = {}
    if (!hover)
        cssObj = {
            "border": "none",
            "borderBottom": "none",
            "borderRight": "none",
            "borderLeft": "none",
            "backgroundColor": "transparent",
            "borderRadius": 0,
            "marginRight": 0,
            "marginLeft": 0
        }

    if (type != "none")
        switch (type) {
            case "solid":
                cssObj["backgroundColor"] = color;
                break;
            case "underline":
                cssObj["borderBottom"] = "5px solid " + color;
                break;
            case "border":
                cssObj["border"] = "2px solid " + color;
                cssObj["borderRight"] = "2px solid " + color;
                cssObj["borderLeft"] = "2px solid " + color;
                cssObj["borderBottom"] = "2px solid " + color;
                break;
            case "rounded":
                cssObj["backgroundColor"] = color;
                cssObj["borderRadius"] = "4px";
                cssObj["marginRight"] = "3px";
                if (hover && $(elem).css("marginLeft") == "0px")
                    cssObj["marginLeft"] = "3px";
                break;
            case "divider":
                cssObj["borderLeft"] = "1px solid " + color;
                cssObj["borderRight"] = "1px solid " + color;
                break;
        }

    $(elem).css(cssObj);
}
function getOpacity(el, type) {

    var opacity = 1;

    switch (type) {
        case "solid":
        case "rounded":
            opacity = $(el).css('backgroundColor');
            break;
        case "underline":
            opacity = $(el).css('borderBottomColor');
            break;
        case "border":
            opacity = $(el).css('borderColor');
            break;
        case "divider":
            var borderR = $(el).parents('.rtl').length == 0 ? "borderRightColor" : "borderLeftColor";
            opacity = $(el).css(borderR);
            break;
    }
    if (!opacity || opacity >= 1 || typeof opacity != "string")
        return 1;
    return opacity.split(',').pop().replace(')', '');
}
function hexToRgb(hex) {
    var shorthandRegex = /^#?([a-f\d])([a-f\d])([a-f\d])$/i;
    hex = hex.replace(shorthandRegex, function (m, r, g, b) {
        return r + r + g + g + b + b;
    });

    var result = /^#?([a-f\d]{2})([a-f\d]{2})([a-f\d]{2})$/i.exec(hex);
    return result ? {
        r: parseInt(result[1], 16),
        g: parseInt(result[2], 16),
        b: parseInt(result[3], 16)
    } : null;
}
$(function () {
    $("[data-hover-color], [data-hover-backgroundcolor]").each(function () {
        elem = $(this);
        elem.off('mouseenter mouseleave');
        var color = elem.find('a:first').css('color')
            , hoverColor = elem.attr('data-hover-color'), hoverBG = elem.attr('data-hover-backgroundcolor')
            , hoverOpacity = elem.attr('data-hover-opacity') || 1
            , fontFamily = elem.find('a:first')[0].style.fontFamily, hoverFontFamily = elem.attr('data-hover-fontfamily')
            , fontSize = elem.find('a:first').css('fontSize'), hoverFontSize = elem.attr('data-hover-fontsize')
            , fontWeight = elem.find('a:first').css('fontWeight'), hoverFontWeight = elem.attr('data-hover-fontweight')
            , bgType = elem.attr('data-bgtype') || "solid", hoverBgType = elem.attr('data-hover-bgtype') || "solid"
            , bgColor = getColor(elem.find('a:first'), bgType)
            , opacity = getOpacity(elem.find('a:first'), bgType)

        if (hoverBG) {
            var h = hexToRgb(hoverBG);
            hoverBG = 'rgba(' + h.r + ',' + h.g + ',' + h.b + ',' + hoverOpacity + ')'
        }
        if (elem.parents('.container-fluid').find('.navbar-toggle').is(':visible')) {
            elem.css("height", "")
        }
        /* if ( (!elem.attr('style') || elem.attr('style').indexOf('height') == -1) && elem.attr('data-bgtype') != "underline" && elem.attr('data-hover-bgtype') == "underline"
         && (elem.attr('data-current-bgtype') != "underline" || elem.find('.current').length == 0) ) {
         var x = 5;
         if (elem.attr('data-bgtype') == "border" || elem.attr('data-current-bgtype') == "border" || elem.find('.current').length > 0)
         x = 3
         elem.height(elem.height() + x)
         }
         */

        if (hoverBG || hoverColor)
            elem.on({
                mouseenter: function () {
                    if (!$(this).data('custom-style')) {
                        $(this).css({
                            color: hoverColor, /*backgroundColor: hoverBG,opacity: hoverOpacity, */
                            fontFamily: hoverFontFamily,
                            fontSize: hoverFontSize,
                            fontWeight: hoverFontWeight
                        });
                        setBackgroundType(this, hoverBG, hoverBgType, true)
                    }
                },
                mouseleave: function () {
                    if (!$(this).data('custom-style')) {
                        $(this).css({
                            color: color, /* backgroundColor: bgColor, opacity: opacity,*/
                            fontFamily: fontFamily,
                            fontSize: fontSize,
                            fontWeight: fontWeight
                        });
                        setBackgroundType(this, bgColor, bgType, false)
                    }
                }
            }, 'a');

    });

    /*var location = window.location.pathname;
     if (window.location.host == "sites.simbla.com") {
     location = location.split('/');
     location.splice(0, 2);
     location = location.join('/');
     } */
    $("ul.nav li a.current").each(function () {
        var ul = $(this).parents('ul.nav')
            , bgColor = ul.data('current-backgroundcolor')
            , color = ul.data('current-color')
            , opacity = ul.data('current-opacity') || 1
            , fontFamily = ul.data('current-fontfamily')
            , fontSize = ul.data('current-fontsize') || "13px"
            , fontWeight = ul.data('current-fontweight') || "normal"
            , bgType = ul.data('current-bgtype') || "solid"


        if (bgColor) {
            var h = hexToRgb(bgColor);
            bgColor = 'rgba(' + h.r + ',' + h.g + ',' + h.b + ',' + opacity + ')'
            $(this).css({
                /*'background-color': bgColor,*/
                color: color,
                fontFamily: fontFamily,
                fontSize: fontSize,
                fontWeight: fontWeight
            }).data('custom-style', true);
            setBackgroundType(this, bgColor, bgType, true)
        }
    });


    $(".right.carousel-control").click();

    $('a[href^="#"]').on('click',function (e) {
        e.preventDefault();

        var target = this.hash;
        var $target = $(target);

        $('html, body').stop().animate({
            'scrollTop': $target.offset().top
        }, 700, 'swing', function () {
            window.location.hash = target;
        });
    });
});
$(window).load(function () {
    if ($('.simblaHeader.sticky').length > 0) {
        $('#bodyContainer').css('margin-top', $('.simblaHeader.sticky').outerHeight());
    }
    setTimeout(function () {
        if ($('.simblaFooter:not(".sticky")').length == 1 && ($('#windowDiv').height() + $('.simblaFooter').outerHeight()) > window.innerHeight) {
            $('#windowDiv').height($('#windowDiv').height() + $('.simblaFooter').outerHeight());
        }
        else if ($('#windowDiv').height() < window.innerHeight) {
            $('#windowDiv').css('height', window.innerHeight + 'px');
        }
        $('a#linkToSimbla').css('top', $('#windowDiv').height() - 20 + 'px');
    }, 200)
})