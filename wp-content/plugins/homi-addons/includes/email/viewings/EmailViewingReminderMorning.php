<?php


class EmailViewingReminderMorning
{

    /**
     * @param $recipient string
     * @param $viewing ViewingRequest
     * @param $recipient_email string
     *
     * @return string
     */
    public function get_template( $recipient, $viewing, $recipient_email ){

        return ( $recipient === EmailActionsConstants::RECIPIENT_TYPES['landlord'] ? $this->get_landlord_template( $viewing, $recipient_email ): $this->get_viewer_template( $viewing, $recipient_email ) );

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

        <div id="m_-9187844321380631497ac-designer" class="m_-9187844321380631497body" style="font-family:Arial;line-height:1.1;margin:0px;background-color:#cce0ff;width:100%;text-align:center">		<div style="display:none;padding:0;height:1px;font-size:1px;background-color:inherit!important;color:inherit!important;line-height:1px">
                Σου υπενθυμίζουμε το ραντεβού σου με τον επισκέπτη σήμερα
            </div>
            <div style="margin:0px;outline:none;padding:0px;color:#000000;font-family:arial;line-height:1.1;width:100%;background-color:#cce0ff;background:#cce0ff;text-align:center"><table style="font-size:14px;min-width:auto;background-color:#cce0ff;background:#cce0ff" width="100%" cellspacing="0" cellpadding="0" border="0" align="left"><tbody><tr><td width="100%" valign="top" align="center"><table style="font-size:14px;min-width:auto;max-width:650px" width="650" cellspacing="0" cellpadding="0" border="0" bgcolor="#cce0ff"><tbody><tr><td id="m_-9187844321380631497layout_table_a4504f57886fd3ff1bd104a9ce569f417cbb2f12" style="background-color:#ffffff" width="650" valign="top" align="center"><table style="font-size:14px;min-width:100%;background-color:#ffffff" width="650" cellspacing="0" cellpadding="0" border="0"><tbody><tr style="background-color:#ffffff"><td id="m_-9187844321380631497layout-row-margin1522" style="padding:0;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_-9187844321380631497layout-row1522"><td id="m_-9187844321380631497layout-row-padding1522" style="padding:0" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td valign="top" height="30"><div style="margin:0;outline:none;padding:0;height:30px"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td style="background-color:#cce0ff" width="650" valign="top" height="30">&nbsp;</td>
                                                                                    </tr>
                                                                                    </tbody></table>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    </tbody></table>
                                                            </td>
                                                        </tr>
                                                        </tbody></table>
                                                </td>
                                            </tr>
                                            <tr style="background-color:#ffffff"><td id="m_-9187844321380631497layout-row-margin1510" style="padding:0px;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_-9187844321380631497layout-row1510" style="background-color:#045fb4" align="center"><td id="m_-9187844321380631497layout-row-padding1510" style="background-color:#045fb4;padding:7px" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td width="636" valign="top" align="center"><a href="https://homi.com.gr/el/" style="margin:0;outline:none;padding:0;color:#045fb4;display:block;min-width:100%" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://homi.acemlnc.com/lt.php?notrack%3D1%26s%3D66f8b3adaac660033ea1e3f2f6fe87ac%26i%3D74A448A0A559&amp;source=gmail&amp;ust=1591434055077000&amp;usg=AOvVaw0b-RbXZPCOoPv0MDFpdL3V"><img src="https://ci3.googleusercontent.com/proxy/igUSZs9vp9O15EOkLv34JcOwhOsqTP6XFVQWSRE0nX5qmt-xV_RyyNuZM1UYLeZnOkq9t7MF9ctLP1nkRVVo4S1VFMye5pORZlH91RNs9dt-M4qseTw2ND0BAWKVV9nYQEzMtIk=s0-d-e1-ft#https://homi.imgus11.com/public//3db214c35e4a1e4c80f1c80ce920183b.png?r=2091742247" alt="" style="border:none;display:block;outline:none;width:128px;opacity:1;max-width:100%" class="CToWUd" width="128"></a></td>
                                                                    </tr>
                                                                    </tbody></table>
                                                            </td>
                                                        </tr>
                                                        </tbody></table>
                                                </td>
                                            </tr>
                                            <tr style="background-color:#ffffff"><td id="m_-9187844321380631497layout-row-margin1517" style="padding:2px 0px 0px 0px;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_-9187844321380631497layout-row1517" style="margin:0;padding:0;background-color:#e2e5eb"><td id="m_-9187844321380631497layout-row-padding1517" style="background-color:#e2e5eb;padding:20px 0px 20px 0px" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td id="m_-9187844321380631497text_div1448" style="margin:0;outline:none;padding:0;color:inherit;font-size:12px;font-weight:inherit;line-height:1;text-decoration:inherit;font-family:Arial" width="650" valign="top" align="left"> <div style="margin:0;outline:none;padding:0;font-size:25px;color:#ffffff;font-family:arial,helvetica,sans"><div style="margin:0;outline:none;padding:0"></div>
                                                                                <div style="margin:0;outline:none;padding:0;color:#1259af;font-family:arial,helvetica,sans;font-weight:700;font-size:25px;text-align:center"><span style="color:#1259af;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit">Υπενθύμιση Συνάντησης</span></div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    </tbody></table>
                                                            </td>
                                                        </tr>
                                                        </tbody></table>
                                                </td>
                                            </tr>
                                            <tr style="background-color:#ffffff"><td id="m_-9187844321380631497layout-row-margin1518" style="padding:3px 0px 0px 0px;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_-9187844321380631497layout-row1518" style="margin:0;padding:0;background-color:#ffffff"><td id="m_-9187844321380631497layout-row-padding1518" style="background-color:#ffffff;padding:25px 0px 3px 0px" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td id="m_-9187844321380631497text_div1449" style="margin:0;outline:none;padding:0;color:inherit;font-size:12px;font-weight:inherit;line-height:1;text-decoration:inherit;font-family:Arial" width="650" valign="top" align="left">
                                                                            <div style="margin:0;outline:none;padding:0;font-size:18px"> <div style="margin:0;outline:none;padding:0;font-family:arial;font-style:normal;color:#555555;text-align:center"><span style="color:#555555;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;font-family:arial"><span style="color:#000000;font-size:inherit;font-weight:bold;line-height:inherit;text-decoration:inherit">Στοιχεία Συνάντησης</span><br></span></div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    </tbody></table>
                                                            </td>
                                                        </tr>
                                                        </tbody></table>
                                                </td>
                                            </tr>
                                            <tr style="background-color:#ffffff"><td id="m_-9187844321380631497layout-row-margin1520" style="padding:0;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_-9187844321380631497layout-row1520" style="background-color:#ffffff"><td id="m_-9187844321380631497layout-row-padding1520" style="line-height:0;background-color:#ffffff;padding:0" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:collapse;line-height:0" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td style="font-size:12px;height:12px;line-height:0" height="12"></td>
                                                                    </tr>
                                                                    <tr><td style="line-height:0" width="650" height="1" align="center"> <table style="font-size:14px;min-width:auto!important;border-collapse:collapse;line-height:0;width:40%;max-width:40%" width="260" height="1" cellspacing="0" cellpadding="0" border="0" align="center"><tbody><tr><td class="m_-9187844321380631497break-line" style="line-height:1px;height:1px;width:260px;background-color:#b5b5b5" width="260" height="1" bgcolor="#b5b5b5"> </td>
                                                                                </tr>
                                                                                </tbody></table>
                                                                        </td>
                                                                    </tr>
                                                                    <tr><td style="font-size:12px;height:12px;line-height:0" height="12"></td>
                                                                    </tr>
                                                                    </tbody></table>
                                                            </td>
                                                        </tr>
                                                        </tbody></table>
                                                </td>
                                            </tr>
                                            <tr style="background-color:#ffffff"><td id="m_-9187844321380631497layout-row-margin1519" style="padding:0px;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_-9187844321380631497layout-row1519" style="margin:0;padding:0;background-color:#ffffff"><td id="m_-9187844321380631497layout-row-padding1519" style="background-color:#ffffff;padding:10px 0px 20px 0px" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td id="m_-9187844321380631497text_div1450" style="margin:0;outline:none;padding:0;color:inherit;font-size:12px;font-weight:inherit;line-height:1;text-decoration:inherit;font-family:Arial" width="650" valign="top" align="left"> <div style="margin:0;outline:none;padding:0;color:#045fb4"> <div style="margin:0;outline:none;padding:0;font-size:17px;color:#045fb4;font-family:arial"><div style="margin:0;outline:none;padding:0;font-family:arial;font-style:normal;color:#1259af;font-size:17px;text-align:center"><span style="color:#1259af;font-size:inherit;font-weight:bold;line-height:inherit;text-decoration:inherit;font-family:arial">Ημερομηνία:</span></div>
                                                                                    <span style="color:#045fb4;font-size:17px;font-weight:400;line-height:inherit;text-decoration:inherit;font-family:arial;font-style:normal"><div style="margin:0;outline:none;padding:0;font-family:arial;color:#555555;text-align:center;font-size:15px;display: block;margin-top: 10px;"><span style="color:#555555;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;font-family:arial"><?php echo $viewing->date; ?></span></div>
<div style="margin:0;outline:none;padding:0;font-family:arial;text-align:center;color:#045fb4"><br style="font-family:arial;font-weight:inherit;color:#045fb4;color:#045fb4"></div>
<div style="margin:0;outline:none;padding:0;font-family:arial;font-weight:inherit;color:#045fb4;text-align:center"><span style="color:#1259af;font-size:inherit;font-weight:bold;line-height:inherit;text-decoration:inherit;font-family:arial"><span style="color:#1259af;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit">Ώρα:</span><br style="color:#1259af"></span><span style="color:#045fb4;font-size:15px;font-weight:inherit;line-height:inherit;text-decoration:inherit;font-family:arial"><span style="color:#555555;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;display: block;margin-top: 10px;"><?php echo $viewing->time; ?></span><span style="color:#1259af;font-size:17px;font-weight:bold;line-height:inherit;text-decoration:inherit;font-family:arial;font-style:normal"><br style="color:#1259af"><span style="color:#1259af;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit">Διεύθυνση:</span><br style="color:#1259af"></span><span style="color:#555555;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;display: block;margin-top: 10px;"><?php echo $viewing->property_address; ?>, <?php echo $viewing->property_title; ?></span><br></span></div>
</span></div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    </tbody></table>
                                                            </td>
                                                        </tr>
                                                        </tbody></table>
                                                </td>
                                            </tr>
                                            <tr style="background-color:#ffffff"><td id="m_-9187844321380631497layout-row-margin1524" style="padding:0px;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_-9187844321380631497layout-row1524" style="margin:0;padding:0;background-color:#ffffff"><td id="m_-9187844321380631497layout-row-padding1524" style="background-color:#ffffff;padding:10px 0px 3px 0px" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td id="m_-9187844321380631497text_div1455" style="margin:0;outline:none;padding:0;color:inherit;font-size:12px;font-weight:inherit;line-height:1;text-decoration:inherit;font-family:Arial" width="650" valign="top" align="left"> <div style="margin:0;outline:none;padding:0;font-size:18px"> <div style="margin:0;outline:none;padding:0;font-family:arial;font-style:normal;color:#555555;text-align:center"><span style="color:#555555;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;font-family:arial"><span style="color:#000000;font-size:inherit;font-weight:bold;line-height:inherit;text-decoration:inherit">Στοιχεία Επισκέπτη</span><br></span></div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    </tbody></table>
                                                            </td>
                                                        </tr>
                                                        </tbody></table>
                                                </td>
                                            </tr>
                                            <tr style="background-color:#ffffff"><td id="m_-9187844321380631497layout-row-margin1525" style="padding:0;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_-9187844321380631497layout-row1525" style="background-color:#ffffff"><td id="m_-9187844321380631497layout-row-padding1525" style="line-height:0;background-color:#ffffff;padding:0" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:collapse;line-height:0" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td style="font-size:12px;height:12px;line-height:0" height="12"></td>
                                                                    </tr>
                                                                    <tr><td style="line-height:0" width="650" height="1" align="center"> <table style="font-size:14px;min-width:auto!important;border-collapse:collapse;line-height:0;width:40%;max-width:40%" width="260" height="1" cellspacing="0" cellpadding="0" border="0" align="center"><tbody><tr><td class="m_-9187844321380631497break-line" style="line-height:1px;height:1px;width:260px;background-color:#b5b5b5" width="260" height="1" bgcolor="#b5b5b5"> </td>
                                                                                </tr>
                                                                                </tbody></table>
                                                                        </td>
                                                                    </tr>
                                                                    <tr><td style="font-size:12px;height:12px;line-height:0" height="12"></td>
                                                                    </tr>
                                                                    </tbody></table>
                                                            </td>
                                                        </tr>
                                                        </tbody></table>
                                                </td>
                                            </tr>
                                            <tr style="background-color:#ffffff"><td id="m_-9187844321380631497layout-row-margin1526" style="padding:0px;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_-9187844321380631497layout-row1526" style="margin:0;padding:0;background-color:#ffffff"><td id="m_-9187844321380631497layout-row-padding1526" style="background-color:#ffffff;padding:10px 0px 20px 0px" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td id="m_-9187844321380631497text_div1457" style="margin:0;outline:none;padding:0;color:inherit;font-size:12px;font-weight:inherit;line-height:1;text-decoration:inherit;font-family:Arial" width="650" valign="top" align="left"> <div style="margin:0;outline:none;padding:0"><div style="margin:0;outline:none;padding:0;color:#045fb4;font-family:arial;font-size:17px;font-style:normal;text-align:center"></div>
                                                                                <div style="margin:0;outline:none;padding:0;text-align:center;color:#1259af"><span style="color:#1259af;font-size:17px;font-weight:bold;line-height:inherit;text-decoration:inherit;font-family:arial;text-align:inherit">Όνομα:<br></span>
                                                                                    <span style="color:#555555;font-size:15px;font-weight:inherit;line-height:inherit;text-decoration:inherit">
                                                                                        <br>
                                                                                        <?php echo $viewing->viewer->first_name; ?>
                                                                                        <br>
                                                                                        <?php echo $viewing->viewer->last_name; ?>
                                                                                    </span><br></div>
                                                                                <div style="margin:0;outline:none;padding:0;font-family:arial;font-weight:400;font-style:normal;text-align:center;color:#555555">
                                                                                    <span style="color:#555555;font-size:inherit;font-weight:400;line-height:inherit;text-decoration:inherit;font-family:arial;text-align:inherit"><span style="color:inherit;font-size:19px;font-weight:inherit;line-height:inherit;text-decoration:inherit"> </span><br><span style="color:#000000;font-size:12px;font-weight:400;line-height:inherit;text-decoration:inherit;font-family:arial;font-style:normal;text-align:center;margin:0"><span style="color:inherit;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;font-family:arial">
                                                                                                <span style="color:#1259af;font-size:17px;font-weight:bold;line-height:inherit;text-decoration:inherit;font-family:arial">Τηλέφωνο:</span>
                                                                                                <br style="font-family:arial;font-weight:bold;color:#045fb4;font-size:17px"></span>
                                                                                            <span style="color:#555555;font-size:15px;font-weight:inherit;line-height:inherit;text-decoration:inherit;display: block;margin-top: 10px;">
                                                                                                <?php echo $viewing->viewer->phone; ?>
                                                                                                <br>
                                                                                                <br style="font-family:arial;font-weight:400;color:#555555;font-size:16px;font-style:normal">
                                                                                                <span style="color:inherit;font-size:12px;font-weight:inherit;line-height:inherit;text-decoration:inherit;font-family:arial;font-style:normal">
                                                                                                    <span style="color:#1259af;font-size:17px;font-weight:bold;line-height:inherit;text-decoration:inherit;font-family:arial">Email:</span>
                                                                                                    <br style="font-family:arial;font-weight:bold;color:#045fb4;font-size:17px"></span></span></span>
                                                                                        <span style="color:inherit;font-size:15px;font-weight:inherit;line-height:inherit;text-decoration:inherit;font-style:normal;text-align:center;font-family:arial;margin:0;display: block;margin-top: 10px;">
                                                                                            <?php echo $viewing->viewer->email; ?>
                                                                                        </span></span></div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    </tbody></table>
                                                            </td>
                                                        </tr>
                                                        </tbody></table>
                                                </td>
                                            </tr>
                                            <tr style="background-color:#ffffff"><td id="m_-9187844321380631497layout-row-margin1511" style="padding:0;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_-9187844321380631497layout-row1511" style="margin:0;padding:0;background-color:#ffffff"><td id="m_-9187844321380631497layout-row-padding1511" style="background-color:#ffffff;padding:10px 10px 0px 10px" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td id="m_-9187844321380631497text_div1442" style="line-height:150%;margin:0;outline:none;padding:0;color:inherit;font-size:12px;font-weight:inherit;line-height:1.5;text-decoration:inherit;font-family:Arial" width="630" valign="top" align="left"> <div style="line-height:150%;margin:0;outline:none;padding:0;line-height:1.5"> <div style="margin:0;outline:none;padding:0;text-align:center"> <p style="margin:0;outline:none;padding:0;color:inherit;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;text-align:left"></p>
                                                                                    <div style="margin:0;outline:none;padding:0;text-align:justify;font-size:15px"><span style="color:inherit;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;font-family:arial,helvetica,sans"> Αγαπητή/έ <span style="color:#000000;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit"><?php echo $viewing->landlord->first_name; ?>,</span></span></div>
                                                                                    <span style="color:inherit;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;text-align:center"><div style="margin:0;outline:none;padding:0;text-align:justify;font-size:15px"><br style="font-family:arial,helvetica,sans"></div>
<div style="margin:0;outline:none;padding:0;text-align:left;font-size:15px"><span style="color:inherit;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;font-family:arial,helvetica,sans">Σου υπενθυμίζουμε το ραντεβού σου με τον επισκέπτη σήμερα (<?php echo $viewing->date; ?></span><span style="color:inherit;font-size:15px;font-weight:inherit;line-height:inherit;text-decoration:inherit"><span style="color:#045fb4;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;text-align:center"><span style="color:#000000;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit">)</span></span><span style="color:#045fb4;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;font-family:arial,helvetica,sans">
</span><span style="color:inherit;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;font-family:arial,helvetica,sans">στις <?php echo $viewing->time; ?></span></span><span style="color:#045fb4;font-size:15px;font-weight:inherit;line-height:inherit;text-decoration:inherit;text-align:center">. </span><span style="color:inherit;font-size:15px;font-weight:inherit;line-height:inherit;text-decoration:inherit;text-align:center">Η συνάντηση θα πραγματοποιηθεί στην παραπάνω δηλωμένη διεύθυνση ακινήτου. </span></div>
</span><p style="margin:0;outline:none;padding:0;color:inherit;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit"></p>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    </tbody></table>
                                                            </td>
                                                        </tr>
                                                        </tbody></table>
                                                </td>
                                            </tr>
                                            <tr style="background-color:#ffffff"><td id="m_-9187844321380631497layout-row-margin1523" style="padding:0;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_-9187844321380631497layout-row1523" style="margin:0;padding:0;background-color:#ffffff"><td id="m_-9187844321380631497layout-row-padding1523" style="background-color:#ffffff;padding:10px 10px 0px 10px" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td id="m_-9187844321380631497text_div1454" style="line-height:150%;margin:0;outline:none;padding:0;color:inherit;font-size:12px;font-weight:inherit;line-height:1.5;text-decoration:inherit;font-family:Arial" width="630" valign="top" align="left"> <div style="line-height:150%;margin:0;outline:none;padding:0;line-height:1.5"><div style="margin:0;outline:none;padding:0;font-family:arial;color:#000000;font-size:15px;text-align:justify"><span style="color:inherit;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;font-family:arial"><span style="color:inherit;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;font-family:arial"><br>Με εκτίμηση,</span><br style="font-family:arial;font-weight:inherit;color:inherit"></span></div>
                                                                                <div style="margin:0;outline:none;padding:0;font-family:arial;color:#000000;font-size:15px;font-style:normal;font-weight:400;text-align:justify"><span style="color:inherit;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;font-family:arial">Η ομάδα της <span style="color:#1259af;font-size:inherit;font-weight:700;line-height:inherit;text-decoration:inherit;font-family:arial">ΗΟΜΙ</span></span></div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    </tbody></table>
                                                            </td>
                                                        </tr>
                                                        </tbody></table>
                                                </td>
                                            </tr>
                                            <tr style="background-color:#ffffff"><td id="m_-9187844321380631497layout-row-margin1521" style="background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_-9187844321380631497layout-row1521"><td id="m_-9187844321380631497layout-row-padding1521" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td valign="top" height="30"><div style="margin:0;outline:none;padding:0;height:30px"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td width="650" valign="top" height="30">&nbsp;</td>
                                                                                    </tr>
                                                                                    </tbody></table>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    </tbody></table>
                                                            </td>
                                                        </tr>
                                                        </tbody></table>
                                                </td>
                                            </tr>
                                            <tr style="background-color:#ffffff"><td id="m_-9187844321380631497layout-row-margin1528" style="padding:0;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_-9187844321380631497layout-row1528" style="background-color:#ffffff"><td id="m_-9187844321380631497layout-row-padding1528" style="line-height:0;background-color:#ffffff;padding:0" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:collapse;line-height:0" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td style="font-size:12px;height:12px;line-height:0" height="12"></td>
                                                                    </tr>
                                                                    <tr><td style="line-height:0" width="650" height="1" align="center"> <table style="font-size:14px;min-width:auto!important;border-collapse:collapse;line-height:0;width:40%;max-width:40%" width="260" height="1" cellspacing="0" cellpadding="0" border="0" align="center"><tbody><tr><td class="m_-9187844321380631497break-line" style="line-height:1px;height:1px;width:260px;background-color:#b5b5b5" width="260" height="1" bgcolor="#b5b5b5"> </td>
                                                                                </tr>
                                                                                </tbody></table>
                                                                        </td>
                                                                    </tr>
                                                                    <tr><td style="font-size:12px;height:12px;line-height:0" height="12"></td>
                                                                    </tr>
                                                                    </tbody></table>
                                                            </td>
                                                        </tr>
                                                        </tbody></table>
                                                </td>
                                            </tr>
                                            <tr style="background-color:#ffffff"><td id="m_-9187844321380631497layout-row-margin1527" style="padding:0;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_-9187844321380631497layout-row1527" style="margin:0;padding:0;background-color:#ffffff"><td id="m_-9187844321380631497layout-row-padding1527" style="background-color:#ffffff;padding:10px 10px 0px 10px" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td id="m_-9187844321380631497text_div1458" style="line-height:150%;margin:0;outline:none;padding:0;color:inherit;font-size:12px;font-weight:inherit;line-height:1.5;text-decoration:inherit;font-family:Arial" width="630" valign="top" align="left"> <div style="line-height:150%;margin:0;outline:none;padding:0;font-size:12px;color:#555555;line-height:1.5"> <div style="margin:0;outline:none;padding:0;color:#555555"><div style="margin:0;outline:none;padding:0;text-align:center;font-family:arial;color:#555555"><div style="margin:0;outline:none;padding:0;text-align:center"><span style="color:#555555;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit">Σε περίπτωση που δεν μπορείς να παρευρεθείς στη συνάντηση, παρακαλούμε να μας ενημερώσεις άμεσα.</span></div>
                                                                                        <div style="margin:0;outline:none;padding:0;color:#555555"><span style="color:#555555;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit">Τηλέφωνο επικοινωνίας </span><span style="color:#555555;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;font-family:arial" lang="EN-AU">+30 215 215 1962</span></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    </tbody></table>
                                                            </td>
                                                        </tr>
                                                        </tbody></table>
                                                </td>
                                            </tr>
                                            <tr style="background-color:#ffffff"><td id="m_-9187844321380631497layout-row-margin1515" style="padding:0;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_-9187844321380631497layout-row1515"><td id="m_-9187844321380631497layout-row-padding1515" style="padding:0" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td valign="top" height="11"><div style="margin:0;outline:none;padding:0;height:11px"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td style="background-color:#ffffff" width="650" valign="top" height="11">&nbsp;</td>
                                                                                    </tr>
                                                                                    </tbody></table>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    </tbody></table>
                                                            </td>
                                                        </tr>
                                                        </tbody></table>
                                                </td>
                                            </tr>
                                            <tr style="background-color:#ffffff"><td id="m_-9187844321380631497layout-row-margin1514" style="padding:0px;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_-9187844321380631497layout-row1514" style="background-color:#ffffff"><td id="m_-9187844321380631497layout-row-padding1514" style="background-color:#ffffff;padding:5px" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0"><tbody><tr><td width="650" align="left"> <center style="margin:0;outline:none;padding:0;font-size:0px"> <table class="m_-9187844321380631497_ac_social_table" style="font-size:0;min-width:auto!important;margin:auto!important;display:inline-block!important;text-align:center!important" cellspacing="0" cellpadding="0" align="center"><tbody><tr><td style="display:inline-block!important;font-size:0;width:40px!important" width="40" valign="middle" align="center"><div style="margin:0;outline:none;padding:0"><a href="https://www.facebook.com/homigreece/" id="m_-9187844321380631497facebook" style="margin:0;outline:none;padding:0;color:#045fb4" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://homi.acemlnc.com/lt.php?notrack%3D1%26s%3D66f8b3adaac660033ea1e3f2f6fe87ac%26i%3D74A448A0A560&amp;source=gmail&amp;ust=1591434055077000&amp;usg=AOvVaw0cVuGSOG9nONfcK_43aZsv"><img src="https://ci3.googleusercontent.com/proxy/GdbTDD6APpjXXyay9gcHY2yPn1KAMBDZGlcxVn9qbHy2odEJbgon1MJuynWI-lvvdoMmGLVpnshbmIwnclsuHqoovO1eQFTyeEqC8BfiK-Bl1w=s0-d-e1-ft#https://homi.img-us6.com/_social_/flat-color-round-facebook.png" style="border:none" class="CToWUd" width="40" border="0"></a></div>
                                                                                                    </td>
                                                                                                    <td style="display:inline-block!important;font-size:0;width:15px!important" width="15">&nbsp;</td>
                                                                                                    <td style="display:inline-block!important;font-size:0;width:40px!important" width="40" valign="middle" align="center"><div style="margin:0;outline:none;padding:0"><a href="https://www.instagram.com/homigreece/" id="m_-9187844321380631497instagram" style="margin:0;outline:none;padding:0;color:#045fb4" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://homi.acemlnc.com/lt.php?notrack%3D1%26s%3D66f8b3adaac660033ea1e3f2f6fe87ac%26i%3D74A448A0A561&amp;source=gmail&amp;ust=1591434055077000&amp;usg=AOvVaw3RjzQDNm_zxAxBDxG2x1RU"><img src="https://ci6.googleusercontent.com/proxy/KVh7BS2Jf9ltfS_IurBkgfRURnu_gLxG-tr6DEbYAVg9HD-X6XGGAnUhSgSbHtmkU5_SpxRjX0O8uMRBlZXznplZBDXgSaoHo1jasIO7vl0vfhI=s0-d-e1-ft#https://homi.img-us6.com/_social_/flat-color-round-instagram.png" style="border:none" class="CToWUd" width="40" border="0"></a></div>
                                                                                                    </td>
                                                                                                    <td style="display:inline-block!important;font-size:0;width:15px!important" width="15">&nbsp;</td>
                                                                                                    <td style="display:inline-block!important;font-size:0;width:40px!important" width="40" valign="middle" align="center"><div style="margin:0;outline:none;padding:0"><a href="https://homi.com.gr/el/" id="m_-9187844321380631497website" style="margin:0;outline:none;padding:0;color:#045fb4" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://homi.acemlnc.com/lt.php?notrack%3D1%26s%3D66f8b3adaac660033ea1e3f2f6fe87ac%26i%3D74A448A0A559&amp;source=gmail&amp;ust=1591434055077000&amp;usg=AOvVaw0b-RbXZPCOoPv0MDFpdL3V"><img src="https://ci6.googleusercontent.com/proxy/6jmzrplCInuN_vMRqv0hSnU7D8YdNdGpqh6xDNTF6rtjrIFVttRMyud6MESJd09xwONO1CDs5Z2KH9czHcP9aYTeXJ6JfYRgjJdJ4WJAJZlD=s0-d-e1-ft#https://homi.img-us6.com/_social_/flat-color-round-website.png" style="border:none" class="CToWUd" width="40" border="0"></a></div>
                                                                                                    </td>
                                                                                                </tr>
                                                                                                </tbody></table>
                                                                                        </center> </td>
                                                                                </tr>
                                                                                </tbody></table>
                                                                        </td>
                                                                    </tr>
                                                                    </tbody></table>
                                                            </td>
                                                        </tr>
                                                        </tbody></table>
                                                </td>
                                            </tr>
                                            <tr style="background-color:#ffffff"><td id="m_-9187844321380631497layout-row-margin1516" style="padding:0;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_-9187844321380631497layout-row1516"><td id="m_-9187844321380631497layout-row-padding1516" style="padding:0" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td valign="top" height="24"><div style="margin:0;outline:none;padding:0;height:24px"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td style="background-color:#ffffff" width="650" valign="top" height="24">&nbsp;</td>
                                                                                    </tr>
                                                                                    </tbody></table>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    </tbody></table>
                                                            </td>
                                                        </tr>
                                                        </tbody></table>
                                                </td>
                                            </tr>
                                            <tr style="background-color:#ffffff"><td id="m_-9187844321380631497layout-row-margin1512" style="padding:0;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_-9187844321380631497layout-row1512" style="margin:0;padding:0;background-color:#1259af"><td id="m_-9187844321380631497layout-row-border1512" style="border-color:#ffffff;border-style:solid;border-width:1px" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td id="m_-9187844321380631497layout-row-padding1512" style="background-color:#1259af;padding:20px 26px 20px 26px" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td id="m_-9187844321380631497text_div1443" style="margin:0;outline:none;padding:0;color:inherit;font-size:12px;font-weight:inherit;line-height:1;text-decoration:inherit;font-family:Arial" width="596" valign="top" align="left"> <div style="margin:0;outline:none;padding:0;color:#ffffff"> <div style="margin:0;outline:none;padding:0;color:#ffffff"> <p style="margin:0;outline:none;padding:0;color:#ffffff;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;text-align:center"><span style="color:#ffffff;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit"><span style="color:#ffffff;font-size:12px;font-weight:400;line-height:inherit;text-decoration:inherit;font-family:arial;font-style:normal">Το παρόν email αποτελεί ανακοίνωση νομικού
περιεχομένου. Δεν αποτελεί προϊόν μάρκετινγκ ή προοωθητική ενέργεια. Για το λόγο αυτό λάβατε το προκείμενο email, παρόλο που ενδέχεται να είχατε απεγγραφεί</span><br><span style="color:#ffffff;font-size:12px;font-weight:400;line-height:inherit;text-decoration:inherit;font-family:arial;font-style:normal">από τις προωθητικές μας ενημερώσεις.</span></span></p>
                                                                                            </div>
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                                </tbody></table>
                                                                        </td>
                                                                    </tr>
                                                                    </tbody></table>
                                                            </td>
                                                        </tr>
                                                        </tbody></table>
                                                </td>
                                            </tr>
                                            <tr style="background-color:#ffffff"><td id="m_-9187844321380631497layout-row-margin1513" style="padding:0;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_-9187844321380631497layout-row1513" style="margin:0;padding:0;background-color:#1259af"><td id="m_-9187844321380631497layout-row-border1513" style="border-color:#ffffff;border-style:solid;border-width:1px" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td id="m_-9187844321380631497layout-row-padding1513" style="background-color:#1259af;padding:20px 26px 20px 20px" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td id="m_-9187844321380631497text_div1444" style="margin:0;outline:none;padding:0;color:inherit;font-size:12px;font-weight:inherit;line-height:1;text-decoration:inherit;font-family:Arial" width="602" valign="top" align="left"> <div style="margin:0;outline:none;padding:0;color:#ffffff"> <div style="margin:0;outline:none;padding:0;color:#ffffff"> <div style="margin:0;outline:none;padding:0;text-align:center;color:#ffffff"><span style="color:#ffffff;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit"><span style="color:#ffffff;font-size:12px;font-weight:normal;line-height:inherit;text-decoration:inherit;font-family:arial;font-style:normal">Copyright © 2020 </span><a href="https://homi.com.gr/el/" style="margin:0;outline:none;padding:0;color:#ffffff;text-decoration:underline" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://homi.acemlnc.com/lt.php?notrack%3D1%26s%3D66f8b3adaac660033ea1e3f2f6fe87ac%26i%3D74A448A0A559&amp;source=gmail&amp;ust=1591434055077000&amp;usg=AOvVaw0b-RbXZPCOoPv0MDFpdL3V"><span style="color:#ffffff;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit"><span class="il">homi</span>.com.gr</span></a> <br><span style="color:#ffffff;font-size:12px;font-weight:normal;line-height:inherit;text-decoration:inherit;font-family:arial;font-style:normal">Με επιφύλαξη κάθε νόμιμου δικαιώµατος</span></span><br style="color:#ffffff"></div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                                </tbody></table>
                                                                        </td>
                                                                    </tr>
                                                                    </tbody></table>
                                                            </td>
                                                        </tr>
                                                        </tbody></table>
                                                </td>
                                            </tr>
                                            </tbody></table>
                                    </td>
                                </tr>
                                </tbody></table>
                        </td>
                    </tr>
                    </tbody></table>
            </div>
            <img src="https://ci4.googleusercontent.com/proxy/wVvCwxiVSidqg4tmoPUd36RkmN4zrTOQ8jdr1h-khM_aCaEVpPSfmuBcidgipcJ3dVi_bDvxk1SWuGec63bN9-yWxuB1fzAvEpwDyCXQoD4NOgON8x4Ic5GOvktL3iUqatY7ctZjsI9cAHV1BvQxCBHZW_tvuA=s0-d-e1-ft#https://homi.acemlnc.com/lt.php?notrack=1&amp;nl=0&amp;c=74&amp;m=448&amp;s=66f8b3adaac660033ea1e3f2f6fe87ac&amp;l=open" style="display:block;width:1px!important;min-width:1px!important;max-width:1px!important;height:1px!important;border:0;overflow:hidden" class="CToWUd" width="1" height="1" border="0"><div id="m_-9187844321380631497ac-footer" style="clear:both;background-color:inherit;background:inherit;min-width:100%;padding:20px;color:#000000;font-size:11px;font-family:arial,helvetica,sans-serif;line-height:140%;line-height:1.4;text-align:center;box-sizing:border-box">
                <center>
                    Sent to: <span style="font-size:11px;font-family:arial,helvetica,sans-serif;font-weight:normal;text-decoration:none;outline:none"><a href="mailto:<?php echo $recipient_email; ?>" target="_blank"><?php echo $recipient_email; ?></a></span>
                    <br>
                    <br>
                    <a href="http://homi.acemlnc.com/proc.php?nl=0&amp;c=74&amp;m=448&amp;s=66f8b3adaac660033ea1e3f2f6fe87ac&amp;act=unsub" style="font-size:11px;font-family:arial,helvetica,sans-serif;font-weight:bold;text-decoration:underline" target="_blank" data-saferedirecturl="https://www.google.com/url?q=http://homi.acemlnc.com/proc.php?nl%3D0%26c%3D74%26m%3D448%26s%3D66f8b3adaac660033ea1e3f2f6fe87ac%26act%3Dunsub&amp;source=gmail&amp;ust=1591434055077000&amp;usg=AOvVaw1RKCDFkBBey3gTknSmVaCd"><span style="font-weight:bold;text-decoration:underline">Unsubscribe</span></a>
                    <br>
                    <br> <span class="il">HOMI</span> Real Estate,  190 Syggrou Avenue, 17671 Athens, Greece
                </center><div class="yj6qo"></div><div class="adL">
                </div></div><div class="adL">
                <br clear="all"></div></div>

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

        <div id="m_5762788011370099781ac-designer" class="m_5762788011370099781body" style="font-family:Arial;line-height:1.1;margin:0px;background-color:#cce0ff;width:100%;text-align:center">		<div style="display:none;padding:0;height:1px;font-size:1px;background-color:inherit!important;color:inherit!important;line-height:1px">
                Σου υπενθυμίζουμε το ραντεβού σου με τον ιδιοκτήτη σήμερα
            </div>
            <div style="margin:0px;outline:none;padding:0px;color:#000000;font-family:arial;line-height:1.1;width:100%;background-color:#cce0ff;background:#cce0ff;text-align:center"><table style="font-size:14px;min-width:auto;background-color:#cce0ff;background:#cce0ff" width="100%" cellspacing="0" cellpadding="0" border="0" align="left"><tbody><tr><td width="100%" valign="top" align="center"><table style="font-size:14px;min-width:auto;max-width:650px" width="650" cellspacing="0" cellpadding="0" border="0" bgcolor="#cce0ff"><tbody><tr><td id="m_5762788011370099781layout_table_296452443861a650287d65ae1b8893dd43fa0a75" style="background-color:#ffffff" width="650" valign="top" align="center"><table style="font-size:14px;min-width:100%;background-color:#ffffff" width="650" cellspacing="0" cellpadding="0" border="0"><tbody><tr style="background-color:#ffffff"><td id="m_5762788011370099781layout-row-margin1484" style="padding:0;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_5762788011370099781layout-row1484"><td id="m_5762788011370099781layout-row-padding1484" style="padding:0" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td valign="top" height="30"><div style="margin:0;outline:none;padding:0;height:30px"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td style="background-color:#cce0ff" width="650" valign="top" height="30">&nbsp;</td>
                                                                                    </tr>
                                                                                    </tbody></table>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    </tbody></table>
                                                            </td>
                                                        </tr>
                                                        </tbody></table>
                                                </td>
                                            </tr>
                                            <tr style="background-color:#ffffff"><td id="m_5762788011370099781layout-row-margin1472" style="padding:0px;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_5762788011370099781layout-row1472" style="background-color:#045fb4" align="center"><td id="m_5762788011370099781layout-row-padding1472" style="background-color:#045fb4;padding:7px" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td width="636" valign="top" align="center"><a href="https://homi.com.gr/el/" style="margin:0;outline:none;padding:0;color:#045fb4;display:block;min-width:100%" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://homi.acemlnc.com/lt.php?notrack%3D1%26s%3D66f8b3adaac660033ea1e3f2f6fe87ac%26i%3D72A434A0A537&amp;source=gmail&amp;ust=1591434055113000&amp;usg=AOvVaw3kRNqMCTGj3QimNJ7l6nso"><img src="https://ci4.googleusercontent.com/proxy/PggTjMETPdWmJmsghH6MyeQZs4DAAHcohrIQgXUcDIQMwmAMO5PAtBmvcvRppTpuXuvdMb6elNw6N418Yvw7i3PL9PszESZHsrF9-RdrVJ-YYrk_Gv6ga823UA9ysxKeNALzYAQ=s0-d-e1-ft#https://homi.imgus11.com/public//3db214c35e4a1e4c80f1c80ce920183b.png?r=1823668248" alt="" style="border:none;display:block;outline:none;width:128px;opacity:1;max-width:100%" class="CToWUd" width="128"></a></td>
                                                                    </tr>
                                                                    </tbody></table>
                                                            </td>
                                                        </tr>
                                                        </tbody></table>
                                                </td>
                                            </tr>
                                            <tr style="background-color:#ffffff"><td id="m_5762788011370099781layout-row-margin1479" style="padding:2px 0px 0px 0px;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_5762788011370099781layout-row1479" style="margin:0;padding:0;background-color:#e2e5eb"><td id="m_5762788011370099781layout-row-padding1479" style="background-color:#e2e5eb;padding:20px 0px 20px 0px" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td id="m_5762788011370099781text_div1410" style="margin:0;outline:none;padding:0;color:inherit;font-size:12px;font-weight:inherit;line-height:1;text-decoration:inherit;font-family:Arial" width="650" valign="top" align="left"> <div style="margin:0;outline:none;padding:0;font-size:25px;color:#ffffff;font-family:arial,helvetica,sans"><div style="margin:0;outline:none;padding:0"></div>
                                                                                <div style="margin:0;outline:none;padding:0;color:#1259af;font-family:arial,helvetica,sans;font-weight:700;font-size:25px;text-align:center"><span style="color:#1259af;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit">Υπενθύμιση Συνάντησης</span></div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    </tbody></table>
                                                            </td>
                                                        </tr>
                                                        </tbody></table>
                                                </td>
                                            </tr>
                                            <tr style="background-color:#ffffff"><td id="m_5762788011370099781layout-row-margin1480" style="padding:3px 0px 0px 0px;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_5762788011370099781layout-row1480" style="margin:0;padding:0;background-color:#ffffff"><td id="m_5762788011370099781layout-row-padding1480" style="background-color:#ffffff;padding:25px 0px 3px 0px" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td id="m_5762788011370099781text_div1411" style="margin:0;outline:none;padding:0;color:inherit;font-size:12px;font-weight:inherit;line-height:1;text-decoration:inherit;font-family:Arial" width="650" valign="top" align="left">
                                                                            <div style="margin:0;outline:none;padding:0;font-size:18px"> <div style="margin:0;outline:none;padding:0;font-family:arial;font-style:normal;color:#555555;text-align:center"><span style="color:#555555;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;font-family:arial"><span style="color:#000000;font-size:inherit;font-weight:bold;line-height:inherit;text-decoration:inherit">Στοιχεία Συνάντησης</span><br></span></div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    </tbody></table>
                                                            </td>
                                                        </tr>
                                                        </tbody></table>
                                                </td>
                                            </tr>
                                            <tr style="background-color:#ffffff"><td id="m_5762788011370099781layout-row-margin1482" style="padding:0;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_5762788011370099781layout-row1482" style="background-color:#ffffff"><td id="m_5762788011370099781layout-row-padding1482" style="line-height:0;background-color:#ffffff;padding:0" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:collapse;line-height:0" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td style="font-size:12px;height:12px;line-height:0" height="12"></td>
                                                                    </tr>
                                                                    <tr><td style="line-height:0" width="650" height="1" align="center"> <table style="font-size:14px;min-width:auto!important;border-collapse:collapse;line-height:0;width:40%;max-width:40%" width="260" height="1" cellspacing="0" cellpadding="0" border="0" align="center"><tbody><tr><td class="m_5762788011370099781break-line" style="line-height:1px;height:1px;width:260px;background-color:#b5b5b5" width="260" height="1" bgcolor="#b5b5b5"> </td>
                                                                                </tr>
                                                                                </tbody></table>
                                                                        </td>
                                                                    </tr>
                                                                    <tr><td style="font-size:12px;height:12px;line-height:0" height="12"></td>
                                                                    </tr>
                                                                    </tbody></table>
                                                            </td>
                                                        </tr>
                                                        </tbody></table>
                                                </td>
                                            </tr>
                                            <tr style="background-color:#ffffff"><td id="m_5762788011370099781layout-row-margin1481" style="padding:0px;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_5762788011370099781layout-row1481" style="margin:0;padding:0;background-color:#ffffff"><td id="m_5762788011370099781layout-row-padding1481" style="background-color:#ffffff;padding:10px 0px 20px 0px" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td id="m_5762788011370099781text_div1412" style="margin:0;outline:none;padding:0;color:inherit;font-size:12px;font-weight:inherit;line-height:1;text-decoration:inherit;font-family:Arial" width="650" valign="top" align="left"> <div style="margin:0;outline:none;padding:0;color:#045fb4"> <div style="margin:0;outline:none;padding:0;font-size:17px;color:#045fb4;font-family:arial"><div style="margin:0;outline:none;padding:0;font-family:arial;font-style:normal;color:#1259af;font-size:17px;text-align:center"><span style="color:#1259af;font-size:inherit;font-weight:bold;line-height:inherit;text-decoration:inherit;font-family:arial">Ημερομηνία:</span></div>
                                                                                    <span style="color:#045fb4;font-size:17px;font-weight:400;line-height:inherit;text-decoration:inherit;font-family:arial;font-style:normal"><div style="margin:0;outline:none;padding:0;font-family:arial;color:#555555;text-align:center;font-size:15px;display: block;margin-top: 10px;"><span style="color:#555555;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;font-family:arial"><?php echo $viewing->date; ?></span></div>
<div style="margin:0;outline:none;padding:0;font-family:arial;text-align:center;color:#045fb4"><br style="font-family:arial;font-weight:inherit;color:#045fb4;color:#045fb4"></div>
<div style="margin:0;outline:none;padding:0;font-family:arial;font-weight:inherit;color:#045fb4;text-align:center"><span style="color:#1259af;font-size:inherit;font-weight:bold;line-height:inherit;text-decoration:inherit;font-family:arial"><span style="color:#1259af;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit">Ώρα:</span><br style="color:#1259af"></span><span style="color:#045fb4;font-size:15px;font-weight:inherit;line-height:inherit;text-decoration:inherit;font-family:arial"><span style="color:#555555;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;display: block;margin-top: 10px;"><?php echo $viewing->time; ?></span><span style="color:#1259af;font-size:17px;font-weight:bold;line-height:inherit;text-decoration:inherit;font-family:arial;font-style:normal"><br style="color:#1259af"><span style="color:#1259af;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit">Διεύθυνση:</span><br style="color:#1259af"></span><span style="color:#555555;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;display: block;margin-top: 10px;"><?php echo $viewing->property_address; ?>, <?php echo $viewing->property_title; ?></span><br></span></div>
</span></div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    </tbody></table>
                                                            </td>
                                                        </tr>
                                                        </tbody></table>
                                                </td>
                                            </tr>
                                            <tr style="background-color:#ffffff"><td id="m_5762788011370099781layout-row-margin1486" style="padding:0px;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_5762788011370099781layout-row1486" style="margin:0;padding:0;background-color:#ffffff"><td id="m_5762788011370099781layout-row-padding1486" style="background-color:#ffffff;padding:10px 0px 3px 0px" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td id="m_5762788011370099781text_div1417" style="margin:0;outline:none;padding:0;color:inherit;font-size:12px;font-weight:inherit;line-height:1;text-decoration:inherit;font-family:Arial" width="650" valign="top" align="left"> <div style="margin:0;outline:none;padding:0;font-size:18px"> <div style="margin:0;outline:none;padding:0;font-family:arial;font-style:normal;color:#555555;text-align:center"><span style="color:#555555;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;font-family:arial"><span style="color:#000000;font-size:inherit;font-weight:bold;line-height:inherit;text-decoration:inherit">Στοιχεία Ιδιοκτήτη</span><br></span></div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    </tbody></table>
                                                            </td>
                                                        </tr>
                                                        </tbody></table>
                                                </td>
                                            </tr>
                                            <tr style="background-color:#ffffff"><td id="m_5762788011370099781layout-row-margin1487" style="padding:0;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_5762788011370099781layout-row1487" style="background-color:#ffffff"><td id="m_5762788011370099781layout-row-padding1487" style="line-height:0;background-color:#ffffff;padding:0" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:collapse;line-height:0" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td style="font-size:12px;height:12px;line-height:0" height="12"></td>
                                                                    </tr>
                                                                    <tr><td style="line-height:0" width="650" height="1" align="center"> <table style="font-size:14px;min-width:auto!important;border-collapse:collapse;line-height:0;width:40%;max-width:40%" width="260" height="1" cellspacing="0" cellpadding="0" border="0" align="center"><tbody><tr><td class="m_5762788011370099781break-line" style="line-height:1px;height:1px;width:260px;background-color:#b5b5b5" width="260" height="1" bgcolor="#b5b5b5"> </td>
                                                                                </tr>
                                                                                </tbody></table>
                                                                        </td>
                                                                    </tr>
                                                                    <tr><td style="font-size:12px;height:12px;line-height:0" height="12"></td>
                                                                    </tr>
                                                                    </tbody></table>
                                                            </td>
                                                        </tr>
                                                        </tbody></table>
                                                </td>
                                            </tr>
                                            <tr style="background-color:#ffffff"><td id="m_5762788011370099781layout-row-margin1488" style="padding:0px;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_5762788011370099781layout-row1488" style="margin:0;padding:0;background-color:#ffffff"><td id="m_5762788011370099781layout-row-padding1488" style="background-color:#ffffff;padding:10px 0px 20px 0px" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td id="m_5762788011370099781text_div1419" style="margin:0;outline:none;padding:0;color:inherit;font-size:12px;font-weight:inherit;line-height:1;text-decoration:inherit;font-family:Arial" width="650" valign="top" align="left"> <div style="margin:0;outline:none;padding:0"><div style="margin:0;outline:none;padding:0;color:#045fb4;font-family:arial;font-size:17px;font-style:normal;text-align:center"></div>
                                                                                <div style="margin:0;outline:none;padding:0;text-align:center;color:#1259af"><span style="color:#1259af;font-size:17px;font-weight:bold;line-height:inherit;text-decoration:inherit;font-family:arial;text-align:inherit">Όνομα:<br></span><span style="color:#555555;font-size:15px;font-weight:inherit;line-height:inherit;text-decoration:inherit;line-height: 25px;display: block;margin-top: 10px;"><?php echo $viewing->landlord->first_name; ?><br><?php echo $viewing->landlord->last_name; ?></span><br></div>
                                                                                <div style="margin:0;outline:none;padding:0;font-family:arial;font-weight:400;font-style:normal;text-align:center;color:#555555"><span style="color:#555555;font-size:inherit;font-weight:400;line-height:inherit;text-decoration:inherit;font-family:arial;text-align:inherit"><span style="color:inherit;font-size:19px;font-weight:inherit;line-height:inherit;text-decoration:inherit"> </span><br><span style="color:#000000;font-size:12px;font-weight:400;line-height:inherit;text-decoration:inherit;font-family:arial;font-style:normal;text-align:center;margin:0"><span style="color:inherit;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;font-family:arial"><span style="color:#1259af;font-size:17px;font-weight:bold;line-height:inherit;text-decoration:inherit;font-family:arial">Τηλέφωνο:</span><br style="font-family:arial;font-weight:bold;color:#045fb4;font-size:17px"></span><span style="color:#555555;font-size:15px;font-weight:inherit;line-height:inherit;text-decoration:inherit"><br><span style="font-family:arial;font-weight:400;color:#555555;font-size:16px;font-style:normal;display: block;margin-bottom: 15px;">
  <?php echo $viewing->landlord->phone; ?></span><span style="color:inherit;font-size:12px;font-weight:inherit;line-height:inherit;text-decoration:inherit;font-family:arial;font-style:normal"><span style="color:#1259af;font-size:17px;font-weight:bold;line-height:inherit;text-decoration:inherit;font-family:arial">Email:</span><br style="font-family:arial;font-weight:bold;color:#045fb4;font-size:17px"></span></span></span><span style="color:inherit;font-size:15px;font-weight:inherit;line-height:inherit;text-decoration:inherit;font-style:normal;text-align:center;font-family:arial;margin:0"><br><?php echo $viewing->landlord->email; ?></span></span></div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    </tbody></table>
                                                            </td>
                                                        </tr>
                                                        </tbody></table>
                                                </td>
                                            </tr>
                                            <tr style="background-color:#ffffff"><td id="m_5762788011370099781layout-row-margin1473" style="padding:0;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_5762788011370099781layout-row1473" style="margin:0;padding:0;background-color:#ffffff"><td id="m_5762788011370099781layout-row-padding1473" style="background-color:#ffffff;padding:10px 10px 0px 10px" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td id="m_5762788011370099781text_div1404" style="line-height:150%;margin:0;outline:none;padding:0;color:inherit;font-size:12px;font-weight:inherit;line-height:1.5;text-decoration:inherit;font-family:Arial" width="630" valign="top" align="left"> <div style="line-height:150%;margin:0;outline:none;padding:0;line-height:1.5"> <div style="margin:0;outline:none;padding:0;text-align:center"> <p style="margin:0;outline:none;padding:0;color:inherit;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;text-align:left"></p>
                                                                                    <div style="margin:0;outline:none;padding:0;text-align:justify;font-size:15px"><span style="color:inherit;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;font-family:arial,helvetica,sans"> Αγαπητή/έ <span style="color:#000000;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit"><?php echo $viewing->viewer->first_name; ?>,</span></span></div>
                                                                                    <span style="color:inherit;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;text-align:center"><div style="margin:0;outline:none;padding:0;text-align:justify;font-size:15px"><br style="font-family:arial,helvetica,sans"></div>
<div style="margin:0;outline:none;padding:0;text-align:left;font-size:15px"><span style="color:inherit;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;font-family:arial,helvetica,sans">Σου υπενθυμίζουμε το ραντεβού σου με τον ιδιοκτήτη σήμερα (<?php echo $viewing->date; ?></span><span style="color:inherit;font-size:15px;font-weight:inherit;line-height:inherit;text-decoration:inherit"><span style="color:#045fb4;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;text-align:center"><span style="color:#000000;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit">)</span></span><span style="color:#045fb4;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;font-family:arial,helvetica,sans">
</span><span style="color:inherit;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;font-family:arial,helvetica,sans">στις <?php echo $viewing->time; ?></span></span><span style="color:#045fb4;font-size:15px;font-weight:inherit;line-height:inherit;text-decoration:inherit;text-align:center">. </span><span style="color:inherit;font-size:15px;font-weight:inherit;line-height:inherit;text-decoration:inherit;text-align:center">Η συνάντηση θα πραγματοποιηθεί στην παραπάνω δηλωμένη διεύθυνση ακινήτου. </span></div>
</span><p style="margin:0;outline:none;padding:0;color:inherit;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit"></p>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    </tbody></table>
                                                            </td>
                                                        </tr>
                                                        </tbody></table>
                                                </td>
                                            </tr>
                                            <tr style="background-color:#ffffff"><td id="m_5762788011370099781layout-row-margin1485" style="padding:0;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_5762788011370099781layout-row1485" style="margin:0;padding:0;background-color:#ffffff"><td id="m_5762788011370099781layout-row-padding1485" style="background-color:#ffffff;padding:10px 10px 0px 10px" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td id="m_5762788011370099781text_div1416" style="line-height:150%;margin:0;outline:none;padding:0;color:inherit;font-size:12px;font-weight:inherit;line-height:1.5;text-decoration:inherit;font-family:Arial" width="630" valign="top" align="left"> <div style="line-height:150%;margin:0;outline:none;padding:0;line-height:1.5"><div style="margin:0;outline:none;padding:0;font-family:arial;color:#000000;font-size:15px;text-align:justify"><span style="color:inherit;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;font-family:arial"><span style="color:inherit;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;font-family:arial"><br>Με εκτίμηση,</span><br style="font-family:arial;font-weight:inherit;color:inherit"></span></div>
                                                                                <div style="margin:0;outline:none;padding:0;font-family:arial;color:#000000;font-size:15px;font-style:normal;font-weight:400;text-align:justify"><span style="color:inherit;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;font-family:arial">Η ομάδα της <span style="color:#1259af;font-size:inherit;font-weight:700;line-height:inherit;text-decoration:inherit;font-family:arial">ΗΟΜΙ</span></span></div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    </tbody></table>
                                                            </td>
                                                        </tr>
                                                        </tbody></table>
                                                </td>
                                            </tr>
                                            <tr style="background-color:#ffffff"><td id="m_5762788011370099781layout-row-margin1483" style="background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_5762788011370099781layout-row1483"><td id="m_5762788011370099781layout-row-padding1483" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td valign="top" height="30"><div style="margin:0;outline:none;padding:0;height:30px"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td width="650" valign="top" height="30">&nbsp;</td>
                                                                                    </tr>
                                                                                    </tbody></table>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    </tbody></table>
                                                            </td>
                                                        </tr>
                                                        </tbody></table>
                                                </td>
                                            </tr>
                                            <tr style="background-color:#ffffff"><td id="m_5762788011370099781layout-row-margin1490" style="padding:0;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_5762788011370099781layout-row1490" style="background-color:#ffffff"><td id="m_5762788011370099781layout-row-padding1490" style="line-height:0;background-color:#ffffff;padding:0" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:collapse;line-height:0" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td style="font-size:12px;height:12px;line-height:0" height="12"></td>
                                                                    </tr>
                                                                    <tr><td style="line-height:0" width="650" height="1" align="center"> <table style="font-size:14px;min-width:auto!important;border-collapse:collapse;line-height:0;width:40%;max-width:40%" width="260" height="1" cellspacing="0" cellpadding="0" border="0" align="center"><tbody><tr><td class="m_5762788011370099781break-line" style="line-height:1px;height:1px;width:260px;background-color:#b5b5b5" width="260" height="1" bgcolor="#b5b5b5"> </td>
                                                                                </tr>
                                                                                </tbody></table>
                                                                        </td>
                                                                    </tr>
                                                                    <tr><td style="font-size:12px;height:12px;line-height:0" height="12"></td>
                                                                    </tr>
                                                                    </tbody></table>
                                                            </td>
                                                        </tr>
                                                        </tbody></table>
                                                </td>
                                            </tr>
                                            <tr style="background-color:#ffffff"><td id="m_5762788011370099781layout-row-margin1489" style="padding:0;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_5762788011370099781layout-row1489" style="margin:0;padding:0;background-color:#ffffff"><td id="m_5762788011370099781layout-row-padding1489" style="background-color:#ffffff;padding:10px 10px 0px 10px" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td id="m_5762788011370099781text_div1420" style="line-height:150%;margin:0;outline:none;padding:0;color:inherit;font-size:12px;font-weight:inherit;line-height:1.5;text-decoration:inherit;font-family:Arial" width="630" valign="top" align="left"> <div style="line-height:150%;margin:0;outline:none;padding:0;font-size:12px;color:#555555;line-height:1.5"> <div style="margin:0;outline:none;padding:0;color:#555555"><div style="margin:0;outline:none;padding:0;text-align:center;font-family:arial;color:#555555"><div style="margin:0;outline:none;padding:0;text-align:center"><span style="color:#555555;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit">Σε περίπτωση που δεν μπορείς να παρευρεθείς στη συνάντηση, παρακαλούμε να μας ενημερώσεις άμεσα.</span></div>
                                                                                        <div style="margin:0;outline:none;padding:0;color:#555555"><span style="color:#555555;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit">Τηλέφωνο επικοινωνίας </span><span style="color:#555555;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;font-family:arial" lang="EN-AU">+30 215 215 1962</span></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    </tbody></table>
                                                            </td>
                                                        </tr>
                                                        </tbody></table>
                                                </td>
                                            </tr>
                                            <tr style="background-color:#ffffff"><td id="m_5762788011370099781layout-row-margin1477" style="padding:0;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_5762788011370099781layout-row1477"><td id="m_5762788011370099781layout-row-padding1477" style="padding:0" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td valign="top" height="11"><div style="margin:0;outline:none;padding:0;height:11px"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td style="background-color:#ffffff" width="650" valign="top" height="11">&nbsp;</td>
                                                                                    </tr>
                                                                                    </tbody></table>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    </tbody></table>
                                                            </td>
                                                        </tr>
                                                        </tbody></table>
                                                </td>
                                            </tr>
                                            <tr style="background-color:#ffffff"><td id="m_5762788011370099781layout-row-margin1476" style="padding:0px;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_5762788011370099781layout-row1476" style="background-color:#ffffff"><td id="m_5762788011370099781layout-row-padding1476" style="background-color:#ffffff;padding:5px" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0"><tbody><tr><td width="650" align="left"> <center style="margin:0;outline:none;padding:0;font-size:0px"> <table class="m_5762788011370099781_ac_social_table" style="font-size:0;min-width:auto!important;margin:auto!important;display:inline-block!important;text-align:center!important" cellspacing="0" cellpadding="0" align="center"><tbody><tr><td style="display:inline-block!important;font-size:0;width:40px!important" width="40" valign="middle" align="center"><div style="margin:0;outline:none;padding:0"><a href="https://www.facebook.com/homigreece/" id="m_5762788011370099781facebook" style="margin:0;outline:none;padding:0;color:#045fb4" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://homi.acemlnc.com/lt.php?notrack%3D1%26s%3D66f8b3adaac660033ea1e3f2f6fe87ac%26i%3D72A434A0A538&amp;source=gmail&amp;ust=1591434055113000&amp;usg=AOvVaw1UqiYct4GfhscSwhjP-C5C"><img src="https://ci3.googleusercontent.com/proxy/GdbTDD6APpjXXyay9gcHY2yPn1KAMBDZGlcxVn9qbHy2odEJbgon1MJuynWI-lvvdoMmGLVpnshbmIwnclsuHqoovO1eQFTyeEqC8BfiK-Bl1w=s0-d-e1-ft#https://homi.img-us6.com/_social_/flat-color-round-facebook.png" style="border:none" class="CToWUd" width="40" border="0"></a></div>
                                                                                                    </td>
                                                                                                    <td style="display:inline-block!important;font-size:0;width:15px!important" width="15">&nbsp;</td>
                                                                                                    <td style="display:inline-block!important;font-size:0;width:40px!important" width="40" valign="middle" align="center"><div style="margin:0;outline:none;padding:0"><a href="https://www.instagram.com/homigreece/" id="m_5762788011370099781instagram" style="margin:0;outline:none;padding:0;color:#045fb4" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://homi.acemlnc.com/lt.php?notrack%3D1%26s%3D66f8b3adaac660033ea1e3f2f6fe87ac%26i%3D72A434A0A539&amp;source=gmail&amp;ust=1591434055113000&amp;usg=AOvVaw0OUzYoSztmqqGoQirIY2mt"><img src="https://ci6.googleusercontent.com/proxy/KVh7BS2Jf9ltfS_IurBkgfRURnu_gLxG-tr6DEbYAVg9HD-X6XGGAnUhSgSbHtmkU5_SpxRjX0O8uMRBlZXznplZBDXgSaoHo1jasIO7vl0vfhI=s0-d-e1-ft#https://homi.img-us6.com/_social_/flat-color-round-instagram.png" style="border:none" class="CToWUd" width="40" border="0"></a></div>
                                                                                                    </td>
                                                                                                    <td style="display:inline-block!important;font-size:0;width:15px!important" width="15">&nbsp;</td>
                                                                                                    <td style="display:inline-block!important;font-size:0;width:40px!important" width="40" valign="middle" align="center"><div style="margin:0;outline:none;padding:0"><a href="https://homi.com.gr/el/" id="m_5762788011370099781website" style="margin:0;outline:none;padding:0;color:#045fb4" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://homi.acemlnc.com/lt.php?notrack%3D1%26s%3D66f8b3adaac660033ea1e3f2f6fe87ac%26i%3D72A434A0A537&amp;source=gmail&amp;ust=1591434055113000&amp;usg=AOvVaw3kRNqMCTGj3QimNJ7l6nso"><img src="https://ci6.googleusercontent.com/proxy/6jmzrplCInuN_vMRqv0hSnU7D8YdNdGpqh6xDNTF6rtjrIFVttRMyud6MESJd09xwONO1CDs5Z2KH9czHcP9aYTeXJ6JfYRgjJdJ4WJAJZlD=s0-d-e1-ft#https://homi.img-us6.com/_social_/flat-color-round-website.png" style="border:none" class="CToWUd" width="40" border="0"></a></div>
                                                                                                    </td>
                                                                                                </tr>
                                                                                                </tbody></table>
                                                                                        </center> </td>
                                                                                </tr>
                                                                                </tbody></table>
                                                                        </td>
                                                                    </tr>
                                                                    </tbody></table>
                                                            </td>
                                                        </tr>
                                                        </tbody></table>
                                                </td>
                                            </tr>
                                            <tr style="background-color:#ffffff"><td id="m_5762788011370099781layout-row-margin1478" style="padding:0;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_5762788011370099781layout-row1478"><td id="m_5762788011370099781layout-row-padding1478" style="padding:0" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td valign="top" height="24"><div style="margin:0;outline:none;padding:0;height:24px"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td style="background-color:#ffffff" width="650" valign="top" height="24">&nbsp;</td>
                                                                                    </tr>
                                                                                    </tbody></table>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    </tbody></table>
                                                            </td>
                                                        </tr>
                                                        </tbody></table>
                                                </td>
                                            </tr>
                                            <tr style="background-color:#ffffff"><td id="m_5762788011370099781layout-row-margin1474" style="padding:0;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_5762788011370099781layout-row1474" style="margin:0;padding:0;background-color:#1259af"><td id="m_5762788011370099781layout-row-border1474" style="border-color:#ffffff;border-style:solid;border-width:1px" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td id="m_5762788011370099781layout-row-padding1474" style="background-color:#1259af;padding:20px 26px 20px 26px" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td id="m_5762788011370099781text_div1405" style="margin:0;outline:none;padding:0;color:inherit;font-size:12px;font-weight:inherit;line-height:1;text-decoration:inherit;font-family:Arial" width="596" valign="top" align="left"> <div style="margin:0;outline:none;padding:0;color:#ffffff"> <div style="margin:0;outline:none;padding:0;color:#ffffff"> <p style="margin:0;outline:none;padding:0;color:#ffffff;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;text-align:center"><span style="color:#ffffff;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit"><span style="color:#ffffff;font-size:12px;font-weight:400;line-height:inherit;text-decoration:inherit;font-family:arial;font-style:normal">Το παρόν email αποτελεί ανακοίνωση νομικού
περιεχομένου. Δεν αποτελεί προϊόν μάρκετινγκ ή προοωθητική ενέργεια. Για το λόγο αυτό λάβατε το προκείμενο email, παρόλο που ενδέχεται να είχατε απεγγραφεί</span><br><span style="color:#ffffff;font-size:12px;font-weight:400;line-height:inherit;text-decoration:inherit;font-family:arial;font-style:normal">από τις προωθητικές μας ενημερώσεις.</span></span></p>
                                                                                            </div>
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                                </tbody></table>
                                                                        </td>
                                                                    </tr>
                                                                    </tbody></table>
                                                            </td>
                                                        </tr>
                                                        </tbody></table>
                                                </td>
                                            </tr>
                                            <tr style="background-color:#ffffff"><td id="m_5762788011370099781layout-row-margin1475" style="padding:0;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_5762788011370099781layout-row1475" style="margin:0;padding:0;background-color:#1259af"><td id="m_5762788011370099781layout-row-border1475" style="border-color:#ffffff;border-style:solid;border-width:1px" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td id="m_5762788011370099781layout-row-padding1475" style="background-color:#1259af;padding:20px 26px 20px 20px" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td id="m_5762788011370099781text_div1406" style="margin:0;outline:none;padding:0;color:inherit;font-size:12px;font-weight:inherit;line-height:1;text-decoration:inherit;font-family:Arial" width="602" valign="top" align="left"> <div style="margin:0;outline:none;padding:0;color:#ffffff"> <div style="margin:0;outline:none;padding:0;color:#ffffff"> <div style="margin:0;outline:none;padding:0;text-align:center;color:#ffffff"><span style="color:#ffffff;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit"><span style="color:#ffffff;font-size:12px;font-weight:normal;line-height:inherit;text-decoration:inherit;font-family:arial;font-style:normal">Copyright © 2020 </span><a href="https://homi.com.gr/el/" style="margin:0;outline:none;padding:0;color:#ffffff;text-decoration:underline" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://homi.acemlnc.com/lt.php?notrack%3D1%26s%3D66f8b3adaac660033ea1e3f2f6fe87ac%26i%3D72A434A0A537&amp;source=gmail&amp;ust=1591434055113000&amp;usg=AOvVaw3kRNqMCTGj3QimNJ7l6nso"><span style="color:#ffffff;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit"><span class="il">homi</span>.com.gr</span></a> <br><span style="color:#ffffff;font-size:12px;font-weight:normal;line-height:inherit;text-decoration:inherit;font-family:arial;font-style:normal">Με επιφύλαξη κάθε νόμιμου δικαιώµατος</span></span><br style="color:#ffffff"></div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                                </tbody></table>
                                                                        </td>
                                                                    </tr>
                                                                    </tbody></table>
                                                            </td>
                                                        </tr>
                                                        </tbody></table>
                                                </td>
                                            </tr>
                                            </tbody></table>
                                    </td>
                                </tr>
                                </tbody></table>
                        </td>
                    </tr>
                    </tbody></table><div class="yj6qo ajU"><div id=":17x" class="ajR" role="button" tabindex="0" data-tooltip="Εμφάνιση περιεχομένου που έχει περικοπεί" aria-label="Εμφάνιση περιεχομένου που έχει περικοπεί" aria-expanded="false"><img class="ajT" src="//ssl.gstatic.com/ui/v1/icons/mail/images/cleardot.gif"></div></div><div class="adL">
                </div></div><div class="adL"><div class="adm"><div id="q_239" class="ajR h4"><div class="ajT"></div></div></div><div class="h5">
                    <img src="https://ci3.googleusercontent.com/proxy/H3wXsjsptq3BB0pX3dCCM1FnadVxra8ksrc_iGYmve6Xxay-F9QF7OlikLMO_RifjO9KMDZaFCnmDEIb1hdB1XD7BuyOMfyonQumv2rBgPVtGa8diNCdpzvdyKF325e1zKZ2OqMHnAoUXvfJybFnRlfTVx2mXw=s0-d-e1-ft#https://homi.acemlnc.com/lt.php?notrack=1&amp;nl=0&amp;c=72&amp;m=434&amp;s=66f8b3adaac660033ea1e3f2f6fe87ac&amp;l=open" style="display:block;width:1px!important;min-width:1px!important;max-width:1px!important;height:1px!important;border:0;overflow:hidden" class="CToWUd" width="1" height="1" border="0"><div id="m_5762788011370099781ac-footer" style="clear:both;background-color:inherit;background:inherit;min-width:100%;padding:20px;color:#000000;font-size:11px;font-family:arial,helvetica,sans-serif;line-height:140%;line-height:1.4;text-align:center;box-sizing:border-box">
                        <center>
                            Sent to: <span style="font-size:11px;font-family:arial,helvetica,sans-serif;font-weight:normal;text-decoration:none;outline:none"><a href="mailto:<?php echo $recipient_email; ?>" target="_blank"><?php echo $recipient_email; ?></a></span>
                            <br>
                            <br>


                            <span class="il">HOMI</span> Real Estate,  190 Syggrou Avenue, 17671 Athens, Greece
                        </center>
                    </div>
                    <br clear="all"></div></div></div>

        <?php

        return ob_get_clean();


    }

}
