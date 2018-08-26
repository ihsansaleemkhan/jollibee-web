
<header id="masthead" class="site-header header-v1"  style="background-image: none; ">
    <div class="col-full">
        <a class="skip-link screen-reader-text" href="#site-navigation">Skip to navigation</a>
        <a class="skip-link screen-reader-text" href="#content">Skip to content</a>

        <div class="header-wrap">
            @include('partials.logo')
            @include('partials.header-info')
            @include('partials.primary-menu')
        </div>
    </div>
</header>

<div class="modal fade" id="location" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="example1">SELECT LOCATION</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row" id="bd1">
                        <div class="form-group col-sm-6">
                            <label class="col-sm-7">Select Location</label>
                            <select id="city" name="city" class="col-sm-5 form-control" onChange="loadZone(this.value);">
                                <option hidden>City</option>
                                @foreach($location as $l)
                                <option value="{{$l['city_id']}}" >{{$l['city_name']}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-sm-6">
                            <select id="area" name="area" class="col-sm-10 form-control" oninput="loadStore(this.value);" style="width: 90% !important;">
                                <option hidden> Area</option>

                            </select>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <div class="row" id="btn1" style="margin-right: 2px">
                    <a href="{{route('order-online')}}" style="background-color: green;" class="btn btn-secondary">Next</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade bd-ex-modal-sm" tabindex="-1" role="dialog" aria-labelledby="SmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <img src="assets/images/jollibee.png" class="modal_img">
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Email Address" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Password" id="password" name="password" required>
                    </div>
                    <button type="submit" class="btn btn-danger btn-block">Sign In</button>
                </form>

                <br/>
                <button type="button" class="btn btn-info  btn-block">Sign in with facebook</button>
                <button type="button" class="btn btn-primary  btn-block">Sign in with google</button>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-light btn-signin" data-toggle="modal" data-target=".bd-example-modal-sm">Create Account</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <img src="assets/images/jollibee.png" class="modal_img">
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('register') }}">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Full Name" id="full_name" name="full_name" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Email Address" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Mobile Number" id="mobile" name="mobile" required>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Password" id="password" name="password" required>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Confirm Password" id="password_confirmation" name="password_confirmation" required>
                    </div>
                    <button type="submit" class="btn btn-danger btn-block">Sign Up</button>
                </form>
                <br/>
                <button type="button" class="btn btn-info  btn-block">Sign in with facebook</button>
                <button type="button" class="btn btn-primary  btn-block">Sign in with google</button>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-light btn-signin" data-toggle="modal" data-target=".bd-ex-modal-sm">Sign In</button>
            </div>
        </div>
    </div>
</div>

<script>
    function loadZone(id){
        var city_id=id;

        $.ajax({
            type: "GET",
            url: "{{ route('get-area') }}",
            cache: false,
            data: { city_id: city_id},
            success: function(val){
                try{
                    var $cityArea = $("#area");
                    $cityArea.empty();
                    $cityArea.append('<option >Area</option>');
                    $.each(val, function(index, value) {
                        $cityArea.append('<option value="' + value['zone_id'] +'">' + value['zoneDesc'] + '</option>');
                    });

                }catch(e) {
                    alert('Exception while request..');
                }

            },
            error: function(){
                alert('Error while request..');
            }
        });
    };


    function loadStore(id){
        var zone_id=id;

        $.ajax({
            type: "GET",
            url: "{{ route('get-store') }}",
            cache: false,
            data: {
                zone_id: zone_id
            },
            success: function(val){
                console.log("Data came success --- ", val);

            },
            error: function(){
                alert('Error while request..');
            }
        });
    }
</script>


