<?php 
session_start();
include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    <!-- <link rel="stylesheet" href="./style/style.css"> -->
    <link rel="import" href="./assets/Poppins">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

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

  html {
    scroll-behavior: smooth;
  }

  /* Navbar */
  .navbar {
    background-color: black;
    color: white;
    display: flex;
    gap: 70px;
    padding: 17px 17px 17px 40px;
    align-items: center;
    position: sticky;
    top: 0;
    z-index: 1000;
    background-color: rgba(17, 17, 17, 0.8);
    backdrop-filter: blur(10px);
    transition: 0.3s;
  }

  .navbar a {
    color: white;
    text-decoration: none;
    padding: 6px 10px;

  }

  .navbar a:hover {
    text-decoration: underline;
    background-color: #1f1f1f;
    border-radius: 6px;
  }

  .btn {
    background-color: #2563eb;
    color: white;
    padding: 6px 14px;
    border-radius: 6px;
    text-decoration: none;
  }

  .btn:hover {
    background-color: #1d4ed8;
  }

  .menu-toggle {
    display: none;
    font-size: 24px;
    cursor: pointer;
  }

  /* Hero */
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
    margin-top: 10px;
    border: none;
    cursor: pointer;
  }

  /* About */
  .about-me {
    padding: 60px 40px;
  }

  .about-me > div {
    display: flex;
    gap: 20px;
    margin-top: 10px;
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

  /* Portfolio */
  .my-portfolio {
    padding: 60px 40px;
  }

  .my-portfolio > div {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
    margin-top: 10px;
  }

  .my-portfolio img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    border-radius: 8px;
    transition: transform 0.3s ease;
  }

  .my-portfolio img:hover {
    transform: scale(1.05);
    box-shadow: 0 10px 20px rgba(0,0,0,0.5);
  }

  /* Footer */
  .footer {
    display: flex;
    gap: 20px;
    align-items: center;
    padding: 40px;
    background-color: #111;
    color: #aaa;
  }

  .footer a {
    color: #aaa;
    font-size: 18px;
  }

  .footer a:hover {
    color: white;
  }

  /* mobile */
  @media (max-width: 768px) {
    .navbar {
      flex-wrap: wrap;
      gap: 10px;
    }

    .menu-toggle {
      display: block;
      margin-left: auto;
    }

    .nav-menu {
      display: none;
      flex-direction: column;
      width: 100%;
      margin-top: 10px;

      background-color: #111;
      padding: 10px;
      border-radius: 8px;
    }

    .nav-menu a {
      padding: 10px;
    }

    .nav-menu.active {
      display: flex
    }

    /* about */
    .about-me > div {
      flex-direction: column;
    }

    .my-portfolio > div {
      grid-template-columns: 1fr;
    }
  }

    </style>
</head>
<body>
    <!-- <h1>Bismillah</h1> -->

    <!-- Hero -->
    <div class="hero" id="home">
        <h1>Halo, saya Ibrahim</h1>
        <p>Saya sedang belajar web development dan membangun project sederhana untuk terus berkembang.</p>
        <a href="./assets/CV IBRAHIM PPQ IT AL-MAHIR.pdf" download><button>Download CV</button></a>
        <img src="" alt="">
    </div>

    <!-- About Me -->
    <div class="about-me" id="about">
        <h1>About Me</h1>
        <p>Saya seorang pelajar yang sedang fokus belajar web development dan membangun kebiasaan membuat project kecil.</p>
        <div>
            <div>
                <h3>1</h3>
                <h4>Pembelajar</h4>
                <p>Saya suka belajar hal baru di dunia pemrograman.</p>
            </div>
            <div>
                <h3>2</h3>
                <h4>Pembuat</h4>
                <p>Saya mencoba membuat project kecil untuk latihan.</p>
            </div>
            <div>
                <h3>3</h3>
                <h4>Tujuan</h4>
                <p>Ingin menjadi developer yang bermanfaat untuk orang lain.</p>
            </div>
        </div>
    </div>

    <!-- My Portfolio -->
    <div class="my-portfolio" id="portfolio">
        <h1>My Portfolio</h1>
        <p>Beberapa project yang saya kerjakan untuk latihan.</p>
        <div>
          <img src="./assets/app.jpeg" alt="">
          <img src="./assets/app2.jpeg" alt="">
          <img src="./assets/app4.jpeg" alt="">
        </div>
        
        <button></button>
    </div>

    <?php include 'footer.php'?>

    <script>
      const toggle = document.querySelector(".menu-toggle");
      const menu = document.querySelector(".nav-menu");

      toggle.addEventListener("click", () => {
        menu.classList.toggle("active");
      });
    </script>
</body>
</html>



