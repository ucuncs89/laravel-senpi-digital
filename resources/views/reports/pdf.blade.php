<!-- resources/views/reports/pdf.blade.php -->
<!DOCTYPE html>
<html>

    <head>
        <title>{{ $title }}</title>
        <style>
            body {
                font-family: Arial, sans-serif;
            }

            table {
                width: 100%;
                border-collapse: collapse;
                margin-bottom: 20px;
            }

            table,
            th,
            td {
                border: 1px solid black;
            }

            th,
            td {
                padding: 8px;
                text-align: left;
            }

            th {
                background-color: #f2f2f2;
            }
        </style>
    </head>

    <body>
        <h2>{{ $title }}</h2>
        <p>Periode: {{ $start_date }} sampai {{ $end_date }}</p>

        <table>
            <thead>
                <tr>
                    @foreach ($headings as $heading)
                        <th style="text-transform: capitalize;">{{ $heading }}</th>
                    @endforeach
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $row)
                    <tr>
                        @foreach ($headings as $heading)
                            <td>{{ $row[$heading] }}</td>
                        @endforeach
                    </tr>
                @endforeach
            </tbody>
        </table>
    </body>

</html>
