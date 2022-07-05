  <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
  <html xmlns="http://www.w3.org/1999/xhtml">

  <head>
    <meta name="x-apple-disable-message-reformatting" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="{{ url('storage/images/favicon.png'); }}">
    <title>Pasar Negeri</title>
    <style type="text/css">
      /*******************FONT STYLING LYFT*********************/

      @import url(http://lyft-assets.s3.amazonaws.com/font/Lyft%20Pro/LyftPro-Bold.otf);
      @font-face {
        font-family: 'LyftPro-Bold';
        src: url(https://lyft-assets.s3.amazonaws.com/font/Lyft%20Pro/LyftPro-Bold.otf) format("opentype");
        font-weight: bold;
        font-style: normal;
      }

      @import url(http://lyft-assets.s3.amazonaws.com/font/Lyft%20Pro/LyftPro-Regular.otf);
      @font-face {
        font-family: 'LyftPro-Regular';
        src: url(https://lyft-assets.s3.amazonaws.com/font/Lyft%20Pro/LyftPro-Regular.otf) format("opentype");
        font-weight: normal;
        font-style: normal;
      }

      @import url(https://lyft-assets.s3.amazonaws.com/font/Lyft%20Pro/LyftPro-SemiBold.otf);
      @font-face {
        font-family: 'LyftPro-SemiBold';
        src: url(https://lyft-assets.s3.amazonaws.com/font/Lyft%20Pro/LyftPro-SemiBold.otf) format("opentype");
        font-weight: normal;
        font-style: normal;
      }


      /************************* END FONT STYLING ************************************/

      body {
        width: 100%;
        background-color: #FFFFFF;
        margin: 0;
        padding: 0;
        -webkit-font-smoothing: antialiased;
        font-family: 'Open Sans', Arial, sans-serif;
      }

      table {
        border-collapse: collapse;
      }

      img {
        border: 0;
        outline: none !important;
      }

      .hideDesktop {
        display: none;
      }

      /********* CTA Style - fixed padding *********/

      .cta-shadow {
        padding: 14px 35px;
        -webkit-box-shadow: 0px 5px 0px rgba(0, 0, 0, 0.2);
        -moz-box-shadow: 0px 5px 0px rgba(0, 0, 0, 0.2);
        box-shadow: 0px 5px 0px rgba(0, 0, 0, 0.2);
        -moz-border-radius: 25px;
        -webkit-border-radius: 25px;
        font-size: 16px;
        font-weight: normal;
        letter-spacing: 0px;
        text-decoration: none;
        display: block;
      }

      body[yahoo] .hideDeviceDesktop {
        display: none;
      }

      @media only screen and (max-width: 640px) {

        div[class=mobilecontent] {
          display: block !important;
          max-height: none !important;
        }

        body[yahoo] .fullScreen {
          width: 100% !important;
          padding: 0px;
          height: auto;
        }

        body[yahoo] .halfScreen {
          width: 50% !important;
          padding: 0px;
          height: auto;
        }

        body[yahoo] .mobileView {
          width: 100% !important;
          padding: 0 4px;
          height: auto;
        }

        body[yahoo] .center {
          text-align: center !important;
          height: auto;
        }

        body[yahoo] .hideDevice {
          display: none;
        }

        body[yahoo] .hideDevice640 {
          display: none;
        }

        body[yahoo] .showDevice {
          display: table-cell !important;
        }

        body[yahoo] .showDevice640 {
          display: table !important;
        }


        body[yahoo] .googleCenter {
          margin: 0 auto;
        }

        .mobile-LR-padding-reset {
          padding-left: 0 !important;
          padding-right: 0 !important;
        }
        .side-padding-mobile {
          padding-left: 40px;
          padding-right: 40px;
        }
        .RF-padding-mobile {
          padding-top: 0 !important;
          padding-bottom: 25px !important;
        }
        .wrapper {
          width: 100% !important;
        }
        .two-col-above {
          display: table-header-group;
        }
        .two-col-below {
          display: table-footer-group;
        }
        .hideDesktop {
          display: block !important;
        }
      }

      @media only screen and (max-width: 520px) {
        .mobileHeader {
          font-size: 50px !important;
        }
        .mobileBody {
          font-size: 16px !important;
        }
        .mobileSubheader {
          font-size: 30px !important;
        }
      }

      @media only screen and (max-width: 479px) {

        body[yahoo] .fullScreen {
          width: 100% !important;
          padding: 0px;
          height: auto;
        }

        body[yahoo] .mobileView {
          width: 100% !important;
          padding: 0 4px;
          height: auto;
        }

        body[yahoo] .center {
          text-align: center !important;
          height: auto;
        }

        body[yahoo] .hideDevice {
          display: none;
        }

        body[yahoo] .hideDevice479 {
          display: none;
        }

        body[yahoo] .showDevice {
          display: table-cell !important;
        }

        body[yahoo] .showDevice479 {
          display: table !important;
        }

        .mobile-LR-padding-reset {
          padding-left: 0 !important;
          padding-right: 0 !important;
        }
        .side-padding-mobile {
          padding-left: 40px;
          padding-right: 40px;
        }
        .RF-padding-mobile {
          padding-top: 0 !important;
          padding-bottom: 25px !important;
        }
        .wrapper {
          width: 100% !important;
        }
        .two-col-above {
          display: table-header-group;
        }
        .two-col-below {
          display: table-footer-group;
        }
        .mobileButton {
          width: 150px !important !
        }

      }

      @media only screen and (max-width: 385px) {
        .mobileHeaderSmall {
          font-size: 18px !important;
          padding-right: none;
        }
        .mobileBodySmall {
          font-size: 14px !important;
          padding-right: none;
        }
      }

      /* Stops automatic email inks in iOS */

      a[x-apple-data-detectors] {

        color: inherit !important;

        text-decoration: none !important;

        font-size: inherit !important;

        font-family: inherit !important;

        font-weight: inherit !important;

        line-height: inherit !important;

      }

      a[href^="x-apple-data-detectors:"] {
        color: inherit;
        text-decoration: inherit;
      }

      .footerLinks {
        text-decoration: none;
        color: #384049;
        font-family: 'LyftPro-Regular', 'Helvetica Neue', Helvetica, Arial, sans-serif;
        font-size: 12px;
        line-height: 18px;
        font-weight: normal;
      }

      /*******Some Clients do not support rounded borders (example: older versions of Outlook)**********/

      .roundButton {
        border-radius: 5px;
      }

      /************************* Fixing Auto Styling for Gmail*********************/

      .contact a {
        color: #88888f !important !;
        text-decoration: none;
      }

      u+#body a {
        color: inherit;
        text-decoration: none;
        font-size: inherit;
        font-family: inherit;
        font-weight: inherit;
        line-height: inherit;
      }
    </style>
    
  </head>

  <body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" yahoo="fix" style="font-family: 'Open Sans', Arial, sans-serif;" align="center" id="body">
    <custom type="content" name="ampscript">
      <!-- FULL PAGE WIDTH WRAPPER WITH TINT -->
      <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%">
        <tr>
          <td align="center" bgcolor="#f3f3f5" valign="top" width="100%">
            <!--========= WHITE PAGE BODY CONTAINER/WRAPPER========-->
            <table align="center" border="0" cellpadding="0" cellspacing="0" class="mobileView" width="600" style="">
              <tr>
                <td align="center" bgcolor="#FFFFFF" style="padding:0px;" width="100%">

                  <!--================================SECTION 0==========================-->
                  <table align="center" bgcolor="" border="0" cellpadding="0" cellspacing="0" class="fullScreen" style="width:100% !important;background-color:#625a9c;" width="600">
                    <tr>
                      <td bgcolor="#FFD6E5" class="" style="width:100% !important; padding: 0;background-color:#ffffff;">
                        <!--========Paste your Content below=================-->
                        <table cellspacing="0" cellpadding="0" align="center" border="0" width="100%" bgcolor="#F3F3F5">
                          <tr>
                            <td class="divider" align="center" height="16px" style="background-color: #F3F3F5;">
                            </td>
                          </tr>
                        </table>
                        <table cellspacing="0" cellpadding="0" align="center" border="0" width="100%" bgcolor="#F3F3F5">
                          <tr>
                            <td align="center" height="25px" style="background-color: #FFFFFF;">
                            </td>
                          </tr>
                        </table>
                        <!-- BEGIN LOGO -->
                        <table cellspacing="0" cellpadding="0" align="left" border="0" width="100%" bgcolor="#ffffff">
                          <tr>
                            <td valign="top" align="left" width="100%" style="padding-left: 25px;">
                              <img style="max-width: 150px; height: auto" src="{{ url('storage/images/logo-pasarnegeri_RGB.jpg') }}"  Content-Type="image/jpg"  alt="Pasar Negeri Logo" />
                            </td>
                          </tr>
                        </table>
                        <table cellspacing="0" cellpadding="0" align="center" border="0" width="100%" bgcolor="#F3F3F5">
                          <tr>
                            <td align="center" height="25px" style="background-color: #FFFFFF;">
                            </td>
                          </tr>
                        </table>
                        <!-- END LOGO -->

                        <!-- nothing -->

                        <!--=======End your Content here=====================-->
                      </td>
                    </tr>
                  </table>
                  <!--=======END SECTION==========-->

                  <table align="center" bgcolor="" border="0" cellpadding="0" cellspacing="0" class="fullScreen" style="width:100% !important;" width="600">
                    <tr>
                      <td bgcolor="" class="" style="width:100% !important; padding: 0;">
                        <custom type="content" name="hero_image">
                          <!--========Paste your Content below=================-->

                          <!-- nothing -->

                          <!--BEGIN HERO IMAGE -->
                          <table cellspacing="0" cellpadding="0" align="left" border="0" width="100%" bgcolor="#ffffff">
                            <tr>
                              <td valign="top" align="center" width="100%" style="padding-right: 25px; padding-left: 25px;">
                                <img width="100%" style="max-width: 600px; height: auto" src="{{ url('storage/images/banner-pasar-negeri-1.jpg'); }}" alt="Pasar Negeri Banner" />
                              </td>
                            </tr>
                          </table>
                          <!--END HERO IMAGE-->

                          <table cellspacing="0" cellpadding="0" align="center" border="0" width="100%" bgcolor="#F3F3F5">
                            <tr>
                              <td align="center" height="25px" style="background-color: #FFFFFF;">
                              </td>
                            </tr>
                          </table>

                          <!--BEGIN TEXT SECTION-->
                          <table width="100%" align="center" cellpadding="0" cellspacing="0" border="0" style="max-width: 600px;">
                            <tr>
                              <td style="font-family: 'LyftPro-Bold', Arial, Helvetica, sans-serif; font-size: 52px; line-height: 1.0; color: #000000; font-weight: bolder; padding: 0 25px 15px 25px;" class="mso-line-solid mobile-headline">
                              Hi There,
                              </td>
                            </tr>
                            <tr>
                              <td style="font-family: 'LyftPro-Regular', Arial, Helvetica, sans-serif; font-size: 18px; line-height: 1.4; color: #000000; padding: 0 25px 50px 25px;">
                                You have requested your email to be change. Please click the following link to change your email:
                              </td>
                            </tr>

                            <!-- CTA -->
                              <tr>
                                  <td align="center" style="padding: 0 25px 30px 25px; background-color: #ffffff;">
                                  <table align="center" cellpadding="0" cellspacing="0" border="0" class="full-width">
                                      <tr>
                                      <td class="cta-shadow" align="center" bgcolor="#45A249" style="border-radius: 40px; -webkit-border-radius: 40px; -moz-border-radius: 40px;">
                                          <a href="{{url('authentication/'.$id.'/reset-email?token='.$token)}}" target="_blank" style="font-family: Arial, Helvetica, sans-serif; font-size: 16px; line-height: 1.0; font-weight: bold; color: #ffffff; text-transform: uppercase; text-decoration: none; border-radius: 30px; -webkit-border-radius: 30px; -moz-border-radius: 30px; display: block; padding: 12px 25px 12px 25px;">
                                              Change my email
                                          </a>
                                      </td>
                                      </tr>
                                  </table>
                                  </td>
                              </tr>
                          </table>

                          <table cellspacing="0" cellpadding="0" align="center" border="0" width="100%" bgcolor="#F3F3F5">
                            <tr>
                              <td align="center" height="25px" style="background-color: #FFFFFF;">
                              </td>
                            </tr>
                          </table>
                          <!--END TEXT SECTION -->

                          <!--=======End your Content here=====================-->
                      </td>
                    </tr>
                  </table>

                  <table align="center" bgcolor="" border="0" cellpadding="0" cellspacing="0" class="fullScreen" style="width:100% !important;" width="600">
                    <tr>
                      <td bgcolor="" class="" style="width:100% !important; padding: 0;">
                        <custom type="content" name="notification-banner">
                          <!--========Paste your Content below=================-->

                          <!-- nothing -->

                          <!-- nothing -->

                          <!--BEGIN HELP SECTION -->
                          <table cellspacing="0" cellpadding="0" align="center" border="0" width="80%" bgcolor="#ffffff">
                            <tr>
                              <td valign="top" align="center" width="100%">
                                <table cellspacing="0" cellpadding="0" align="center" border="0" width="100%" bgcolor="#EFEFF1">
                                  <tr>
                                    <td align="center" height="25px" style="background-color: #EFEFF1;">
                                    </td>
                                  </tr>
                                </table>
                                <table width="100%" align="center" cellpadding="0" cellspacing="0" border="0" bgcolor="#EFEFF1" style="max-width: 600px; background-color: #EFEFF1;">
                                  <tr>
                                    <td align="center" style="padding: 0px;">
                                      <table align="center" cellpadding="0" cellspacing="0" border="0" bgcolor="#EFEFF1">
                                        <tr>
                                          <td align="center" valign="top" style="padding: 25px 25px 25px 25px; background-color: #EFEFF1;">
                                            <img src="https://s3.amazonaws.com/growth.lyft.com/Business/Icons/Module%203_email_icon%402x.png" width="50" border="0" style="display: inline-block; width: 50px; height: auto; outline: none;">
                                          </td>
                                          <td align="left" style="font-family: 'LyftPro-Regular', Arial, Helvetica, sans-serif; font-size: 18px; line-height: 1.4; color: #000000; padding: 15px 15px 15px 0; background-color: #EFEFF1;">
                                            Have a question? <br />
                                            <a href="/cdn-cgi/l/email-protection#d4b6a1a7bdbab1a7a7f9a7a1a4a4bba6a094b8adb2a0fab7bbb9" style="color: #45A249">Reach out to our team</a>
                                          </td>
                                        </tr>
                                      </table>
                                    </td>
                                  </tr>
                                </table>
                                <table cellspacing="0" cellpadding="0" align="center" border="0" width="100%" bgcolor="#EFEFF1">
                                  <tr>
                                    <td align="center" height="25px" style="background-color: #EFEFF1;">
                                    </td>
                                  </tr>
                                </table>
                              </td>
                            </tr>
                          </table>

                          <!--END HELP SECTION -->
                          <table cellspacing="0" cellpadding="0" align="center" border="0" width="100%" bgcolor="#F3F3F5">
                            <tr>
                              <td align="center" height="50px" style="background-color: #FFFFFF;">
                              </td>
                            </tr>
                          </table>
                          <!--=======End your Content here=====================-->
                      </td>
                    </tr>
                  </table>

                  <table align="center" bgcolor="" border="0" cellpadding="0" cellspacing="0" class="fullScreen" style="width:100% !important;" width="600">
                    <tr>
                      <td bgcolor="" class="" style="width:100% !important; padding: 0;">
                        <!--========Paste your Content below=================-->

                        <!-- nothing -->

                        <!--END TEXT SECTION -->
                        <!--=======End your Content here=====================-->

                      </td>
                    </tr>
                  </table>

                  <table align="center" bgcolor="" border="0" cellpadding="0" cellspacing="0" class="fullScreen" style="width:100% !important;" width="600">
                    <tr>
                      <td bgcolor="" class="" style="width:100% !important; padding: 0;">
                        <!--========Paste your Content below=================-->
                        <custom type="content" name="section-02">
                          <!--=======End your Content here=====================-->
                      </td>
                    </tr>
                  </table>

                  <table align="center" bgcolor="" border="0" cellpadding="0" cellspacing="0" class="fullScreen" style="width:100% !important;" width="600">
                    <tr>
                      <td bgcolor="" class="" style="width:100% !important; padding: 0;">
                        <!--========Paste your Content below=================-->
                        <custom type="content" name="section-03">
                          <!--=======End your Content here=====================-->
                      </td>
                    </tr>
                  </table>

                  <table align="center" bgcolor="" border="0" cellpadding="0" cellspacing="0" class="fullScreen" style="width:100% !important;" width="600">
                    <tr>
                      <td bgcolor="" class="" style="width:100% !important; padding: 0;">
                        <!--========Paste your Content below=================-->
                        <custom type="content" name="section-04">
                          <!--=======End your Content here=====================-->
                      </td>
                    </tr>
                  </table>

                  <table align="center" bgcolor="" border="0" cellpadding="0" cellspacing="0" class="fullScreen" style="width:100% !important;" width="600">
                    <tr>
                      <td bgcolor="" class="" style="width:100% !important; padding: 0;">
                        <!--========Paste your Content below=================-->
                        <custom type="content" name="section-05">
                          <!--=======End your Content here=====================-->
                      </td>
                    </tr>
                  </table>

                  <table align="center" bgcolor="" border="0" cellpadding="0" cellspacing="0" class="fullScreen" style="width:100% !important;" width="600">
                    <tr>
                      <td bgcolor="" class="" style="width:100% !important; padding: 0;">
                        <!--========Paste your Content below=================-->
                        <custom type="content" name="section-06">
                          <!--=======End your Content here=====================-->
                      </td>
                    </tr>
                  </table>

                  <table align="center" bgcolor="" border="0" cellpadding="0" cellspacing="0" class="fullScreen" style="width:100% !important;" width="600">
                    <tr>
                      <td bgcolor="" class="" style="width:100% !important; padding: 0;">
                        <!--========Paste your Content below=================-->
                        <custom type="content" name="section-07">
                          <!--=======End your Content here=====================-->
                      </td>
                    </tr>
                  </table>

                  <table align="center" bgcolor="" border="0" cellpadding="0" cellspacing="0" class="fullScreen" style="width:100% !important;" width="600">
                    <tr>
                      <td bgcolor="" class="" style="width:100% !important; padding: 0;">
                        <!--========Paste your Content below=================-->
                        <custom type="content" name="section-08">
                          <!--=======End your Content here=====================-->
                      </td>
                    </tr>
                  </table>

                  <table align="center" bgcolor="" border="0" cellpadding="0" cellspacing="0" class="fullScreen" style="width:100% !important;" width="600">
                    <tr>
                      <td bgcolor="" class="" style="width:100% !important; padding: 0;">
                        <!--========Paste your Content below=================-->
                        <custom type="content" name="section-09">
                          <!--=======End your Content here=====================-->
                      </td>
                    </tr>
                  </table>

                  <table align="center" bgcolor="" border="0" cellpadding="0" cellspacing="0" class="fullScreen" style="width:100% !important;" width="600">
                    <tr>
                      <td bgcolor="" class="" style="width:100% !important; padding: 0;">
                        <!--========Paste your Content below=================-->
                        <custom type="content" name="section-10">
                          <!--=======End your Content here=====================-->
                      </td>
                    </tr>
                  </table>

                  <!--=================FOOTER=====================-->
                  <table align="center" cellpadding="0" cellspacing="0" width="100%" style=" width:100% !important;">
                    <tr>
                      <td align="center" valign="middle" style="padding: 0 25px 0 0;"></td>
                      <td width="100%" align="center" valign="middle" style="border-top: 1px solid #d8d8d8;"></td>
                      <td align="center" valign="middle" style="padding: 0 25px 0 0;"></td>
                    </tr>
                  </table>
                  <table align="center" bgcolor="#ffffff" border="0" cellpadding="0" cellspacing="0" class="mobileView" style="width:100% !important;" width="600">
                    <tr>
                      <td>
                        <table align="center" bgcolor="#ffffff" border="0" cellpadding="0" cellspacing="0" class="mobileView" style="" width="100%">
                          <tr>
                            <td align="left" style="color: #88888f; font-family: 'LyftPro-Regular', 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 12px; line-height: 18px; font-weight:normal; padding: 10px 0px 0px 25px;" valign="middle" width="100%">
                              <a class="footerLinks" href="https://help.lyft.com/hc/en-us" style=" text-decoration: none; color: #88888f" target="_blank"><span class="contact">Contact</span></a>
                            </td>
                          </tr>
                          <tr>
                            <td align="left" style="color: #88888f; font-family: 'LyftPro-Regular', 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 12px; line-height:18px; font-weight: normal; padding: 10px 0px 0px 25px; text-decoration: none;" valign="middle">
                              Office: Jl. AR Hakim No 83 Depok
  Telp: 021-77261765          <br/>&#169; 2018 pasarnegeri.</td>
                          </tr>
                          <!--===========CUSTOMER ACTIONS===========-->
                        </table>
                        <!--=============END CUSTOMER ACTIONS========-->
                      </td>
                    </tr>
                    <tr>
                      <td width="auto" style="display: block;" height="40">&nbsp;</td>
                    </tr>
                  </table>
                  <!--=================END FOOTER=====================-->

                </td>
              </tr>
            </table>
            <!-- END WHITE PAGE BODY CONTAINER/WRAPPER -->
            <table cellspacing="0" cellpadding="0" align="center" border="0" width="100%" bgcolor="#F3F3F5">
              <tr>
                <td class="divider" align="center" height="16px" style="background-color: #F3F3F5;">
                </td>
              </tr>
            </table>
          </td>
        </tr>
      </table>
      <!-- FULL PAGE WIDTH WRAPPER WITH TINT -->

      <!-- McGuyver'ed Android Gmail Spacer Fix -->

      <table border="0" cellpadding="0" cellspacing="0" class="hideDevice">
        <tr>
          <td class="hideDevice" height="1" style="min-width:700px; font-size:0px; line-height:0px;"><img height="1" src="http://image.lyftmail.com/lib/fe6915707166047a7d14/m/8/Spacer+for+Gmail.gif" style="min-width: 700px; text-decoration: none; border: none; -ms-interpolation-mode: bicubic;"></td>
        </tr>
      </table>

      <!--END FIX-->

      <!-- RETURNPATH TRACKING -->
      <table border="0" cellpadding="0" cellspacing="0" align="center">
        <tr>
          <td border="0" align="center" height="1" style="font-size:0px; line-height:0px;">
            <img src="https://pixel.inbox.exacttarget.com/pixel.gif?r=4a4f30aa41389e0aba9e92c56574b86e3fc20465" width="1" height="1" />
            <img src="https://pixel.app.returnpath.net/pixel.gif?r=4a4f30aa41389e0aba9e92c56574b86e3fc20465" width="1" height="1" />
          </td>
        </tr>
      </table>
      <!-- END RETURNPATH  TRACKING -->
      <custom name="opencounter" type="tracking" style="display:none;">
      
        <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script></body>

  </html>