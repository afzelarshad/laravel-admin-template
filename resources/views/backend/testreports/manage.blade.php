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
                    <label for="patient_name">Patient Name</label>
                    <input
                      type="text"
                      name="patient_name"
                      class="form-control k-input"
                      @if($edit)
                        value="{{$data->patient_name}}"
                      @else
                        value="{{old('patient_name')}}"
                      @endif
                      id="patient_name"
                      aria-describedby="patient_nameHelp">
                    <small id="patient_nameHelp" class="form-text text-muted"></small>
                  </div>
                </div>
							<div class="col-md-6">
                  <div class="mb-3">
                    <label for="lab_test">Lab Test</label>
                      <select
                          type="text"
                          multiple="multiple"
                          name="lab_test[]"
                          class="form-control k-input"
                          @if(!$edit)
                              value="{{old('lab_test')}}"
                          @endif
                          id="lab_test"
                          aria-describedby="lab_testHelp">
                          @foreach($labtests as  $labtest)
                              @if($edit)
                                  <option value="{{$labtest->id }}" {{is_array($data->lab_test) && in_array($labtest->id, $data->lab_test) ? 'selected' : '' }}> {{$labtest->test_name}}  - {{$labtest->price}}</option>
                              @else
                              <option value="{{$labtest->id}}">{{$labtest->test_name}} - {{$labtest->price}}</option>
                              @endif
                          @endforeach
                      </select>
                    <small id="lab_testHelp" class="form-text text-muted"></small>
                  </div>
                </div>
							<div class="col-md-6">
                  <div class="mb-3">
                    <label for="referral">Referral</label>
                      <select
                          type="text"
                          name="referral"
                          class="form-control k-input"
                          @if(!$edit)
                              value="{{old('referral')}}"
                          @endif
                          id="referral"
                          aria-describedby="referralHelp">
                          <option value="">-- Select Referral --</option>
                          @foreach($doctors as  $doctor)
                              @if($edit)
                                  <option value="{{$doctor->id}}" {{$data->referral == $doctor->id?'selected':''}}>{{ $doctor->doctor_name}}</option>
                              @else
                                  <option value="{{$doctor->id}}">{{$doctor->doctor_name}}</option>
                              @endif
                          @endforeach
                      </select>
                    <small id="referralHelp" class="form-text text-muted"></small>
                  </div>
                </div>
							<div class="col-md-6">
                  <div class="mb-3">
                    <label for="telephone">Telephone</label>
                    <input
                      type="text"
                      name="telephone"
                      class="form-control k-input"
                      @if($edit)
                        value="{{$data->telephone}}"
                      @else
                        value="{{old('telephone')}}"
                      @endif
                      id="telephone"
                      aria-describedby="telephoneHelp">
                    <small id="telephoneHelp" class="form-text text-muted"></small>
                  </div>
                </div>
							<div class="col-md-6">
                  <div class="mb-3"
                  @if(!$edit)
                      style="display: none"
                  @endif >
                    <label for="total_price">Total Price</label>
                    <input
                      type="text"
                      name="total_price"
                      class="form-control k-input"
                      @if($edit)
                        value="{{$data->total_price}}"
                      @else
                          style="visibility: hidden"
                        value="0"
                      @endif
                      id="total_price"
                      aria-describedby="total_priceHelp">
                    <small id="total_priceHelp" class="form-text text-muted"></small>
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
