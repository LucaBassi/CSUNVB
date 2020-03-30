

    <script type="text/javascript"
            src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
    <script>
        $(document).ready(
            function() {
                setInterval(function() {
                    var today = new Date();
                    var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds()
                    var randomnumber = Math.floor(Math.random() * 100);
                    $('#show').text(
                        'I am getting refreshed every 3 seconds..! Random Number ==> '
                        + time);
                }, 1000);
            });
    </script>


<div id="show" align="center"></div>
<style>
    .div-wrapper {
    position: relative;
    height: 300px;
    width: 300px;
    }

    .div-wrapper img {
    position: absolute;
    left: 0;
    bottom: 0;
    }
</style>


    <div class="div-wrapper">
        <img src="blah.png"/>
    </div>

