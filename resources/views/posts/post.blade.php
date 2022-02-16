<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
<a href="/posts/create">Add New Post</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Post</th>
      <th scope="col">Title</th>
    </tr>
  </thead>
  <tbody>
      @foreach($posts as $post)
    <tr>
      <td>{{$post['id']}}</td>
      <td>{{$post['name']}}</td>
      <td>{{$post['discription']}}</td>
      <td>{{$post['tiltle']}}</td>
      <td><a href="/posts/{{$post['id']}}">Show</a></td>
      <td><a href="/posts/{{$post['id']}}/edit">Edit</a></td>
      <td>
      <form method="post" action="/posts/{{$post['id']}}">
        @csrf
        @method('DELETE')
      <input type="submit" name="delete" value ="delete">  
      <form>
</td>
    </tr>
    @endforeach
  </tbody>
</table>


</body>
</html>