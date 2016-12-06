<style type="text/css">
	.required{
		color:red;
	}


</style>


@extends('main')

@section('container')
	<div class="col-md-12 col-sm-12 col-xs-12 ">
		<div class="col-md-9 col-sm-9 col-xs-9">
			<div id="search-box">
				<div class="form-group">
	              <label class="control-label col-md-3 col-sm-3 col-xs-12"  for="start-date">Start Date <span class="required">*</span></label>
	              <div class="col-md-6 col-sm-6 col-xs-12">
	                <input type="text" id="start-date" name="start-date" required="required" class="date-picker form-control col-md-7 col-xs-12">
	              </div>
	            </div>
			</div>

		</div>	
	</div>
	



@endsection