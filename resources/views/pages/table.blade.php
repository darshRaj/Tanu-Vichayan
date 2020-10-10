<html>
 <head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Laravel 5.8 - Join Multiple Table</title>
  
 
 </head>
 <body>
  <div class="container">    
     <br />
     <h3 align="center">Laravel 7- Join Multiple Table</h3>
     <br />
   <div class="table-responsive">
    <table  border="1">
           <thead>
            <tr>
                <th>Id</th>
                <th>firstname</th>
                <th>lastname</th>
                <th>mobile</th>
                <th>post</th>
                <th>status</th>
                <th>status id</th>
                <th>time</th>
            </tr>
           </thead>
           <tbody>
           @foreach($data as $row)
            <tr>
             <td>{{ $row->status_id }}</td>
             <td>{{ $row->firstname }}</td>
             <td>{{ $row->lastname }}</td>
             <td>{{ $row->mobile }}</td>
             <td>{{ $row->post }}</td>
             <td>{{ $row->show_status }}</td>
             <td>{{ $row->user_id }}</td>
             <td>{{ $row->created_at }}</td>
            </tr>
           @endforeach
           </tbody>
       </table>
   </div>
  </div>
 </body>
</html>
