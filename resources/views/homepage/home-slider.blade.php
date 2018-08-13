<div class="home-v1-slider" >

    <div id="owl-main" class="owl-carousel owl-inner-nav owl-ui-sm">
        <div class="item slider-1" style="background-image: url(assets/images/slider/001.jpg);background-size: contain;background-repeat: no-repeat;">
           {{-- <button data-toggle="modal" data-target="#exampleModalCenter"  class="button-red">ORDER NOW</button>--}}
        </div>

        <div class="item slider-1" style="background-image: url(assets/images/slider/002.jpg);background-size: contain;background-repeat: no-repeat;">
      {{--      <button data-toggle="modal" data-target="#exampleModalCenter"  class="button-red">ORDER NOW</button>--}}
        </div>

        <div class="item slider-1" style="background-image: url(assets/images/slider/003.jpg);background-size: contain;background-repeat: no-repeat;">
           {{-- <button data-toggle="modal" data-target="#exampleModalCenter"  class="button-red">ORDER NOW</button>--}}
        </div>



    </div><!-- /.owl-carousel -->
</div>


<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                            <select class="col-sm-5 form-control">
                                <option>City</option>

                            </select>
                        </div>
                        <div class="form-group col-sm-6">
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Area">
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

