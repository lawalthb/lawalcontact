<x-admin-master>
    @section('content')

    <h1>Create Category</h1>
        <div class="row">
        
            <form   method="post" action="{{ route('category.store') }}" 
            enctype="multipart/form-data">
              @csrf
           <div class="form-group">
                 Category Name:
                 <input type="text" name="name" class='form-control'>
           </div>

             <div class="form-group">
               <input class='form-control btn-primary' type="submit" value="submit">
             </div>

                
             </form>
        </div>

    <br /><br /><br /><br /><br /><br /><br />
    <div class="row">


        @include('includes.form_error')

    @endsection
</x-admin-master>
