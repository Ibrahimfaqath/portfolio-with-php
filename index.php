<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    <link rel="stylesheet" href="./style/style.css">
    <link rel="import" href="./assets/Poppins">

    <style>
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
        <img src="" alt="">
        <img src="" alt="">
        <button></button>
    </div>

    <?php include 'footer.php'?>
</body>
</html>

