<!DOCTYPE html>
<html lang="en">
<head>
  <title>Create Student</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

  <!-- Styles -->
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>
  <body class="font-sans antialiased">
  <div class="min-h-screen bg-gray-100">
  @include('librarian.layouts.navigation')
    <!-- Page Heading -->
    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Library Management System | Student') }}
            </h2>
        </div>
    </header>

    <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
    <div class="p-6 bg-white border-b border-gray-200">

</head>
<body>

    <style>
        body {
          font-family: Arial, Helvetica, sans-serif;
          background-color: black;
        }

        * {
          box-sizing: border-box;
        }

        /* Add padding to containers */
        .container {
          padding: 160px;
          background-color: white;
        }

        /* Full-width input fields */
        input[type=text], input[type=password], input[type=number] {
          width: 100%;
          padding: 15px;
          margin: 5px 0 22px 0;
          display: inline-block;
          border: none;
          background: #f1f1f1;
        }

        input[type=text]:focus, input[type=password]:focus, input[type=number]:focus {
          background-color: #ddd;
          outline: none;
        }

        /* Set a style for the submit button */
        .submit-btn {
          background-color: #04AA6D;
          color: white;
          padding: 16px 20px;
          margin: 8px 0;
          border: none;
          cursor: pointer;
          width: 100%;
          opacity: 0.9;
        }

        .submit-btn:hover {
          opacity: 1;
        }

        /* Add a blue text color to links */
        a {
          color: dodgerblue;
        }

        </style>


<div class="container">
  <h2 class="text-center">Add new Student</h2>
  <br>
  <form action = "/store" method = "post" class="form-group" style="width:70%; margin-left:15%;" action="/action_page.php">

  <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>"><input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">

    <div class="form-group">
        <label>Book Name</label>
        <input type="text" name="bookname" class="form-control" placeholder="Book Name:">
    </div><br>

    <div class="form-group">
        <label>Publisher Name</label><br>
        <input type="text" name="publisher" class="form-control" placeholder="Publisher Name:">
    </div><br>
    
    <div class="form-group">
        <label>Location</label>
        <input type="text" name="location" class="form-control"  placeholder="Location:">
    </div><br>

    <div class="form-group">
        <label>Category</label>
        <input type="text" name="category" class="form-control" placeholder="Category:">
    </div><br>

    <div class="form-group">
        <label>Book Quantity</label>
        <input type="number" name="quantity" class="form-control" placeholder="Book Quantity:">
    </div><br>

    <button type="submit" value = "Add Student" class="submit-btn">Submit</button>
  </form>
</div>
 
 @endif
    <footer></footer>

    <script src="https://code.jquery.com./jquery-3.3.1.slim.min.js"> </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"> </script>
    <script src="https://stackpath.bootstapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>
