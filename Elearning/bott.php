<?php
//$server = "localhost";
//$username = "root";
//$password = "";
//$database Name = "chatbot";

$conn = mysqli_connect("localhost","root","","onlinebot");

if($conn){
  $user_messages = mysqli_real_escape_string($conn, $_POST['messageValue']);

  $query = "SELECT * FROM chatbot WHERE messages LIKE '%$user_messages%'";
  $runQuery = mysqli_query($conn, $query);

  if(mysqli_num_rows($runQuery) > 0){
    //fetch result//
    $result = mysqli_fetch_assoc($runQuery);
    echo $result['response'];

  }else{
    echo "Please go to Contact section and mention your details/problem.";
  }

}else{
  ?>
  <script>
      alert("No Connection" . mysqli_connect_errno());
  </script>
  <?php
}

?>
