{{ csrf_field() }}
<div class="row">
   <div class="col-md-6">
      <div class="form-group">
         <label>User Name</label>
         <input type="text" name="name" value="{{old('name', $user->name)}}" class="form-control">
      </div>
      <div class="form-group">
         <label>User Email</label>
         <input type="text" value="{{old('email', $user->email)}}" name="email" class="form-control">
      </div>
      <div class="form-group">
         <label>Password</label>
         <input type="password"  name="password" class="form-control">
      </div>
      
   </div>
</div>
<div class="form-group">
   <input type="submit" value="Submit" class="btn btn-primary"/>
</div>