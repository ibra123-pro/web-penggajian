@extends('layouts.layout')
@section('content') 
@include('sweetalert::alert')
<form action="{{ action('App\Http\Controllers\KasbonController@store') }}" method="POST">
{{ csrf_field() }}
    <fieldset>
        <legend>Pengajuan Kasbon</legend>
        <div class="form-group row">
            <div class="col-md-5">
                <label>Jam Pengajuan Kasbon</label>
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
            <div class="col-md-5">
                <label>File Pengajuan</label>
			    <textarea name="file" class="form-control" required></textarea>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-5">
                <label>Biaya Pengajuan</label>
                <input type="number" name="biaya" class="form-control" required>
            </div>
        </div>
        <div class="col-md-10">
            <input type="submit" class="btn btn-success btn-send" value="Ajukan" >
            <input type="Button" class="btn btn-primary btn-send" value="Kembali" onclick="history.go(-1)">
        </div><hr>
    </fieldset>
</form>
@endsection
