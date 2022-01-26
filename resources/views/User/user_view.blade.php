<!DOCTYPE html>
<html lang="en">
<head>
    <title>View Student Records</title>
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
    @include('user.layouts.navigation')
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
        * {
          box-sizing: border-box;
        }

        /* Add padding to containers */
        .container {
          padding: 160px;
          background-color: white;
        }

		table {
		    border-collapse: collapse;
            width:100%;
		    margin-top:0%;
            margin-left:1%;
            margin-right:10%;
         }

		  th{
			text-align:center;
			padding: 18px;
			border:6px;
            margin:10px;
			/* position: relative; */
            background-color: rgb(131,214,254);
			color: black;

		  }
		  td{
              text-align: center;
			  height:70%;
              padding: 15px;
              background-color: rgb(205,236,246)
		  }

		  tr:nth-child(even)
		  {background-color: rgb(131,214,254)
		      }

		  </style>

<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('View Student Records') }}
    </h2>
</x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">

{{-- <div class="container">
  <h2 class="text-center">View Student Records</h2> --}}

  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Matric</th>
        <th>Name</th>
        <th>E-mail</th>
        <th>Kulliyah</th>
      </tr>
    </thead>
    <tbody>

       <?php $users = DB::select('select * from users'); ?>
    @foreach ($users as $user)
      <tr>
      <td>{{ $user->id }}</td>
      <td>{{ $user->matirc }}</td>
      <td>{{ $user->name }}</td>
      <td>{{ $user->email }}</td>
      <td>{{ $user->kulliyah }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
</body>
</html>
