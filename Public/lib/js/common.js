
function searchReset() {
    var form = $('form[name=search_form]');
    var uri = '?';
    
    form.find('input[type=hidden]').each(function(){
        uri+= $(this).attr('name') + '=' + $(this).val() + '&';
    });
    
    window.location.href = uri;
}

$.extend({
    browser: {
        msie: /msie/.test(navigator.userAgent.toLowerCase()),
        mozilla: /firefox/.test(navigator.userAgent.toLowerCase()),
        webkit: /webkit/.test(navigator.userAgent.toLowerCase()),
        opera: /opera/.test(navigator.userAgent.toLowerCase()),
    },
    Object: {
        count: function (p) {
            p = p || false;
            return $.map(this, function (o) {
                if (!p)
                    return o;
                return true;
            }).length;
        }
    },
    confirm: function (msg, okFn, cancelFn) {
        okFn = okFn ? okFn : function () {
        };
        cancelFn = cancelFn ? cancelFn : function () {
        };
        layer.confirm(msg,
                {icon: 3},
        function (index) {
            layer.close(index);
            okFn();
        }, function () {
            cancelFn();
        });
    },
    jsonFilter: function (filter) {
        var a = {}, c = [], l = filter.length;
        for (var i = 0; i < l; i++) {
            var b = filter[i];
            var d = (typeof b) + b;
            if (a[d] === undefined) {
                c.push(b);
                a[d] = 1;
            }
        }
        return c;
    },
    loadingStart: function () {
        layer.load(3, {shade: [0.1, '#000000']});
    },
    loadingStop: function () {
        layer.closeAll('loading');
    },
    alert: function (msg) {
        layer.alert(msg);
    },
    reload: function () {
        layer.closeAll();
        layer.msg('页面重新载入中...', {icon: 6, time: 10000});
        location.reload();
    },
});
$.fn.mouseLeaveOrEnter = function (e) {
    var handler = $(this)[0],
            reltg = e.relatedTarget ? e.relatedTarget : e.type == 'mouseout' ? e.toElement : e.fromElement;
    while (reltg && reltg != handler) {
        reltg = reltg.parentNode;
    }
    return (reltg != handler);
};
$.fn.getMsg = function () {
    var $this = $(this);
    var msg = $this.data("msg");
    return msg ? msg : $this.is("input") ? $.trim($this.val()) : $.trim($.text($this));
};
$(document).ajaxStart(function () {
    $.loadingStart();
}).ajaxStop(function () {
    $.loadingStop();
}).ready(function () {
    var $this = $(this);
    $.fn.getTipUploadHtml = function () {
        var $this = $(this),
                width = $this.data("width"),
                height = $this.data("height"),
                bg = $this.data("bg"),
                maxsize = $this.data("maxsize");
        var html = "";
        if (width || height || bg || maxsize) {
            html += '<div class="tip_upload"><div><div>===上传建议===</div>';
            if (width) {
                html += '<div>&nbsp;【宽度】' + width + '</div>';
                $this.removeData("width").removeAttr("data-width");
            }
            if (height) {
                html += '<div>&nbsp;【高度】' + height + '</div>';
                $this.removeData("height").removeAttr("data-height");
            }
            if (bg) {
                html += '<div>&nbsp;【背景】' + bg + '</div>';
                $this.removeData("bg").removeAttr("data-bg");
            }
            if (maxsize) {
                html += '<div>&nbsp;【大小】' + maxsize + '以下</div>';
                $this.removeData("maxsize").removeAttr("data-maxsize");
            }
            html += '</div></div>';
        }
        return html;
    };
    $(".upload").each(function () {
        var $this = $(this);
        var showHtml = '';
        var $img = $this.find(">img");
        if ($img.length) {
            var rel = $img.attr("rel");
            showHtml += '<div class="show_img_upload">';
            showHtml += '<a class="a_pre_upload" href="' + rel + '"> <img src="' + rel + '" /></a>';
            showHtml += '<a href="javascript:;" class="del_upload"></a>';
            var field = $this.data("field");
            showHtml += '<input type="hidden" name="' + field + '" value="' + rel + '">';
            $img.remove();
        } else {
            showHtml += '<div class="btn_upload"><div class="add_upload"></div>';
        }
        showHtml += '</div>';
        var $pre = $this.prepend(showHtml + $this.getTipUploadHtml()).find(">.show_img_upload");
        if ($pre.length) {
            var group = $this.data("group");
            $pre.find(">.a_pre_upload").colorbox(group ? {rel: group,maxHeight:'90%',maxWidth:'90%'} : {maxHeight:'90%',maxWidth:'90%'})
        }
    });
    $(".uploads").each(function () {
        var $this = $(this);
        var $img = $this.find(">img"),
                length = $img.length,
                cnt = 0;
        var html = '<div class="clear"></div><div class="show">';
        if (length) {
            var $form = $this.closest("form"),
                    show = $this.data("show"),
                    field = $this.data("field"),
                    deleted = $this.data("deleted");
            $img.each(function (i) {
                var $ts = $(this),
                        idImg = $ts.data("idimg"),
                        rel = $ts.attr("rel");
                if ($ts.data("flagdel")) {
                    var hiddenHtml = '<input type="hidden" name="' + deleted + '" value="' + idImg + '" />';
                    hiddenHtml += '<input type="hidden" name="' + show + '[' + i + '][img_id]" value="' + idImg + '">';
                    hiddenHtml += '<input type="hidden" name="' + show + '[' + i + '][file]" value="' + rel + '">';
                    $form.append(hiddenHtml);
                } else {
                    cnt++;
                    html += '<div class="show_img_upload">';
                    html += '<a class="a_pre_upload" href="' + rel + '"> <img src="' + rel + '" /></a>';
                    if (idImg) {
                        html += '<a href="javascript:;" class="del_upload" data-del="' + idImg + '"></a>';
                        html += '<input type="hidden" name="' + show + '[' + i + '][img_id]" value="' + idImg + '">';
                        html += '<input type="hidden" name="' + show + '[' + i + '][file]" value="' + rel + '">';
                    } else {
                        html += '<a href="javascript:;" class="del_upload"></a>';
                        html += '<input type="hidden" name="' + field + '" value="' + rel + '">';
                    }
                    html += "</div>";
                }
                $ts.remove();
            });
        }
        html += "</div>";
        var showHtml = '<div class="btn_upload"><div class="add_upload"></div><div class="cnt_upload">已上传<span>' + cnt + '</span>张</div></div>';
        var $pre = $this.prepend(showHtml + $this.getTipUploadHtml()).parent().append(html).find(">.show>.show_img_upload");
        if ($pre.length) {
            var group = $this.data("group");
            $pre.find(">.a_pre_upload").colorbox(group ? {rel: group,maxHeight:'90%',maxWidth:'90%'} : {maxHeight:'90%',maxWidth:'90%'});
        }
    });
    $this.on("click", ".rayu_ajax_confirm", function (e) {
        e.preventDefault();
        var $this = $(this);
        $.confirm('是否确认' + $this.getMsg(), function () {
            var href = $this.attr("href");
            if (!href && href == "javascript:;") {
                return;
            }
            $.get(href, function (output) {
                if (output.code) {
                    $.alert(output.msg);
                } else {
                    layer.msg('操作成功', {
                        icon: 1,
                        time: 1500,
                    }, function () {
                        $.reload();
                    });
                }
            });
        });
    }).on("click", ".rayu_confirm", function (e) {
        e.preventDefault();
        var $this = $(this);
        $.confirm('是否确认' + $this.getMsg(), function () {
            location.href = $this.attr("href");
        });
    }).on("click", "form input[name=complete]", function (e) {
        var $this = $(this);
        if ($.browser.msie) {
            $this.find("#form_hidden_file").remove();
        }
        if (!$this.data("form")) {
            $this.data("form", $this.closest("form"));
        }
        var $form = $this.data("form");
        if ($form[0]) {
            e.preventDefault();
            $.confirm('是否确认' + $this.getMsg(), function () {
                $form.append('<input type="hidden" value="1" name="complete"/>').submit();
            });
        }
    }).on("click", ".rayu_html_fetch", function (e) {
        e.preventDefault();
        var $this = $(this);
        $.get($this.attr("href"), function (output) {
            if (output.code) {
                $.alert(output.msg);
            } else {
                layer.open({
                    type: 1,
                    content: output.data.info.html,
                });
            }
        });
    }).on("click", ".rayu_html_iframe", function (e) {
        e.preventDefault();
        var title = this.title;
        layer.open({
            type: 2,
            shade: 0,
            maxmin: true,
            area: ['80%', '88%'],
            title: title ? title : '&nbsp;',
            content: this.href,
        });
    }).on("click", ".upload .del_upload", function (e) {
        e.preventDefault();
        var $this = $(this);
        $.confirm('是否确认删除该图片', function () {
            var $parent = $this.parent();
            $parent.parent().prepend('<div class="btn_upload"><div class="add_upload"></div>');
            $parent.remove();
        });
    }).on("click", ".show .del_upload", function (e) {
        e.preventDefault();
        var $this = $(this);
        $.confirm('是否确认删除该图片', function () {
            var $uploads = $this.closest("td").find(">.uploads");
            var $cntUpload = $uploads.find(">.btn_upload>.cnt_upload>span");
            var idImg = $this.data("del");
            if (idImg) {
                $this.closest("form").append('<input type="hidden" name="' + $uploads.data("deleted") + '" value="' + idImg + '" />').append($this.siblings("input[type=hidden]").clone());
            }
            $cntUpload.text(parseInt($.text($cntUpload)) - 1);
            $this.parent().remove();
        });
    }).on("click", ".add_upload", function () {        
        var $this = $(this),
                $parent = $this.parent(),
                $upload = $parent.parent();
        var flagMultiple = $upload.hasClass("uploads") ? 1 : 0;
        if (flagMultiple) {
            var $cntUpload = $this.next().find("span"),
                    cnt = parseInt($.text($cntUpload)),
                    maxcnt = $upload.data("maxcnt");
            if (maxcnt && cnt == maxcnt) {
                layer.msg('最多上传' + maxcnt + '张', {icon: 0, time: 1500});
                return;
            }
        }
        $.upload({            
            url: $upload.data('url'),
            fileName: 'file',
            params: {'name': $upload.data('name'), 'prefix': $upload.data('prefix'), 'path': $upload.data('path')},
            dataType: 'json',
            onSend: function () {
                alert($upload.data('url'));
                alert($upload.data('name'));
                alert($upload.data('path'));
                return true;
            },
            onComplate: function (output) {
                
                alert(output);
                
                if (output.status == '1') {
                        var url = output.data.url;
                        if (url) {
                            var html = '<div class="show_img_upload">';
                            html += '<a class="a_pre_upload" href="' + url + '"> <img src="' + url + '" /></a>';
                            html += '<a href="javascript:;" class="del_upload"></a>';
                            var field = $upload.data("field");
                            html += '<input type="hidden" name="' + field + '" value="' + url + '">';
                            html += "</div>";
                            var group = $upload.data("group");
                            if (flagMultiple) {
                                $this.closest("td").find(">.show").append(html).find(">.show_img_upload:last>.a_pre_upload").colorbox(group ? {rel: group,maxHeight:'90%',maxWidth:'90%'} : {maxHeight:'90%',maxWidth:'90%'});
                                $cntUpload.text(cnt + 1);
                            } else {
                                $upload.prepend(html).find(">.show_img_upload>.a_pre_upload").colorbox(group ? {rel: group,maxHeight:'90%',maxWidth:'90%'} : {maxHeight:'90%',maxWidth:'90%'});
                                $parent.remove();
                            }
                        }
                } else {
                    $.alert(output.msg);
                }
                $.loadingStop();
            }
        });
    });
    if ($.browser.msie) {
        $this.on("mouseenter", ".btn_upload", function (e) {
            var $this = $(this);
            if ($this.mouseLeaveOrEnter(e)) {
                var $upload = $this.parent();
                $("#form_hidden_file").remove();
                var opts = {
                    url: $upload.data('url'),
                    fileName: 'file',
                    params: {'name': $upload.data('name'), 'prefix': $upload.data('prefix'), 'path': $upload.data('path')},
                };
                var html = '<form id="form_hidden_file" method="post" enctype="multipart/form-data" target="iframe_hidden" action="' + opts.url + '">';
                html += '<iframe name="iframe_hidden" style="display:none" id="iframe_hidden"></iframe>';
                html += '<input type="file" name="' + opts.fileName + '" id="file_hidden">';
                for (key in opts.params) {
                    html += '<input type="hidden" name="' + key + '" value="' + opts.params[key] + '" />';
                }
                html += '</form>';
                $upload.append(html);
                $("#file_hidden").css({
                    'position': 'absolute',
                    'left': 0,
                    'top': 0,
                    'width': '100px',
                    'height': '100px',
                    'opacity': 0,
                    'filter': 'alpha(opacity=0)',
                    'cursor': 'pointer',
                    'font-size': '100px',
                });
            }
        }).on("click", "#file_hidden", function () {           
            var $this = $(this),
                    $parent = $this.parent(),
                    $btn_upload = $parent.siblings(".btn_upload"),
                    $upload = $btn_upload.parent();
            var flagMultiple = $upload.hasClass("uploads") ? 1 : 0;
            if (flagMultiple) {
                var $cntUpload = $btn_upload.find("span"),
                        cnt = parseInt($.text($cntUpload)),
                        maxcnt = $upload.data("maxcnt");
                if (maxcnt && cnt == maxcnt) {
                    layer.msg('最多上传' + maxcnt + '张', {icon: 0, time: 1500});
                    return;
                }
            }
            setTimeout(function () {
                $("#iframe_hidden").unbind("load").load(function () {
                    var $this = $(this),
                            $form = $this.parent(),
                            output = $.text($this.contents().find('body'));
                    if (output) {
                        output = window.eval('(' + output + ')');
                        if (output.status == '1') {
                                var url = output.data.url;
                                if (url) {
                                    var html = '<div class="show_img_upload">';
                                    html += '<a class="a_pre_upload" href="' + url + '"> <img src="' + url + '" /></a>';
                                    html += '<a href="javascript:;" class="del_upload"></a>';
                                    var field = $upload.data("field");
                                    html += '<input type="hidden" name="' + field + '" value="' + url + '">';
                                    html += "</div>";
                                    var group = $upload.data("group");
                                    if (flagMultiple) {
                                        $this.closest("td").find(">.show").append(html).find(">.show_img_upload:last>.a_pre_upload").colorbox(group ? {rel: group,maxHeight:'90%',maxWidth:'90%'} : {maxHeight:'90%',maxWidth:'90%'});
                                        $cntUpload.text(cnt + 1);
                                    } else {
                                        $upload.prepend(html).find(">.show_img_upload>.a_pre_upload").colorbox(group ? {rel: group,maxHeight:'90%',maxWidth:'90%'} : {maxHeight:'90%',maxWidth:'90%'});
                                        $btn_upload.remove();
                                    }
                                    $form.remove();
                                }
                        } else {
                            $.alert(output.msg);
                        }
                        $.loadingStop();
                    }
                });
            }, 400);
        });
    }
});