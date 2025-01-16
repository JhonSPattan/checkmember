<html>
    <head>
        <title>Member check</title>
    </head>
    <body>
        <form action="/checkinpost" method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div>
                <label for="fname">ชื่อลูกค้า</label>
                <input type="text" placeholder="ชื่อลูกค้า" id="fname" name="fname">
            </div>
            <div>
                <label for="lname">นามสกุลลูกค้า</label>
                <input type="text" placeholder="นามสกุลลูกค้า" id="lname" name="lname">
            </div>


            <div>
                <label for="room">เลขห้องพัก</label>
                <input type="text" placeholder="เลขห้องพัก" name="room">
            </div>
            <br/>
            <input type="submit" value="เช็คอิน">
        </form>

        @if(session('result'))
            <div>
                <h1>{{session('result')}}</h1>
            </div>
        @endif
    </body>
</html>
