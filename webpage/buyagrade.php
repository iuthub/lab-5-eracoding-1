<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Buy Your Way to a Better Education!</title>
    <link href="buyagrade.css" type="text/css" rel="stylesheet" />
</head>

<body>
<form action="sucker.php" method="post">
    <?php
        $username = "";
        $section = "";
        $cardinfo = "";
        $cardtype = "";
    ?>
<h1>Buy Your Way to a Better Education!</h1>

<p>
    The rough economy, along with recent changes in University of Washington policy, now allow us to offer grades for money.  That's right!  All you need to get a 4.0 in this course is cold, hard, cash.
</p>

<hr />

<h2>Give Us Your Money</h2>
    <?php
    if(isset($_POST['username'])){
        $username = $_POST['username'];
    }else if(isset($_POST['section'])){
        $section = $_POST['section'];
    }else if(isset($_POST['cardinfo'])){
        $cardinfo = $_POST['cardinfo'];
    }else if(isset($_POST['cardtype'])){
        $cardtype = $_POST['cardtype'];
    }
    ?>
<dl>
    <dt>Name</dt>
    <dd>
        <input type="text" name="username" value="<?= $username ?>"> <br>
    </dd>

    <dt>Section</dt>
    <dd>
        <select name="section" value="<?= $section ?>">
            <option disabled selected> Choose your selection:</option>
            <option>MA</option>
            <option>MB</option>
            <option>MC</option>
            <option>MD</option>
            <option>ME</option>
            <option>MF</option>
            <option>MG</option>
            <option>MH</option>
        </select>
    </dd>

    <dt>Credit Card</dt>
    <dd>
        <input type="text" name="cardinfo" value="<?= $cardinfo ?>" ><br>
        <label>
            <input type="radio" name="cardtype" value="<?= $cardtype="Visa" ?>"/>Visa
        </label>
        <label>
            <input type="radio" name="cardtype" value="<?= $cardtype="Master" ?>"/>Master
        </label>
    </dd>
</dl>

<div>
    <button type="submit" value="submit">I am a giant sucker.</button>
</div>
</form>
</body>
</html>