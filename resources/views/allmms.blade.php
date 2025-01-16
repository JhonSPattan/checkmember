<html>
    <head>
        <title>Member check</title>
    </head>
    <body>
        <table>
            <thead>
                <tr>
                    <th>unid</th>
                    <th>fname</th>
                    <th>lname</th>
                    <th>staff_code</th>
                </tr>
            </thead>
            <tbody>
                @foreach($members as $mem)
                    <tr>
                        <td>{{$mem->unid}}</td>
                        <td>{{$mem->fname}}</td>
                        <td>{{$mem->lname}}</td>
                        <td>{{$mem->staff_code}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </body>

</html>
