<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Order No#</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <style>
            .carttable{
                border-color: #fff;
            }

            .carttable td{
                padding: 5px 10px;
                border-color: #9E9E9E;
            }
            .carttable tr{
                /*padding: 0 10px;*/
                border-color: #9E9E9E;
                font-size: 12px
            }

            .detailstable td{
                padding:10px 20px;
            }

            .gn_table td{
                padding:3px 0px;
            }
            .gn_table th{
                padding:3px 0px;
                text-align: left;

            }

        </style>
    </head>
  
    <body style="margin: 0;
          padding: 0;
          background: rgb(225, 225, 225);
          font-family: sans-serif;">
        <div class="" style="padding:50px 0px">
            <table align="center" border="0" cellpadding="0" cellspacing="0" width="600" style="background: #fff;padding: 0 20px">
                <tr>
                    <td >
                        <img src="<?php echo base_url() . 'assets/images/logo73.png'; ?> " style="margin: 10px;
                             height: 50px;
                             width: auto;">
                    </td>
            
                </tr>
                <tr><td colspan="2"><hr/></td></tr>

            </table>
            <table class="detailstable" align="center" border="0" cellpadding="0" cellspacing="0" width="600" style="background: #fff">
                <tr>
                    <td style="font-size: 12px;width: 50%" >
                        <b>Shipping Address</b><br/><hr/>
                        <span style="text-transform: capitalize;margin-top: 10px;"> 
                            <?php echo $order_data->name; ?>
                        </span> <br/>
                        <div style="    padding: 5px 0px;">
                            <?php echo $order_data->address1; ?><br/>
                            <?php echo $order_data->address2; ?><br/>
                            <?php echo $order_data->state; ?>
                            <?php echo $order_data->city; ?>
                           
                             <?php echo $order_data->country; ?> <?php echo $order_data->zipcode; ?>
                            
                        </div>
                        <table class="gn_table">
                            <tr>
                                <th>Email:</th>
                                <td><?php echo $order_data->email; ?> </td>
                            </tr>
                            <tr>
                                <th>Contact No.:</th>
                                <td> <?php echo $order_data->contact_no; ?> </td>
                            </tr>
                        </table>


                    </td>
                    <td style="font-size: 12px;width: 50%" >

                        <table class="gn_table">
                            <tr>
                                <th>Order No.:</th>
                                <td><?php echo $order_data->order_no; ?> </td>
                            </tr>
                            <tr>
                                <th>Date Time:</th>
                                <td> <?php echo $order_data->order_date; ?> <?php echo $order_data->order_time; ?>  </td>
                            </tr>
                            <tr>
                                <th>Payment Mode:</th>
                                <td> <?php echo $order_data->payment_mode; ?> </td>
                            </tr>
                            <tr>
                                <th>Txn No.:</th>
                                <td> <?php echo $payment_details['txn_id']; ?> </td>
                            </tr>
                            <tr>
                                <th>Status:</th>
                                <td> <?php 
                                if($order_status){
                                    echo end($order_status)->status;
                                }
                                else{
                                    echo "Pending";
                                }
                                ?> </td>
                            </tr>
                        </table>

                      
                    </td>
                </tr>
            </table>
            <table class="carttable"  border-color= "#9E9E9E" align="center" border="1" cellpadding="0" cellspacing="0" width="600" style="background: #fff;padding:20px">
                <tr style="font-weight: bold">
                    <td style="width: 20px;text-align: center">S.No.</td>
                    <td colspan="2"  style="text-align: center">Product</td>

                    <td style="text-align: right;width: 60px">Price<br/><span style="font-size: 10px">(In <?php echo globle_currency; ?>)</span></td>
                    <td style="text-align: right">Qnty.</td>
                    <td style="text-align: right;width: 60px">Total<br/><span style="font-size: 10px">(In  <?php echo globle_currency; ?>)</span></td>
                </tr>
                <!--cart details-->
                <?php
                foreach ($cart_data as $key => $product) {
                    ?>
                    <tr>
                        <td>
                            <?php echo $key + 1; ?>
                        </td>

                        <td style="width: 50px">
                            <center>   <img src=" <?php echo $product->file_name; ?>" style="height: 50px;"></img>
                        </td>

                        <td style="width: 200px;">
                            <?php echo $product->title; ?>
                        </td>

                        <td style="text-align: right">
                            <?php echo $product->price; ?>
                        </td>

                        <td style="text-align: right">
                            <?php echo $product->quantity; ?>
                        </td>

                        <td style="text-align: right;">
                            <?php echo $product->total_price; ?>
                        </td>
                    </tr>
                    <?php
                }
                ?>
                <!--end of cart details-->

                <tr>
                    <td colspan="3"  rowspan="5" style="font-size: 12px">
                        <b>Total Amount in Words:</b><br/>
                        <span style="text-transform: capitalize"> <?php echo $amount_in_word; ?></span>
                    </td>

                </tr>
                <tr>
                    <td colspan="2" style="text-align: right">Sub Total</td>
                    <td style="text-align: right;width: 60px"><?php echo $order_data->sub_total_price; ?> </td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: right">Shipping Amount</td>
                    <td style="text-align: right;width: 60px"><?php echo $order_data->credit_price; ?> </td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: right">Coupon Discount</td>
                    <td style="text-align: right;width: 60px"><?php echo $order_data->credit_price; ?> </td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: right">Toal Amount</td>
                    <td style="text-align: right;width: 60px"><?php echo $order_data->total_price; ?> </td>
                </tr>


                <tr>
                    <td colspan="6" style="font-size: 12px;">
                      
                        
                        <p> DECLARATION:
                            We declare that this invoice shows the actual price of the goods described above and that all particulars are true and correct.The goods sold are
                            intended for end user consumption and not for resale.
                        </p>

                       


                <p>For any order related queries, please Tel/Mob/Whatsapp/Wechat/Viber  +(852)6878 4014, 5129 8473   (24x7)  or email us at sales@octopuscart.com</p>

                <p>We assure you of best services at all times.</p>

                <div style="height: 200px;">Kindest Regards,<br />
                    <img src="http://octopuscart.com/static/images/headerlogo.png" style="height: 30px;    "><br/>
                    <strong> COSTCO  INTERNATIONAL  LIMITED</strong><br />
                    <span style="float: left; font-size: 12px;">

                        <address>
                            <b>Address 1</b><br/>
                            Unit 29, 2nd Floor, Mirador Mansion, <br/>
                            58-64B Nathan Road, T.S.T, Kowloon, Hong Kong 
                            <br/><br/>
                            <b>Address 2</b><br/>
                            Flat B, 4th Floor, Yen Chun Mansion, Block 18-26 Portland Street, <br/>Yau Ma Tei, Kowloon, Hong Kong 
                            <br/>
                            <b>Tel/Mob/Whatsapp/Wechat/Viber #</b>: +(852)6878 4014, 5129 8473   (24x7 Service)   <br/>                   
                            <b>E</b>:sales@octopuscart.com,  <br/><b>WWW.octopuscart.com  (Parent Co. is Costco Int’l Ltd.)</b>


                        </address>
                    </span>
                </div>

                        <br/>
                        <span style="    text-align: center;
                              width: 100%;
                              float: left;
                              margin-top: 24px;
                              background-color: white;
                              color: black;
                              font-size: 10px;"> (This is computer generated receipt and does not require physical signature.)</span>
                    </td>
                </tr>

            </table>
            
        </div>
    </body>
</html>