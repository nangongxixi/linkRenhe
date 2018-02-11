(function ($) {
    var noop = function () {
        return true;
    };
    $(function () {
        /*
         * 单图上传
         */
        var bar = $('.bar');
        var percent = $('.percent');
        var showimg = $('#showimg');
        var progress = $(".progress");
        var files = $(".files");
        var btn = $(".btn span");
        $("#fileupload").wrap("<form id='myupload' action='/public/lib/action.php' method='post' enctype='multipart/form-data'></form>");
        $("#fileupload").change(function () {
            $("#myupload").ajaxSubmit({
                dataType: 'json',
                beforeSend: function () {
                    showimg.empty();
                    progress.show();
                    var percentVal = '0%';
                    bar.width(percentVal);
                    percent.html(percentVal);
                    btn.html("上传中...");
                },
                uploadProgress: function (event, position, total, percentComplete) {
                    var percentVal = percentComplete + '%';
                    bar.width(percentVal);
                    percent.html(percentVal);
                },
                success: function (data) {
                    files.html("<span class='delimg' rel='" + data.pic + "'>&nbsp;</span>");
                    var img = "/public/upload/" + data.pic;
                    showimg.html("<img src='" + img + "'>");
                    btn.html("添加附件");
                    $("#suoluet").attr("value", data.pic);
                    return data.pic;
                },
                error: function (xhr) {
                    btn.html("上传失败");
                    bar.width('0');
                    files.html(xhr.responseText);
                }
            });
        });
        //删除缩略图
        $(".delimg").live('click', function () {
            var pic = $(this).attr("rel");
            $.post("/public/lib/action.php?act=delimg", {imagename: pic}, function (msg) {
                if (msg == 1) {
                    files.html("");
                    showimg.empty();
                    progress.hide();
                } else {
                    alert(msg);
                }
            });
        });

        /*
         * 分页
         */
        var data = $("#tr_list > li");
        var nums = 3; //页面大小
        var totals = data.length;
        var pages = Math.ceil(data.length / nums); //得到总页数
        var thisDate = function (curr) {
            var str = '', last = curr * nums - 1;
            last = last >= data.length ? (data.length - 1) : last;
            for (var i = (curr * nums - nums); i <= last; i++) {
                str += '<li>' + $(data[i]).html() + '</li>';
            }
            return str;
        };
        laypage({
            cont: $('#pagelist'), //容器。值支持id名、原生dom对象，jquery对象,
            pages: pages, //总页数
            pagesize: nums,
            total: totals, //总条数
            skip: true,
            first: 1,
            last: pages,
            skin: '#ccc', //加载内置皮肤，也可以直接赋值16进制颜色值，如:#c00
            //prev: '<', //若不显示，设置false即可
            //next: '>', //若不显示，设置false即可  
            groups: 3, //连续显示分页数
            jump: function (obj) {
                $('#pagelist_prompt').html('总共 <font style="color:red">' + obj.total + '</font> 条，每页显示 <font style="color:red">' + obj.pagesize + '</font> 条，当前第 <font style="color:red">' + obj.curr + '</font> 页');
                $('#tr_list').html(function () {
                    return thisDate(obj.curr);
                });
            }
        });
    });
})(jQuery);
