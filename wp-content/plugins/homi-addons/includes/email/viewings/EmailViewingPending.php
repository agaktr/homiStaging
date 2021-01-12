<?php


class EmailViewingPending {

    /**
     * @param $recipient string
     * @param $viewing ViewingRequest
     * @param $recipient_email string
     *
     * @return string
     */
    public function get_template( $recipient, $viewing, $recipient_email ){

        return ( $recipient === EmailActionsConstants::RECIPIENT_TYPES['landlord'] ? $this->get_landlord_template( $viewing, $recipient_email ) : $this->get_viewer_template( $viewing, $recipient_email ) );

    }


    /**
     * @param $viewing ViewingRequest
     * @param $recipient_email string
     *
     * @return string
     */
    private function get_landlord_template( $viewing, $recipient_email ){

        ob_start();

        ?>

        <div id=":od" class="a3s aXjCH msg-8959881651055553028">
            <u></u>
            <div id="m_-8959881651055553028ac-designer" class="m_-8959881651055553028body" style="font-family:Arial;line-height:1.1;margin:0px;background-color:#cce0ff;width:100%;text-align:center">
                <div style="display:none;padding:0;height:1px;font-size:1px;background-color:inherit!important;color:inherit!important;line-height:1px">
                    Η συνάντηση δεν έχει ακόμα επιβεβαιωθεί. Εκκρεμεί η έγκριση σου.
                </div>
                <div style="margin:0px;outline:none;padding:0px;color:#000000;font-family:arial;line-height:1.1;width:100%;background-color:#cce0ff;background:#cce0ff;text-align:center">
                    <table style="font-size:14px;min-width:auto;background-color:#cce0ff;background:#cce0ff" width="100%" cellspacing="0" cellpadding="0" border="0" align="left">
                        <tbody>
                        <tr>
                            <td width="100%" valign="top" align="center">
                                <table style="font-size:14px;min-width:auto;max-width:650px" width="650" cellspacing="0" cellpadding="0" border="0" bgcolor="#cce0ff">
                                    <tbody>
                                    <tr>
                                        <td id="m_-8959881651055553028layout_table_9dfc7c08a9119692e45a95b1f3b8d01ea7e8743a" style="background-color:#ffffff" width="650" valign="top" align="center">
                                            <table style="font-size:14px;min-width:100%;background-color:#ffffff" width="650" cellspacing="0" cellpadding="0" border="0">
                                                <tbody>
                                                <tr style="background-color:#ffffff">
                                                    <td id="m_-8959881651055553028layout-row-margin709" style="padding:0;background-color:#ffffff" valign="top">
                                                        <table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0">
                                                            <tbody>
                                                            <tr id="m_-8959881651055553028layout-row709">
                                                                <td id="m_-8959881651055553028layout-row-padding709" style="padding:0" valign="top">
                                                                    <table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0">
                                                                        <tbody>
                                                                        <tr>
                                                                            <td valign="top" height="30">
                                                                                <div style="margin:0;outline:none;padding:0;height:30px">
                                                                                    <table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0">
                                                                                        <tbody>
                                                                                        <tr>
                                                                                            <td style="background-color:#cce0ff" width="650" valign="top" height="30">&nbsp;</td>
                                                                                        </tr>
                                                                                        </tbody>
                                                                                    </table>
                                                                                </div>
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
                                                <tr style="background-color:#ffffff">
                                                    <td id="m_-8959881651055553028layout-row-margin695" style="padding:0px;background-color:#ffffff" valign="top">
                                                        <table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0">
                                                            <tbody>
                                                            <tr id="m_-8959881651055553028layout-row695" style="background-color:#1259af" align="center">
                                                                <td id="m_-8959881651055553028layout-row-padding695" style="background-color:#1259af;padding:7px" valign="top">
                                                                    <table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0">
                                                                        <tbody>
                                                                        <tr>
                                                                            <td width="636" valign="top" align="center"><a href="https://homi.com.gr/el/" style="margin:0;outline:none;padding:0;color:#045fb4;display:block;min-width:100%" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://homi.acemlnc.com/lt.php?notrack%3D1%26s%3D66f8b3adaac660033ea1e3f2f6fe87ac%26i%3D50A383A0A387&amp;source=gmail&amp;ust=1591434055230000&amp;usg=AOvVaw14mF7-xUy64u6TGIKEU5kF"><img src="https://ci4.googleusercontent.com/proxy/-rlG5erCUWhvlVcHBT-pjcaMK4QpLItn9UDKGkRvzLuj8K-mWisjd7SrvvT-6opaIcRZATMzF8Nlxr8z6ruGEeIgsRHOvFzo6TE-P4c9Tm5YaI3LgGOQtF5AjqyBoemw0NoNTjQ=s0-d-e1-ft#https://homi.imgus11.com/public//3db214c35e4a1e4c80f1c80ce920183b.png?r=1985915357" alt="" style="border:none;display:block;outline:none;width:128px;opacity:1;max-width:100%" class="CToWUd" width="128"></a></td>
                                                                        </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                                <tr style="background-color:#ffffff">
                                                    <td id="m_-8959881651055553028layout-row-margin703" style="padding:3px 0px 0px 0px;background-color:#ffffff" valign="top">
                                                        <table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0">
                                                            <tbody>
                                                            <tr id="m_-8959881651055553028layout-row703" style="margin:0;padding:0;background-color:#e2e5eb">
                                                                <td id="m_-8959881651055553028layout-row-padding703" style="background-color:#e2e5eb;padding:20px 0px 20px 0px" valign="top">
                                                                    <table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0">
                                                                        <tbody>
                                                                        <tr>
                                                                            <td id="m_-8959881651055553028text_div635" style="margin:0;outline:none;padding:0;color:inherit;font-size:12px;font-weight:inherit;line-height:1;text-decoration:inherit;font-family:Arial" width="650" valign="top" align="left">
                                                                                <div style="margin:0;outline:none;padding:0;font-size:25px;color:#ffffff;font-family:arial,helvetica,sans">
                                                                                    <div style="margin:0;outline:none;padding:0"></div>
                                                                                    <div style="margin:0;outline:none;padding:0;color:#1259af;font-family:arial,helvetica,sans;font-weight:700;font-size:25px;text-align:center"><span style="color:#1259af;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit">Νέο αίτημα επίδειξης ακινήτου</span></div>
                                                                                </div>
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
                                                <tr style="background-color:#ffffff">
                                                    <td id="m_-8959881651055553028layout-row-margin962" style="padding:3px 0px 0px 0px;background-color:#ffffff" valign="top">
                                                        <table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0">
                                                            <tbody>
                                                            <tr id="m_-8959881651055553028layout-row962" style="margin:0;padding:0;background-color:#ffffff">
                                                                <td id="m_-8959881651055553028layout-row-padding962" style="background-color:#ffffff;padding:19px 0px 0px 0px" valign="top">
                                                                    <table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0">
                                                                        <tbody>
                                                                        <tr>
                                                                            <td id="m_-8959881651055553028text_div893" style="margin:0;outline:none;padding:0;color:inherit;font-size:12px;font-weight:inherit;line-height:1;text-decoration:inherit;font-family:Arial" width="650" valign="top" align="left">
                                                                                <div style="margin:0;outline:none;padding:0;font-size:17px">
                                                                                    <div style="margin:0;outline:none;padding:0;text-align:center"><span style="color:#555555;font-size:inherit;font-weight:400;line-height:inherit;text-decoration:inherit;font-family:arial;font-style:italic">Η συνάντηση</span><span style="color:#555555;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;font-style:italic;font-family:arial"> δεν έχει ακόμα επιβεβαιωθεί. Εκκρεμεί η έγκριση σου.</span><br></div>
                                                                                </div>
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
                                                <tr style="background-color:#ffffff">
                                                    <td id="m_-8959881651055553028layout-row-margin704" style="padding:3px 0px 0px 0px;background-color:#ffffff" valign="top">
                                                        <table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0">
                                                            <tbody>
                                                            <tr id="m_-8959881651055553028layout-row704" style="margin:0;padding:0;background-color:#ffffff">
                                                                <td id="m_-8959881651055553028layout-row-padding704" style="background-color:#ffffff;padding:25px 0px 3px 0px" valign="top">
                                                                    <table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0">
                                                                        <tbody>
                                                                        <tr>
                                                                            <td id="m_-8959881651055553028text_div636" style="margin:0;outline:none;padding:0;color:inherit;font-size:12px;font-weight:inherit;line-height:1;text-decoration:inherit;font-family:Arial" width="650" valign="top" align="left">
                                                                                <div style="margin:0;outline:none;padding:0;font-size:18px">
                                                                                    <div style="margin:0;outline:none;padding:0;font-family:arial;font-style:normal;text-align:center"><span style="color:inherit;font-size:inherit;font-weight:700;line-height:inherit;text-decoration:inherit">Στοιχεία Συνάντησης</span></div>
                                                                                </div>
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
                                                <tr style="background-color:#ffffff">
                                                    <td id="m_-8959881651055553028layout-row-margin707" style="padding:0;background-color:#ffffff" valign="top">
                                                        <table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0">
                                                            <tbody>
                                                            <tr id="m_-8959881651055553028layout-row707" style="background-color:#ffffff">
                                                                <td id="m_-8959881651055553028layout-row-padding707" style="line-height:0;background-color:#ffffff;padding:0" valign="top">
                                                                    <table style="font-size:14px;min-width:100%;border-collapse:collapse;line-height:0" width="100%" cellspacing="0" cellpadding="0" border="0">
                                                                        <tbody>
                                                                        <tr>
                                                                            <td style="font-size:12px;height:12px;line-height:0" height="12"></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td style="line-height:0" width="650" height="1" align="center">
                                                                                <table style="font-size:14px;min-width:auto!important;border-collapse:collapse;line-height:0;width:40%;max-width:40%" width="260" height="1" cellspacing="0" cellpadding="0" border="0" align="center">
                                                                                    <tbody>
                                                                                    <tr>
                                                                                        <td class="m_-8959881651055553028break-line" style="line-height:1px;height:1px;width:260px;background-color:#b5b5b5" width="260" height="1" bgcolor="#b5b5b5"> </td>
                                                                                    </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td style="font-size:12px;height:12px;line-height:0" height="12"></td>
                                                                        </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                                <tr style="background-color:#ffffff">
                                                    <td id="m_-8959881651055553028layout-row-margin706" style="padding:0px;background-color:#ffffff" valign="top">
                                                        <table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0">
                                                            <tbody>
                                                            <tr id="m_-8959881651055553028layout-row706" style="margin:0;padding:0;background-color:#ffffff">
                                                                <td id="m_-8959881651055553028layout-row-padding706" style="background-color:#ffffff;padding:10px 0px 20px 0px" valign="top">
                                                                    <table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0">
                                                                        <tbody>
                                                                        <tr>
                                                                            <td id="m_-8959881651055553028text_div638" style="margin:0;outline:none;padding:0;color:inherit;font-size:12px;font-weight:inherit;line-height:1;text-decoration:inherit;font-family:Arial" width="650" valign="top" align="left">
                                                                                <div style="margin:0;outline:none;padding:0;color:#045fb4">
                                                                                    <div style="margin:0;outline:none;padding:0;font-size:17px;color:#045fb4;font-family:arial">
                                                                                        <div style="margin:0;outline:none;padding:0;font-family:arial;font-style:normal;color:#1259af;font-size:17px;text-align:center"><span style="color:#1259af;font-size:inherit;font-weight:bold;line-height:inherit;text-decoration:inherit;font-family:arial">Ημερομηνία:</span></div>
                                                                                        <span style="color:#045fb4;font-size:17px;font-weight:400;line-height:inherit;text-decoration:inherit;font-family:arial;font-style:normal">
                                                                              <div style="margin:0;outline:none;padding:0;font-family:arial;color:#555555;text-align:center;font-size:15px"><span style="color:#555555;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;font-family:arial"><?php echo $viewing->date; ?></span></div>
                                                                              <div style="margin:0;outline:none;padding:0;font-family:arial;text-align:center;color:#045fb4"><br style="font-family:arial;font-weight:inherit;color:#045fb4;color:#045fb4"></div>
                                                                              <div style="margin:0;outline:none;padding:0;font-family:arial;font-weight:inherit;color:#045fb4;text-align:center"><span style="color:#1259af;font-size:inherit;font-weight:bold;line-height:inherit;text-decoration:inherit;font-family:arial"><span style="color:#1259af;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit">Ώρα: </span>
                                                                                      <br style="color:#1259af"></span>
                                                                                  <span style="color:#045fb4;font-size:15px;font-weight:inherit;line-height:inherit;text-decoration:inherit;font-family:arial">
                                                                                      <span style="color:#555555;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit">
                                                                                          <?php echo $viewing->time; ?>
                                                                                      </span>
                                                                                      <br>
                                                                                      <span style="color:#1259af;font-size:17px;font-weight:bold;line-height:inherit;text-decoration:inherit;font-family:arial;font-style:normal">
                                                                                          <br style="color:#1259af">
                                                                                          <span style="color:#1259af;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit">Διεύθυνση: </span>
                                                                                          <br style="color:#1259af">
                                                                                      </span>
                                                                                      <span style="color:#555555;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit">
                                                                                          <?php echo $viewing->property_address; ?>, <?php echo $viewing->property_title; ?>
                                                                                          <br style="color:#555555"><br style="color:#555555">
                                                                                      </span>
                                                                                      <span style="color:#1259af;font-size:17px;font-weight:bold;line-height:inherit;text-decoration:inherit;font-family:arial;font-style:normal">
                                                                                            <br style="color:#1259af">
                                                                                              <span style="color:#1259af;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit">Επισκέπτης: </span>
                                                                                              <br style="color:#1259af"></span>
                                                                                              <span style="color:#555555;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit">
                                                                                                  <?php echo $viewing->viewer->first_name; ?>
                                                                                              </span>
                                                                                              <br>
                                                                                                <br style="color:#1259af">
                                                                                              <span style="color:#1259af;font-size:16px;font-weight:700;line-height:inherit;text-decoration:inherit;margin-bottom:0;display:block;">Τηλέφωνο Επικοινωνίας: </span>
                                                                                              <br style="color:#1259af"></span>
                                                                                              <span style="color:#555555;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit">
                                                                                                  <a href="tel:<?php echo $viewing->viewer->phone; ?>">
                                                                                                      <?php echo $viewing->viewer->phone; ?>
                                                                                                  </a>
                                                                                              </span>
                                                                                              <br>
                                                                                      </span>
                                                                              </div>
                                                                           </span>
                                                                                    </div>
                                                                                </div>
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
                                                <tr style="background-color:#ffffff">
                                                    <td id="m_-8959881651055553028layout-row-margin705" style="padding:0;background-color:#ffffff" valign="top">
                                                        <table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0">
                                                            <tbody>
                                                            <tr id="m_-8959881651055553028layout-row705">
                                                                <td id="m_-8959881651055553028layout-row-padding705" style="padding:0" valign="top">
                                                                    <table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0">
                                                                        <tbody>
                                                                        <tr>
                                                                            <td valign="top" height="10">
                                                                                <div style="margin:0;outline:none;padding:0;height:10px">
                                                                                    <table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0">
                                                                                        <tbody>
                                                                                        <tr>
                                                                                            <td style="background-color:#ffffff" width="650" valign="top" height="10">&nbsp;</td>
                                                                                        </tr>
                                                                                        </tbody>
                                                                                    </table>
                                                                                </div>
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
                                                <tr style="background-color:#ffffff">
                                                    <td id="m_-8959881651055553028layout-row-margin696" style="padding:0;background-color:#ffffff" valign="top">
                                                        <table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0">
                                                            <tbody>
                                                            <tr id="m_-8959881651055553028layout-row696" style="margin:0;padding:0;background-color:#ffffff">
                                                                <td id="m_-8959881651055553028layout-row-padding696" style="background-color:#ffffff;padding:10px 10px 0px 10px" valign="top">
                                                                    <table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0">
                                                                        <tbody>
                                                                        <tr>
                                                                            <td id="m_-8959881651055553028text_div628" style="line-height:150%;margin:0;outline:none;padding:0;color:inherit;font-size:12px;font-weight:inherit;line-height:1.5;text-decoration:inherit;font-family:Arial" width="630" valign="top" align="left">
                                                                                <div style="line-height:150%;margin:0;outline:none;padding:0;line-height:1.5">
                                                                                    <div style="margin:0;outline:none;padding:0;text-align:center">
                                                                                        <p style="margin:0;outline:none;padding:0;color:inherit;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;text-align:left"></p>
                                                                                        <div style="margin:0;outline:none;padding:0;text-align:justify;font-size:15px"><span style="color:inherit;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;font-family:arial,helvetica,sans"> Αγαπητή/έ <span style="color:#000000;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit"><?php echo $viewing->landlord->first_name; ?>,</span></span></div>
                                                                                        <span style="color:inherit;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;text-align:center">
                                                                              <div style="margin:0;outline:none;padding:0;text-align:justify;font-size:15px"><br style="font-family:arial,helvetica,sans"></div>
                                                                              <div style="margin:0;outline:none;padding:0;text-align:justify;font-size:15px"><span style="color:#000000;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;font-family:arial,helvetica,sans">Έχεις ένα νέο αίτημα επίδειξης του ακινήτου σου. <br></span></div>
                                                                           </span>
                                                                                        <p style="margin:0;outline:none;padding:0;color:inherit;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit"></p>
                                                                                    </div>
                                                                                </div>
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
                                                <tr style="background-color:#ffffff">
                                                    <td id="m_-8959881651055553028layout-row-margin726" style="padding:5px;background-color:#ffffff" valign="top">
                                                        <table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0">
                                                            <tbody>
                                                            <tr id="m_-8959881651055553028layout-row726">
                                                                <td id="m_-8959881651055553028layout-row-padding726" style="padding:12px" valign="top">
                                                                    <table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0">
                                                                        <tbody>
                                                                        <tr>
                                                                            <td width="616" valign="top" align="left">
                                                                                <div style="margin:0;outline:none;padding:0;text-align:center">
                                                                                    <a href="<?php echo site_url( EmailActionsConstants::VIEWINGS_URL ); ?>" style="margin:0;outline:none;padding:16px;color:#ffffff;background-color:#1259af;border:1px solid #030303;border-radius:3px;font-family:Arial;font-size:16px;display:inline-block;line-height:1.1;text-align:center;text-decoration:none" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://homi.acemlnc.com/lt.php?notrack%3D1%26s%3D66f8b3adaac660033ea1e3f2f6fe87ac%26i%3D50A383A0A397&amp;source=gmail&amp;ust=1591434055230000&amp;usg=AOvVaw08OLSz68IcnImvjK3MxLvC"> <span style="color:#ffffff;font-family:Arial;font-size:16px;font-weight:bold"> Κάνε κλικ εδώ για να απαντήσεις </span> </a>
                                                                                </div>
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
                                                <tr style="background-color:#ffffff">
                                                    <td id="m_-8959881651055553028layout-row-margin725" style="padding:0;background-color:#ffffff" valign="top">
                                                        <table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0">
                                                            <tbody>
                                                            <tr id="m_-8959881651055553028layout-row725" style="margin:0;padding:0;background-color:#ffffff">
                                                                <td id="m_-8959881651055553028layout-row-padding725" style="background-color:#ffffff;padding:10px 10px 0px 10px" valign="top">
                                                                    <table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0">
                                                                        <tbody>
                                                                        <tr>
                                                                            <td id="m_-8959881651055553028text_div657" style="line-height:150%;margin:0;outline:none;padding:0;color:inherit;font-size:12px;font-weight:inherit;line-height:1.5;text-decoration:inherit;font-family:Arial" width="630" valign="top" align="left">
                                                                                <div style="line-height:150%;margin:0;outline:none;padding:0;line-height:1.5">
                                                                                    <div style="margin:0;outline:none;padding:0;font-family:arial;font-style:normal;text-align:justify;font-size:15px"><span style="color:inherit;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;font-family:arial"><span style="color:inherit;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit">Αν έχεις οποιαδήποτε δυσκολία με τη διαχείριση της πλατφόρμας της </span><span style="color:#1259af;font-size:15px;font-weight:700;line-height:inherit;text-decoration:inherit;font-family:arial;font-style:normal">ΗΟΜΙ</span><span style="color:inherit;font-size:15px;font-weight:inherit;line-height:inherit;text-decoration:inherit;font-family:arial;font-style:normal">, παρακαλούμε επικοινώνησε μαζί μας:<br><br><span style="color:#000000;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit" lang="EN-AU"><span style="color:inherit;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:underline">Τηλέφωνο</span>: +30 215 215 1962 <br><span style="color:inherit;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:underline"> Email</span>: </span><a href="mailto:support@homi.com.gr" style="margin:0;outline:none;padding:0;color:#045fb4;text-decoration:underline" target="_blank"><span>support@<span class="il">homi</span>.com.gr</span></a></span></span></div>
                                                                                    <div style="margin:0;outline:none;padding:0;font-family:arial;font-style:normal;text-align:justify;font-size:15px"><br style="font-family:arial;font-family:arial;font-family:arial"></div>
                                                                                    <div style="margin:0;outline:none;padding:0;font-family:arial;font-style:normal;text-align:justify;font-size:15px">
                                                                                        <div style="margin:0;outline:none;padding:0;color:#000000;font-weight:400;font-family:arial;text-align:justify"><span style="color:inherit;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;font-family:arial"><span style="color:inherit;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;font-family:arial">Με εκτίμηση,</span><br></span></div>
                                                                                        <div style="margin:0;outline:none;padding:0;font-family:arial;text-align:justify"><span style="color:inherit;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;font-family:arial"><span style="color:inherit;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit">Η ομάδα της </span><span style="color:inherit;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;font-family:arial"><span style="color:#1259af;font-size:inherit;font-weight:700;line-height:inherit;text-decoration:inherit">ΗΟΜΙ</span><br style="color:#1259af;margin-right:0px;margin-left:0px;font-family:arial;text-align:justify;font-size:15px"></span></span></div>
                                                                                    </div>
                                                                                    <br>
                                                                                </div>
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
                                                <tr style="background-color:#ffffff">
                                                    <td id="m_-8959881651055553028layout-row-margin957" style="padding:0;background-color:#ffffff" valign="top">
                                                        <table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0">
                                                            <tbody>
                                                            <tr id="m_-8959881651055553028layout-row957" style="background-color:#ffffff">
                                                                <td id="m_-8959881651055553028layout-row-padding957" style="line-height:0;background-color:#ffffff;padding:0" valign="top">
                                                                    <table style="font-size:14px;min-width:100%;border-collapse:collapse;line-height:0" width="100%" cellspacing="0" cellpadding="0" border="0">
                                                                        <tbody>
                                                                        <tr>
                                                                            <td style="font-size:12px;height:12px;line-height:0" height="12"></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td style="line-height:0" width="650" height="1" align="center">
                                                                                <table style="font-size:14px;min-width:auto!important;border-collapse:collapse;line-height:0;width:40%;max-width:40%" width="260" height="1" cellspacing="0" cellpadding="0" border="0" align="center">
                                                                                    <tbody>
                                                                                    <tr>
                                                                                        <td class="m_-8959881651055553028break-line" style="line-height:1px;height:1px;width:260px;background-color:#b5b5b5" width="260" height="1" bgcolor="#b5b5b5"> </td>
                                                                                    </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td style="font-size:12px;height:12px;line-height:0" height="12"></td>
                                                                        </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                                <tr style="background-color:#ffffff">
                                                    <td id="m_-8959881651055553028layout-row-margin708" style="background-color:#ffffff" valign="top">
                                                        <table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0">
                                                            <tbody>
                                                            <tr id="m_-8959881651055553028layout-row708">
                                                                <td id="m_-8959881651055553028layout-row-padding708" valign="top">
                                                                    <table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0">
                                                                        <tbody>
                                                                        <tr>
                                                                            <td valign="top" height="30">
                                                                                <div style="margin:0;outline:none;padding:0;height:30px">
                                                                                    <table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0">
                                                                                        <tbody>
                                                                                        <tr>
                                                                                            <td width="650" valign="top" height="30">&nbsp;</td>
                                                                                        </tr>
                                                                                        </tbody>
                                                                                    </table>
                                                                                </div>
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
                                                <tr style="background-color:#ffffff">
                                                    <td id="m_-8959881651055553028layout-row-margin699" style="padding:0;background-color:#ffffff" valign="top">
                                                        <table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0">
                                                            <tbody>
                                                            <tr id="m_-8959881651055553028layout-row699" style="margin:0;padding:0;background-color:#ffffff">
                                                                <td id="m_-8959881651055553028layout-row-padding699" style="background-color:#ffffff;padding:0px 26px 0px 26px" valign="top">
                                                                    <table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0">
                                                                        <tbody>
                                                                        <tr>
                                                                            <td id="m_-8959881651055553028text_div631" style="line-height:150%;margin:0;outline:none;padding:0;color:inherit;font-size:12px;font-weight:inherit;line-height:1.5;text-decoration:inherit;font-family:Arial" width="598" valign="top" align="left">
                                                                                <div style="line-height:150%;margin:0;outline:none;padding:0;line-height:1.5">
                                                                                    <div style="margin:0;outline:none;padding:0;text-align:center">
                                                                                        <p style="margin:0;outline:none;padding:0;color:inherit;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;text-align:left"></p>
                                                                                        <div style="margin:0;outline:none;padding:0;text-align:center;color:#1259af"><span style="color:#1259af;font-size:14px;font-weight:inherit;line-height:inherit;text-decoration:inherit;font-family:arial,helvetica,sans">Αν θέλεις να ενημερώνεσαι καθημερινά για τα νέα της ΗΟΜΙ και να μαθαίνεις πρώτος για τις πιο πρόσφατες αγγελίες μας, ακολούθησε μας στα Social Media</span></div>
                                                                                        <p style="margin:0;outline:none;padding:0;color:inherit;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit"></p>
                                                                                    </div>
                                                                                </div>
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
                                                <tr style="background-color:#ffffff">
                                                    <td id="m_-8959881651055553028layout-row-margin701" style="padding:0;background-color:#ffffff" valign="top">
                                                        <table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0">
                                                            <tbody>
                                                            <tr id="m_-8959881651055553028layout-row701">
                                                                <td id="m_-8959881651055553028layout-row-padding701" style="padding:0" valign="top">
                                                                    <table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0">
                                                                        <tbody>
                                                                        <tr>
                                                                            <td valign="top" height="11">
                                                                                <div style="margin:0;outline:none;padding:0;height:11px">
                                                                                    <table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0">
                                                                                        <tbody>
                                                                                        <tr>
                                                                                            <td style="background-color:#ffffff" width="650" valign="top" height="11">&nbsp;</td>
                                                                                        </tr>
                                                                                        </tbody>
                                                                                    </table>
                                                                                </div>
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
                                                <tr style="background-color:#ffffff">
                                                    <td id="m_-8959881651055553028layout-row-margin700" style="padding:0px;background-color:#ffffff" valign="top">
                                                        <table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0">
                                                            <tbody>
                                                            <tr id="m_-8959881651055553028layout-row700" style="background-color:#ffffff">
                                                                <td id="m_-8959881651055553028layout-row-padding700" style="background-color:#ffffff;padding:5px" valign="top">
                                                                    <table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0">
                                                                        <tbody>
                                                                        <tr>
                                                                            <td>
                                                                                <table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0">
                                                                                    <tbody>
                                                                                    <tr>
                                                                                        <td width="650" align="left">
                                                                                            <center style="margin:0;outline:none;padding:0;font-size:0px">
                                                                                                <table class="m_-8959881651055553028_ac_social_table" style="font-size:0;min-width:auto!important;margin:auto!important;display:inline-block!important;text-align:center!important" cellspacing="0" cellpadding="0" align="center">
                                                                                                    <tbody>
                                                                                                    <tr>
                                                                                                        <td style="display:inline-block!important;font-size:0;width:40px!important" width="40" valign="middle" align="center">
                                                                                                            <div style="margin:0;outline:none;padding:0"><a href="https://www.facebook.com/homigreece/" id="m_-8959881651055553028facebook" style="margin:0;outline:none;padding:0;color:#045fb4" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://homi.acemlnc.com/lt.php?notrack%3D1%26s%3D66f8b3adaac660033ea1e3f2f6fe87ac%26i%3D50A383A0A388&amp;source=gmail&amp;ust=1591434055230000&amp;usg=AOvVaw3hPA1l0gNAq0qUQII2IL-8"><img src="https://ci3.googleusercontent.com/proxy/GdbTDD6APpjXXyay9gcHY2yPn1KAMBDZGlcxVn9qbHy2odEJbgon1MJuynWI-lvvdoMmGLVpnshbmIwnclsuHqoovO1eQFTyeEqC8BfiK-Bl1w=s0-d-e1-ft#https://homi.img-us6.com/_social_/flat-color-round-facebook.png" style="border:none" class="CToWUd" width="40" border="0"></a></div>
                                                                                                        </td>
                                                                                                        <td style="display:inline-block!important;font-size:0;width:15px!important" width="15">&nbsp;</td>
                                                                                                        <td style="display:inline-block!important;font-size:0;width:40px!important" width="40" valign="middle" align="center">
                                                                                                            <div style="margin:0;outline:none;padding:0"><a href="https://www.instagram.com/homigreece/" id="m_-8959881651055553028instagram" style="margin:0;outline:none;padding:0;color:#045fb4" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://homi.acemlnc.com/lt.php?notrack%3D1%26s%3D66f8b3adaac660033ea1e3f2f6fe87ac%26i%3D50A383A0A389&amp;source=gmail&amp;ust=1591434055230000&amp;usg=AOvVaw3ztzpXgCtYRQu1k8b_se89"><img src="https://ci6.googleusercontent.com/proxy/KVh7BS2Jf9ltfS_IurBkgfRURnu_gLxG-tr6DEbYAVg9HD-X6XGGAnUhSgSbHtmkU5_SpxRjX0O8uMRBlZXznplZBDXgSaoHo1jasIO7vl0vfhI=s0-d-e1-ft#https://homi.img-us6.com/_social_/flat-color-round-instagram.png" style="border:none" class="CToWUd" width="40" border="0"></a></div>
                                                                                                        </td>
                                                                                                        <td style="display:inline-block!important;font-size:0;width:15px!important" width="15">&nbsp;</td>
                                                                                                        <td style="display:inline-block!important;font-size:0;width:40px!important" width="40" valign="middle" align="center">
                                                                                                            <div style="margin:0;outline:none;padding:0"><a href="https://homi.com.gr" id="m_-8959881651055553028website" style="margin:0;outline:none;padding:0;color:#045fb4" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://homi.acemlnc.com/lt.php?notrack%3D1%26s%3D66f8b3adaac660033ea1e3f2f6fe87ac%26i%3D50A383A0A387&amp;source=gmail&amp;ust=1591434055230000&amp;usg=AOvVaw14mF7-xUy64u6TGIKEU5kF"><img src="https://ci6.googleusercontent.com/proxy/6jmzrplCInuN_vMRqv0hSnU7D8YdNdGpqh6xDNTF6rtjrIFVttRMyud6MESJd09xwONO1CDs5Z2KH9czHcP9aYTeXJ6JfYRgjJdJ4WJAJZlD=s0-d-e1-ft#https://homi.img-us6.com/_social_/flat-color-round-website.png" style="border:none" class="CToWUd" width="40" border="0"></a></div>
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                    </tbody>
                                                                                                </table>
                                                                                            </center>
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
                                                <tr style="background-color:#ffffff">
                                                    <td id="m_-8959881651055553028layout-row-margin702" style="padding:0;background-color:#ffffff" valign="top">
                                                        <table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0">
                                                            <tbody>
                                                            <tr id="m_-8959881651055553028layout-row702">
                                                                <td id="m_-8959881651055553028layout-row-padding702" style="padding:0" valign="top">
                                                                    <table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0">
                                                                        <tbody>
                                                                        <tr>
                                                                            <td valign="top" height="24">
                                                                                <div style="margin:0;outline:none;padding:0;height:24px">
                                                                                    <table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0">
                                                                                        <tbody>
                                                                                        <tr>
                                                                                            <td style="background-color:#ffffff" width="650" valign="top" height="24">&nbsp;</td>
                                                                                        </tr>
                                                                                        </tbody>
                                                                                    </table>
                                                                                </div>
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
                                                <tr style="background-color:#ffffff">
                                                    <td id="m_-8959881651055553028layout-row-margin697" style="padding:0;background-color:#ffffff" valign="top">
                                                        <table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0">
                                                            <tbody>
                                                            <tr id="m_-8959881651055553028layout-row697" style="margin:0;padding:0;background-color:#1259af">
                                                                <td id="m_-8959881651055553028layout-row-border697" style="border-color:#ffffff;border-style:solid;border-width:1px" valign="top">
                                                                    <table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0">
                                                                        <tbody>
                                                                        <tr>
                                                                            <td id="m_-8959881651055553028layout-row-padding697" style="background-color:#1259af;padding:20px 26px 20px 26px" valign="top">
                                                                                <table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0">
                                                                                    <tbody>
                                                                                    <tr>
                                                                                        <td id="m_-8959881651055553028text_div629" style="margin:0;outline:none;padding:0;color:inherit;font-size:12px;font-weight:inherit;line-height:1;text-decoration:inherit;font-family:Arial" width="596" valign="top" align="left">
                                                                                            <div style="margin:0;outline:none;padding:0;color:#ffffff">
                                                                                                <div style="margin:0;outline:none;padding:0;color:#ffffff">
                                                                                                    <p style="margin:0;outline:none;padding:0;color:#ffffff;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;text-align:center"><span style="color:#ffffff;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit">Το παρόν email αποτελεί ανακοίνωση νομικού περιεχομένου. Δεν αποτελεί προϊόν μάρκετινγκ ή προοωθητική ενέργεια. Για το λόγο αυτό λάβατε το
                                                                                          προκείμενο email, παρόλο που ενδέχεται να είχατε απεγγραφεί<br>από τις προωθητικές μας ενημερώσεις.</span>
                                                                                                    </p>
                                                                                                </div>
                                                                                            </div>
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
                                                <tr style="background-color:#ffffff">
                                                    <td id="m_-8959881651055553028layout-row-margin698" style="padding:0;background-color:#ffffff" valign="top">
                                                        <table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0">
                                                            <tbody>
                                                            <tr id="m_-8959881651055553028layout-row698" style="margin:0;padding:0;background-color:#1259af">
                                                                <td id="m_-8959881651055553028layout-row-border698" style="border-color:#ffffff;border-style:solid;border-width:1px" valign="top">
                                                                    <table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0">
                                                                        <tbody>
                                                                        <tr>
                                                                            <td id="m_-8959881651055553028layout-row-padding698" style="background-color:#1259af;padding:20px 26px 20px 20px" valign="top">
                                                                                <table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0">
                                                                                    <tbody>
                                                                                    <tr>
                                                                                        <td id="m_-8959881651055553028text_div630" style="margin:0;outline:none;padding:0;color:inherit;font-size:12px;font-weight:inherit;line-height:1;text-decoration:inherit;font-family:Arial" width="602" valign="top" align="left">
                                                                                            <div style="margin:0;outline:none;padding:0;color:#ffffff">
                                                                                                <div style="margin:0;outline:none;padding:0;color:#ffffff">
                                                                                                    <div style="margin:0;outline:none;padding:0;text-align:center;color:#ffffff"><span style="color:#ffffff;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit"><span style="color:#ffffff;font-size:12px;font-weight:normal;line-height:inherit;text-decoration:inherit;font-family:arial;font-style:normal">Copyright © 2020 </span><a href="https://homi.com.gr/el/" style="margin:0;outline:none;padding:0;color:#ffffff;text-decoration:underline" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://homi.acemlnc.com/lt.php?notrack%3D1%26s%3D66f8b3adaac660033ea1e3f2f6fe87ac%26i%3D50A383A0A387&amp;source=gmail&amp;ust=1591434055230000&amp;usg=AOvVaw14mF7-xUy64u6TGIKEU5kF"><span style="color:#ffffff;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit"><span class="il">homi</span>.com.gr</span></a> <br><span style="color:#ffffff;font-size:12px;font-weight:normal;line-height:inherit;text-decoration:inherit;font-family:arial;font-style:normal">Με επιφύλαξη κάθε νόμιμου δικαιώµατος</span></span><br style="color:#ffffff"></div>
                                                                                                </div>
                                                                                            </div>
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
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <img src="https://ci4.googleusercontent.com/proxy/rb4-GVNixrGDnCgJRijSUJ-bj17l9ni8hCxArNbEj-T7mwPPZxXOZuqGzFDi5ynIKZfzx7bturOWgXMSSIvYBi-M-Hsz7RDt7eBY7dxQqkAfeo_mIiTvHjCnIJ8-hWWuXjA9aOC4Oq29T9rz5TrJYTG4qTAx0g=s0-d-e1-ft#https://homi.acemlnc.com/lt.php?notrack=1&amp;nl=0&amp;c=50&amp;m=383&amp;s=66f8b3adaac660033ea1e3f2f6fe87ac&amp;l=open" style="display:block;width:1px!important;min-width:1px!important;max-width:1px!important;height:1px!important;border:0;overflow:hidden" class="CToWUd" width="1" height="1" border="0">
                <div id="m_-8959881651055553028ac-footer" style="clear:both;background-color:inherit;background:inherit;min-width:100%;padding:20px;color:#000000;font-size:11px;font-family:arial,helvetica,sans-serif;line-height:140%;line-height:1.4;text-align:center;box-sizing:border-box">
                    <center>
                        Sent to: <span style="font-size:11px;font-family:arial,helvetica,sans-serif;font-weight:normal;text-decoration:none;outline:none">
                            <a href="mailto:<?php echo $recipient_email; ?>" target="_blank"><?php echo $recipient_email; ?></a>
                        </span>
                        <br>
                        <br>
                        <span class="il">HOMI</span> Real Estate,  190 Syggrou Avenue, 17671 Athens, Greece
                    </center>
                    <div class="yj6qo"></div>
                    <div class="adL"></div>
                </div>
                <div class="adL">
                    <br clear="all">
                </div>
            </div>
            <div class="adL"></div>
        </div>


        <?php

        return ob_get_clean();

    }


    /**
     * @param $viewing ViewingRequest
     * @param $recipient_email string
     *
     * @return string
     */
    private function get_viewer_template( $viewing, $recipient_email ){

        ob_start();

        ?>

        <div id="m_-8722678283782923852ac-designer" class="m_-8722678283782923852body" style="font-family:Arial;line-height:1.1;margin:0px;background-color:#cce0ff;width:100%;text-align:center">
            <div style="display:none;padding:0;height:1px;font-size:1px;background-color:inherit!important;color:inherit!important;line-height:1px">
                Η συνάντηση δεν έχει ακόμα επιβεβαιωθεί. Εκκρεμεί η έγκριση του ιδιοκτήτη.
            </div>
            <div style="margin:0px;outline:none;padding:0px;color:#000000;font-family:arial;line-height:1.1;width:100%;background-color:#cce0ff;background:#cce0ff;text-align:center">
                <table style="font-size:14px;min-width:auto;background-color:#cce0ff;background:#cce0ff" width="100%" cellspacing="0" cellpadding="0" border="0" align="left">
                    <tbody>
                    <tr>
                        <td width="100%" valign="top" align="center">
                            <table style="font-size:14px;min-width:auto;max-width:650px" width="650" cellspacing="0" cellpadding="0" border="0" bgcolor="#cce0ff">
                                <tbody>
                                <tr>
                                    <td id="m_-8722678283782923852layout_table_c77b40ab55d6d148f7948a1928133748118bb704" style="background-color:#ffffff" width="650" valign="top" align="center">
                                        <table style="font-size:14px;min-width:100%;background-color:#ffffff" width="650" cellspacing="0" cellpadding="0" border="0">
                                            <tbody>
                                            <tr style="background-color:#ffffff">
                                                <td id="m_-8722678283782923852layout-row-margin741" style="padding:0;background-color:#ffffff" valign="top">
                                                    <table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0">
                                                        <tbody>
                                                        <tr id="m_-8722678283782923852layout-row741">
                                                            <td id="m_-8722678283782923852layout-row-padding741" style="padding:0" valign="top">
                                                                <table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0">
                                                                    <tbody>
                                                                    <tr>
                                                                        <td valign="top" height="30">
                                                                            <div style="margin:0;outline:none;padding:0;height:30px">
                                                                                <table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0">
                                                                                    <tbody>
                                                                                    <tr>
                                                                                        <td style="background-color:#cce0ff" width="650" valign="top" height="30">&nbsp;</td>
                                                                                    </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
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
                                            <tr style="background-color:#ffffff">
                                                <td id="m_-8722678283782923852layout-row-margin727" style="padding:0px;background-color:#ffffff" valign="top">
                                                    <table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0">
                                                        <tbody>
                                                        <tr id="m_-8722678283782923852layout-row727" style="background-color:#1259af" align="center">
                                                            <td id="m_-8722678283782923852layout-row-padding727" style="background-color:#1259af;padding:7px" valign="top">
                                                                <table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0">
                                                                    <tbody>
                                                                    <tr>
                                                                        <td width="636" valign="top" align="center"><a href="https://homi.com.gr/el/" style="margin:0;outline:none;padding:0;color:#045fb4;display:block;min-width:100%" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://homi.acemlnc.com/lt.php?notrack%3D1%26s%3D66f8b3adaac660033ea1e3f2f6fe87ac%26i%3D52A385A0A398&amp;source=gmail&amp;ust=1591434055266000&amp;usg=AOvVaw1Bn0x7GL1dzz-Tl8ZQ94oZ"><img src="https://ci6.googleusercontent.com/proxy/3HHk2__ZcjKjKwPjlGzVGZYeiFP4pgBVRuZOcTpviiCuN8_kZ4Wl9H_ldGzw-0P1jFKGvu0nGM9IuS3-eJKJ5_JvX92KKfCjPMF7j4PhCtJcurWkjckGXYkKiOKm2hV0xq-MWA=s0-d-e1-ft#https://homi.imgus11.com/public//3db214c35e4a1e4c80f1c80ce920183b.png?r=296642475" alt="" style="border:none;display:block;outline:none;width:128px;opacity:1;max-width:100%" class="CToWUd" width="128"></a></td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                            <tr style="background-color:#ffffff">
                                                <td id="m_-8722678283782923852layout-row-margin735" style="padding:3px 0px 0px 0px;background-color:#ffffff" valign="top">
                                                    <table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0">
                                                        <tbody>
                                                        <tr id="m_-8722678283782923852layout-row735" style="margin:0;padding:0;background-color:#e2e5eb">
                                                            <td id="m_-8722678283782923852layout-row-padding735" style="background-color:#e2e5eb;padding:20px 0px 20px 0px" valign="top">
                                                                <table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0">
                                                                    <tbody>
                                                                    <tr>
                                                                        <td id="m_-8722678283782923852text_div667" style="margin:0;outline:none;padding:0;color:inherit;font-size:12px;font-weight:inherit;line-height:1;text-decoration:inherit;font-family:Arial" width="650" valign="top" align="left">
                                                                            <div style="margin:0;outline:none;padding:0;font-size:25px;font-family:arial,helvetica,sans">
                                                                                <div style="margin:0;outline:none;padding:0;color:#ffffff"></div>
                                                                                <div style="margin:0;outline:none;padding:0;font-family:arial,helvetica,sans;font-weight:700;font-size:25px;text-align:center"><span style="color:#1259af;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit"><span style="color:inherit;font-size:inherit;font-weight:700;line-height:inherit;text-decoration:inherit;font-family:arial,helvetica,sans;text-align:inherit">Το αίτημα σου </span><span style="color:inherit;font-size:inherit;font-weight:700;line-height:inherit;text-decoration:inherit;font-family:arial,helvetica,sans;text-align:inherit">είναι σε εκκρεμότητα</span></span></div>
                                                                            </div>
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
                                            <tr style="background-color:#ffffff">
                                                <td id="m_-8722678283782923852layout-row-margin961" style="padding:3px 0px 0px 0px;background-color:#ffffff" valign="top">
                                                    <table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0">
                                                        <tbody>
                                                        <tr id="m_-8722678283782923852layout-row961" style="margin:0;padding:0;background-color:#ffffff">
                                                            <td id="m_-8722678283782923852layout-row-padding961" style="background-color:#ffffff;padding:19px 0px 0px 0px" valign="top">
                                                                <table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0">
                                                                    <tbody>
                                                                    <tr>
                                                                        <td id="m_-8722678283782923852text_div892" style="margin:0;outline:none;padding:0;color:inherit;font-size:12px;font-weight:inherit;line-height:1;text-decoration:inherit;font-family:Arial" width="650" valign="top" align="left">
                                                                            <div style="margin:0;outline:none;padding:0;font-size:17px">
                                                                                <div style="margin:0;outline:none;padding:0;text-align:center"><span style="color:#555555;font-size:inherit;font-weight:400;line-height:inherit;text-decoration:inherit;font-family:arial;font-style:italic">Η συνάντηση</span><span style="color:#555555;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;font-style:italic;font-family:arial"> δεν έχει ακόμα επιβεβαιωθεί. Εκκρεμεί η έγκριση του ιδιοκτήτη.</span><br></div>
                                                                            </div>
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
                                            <tr style="background-color:#ffffff">
                                                <td id="m_-8722678283782923852layout-row-margin736" style="padding:3px 0px 0px 0px;background-color:#ffffff" valign="top">
                                                    <table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0">
                                                        <tbody>
                                                        <tr id="m_-8722678283782923852layout-row736" style="margin:0;padding:0;background-color:#ffffff">
                                                            <td id="m_-8722678283782923852layout-row-padding736" style="background-color:#ffffff;padding:25px 0px 3px 0px" valign="top">
                                                                <table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0">
                                                                    <tbody>
                                                                    <tr>
                                                                        <td id="m_-8722678283782923852text_div668" style="margin:0;outline:none;padding:0;color:inherit;font-size:12px;font-weight:inherit;line-height:1;text-decoration:inherit;font-family:Arial" width="650" valign="top" align="left">
                                                                            <div style="margin:0;outline:none;padding:0;font-size:18px">
                                                                                <div style="margin:0;outline:none;padding:0;font-family:arial;font-style:normal;color:#555555;text-align:center"><span style="color:#555555;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;font-family:arial"><span style="color:#000000;font-size:inherit;font-weight:bold;line-height:inherit;text-decoration:inherit">Στοιχεία Συνάντησης</span><br></span></div>
                                                                            </div>
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
                                            <tr style="background-color:#ffffff">
                                                <td id="m_-8722678283782923852layout-row-margin739" style="padding:0;background-color:#ffffff" valign="top">
                                                    <table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0">
                                                        <tbody>
                                                        <tr id="m_-8722678283782923852layout-row739" style="background-color:#ffffff">
                                                            <td id="m_-8722678283782923852layout-row-padding739" style="line-height:0;background-color:#ffffff;padding:0" valign="top">
                                                                <table style="font-size:14px;min-width:100%;border-collapse:collapse;line-height:0" width="100%" cellspacing="0" cellpadding="0" border="0">
                                                                    <tbody>
                                                                    <tr>
                                                                        <td style="font-size:12px;height:12px;line-height:0" height="12"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="line-height:0" width="650" height="1" align="center">
                                                                            <table style="font-size:14px;min-width:auto!important;border-collapse:collapse;line-height:0;width:40%;max-width:40%" width="260" height="1" cellspacing="0" cellpadding="0" border="0" align="center">
                                                                                <tbody>
                                                                                <tr>
                                                                                    <td class="m_-8722678283782923852break-line" style="line-height:1px;height:1px;width:260px;background-color:#b5b5b5" width="260" height="1" bgcolor="#b5b5b5"> </td>
                                                                                </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="font-size:12px;height:12px;line-height:0" height="12"></td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                            <tr style="background-color:#ffffff">
                                                <td id="m_-8722678283782923852layout-row-margin738" style="padding:0px;background-color:#ffffff" valign="top">
                                                    <table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0">
                                                        <tbody>
                                                        <tr id="m_-8722678283782923852layout-row738" style="margin:0;padding:0;background-color:#ffffff">
                                                            <td id="m_-8722678283782923852layout-row-padding738" style="background-color:#ffffff;padding:10px 0px 20px 0px" valign="top">
                                                                <table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0">
                                                                    <tbody>
                                                                    <tr>
                                                                        <td id="m_-8722678283782923852text_div670" style="margin:0;outline:none;padding:0;color:inherit;font-size:12px;font-weight:inherit;line-height:1;text-decoration:inherit;font-family:Arial" width="650" valign="top" align="left">
                                                                            <div style="margin:0;outline:none;padding:0;color:#045fb4">
                                                                                <div style="margin:0;outline:none;padding:0;font-size:17px;color:#045fb4;font-family:arial">
                                                                                    <div style="margin:0;outline:none;padding:0;font-family:arial;font-style:normal;color:#1259af;font-size:17px;text-align:center"><span style="color:#1259af;font-size:inherit;font-weight:bold;line-height:inherit;text-decoration:inherit;font-family:arial">Ημερομηνία:</span></div>
                                                                                    <span style="color:#045fb4;font-size:17px;font-weight:400;line-height:inherit;text-decoration:inherit;font-family:arial;font-style:normal">
                                                                           <div style="margin:0;outline:none;padding:0;font-family:arial;color:#555555;text-align:center;font-size:15px"><span style="color:#555555;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;font-family:arial;margin-top: 10px;display: block;">
                                                                                   <?php echo $viewing->date; ?>
                                                                               </span>
                                                                           </div>
                                                                           <div style="margin:0;outline:none;padding:0;font-family:arial;text-align:center;color:#045fb4"><br style="font-family:arial;font-weight:inherit;color:#045fb4;color:#045fb4"></div>
                                                                           <div style="margin:0;outline:none;padding:0;font-family:arial;font-weight:inherit;color:#045fb4;text-align:center"><span style="color:#1259af;font-size:inherit;font-weight:bold;line-height:inherit;text-decoration:inherit;font-family:arial"><span style="color:#1259af;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit">Ώρα: </span><br style="color:#1259af"></span><span style="color:#045fb4;font-size:15px;font-weight:inherit;line-height:inherit;text-decoration:inherit;font-family:arial">
                                                                                   <span style="color:#555555;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;display: block;margin-top: 10px;">
                                                                                       <?php echo $viewing->time; ?>
                                                                                   </span>
                                                                                   <span style="color:#1259af;font-size:17px;font-weight:bold;line-height:inherit;text-decoration:inherit;font-family:arial;font-style:normal"><br style="color:#1259af"><span style="color:#1259af;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit">Διεύθυνση: </span><br style="color:#1259af"></span>
                                                                                   <span style="color:#555555;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;display: block;margin-top: 10px;">
                                                                                       <?php echo $viewing->property_address; ?>, <?php echo $viewing->property_title; ?>
                                                                                       <br style="color:#555555">
                                                                                   </span><br>
                                                                                   <span style="color:#1259af;font-size:17px;font-weight:bold;line-height:inherit;text-decoration:inherit;font-family:arial;font-style:normal"><br style="color:#1259af"><span style="color:#1259af;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit">Ιδιοκτήτης: </span><br style="color:#1259af"></span>
                                                                                   <span style="color:#555555;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;display: block;margin-top: 10px;">
                                                                                       <?php echo $viewing->landlord->first_name; ?>
                                                                                   </span>
                                                                               </span></div>
                                                                        </span>
                                                                                </div>
                                                                            </div>
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
                                            <tr style="background-color:#ffffff">
                                                <td id="m_-8722678283782923852layout-row-margin742" style="padding:5px;background-color:#ffffff" valign="top">
                                                    <table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0">
                                                        <tbody>
                                                        <tr id="m_-8722678283782923852layout-row742">
                                                            <td id="m_-8722678283782923852layout-row-padding742" style="padding:12px" valign="top">
                                                                <table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0">
                                                                    <tbody>
                                                                    <tr>
                                                                        <td width="616" valign="top" align="left">
                                                                            <div style="margin:0;outline:none;padding:0;text-align:center">
                                                                                <a href="<?php echo $viewing->property_link; ?>" style="margin:0;outline:none;padding:16px;color:#ffffff;background-color:#1259af;border:1px solid #030303;border-radius:3px;font-family:Arial;font-size:16px;display:inline-block;line-height:1.1;text-align:center;text-decoration:none" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://homi.acemlnc.com/lt.php?notrack%3D1%26s%3D66f8b3adaac660033ea1e3f2f6fe87ac%26i%3D52A385A0A399&amp;source=gmail&amp;ust=1591434055267000&amp;usg=AOvVaw0Ayk_FL9TIO0RcnyDvc3OA"> <span style="color:#ffffff;font-family:Arial;font-size:16px;font-weight:bold"> Δες το ακίνητο </span> </a>
                                                                            </div>
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
                                            <tr style="background-color:#ffffff">
                                                <td id="m_-8722678283782923852layout-row-margin737" style="padding:0;background-color:#ffffff" valign="top">
                                                    <table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0">
                                                        <tbody>
                                                        <tr id="m_-8722678283782923852layout-row737">
                                                            <td id="m_-8722678283782923852layout-row-padding737" style="padding:0" valign="top">
                                                                <table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0">
                                                                    <tbody>
                                                                    <tr>
                                                                        <td valign="top" height="10">
                                                                            <div style="margin:0;outline:none;padding:0;height:10px">
                                                                                <table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0">
                                                                                    <tbody>
                                                                                    <tr>
                                                                                        <td style="background-color:#ffffff" width="650" valign="top" height="10">&nbsp;</td>
                                                                                    </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
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
                                            <tr style="background-color:#ffffff">
                                                <td id="m_-8722678283782923852layout-row-margin728" style="padding:0;background-color:#ffffff" valign="top">
                                                    <table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0">
                                                        <tbody>
                                                        <tr id="m_-8722678283782923852layout-row728" style="margin:0;padding:0;background-color:#ffffff">
                                                            <td id="m_-8722678283782923852layout-row-padding728" style="background-color:#ffffff;padding:10px 10px 0px 10px" valign="top">
                                                                <table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0">
                                                                    <tbody>
                                                                    <tr>
                                                                        <td id="m_-8722678283782923852text_div660" style="line-height:150%;margin:0;outline:none;padding:0;color:inherit;font-size:12px;font-weight:inherit;line-height:1.5;text-decoration:inherit;font-family:Arial" width="630" valign="top" align="left">
                                                                            <div style="line-height:150%;margin:0;outline:none;padding:0;line-height:1.5">
                                                                                <div style="margin:0;outline:none;padding:0;text-align:center">
                                                                                    <p style="margin:0;outline:none;padding:0;color:inherit;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;text-align:left"></p>
                                                                                    <div style="margin:0;outline:none;padding:0;text-align:justify;font-size:15px"><span style="color:inherit;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;font-family:arial,helvetica,sans"> Αγαπητή/έ
                                                                                            <span style="color:#000000;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit"><?php echo $viewing->viewer->first_name; ?>,</span></span></div>
                                                                                    <span style="color:inherit;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;text-align:center">
                                                                           <div style="margin:0;outline:none;padding:0;text-align:justify;font-size:15px"><br style="font-family:arial,helvetica,sans"></div>
                                                                           <div style="margin:0;outline:none;padding:0;text-align:justify;font-size:15px"><span style="color:#000000;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;font-family:arial,helvetica,sans"> Το αίτημα σου για επίδειξη του παραπάνω ακινήτου έχει αποσταλεί στον ιδιοκτήτη και είναι σε εκρεμμότητα.</span></div>
                                                                           <div style="margin:0;outline:none;padding:0;text-align:justify;font-size:15px"><br style="font-family:arial,helvetica,sans"></div>
                                                                           <div style="margin:0;outline:none;padding:0;text-align:justify;font-size:15px"><span style="color:inherit;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;font-family:arial,helvetica,sans"> Θα σε ειδοποιήσουμε για την εξέλιξή του μόλις ο ιδιοκτήτης απαντήσει στο αίτημα σου. </span></div>
                                                                        </span>
                                                                                    <p style="margin:0;outline:none;padding:0;color:inherit;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit"></p>
                                                                                </div>
                                                                            </div>
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
                                            <tr style="background-color:#ffffff">
                                                <td id="m_-8722678283782923852layout-row-margin744" style="padding:5px;background-color:#ffffff" valign="top">
                                                    <table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0">
                                                        <tbody>
                                                        <tr id="m_-8722678283782923852layout-row744">
                                                            <td id="m_-8722678283782923852layout-row-padding744" style="padding:12px" valign="top">
                                                                <table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0">
                                                                    <tbody>
                                                                    <tr>
                                                                        <td width="616" valign="top" align="left">
                                                                            <div style="margin:0;outline:none;padding:0;text-align:center">
                                                                                <a href="<?php echo site_url( EmailActionsConstants::VIEWINGS_URL ); ?>" style="margin:0;outline:none;padding:16px;color:#ffffff;background-color:#1259af;border:1px solid #030303;border-radius:3px;font-family:Arial;font-size:16px;display:inline-block;line-height:1.1;text-align:center;text-decoration:none" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://homi.acemlnc.com/lt.php?notrack%3D1%26s%3D66f8b3adaac660033ea1e3f2f6fe87ac%26i%3D52A385A0A400&amp;source=gmail&amp;ust=1591434055267000&amp;usg=AOvVaw0nlb7Xap-hTqz6kc-taVIU"> <span style="color:#ffffff;font-family:Arial;font-size:16px;font-weight:bold"> Δες όλα τα αιτήματα επίδειξης του ακινήτου </span> </a>
                                                                            </div>
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
                                            <tr style="background-color:#ffffff">
                                                <td id="m_-8722678283782923852layout-row-margin743" style="padding:0;background-color:#ffffff" valign="top">
                                                    <table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0">
                                                        <tbody>
                                                        <tr id="m_-8722678283782923852layout-row743" style="margin:0;padding:0;background-color:#ffffff">
                                                            <td id="m_-8722678283782923852layout-row-padding743" style="background-color:#ffffff;padding:10px" valign="top">
                                                                <table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0">
                                                                    <tbody>
                                                                    <tr>
                                                                        <td id="m_-8722678283782923852text_div675" style="line-height:150%;margin:0;outline:none;padding:0;color:inherit;font-size:12px;font-weight:inherit;line-height:1.5;text-decoration:inherit;font-family:Arial" width="630" valign="top" align="left">
                                                                            <div style="line-height:150%;margin:0;outline:none;padding:0;line-height:1.5">
                                                                                <div style="margin:0;outline:none;padding:0;font-family:arial;color:#000000;font-size:15px;font-style:normal;font-weight:400;text-align:justify"><span style="color:inherit;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;font-family:arial"><span style="color:inherit;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;font-family:arial">Με εκτίμηση,</span><br style="font-family:arial;font-weight:inherit;color:inherit"></span></div>
                                                                                <div style="margin:0;outline:none;padding:0;font-family:arial;color:#000000;font-style:normal;font-weight:400;text-align:justify"><span style="color:inherit;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;font-family:arial"><span style="color:inherit;font-size:15px;font-weight:inherit;line-height:inherit;text-decoration:inherit">Η ομάδα της </span><span style="color:#1259af;font-size:inherit;font-weight:700;line-height:inherit;text-decoration:inherit;font-family:arial"><span style="color:inherit;font-size:15px;font-weight:inherit;line-height:inherit;text-decoration:inherit">ΗΟΜΙ</span><br><span style="color:inherit;font-size:11px;font-weight:inherit;line-height:inherit;text-decoration:inherit"> </span><br></span></span></div>
                                                                            </div>
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
                                            <tr style="background-color:#ffffff">
                                                <td id="m_-8722678283782923852layout-row-margin958" style="padding:0;background-color:#ffffff" valign="top">
                                                    <table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0">
                                                        <tbody>
                                                        <tr id="m_-8722678283782923852layout-row958" style="background-color:#ffffff">
                                                            <td id="m_-8722678283782923852layout-row-padding958" style="line-height:0;background-color:#ffffff;padding:0" valign="top">
                                                                <table style="font-size:14px;min-width:100%;border-collapse:collapse;line-height:0" width="100%" cellspacing="0" cellpadding="0" border="0">
                                                                    <tbody>
                                                                    <tr>
                                                                        <td style="font-size:12px;height:12px;line-height:0" height="12"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="line-height:0" width="650" height="1" align="center">
                                                                            <table style="font-size:14px;min-width:auto!important;border-collapse:collapse;line-height:0;width:40%;max-width:40%" width="260" height="1" cellspacing="0" cellpadding="0" border="0" align="center">
                                                                                <tbody>
                                                                                <tr>
                                                                                    <td class="m_-8722678283782923852break-line" style="line-height:1px;height:1px;width:260px;background-color:#b5b5b5" width="260" height="1" bgcolor="#b5b5b5"> </td>
                                                                                </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="font-size:12px;height:12px;line-height:0" height="12"></td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                            <tr style="background-color:#ffffff">
                                                <td id="m_-8722678283782923852layout-row-margin740" style="background-color:#ffffff" valign="top">
                                                    <table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0">
                                                        <tbody>
                                                        <tr id="m_-8722678283782923852layout-row740">
                                                            <td id="m_-8722678283782923852layout-row-padding740" valign="top">
                                                                <table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0">
                                                                    <tbody>
                                                                    <tr>
                                                                        <td valign="top" height="30">
                                                                            <div style="margin:0;outline:none;padding:0;height:30px">
                                                                                <table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0">
                                                                                    <tbody>
                                                                                    <tr>
                                                                                        <td width="650" valign="top" height="30">&nbsp;</td>
                                                                                    </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
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
                                            <tr style="background-color:#ffffff">
                                                <td id="m_-8722678283782923852layout-row-margin731" style="padding:0;background-color:#ffffff" valign="top">
                                                    <table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0">
                                                        <tbody>
                                                        <tr id="m_-8722678283782923852layout-row731" style="margin:0;padding:0;background-color:#ffffff">
                                                            <td id="m_-8722678283782923852layout-row-padding731" style="background-color:#ffffff;padding:0px 26px 0px 26px" valign="top">
                                                                <table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0">
                                                                    <tbody>
                                                                    <tr>
                                                                        <td id="m_-8722678283782923852text_div663" style="line-height:150%;margin:0;outline:none;padding:0;color:inherit;font-size:12px;font-weight:inherit;line-height:1.5;text-decoration:inherit;font-family:Arial" width="598" valign="top" align="left">
                                                                            <div style="line-height:150%;margin:0;outline:none;padding:0;line-height:1.5">
                                                                                <div style="margin:0;outline:none;padding:0;text-align:center">
                                                                                    <p style="margin:0;outline:none;padding:0;color:inherit;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;text-align:left"></p>
                                                                                    <div style="margin:0;outline:none;padding:0;text-align:center;color:#045fb4"><span style="color:#045fb4;font-size:14px;font-weight:inherit;line-height:inherit;text-decoration:inherit;font-family:arial,helvetica,sans">Αν θέλεις να ενημερώνεσαι καθημερινά για τα νέα της ΗΟΜΙ και να μαθαίνεις πρώτος για τις πιο πρόσφατες αγγελίες μας, ακολούθησε μας στα Social Media</span></div>
                                                                                    <p style="margin:0;outline:none;padding:0;color:inherit;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit"></p>
                                                                                </div>
                                                                            </div>
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
                                            <tr style="background-color:#ffffff">
                                                <td id="m_-8722678283782923852layout-row-margin733" style="padding:0;background-color:#ffffff" valign="top">
                                                    <table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0">
                                                        <tbody>
                                                        <tr id="m_-8722678283782923852layout-row733">
                                                            <td id="m_-8722678283782923852layout-row-padding733" style="padding:0" valign="top">
                                                                <table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0">
                                                                    <tbody>
                                                                    <tr>
                                                                        <td style="font-size:11px;height:11px;line-height:11px" valign="top" height="11">
                                                                            <div style="margin:0;outline:none;padding:0;height:11px">
                                                                                <table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0">
                                                                                    <tbody>
                                                                                    <tr>
                                                                                        <td style="font-size:11px;height:11px;line-height:11px;background-color:#ffffff" width="650" valign="top" height="11">&nbsp;</td>
                                                                                    </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
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
                                            <tr style="background-color:#ffffff">
                                                <td id="m_-8722678283782923852layout-row-margin732" style="padding:0px;background-color:#ffffff" valign="top">
                                                    <table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0">
                                                        <tbody>
                                                        <tr id="m_-8722678283782923852layout-row732" style="background-color:#ffffff">
                                                            <td id="m_-8722678283782923852layout-row-padding732" style="background-color:#ffffff;padding:5px" valign="top">
                                                                <table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0">
                                                                    <tbody>
                                                                    <tr>
                                                                        <td>
                                                                            <table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0">
                                                                                <tbody>
                                                                                <tr>
                                                                                    <td width="650" align="left">
                                                                                        <center style="margin:0;outline:none;padding:0;font-size:0px">
                                                                                            <table class="m_-8722678283782923852_ac_social_table" style="font-size:0;min-width:auto!important;margin:auto!important;display:inline-block!important;text-align:center!important" cellspacing="0" cellpadding="0" align="center">
                                                                                                <tbody>
                                                                                                <tr>
                                                                                                    <td style="display:inline-block!important;font-size:0;width:40px!important" width="40" valign="middle" align="center">
                                                                                                        <div style="margin:0;outline:none;padding:0"><a href="https://www.facebook.com/homigreece/" id="m_-8722678283782923852facebook" style="margin:0;outline:none;padding:0;color:#045fb4" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://homi.acemlnc.com/lt.php?notrack%3D1%26s%3D66f8b3adaac660033ea1e3f2f6fe87ac%26i%3D52A385A0A401&amp;source=gmail&amp;ust=1591434055267000&amp;usg=AOvVaw14_0Yf_1kP3LnikBcc4U8u"><img src="https://ci3.googleusercontent.com/proxy/GdbTDD6APpjXXyay9gcHY2yPn1KAMBDZGlcxVn9qbHy2odEJbgon1MJuynWI-lvvdoMmGLVpnshbmIwnclsuHqoovO1eQFTyeEqC8BfiK-Bl1w=s0-d-e1-ft#https://homi.img-us6.com/_social_/flat-color-round-facebook.png" style="border:none" class="CToWUd" width="40" border="0"></a></div>
                                                                                                    </td>
                                                                                                    <td style="display:inline-block!important;font-size:0;width:15px!important" width="15">&nbsp;</td>
                                                                                                    <td style="display:inline-block!important;font-size:0;width:40px!important" width="40" valign="middle" align="center">
                                                                                                        <div style="margin:0;outline:none;padding:0"><a href="https://www.instagram.com/homigreece/" id="m_-8722678283782923852instagram" style="margin:0;outline:none;padding:0;color:#045fb4" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://homi.acemlnc.com/lt.php?notrack%3D1%26s%3D66f8b3adaac660033ea1e3f2f6fe87ac%26i%3D52A385A0A402&amp;source=gmail&amp;ust=1591434055267000&amp;usg=AOvVaw2hYt7iDrNZhKnGnzuHTwVa"><img src="https://ci6.googleusercontent.com/proxy/KVh7BS2Jf9ltfS_IurBkgfRURnu_gLxG-tr6DEbYAVg9HD-X6XGGAnUhSgSbHtmkU5_SpxRjX0O8uMRBlZXznplZBDXgSaoHo1jasIO7vl0vfhI=s0-d-e1-ft#https://homi.img-us6.com/_social_/flat-color-round-instagram.png" style="border:none" class="CToWUd" width="40" border="0"></a></div>
                                                                                                    </td>
                                                                                                    <td style="display:inline-block!important;font-size:0;width:15px!important" width="15">&nbsp;</td>
                                                                                                    <td style="display:inline-block!important;font-size:0;width:40px!important" width="40" valign="middle" align="center">
                                                                                                        <div style="margin:0;outline:none;padding:0"><a href="https://homi.com.gr" id="m_-8722678283782923852website" style="margin:0;outline:none;padding:0;color:#045fb4" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://homi.acemlnc.com/lt.php?notrack%3D1%26s%3D66f8b3adaac660033ea1e3f2f6fe87ac%26i%3D52A385A0A398&amp;source=gmail&amp;ust=1591434055267000&amp;usg=AOvVaw0u9S1OWhLZmlFGNBfdhcNx"><img src="https://ci6.googleusercontent.com/proxy/6jmzrplCInuN_vMRqv0hSnU7D8YdNdGpqh6xDNTF6rtjrIFVttRMyud6MESJd09xwONO1CDs5Z2KH9czHcP9aYTeXJ6JfYRgjJdJ4WJAJZlD=s0-d-e1-ft#https://homi.img-us6.com/_social_/flat-color-round-website.png" style="border:none" class="CToWUd" width="40" border="0"></a></div>
                                                                                                    </td>
                                                                                                </tr>
                                                                                                </tbody>
                                                                                            </table>
                                                                                        </center>
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
                                            <tr style="background-color:#ffffff">
                                                <td id="m_-8722678283782923852layout-row-margin734" style="padding:0;background-color:#ffffff" valign="top">
                                                    <table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0">
                                                        <tbody>
                                                        <tr id="m_-8722678283782923852layout-row734">
                                                            <td id="m_-8722678283782923852layout-row-padding734" style="padding:0" valign="top">
                                                                <table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0">
                                                                    <tbody>
                                                                    <tr>
                                                                        <td valign="top" height="24">
                                                                            <div style="margin:0;outline:none;padding:0;height:24px">
                                                                                <table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0">
                                                                                    <tbody>
                                                                                    <tr>
                                                                                        <td style="background-color:#ffffff" width="650" valign="top" height="24">&nbsp;</td>
                                                                                    </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
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
                                            <tr style="background-color:#ffffff">
                                                <td id="m_-8722678283782923852layout-row-margin729" style="padding:0;background-color:#ffffff" valign="top">
                                                    <table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0">
                                                        <tbody>
                                                        <tr id="m_-8722678283782923852layout-row729" style="margin:0;padding:0;background-color:#1259af">
                                                            <td id="m_-8722678283782923852layout-row-border729" style="border-color:#ffffff;border-style:solid;border-width:1px" valign="top">
                                                                <table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0">
                                                                    <tbody>
                                                                    <tr>
                                                                        <td id="m_-8722678283782923852layout-row-padding729" style="background-color:#1259af;padding:20px 26px 20px 26px" valign="top">
                                                                            <table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0">
                                                                                <tbody>
                                                                                <tr>
                                                                                    <td id="m_-8722678283782923852text_div661" style="margin:0;outline:none;padding:0;color:inherit;font-size:12px;font-weight:inherit;line-height:1;text-decoration:inherit;font-family:Arial" width="596" valign="top" align="left">
                                                                                        <div style="margin:0;outline:none;padding:0;color:#ffffff">
                                                                                            <div style="margin:0;outline:none;padding:0;color:#ffffff">
                                                                                                <p style="margin:0;outline:none;padding:0;color:#ffffff;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;text-align:center"><span style="color:#ffffff;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit">Το παρόν email αποτελεί ανακοίνωση νομικού περιεχομένου. Δεν αποτελεί προϊόν μάρκετινγκ ή προοωθητική ενέργεια. Για το λόγο αυτό λάβατε το
                                                                                       προκείμενο email, παρόλο που ενδέχεται να είχατε απεγγραφεί<br>από τις προωθητικές μας ενημερώσεις.</span>
                                                                                                </p>
                                                                                            </div>
                                                                                        </div>
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
                                            <tr style="background-color:#ffffff">
                                                <td id="m_-8722678283782923852layout-row-margin730" style="padding:0;background-color:#ffffff" valign="top">
                                                    <table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0">
                                                        <tbody>
                                                        <tr id="m_-8722678283782923852layout-row730" style="margin:0;padding:0;background-color:#1259af">
                                                            <td id="m_-8722678283782923852layout-row-border730" style="border-color:#ffffff;border-style:solid;border-width:1px" valign="top">
                                                                <table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0">
                                                                    <tbody>
                                                                    <tr>
                                                                        <td id="m_-8722678283782923852layout-row-padding730" style="background-color:#1259af;padding:20px 26px 20px 20px" valign="top">
                                                                            <table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0">
                                                                                <tbody>
                                                                                <tr>
                                                                                    <td id="m_-8722678283782923852text_div662" style="margin:0;outline:none;padding:0;color:inherit;font-size:12px;font-weight:inherit;line-height:1;text-decoration:inherit;font-family:Arial" width="602" valign="top" align="left">
                                                                                        <div style="margin:0;outline:none;padding:0;color:#ffffff">
                                                                                            <div style="margin:0;outline:none;padding:0;color:#ffffff">
                                                                                                <div style="margin:0;outline:none;padding:0;text-align:center;color:#ffffff"><span style="color:#ffffff;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit"><span style="color:#ffffff;font-size:12px;font-weight:normal;line-height:inherit;text-decoration:inherit;font-family:arial;font-style:normal">Copyright © 2020 </span><a href="https://homi.com.gr" style="margin:0;outline:none;padding:0;color:#ffffff;text-decoration:underline" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://homi.acemlnc.com/lt.php?notrack%3D1%26s%3D66f8b3adaac660033ea1e3f2f6fe87ac%26i%3D52A385A0A398&amp;source=gmail&amp;ust=1591434055267000&amp;usg=AOvVaw0u9S1OWhLZmlFGNBfdhcNx"><span style="color:#ffffff;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit"><span class="il">homi</span>.com.gr</span></a> <br><span style="color:#ffffff;font-size:12px;font-weight:normal;line-height:inherit;text-decoration:inherit;font-family:arial;font-style:normal">Με επιφύλαξη κάθε νόμιμου δικαιώµατος</span></span><br style="color:#ffffff"></div>
                                                                                            </div>
                                                                                        </div>
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
                        </td>
                    </tr>
                    </tbody>
                </table>
                <div class="yj6qo ajU">
                    <div id=":17e" class="ajR" role="button" tabindex="0" data-tooltip="Εμφάνιση περιεχομένου που έχει περικοπεί" aria-label="Εμφάνιση περιεχομένου που έχει περικοπεί" aria-expanded="false"><img class="ajT" src="//ssl.gstatic.com/ui/v1/icons/mail/images/cleardot.gif"></div>
                </div>
                <div class="adL"></div>
            </div>
            <div class="adL">
                <div class="adm">
                    <div id="q_56" class="ajR h4">
                        <div class="ajT"></div>
                    </div>
                </div>
                <div class="h5">
                    <img src="https://ci3.googleusercontent.com/proxy/cNbBAeNPFlG8wFST8rK0dUHBmBWEAWKw_UshAw7wXgODtE3tJuIVIQx1NlO6xmLPqU6jdfdkqxoRNu472-9wLAWcBqZNfUH1BIi9vMbqRCNvCXMEPcm31KdkzZm9RHymMbu4V5c7uYz9Y9rPwr8ngfY9hHfKTQ=s0-d-e1-ft#https://homi.acemlnc.com/lt.php?notrack=1&amp;nl=0&amp;c=52&amp;m=385&amp;s=66f8b3adaac660033ea1e3f2f6fe87ac&amp;l=open" style="display:block;width:1px!important;min-width:1px!important;max-width:1px!important;height:1px!important;border:0;overflow:hidden" class="CToWUd" width="1" height="1" border="0">
                    <div id="m_-8722678283782923852ac-footer" style="clear:both;background-color:inherit;background:inherit;min-width:100%;padding:20px;color:#000000;font-size:11px;font-family:arial,helvetica,sans-serif;line-height:140%;line-height:1.4;text-align:center;box-sizing:border-box">
                        <center>
                            Sent to: <span style="font-size:11px;font-family:arial,helvetica,sans-serif;font-weight:normal;text-decoration:none;outline:none">
                                <a href="mailto:<?php echo $recipient_email; ?>" target="_blank"><?php echo $recipient_email; ?></a></span>
                            <br>
                            <br>
                            <span class="il">HOMI</span> Real Estate,  190 Syggrou Avenue, 17671 Athens, Greece
                        </center>
                    </div>
                    <br clear="all">
                </div>
            </div>
        </div>

        <?php

        return ob_get_clean();


    }

}
