
<html>
<head>
  <meta charset="utf-8">
  <title>AR</title>
  <script src="includes/jsQR.js"></script>
  <!-- include A-Frame obviously -->
  <script src="https://aframe.io/releases/0.8.0/aframe.min.js"></script>
  <!-- include ar.js for A-Frame -->
  <script src="https://jeromeetienne.github.io/AR.js/aframe/build/aframe-ar.js"></script>
  
  
</head>



<body>
  <a-scene embedded arjs  id ="scene">
      <!-- create your content here. just a box for now -->
    <a-box position='0 0.5 0' material='opacity: 0.5;'></a-box>
      <!-- define a camera which will move according to the marker position -->
    <a-marker-camera preset='hiro'></a-marker-camera>
  </a-scene>

 <?php include 'includes/qrcodereader.php'; ?>
  
</body>
</html>
