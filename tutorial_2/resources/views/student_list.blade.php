<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2><center>Student List</center></h2>

<table>
  <tr>
    <th>Email</th>
    <th>Name</th>
    <th>phone</th>
    <th colspan"2">Action</th>
  </tr>
  @foreach($students as $student)
  <tr>
    <td>{{$student->email}}</td>
    <td>{{$student->name}}</td>
    <td>{{$student->phone}}</td>
    <td colspan="2">
    <form action="{{ route('student.destroy',$student->id) }}" method="POST">
     
     

     <a class="btn btn-primary" href="{{ route('student.edit',$student->id) }}">Edit</a>

     @csrf
     @method('DELETE')

     <button type="submit" class="btn btn-danger">Delete</button>
 </form>









    </td>
  </tr>
  @endforeach
</table>

</body>
</html>

