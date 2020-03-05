<?php
ob_start();
?>
<div class="row m-2">
    <h1>Tâche selectionné</h1>
</div>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title></title>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script type="text/javascript">
        $("#btnPrint").live("click", function () {
            var divContents = $("#dvContainer").html();
            var printWindow = window.open('', '', 'height=400,width=800');
            printWindow.document.write('<html><head><title>DIV Contents</title>');
            printWindow.document.write('</head><body >');
            printWindow.document.write(divContents);
            printWindow.document.write('</body></html>');
            printWindow.document.close();
            printWindow.print();
        });
    </script>
</head>
<body>
<form id="form1">
    <div id="dvContainer">
        <br>
        <div>
            <dl>
                <dt><u>ID tâche</u></dt>
                <dd><h5><?= $itemSearch ['id'] ?></h5></dd>
            </dl>
            <dl>
                <dt><u>Base</u></dt>
                <dd><?= $itemSearch ['base'] ?></dd>
            </dl>
            <dl>
                <dt><u>Night Job</u></dt>
                <dd><?= $itemSearch ['nightjob'] ?></dd>
            </dl>
            <dl>
                <dt><u>Description</u></dt>
                <dd><?= $itemSearch ['description'] ?></dd>
            </dl>
            <dl>
                <dt><u>Fait par :</u></dt>
                <dd><?= $itemSearch['acknowledged_by'] ?></dd>
            </dl>
            <dl>
                <dt><u>Type</u></dt>
                <dd><?= $itemSearch ['type'] ?></dd>
            </dl>
            <dl>
                <dt><u>Valeur</u></dt>
                <dd><?= $itemSearch ['value'] ?></dd>
            </dl>

            <br>
            <?php
            ?>
        </div>
        </div>
</form>
</div>
        <form action="index.php?action=modificationItem" method=post>
            <input type="hidden" value="<?= $itemSearch ['id'] ?>" name="idItem">
            <button type="submit">Modifier</button>
        </form>

        <input type="button" value="Télécharger" id="btnPrint"/>

</body>
</html>

<?php


$content = ob_get_clean();
require "gabarit.php";
?>
