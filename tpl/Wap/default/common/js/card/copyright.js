	$(function(){
		if ($("#token").val() == 'lanbo') {
	    	$(".copyright").html(" ");
	    };
	    $(".context .coupon").hide();
	    /*if($("#token").val() == 'lanbo'){

	    }*/
	    var couponnum = $(".localcoupon #couponnum").val();
		if (couponnum) {
			$(".localcoupon .couponnum").html("<div class='button pink serif skew glossy'>"+couponnum+"</div>");
		};
		 
			/*$(".couponnum div").attr("data-icon","")
			$(".couponnum div").html(couponnum);*/
			/*$.post("{lanrain::U('Wap/Index/lists',array('classid'=>$vo['id'],'token'=>$vo['token']))}",{fistnums:})
			$(".couponnum p").html("剩余优惠券："++"张")*/
		
	    
	});
	   