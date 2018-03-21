<!DOCTYPE html>
<html>
<head>
<style> 
input[type=text] {
    width: 230px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-color: grey;
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
    height: 30px;
}

input[type=text]:focus {
    width: 500px;
}

  #srhbtn {
    background-color: grey; /* Green */
    border: none;
    color: white;
    padding: 5px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
}
</style>
</head>
<body>

<form action="searchresult.php" method="post">
  <table>
      <tr>
          <td><img src="searchicon.png" alt="Mountain View" style="width:20px; height:20px;"></td>
          <td><input type="text" name="search" placeholder="Search..."></td>
          <td><input type="submit" name="submit" value="search" id="srhbtn"></td>
      </tr>
  </table>
  
</form>

</body>
</html>