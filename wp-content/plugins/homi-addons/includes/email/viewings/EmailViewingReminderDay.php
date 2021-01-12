<?php


class EmailViewingReminderDay
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

        <div id="m_-8442674040777312974ac-designer" class="m_-8442674040777312974body" style="font-family:Arial;line-height:1.1;margin:0px;background-color:#cce0ff;width:100%;text-align:center">		<div style="display:none;padding:0;height:1px;font-size:1px;background-color:inherit!important;color:inherit!important;line-height:1px">
                Σου υπενθυμίζουμε το ραντεβού σου με τον επισκέπτη αύριο
            </div>
            <div style="margin:0px;outline:none;padding:0px;color:#000000;font-family:arial;line-height:1.1;width:100%;background-color:#cce0ff;background:#cce0ff;text-align:center"><table style="font-size:14px;min-width:auto;background-color:#cce0ff;background:#cce0ff" width="100%" cellspacing="0" cellpadding="0" border="0" align="left"><tbody><tr><td width="100%" valign="top" align="center"><table style="font-size:14px;min-width:auto;max-width:650px" width="650" cellspacing="0" cellpadding="0" border="0" bgcolor="#cce0ff"><tbody><tr><td id="m_-8442674040777312974layout_table_959d7133732ef6c0f34f7aff60048e87ff046c7d" style="background-color:#ffffff" width="650" valign="top" align="center"><table style="font-size:14px;min-width:100%;background-color:#ffffff" width="650" cellspacing="0" cellpadding="0" border="0"><tbody><tr style="background-color:#ffffff"><td id="m_-8442674040777312974layout-row-margin1503" style="padding:0;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_-8442674040777312974layout-row1503"><td id="m_-8442674040777312974layout-row-padding1503" style="padding:0" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td valign="top" height="30"><div style="margin:0;outline:none;padding:0;height:30px"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td style="background-color:#cce0ff" width="650" valign="top" height="30">&nbsp;</td>
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
                                            <tr style="background-color:#ffffff"><td id="m_-8442674040777312974layout-row-margin1491" style="padding:0px;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_-8442674040777312974layout-row1491" style="background-color:#045fb4" align="center"><td id="m_-8442674040777312974layout-row-padding1491" style="background-color:#045fb4;padding:7px" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td width="636" valign="top" align="center"><a href="https://homi.com.gr/el/" style="margin:0;outline:none;padding:0;color:#045fb4;display:block;min-width:100%" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://homi.acemlnc.com/lt.php?notrack%3D1%26s%3D66f8b3adaac660033ea1e3f2f6fe87ac%26i%3D73A447A0A554&amp;source=gmail&amp;ust=1591434055153000&amp;usg=AOvVaw2638H4Sc8eVCRAe7lRDLXV"><img src="https://ci3.googleusercontent.com/proxy/ZVHbtnmTsw7M9zVcSWTBrqDEDx2brdMM6T4d9aMBZivPjS44g-JFdArbQmvLMlhOF7G4IOay_JXS5cVQm5yLj-7SPq7aS0OzsPSQ06bV0u6aw4yaQ0b8Xy7j4oPuf5ZOAuFjcpU=s0-d-e1-ft#https://homi.imgus11.com/public//3db214c35e4a1e4c80f1c80ce920183b.png?r=1195482071" alt="" style="border:none;display:block;outline:none;width:128px;opacity:1;max-width:100%" class="CToWUd" width="128"></a></td>
                                                                    </tr>
                                                                    </tbody></table>
                                                            </td>
                                                        </tr>
                                                        </tbody></table>
                                                </td>
                                            </tr>
                                            <tr style="background-color:#ffffff"><td id="m_-8442674040777312974layout-row-margin1498" style="padding:2px 0px 0px 0px;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_-8442674040777312974layout-row1498" style="margin:0;padding:0;background-color:#e2e5eb"><td id="m_-8442674040777312974layout-row-padding1498" style="background-color:#e2e5eb;padding:20px 0px 20px 0px" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td id="m_-8442674040777312974text_div1429" style="margin:0;outline:none;padding:0;color:inherit;font-size:12px;font-weight:inherit;line-height:1;text-decoration:inherit;font-family:Arial" width="650" valign="top" align="left"> <div style="margin:0;outline:none;padding:0;font-size:25px;color:#ffffff;font-family:arial,helvetica,sans"><div style="margin:0;outline:none;padding:0"></div>
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
                                            <tr style="background-color:#ffffff"><td id="m_-8442674040777312974layout-row-margin1499" style="padding:3px 0px 0px 0px;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_-8442674040777312974layout-row1499" style="margin:0;padding:0;background-color:#ffffff"><td id="m_-8442674040777312974layout-row-padding1499" style="background-color:#ffffff;padding:25px 0px 3px 0px" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td id="m_-8442674040777312974text_div1430" style="margin:0;outline:none;padding:0;color:inherit;font-size:12px;font-weight:inherit;line-height:1;text-decoration:inherit;font-family:Arial" width="650" valign="top" align="left">
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
                                            <tr style="background-color:#ffffff"><td id="m_-8442674040777312974layout-row-margin1501" style="padding:0;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_-8442674040777312974layout-row1501" style="background-color:#ffffff"><td id="m_-8442674040777312974layout-row-padding1501" style="line-height:0;background-color:#ffffff;padding:0" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:collapse;line-height:0" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td style="font-size:12px;height:12px;line-height:0" height="12"></td>
                                                                    </tr>
                                                                    <tr><td style="line-height:0" width="650" height="1" align="center"> <table style="font-size:14px;min-width:auto!important;border-collapse:collapse;line-height:0;width:40%;max-width:40%" width="260" height="1" cellspacing="0" cellpadding="0" border="0" align="center"><tbody><tr><td class="m_-8442674040777312974break-line" style="line-height:1px;height:1px;width:260px;background-color:#b5b5b5" width="260" height="1" bgcolor="#b5b5b5"> </td>
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
                                            <tr style="background-color:#ffffff"><td id="m_-8442674040777312974layout-row-margin1500" style="padding:0px;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_-8442674040777312974layout-row1500" style="margin:0;padding:0;background-color:#ffffff"><td id="m_-8442674040777312974layout-row-padding1500" style="background-color:#ffffff;padding:10px 0px 20px 0px" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td id="m_-8442674040777312974text_div1431" style="margin:0;outline:none;padding:0;color:inherit;font-size:12px;font-weight:inherit;line-height:1;text-decoration:inherit;font-family:Arial" width="650" valign="top" align="left"> <div style="margin:0;outline:none;padding:0;color:#045fb4"> <div style="margin:0;outline:none;padding:0;font-size:17px;color:#045fb4;font-family:arial"><div style="margin:0;outline:none;padding:0;font-family:arial;font-style:normal;color:#1259af;font-size:17px;text-align:center"><span style="color:#1259af;font-size:inherit;font-weight:bold;line-height:inherit;text-decoration:inherit;font-family:arial">Ημερομηνία:</span></div>
                                                                                    <span style="color:#045fb4;font-size:17px;font-weight:400;line-height:inherit;text-decoration:inherit;font-family:arial;font-style:normal"><div style="margin:0;outline:none;padding:0;font-family:arial;color:#555555;text-align:center;font-size:15px"><span style="color:#555555;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;font-family:arial;display: block;margin-top: 10px;"><?php echo $viewing->date; ?></span></div>
<div style="margin:0;outline:none;padding:0;font-family:arial;text-align:center;color:#045fb4"><br style="font-family:arial;font-weight:inherit;color:#045fb4;color:#045fb4"></div>
<div style="margin:0;outline:none;padding:0;font-family:arial;font-weight:inherit;color:#045fb4;text-align:center"><span style="color:#1259af;font-size:inherit;font-weight:bold;line-height:inherit;text-decoration:inherit;font-family:arial"><span style="color:#1259af;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit">Ώρα:</span><br style="color:#1259af"></span><span style="color:#045fb4;font-size:15px;font-weight:inherit;line-height:inherit;text-decoration:inherit;font-family:arial"><span style="color:#555555;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;display: block;margin-top: 10px;"><?php echo $viewing->time; ?></span><span style="color:#1259af;font-size:17px;font-weight:bold;line-height:inherit;text-decoration:inherit;font-family:arial;font-style:normal"><br style="color:#1259af"><span style="color:#1259af;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit">Διεύθυνση:</span><br style="color:#1259af"></span><span style="color:#555555;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit"><?php echo $viewing->property_address; ?>, <?php echo $viewing->property_title; ?></span><br></span></div>
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
                                            <tr style="background-color:#ffffff"><td id="m_-8442674040777312974layout-row-margin1505" style="padding:0px;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_-8442674040777312974layout-row1505" style="margin:0;padding:0;background-color:#ffffff"><td id="m_-8442674040777312974layout-row-padding1505" style="background-color:#ffffff;padding:10px 0px 3px 0px" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td id="m_-8442674040777312974text_div1436" style="margin:0;outline:none;padding:0;color:inherit;font-size:12px;font-weight:inherit;line-height:1;text-decoration:inherit;font-family:Arial" width="650" valign="top" align="left"> <div style="margin:0;outline:none;padding:0;font-size:18px"> <div style="margin:0;outline:none;padding:0;font-family:arial;font-style:normal;color:#555555;text-align:center"><span style="color:#555555;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;font-family:arial"><span style="color:#000000;font-size:inherit;font-weight:bold;line-height:inherit;text-decoration:inherit"> <span style="color:#000000;font-size:18px;font-weight:700;line-height:inherit;text-decoration:inherit;font-family:arial;font-style:normal">Στοιχεία Επισκέπτη</span></span><br></span></div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    </tbody></table>
                                                            </td>
                                                        </tr>
                                                        </tbody></table>
                                                </td>
                                            </tr>
                                            <tr style="background-color:#ffffff"><td id="m_-8442674040777312974layout-row-margin1506" style="padding:0;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_-8442674040777312974layout-row1506" style="background-color:#ffffff"><td id="m_-8442674040777312974layout-row-padding1506" style="line-height:0;background-color:#ffffff;padding:0" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:collapse;line-height:0" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td style="font-size:12px;height:12px;line-height:0" height="12"></td>
                                                                    </tr>
                                                                    <tr><td style="line-height:0" width="650" height="1" align="center"> <table style="font-size:14px;min-width:auto!important;border-collapse:collapse;line-height:0;width:40%;max-width:40%" width="260" height="1" cellspacing="0" cellpadding="0" border="0" align="center"><tbody><tr><td class="m_-8442674040777312974break-line" style="line-height:1px;height:1px;width:260px;background-color:#b5b5b5" width="260" height="1" bgcolor="#b5b5b5"> </td>
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
                                            <tr style="background-color:#ffffff"><td id="m_-8442674040777312974layout-row-margin1507" style="padding:0px;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_-8442674040777312974layout-row1507" style="margin:0;padding:0;background-color:#ffffff"><td id="m_-8442674040777312974layout-row-padding1507" style="background-color:#ffffff;padding:10px 0px 20px 0px" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td id="m_-8442674040777312974text_div1438" style="margin:0;outline:none;padding:0;color:inherit;font-size:12px;font-weight:inherit;line-height:1;text-decoration:inherit;font-family:Arial" width="650" valign="top" align="left"> <div style="margin:0;outline:none;padding:0"><div style="margin:0;outline:none;padding:0;color:#045fb4;font-family:arial;font-size:17px;font-style:normal;text-align:center"></div>
                                                                                <div style="margin:0;outline:none;padding:0;text-align:center;color:#1259af"><span style="color:#1259af;font-size:17px;font-weight:bold;line-height:inherit;text-decoration:inherit;font-family:arial;text-align:inherit">Όνομα:<br></span>
                                                                                    <span style="color:#555555;font-size:15px;font-weight:inherit;line-height:inherit;text-decoration:inherit">
                                                                                        <?php echo $viewing->viewer->first_name; ?>
                                                                                        <br>
                                                                                        <?php echo $viewing->viewer->last_name; ?>
                                                                                    </span>
                                                                                    <br></div>
                                                                                <div style="margin:0;outline:none;padding:0;font-family:arial;font-weight:400;font-style:normal;text-align:center;color:#555555"><span style="color:#555555;font-size:inherit;font-weight:400;line-height:inherit;text-decoration:inherit;font-family:arial;text-align:inherit"><span style="color:inherit;font-size:19px;font-weight:inherit;line-height:inherit;text-decoration:inherit"> </span><br><span style="color:#000000;font-size:12px;font-weight:400;line-height:inherit;text-decoration:inherit;font-family:arial;font-style:normal;text-align:center;margin:0"><span style="color:inherit;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;font-family:arial"><span style="color:#1259af;font-size:17px;font-weight:bold;line-height:inherit;text-decoration:inherit;font-family:arial">Τηλέφωνο:</span><br style="font-family:arial;font-weight:bold;color:#045fb4;font-size:17px"></span>
                                                                                            <span style="color:#555555;font-size:15px;font-weight:inherit;line-height:inherit;text-decoration:inherit">
                                                                                                <?php echo $viewing->viewer->phone; ?>
                                                                                                <br><br style="font-family:arial;font-weight:400;color:#555555;font-size:16px;font-style:normal">
                                                                                                <span style="color:inherit;font-size:12px;font-weight:inherit;line-height:inherit;text-decoration:inherit;font-family:arial;font-style:normal"><span style="color:#1259af;font-size:17px;font-weight:bold;line-height:inherit;text-decoration:inherit;font-family:arial">Email:</span><br style="font-family:arial;font-weight:bold;color:#045fb4;font-size:17px"></span></span></span>
                                                                                        <span style="color:inherit;font-size:15px;font-weight:inherit;line-height:inherit;text-decoration:inherit;font-style:normal;text-align:center;font-family:arial;margin:0">
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
                                            <tr style="background-color:#ffffff"><td id="m_-8442674040777312974layout-row-margin1492" style="padding:0;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_-8442674040777312974layout-row1492" style="margin:0;padding:0;background-color:#ffffff"><td id="m_-8442674040777312974layout-row-padding1492" style="background-color:#ffffff;padding:10px 10px 0px 10px" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td id="m_-8442674040777312974text_div1423" style="line-height:150%;margin:0;outline:none;padding:0;color:inherit;font-size:12px;font-weight:inherit;line-height:1.5;text-decoration:inherit;font-family:Arial" width="630" valign="top" align="left"> <div style="line-height:150%;margin:0;outline:none;padding:0;line-height:1.5"> <div style="margin:0;outline:none;padding:0;text-align:center"> <p style="margin:0;outline:none;padding:0;color:inherit;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;text-align:left"></p>
                                                                                    <div style="margin:0;outline:none;padding:0;text-align:justify;font-size:15px"><span style="color:inherit;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;font-family:arial,helvetica,sans"> Αγαπητή/έ <span style="color:#000000;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit"><?php echo $viewing->landlord->first_name; ?>,</span></span></div>
                                                                                    <span style="color:inherit;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;text-align:center"><div style="margin:0;outline:none;padding:0;text-align:justify;font-size:15px"><br style="font-family:arial,helvetica,sans"></div>
<div style="margin:0;outline:none;padding:0;text-align:left;font-size:15px"><span style="color:inherit;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;font-family:arial,helvetica,sans"><span style="color:#000000;font-size:15px;font-weight:400;line-height:inherit;text-decoration:inherit;font-family:arial,helvetica,sans;font-style:normal">Σου υπενθυμίζουμε το ραντεβού σου με τον επισκέπτη αύριο</span> <?php echo $viewing->date; ?> στις <?php echo $viewing->time; ?> </span><span style="color:inherit;font-size:15px;font-weight:inherit;line-height:inherit;text-decoration:inherit"><span style="color:#045fb4;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;text-align:center"></span><span style="color:#045fb4;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;font-family:arial,helvetica,sans"> </span><span style="color:inherit;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;font-family:arial,helvetica,sans">και ώρα </span></span><span style="color:#045fb4;font-size:15px;font-weight:inherit;line-height:inherit;text-decoration:inherit;text-align:center">. </span><span style="color:inherit;font-size:15px;font-weight:inherit;line-height:inherit;text-decoration:inherit;text-align:center">Η συνάντηση θα πραγματοποιηθεί στην παραπάνω δηλωμένη διεύθυνση ακινήτου. </span></div>
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
                                            <tr style="background-color:#ffffff"><td id="m_-8442674040777312974layout-row-margin1504" style="padding:0;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_-8442674040777312974layout-row1504" style="margin:0;padding:0;background-color:#ffffff"><td id="m_-8442674040777312974layout-row-padding1504" style="background-color:#ffffff;padding:10px 10px 0px 10px" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td id="m_-8442674040777312974text_div1435" style="line-height:150%;margin:0;outline:none;padding:0;color:inherit;font-size:12px;font-weight:inherit;line-height:1.5;text-decoration:inherit;font-family:Arial" width="630" valign="top" align="left"> <div style="line-height:150%;margin:0;outline:none;padding:0;line-height:1.5"><div style="margin:0;outline:none;padding:0;font-family:arial;color:#000000;font-size:15px;text-align:justify"><span style="color:inherit;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;font-family:arial"><span style="color:inherit;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;font-family:arial"><br>Με εκτίμηση,</span><br style="font-family:arial;font-weight:inherit;color:inherit"></span></div>
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
                                            <tr style="background-color:#ffffff"><td id="m_-8442674040777312974layout-row-margin1502" style="background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_-8442674040777312974layout-row1502"><td id="m_-8442674040777312974layout-row-padding1502" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td valign="top" height="30"><div style="margin:0;outline:none;padding:0;height:30px"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td width="650" valign="top" height="30">&nbsp;</td>
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
                                            <tr style="background-color:#ffffff"><td id="m_-8442674040777312974layout-row-margin1509" style="padding:0;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_-8442674040777312974layout-row1509" style="background-color:#ffffff"><td id="m_-8442674040777312974layout-row-padding1509" style="line-height:0;background-color:#ffffff;padding:0" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:collapse;line-height:0" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td style="font-size:12px;height:12px;line-height:0" height="12"></td>
                                                                    </tr>
                                                                    <tr><td style="line-height:0" width="650" height="1" align="center"> <table style="font-size:14px;min-width:auto!important;border-collapse:collapse;line-height:0;width:40%;max-width:40%" width="260" height="1" cellspacing="0" cellpadding="0" border="0" align="center"><tbody><tr><td class="m_-8442674040777312974break-line" style="line-height:1px;height:1px;width:260px;background-color:#b5b5b5" width="260" height="1" bgcolor="#b5b5b5"> </td>
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
                                            <tr style="background-color:#ffffff"><td id="m_-8442674040777312974layout-row-margin1508" style="padding:0;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_-8442674040777312974layout-row1508" style="margin:0;padding:0;background-color:#ffffff"><td id="m_-8442674040777312974layout-row-padding1508" style="background-color:#ffffff;padding:10px 10px 0px 10px" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td id="m_-8442674040777312974text_div1439" style="line-height:150%;margin:0;outline:none;padding:0;color:inherit;font-size:12px;font-weight:inherit;line-height:1.5;text-decoration:inherit;font-family:Arial" width="630" valign="top" align="left"> <div style="line-height:150%;margin:0;outline:none;padding:0;font-size:12px;color:#555555;line-height:1.5"> <div style="margin:0;outline:none;padding:0;color:#555555"><div style="margin:0;outline:none;padding:0;text-align:center;font-family:arial;color:#555555"><div style="margin:0;outline:none;padding:0;text-align:center"><span style="color:#555555;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit">Σε περίπτωση που δεν μπορείς να παρευρεθείς στη συνάντηση, παρακαλούμε να μας ενημερώσεις άμεσα.</span></div>
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
                                            <tr style="background-color:#ffffff"><td id="m_-8442674040777312974layout-row-margin1496" style="padding:0;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_-8442674040777312974layout-row1496"><td id="m_-8442674040777312974layout-row-padding1496" style="padding:0" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td valign="top" height="11"><div style="margin:0;outline:none;padding:0;height:11px"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td style="background-color:#ffffff" width="650" valign="top" height="11">&nbsp;</td>
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
                                            <tr style="background-color:#ffffff"><td id="m_-8442674040777312974layout-row-margin1495" style="padding:0px;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_-8442674040777312974layout-row1495" style="background-color:#ffffff"><td id="m_-8442674040777312974layout-row-padding1495" style="background-color:#ffffff;padding:5px" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0"><tbody><tr><td width="650" align="left"> <center style="margin:0;outline:none;padding:0;font-size:0px"> <table class="m_-8442674040777312974_ac_social_table" style="font-size:0;min-width:auto!important;margin:auto!important;display:inline-block!important;text-align:center!important" cellspacing="0" cellpadding="0" align="center"><tbody><tr><td style="display:inline-block!important;font-size:0;width:40px!important" width="40" valign="middle" align="center"><div style="margin:0;outline:none;padding:0"><a href="https://www.facebook.com/homigreece/" id="m_-8442674040777312974facebook" style="margin:0;outline:none;padding:0;color:#045fb4" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://homi.acemlnc.com/lt.php?notrack%3D1%26s%3D66f8b3adaac660033ea1e3f2f6fe87ac%26i%3D73A447A0A555&amp;source=gmail&amp;ust=1591434055154000&amp;usg=AOvVaw2GUpO-kzWy3NUYuBXsYItO"><img src="https://ci3.googleusercontent.com/proxy/GdbTDD6APpjXXyay9gcHY2yPn1KAMBDZGlcxVn9qbHy2odEJbgon1MJuynWI-lvvdoMmGLVpnshbmIwnclsuHqoovO1eQFTyeEqC8BfiK-Bl1w=s0-d-e1-ft#https://homi.img-us6.com/_social_/flat-color-round-facebook.png" style="border:none" class="CToWUd" width="40" border="0"></a></div>
                                                                                                    </td>
                                                                                                    <td style="display:inline-block!important;font-size:0;width:15px!important" width="15">&nbsp;</td>
                                                                                                    <td style="display:inline-block!important;font-size:0;width:40px!important" width="40" valign="middle" align="center"><div style="margin:0;outline:none;padding:0"><a href="https://www.instagram.com/homigreece/" id="m_-8442674040777312974instagram" style="margin:0;outline:none;padding:0;color:#045fb4" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://homi.acemlnc.com/lt.php?notrack%3D1%26s%3D66f8b3adaac660033ea1e3f2f6fe87ac%26i%3D73A447A0A556&amp;source=gmail&amp;ust=1591434055154000&amp;usg=AOvVaw08QZu3454AtCMwEtPzm16x"><img src="https://ci6.googleusercontent.com/proxy/KVh7BS2Jf9ltfS_IurBkgfRURnu_gLxG-tr6DEbYAVg9HD-X6XGGAnUhSgSbHtmkU5_SpxRjX0O8uMRBlZXznplZBDXgSaoHo1jasIO7vl0vfhI=s0-d-e1-ft#https://homi.img-us6.com/_social_/flat-color-round-instagram.png" style="border:none" class="CToWUd" width="40" border="0"></a></div>
                                                                                                    </td>
                                                                                                    <td style="display:inline-block!important;font-size:0;width:15px!important" width="15">&nbsp;</td>
                                                                                                    <td style="display:inline-block!important;font-size:0;width:40px!important" width="40" valign="middle" align="center"><div style="margin:0;outline:none;padding:0"><a href="https://homi.com.gr/el/" id="m_-8442674040777312974website" style="margin:0;outline:none;padding:0;color:#045fb4" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://homi.acemlnc.com/lt.php?notrack%3D1%26s%3D66f8b3adaac660033ea1e3f2f6fe87ac%26i%3D73A447A0A554&amp;source=gmail&amp;ust=1591434055154000&amp;usg=AOvVaw3hxa0cLxkwMDxxDv9lAd-7"><img src="https://ci6.googleusercontent.com/proxy/6jmzrplCInuN_vMRqv0hSnU7D8YdNdGpqh6xDNTF6rtjrIFVttRMyud6MESJd09xwONO1CDs5Z2KH9czHcP9aYTeXJ6JfYRgjJdJ4WJAJZlD=s0-d-e1-ft#https://homi.img-us6.com/_social_/flat-color-round-website.png" style="border:none" class="CToWUd" width="40" border="0"></a></div>
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
                                            <tr style="background-color:#ffffff"><td id="m_-8442674040777312974layout-row-margin1497" style="padding:0;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_-8442674040777312974layout-row1497"><td id="m_-8442674040777312974layout-row-padding1497" style="padding:0" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td valign="top" height="24"><div style="margin:0;outline:none;padding:0;height:24px"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td style="background-color:#ffffff" width="650" valign="top" height="24">&nbsp;</td>
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
                                            <tr style="background-color:#ffffff"><td id="m_-8442674040777312974layout-row-margin1493" style="padding:0;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_-8442674040777312974layout-row1493" style="margin:0;padding:0;background-color:#1259af"><td id="m_-8442674040777312974layout-row-border1493" style="border-color:#ffffff;border-style:solid;border-width:1px" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td id="m_-8442674040777312974layout-row-padding1493" style="background-color:#1259af;padding:20px 26px 20px 26px" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td id="m_-8442674040777312974text_div1424" style="margin:0;outline:none;padding:0;color:inherit;font-size:12px;font-weight:inherit;line-height:1;text-decoration:inherit;font-family:Arial" width="596" valign="top" align="left"> <div style="margin:0;outline:none;padding:0;color:#ffffff"> <div style="margin:0;outline:none;padding:0;color:#ffffff"> <p style="margin:0;outline:none;padding:0;color:#ffffff;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;text-align:center"><span style="color:#ffffff;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit"><span style="color:#ffffff;font-size:12px;font-weight:400;line-height:inherit;text-decoration:inherit;font-family:arial;font-style:normal">Το παρόν email αποτελεί ανακοίνωση νομικού
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
                                            <tr style="background-color:#ffffff"><td id="m_-8442674040777312974layout-row-margin1494" style="padding:0;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_-8442674040777312974layout-row1494" style="margin:0;padding:0;background-color:#1259af"><td id="m_-8442674040777312974layout-row-border1494" style="border-color:#ffffff;border-style:solid;border-width:1px" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td id="m_-8442674040777312974layout-row-padding1494" style="background-color:#1259af;padding:20px 26px 20px 20px" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td id="m_-8442674040777312974text_div1425" style="margin:0;outline:none;padding:0;color:inherit;font-size:12px;font-weight:inherit;line-height:1;text-decoration:inherit;font-family:Arial" width="602" valign="top" align="left"> <div style="margin:0;outline:none;padding:0;color:#ffffff"> <div style="margin:0;outline:none;padding:0;color:#ffffff"> <div style="margin:0;outline:none;padding:0;text-align:center;color:#ffffff"><span style="color:#ffffff;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit"><span style="color:#ffffff;font-size:12px;font-weight:normal;line-height:inherit;text-decoration:inherit;font-family:arial;font-style:normal">Copyright © 2020 </span><a href="https://homi.com.gr/el/" style="margin:0;outline:none;padding:0;color:#ffffff;text-decoration:underline" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://homi.acemlnc.com/lt.php?notrack%3D1%26s%3D66f8b3adaac660033ea1e3f2f6fe87ac%26i%3D73A447A0A554&amp;source=gmail&amp;ust=1591434055154000&amp;usg=AOvVaw3hxa0cLxkwMDxxDv9lAd-7"><span style="color:#ffffff;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit"><span class="il">homi</span>.com.gr</span></a> <br><span style="color:#ffffff;font-size:12px;font-weight:normal;line-height:inherit;text-decoration:inherit;font-family:arial;font-style:normal">Με επιφύλαξη κάθε νόμιμου δικαιώµατος</span></span><br style="color:#ffffff"></div>
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
            <img src="https://ci4.googleusercontent.com/proxy/akj-7Bxx5Ocw1Gnl5FwKG4HWC0R0H2cJ0KcTdS-9Q4veodHMAgSrPaXMs8ZiNQqjJwIflDyWWzHTyvmGo3SpKFYhthvsps6POLefD-_scKAyPC3vvf_1zzEv8CcHnZqSrFEht4id4Egumsp5gpD2-nGHYfvJgg=s0-d-e1-ft#https://homi.acemlnc.com/lt.php?notrack=1&amp;nl=0&amp;c=73&amp;m=447&amp;s=66f8b3adaac660033ea1e3f2f6fe87ac&amp;l=open" style="display:block;width:1px!important;min-width:1px!important;max-width:1px!important;height:1px!important;border:0;overflow:hidden" class="CToWUd" width="1" height="1" border="0"><div id="m_-8442674040777312974ac-footer" style="clear:both;background-color:inherit;background:inherit;min-width:100%;padding:20px;color:#000000;font-size:11px;font-family:arial,helvetica,sans-serif;line-height:140%;line-height:1.4;text-align:center;box-sizing:border-box">
                <center>
                    Sent to: <span style="font-size:11px;font-family:arial,helvetica,sans-serif;font-weight:normal;text-decoration:none;outline:none"><a href="mailto:<?php echo $recipient_email; ?>" target="_blank"><?php echo $recipient_email; ?></a></span>
                    <br>
                    <br>


                    <span class="il">HOMI</span> Real Estate,  190 Syggrou Avenue, 17671 Athens, Greece
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

        <div id="m_7972231473014332318ac-designer" class="m_7972231473014332318body" style="font-family:Arial;line-height:1.1;margin:0px;background-color:#cce0ff;width:100%;text-align:center">		<div style="display:none;padding:0;height:1px;font-size:1px;background-color:inherit!important;color:inherit!important;line-height:1px">
                Σου υπενθυμίζουμε το ραντεβού σου με τον ιδιοκτήτη αύριο
            </div>
            <div style="margin:0px;outline:none;padding:0px;color:#000000;font-family:arial;line-height:1.1;width:100%;background-color:#cce0ff;background:#cce0ff;text-align:center"><table style="font-size:14px;min-width:auto;background-color:#cce0ff;background:#cce0ff" width="100%" cellspacing="0" cellpadding="0" border="0" align="left"><tbody><tr><td width="100%" valign="top" align="center"><table style="font-size:14px;min-width:auto;max-width:650px" width="650" cellspacing="0" cellpadding="0" border="0" bgcolor="#cce0ff"><tbody><tr><td id="m_7972231473014332318layout_table_72488b447c690d95db65ba3a7af2b9bc96e672b4" style="background-color:#ffffff" width="650" valign="top" align="center"><table style="font-size:14px;min-width:100%;background-color:#ffffff" width="650" cellspacing="0" cellpadding="0" border="0"><tbody><tr style="background-color:#ffffff"><td id="m_7972231473014332318layout-row-margin1446" style="padding:0;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_7972231473014332318layout-row1446"><td id="m_7972231473014332318layout-row-padding1446" style="padding:0" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td valign="top" height="30"><div style="margin:0;outline:none;padding:0;height:30px"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td style="background-color:#cce0ff" width="650" valign="top" height="30">&nbsp;</td>
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
                                            <tr style="background-color:#ffffff"><td id="m_7972231473014332318layout-row-margin1434" style="padding:0px;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_7972231473014332318layout-row1434" style="background-color:#045fb4" align="center"><td id="m_7972231473014332318layout-row-padding1434" style="background-color:#045fb4;padding:7px" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td width="636" valign="top" align="center"><a href="https://homi.com.gr/el/" style="margin:0;outline:none;padding:0;color:#045fb4;display:block;min-width:100%" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://homi.acemlnc.com/lt.php?notrack%3D1%26s%3D66f8b3adaac660033ea1e3f2f6fe87ac%26i%3D71A433A0A532&amp;source=gmail&amp;ust=1591434055192000&amp;usg=AOvVaw2r410VAxfpOdnB_nQU8Gea"><img src="https://ci3.googleusercontent.com/proxy/WUEOq8NpYgvQiF__oi7cX7Z76waj0JNcwBSUeJCxiYBP3rjgYYC6EoYVgxRoCZiqrJRqIgCSRlf1vY_y-zM8xO7449FEgQMCTjDCpJJlF4HbccLO5ceOoAhe6MaYjhiDX3oKFVs=s0-d-e1-ft#https://homi.imgus11.com/public//3db214c35e4a1e4c80f1c80ce920183b.png?r=1379660318" alt="" style="border:none;display:block;outline:none;width:128px;opacity:1;max-width:100%" class="CToWUd" width="128"></a></td>
                                                                    </tr>
                                                                    </tbody></table>
                                                            </td>
                                                        </tr>
                                                        </tbody></table>
                                                </td>
                                            </tr>
                                            <tr style="background-color:#ffffff"><td id="m_7972231473014332318layout-row-margin1441" style="padding:2px 0px 0px 0px;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_7972231473014332318layout-row1441" style="margin:0;padding:0;background-color:#e2e5eb"><td id="m_7972231473014332318layout-row-padding1441" style="background-color:#e2e5eb;padding:20px 0px 20px 0px" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td id="m_7972231473014332318text_div1372" style="margin:0;outline:none;padding:0;color:inherit;font-size:12px;font-weight:inherit;line-height:1;text-decoration:inherit;font-family:Arial" width="650" valign="top" align="left"> <div style="margin:0;outline:none;padding:0;font-size:25px;color:#ffffff;font-family:arial,helvetica,sans"><div style="margin:0;outline:none;padding:0"></div>
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
                                            <tr style="background-color:#ffffff"><td id="m_7972231473014332318layout-row-margin1442" style="padding:3px 0px 0px 0px;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_7972231473014332318layout-row1442" style="margin:0;padding:0;background-color:#ffffff"><td id="m_7972231473014332318layout-row-padding1442" style="background-color:#ffffff;padding:25px 0px 3px 0px" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td id="m_7972231473014332318text_div1373" style="margin:0;outline:none;padding:0;color:inherit;font-size:12px;font-weight:inherit;line-height:1;text-decoration:inherit;font-family:Arial" width="650" valign="top" align="left">
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
                                            <tr style="background-color:#ffffff"><td id="m_7972231473014332318layout-row-margin1444" style="padding:0;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_7972231473014332318layout-row1444" style="background-color:#ffffff"><td id="m_7972231473014332318layout-row-padding1444" style="line-height:0;background-color:#ffffff;padding:0" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:collapse;line-height:0" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td style="font-size:12px;height:12px;line-height:0" height="12"></td>
                                                                    </tr>
                                                                    <tr><td style="line-height:0" width="650" height="1" align="center"> <table style="font-size:14px;min-width:auto!important;border-collapse:collapse;line-height:0;width:40%;max-width:40%" width="260" height="1" cellspacing="0" cellpadding="0" border="0" align="center"><tbody><tr><td class="m_7972231473014332318break-line" style="line-height:1px;height:1px;width:260px;background-color:#b5b5b5" width="260" height="1" bgcolor="#b5b5b5"> </td>
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
                                            <tr style="background-color:#ffffff"><td id="m_7972231473014332318layout-row-margin1443" style="padding:0px;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_7972231473014332318layout-row1443" style="margin:0;padding:0;background-color:#ffffff"><td id="m_7972231473014332318layout-row-padding1443" style="background-color:#ffffff;padding:10px 0px 20px 0px" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td id="m_7972231473014332318text_div1374" style="margin:0;outline:none;padding:0;color:inherit;font-size:12px;font-weight:inherit;line-height:1;text-decoration:inherit;font-family:Arial" width="650" valign="top" align="left"> <div style="margin:0;outline:none;padding:0;color:#045fb4"> <div style="margin:0;outline:none;padding:0;font-size:17px;color:#045fb4;font-family:arial"><div style="margin:0;outline:none;padding:0;font-family:arial;font-style:normal;color:#1259af;font-size:17px;text-align:center"><span style="color:#1259af;font-size:inherit;font-weight:bold;line-height:inherit;text-decoration:inherit;font-family:arial">Ημερομηνία:</span></div>
                                                                                    <span style="color:#045fb4;font-size:17px;font-weight:400;line-height:inherit;text-decoration:inherit;font-family:arial;font-style:normal"><div style="margin:0;outline:none;padding:0;font-family:arial;color:#555555;text-align:center;font-size:15px"><span style="color:#555555;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;font-family:arial;display: block;margin-top: 10px;"><?php echo $viewing->date; ?></span></div>
<div style="margin:0;outline:none;padding:0;font-family:arial;text-align:center;color:#045fb4"><br style="font-family:arial;font-weight:inherit;color:#045fb4;color:#045fb4"></div>
<div style="margin:0;outline:none;padding:0;font-family:arial;font-weight:inherit;color:#045fb4;text-align:center"><span style="color:#1259af;font-size:inherit;font-weight:bold;line-height:inherit;text-decoration:inherit;font-family:arial"><span style="color:#1259af;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit">Ώρα:</span><br style="color:#1259af"></span><span style="color:#045fb4;font-size:15px;font-weight:inherit;line-height:inherit;text-decoration:inherit;font-family:arial"><span style="color:#555555;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;display: block;margin-top: 10px;"><?php echo $viewing->time; ?></span><br><span style="color:#1259af;font-size:17px;font-weight:bold;line-height:inherit;text-decoration:inherit;font-family:arial;font-style:normal"><br style="color:#1259af"><span style="color:#1259af;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit">Διεύθυνση:</span><br style="color:#1259af"></span><span style="color:#555555;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;display: block;margin-top: 10px;"><?php echo $viewing->property_address; ?>, <?php echo $viewing->property_title; ?></span><br></span></div>
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
                                            <tr style="background-color:#ffffff"><td id="m_7972231473014332318layout-row-margin1448" style="padding:0px;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_7972231473014332318layout-row1448" style="margin:0;padding:0;background-color:#ffffff"><td id="m_7972231473014332318layout-row-padding1448" style="background-color:#ffffff;padding:10px 0px 3px 0px" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td id="m_7972231473014332318text_div1379" style="margin:0;outline:none;padding:0;color:inherit;font-size:12px;font-weight:inherit;line-height:1;text-decoration:inherit;font-family:Arial" width="650" valign="top" align="left"> <div style="margin:0;outline:none;padding:0;font-size:18px"> <div style="margin:0;outline:none;padding:0;font-family:arial;font-style:normal;color:#555555;text-align:center"><span style="color:#555555;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;font-family:arial"><span style="color:#000000;font-size:inherit;font-weight:bold;line-height:inherit;text-decoration:inherit">Στοιχεία Ιδιοκτήτη</span><br></span></div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    </tbody></table>
                                                            </td>
                                                        </tr>
                                                        </tbody></table>
                                                </td>
                                            </tr>
                                            <tr style="background-color:#ffffff"><td id="m_7972231473014332318layout-row-margin1449" style="padding:0;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_7972231473014332318layout-row1449" style="background-color:#ffffff"><td id="m_7972231473014332318layout-row-padding1449" style="line-height:0;background-color:#ffffff;padding:0" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:collapse;line-height:0" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td style="font-size:12px;height:12px;line-height:0" height="12"></td>
                                                                    </tr>
                                                                    <tr><td style="line-height:0" width="650" height="1" align="center"> <table style="font-size:14px;min-width:auto!important;border-collapse:collapse;line-height:0;width:40%;max-width:40%" width="260" height="1" cellspacing="0" cellpadding="0" border="0" align="center"><tbody><tr><td class="m_7972231473014332318break-line" style="line-height:1px;height:1px;width:260px;background-color:#b5b5b5" width="260" height="1" bgcolor="#b5b5b5"> </td>
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
                                            <tr style="background-color:#ffffff"><td id="m_7972231473014332318layout-row-margin1450" style="padding:0px;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_7972231473014332318layout-row1450" style="margin:0;padding:0;background-color:#ffffff"><td id="m_7972231473014332318layout-row-padding1450" style="background-color:#ffffff;padding:10px 0px 20px 0px" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td id="m_7972231473014332318text_div1381" style="margin:0;outline:none;padding:0;color:inherit;font-size:12px;font-weight:inherit;line-height:1;text-decoration:inherit;font-family:Arial" width="650" valign="top" align="left"> <div style="margin:0;outline:none;padding:0"><div style="margin:0;outline:none;padding:0;color:#045fb4;font-family:arial;font-size:17px;font-style:normal;text-align:center"></div>
                                                                                <div style="margin:0;outline:none;padding:0;text-align:center;color:#1259af"><span style="color:#1259af;font-size:17px;font-weight:bold;line-height:inherit;text-decoration:inherit;font-family:arial;text-align:inherit">Όνομα:<br></span><span style="color:#555555;font-size:15px;font-weight:inherit;line-height:inherit;text-decoration:inherit;display: block;margin-top: 10px;line-height: 25px;"><?php echo $viewing->landlord->first_name; ?><br><?php echo $viewing->landlord->last_name; ?></span><br></div>
                                                                                <div style="margin:0;outline:none;padding:0;font-family:arial;font-weight:400;font-style:normal;text-align:center;color:#555555"><span style="color:#555555;font-size:inherit;font-weight:400;line-height:inherit;text-decoration:inherit;font-family:arial;text-align:inherit"><span style="color:inherit;font-size:19px;font-weight:inherit;line-height:inherit;text-decoration:inherit"> </span><br><span style="color:#000000;font-size:12px;font-weight:400;line-height:inherit;text-decoration:inherit;font-family:arial;font-style:normal;text-align:center;margin:0"><span style="color:inherit;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;font-family:arial"><span style="color:#1259af;font-size:17px;font-weight:bold;line-height:inherit;text-decoration:inherit;font-family:arial">Τηλέφωνο:</span></span><span style="color:#555555;font-size:15px;font-weight:inherit;line-height:inherit;text-decoration:inherit;display: block;margin: 10px 0 0;"><?php echo $viewing->landlord->first_name; ?><br style="font-family:arial;font-weight:400;color:#555555;font-size:16px;font-style:normal"><span style="color:inherit;font-size:12px;font-weight:inherit;line-height:inherit;text-decoration:inherit;font-family:arial;font-style:normal;display: block;margin-top: 20px;"><span style="color:#1259af;font-size:17px;font-weight:bold;line-height:inherit;text-decoration:inherit;font-family:arial">Email:</span><br style="font-family:arial;font-weight:bold;color:#045fb4;font-size:17px"></span></span></span><span style="color:inherit;font-size:15px;font-weight:inherit;line-height:inherit;text-decoration:inherit;font-style:normal;text-align:center;font-family:arial;margin:0;display: block;margin-top: 10px;"><?php echo $viewing->viewer->email; ?></span></span></div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    </tbody></table>
                                                            </td>
                                                        </tr>
                                                        </tbody></table>
                                                </td>
                                            </tr>
                                            <tr style="background-color:#ffffff"><td id="m_7972231473014332318layout-row-margin1435" style="padding:0;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_7972231473014332318layout-row1435" style="margin:0;padding:0;background-color:#ffffff"><td id="m_7972231473014332318layout-row-padding1435" style="background-color:#ffffff;padding:10px 10px 0px 10px" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td id="m_7972231473014332318text_div1366" style="line-height:150%;margin:0;outline:none;padding:0;color:inherit;font-size:12px;font-weight:inherit;line-height:1.5;text-decoration:inherit;font-family:Arial" width="630" valign="top" align="left"> <div style="line-height:150%;margin:0;outline:none;padding:0;line-height:1.5"> <div style="margin:0;outline:none;padding:0;text-align:center"> <p style="margin:0;outline:none;padding:0;color:inherit;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;text-align:left"></p>
                                                                                    <div style="margin:0;outline:none;padding:0;text-align:justify;font-size:15px"><span style="color:inherit;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;font-family:arial,helvetica,sans"> Αγαπητή/έ <span style="color:#000000;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit"><?php echo $viewing->viewer->first_name; ?>,</span></span></div>
                                                                                    <span style="color:inherit;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;text-align:center"><div style="margin:0;outline:none;padding:0;text-align:justify;font-size:15px"><br style="font-family:arial,helvetica,sans"></div>
<div style="margin:0;outline:none;padding:0;text-align:left;font-size:15px"><span style="color:inherit;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;font-family:arial,helvetica,sans"><span style="color:#000000;font-size:15px;font-weight:400;line-height:inherit;text-decoration:inherit;font-family:arial,helvetica,sans;font-style:normal">Σου υπενθυμίζουμε το ραντεβού σου με τον ιδιοκτήτη αύριο</span> <?php echo $viewing->date; ?> στις <?php echo $viewing->time; ?></span><span style="color:inherit;font-size:15px;font-weight:inherit;line-height:inherit;text-decoration:inherit"><span style="color:#045fb4;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;text-align:center"></span><span style="color:#045fb4;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;font-family:arial,helvetica,sans"> </span><span style="color:inherit;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;font-family:arial,helvetica,sans">και ώρα </span></span><span style="color:#045fb4;font-size:15px;font-weight:inherit;line-height:inherit;text-decoration:inherit;text-align:center">. </span><span style="color:inherit;font-size:15px;font-weight:inherit;line-height:inherit;text-decoration:inherit;text-align:center">Η συνάντηση θα πραγματοποιηθεί στην παραπάνω δηλωμένη διεύθυνση ακινήτου. </span></div>
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
                                            <tr style="background-color:#ffffff"><td id="m_7972231473014332318layout-row-margin1447" style="padding:0;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_7972231473014332318layout-row1447" style="margin:0;padding:0;background-color:#ffffff"><td id="m_7972231473014332318layout-row-padding1447" style="background-color:#ffffff;padding:10px 10px 0px 10px" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td id="m_7972231473014332318text_div1378" style="line-height:150%;margin:0;outline:none;padding:0;color:inherit;font-size:12px;font-weight:inherit;line-height:1.5;text-decoration:inherit;font-family:Arial" width="630" valign="top" align="left"> <div style="line-height:150%;margin:0;outline:none;padding:0;line-height:1.5"><div style="margin:0;outline:none;padding:0;font-family:arial;color:#000000;font-size:15px;text-align:justify"><span style="color:inherit;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;font-family:arial"><span style="color:inherit;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;font-family:arial"><br>Με εκτίμηση,</span><br style="font-family:arial;font-weight:inherit;color:inherit"></span></div>
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
                                            <tr style="background-color:#ffffff"><td id="m_7972231473014332318layout-row-margin1445" style="background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_7972231473014332318layout-row1445"><td id="m_7972231473014332318layout-row-padding1445" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td valign="top" height="30"><div style="margin:0;outline:none;padding:0;height:30px"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td width="650" valign="top" height="30">&nbsp;</td>
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
                                            <tr style="background-color:#ffffff"><td id="m_7972231473014332318layout-row-margin1452" style="padding:0;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_7972231473014332318layout-row1452" style="background-color:#ffffff"><td id="m_7972231473014332318layout-row-padding1452" style="line-height:0;background-color:#ffffff;padding:0" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:collapse;line-height:0" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td style="font-size:12px;height:12px;line-height:0" height="12"></td>
                                                                    </tr>
                                                                    <tr><td style="line-height:0" width="650" height="1" align="center"> <table style="font-size:14px;min-width:auto!important;border-collapse:collapse;line-height:0;width:40%;max-width:40%" width="260" height="1" cellspacing="0" cellpadding="0" border="0" align="center"><tbody><tr><td class="m_7972231473014332318break-line" style="line-height:1px;height:1px;width:260px;background-color:#b5b5b5" width="260" height="1" bgcolor="#b5b5b5"> </td>
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
                                            <tr style="background-color:#ffffff"><td id="m_7972231473014332318layout-row-margin1451" style="padding:0;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_7972231473014332318layout-row1451" style="margin:0;padding:0;background-color:#ffffff"><td id="m_7972231473014332318layout-row-padding1451" style="background-color:#ffffff;padding:10px 10px 0px 10px" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td id="m_7972231473014332318text_div1382" style="line-height:150%;margin:0;outline:none;padding:0;color:inherit;font-size:12px;font-weight:inherit;line-height:1.5;text-decoration:inherit;font-family:Arial" width="630" valign="top" align="left"> <div style="line-height:150%;margin:0;outline:none;padding:0;font-size:12px;color:#555555;line-height:1.5"> <div style="margin:0;outline:none;padding:0;color:#555555"><div style="margin:0;outline:none;padding:0;text-align:center;font-family:arial;color:#555555"><div style="margin:0;outline:none;padding:0;text-align:center"><span style="color:#555555;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit">Σε περίπτωση που δεν μπορείς να παρευρεθείς στη συνάντηση, παρακαλούμε να μας ενημερώσεις άμεσα.</span></div>
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
                                            <tr style="background-color:#ffffff"><td id="m_7972231473014332318layout-row-margin1439" style="padding:0;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_7972231473014332318layout-row1439"><td id="m_7972231473014332318layout-row-padding1439" style="padding:0" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td valign="top" height="11"><div style="margin:0;outline:none;padding:0;height:11px"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td style="background-color:#ffffff" width="650" valign="top" height="11">&nbsp;</td>
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
                                            <tr style="background-color:#ffffff"><td id="m_7972231473014332318layout-row-margin1438" style="padding:0px;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_7972231473014332318layout-row1438" style="background-color:#ffffff"><td id="m_7972231473014332318layout-row-padding1438" style="background-color:#ffffff;padding:5px" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0"><tbody><tr><td width="650" align="left"> <center style="margin:0;outline:none;padding:0;font-size:0px"> <table class="m_7972231473014332318_ac_social_table" style="font-size:0;min-width:auto!important;margin:auto!important;display:inline-block!important;text-align:center!important" cellspacing="0" cellpadding="0" align="center"><tbody><tr><td style="display:inline-block!important;font-size:0;width:40px!important" width="40" valign="middle" align="center"><div style="margin:0;outline:none;padding:0"><a href="https://www.facebook.com/homigreece/" id="m_7972231473014332318facebook" style="margin:0;outline:none;padding:0;color:#045fb4" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://homi.acemlnc.com/lt.php?notrack%3D1%26s%3D66f8b3adaac660033ea1e3f2f6fe87ac%26i%3D71A433A0A533&amp;source=gmail&amp;ust=1591434055192000&amp;usg=AOvVaw0AyXIu-YLACXnn8Lr3WncC"><img src="https://ci3.googleusercontent.com/proxy/GdbTDD6APpjXXyay9gcHY2yPn1KAMBDZGlcxVn9qbHy2odEJbgon1MJuynWI-lvvdoMmGLVpnshbmIwnclsuHqoovO1eQFTyeEqC8BfiK-Bl1w=s0-d-e1-ft#https://homi.img-us6.com/_social_/flat-color-round-facebook.png" style="border:none" class="CToWUd" width="40" border="0"></a></div>
                                                                                                    </td>
                                                                                                    <td style="display:inline-block!important;font-size:0;width:15px!important" width="15">&nbsp;</td>
                                                                                                    <td style="display:inline-block!important;font-size:0;width:40px!important" width="40" valign="middle" align="center"><div style="margin:0;outline:none;padding:0"><a href="https://www.instagram.com/homigreece/" id="m_7972231473014332318instagram" style="margin:0;outline:none;padding:0;color:#045fb4" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://homi.acemlnc.com/lt.php?notrack%3D1%26s%3D66f8b3adaac660033ea1e3f2f6fe87ac%26i%3D71A433A0A534&amp;source=gmail&amp;ust=1591434055192000&amp;usg=AOvVaw11t3lMmbK-FiC7s54AvWhe"><img src="https://ci6.googleusercontent.com/proxy/KVh7BS2Jf9ltfS_IurBkgfRURnu_gLxG-tr6DEbYAVg9HD-X6XGGAnUhSgSbHtmkU5_SpxRjX0O8uMRBlZXznplZBDXgSaoHo1jasIO7vl0vfhI=s0-d-e1-ft#https://homi.img-us6.com/_social_/flat-color-round-instagram.png" style="border:none" class="CToWUd" width="40" border="0"></a></div>
                                                                                                    </td>
                                                                                                    <td style="display:inline-block!important;font-size:0;width:15px!important" width="15">&nbsp;</td>
                                                                                                    <td style="display:inline-block!important;font-size:0;width:40px!important" width="40" valign="middle" align="center"><div style="margin:0;outline:none;padding:0"><a href="https://homi.com.gr/el/" id="m_7972231473014332318website" style="margin:0;outline:none;padding:0;color:#045fb4" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://homi.acemlnc.com/lt.php?notrack%3D1%26s%3D66f8b3adaac660033ea1e3f2f6fe87ac%26i%3D71A433A0A532&amp;source=gmail&amp;ust=1591434055192000&amp;usg=AOvVaw2r410VAxfpOdnB_nQU8Gea"><img src="https://ci6.googleusercontent.com/proxy/6jmzrplCInuN_vMRqv0hSnU7D8YdNdGpqh6xDNTF6rtjrIFVttRMyud6MESJd09xwONO1CDs5Z2KH9czHcP9aYTeXJ6JfYRgjJdJ4WJAJZlD=s0-d-e1-ft#https://homi.img-us6.com/_social_/flat-color-round-website.png" style="border:none" class="CToWUd" width="40" border="0"></a></div>
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
                                            <tr style="background-color:#ffffff"><td id="m_7972231473014332318layout-row-margin1440" style="padding:0;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_7972231473014332318layout-row1440"><td id="m_7972231473014332318layout-row-padding1440" style="padding:0" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td valign="top" height="24"><div style="margin:0;outline:none;padding:0;height:24px"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td style="background-color:#ffffff" width="650" valign="top" height="24">&nbsp;</td>
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
                                            <tr style="background-color:#ffffff"><td id="m_7972231473014332318layout-row-margin1436" style="padding:0;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_7972231473014332318layout-row1436" style="margin:0;padding:0;background-color:#1259af"><td id="m_7972231473014332318layout-row-border1436" style="border-color:#ffffff;border-style:solid;border-width:1px" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td id="m_7972231473014332318layout-row-padding1436" style="background-color:#1259af;padding:20px 26px 20px 26px" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td id="m_7972231473014332318text_div1367" style="margin:0;outline:none;padding:0;color:inherit;font-size:12px;font-weight:inherit;line-height:1;text-decoration:inherit;font-family:Arial" width="596" valign="top" align="left"> <div style="margin:0;outline:none;padding:0;color:#ffffff"> <div style="margin:0;outline:none;padding:0;color:#ffffff"> <p style="margin:0;outline:none;padding:0;color:#ffffff;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;text-align:center"><span style="color:#ffffff;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit"><span style="color:#ffffff;font-size:12px;font-weight:400;line-height:inherit;text-decoration:inherit;font-family:arial;font-style:normal">Το παρόν email αποτελεί ανακοίνωση νομικού
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
                                            <tr style="background-color:#ffffff"><td id="m_7972231473014332318layout-row-margin1437" style="padding:0;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_7972231473014332318layout-row1437" style="margin:0;padding:0;background-color:#1259af"><td id="m_7972231473014332318layout-row-border1437" style="border-color:#ffffff;border-style:solid;border-width:1px" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td id="m_7972231473014332318layout-row-padding1437" style="background-color:#1259af;padding:20px 26px 20px 20px" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td id="m_7972231473014332318text_div1368" style="margin:0;outline:none;padding:0;color:inherit;font-size:12px;font-weight:inherit;line-height:1;text-decoration:inherit;font-family:Arial" width="602" valign="top" align="left"> <div style="margin:0;outline:none;padding:0;color:#ffffff"> <div style="margin:0;outline:none;padding:0;color:#ffffff"> <div style="margin:0;outline:none;padding:0;text-align:center;color:#ffffff"><span style="color:#ffffff;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit"><span style="color:#ffffff;font-size:12px;font-weight:normal;line-height:inherit;text-decoration:inherit;font-family:arial;font-style:normal">Copyright © 2020 </span><a href="https://homi.com.gr/el/" style="margin:0;outline:none;padding:0;color:#ffffff;text-decoration:underline" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://homi.acemlnc.com/lt.php?notrack%3D1%26s%3D66f8b3adaac660033ea1e3f2f6fe87ac%26i%3D71A433A0A532&amp;source=gmail&amp;ust=1591434055192000&amp;usg=AOvVaw2r410VAxfpOdnB_nQU8Gea"><span style="color:#ffffff;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit"><span class="il">homi</span>.com.gr</span></a> <br><span style="color:#ffffff;font-size:12px;font-weight:normal;line-height:inherit;text-decoration:inherit;font-family:arial;font-style:normal">Με επιφύλαξη κάθε νόμιμου δικαιώµατος</span></span><br style="color:#ffffff"></div>
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
                    </tbody></table><div class="yj6qo ajU"><div id=":16w" class="ajR" role="button" tabindex="0" data-tooltip="Εμφάνιση περιεχομένου που έχει περικοπεί" aria-label="Εμφάνιση περιεχομένου που έχει περικοπεί" aria-expanded="false"><img class="ajT" src="//ssl.gstatic.com/ui/v1/icons/mail/images/cleardot.gif"></div></div><div class="adL">
                </div></div><div class="adL"><div class="adm"><div id="q_203" class="ajR h4"><div class="ajT"></div></div></div><div class="h5">
                    <img src="https://ci6.googleusercontent.com/proxy/Lot2Je-_ysGxRCtWJHTgH87NrZJNFEceq99PCTh1OPuSPEl64kjXahEBbHdWBn3w-jEQzgtsmF8L7DXTKmvADMpUelGYsB3jD4bcLDgF5e8l4EZKNZVT64j30VfPuR0rT-w9v37qvNGMhjecbqbrpRBv3JoTIQ=s0-d-e1-ft#https://homi.acemlnc.com/lt.php?notrack=1&amp;nl=0&amp;c=71&amp;m=433&amp;s=66f8b3adaac660033ea1e3f2f6fe87ac&amp;l=open" style="display:block;width:1px!important;min-width:1px!important;max-width:1px!important;height:1px!important;border:0;overflow:hidden" class="CToWUd" width="1" height="1" border="0"><div id="m_7972231473014332318ac-footer" style="clear:both;background-color:inherit;background:inherit;min-width:100%;padding:20px;color:#000000;font-size:11px;font-family:arial,helvetica,sans-serif;line-height:140%;line-height:1.4;text-align:center;box-sizing:border-box">
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
