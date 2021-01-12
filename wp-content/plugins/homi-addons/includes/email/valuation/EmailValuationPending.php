<?php


class EmailValuationPending
{


    /**
     * @param $type string
     * @param $valuation ValuationRequest
     *
     * @return string
     */
    public function get_template( $type, $valuation ){

       $globalTemplate = new EmailValuationTemplate();

        return $globalTemplate->get_global_template( $this->get_email_header(), $this->get_email_info( $valuation ),$this->get_email_body( $type, $valuation ), $valuation->landlord->email );

    }


    private function get_email_header(){

        return 'Το αίτημα σου καταχωρήθηκε';

    }

    private function get_email_body( $type, $valuation ){

        ob_start();

        ?>

        <tr id="messageBody" style="background-color:#ffffff">
            <td id="m_-2754260234891363797layout-row-margin909" style="padding:0;background-color:#ffffff" valign="top">
                <table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0">
                    <tbody>
                    <tr id="m_-2754260234891363797layout-row909" style="margin:0;padding:0;background-color:#ffffff">
                        <td id="m_-2754260234891363797layout-row-padding909" style="background-color:#ffffff;padding:10px 10px 0px 10px" valign="top">
                            <table id="emailessage" style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0">
                                <tbody>
                                <tr>
                                    <td id="m_-2754260234891363797text_div840" style="line-height:150%;margin:0;outline:none;padding:0;color:inherit;font-size:12px;font-weight:inherit;line-height:1.5;text-decoration:inherit;font-family:Arial" width="630" valign="top" align="left">
                                        <div style="line-height:150%;margin:0;outline:none;padding:0;line-height:1.5">
                                            <div style="margin:0;outline:none;padding:0;text-align:center">
                                                <p style="margin:0;outline:none;padding:0;color:inherit;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;text-align:left"></p>
                                                <div style="margin:0;outline:none;padding:0;text-align:justify;font-size:15px">
																																<span style="color:inherit;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;font-family:arial,helvetica,sans"> Αγαπητή/έ
																																	<span style="color:#000000;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit"><?php echo $valuation->landlord->first_name; ?>,</span>
																																</span>
                                                </div>
                                                <span style="color:inherit;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;text-align:center">
																																<div style="margin:0;outline:none;padding:0;text-align:justify;font-size:15px">
																																	<br style="font-family:arial,helvetica,sans">
																																	</div>
																																	<div style="margin:0;outline:none;padding:0;text-align:justify;font-size:15px">
																																		<div style="margin:0;outline:none;padding:0;text-align:justify">
																																			<span style="color:#000000;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;font-family:arial,helvetica,sans">Ευχαριστούμε για το ενδιαφέρον σου για τη </span>
																																			<span style="color:#1259af;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;font-family:arial,helvetica,sans">
																																				<span style="color:inherit;font-size:inherit;font-weight:bold;line-height:inherit;text-decoration:inherit">
																																					<span style="color:#1259af;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit">ΗΟΜΙ</span>.
																																				</span>
																																				<span style="color:#000000;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit">
                                                                                                                                                    <?php echo ( $type === EmailActionsConstants::VALUATION_TYPES['property_valuation'] ? 'Το αίτημα σου για τη δωρεάν εκτίμηση ακινήτου έχει καταχωρηθεί.' : 'Το αίτημα σου για τη δωρεάν εκτίμηση ενοικίασης έχει καταχωρηθεί.' ); ?>
                                                                                                                                                </span>
																																			</span>
																																		</div>
																																		<span style="color:#000000;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;font-family:arial,helvetica,sans">
																																			<br>
																																				<div style="margin:0;outline:none;padding:0">Ένας ειδικός της
																																					<span style="color:#045fb4;font-size:inherit;font-weight:700;line-height:inherit;text-decoration:inherit;font-family:arial,helvetica,sans">
																																						<span style="color:#045fb4;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit">ΗΟΜΙ</span>
																																					</span>
																																					<span style="color:#000000;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;font-family:arial,helvetica,sans">θα επικοινωνήσει σύντομα μαζί σου για να επιβεβαιώσει την συνάντηση</span>.
																																				</div>
																																			</span>
																																		</div>
																																		<div style="margin:0;outline:none;padding:0;text-align:justify;font-size:15px">
																																			<br>
																																			</div>
																																			<div style="margin:0;outline:none;padding:0;text-align:justify;font-size:15px">
																																				<div style="margin:0;outline:none;padding:0;text-align:justify">
																																					<span style="color:inherit;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;font-family:arial,helvetica,sans">
																																						<span style="color:inherit;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit">Με εκτίμηση,</span>
																																						<br>
																																						</span>
																																					</div>
																																					<div style="margin:0;outline:none;padding:0;text-align:justify">
																																						<span style="color:inherit;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;font-family:arial,helvetica,sans">Η ομάδα της
																																							<span style="color:#1259af;font-size:inherit;font-weight:700;line-height:inherit;text-decoration:inherit">ΗΟΜΙ
																																								<br>
																																								</span>
																																								<br>
																																								</span>
																																							</div>
																																						</div>
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


        <?php


        return ob_get_clean();

    }

    private function get_email_info( $valuation ){

        ob_start();

        ?>

        <tr id="valuationInfo" style="background-color:#ffffff">
            <td id="m_-2754260234891363797layout-row-margin919" style="padding:0px;background-color:#ffffff" valign="top">
                <table style="font-size:14px;min-width:100%;border-collapse:initial!important" width="100%" cellspacing="0" cellpadding="0" border="0">
                    <tbody>
                    <tr id="m_-2754260234891363797layout-row919" style="margin:0;padding:0;background-color:#ffffff">
                        <td id="m_-2754260234891363797layout-row-padding919" style="background-color:#ffffff;padding:10px 0px 20px 0px" valign="top">
                            <table style="font-size:14px;min-width:100%" width="100%" cellspacing="0" cellpadding="0" border="0">
                                <tbody>
                                <tr>
                                    <td id="m_-2754260234891363797text_div850" style="margin:0;outline:none;padding:0;color:inherit;font-size:12px;font-weight:inherit;line-height:1;text-decoration:inherit;font-family:Arial" width="650" valign="top" align="left">
                                        <div style="margin:0;outline:none;padding:0;color:#045fb4">
                                            <div style="margin:0;outline:none;padding:0;font-size:17px;color:#045fb4;font-family:arial">
                                                <div style="margin:0;outline:none;padding:0;font-family:arial;font-style:normal;color:#1259af;font-size:17px;text-align:center">
                                                    <span style="color:#1259af;font-size:inherit;font-weight:bold;line-height:inherit;text-decoration:inherit;font-family:arial">Ημερομηνία:</span>
                                                </div>
                                                <span style="color:#045fb4;font-size:17px;font-weight:400;line-height:inherit;text-decoration:inherit;font-family:arial;font-style:normal">
																											<div style="margin:0;outline:none;padding:0;font-family:arial;color:#555555;text-align:center;font-size:15px">
																												<span style="color:#555555;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;font-family:arial;display: block;margin-top: 10px;"><?php echo $valuation->date; ?></span>
																											</div>
																											<div style="margin:0;outline:none;padding:0;font-family:arial;text-align:center;color:#045fb4">
																												<br style="font-family:arial;font-weight:inherit;color:#045fb4;color:#045fb4">
																												</div>
																												<div style="margin:0;outline:none;padding:0;font-family:arial;font-weight:inherit;color:#045fb4;text-align:center">
																													<span style="color:#1259af;font-size:inherit;font-weight:bold;line-height:inherit;text-decoration:inherit;font-family:arial">
																														<span style="color:#1259af;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit">Ώρα: </span>
																														<br style="color:#1259af">
																														</span>
																														<span style="color:#045fb4;font-size:15px;font-weight:inherit;line-height:inherit;text-decoration:inherit;font-family:arial">
																															<span style="color:#555555;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;display: block;margin-top: 10px;"><?php echo $valuation->time; ?></span>
																															<br>
																																<span style="color:#1259af;font-size:17px;font-weight:bold;line-height:inherit;text-decoration:inherit;font-family:arial;font-style:normal">
																																	<span style="color:#1259af;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit">Διεύθυνση: </span>
																																	<br style="color:#1259af">
																																	</span>
																																	<span style="color:#555555;font-size:inherit;font-weight:inherit;line-height:inherit;text-decoration:inherit;display: block;margin-top: 10px;"><?php echo $valuation->property_address; ?>
																																		<br>
																																		</span>
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

        <?php
        return ob_get_clean();

    }

}
