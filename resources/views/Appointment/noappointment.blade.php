@extends('frontendTemplate')
@section('style')
<style>
  /*.select2-dropdown {
   top: 22px !important;
   left: 8px !important;
  }*/
  .select2-container .select2-selection--single {
    
    height: 45px!important;
    
}

.select2-container--default .select2-selection--single .select2-selection__arrow {
    height: 37px!important;
    /* position: absolute; */
    /* top: 1px; */
    /* right: 1px; */
    /* width: 20px; */
}

.select2-container--default .select2-selection--single .select2-selection__rendered {
    color: #8898aa !important;
    line-height: 42px !important;
}

.select2-container--default .select2-selection--single {
    background-color: #fff!important;
    border: 1px solid #8898aa!important;
    border-radius: 4px!important;
}
</style>
@endsection
@section('content')

<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h3>Create A New Patient <a href="{{route('patient.index')}}"  style="padding-left:800px"><i class="fas fa-"></i> Token: <span class="token"></span></a></h3>
      </div>

      <div class="card-body">
        <form method="post" action="{{route('noappointmentStore')}}" enctype="multipart/form-data">
          @csrf
          <div class="row">
            <div class="col-6 my-2">
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" autofocus>
                <input type="hidden" name="A_Date" value="<?= date('Y-m-d')?>">
                <input type="hidden" name="token">
                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
                                    
              <div class="form-group">
                <label for="fathername">FatherName</label>
                <input type="text" class="form-control @error('fathername') is-invalid @enderror" id="fathername" name="fathername" autofocus>
                @error('fathername')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
                  
              <div class="form-group">
                <div class="row">
                  <div class="col-6">
                    <label for="age">Age</label>
                    <input type="text" class="form-control @error('age') is-invalid @enderror" id="age" name="age" autofocus>
                     @error('age')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                  </div>

                  <div class="col-6 my-4" >
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="child" value="0" id="year" checked>
                      <label class="form-check-label" for="year">
                        Years
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="child" id="month" value="1">
                      <label class="form-check-label" for="month">
                        months
                      </label>
                    </div>
                  </div> 
    
                </div>
                       
              </div>

              <div class="form-group">
                <label>Gender</label></br>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" id="male" value="male" name="gender" checked>
                  <label class="form-check-label" for="male">Male</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" id="female" value="female" name="gender">
                  <label class="form-check-label" for="female">Female</label>
                </div>
                @error('gender')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>

              <div class="form-group">
                <label for="phoneno">Phoneno</label>
                <input type="text" class="form-control @error('phoneno') is-invalid @enderror" id="phoneno" name="phoneno" autofocus>
                @error('phoneno')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>

              <div class="form-group">
                <label for="address">Address</label>
                <textarea class="form-control form-control-sm @error('address') is-invalid @enderror" id="address" rows="3" name="address"  autofocus></textarea>
                @error('address')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>

            <div class="col-6 my-2">
              <div class="form-group my-3">
                <label>married_status</label></br>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" id="yes" value="1" name="married">
                  <label class="form-check-label" for="yes">Yes</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" id="no" value="0" name="married" checked>
                  <label class="form-check-label" for="mo" >No</label>
                </div>
              </div>

              <div class="form-group my-3">
                <label>pregnant</label></br>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" id="yes" value="1" name="pregnant">
                  <label class="form-check-label" for="yes">Yes</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" id="no" value="0" name="pregnant" checked>
                  <label class="form-check-label" for="mo">No</label>
                </div>
              </div>

              <div class="form-group my-3">
                <label for="weight">body weight</label>
                <input type="text" class="form-control @error('weight') is-invalid @enderror" id="weight" name="weight" autofocus="">
                @error('weight')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>

              <div class="form-group my-3">
                <label for="allergy">allergy</label>
                <input type="text" class="form-control @error('allergy') is-invalid @enderror" id="allergy" name="allergy" autofocus="">
                @error('allergy')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>

              <div class="form-group my-3">
                <label for="job">Job</label>
                <input type="text" class="form-control @error('job') is-invalid @enderror" id="job" name="job" autofocus>
                @error('job')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>

              <div class="form-group my-3">
                <label for="file">File</label>
                <input type="file" class="form-control-file @error('file') is-invalid @enderror" id="file" name="file[]" multiple="multiple">
                @error('file')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              
                <div class="form-group">
                   <label class="form-control-label" for="input-first-name">Choose Doctor</label>
                   <select class="form-control p-3" name="doctor_id"  id="doctorchoice" >
                      <option value="0"></option>
                      @foreach($doctors as $doctor)
                      <option value="{{$doctor->id}}" class="p-2">{{$doctor->user->name}}</option>
                      @endforeach
                   </select>
                </div>
            
            </div>
          </div>
          <input type="submit" class="btn btn-primary" value="submit">
        </form>
      </div>
    </div>
  </div>
</div>
                    
@endsection
@section('script')
<script>
  $(document).ready(function(){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $("#doctorchoice").select2();

      $('#doctorchoice').change(function(){
        var value = $(this).val();
        var date=$('input[name="A_Date"]').val();
       // console.log(value);

          $.ajax({
            url:"/getToken",
            data:{date:date,id:value},
            type:"POST",
            success:function(res){
              if(res){
                  $('.token').html(res);
                  $('input[name="token"]').val(res);
                  
                }
            },
            error:function(error){
              console.log(error);
            }
          })

            // $.post('/getToken/',{date:date,id:value},function(res){
            //   console.log(res);
            //     if(res){
            //       $('.token').html(res);
            //       $('input[name="token"]').val(res);
                  
            //     }
            // })
           
      });
  })

</script>
@endsection