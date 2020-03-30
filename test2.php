<!DOCTYPE html>
<html>
<head>
    <style type="text/css">
        body {
            background-image: url('../Images/Black-BackGround.gif');
            background-repeat: repeat;
        }
        body td {
            font-Family: Arial;
            font-size: 12px;
        }
        #Nav a {
            position:relative;
            display:block;
            text-decoration: none;
            color:black;
        }
    </style>
    <script type="text/javascript">
        function refreshPage () {
            var page_y = document.getElementsByTagName("body")[0].scrollTop;
            window.location.href = window.location.href.split('?')[0] + '?page_y=' + page_y;
        }
        window.onload = function () {
            setTimeout(refreshPage, 35000);
            if ( window.location.href.indexOf('page_y') != -1 ) {
                var match = window.location.href.split('?')[1].split("&")[0].split("=");
                document.getElementsByTagName("body")[0].scrollTop = match[1];
            }
        }
    </script>
</head>
<body><!-- BODY CONTENT HERE --></body>
</html>