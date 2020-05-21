<x-admin-master>
    @section('content')

    <h1>Create</h1>
    <div class="container">
        <div class="row">
            
        
            
        
    </div>
        <div class="row">
        
            
        </div>
      
    </div>

    <div class="container">
  <div class="row">
    
    <div class="col-6">
      <form   method="post" action="{{ route('adminPost.store') }}" 
            enctype="multipart/form-data">
              @csrf
           <div class="form-group">
                 Title:
                 <input type="text" name="title" class='form-control'>
           </div>

            <div class="form-group">
                Category:
                <select name="category" class='form-control'>
                    <option>Choose Category</option>
                     <option value="1">PHP</option>
                </select>
            </div>


            <div class="form-group">
                Photo:
                <input class='form-control' type="file" name="photo_id">
             </div>


            <div class="form-group">
               Body:
                <textarea class='form-control primary' name="body"></textarea>
            </div>




             <div class="form-group">
               <input class='form-control btn-primary'  type="submit" value="submit">
             </div>

          
             </form>
    </div>
    <div class="col-6">
      {!! Form::open(['url' => 'foo/bar']) !!}
    form two
{!! Form::close() !!}
    </div>
  </div>
  
</div>


        @include('includes.form_error')

    @endsection
</x-admin-master>
