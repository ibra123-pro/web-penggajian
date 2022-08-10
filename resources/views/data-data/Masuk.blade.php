@extends('layouts.layout')
@section('content') 
@include('sweetalert::alert')
<form action="{{ action('App\Http\Controllers\JamMasukController@store') }}" method="post" enctype="multipart/form-data">
{{ csrf_field() }}
<fieldset>
    <legend>Input Presensi Masuk</legend>
    <div class="form-group row" >
        <div class="col-md-5">
            <label>Jam Masuk</label>
            <label id="clock" class="form-control" readonly></label>
        </div>
            <script type="text/javascript">
            <!--
                function showTime() {
		            var today = new Date();
		            var curr_hour = today.getHours();
		            var curr_minute = today.getMinutes();
		            var curr_second = today.getSeconds();
		            curr_hour = checkTime(curr_hour);
		            curr_minute = checkTime(curr_minute);                    
		            curr_second = checkTime(curr_second);
                    document.getElementById('clock').innerHTML=curr_hour + ":" + curr_minute + ":" + curr_second;
		        } 
		        function checkTime(i) {
		            if (i < 10) {
		                i = "0" + i;
		            }
		        return i;
		        }
		        setInterval(showTime, 500);
		    //-->
		    </script>
        <div class="form-group">
			<label>File Gambar</label>
			<input type="file" name="file" class="form-control" required>
		</div>
    </div>
    <div class="col-md-10">
            <input type="submit" class="btn btn-success btn-send" value="Hadir" >
            <input type="Button" class="btn btn-primary btn-send" value="Kembali" onclick="history.go(-1)">
        </div><hr>
    </fieldset>
</form>
@endsection
