	<?php include('form.php');?>
    <link rel="stylesheet" href="from.css" type="text/css">
    <title>Regstration Page</title>
        <form id="reg" action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
             <h1>REGSTRATION PAGE</h1>
            <label>First Name:</label> 
            <fieldset>
                <input type="text" placeholder="FIRSTNAME" name="fname" value="<?= $fname ?>" autofocus>
                <span class="error"><?=$fname_error ?></span>
            </fieldset>
            <label>Last Name:</label> 
            <fieldset>
                <input type="text" placeholder="LAST NAME" name="lname" value="<?= $lname ?>">
                <span class="error"><?= $lname_error ?></span>
            </fieldset>
            <label>E-mail:</label> 
            <fieldset>
                <input type="text" placeholder ="EMAIL" name ="email" value="<?= $fname ?>">
                <span class="error"><?=$email_error ?></span>
            </fieldset>
            <label>Password:</label>
            <fieldset>
                <input type ="password" placeholder ="PASSWORD" name ="pwd" value="<?= $pwd ?>" >
                <span class="error"><?=$pwd_error ?></span>
            </fieldset>
            <lable>Confirm password:</lable>
            <fieldset>
                <input type ="password" placeholder ="PASSWORD" name ="cpwd" value="<?= $cpwd ?>">
                <span class="error"><?=$cpwd_error ?></span>
            </fieldset>
            <input type="submit" VALUE="SUBMIT"/>
        </form>
       