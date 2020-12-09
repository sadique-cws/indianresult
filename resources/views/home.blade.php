@extends('base')


@section('content')
    <div class="container-fluid py-4 bg-light text-dark">
        <div class="col-4 mx-auto">
            <h2 class="h5 font-weight-bolder">Search Result Here</h2>
            <form action="" method="GET">
                <div class="mb-3">
                    <div class="input-group">
                        <input type="text" name="code" class="form-control">
                        <div class="input-group-append">
                            <input type="submit" name="find" class="btn btn-danger w-100" value="Search">
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </form>
        </div>
    </div>

    @if (isset($result))
    <div class="container mt-4">
        <div class="col-8 border border-secondary p-2 mx-auto">
           <div class="row">
                <div class="col-12 text-center">
                    <h6>Personal Details</h6>
                </div>
           </div>
            <div class="row">
                <div class="col">Name</div>
            <div class="col">{{$result->name}}</div>
            </div>
            <div class="row">
                <div class="col">School</div>
                <div class="col">{{$result->school}}</div>
            </div>
            <div class="row">
                <div class="col">Contact</div>
                <div class="col">{{$result->contact}}</div>
            </div>
            <div class="row">
                <div class="col">Address</div>
                <div class="col">{{$result->address}}</div>
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <h6>Marks Details</h6>
                </div>
           </div>
           <div class="row">
               <div class="col">Subject</div>
               <div class="col">Total Marks</div>
               <div class="col">Pass Marks</div>
               <div class="col">Obtain Marks</div>
           </div>
           <div class="row">
               <div class="col">Maths</div>
               <div class="col">100</div>
               <div class="col">30</div>
               <div class="col">{{$result->maths}}</div>
           </div>
           <div class="row">
               <div class="col">SCi</div>
               <div class="col">100</div>
               <div class="col">30</div>
               <div class="col">{{$result->sci}}</div>
           </div>
           <div class="row">
               <div class="col">SST</div>
               <div class="col">100</div>
               <div class="col">30</div>
               <div class="col">{{$result->sst}}</div>
           </div>
           <div class="row">
               <div class="col">Hindi</div>
               <div class="col">100</div>
               <div class="col">30</div>
               <div class="col">{{$result->hindi}}</div>
           </div>
           <div class="row">
               <div class="col">Eng</div>
               <div class="col">100</div>
               <div class="col">30</div>
               <div class="col">{{$result->eng}}</div>
           </div>
           <div class="row">
               <div class="col-12 text-center"><h6>Result Details</h6></div>
           </div>
           <div class="row">
               <div class="col">Total Marks</div>
               <div class="col">{{$total = $result->maths + $result->sci + $result->sst + $result->hindi + $result->eng}}</div>
           </div>
           <div class="row">
               <div class="col">Division</div>
               <div class="col">
                   @if ($total >= 300)
                       1st Division
                    @elseif($total >= 250)
                        2nd division
                    @elseif($total >= 150)
                        3rd Division
                    @else
                        Better Luck Next Time
                   @endif
               </div>
           </div>
        </div>
    </div>
    @endif
      
@endsection