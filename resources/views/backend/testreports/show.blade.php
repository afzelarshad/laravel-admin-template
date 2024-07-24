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
                    <label for="patient_name">Patient Name</label>
                    <input
                      type="text"
                      class="form-control k-input"
                      value="{{$data->patient_name}}"
                      disabled
                      >
                  </div>
                </div>
							<div class="col-md-6">
                  <div class="mb-3">
                    <label for="lab_test">Lab Test</label>
                    <input
                      type="text"
                      class="form-control k-input"
                      value="{{$data->lab_test}}"
                      disabled
                      >
                  </div>
                </div>
							<div class="col-md-6">
                  <div class="mb-3">
                    <label for="referral">Referral</label>
                    <input
                      type="text"
                      class="form-control k-input"
                      value="{{$data->referral}}"
                      disabled
                      >
                  </div>
                </div>
							<div class="col-md-6">
                  <div class="mb-3">
                    <label for="telephone">Telephone</label>
                    <input
                      type="text"
                      class="form-control k-input"
                      value="{{$data->telephone}}"
                      disabled
                      >
                  </div>
                </div>
							<div class="col-md-6">
                  <div class="mb-3">
                    <label for="total_price">Total Price</label>
                    <input
                      type="text"
                      class="form-control k-input"
                      value="{{$data->total_price}}"
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
