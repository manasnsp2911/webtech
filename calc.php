
<!DOCTYPE html>
<html lang="en">
<head>

    <title>Document</title>
</head>

<?php
$ans='';
$err1 ="";
$err2 ="";
if(isset($_GET['res']))
{
    $ans= $_GET['res'];
}

if(isset($_GET['err1']))
{
    if($_GET['err1']=="1")
    {
        $err1=" first required";
    }
    if($_GET['err2']=="2")
    {
        $err2=" second required";
    }
}

?>


<body>
    <form action="process.php" method="post">
        <input type="text" name="inp1" ><?php echo $err1 ?>
        <br>
        <input type="text" name="inp2" ><?php echo $err2 ?>
        <br>
        <label>Result: <span><?php echo htmlentities($ans);  ?></span></label>
        <br>
        <input type="submit" name="add" value="+">
        <input type="submit" name="sub" value="-">
        <input type="submit" name="mul" value="X">
        <input type="submit" name="div" value="/">
        <input type="submit" name="mod" value="%">
        <input type="submit" name="clr" value="C">

    </form>
</body>

</html>