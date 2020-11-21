<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<style>
body{margin-top:20px;
background:#eee;
}

.invoice {
    padding: 30px;
}

.invoice h2 {
	margin-top: 0px;
	line-height: 0.8em;
}

.invoice .small {
	font-weight: 300;
}

.invoice hr {
	margin-top: 10px;
	border-color: #ddd;
}

.invoice .table tr.line {
	border-bottom: 1px solid #ccc;
}

.invoice .table td {
	border: none;
}

.invoice .identity {
	margin-top: 10px;
	font-size: 1.1em;
	font-weight: 300;
}

.invoice .identity strong {
	font-weight: 600;
}


.grid {
    position: relative;
	width: 100%;
	background: #fff;
	color: #666666;
	border-radius: 2px;
	margin-bottom: 25px;
	box-shadow: 0px 1px 4px rgba(0, 0, 0, 0.1);
}
</style>
<div class="container">
<div class="row">
    				<!-- BEGIN INVOICE -->
					<div class="col-xs-12">
						<div class="grid invoice">
							<div class="grid-body">
								<div class="invoice-title">
									<div class="row">
										<div class="col-xs-12">
											<h1>Grocery </h1>
										</div>
									</div>
									<br>
									<div class="row">
										<div class="col-xs-12">
											<h2>invoice<br>
											<span class="small">order #{{$user[0]->order_id}}</span></h2>
										</div>
									</div>
								</div>
								<hr>
								<div class="row">
									<div class="col-xs-6">
										<address>
											<strong>Billed To:</strong><br>
											{{$user[0]->name}}<br>
											{{$user[0]->address}}<br>
											<abbr title="Phone">P:</abbr> {{$user[0]->phone}}
										</address>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-6">
										<address>
											<strong>Payment Method:</strong><br>
											{{$user[0]->payment_type}}<br>
											{{$user[0]->email}}<br>
										</address>
									</div>
									<div class="col-xs-6 text-right">
										<address>
											<strong>Order Date:</strong><br>
											{{$user[0]->date}}
										</address>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<h3>ORDER SUMMARY</h3>
										<table class="table table-stripet table-bordered" cellspacing="23">
											<thead>
												<tr class="line">
													<td class="text-center"><strong>products</strong></td>
													<td class="text-center"><strong>price</strong></td>
													<td class="text-center"><strong>Tax</strong></td>
													<td class="text-right"><strong>shpping cost</strong></td>
													<td class="text-right"><strong>qunantity</strong></td>
													<td class="text-right"><strong>SUBTOTAL</strong></td>
												</tr>
											</thead>
											<tbody>
                                            @foreach($user as $val)
												<tr>
													<td style="width:50%"><strong>{{$val->product_name}}</strong>
                                                    <br>{{$val->description}}</td>
													<td class="text-center">{{$val->purchase_price}}</td>
													<td class="text-center">{{$val->tax ? $val->tax : 0 }}</td>
													<td class="text-right">{{$val->shipping_cost}}</td>
													<td class="text-right">{{$val->quantity}}</td>
													<td class="text-right">{{(($val->purchase_price)*$val->quantity) + $val->shipping_cost+$val->tax}}</td>
												</tr>
                                                @endforeach
												<tr>
													<td colspan="4"></td>
                                                    <td class="text-right"><strong>Total</strong></td>
													<td class="text-right"><strong>{{$user[0]->grand_total}}</strong></td>
												</tr>
											</tbody>
										</table>
									</div>									
								</div>
							</div>
						</div>
					</div>
					<!-- END INVOICE -->
				</div>
</div>