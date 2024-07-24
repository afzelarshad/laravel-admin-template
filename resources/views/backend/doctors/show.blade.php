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
          <div class="row form_sec">
            <div class="col text-end">
              <a href="{{ $data->index_route }}" class="btn k-btn k-btn-primary text-right">View All</a>
              <a href="{{ $data->edit_route }}" class="btn k-btn k-btn-primary text-right add_site">Edit</a>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
                  <div class="mb-3">
                    <label for="doctor_name">Doctor Name</label>
                    <input 
                      type="text"
                      class="form-control k-input" 
                      value="{{$data->doctor_name}}"
                      disabled
                      >
                  </div>
                </div>
							<div class="col-md-6">
                  <div class="mb-3">
                    <label for="id_card">Id Card</label>
                    <input 
                      type="text"
                      class="form-control k-input" 
                      value="{{$data->id_card}}"
                      disabled
                      >
                  </div>
                </div>
							<div class="col-md-6">
                  <div class="mb-3">
                    <label for="experience">Experience</label>
                    <input 
                      type="text"
                      class="form-control k-input" 
                      value="{{$data->experience}}"
                      disabled
                      >
                  </div>
                </div>
							<div class="col-md-6">
                  <div class="mb-3">
                    <label for="commission_percentage">Commission Percentage</label>
                    <input 
                      type="text"
                      class="form-control k-input" 
                      value="{{$data->commission_percentage}}"
                      disabled
                      >
                  </div>
                </div>
							<div class="col-md-6">
                  <div class="mb-3">
                    <label for="total_commission">Total Commission</label>
                    <input 
                      type="text"
                      class="form-control k-input" 
                      value="{{$data->total_commission}}"
                      disabled
                      >
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