
@extends('pages.base')

@section('content')
    <h1>Add Venue</h1>
    <div class="row">
        <div class="col-md-5">
            <form action="{{url('venues/create')}}" method="POST">
                @csrf
                <div class="form-group">
                  <label for="booking_id">Select Date</label>
                  <select class="form-select" name="booking_id" id="booking_id">
                     <option hidden="true">Select Date</option>
                     <option selected disabled>Select Date</option>
                     @foreach ($bookings as $bookingId => $booking)
                         <option value="{{$bookingId}}">{{$booking}}</option>
                     @endforeach
                  </select>
                  @error('booking_id')
                      <p class="text-danger">{{$message}}</p>
                  @enderror
                </div>

                {{-- <div class="form-group">
                    <label for="user_id">Select Client</label>
                    <select class="form-select" name="user_id" id="user_id">
                       <option hidden="true">Select CLient</option>
                       <option selected disabled>Select Client</option>
                       @foreach ($users as $userId => $user)
                           <option value="{{$userId}}">{{$user}}</option>
                       @endforeach
                    </select>
                    @error('user_id')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                  </div> --}}

                <div class="form-group mt-2">
                    <label for="place">place</label>
                    <input class="form-control" type="text" name="place">
                    @error('place')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                  <div class="form-group my-3 d-grid d-md-flex justify-content-end">
                    <button class="btn btn-primary me-md-2 mt-2" type="submit">
                        Add venue
                    </button>
                </div>

            </form>
        </div>
    </div>




@endsection
