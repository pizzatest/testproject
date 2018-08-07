	<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	?><!DOCTYPE html>
	<html lang="en">
	<head>
	<meta charset="utf-8">
	<title>Welcome </title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


	<script src="<?php echo base_url('/src/pizzas.js');?>" type="text/javascript"></script>
	<!--	<script src="<?php echo base_url('/src/Order.js');?>" type="text/javascript"></script>
	-->
	<script type="text/javascript" src="//code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
	background-color: #fff;
	margin: 40px;
	font: 13px/20px normal Helvetica, Arial, sans-serif;
	color: #4F5155;
	}

	a {
	color: #003399;
	background-color: transparent;
	font-weight: normal;
	}

	h1 {
	color: #444;
	background-color: transparent;
	border-bottom: 1px solid #D0D0D0;
	font-size: 19px;
	font-weight: normal;
	margin: 0 0 14px 0;
	padding: 14px 15px 10px 15px;
	}

	code {
	font-family: Consolas, Monaco, Courier New, Courier, monospace;
	font-size: 12px;
	background-color: #f9f9f9;
	border: 1px solid #D0D0D0;
	color: #002166;
	display: block;
	margin: 14px 0 14px 0;
	padding: 12px 10px 12px 10px;
	}

	#body {
	margin: 0 15px 0 15px;
	}

	p.footer {
	text-align: right;
	font-size: 11px;
	border-top: 1px solid #D0D0D0;
	line-height: 32px;
	padding: 0 10px 0 10px;
	margin: 20px 0 0 0;
	}

	#container {
	margin: 10px;
	border: 1px solid #D0D0D0;
	box-shadow: 0 0 8px #D0D0D0;
	}
	ul{list-style-type: none;}
	.dig{
	width: auto;
	min-height: 129px;
	max-height: none;
	height: auto;
	border: 1px solid a29e9e;
	color: #0c0b0b;
	border-radius: 6px;
	background-color: #f5f2f2;
	}
	.ui-dialog-titlebar-close{
	display:none;
	}
	.ui-draggable-handle:focus{
	outline:none !important;
	}
	.ui-resizable:focus{
	outline:none !important;
	}
	.ui-resizable{
	top: -175.375px !important;
	left: 235px !important;
	
	}
	.qty{
	width: 60px;
	border-radius: 10px;
	text-align: center;
	}
	.btn1{  
	justify-content: center !important;
    text-align: center !important;
	}
	li{
		font-size: 15px
	}
	</style>


	</head>
	<body>

	<div id="container" style="height: 345px;">
	<h1>Welcome To Order Pizza</h1>

	<div id="body">
	<input type="hidden" id="texto">
	<ul id="ul">


	</ul>	
	</div>
	<div id="txtAge" class="dig hidden" style="display: none;">

	</div>
	<div class="btn1"><button type="button" class="btn btn-default " id="order" onclick="sh_model()">Order</button></div>
	<div class="modal fade" id="modalID" role="dialog">
	<div class="modal-dialog">

	<!-- Modal content-->
	<div class="modal-content">

	<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal">&times;</button>
	<h4 class="modal-title">Item Details</h4>
	</div>
	<div class="modal-body">
	<form>
	<input type="hidden" id="order_id" value="<?php echo  substr(md5(rand(0, 1000000)), 0, 4);?>">
	<div><label>Customer Name:</label><input type="text" class="form-control"id="customer_name"></div>
	<br>
	<div><label>Customer Address:</label><textarea class="form-control" id="cust_add"></textarea></div>
	<br>
	<div><label>Customer Mobile:</label><input type="text" class="form-control"id="customer_mob"></div>
	<br>
	<div><label>Customer Email:</label><input type="text" class="form-control"id="customer_mail"></div>
	<br>
	<div><label>Payment:</label><select class="form-control" id="paymet"><option value="select">Select</option><option value="COD">COD</option></select></div>

	<div id="TextBoxesGroup"></div>
	<div id="tot2" ><br><label>Discount In Rs.:-</label><input onchange="cal_discount(this.value)" style="width:150px; border-radius:8px;" type="text" id="discount" id="discount'" class="discount" name="discount"  value="0">
	<div id="tot1"> <br><label>Total:-</label><input style="width:150px; border-radius:8px;" type="text" id="total" id="total'" class="total"name="total"  value="">
	</div>   
	</div>
	<div class="modal-footer">
	<button type="button" class="btn btn-default" onclick="submit_order()" >OK</button>
	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	</div>
	</form>
	</div>

	</div>
	</div>
	</div>

	</body>
	</html>


	<script>


	//var a= abc();
	// console.log(a);
	$( document ).ready(function() {

	var u="<?php echo base_url('/src/pizzas.js');?>";	
	//console.log(u);
	//alert(u);
	//var json = function () {
	var jsonTemp = null;
	$.ajax({
	//async: false,
	url: u,
	//type:"JSON",
	success: function (data) {
	jsonTemp = data;

	// JSON.parse(jsonTemp);
	obj = JSON.parse(data);
	//shareInfoLen = Object.keys(obj.shareInfo[0]).length;
	//console.log( (obj));
	for(var i=0;i<obj.length;i++){
	//console.log(obj[i].sizes[0]);
	//console.log(obj[i].sizes[1]);
	var ul = document.getElementById('ul'); //ul
	var li = document.createElement('li');//li
	var text = document.getElementById('texto');
	//var checkbox1=" <input type='checkbox' onclick='select()' value='Select' />";
	var checkbox = document.createElement('input');
	checkbox.type = "checkbox";
	checkbox.setAttribute("onclick",'test('+i+',"'+obj[i].name+'","'+obj[i].price_small+'","'+obj[i].price_large+'");');
	checkbox.setAttribute("class",'test');
	//checkbox.onclick=test();
	checkbox.name = obj[i].name;
	checkbox.value = obj[i].name;
	checkbox.id = obj[i].name;
	var label=document.createElement('label');
	var newlabel = document.createElement("Label");
	newlabel.setAttribute("for",obj[i].name);
	newlabel.innerHTML = obj[i].name;
	//var p=document.createElement('input');
	//p.type = "button";

	li.appendChild(checkbox);
	li.appendChild(newlabel)

	li.appendChild(document.createTextNode(text.value));
	ul.appendChild(li); 
	}
	}
	})
	return jsonTemp;
	//}


	});


	function test(counter,val,price_s,price_l){
	if ( document.getElementById(val).checked==true ) {
	var the_checkbox = $('#'+val);
	var t="<input type='text'>";
	var newTextBoxDiv = $(document.createElement('div'))
	.attr("id", 'TextBoxDiv' + counter);

	newTextBoxDiv.after().html('<label style="padding: 15px;">Type :-'+ val + ' : </label><input class="type" type="hidden" value="'+val+'" id="type_'+counter+'"><label>Quantity :-  </label>' +
	'<input type="number" class="qty" onkeyup="cal_pro(this.value,'+counter+')" value="1" name="textbox' + counter + 
	'" id="textbox' + counter + '" value="" >'+' <label>Price:- </label><input type="number" class="price" readonly style="width:100px; border-radius:8px;" value="" placeholder="Select Size" name="textbox_price' + counter + 
	'" id="textbox_price' + counter + '" value="" ><label>Size:- </label><input type="radio" id="'+counter+'" name="size'+counter+'" onchange="myFunction('+price_s+','+counter+')" class="size_radio" value="small"><label>Small</label><input class="size_radio" type="radio"  onchange="myFunction('+price_l+','+counter+')" name="size'+counter+'" value="Large"><label>Large</label><input type="hidden" class="price1" readonly style="width:100px; border-radius:8px;" value="" placeholder="Select Size" name="textbox_tot' + counter + 
	'" id="textbox_tot' + counter + '" value="" >');

	newTextBoxDiv.appendTo("#TextBoxesGroup");

	//  $("#pizza").append(t);
	//   $('#modalID').modal('show');



	} 
	else {
	$("#TextBoxDiv" + counter).remove();
	$('#modalID').hide();
	document.getElementById(val).checked==false

	}
	}

	function sh_model(){
  var checkboxs=document.getElementsByClassName("test");
    var okay=false;
	 for(var i=0,l=checkboxs.length;i<l;i++)
    {
		 if(checkboxs[i].checked)
        {
            okay=true;
           $('#modalID').modal('show');
		   break;
        }
		
		
	}
	if(okay==false){
		alert("Please select Pizza");
	}
//var confirm=document.getElementsByClassName("test").value;
//alert(document.getElementsByClassName('test').checked == true);
       // $('#modalID').modal('show');
	}
	function cal_discount(val){
	//alert(val);
	//alert(val);
	var dis=parseFloat($("#total").val())-parseFloat(val);
	$("#total").val(dis);
	}
	var sum = 0;
	function myFunction(price,c) {
	//alert(c);cal_price
	var p=parseFloat($("#textbox"+c).val())?parseFloat($("#textbox"+c).val()):1
	$("#textbox_price"+c).val(price*p);
	$("#textbox_tot"+c).val(price);

	cal_price();


	}


	//alert("zz");
	function cal_price(){
	var sum = 0;
	$('.price').each(function(){

	sum += parseFloat($(this).val())?parseFloat($(this).val()):0;//	?parseFloat($(this).text()):price;
	//alert(sum);
	$("#total").val(sum);
	//$("#total").val(sum);
	// Or this.innerHTML, this.innerText
	});


	}
	function cal_price1(){
	var sum = 0;
	$('.price1').each(function(){

	sum += parseFloat($(this).val())?parseFloat($(this).val()):0;//	?parseFloat($(this).text()):price;
	//alert(sum);
	$("#total").val(sum);
	//$("#total").val(sum);
	// Or this.innerHTML, this.innerText
	});


	}
	var final_tot=0;
	function cal_pro(val,counter){
	if($("#textbox_price"+counter).val() !="" &&  $("#textbox_price"+counter).val() !=null){
	$("#textbox_tot"+counter).val(parseFloat($("#textbox_price"+counter).val())*val);
	document.getElementById("order").disabled = false;
	cal_price1();
	
	}else{alert("Please select size");
	
	document.getElementById("order").disabled = true;
	}
	//$(this).val()
	}

	function submit_order(){
	//	alert("zzz");
			event.preventDefault();
		if($("#total").val()=="" && $("#customer_name").val()=="" ){
			alert("Please Select size of pizza or customer name");
			return true;
		}else{

	var str = $( "form" ).serialize();

	localStorage.setItem("customer_name", $("#customer_name").val());
	localStorage.setItem("cust_add", $("#cust_add").val());
	localStorage.setItem("customer_mob", $("#customer_mob").val());
	localStorage.setItem("customer_mail", $("#customer_mail").val());
	localStorage.setItem("paymet", $("#paymet").val());
	var u="<?php echo base_url('/src/Order.js');?>";	
	$.ajax({
	//async: false,
	url: u,
	data:str,
	//type:"JSON",
	success: function (data) {
		
		
			  window.location.href=("<?php echo base_url('index.php/Welcome/confirm_order')?>");
  $('#modalID').modal('hide');
	}});
		}
	}
	//document.write(json.a);

	</script>