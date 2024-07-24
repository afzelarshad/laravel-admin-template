@extends($app_layout)
@section('content')
<div class="container page-container">
  <div class="row justify-content-center">
    <div class="col-md-12">
      @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
      @endif
      @if(session('success'))
      <div class="alert alert-success">
        {{session('success')}}
      </div>
      @endif
      @if(session('error'))
      <div class="alert alert-danger">
        {{session('error')}}
      </div>
      @endif
    </div>
    @include($theme_name.'.layouts.partial.breadcrumb')

    <div class="col-md-12 form_page">
      <div class="card">
        <div class="card-body">
          <form action="{{ $form_action }}" class="" method="post">
            @csrf
            @if($edit)
            <input type="hidden" value="{{$data->id}}" name="id">
            @endif

            <div class="row form_sec">
              <div class="col-12">
                <h5>Basic Details</h5>
              </div>
              <div class="col text-end">
                <a href="{{ $index_route }}" class="btn k-btn k-btn-primary text-right">View All</a>
                @if($edit)
                <a href="{{ $data->edit_route }}" class="btn k-btn k-btn-primary text-right add_site">Edit</a>
                @endif
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                  <div class="mb-3">
                    <label for="doctor_name">Doctor Name</label>
                    <input 
                      type="text"
                      name="doctor_name" 
                      class="form-control k-input" 
                      @if($edit) 
                        value="{{$data->doctor_name}}"
                      @else 
                        value="{{old('doctor_name')}}" 
                      @endif 
                      id="doctor_name" 
                      aria-describedby="doctor_nameHelp">
                    <small id="doctor_nameHelp" class="form-text text-muted"></small>
                  </div>
                </div>
							<div class="col-md-6">
                  <div class="mb-3">
                    <label for="id_card">Id Card</label>
                    <input 
                      type="text"
                      name="id_card" 
                      class="form-control k-input" 
                      @if($edit) 
                        value="{{$data->id_card}}"
                      @else 
                        value="{{old('id_card')}}" 
                      @endif 
                      id="id_card" 
                      aria-describedby="id_cardHelp">
                    <small id="id_cardHelp" class="form-text text-muted"></small>
                  </div>
                </div>
							<div class="col-md-6">
                  <div class="mb-3">
                    <label for="experience">Experience</label>
                    <input 
                      type="text"
                      name="experience" 
                      class="form-control k-input" 
                      @if($edit) 
                        value="{{$data->experience}}"
                      @else 
                        value="{{old('experience')}}" 
                      @endif 
                      id="experience" 
                      aria-describedby="experienceHelp">
                    <small id="experienceHelp" class="form-text text-muted"></small>
                  </div>
                </div>
							<div class="col-md-6">
                  <div class="mb-3">
                    <label for="commission_percentage">Commission Percentage</label>
                    <input 
                      type="text"
                      name="commission_percentage" 
                      class="form-control k-input" 
                      @if($edit) 
                        value="{{$data->commission_percentage}}"
                      @else 
                        value="{{old('commission_percentage')}}" 
                      @endif 
                      id="commission_percentage" 
                      aria-describedby="commission_percentageHelp">
                    <small id="commission_percentageHelp" class="form-text text-muted"></small>
                  </div>
                </div>
							<div class="col-md-6">
                  <div class="mb-3">
                    <label for="total_commission">Total Commission</label>
                    <input 
                      type="text"
                      name="total_commission" 
                      class="form-control k-input" 
                      @if($edit) 
                        value="{{$data->total_commission}}"
                      @else 
                        value="{{old('total_commission')}}" 
                      @endif 
                      id="total_commission" 
                      aria-describedby="total_commissionHelp">
                    <small id="total_commissionHelp" class="form-text text-muted"></small>
                  </div>
                </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="mb-3">
                  <button type="submit" class="btn k-btn k-btn-primary add_site">
                    @if($edit)
                    Update
                    @else
                    Add
                    @endif
                  </button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection