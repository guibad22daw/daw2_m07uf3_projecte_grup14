<html>

<head>
    <title>PDF generat amb Dompdf</title>
    <style>
        * {
            font-family: Arial, Helvetica, sans-serif;
        }
        table {
            border-collapse: collapse;
            width: 100%;
        }
        
        th,
        td {
            border: 1px solid black;
            padding: 5px;
        }
        
        th {
            text-align: center;
        }
        
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        
        .footer {
            position: fixed;
            bottom: 0;
            width: 100%;
            text-align: center;
            font-size: 10px;
        }
        </style>
</head>

<body>
    <div class="header">
        <h1>Dades</h1>
    </div>
    
    <table class="table table-strip">
        <thead>
            <tr style="background-color: black; color: white;">
                <th>CAMP</th>
                <th>VALOR</th>
            </tr>
        </thead>
        <tbody>
            @php
            $atributs = $dades->getAttributes();
            @endphp
            @foreach($atributs as $camp => $valor)
                @if ($camp != 'remember_token' && $camp != 'created_at' && $camp != 'updated_at') {
                    <tr>
                        <td><b>{{ $camp }}</b></td>
                        <td>{{ $valor }}</td>
                    </tr>
                @endif
            @endforeach
        </tbody>
    </table>
</body>

</html>