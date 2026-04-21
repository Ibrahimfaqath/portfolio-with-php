<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    <!-- <link rel="stylesheet" href="./style/style.css"> -->
    <link rel="import" href="./assets/Poppins">

    <style>
      @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

      body {
        font-family: 'Poppins', sans-serif;
        background-color: #0f0f0f;
        color: #e5e5e5;
      }

  * {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
  }

  /* Navbar */
  .navbar {
    background-color: black;
    color: white;
    display: flex;
    gap: 70px;
    padding: 17px 17px 17px 40px;
  }

  .navbar a {
    color: white;
    text-decoration: none;

  }

  .navbar a:hover {
    text-decoration: underline;
  }

  .navbar button {
    background-color: white;
    padding: 5px;
    border-radius: 5px;
  }

  .navbar button:hover {
    background-color: grey;
    color: white
  }

  .hero {
    padding: 60px 40px;
    max-width: 800px;
    margin: 0 auto;
  }

  .hero p {
    color: #a1a1a1;
  }

  .hero button {
    padding: 10px 16px;
    border-radius: 6px;
    border: none;
    cursor: pointer;
  }

  .about-me {
    padding: 60px 40px;
  }

  .about-me > div {
    display: flex;
    gap: 20px;
  }

  .about-me > div > div {
    background-color: #1a1a1a;
    padding: 20px;
    border-radius: 8px;
    flex: 1;
  }

  .about-me h3 {
    margin-bottom: 8px;
  }

  .about-me h4 {
    margin-buttom: 6px;
  }

  .about-me p {
    color: #a1a1a1;
  }

  .my-portfolio {
    padding: 60px 40px;
  }

  .my-portfolio > div {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
  }



    </style>
</head>
<body>
    <!-- <h1>Bismillah</h1> -->

    <?php include 'header.php';?>

    <!-- Hero -->
    <div class="hero">
        <h1>Hi, I'am Ibrahim</h1>
        <p>I build simple, useful, and meaningful web applications.</p>
        <button>Download Cv</button>
        <img src="" alt="">
    </div>

    <!-- About Me -->
    <div class="about-me">
        <h1>Lorem ipsum dolor sit</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum adipisci</p>
        <div>
            <div>
                <h3>1</h3>
                <h4>Learner</h4>
                <p>Aku adalah seorang pelajar</p>
            </div>
            <div>
                <h3>2</h3>
                <h4>Builder</h4>
                <p>Aku adalah seorang pelajar</p>
            </div>
            <div>
                <h3>3</h3>
                <h4>Purpose</h4>
                <p>Aku adalah seorang pelajar</p>
            </div>
        </div>
    </div>

    <!-- My Portfolio -->
    <div class="my-portfolio">
        <h1>My Portfolio</h1>
        <div>
          <img src="" alt="">
          <img src="" alt="">
          <img src="" alt="">
        </div>
        
        <button></button>
    </div>

    <?php include 'footer.php'?>
</body>
</html>

