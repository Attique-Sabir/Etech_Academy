<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @extends('bs4CDN')
    <title>Add Expense</title>
</head>

<body>
    <h1 class="text-primary text-center">Add Your Expenses Here</h1>
  <div class="container">
             <form action="" method="post"> 
            <div class="row">
                 <div class="form-group col-md-4">
                        <label for="expense_name">Expense Name</label>
                            <input type="text" class="form-control" name="expense_name" id="expense_name">
                            @error('expense_name')
                            <p class="text-danger">{{$message}}</p>   
                            @enderror
                    </div>
                    <div class="form-group">
                        <label for="amount">Amount</label>
                        <input type="text" name="amount" id="amount" class="form-control">
                        @error('amount')
                          <p class="text-danger">{{$mesasge}}</p>  
                        @enderror

                    </div>
            </div>
            <div class="row">
                    <div class="form-group col-md-4">
                        <label for="description">Description</label>
                        <textarea name="description" class="form-control" id="description" cols="90" rows="10"></textarea>
                        @error('description')
                            <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
            </div>
            <div class="row">
                <div class="formgroup col-md-4">
                    <button class="btn btn-primary" type="submit">Add Expense</button>
                </div>
            </div>
                </form>
        
{{-- Ending Container --}}
  </div>
</body>

</html>
