<x-admin-master>
    @section('content')

    <h1>All Posts here</h1>
        <div class="row">
        
                 @if(session()->get('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}  
            </div>
                @endif
            
     
                  <table class="table table-striped">
                    <thead>
                        <tr>
                          <td>ID</td>
                          <td>Title</td>
                          <td>Body</td>
                          <td>User</td>
                          <td>Category</td>
                          <td>Created_at</td>
                          <td colspan = 2>Actions</td>
                        </tr>
                    </thead>
    <tbody>
        @foreach($posts as $post)
        <tr>
            <td>{{$post->id}}</td>
            <td>{{$post->title}}</td>
            <td>{{$post->body}}</td>
            <td>{{$post->user->name}}</td>
            <td>{{$post->category_id}}</td>
            <td>{{$post->created_at}}</td>
            
           
        @endforeach
    </tbody>
  </table>
  <hr />

    
        <div class="row">


        @include('includes.form_error')

    @endsection
</x-admin-master>
