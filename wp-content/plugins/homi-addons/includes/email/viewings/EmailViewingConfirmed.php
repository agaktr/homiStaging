<?php


class EmailViewingConfirmed {


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

        <div id="m_-5447436418397076161ac-designer" class="m_-5447436418397076161body" style="font-family:Arial;line-height:1.1;margin:0px;background-color:#cce0ff;width:100%;text-align:center">		<div style="display:none;padding:0;height:1px;font-size:1px;background-color:inherit!important;color:inherit!important;line-height:1px">
                Το αίτημα επίσκεψης έγινε δεκτό
            </div>
            <div style="margin:0px;outline:none;padding:0px;color:#000000;font-family:arial;line-height:1.1;width:100%;background-color:#cce0ff;background:#cce0ff;text-align:center"><table style="font-size:14px;min-width:auto;background-color:#cce0ff;background:#cce0ff" width="100%" cellspacing="0" cellpadding="0" border="0" align="left"><tbody><tr><td width="100%" valign="top" align="center"><table style="font-size:14px;min-width:auto;max-width:650px" width="650" cellspacing="0" cellpadding="0" border="0" bgcolor="#cce0ff"><tbody><tr><td id="m_-5447436418397076161layout_table_5aac4e751bdc20b8196f17f89c219f46da50252e" style="background-color:#ffffff" width="650" valign="top" align="center"><table style="font-size:14px;min-width:100%;background-color:#ffffff" width="650" cellspacing="0" cellpadding="0" border="0"><tbody><tr style="background-color:#ffffff"><td id="m_-5447436418397076161layout-row-margin817" style="padding:0;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_-5447436418397076161layout-row817"><td id="m_-5447436418397076161layout-row-padding817" style="padding:0" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td valign="top" height="30"><div style="margin:0;outline:none;padding:0;height:30px"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td style="background-color:#cce0ff" width="650" valign="top" height="30">&nbsp;</td>
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
                                            <tr style="background-color:#ffffff"><td id="m_-5447436418397076161layout-row-margin803" style="padding:0px;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_-5447436418397076161layout-row803" style="background-color:#045fb4" align="center"><td id="m_-5447436418397076161layout-row-padding803" style="background-color:#045fb4;padding:7px" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td width="636" valign="top" align="center"><a href="https://homi.com.gr/el/" style="margin:0;outline:none;padding:0;color:#045fb4;display:block;min-width:100%" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://homi.acemlnc.com/lt.php?notrack%3D1%26s%3D66f8b3adaac660033ea1e3f2f6fe87ac%26i%3D56A389A0A428&amp;source=gmail&amp;ust=1591434021575000&amp;usg=AOvVaw1vi7hqalSwzeKn4FjxViAc"><img src="https://ci3.googleusercontent.com/proxy/adXcZ_AfvLNDVl2oDIGBKoYzOT9-CwD9Q7E8IJxIkhst9Dno2xpM_7ns7ANvrsLQWScn-5BV-XvYQ1Ri_XR6G6E5-UDbY3tCAn64s12pGN28fWoFWsx3nwEfnZoNZQTgQZb-QcQ=s0-d-e1-ft#https://homi.imgus11.com/public//3db214c35e4a1e4c80f1c80ce920183b.png?r=1502977183" alt="" style="border:none;display:block;outline:none;width:128px;opacity:1;max-width:100%" class="CToWUd" width="128"></a></td>
                                                                    </tr>
                                                                    </tbody></table>
                                                            </td>
                                                        </tr>
                                                        </tbody></table>
                                                </td>
                                            </tr>
                                            <tr style="background-color:#ffffff"><td id="m_-5447436418397076161layout-row-margin811" style="padding:2px 0px 0px 0px;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_-5447436418397076161layout-row811" style="margin:0;padding:0;background-color:#e2e5eb"><td id="m_-5447436418397076161layout-row-padding811" style="background-color:#e2e5eb;padding:20px 0px 20px 0px" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td id="m_-5447436418397076161text_div742" style="margin:0;outline:none;padding:0;color:inherit;font-size:12px;font-weight:inherit;line-height:1;text-decoration:inherit;font-family:Arial" width="650" valign="top" align="left">
                                                                            <div style="margin:0;outline:none;padding:0;font-size:25px;color:#ffffff;font-family:arial,helvetica,sans"><div style="margin:0;outline:none;padding:0"></div>
                                                                                <div style="margin:0;outline:none;padding:0;color:#1259af;font-family:arial,helvetica,sans;font-weight:700;font-size:25px;text-align:center"><span style="color:#1259af;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit">Το αίτημα επίσκεψης έγινε δεκτό</span></div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    </tbody></table>
                                                            </td>
                                                        </tr>
                                                        </tbody></table>
                                                </td>
                                            </tr>
                                            <tr style="background-color:#ffffff"><td id="m_-5447436418397076161layout-row-margin969" style="padding:2px 0px 0px 0px;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_-5447436418397076161layout-row969" style="margin:0;padding:0;background-color:#ffffff"><td id="m_-5447436418397076161layout-row-padding969" style="background-color:#ffffff;padding:19px 0px 0px 0px" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td id="m_-5447436418397076161text_div900" style="margin:0;outline:none;padding:0;color:inherit;font-size:12px;font-weight:inherit;line-height:1;text-decoration:inherit;font-family:Arial" width="650" valign="top" align="left"> <div style="margin:0;outline:none;padding:0;font-size:18px"> <div style="margin:0;outline:none;padding:0;text-align:center"><span style="color:#168749;font-size:inherit;font-weight:400;line-height:inherit;text-decoration:inherit;font-family:arial;font-style:italic">Η συνάντηση επιβεβαιώθηκε</span><br></div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    </tbody></table>
                                                            </td>
                                                        </tr>
                                                        </tbody></table>
                                                </td>
                                            </tr>
                                            <tr style="background-color:#ffffff"><td id="m_-5447436418397076161layout-row-margin812" style="padding:3px 0px 0px 0px;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_-5447436418397076161layout-row812" style="margin:0;padding:0;background-color:#ffffff"><td id="m_-5447436418397076161layout-row-padding812" style="background-color:#ffffff;padding:25px 0px 3px 0px" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td id="m_-5447436418397076161text_div743" style="margin:0;outline:none;padding:0;color:inherit;font-size:12px;font-weight:inherit;line-height:1;text-decoration:inherit;font-family:Arial" width="650" valign="top" align="left"> <div style="margin:0;outline:none;padding:0;font-size:18px"> <div style="margin:0;outline:none;padding:0;font-family:arial;font-style:normal;color:#555555;text-align:center"><span style="color:#555555;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;font-family:arial"><span style="color:#000000;font-size:inherit;font-weight:bold;line-height:inherit;text-decoration:inherit">Στοιχεία Συνάντησης</span><br></span></div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    </tbody></table>
                                                            </td>
                                                        </tr>
                                                        </tbody></table>
                                                </td>
                                            </tr>
                                            <tr style="background-color:#ffffff"><td id="m_-5447436418397076161layout-row-margin815" style="padding:0;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_-5447436418397076161layout-row815" style="background-color:#ffffff"><td id="m_-5447436418397076161layout-row-padding815" style="line-height:0;background-color:#ffffff;padding:0" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:collapse;line-height:0" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td style="font-size:12px;height:12px;line-height:0" height="12"></td>
                                                                    </tr>
                                                                    <tr><td style="line-height:0" width="650" height="1" align="center"> <table style="font-size:14px;min-width:auto!important;border-collapse:collapse;line-height:0;width:40%;max-width:40%" width="260" height="1" cellspacing="0" cellpadding="0" border="0" align="center"><tbody><tr><td class="m_-5447436418397076161break-line" style="line-height:1px;height:1px;width:260px;background-color:#b5b5b5" width="260" height="1" bgcolor="#b5b5b5"> </td>
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
                                            <tr style="background-color:#ffffff"><td id="m_-5447436418397076161layout-row-margin814" style="padding:0px;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_-5447436418397076161layout-row814" style="margin:0;padding:0;background-color:#ffffff"><td id="m_-5447436418397076161layout-row-padding814" style="background-color:#ffffff;padding:10px 0px 20px 0px" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td id="m_-5447436418397076161text_div745" style="margin:0;outline:none;padding:0;color:inherit;font-size:12px;font-weight:inherit;line-height:1;text-decoration:inherit;font-family:Arial" width="650" valign="top" align="left"> <div style="margin:0;outline:none;padding:0;color:#045fb4"> <div style="margin:0;outline:none;padding:0;font-size:17px;color:#045fb4;font-family:arial"><div style="margin:0;outline:none;padding:0;font-family:arial;font-style:normal;color:#1259af;font-size:17px;text-align:center"><span style="color:#1259af;font-size:inherit;font-weight:bold;line-height:inherit;text-decoration:inherit;font-family:arial">Ημερομηνία:</span></div>
                                                                                    <span style="color:#045fb4;font-size:17px;font-weight:400;line-height:inherit;text-decoration:inherit;font-family:arial;font-style:normal"><div style="margin:0;outline:none;padding:0;font-family:arial;color:#555555;text-align:center;font-size:15px"><span style="color:#555555;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;font-family:arial;display: block;margin-top: 10px;"><?php echo $viewing->date; ?></span></div>
<div style="margin:0;outline:none;padding:0;font-family:arial;text-align:center;color:#045fb4"><br style="font-family:arial;font-weight:inherit;color:#045fb4;color:#045fb4"></div>
<div style="margin:0;outline:none;padding:0;font-family:arial;font-weight:inherit;color:#045fb4;text-align:center"><span style="color:#1259af;font-size:inherit;font-weight:bold;line-height:inherit;text-decoration:inherit;font-family:arial"><span style="color:#1259af;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit">Ώρα:</span><br style="color:#1259af"></span><span style="color:#045fb4;font-size:15px;font-weight:inherit;line-height:inherit;text-decoration:inherit;font-family:arial"><span style="color:#555555;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;display: block;margin-top: 10px;"><?php echo $viewing->time; ?></span><span style="color:#1259af;font-size:17px;font-weight:bold;line-height:inherit;text-decoration:inherit;font-family:arial;font-style:normal"><br style="color:#1259af"><span style="color:#1259af;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit">Διεύθυνση:</span><br style="color:#1259af"></span><span style="color:#555555;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;display: block;margin-top: 10px;"><?php echo $viewing->property_address; ?>, <?php echo $viewing->property_title; ?><br style="color:#555555"></span><br></span></div>
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
                                            <tr style="background-color:#ffffff"><td id="m_-5447436418397076161layout-row-margin820" style="padding:0px;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_-5447436418397076161layout-row820" style="margin:0;padding:0;background-color:#ffffff"><td id="m_-5447436418397076161layout-row-padding820" style="background-color:#ffffff;padding:10px 0px 3px 0px" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td id="m_-5447436418397076161text_div751" style="margin:0;outline:none;padding:0;color:inherit;font-size:12px;font-weight:inherit;line-height:1;text-decoration:inherit;font-family:Arial" width="650" valign="top" align="left"> <div style="margin:0;outline:none;padding:0;font-size:18px"> <div style="margin:0;outline:none;padding:0;font-family:arial;font-style:normal;color:#555555;text-align:center"><span style="color:#555555;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;font-family:arial"><span style="color:#000000;font-size:inherit;font-weight:bold;line-height:inherit;text-decoration:inherit">Στοιχεία Επισκέπτη</span><br></span></div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    </tbody></table>
                                                            </td>
                                                        </tr>
                                                        </tbody></table>
                                                </td>
                                            </tr>
                                            <tr style="background-color:#ffffff"><td id="m_-5447436418397076161layout-row-margin821" style="padding:0;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_-5447436418397076161layout-row821" style="background-color:#ffffff"><td id="m_-5447436418397076161layout-row-padding821" style="line-height:0;background-color:#ffffff;padding:0" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:collapse;line-height:0" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td style="font-size:12px;height:12px;line-height:0" height="12"></td>
                                                                    </tr>
                                                                    <tr><td style="line-height:0" width="650" height="1" align="center"> <table style="font-size:14px;min-width:auto!important;border-collapse:collapse;line-height:0;width:40%;max-width:40%" width="260" height="1" cellspacing="0" cellpadding="0" border="0" align="center"><tbody><tr><td class="m_-5447436418397076161break-line" style="line-height:1px;height:1px;width:260px;background-color:#b5b5b5" width="260" height="1" bgcolor="#b5b5b5"> </td>
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
                                            <tr style="background-color:#ffffff"><td id="m_-5447436418397076161layout-row-margin822" style="padding:0px;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_-5447436418397076161layout-row822" style="margin:0;padding:0;background-color:#ffffff"><td id="m_-5447436418397076161layout-row-padding822" style="background-color:#ffffff;padding:10px 0px 20px 0px" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td id="m_-5447436418397076161text_div753" style="margin:0;outline:none;padding:0;color:inherit;font-size:12px;font-weight:inherit;line-height:1;text-decoration:inherit;font-family:Arial" width="650" valign="top" align="left"> <div style="margin:0;outline:none;padding:0"><div style="margin:0;outline:none;padding:0;color:#045fb4;font-family:arial;font-size:17px;font-style:normal;text-align:center"></div>
                                                                                <div style="margin:0;outline:none;padding:0;text-align:center;color:#1259af"><span style="color:#1259af;font-size:17px;font-weight:bold;line-height:inherit;text-decoration:inherit;font-family:arial;text-align:inherit">Επισκέπτης:</span><br style="color:#1259af"></div>
                                                                                <div style="margin:0;outline:none;padding:0;color:#555555;font-family:arial;font-size:16px;font-weight:400;font-style:normal;text-align:center"><span style="color:#555555;font-size:inherit;font-weight:400;line-height:inherit;text-decoration:inherit;font-family:arial;text-align:inherit;margin-top: 10px;display: block;"><span style="color:inherit;font-size:15px;font-weight:inherit;line-height:inherit;text-decoration:inherit"><?php echo $viewing->viewer->first_name; ?><br>
<?php echo $viewing->viewer->last_name; ?></span><br><br><span style="color:#000000;font-size:12px;font-weight:400;line-height:inherit;text-decoration:inherit;font-family:arial;font-style:normal;text-align:center;margin:0"><span style="color:inherit;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;font-family:arial"><span style="color:#1259af;font-size:17px;font-weight:bold;line-height:inherit;text-decoration:inherit;font-family:arial">Τηλέφωνο:</span><br style="font-family:arial;font-weight:bold;color:#045fb4;font-size:17px"></span><span style="color:#555555;font-size:15px;font-weight:inherit;line-height:inherit;text-decoration:inherit;display: block;margin-top: 10px;"><?php echo $viewing->viewer->phone; ?><br><br style="font-family:arial;font-weight:400;color:#555555;font-size:16px;font-style:normal"><span style="color:inherit;font-size:12px;font-weight:inherit;line-height:inherit;text-decoration:inherit;font-family:arial;font-style:normal"><span style="color:#1259af;font-size:17px;font-weight:bold;line-height:inherit;text-decoration:inherit;font-family:arial">Email:</span><br style="font-family:arial;font-weight:bold;color:#045fb4;font-size:17px"></span></span></span><span style="color:inherit;font-size:16px;font-weight:inherit;line-height:inherit;text-decoration:inherit;font-family:arial;font-style:normal;text-align:center;margin:0"><br><?php echo $viewing->viewer->email; ?></span></span></div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    </tbody></table>
                                                            </td>
                                                        </tr>
                                                        </tbody></table>
                                                </td>
                                            </tr>
                                            <tr style="background-color:#ffffff"><td id="m_-5447436418397076161layout-row-margin804" style="padding:0;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_-5447436418397076161layout-row804" style="margin:0;padding:0;background-color:#ffffff"><td id="m_-5447436418397076161layout-row-padding804" style="background-color:#ffffff;padding:10px 10px 0px 10px" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td id="m_-5447436418397076161text_div735" style="line-height:150%;margin:0;outline:none;padding:0;color:inherit;font-size:12px;font-weight:inherit;line-height:1.5;text-decoration:inherit;font-family:Arial" width="630" valign="top" align="left"> <div style="line-height:150%;margin:0;outline:none;padding:0;line-height:1.5"> <div style="margin:0;outline:none;padding:0;text-align:center"> <p style="margin:0;outline:none;padding:0;color:inherit;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;text-align:left"></p>
                                                                                    <div style="margin:0;outline:none;padding:0;text-align:justify;font-size:15px"><span style="color:inherit;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;font-family:arial,helvetica,sans"> Αγαπητή/έ <span style="color:#000000;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit"><?php echo $viewing->landlord->first_name; ?>,</span></span></div>
                                                                                    <span style="color:inherit;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;text-align:center"><div style="margin:0;outline:none;padding:0;text-align:justify;font-size:15px"><br style="font-family:arial,helvetica,sans"></div>
<div style="margin:0;outline:none;padding:0;text-align:justify;font-size:15px"><span style="color:inherit;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;font-family:arial,helvetica,sans">Η παραπάνω συνάντηση έχει επιβεβαιωθεί.<br></span></div>
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
                                            <tr style="background-color:#ffffff"><td id="m_-5447436418397076161layout-row-margin818" style="padding:0;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_-5447436418397076161layout-row818" style="margin:0;padding:0;background-color:#ffffff"><td id="m_-5447436418397076161layout-row-padding818" style="background-color:#ffffff;padding:10px 10px 0px 10px" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td id="m_-5447436418397076161text_div749" style="line-height:150%;margin:0;outline:none;padding:0;color:inherit;font-size:12px;font-weight:inherit;line-height:1.5;text-decoration:inherit;font-family:Arial" width="630" valign="top" align="left"> <div style="line-height:150%;margin:0;outline:none;padding:0;line-height:1.5"><div style="margin:0;outline:none;padding:0;font-family:arial;color:#000000;font-size:15px;text-align:justify"><span style="color:inherit;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;font-family:arial"><span style="color:inherit;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;font-family:arial"><br>Με εκτίμηση,</span><br style="font-family:arial;font-weight:inherit;color:inherit"></span></div>
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
                                            <tr style="background-color:#ffffff"><td id="m_-5447436418397076161layout-row-margin816" style="background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_-5447436418397076161layout-row816"><td id="m_-5447436418397076161layout-row-padding816" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td valign="top" height="30"><div style="margin:0;outline:none;padding:0;height:30px"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td width="650" valign="top" height="30">&nbsp;</td>
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
                                            <tr style="background-color:#ffffff"><td id="m_-5447436418397076161layout-row-margin970" style="padding:0;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_-5447436418397076161layout-row970" style="background-color:#ffffff"><td id="m_-5447436418397076161layout-row-padding970" style="line-height:0;background-color:#ffffff;padding:0" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:collapse;line-height:0" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td style="font-size:12px;height:12px;line-height:0" height="12"></td>
                                                                    </tr>
                                                                    <tr><td style="line-height:0" width="650" height="1" align="center"> <table style="font-size:14px;min-width:auto!important;border-collapse:collapse;line-height:0;width:40%;max-width:40%" width="260" height="1" cellspacing="0" cellpadding="0" border="0" align="center"><tbody><tr><td class="m_-5447436418397076161break-line" style="line-height:1px;height:1px;width:260px;background-color:#b5b5b5" width="260" height="1" bgcolor="#b5b5b5"> </td>
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
                                            <tr style="background-color:#ffffff"><td id="m_-5447436418397076161layout-row-margin843" style="padding:0;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_-5447436418397076161layout-row843" style="margin:0;padding:0;background-color:#ffffff"><td id="m_-5447436418397076161layout-row-padding843" style="background-color:#ffffff;padding:10px 10px 0px 10px" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td id="m_-5447436418397076161text_div774" style="line-height:150%;margin:0;outline:none;padding:0;color:inherit;font-size:12px;font-weight:inherit;line-height:1.5;text-decoration:inherit;font-family:Arial" width="630" valign="top" align="left"> <div style="line-height:150%;margin:0;outline:none;padding:0;font-size:12px;color:#555555;line-height:1.5"> <div style="margin:0;outline:none;padding:0;color:#555555"><div style="margin:0;outline:none;padding:0;text-align:center;font-family:arial;color:#555555"><div style="margin:0;outline:none;padding:0;text-align:center"><span style="color:#555555;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit">Σε περίπτωση που δεν μπορείς να παρευρεθείς στη συνάντηση, παρακαλούμε να μας ενημερώσεις άμεσα.</span></div>
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
                                            <tr style="background-color:#ffffff"><td id="m_-5447436418397076161layout-row-margin809" style="padding:0;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_-5447436418397076161layout-row809"><td id="m_-5447436418397076161layout-row-padding809" style="padding:0" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td valign="top" height="11"><div style="margin:0;outline:none;padding:0;height:11px"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td style="background-color:#ffffff" width="650" valign="top" height="11">&nbsp;</td>
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
                                            <tr style="background-color:#ffffff"><td id="m_-5447436418397076161layout-row-margin808" style="padding:0px;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_-5447436418397076161layout-row808" style="background-color:#ffffff"><td id="m_-5447436418397076161layout-row-padding808" style="background-color:#ffffff;padding:5px" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0"><tbody><tr><td width="650" align="left"> <center style="margin:0;outline:none;padding:0;font-size:0px"> <table class="m_-5447436418397076161_ac_social_table" style="font-size:0;min-width:auto!important;margin:auto!important;display:inline-block!important;text-align:center!important" cellspacing="0" cellpadding="0" align="center"><tbody><tr><td style="display:inline-block!important;font-size:0;width:40px!important" width="40" valign="middle" align="center"><div style="margin:0;outline:none;padding:0"><a href="https://www.facebook.com/homigreece/" id="m_-5447436418397076161facebook" style="margin:0;outline:none;padding:0;color:#045fb4" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://homi.acemlnc.com/lt.php?notrack%3D1%26s%3D66f8b3adaac660033ea1e3f2f6fe87ac%26i%3D56A389A0A430&amp;source=gmail&amp;ust=1591434021576000&amp;usg=AOvVaw1n4osrv4NdO5iCYdEfBTtQ"><img src="https://ci3.googleusercontent.com/proxy/GdbTDD6APpjXXyay9gcHY2yPn1KAMBDZGlcxVn9qbHy2odEJbgon1MJuynWI-lvvdoMmGLVpnshbmIwnclsuHqoovO1eQFTyeEqC8BfiK-Bl1w=s0-d-e1-ft#https://homi.img-us6.com/_social_/flat-color-round-facebook.png" style="border:none" class="CToWUd" width="40" border="0"></a></div>
                                                                                                    </td>
                                                                                                    <td style="display:inline-block!important;font-size:0;width:15px!important" width="15">&nbsp;</td>
                                                                                                    <td style="display:inline-block!important;font-size:0;width:40px!important" width="40" valign="middle" align="center"><div style="margin:0;outline:none;padding:0"><a href="https://www.instagram.com/homigreece/" id="m_-5447436418397076161instagram" style="margin:0;outline:none;padding:0;color:#045fb4" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://homi.acemlnc.com/lt.php?notrack%3D1%26s%3D66f8b3adaac660033ea1e3f2f6fe87ac%26i%3D56A389A0A431&amp;source=gmail&amp;ust=1591434021576000&amp;usg=AOvVaw2J5ZAx58Njd3VwsAhA-xvq"><img src="https://ci6.googleusercontent.com/proxy/KVh7BS2Jf9ltfS_IurBkgfRURnu_gLxG-tr6DEbYAVg9HD-X6XGGAnUhSgSbHtmkU5_SpxRjX0O8uMRBlZXznplZBDXgSaoHo1jasIO7vl0vfhI=s0-d-e1-ft#https://homi.img-us6.com/_social_/flat-color-round-instagram.png" style="border:none" class="CToWUd" width="40" border="0"></a></div>
                                                                                                    </td>
                                                                                                    <td style="display:inline-block!important;font-size:0;width:15px!important" width="15">&nbsp;</td>
                                                                                                    <td style="display:inline-block!important;font-size:0;width:40px!important" width="40" valign="middle" align="center"><div style="margin:0;outline:none;padding:0"><a href="https://homi.com.gr/el/" id="m_-5447436418397076161website" style="margin:0;outline:none;padding:0;color:#045fb4" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://homi.acemlnc.com/lt.php?notrack%3D1%26s%3D66f8b3adaac660033ea1e3f2f6fe87ac%26i%3D56A389A0A428&amp;source=gmail&amp;ust=1591434021576000&amp;usg=AOvVaw10FxtYOzUzxu2zHT9pXUN4"><img src="https://ci6.googleusercontent.com/proxy/6jmzrplCInuN_vMRqv0hSnU7D8YdNdGpqh6xDNTF6rtjrIFVttRMyud6MESJd09xwONO1CDs5Z2KH9czHcP9aYTeXJ6JfYRgjJdJ4WJAJZlD=s0-d-e1-ft#https://homi.img-us6.com/_social_/flat-color-round-website.png" style="border:none" class="CToWUd" width="40" border="0"></a></div>
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
                                            <tr style="background-color:#ffffff"><td id="m_-5447436418397076161layout-row-margin810" style="padding:0;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_-5447436418397076161layout-row810"><td id="m_-5447436418397076161layout-row-padding810" style="padding:0" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td valign="top" height="24"><div style="margin:0;outline:none;padding:0;height:24px"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td style="background-color:#ffffff" width="650" valign="top" height="24">&nbsp;</td>
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
                                            <tr style="background-color:#ffffff"><td id="m_-5447436418397076161layout-row-margin805" style="padding:0;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_-5447436418397076161layout-row805" style="margin:0;padding:0;background-color:#1259af"><td id="m_-5447436418397076161layout-row-border805" style="border-color:#ffffff;border-style:solid;border-width:1px" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td id="m_-5447436418397076161layout-row-padding805" style="background-color:#1259af;padding:20px 26px 20px 26px" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td id="m_-5447436418397076161text_div736" style="margin:0;outline:none;padding:0;color:inherit;font-size:12px;font-weight:inherit;line-height:1;text-decoration:inherit;font-family:Arial" width="596" valign="top" align="left"> <div style="margin:0;outline:none;padding:0;color:#ffffff"> <div style="margin:0;outline:none;padding:0;color:#ffffff"> <p style="margin:0;outline:none;padding:0;color:#ffffff;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;text-align:center"><span style="color:#ffffff;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit"><span style="color:#ffffff;font-size:12px;font-weight:400;line-height:inherit;text-decoration:inherit;font-family:arial;font-style:normal">Το παρόν email αποτελεί ανακοίνωση νομικού
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
                                            <tr style="background-color:#ffffff"><td id="m_-5447436418397076161layout-row-margin806" style="padding:0;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_-5447436418397076161layout-row806" style="margin:0;padding:0;background-color:#1259af"><td id="m_-5447436418397076161layout-row-border806" style="border-color:#ffffff;border-style:solid;border-width:1px" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td id="m_-5447436418397076161layout-row-padding806" style="background-color:#1259af;padding:20px 26px 20px 20px" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td id="m_-5447436418397076161text_div737" style="margin:0;outline:none;padding:0;color:inherit;font-size:12px;font-weight:inherit;line-height:1;text-decoration:inherit;font-family:Arial" width="602" valign="top" align="left"> <div style="margin:0;outline:none;padding:0;color:#ffffff"> <div style="margin:0;outline:none;padding:0;color:#ffffff"> <div style="margin:0;outline:none;padding:0;text-align:center;color:#ffffff"><span style="color:#ffffff;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit"><span style="color:#ffffff;font-size:12px;font-weight:normal;line-height:inherit;text-decoration:inherit;font-family:arial;font-style:normal">Copyright © 2020 </span><a href="https://homi.com.gr/el/" style="margin:0;outline:none;padding:0;color:#ffffff;text-decoration:underline" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://homi.acemlnc.com/lt.php?notrack%3D1%26s%3D66f8b3adaac660033ea1e3f2f6fe87ac%26i%3D56A389A0A428&amp;source=gmail&amp;ust=1591434021576000&amp;usg=AOvVaw10FxtYOzUzxu2zHT9pXUN4"><span style="color:#ffffff;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit"><span class="il">homi</span>.com.gr</span></a> <br><span style="color:#ffffff;font-size:12px;font-weight:normal;line-height:inherit;text-decoration:inherit;font-family:arial;font-style:normal">Με επιφύλαξη κάθε νόμιμου δικαιώµατος</span></span><br style="color:#ffffff"></div>
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
            <img src="https://ci6.googleusercontent.com/proxy/KVrqIs9a2E9ke-QysomcnYMSAm38VTrjE91DzfJeDtR6dAHdO_hQ4IPkbD3UFRoLs3V12969rScWD7bbk7FMU5FNAc18YGKPdKpRgcIo-puuHunslz9LyfGFsOpbaU8W_FIma7DaJrtFb7aoVmwhXmOA8qyV8g=s0-d-e1-ft#https://homi.acemlnc.com/lt.php?notrack=1&amp;nl=0&amp;c=56&amp;m=389&amp;s=66f8b3adaac660033ea1e3f2f6fe87ac&amp;l=open" style="display:block;width:1px!important;min-width:1px!important;max-width:1px!important;height:1px!important;border:0;overflow:hidden" class="CToWUd" width="1" height="1" border="0"><div id="m_-5447436418397076161ac-footer" style="clear:both;background-color:inherit;background:inherit;min-width:100%;padding:20px;color:#000000;font-size:11px;font-family:arial,helvetica,sans-serif;line-height:140%;line-height:1.4;text-align:center;box-sizing:border-box">
                <center>
                    Sent to: <span style="font-size:11px;font-family:arial,helvetica,sans-serif;font-weight:normal;text-decoration:none;outline:none"><a href="mailto:<?php echo $recipient_email; ?>" target="_blank"><?php echo $recipient_email; ?></a></span>
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

        <div id="m_-5447436418397076161ac-designer" class="m_-5447436418397076161body" style="font-family:Arial;line-height:1.1;margin:0px;background-color:#cce0ff;width:100%;text-align:center">		<div style="display:none;padding:0;height:1px;font-size:1px;background-color:inherit!important;color:inherit!important;line-height:1px">
                Το αίτημα επίσκεψης έγινε δεκτό
            </div>
            <div style="margin:0px;outline:none;padding:0px;color:#000000;font-family:arial;line-height:1.1;width:100%;background-color:#cce0ff;background:#cce0ff;text-align:center"><table style="font-size:14px;min-width:auto;background-color:#cce0ff;background:#cce0ff" width="100%" cellspacing="0" cellpadding="0" border="0" align="left"><tbody><tr><td width="100%" valign="top" align="center"><table style="font-size:14px;min-width:auto;max-width:650px" width="650" cellspacing="0" cellpadding="0" border="0" bgcolor="#cce0ff"><tbody><tr><td id="m_-5447436418397076161layout_table_5aac4e751bdc20b8196f17f89c219f46da50252e" style="background-color:#ffffff" width="650" valign="top" align="center"><table style="font-size:14px;min-width:100%;background-color:#ffffff" width="650" cellspacing="0" cellpadding="0" border="0"><tbody><tr style="background-color:#ffffff"><td id="m_-5447436418397076161layout-row-margin817" style="padding:0;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_-5447436418397076161layout-row817"><td id="m_-5447436418397076161layout-row-padding817" style="padding:0" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td valign="top" height="30"><div style="margin:0;outline:none;padding:0;height:30px"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td style="background-color:#cce0ff" width="650" valign="top" height="30">&nbsp;</td>
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
                                            <tr style="background-color:#ffffff"><td id="m_-5447436418397076161layout-row-margin803" style="padding:0px;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_-5447436418397076161layout-row803" style="background-color:#045fb4" align="center"><td id="m_-5447436418397076161layout-row-padding803" style="background-color:#045fb4;padding:7px" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td width="636" valign="top" align="center"><a href="https://homi.com.gr/el/" style="margin:0;outline:none;padding:0;color:#045fb4;display:block;min-width:100%" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://homi.acemlnc.com/lt.php?notrack%3D1%26s%3D66f8b3adaac660033ea1e3f2f6fe87ac%26i%3D56A389A0A428&amp;source=gmail&amp;ust=1591434021575000&amp;usg=AOvVaw1vi7hqalSwzeKn4FjxViAc"><img src="https://ci3.googleusercontent.com/proxy/adXcZ_AfvLNDVl2oDIGBKoYzOT9-CwD9Q7E8IJxIkhst9Dno2xpM_7ns7ANvrsLQWScn-5BV-XvYQ1Ri_XR6G6E5-UDbY3tCAn64s12pGN28fWoFWsx3nwEfnZoNZQTgQZb-QcQ=s0-d-e1-ft#https://homi.imgus11.com/public//3db214c35e4a1e4c80f1c80ce920183b.png?r=1502977183" alt="" style="border:none;display:block;outline:none;width:128px;opacity:1;max-width:100%" class="CToWUd" width="128"></a></td>
                                                                    </tr>
                                                                    </tbody></table>
                                                            </td>
                                                        </tr>
                                                        </tbody></table>
                                                </td>
                                            </tr>
                                            <tr style="background-color:#ffffff"><td id="m_-5447436418397076161layout-row-margin811" style="padding:2px 0px 0px 0px;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_-5447436418397076161layout-row811" style="margin:0;padding:0;background-color:#e2e5eb"><td id="m_-5447436418397076161layout-row-padding811" style="background-color:#e2e5eb;padding:20px 0px 20px 0px" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td id="m_-5447436418397076161text_div742" style="margin:0;outline:none;padding:0;color:inherit;font-size:12px;font-weight:inherit;line-height:1;text-decoration:inherit;font-family:Arial" width="650" valign="top" align="left">
                                                                            <div style="margin:0;outline:none;padding:0;font-size:25px;color:#ffffff;font-family:arial,helvetica,sans"><div style="margin:0;outline:none;padding:0"></div>
                                                                                <div style="margin:0;outline:none;padding:0;color:#1259af;font-family:arial,helvetica,sans;font-weight:700;font-size:25px;text-align:center"><span style="color:#1259af;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit">Το αίτημα επίσκεψης έγινε δεκτό</span></div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    </tbody></table>
                                                            </td>
                                                        </tr>
                                                        </tbody></table>
                                                </td>
                                            </tr>
                                            <tr style="background-color:#ffffff"><td id="m_-5447436418397076161layout-row-margin969" style="padding:2px 0px 0px 0px;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_-5447436418397076161layout-row969" style="margin:0;padding:0;background-color:#ffffff"><td id="m_-5447436418397076161layout-row-padding969" style="background-color:#ffffff;padding:19px 0px 0px 0px" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td id="m_-5447436418397076161text_div900" style="margin:0;outline:none;padding:0;color:inherit;font-size:12px;font-weight:inherit;line-height:1;text-decoration:inherit;font-family:Arial" width="650" valign="top" align="left"> <div style="margin:0;outline:none;padding:0;font-size:18px"> <div style="margin:0;outline:none;padding:0;text-align:center"><span style="color:#168749;font-size:inherit;font-weight:400;line-height:inherit;text-decoration:inherit;font-family:arial;font-style:italic">Η συνάντηση επιβεβαιώθηκε</span><br></div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    </tbody></table>
                                                            </td>
                                                        </tr>
                                                        </tbody></table>
                                                </td>
                                            </tr>
                                            <tr style="background-color:#ffffff"><td id="m_-5447436418397076161layout-row-margin812" style="padding:3px 0px 0px 0px;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_-5447436418397076161layout-row812" style="margin:0;padding:0;background-color:#ffffff"><td id="m_-5447436418397076161layout-row-padding812" style="background-color:#ffffff;padding:25px 0px 3px 0px" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td id="m_-5447436418397076161text_div743" style="margin:0;outline:none;padding:0;color:inherit;font-size:12px;font-weight:inherit;line-height:1;text-decoration:inherit;font-family:Arial" width="650" valign="top" align="left"> <div style="margin:0;outline:none;padding:0;font-size:18px"> <div style="margin:0;outline:none;padding:0;font-family:arial;font-style:normal;color:#555555;text-align:center"><span style="color:#555555;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;font-family:arial"><span style="color:#000000;font-size:inherit;font-weight:bold;line-height:inherit;text-decoration:inherit">Στοιχεία Συνάντησης</span><br></span></div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    </tbody></table>
                                                            </td>
                                                        </tr>
                                                        </tbody></table>
                                                </td>
                                            </tr>
                                            <tr style="background-color:#ffffff"><td id="m_-5447436418397076161layout-row-margin815" style="padding:0;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_-5447436418397076161layout-row815" style="background-color:#ffffff"><td id="m_-5447436418397076161layout-row-padding815" style="line-height:0;background-color:#ffffff;padding:0" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:collapse;line-height:0" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td style="font-size:12px;height:12px;line-height:0" height="12"></td>
                                                                    </tr>
                                                                    <tr><td style="line-height:0" width="650" height="1" align="center"> <table style="font-size:14px;min-width:auto!important;border-collapse:collapse;line-height:0;width:40%;max-width:40%" width="260" height="1" cellspacing="0" cellpadding="0" border="0" align="center"><tbody><tr><td class="m_-5447436418397076161break-line" style="line-height:1px;height:1px;width:260px;background-color:#b5b5b5" width="260" height="1" bgcolor="#b5b5b5"> </td>
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
                                            <tr style="background-color:#ffffff"><td id="m_-5447436418397076161layout-row-margin814" style="padding:0px;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_-5447436418397076161layout-row814" style="margin:0;padding:0;background-color:#ffffff"><td id="m_-5447436418397076161layout-row-padding814" style="background-color:#ffffff;padding:10px 0px 20px 0px" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td id="m_-5447436418397076161text_div745" style="margin:0;outline:none;padding:0;color:inherit;font-size:12px;font-weight:inherit;line-height:1;text-decoration:inherit;font-family:Arial" width="650" valign="top" align="left"> <div style="margin:0;outline:none;padding:0;color:#045fb4"> <div style="margin:0;outline:none;padding:0;font-size:17px;color:#045fb4;font-family:arial"><div style="margin:0;outline:none;padding:0;font-family:arial;font-style:normal;color:#1259af;font-size:17px;text-align:center"><span style="color:#1259af;font-size:inherit;font-weight:bold;line-height:inherit;text-decoration:inherit;font-family:arial">Ημερομηνία:</span></div>
                                                                                    <span style="color:#045fb4;font-size:17px;font-weight:400;line-height:inherit;text-decoration:inherit;font-family:arial;font-style:normal"><div style="margin:0;outline:none;padding:0;font-family:arial;color:#555555;text-align:center;font-size:15px"><span style="color:#555555;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;font-family:arial;display: block;margin-top: 10px;"><?php echo $viewing->date; ?></span></div>
<div style="margin:0;outline:none;padding:0;font-family:arial;text-align:center;color:#045fb4"><br style="font-family:arial;font-weight:inherit;color:#045fb4;color:#045fb4"></div>
<div style="margin:0;outline:none;padding:0;font-family:arial;font-weight:inherit;color:#045fb4;text-align:center"><span style="color:#1259af;font-size:inherit;font-weight:bold;line-height:inherit;text-decoration:inherit;font-family:arial"><span style="color:#1259af;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit">Ώρα:</span><br style="color:#1259af"></span><span style="color:#045fb4;font-size:15px;font-weight:inherit;line-height:inherit;text-decoration:inherit;font-family:arial"><span style="color:#555555;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;display: block;margin-top: 10px;"><?php echo $viewing->time; ?></span><span style="color:#1259af;font-size:17px;font-weight:bold;line-height:inherit;text-decoration:inherit;font-family:arial;font-style:normal"><br style="color:#1259af"><span style="color:#1259af;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit">Διεύθυνση:</span><br style="color:#1259af"></span><span style="color:#555555;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;display: block;margin-top: 10px;"><?php echo $viewing->property_address; ?>, <?php echo $viewing->property_title; ?><br style="color:#555555"></span><br></span></div>
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
                                            <tr style="background-color:#ffffff"><td id="m_-5447436418397076161layout-row-margin820" style="padding:0px;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_-5447436418397076161layout-row820" style="margin:0;padding:0;background-color:#ffffff"><td id="m_-5447436418397076161layout-row-padding820" style="background-color:#ffffff;padding:10px 0px 3px 0px" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td id="m_-5447436418397076161text_div751" style="margin:0;outline:none;padding:0;color:inherit;font-size:12px;font-weight:inherit;line-height:1;text-decoration:inherit;font-family:Arial" width="650" valign="top" align="left"> <div style="margin:0;outline:none;padding:0;font-size:18px"> <div style="margin:0;outline:none;padding:0;font-family:arial;font-style:normal;color:#555555;text-align:center"><span style="color:#555555;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;font-family:arial"><span style="color:#000000;font-size:inherit;font-weight:bold;line-height:inherit;text-decoration:inherit">Στοιχεία Ιδιοκτήτη</span><br></span></div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    </tbody></table>
                                                            </td>
                                                        </tr>
                                                        </tbody></table>
                                                </td>
                                            </tr>
                                            <tr style="background-color:#ffffff"><td id="m_-5447436418397076161layout-row-margin821" style="padding:0;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_-5447436418397076161layout-row821" style="background-color:#ffffff"><td id="m_-5447436418397076161layout-row-padding821" style="line-height:0;background-color:#ffffff;padding:0" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:collapse;line-height:0" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td style="font-size:12px;height:12px;line-height:0" height="12"></td>
                                                                    </tr>
                                                                    <tr><td style="line-height:0" width="650" height="1" align="center"> <table style="font-size:14px;min-width:auto!important;border-collapse:collapse;line-height:0;width:40%;max-width:40%" width="260" height="1" cellspacing="0" cellpadding="0" border="0" align="center"><tbody><tr><td class="m_-5447436418397076161break-line" style="line-height:1px;height:1px;width:260px;background-color:#b5b5b5" width="260" height="1" bgcolor="#b5b5b5"> </td>
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
                                            <tr style="background-color:#ffffff"><td id="m_-5447436418397076161layout-row-margin822" style="padding:0px;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_-5447436418397076161layout-row822" style="margin:0;padding:0;background-color:#ffffff"><td id="m_-5447436418397076161layout-row-padding822" style="background-color:#ffffff;padding:10px 0px 20px 0px" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td id="m_-5447436418397076161text_div753" style="margin:0;outline:none;padding:0;color:inherit;font-size:12px;font-weight:inherit;line-height:1;text-decoration:inherit;font-family:Arial" width="650" valign="top" align="left"> <div style="margin:0;outline:none;padding:0"><div style="margin:0;outline:none;padding:0;color:#045fb4;font-family:arial;font-size:17px;font-style:normal;text-align:center"></div>
                                                                                <div style="margin:0;outline:none;padding:0;text-align:center;color:#1259af"><span style="color:#1259af;font-size:17px;font-weight:bold;line-height:inherit;text-decoration:inherit;font-family:arial;text-align:inherit">Ιδιοκτήτης:</span><br style="color:#1259af"></div>
                                                                                <div style="margin:0;outline:none;padding:0;color:#555555;font-family:arial;font-size:16px;font-weight:400;font-style:normal;text-align:center"><span style="color:#555555;font-size:inherit;font-weight:400;line-height:inherit;text-decoration:inherit;font-family:arial;text-align:inherit;margin-top: 10px;display: block;"><span style="color:inherit;font-size:15px;font-weight:inherit;line-height:inherit;text-decoration:inherit"><?php echo $viewing->landlord->first_name; ?><br>
<?php echo $viewing->landlord->last_name; ?></span><br><br><span style="color:#000000;font-size:12px;font-weight:400;line-height:inherit;text-decoration:inherit;font-family:arial;font-style:normal;text-align:center;margin:0"><span style="color:inherit;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;font-family:arial"><span style="color:#1259af;font-size:17px;font-weight:bold;line-height:inherit;text-decoration:inherit;font-family:arial">Τηλέφωνο:</span><br style="font-family:arial;font-weight:bold;color:#045fb4;font-size:17px"></span><span style="color:#555555;font-size:15px;font-weight:inherit;line-height:inherit;text-decoration:inherit;display: block;margin-top: 10px;"><?php echo $viewing->landlord->phone; ?><br><br style="font-family:arial;font-weight:400;color:#555555;font-size:16px;font-style:normal"><span style="color:inherit;font-size:12px;font-weight:inherit;line-height:inherit;text-decoration:inherit;font-family:arial;font-style:normal"><span style="color:#1259af;font-size:17px;font-weight:bold;line-height:inherit;text-decoration:inherit;font-family:arial">Email:</span><br style="font-family:arial;font-weight:bold;color:#045fb4;font-size:17px"></span></span></span><span style="color:inherit;font-size:16px;font-weight:inherit;line-height:inherit;text-decoration:inherit;font-family:arial;font-style:normal;text-align:center;margin:0"><br><?php echo $viewing->landlord->email; ?></span></span></div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    </tbody></table>
                                                            </td>
                                                        </tr>
                                                        </tbody></table>
                                                </td>
                                            </tr>
                                            <tr style="background-color:#ffffff"><td id="m_-5447436418397076161layout-row-margin804" style="padding:0;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_-5447436418397076161layout-row804" style="margin:0;padding:0;background-color:#ffffff"><td id="m_-5447436418397076161layout-row-padding804" style="background-color:#ffffff;padding:10px 10px 0px 10px" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td id="m_-5447436418397076161text_div735" style="line-height:150%;margin:0;outline:none;padding:0;color:inherit;font-size:12px;font-weight:inherit;line-height:1.5;text-decoration:inherit;font-family:Arial" width="630" valign="top" align="left"> <div style="line-height:150%;margin:0;outline:none;padding:0;line-height:1.5"> <div style="margin:0;outline:none;padding:0;text-align:center"> <p style="margin:0;outline:none;padding:0;color:inherit;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;text-align:left"></p>
                                                                                    <div style="margin:0;outline:none;padding:0;text-align:justify;font-size:15px"><span style="color:inherit;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;font-family:arial,helvetica,sans"> Αγαπητή/έ <span style="color:#000000;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit"><?php echo $viewing->viewer->first_name; ?>,</span></span></div>
                                                                                    <span style="color:inherit;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;text-align:center"><div style="margin:0;outline:none;padding:0;text-align:justify;font-size:15px"><br style="font-family:arial,helvetica,sans"></div>
<div style="margin:0;outline:none;padding:0;text-align:justify;font-size:15px"><span style="color:inherit;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;font-family:arial,helvetica,sans">Η παραπάνω συνάντηση έχει επιβεβαιωθεί.<br></span></div>
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
                                            <tr style="background-color:#ffffff"><td id="m_-5447436418397076161layout-row-margin818" style="padding:0;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_-5447436418397076161layout-row818" style="margin:0;padding:0;background-color:#ffffff"><td id="m_-5447436418397076161layout-row-padding818" style="background-color:#ffffff;padding:10px 10px 0px 10px" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td id="m_-5447436418397076161text_div749" style="line-height:150%;margin:0;outline:none;padding:0;color:inherit;font-size:12px;font-weight:inherit;line-height:1.5;text-decoration:inherit;font-family:Arial" width="630" valign="top" align="left"> <div style="line-height:150%;margin:0;outline:none;padding:0;line-height:1.5"><div style="margin:0;outline:none;padding:0;font-family:arial;color:#000000;font-size:15px;text-align:justify"><span style="color:inherit;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;font-family:arial"><span style="color:inherit;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;font-family:arial"><br>Με εκτίμηση,</span><br style="font-family:arial;font-weight:inherit;color:inherit"></span></div>
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
                                            <tr style="background-color:#ffffff"><td id="m_-5447436418397076161layout-row-margin816" style="background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_-5447436418397076161layout-row816"><td id="m_-5447436418397076161layout-row-padding816" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td valign="top" height="30"><div style="margin:0;outline:none;padding:0;height:30px"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td width="650" valign="top" height="30">&nbsp;</td>
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
                                            <tr style="background-color:#ffffff"><td id="m_-5447436418397076161layout-row-margin970" style="padding:0;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_-5447436418397076161layout-row970" style="background-color:#ffffff"><td id="m_-5447436418397076161layout-row-padding970" style="line-height:0;background-color:#ffffff;padding:0" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:collapse;line-height:0" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td style="font-size:12px;height:12px;line-height:0" height="12"></td>
                                                                    </tr>
                                                                    <tr><td style="line-height:0" width="650" height="1" align="center"> <table style="font-size:14px;min-width:auto!important;border-collapse:collapse;line-height:0;width:40%;max-width:40%" width="260" height="1" cellspacing="0" cellpadding="0" border="0" align="center"><tbody><tr><td class="m_-5447436418397076161break-line" style="line-height:1px;height:1px;width:260px;background-color:#b5b5b5" width="260" height="1" bgcolor="#b5b5b5"> </td>
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
                                            <tr style="background-color:#ffffff"><td id="m_-5447436418397076161layout-row-margin843" style="padding:0;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_-5447436418397076161layout-row843" style="margin:0;padding:0;background-color:#ffffff"><td id="m_-5447436418397076161layout-row-padding843" style="background-color:#ffffff;padding:10px 10px 0px 10px" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td id="m_-5447436418397076161text_div774" style="line-height:150%;margin:0;outline:none;padding:0;color:inherit;font-size:12px;font-weight:inherit;line-height:1.5;text-decoration:inherit;font-family:Arial" width="630" valign="top" align="left"> <div style="line-height:150%;margin:0;outline:none;padding:0;font-size:12px;color:#555555;line-height:1.5"> <div style="margin:0;outline:none;padding:0;color:#555555"><div style="margin:0;outline:none;padding:0;text-align:center;font-family:arial;color:#555555"><div style="margin:0;outline:none;padding:0;text-align:center"><span style="color:#555555;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit">Σε περίπτωση που δεν μπορείς να παρευρεθείς στη συνάντηση, παρακαλούμε να μας ενημερώσεις άμεσα.</span></div>
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
                                            <tr style="background-color:#ffffff"><td id="m_-5447436418397076161layout-row-margin809" style="padding:0;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_-5447436418397076161layout-row809"><td id="m_-5447436418397076161layout-row-padding809" style="padding:0" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td valign="top" height="11"><div style="margin:0;outline:none;padding:0;height:11px"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td style="background-color:#ffffff" width="650" valign="top" height="11">&nbsp;</td>
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
                                            <tr style="background-color:#ffffff"><td id="m_-5447436418397076161layout-row-margin808" style="padding:0px;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_-5447436418397076161layout-row808" style="background-color:#ffffff"><td id="m_-5447436418397076161layout-row-padding808" style="background-color:#ffffff;padding:5px" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0"><tbody><tr><td width="650" align="left"> <center style="margin:0;outline:none;padding:0;font-size:0px"> <table class="m_-5447436418397076161_ac_social_table" style="font-size:0;min-width:auto!important;margin:auto!important;display:inline-block!important;text-align:center!important" cellspacing="0" cellpadding="0" align="center"><tbody><tr><td style="display:inline-block!important;font-size:0;width:40px!important" width="40" valign="middle" align="center"><div style="margin:0;outline:none;padding:0"><a href="https://www.facebook.com/homigreece/" id="m_-5447436418397076161facebook" style="margin:0;outline:none;padding:0;color:#045fb4" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://homi.acemlnc.com/lt.php?notrack%3D1%26s%3D66f8b3adaac660033ea1e3f2f6fe87ac%26i%3D56A389A0A430&amp;source=gmail&amp;ust=1591434021576000&amp;usg=AOvVaw1n4osrv4NdO5iCYdEfBTtQ"><img src="https://ci3.googleusercontent.com/proxy/GdbTDD6APpjXXyay9gcHY2yPn1KAMBDZGlcxVn9qbHy2odEJbgon1MJuynWI-lvvdoMmGLVpnshbmIwnclsuHqoovO1eQFTyeEqC8BfiK-Bl1w=s0-d-e1-ft#https://homi.img-us6.com/_social_/flat-color-round-facebook.png" style="border:none" class="CToWUd" width="40" border="0"></a></div>
                                                                                                    </td>
                                                                                                    <td style="display:inline-block!important;font-size:0;width:15px!important" width="15">&nbsp;</td>
                                                                                                    <td style="display:inline-block!important;font-size:0;width:40px!important" width="40" valign="middle" align="center"><div style="margin:0;outline:none;padding:0"><a href="https://www.instagram.com/homigreece/" id="m_-5447436418397076161instagram" style="margin:0;outline:none;padding:0;color:#045fb4" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://homi.acemlnc.com/lt.php?notrack%3D1%26s%3D66f8b3adaac660033ea1e3f2f6fe87ac%26i%3D56A389A0A431&amp;source=gmail&amp;ust=1591434021576000&amp;usg=AOvVaw2J5ZAx58Njd3VwsAhA-xvq"><img src="https://ci6.googleusercontent.com/proxy/KVh7BS2Jf9ltfS_IurBkgfRURnu_gLxG-tr6DEbYAVg9HD-X6XGGAnUhSgSbHtmkU5_SpxRjX0O8uMRBlZXznplZBDXgSaoHo1jasIO7vl0vfhI=s0-d-e1-ft#https://homi.img-us6.com/_social_/flat-color-round-instagram.png" style="border:none" class="CToWUd" width="40" border="0"></a></div>
                                                                                                    </td>
                                                                                                    <td style="display:inline-block!important;font-size:0;width:15px!important" width="15">&nbsp;</td>
                                                                                                    <td style="display:inline-block!important;font-size:0;width:40px!important" width="40" valign="middle" align="center"><div style="margin:0;outline:none;padding:0"><a href="https://homi.com.gr/el/" id="m_-5447436418397076161website" style="margin:0;outline:none;padding:0;color:#045fb4" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://homi.acemlnc.com/lt.php?notrack%3D1%26s%3D66f8b3adaac660033ea1e3f2f6fe87ac%26i%3D56A389A0A428&amp;source=gmail&amp;ust=1591434021576000&amp;usg=AOvVaw10FxtYOzUzxu2zHT9pXUN4"><img src="https://ci6.googleusercontent.com/proxy/6jmzrplCInuN_vMRqv0hSnU7D8YdNdGpqh6xDNTF6rtjrIFVttRMyud6MESJd09xwONO1CDs5Z2KH9czHcP9aYTeXJ6JfYRgjJdJ4WJAJZlD=s0-d-e1-ft#https://homi.img-us6.com/_social_/flat-color-round-website.png" style="border:none" class="CToWUd" width="40" border="0"></a></div>
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
                                            <tr style="background-color:#ffffff"><td id="m_-5447436418397076161layout-row-margin810" style="padding:0;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_-5447436418397076161layout-row810"><td id="m_-5447436418397076161layout-row-padding810" style="padding:0" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td valign="top" height="24"><div style="margin:0;outline:none;padding:0;height:24px"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td style="background-color:#ffffff" width="650" valign="top" height="24">&nbsp;</td>
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
                                            <tr style="background-color:#ffffff"><td id="m_-5447436418397076161layout-row-margin805" style="padding:0;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_-5447436418397076161layout-row805" style="margin:0;padding:0;background-color:#1259af"><td id="m_-5447436418397076161layout-row-border805" style="border-color:#ffffff;border-style:solid;border-width:1px" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td id="m_-5447436418397076161layout-row-padding805" style="background-color:#1259af;padding:20px 26px 20px 26px" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td id="m_-5447436418397076161text_div736" style="margin:0;outline:none;padding:0;color:inherit;font-size:12px;font-weight:inherit;line-height:1;text-decoration:inherit;font-family:Arial" width="596" valign="top" align="left"> <div style="margin:0;outline:none;padding:0;color:#ffffff"> <div style="margin:0;outline:none;padding:0;color:#ffffff"> <p style="margin:0;outline:none;padding:0;color:#ffffff;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;text-align:center"><span style="color:#ffffff;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit"><span style="color:#ffffff;font-size:12px;font-weight:400;line-height:inherit;text-decoration:inherit;font-family:arial;font-style:normal">Το παρόν email αποτελεί ανακοίνωση νομικού
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
                                            <tr style="background-color:#ffffff"><td id="m_-5447436418397076161layout-row-margin806" style="padding:0;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_-5447436418397076161layout-row806" style="margin:0;padding:0;background-color:#1259af"><td id="m_-5447436418397076161layout-row-border806" style="border-color:#ffffff;border-style:solid;border-width:1px" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td id="m_-5447436418397076161layout-row-padding806" style="background-color:#1259af;padding:20px 26px 20px 20px" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td id="m_-5447436418397076161text_div737" style="margin:0;outline:none;padding:0;color:inherit;font-size:12px;font-weight:inherit;line-height:1;text-decoration:inherit;font-family:Arial" width="602" valign="top" align="left"> <div style="margin:0;outline:none;padding:0;color:#ffffff"> <div style="margin:0;outline:none;padding:0;color:#ffffff"> <div style="margin:0;outline:none;padding:0;text-align:center;color:#ffffff"><span style="color:#ffffff;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit"><span style="color:#ffffff;font-size:12px;font-weight:normal;line-height:inherit;text-decoration:inherit;font-family:arial;font-style:normal">Copyright © 2020 </span><a href="https://homi.com.gr/el/" style="margin:0;outline:none;padding:0;color:#ffffff;text-decoration:underline" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://homi.acemlnc.com/lt.php?notrack%3D1%26s%3D66f8b3adaac660033ea1e3f2f6fe87ac%26i%3D56A389A0A428&amp;source=gmail&amp;ust=1591434021576000&amp;usg=AOvVaw10FxtYOzUzxu2zHT9pXUN4"><span style="color:#ffffff;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit"><span class="il">homi</span>.com.gr</span></a> <br><span style="color:#ffffff;font-size:12px;font-weight:normal;line-height:inherit;text-decoration:inherit;font-family:arial;font-style:normal">Με επιφύλαξη κάθε νόμιμου δικαιώµατος</span></span><br style="color:#ffffff"></div>
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
            <img src="https://ci6.googleusercontent.com/proxy/KVrqIs9a2E9ke-QysomcnYMSAm38VTrjE91DzfJeDtR6dAHdO_hQ4IPkbD3UFRoLs3V12969rScWD7bbk7FMU5FNAc18YGKPdKpRgcIo-puuHunslz9LyfGFsOpbaU8W_FIma7DaJrtFb7aoVmwhXmOA8qyV8g=s0-d-e1-ft#https://homi.acemlnc.com/lt.php?notrack=1&amp;nl=0&amp;c=56&amp;m=389&amp;s=66f8b3adaac660033ea1e3f2f6fe87ac&amp;l=open" style="display:block;width:1px!important;min-width:1px!important;max-width:1px!important;height:1px!important;border:0;overflow:hidden" class="CToWUd" width="1" height="1" border="0"><div id="m_-5447436418397076161ac-footer" style="clear:both;background-color:inherit;background:inherit;min-width:100%;padding:20px;color:#000000;font-size:11px;font-family:arial,helvetica,sans-serif;line-height:140%;line-height:1.4;text-align:center;box-sizing:border-box">
                <center>
                    Sent to: <span style="font-size:11px;font-family:arial,helvetica,sans-serif;font-weight:normal;text-decoration:none;outline:none"><a href="mailto:<?php echo $recipient_email; ?>" target="_blank"><?php echo $recipient_email; ?></a></span>
                    <br>



                    <br> <span class="il">HOMI</span> Real Estate,  190 Syggrou Avenue, 17671 Athens, Greece
                </center><div class="yj6qo"></div><div class="adL">
                </div></div><div class="adL">
                <br clear="all"></div></div>

        <?php

        return ob_get_clean();


    }


}
