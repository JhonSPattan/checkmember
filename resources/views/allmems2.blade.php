<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
        <title>Search checkin</title>
    </head>
    <body>
        <form action="/checkinpost" method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div>
                <label for="staff_code">รหัสลูกค้า</label>
                <input type="text" placeholder="รหัสลูกค้า" name="staff_code" id="staff_code">
            </div>
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
                <input type="text" placeholder="เลขห้องพัก" name="room" id="room">
            </div>
            <input type="submit" value="เช็คอิน">
        </form>
        @if(session('result'))
            <div>
                <h1>{{session('result')}}</h1>
            </div>
        @endif
    </body>



    <script type="text/javascript">
        $(function(){
            var path = "{{route('apimemsearch')}}"
            $("#staff_code").autocomplete({
                source: function(request, response){
                    $.ajax({
                        url:path,
                        type:'GET',
                        dataType:"json",
                        data:{
                            item:request.term
                        },
                        success:function(data){
                            response($.map(data,function(item) {
                                return{
                                    label:item.staff_code+" "+item.fname, // fix
                                    value:item.staff_code, // fix

                                    /* your own */
                                    fname:item.fname,
                                    lname:item.lname
                                }
                            }));
                        }
                    });
                },
                minLength: 2,
                select: function(event, ui) {
                    $("#fname").val(ui.item.fname);
                    $("#lname").val(ui.item.lname);
                }
            });
        });
    </script>
</html>
