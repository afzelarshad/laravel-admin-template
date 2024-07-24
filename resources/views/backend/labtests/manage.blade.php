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
                    <label for="test_name">Test Name</label>
                    <input 
                      type="text"
                      name="test_name" 
                      class="form-control k-input" 
                      @if($edit) 
                        value="{{$data->test_name}}"
                      @else 
                        value="{{old('test_name')}}" 
                      @endif 
                      id="test_name" 
                      aria-describedby="test_nameHelp">
                    <small id="test_nameHelp" class="form-text text-muted"></small>
                  </div>
                </div>
							<div class="col-md-6">
                  <div class="mb-3">
                    <label for="price">Price</label>
                    <input 
                      type="text"
                      name="price" 
                      class="form-control k-input" 
                      @if($edit) 
                        value="{{$data->price}}"
                      @else 
                        value="{{old('price')}}" 
                      @endif 
                      id="price" 
                      aria-describedby="priceHelp">
                    <small id="priceHelp" class="form-text text-muted"></small>
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