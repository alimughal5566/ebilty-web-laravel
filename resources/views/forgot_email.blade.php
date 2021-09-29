<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="x-apple-disable-message-reformatting">
    <title></title>
    <!--[if mso]>
    <style>
        table {border-collapse:collapse;border-spacing:0;border:none;margin:0;}
        div, td {padding:0;}
        div {margin:0 !important;}
    </style>
    <noscript>
        <xml>
            <o:OfficeDocumentSettings>
                <o:PixelsPerInch>96</o:PixelsPerInch>
            </o:OfficeDocumentSettings>
        </xml>
    </noscript>
    <![endif]-->
    <style>
        table, td, div, h1, p {
            font-family: Arial, sans-serif;
        }
        @media screen and (max-width: 530px) {
            .unsub {
                display: block;
                padding: 8px;
                margin-top: 14px;
                border-radius: 6px;
                background-color: #555555;
                text-decoration: none !important;
                font-weight: bold;
            }
            .col-lge {
                max-width: 100% !important;
            }
        }
        @media screen and (min-width: 531px) {
            .col-sml {
                max-width: 27% !important;
            }
            .col-lge {
                max-width: 73% !important;
            }
        }
    </style>
</head>
<body style="margin:0;padding:0;word-spacing:normal;background-color:#939297;">
<div role="article" aria-roledescription="email" lang="en" style="text-size-adjust:100%;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;background-color:#939297;">
    <table role="presentation" style="width:100%;border:none;border-spacing:0;">
        <tr>
            <td align="center" style="padding:0;">
                <table role="presentation" align="center" style="width:600px;">
                    <tr>
                        <td>
                <table role="presentation" style="width:94%;max-width:600px;border:none;border-spacing:0;text-align:left;font-family:Arial,sans-serif;font-size:16px;line-height:22px;color:#363636;">
                    <tr>
                        <td style="padding:40px 30px 30px 30px;text-align:center;font-size:24px;font-weight:bold; background-color: white">
                            <a href="http://ebilty.com/" style="text-decoration:none;"><img src="https://ebilty.com/uploads/logos/company-logo.png" width="165" alt="Logo" style="width:80%;max-width:165px;height:auto;border:none;text-decoration:none;color:#ffffff;"></a>
                            <hr>
                        </td>
                    </tr>

                    <tr>
                        <td style="padding:35px 30px 11px 30px;font-size:0;background-color:#ffffff;border-bottom:1px solid #f0f0f5;border-color:rgba(201,201,207,.35);">

                            <table role="presentation" width="100%">
                                <tr>
                                    <td style="width:145px;" align="left" valign="top">

                            <div class="col-sml" style="display:inline-block;width:100%;max-width:145px;vertical-align:top;text-align:left;font-family:Arial,sans-serif;font-size:14px;color:#363636;">
                                <img src="{{asset('images/profile').'/'.$image}}" width="115" alt="" style="width:80%;max-width:115px;margin-bottom:20px;">
                            </div>
                            </td>
                            <td style="width:395px;padding-bottom:20px;" valign="top">
                            <![endif]-->
                            <div class="col-lge" style="display:inline-block;width:100%;max-width:395px;vertical-align:top;padding-bottom:20px;font-family:Arial,sans-serif;font-size:16px;line-height:22px;color:#363636;">
                                <h2>Dear {{$name}},</h2>
                                <p align="justify">You requested for forgot password OTP. Kindly enter it to change your password.</p>
                                <p>Your OTP is: <b>{{$otp}}</b></p>
                            </div>
                            </td>
                            </tr>
                            </table>
                        </td>
                    </tr>

                    <tr>
                        <td style="padding:30px;text-align:center;font-size:12px;background-color:#EC6D22;color:white;">
                            <p style="margin:0;font-size:14px;line-height:20px;">&reg; eBilty, 2021<br></p>
                        </td>
                    </tr>
                </table>
                </td>
                </tr>
                </table>
            </td>
        </tr>
    </table>
</div>
</body>
</html>
