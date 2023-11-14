@include('layout.main')

@section('content')

<table class="table">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">Game</th>
        <th scope="col">Genre</th>
        <th scope="col">Rating</th>
        <th scope="col">action</th>
      </tr>
    </thead>

    <?php
      $id =1;
    ?>

    <tbody>
      @foreach ($game as $data)
          <tr>
            <th scope="row"><?= $id++?></th>
            <td>{{ $data['game'] }}</td>
            <td>{{ $data['genre'] }}</td>
            <td>{{ $data['rating'] }}</td>
            <td>
              <a type="button" class="btn btn-primary" href="/Game/game/{{ $data->id }}">Detail</a>
              <button type="button" class="btn btn-secondary">Edit</button>
              <button type="button" class="btn btn-danger">Delete</button>
            </td>
          </tr>
      @endforeach
    </tbody>
  </table>   
  @endsection