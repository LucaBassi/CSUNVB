<script type="text/javascript">
    function validate(frm)
    {
        var ele = frm.elements['feedurl[]'];
        if (! ele.length)
        {
            alert(ele.value);
        }
        for(var i=0; i<ele.length; i++)
        {
            alert(ele[i].value);
        }
        return true;
    }
    function add_feed()
    {
        var div1 = document.createElement('div');
        // Get template data
        div1.innerHTML = document.getElementById('newlinktpl').innerHTML;
        // append to our form, so that template data
        //become part of form
        document.getElementById('newlink').appendChild(div1);
    }
</script>

<style>
    .feed {padding: 5px 0}
</style>
<form method="post" action="index.php" onsubmit="return validate(this)">
    <table>
        <tr>
            <td valign=top> Feed URL (s):</td>
            <td valign=top>
                <div id="newlink">
                    <div class="feed">
                    </div>
                </div>
            </td>
        </tr>
    </table>
    <p>
        <br>
        <input type="submit" name="submit1">
        <input type="reset" name="reset1" placeholder="ss"></p>
    </p>
    <p id="addnew">
        <a href="javascript:add_feed()">Add New </a>
    </p>
</form>
<!-- Template. This whole data will be added directly to working form above -->
<div id="newlinktpl" style="display:none">
    <div class="feed">
        <input type="text" name="tache[]" value=""  size="50">
    </div>
</div>
