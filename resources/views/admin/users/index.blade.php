<x-admin-master>
    @section('content')

    <h1>Users</h1>
    @if(Session::has('deleted_user'))


        <p class="bg-danger">{{session('deleted_user')}}</p>


        @endif


    


    <table class="table">
       <thead>
         <tr>
             <th>Id</th>
             <th>Photo</th>
             <th>Name</th>
             <th>Email</th>
             <th>Role</th>
             <th>Status</th>
             <th>Created</th>
             <th>Updated</th>
          </tr>
        </thead>
        <tbody>

        @if($users)


            @foreach($users as $user)


           <tr>
              <td>{{$user->id}}</td>
               <td> image here</td>
              <td><a href="admin/users/{{$user->id}}/edit"">{{$user->name}}</a></td>
              <td>{{$user->email}}</td>
              <td>{{$user->role ? $user->role->name : 'User has no role'}}</td>
               <td>{{$user->is_active == 1 ? 'Active' : 'Not Active' }}</td>
              <td>{{$user->created_at->diffForHumans()}}</td>
              <td>{{$user->updated_at->diffForHumans()}}</td>
           </tr>

            @endforeach


          @endif


       </tbody>
     </table>


    @endsection
</x-admin-master>
