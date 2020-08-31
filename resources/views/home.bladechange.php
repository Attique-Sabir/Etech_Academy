<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Etech</title>

    <style>
        .menu {
            background-color: red;
            width="20%";
        }

        .card_body {
            border-radius: 50px;
        }
        .table_width
        {
            width: 100%;
        }

    </style>

<body class="bg-light">

    @extends('layouts.app')

    @section('content')
    <div class="container-fluid d-flex  ">
            
      </div>
    <div class="container-fluid">
        <div class="row ">
        <div class="container col-md-1  ">
                <a href=""> <h5 class="fas fa-home">DashBoard</h5></a><br>
                <a href="{{route('add_course')}}" class="btn btn-primary my-1" type="submit"><i class="fas fa-award"></i> Add Courses</a>
                <a href="{{route('add_course')}}" class="btn btn-success my-1" type="submit"><i class="fas fa-user-graduate"></i> Add Student</a>
                <a href="{{route('add_course')}}" class="btn btn-danger my-1" type="submit"><i class="fas fa-funnel-dollar"></i> Add Expenses</a>
                <a href="{{route('add_course')}}" class="btn btn-info my-1" type="submit"><i class="fas fa-hand-holding-usd"></i>  Add Earning</a>
                <a href="{{route('add_course')}}" class="btn btn-info my-1" type="submit"><i class="fas fa-hand-holding-usd"></i>  Add Earning</a>

            </div>
            <div class="col-md-2 ">
                <div class="card bg-primary shadow">
                    <div class="card-body">
                        <h4 class="card-title text-white">Total Courses
                        <i class="fas fa-award"></i>

                        </h4>
                        <div class="d-flex justify-content-btween">
                            <p class="card-text display-4 text-white text-center">15</p>
                        </div>
                        <div class="col d-flex justify-content-between">

                            <div ><a href=""class="btn btn-primary text-white">Click here For More Info <i class="fas fa-info-circle"></i></a></div>
                        </div>

                    </div>
                </div>


        </div>

            <div class="col-md-2">
                <div class="card bg-success shadow">
                    <div class="card-body">
                        <h4 class="card-title text-white">Total Students
                            <i class="fas fa-user-graduate text-white"></i>

                        </h4>
                        <div class="d-flex justify-content-btween">
                            <p class="card-text display-4 text-white text-center">15</p>
                        </div>
                        <div class="col d-flex justify-content-between">

                        <div ><a href=""class="btn btn-success text-white">Click here For More Info <i class="fas fa-info-circle"></i></a></div>
                        </div>

                    </div>
                </div>
            </div>



            <div class="col-md-2">
                <div class="card bg-warning shadow">
                    <div class="card-body">
                        <h4 class="card-title text-white">Total Expenses
                        <i class="fas fa-funnel-dollar"></i>

                        </h4>
                        <div class="d-flex justify-content-btween">
                            <p class="card-text display-4 text-white text-center">15</p>
                        </div>
                        <div class="col d-flex justify-content-between">

                        <div ><a href=""class="btn btn-warning text-white">Click here For More Info <i class="fas fa-info-circle"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="col-md-2">
                <div class="card bg-danger shadow">
                    <div class="card-body">
                        <h4 class="card-title text-white">Total Earning
                        <i class="fas fa-hand-holding-usd"></i>

                        </h4>
                        <div class="d-flex justify-content-btween">
                            <p class="card-text display-4 text-white text-center">15</p>
                        </div>
                        <div class="col d-flex justify-content-between">

                        <div ><a href=""class="btn btn-danger text-white">Click here For More Info <i class="fas fa-info-circle"></i></a></div>
                        </div>

                    </div>
                </div>
            </div>


        </div>
      </div>
       

           
            <div class="container col-8 d-flex flex-wrap mr-3 border border-primary">
<div class="row">
  <div class="col-12">
                <table class="table table-striped table_width">
                    <h1 class="text-primary text-center">Recent Students Information</h1>
                    <div class="col-3 d-flex align-items-center ">
                        <input class="form-control " id="myInput" type="text"
                            placeholder="Search Student Information..">
                    </div>
                    <thead>
                        <tr>
                            <th scope="col">Sr.No</th>
                            <th scope="col">Student Name</th>
                            <th scope="col">Father Name</th>
                            <th scope="col">Joining Date</th>
                            <th scope="col">Fee Status</th>
                            <th scope="col">Remaining</th>

                        </tr>
                    </thead>
                    <tbody id="myTable">
                        <tr>
                            <th scope="row">1</th>
                            <td>Hamza</td>
                            <td>Asad</td>
                            <td>03-11-2020</td>
                            <td class="text-danger">paid</td>
                            <td>5000</td>

                        </tr>
                    </tbody>
                </table>
            </div>
            </div>
            </div>
            <!-- <div class="container col-4 d-flex  flex-wrap border border-success m-2">

<table class="table table-striped">
<h1 class="text-success text-center">Recent Expense Information</h1>
  <thead>
    <tr>
      <th scope="col">Sr.No</th>
      <th scope="col">Expense Type</th>
      <th scope="col">Data</th>
      <th scope="col">Amount</th>
      <th scope="col">Description</th>

    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Food</td>
      <td>23-12-2020</td>
      <td>260</td>
      <td>For Party</td>

    </tr>
  </tbody>
</table>
</div> -->
        </div>
    </div>
    </div>
    <div class="container-fluid col-12 d-flex justify-content-end">
        <div class="container col-4 d-flex border-primary">

        </div>

        <div class="container col-4 d-flex flex-wrap m-2 border border-info">

            <table class="table table-striped ">
                <h1 class="text-info text-center">Recent Income Information</h1>
                <div class="col-6 d-flex align-items-center ">
                    <input class="form-control " id="myInput" type="text" placeholder="Search Income Information..">
                </div>
                <thead>
                    <tr>
                        <th scope="col">Sr.No</th>
                        <th scope="col">Income Type</th>
                        <th scope="col">Date</th>
                        <th scope="col">Amount</th>
                        <th scope="col">Description</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Fee</td>
                        <td>03-11-2020</td>

                        <td>5000</td>
                        <td>Course Fee</td>

                    </tr>
                </tbody>
            </table>
        </div>
        <div class="container col-4 d-flex  flex-wrap border border-success m-2">

            <table class="table table-striped">
                <h1 class="text-success text-center">Recent Expense Information</h1>
                <div class="col-4 d-flex align-items-center ">
                    <input class="form-control " id="myInput" type="text" placeholder="Search Expense..">
                </div>
                <thead>
                    <tr>
                        <th scope="col">Sr.No</th>
                        <th scope="col">Expense Type</th>
                        <th scope="col">Data</th>
                        <th scope="col">Amount</th>
                        <th scope="col">Description</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Food</td>
                        <td>23-12-2020</td>
                        <td>260</td>
                        <td>For Party</td>

                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    </div>
    </div>
    <div class="card text-center mt-5">
        <div class="card-header">
            <!-- <ul class="nav nav-tabs card-header-tabs">
      <li class="nav-item">
        <a class="nav-link active" href="#">Active</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul> -->
        </div>
        <div class="card-body">
            <h5 class="card-title">E-tech Academy of Information technology</h5>
            <p class="card-text">Railway Road Near Railway station Lalamusa </p>
            <p class="card-text">0309-4760153 | 0346-6575338 </p>

            <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
        </div>
    </div>
    @endsection
    </head>
    <script>
        $(document).ready(function () {
            $("#myInput").on("keyup", function () {
                var value = $(this).val().toLowerCase();
                $("#myTable tr").filter(function () {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });

    </script>

    <body>
