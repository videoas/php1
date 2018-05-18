<?php  include './header.php' ?>
<form>
  <input type="text" name="title" placeholder="enter task title...">
  <input type="text" name="time" placeholder="time...">
  <button type="submit">Save</button>
</form>

<?php
// if (isset($_GET['title'])) {
//   $title1 = isset($_GET['title']);
//   $title =[
//     "title" =>$title1
//
//   ];
//   $json = json_encode($title1);
//   file_put_contents("./data/title.json",$json);
//   file_put_contents("./data/title.json", json_encode($_GET));
//   file_put_contents('./data/'.time().'.json', json_encode($_GET));
// }
$data = scandir("./data");
foreach ($data as $key => $value) {
  print $value;
}
 ?>
<?php include './footer.php' ?>
