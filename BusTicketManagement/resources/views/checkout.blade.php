<!doctype html>
<html>

<head>
  <meta charset='utf-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <title>Payment</title>
  <link href='#' rel='stylesheet'>
  <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet'>
  <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
  <style>
    ::-webkit-scrollbar {
      width: 8px;
    }

    /* Track */
    ::-webkit-scrollbar-track {
      background: #f1f1f1;
    }

    /* Handle */
    ::-webkit-scrollbar-thumb {
      background: #888;
    }

    /* Handle on hover */
    ::-webkit-scrollbar-thumb:hover {
      background: #555;
    }

    .warning {
      border-bottom: 1px solid red !important
    }
  </style>
</head>
        <!-- <div class="card">
          <table>
            <tr>
              <th>From</th>
              <th>To</th>
              <th>Seats</th>
              <th>From</th>
            </tr>
            <tr>
              <td>{{$from}}</td>
              <td>{{$to}}</td>
              <td>{{$Busseat}}</td>
              <td>{{$date}}</td>
            </tr>
          </div> -->
<body className='snippet-body'>
  <div class="flex justify-center items-center min-h-screen bg-blue-300">
    <div class="h-auto w-80 bg-white p-3 rounded-lg">
      <p class="text-xl font-semibold">Payment Details</p>
      <form action="CustomerPaymentFinalSubmit" method="POST">
        @csrf
        <div class="input_text mt-6 relative">
          </table>
          <input type="hidden" name="from" value="{{$from}}">
          <input type="hidden" name="to" value="{{$to}}">
          <input type="hidden" name="Busseat" value="{{$Busseat}}">
          <input type="hidden" name="date" value="{{$date}}">
          <input type="hidden" name="Customerseat" value="{{$Cuseat}}">
          <input type="hidden" name="price" value="{{$price}}">
          <input type="hidden" name="totalprice" value="{{$totalprice}}">
          <input type="hidden" name="busSeatLeft" value="{{$busSeatLeft}}">
          <input type="hidden" name="brandid" value="{{$brandid}}">
          <input type="hidden" name="brandname" value="{{$brandname}}">
          <input type="hidden" name="ticketid" value="{{$ticketid}}">
            <input type="text" required name="name" class="h-12 pl-7 outline-none px-2 focus:border-blue-900 transition-all w-full border-b " placeholder="John Row" /> 
              <span class="absolute left-0 text-sm -top-4">Cardholder Name</span> 
              <i class="absolute left-2 top-4 text-gray-400 fa fa-user"></i> 
        </div>

        <div class="input_text mt-8 relative"> 
          <input required type="number" name="cardID" class="h-12 pl-7 outline-none px-2 focus:border-blue-900 transition-all w-full border-b " placeholder="0000 0000 0000 0000" required min="1000000000000000" max="9999999999999999" step="1" pattern="\d*"size="16" /> 
            <span class="absolute left-0 text-sm -top-4">Card Number</span> <i class="absolute left-2 top-[14px] text-gray-400 text-sm fa fa-credit-card"></i> 
        </div>

        <div class="mt-8 flex gap-5 ">
          <div class="input_text relative w-full"> 
            <input required type="month" onfocus="(this.type='month')" name="Expiry" class="h-12 pl-7 outline-none px-2 focus:border-blue-900 transition-all w-full border-b " placeholder="mm/yyyy" data-slots="my" />
             <span  class="absolute left-0 text-sm -top-4">Expiry</span> <i class="absolute left-2 top-4 text-gray-400 fa fa-calendar-o"></i> 
          </div>
          <div class="input_text relative w-full"> 
            <input required type="number" name="CVV"class="h-12 pl-7 outline-none px-2 focus:border-blue-900 transition-all w-full border-b " placeholder="000" data-slots="0" data-accept="\d" size="3" min='001' max='999' />
             <span class="absolute left-0 text-sm -top-4">CVV</span> <i class="absolute left-2 top-4 text-gray-400 fa fa-lock"></i> 
          </div>
        </div>
        <p class="text-lg text-center mt-4 text-gray-600 font-semibold">Payment amount: {{$totalprice}}<b>৳</b></p>
        
        <div class="flex justify-center mt-4"> 
          <button class="outline-none pay h-12 bg-orange-600 text-white mb-3 hover:bg-orange-700 rounded-lg w-1/2 cursor-pointer transition-all">Pay</button> </div>
        </div>
        </form>
  
        <!---------------------------------------------------------->
      <div class="h-auto w-80 bg-white border=black p-3 rounded-lg">
      <p class="text-xl font-semibold card bodered">Ticket Details</p>
        <div class="input_text mt-6 relative">
            <div type="text" name="name" class="h-12 pl-7 outline-none px-2 focus:border-blue-900 transition-all w-full border-b " placeholder="John Row"></div> 
            <span  class="absolute left-0 text-sm -top-4"><p class="text-lg text-center mt-4 text-gray-600 font-semibold">{{$from}}<span>&#x2192;</span> {{$to}}</p></span> 
        </div>

        <div class="input_text mt-8 relative"> 
          <div class="h-12 pl-7 outline-none px-2 focus:border-blue-900 transition-all w-full border-b "></div>   
          <span  class="absolute left-0 text-sm -top-4"><p class="text-lg text-center mt-4 text-gray-600 font-semibold"><b>Date:</b> {{$date}}</p></span>
        </div>

        <div class="mt-8 flex gap-5 ">
          <div class="input_text relative w-full"> 
            <div class="h-12 pl-7 outline-none px-2 focus:border-blue-900 transition-all w-full border-b"></div>
             <span  class="absolute left-0 text-sm -top-4"><p class="text-lg text-center mt-4 text-gray-600 font-semibold"><b>Seats:</b> {{$Cuseat}} <small>(Each {{$price}}<b>৳</b></small>)</p></span>
          </div>
        </div>
        <div class="input_text mt-8 relative"> 
          <div class="h-12 pl-7 outline-none px-2 focus:border-blue-900 transition-all w-full border-b "></div>   
          <span  class="absolute left-0 text-sm -top-4"><p class="text-lg text-center mt-4 text-gray-600 font-semibold"><b>Brand:</b> {{$brandname}}</p></span>
        </div>
        <p class="text-lg text-center mt-4 text-gray-600 font-semibold">Payment amount: {{$totalprice}}<b>৳</b></p>
                <!-- <div class="card">
          <table>
            <tr>
              <th>From</th>
              <th>To</th>
              <th>Seats</th>
              <th>From</th>
            </tr>
            <tr>
              <td>{{$from}}</td>
              <td>{{$to}}</td>
              <td>{{$Busseat}}</td>
              <td>{{$date}}</td>
            </tr>
          </div> -->
  </div>
  
  <script src='https://cdn.tailwindcss.com'></script>
 
</body>

</html>