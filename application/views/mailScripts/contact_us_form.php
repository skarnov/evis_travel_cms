<table style="width: 40%">
    <tr>
        <td align="center" style="border: 2px solid red; padding: 1%; box-shadow: 0px 0px 5px lime;">
            <table>
                <tr>
                    <td>
                        <h1><?php echo $name; ?> Wrote To You</h1><hr/>
                    </td>
                <tr/>
                <tr>
                    <td>
                        <h3>Message Title: <?php echo $message_title; ?></h3><br/>
                    </td>
                </tr>
                <tr>
                    <td style="border: 1px dashed black; padding: 1%">
                        <h3><?php echo $message; ?></h3><br/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3><strong>From: </strong> <?php echo $from_address; ?></h3>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>