	var Type_Val = [];
	var Price_Val = [];
	var Quantity_Val = [];
	var Perproduct_Val = [];
	
	Type_Val.length = 0;
	Price_Val.length = 0;
	Perproduct_Val.length=0;
	Quantity_Val.length = 0;
	
	this.Email = localStorage.getItem("customer_mail");
	this.Name = localStorage.getItem("customer_name");
	this.Mobile = localStorage.getItem("customer_mob");
	this.Address = localStorage.getItem("cust_add");
	this.Payment = localStorage.getItem("paymet");
	this.LanguageCode = 'en';
	this.OrderChannel = 'OLO';
	this.OrderID = $("#order_id").val();
	this.OrderMethod = 'Web';
	this.type = localStorage.getItem("paymet");
	this.Discount=($("#discount").val())?$("#discount").val():0;
	this.Type=$('.type').each(function(){$(this).val();

	Type_Val.push($(this).val());
	
	});
	
	this.Price=$('.price').each(function(){
	$(this).val();
	Price_Val.push($(this).val());
	
	});
	this.Quantity=$('.qty').each(function(){
	$(this).val();
	Quantity_Val.push($(this).val());
	
	});
	this.total_cost=$('.price1').each(function(){
	$(this).val();
	Perproduct_Val.push($(this).val());
	
	});
	
	this.Total = $("#total").val();
	//console.log(this)
