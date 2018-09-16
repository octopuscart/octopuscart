<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class PayPalPayment extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Product_model');
        $this->load->library('session');
        $this->load->model('User_model');
        $this->checklogin = $this->session->userdata('logged_in');
        $this->user_id = $this->session->userdata('logged_in')['login_id'];
    }

    public function index() {
        $PayPalMode = ''; // sandbox or live
        $PayPalApiUsername = 'octopuscartltd_api1.gmail.com'; //PayPal API Username
        $PayPalApiPassword = '66ZLFS5QP6WHV58H'; //Paypal API password
        $PayPalApiSignature = 'AFcWxV21C7fd0v3bYYYRCpSSRl31AtRlYclVHieqMP.mCqq5eNqN-DpU'; //Paypal API Signature
        $PayPalCurrencyCode = 'USD'; //Paypal Currency Code
        $data = [];
        if ($this->checklogin) {
            $session_cart = $this->Product_model->cartData($this->user_id);
        } else {
            $session_cart = $this->Product_model->cartData();
        }
        $PayPalReturnURL = site_url("PayPalPayment/success");
        $PayPalCancelURL = site_url("PayPalPayment/cancel");

        $paypaldata = "";
        $products = $session_cart['products'];
        $total_amt = $session_cart['total_price'];
        $countitem = 0;
        foreach ($products as $keyp => $valuep) {
            $ItemNumber = $valuep['sku'];
            $ItemName = $valuep['title'];
            $ItemDesc = $valuep['title'];
            $ItemPrice = $valuep['price'];
            $ItemQty = $valuep['quantity'];
            $paypaldata .= '&L_PAYMENTREQUEST_0_NAME' . $countitem . '=' . urlencode($ItemName) .
                    '&L_PAYMENTREQUEST_0_NUMBER' . $countitem . '=' . urlencode($ItemNumber) .
                    '&L_PAYMENTREQUEST_0_AMT' . $countitem . '=' . urlencode($ItemPrice) .
                    '&L_PAYMENTREQUEST_0_QTY' . $countitem . '=' . urlencode($ItemQty);
            $countitem++;
        }

        $discountcalculate = $total_amt - 0.01;

        $total_amt = $total_amt - $discountcalculate;
        $total_amt = number_format($total_amt, 2, '.', '');

        $paypaldata .= '&L_PAYMENTREQUEST_0_NAME' . $countitem . '=' . urlencode("GIFT DISCOUNT") .
                '&L_PAYMENTREQUEST_0_NUMBER' . $countitem . '=' . urlencode("GFT0001") .
                '&L_PAYMENTREQUEST_0_AMT' . $countitem . '=-' . urlencode($discountcalculate) .
                '&L_PAYMENTREQUEST_0_QTY' . $countitem . '=' . urlencode(1);

        $setexpresscheckout = '&METHOD=SetExpressCheckout' .
                '&PAYMENTREQUEST_0_PAYMENTACTION=' . urlencode("SALE") .
                '&RETURNURL=' . urlencode($PayPalReturnURL) .
                '&CANCELURL=' . urlencode($PayPalCancelURL);

        $paypaldata.= '&NOSHIPPING=0' . '&PAYMENTREQUEST_0_ITEMAMT=' . urlencode($total_amt) .
                '&PAYMENTREQUEST_0_TAXAMT=' . urlencode('0') .
                '&PAYMENTREQUEST_0_SHIPPINGAMT=' . urlencode('0') .
                '&PAYMENTREQUEST_0_HANDLINGAMT=' . urlencode('0') .
                '&PAYMENTREQUEST_0_SHIPDISCAMT=' . urlencode('0') .
                '&PAYMENTREQUEST_0_INSURANCEAMT=' . urlencode('0') .
                '&PAYMENTREQUEST_0_AMT=' . urlencode($total_amt) .
                '&PAYMENTREQUEST_0_CURRENCYCODE=' . urlencode('USD') .
                '&LOCALECODE=GB' . //PayPal pages to match the language on your website.
                '&LOGOIMG=http://costcointernational.com/logo.png' . //site logo
                '&CARTBORDERCOLOR=000000' . //border color of cart
                '&ALLOWNOTE=1';
//        $this->load->view('home', $data);
        $this->load->library('paypalclass');

//        set payment on session
        $this->session->set_userdata('session_paypal', $paypaldata);
        $session_paypal = $this->session->userdata('session_paypal');

        $httpParsedResponseAr = $this->paypalclass->PPHttpPost('SetExpressCheckout', $setexpresscheckout . $paypaldata, $PayPalApiUsername, $PayPalApiPassword, $PayPalApiSignature, $PayPalMode);

        if ("SUCCESS" == strtoupper($httpParsedResponseAr["ACK"]) || "SUCCESSWITHWARNING" == strtoupper($httpParsedResponseAr["ACK"])) {
//Redirect user to PayPal store with Token received.
            $paypalurl = 'https://www' . $PayPalMode . '.paypal.com/cgi-bin/webscr?cmd=_express-checkout&token=' . $httpParsedResponseAr["TOKEN"] . '';
            header('Location: ' . $paypalurl);
        } else {
//Show error message
            print_r($httpParsedResponseAr);

            $data["error"] = '<div style="color:red"><b>Error : </b>' . urldecode($httpParsedResponseAr["L_LONGMESSAGE0"]) . '</div>';
            $this->load->view('paypal/error', $data);
        }
    }

    public function success() {
        $PayPalMode = ''; // sandbox or live
        $PayPalApiUsername = 'octopuscartltd_api1.gmail.com'; //PayPal API Username
        $PayPalApiPassword = '66ZLFS5QP6WHV58H'; //Paypal API password
        $PayPalApiSignature = 'AFcWxV21C7fd0v3bYYYRCpSSRl31AtRlYclVHieqMP.mCqq5eNqN-DpU'; //Paypal API Signature
        $PayPalCurrencyCode = 'USD'; //Paypal Currency Code
        $data = [];
        //Paypal redirects back to this page using ReturnURL, We should receive TOKEN and Payer ID
        if ($this->input->get("token") && $this->input->get("PayerID")) {
//we will be using these two variables to execute the "DoExpressCheckoutPayment"
//Note: we haven't received any payment yet.
            $token = $this->input->get("token");
            $payer_id = $this->input->get("PayerID");
            $paypaldata = $this->session->userdata('session_paypal');

            $doexpresscheckout = '&TOKEN=' . urlencode($token) .
                    '&PAYERID=' . urlencode($payer_id) .
                    '&PAYMENTREQUEST_0_PAYMENTACTION=' . urlencode("SALE");
//We need to execute the "DoExpressCheckoutPayment" at this point to Receive payment from user.
            $this->load->library('paypalclass');
            $httpParsedResponseAr = $this->paypalclass->PPHttpPost('DoExpressCheckoutPayment', $doexpresscheckout . $paypaldata, $PayPalApiUsername, $PayPalApiPassword, $PayPalApiSignature, $PayPalMode);
//Check if everything went ok..
            if ("SUCCESS" == strtoupper($httpParsedResponseAr["ACK"]) || "SUCCESSWITHWARNING" == strtoupper($httpParsedResponseAr["ACK"])) {

                echo '<h2>Success</h2>';
                echo 'Your Transaction ID : ' . urldecode($httpParsedResponseAr["PAYMENTINFO_0_TRANSACTIONID"]);
                if (isset($httpParsedResponseAr["L_LONGMESSAGE0"])) {
                    $long_message = urldecode($httpParsedResponseAr["L_LONGMESSAGE0"]);
                    $message = urldecode($httpParsedResponseAr["L_SHORTMESSAGE0"]);
                    $error_code = urldecode($httpParsedResponseAr["L_ERRORCODE0"]);
                } else {
                    $long_message = 'Your Transaction ID : ' . urldecode($httpParsedResponseAr["PAYMENTINFO_0_TRANSACTIONID"]);
                    $message = "Payment Success";
                    $error_code = "0";
                }

                $payment_error_code = urldecode($httpParsedResponseAr["PAYMENTINFO_0_ERRORCODE"]);
                $payment_status = urldecode($httpParsedResponseAr["PAYMENTINFO_0_PAYMENTSTATUS"]);

                print_r($httpParsedResponseAr);
                /*
                  //Sometimes Payment are kept pending even when transaction is complete.
                  //hence we need to notify user about it and ask him manually approve the transiction
                 */
                if ('Completed' == $httpParsedResponseAr["PAYMENTINFO_0_PAYMENTSTATUS"]) {
                    echo '<div style="color:green">Payment Received! Your product will be sent to you very soon!</div>';
                } elseif ('Pending' == $httpParsedResponseAr["PAYMENTINFO_0_PAYMENTSTATUS"]) {
                    echo '<div style="color:red">Transaction Complete, but payment is still pending! ' .
                    'You need to manually authorize this payment in your <a target="_new" href="http://www.paypal.com">Paypal Account</a></div>';
                }

// we can retrive transection details using either GetTransactionDetails or GetExpressCheckoutDetails
// GetTransactionDetails requires a Transaction ID, and GetExpressCheckoutDetails requires Token returned by SetExpressCheckOut
                $padata = '&TOKEN=' . urlencode($token);

                $httpParsedResponseAr = $this->paypalclass->PPHttpPost('GetExpressCheckoutDetails', $padata, $PayPalApiUsername, $PayPalApiPassword, $PayPalApiSignature, $PayPalMode);

                if ("SUCCESS" == strtoupper($httpParsedResponseAr["ACK"]) || "SUCCESSWITHWARNING" == strtoupper($httpParsedResponseAr["ACK"])) {

                    if ($this->checklogin) {
                        $session_cart = $this->Product_model->cartData($this->user_id);
                    } else {
                        $session_cart = $this->Product_model->cartData();
                    }

                    $user_details = $this->User_model->user_details($this->user_id);
                    $data['user_details'] = $user_details;

                    $user_address_details = $this->User_model->user_address_details($this->user_id);
                    $data['user_address_details'] = $user_address_details;

                    $user_credits = $this->User_model->user_credits($this->user_id);
                    $data['user_credits'] = $user_credits;



                    //place order

                    $address = $user_address_details[0];

                    $order_array = array(
                        'name' => $user_details->first_name . " " . $user_details->last_name,
                        'email' => $user_details->email,
                        'user_id' => $user_details->id,
                        'contact_no' => $user_details->contact_no ? $user_details->contact_no : '---',
                        'zipcode' => $address['zipcode'],
                        'address1' => $address['address1'],
                        'address2' => $address['address2'],
                        'city' => $address['city'],
                        'state' => $address['state'],
                        'country' => $address['country'],
                        'order_date' => date('Y-m-d'),
                        'order_time' => date('H:i:s'),
                        'amount_in_word' => $this->Product_model->convert_num_word(urldecode($httpParsedResponseAr["AMT"])),
                        'sub_total_price' => urldecode($httpParsedResponseAr["AMT"]), //;$this->input->post('sub_total_price'),
                        'total_price' => urldecode($httpParsedResponseAr["AMT"]),
                        'total_quantity' => $session_cart['total_quantity'],
                        'status' => 'Payment Completed',
                        'payment_mode' => 'PayPal',
                        'credit_price' => $this->input->post('credit_price') || 0,
                    );

                    $this->db->insert('user_order', $order_array);
                    $last_id = $this->db->insert_id();
                    $orderno = "OCT" . date('Y/m/d') . "/" . $last_id;
                    $orderkey = md5($orderno);
                    $this->db->set('order_no', $orderno);
                    $this->db->set('order_key', $orderkey);
                    $this->db->where('id', $last_id);
                    $this->db->update('user_order');



                    $this->db->set('order_id', $last_id);
                    $this->db->where('order_id', '0');
                    $this->db->where('user_id', $this->user_id);
                    $this->db->update('cart');

                    $array_payment = array(
                        'c_date' => date('Y-m-d'),
                        'c_time' => date('H:i:s'),
                        'order_id' => $last_id,
                        'status' => $payment_status . " Using PayPal",
                        'user_id' => $this->user_id,
                        'remark' => "Order Confirmed, Payment Made Using PayPay.",
                        "txn_no" => urldecode($httpParsedResponseAr["TRANSACTIONID"]),
                        "message" => $message,
                        "long_message" => $long_message,
                        "total_amount" => urldecode($httpParsedResponseAr["AMT"]),
                        "currency_code" => urldecode($httpParsedResponseAr["COUNTRYCODE"]),
                        "payment_status" => $payment_status,
                        "payment_error_code" => $payment_error_code,
                        "token" => urldecode($httpParsedResponseAr["TOKEN"]),
                        "payer_id" => urldecode($httpParsedResponseAr["PAYERID"]),
                        "payer_email" => urldecode($httpParsedResponseAr["EMAIL"]),
                        "payer_info" => urldecode($httpParsedResponseAr["FIRSTNAME"]) . " " . urldecode($httpParsedResponseAr["LASTNAME"]),
                        "currection_id" => urldecode($httpParsedResponseAr["CORRELATIONID"]),
                        "ack" => urldecode($httpParsedResponseAr["ACK"]),
                        "timestemp" => urldecode($httpParsedResponseAr["TIMESTAMP"]),
                        "error_code" => $error_code,
                        "checkoutstatus" => urldecode($httpParsedResponseAr["CHECKOUTSTATUS"]),
                    );
                    $this->db->insert('paypal_status', $array_payment);


                    $order_status_data = array(
                        'c_date' => date('Y-m-d'),
                        'c_time' => date('H:i:s'),
                        'order_id' => $last_id,
                        'status' => $payment_status . " Using PayPal",
                        'user_id' => $this->user_id,
                        'remark' => "Order Confirmed, Payment Made Using PayPay.",
                    );
                    $this->db->insert('user_order_status', $order_status_data);

                    $this->Product_model->order_to_vendor($last_id);


                   // redirect('Order/orderdetails/' . $orderkey);



                    $this->load->view('Cart/checkoutPayment', $data);







// echo '<br /><b>Stuff to store in database :</b><br /><pre>';
                    /*
                      #### SAVE BUYER INFORMATION IN DATABASE ###
                      //see (http://www.sanwebe.com/2013/03/basic-php-mysqli-usage) for mysqli usage

                      $buyerName = $httpParsedResponseAr["FIRSTNAME"].' '.$httpParsedResponseAr["LASTNAME"];
                      $buyerEmail = $httpParsedResponseAr["EMAIL"];

                      //Open a new connection to the MySQL server
                      $mysqli = new mysqli('host','username','password','database_name');

                      //Output any connection error
                      if ($mysqli->connect_error) {
                      die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
                      }

                      $insert_row = $mysqli->query("INSERT INTO BuyerTable
                      (BuyerName,BuyerEmail,TransactionID,ItemName,ItemNumber, ItemAmount,ItemQTY)
                      VALUES ('$buyerName','$buyerEmail','$transactionID','$ItemName',$ItemNumber, $ItemTotalPrice,$ItemQTY)");

                      if($insert_row){
                      print 'Success! ID of last inserted record is : ' .$mysqli->insert_id .'<br />';
                      }else{
                      die('Error : ('. $mysqli->errno .') '. $mysqli->error);
                      }

                     */

                    echo '<pre>';
                    print_r($httpParsedResponseAr);
                    echo '</pre>';
                } else {
                    echo '<div style="color:red"><b>GetTransactionDetails failed:</b>' . urldecode($httpParsedResponseAr["L_LONGMESSAGE0"]) . '</div>';
                    echo '<pre>';
                    print_r($httpParsedResponseAr);
                    echo '</pre>';
                }
            } else {
                echo '<div style="color:red"><b>Error : </b>' . urldecode($httpParsedResponseAr["L_LONGMESSAGE0"]) . '</div>';
                echo '<pre>';
                print_r($httpParsedResponseAr);
                echo '</pre>';
            }
        }
        $this->load->view('paypal/cancel', $data);
    }

    public function cancel() {
        $data['token'] = $this->input->get('token');
        $this->load->view('paypal/cancel', $data);
    }

}
