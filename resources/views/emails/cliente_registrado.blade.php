<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="x-apple-disable-message-reformatting">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="format-detection" content="telephone=no">
  <title>Nueva plantilla</title>
  <style>
    body {
      width: 100%;
      height: 100%;
      -webkit-text-size-adjust: 100%;
      -ms-text-size-adjust: 100%;
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
      background-color: #fafafa;
    }

    .es-wrapper {
      width: 100%;
      height: 100%;
      background-color: #fafafa;
      border-collapse: collapse;
    }

    .es-header,
    .es-footer {
      width: 100%;
      background-color: transparent;
      background-repeat: repeat;
      background-position: center top;
      padding: 20px 0;
    }

    .es-header-body,
    .es-footer-body {
      width: 600px;
      background-color: #ffffff;
      margin: 0 auto;
    }

    .es-button {
      background-color: #5c68e2;
      border-radius: 6px;
      color: #ffffff;
      font-size: 20px;
      font-weight: normal;
      line-height: 24px;
      text-align: center;
      text-decoration: none;
      padding: 10px 30px;
    }

    .es-button-border {
      border-radius: 6px;
      width: auto;
      display: inline-block;
    }

    .es-content-body {
      padding: 20px;
      background-color: #ffffff;
      width: 600px;
      margin: 0 auto;
    }

    h1 {
      font-size: 46px;
      font-weight: bold;
      color: #333333;
      line-height: 55.2px;
      text-align: center;
      margin-bottom: 20px;
    }

    p {
      font-size: 16px;
      color: #333333;
      line-height: 24px;
      margin: 0;
      padding-bottom: 10px;
    }

    a {
      text-decoration: underline;
      color: #5c68e2;
    }

    img {
      max-width: 100%;
      height: auto;
      display: block;
      border: 0;
    }
  </style>
</head>
<body>
  <div class="es-wrapper">
    <table role="none" class="es-wrapper" cellpadding="0" cellspacing="0">
      <!-- Header -->
      <tr>
  <td align="center">
    <table role="none" class="es-header" style="width: 100%; text-align: center;">
      <tr>
        <td class="es-header-body" style="text-align: center;">
          <img src="https://i.imgur.com/p0IgIOI.png" alt="Logo" width="200" style="display: block; margin: 0 auto;">
        </td>
      </tr>
    </table>
  </td>
</tr>


      <!-- Main Content -->
      <tr>
        <td align="center">
          <table role="none" class="es-content">
            <tr>
              <td class="es-content-body">
                <h1>¡Bienvenido a Clean Up!</h1>
                <p>Hola, {{$nombre}}! ¡Gracias por registrarte en Clean Up! Nos complace tenerte como parte de nuestra familia y ofrecerte nuestros servicios de lavandería y tintorería de calidad.</p>
                <table role="presentation" style="width: 100%; text-align: center;">
  <tr>
    <td align="center" style="padding: 0; margin: 0; padding-top: 10px; padding-bottom: 10px;">
      <span class="es-button-border" style="border-style: solid; border-color: #2CB543; background: #5C68E2; border-width: 0px; display: inline-block; border-radius: 6px; width: auto;">
        <a href="https://maps.app.goo.gl/8qsdNZ7ed5icFCNX8" target="_blank" class="es-button" style="color: white; text-decoration: none; padding: 10px 20px; display: inline-block;">
          Nuestra ubicación
        </a>
      </span>
    </td>
  </tr>
</table>

                <p>Si tienes alguna pregunta o necesitas asistencia, no dudes en ponerte en contacto con nosotros respondiendo a este correo o llamando al <a href="tel:+525521206631">+525521206631</a>.</p>
                <p>Gracias por elegirnos. Estamos emocionados de servirte y hacer que tus prendas se vean siempre impecables.</p>
                <p>Saludos cordiales,</p>
                <p>Tintorería Clean Up</p>
              </td>
            </tr>
          </table>
        </td>
      </tr>

      <!-- Footer -->
      <tr>
  <td align="center">
    <table role="none" class="es-footer" style="width: 100%; text-align: center; padding: 20px;">
      <tr>
        <td class="es-footer-body" style="text-align: center;">
          <p>&copy; 2024 IBW Solutions. Todos los derechos reservados.</p>
        </td>
      </tr>
    </table>
  </td>
</tr>

    </table>
  </div>
</body>
</html>
