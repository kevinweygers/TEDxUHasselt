<div class="container">
    <!--<table width="450px">

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

                <input class="btn btn-default navbar-btn" type="submit" value="Submit">   <a href="#">Email Form</a>

            </td>

        </tr>

    </table>

</form>
    -->


    <?php echo form_open('contact/login'); ?>
    
    <?php echo validation_errors(); ?>
    
    <label>username</label>
    <?php echo form_input(array('name' => 'username')); ?> <br/>
    
    <label>password</label>
    <?php echo form_password(array('name' => 'password')); ?> <br/>
    <?php echo form_submit(array('name' => 'submit'), 'login'); ?>

    <?php echo form_close(); ?>
</div>
