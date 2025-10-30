<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="x-apple-disable-message-reformatting">
  <title>Event Entry Pass</title>
  <style>
    html, body { margin:0 auto !important; padding:0 !important; height:100% !important; width:100% !important; }
    * { -ms-text-size-adjust:100%; -webkit-text-size-adjust:100%; }
    table, td { mso-table-lspace:0pt !important; mso-table-rspace:0pt !important; }
    img { -ms-interpolation-mode:bicubic; border:0; outline:none; text-decoration:none; }
    a { text-decoration:none; }
    @media screen and (max-width: 600px){
      .container{ width:100% !important; }
      .qr{ width: 240px !important; height: 240px !important; }
    }
  </style>
</head>
<body style="margin:0; padding:0; background:#f3f5f7;">
  <center role="article" aria-roledescription="email" lang="en" style="width:100%; background:#f3f5f7;">
    <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="background:#f3f5f7;">
      <tr>
        <td align="center">
          <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="600" class="container" style="width:600px; max-width:100%; background:#ffffff; border-radius:12px; overflow:hidden; box-shadow:0 6px 24px rgba(0,0,0,0.06); margin:24px;">

            <!-- Greeting / Instructions -->
            <tr>
              <td style="padding:28px 40px 8px 40px; font-family: Arial, Helvetica, sans-serif; color:#1a2430;">
                <p style="margin:0 0 10px; font-size:16px;">Hello {{ $name ?? 'Attendee' }},</p>
                <p style="margin:0 0 10px; font-size:16px; line-height:1.55; color:#2b3b4f;">
                  Thank you for registering to be part of the FAAN National Aviation Conference (HMO) 2025.<br>

                  We are excited about your interest in joining this year’s event! 
                </p>
                <p style="margin:0 0 10px; font-size:16px; line-height:1.55; color:#2b3b4f;">
                  Please note that registration does not automatically guarantee attendance. All submissions will be reviewed, and you’ll receive a confirmation email once your attendance is approved.<br><br>
                  Warm regards.
                </p>
                <p style="margin:0 0 10px; font-size:16px; line-height:1.55; color:#2b3b4f;">
                  The HMO 2025 Team<br>
                  Federal Airports Authority of Nigeria (FAAN)
                </p>
              </td>
            </tr>

            <!-- Centered QR Code like Polaroid -->
            <tr>
              {{-- <td align="center" style="padding:22px 24px;">
                <table role="presentation" cellspacing="0" cellpadding="0" border="0">
                  <tr>
                    <td align="center" style="background:#ffffff; border:1px solid #e5e9ef; border-radius:12px; padding:16px; box-shadow:0 4px 12px rgba(0,0,0,0.08);">
                      <div style="background:#fff; padding:12px; border:1px solid #ccc; border-radius:8px; text-align:center;">
                        <img src="{{ $message->embed($qrPath) }}" width="300" height="300" class="qr" alt="QR Code for {{ $name ?? 'Attendee' }}" style="display:block; width:300px; height:300px; max-width:100%; margin:0 auto;" />
                        <p style="margin-top:12px; font-size:16px; font-family: Arial, Helvetica, sans-serif; color:#333; font-weight:bold;">{{ $name ?? 'Attendee' }}</p>
                      </div>
                    </td>
                  </tr>
                </table>
              </td> --}}
            </tr>

            <!-- Footer note -->
            <tr>
              <td style="padding:0 40px 32px 40px; font-family: Arial, Helvetica, sans-serif; color:#5b6b7a;">
                <p style="margin:0; font-size:14px; line-height:1.5;">
                  If you have any issues at the venue, please provide your name <strong>{{ $name ?? '' }}</strong> to our support staff.
                </p>
              </td>
            </tr>

          </table>

          <div style="font-family: Arial, Helvetica, sans-serif; color:#9aa7b4; font-size:12px; margin:8px 24px 24px;">
            © {{ date('Y') }} {{ $organizer ?? 'HMO' }}. All rights reserved.
          </div>
        </td>
      </tr>
    </table>
  </center>
</body>
</html>
