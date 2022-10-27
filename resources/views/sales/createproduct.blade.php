@extends('layouts.app')

@section('title','create product')

@section('content')

    <div class="container mt-5">
        <h1> create product</h1>
    <hr>
    <form action="{{ route('seller-createproductPost') }}" method="post">
        @csrf
        <div class="form-group">
        <div class="form-group">
        <label for="name"> Name costumer:  </label>
        <input type="text" class="form-control" name="costumer_name" placeholder="write name of costumer" required>
    </div>
    <div class="form-group">
        <label for="name"> Product name:  </label>
        <input type="text" class="form-control" name="product_name" placeholder="write name of your product" required>
    </div>
    <div class="form-group">
        <label for="name"> Price:  </label>
        <input type="number" id="price" class="form-control" name="price" placeholder="R$20" required>
    </div>
    <div class="form-group">
        <label for="name"> Form of payment:  </label>
        <input type="text"  class="form-control" name="form_payment" placeholder="write your form payment" required>
    </div>
    <div class="form-group">
        <div class="form-group">
        <label for="name"> Select your amount installment  </label>
        <select name="installments" class="form-select" aria-label="Default select example" required>
        <option value="" selected>Please Select installment</option>
         <option value="1">1x</option>
         <option value="2">2x</option>
         <option value="3">3x</option>
         <option value="4">4x</option>
         <option value="5">5x</option>
         <option value="6">6x</option>
         <option value="7">7x</option>
         <option value="8">8x</option>
         <option value="9">9x</option>
         <option value="10">10x</option>
         <option value="11">11x</option>
         <option value="12">12x</option>
        </select>
        <p> </p>
    </div>

    </div>

    <br>
    <div class="form-group">
        <button class="btn btn-primary"> Register Product </button>
    </div>
    </div>
</form>
</div>

<script>

    $('select').change(() =>{
   let price = $('#price').val();
   let installments = $('select option:selected');
   let calcPrice = price/installments.val();
   const format = { minimumFractionDigits: 2 , style: 'currency', currency: 'BRL' };
   let due_date = new Date();
   due_date.setTime(due_date);

   $('p').empty();
 
   for (i = 1; i <= installments.val(); i++) {
        let data = due_date;
       
      $('p').append('<b>'+calcPrice.toLocaleString('pt-br' ,format)+' due date: '+data.toLocaleDateString('pt-BR')+'</b><br>');   
      due_date.setDate( data.getDate() + 30 );  
    }

});


</script>

@endsection
