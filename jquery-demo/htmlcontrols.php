<html>
    <head>
        <script src="jquery-3.6.1.js"></script>
        <script src="jquery.validate.js"></script>
        <script>
           $(document).ready(function(){
            $("#mydemo").validate();
           });
        </script>
        <style>
            .error{
                color: red;
            }
        </style>
    </head>
    <body>
        <form method="post" id="mydemo">
            Name : <input type="text" class="required" name="txt1">
            <br>
            Number : <input type="text" class="required digits" name="txt2">
            <br>
            Email : <input type="text" class="email" name="txt3">
            <br>
            <input type="submit">
        </form>
    </body>
</html>