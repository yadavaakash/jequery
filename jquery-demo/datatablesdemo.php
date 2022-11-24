<html>
    <head>
        <script src="jquery-3.6.1.js"></script>
        <script src="jquery.dataTables.js"></script>
        <link rel="stylesheet" href="jquery.dataTables.css">
        <script>
            $(document).ready(function(){
                $('#myTable').DataTable();
            });
        </script>

    </head>
    <body>
        <table id="myTable">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Name</td>
                    <td>Mobile</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Akash Yadav</td>
                    <td>9988123456</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Akash InfoTch</td>
                    <td>9988123456</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>PHP</td>
                    <td>9988123456</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>JAVA</td>
                    <td>9988123456</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>IOS</td>
                    <td>9988123456</td>
                </tr>
            </tbody>
        </table>
    </body>
</html>