<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOul">
        <link rel="stylesheet" href=" {{asset('css/style.css')}}">


        <title>LIBRARY MANAGEMENT</title>
    </head>

    <body>

    <!-- navbar-->

    @if ($layout == 'index')
        <div class="container-fluid mt-4">
            <div class="container-fluid mt-4">
            <div class="row justify-content-center">
                <section class="col-md-8">
                    @include("studentList")
                </section>

                <section class="col"></section>
            </div>
            </div>
        </div>

    @elseif ($layout == 'create')
        <div class="container-fluid mt-4" id="create-form">
            <div class="row">
                <section class="col-md-7">
                    @include("studentList")
                </section>

                <section class="col-md-5">
                    <div class="card mb-3">
                        <img src="https://wwww.timeshighereducation.com/sites/default/files/student_in_university_library.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Enter your informations below : </h5>
                            <form action="{{ url('/store') }}" method="post">

                                @csrf
                                <div class="form-group">
                                    <label>Book Name</label>
                                    <input type="text" name="bookname" class="form-control" placeholder="Book Name:">
                                </div><br>

                                <div class="form-group">
                                    <label>Publisher Name</label><br>
                                    <input type="text" name="publisher" class="form-control" placeholder="Publisher Name:">
                                </div><br>

                                <!-- sambung di title -->
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

                                <input type="submit" class="btn btn-info" value="Save">
                                <input type="reset" class="btn btn-warning" value="Reset">

                            </form>
                        </div>
                    </div>
                </section>
            </div>
        </div>

    @elseif ($layout == 'show')
        <div class="container-fluid mt-4">
            <div class="row">
                <section class="col">
                    @include("studentList")
                </section>

                <section class="col"></section>
            </div>
        </div>

    @elseif ($layout == 'edit')
        <div class="container-fluid mt-4">
            <div class="row">
                <section class="col-md-7">
                    @include("studentList")
                </section>

                <section class="col-md-5">
                    <div class="card mb-3">
                        <img src="https://wwww.timeshighereducation.com/sites/default/files/student_in_university_library.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Enter the information below : </h5>
                            <form action="{{ url('/update/'.$student->id) }}" method="post">

                                @csrf
                                <div class="form-group">
                                    <label>Book Name</label>
                                    <input value="{{ $library->bookname }}" name="bookname" type="text" class="form-control" placeholder="Book Name">
                                </div><br>

                                <div class="form-group">
                                    <label>Publisher Name</label><br>
                                    <input value="{{ $library->publisher }}"type="text" name="publisher" class="form-control" placeholder="Publisher Name">
                                </div><br>

                                <!-- sambung di title -->
                                <div class="form-group">
                                    <label>Location</label>
                                    <input value="{{ $library->location }}" type="text" name="location" class="form-control"  placeholder="Location">
                                </div><br>

                                <div class="form-group">
                                    <label>Category</label>
                                    <input value="{{ $library->category }}" type="text" name="category" class="form-control" placeholder="Category">
                                </div><br>

                                <div class="form-group">
                                    <label>Book Quantity</label>
                                    <input value="{{ $library->quantity }}" type="number" name="quantity" class="form-control" placeholder="Book Quantity">
                                </div><br>

                                <input type="submit" class="btn btn-info" value="Update">
                                <input type="reset" class="btn btn-warning" value="Reset">

                            </form>
                        </div>
                    </div>
                </section>
            </div>
        </div>

    @endif
    <footer></footer>

    <script src="https://code.jquery.com./jquery-3.3.1.slim.min.js"> </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"> </script>
    <script src="https://stackpath.bootstapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>
