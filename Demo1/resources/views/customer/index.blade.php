<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Customer Data</h3>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">firstName</th>
      <th scope="col">lastName</th>
      <th scope="col">email</th>
      <th scope="col">contactNumber</th>
      <th scope="col">address</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($customers as $customer)
    <tr>
      <th scope="row">1</th>
      <td>{{$customer->firstName}}</td>
      <td>{{$customer->lastName}}</td>
      <td>{{$customer->email}}</td>
      <td>{{$customer->contactNumber}}</td>
      <td>{{$customer->address}}</td>
      <td><button type="button" class="btn btn-primary">Edit</td>
      <td><button type="button" class="btn btn-primary">Delete</td>
    </tr>
    @endforeach
  </tbody>
</table>
</body>
</html>