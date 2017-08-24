<html>
    <head>
        <title>this is factorial</title>
    </head>
    <body>
        <form action=""method="post">
           Enter The Number :<br>
            <input type="text"name="number"/><br>
            <input type="submit"name="submit"value="submit"/>
        </form>
        <?php
            if($_POST){
                $fact=1;
                $num=$_POST['number'];
               
                for($i=1;$i<=$num-1;$i++){
                    $fact*=($i+1);
                     
                }
                echo"Factorial $num of $fact ";
               
            }
        ?>
    </body>
</html>