<?php


class EmailViewingRejected
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

        <div id="m_-7662394891582756505ac-designer" class="m_-7662394891582756505body" style="font-family:Arial;line-height:1.1;margin:0px;background-color:#cce0ff;width:100%;text-align:center">		<div style="display:none;padding:0;height:1px;font-size:1px;background-color:inherit!important;color:inherit!important;line-height:1px">
                Απέρριψες το αίτημα επίδειξης ακινήτου
            </div>
            <div style="margin:0px;outline:none;padding:0px;color:#000000;font-family:arial;line-height:1.1;width:100%;background-color:#cce0ff;background:#cce0ff;text-align:center"><table style="font-size:14px;min-width:auto;background-color:#cce0ff;background:#cce0ff" width="100%" cellspacing="0" cellpadding="0" border="0" align="left"><tbody><tr><td width="100%" valign="top" align="center"><table style="font-size:14px;min-width:auto;max-width:650px" width="650" cellspacing="0" cellpadding="0" border="0" bgcolor="#cce0ff"><tbody><tr><td id="m_-7662394891582756505layout_table_f7ac84fe7b7b35234c229800a8b9c19ce561614b" style="background-color:#ffffff" width="650" valign="top" align="center"><table style="font-size:14px;min-width:100%;background-color:#ffffff" width="650" cellspacing="0" cellpadding="0" border="0"><tbody><tr style="background-color:#ffffff"><td id="m_-7662394891582756505layout-row-margin781" style="padding:0;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_-7662394891582756505layout-row781"><td id="m_-7662394891582756505layout-row-padding781" style="padding:0" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td valign="top" height="30"><div style="margin:0;outline:none;padding:0;height:30px"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td style="background-color:#cce0ff" width="650" valign="top" height="30">&nbsp;</td>
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
                                            <tr style="background-color:#ffffff"><td id="m_-7662394891582756505layout-row-margin767" style="padding:0px;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_-7662394891582756505layout-row767" style="background-color:#1259af" align="center"><td id="m_-7662394891582756505layout-row-padding767" style="background-color:#1259af;padding:7px" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td width="636" valign="top" align="center"><a href="https://homi.com.gr/el/" style="margin:0;outline:none;padding:0;color:#045fb4;display:block;min-width:100%" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://homi.acemlnc.com/lt.php?notrack%3D1%26s%3D66f8b3adaac660033ea1e3f2f6fe87ac%26i%3D54A387A0A413&amp;source=gmail&amp;ust=1591434055002000&amp;usg=AOvVaw25zn2a3ghhmOAfwz50zFnD"><img src="https://ci3.googleusercontent.com/proxy/Xdx_91aJH6rYsF-4ZAwbHqgdD2fwLG5NDLO7_0Khe5_HMllOdhb11Me-J-FyM_nQ2KMNCgWbWshu-pZH_m0i_YblOcV-TTikUjtLS_mtQtoFerK1RvR22gMqLR-IbJPInCPhOqg=s0-d-e1-ft#https://homi.imgus11.com/public//3db214c35e4a1e4c80f1c80ce920183b.png?r=1207108845" alt="" style="border:none;display:block;outline:none;width:128px;opacity:1;max-width:100%" class="CToWUd" width="128"></a></td>
                                                                    </tr>
                                                                    </tbody></table>
                                                            </td>
                                                        </tr>
                                                        </tbody></table>
                                                </td>
                                            </tr>
                                            <tr style="background-color:#ffffff"><td id="m_-7662394891582756505layout-row-margin775" style="padding:2px 0px 0px 0px;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_-7662394891582756505layout-row775" style="margin:0;padding:0;background-color:#e2e5eb"><td id="m_-7662394891582756505layout-row-padding775" style="background-color:#e2e5eb;padding:20px 0px 20px 0px" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td id="m_-7662394891582756505text_div706" style="margin:0;outline:none;padding:0;color:inherit;font-size:12px;font-weight:inherit;line-height:1;text-decoration:inherit;font-family:Arial" width="650" valign="top" align="left">
                                                                            <div style="margin:0;outline:none;padding:0;font-size:25px;font-family:arial,helvetica,sans"><div style="margin:0;outline:none;padding:0;color:#ffffff"></div>
                                                                                <div style="margin:0;outline:none;padding:0;font-family:arial,helvetica,sans;font-weight:700;font-size:25px;text-align:center"><span style="color:#1259af;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit">Απέρριψες το αίτημα επίδειξης ακινήτου</span></div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    </tbody></table>
                                                            </td>
                                                        </tr>
                                                        </tbody></table>
                                                </td>
                                            </tr>
                                            <tr style="background-color:#ffffff"><td id="m_-7662394891582756505layout-row-margin963" style="padding:2px 0px 0px 0px;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_-7662394891582756505layout-row963" style="margin:0;padding:0;background-color:#ffffff"><td id="m_-7662394891582756505layout-row-padding963" style="background-color:#ffffff;padding:19px 0px 0px 0px" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td id="m_-7662394891582756505text_div894" style="margin:0;outline:none;padding:0;color:inherit;font-size:12px;font-weight:inherit;line-height:1;text-decoration:inherit;font-family:Arial" width="650" valign="top" align="left"> <div style="margin:0;outline:none;padding:0;font-size:17px"> <div style="margin:0;outline:none;padding:0;text-align:center;color:#b40404"><span style="color:#b40404;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit"><span style="color:#b40404;font-size:inherit;font-weight:400;line-height:inherit;text-decoration:inherit;font-family:arial;font-style:italic">Η συνάντηση</span><span style="color:#b40404;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;font-family:arial;font-style:italic"> απορρίφθηκε</span></span><br style="color:#b40404"></div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    </tbody></table>
                                                            </td>
                                                        </tr>
                                                        </tbody></table>
                                                </td>
                                            </tr>
                                            <tr style="background-color:#ffffff"><td id="m_-7662394891582756505layout-row-margin776" style="padding:3px 0px 0px 0px;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_-7662394891582756505layout-row776" style="margin:0;padding:0;background-color:#ffffff"><td id="m_-7662394891582756505layout-row-padding776" style="background-color:#ffffff;padding:25px 0px 3px 0px" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td id="m_-7662394891582756505text_div707" style="margin:0;outline:none;padding:0;color:inherit;font-size:12px;font-weight:inherit;line-height:1;text-decoration:inherit;font-family:Arial" width="650" valign="top" align="left"> <div style="margin:0;outline:none;padding:0;font-size:18px"> <div style="margin:0;outline:none;padding:0;font-family:arial;font-style:normal;color:#555555;text-align:center"><span style="color:#555555;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;font-family:arial"><span style="color:#000000;font-size:inherit;font-weight:bold;line-height:inherit;text-decoration:inherit">Στοιχεία Συνάντησης</span><br></span></div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    </tbody></table>
                                                            </td>
                                                        </tr>
                                                        </tbody></table>
                                                </td>
                                            </tr>
                                            <tr style="background-color:#ffffff"><td id="m_-7662394891582756505layout-row-margin779" style="padding:0;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_-7662394891582756505layout-row779" style="background-color:#ffffff"><td id="m_-7662394891582756505layout-row-padding779" style="line-height:0;background-color:#ffffff;padding:0" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:collapse;line-height:0" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td style="font-size:12px;height:12px;line-height:0" height="12"></td>
                                                                    </tr>
                                                                    <tr><td style="line-height:0" width="650" height="1" align="center"> <table style="font-size:14px;min-width:auto!important;border-collapse:collapse;line-height:0;width:40%;max-width:40%" width="260" height="1" cellspacing="0" cellpadding="0" border="0" align="center"><tbody><tr><td class="m_-7662394891582756505break-line" style="line-height:1px;height:1px;width:260px;background-color:#b5b5b5" width="260" height="1" bgcolor="#b5b5b5"> </td>
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
                                            <tr style="background-color:#ffffff"><td id="m_-7662394891582756505layout-row-margin778" style="padding:0px;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_-7662394891582756505layout-row778" style="margin:0;padding:0;background-color:#ffffff"><td id="m_-7662394891582756505layout-row-padding778" style="background-color:#ffffff;padding:10px 0px 20px 0px" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td id="m_-7662394891582756505text_div709" style="margin:0;outline:none;padding:0;color:inherit;font-size:12px;font-weight:inherit;line-height:1;text-decoration:inherit;font-family:Arial" width="650" valign="top" align="left"> <div style="margin:0;outline:none;padding:0;color:#045fb4"> <div style="margin:0;outline:none;padding:0;font-size:17px;color:#045fb4;font-family:arial"><div style="margin:0;outline:none;padding:0;font-family:arial;font-style:normal;color:#1259af;font-size:17px;text-align:center"><span style="color:#1259af;font-size:inherit;font-weight:bold;line-height:inherit;text-decoration:inherit;font-family:arial">Ημερομηνία:</span></div>
                                                                                    <span style="color:#045fb4;font-size:17px;font-weight:400;line-height:inherit;text-decoration:inherit;font-family:arial;font-style:normal"><div style="margin:0;outline:none;padding:0;font-family:arial;color:#555555;text-align:center;font-size:15px"><span style="color:#555555;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;font-family:arial;display: block;margin-top: 10px;"><?php echo $viewing->date; ?></span></div>
<div style="margin:0;outline:none;padding:0;font-family:arial;text-align:center;color:#045fb4"><br style="font-family:arial;font-weight:inherit;color:#045fb4;color:#045fb4"></div>
<div style="margin:0;outline:none;padding:0;font-family:arial;font-weight:inherit;color:#045fb4;text-align:center"><span style="color:#1259af;font-size:inherit;font-weight:bold;line-height:inherit;text-decoration:inherit;font-family:arial"><span style="color:#1259af;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit">Ώρα: </span><br style="color:#1259af"></span><span style="color:#045fb4;font-size:15px;font-weight:inherit;line-height:inherit;text-decoration:inherit;font-family:arial"><span style="color:#555555;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;display: block;margin-top: 10px;"><?php echo $viewing->time; ?></span><br><span style="color:#1259af;font-size:17px;font-weight:bold;line-height:inherit;text-decoration:inherit;font-family:arial;font-style:normal"><br style="color:#1259af"><span style="color:#1259af;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit">Διεύθυνση: </span><br style="color:#1259af"></span><span style="color:#555555;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;display: block;margin-top: 10px;"><?php echo $viewing->property_address; ?>, <?php echo $viewing->property_title; ?><br style="color:#555555"></span><br><span style="color:#1259af;font-size:17px;font-weight:bold;line-height:inherit;text-decoration:inherit;font-family:arial;font-style:normal"><br style="color:#1259af"><span style="color:#1259af;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit">Επισκέπτης: </span><br style="color:#1259af"></span><span style="color:#555555;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;display: block;margin-top: 10px;"><?php echo $viewing->viewer->first_name; ?></span><br></span></div>
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
                                            <tr style="background-color:#ffffff"><td id="m_-7662394891582756505layout-row-margin777" style="padding:0;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_-7662394891582756505layout-row777"><td id="m_-7662394891582756505layout-row-padding777" style="padding:0" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td valign="top" height="10"><div style="margin:0;outline:none;padding:0;height:10px"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td style="background-color:#ffffff" width="650" valign="top" height="10">&nbsp;</td>
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
                                            <tr style="background-color:#ffffff"><td id="m_-7662394891582756505layout-row-margin768" style="padding:0;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_-7662394891582756505layout-row768" style="margin:0;padding:0;background-color:#ffffff"><td id="m_-7662394891582756505layout-row-padding768" style="background-color:#ffffff;padding:10px 10px 0px 10px" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td id="m_-7662394891582756505text_div699" style="line-height:150%;margin:0;outline:none;padding:0;color:inherit;font-size:12px;font-weight:inherit;line-height:1.5;text-decoration:inherit;font-family:Arial" width="630" valign="top" align="left"> <div style="line-height:150%;margin:0;outline:none;padding:0;line-height:1.5"> <div style="margin:0;outline:none;padding:0;text-align:center"> <p style="margin:0;outline:none;padding:0;color:inherit;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;text-align:left"></p>
                                                                                    <div style="margin:0;outline:none;padding:0;text-align:justify;font-size:15px"><span style="color:inherit;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;font-family:arial,helvetica,sans"> Αγαπητή/έ <span style="color:#000000;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit"><?php echo $viewing->landlord->first_name; ?>,</span></span></div>
                                                                                    <span style="color:inherit;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;text-align:center"><div style="margin:0;outline:none;padding:0;text-align:justify;font-size:15px"><br style="font-family:arial,helvetica,sans"></div>
<div style="margin:0;outline:none;padding:0;text-align:justify;font-size:15px"><span style="color:#000000;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;font-family:arial,helvetica,sans"> Έχεις απορρίψει το αίτημα επίδειξης ακινήτου με τις παραπάνω πληροφορίες.</span></div>
<div style="margin:0;outline:none;padding:0;text-align:justify;font-size:15px"><br style="font-family:arial,helvetica,sans"></div>
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
                                            <tr style="background-color:#ffffff"><td id="m_-7662394891582756505layout-row-margin784" style="padding:5px;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_-7662394891582756505layout-row784"><td id="m_-7662394891582756505layout-row-padding784" style="padding:12px" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td width="616" valign="top" align="left"> <div style="margin:0;outline:none;padding:0;text-align:center">
                                                                                <a href="<?php echo site_url( EmailActionsConstants::AVAILABILITY_URL ); ?>" style="margin:0;outline:none;padding:16px;color:#ffffff;background-color:#1259af;border:1px solid #030303;border-radius:3px;font-family:Arial;font-size:16px;display:inline-block;line-height:1.1;text-align:center;text-decoration:none" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://homi.acemlnc.com/lt.php?notrack%3D1%26s%3D66f8b3adaac660033ea1e3f2f6fe87ac%26i%3D54A387A0A420&amp;source=gmail&amp;ust=1591434055003000&amp;usg=AOvVaw1yk-6MV6ZHAakm6xoO4P_Z"> <span style="color:#ffffff;font-family:Arial;font-size:16px;font-weight:bold"> Η διαθεσιμότητα μου </span> </a> </div>

                                                                        </td>
                                                                    </tr>
                                                                    </tbody></table>
                                                            </td>
                                                        </tr>
                                                        </tbody></table>
                                                </td>
                                            </tr>
                                            <tr style="background-color:#ffffff"><td id="m_-7662394891582756505layout-row-margin783" style="padding:0;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_-7662394891582756505layout-row783" style="margin:0;padding:0;background-color:#ffffff"><td id="m_-7662394891582756505layout-row-padding783" style="background-color:#ffffff;padding:10px 10px 0px 10px" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td id="m_-7662394891582756505text_div714" style="line-height:150%;margin:0;outline:none;padding:0;color:inherit;font-size:12px;font-weight:inherit;line-height:1.5;text-decoration:inherit;font-family:Arial" width="630" valign="top" align="left"> <div style="line-height:150%;margin:0;outline:none;padding:0;line-height:1.5"><div style="margin:0;outline:none;padding:0;font-family:arial;color:#000000;font-size:15px;text-align:justify"><span style="color:inherit;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;font-family:arial"><span style="color:inherit;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;font-family:arial"><span style="color:inherit;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit">Αν αντιμετωπίζεις οποιαδήποτε δυσκολία με τη διαχείρηση της πλατφόρμας της </span><span style="color:#045fb4;font-size:inherit;font-weight:bold;line-height:inherit;text-decoration:inherit">ΗΟΜΙ</span><span style="color:inherit;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit">, παρακαλούμε επικοινώνησε μαζί μας:</span><br><br><span style="color:#000000;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit" lang="EN-AU"><span style="color:inherit;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:underline;font-style:normal">Τηλέφωνο</span>: +30 215 215 1962 <br><span style="color:inherit;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:underline"> Email</span>: </span><a href="mailto:support@homi.com.gr" style="margin:0;outline:none;padding:0;color:#045fb4;text-decoration:underline;font-weight:inherit;font-style:normal" target="_blank"><span>support@<span class="il">homi</span>.com.gr</span></a><span style="color:#000000;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;font-style:normal" lang="EN-AU"> </span><br><br><span style="color:inherit;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit">Με εκτίμηση,</span></span><br style="font-family:arial;font-weight:inherit;color:inherit"></span></div>
                                                                                <div style="margin:0;outline:none;padding:0;font-family:arial;color:#000000;font-size:15px;font-style:normal;font-weight:400;text-align:justify"><span style="color:inherit;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;font-family:arial">Η ομάδα της <span style="color:#1259af;font-size:inherit;font-weight:700;line-height:inherit;text-decoration:inherit;font-family:arial"><span style="color:#1259af;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit">ΗΟΜΙ<br></span><br style="color:#1259af"></span></span></div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    </tbody></table>
                                                            </td>
                                                        </tr>
                                                        </tbody></table>
                                                </td>
                                            </tr>
                                            <tr style="background-color:#ffffff"><td id="m_-7662394891582756505layout-row-margin964" style="padding:0;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_-7662394891582756505layout-row964" style="background-color:#ffffff"><td id="m_-7662394891582756505layout-row-padding964" style="line-height:0;background-color:#ffffff;padding:0" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:collapse;line-height:0" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td style="font-size:12px;height:12px;line-height:0" height="12"></td>
                                                                    </tr>
                                                                    <tr><td style="line-height:0" width="650" height="1" align="center"> <table style="font-size:14px;min-width:auto!important;border-collapse:collapse;line-height:0;width:40%;max-width:40%" width="260" height="1" cellspacing="0" cellpadding="0" border="0" align="center"><tbody><tr><td class="m_-7662394891582756505break-line" style="line-height:1px;height:1px;width:260px;background-color:#b5b5b5" width="260" height="1" bgcolor="#b5b5b5"> </td>
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
                                            <tr style="background-color:#ffffff"><td id="m_-7662394891582756505layout-row-margin780" style="background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_-7662394891582756505layout-row780"><td id="m_-7662394891582756505layout-row-padding780" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td valign="top" height="30"><div style="margin:0;outline:none;padding:0;height:30px"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td width="650" valign="top" height="30">&nbsp;</td>
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
                                            <tr style="background-color:#ffffff"><td id="m_-7662394891582756505layout-row-margin771" style="padding:0;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_-7662394891582756505layout-row771" style="margin:0;padding:0;background-color:#ffffff"><td id="m_-7662394891582756505layout-row-padding771" style="background-color:#ffffff;padding:0px 26px 0px 26px" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td id="m_-7662394891582756505text_div702" style="line-height:150%;margin:0;outline:none;padding:0;color:inherit;font-size:12px;font-weight:inherit;line-height:1.5;text-decoration:inherit;font-family:Arial" width="598" valign="top" align="left"> <div style="line-height:150%;margin:0;outline:none;padding:0;line-height:1.5"> <div style="margin:0;outline:none;padding:0;text-align:center"> <p style="margin:0;outline:none;padding:0;color:inherit;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;text-align:left"></p>
                                                                                    <div style="margin:0;outline:none;padding:0;text-align:center;color:#1259af"><span style="color:#1259af;font-size:14px;font-weight:inherit;line-height:inherit;text-decoration:inherit;font-family:arial,helvetica,sans"><span style="color:#1259af;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit"> </span><b style="margin:0;outline:none;padding:0;color:#1259af"><span style="color:#1259af;font-size:14px;font-weight:400;line-height:inherit;text-decoration:inherit;font-family:arial,helvetica,sans;font-style:normal">Αν θέλεις να ενημερώνεσαι καθημερινά για τα νέα της ΗΟΜΙ και να μαθαίνεις πρώτος για τις πιο πρόσφατες αγγελίες μας, ακολούθησε μας στα Social Media</span></b> </span></div>
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
                                            <tr style="background-color:#ffffff"><td id="m_-7662394891582756505layout-row-margin773" style="padding:0;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_-7662394891582756505layout-row773"><td id="m_-7662394891582756505layout-row-padding773" style="padding:0" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td valign="top" height="11"><div style="margin:0;outline:none;padding:0;height:11px"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td style="background-color:#ffffff" width="650" valign="top" height="11">&nbsp;</td>
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
                                            <tr style="background-color:#ffffff"><td id="m_-7662394891582756505layout-row-margin772" style="padding:0px;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_-7662394891582756505layout-row772" style="background-color:#ffffff"><td id="m_-7662394891582756505layout-row-padding772" style="background-color:#ffffff;padding:5px" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0"><tbody><tr><td width="650" align="left"> <center style="margin:0;outline:none;padding:0;font-size:0px"> <table class="m_-7662394891582756505_ac_social_table" style="font-size:0;min-width:auto!important;margin:auto!important;display:inline-block!important;text-align:center!important" cellspacing="0" cellpadding="0" align="center"><tbody><tr><td style="display:inline-block!important;font-size:0;width:40px!important" width="40" valign="middle" align="center"><div style="margin:0;outline:none;padding:0"><a href="https://www.facebook.com/homigreece/" id="m_-7662394891582756505facebook" style="margin:0;outline:none;padding:0;color:#045fb4" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://homi.acemlnc.com/lt.php?notrack%3D1%26s%3D66f8b3adaac660033ea1e3f2f6fe87ac%26i%3D54A387A0A416&amp;source=gmail&amp;ust=1591434055003000&amp;usg=AOvVaw3JnR2YqeyB3cDt1I0Fi1SG"><img src="https://ci3.googleusercontent.com/proxy/GdbTDD6APpjXXyay9gcHY2yPn1KAMBDZGlcxVn9qbHy2odEJbgon1MJuynWI-lvvdoMmGLVpnshbmIwnclsuHqoovO1eQFTyeEqC8BfiK-Bl1w=s0-d-e1-ft#https://homi.img-us6.com/_social_/flat-color-round-facebook.png" style="border:none" class="CToWUd" width="40" border="0"></a></div>
                                                                                                    </td>
                                                                                                    <td style="display:inline-block!important;font-size:0;width:15px!important" width="15">&nbsp;</td>
                                                                                                    <td style="display:inline-block!important;font-size:0;width:40px!important" width="40" valign="middle" align="center"><div style="margin:0;outline:none;padding:0"><a href="https://www.instagram.com/homigreece/" id="m_-7662394891582756505instagram" style="margin:0;outline:none;padding:0;color:#045fb4" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://homi.acemlnc.com/lt.php?notrack%3D1%26s%3D66f8b3adaac660033ea1e3f2f6fe87ac%26i%3D54A387A0A417&amp;source=gmail&amp;ust=1591434055003000&amp;usg=AOvVaw2TqnnjQbQYOxrdVKd-ggHG"><img src="https://ci6.googleusercontent.com/proxy/KVh7BS2Jf9ltfS_IurBkgfRURnu_gLxG-tr6DEbYAVg9HD-X6XGGAnUhSgSbHtmkU5_SpxRjX0O8uMRBlZXznplZBDXgSaoHo1jasIO7vl0vfhI=s0-d-e1-ft#https://homi.img-us6.com/_social_/flat-color-round-instagram.png" style="border:none" class="CToWUd" width="40" border="0"></a></div>
                                                                                                    </td>
                                                                                                    <td style="display:inline-block!important;font-size:0;width:15px!important" width="15">&nbsp;</td>
                                                                                                    <td style="display:inline-block!important;font-size:0;width:40px!important" width="40" valign="middle" align="center"><div style="margin:0;outline:none;padding:0"><a href="https://homi.com.gr/el/" id="m_-7662394891582756505website" style="margin:0;outline:none;padding:0;color:#045fb4" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://homi.acemlnc.com/lt.php?notrack%3D1%26s%3D66f8b3adaac660033ea1e3f2f6fe87ac%26i%3D54A387A0A413&amp;source=gmail&amp;ust=1591434055003000&amp;usg=AOvVaw0a4NMx7EIJljw49B1Va_8G"><img src="https://ci6.googleusercontent.com/proxy/6jmzrplCInuN_vMRqv0hSnU7D8YdNdGpqh6xDNTF6rtjrIFVttRMyud6MESJd09xwONO1CDs5Z2KH9czHcP9aYTeXJ6JfYRgjJdJ4WJAJZlD=s0-d-e1-ft#https://homi.img-us6.com/_social_/flat-color-round-website.png" style="border:none" class="CToWUd" width="40" border="0"></a></div>
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
                                            <tr style="background-color:#ffffff"><td id="m_-7662394891582756505layout-row-margin774" style="padding:0;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_-7662394891582756505layout-row774"><td id="m_-7662394891582756505layout-row-padding774" style="padding:0" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td valign="top" height="24"><div style="margin:0;outline:none;padding:0;height:24px"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td style="background-color:#ffffff" width="650" valign="top" height="24">&nbsp;</td>
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
                                            <tr style="background-color:#ffffff"><td id="m_-7662394891582756505layout-row-margin769" style="padding:0;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_-7662394891582756505layout-row769" style="margin:0;padding:0;background-color:#1259af"><td id="m_-7662394891582756505layout-row-border769" style="border-color:#ffffff;border-style:solid;border-width:1px" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td id="m_-7662394891582756505layout-row-padding769" style="background-color:#1259af;padding:20px 26px 20px 26px" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td id="m_-7662394891582756505text_div700" style="margin:0;outline:none;padding:0;color:inherit;font-size:12px;font-weight:inherit;line-height:1;text-decoration:inherit;font-family:Arial" width="596" valign="top" align="left"> <div style="margin:0;outline:none;padding:0;color:#ffffff"> <div style="margin:0;outline:none;padding:0;color:#ffffff"> <p style="margin:0;outline:none;padding:0;color:#ffffff;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;text-align:center"><span style="color:#ffffff;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit"><span style="color:#ffffff;font-size:12px;font-weight:400;line-height:inherit;text-decoration:inherit;font-family:arial;font-style:normal">Το παρόν email αποτελεί ανακοίνωση νομικού περιεχομένου. Δεν
αποτελεί προϊόν μάρκετινγκ ή προοωθητική ενέργεια. Για το λόγο αυτό λάβατε το προκείμενο email, παρόλο που ενδέχεται να είχατε απεγγραφεί</span><br><span style="color:#ffffff;font-size:12px;font-weight:400;line-height:inherit;text-decoration:inherit;font-family:arial;font-style:normal">από τις προωθητικές μας ενημερώσεις.</span></span></p>
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
                                            <tr style="background-color:#ffffff"><td id="m_-7662394891582756505layout-row-margin770" style="padding:0;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_-7662394891582756505layout-row770" style="margin:0;padding:0;background-color:#1259af"><td id="m_-7662394891582756505layout-row-border770" style="border-color:#ffffff;border-style:solid;border-width:1px" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td id="m_-7662394891582756505layout-row-padding770" style="background-color:#1259af;padding:20px 26px 20px 20px" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td id="m_-7662394891582756505text_div701" style="margin:0;outline:none;padding:0;color:inherit;font-size:12px;font-weight:inherit;line-height:1;text-decoration:inherit;font-family:Arial" width="602" valign="top" align="left"> <div style="margin:0;outline:none;padding:0;color:#ffffff"> <div style="margin:0;outline:none;padding:0;color:#ffffff"> <div style="margin:0;outline:none;padding:0;text-align:center;color:#ffffff"><span style="color:#ffffff;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit"><span style="color:#ffffff;font-size:12px;font-weight:normal;line-height:inherit;text-decoration:inherit;font-family:arial;font-style:normal">Copyright © 2020 </span><a href="https://homi.com.gr/el/" style="margin:0;outline:none;padding:0;color:#ffffff;text-decoration:underline" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://homi.acemlnc.com/lt.php?notrack%3D1%26s%3D66f8b3adaac660033ea1e3f2f6fe87ac%26i%3D54A387A0A413&amp;source=gmail&amp;ust=1591434055003000&amp;usg=AOvVaw0a4NMx7EIJljw49B1Va_8G"><span style="color:#ffffff;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit"><span class="il">homi</span>.com.gr</span></a> <br><span style="color:#ffffff;font-size:12px;font-weight:normal;line-height:inherit;text-decoration:inherit;font-family:arial;font-style:normal">Με επιφύλαξη κάθε νόμιμου δικαιώµατος</span></span><br style="color:#ffffff"></div>
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
            <img src="https://ci6.googleusercontent.com/proxy/Ek4gNikhSqrBI01IHDxS6JOcQUro5PDPOWVLaTN-tSz7bHfVp6fUy_jOWBXnT8mFPO2_Sx7MlvDDrLKVUtRwWwuQpZ03AUIUdh-ojhclpmRlPZawyuFxcceVSZDc0MslScy-yJsNUkNWDCjSI7JggP-fJODw8g=s0-d-e1-ft#https://homi.acemlnc.com/lt.php?notrack=1&amp;nl=0&amp;c=54&amp;m=387&amp;s=66f8b3adaac660033ea1e3f2f6fe87ac&amp;l=open" style="display:block;width:1px!important;min-width:1px!important;max-width:1px!important;height:1px!important;border:0;overflow:hidden" class="CToWUd" width="1" height="1" border="0"><div id="m_-7662394891582756505ac-footer" style="clear:both;background-color:inherit;background:inherit;min-width:100%;padding:20px;color:#000000;font-size:11px;font-family:arial,helvetica,sans-serif;line-height:140%;line-height:1.4;text-align:center;box-sizing:border-box">
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

        <div id="m_3918588501324031659ac-designer" class="m_3918588501324031659body" style="font-family:Arial;line-height:1.1;margin:0px;background-color:#cce0ff;width:100%;text-align:center">		<div style="display:none;padding:0;height:1px;font-size:1px;background-color:inherit!important;color:inherit!important;line-height:1px">
                Το αίτημα σου απορρίφθηκε
            </div>
            <div style="margin:0px;outline:none;padding:0px;color:#000000;font-family:arial;line-height:1.1;width:100%;background-color:#cce0ff;background:#cce0ff;text-align:center"><table style="font-size:14px;min-width:auto;background-color:#cce0ff;background:#cce0ff" width="100%" cellspacing="0" cellpadding="0" border="0" align="left"><tbody><tr><td width="100%" valign="top" align="center"><table style="font-size:14px;min-width:auto;max-width:650px" width="650" cellspacing="0" cellpadding="0" border="0" bgcolor="#cce0ff"><tbody><tr><td id="m_3918588501324031659layout_table_74dcb8dd69e6da2dd4adc2634fcaf69dfd3036f9" style="background-color:#ffffff" width="650" valign="top" align="center"><table style="font-size:14px;min-width:100%;background-color:#ffffff" width="650" cellspacing="0" cellpadding="0" border="0"><tbody><tr style="background-color:#ffffff"><td id="m_3918588501324031659layout-row-margin799" style="padding:0;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_3918588501324031659layout-row799"><td id="m_3918588501324031659layout-row-padding799" style="padding:0" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td valign="top" height="30"><div style="margin:0;outline:none;padding:0;height:30px"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td style="background-color:#cce0ff" width="650" valign="top" height="30">&nbsp;</td>
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
                                            <tr style="background-color:#ffffff"><td id="m_3918588501324031659layout-row-margin785" style="padding:0px;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_3918588501324031659layout-row785" style="background-color:#1259af" align="center"><td id="m_3918588501324031659layout-row-padding785" style="background-color:#1259af;padding:7px" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td width="636" valign="top" align="center"><a href="https://homi.com.gr/el/" style="margin:0;outline:none;padding:0;color:#045fb4;display:block;min-width:100%" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://homi.acemlnc.com/lt.php?notrack%3D1%26s%3D66f8b3adaac660033ea1e3f2f6fe87ac%26i%3D55A388A0A421&amp;source=gmail&amp;ust=1591434055036000&amp;usg=AOvVaw0Ckt6yMDh0wPNU-AJe0k-p"><img src="https://ci6.googleusercontent.com/proxy/hrq9MVJGe0CoP7fds6E3N3EQy6iS7ASabSNxqrIuACCVyQRXCXC5l5RhwP4pMhpB9AoYTmR_RZp8vIvUnun0ac2q8mUFhKLY5aliyprmfKsax6_kHvR-EfDKD4U8uCSbCXUH3g=s0-d-e1-ft#https://homi.imgus11.com/public//3db214c35e4a1e4c80f1c80ce920183b.png?r=917892235" alt="" style="border:none;display:block;outline:none;width:128px;opacity:1;max-width:100%" class="CToWUd" width="128"></a></td>
                                                                    </tr>
                                                                    </tbody></table>
                                                            </td>
                                                        </tr>
                                                        </tbody></table>
                                                </td>
                                            </tr>
                                            <tr style="background-color:#ffffff"><td id="m_3918588501324031659layout-row-margin793" style="padding:2px 0px 0px 0px;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_3918588501324031659layout-row793" style="margin:0;padding:0;background-color:#e2e5eb"><td id="m_3918588501324031659layout-row-padding793" style="background-color:#e2e5eb;padding:20px 0px 20px 0px" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td id="m_3918588501324031659text_div724" style="margin:0;outline:none;padding:0;color:inherit;font-size:12px;font-weight:inherit;line-height:1;text-decoration:inherit;font-family:Arial" width="650" valign="top" align="left">
                                                                            <div style="margin:0;outline:none;padding:0;font-size:25px;color:#ffffff;font-family:arial,helvetica,sans"><div style="margin:0;outline:none;padding:0"></div>
                                                                                <div style="margin:0;outline:none;padding:0;color:#1259af;font-family:arial,helvetica,sans;font-weight:700;font-size:25px;text-align:center"><span style="color:#1259af;font-size:inherit;font-weight:700;line-height:inherit;text-decoration:inherit;font-family:arial,helvetica,sans;text-align:inherit">Το αίτημα σου απορρίφθηκε</span></div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    </tbody></table>
                                                            </td>
                                                        </tr>
                                                        </tbody></table>
                                                </td>
                                            </tr>
                                            <tr style="background-color:#ffffff"><td id="m_3918588501324031659layout-row-margin965" style="padding:2px 0px 0px 0px;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_3918588501324031659layout-row965" style="margin:0;padding:0;background-color:#ffffff"><td id="m_3918588501324031659layout-row-padding965" style="background-color:#ffffff;padding:19px 0px 0px 0px" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td id="m_3918588501324031659text_div896" style="margin:0;outline:none;padding:0;color:inherit;font-size:12px;font-weight:inherit;line-height:1;text-decoration:inherit;font-family:Arial" width="650" valign="top" align="left"> <div style="margin:0;outline:none;padding:0;font-size:17px"> <div style="margin:0;outline:none;padding:0;text-align:center"><span style="color:#b40404;font-size:inherit;font-weight:400;line-height:inherit;text-decoration:inherit;font-family:arial;font-style:italic">Η συνάντηση</span><span style="color:#b40404;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;font-family:arial;font-style:italic"> απορρίφθηκε</span><br></div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    </tbody></table>
                                                            </td>
                                                        </tr>
                                                        </tbody></table>
                                                </td>
                                            </tr>
                                            <tr style="background-color:#ffffff"><td id="m_3918588501324031659layout-row-margin794" style="padding:3px 0px 0px 0px;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_3918588501324031659layout-row794" style="margin:0;padding:0;background-color:#ffffff"><td id="m_3918588501324031659layout-row-padding794" style="background-color:#ffffff;padding:25px 0px 3px 0px" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td id="m_3918588501324031659text_div725" style="margin:0;outline:none;padding:0;color:inherit;font-size:12px;font-weight:inherit;line-height:1;text-decoration:inherit;font-family:Arial" width="650" valign="top" align="left"> <div style="margin:0;outline:none;padding:0;font-size:18px"> <div style="margin:0;outline:none;padding:0;font-family:arial;font-style:normal;color:#555555;text-align:center"><span style="color:#555555;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;font-family:arial"><span style="color:#000000;font-size:inherit;font-weight:bold;line-height:inherit;text-decoration:inherit">Στοιχεία Συνάντησης</span><br></span></div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    </tbody></table>
                                                            </td>
                                                        </tr>
                                                        </tbody></table>
                                                </td>
                                            </tr>
                                            <tr style="background-color:#ffffff"><td id="m_3918588501324031659layout-row-margin797" style="padding:0;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_3918588501324031659layout-row797" style="background-color:#ffffff"><td id="m_3918588501324031659layout-row-padding797" style="line-height:0;background-color:#ffffff;padding:0" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:collapse;line-height:0" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td style="font-size:12px;height:12px;line-height:0" height="12"></td>
                                                                    </tr>
                                                                    <tr><td style="line-height:0" width="650" height="1" align="center"> <table style="font-size:14px;min-width:auto!important;border-collapse:collapse;line-height:0;width:40%;max-width:40%" width="260" height="1" cellspacing="0" cellpadding="0" border="0" align="center"><tbody><tr><td class="m_3918588501324031659break-line" style="line-height:1px;height:1px;width:260px;background-color:#b5b5b5" width="260" height="1" bgcolor="#b5b5b5"> </td>
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
                                            <tr style="background-color:#ffffff"><td id="m_3918588501324031659layout-row-margin796" style="padding:0px;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_3918588501324031659layout-row796" style="margin:0;padding:0;background-color:#ffffff"><td id="m_3918588501324031659layout-row-padding796" style="background-color:#ffffff;padding:10px 0px 20px 0px" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td id="m_3918588501324031659text_div727" style="margin:0;outline:none;padding:0;color:inherit;font-size:12px;font-weight:inherit;line-height:1;text-decoration:inherit;font-family:Arial" width="650" valign="top" align="left"> <div style="margin:0;outline:none;padding:0;color:#045fb4"> <div style="margin:0;outline:none;padding:0;font-size:17px;color:#045fb4;font-family:arial"><div style="margin:0;outline:none;padding:0;font-family:arial;font-style:normal;color:#1259af;font-size:17px;text-align:center"><span style="color:#1259af;font-size:inherit;font-weight:bold;line-height:inherit;text-decoration:inherit;font-family:arial">Ημερομηνία:</span></div>
                                                                                    <span style="color:#045fb4;font-size:17px;font-weight:400;line-height:inherit;text-decoration:inherit;font-family:arial;font-style:normal"><div style="margin:0;outline:none;padding:0;font-family:arial;color:#555555;text-align:center;font-size:15px"><span style="color:#555555;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;font-family:arial;display: block;margin-top: 10px;"><?php echo $viewing->date; ?></span></div>
<div style="margin:0;outline:none;padding:0;font-family:arial;text-align:center;color:#045fb4"><br style="font-family:arial;font-weight:inherit;color:#045fb4;color:#045fb4"></div>
<div style="margin:0;outline:none;padding:0;font-family:arial;font-weight:inherit;color:#045fb4;text-align:center"><span style="color:#1259af;font-size:inherit;font-weight:bold;line-height:inherit;text-decoration:inherit;font-family:arial"><span style="color:#1259af;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit">Ώρα:</span><br style="color:#1259af"></span><span style="color:#045fb4;font-size:15px;font-weight:inherit;line-height:inherit;text-decoration:inherit;font-family:arial"><span style="color:#555555;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;display: block;margin-top: 10px;"><?php echo $viewing->time; ?></span><span style="color:#1259af;font-size:17px;font-weight:bold;line-height:inherit;text-decoration:inherit;font-family:arial;font-style:normal"><br style="color:#1259af"><span style="color:#1259af;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit">Διεύθυνση:</span><br style="color:#1259af"></span><span style="color:#555555;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;display: block;margin-top: 10px;"><?php echo $viewing->property_address; ?>, <?php echo $viewing->property_title; ?><br style="color:#555555"></span><br><span style="color:#1259af;font-size:17px;font-weight:bold;line-height:inherit;text-decoration:inherit;font-family:arial;font-style:normal"><br style="color:#1259af"><span style="color:#1259af;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit">Ιδιοκτήτης:</span><br style="color:#1259af"></span><span style="color:#555555;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;display: block;margin-top: 10px;"><?php echo $viewing->landlord->first_name; ?></span><br></span></div>
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
                                            <tr style="background-color:#ffffff"><td id="m_3918588501324031659layout-row-margin795" style="padding:0;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_3918588501324031659layout-row795"><td id="m_3918588501324031659layout-row-padding795" style="padding:0" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td valign="top" height="10"><div style="margin:0;outline:none;padding:0;height:10px"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td style="background-color:#ffffff" width="650" valign="top" height="10">&nbsp;</td>
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
                                            <tr style="background-color:#ffffff"><td id="m_3918588501324031659layout-row-margin786" style="padding:0;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_3918588501324031659layout-row786" style="margin:0;padding:0;background-color:#ffffff"><td id="m_3918588501324031659layout-row-padding786" style="background-color:#ffffff;padding:10px 10px 0px 10px" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td id="m_3918588501324031659text_div717" style="line-height:150%;margin:0;outline:none;padding:0;color:inherit;font-size:12px;font-weight:inherit;line-height:1.5;text-decoration:inherit;font-family:Arial" width="630" valign="top" align="left"> <div style="line-height:150%;margin:0;outline:none;padding:0;line-height:1.5"> <div style="margin:0;outline:none;padding:0;text-align:center"> <p style="margin:0;outline:none;padding:0;color:inherit;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;text-align:left"></p>
                                                                                    <div style="margin:0;outline:none;padding:0;text-align:justify;font-size:15px"><span style="color:inherit;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;font-family:arial,helvetica,sans"> Αγαπητή/έ <span style="color:#000000;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit"><?php echo $viewing->viewer->first_name; ?>,</span></span></div>
                                                                                    <span style="color:inherit;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;text-align:center"><div style="margin:0;outline:none;padding:0;text-align:justify;font-size:15px"><br style="font-family:arial,helvetica,sans"></div>
<div style="margin:0;outline:none;padding:0;text-align:justify;font-size:15px"><span style="color:#000000;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;font-family:arial,helvetica,sans"> Το αίτημα σου για επίδειξη του παραπάνω ακινήτου <span style="color:inherit;font-size:inherit;font-weight:bold;line-height:inherit;text-decoration:inherit">απορρίφθηκε</span> από τον ιδιοκτήτη.</span></div>
<div style="margin:0;outline:none;padding:0;text-align:justify;font-size:15px"><br style="font-family:arial,helvetica,sans"></div>
<div style="margin:0;outline:none;padding:0;text-align:justify;font-size:15px"><span style="color:inherit;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;font-family:arial,helvetica,sans">Αν θα ήθελες να μιλήσεις με έναν ειδικό της <span style="color:#045fb4;font-size:inherit;font-weight:bold;line-height:inherit;text-decoration:inherit">ΗΟΜΙ</span>, παρακαλούμε επικοινώνησε μαζί μας μέσω:<br><span style="color:#000000;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit" lang="EN-AU"><span style="color:inherit;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:underline"><br>Τηλεφώνου</span>: +30 215 215 1962 <br><span style="color:inherit;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:underline"> Email</span>: </span><a href="mailto:christian@homi.com.gr" style="margin:0;outline:none;padding:0;color:#045fb4;text-decoration:underline" target="_blank"><span>christian@<span class="il">homi</span>.com.gr</span></a><span style="color:#000000;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit" lang="EN-AU"> <br></span><br></span></div>
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
                                            <tr style="background-color:#ffffff"><td id="m_3918588501324031659layout-row-margin801" style="padding:0;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_3918588501324031659layout-row801" style="margin:0;padding:0;background-color:#ffffff"><td id="m_3918588501324031659layout-row-padding801" style="background-color:#ffffff;padding:10px 10px 0px 10px" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td id="m_3918588501324031659text_div732" style="line-height:150%;margin:0;outline:none;padding:0;color:inherit;font-size:12px;font-weight:inherit;line-height:1.5;text-decoration:inherit;font-family:Arial" width="630" valign="top" align="left"> <div style="line-height:150%;margin:0;outline:none;padding:0;line-height:1.5"><div style="margin:0;outline:none;padding:0;font-family:arial;color:#000000;font-size:15px;font-style:normal;font-weight:400;text-align:justify"><span style="color:inherit;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;font-family:arial"><span style="color:inherit;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;font-family:arial">Με εκτίμηση,</span><br style="font-family:arial;font-weight:inherit;color:inherit"></span></div>
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
                                            <tr style="background-color:#ffffff"><td id="m_3918588501324031659layout-row-margin966" style="padding:0;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_3918588501324031659layout-row966" style="background-color:#ffffff"><td id="m_3918588501324031659layout-row-padding966" style="line-height:0;background-color:#ffffff;padding:0" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:collapse;line-height:0" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td style="font-size:12px;height:12px;line-height:0" height="12"></td>
                                                                    </tr>
                                                                    <tr><td style="line-height:0" width="650" height="1" align="center"> <table style="font-size:14px;min-width:auto!important;border-collapse:collapse;line-height:0;width:40%;max-width:40%" width="260" height="1" cellspacing="0" cellpadding="0" border="0" align="center"><tbody><tr><td class="m_3918588501324031659break-line" style="line-height:1px;height:1px;width:260px;background-color:#b5b5b5" width="260" height="1" bgcolor="#b5b5b5"> </td>
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
                                            <tr style="background-color:#ffffff"><td id="m_3918588501324031659layout-row-margin798" style="background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_3918588501324031659layout-row798"><td id="m_3918588501324031659layout-row-padding798" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td valign="top" height="30"><div style="margin:0;outline:none;padding:0;height:30px"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td width="650" valign="top" height="30">&nbsp;</td>
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
                                            <tr style="background-color:#ffffff"><td id="m_3918588501324031659layout-row-margin789" style="padding:0;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_3918588501324031659layout-row789" style="margin:0;padding:0;background-color:#ffffff"><td id="m_3918588501324031659layout-row-padding789" style="background-color:#ffffff;padding:0px 26px 0px 26px" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td id="m_3918588501324031659text_div720" style="line-height:150%;margin:0;outline:none;padding:0;color:inherit;font-size:12px;font-weight:inherit;line-height:1.5;text-decoration:inherit;font-family:Arial" width="598" valign="top" align="left"> <div style="line-height:150%;margin:0;outline:none;padding:0;line-height:1.5"> <div style="margin:0;outline:none;padding:0;text-align:center"> <p style="margin:0;outline:none;padding:0;color:inherit;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;text-align:left"></p>
                                                                                    <div style="margin:0;outline:none;padding:0;text-align:center;color:#045fb4"><span style="color:#045fb4;font-size:14px;font-weight:inherit;line-height:inherit;text-decoration:inherit;font-family:arial,helvetica,sans"> <b style="margin:0;outline:none;padding:0"><b style="margin:0;outline:none;padding:0;font-weight:bolder;font-family:arial,helvetica,sans;color:#1259af;font-size:14px;font-style:normal"><span style="color:#1259af;font-size:14px;font-weight:400;line-height:inherit;text-decoration:inherit;font-family:arial,helvetica,sans;font-style:normal">Αν θέλεις να ενημερώνεσαι καθημερινά για τα νέα της ΗΟΜΙ και να μαθαίνεις πρώτος για τις πιο πρόσφατες αγγελίες μας, ακολούθησε μας στα Social Media</span></b></b> </span></div>
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
                                            <tr style="background-color:#ffffff"><td id="m_3918588501324031659layout-row-margin791" style="padding:0;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_3918588501324031659layout-row791"><td id="m_3918588501324031659layout-row-padding791" style="padding:0" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td valign="top" height="11"><div style="margin:0;outline:none;padding:0;height:11px"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td style="background-color:#ffffff" width="650" valign="top" height="11">&nbsp;</td>
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
                                            <tr style="background-color:#ffffff"><td id="m_3918588501324031659layout-row-margin790" style="padding:0px;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_3918588501324031659layout-row790" style="background-color:#ffffff"><td id="m_3918588501324031659layout-row-padding790" style="background-color:#ffffff;padding:5px" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0"><tbody><tr><td width="650" align="left"> <center style="margin:0;outline:none;padding:0;font-size:0px"> <table class="m_3918588501324031659_ac_social_table" style="font-size:0;min-width:auto!important;margin:auto!important;display:inline-block!important;text-align:center!important" cellspacing="0" cellpadding="0" align="center"><tbody><tr><td style="display:inline-block!important;font-size:0;width:40px!important" width="40" valign="middle" align="center"><div style="margin:0;outline:none;padding:0"><a href="https://www.facebook.com/homigreece/" id="m_3918588501324031659facebook" style="margin:0;outline:none;padding:0;color:#045fb4" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://homi.acemlnc.com/lt.php?notrack%3D1%26s%3D66f8b3adaac660033ea1e3f2f6fe87ac%26i%3D55A388A0A424&amp;source=gmail&amp;ust=1591434055036000&amp;usg=AOvVaw0emgSh4j71r6laxPjfdgQP"><img src="https://ci3.googleusercontent.com/proxy/GdbTDD6APpjXXyay9gcHY2yPn1KAMBDZGlcxVn9qbHy2odEJbgon1MJuynWI-lvvdoMmGLVpnshbmIwnclsuHqoovO1eQFTyeEqC8BfiK-Bl1w=s0-d-e1-ft#https://homi.img-us6.com/_social_/flat-color-round-facebook.png" style="border:none" class="CToWUd" width="40" border="0"></a></div>
                                                                                                    </td>
                                                                                                    <td style="display:inline-block!important;font-size:0;width:15px!important" width="15">&nbsp;</td>
                                                                                                    <td style="display:inline-block!important;font-size:0;width:40px!important" width="40" valign="middle" align="center"><div style="margin:0;outline:none;padding:0"><a href="https://www.instagram.com/homigreece/" id="m_3918588501324031659instagram" style="margin:0;outline:none;padding:0;color:#045fb4" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://homi.acemlnc.com/lt.php?notrack%3D1%26s%3D66f8b3adaac660033ea1e3f2f6fe87ac%26i%3D55A388A0A425&amp;source=gmail&amp;ust=1591434055036000&amp;usg=AOvVaw1kK7zQrwFUmwaj5OBH6h_h"><img src="https://ci6.googleusercontent.com/proxy/KVh7BS2Jf9ltfS_IurBkgfRURnu_gLxG-tr6DEbYAVg9HD-X6XGGAnUhSgSbHtmkU5_SpxRjX0O8uMRBlZXznplZBDXgSaoHo1jasIO7vl0vfhI=s0-d-e1-ft#https://homi.img-us6.com/_social_/flat-color-round-instagram.png" style="border:none" class="CToWUd" width="40" border="0"></a></div>
                                                                                                    </td>
                                                                                                    <td style="display:inline-block!important;font-size:0;width:15px!important" width="15">&nbsp;</td>
                                                                                                    <td style="display:inline-block!important;font-size:0;width:40px!important" width="40" valign="middle" align="center"><div style="margin:0;outline:none;padding:0"><a href="https://homi.com.gr/el/" id="m_3918588501324031659website" style="margin:0;outline:none;padding:0;color:#045fb4" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://homi.acemlnc.com/lt.php?notrack%3D1%26s%3D66f8b3adaac660033ea1e3f2f6fe87ac%26i%3D55A388A0A421&amp;source=gmail&amp;ust=1591434055037000&amp;usg=AOvVaw3Vg7fWlbV5Hx2T-oIIyk-C"><img src="https://ci6.googleusercontent.com/proxy/6jmzrplCInuN_vMRqv0hSnU7D8YdNdGpqh6xDNTF6rtjrIFVttRMyud6MESJd09xwONO1CDs5Z2KH9czHcP9aYTeXJ6JfYRgjJdJ4WJAJZlD=s0-d-e1-ft#https://homi.img-us6.com/_social_/flat-color-round-website.png" style="border:none" class="CToWUd" width="40" border="0"></a></div>
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
                                            <tr style="background-color:#ffffff"><td id="m_3918588501324031659layout-row-margin792" style="padding:0;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_3918588501324031659layout-row792"><td id="m_3918588501324031659layout-row-padding792" style="padding:0" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td valign="top" height="24"><div style="margin:0;outline:none;padding:0;height:24px"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td style="background-color:#ffffff" width="650" valign="top" height="24">&nbsp;</td>
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
                                            <tr style="background-color:#ffffff"><td id="m_3918588501324031659layout-row-margin787" style="padding:0;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_3918588501324031659layout-row787" style="margin:0;padding:0;background-color:#1259af"><td id="m_3918588501324031659layout-row-border787" style="border-color:#ffffff;border-style:solid;border-width:1px" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td id="m_3918588501324031659layout-row-padding787" style="background-color:#1259af;padding:20px 26px 20px 26px" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td id="m_3918588501324031659text_div718" style="margin:0;outline:none;padding:0;color:inherit;font-size:12px;font-weight:inherit;line-height:1;text-decoration:inherit;font-family:Arial" width="596" valign="top" align="left"> <div style="margin:0;outline:none;padding:0;color:#ffffff"> <div style="margin:0;outline:none;padding:0;color:#ffffff"> <p style="margin:0;outline:none;padding:0;color:#ffffff;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;text-align:center"><span style="color:#ffffff;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit"><span style="color:#ffffff;font-size:12px;font-weight:400;line-height:inherit;text-decoration:inherit;font-family:arial;font-style:normal">Το παρόν email αποτελεί ανακοίνωση νομικού
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
                                            <tr style="background-color:#ffffff"><td id="m_3918588501324031659layout-row-margin788" style="padding:0;background-color:#ffffff" valign="top"><table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr id="m_3918588501324031659layout-row788" style="margin:0;padding:0;background-color:#1259af"><td id="m_3918588501324031659layout-row-border788" style="border-color:#ffffff;border-style:solid;border-width:1px" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td id="m_3918588501324031659layout-row-padding788" style="background-color:#1259af;padding:20px 26px 20px 20px" valign="top"><table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0"><tbody><tr><td id="m_3918588501324031659text_div719" style="margin:0;outline:none;padding:0;color:inherit;font-size:12px;font-weight:inherit;line-height:1;text-decoration:inherit;font-family:Arial" width="602" valign="top" align="left"> <div style="margin:0;outline:none;padding:0;color:#ffffff"> <div style="margin:0;outline:none;padding:0;color:#ffffff"> <div style="margin:0;outline:none;padding:0;text-align:center;color:#ffffff"><span style="color:#ffffff;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit"><span style="color:#ffffff;font-size:12px;font-weight:normal;line-height:inherit;text-decoration:inherit;font-family:arial;font-style:normal">Copyright © 2020 </span><a href="https://homi.com.gr/el/" style="margin:0;outline:none;padding:0;color:#ffffff;text-decoration:underline" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://homi.acemlnc.com/lt.php?notrack%3D1%26s%3D66f8b3adaac660033ea1e3f2f6fe87ac%26i%3D55A388A0A421&amp;source=gmail&amp;ust=1591434055037000&amp;usg=AOvVaw3Vg7fWlbV5Hx2T-oIIyk-C"><span style="color:#ffffff;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit"><span class="il">homi</span>.com.gr</span></a> <br><span style="color:#ffffff;font-size:12px;font-weight:normal;line-height:inherit;text-decoration:inherit;font-family:arial;font-style:normal">Με επιφύλαξη κάθε νόμιμου δικαιώµατος</span></span><br style="color:#ffffff"></div>
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
                    </tbody></table><div class="yj6qo ajU"><div id=":16u" class="ajR" role="button" tabindex="0" data-tooltip="Εμφάνιση περιεχομένου που έχει περικοπεί" aria-label="Εμφάνιση περιεχομένου που έχει περικοπεί" aria-expanded="false"><img class="ajT" src="//ssl.gstatic.com/ui/v1/icons/mail/images/cleardot.gif"></div></div><div class="adL">
                </div></div><div class="adL"><div class="adm"><div id="q_131" class="ajR h4"><div class="ajT"></div></div></div><div class="h5">
                    <img src="https://ci3.googleusercontent.com/proxy/cIoiF4u6XGAls3qG8oSgdFqUGkwRUexZKZXCTzbB85M0mJFzigkPAiZVT_2XZNx2uZYbbBfFO2njZoBB7-lrs9fg9Oo8yamiRY9aESFf9Gdfhn6qoGVC-0RwXw_C7aJu3BuHzAxASmoqiTxB0tPuQPRcepCmFA=s0-d-e1-ft#https://homi.acemlnc.com/lt.php?notrack=1&amp;nl=0&amp;c=55&amp;m=388&amp;s=66f8b3adaac660033ea1e3f2f6fe87ac&amp;l=open" style="display:block;width:1px!important;min-width:1px!important;max-width:1px!important;height:1px!important;border:0;overflow:hidden" class="CToWUd" width="1" height="1" border="0"><div id="m_3918588501324031659ac-footer" style="clear:both;background-color:inherit;background:inherit;min-width:100%;padding:20px;color:#000000;font-size:11px;font-family:arial,helvetica,sans-serif;line-height:140%;line-height:1.4;text-align:center;box-sizing:border-box">
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
