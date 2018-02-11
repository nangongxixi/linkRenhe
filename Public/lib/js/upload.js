(function ($) { 
    var noop = function () {
        return true;
    };
    $.uploadDefault = {
        url: '',
        fileName: 'filedata',
        dataType: 'json',
        params: {},
        onSend: noop,
        onSubmit: noop,
        onComplate: noop
    };
    $.upload = function (options) {
        $("#form_hidden_file").remove();
        if ($.browser.msie) {
            return;
        }
        var opts = $.extend(jQuery.uploadDefault, options);
        if (opts.url == '') {
            return;
        }
        var canSend = opts.onSend();
        if (!canSend) {
            return;
        }
        var html = '<form id="form_hidden_file" method="post" style="display:none;" enctype="multipart/form-data" target="iframe_hidden" action="' + opts.url + '">';
        html += '<iframe style="display:none" name="iframe_hidden" id="iframe_hidden"></iframe>';
        html += '<input type="file" name="' + opts.fileName + '" id="file_hidden">';        
        for (key in opts.params) {
            html += '<input type="hidden" name="' + key + '" value="' + opts.params[key] + '" />';
        }
        html += '</form>';
        $("body").append(html);
        $('#file_hidden').click();
        setTimeout(function () {
            $("#iframe_hidden").unbind("load").load(function () {
                var $this = $(this),
                        $form = $this.parent(),
                        data = $.text($this.contents().find('body'));
                if (data) {
                    if ('json' == opts.dataType) {
                        data = window.eval('(' + data + ')');
                    }
                    opts.onComplate(data);
                }
                $form.remove();
            });
        }, 400);
        $("#form_hidden_file").submit(opts.onSubmit);
    };
    $(document).on("change", "#file_hidden", function () {
        $(this).parent().submit(function (e) {
            e.stopPropagation();
        }).submit();
        $.loadingStart();
    });
})(jQuery);
