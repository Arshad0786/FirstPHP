<!doctype html
<!UTF8>

<header>
    <meta charset="utf-8"/>
    <style>
    .error{
        color:red;
    }
    </style>
    <script>
    console.log("test");
    </script>
</header>

<body>
<?php 
$NameError="";
$EmailError = "";
$GenderError = "";
$CommentError = "";
$UserName="";
$UserEmail="";
$UserGender="";
$UserComment="";


    if($_SERVER["REQUEST_METHOD"]=="POST"){
        if (empty($_POST["UserName"])){
            $NameError = "Name Required!";
        }
        else{
            $UserName =$_POST["UserName"];
        }
        if (empty($_POST["UserEmail"])){
            $EmailError = "Email Required!";
        }
        else{
            $UserEmail =$_POST["UserEmail"];
        }
        if (empty($_POST["UserGender"])){
            $GenderError = "Gender Required!";
        }
        else{
            $UserGender =$_POST["UserGender"];
        }
        if (empty($_POST["UserComment"])){
            $CommentError = "Comment Required!";
        }
        else{
            $UserComment =$_POST["UserComment"];
        }

    }
?>

    <form method="POST" action="<?php echo $_SERVER["PHP_SELF"];?>">
        姓名: <input type="text" name="UserName" value="<?php echo $UserName;?>"/>
        <span class=error> <?php echo $NameError ?></span>
    <br/>
    <br/>
        信箱: <input type="text" name="UserEmail" value="<?php echo $UserEmail;?>"/>
        <span class=error> <?php echo $EmailError ?></span>
    <br/>
    <br/>
        性別:
        <br/> 
        男<input type="radio" name="UserGender" value="Male" checked="true" />
        女<input type="radio" name="UserGender" value="Female"/>
        <span class=error> <?php echo $GenderError ?></span>
    <br/>
    <br/>
        留言:
        <textarea name="UserComment"><?php echo $UserComment;?></textarea>
        <span class=error> <?php echo $CommentError ?></span>
    <br/>
    <input type="submit" value="submit" rows="5">

<?php 
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        echo "Your Information<br>";
        echo "Name: ".$_POST["UserName"]."<br>";
        echo "Email: ".$_POST["UserEmail"]."<br>";
        echo "Gender: ".$_POST["UserGender"]."<br>";
        echo "Comment: ".$_POST["UserComment"]."<br>";
    }
?>
</body>
</html>