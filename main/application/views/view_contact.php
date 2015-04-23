<html>
    <head>
        <title>
            <?php echo $title ?>
        </title>
    </head>
    <body>

        <div class="container">
            <form name="contactform" method="post" action="send_form_email.php">

                <table width="450px">

                    <tr>

                        <td valign="top">

                            <label class="label label-default" for="first_name">First Name *</label>

                        </td>

                        <td valign="top">

                            <input class="form-control" type="text" name="first_name" maxlength="50" size="30">

                        </td>

                    </tr>

                    <tr>

                        <td valign="top">

                            <label class="label label-default" for="last_name">Last Name *</label>

                        </td>

                        <td valign="top">

                            <input class="form-control" type="text" name="last_name" maxlength="50" size="30">

                        </td>

                    </tr>

                    <tr>

                        <td valign="top">

                            <label class="label label-default" for="email">Email Address *</label>

                        </td>

                        <td valign="top">

                            <input class="form-control" type="text" name="email" maxlength="80" size="30">

                        </td>

                    </tr>

                    <tr>

                        <td valign="top">

                            <label class="label label-default" for="telephone">Telephone Number</label>

                        </td>

                        <td valign="top">

                            <input class="form-control" type="text" name="telephone" maxlength="30" size="30">

                        </td>

                    </tr>

                    <tr>

                        <td valign="top">

                            <label class="label label-default" for="comments">Comments *</label>

                        </td>

                        <td valign="top">

                            <textarea  name="comments" maxlength="1000" cols="25" rows="6"></textarea>

                        </td>

                    </tr>

                    <tr>

                        <td colspan="2" style="text-align:center">

                            <input type="submit" value="Submit">   <a href="#">Email Form</a>

                        </td>

                    </tr>

                </table>

            </form>
        </div>
    </body>
</html>