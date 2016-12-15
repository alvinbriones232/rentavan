


@extends('main')


@section('container')
	<link rel="stylesheet" type="text/css" href="{{ asset('css/custom.css') }}">
	<div class="col-md-12 col-sm-12 col-xs-12 ">
		<div class="col-md-9 col-sm-12 col-xs-12">
			{{csrf_field()}}
			<div id="reportrange" class="report-range form-group">
				<label for="daterange">Date Range</label>
				<span id="daterange" class="form-control"></span>
			</div>
			<div class="form-group">
			    <label for="location">Location</label>
			    <input type="password" class="form-control" id="location" placeholder="Location">
			</div>
			<div class="form-group">
				<label for="num-passenger">Number of Passenger</label>
				<input type="number" name="num-passenger" id="num-passenger" min="1" class="form-control">
			</div>
			<div class="form-group">
				<label for="type">Type of Vehicle</label>
				<select id="type" name="type" class="form-control">
					<option value="">--SELECT TYPE OF VEHICLE</option>
					<option value="1">Sedan</option>
					<option value="2">AUV</option>
					<option value="3">SUV</option>
					<option value="4">Van</option>
					<option value="5">Motorcycle</option>
				</select>
			</div>
			<div class="form-group">
				<button class="btn btn-primary">Search</button>
			</div>
		</div>
		<div class="col-md-3 col-sm-12 col-xs-12">
			Advertisement
		</div>	
	</div>
	<!-- lists of company or individuals who are listing there vehicle available for rent-->

	<div class="row">
		<a href="#">
			<div class="col-md-5 col-sm-12 col-xs-12 lists">
				<div class="list-to-rent col-md-3 col-sm-3 col-xs-12">
					<img class="img-responsive" src="{{ asset('storage/uploads/special.png') }}">
				</div>
				<div class="col-md-9 col-sm-12 col-xs-12">
					NAME OF DEALER: adasjasdjaadhadjahdjashd <br>
					Location: cebu <i class="fa fa-chevron-circle-right fa-3 pull-right" aria-hidden="true"></i> <br>
					Contact Number: 1111111111 <br>

				</div>
			</div>
		</a>
		<a href="#">
			<div class="col-md-5 col-sm-12 col-xs-12 lists">
				<div class="list-to-rent col-md-3 col-sm-3 col-xs-12">
					<img class="img-responsive" src="{{ asset('storage/uploads/special.png') }}">
				</div>
				<div class="col-md-9 col-sm-12 col-xs-12">
					NAME OF DEALER: adasjasdjaadhadjahdjashd <br>
					Location: cebu <i class="fa fa-chevron-circle-right fa-3 pull-right" aria-hidden="true"></i> <br>
					Contact Number: 1111111111 <br>
				</div>
			</div>
		</a>
		<a href="#">
			<div class="col-md-5 col-sm-12 col-xs-12 lists">
				<div class="list-to-rent col-md-3 col-sm-3 col-xs-12">
					<img class="img-responsive" src="{{ asset('storage/uploads/special.png') }}">
				</div>
				<div class="col-md-9 col-sm-12 col-xs-12">
					NAME OF DEALER: adasjasdjaadhadjahdjashd <br>
					Location: cebu <i class="fa fa-chevron-circle-right fa-3 pull-right" aria-hidden="true"></i> <br>
					Contact Number: 1111111111 <br>

				</div>
			</div>
		</a>
		<a href="#">
			<div class="col-md-5 col-sm-12 col-xs-12 lists">
				<div class="list-to-rent col-md-3 col-sm-3 col-xs-12">
					<img class="img-responsive" src="{{ asset('storage/uploads/special.png') }}">
				</div>
				<div class="col-md-9 col-sm-12 col-xs-12">
					NAME OF DEALER: adasjasdjaadhadjahdjashd <br>
					Location: cebu <i class="fa fa-chevron-circle-right fa-3 pull-right" aria-hidden="true"></i> <br>
					Contact Number: 1111111111 <br>
				</div>
			</div>
		</a>
		<a href="#">
			<div class="col-md-5 col-sm-12 col-xs-12 lists">
				<div class="list-to-rent col-md-3 col-sm-3 col-xs-12">
					<img class="img-responsive" src="{{ asset('storage/uploads/special.png') }}">
				</div>
				<div class="col-md-9 col-sm-12 col-xs-12">
					NAME OF DEALER: adasjasdjaadhadjahdjashd <br>
					Location: cebu <i class="fa fa-chevron-circle-right fa-3 pull-right" aria-hidden="true"></i> <br>
					Contact Number: 1111111111 <br>

				</div>
			</div>
		</a>
		<a href="#">
			<div class="col-md-5 col-sm-12 col-xs-12 lists">
				<div class="list-to-rent col-md-3 col-sm-3 col-xs-12">
					<img class="img-responsive" src="{{ asset('storage/uploads/special.png') }}">
				</div>
				<div class="col-md-9 col-sm-12 col-xs-12">
					NAME OF DEALER: adasjasdjaadhadjahdjashd <br>
					Location: cebu <i class="fa fa-chevron-circle-right fa-3 pull-right" aria-hidden="true"></i> <br>
					Contact Number: 1111111111 <br>
				</div>
			</div>
		</a>
	</div>

	<!-- /lists -->

	<script src="{{ asset('js/moment/moment.min.js') }}"></script>
	<script src="{{ asset('js/datepicker/daterangepicker.js') }}"></script>
	<script type="text/javascript">
		var d = jQuery.noConflict();
		d(document).ready(function(){
		  	var cb = function(start, end, label) {
		      d('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
		    };

		    var optionSet1 = {
		      minDate: '01/01/2010',
		      showDropdowns: true,
		      showWeekNumbers: true,
		      timePicker: false,
		      timePickerIncrement: 1,
		      timePicker12Hour: true,
		      opens: 'left',
		      buttonClasses: ['btn btn-default'],
		      applyClass: 'btn-small btn-primary',
		      cancelClass: 'btn-small',
		      format: 'MM/DD/YYYY',
		      separator: ' to ',
		      locale: {
		        applyLabel: 'Submit',
		        cancelLabel: 'Clear',
		        fromLabel: 'From',
		        toLabel: 'To',
		        customRangeLabel: 'Custom',
		        daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
		        monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
		        firstDay: 1
		      }
		    };
		    d('#reportrange span').html(moment().format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));
		    d('#reportrange').daterangepicker(optionSet1, cb);
		    d('#reportrange').on('apply.daterangepicker', function(ev, picker) {
		      startDate = picker.startDate.format('YYYY-MM-DD');
		      endDate = picker.endDate.format('YYYY-MM-DD');
		      var base_url = $('#base_url').val();
		      $.post(base_url+'Dashboard/get_revenue_on_range',
		        {
		          start_date:startDate,
		          end_date: endDate
		        },function(data){
		          $('#revenue-cost-graph').empty().html(data);
		        });
		    });
		    d('#destroy').click(function() {
		      d('#reportrange').data('daterangepicker').remove();
		    });
		});
	</script>
	



@endsection


