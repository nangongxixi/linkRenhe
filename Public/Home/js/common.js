function autoimg(){
    imgwidth=$('.imgauto').width();
    //设定初始值
    width=235;
    height=208;
    bili=width/height;
    nn=imgwidth/bili;
    $('.imgauto').attr("height",nn+"px");
}

function resizeImage(){
	//只用作计算比例用，不能用于后续具体计算中
	var imgC_defau_w=235,imgC_defau_h=208;
	var harr=[];
	var imgC_scale=imgC_defau_w/imgC_defau_h,$imgC=$('.showpic');
	
	$imgC.each(function(i, d) {
    	var $img=$(d).find('img'),img_w=$img.width(),img_h=$img.height();
		var imgC_w=$(d).width(),imgC_h=imgC_w/imgC_scale,curImg_h=imgC_h-$(d).find('.title').height();
		$(d).css({"height":imgC_h,"overflow":"hidden"});
		harr.push(imgC_h);
		if(img_h<curImg_h){
			imgMb=(parseFloat($(d).css("height"))-img_h);
			$img.css("margin-bottom",(imgMb-$(d).find('.title').height())+"px");
		}else{
			var new_w=curImg_h*(img_w/img_h),new_scale=new_w/$(d).width();
			//$img.css('width',(new_scale*100)+"%");	
		}  
    });
	$imgC.css("height",Math.max.apply(Math,harr));
}

window.onload=function(){
	resizeImage();
}
$(window).bind('resize',function(){
	resizeImage();
});