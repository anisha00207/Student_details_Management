<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body {
  background-image: url("https://immunocon2024.iisc.ac.in/assets/img/about-iisc/IISc_2.jpg");
  background-size: cover;
  background-repeat: no-repeat;
  background-attachment: fixed;
  position: relative;
}

body::before {
  content: '';
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-image: inherit;
  background-size: inherit;
  background-repeat: inherit;
  background-attachment: inherit;
  filter: blur(10px); /* Adjust the blur intensity */
  z-index: -1; /* Push the pseudo-element behind the content */
}

.nav, .logins, h1, h3, form {
  position: relative;
  z-index: 1; /* Bring content above the blurred background */
}

    </style>
<body>
    
</body>
</html>