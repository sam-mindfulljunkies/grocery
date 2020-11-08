@extends('frontend.layouts.app')
@section('content')
 <style type="text/css">
 @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;1,400;1,500&display=swap');

 body{
 	font-family: 'Poppins', sans-serif;
 }
 .wrapper {
    width: 100%;
    box-sizing: border-box;
}
.info {
    width: 100%;
    margin-bottom: 20px;
}
.personal_img {
    width: 15%;
    float: left;
}
.personal_info {
    width: 85%;
    float: left;
        display: flex;
}
.img {
    text-align: center;
        margin-top: 20px;
}
.img img {
    border-radius: 100%;
    width: 80px;
    height: 80px;
}
.details {
    width: 70%;
    float: left;
}
.buttons {
    width: 30%;
    float: left;
    text-align: right;
}
.img author {
    display: block;
    width: 100%;
    margin-top: 10px;
    color: #f67500;
}
.details p, .details a {
    color: #333;
    text-decoration: none;
}
.details p {
    margin-bottom: 5px;
    margin-top: 5px;
}
.buttons a {
    color: #20208d;
    text-decoration: none;
}
.clearfix:after {
   content: " "; 
   display: block;
   height: 0;
   clear: both;
}
.divider {
    height: 4px;
    background-color: green;
    margin: 10px 0px;
    display: block;
    width: 100%;
}
.wrapper table tr {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    margin-bottom: 20px;
    padding: 15px;
    display: block;
}
.wrapper table {
    width: 100%;
    overflow-x: scroll;
}
.wrapper table img {
    width: 30px;
}
.wrapper table label {
    display: block;
    width: 100%;
}
label.delivery-time {
    font-weight: bold;
}
label.delivery-message {
    font-size: 14px;
    margin: 5px 0px;
}
span.review-rating {
    color: #2d2af4;
    text-transform: uppercase;
    display: block;
    margin-top: 10px;
    font-size: 14px;
}
span.review-rating .fa-star {
    margin-right: 10px;
    font-size: 14px;
}
.varients span {
    display: block;
    font-size: 12px;
    color: #5b5b5b;
    margin-top: 5px;
}
span.plus-class:after {
    content: '\f067';
    font-family: 'FontAwesome';
    color: #20208d;
}
span.minus-class:after {
    content: '\f068';
    font-family: 'FontAwesome';
    color: #20208d;
}
.buttons-order {
    display: inline-block;
        margin-top: 20px;
}
.buttons-order a {
    background-color: #f67500;
    color: #fff;
    padding: 10px 15px;
    width: 150px;
    height: 42px;
    display: inline-block;
    border-radius: 10px;
    cursor: pointer;
    margin-right: 10px;
}
.table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {
    
    border-top: 0px solid #ddd !important;
}
 </style>	

 <div class="container" style="margin-top: 6%">
  <div class="wrapper clearfix">
     <div class="info clearfix">
       <div class="personal_img">
       	   <div class="img">
              <img src="{{asset($user->avatar)}}" width="100%">
              <author>{{$user->name}}</author>
           </div>
       </div>
       <div class="personal_info">
       	   <div class="details">
               <h1>Personal Information</h1>
               <p>{{$user->name}}</p>
               <p>{{$user->address}}</p>
				<p><a href="tel:{{$user->contact}}">{{$user->contact}}</a></p>
				<p><a href="mailto:{{$user->email}}">{{$user->email}}</a></p>
           </div>
           <div class="buttons">
             <a class="edit-btn" href="#" data-toggle="modal" data-target="#myModal">Edit</a>
           </div>
       </div>
     </div>

     <div class="divider"></div>

     <div class="myorder clearfix">
       <h2>myorder</h2>

       <table class="table-responsive table">

         @foreach($user as $val)
         <tr>
           <td width="100px">
             @if(isset($val->avatar_original))
             <img src="{{$val->avatar_original}}" width="100%">
             @endif
           </td>
           <td width="350px">
             <label class="product-name">{{$val}}</label>
             <div class="varients">
               <span>color: Blue</span>
               <span>Seller: Agile</span>
             </div>
           </td>
           <td width="300px" style="text-align: center;">
             <span>RS 636</span>
           </td>
           <td>
            <label class="delivery-time">Delivered on Sun, Nov 01</label>
            <label class="delivery-message">Your item has been delivered</label>
            <span class="review-rating"><i class="fa fa-star" aria-hidden="true"></i>Rate & Review Product</span>
           </td>
           <td width="100px" style="text-align: right;">
             <span class="plus-class"></span>
           </td>
            <th class="buttons-order">
             <a class="btn">Track Order</a>
             <a class="btn">Order Receipt</a>
           </th>
         </tr>
         @endforeach
       </table>
     </div>

  </div>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
 $(document).ready(function(){

    $('.buttons-order').hide();

    $(document).on('click','.plus-class',function(){
    	$(this).addClass('minus-class');
    	$(this).removeClass('plus-class');
    	$('.buttons-order').show();

    });
     $(document).on('click','.minus-class',function(){
    	
    	$(this).addClass('plus-class');
    	$(this).removeClass('minus-class');
    	$('.buttons-order').hide();
    });

 });
</script>
@endsection