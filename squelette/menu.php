
<nav>
        <h1 style="color: red; " > PROGRAMMEUR </h1>
        <div class=" onglets">
           <a href="../index.php">home</a>
           <a href="../PHP/images.php">images</a>
           <a href="../PHP/cv.php">CV</a>
       </div>
    </nav>

    <style>
nav{
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
    border-bottom: 5px solid #6f6f6f;
    
}
nav h1{
    color:#7f7f7f;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    font-size: 30px;
}
.onglets{
   margin-top:3px ;
   margin-left: 300px;
   
}
.onglets a{
    text-decoration: none;
    color: black;
    margin-right: 10px;
    border-bottom: 1px solid #000 ;
    padding-bottom: 5px;
}
@media screen and (max-width:680px) {
      nav.onglets{
          margin-left: 0;
          margin-bottom: 20px;
      }
}
    </style>