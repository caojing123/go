/*顶部悬浮滚动*/
window.onscroll=function(){
	var scrollTop=document.documentElement.scrollTop || document.body.scrollTop;
	if(scrollTop>600){
		$("#headerTop")[0].style.marginTop="0px";
	}else{
		$("#headerTop")[0].style.marginTop="-50px";
	}
	
	if(scrollTop>800){
		$("#bujuLeft")[0].style.display="block";
	}else{
		$("#bujuLeft")[0].style.display="none";
	}
	
	if(scrollTop>1905){
		mils.find("a").css({"background":"white","color":"black"});
		$(mlis[0]).find("a").css({"background":"green","color":"white"});
	}
	
	if(scrollTop>2475){
		mils.find("a").css({"background":"white","color":"black"});
		$(mlis[1]).find("a").css({"background":"green","color":"white"});
	}
}

