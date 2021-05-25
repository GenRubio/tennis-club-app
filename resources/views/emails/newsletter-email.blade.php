<!DOCTYPE html>
<html>

<head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <style type="text/css">
        /* CLIENT-SPECIFIC STYLES */
        body,
        table,
        td,
        a {
            -webkit-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
        }

        table,
        td {
            mso-table-lspace: 0pt;
            mso-table-rspace: 0pt;
        }

        img {
            -ms-interpolation-mode: bicubic;
        }

        /* RESET STYLES */
        img {
            border: 0;
            height: auto;
            line-height: 100%;
            outline: none;
            text-decoration: none;
        }

        table {
            border-collapse: collapse !important;
        }

        body {
            height: 100% !important;
            margin: 0 !important;
            padding: 0 !important;
            width: 100% !important;
        }

        /* iOS BLUE LINKS */
        a[x-apple-data-detectors] {
            color: inherit !important;
            text-decoration: none !important;
            font-size: inherit !important;
            font-family: inherit !important;
            font-weight: inherit !important;
            line-height: inherit !important;
        }

        /* MEDIA QUERIES */
        @media screen and (max-width: 480px) {
            .mobile-hide {
                display: none !important;
            }

            .mobile-center {
                text-align: center !important;
            }
        }

        div[style*="margin: 16px 0;"] {
            margin: 0 !important;
        }

    </style>
</head>

<body style="margin: 0 !important; padding: 0 !important; background-color: #eeeeee;" bgcolor="#eeeeee">
    <div
        style="display: none; font-size: 1px; color: #fefefe; line-height: 1px; font-family: Open Sans, Helvetica, Arial, sans-serif; max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden;">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus dolor aliquid omnis consequatur est deserunt,
        odio neque blanditiis aspernatur, mollitia ipsa distinctio, culpa fuga obcaecati!
    </div>

    <table border="0" cellpadding="0" cellspacing="0" width="100%">
        <tbody>
            <tr>
                <td align="center" style="background-color: #eeeeee;" bgcolor="#eeeeee">
                    <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%"
                        style="max-width: 600px;">
                        <tbody>
                            <tr>
                                <td align="center" valign="top" style="font-size:0;padding: 0px;" bgcolor="#000000">
                                    <div
                                        style="display:inline-block; max-width:50%; min-width:100px; vertical-align:top; width:100%;">
                                        <table align="left" border="0" cellpadding="0" cellspacing="0" width="100%"
                                            style="max-width:300px;">
                                            <tbody>
                                                <tr>
                                                    <td align="left" valign="top"
                                                        style="/* font-family: Arial, sans-serif; */font-size: 36px;font-weight: 800;line-height: 16px;font-family: Arial;"
                                                        class="mobile-center">
                                                        <h1
                                                            style="font-size: 25px;font-weight: 800;color: #dc3931;margin-left: 20px;">
                                                            <singleline label="Company Name">Club Tennis i Padel
                                                            </singleline>
                                                        </h1>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div style="display:inline-block; max-width:50%; min-width:100px; vertical-align:top; width:100%;"
                                        class="mobile-hide">
                                        <table align="left" border="0" cellpadding="0" cellspacing="0" width="100%"
                                            style="max-width:300px;">
                                            <tbody>
                                                <tr>
                                                    <td align="right" valign="top"
                                                        style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 48px; font-weight: 400; line-height: 48px;">
                                                        <table cellspacing="0" cellpadding="0" border="0" align="right">
                                                            <tbody>
                                                                <tr>

                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td align="center" style="padding: 35px 35px 20px 35px;background-color: #141414;"
                                    bgcolor="#ffffff">
                                    <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%"
                                        style="max-width:600px;">
                                        <tbody>

                                            <tr>
                                                <td align="left"
                                                    style="font-family: Open Sans, Helvetica, Arial, sans-serif;font-size: 16px;font-weight: 400;line-height: 24px;padding-top: 0px;padding-bottom: 21px;">
                                                    <multiline label="Paragraph">
                                                        <p
                                                            style="font-size: 21px;font-weight: bold;color: #dc3931;">
                                                            {{ $noticia->titulo }}
                                                        </p>
                                                        <div
                                                            style="font-size: 14px;font-weight: 400;line-height: 24px;color: #e1dddd;">
                                                            {!! $noticia->descripcion !!}
                                                        </div>
                                                    </multiline>
                                                </td>
                                            </tr>
                                            <tr>
                                                @if ($noticia->actividad_id)
                                                    <td align="center" style="padding-top: 20px;padding-bottom: 51px;">
                                                        <a href="{{ route('actividades', $noticia->actividadNoticia->slug) }}">
                                                            <button style="
                                       border: 1px solid #000000;
                                       background-color: #dc3931;
                                       color: white;
                                       width: 256px;
                                       font-weight: bold;
                                       height: 48px;
                                       border-radius: 5px;
                                       font-size: 17px;
                                       cursor: pointer;
                                       ">Ir a la actividad</button>
                                                        </a>
                                                    </td>
                                                @endif

                                            </tr>

                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td align="center"
                                    style="/* margin-top: 40px; */padding: 35px;background-color: #000000;"
                                    bgcolor="#ffffff">
                                    <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%"
                                        style="max-width:600px;">
                                        <tbody>
                                            <tr>
                                                <td align="center">

                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="center"
                                                    style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 14px; font-weight: 400; line-height: 24px; padding: 5px 0 10px 0;">

                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="center"
                                                    style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 14px; font-weight: 400; line-height: 24px;">
                                                    <multiline label="Unsubscribe Text">
                                                        <p
                                                            style="font-size: 14px;font-weight: bold;line-height: 20px;color: #dc3931;">
                                                            © Club de Tennis i Pàdel Blanes
                                                        </p>
                                                    </multiline>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
        </tbody>
    </table>
    <table border="0" cellpadding="0" cellspacing="0" width="100%">
        <tbody>
        </tbody>
    </table>
</body>

</html>
