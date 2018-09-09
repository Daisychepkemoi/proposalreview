@extends('layouts.master')
@section('content')
<hr>
  <div class="contents">
    <div class="containers">
   
<div class="panel-group" id="all">
 
      <div class="panel-body">
        <div class="notify">
          <div class="panel-heading">Panel </div>
          
          
            <div class="panel-body" id="contentse">
               <hr>
                <h6><a href="/sentproposals">Sent Proposals</a></h6>
                <hr>
                
                              <h6><a href="/stageoneuser">Stage-1</a></h6>
                <hr>
                 <h6><a href="/stagetwouser">Stage-2</a></h6>
                 <hr>
                 
                <h6><a href="/rejecteduser">Rejected</a> </h6>
                <hr>
                <h6><a href="/accepteduser">Accepted</a> </h6>
                <hr>
                

                
                
          
          </div>
        </div>

    
        <div class="notifycontent">
          
           

            
            <div class="panel-body" id="contentss">


              <div class="col-sm-8">
    <h1 class="display-4">Write Proposal</h1>
    <form method="POST" action="/proposal">
    {{ csrf_field() }}
  <div class="form-group">
    <label for="title">Title : <strong>*</strong></label>
    <input type="text" class="form-control" id="title" placeholder="title"  name="title"  required="">
    
  </div>
  <div class="form-group">
    <label for="organization">Organization Name : <strong>*</strong></label>
    <input type="text" class="form-control" id="organization" placeholder="Organization Name"  name="organization"  required="">
    
  </div>

  
  <div class="form-group">
    <label for="address">Address: <strong>*</strong></label>
    <input type="text" class="form-control" id="address" placeholder="Address"  name="address"  required="">
    
  </div>
  <div class="form-group">
    <label for="phone">Phone: <strong>*</strong></label>
    <input type="number" class="form-control" placeholder="Phone" id="phone"  name="phone"  required="">
    
  </div>
   
  
  <div class="form-group">
    <label for="email">Email : <strong>*</strong></label>
    <input type="email" class="form-control" placeholder="Organization's Email" id="email"  name="email" required="">
    
  </div>
 <div class="form-group">
    <label for="Summary">Summary : <strong>*</strong></label>
    <textarea type="text" class="form-control" id="Summary" placeholder="Summary"  name="Summary" required=""></textarea> </div>
    
  
  


    <div class="form-group">
    <label for="Background">Background : <strong>*</strong></label>
    <textarea type="text" class="form-control" id="Background" placeholder="Background"  name="Background" required=""></textarea>
     </div>
    <div class="form-group">
    <label for="activities">Activities: <strong>*</strong></label>
    <TEXTAREA type="activities" class="form-control" id="activities" placeholder="Activities"  name="activities" required=""></TEXTAREA>
    
  </div>
  <div class="form-group">
    <label form="budget">Budget : <strong>*</strong></label>
    <input type="number" class="form-control" id="budget"  placeholder="budget" name="budget"  required="">
    </div>
  
 
  
  <div class="form-group">
  
    <input type="hidden" class="form-control" id="Submitted_by" placeholder="" value="{{$users->email}}" name="Submitted_by" readonly>
    </div>

  
  <button type="submit" name="publish" class="btn btn-primary">Publish</button> 
  
  @include('layouts.errors')
</form>
  </div>  



            </div>
          </div>
        </div>

      </div>
    </div>

    </div>
</div>


 
</div>
</div>
</div>

@endsection
