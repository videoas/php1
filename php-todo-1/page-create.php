<?php include './header.php' ?>


<form>
  <div class="form-group">
  <input class="form-control" type="text" name="title" placeholder="
  <?php if (isset($_GET["text"])){ print $_GET["text"];} else{ echo "Введите текст";}?>">
  </div>
  <div class="form-group input-lg">
  <input class="form-control" type="text" name="time" placeholder="
  <?php if (isset($_GET['text'])) {print $_GET['text'];} else {echo "Введите дату YYYY-mm-dd";}?>">
  </div>
  <div class="form-group input-lg">
  <button class="btn btn-primary btn-lg btn-block" type="submit">Save</button>
  </div>
</form>
<pre>
<?php

$text = $_GET['title']??'';
$date1= $_GET['time']??'';
$title_s = mb_strlen($text, 'utf-8');
if (isset($_GET['title'])) {
  //time<today

//    'дата не может быть меньше текущей даты';
  //title3 simbol
  //time 2018-01-01
  //time<today
  file_put_contents('./data/'.time().'.json', json_encode($_GET));
//  header('Location: /page-list.php/');
}

  if ($title_s > 3){
    print "Text ok!!!";
  } else{
    print "Fewer 3";
 }
 if(strtotime($date1) >= strtotime(date('Y-m-d'))){
    print " Data ok!!!";
  } else{
   print 'дата не может быть меньше текущей даты или неравиьный формат';
}

 ?>
<?php include './footer.php' ?>
