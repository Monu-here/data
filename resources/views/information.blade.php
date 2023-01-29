<table border="1px">
    <tr>
        <th>Name</th>
        <th>Roll No</th>
        <th>Address</th>
    </tr>
    @foreach ($students as $student)
    <tr>
        <td>
            {{$student->name}}
        </td>

        <td>
            {{$student->rollno}}
        </td>
        <td>
            {{$student->address}}
        </td>
    </tr>
@endforeach
</table>
