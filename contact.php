 <?php
  error_reporting(0);

  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;
  require './PHPMailer-master/src/Exception.php';
  require './PHPMailer-master/src/PHPMailer.php';
  require './PHPMailer-master/src/SMTP.php';
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $FirstName  = $_POST["FirstName"];
    $LastName  = $_POST["LastName"];
    $CompanyName  = $_POST["CompanyName"];
    $Email  = $_POST["Email"];
    $category = $_POST["category"];
    $services = $_POST["services"];
    $month = $_POST["month"];
    $day = $_POST["day"];
    $year = $_POST["year"];
    $Message = $_POST["Message"];
    $Reach = $_POST["Reach"];
    if ($FirstName && $LastName && $CompanyName && $Email && $category && $services && $month && $day && $year && $Message && $Reach) {
      $name = $FirstName . ' ' . $LastName;
      $html = '
<html
  xmlns="http://www.w3.org/1999/xhtml"
  xmlns:o="urn:schemas-microsoft-com:office:office"
  style="
    width: 100%;
    font-family: `open sans`, `helvetica neue`, helvetica, arial, sans-serif;
    -webkit-text-size-adjust: 100%;
    -ms-text-size-adjust: 100%;
    padding: 0;
    margin: 0;
  "
  >
  <head>
    <meta charset="UTF-8" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="x-apple-disable-message-reformatting" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta content="telephone=no" name="format-detection" />
    <title>Nouveau message 2</title>
    <!--[if (mso 16)
      ]><style type="text/css">
        a {
          text-decoration: none;
        }
      </style><!
    [endif]-->
    <!--[if gte mso 9
      ]><style>
        sup {
          font-size: 100% !important;
        }
      </style><!
    [endif]-->
    <!--[if gte mso 9
      ]><xml>
        <o:OfficeDocumentSettings>
          <o:AllowPNG></o:AllowPNG> <o:PixelsPerInch>96</o:PixelsPerInch>
        </o:OfficeDocumentSettings>
      </xml><!
    [endif]-->
    <!--[if !mso]><!-- -->
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700,700i"
      rel="stylesheet"
    />
    <!--<![endif]-->
    <style type="text/css">
      #outlook a {
        padding: 0;
      }
      .ExternalClass {
        width: 100%;
      }
      .ExternalClass,
      .ExternalClass p,
      .ExternalClass span,
      .ExternalClass font,
      .ExternalClass td,
      .ExternalClass div {
        line-height: 100%;
      }
      .es-button {
        mso-style-priority: 100 !important;
        text-decoration: none !important;
      }
      a[x-apple-data-detectors] {
        color: inherit !important;
        text-decoration: none !important;
        font-size: inherit !important;
        font-family: inherit !important;
        font-weight: inherit !important;
        line-height: inherit !important;
      }
      .es-desk-hidden {
        display: none;
        float: left;
        overflow: hidden;
        width: 0;
        max-height: 0;
        line-height: 0;
        mso-hide: all;
      }
      [data-ogsb] .es-button {
        border-width: 0 !important;
        padding: 15px 30px 15px 30px !important;
      }
      @media only screen and (max-width: 600px) {
        p,
        ul li,
        ol li,
        a {
          line-height: 150% !important;
        }
        h1,
        h2,
        h3,
        h1 a,
        h2 a,
        h3 a {
          line-height: 120% !important;
        }
        h1 {
          font-size: 32px !important;
          text-align: center;
        }
        h2 {
          font-size: 26px !important;
          text-align: center;
        }
        h3 {
          font-size: 20px !important;
          text-align: center;
        }
        .es-header-body h1 a,
        .es-content-body h1 a,
        .es-footer-body h1 a {
          font-size: 32px !important;
        }
        .es-header-body h2 a,
        .es-content-body h2 a,
        .es-footer-body h2 a {
          font-size: 26px !important;
        }
        .es-header-body h3 a,
        .es-content-body h3 a,
        .es-footer-body h3 a {
          font-size: 20px !important;
        }
        .es-menu td a {
          font-size: 16px !important;
        }
        .es-header-body p,
        .es-header-body ul li,
        .es-header-body ol li,
        .es-header-body a {
          font-size: 16px !important;
        }
        .es-content-body p,
        .es-content-body ul li,
        .es-content-body ol li,
        .es-content-body a {
          font-size: 16px !important;
        }
        .es-footer-body p,
        .es-footer-body ul li,
        .es-footer-body ol li,
        .es-footer-body a {
          font-size: 16px !important;
        }
        .es-infoblock p,
        .es-infoblock ul li,
        .es-infoblock ol li,
        .es-infoblock a {
          font-size: 12px !important;
        }
        *[class="gmail-fix"] {
          display: none !important;
        }
        .es-m-txt-c,
        .es-m-txt-c h1,
        .es-m-txt-c h2,
        .es-m-txt-c h3 {
          text-align: center !important;
        }
        .es-m-txt-r,
        .es-m-txt-r h1,
        .es-m-txt-r h2,
        .es-m-txt-r h3 {
          text-align: right !important;
        }
        .es-m-txt-l,
        .es-m-txt-l h1,
        .es-m-txt-l h2,
        .es-m-txt-l h3 {
          text-align: left !important;
        }
        .es-m-txt-r img,
        .es-m-txt-c img,
        .es-m-txt-l img {
          display: inline !important;
        }
        .es-button-border {
          display: inline-block !important;
        }
        a.es-button,
        button.es-button {
          font-size: 16px !important;
          display: inline-block !important;
          border-width: 15px 30px 15px 30px !important;
        }
        .es-btn-fw {
          border-width: 10px 0px !important;
          text-align: center !important;
        }
        .es-adaptive table,
        .es-btn-fw,
        .es-btn-fw-brdr,
        .es-left,
        .es-right {
          width: 100% !important;
        }
        .es-content table,
        .es-header table,
        .es-footer table,
        .es-content,
        .es-footer,
        .es-header {
          width: 100% !important;
          max-width: 600px !important;
        }
        .es-adapt-td {
          display: block !important;
          width: 100% !important;
        }
        .adapt-img {
          width: 100% !important;
          height: auto !important;
        }
        .es-m-p0 {
          padding: 0px !important;
        }
        .es-m-p0r {
          padding-right: 0px !important;
        }
        .es-m-p0l {
          padding-left: 0px !important;
        }
        .es-m-p0t {
          padding-top: 0px !important;
        }
        .es-m-p0b {
          padding-bottom: 0 !important;
        }
        .es-m-p20b {
          padding-bottom: 20px !important;
        }
        .es-mobile-hidden,
        .es-hidden {
          display: none !important;
        }
        tr.es-desk-hidden,
        td.es-desk-hidden,
        table.es-desk-hidden {
          width: auto !important;
          overflow: visible !important;
          float: none !important;
          max-height: inherit !important;
          line-height: inherit !important;
        }
        tr.es-desk-hidden {
          display: table-row !important;
        }
        table.es-desk-hidden {
          display: table !important;
        }
        td.es-desk-menu-hidden {
          display: table-cell !important;
        }
        .es-menu td {
          width: 1% !important;
        }
        table.es-table-not-adapt,
        .esd-block-html table {
          width: auto !important;
        }
        table.es-social {
          display: inline-block !important;
        }
        table.es-social td {
          display: inline-block !important;
        }
      }
    </style>
  </head>
  <body
    style="
      width: 100%;
      font-family: `open sans`, `helvetica neue`, helvetica, arial, sans-serif;
      -webkit-text-size-adjust: 100%;
      -ms-text-size-adjust: 100%;
      padding: 0;
      margin: 0;
    "
  >
    <div class="es-wrapper-color" style="background-color: #eeeeee">
      <!--[if gte mso 9
        ]><v:background xmlns:v="urn:schemas-microsoft-com:vml" fill="t">
          <v:fill type="tile" color="#eeeeee"></v:fill> </v:background
      ><![endif]-->
      <table
        class="es-wrapper"
        width="100%"
        cellspacing="0"
        cellpadding="0"
        style="
          mso-table-lspace: 0pt;
          mso-table-rspace: 0pt;
          border-collapse: collapse;
          border-spacing: 0px;
          padding: 0;
          margin: 0;
          width: 100%;
          height: 100%;
          background-repeat: repeat;
          background-position: center top;
        "
      >
        <tbody>
          <tr style="border-collapse: collapse">
            <td valign="top" style="padding: 0; margin: 0">
              <table
                class="es-content"
                cellspacing="0"
                cellpadding="0"
                align="center"
                style="
                  mso-table-lspace: 0pt;
                  mso-table-rspace: 0pt;
                  border-collapse: collapse;
                  border-spacing: 0px;
                  table-layout: fixed !important;
                  width: 100%;
                "
              >
                <tbody>
                  <tr style="border-collapse: collapse"></tr>
                  <tr style="border-collapse: collapse">
                    <td align="center" style="padding: 0; margin: 0">
                      <table
                        class="es-header-body"
                        style="
                          mso-table-lspace: 0pt;
                          mso-table-rspace: 0pt;
                          border-collapse: collapse;
                          border-spacing: 0px;
                          background-color: #333333;
                          width: 800px;
                        "
                        cellspacing="0"
                        cellpadding="0"
                        bgcolor="#333333"
                        align="center"
                      >
                        <tbody>
                          <tr style="border-collapse: collapse">
                            <td
                              align="left"
                              style="
                                margin: 0;
                                padding-top: 35px;
                                padding-bottom: 35px;
                                padding-left: 35px;
                                padding-right: 35px;
                              "
                            >
                              <!--[if mso]><table style="width:730px" cellpadding="0" cellspacing="0"><tr><td style="width:440px" valign="top"><![endif]-->
                              <table
                                class="es-left"
                                cellspacing="0"
                                cellpadding="0"
                                align="left"
                                style="
                                  mso-table-lspace: 0pt;
                                  mso-table-rspace: 0pt;
                                  border-collapse: collapse;
                                  border-spacing: 0px;
                                  float: left;
                                "
                              >
                                <tbody>
                                  <tr style="border-collapse: collapse">
                                    <td
                                      class="es-m-p0r es-m-p20b"
                                      valign="top"
                                      align="center"
                                      style="
                                        padding: 0;
                                        margin: 0;
                                        width: 440px;
                                      "
                                    >
                                      <table
                                        width="100%"
                                        cellspacing="0"
                                        cellpadding="0"
                                        role="presentation"
                                        style="
                                          mso-table-lspace: 0pt;
                                          mso-table-rspace: 0pt;
                                          border-collapse: collapse;
                                          border-spacing: 0px;
                                        "
                                      >
                                        <tbody>
                                          <tr style="border-collapse: collapse">
                                            <td
                                              align="left"
                                              style="
                                                padding: 0;
                                                margin: 0;
                                                font-size: 0px;
                                              "
                                            >
                                              <img
                                                class="adapt-img"
                                                src="https://kkfquc.stripocdn.email/content/guids/CABINET_1ccc329967a633a55057a2b4c5667570/images/logo_1.png"
                                                alt=""
                                                style="
                                                  display: block;
                                                  border: 0;
                                                  outline: none;
                                                  text-decoration: none;
                                                  -ms-interpolation-mode: bicubic;
                                                "
                                                width="172"
                                                height="46"
                                              />
                                            </td>
                                          </tr>
                                        </tbody>
                                      </table>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                              <!--[if mso]></td><td style="width:20px"></td>
  <td style="width:270px" valign="top"><![endif]-->
                              <table
                                cellspacing="0"
                                cellpadding="0"
                                align="right"
                                style="
                                  mso-table-lspace: 0pt;
                                  mso-table-rspace: 0pt;
                                  border-collapse: collapse;
                                  border-spacing: 0px;
                                "
                              >
                                <tbody>
                                  <tr
                                    class="es-hidden"
                                    style="border-collapse: collapse"
                                  >
                                    <td
                                      class="es-m-p20b"
                                      align="left"
                                      style="
                                        padding: 0;
                                        margin: 0;
                                        width: 270px;
                                      "
                                    >
                                      <table
                                        width="100%"
                                        cellspacing="0"
                                        cellpadding="0"
                                        role="presentation"
                                        style="
                                          mso-table-lspace: 0pt;
                                          mso-table-rspace: 0pt;
                                          border-collapse: collapse;
                                          border-spacing: 0px;
                                        "
                                      >
                                        <tbody>
                                          <tr
                                            style="border-collapse: collapse"
                                          ></tr>
                                          <tr style="border-collapse: collapse">
                                            <td style="padding: 0; margin: 0">
                                              <table
                                                cellspacing="0"
                                                cellpadding="0"
                                                align="right"
                                                role="presentation"
                                                style="
                                                  mso-table-lspace: 0pt;
                                                  mso-table-rspace: 0pt;
                                                  border-collapse: collapse;
                                                  border-spacing: 0px;
                                                "
                                              >
                                                <tbody>
                                                  <tr
                                                    style="
                                                      border-collapse: collapse;
                                                    "
                                                  >
                                                    <td
                                                      align="left"
                                                      style="
                                                        padding: 0;
                                                        margin: 0;
                                                      "
                                                    >
                                                      <table
                                                        width="100%"
                                                        cellspacing="0"
                                                        cellpadding="0"
                                                        role="presentation"
                                                        style="
                                                          mso-table-lspace: 0pt;
                                                          mso-table-rspace: 0pt;
                                                          border-collapse: collapse;
                                                          border-spacing: 0px;
                                                        "
                                                      >
                                                        <tbody>
                                                          <tr
                                                            style="
                                                              border-collapse: collapse;
                                                            "
                                                          >
                                                            <td
                                                              align="right"
                                                              style="
                                                                padding: 0;
                                                                margin: 0;
                                                              "
                                                            >
                                                              <p
                                                                style="
                                                                  margin: 0;
                                                                  -webkit-text-size-adjust: none;
                                                                  -ms-text-size-adjust: none;
                                                                  mso-line-height-rule: exactly;
                                                                  font-family: `open
                                                                      sans`,
                                                                    `helvetica
                                                                      neue`,
                                                                    helvetica,
                                                                    arial,
                                                                    sans-serif;
                                                                  line-height: 21px;
                                                                  color: #ffffff;
                                                                  font-size: 14px;
                                                                "
                                                              >
                                                                +NEW
                                                                MESSAGE&nbsp;
                                                              </p>
                                                            </td>
                                                          </tr>
                                                        </tbody>
                                                      </table>
                                                    </td>
                                                    <td
                                                      valign="top"
                                                      align="left"
                                                      style="
                                                        padding: 0;
                                                        margin: 0;
                                                        padding-left: 10px;
                                                        font-size: 0px;
                                                      "
                                                    >
                                                      <img
                                                        src="https://kkfquc.stripocdn.email/content/guids/CABINET_1ccc329967a633a55057a2b4c5667570/images/message.png"
                                                        alt=""
                                                        style="
                                                          display: block;
                                                          border: 0;
                                                          outline: none;
                                                          text-decoration: none;
                                                          -ms-interpolation-mode: bicubic;
                                                        "
                                                        width="27"
                                                        height="27"
                                                      />
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
                              <!--[if mso]></td></tr></table><![endif]-->
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </td>
                  </tr>
                </tbody>
              </table>
              <table
                class="es-content"
                cellspacing="0"
                cellpadding="0"
                align="center"
                style="
                  mso-table-lspace: 0pt;
                  mso-table-rspace: 0pt;
                  border-collapse: collapse;
                  border-spacing: 0px;
                  table-layout: fixed !important;
                  width: 100%;
                "
              >
                <tbody>
                  <tr style="border-collapse: collapse">
                    <td align="center" style="padding: 0; margin: 0">
                      <table
                        class="es-content-body"
                        cellspacing="0"
                        cellpadding="0"
                        bgcolor="#ffffff"
                        align="center"
                        style="
                          mso-table-lspace: 0pt;
                          mso-table-rspace: 0pt;
                          border-collapse: collapse;
                          border-spacing: 0px;
                          background-color: #ffffff;
                          width: 800px;
                        "
                      >
                        <tbody>
                          <tr style="border-collapse: collapse">
                            <td
                              align="left"
                              style="
                                padding: 0;
                                margin: 0;
                                padding-left: 35px;
                                padding-right: 35px;
                                padding-top: 40px;
                              "
                            >
                              <table
                                width="100%"
                                cellspacing="0"
                                cellpadding="0"
                                style="
                                  mso-table-lspace: 0pt;
                                  mso-table-rspace: 0pt;
                                  border-collapse: collapse;
                                  border-spacing: 0px;
                                "
                              >
                                <tbody>
                                  <tr style="border-collapse: collapse">
                                    <td
                                      valign="top"
                                      align="center"
                                      style="
                                        padding: 0;
                                        margin: 0;
                                        width: 730px;
                                      "
                                    >
                                      <table
                                        width="100%"
                                        cellspacing="0"
                                        cellpadding="0"
                                        role="presentation"
                                        style="
                                          mso-table-lspace: 0pt;
                                          mso-table-rspace: 0pt;
                                          border-collapse: collapse;
                                          border-spacing: 0px;
                                        "
                                      >
                                        <tbody>
                                          <tr style="border-collapse: collapse">
                                            <td
                                              align="center"
                                              style="
                                                margin: 0;
                                                padding-top: 25px;
                                                padding-bottom: 25px;
                                                padding-left: 35px;
                                                padding-right: 35px;
                                                font-size: 0px;
                                              "
                                            >
                                              <a
                                                target="_blank"
                                                href="https://viewstripo.email/"
                                                style="
                                                  -webkit-text-size-adjust: none;
                                                  -ms-text-size-adjust: none;
                                                  mso-line-height-rule: exactly;
                                                  text-decoration: none;
                                                  color: #ed8e20;
                                                  font-size: 16px;
                                                "
                                                ><img
                                                  src="https://kkfquc.stripocdn.email/content/guids/CABINET_1ccc329967a633a55057a2b4c5667570/images/message_1.png"
                                                  alt=""
                                                  style="
                                                    display: block;
                                                    border: 0;
                                                    outline: none;
                                                    text-decoration: none;
                                                    -ms-interpolation-mode: bicubic;
                                                  "
                                                  width="120"
                                                  height="120"
                                              /></a>
                                            </td>
                                          </tr>
                                          <tr style="border-collapse: collapse">
                                            <td
                                              align="center"
                                              style="
                                                padding: 0;
                                                margin: 0;
                                                padding-bottom: 10px;
                                              "
                                            >
                                              <h2
                                                style="
                                                  margin: 0;
                                                  line-height: 36px;
                                                  mso-line-height-rule: exactly;
                                                  font-family: `open sans`,
                                                    `helvetica neue`, helvetica,
                                                    arial, sans-serif;
                                                  font-size: 30px;
                                                  font-style: normal;
                                                  font-weight: bold;
                                                  color: #333333;
                                                "
                                              >
                                                You received NEW Message from
                                                ' . $CompanyName . '
                                              </h2>
                                            </td>
                                          </tr>
                                          <tr style="border-collapse: collapse">
                                            <td
                                              style="
                                                padding: 0;
                                                margin: 0;
                                                padding-bottom: 25px;
                                                padding-top: 40px;
                                              "
                                            >
                                              <p
                                                style="
                                                  margin: 0;
                                                  -webkit-text-size-adjust: none;
                                                  -ms-text-size-adjust: none;
                                                  mso-line-height-rule: exactly;
                                                  font-family: `open sans`,
                                                    `helvetica neue`, helvetica,
                                                    arial, sans-serif;
                                                  line-height: 24px;
                                                  color: #333333;
                                                  font-size: 16px;
                                                  text-align: justify;
                                                "
                                              >
                                               ' .$Message. '
                                              </p>
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
                    </td>
                  </tr>
                </tbody>
              </table>
              <table
                class="es-content"
                cellspacing="0"
                cellpadding="0"
                align="center"
                style="
                  mso-table-lspace: 0pt;
                  mso-table-rspace: 0pt;
                  border-collapse: collapse;
                  border-spacing: 0px;
                  table-layout: fixed !important;
                  width: 100%;
                "
              >
                <tbody>
                  <tr style="border-collapse: collapse">
                    <td align="center" style="padding: 0; margin: 0">
                      <table
                        class="es-content-body"
                        cellspacing="0"
                        cellpadding="0"
                        bgcolor="#ffffff"
                        align="center"
                        style="
                          mso-table-lspace: 0pt;
                          mso-table-rspace: 0pt;
                          border-collapse: collapse;
                          border-spacing: 0px;
                          background-color: #ffffff;
                          width: 800px;
                        "
                      >
                        <tbody>
                          <tr style="border-collapse: collapse">
                            <td
                              align="left"
                              style="
                                padding: 0;
                                margin: 0;
                                padding-top: 20px;
                                padding-left: 35px;
                                padding-right: 35px;
                              "
                            >
                              <table
                                width="100%"
                                cellspacing="0"
                                cellpadding="0"
                                style="
                                  mso-table-lspace: 0pt;
                                  mso-table-rspace: 0pt;
                                  border-collapse: collapse;
                                  border-spacing: 0px;
                                "
                              >
                                <tbody>
                                  <tr style="border-collapse: collapse">
                                    <td
                                      valign="top"
                                      align="center"
                                      style="
                                        padding: 0;
                                        margin: 0;
                                        width: 730px;
                                      "
                                    >
                                      <table
                                        width="100%"
                                        cellspacing="0"
                                        cellpadding="0"
                                        role="presentation"
                                        style="
                                          mso-table-lspace: 0pt;
                                          mso-table-rspace: 0pt;
                                          border-collapse: collapse;
                                          border-spacing: 0px;
                                        "
                                      >
                                        <tbody>
                                          <tr style="border-collapse: collapse">
                                            <td
                                              bgcolor="#eeeeee"
                                              align="left"
                                              style="
                                                margin: 0;
                                                padding-top: 10px;
                                                padding-bottom: 10px;
                                                padding-left: 10px;
                                                padding-right: 10px;
                                              "
                                            >
                                              <table
                                                style="
                                                  mso-table-lspace: 0pt;
                                                  mso-table-rspace: 0pt;
                                                  border-collapse: collapse;
                                                  border-spacing: 0px;
                                                  width: 500px;
                                                "
                                                class="cke_show_border"
                                                cellspacing="1"
                                                cellpadding="1"
                                                border="0"
                                                align="left"
                                                role="presentation"
                                              >
                                                <tbody>
                                                  <tr
                                                    style="
                                                      border-collapse: collapse;
                                                    "
                                                  >
                                                    <td
                                                      width="80%"
                                                      style="
                                                        padding: 0;
                                                        margin: 0;
                                                      "
                                                    >
                                                      <h4
                                                        style="
                                                          margin: 0;
                                                          line-height: 120%;
                                                          mso-line-height-rule: exactly;
                                                          font-family: `open
                                                              sans`,
                                                            `helvetica neue`,
                                                            helvetica, arial,
                                                            sans-serif;
                                                        "
                                                      >
                                                        Personal Message Details
                                                        :
                                                      </h4>
                                                    </td>
                                                    <td
                                                      width="20%"
                                                      style="
                                                        padding: 0;
                                                        margin: 0;
                                                      "
                                                    >
                                                      <h4
                                                        style="
                                                          margin: 0;
                                                          line-height: 120%;
                                                          mso-line-height-rule: exactly;
                                                          font-family: `open
                                                              sans`,
                                                            `helvetica neue`,
                                                            helvetica, arial,
                                                            sans-serif;
                                                        "
                                                      >
                                                        <br />
                                                      </h4>
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
                            </td>
                          </tr>
                          <tr style="border-collapse: collapse">
                            <td
                              align="left"
                              style="
                                padding: 0;
                                margin: 0;
                                padding-left: 35px;
                                padding-right: 35px;
                              "
                            >
                              <table
                                width="100%"
                                cellspacing="0"
                                cellpadding="0"
                                style="
                                  mso-table-lspace: 0pt;
                                  mso-table-rspace: 0pt;
                                  border-collapse: collapse;
                                  border-spacing: 0px;
                                "
                              >
                                <tbody>
                                  <tr style="border-collapse: collapse">
                                    <td
                                      valign="top"
                                      align="center"
                                      style="
                                        padding: 0;
                                        margin: 0;
                                        width: 730px;
                                      "
                                    >
                                      <table
                                        width="100%"
                                        cellspacing="0"
                                        cellpadding="0"
                                        role="presentation"
                                        style="
                                          mso-table-lspace: 0pt;
                                          mso-table-rspace: 0pt;
                                          border-collapse: collapse;
                                          border-spacing: 0px;
                                        "
                                      >
                                        <tbody>
                                          <tr style="border-collapse: collapse">
                                            <td
                                              align="left"
                                              style="
                                                margin: 0;
                                                padding-top: 10px;
                                                padding-bottom: 10px;
                                                padding-left: 10px;
                                                padding-right: 10px;
                                              "
                                            >
                                              <table
                                                style="
                                                  mso-table-lspace: 0pt;
                                                  mso-table-rspace: 0pt;
                                                  border-collapse: collapse;
                                                  border-spacing: 0px;
                                                  width: 500px;
                                                "
                                                class="cke_show_border"
                                                cellspacing="1"
                                                cellpadding="1"
                                                border="0"
                                                align="left"
                                                role="presentation"
                                              >
                                                <tbody>
                                                  <tr
                                                    style="
                                                      border-collapse: collapse;
                                                    "
                                                  >
                                                    <td
                                                      style="
                                                        padding: 5px 10px 5px 0;
                                                        margin: 0;
                                                      "
                                                      width="80%"
                                                      align="left"
                                                    >
                                                      <p
                                                        style="
                                                          margin: 0;
                                                          -webkit-text-size-adjust: none;
                                                          -ms-text-size-adjust: none;
                                                          mso-line-height-rule: exactly;
                                                          font-family: `open
                                                              sans`,
                                                            `helvetica neue`,
                                                            helvetica, arial,
                                                            sans-serif;
                                                          line-height: 24px;
                                                          color: #333333;
                                                          font-size: 16px;
                                                        "
                                                      >
                                                        Email Address
                                                      </p>
                                                    </td>
                                                    <td
                                                      style="
                                                        padding: 5px 0;
                                                        margin: 0;
                                                      "
                                                      width="20%"
                                                      align="left"
                                                    >
                                                      <p
                                                        style="
                                                          margin: 0;
                                                          -webkit-text-size-adjust: none;
                                                          -ms-text-size-adjust: none;
                                                          mso-line-height-rule: exactly;
                                                          font-family: `open
                                                              sans`,
                                                            `helvetica neue`,
                                                            helvetica, arial,
                                                            sans-serif;
                                                          line-height: 24px;
                                                          color: #333333;
                                                          font-size: 16px;
                                                        "
                                                      >
                                                        ' . $Email . '
                                                      </p>
                                                    </td>
                                                  </tr>
                                                  <tr
                                                    style="
                                                      border-collapse: collapse;
                                                    "
                                                  >
                                                    <td
                                                      style="
                                                        padding: 5px 10px 5px 0;
                                                        margin: 0;
                                                      "
                                                      width="80%"
                                                      align="left"
                                                    >
                                                      <p
                                                        style="
                                                          margin: 0;
                                                          -webkit-text-size-adjust: none;
                                                          -ms-text-size-adjust: none;
                                                          mso-line-height-rule: exactly;
                                                          font-family: `open
                                                              sans`,
                                                            `helvetica neue`,
                                                            helvetica, arial,
                                                            sans-serif;
                                                          line-height: 24px;
                                                          color: #333333;
                                                          font-size: 16px;
                                                        "
                                                      >
                                                        Company name
                                                      </p>
                                                    </td>
                                                    <td
                                                      style="
                                                        padding: 5px 0;
                                                        margin: 0;
                                                      "
                                                      width="20%"
                                                      align="left"
                                                    >
                                                      <p
                                                        style="
                                                          margin: 0;
                                                          -webkit-text-size-adjust: none;
                                                          -ms-text-size-adjust: none;
                                                          mso-line-height-rule: exactly;
                                                          font-family: `open
                                                              sans`,
                                                            `helvetica neue`,
                                                            helvetica, arial,
                                                            sans-serif;
                                                          line-height: 24px;
                                                          color: #333333;
                                                          font-size: 16px;
                                                        "
                                                      >
                                                        ' . $CompanyName . '
                                                      </p>
                                                    </td>
                                                  </tr>
                                                  <tr
                                                    style="
                                                      border-collapse: collapse;
                                                    "
                                                  >
                                                    <td
                                                      style="
                                                        padding: 5px 10px 5px 0;
                                                        margin: 0;
                                                      "
                                                      width="80%"
                                                      align="left"
                                                    >
                                                      <p
                                                        style="
                                                          margin: 0;
                                                          -webkit-text-size-adjust: none;
                                                          -ms-text-size-adjust: none;
                                                          mso-line-height-rule: exactly;
                                                          font-family: `open
                                                              sans`,
                                                            `helvetica neue`,
                                                            helvetica, arial,
                                                            sans-serif;
                                                          line-height: 24px;
                                                          color: #333333;
                                                          font-size: 16px;
                                                        "
                                                      >
                                                        FullName
                                                      </p>
                                                    </td>
                                                    <td
                                                      style="
                                                        padding: 5px 0;
                                                        margin: 0;
                                                      "
                                                      width="20%"
                                                      align="left"
                                                    >
                                                      <p
                                                        style="
                                                          margin: 0;
                                                          -webkit-text-size-adjust: none;
                                                          -ms-text-size-adjust: none;
                                                          mso-line-height-rule: exactly;
                                                          font-family: `open
                                                              sans`,
                                                            `helvetica neue`,
                                                            helvetica, arial,
                                                            sans-serif;
                                                          line-height: 24px;
                                                          color: #333333;
                                                          font-size: 16px;
                                                        "
                                                      >
                                                        ' . $name . '
                                                      </p>
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
                                  <tr style="border-collapse: collapse">
                                    <td
                                      valign="top"
                                      align="center"
                                      style="
                                        padding: 0;
                                        margin: 0;
                                        width: 530px;
                                      "
                                    >
                                      <table
                                        width="100%"
                                        cellspacing="0"
                                        cellpadding="0"
                                        role="presentation"
                                        style="
                                          mso-table-lspace: 0pt;
                                          mso-table-rspace: 0pt;
                                          border-collapse: collapse;
                                          border-spacing: 0px;
                                        "
                                      >
                                        <tbody>
                                          <tr style="border-collapse: collapse">
                                            <td
                                              bgcolor="#eeeeee"
                                              align="left"
                                              style="
                                                margin: 0;
                                                padding-top: 10px;
                                                padding-bottom: 10px;
                                                padding-left: 10px;
                                                padding-right: 10px;
                                              "
                                            >
                                              <table
                                                style="
                                                  mso-table-lspace: 0pt;
                                                  mso-table-rspace: 0pt;
                                                  border-collapse: collapse;
                                                  border-spacing: 0px;
                                                  width: 500px;
                                                "
                                                class="cke_show_border"
                                                cellspacing="1"
                                                cellpadding="1"
                                                border="0"
                                                align="left"
                                                role="presentation"
                                              >
                                                <tbody>
                                                  <tr
                                                    style="
                                                      border-collapse: collapse;
                                                    "
                                                  >
                                                    <td
                                                      width="80%"
                                                      style="
                                                        padding: 0;
                                                        margin: 0;
                                                      "
                                                    >
                                                      <h4
                                                        style="
                                                          margin: 0;
                                                          line-height: 120%;
                                                          mso-line-height-rule: exactly;
                                                          font-family: `open
                                                              sans`,
                                                            `helvetica neue`,
                                                            helvetica, arial,
                                                            sans-serif;
                                                        "
                                                      >
                                                        Service Message Details
                                                        :
                                                      </h4>
                                                    </td>
                                                    <td
                                                      width="20%"
                                                      style="
                                                        padding: 0;
                                                        margin: 0;
                                                      "
                                                    >
                                                      <h4
                                                        style="
                                                          margin: 0;
                                                          line-height: 120%;
                                                          mso-line-height-rule: exactly;
                                                          font-family: `open
                                                              sans`,
                                                            `helvetica neue`,
                                                            helvetica, arial,
                                                            sans-serif;
                                                        "
                                                      >
                                                        <br />
                                                      </h4>
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
                                  <tr style="border-collapse: collapse">
                                    <td
                                      valign="top"
                                      align="center"
                                      style="
                                        padding: 0;
                                        margin: 0;
                                        width: 530px;
                                      "
                                    >
                                      <table
                                        width="100%"
                                        cellspacing="0"
                                        cellpadding="0"
                                        role="presentation"
                                        style="
                                          mso-table-lspace: 0pt;
                                          mso-table-rspace: 0pt;
                                          border-collapse: collapse;
                                          border-spacing: 0px;
                                        "
                                      >
                                        <tbody>
                                          <tr style="border-collapse: collapse">
                                            <td
                                              align="left"
                                              style="padding: 10px; margin: 0"
                                            >
                                              <table
                                                style="
                                                  mso-table-lspace: 0pt;
                                                  mso-table-rspace: 0pt;
                                                  border-collapse: collapse;
                                                  border-spacing: 0px;
                                                  width: 500px;
                                                "
                                                class="cke_show_border"
                                                cellspacing="1"
                                                cellpadding="1"
                                                border="0"
                                                align="left"
                                                role="presentation"
                                              >
                                                <tbody>
                                                  <tr
                                                    style="
                                                      border-collapse: collapse;
                                                    "
                                                  >
                                                    <td
                                                      style="
                                                        padding: 5px 10px 5px 0;
                                                        margin: 0;
                                                      "
                                                      width="80%"
                                                      align="left"
                                                    >
                                                      <p
                                                        style="
                                                          margin: 0;
                                                          -webkit-text-size-adjust: none;
                                                          -ms-text-size-adjust: none;
                                                          mso-line-height-rule: exactly;
                                                          font-family: `open
                                                              sans`,
                                                            `helvetica neue`,
                                                            helvetica, arial,
                                                            sans-serif;
                                                          line-height: 24px;
                                                          color: #333333;
                                                          font-size: 16px;
                                                        "
                                                      >
                                                        Category
                                                      </p>
                                                    </td>
                                                    <td
                                                      style="
                                                        padding: 5px 0;
                                                        margin: 0;
                                                      "
                                                      width="20%"
                                                      align="left"
                                                    >
                                                      <p
                                                        style="
                                                          margin: 0;
                                                          -webkit-text-size-adjust: none;
                                                          -ms-text-size-adjust: none;
                                                          mso-line-height-rule: exactly;
                                                          font-family: `open
                                                              sans`,
                                                            `helvetica neue`,
                                                            helvetica, arial,
                                                            sans-serif;
                                                          line-height: 24px;
                                                          color: #333333;
                                                          font-size: 16px;
                                                        "
                                                      >
                                                        
                                                      </p>
                                                    </td>
                                                  </tr>
                                                  <tr
                                                    style="
                                                      border-collapse: collapse;
                                                    "
                                                  >
                                                    <td
                                                      style="
                                                        padding: 5px 10px 5px 0;
                                                        margin: 0;
                                                      "
                                                      width="80%"
                                                      align="left"
                                                    >
                                                      <p
                                                        style="
                                                          margin: 0;
                                                          -webkit-text-size-adjust: none;
                                                          -ms-text-size-adjust: none;
                                                          mso-line-height-rule: exactly;
                                                          font-family: `open
                                                              sans`,
                                                            `helvetica neue`,
                                                            helvetica, arial,
                                                            sans-serif;
                                                          line-height: 24px;
                                                          color: #333333;
                                                          font-size: 16px;
                                                        "
                                                      >
                                                        Services types
                                                      </p>
                                                    </td>
                                                    <td
                                                      style="
                                                        padding: 5px 0;
                                                        margin: 0;
                                                      "
                                                      width="20%"
                                                      align="left"
                                                    >
                                                      <p
                                                        style="
                                                          margin: 0;
                                                          -webkit-text-size-adjust: none;
                                                          -ms-text-size-adjust: none;
                                                          mso-line-height-rule: exactly;
                                                          font-family: `open
                                                              sans`,
                                                            `helvetica neue`,
                                                            helvetica, arial,
                                                            sans-serif;
                                                          line-height: 24px;
                                                          color: #333333;
                                                          font-size: 16px;
                                                        "
                                                      >
                                                        Uniforms personalized
                                                        service
                                                      </p>
                                                    </td>
                                                  </tr>
                                                  <tr
                                                    style="
                                                      border-collapse: collapse;
                                                    "
                                                  >
                                                    <td
                                                      style="
                                                        padding: 5px 10px 5px 0;
                                                        margin: 0;
                                                      "
                                                      width="80%"
                                                      align="left"
                                                    >
                                                      <p
                                                        style="
                                                          margin: 0;
                                                          -webkit-text-size-adjust: none;
                                                          -ms-text-size-adjust: none;
                                                          mso-line-height-rule: exactly;
                                                          font-family: `open
                                                              sans`,
                                                            `helvetica neue`,
                                                            helvetica, arial,
                                                            sans-serif;
                                                          line-height: 24px;
                                                          color: #333333;
                                                          font-size: 16px;
                                                        "
                                                      >
                                                        Desired Launch Date
                                                      </p>
                                                    </td>
                                                    <td
                                                      style="
                                                        padding: 5px 0;
                                                        margin: 0;
                                                      "
                                                      width="20%"
                                                      align="left"
                                                    >
                                                      <p
                                                        style="
                                                          margin: 0;
                                                          -webkit-text-size-adjust: none;
                                                          -ms-text-size-adjust: none;
                                                          mso-line-height-rule: exactly;
                                                          font-family: `open
                                                              sans`,
                                                            `helvetica neue`,
                                                            helvetica, arial,
                                                            sans-serif;
                                                          line-height: 24px;
                                                          color: #333333;
                                                          font-size: 16px;
                                                        "
                                                      >
                                                        20/01/2023
                                                      </p>
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
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </td>
                  </tr>
                </tbody>
              </table>
              <table
                cellpadding="0"
                cellspacing="0"
                class="es-footer"
                align="center"
                style="
                  mso-table-lspace: 0pt;
                  mso-table-rspace: 0pt;
                  border-collapse: collapse;
                  border-spacing: 0px;
                  table-layout: fixed !important;
                  width: 100%;
                  background-color: transparent;
                  background-repeat: repeat;
                  background-position: center top;
                "
              >
                <tbody>
                  <tr style="border-collapse: collapse">
                    <td align="center" style="padding: 0; margin: 0">
                      <table
                        class="es-footer-body"
                        cellspacing="0"
                        cellpadding="0"
                        align="center"
                        style="
                          mso-table-lspace: 0pt;
                          mso-table-rspace: 0pt;
                          border-collapse: collapse;
                          border-spacing: 0px;
                          background-color: #ffffff;
                          border-top: 1px solid transparent;
                          border-right: 1px solid transparent;
                          border-left: 1px solid transparent;
                          width: 800px;
                          border-bottom: 1px solid transparent;
                        "
                      >
                        <tbody>
                          <tr style="border-collapse: collapse">
                            <td
                              align="left"
                              style="
                                margin: 0;
                                padding-top: 35px;
                                padding-left: 35px;
                                padding-right: 35px;
                                padding-bottom: 40px;
                              "
                            >
                              <table
                                width="100%"
                                cellspacing="0"
                                cellpadding="0"
                                style="
                                  mso-table-lspace: 0pt;
                                  mso-table-rspace: 0pt;
                                  border-collapse: collapse;
                                  border-spacing: 0px;
                                "
                              >
                                <tbody>
                                  <tr style="border-collapse: collapse">
                                    <td
                                      valign="top"
                                      align="center"
                                      style="
                                        padding: 0;
                                        margin: 0;
                                        width: 728px;
                                      "
                                    >
                                      <table
                                        width="100%"
                                        cellspacing="0"
                                        cellpadding="0"
                                        role="presentation"
                                        style="
                                          mso-table-lspace: 0pt;
                                          mso-table-rspace: 0pt;
                                          border-collapse: collapse;
                                          border-spacing: 0px;
                                        "
                                      >
                                        <tbody>
                                          <tr style="border-collapse: collapse">
                                            <td
                                              esdev-links-color="#777777"
                                              align="center"
                                              class="es-m-txt-c"
                                              style="
                                                padding: 0;
                                                margin: 0;
                                                padding-bottom: 5px;
                                              "
                                            >
                                              <p
                                                style="
                                                  margin: 0;
                                                  -webkit-text-size-adjust: none;
                                                  -ms-text-size-adjust: none;
                                                  mso-line-height-rule: exactly;
                                                  font-family: `open sans`,
                                                    `helvetica neue`, helvetica,
                                                    arial, sans-serif;
                                                  line-height: 21px;
                                                  color: #777777;
                                                  font-size: 14px;
                                                "
                                              >
                                                if you notice something not
                                                going well or some miss
                                                alingement make sure to contact
                                                us
                                                <strong
                                                  ><u
                                                    ><a
                                                      target="_blank"
                                                      href="mailto:support@weblionz.com?subject=Fashion%20Expertise%20Email%20Template%20problem"
                                                      style="
                                                        -webkit-text-size-adjust: none;
                                                        -ms-text-size-adjust: none;
                                                        mso-line-height-rule: exactly;
                                                        text-decoration: none;
                                                        color: #333333;
                                                        font-size: 14px;
                                                      "
                                                      >HERE</a
                                                    ></u
                                                  ></strong
                                                >&nbsp;&nbsp;
                                              </p>
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
                    </td>
                  </tr>
                </tbody>
              </table>
              <table
                class="es-content"
                cellspacing="0"
                cellpadding="0"
                align="center"
                style="
                  mso-table-lspace: 0pt;
                  mso-table-rspace: 0pt;
                  border-collapse: collapse;
                  border-spacing: 0px;
                  table-layout: fixed !important;
                  width: 100%;
                "
              >
                <tbody>
                  <tr style="border-collapse: collapse">
                    <td align="center" style="padding: 0; margin: 0">
                      <table
                        class="es-content-body"
                        style="
                          mso-table-lspace: 0pt;
                          mso-table-rspace: 0pt;
                          border-collapse: collapse;
                          border-spacing: 0px;
                          background-color: transparent;
                          width: 800px;
                        "
                        cellspacing="0"
                        cellpadding="0"
                        align="center"
                      >
                        <tbody>
                          <tr style="border-collapse: collapse">
                            <td
                              align="left"
                              style="
                                margin: 0;
                                padding-left: 20px;
                                padding-right: 20px;
                                padding-top: 30px;
                                padding-bottom: 30px;
                              "
                            >
                              <table
                                width="100%"
                                cellspacing="0"
                                cellpadding="0"
                                style="
                                  mso-table-lspace: 0pt;
                                  mso-table-rspace: 0pt;
                                  border-collapse: collapse;
                                  border-spacing: 0px;
                                "
                              >
                                <tbody>
                                  <tr style="border-collapse: collapse">
                                    <td
                                      valign="top"
                                      align="center"
                                      style="
                                        padding: 0;
                                        margin: 0;
                                        width: 760px;
                                      "
                                    >
                                      <table
                                        width="100%"
                                        cellspacing="0"
                                        cellpadding="0"
                                        role="presentation"
                                        style="
                                          mso-table-lspace: 0pt;
                                          mso-table-rspace: 0pt;
                                          border-collapse: collapse;
                                          border-spacing: 0px;
                                        "
                                      >
                                        <tbody>
                                          <tr style="border-collapse: collapse">
                                            <td
                                              class="es-infoblock made_with"
                                              align="center"
                                              style="
                                                padding: 0;
                                                margin: 0;
                                                line-height: 0px;
                                                font-size: 0px;
                                                color: #cccccc;
                                              "
                                            >
                                              <a
                                                target="_blank"
                                                href="https://fashionexpertise.agency"
                                                style="
                                                  -webkit-text-size-adjust: none;
                                                  -ms-text-size-adjust: none;
                                                  mso-line-height-rule: exactly;
                                                  text-decoration: none;
                                                  color: #cccccc;
                                                  font-size: 12px;
                                                "
                                                ><img
                                                  src="https://kkfquc.stripocdn.email/content/guids/CABINET_1ccc329967a633a55057a2b4c5667570/images/logo.png"
                                                  alt=""
                                                  width="180"
                                                  style="
                                                    display: block;
                                                    border: 0;
                                                    outline: none;
                                                    text-decoration: none;
                                                    -ms-interpolation-mode: bicubic;
                                                  "
                                                  height="48"
                                              /></a>
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
                    </td>
                  </tr>
                </tbody>
              </table>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </body>
</html>
';
      $mail = new PHPMailer(true);
      try {
        //Server settings
        $mail->isSMTP();
        $mail->Host       = 'smtp.titan.email';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'contact@weblionz.com';
        $mail->Password   = 'rocket@magic147.com';
        $mail->SMTPSecure = 'ssl';
        $mail->Port       = 465;

        //Recipients
        $mail->setFrom('contact@weblionz.com', 'Weblionz Team');
        $mail->addAddress('an.behhari@gmail.com', 'Joe User');
        $mail->addAddress('anasbehhari@weblionz.com', 'Joe User');
        // Attachments
        // Content
        $mail->isHTML(true);
        $mail->Subject = "New Message from $CompanyName |fashionExpersite.agency website $day/$month/$year.";
        $mail->Body    = $html;
        $mail->send();
        $success = true;
      } catch (Exception $e) {
        header('location:contact');
      }
    }
  }
  ?>
 <!DOCTYPE html>
 <html lang="en">

 <head>
   <meta charset="UTF-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <link rel="stylesheet" href="css/contact.css" />
   <title>Welcome to FashionExpertise.agency — Fashion Design & Consulting | contact Page </title>
   <link rel="apple-touch-icon" sizes="180x180" href="./media/icons/apple-touch-icon.png">
   <link rel="icon" type="image/png" sizes="32x32" href="./media/icons/favicon-32x32.png">
   <link rel="icon" type="image/png" sizes="16x16" href="./media/icons/favicon-16x16.png">
   <link rel="manifest" href="./media/icons/site.webmanifest">
 </head>

 <body>
   <div class="loader">
     <div class="con-1">
       <div class="bc"></div>
       <div class="con">
         <img src="media/logo.svg" alt="" />
       </div>
       <div>Please wait</div>
     </div>
   </div>

   <?php
    if ($success) {
      echo '<div class="popup">
    Thank you for your Message.
  </div>';
    }
    ?>
   <section id="Header">
     <header class="header">
       <div class="logo">
         <a href="./">
           <img src="media/logo.svg" alt="" />
         </a>
       </div>
       <ul class="navBar">
         <li>
           <a href="./">Home</a>
         </li>
         <li>
           <a href="./#whyus">Why us</a>
         </li>
         <li>
           <a href="./#whatwedo">What we do</a>
         </li>
         <li>
           <a href="./#ourservices">Our services</a>
         </li>
         <li>
           <a href="./#ourclients">Our clients</a>
         </li>
       </ul>
       <input type="checkbox" id="mobile-menu-toggle" class="mobile-menu-checkbox" hidden />
       <label for="mobile-menu-toggle" class="mobile-in">
         <span></span>
         <span></span>
         <span></span>
       </label>
     </header>
     <div class="title">
       <h1>Contact</h1>
     </div>
   </section>
   <section id="contactus">
     <div class="container-hld">
       <div class="lf col">
         <div class="title">
           <h2>Get A Quote</h2>
         </div>
         <form method="POST">
           <div class="input divided">
             <h4 class="required-field">Name</h4>
             <div class="inputs">
               <div class="input-field">
                 <input type="text" class="FirstName" name="FirstName" id="FirstName" required />
                 <label for="FirstName">First Name</label>
               </div>
               <div class="input-field">
                 <input type="text" class="LastName" name="LastName" id="LastName" required />
                 <label for="LastName">Last Name</label>
               </div>
             </div>
           </div>
           <div class="input">
             <label for="CompanyName" class="CompanyName in">Company Name</label>
             <input type="text" class="CompanyName" id="CompanyName" name="CompanyName" required />
           </div>
           <div class="input">
             <label for="Email" class="Email required-field in">Email</label>
             <input type="email" class="Email" id="Email" name="Email" required />
           </div>
           <div class="input">
             <label for="category" class="category required-field in bt-0">Category</label>
             <select name="category" id="category" required>
               <option value="Menswear">Menswear</option>
               <option value="Womenswear">Womenswear</option>
               <option value="Childrenswear">Childrenswear</option>
               <option value="Footwear">Footwear</option>
               <option selected value="Multiple">Multiple Categories</option>
             </select>
           </div>
           <div class="input">
             <label for="services" class="services required-field in bt-0">Services</label>
             <select name="services" id="services" required>
               <option value="Brand conception">
                 Brand conception
               </option>
               <option value="Reaserches and developement">Reaserches and developement</option>
               <option value="Brand refreshement">
                 Brand refreshement
               </option>
               <option value="Uniforms personalized service">
                 Uniforms personalized service.
               </option>
               <option selected value="Multiple">Multiple Categories</option>
             </select>
           </div>
           <div class="input">
             <label class="services in bt-0">Desired Launch Date</label>
             <small>*If Launching.</small>
             <div class="input date">
               <div class="inp month">
                 <input type="number" id="month" class="month" name="month" max="12" min="1" required />
                 <label for="month">MM</label>
               </div>
               <div class="inp day">
                 <input type="number" id="day" class="day" name="day" max="31" min="1" required />
                 <label for="day">DD</label>
               </div>
               <div class="inp year">
                 <input type="number" id="year" class="year" name="year" max="2027" min="2021" required />
                 <label for="year">YYYY</label>
               </div>
             </div>
           </div>
           <div class="input">
             <label for="Message" class="Message required-field in bt-0">Message</label>
             <small>Please share a bit more.</small>
             <textarea name="Message" id="Message" cols="20" rows="5" required></textarea>
           </div>
           <div class="input">
             <label for="Reach" class="Reach in bt-0">How did you hear about us?</label>
             <select name="Reach" id="Reach" required>
               <option value="Facebook">Facebook</option>
               <option value="Direct Referral">Direct Referral</option>
               <option value="LinkedIn">LinkedIn</option>
               <option value="Instagram">Instagram</option>
               <option value="Word of Mouth">Word of Mouth</option>
               <option value="Google Search">Google Search</option>
               <option value="Foursource">Foursource</option>
               <option value="prefer not to say">prefer not to say</option>
               <option value="Other">Other</option>
             </select>
           </div>
           <div class="input">
             <button type="submit">Send now</button>
           </div>
         </form>
       </div>
       <div class="rh col">
         <div class="title">
           <h2>Contact Us</h2>
         </div>
         <div class="info-contacts">
           <div class="con">
             <a href="tel:+212661173921">Call center: <span><b>212 661 173921</b></span></a>
             <a href="mailto:hello@fashionExpertise.agency" class="email">hello@fashionExpertise.agency</a>
           </div>
           <div class="con">
             <span><b>Fashion Expertise Agency Design & Consulting</b> </span>
             <span class="address">8, Rue Moulay Rachid, APPT 7 Hassan Rabat</span>
           </div>
         </div>
         <div class="map">
           <iframe id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3324.1349872534593!2d-7.6075359845957715!3d33.57584428073835!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda7cd5a3b525615%3A0xd672d4da40302751!2sRue%20Moulay%20Rachid%D8%8C%20Dar-el-Beida%2020250%2C%20Morocco!5e0!3m2!1sen!2sus!4v1640290864852!5m2!1sen!2sus" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
         </div>
       </div>
     </div>
   </section>
   <footer>
     <div class="container-footer">
       <div class="logo section">
         <div class="center">
           <img src="media/logo.svg" alt="" />
         </div>
       </div>
       <div class="about-us section">
         <div class="center">
           <div class="tit">
             <h3>About us</h3>
             <div class="line"></div>
           </div>
           <p class="description">
             <b>FashionExpertise Agency</b> Have mush planned to the
             future,working with great clients and continued Fashion
             industry.If you’d like to join our team.
           </p>
           <div class="social-media">
             <a href="" class="sc">
               <svg width="15" height="15" viewBox="0 0 15 15" xmlns="http://www.w3.org/2000/svg">
                 <path d="M4.24194 7.989H5.88618V14.7581C5.88618 14.8917 5.99447 15 6.12811 15H8.91598C9.04963 15 9.15792 14.8917 9.15792 14.7581V8.02089H11.0481C11.171 8.02089 11.2744 7.92866 11.2885 7.80658L11.5755 5.31455C11.5834 5.24598 11.5617 5.17732 11.5158 5.12589C11.4699 5.0744 11.4042 5.04494 11.3352 5.04494H9.15802V3.48281C9.15802 3.0119 9.41156 2.77311 9.91169 2.77311C9.98297 2.77311 11.3352 2.77311 11.3352 2.77311C11.4689 2.77311 11.5772 2.66477 11.5772 2.53118V0.243726C11.5772 0.110081 11.4689 0.00179032 11.3352 0.00179032H9.37339C9.35955 0.0011129 9.32882 0 9.28353 0C8.94313 0 7.75992 0.0668225 6.82527 0.926661C5.78969 1.8795 5.93365 3.02037 5.96805 3.21818V5.04489H4.24194C4.10829 5.04489 4 5.15318 4 5.28682V7.74702C4 7.88066 4.10829 7.989 4.24194 7.989Z" />
               </svg>
             </a>
             <a href="" class="sc">
               <svg width="16" height="17" viewBox="0 0 16 17" xmlns="http://www.w3.org/2000/svg">
                 <path d="M13.9647 5.8825C13.9579 5.34602 13.8634 4.81488 13.6853 4.31283C13.5309 3.88935 13.295 3.50476 12.9928 3.18362C12.6905 2.86249 12.3286 2.61187 11.93 2.44779C11.4636 2.26175 10.9708 2.16115 10.4727 2.15029C9.83133 2.11983 9.628 2.11133 8 2.11133C6.372 2.11133 6.16333 2.11133 5.52667 2.15029C5.02877 2.16123 4.53623 2.26183 4.07 2.44779C3.67137 2.61176 3.30935 2.86233 3.00709 3.18348C2.70483 3.50463 2.46899 3.88929 2.31467 4.31283C2.13922 4.80805 2.04475 5.33149 2.03533 5.86054C2.00667 6.54266 1.998 6.7587 1.998 8.48845C1.998 10.2182 1.998 10.4392 2.03533 11.1164C2.04533 11.6462 2.13933 12.169 2.31467 12.6655C2.46925 13.0889 2.70527 13.4734 3.00763 13.7944C3.30999 14.1154 3.67204 14.3659 4.07067 14.5298C4.53562 14.7233 5.02825 14.8311 5.52733 14.8486C6.16933 14.879 6.37267 14.8882 8.00067 14.8882C9.62867 14.8882 9.83734 14.8882 10.474 14.8486C10.9721 14.8382 11.4649 14.7378 11.9313 14.5518C12.3298 14.3875 12.6917 14.1368 12.9939 13.8157C13.2961 13.4946 13.5321 13.1101 13.6867 12.6867C13.862 12.1909 13.956 11.6682 13.966 11.1376C13.9947 10.4562 14.0033 10.2402 14.0033 8.5097C14.002 6.77995 14.002 6.56037 13.9647 5.8825ZM7.996 11.7595C6.29333 11.7595 4.914 10.294 4.914 8.48491C4.914 6.67583 6.29333 5.21029 7.996 5.21029C8.8134 5.21029 9.59732 5.55529 10.1753 6.1694C10.7533 6.78351 11.078 7.61643 11.078 8.48491C11.078 9.3534 10.7533 10.1863 10.1753 10.8004C9.59732 11.4145 8.8134 11.7595 7.996 11.7595ZM11.2007 5.85274C11.1063 5.85284 11.0128 5.83315 10.9255 5.79481C10.8383 5.75647 10.7591 5.70023 10.6923 5.6293C10.6255 5.55838 10.5726 5.47417 10.5365 5.38148C10.5004 5.2888 10.4819 5.18946 10.482 5.08916C10.482 4.98893 10.5006 4.88969 10.5367 4.79709C10.5728 4.70449 10.6257 4.62035 10.6924 4.54948C10.7591 4.4786 10.8383 4.42239 10.9254 4.38403C11.0126 4.34567 11.106 4.32593 11.2003 4.32593C11.2947 4.32593 11.3881 4.34567 11.4752 4.38403C11.5624 4.42239 11.6416 4.4786 11.7083 4.54948C11.775 4.62035 11.8279 4.70449 11.864 4.79709C11.9001 4.88969 11.9187 4.98893 11.9187 5.08916C11.9187 5.51133 11.5973 5.85274 11.2007 5.85274Z" />
                 <path d="M7.996 10.6126C9.10168 10.6126 9.998 9.6603 9.998 8.48552C9.998 7.31075 9.10168 6.3584 7.996 6.3584C6.89033 6.3584 5.994 7.31075 5.994 8.48552C5.994 9.6603 6.89033 10.6126 7.996 10.6126Z" />
               </svg>
             </a>
             <a href="" class="sc">
               <svg width="12" height="12" viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg">
                 <path d="M2.79381 3.85254H0.384773C0.277856 3.85254 0.191223 3.93933 0.191223 4.04636V11.7963C0.191223 11.9033 0.277856 11.9901 0.384773 11.9901H2.79381C2.90073 11.9901 2.98736 11.9033 2.98736 11.7963V4.04636C2.98736 3.93933 2.90073 3.85254 2.79381 3.85254Z" />
                 <path d="M1.58967 0C0.713116 0 0 0.713322 0 1.59011C0 2.46728 0.713116 3.18088 1.58967 3.18088C2.46552 3.18088 3.17805 2.46724 3.17805 1.59011C3.17809 0.713322 2.46552 0 1.58967 0Z" />
                 <path d="M8.92086 3.66113C7.95333 3.66113 7.2381 4.07765 6.80429 4.55091V4.04757C6.80429 3.94054 6.71766 3.85375 6.61074 3.85375H4.30371C4.1968 3.85375 4.11017 3.94054 4.11017 4.04757V11.7975C4.11017 11.9045 4.1968 11.9913 4.30371 11.9913H6.70744C6.81435 11.9913 6.90098 11.9045 6.90098 11.7975V7.96307C6.90098 6.67097 7.25145 6.16758 8.1509 6.16758C9.13047 6.16758 9.20832 6.97456 9.20832 8.02955V11.7975C9.20832 11.9046 9.29495 11.9913 9.40186 11.9913H11.8065C11.9134 11.9913 12 11.9046 12 11.7975V7.54656C12 5.62524 11.6342 3.66113 8.92086 3.66113Z" />
               </svg>
             </a>
           </div>
         </div>
       </div>
       <div class="our-links section">
         <div class="center">
           <div class="tit">
             <h3>Our links</h3>
             <div class="line"></div>
           </div>
           <ul>
             <li>
               <a href="./">Home</a>
             </li>
             <li>
               <a href="./#whyus">Why us</a>
             </li>
             <li>
               <a href="./#whatwedo">What we do</a>
             </li>
             <li>
               <a href="./#ourservices">Our services</a>
             </li>
             <li>
               <a href="./#ourclients">Our clients</a>
             </li>
           </ul>
         </div>
       </div>
       <div class="our-services section">
         <div class="center">
           <div class="tit">
             <h3>Our services</h3>
             <div class="line"></div>
           </div>
           <ul>
             <li>
               <a href="services/we-are-creation.php">Brand conception </a>
             </li>
             <li>
               <a href="services/Just-in-time-creation">Reaserches and developement</a>
             </li>
             <li>
               <a href="services/we-are-innovation.php">Brand refreshement</a>
             </li>
             <li>
               <a href="services/we-are-personnalization.php">Uniforms personalized service</a>
             </li>
           </ul>
         </div>
       </div>
       <div class="contact section">
         <div class="center">
           <div class="tit">
             <h3>Contact us</h3>
             <div class="line"></div>
           </div>
           <ul>
             <li>
               <a href="">
                 <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 287.32 287.32" style="enable-background: new 0 0 287.32 287.32" xml:space="preserve">
                   <path d="M267.749,191.076c-14.595-11.729-27.983-17.431-40.93-17.431c-18.729,0-32.214,11.914-44.423,24.119 c-1.404,1.405-3.104,2.06-5.349,2.06c-10.288,0.001-28.387-12.883-53.794-38.293c-29.89-29.892-41.191-48.904-33.592-56.506 c20.6-20.593,27.031-41.237-4.509-80.462C73.861,10.51,62.814,3.68,51.38,3.68c-15.42,0-27.142,12.326-37.484,23.202 c-1.788,1.88-3.477,3.656-5.133,5.312c-11.689,11.688-11.683,37.182,0.017,68.2c12.837,34.033,38.183,71.055,71.37,104.247 c25.665,25.663,53.59,46.403,80.758,60.328c23.719,12.158,46.726,18.672,64.783,18.672c0.002,0,0.004,0,0.007,0 c11.3,0,20.479-2.465,26.541-7.478c12.314-10.181,35.234-29.039,35.081-51.439C287.236,212.71,280.653,201.451,267.749,191.076z" />
                 </svg>
                 <span>+212661173921</span>
               </a>
             </li>
             <li>
               <a href="">
                 <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                   <path d="M8.43008 8.82958C8.30204 8.92344 8.15101 8.97033 8.00002 8.97033C7.84895 8.97033 7.69796 8.92344 7.56992 8.82958L1.45454 4.34498L4.84847e-05 3.27837L0 13.5764C4.84847e-05 13.9781 0.325623 14.3037 0.727271 14.3037L15.2727 14.3036C15.6744 14.3036 16 13.978 16 13.5764V3.27832L14.5454 4.34498L8.43008 8.82958Z" fill="white" />
                   <path d="M7.99998 7.34041L15.0344 2.18169L0.965332 2.18164L7.99998 7.34041Z" fill="white" />
                 </svg>
                 <span>hello@fashionExpertise.agency</span>
               </a>
             </li>
             <li>
               <a href="">
                 <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                   <g clip-path="url(#clip0_95:406)">
                     <path d="M9.56763 3C6.49761 3 4 5.49761 4 8.56763C4 9.40487 4.18135 10.2095 4.53887 10.9597C4.54607 10.9758 4.55363 10.9915 4.56169 11.0073L8.76832 19.1522C8.92275 19.4511 9.23112 19.639 9.56756 19.639C9.90406 19.639 10.2124 19.4512 10.3668 19.1522L14.5723 11.0095C14.5795 10.9955 14.5863 10.9813 14.5928 10.967C14.9527 10.2146 15.1351 9.40753 15.1351 8.56763C15.1353 5.49761 12.6376 3 9.56763 3ZM9.56763 11.4818C7.96073 11.4818 6.65341 10.1745 6.65341 8.56763C6.65341 6.9608 7.96073 5.65349 9.56763 5.65349C11.1745 5.65349 12.4818 6.9608 12.4818 8.56763C12.4818 10.1745 11.1745 11.4818 9.56763 11.4818Z" fill="white" />
                   </g>
                   <defs>
                     <clipPath id="clip0_95:406">
                       <rect width="19" height="19" fill="white" />
                     </clipPath>
                   </defs>
                 </svg>
                 <span>9129 East Clinton Lane Fleming <br />
                   Island, FL 32003</span>
               </a>
             </li>
           </ul>
         </div>
       </div>
     </div>
   </footer>
   <script src="js/ui-min.js"></script>
 </body>

 </html>