{{ csrf_field() }}
<div class="row">
   <div class="col-md-6">
      <div class="form-group">
         <label>Seller Name</label>
         <input type="text" name="name" value="{{old('name', $seller->name)}}" class="form-control">
      </div>
      <div class="form-group">
         <label>Seller Url</label>
         <input type="text" value="{{old('url', $seller->url)}}" name="url" class="form-control">
      </div>
      <div class="form-group">
         <label>Seller Address</label>
         <input type="text" value="{{old('address', $seller->address)}}" name="address" class="form-control">
      </div>
      <div class="form-group">
         <label>Seller Affiliated Link</label>
         <input type="text" value="{{old('affiliated_link', $seller->affiliated_link)}}" name="affiliated_link" class="form-control">
      </div>
   </div>
   <div class="col-md-6">
      <div class="form-group">
         <label>Seller Remarks</label>
         <input type="text" value="{{old('remarks', $seller->remarks)}}" name="remarks" class="form-control">
      </div>
      <div class="form-group">
         <label>Seller Status</label>
         <input type="text" name="status" value="{{old('status', $seller->status)}}" class="form-control">
      </div>
      <div class="form-group">
         <label>Seller Logo Image</label>
         <input type="file" value="{{old('logo_image', $seller->logo_image)}}" name="logo_image" class="form-control">
      </div>
   </div>
</div>
<div class="form-group">
   <input type="submit" value="Submit" class="btn btn-primary"/>
</div>