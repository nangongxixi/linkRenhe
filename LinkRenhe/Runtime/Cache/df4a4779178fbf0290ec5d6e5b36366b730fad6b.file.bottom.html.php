<?php /* Smarty version Smarty-3.1.6, created on 2018-02-08 15:45:28
         compiled from "C:\Program Files\phpStudy\WWW\LinkRenhe\LinkRenhe\Home\View\Common\bottom.html" */ ?>
<?php /*%%SmartyHeaderCode:233225a7c0018ea34f4-69852946%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'df4a4779178fbf0290ec5d6e5b36366b730fad6b' => 
    array (
      0 => 'C:\\Program Files\\phpStudy\\WWW\\LinkRenhe\\LinkRenhe\\Home\\View\\Common\\bottom.html',
      1 => 1490840098,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '233225a7c0018ea34f4-69852946',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5a7c0018ec28f',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a7c0018ec28f')) {function content_5a7c0018ec28f($_smarty_tpl) {?><div class="bottom_box">
    <ul>
        <li>           
            <a href="../index/index" class="bottom_btn_box">
                <img src="<?php echo @IMG_URL;?>
nav/<?php if (@CONTROLLER_NAME=='Index'){?>home_curr1.png<?php }else{ ?>home1.png<?php }?>" class="bottom_btn_img"/>             
                <span class="bottom_btn_text">首页</span>                
            </a>
        </li>
        <li>            

            <a  class="bottom_btn_box" <?php if (!empty($_SESSION['user']['userid'])){?>href="../complaints/index"<?php }else{ ?>onclick="land()"<?php }?>>
                <img src="<?php echo @IMG_URL;?>
nav/<?php if (@CONTROLLER_NAME=='Complaints'){?>home_curr2.png<?php }else{ ?>home2.png<?php }?>" class="bottom_btn_img"/>           
                <span class="bottom_btn_text">投诉处理</span>                
            </a>            
        </li>
        <li>
            <a href="../myinfo/index" class="bottom_btn_box">
                <img src="<?php echo @IMG_URL;?>
nav/<?php if (@CONTROLLER_NAME=='Myinfo'){?>home_curr3.png<?php }else{ ?>home3.png<?php }?>" class="bottom_btn_img"/> 
                <span class="bottom_btn_text">我的</span>                
            </a>           
        </li>
    </ul>
</div>

<SCRIPT type="text/javascript">
    function land() {
        var userid = "<?php echo $_SESSION['user']['userid'];?>
";
        if (userid == '') {
            layer.open({
                btn: ['登录', '取消'],
                content: '要想查看更多，必须先登录',
                shadeClose: true, //默认：true，是否点击遮罩时关闭层                
                yes: function () {
                    location.href = "../login/index";
                }
            });
        }
    }
</SCRIPT><?php }} ?>