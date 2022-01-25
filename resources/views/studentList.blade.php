/*student*/

<div class="card mb-3">
    <img src="https://wwww.sciencenewsforstudents.org/wp-content/uploads/2019/11/860_main_library_bacteria.png" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">Student List</h5>

    <table class="table">
    <thead>
        <tr>
            <th scope="col">Matric Number</th>
            <th scope="col">Name</th>
            <th scope="col">E-mail</th>
            <th scope="col">Kulliyah</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($students as $student)
        <tr>
            <td>{{ $student->matric }}</td>
            <td>{{ $student->name }}</td>
            <td>{{ $student->email }}</td>
            <td>{{ $student->kulliyah }}</td>
            <td>
                <a href=""></a>
            </td>
        </tr>
        @endforeach

    </tbody>
    </table>
    </div>
</div>
