<!DOCTYPE html>
<html>
<head>
    <title>{{ $title }}</title>
    
    <style>
        /* Define styles for the table */
        .table {
            width: 100%;
            border-collapse: collapse;
        }
        
        .table th, .table td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        
        /* Define row colors */
        .table tr:nth-child(1) {
            background-color: green;
            color: white;
        }
        
        .table tr:nth-child(2) {
            background-color: white;
        }
        
        .table tr:nth-child(3) {
            background-color: red;
            color: white;
        }
    </style>
</head>
<body>
    <h1>Welcome to the {{ $title }}!</h1>
    
    <table class="table">
        <thead>
            <tr>
                <th>Column 1</th>
                <th>Column 2</th>
                <th>Column 3</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Data 1</td>
                <td>Data 2</td>
                <td>Data 3</td>
            </tr>
            <tr>
                <td>Data 4</td>
                <td>Data 5</td>
                <td>Data 6</td>
            </tr>
            <tr>
                <td>Data 7</td>
                <td>Data 8</td>
                <td>Data 9</td>
            </tr>
        </tbody>
    </table>
</body>
</html>