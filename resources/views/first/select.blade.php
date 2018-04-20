<!DOCTYPE html>
<html>
<head>
	<title>Select</title>
</head>
<body>
<!-- code for select -->
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="col-md-4">
                        <select name="name" id="query" class="trial form-control">
                            <option value=""></option>
                            @foreach($shops as $shop )

                                <option value="{{ $shop->name }}">{{ $shop->name }}</option>
                            @endforeach
                        </select>
                    </div>

	<select class="selectpicker">
	  <option>Mustard</option>
	  <option>Ketchup</option>
	  <option>Relish</option>
	</select>

    <div class="form-group">
                        <div class="col-md-4">
                        <label class="control-label" for="id_starting_time">Start Date</label>
                        <div id="bootstrap-datepicker-wrapper" class="input-group date" data-provide="datepicker">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
                            <input value="" class="form-control" id="date_from" name="date_from" title="" type="text" />
                            <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                        </div>
                        </div>
                        <div class="form-group">
                        <div class="col-md-4">
                        <label class="control-label" for="id_starting_time">End Date</label>
                        <div id="bootstrap-datepicker-wrapper" class="input-group date" data-provide="datepicker">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
                            <input value="" class="form-control" id="date_to" name="date_to" title="" type="text" />
                            <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                        </div>
                        </div>
                    </div>
	
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>
<script type="text/javascript">
	$('.selectpicker').selectpicker({
  style: 'btn-info',
  size: 4
</script>
</body>
</html>
