$(".product-info div:nth-child(n)").hide();
$(".product-info div:first-child").show();
$(".line-icons .jewel").css({ fill: "#FFCC06" });

// hide first div
$(".line-icons svg:nth-child(n)").click(function(){
	$(".line-icons .line-icon:nth-child(n)").css({ fill: "none" });
	$(".product-info div").hide();
});
// show jewelry panel and bg 
$(".line-icons svg:nth-child(1)").click(function(){
	$(".line-icons .jewel").css({ fill: "#FFCC06" });
	$(".product-info div:nth-child(1)").show(800);
	$(".products").css({ background: "linear-gradient(-180deg, rgba(118,127,199,0.40) 0%, rgba(32,38,110,0.60) 100%), url('http://omahahls.com/expresspawntemp/wp-content/uploads/2016/05/ringbw.jpg') center center/cover"});
});
// show phone panel and bg 
$(".line-icons svg:nth-child(2)").click(function(){
	$(".line-icons .phone").css({ fill: "#FFCC06" });
	$(".product-info div:nth-child(2)").show(800);
	$(".products").css({ background: "linear-gradient(-180deg, rgba(118,127,199,0.40) 0%, rgba(32,38,110,0.60) 100%), url('http://omahahls.com/expresspawntemp/wp-content/uploads/2016/05/phonebw.jpg') center center/cover"});
});
// show guitar panel and bg 
$(".line-icons svg:nth-child(3)").click(function(){
	$(".line-icons .guitar").css({ fill: "#FFCC06" });
	$(".product-info div:nth-child(3)").show(800);
	$(".products").css({ background: "linear-gradient(-180deg, rgba(118,127,199,0.40) 0%, rgba(32,38,110,0.60) 100%), url('http://omahahls.com/expresspawntemp/wp-content/uploads/2016/05/guitar2bw.jpg') right center/cover"});
});
// show gun panel and bg 
$(".line-icons svg:nth-child(4)").click(function(){
	$(".line-icons .gun").css({ fill: "#FFCC06" });
	$(".product-info div:nth-child(4)").show(800);
	$(".products").css({ background: "linear-gradient(-180deg, rgba(118,127,199,0.40) 0%, rgba(32,38,110,0.60) 100%), url('http://omahahls.com/expresspawntemp/wp-content/uploads/2016/05/guns-bw.jpg') center center/cover"});
});
// show tool panel and bg 
$(".line-icons svg:nth-child(5)").click(function(){
	$(".line-icons .tool").css({ fill: "#FFCC06" });
	$(".product-info div:nth-child(5)").show(800);
	$(".products").css({ background: "linear-gradient(-180deg, rgba(118,127,199,0.40) 0%, rgba(32,38,110,0.60) 100%), url('http://omahahls.com/expresspawntemp/wp-content/uploads/2016/05/toolsbw.jpg') center center/cover"});
});
