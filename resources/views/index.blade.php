@extends('layouts.template')
@section('title', 'Inicio')

@section('content')
  <br>
  <h2>Contenido</h2>  
  <div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-secondary">Go somewhere</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-success">Go somewhere</a>
      </div>
    </div>
  </div>
</div>
  <br>
  <Strong>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius numquam, dignissimos 
        fugiat placeat inventore tenetur quis autem. Amet exercitationem perferendis tenetur 
        illo nam consectetur, magni eum id obcaecati hic! Accusantium!</strong>
   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum quisquam pariatur voluptatem sed rem, 
      quos praesentium fuga quia repellat distinctio quaerat, optio laboriosam amet tempore numquam aliquam ut ipsa ab? 
      Saepe corrupti corporis error aliquam aperiam, beatae enim ipsam hic repellat illum sequi dolores repellendus eaque 
      distinctio consequatur cupiditate dicta autem harum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus perferendis.</p>
      
    <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
          </tr>
        </thead>
    <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td colspan="2">Larry the Bird</td>
            <td>@twitter</td>
          </tr>
    </tbody>
</table>
@endsection