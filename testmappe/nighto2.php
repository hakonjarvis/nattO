<?php
//Show all runners
function ListAllRunners(){
//$mysqli = new mysqli(CPANEL LOGIN);
$mysqli = new mysqli("localhost", "root", "mysql", "NightO");
$sql = "SELECT given_name, family_name, birth_date, organisation_name FROM Runners ORDER BY family_name";
$result = $mysqli->query($sql);
if($result->num_rows >= 1){
    while($row = $result->fetch_assoc()){
     echo "
      <tr>
      <td> " . $row['given_name'] . " </td>
      <td> " . $row['family_name'] . " </td>
      <td> " . $row['organisation_name'] . " </td>
      <td> " . $row['birth_date'] . " </td>
      </tr>
      ";
    }
  }
  else{
    echo "Feil med å hente løpere";
  }
mysqli_close($mysqli);
}

//show all Events
function ListAllCompletedEvents(){
//$mysqli = new mysqli(CPANEL LOGIN);
$mysqli = new mysqli("localhost", "root", "mysql", "NightO");
$sql = "SELECT event_name, event_status FROM Events  WHERE event_status = 11 ORDER BY event_name";
$result = $mysqli->query($sql);
if($result->num_rows >= 1){
    while($row = $result->fetch_assoc()){
     echo "
      <tr>
      <td> " . $row['event_name'] . " </td>
      </tr>
      ";
    }
  }
  else{
    echo "Feil med å hente arrangement";
  }
mysqli_close($mysqli);
}

//show latest 5 Events
function ListLatest5CompletedEvents(){
//$mysqli = new mysqli(CPANEL LOGIN);
$mysqli = new mysqli("localhost", "root", "mysql", "NightO");
$sql = "SELECT event_name, event_status FROM Events WHERE event_status = 11 ORDER BY event_name LIMIT 5";
$result = $mysqli->query($sql);
if($result->num_rows >= 1){
    while($row = $result->fetch_assoc()){
     echo "
      <tr>
      <td> " . $row['event_name'] . " </td>
      </tr>
      ";
    }
  }
  else{
    echo "Feil med å hente arrangement";
  }
mysqli_close($mysqli);
}

//show last 5 results of all runners
function ListAllRunnersLast5Results(){
//$mysqli = new mysqli(CPANEL LOGIN);
$mysqli = new mysqli("localhost", "root", "mysql", "NightO");
$sql = "SELECT given_name, family_name, birth_date, organisation_name FROM Runners ORDER BY family_name";
$result = $mysqli->query($sql);
if($result->num_rows >= 1){
    while($row = $result->fetch_assoc()){
     echo "
      <tr>
      <td> " . $row['given_name'] . " </td>
      <td> " . $row['family_name'] . " </td>
      <td> " . $row['organisation_name'] . " </td>
      <td> " . $row['birth_date'] . " </td>
      </tr>
      ";
    }
  }
  else{
    echo "Feil med å hente løpere";
  }
mysqli_close($mysqli);
}

//show last 5 results of each runner
function ListEachRunnersLast5Results(){
//$mysqli = new mysqli(CPANEL LOGIN);
$mysqli = new mysqli("localhost", "root", "mysql", "NightO");
$sql = "SELECT given_name, family_name, birth_date, organisation_name FROM Runners ORDER BY family_name";
$result = $mysqli->query($sql);
if($result->num_rows >= 1){
    while($row = $result->fetch_assoc()){
     echo "
      <tr>
      <td> " . $row['given_name'] . " </td>
      <td> " . $row['family_name'] . " </td>
      <td> " . $row['birth_date'] . " </td>
      <td> " . $row['organisation_name'] . " </td>
      </tr>
      ";
    }
  }
  else{
    echo "Feil med å hente løpere";
  }
mysqli_close($mysqli);
}

//show leaderboard
function ListLeaderboard(){
//$mysqli = new mysqli(CPANEL LOGIN);
$mysqli = new mysqli("localhost", "root", "mysql", "NightO");
$sql = "SELECT given_name, family_name, organisation_name FROM Runners ORDER BY family_name ASC"; //given that low points == good
$result = $mysqli->query($sql);
if($result->num_rows >= 1){
    while($row = $result->fetch_assoc()){
     echo "
      <tr>
      <td> " . $row['given_name'] . " </td>
      <td> " . $row['family_name'] . " </td>
      <td> " . $row['organisation_name'] . " </td>
      </tr>
      ";
    }
  }
  else{
    echo "Feil med å hente løpere";
  }
mysqli_close($mysqli);
}

//show rakning men
function ListAllMenLeaderboard(){
//$mysqli = new mysqli(CPANEL LOGIN);
$mysqli = new mysqli("localhost", "root", "mysql", "NightO");
$sql = "SELECT given_name, family_name, organisation_name, sex FROM Runners WHERE sex = 'm' ";
$result = $mysqli->query($sql);
if($result->num_rows >= 1){
    while($row = $result->fetch_assoc()){
     echo "
      <tr>
      <td> " . $row['given_name'] . " </td>
      <td> " . $row['family_name'] . " </td>
      <td> " . $row['organisation_name'] . " </td>
      </tr>
      ";
    }
  }
  else{
    echo "Feil med å hente løpere";
  }
mysqli_close($mysqli);
}

//show rakning women
function ListAllWomenLeaderboard(){
//$mysqli = new mysqli(CPANEL LOGIN);
$mysqli = new mysqli("localhost", "root", "mysql", "NightO");
$sql = "SELECT given_name, family_name, organisation_name, sex FROM Runners WHERE sex = 'w' ";
$result = $mysqli->query($sql);
if($result->num_rows >= 1){
    while($row = $result->fetch_assoc()){
     echo "
      <tr>
      <td> " . $row['given_name'] . " </td>
      <td> " . $row['family_name'] . " </td>
      <td> " . $row['organisation_name'] . " </td>
      </tr>
      ";
    }
  }
  else{
    echo "Feil med å hente løpere";
  }
mysqli_close($mysqli);
}

//show rakning top 5 women
function ListTop5WomenLeaderboard(){
//$mysqli = new mysqli(CPANEL LOGIN);
$mysqli = new mysqli("localhost", "root", "mysql", "NightO");
$sql = "SELECT given_name, family_name, organisation_name, sex FROM Runners WHERE sex = 'w' LIMIT 5";
$result = $mysqli->query($sql);
if($result->num_rows >= 1){
    while($row = $result->fetch_assoc()){
     echo "
      <tr>
      <td> " . $row['given_name'] . " </td>
      <td> " . $row['family_name'] . " </td>
      <td> " . $row['organisation_name'] . " </td>
      </tr>
      ";
    }
  }
  else{
    echo "Feil med å hente løpere";
  }
mysqli_close($mysqli);
}

//show rakning top 5 men
function ListTop5MenLeaderboard(){
//$mysqli = new mysqli(CPANEL LOGIN);
$mysqli = new mysqli("localhost", "root", "mysql", "NightO");
$sql = "SELECT given_name, family_name, organisation_name, sex FROM Runners WHERE sex = 'm' LIMIT 5";
$result = $mysqli->query($sql);
if($result->num_rows >= 1){
    while($row = $result->fetch_assoc()){
     echo "
      <tr>
      <td> " . $row['given_name'] . " </td>
      <td> " . $row['family_name'] . " </td>
      <td> " . $row['organisation_name'] . " </td>
      </tr>
      ";
    }
  }
  else{
    echo "Feil med å hente løpere";
  }
mysqli_close($mysqli);
}

//show rakning per club
function ListClubLeaderboard(){
//$mysqli = new mysqli(CPANEL LOGIN);
$mysqli = new mysqli("localhost", "root", "mysql", "NightO");
$sql = "SELECT given_name, family_name, organisation_name FROM Runners ORDER BY family_name";
$result = $mysqli->query($sql);
if($result->num_rows >= 1){
    while($row = $result->fetch_assoc()){
     echo "
      <tr>
      <td> " . $row['given_name_name'] . " </td>
      <td> " . $row['family_name_name'] . " </td>
      <td> " . $row['organisation_name'] . " </td>
      </tr>
      ";
    }
  }
  else{
    echo "Feil med å hente løpere";
  }
mysqli_close($mysqli);
}

//get coordinates from db
function GetCoordinates(){
//$mysqli = new mysqli(CPANEL LOGIN);
$mysqli = new mysqli("localhost", "root", "mysql", "NightO");
$sql = "SELECT event_coordinates FROM Events";
$result = $mysqli->query($sql);
if($result->num_rows >= 1){
    while($row = $result->fetch_assoc()){
     echo "
      <tr>
      <td> " . $row['event_coordinates'] . " </td>
      </tr>
      ";
    }
  }
  else{
    echo "Feil med å hente løpere";
  }
mysqli_close($mysqli);
}


?>