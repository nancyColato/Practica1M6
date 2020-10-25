<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Integrantes</title>

    <style>
        table {
        width: 100%;
        }

        th {
        height: 50px;
        background-color: #000;
        color: white;
        }
        tr{
            text-align: center;  
        }
        td{ height: 40px;}
        tr:nth-child(even) {background-color: #f2f2f2;}
        tr:hover {background-color: #f5f5f5;}
    </style>

</head>
<body>
    <?php 
     echo "
    <div style='margin:5%'>
    <table >
        <thead>
            <tr>
                <th>N°</th>
                <th>Nombre Completo</th>
                <th>Codigo</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Nancy Alondra Colato Martínez</td>
                <td>U20150457</td>
            </tr>
        </tbody>
    </table> <div>";
    ?>
</body>
</html>