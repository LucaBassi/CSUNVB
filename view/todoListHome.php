<?php
ob_start();
$rows = 0; // Column count

$title = "CSU-NVB - Tâches hebdomadaires";
?>




<?php
$date = getdate();
?>


<script type="text/javascript"
        src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
<script>


</script>

<article>

    <br> <br> <br>


    <div class="divTable">
        <?php foreach ($results as $result) { ?>
            <?php foreach ($result as $auj => &$todo) { ?>
                <?php
                if ($auj == 'lundi') {
                    $day = 'Monday';
                }
                if ($auj == 'mardi') {
                    $day = 'Tuesday';
                }
                if ($auj == 'mercredi') {
                    $day = 'Wednesday';
                }
                if ($auj == 'jeudi') {
                    $day = 'Thursday';
                }
                if ($auj == 'vendredi') {
                    $day = 'Friday';
                }
                if ($auj == 'samedi') {
                    $day = 'Saturday';
                }
                if ($auj == 'dimanche') {
                    $day = 'Sunday';
                }
                ?>
                <?php
                if ($day == $date['weekday']):
                    ?>
                    <div class="divTableHeading">
                        <div class="divTableRow">
                            <div class="divTableHead"><h5>Journée en cours</h5><?= $auj ?> à <?= $base ?></div>
                            <div class="divTableHead"><p id="show" align="center"></p></div>
                        </div>
                    </div>
                    <?php foreach ($todo as $values) { ?>
                    <div class="divTableCell">




                        </div>

                        <div>

                            <form id="myForm" method="get">
                                <input name="idItem" id="idItem" type="hidden" value="<?= $values["id"] ?>"/><br/>
                                <input name="base" id="base" type="hidden" value="<?= $values["base"] ?>"/><br/>
                                <input name="day" id="day" type="hidden" value="<?= $auj ?>"/><br/>

                                <input type="button" id="submitFormData" onclick="SubmitFormData();" value="Submit"/>
                            </form>
                        </div>


                        <a href="index.php?action=selctedItem&idItem=<?= $values["id"] ?>&base=<?= $values["base"] ?>&day=<?= $auj ?>">
                            <button class="btn-holder"> Détails</button>
                        </a>
                        <br> <br>
                        <?php foreach ($values as $key => &$value) {
                            if ($key != 'value') {

                                if ($key == 'description') {
                                    ?>
                                    <textarea class="textarea" disabled><?= $value ?></textarea>
                                <?php } else { ?>
                                    <?= $key . ' : ' ?>
                                    <?= $value ?>
                                    <br>
                                <?php }
                            } ?>
                        <?php } ?>

                        <span>
                        <?php if ($values["value"] == 1): ?>
                  Your data will d... <br/>

                        ============<br/>
                        <div id="results">

                            <form id="myForm" method="get">
                                <input name="idItem" id="idItem" type="hidden" value="<?= $values["id"] ?>">
                                <input name="base" id="base" type="hidden" value="<?= $values["base"] ?>">
                                <input name="action" id="action" type="hidden" value="toggleItem"/>
                                <input name="day" id="day" type="hidden" value="<?= $auj ?>"/>
                                <input name="currentValue" id="base" type="hidden" value="<?= $values["value"] ?>"/>

                                <input type="button" id="submitFormData" onclick="SubmitFormData();" value="Submit"/>
                            </form>

                            <a href="index.php?action=toggleItem&idItem=<?= $values["id"] ?>&base=<?= $values["base"] ?>&day=<?= $auj ?>&currentValue=<?= $values["value"] ?>">

                                 <input id="submitFormData" onclick="SubmitFormData();" value="Submit"
                                        type="image" src="assets/images/check.png" alt="Submit" width="48" height="48">
                        </a>
                        <?php elseif ($values["value"] == 0) : ?>

                  Your data will d... <br/>

                        ============<br/>
                        <div id="results">
                            <form id="myForm" method="get">
                                <input name="idItem" id="idItem" type="hidden" value="<?= $values["id"] ?>">
                                <input name="base" id="base" type="hidden" value="<?= $values["base"] ?>">
                                <input name="action" id="action" type="hidden" value="toggleItem"/>
                                <input name="day" id="day" type="hidden" value="<?= $auj ?>"/>
                                <input name="currentValue" id="currentValue" type="hidden" value="<?= $values["value"] ?>"/>


                                <input type="button" id="submitFormData" onclick="SubmitFormData();" value="Submit"/>
                            </form>


                            <a href="index.php?action=toggleItem&idItem=<?= $values["id"] ?>&base=<?= $values["base"] ?>&day=<?= $auj ?>&currentValue=<?= $values["value"] ?>">
                            <input id="input" type="image" src="assets/images/uncheck.png" alt="Submit" width="48"
                                   height="48">
                        </a>
                        <?php endif; ?>
                    </span>
                    </div>
                <?php } ?>
                <?php endif; ?>
            <?php } ?>
        <?php } ?>
    </div>
    <br>
    <br>
    <br>
    <br>
    <div class="divTable">
        <?php foreach ($results as $result) { ?>
            <?php foreach ($result as $auj => &$todo) { ?>
                <div class="divTableHeading">
                    <div class="divTableRow">
                        <div class="divTableHead"><?= $auj ?></div>
                    </div>
                </div>
                <?php foreach ($todo as $values) { ?>
                    <div class="divTableCell">
                        <a href="index.php?action=selctedItem&idItem=<?= $values["id"] ?>&base=<?= $values["base"] ?>&day=<?= $auj ?>">
                            <button class="btn-holder"> Détails</button>
                        </a>
                        <br> <br>
                        <?php foreach ($values as $key => &$value) {
                            if ($key != 'value') {

                                if ($key == 'description') {
                                    ?>
                                    <br>   <textarea class="textarea" disabled><?= $value ?></textarea>  <br> <br>
                                <?php } else { ?>
                                    <?= $key . ' : ' ?>
                                    <?= $value ?>
                                    <br>
                                <?php }
                            } ?>
                        <?php } ?>

                        <span>
                        <?php if ($values["value"] == 1): ?>
                            <a href="index.php?action=toggleItem&idItem=<?= $values["id"] ?>&base=<?= $values["base"] ?>&day=<?= $auj ?>&currentValue=<?= $values["value"] ?>">
                            <input type="image" src="assets/images/check.png" alt="Submit" width="48" height="48">
                        </a>
                        <?php elseif ($values["value"] == 0) : ?>
                            <a href="index.php?action=toggleItem&idItem=<?= $values["id"] ?>&base=<?= $values["base"] ?>&day=<?= $auj ?>&currentValue=<?= $values["value"] ?>">
                            <input id="input" type="image" src="assets/images/uncheck.png" alt="Submit" width="48"
                                   height="48">
                        </a>
                        <?php endif; ?>
                    </span>
                    </div>
                <?php } ?>
            <?php } ?>

        <?php } ?>
    </div>
    <br>
    <br>
    <br>
    <form method="post" action="index.php?action=adminPage&base=<?= $base ?>">
        <button>
            Administrer les taches
        </button>
    </form>
    <button type="button" href="view/newTask">
        Ajouter une tache
    </button>
</article>

<div id="results">
</div>

<script>function SubmitFormData() {
        var idItem = $("#idItem").val();
        var base = $("#base").val();
        var day = $("#day").val();
        var action = $("#action").val();
        var currentValue = $("#currentValue").val();

        $.get("index.php", {action: action, currentValue: currentValue, idItem: idItem, base: base, day: day},
            function (data) {
                $('#results').html(data);
                $('#myForm')[0].reset();
            });
    }
</script>

<script>
    $(document).ready(function (e) {
        let UrlsObj = localStorage.getItem('rememberScroll');
        let ParseUrlsObj = JSON.parse(UrlsObj);
        let windowUrl = window.location.href;

        if (ParseUrlsObj == null) {
            return false;
        }

        ParseUrlsObj.forEach(function (el) {
            if (el.url === windowUrl) {
                let getPos = el.scroll;
                $(window).scrollTop(getPos);
            }
        });

    });

    function RememberScrollPage(scrollPos) {

        let UrlsObj = localStorage.getItem('rememberScroll');
        let urlsArr = JSON.parse(UrlsObj);

        if (urlsArr == null) {
            urlsArr = [];
        }

        if (urlsArr.length == 0) {
            urlsArr = [];
        }

        let urlWindow = window.location.href;
        let urlScroll = scrollPos;
        let urlObj = {url: urlWindow, scroll: scrollPos};
        let matchedUrl = false;
        let matchedIndex = 0;

        if (urlsArr.length != 0) {
            urlsArr.forEach(function (el, index) {

                if (el.url === urlWindow) {
                    matchedUrl = true;
                    matchedIndex = index;
                }

            });

            if (matchedUrl === true) {
                urlsArr[matchedIndex].scroll = urlScroll;
            } else {
                urlsArr.push(urlObj);
            }


        } else {
            urlsArr.push(urlObj);
        }

        localStorage.setItem('rememberScroll', JSON.stringify(urlsArr));

    }

    $(window).scroll(function (event) {
        let topScroll = $(window).scrollTop();
        console.log('Scrolling', topScroll);
        RememberScrollPage(topScroll);
    });


    $(document).ready(
        function () {
            setInterval(function () {
                var today = new Date();
                var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
                $('#show').text(
                    'Heure:'
                    + time);
            }, 1000);
        });
</script>
<?php

$content = ob_get_clean();
require "gabarit.php";
?>
