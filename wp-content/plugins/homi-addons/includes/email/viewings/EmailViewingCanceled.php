<?php


class EmailViewingCanceled
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
        <div id="m_-5165962939958266045ac-designer" class="m_-5165962939958266045body" style="font-family:Arial;line-height:1.1;margin:0px;background-color:#cce0ff;width:100%;text-align:center">		<div style="display:none;padding:0;height:1px;font-size:1px;background-color:inherit!important;color:inherit!important;line-height:1px">
                Το αίτημα επίδειξης ακινήτου ακυρώθηκε
            </div>
            <div style="margin:0px;outline:none;padding:0px;color:#000000;font-family:arial;line-height:1.1;width:100%;background-color:#cce0ff;background:#cce0ff;text-align:center"><table style="font-size:14px;min-width:auto;background-color:#cce0ff;background:#cce0ff" width="100%" cellspacing="0" cellpadding="0" border="0" align="left"><tbody><tr><td width="100%" valign="top" align="center"><table style="font-size:14px;min-width:auto;max-width:650px" width="650" cellspacing="0" cellpadding="0" border="0" bgcolor="#cce0ff"><tbody><tr><td id="m_-5165962939958266045layout_table_7de6ef3d981aa56ad5c258ef31d79b4e5a4bf20b" style="background-color:#ffffff" width="650" valign="top" align="center"><table style="font-size:14px;min-width:100%;background-color:#ffffff" width="650" cellspacing="0" cellpadding="0" border="0"><tbody><tr style="background-color:#ffffff"><td id="m_-5165962939958266045layout-row-margin858" style="padding:0;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_-5165962939958266045layout-row858"><td id="m_-5165962939958266045layout-row-padding858" style="padding:0" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td valign="top" height="30"><div style="margin:0;outline:none;padding:0;height:30px"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td style="background-color:#cce0ff" width="650" valign="top" height="30">&nbsp;</td>
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
                                            <tr style="background-color:#ffffff"><td id="m_-5165962939958266045layout-row-margin844" style="padding:0px;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_-5165962939958266045layout-row844" style="background-color:#1259af" align="center"><td id="m_-5165962939958266045layout-row-padding844" style="background-color:#1259af;padding:7px" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td width="636" valign="top" align="center"><a href="https://homi.com.gr/el/" style="margin:0;outline:none;padding:0;color:#045fb4;display:block;min-width:100%" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://homi.acemlnc.com/lt.php?notrack%3D1%26s%3D66f8b3adaac660033ea1e3f2f6fe87ac%26i%3D58A391A0A439&amp;source=gmail&amp;ust=1591434054928000&amp;usg=AOvVaw1YrPNrdxAc5SZtAGTYTUbh"><img src="https://ci3.googleusercontent.com/proxy/pWx-vjeRdrqXuAKzdHgHCKMuH-3B51ONUCF-llVJGsfZ3JP9sghJ_QsBxGaQVAv9sp24owaJi0Fo239Sl-fF8K9cVLmd8LOBtMp9W8Y3j06PkBfU5B0o1e_SPvsFbXhatqsKxQY=s0-d-e1-ft#https://homi.imgus11.com/public//3db214c35e4a1e4c80f1c80ce920183b.png?r=1816838748" alt="" style="border:none;display:block;outline:none;width:128px;opacity:1;max-width:100%" class="CToWUd" width="128"></a></td>
                                                                    </tr>
                                                                    </tbody></table>
                                                            </td>
                                                        </tr>
                                                        </tbody></table>
                                                </td>
                                            </tr>
                                            <tr style="background-color:#ffffff"><td id="m_-5165962939958266045layout-row-margin852" style="padding:3px 0px 0px 0px;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_-5165962939958266045layout-row852" style="margin:0;padding:0;background-color:#e2e5eb"><td id="m_-5165962939958266045layout-row-padding852" style="background-color:#e2e5eb;padding:20px 0px 20px 0px" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td id="m_-5165962939958266045text_div783" style="margin:0;outline:none;padding:0;color:inherit;font-size:12px;font-weight:inherit;line-height:1;text-decoration:inherit;font-family:Arial" width="650" valign="top" align="left">
                                                                            <div style="margin:0;outline:none;padding:0;font-size:25px;color:#ffffff;font-family:arial,helvetica,sans"><div style="margin:0;outline:none;padding:0"></div>
                                                                                <div style="margin:0;outline:none;padding:0;color:#1259af;font-family:arial,helvetica,sans;font-weight:700;font-size:25px;text-align:center"><span style="color:#1259af;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit">Το αίτημα ακυρώθηκε</span></div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    </tbody></table>
                                                            </td>
                                                        </tr>
                                                        </tbody></table>
                                                </td>
                                            </tr>
                                            <tr style="background-color:#ffffff"><td id="m_-5165962939958266045layout-row-margin974" style="padding:2px 0px 0px 0px;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_-5165962939958266045layout-row974" style="margin:0;padding:0;background-color:#ffffff"><td id="m_-5165962939958266045layout-row-padding974" style="background-color:#ffffff;padding:19px 0px 0px 0px" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td id="m_-5165962939958266045text_div905" style="margin:0;outline:none;padding:0;color:inherit;font-size:12px;font-weight:inherit;line-height:1;text-decoration:inherit;font-family:Arial" width="650" valign="top" align="left"> <div style="margin:0;outline:none;padding:0;font-size:17px"> <div style="margin:0;outline:none;padding:0;text-align:center"><span style="color:#555555;font-size:inherit;font-weight:400;line-height:inherit;text-decoration:inherit;font-family:arial;font-style:italic">Η παρακάτω συνάντηση </span><span style="color:#555555;font-size:inherit;font-weight:400;line-height:inherit;text-decoration:inherit;font-family:arial;font-style:italic">ακυρώθηκε</span><br></div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    </tbody></table>
                                                            </td>
                                                        </tr>
                                                        </tbody></table>
                                                </td>
                                            </tr>
                                            <tr style="background-color:#ffffff"><td id="m_-5165962939958266045layout-row-margin853" style="padding:3px 0px 0px 0px;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_-5165962939958266045layout-row853" style="margin:0;padding:0;background-color:#ffffff"><td id="m_-5165962939958266045layout-row-padding853" style="background-color:#ffffff;padding:25px 0px 3px 0px" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td id="m_-5165962939958266045text_div784" style="margin:0;outline:none;padding:0;color:inherit;font-size:12px;font-weight:inherit;line-height:1;text-decoration:inherit;font-family:Arial" width="650" valign="top" align="left"> <div style="margin:0;outline:none;padding:0;font-size:18px"> <div style="margin:0;outline:none;padding:0;font-family:arial;font-style:normal;color:#555555;text-align:center"><span style="color:#555555;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;font-family:arial"><span style="color:#000000;font-size:inherit;font-weight:bold;line-height:inherit;text-decoration:inherit">Στοιχεία Συνάντησης</span><br></span></div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    </tbody></table>
                                                            </td>
                                                        </tr>
                                                        </tbody></table>
                                                </td>
                                            </tr>
                                            <tr style="background-color:#ffffff"><td id="m_-5165962939958266045layout-row-margin856" style="padding:0;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_-5165962939958266045layout-row856" style="background-color:#ffffff"><td id="m_-5165962939958266045layout-row-padding856" style="line-height:0;background-color:#ffffff;padding:0" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:collapse;line-height:0" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td style="font-size:12px;height:12px;line-height:0" height="12"></td>
                                                                    </tr>
                                                                    <tr><td style="line-height:0" width="650" height="1" align="center"> <table style="font-size:14px;min-width:auto!important;border-collapse:collapse;line-height:0;width:40%;max-width:40%" width="260" height="1" cellspacing="0" cellpadding="0" border="0" align="center"><tbody><tr><td class="m_-5165962939958266045break-line" style="line-height:1px;height:1px;width:260px;background-color:#b5b5b5" width="260" height="1" bgcolor="#b5b5b5"> </td>
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
                                            <tr style="background-color:#ffffff"><td id="m_-5165962939958266045layout-row-margin855" style="padding:0px;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_-5165962939958266045layout-row855" style="margin:0;padding:0;background-color:#ffffff"><td id="m_-5165962939958266045layout-row-padding855" style="background-color:#ffffff;padding:10px 0px 20px 0px" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td id="m_-5165962939958266045text_div786" style="margin:0;outline:none;padding:0;color:inherit;font-size:12px;font-weight:inherit;line-height:1;text-decoration:inherit;font-family:Arial" width="650" valign="top" align="left"> <div style="margin:0;outline:none;padding:0;color:#045fb4"> <div style="margin:0;outline:none;padding:0;font-size:17px;color:#045fb4;font-family:arial"><div style="margin:0;outline:none;padding:0;font-family:arial;font-style:normal;color:#1259af;font-size:17px;text-align:center"><span style="color:#1259af;font-size:inherit;font-weight:bold;line-height:inherit;text-decoration:inherit;font-family:arial">Ημερομηνία:</span></div>
                                                                                    <span style="color:#045fb4;font-size:17px;font-weight:400;line-height:inherit;text-decoration:inherit;font-family:arial;font-style:normal"><div style="margin:0;outline:none;padding:0;font-family:arial;color:#555555;text-align:center;font-size:15px;display: block;margin-top: 10px;"><span style="color:#555555;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;font-family:arial"><?php echo $viewing->date; ?></span></div>
<div style="margin:0;outline:none;padding:0;font-family:arial;text-align:center;color:#045fb4"><br style="font-family:arial;font-weight:inherit;color:#045fb4;color:#045fb4"></div>
<div style="margin:0;outline:none;padding:0;font-family:arial;font-weight:inherit;color:#045fb4;text-align:center"><span style="color:#1259af;font-size:inherit;font-weight:bold;line-height:inherit;text-decoration:inherit;font-family:arial"><span style="color:#1259af;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit">Ώρα:</span><br style="color:#1259af"></span><span style="color:#045fb4;font-size:15px;font-weight:inherit;line-height:inherit;text-decoration:inherit;font-family:arial"><span style="color:#555555;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;display: block;margin-top: 10px;"><?php echo $viewing->time; ?></span><span style="color:#1259af;font-size:17px;font-weight:bold;line-height:inherit;text-decoration:inherit;font-family:arial;font-style:normal"><span style="color:#1259af;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit"><br style="color:#1259af">Διεύθυνση:</span><br style="color:#1259af"></span><span style="color:#555555;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;display: block;margin-top: 10px;"><?php echo $viewing->property_address; ?>, <?php echo $viewing->property_title; ?><br style="color:#555555"></span><br><span style="color:#1259af;font-size:17px;font-weight:bold;line-height:inherit;text-decoration:inherit;font-family:arial;font-style:normal"><br style="color:#1259af"><span style="color:#1259af;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit">Επισκέπτης:</span><br style="color:#1259af"></span><span style="color:#555555;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;display: block;margin-top: 10px;"><?php echo $viewing->viewer->first_name; ?></span><br></span></div>
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
                                            <tr style="background-color:#ffffff"><td id="m_-5165962939958266045layout-row-margin854" style="padding:0;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_-5165962939958266045layout-row854"><td id="m_-5165962939958266045layout-row-padding854" style="padding:0" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td valign="top" height="10"><div style="margin:0;outline:none;padding:0;height:10px"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td style="background-color:#ffffff" width="650" valign="top" height="10">&nbsp;</td>
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
                                            <tr style="background-color:#ffffff"><td id="m_-5165962939958266045layout-row-margin845" style="padding:0;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_-5165962939958266045layout-row845" style="margin:0;padding:0;background-color:#ffffff"><td id="m_-5165962939958266045layout-row-padding845" style="background-color:#ffffff;padding:10px 10px 0px 10px" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td id="m_-5165962939958266045text_div776" style="line-height:150%;margin:0;outline:none;padding:0;color:inherit;font-size:12px;font-weight:inherit;line-height:1.5;text-decoration:inherit;font-family:Arial" width="630" valign="top" align="left"> <div style="line-height:150%;margin:0;outline:none;padding:0;line-height:1.5"> <div style="margin:0;outline:none;padding:0;text-align:center"> <p style="margin:0;outline:none;padding:0;color:inherit;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;text-align:left"></p>
                                                                                    <div style="margin:0;outline:none;padding:0;text-align:justify;font-size:15px"><span style="color:inherit;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;font-family:arial,helvetica,sans"> Αγαπητή/έ <span style="color:#000000;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit"><?php echo $viewing->landlord->first_name; ?>,</span></span></div>
                                                                                    <span style="color:inherit;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;text-align:center"><div style="margin:0;outline:none;padding:0;text-align:justify;font-size:15px"><br style="font-family:arial,helvetica,sans"></div>
<div style="margin:0;outline:none;padding:0;text-align:justify;font-size:15px"><span style="color:#000000;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;font-family:arial,helvetica,sans"> Το αίτημα επίδειξης ακινήτου με τις παραπάνω πληροφορίες ακυρώθηκε.</span></div>
<div style="margin:0;outline:none;padding:0;text-align:justify;font-size:15px">Λυπούμαστε για την αναστάτωση.<br><br></div>
<div style="margin:0;outline:none;padding:0;text-align:justify;font-size:15px"><span style="color:inherit;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;font-family:arial,helvetica,sans"> Μπορείς να αλλάξεις τη διαθεσιμότητα σου κάνοντας κλικ εδώ:</span></div>
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
                                            <tr style="background-color:#ffffff"><td id="m_-5165962939958266045layout-row-margin860" style="padding:5px;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_-5165962939958266045layout-row860"><td id="m_-5165962939958266045layout-row-padding860" style="padding:12px" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td width="616" valign="top" align="left"> <div style="margin:0;outline:none;padding:0;text-align:center">
                                                                                <a href="<?php echo site_url(EmailActionsConstants::AVAILABILITY_URL); ?>" style="margin:0;outline:none;padding:16px;color:#ffffff;background-color:#1259af;border:1px solid #030303;border-radius:3px;font-family:Arial;font-size:16px;display:inline-block;line-height:1.1;text-align:center;text-decoration:none" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://homi.acemlnc.com/lt.php?notrack%3D1%26s%3D66f8b3adaac660033ea1e3f2f6fe87ac%26i%3D58A391A0A440&amp;source=gmail&amp;ust=1591434054928000&amp;usg=AOvVaw1DE7_5vSU_MuLsx1IsHAj1"> <span style="color:#ffffff;font-family:Arial;font-size:16px;font-weight:bold"> Η διαθεσιμότητα μου </span> </a> </div>

                                                                        </td>
                                                                    </tr>
                                                                    </tbody></table>
                                                            </td>
                                                        </tr>
                                                        </tbody></table>
                                                </td>
                                            </tr>
                                            <tr style="background-color:#ffffff"><td id="m_-5165962939958266045layout-row-margin859" style="padding:0;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_-5165962939958266045layout-row859" style="margin:0;padding:0;background-color:#ffffff"><td id="m_-5165962939958266045layout-row-padding859" style="background-color:#ffffff;padding:10px 10px 0px 10px" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td id="m_-5165962939958266045text_div790" style="line-height:150%;margin:0;outline:none;padding:0;color:inherit;font-size:12px;font-weight:inherit;line-height:1.5;text-decoration:inherit;font-family:Arial" width="630" valign="top" align="left"> <div style="line-height:150%;margin:0;outline:none;padding:0;line-height:1.5"><div style="margin:0;outline:none;padding:0;font-family:arial;color:#000000;font-size:15px;text-align:justify"><span style="color:inherit;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;font-family:arial"><span style="color:inherit;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;font-family:arial"><span style="color:inherit;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit">Αν θα ήθελες να μιλήσεις με έναν ειδικό της </span><span style="color:#045fb4;font-size:inherit;font-weight:bold;line-height:inherit;text-decoration:inherit">ΗΟΜΙ</span><span style="color:inherit;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit">, παρακαλούμε επικοινώνησε μαζί μας μέσω:</span><br><br><span style="color:#000000;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit" lang="EN-AU"><span style="color:inherit;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:underline;font-style:normal">Τηλεφώνου</span>: +30 215 215 1962 <br><span style="color:inherit;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:underline"> Email</span>: </span><a href="mailto:support@homi.com.gr" style="margin:0;outline:none;padding:0;color:#045fb4;text-decoration:underline;font-weight:inherit;font-style:normal" target="_blank"><span>support@<span class="il">homi</span>.com.gr</span></a><span style="color:#000000;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;font-style:normal" lang="EN-AU"> </span><br><br><span style="color:inherit;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit">Με εκτίμηση,</span></span><br style="font-family:arial;font-weight:inherit;color:inherit"></span></div>
                                                                                <div style="margin:0;outline:none;padding:0;font-family:arial;color:#000000;font-size:15px;font-style:normal;font-weight:400;text-align:justify"><span style="color:inherit;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;font-family:arial">Η ομάδα της <span style="color:#1259af;font-size:inherit;font-weight:700;line-height:inherit;text-decoration:inherit;font-family:arial">ΗΟΜΙ<br></span></span></div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    </tbody></table>
                                                            </td>
                                                        </tr>
                                                        </tbody></table>
                                                </td>
                                            </tr>
                                            <tr style="background-color:#ffffff"><td id="m_-5165962939958266045layout-row-margin972" style="padding:0;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_-5165962939958266045layout-row972" style="background-color:#ffffff"><td id="m_-5165962939958266045layout-row-padding972" style="line-height:0;background-color:#ffffff;padding:0" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:collapse;line-height:0" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td style="font-size:12px;height:12px;line-height:0" height="12"></td>
                                                                    </tr>
                                                                    <tr><td style="line-height:0" width="650" height="1" align="center"> <table style="font-size:14px;min-width:auto!important;border-collapse:collapse;line-height:0;width:40%;max-width:40%" width="260" height="1" cellspacing="0" cellpadding="0" border="0" align="center"><tbody><tr><td class="m_-5165962939958266045break-line" style="line-height:1px;height:1px;width:260px;background-color:#b5b5b5" width="260" height="1" bgcolor="#b5b5b5"> </td>
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
                                            <tr style="background-color:#ffffff"><td id="m_-5165962939958266045layout-row-margin857" style="background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_-5165962939958266045layout-row857"><td id="m_-5165962939958266045layout-row-padding857" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td valign="top" height="30"><div style="margin:0;outline:none;padding:0;height:30px"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td width="650" valign="top" height="30">&nbsp;</td>
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
                                            <tr style="background-color:#ffffff"><td id="m_-5165962939958266045layout-row-margin848" style="padding:0;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_-5165962939958266045layout-row848" style="margin:0;padding:0;background-color:#ffffff"><td id="m_-5165962939958266045layout-row-padding848" style="background-color:#ffffff;padding:0px 26px 0px 26px" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td id="m_-5165962939958266045text_div779" style="line-height:150%;margin:0;outline:none;padding:0;color:inherit;font-size:12px;font-weight:inherit;line-height:1.5;text-decoration:inherit;font-family:Arial" width="598" valign="top" align="left"> <div style="line-height:150%;margin:0;outline:none;padding:0;line-height:1.5"> <div style="margin:0;outline:none;padding:0;text-align:center"> <p style="margin:0;outline:none;padding:0;color:inherit;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;text-align:left"></p>
                                                                                    <div style="margin:0;outline:none;padding:0;text-align:center;color:#1259af"><span style="color:#1259af;font-size:14px;font-weight:inherit;line-height:inherit;text-decoration:inherit;font-family:arial,helvetica,sans">Αν θέλεις να ενημερώνεσαι καθημερινά για τα νέα της ΗΟΜΙ και να μαθαίνεις πρώτος για τις πιο πρόσφατες αγγελίες μας, ακολούθησε μας στα Social Media</span></div>
                                                                                    <p style="margin:0;outline:none;padding:0;color:inherit;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit"></p>
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
                                            <tr style="background-color:#ffffff"><td id="m_-5165962939958266045layout-row-margin850" style="padding:0;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_-5165962939958266045layout-row850"><td id="m_-5165962939958266045layout-row-padding850" style="padding:0" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td valign="top" height="11"><div style="margin:0;outline:none;padding:0;height:11px"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td style="background-color:#ffffff" width="650" valign="top" height="11">&nbsp;</td>
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
                                            <tr style="background-color:#ffffff"><td id="m_-5165962939958266045layout-row-margin849" style="padding:0px;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_-5165962939958266045layout-row849" style="background-color:#ffffff"><td id="m_-5165962939958266045layout-row-padding849" style="background-color:#ffffff;padding:5px" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0"><tbody><tr><td width="650" align="left"> <center style="margin:0;outline:none;padding:0;font-size:0px"> <table class="m_-5165962939958266045_ac_social_table" style="font-size:0;min-width:auto!important;margin:auto!important;display:inline-block!important;text-align:center!important" cellspacing="0" cellpadding="0" align="center"><tbody><tr><td style="display:inline-block!important;font-size:0;width:40px!important" width="40" valign="middle" align="center"><div style="margin:0;outline:none;padding:0"><a href="https://www.facebook.com/homigreece/" id="m_-5165962939958266045facebook" style="margin:0;outline:none;padding:0;color:#045fb4" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://homi.acemlnc.com/lt.php?notrack%3D1%26s%3D66f8b3adaac660033ea1e3f2f6fe87ac%26i%3D58A391A0A441&amp;source=gmail&amp;ust=1591434054928000&amp;usg=AOvVaw2lOW66TaP8ETvZ7ygmn5J1"><img src="https://ci3.googleusercontent.com/proxy/GdbTDD6APpjXXyay9gcHY2yPn1KAMBDZGlcxVn9qbHy2odEJbgon1MJuynWI-lvvdoMmGLVpnshbmIwnclsuHqoovO1eQFTyeEqC8BfiK-Bl1w=s0-d-e1-ft#https://homi.img-us6.com/_social_/flat-color-round-facebook.png" style="border:none" class="CToWUd" width="40" border="0"></a></div>
                                                                                                    </td>
                                                                                                    <td style="display:inline-block!important;font-size:0;width:15px!important" width="15">&nbsp;</td>
                                                                                                    <td style="display:inline-block!important;font-size:0;width:40px!important" width="40" valign="middle" align="center"><div style="margin:0;outline:none;padding:0"><a href="https://www.instagram.com/homigreece/" id="m_-5165962939958266045instagram" style="margin:0;outline:none;padding:0;color:#045fb4" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://homi.acemlnc.com/lt.php?notrack%3D1%26s%3D66f8b3adaac660033ea1e3f2f6fe87ac%26i%3D58A391A0A442&amp;source=gmail&amp;ust=1591434054929000&amp;usg=AOvVaw0H4A8BeWZtoQM4sF6XLrx9"><img src="https://ci6.googleusercontent.com/proxy/KVh7BS2Jf9ltfS_IurBkgfRURnu_gLxG-tr6DEbYAVg9HD-X6XGGAnUhSgSbHtmkU5_SpxRjX0O8uMRBlZXznplZBDXgSaoHo1jasIO7vl0vfhI=s0-d-e1-ft#https://homi.img-us6.com/_social_/flat-color-round-instagram.png" style="border:none" class="CToWUd" width="40" border="0"></a></div>
                                                                                                    </td>
                                                                                                    <td style="display:inline-block!important;font-size:0;width:15px!important" width="15">&nbsp;</td>
                                                                                                    <td style="display:inline-block!important;font-size:0;width:40px!important" width="40" valign="middle" align="center"><div style="margin:0;outline:none;padding:0"><a href="https://homi.com.gr/el/" id="m_-5165962939958266045website" style="margin:0;outline:none;padding:0;color:#045fb4" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://homi.acemlnc.com/lt.php?notrack%3D1%26s%3D66f8b3adaac660033ea1e3f2f6fe87ac%26i%3D58A391A0A439&amp;source=gmail&amp;ust=1591434054929000&amp;usg=AOvVaw2c21lmZ3h4GnW6bvEtxZ9G"><img src="https://ci6.googleusercontent.com/proxy/6jmzrplCInuN_vMRqv0hSnU7D8YdNdGpqh6xDNTF6rtjrIFVttRMyud6MESJd09xwONO1CDs5Z2KH9czHcP9aYTeXJ6JfYRgjJdJ4WJAJZlD=s0-d-e1-ft#https://homi.img-us6.com/_social_/flat-color-round-website.png" style="border:none" class="CToWUd" width="40" border="0"></a></div>
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
                                            <tr style="background-color:#ffffff"><td id="m_-5165962939958266045layout-row-margin851" style="padding:0;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_-5165962939958266045layout-row851"><td id="m_-5165962939958266045layout-row-padding851" style="padding:0" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td valign="top" height="24"><div style="margin:0;outline:none;padding:0;height:24px"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td style="background-color:#ffffff" width="650" valign="top" height="24">&nbsp;</td>
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
                                            <tr style="background-color:#ffffff"><td id="m_-5165962939958266045layout-row-margin846" style="padding:0;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_-5165962939958266045layout-row846" style="margin:0;padding:0;background-color:#1259af"><td id="m_-5165962939958266045layout-row-border846" style="border-color:#ffffff;border-style:solid;border-width:1px" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td id="m_-5165962939958266045layout-row-padding846" style="background-color:#1259af;padding:20px 26px 20px 26px" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td id="m_-5165962939958266045text_div777" style="margin:0;outline:none;padding:0;color:inherit;font-size:12px;font-weight:inherit;line-height:1;text-decoration:inherit;font-family:Arial" width="596" valign="top" align="left"> <div style="margin:0;outline:none;padding:0;color:#ffffff"> <div style="margin:0;outline:none;padding:0;color:#ffffff"> <p style="margin:0;outline:none;padding:0;color:#ffffff;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;text-align:center"><span style="color:#ffffff;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit"><span style="color:#ffffff;font-size:12px;font-weight:400;line-height:inherit;text-decoration:inherit;font-family:arial;font-style:normal">Το παρόν email αποτελεί ανακοίνωση νομικού περιεχομένου. Δεν
αποτελεί προϊόν μάρκετινγκ ή προοωθητική ενέργεια. Για το λόγο αυτό λάβατε το προκείμενο email, παρόλο που ενδέχεται να είχατε απεγγραφεί </span><span style="color:#ffffff;font-size:12px;font-weight:400;line-height:inherit;text-decoration:inherit;font-family:arial;font-style:normal">από τις προωθητικές μας ενημερώσεις.</span></span></p>
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
                                            <tr style="background-color:#ffffff"><td id="m_-5165962939958266045layout-row-margin847" style="padding:0;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_-5165962939958266045layout-row847" style="margin:0;padding:0;background-color:#1259af"><td id="m_-5165962939958266045layout-row-border847" style="border-color:#ffffff;border-style:solid;border-width:1px" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td id="m_-5165962939958266045layout-row-padding847" style="background-color:#1259af;padding:20px 26px 20px 20px" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td id="m_-5165962939958266045text_div778" style="margin:0;outline:none;padding:0;color:inherit;font-size:12px;font-weight:inherit;line-height:1;text-decoration:inherit;font-family:Arial" width="602" valign="top" align="left"> <div style="margin:0;outline:none;padding:0;color:#ffffff"> <div style="margin:0;outline:none;padding:0;color:#ffffff"> <div style="margin:0;outline:none;padding:0;text-align:center;color:#ffffff"><span style="color:#ffffff;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit"><span style="color:#ffffff;font-size:12px;font-weight:normal;line-height:inherit;text-decoration:inherit;font-family:arial;font-style:normal">Copyright © 2020 </span><a href="https://homi.com.gr/el/" style="margin:0;outline:none;padding:0;color:#ffffff;text-decoration:underline" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://homi.acemlnc.com/lt.php?notrack%3D1%26s%3D66f8b3adaac660033ea1e3f2f6fe87ac%26i%3D58A391A0A439&amp;source=gmail&amp;ust=1591434054929000&amp;usg=AOvVaw2c21lmZ3h4GnW6bvEtxZ9G"><span style="color:#ffffff;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit"><span class="il">homi</span>.com.gr</span></a> <br><span style="color:#ffffff;font-size:12px;font-weight:normal;line-height:inherit;text-decoration:inherit;font-family:arial;font-style:normal">Με επιφύλαξη κάθε νόμιμου δικαιώµατος</span></span><br style="color:#ffffff"></div>
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
            <img src="https://ci3.googleusercontent.com/proxy/gExBBFEHvute6-ChBXQGBXVFLUcyiVWIcnMxUZhOCbUKtmylzSPcO5QQRrvG4O9yOE4lL9yCsgpeEgpUvZhxT-RGvgCyvemAA7f0kkLAfeIKA2o02iKfAPZ36SoVOLPaTqQuvz9Icc4j6viKOqTl_9h0eA_wTA=s0-d-e1-ft#https://homi.acemlnc.com/lt.php?notrack=1&amp;nl=0&amp;c=58&amp;m=391&amp;s=66f8b3adaac660033ea1e3f2f6fe87ac&amp;l=open" style="display:block;width:1px!important;min-width:1px!important;max-width:1px!important;height:1px!important;border:0;overflow:hidden" class="CToWUd" width="1" height="1" border="0"><div id="m_-5165962939958266045ac-footer" style="clear:both;background-color:inherit;background:inherit;min-width:100%;padding:20px;color:#000000;font-size:11px;font-family:arial,helvetica,sans-serif;line-height:140%;line-height:1.4;text-align:center;box-sizing:border-box">
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

        <div id="m_-3982187956590746700ac-designer" class="m_-3982187956590746700body" style="font-family:Arial;line-height:1.1;margin:0px;background-color:#cce0ff;width:100%;text-align:center">		<div style="display:none;padding:0;height:1px;font-size:1px;background-color:inherit!important;color:inherit!important;line-height:1px">
                Το αίτημα ακυρώθηκε
            </div>
            <div style="margin:0px;outline:none;padding:0px;color:#000000;font-family:arial;line-height:1.1;width:100%;background-color:#cce0ff;background:#cce0ff;text-align:center"><table style="font-size:14px;min-width:auto;background-color:#cce0ff;background:#cce0ff" width="100%" cellspacing="0" cellpadding="0" border="0" align="left"><tbody><tr><td width="100%" valign="top" align="center"><table style="font-size:14px;min-width:auto;max-width:650px" width="650" cellspacing="0" cellpadding="0" border="0" bgcolor="#cce0ff"><tbody><tr><td id="m_-3982187956590746700layout_table_ceaca3de86356a50bfbf00092d7e0116f9442d49" style="background-color:#ffffff" width="650" valign="top" align="center"><table style="font-size:14px;min-width:100%;background-color:#ffffff" width="650" cellspacing="0" cellpadding="0" border="0"><tbody><tr style="background-color:#ffffff"><td id="m_-3982187956590746700layout-row-margin875" style="padding:0;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_-3982187956590746700layout-row875"><td id="m_-3982187956590746700layout-row-padding875" style="padding:0" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td valign="top" height="30"><div style="margin:0;outline:none;padding:0;height:30px"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td style="background-color:#cce0ff" width="650" valign="top" height="30">&nbsp;</td>
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
                                            <tr style="background-color:#ffffff"><td id="m_-3982187956590746700layout-row-margin861" style="padding:0px;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_-3982187956590746700layout-row861" style="background-color:#1259af" align="center"><td id="m_-3982187956590746700layout-row-padding861" style="background-color:#1259af;padding:7px" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td width="636" valign="top" align="center"><a href="https://homi.com.gr/el/" style="margin:0;outline:none;padding:0;color:#045fb4;display:block;min-width:100%" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://homi.acemlnc.com/lt.php?notrack%3D1%26s%3D66f8b3adaac660033ea1e3f2f6fe87ac%26i%3D59A392A0A445&amp;source=gmail&amp;ust=1591434054963000&amp;usg=AOvVaw1TakyY-GEW8rEL4PatNOJK"><img src="https://ci6.googleusercontent.com/proxy/_2_vWYcChm7Wv91Hw-mL92lCTB1hYUTaJzcYTNkvpq46REiM7EudHTf6S6LhFqqGii5hul2q-Op_hGfVZmuZl4JYA65B4PzAmnccj3Mty1aJjSf6SaWcLMoumf-I_vvwo8ZkQA=s0-d-e1-ft#https://homi.imgus11.com/public//3db214c35e4a1e4c80f1c80ce920183b.png?r=893439052" alt="" style="border:none;display:block;outline:none;width:128px;opacity:1;max-width:100%" class="CToWUd" width="128"></a></td>
                                                                    </tr>
                                                                    </tbody></table>
                                                            </td>
                                                        </tr>
                                                        </tbody></table>
                                                </td>
                                            </tr>
                                            <tr style="background-color:#ffffff"><td id="m_-3982187956590746700layout-row-margin869" style="padding:3px 0px 0px 0px;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_-3982187956590746700layout-row869" style="margin:0;padding:0;background-color:#e2e5eb"><td id="m_-3982187956590746700layout-row-padding869" style="background-color:#e2e5eb;padding:20px 0px 20px 0px" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td id="m_-3982187956590746700text_div800" style="margin:0;outline:none;padding:0;color:inherit;font-size:12px;font-weight:inherit;line-height:1;text-decoration:inherit;font-family:Arial" width="650" valign="top" align="left">
                                                                            <div style="margin:0;outline:none;padding:0;font-size:25px;color:#ffffff;font-family:arial,helvetica,sans"><div style="margin:0;outline:none;padding:0"></div>
                                                                                <div style="margin:0;outline:none;padding:0;color:#1259af;font-family:arial,helvetica,sans;font-weight:700;font-size:25px;text-align:center"><span style="color:#1259af;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit">Το αίτημα ακυρώθηκε</span></div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    </tbody></table>
                                                            </td>
                                                        </tr>
                                                        </tbody></table>
                                                </td>
                                            </tr>
                                            <tr style="background-color:#ffffff"><td id="m_-3982187956590746700layout-row-margin973" style="padding:2px 0px 0px 0px;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_-3982187956590746700layout-row973" style="margin:0;padding:0;background-color:#ffffff"><td id="m_-3982187956590746700layout-row-padding973" style="background-color:#ffffff;padding:19px 0px 0px 0px" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td id="m_-3982187956590746700text_div904" style="margin:0;outline:none;padding:0;color:inherit;font-size:12px;font-weight:inherit;line-height:1;text-decoration:inherit;font-family:Arial" width="650" valign="top" align="left"> <div style="margin:0;outline:none;padding:0;font-size:17px"> <div style="margin:0;outline:none;padding:0;text-align:center;color:#555555"><span style="color:#555555;font-size:inherit;font-weight:400;line-height:inherit;text-decoration:inherit;font-family:arial;font-style:italic">Η παρακάτω συνάντηση ακυρώθηκε</span><br style="color:#555555"></div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    </tbody></table>
                                                            </td>
                                                        </tr>
                                                        </tbody></table>
                                                </td>
                                            </tr>
                                            <tr style="background-color:#ffffff"><td id="m_-3982187956590746700layout-row-margin870" style="padding:3px 0px 0px 0px;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_-3982187956590746700layout-row870" style="margin:0;padding:0;background-color:#ffffff"><td id="m_-3982187956590746700layout-row-padding870" style="background-color:#ffffff;padding:25px 0px 3px 0px" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td id="m_-3982187956590746700text_div801" style="margin:0;outline:none;padding:0;color:inherit;font-size:12px;font-weight:inherit;line-height:1;text-decoration:inherit;font-family:Arial" width="650" valign="top" align="left"> <div style="margin:0;outline:none;padding:0;font-size:18px"> <div style="margin:0;outline:none;padding:0;font-family:arial;font-style:normal;color:#555555;text-align:center"><span style="color:#555555;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;font-family:arial"><span style="color:#000000;font-size:inherit;font-weight:bold;line-height:inherit;text-decoration:inherit">Στοιχεία Συνάντησης</span><br></span></div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    </tbody></table>
                                                            </td>
                                                        </tr>
                                                        </tbody></table>
                                                </td>
                                            </tr>
                                            <tr style="background-color:#ffffff"><td id="m_-3982187956590746700layout-row-margin873" style="padding:0;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_-3982187956590746700layout-row873" style="background-color:#ffffff"><td id="m_-3982187956590746700layout-row-padding873" style="line-height:0;background-color:#ffffff;padding:0" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:collapse;line-height:0" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td style="font-size:12px;height:12px;line-height:0" height="12"></td>
                                                                    </tr>
                                                                    <tr><td style="line-height:0" width="650" height="1" align="center"> <table style="font-size:14px;min-width:auto!important;border-collapse:collapse;line-height:0;width:40%;max-width:40%" width="260" height="1" cellspacing="0" cellpadding="0" border="0" align="center"><tbody><tr><td class="m_-3982187956590746700break-line" style="line-height:1px;height:1px;width:260px;background-color:#b5b5b5" width="260" height="1" bgcolor="#b5b5b5"> </td>
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
                                            <tr style="background-color:#ffffff"><td id="m_-3982187956590746700layout-row-margin872" style="padding:0px;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_-3982187956590746700layout-row872" style="margin:0;padding:0;background-color:#ffffff"><td id="m_-3982187956590746700layout-row-padding872" style="background-color:#ffffff;padding:10px 0px 20px 0px" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td id="m_-3982187956590746700text_div803" style="margin:0;outline:none;padding:0;color:inherit;font-size:12px;font-weight:inherit;line-height:1;text-decoration:inherit;font-family:Arial" width="650" valign="top" align="left"> <div style="margin:0;outline:none;padding:0;color:#045fb4"> <div style="margin:0;outline:none;padding:0;font-size:17px;color:#045fb4;font-family:arial"><div style="margin:0;outline:none;padding:0;font-family:arial;font-style:normal;color:#045fb4;font-size:17px;text-align:center"><span style="color:#045fb4;font-size:inherit;font-weight:bold;line-height:inherit;text-decoration:inherit;font-family:arial">Ημερομηνία:</span></div>
                                                                                    <span style="color:#045fb4;font-size:17px;font-weight:400;line-height:inherit;text-decoration:inherit;font-family:arial;font-style:normal"><div style="margin:0;outline:none;padding:0;font-family:arial;color:#555555;text-align:center;font-size:15px"><span style="color:#555555;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;font-family:arial;display: block;margin-top: 10px;"><?php echo $viewing->date; ?></span></div>
<div style="margin:0;outline:none;padding:0;font-family:arial;text-align:center;color:#045fb4"><br style="font-family:arial;font-weight:inherit;color:#045fb4;color:#045fb4"></div>
<div style="margin:0;outline:none;padding:0;font-family:arial;font-weight:inherit;color:#045fb4;text-align:center"><span style="color:#1259af;font-size:inherit;font-weight:bold;line-height:inherit;text-decoration:inherit;font-family:arial"><span style="color:#1259af;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit">Ώρα:</span><br style="color:#1259af"></span><span style="color:#045fb4;font-size:15px;font-weight:inherit;line-height:inherit;text-decoration:inherit;font-family:arial"><span style="color:#555555;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;display: block;margin-top: 10px;"><?php echo $viewing->time; ?></span><br><span style="color:#1259af;font-size:17px;font-weight:bold;line-height:inherit;text-decoration:inherit;font-family:arial;font-style:normal"><br style="color:#1259af"><span style="color:#1259af;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit">Διεύθυνση:</span><br style="color:#1259af"></span><span style="color:#555555;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;display: block;margin-top: 10px;"><?php echo $viewing->property_address; ?>, <?php echo $viewing->property_title; ?><br style="color:#555555"></span><br><span style="color:#1259af;font-size:17px;font-weight:bold;line-height:inherit;text-decoration:inherit;font-family:arial;font-style:normal"><br style="color:#1259af"><span style="color:#1259af;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit">Ιδιοκτήτης:</span><br style="color:#1259af"></span><span style="color:#555555;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;display: block;margin-top: 10px;"><?php echo $viewing->landlord->first_name; ?></span><br></span></div>
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
                                            <tr style="background-color:#ffffff"><td id="m_-3982187956590746700layout-row-margin871" style="padding:0;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_-3982187956590746700layout-row871"><td id="m_-3982187956590746700layout-row-padding871" style="padding:0" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td valign="top" height="10"><div style="margin:0;outline:none;padding:0;height:10px"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td style="background-color:#ffffff" width="650" valign="top" height="10">&nbsp;</td>
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
                                            <tr style="background-color:#ffffff"><td id="m_-3982187956590746700layout-row-margin862" style="padding:0;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_-3982187956590746700layout-row862" style="margin:0;padding:0;background-color:#ffffff"><td id="m_-3982187956590746700layout-row-padding862" style="background-color:#ffffff;padding:10px 10px 0px 10px" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td id="m_-3982187956590746700text_div793" style="line-height:150%;margin:0;outline:none;padding:0;color:inherit;font-size:12px;font-weight:inherit;line-height:1.5;text-decoration:inherit;font-family:Arial" width="630" valign="top" align="left"> <div style="line-height:150%;margin:0;outline:none;padding:0;line-height:1.5"> <div style="margin:0;outline:none;padding:0;text-align:center"> <p style="margin:0;outline:none;padding:0;color:inherit;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;text-align:left"></p>
                                                                                    <div style="margin:0;outline:none;padding:0;text-align:justify;font-size:15px"><span style="color:inherit;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;font-family:arial,helvetica,sans"> Αγαπητή/έ <span style="color:#000000;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit"><?php echo $viewing->viewer->first_name; ?>,</span></span></div>
                                                                                    <span style="color:inherit;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;text-align:center"><div style="margin:0;outline:none;padding:0;text-align:justify;font-size:15px"><br style="font-family:arial,helvetica,sans"></div>
<div style="margin:0;outline:none;padding:0;text-align:justify;font-size:15px"><span style="color:#000000;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;font-family:arial,helvetica,sans"> Το αίτημα επίδειξης ακινήτου με τις παραπάνω πληροφορίες ακυρώθηκε.</span></div>
<div style="margin:0;outline:none;padding:0;text-align:justify;font-size:15px">Λυπούμαστε για την αναστάτωση.<br><br></div>
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
                                            <tr style="background-color:#ffffff"><td id="m_-3982187956590746700layout-row-margin876" style="padding:0;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_-3982187956590746700layout-row876" style="margin:0;padding:0;background-color:#ffffff"><td id="m_-3982187956590746700layout-row-padding876" style="background-color:#ffffff;padding:10px 10px 0px 10px" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td id="m_-3982187956590746700text_div807" style="line-height:150%;margin:0;outline:none;padding:0;color:inherit;font-size:12px;font-weight:inherit;line-height:1.5;text-decoration:inherit;font-family:Arial" width="630" valign="top" align="left"> <div style="line-height:150%;margin:0;outline:none;padding:0;line-height:1.5"><div style="margin:0;outline:none;padding:0;font-family:arial;color:#000000;font-size:15px;text-align:justify"><span style="color:inherit;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;font-family:arial"><span style="color:inherit;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;font-family:arial"><span style="color:inherit;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit">Αν θα ήθελες να μιλήσεις με έναν ειδικό της </span><span style="color:#045fb4;font-size:inherit;font-weight:bold;line-height:inherit;text-decoration:inherit">ΗΟΜΙ</span><span style="color:inherit;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit">, παρακαλούμε επικοινώνησε μαζί μας μέσω:</span><br><br><span style="color:#000000;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit" lang="EN-AU"><span style="color:inherit;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:underline;font-style:normal">Τηλεφώνου</span>: +30 215 215 1962 <br><span style="color:inherit;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:underline"> Email</span>: </span><a href="mailto:christian@homi.com.gr" style="margin:0;outline:none;padding:0;color:#045fb4;text-decoration:underline;font-weight:inherit;font-style:normal" target="_blank"><span>christian@<span class="il">homi</span>.com.gr</span></a><span style="color:#000000;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;font-style:normal" lang="EN-AU"> </span><br><br><span style="color:inherit;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit">Με εκτίμηση,</span></span><br style="font-family:arial;font-weight:inherit;color:inherit"></span></div>
                                                                                <div style="margin:0;outline:none;padding:0;font-family:arial;color:#000000;font-size:15px;font-style:normal;font-weight:400;text-align:justify"><span style="color:inherit;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;font-family:arial">Η ομάδα της <span style="color:#1259af;font-size:inherit;font-weight:700;line-height:inherit;text-decoration:inherit;font-family:arial">ΗΟΜΙ<br><br></span></span></div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    </tbody></table>
                                                            </td>
                                                        </tr>
                                                        </tbody></table>
                                                </td>
                                            </tr>
                                            <tr style="background-color:#ffffff"><td id="m_-3982187956590746700layout-row-margin971" style="padding:0;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_-3982187956590746700layout-row971" style="background-color:#ffffff"><td id="m_-3982187956590746700layout-row-padding971" style="line-height:0;background-color:#ffffff;padding:0" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:collapse;line-height:0" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td style="font-size:12px;height:12px;line-height:0" height="12"></td>
                                                                    </tr>
                                                                    <tr><td style="line-height:0" width="650" height="1" align="center"> <table style="font-size:14px;min-width:auto!important;border-collapse:collapse;line-height:0;width:40%;max-width:40%" width="260" height="1" cellspacing="0" cellpadding="0" border="0" align="center"><tbody><tr><td class="m_-3982187956590746700break-line" style="line-height:1px;height:1px;width:260px;background-color:#b5b5b5" width="260" height="1" bgcolor="#b5b5b5"> </td>
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
                                            <tr style="background-color:#ffffff"><td id="m_-3982187956590746700layout-row-margin874" style="background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_-3982187956590746700layout-row874"><td id="m_-3982187956590746700layout-row-padding874" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td valign="top" height="25"><div style="margin:0;outline:none;padding:0;height:25px"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td width="650" valign="top" height="25">&nbsp;</td>
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
                                            <tr style="background-color:#ffffff"><td id="m_-3982187956590746700layout-row-margin865" style="padding:0;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_-3982187956590746700layout-row865" style="margin:0;padding:0;background-color:#ffffff"><td id="m_-3982187956590746700layout-row-padding865" style="background-color:#ffffff;padding:0px 26px 0px 26px" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td id="m_-3982187956590746700text_div796" style="line-height:150%;margin:0;outline:none;padding:0;color:inherit;font-size:12px;font-weight:inherit;line-height:1.5;text-decoration:inherit;font-family:Arial" width="598" valign="top" align="left"> <div style="line-height:150%;margin:0;outline:none;padding:0;line-height:1.5"> <div style="margin:0;outline:none;padding:0;text-align:center"> <p style="margin:0;outline:none;padding:0;color:inherit;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;text-align:left"></p>
                                                                                    <div style="margin:0;outline:none;padding:0;text-align:center;color:#1259af"><span style="color:#1259af;font-size:14px;font-weight:inherit;line-height:inherit;text-decoration:inherit;font-family:arial,helvetica,sans">Αν θέλεις να ενημερώνεσαι καθημερινά για τα νέα της ΗΟΜΙ και να μαθαίνεις πρώτος για τις πιο πρόσφατες αγγελίες μας, ακολούθησε μας στα Social Media</span></div>
                                                                                    <p style="margin:0;outline:none;padding:0;color:inherit;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit"></p>
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
                                            <tr style="background-color:#ffffff"><td id="m_-3982187956590746700layout-row-margin867" style="padding:0;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_-3982187956590746700layout-row867"><td id="m_-3982187956590746700layout-row-padding867" style="padding:0" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td valign="top" height="11"><div style="margin:0;outline:none;padding:0;height:11px"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td style="background-color:#ffffff" width="650" valign="top" height="11">&nbsp;</td>
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
                                            <tr style="background-color:#ffffff"><td id="m_-3982187956590746700layout-row-margin866" style="padding:0px;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_-3982187956590746700layout-row866" style="background-color:#ffffff"><td id="m_-3982187956590746700layout-row-padding866" style="background-color:#ffffff;padding:5px" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0"><tbody><tr><td width="650" align="left"> <center style="margin:0;outline:none;padding:0;font-size:0px"> <table class="m_-3982187956590746700_ac_social_table" style="font-size:0;min-width:auto!important;margin:auto!important;display:inline-block!important;text-align:center!important" cellspacing="0" cellpadding="0" align="center"><tbody><tr><td style="display:inline-block!important;font-size:0;width:40px!important" width="40" valign="middle" align="center"><div style="margin:0;outline:none;padding:0"><a href="https://www.facebook.com/homigreece/" id="m_-3982187956590746700facebook" style="margin:0;outline:none;padding:0;color:#045fb4" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://homi.acemlnc.com/lt.php?notrack%3D1%26s%3D66f8b3adaac660033ea1e3f2f6fe87ac%26i%3D59A392A0A447&amp;source=gmail&amp;ust=1591434054963000&amp;usg=AOvVaw0Cztg005WAk4nXcu2-Fiyd"><img src="https://ci3.googleusercontent.com/proxy/GdbTDD6APpjXXyay9gcHY2yPn1KAMBDZGlcxVn9qbHy2odEJbgon1MJuynWI-lvvdoMmGLVpnshbmIwnclsuHqoovO1eQFTyeEqC8BfiK-Bl1w=s0-d-e1-ft#https://homi.img-us6.com/_social_/flat-color-round-facebook.png" style="border:none" class="CToWUd" width="40" border="0"></a></div>
                                                                                                    </td>
                                                                                                    <td style="display:inline-block!important;font-size:0;width:15px!important" width="15">&nbsp;</td>
                                                                                                    <td style="display:inline-block!important;font-size:0;width:40px!important" width="40" valign="middle" align="center"><div style="margin:0;outline:none;padding:0"><a href="https://www.instagram.com/homigreece/" id="m_-3982187956590746700instagram" style="margin:0;outline:none;padding:0;color:#045fb4" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://homi.acemlnc.com/lt.php?notrack%3D1%26s%3D66f8b3adaac660033ea1e3f2f6fe87ac%26i%3D59A392A0A448&amp;source=gmail&amp;ust=1591434054963000&amp;usg=AOvVaw3CWX3xt5FSimD3QGvkMTmU"><img src="https://ci6.googleusercontent.com/proxy/KVh7BS2Jf9ltfS_IurBkgfRURnu_gLxG-tr6DEbYAVg9HD-X6XGGAnUhSgSbHtmkU5_SpxRjX0O8uMRBlZXznplZBDXgSaoHo1jasIO7vl0vfhI=s0-d-e1-ft#https://homi.img-us6.com/_social_/flat-color-round-instagram.png" style="border:none" class="CToWUd" width="40" border="0"></a></div>
                                                                                                    </td>
                                                                                                    <td style="display:inline-block!important;font-size:0;width:15px!important" width="15">&nbsp;</td>
                                                                                                    <td style="display:inline-block!important;font-size:0;width:40px!important" width="40" valign="middle" align="center"><div style="margin:0;outline:none;padding:0"><a href="https://homi.com.gr/el/" id="m_-3982187956590746700website" style="margin:0;outline:none;padding:0;color:#045fb4" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://homi.acemlnc.com/lt.php?notrack%3D1%26s%3D66f8b3adaac660033ea1e3f2f6fe87ac%26i%3D59A392A0A445&amp;source=gmail&amp;ust=1591434054964000&amp;usg=AOvVaw1lcDv0FDCiE8epO-z4USWH"><img src="https://ci6.googleusercontent.com/proxy/6jmzrplCInuN_vMRqv0hSnU7D8YdNdGpqh6xDNTF6rtjrIFVttRMyud6MESJd09xwONO1CDs5Z2KH9czHcP9aYTeXJ6JfYRgjJdJ4WJAJZlD=s0-d-e1-ft#https://homi.img-us6.com/_social_/flat-color-round-website.png" style="border:none" class="CToWUd" width="40" border="0"></a></div>
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
                                            <tr style="background-color:#ffffff"><td id="m_-3982187956590746700layout-row-margin868" style="padding:0;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_-3982187956590746700layout-row868"><td id="m_-3982187956590746700layout-row-padding868" style="padding:0" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td valign="top" height="24"><div style="margin:0;outline:none;padding:0;height:24px"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td style="background-color:#ffffff" width="650" valign="top" height="24">&nbsp;</td>
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
                                            <tr style="background-color:#ffffff"><td id="m_-3982187956590746700layout-row-margin863" style="padding:0;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_-3982187956590746700layout-row863" style="margin:0;padding:0;background-color:#1259af"><td id="m_-3982187956590746700layout-row-border863" style="border-color:#ffffff;border-style:solid;border-width:1px" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td id="m_-3982187956590746700layout-row-padding863" style="background-color:#1259af;padding:20px 26px 20px 26px" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td id="m_-3982187956590746700text_div794" style="margin:0;outline:none;padding:0;color:inherit;font-size:12px;font-weight:inherit;line-height:1;text-decoration:inherit;font-family:Arial" width="596" valign="top" align="left"> <div style="margin:0;outline:none;padding:0;color:#ffffff"> <div style="margin:0;outline:none;padding:0;color:#ffffff"> <p style="margin:0;outline:none;padding:0;color:#ffffff;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;text-align:center"><span style="color:#ffffff;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit"><span style="color:#ffffff;font-size:12px;font-weight:400;line-height:inherit;text-decoration:inherit;font-family:arial;font-style:normal">Το παρόν email αποτελεί ανακοίνωση νομικού περιεχομένου. Δεν
αποτελεί προϊόν μάρκετινγκ ή προοωθητική ενέργεια. Για το λόγο αυτό λάβατε το προκείμενο email, παρόλο που ενδέχεται να είχατε απεγγραφεί </span><span style="color:#ffffff;font-size:12px;font-weight:400;line-height:inherit;text-decoration:inherit;font-family:arial;font-style:normal">από τις προωθητικές μας ενημερώσεις.</span></span></p>
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
                                            <tr style="background-color:#ffffff"><td id="m_-3982187956590746700layout-row-margin864" style="padding:0;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_-3982187956590746700layout-row864" style="margin:0;padding:0;background-color:#1259af"><td id="m_-3982187956590746700layout-row-border864" style="border-color:#ffffff;border-style:solid;border-width:1px" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td id="m_-3982187956590746700layout-row-padding864" style="background-color:#1259af;padding:20px 26px 20px 20px" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td id="m_-3982187956590746700text_div795" style="margin:0;outline:none;padding:0;color:inherit;font-size:12px;font-weight:inherit;line-height:1;text-decoration:inherit;font-family:Arial" width="602" valign="top" align="left"> <div style="margin:0;outline:none;padding:0;color:#ffffff"> <div style="margin:0;outline:none;padding:0;color:#ffffff"> <div style="margin:0;outline:none;padding:0;text-align:center;color:#ffffff"><span style="color:#ffffff;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit"><span style="color:#ffffff;font-size:12px;font-weight:normal;line-height:inherit;text-decoration:inherit;font-family:arial;font-style:normal">Copyright © 2020 </span><a href="https://homi.com.gr/el/" style="margin:0;outline:none;padding:0;color:#ffffff;text-decoration:underline" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://homi.acemlnc.com/lt.php?notrack%3D1%26s%3D66f8b3adaac660033ea1e3f2f6fe87ac%26i%3D59A392A0A445&amp;source=gmail&amp;ust=1591434054964000&amp;usg=AOvVaw1lcDv0FDCiE8epO-z4USWH"><span style="color:#ffffff;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit"><span class="il">homi</span>.com.gr</span></a> <br><span style="color:#ffffff;font-size:12px;font-weight:normal;line-height:inherit;text-decoration:inherit;font-family:arial;font-style:normal">Με επιφύλαξη κάθε νόμιμου δικαιώµατος</span></span><br style="color:#ffffff"></div>
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
                    </tbody></table><div class="yj6qo ajU"><div id=":18j" class="ajR" role="button" tabindex="0" data-tooltip="Εμφάνιση περιεχομένου που έχει περικοπεί" aria-label="Εμφάνιση περιεχομένου που έχει περικοπεί" aria-expanded="false"><img class="ajT" src="//ssl.gstatic.com/ui/v1/icons/mail/images/cleardot.gif"></div></div><div class="adL">
                </div></div><div class="adL"><div class="adm"><div id="q_167" class="ajR h4"><div class="ajT"></div></div></div><div class="h5">
                    <img src="https://ci5.googleusercontent.com/proxy/yOW7B3e0BWRmoeOmASmCOaBxXYdBkua8v_FJl4MuWYaNr_eHfZ0esFwPth-MxOucybWLy35j1SqBMG8IH2Fjpd2pq9LBOOGO2ti4h3h6ljroVHgBT3EE_EhYNaNDmdR-dn4D4_c_HxwxqVl52X-GofpNcQhbQA=s0-d-e1-ft#https://homi.acemlnc.com/lt.php?notrack=1&amp;nl=0&amp;c=59&amp;m=392&amp;s=66f8b3adaac660033ea1e3f2f6fe87ac&amp;l=open" style="display:block;width:1px!important;min-width:1px!important;max-width:1px!important;height:1px!important;border:0;overflow:hidden" class="CToWUd" width="1" height="1" border="0"><div id="m_-3982187956590746700ac-footer" style="clear:both;background-color:inherit;background:inherit;min-width:100%;padding:20px;color:#000000;font-size:11px;font-family:arial,helvetica,sans-serif;line-height:140%;line-height:1.4;text-align:center;box-sizing:border-box">
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
