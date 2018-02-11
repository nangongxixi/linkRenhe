<?php /* Smarty version Smarty-3.1.6, created on 2017-03-30 10:19:52
         compiled from "D:\WWW\LinkRenhe\LinkRenhe\Home\View\Common\bottom.html" */ ?>
<?php /*%%SmartyHeaderCode:3224858af862c9b49c8-80315508%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd2bc4447d1935e1c6f5c15fc52aeb1059e418794' => 
    array (
      0 => 'D:\\WWW\\LinkRenhe\\LinkRenhe\\Home\\View\\Common\\bottom.html',
      1 => 1490840098,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3224858af862c9b49c8-80315508',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58af862ca490f',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58af862ca490f')) {function content_58af862ca490f($_smarty_tpl) {?><div class="bottom_box">
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