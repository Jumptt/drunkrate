<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>getbot</title>
  </head>
  <body>
    <h1>あなたは</h1>
    <?php $weight=$_POST['weight'];
    $density=$_POST['density'];
    $quant=$_POST['quant'];
    $densBlood=($density*$quant)/$weight/833;
    

    if($densBlood<=0.04){
      echo 'あなたは爽快期です';
    } elseif($densBlood<=0.1){
      echo 'あなたはほろ酔い期です';
    }elseif($densBlood<=0.30){
      echo 'あなたは酩酊期です';
    }else{
      echo 'あなたは飲み過ぎです';
    }



    ?>

  </body>
</html>
