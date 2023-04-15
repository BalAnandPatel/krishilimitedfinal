<?php 
include 'include/headerr.php'; 
?>
  






<style>
    .ul.pagination {
        display: inline-block;
        padding: 0;
        margin: 0;
    }

    ul.pagination li {
        display: inline;
    }

        ul.pagination li a {
            color: black;
            float: left;
            padding: 8px 16px;
            text-decoration: none;
            transition: background-color .3s;
        }

            ul.pagination li a.active {
                background-color: #4CAF50;
                color: white;
            }

            ul.pagination li a:hover:not(.active) {
                background-color: #ddd;
            }

    .views-exposed-form {
        background: #eee none repeat scroll 0 0;
        border: 1px solid #ddd;
        box-sizing: border-box;
        margin-bottom: 20px;
        padding: 0 14px;
        padding-bottom: 10px;
        width: auto;
    }

    .views-exposed-widgets {
        margin-bottom: 0.5em;
    }

    .views-exposed-form #edit-title-wrapper, .views-exposed-form #edit-field-designation-type-tid-wrapper, .views-exposed-form #edit-field-division-type-tid-wrapper, .views-exposed-form #edit-field-whos-who-department-tid-wrapper, .views-exposed-form #edit-field-room-no-value-wrapper {
        width: 20%;
        padding: 0.5em 1em 0 0;
    }

    .views-exposed-form .views-exposed-widget {
        float: left;
        padding: 0.5em 1em 0 0;
    }

    input[type="text"], select, .form-text, .form-textarea {
        border: 1px solid #d8d8d8;
        padding: 6px;
    }

    .views-exposed-form .views-submit-button, .views-exposed-form .views-reset-button {
        padding-top: 0px;
    }

    .views-exposed-form .views-exposed-widget {
        float: left;
        padding: 0.5em 1em 0 0;
    }

    .views-exposed-form .views-submit-button, .views-exposed-form .views-reset-button {
        padding-top: 0px;
    }

    .views-exposed-form .views-exposed-widget {
        float: left;
        padding: 0.5em 1em 0 0;
    }

    .views-exposed-form .views-submit-button .form-submit, .views-exposed-form .views-reset-button .form-submit {
        margin-top: 30px;
    }

    .views-exposed-form .views-exposed-widget .form-submit {
        margin-top: 1.6em;
    }

    .views-exposed-form .form-item, .views-exposed-form .form-submit {
        margin-top: 0;
        margin-bottom: 0;
    }

    form input[type="submit"] {
        background: #4d5d08 none repeat scroll 0 0;
        border: medium none;
        color: #fff;
        cursor: pointer;
        font-size: 1.1em;
        padding: 7px 10px;
        margin-bottom: 10px;
    }

    .views-exposed-form input, .views-exposed-form select {
        width: 100%;
    }
    /* .view-grouping-header {
        font-weight: 900;
        font-size: 16px;
        padding: 0.05em 0;
        background-color: #e0d081;
        text-align: center;
    }*/
</style>
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12">
            <div class="footer_content">
                <h4 class="font_size pb-2">Who&#39;s who</h4>
                <div class="view-filters">
                    <form action="/en/who" method="get" id="views-exposed-form-whos-who-page-3" accept-charset="UTF-8">
                        <div>
                            <div class="views-exposed-form">
                                <div class="views-exposed-widgets clearfix">
                                    <div id="edit-title-wrapper" class="views-exposed-widget views-widget-filter-title">
                                        <label for="edit-title">Name</label>
                                        <div class="views-widget">
                                            <div class="form-item form-type-textfield form-item-title">
                                                <input type="text" id="title" name="title" value="" size="30" maxlength="128" class="form-text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="views-exposed-widget views-submit-button">
                                        <input type="submit" id="edit-submit-whos-who" name="" value="Show" class="form-submit">
                                    </div>           <div class="views-exposed-widget views-reset-button">
                                        <input type="submit" id="edit-reset" name="" value="Reset" class="form-submit">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="card wh_cat">
                            <!-- /.card-header -->
                            <div class="card-body ">
                                <div class="page-qw">
                                    <div class="page-left">
                                    </div>
                                    <div class="page-right font_size"></div>
                                </div>
<form action="/en/who" method="post">                                        <div class="view-grouping-header font_size" style="font-weight:bold">OFFICE OF HON&#39;BLE MINISTER OF AGRICULTURE &amp; FARMERS WELFARE</div>
                                        <table class="table table-bordered table-striped testdatatable">
                                            <tr>
                                                <th class="font_size"> <label for="Name">Name</label></th>
                                                <th class="font_size"><label for="Designation">Designation</label>
                                                <th class="font_size"><label for="Email">Email</label></th>
                                                <th class="font_size"><label for="Office">Office</label></th>
                                                <th class="font_size"><label for="Fax">Fax</label></th>
                                                <th class="font_size"><label for="EPABX">EPABX</label></th>
                                                <th style="min-width:100px" class="font_size"><label for="Room_No">Room No</label></th>
                                                <th class="font_size"><label for="Residence">Residence</label></th>
                                                
                                            </tr>

                                                <tr>
                                                    <td class="font_size">Shri Narendra Singh Tomar</td>
                                                    <td class="font_size">Honorable Minister of Agriculture &amp; Farmers Welfare</td>
                                                    <td class="font_size">agrimin[dot]india[at]gmail[dot]com</td>
                                                    <td class="font_size">23383370, 23782691</td>
                                                    <td class="font_size">23384129 (Fax)</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">120</td>
                                                    <td class="font_size">23794697, 23794698, 23794696 (Fax)</td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Tejaswi Naik</td>
                                                    <td class="font_size">Private Secretary to Minister </td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">23383370, 23782691, 23384129</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">4919</td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Arun Kumar</td>
                                                    <td class="font_size">OSD to Honorable AM</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">23383370, 23782691</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">4233</td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Kuldeep Singh Rathore</td>
                                                    <td class="font_size">OSD to Honorable AM</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">23383370, 23782691</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">2491</td>
                                                    <td class="font_size">118</td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Avinash K Arya</td>
                                                    <td class="font_size">First Personal Assistant to Honorable AM</td>
                                                    <td class="font_size">avinash[dot]arya[at]gov[dot]in</td>
                                                    <td class="font_size">23383370, 23782594</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Minister Office</td>
                                                    <td class="font_size">          </td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">23383370, 23782691, 23384129 (FAX)</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">4942</td>
                                                    <td class="font_size">119-A</td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                        </table>
                                        <div class="view-grouping-header font_size" style="font-weight:bold">OFFICE OF HON&#39;BLE MINISTER OF STATE FOR AGRICULTURE &amp; FARMERS WELFARE</div>
                                        <table class="table table-bordered table-striped testdatatable">
                                            <tr>
                                                <th class="font_size"> <label for="Name">Name</label></th>
                                                <th class="font_size"><label for="Designation">Designation</label>
                                                <th class="font_size"><label for="Email">Email</label></th>
                                                <th class="font_size"><label for="Office">Office</label></th>
                                                <th class="font_size"><label for="Fax">Fax</label></th>
                                                <th class="font_size"><label for="EPABX">EPABX</label></th>
                                                <th style="min-width:100px" class="font_size"><label for="Room_No">Room No</label></th>
                                                <th class="font_size"><label for="Residence">Residence</label></th>
                                                
                                            </tr>

                                                <tr>
                                                    <td class="font_size">Shri Kailash Choudhary</td>
                                                    <td class="font_size">Honorable Minister of State (Agri &amp; Farmers Welfare)</td>
                                                    <td class="font_size">kailash[dot]chaudharimp[at]nic[dot]in</td>
                                                    <td class="font_size">23782343, 23388165, 23382756, 23782565</td>
                                                    <td class="font_size">23074190 (F)</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">23017125, 23017126</td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Dr. Amol Bhagwan Shinde</td>
                                                    <td class="font_size">PS to Honorable MOS (A &amp; FW)</td>
                                                    <td class="font_size">pstomosagari[at]gmail[dot]com</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Shri Rajesh Chippa</td>
                                                    <td class="font_size">Additional Private Secretary to Honorable MOS (A &amp; FW)</td>
                                                    <td class="font_size">apstomos-agri[at]gov[dot]in</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Shri Pankaj Karwasara</td>
                                                    <td class="font_size">Assistant Private Secretary to Honorable MOS (A &amp; FW)</td>
                                                    <td class="font_size">pankaj[dot]karwasara[at]gov[dot]in</td>
                                                    <td class="font_size">23782343, 23388165</td>
                                                    <td class="font_size">23074190 (F)</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">199-L, Krishi Bhawan</td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Shri Khem Raj</td>
                                                    <td class="font_size">1st PA to Honorable MOS (A &amp; FW)</td>
                                                    <td class="font_size">krajjat11111[at]gmail[dot]com</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Sushri Shobha Karandlaje</td>
                                                    <td class="font_size">MOS (Agri &amp; Farmers Welfare)</td>
                                                    <td class="font_size">mos-agri[at]nic[dot]in</td>
                                                    <td class="font_size">23383975, 23383976</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">322</td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Mr. Takhat Singh Ranawat</td>
                                                    <td class="font_size">PS to Hon’ble MoS (A &amp; FW) </td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">23383975, 23383976, 23383971 (F)</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">5115</td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Manjunath G. Gouda</td>
                                                    <td class="font_size">APS to MoS (A &amp; FW)</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">23383975, 23383976, 23383971 (F)</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">5118</td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Abhishek C.H.</td>
                                                    <td class="font_size">1st PA</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">23383975, 23383976</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">326</td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                        </table>
                                        <div class="view-grouping-header font_size" style="font-weight:bold">OFFICE OF THE SECRETARY (AGRICULTURE&amp; FARMERS WELFARE)</div>
                                        <table class="table table-bordered table-striped testdatatable">
                                            <tr>
                                                <th class="font_size"> <label for="Name">Name</label></th>
                                                <th class="font_size"><label for="Designation">Designation</label>
                                                <th class="font_size"><label for="Email">Email</label></th>
                                                <th class="font_size"><label for="Office">Office</label></th>
                                                <th class="font_size"><label for="Fax">Fax</label></th>
                                                <th class="font_size"><label for="EPABX">EPABX</label></th>
                                                <th style="min-width:100px" class="font_size"><label for="Room_No">Room No</label></th>
                                                <th class="font_size"><label for="Residence">Residence</label></th>
                                                
                                            </tr>

                                                <tr>
                                                    <td class="font_size">Shri Manoj Ahuja</td>
                                                    <td class="font_size">Secretary</td>
                                                    <td class="font_size">secy-agri[at]gov[dot]in</td>
                                                    <td class="font_size">23382651, 23388444, 23386004</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">4918</td>
                                                    <td class="font_size">115</td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">GVSSL Narasimham</td>
                                                    <td class="font_size">PPS</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">23382651, 23388444</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">4954</td>
                                                    <td class="font_size">125</td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">KJVN Mohan Rao</td>
                                                    <td class="font_size">PPS</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">23382651, 23388444</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">4125</td>
                                                    <td class="font_size">125</td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Personal Section</td>
                                                    <td class="font_size"> </td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">4126</td>
                                                    <td class="font_size">126</td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                        </table>
                                        <div class="view-grouping-header font_size" style="font-weight:bold">OFFICE OF THE CHIEF EXECUTIVE OFFICER (NRAA)</div>
                                        <table class="table table-bordered table-striped testdatatable">
                                            <tr>
                                                <th class="font_size"> <label for="Name">Name</label></th>
                                                <th class="font_size"><label for="Designation">Designation</label>
                                                <th class="font_size"><label for="Email">Email</label></th>
                                                <th class="font_size"><label for="Office">Office</label></th>
                                                <th class="font_size"><label for="Fax">Fax</label></th>
                                                <th class="font_size"><label for="EPABX">EPABX</label></th>
                                                <th style="min-width:100px" class="font_size"><label for="Room_No">Room No</label></th>
                                                <th class="font_size"><label for="Residence">Residence</label></th>
                                                
                                            </tr>

                                                <tr>
                                                    <td class="font_size">Dr. Ashok Dalwai</td>
                                                    <td class="font_size">CEO, NRAA</td>
                                                    <td class="font_size">ashok[dot]dalwai[at]gov[dot]in</td>
                                                    <td class="font_size">23383830, 23070257</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">4927</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Anoop Singh Rawat</td>
                                                    <td class="font_size">Sr. Prin (Private Secretary)</td>
                                                    <td class="font_size">anoop[dot]rawat[at]nic[dot]in</td>
                                                    <td class="font_size">23383830, 23070257</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">4132</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                        </table>
                                        <div class="view-grouping-header font_size" style="font-weight:bold">OFFICE OF PRINCIPAL ADVISER</div>
                                        <table class="table table-bordered table-striped testdatatable">
                                            <tr>
                                                <th class="font_size"> <label for="Name">Name</label></th>
                                                <th class="font_size"><label for="Designation">Designation</label>
                                                <th class="font_size"><label for="Email">Email</label></th>
                                                <th class="font_size"><label for="Office">Office</label></th>
                                                <th class="font_size"><label for="Fax">Fax</label></th>
                                                <th class="font_size"><label for="EPABX">EPABX</label></th>
                                                <th style="min-width:100px" class="font_size"><label for="Room_No">Room No</label></th>
                                                <th class="font_size"><label for="Residence">Residence</label></th>
                                                
                                            </tr>

                                                <tr>
                                                    <td class="font_size">Vacant</td>
                                                    <td class="font_size">Senior Economic Advisor</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Vacant</td>
                                                    <td class="font_size">PSO</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                        </table>
                                        <div class="view-grouping-header font_size" style="font-weight:bold">OFFICE OF CHIEF KNOWLEDGE OFFICER &amp; ADVISER (DIGITAL AGRICULTURE)</div>
                                        <table class="table table-bordered table-striped testdatatable">
                                            <tr>
                                                <th class="font_size"> <label for="Name">Name</label></th>
                                                <th class="font_size"><label for="Designation">Designation</label>
                                                <th class="font_size"><label for="Email">Email</label></th>
                                                <th class="font_size"><label for="Office">Office</label></th>
                                                <th class="font_size"><label for="Fax">Fax</label></th>
                                                <th class="font_size"><label for="EPABX">EPABX</label></th>
                                                <th style="min-width:100px" class="font_size"><label for="Room_No">Room No</label></th>
                                                <th class="font_size"><label for="Residence">Residence</label></th>
                                                
                                            </tr>

                                                <tr>
                                                    <td class="font_size">Shri Rajeev Chawla</td>
                                                    <td class="font_size">Chief Knowledge Officer and Advisor</td>
                                                    <td class="font_size">rajeev[dot]chawla[at]ias[dot]gov[dot]in</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">2117</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Vinod Kumar</td>
                                                    <td class="font_size">PA</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">2139</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                        </table>
                                        <div class="view-grouping-header font_size" style="font-weight:bold">LIST OF ADDITIONAL SECRETARY &amp; EQUIVALENT</div>
                                        <table class="table table-bordered table-striped testdatatable">
                                            <tr>
                                                <th class="font_size"> <label for="Name">Name</label></th>
                                                <th class="font_size"><label for="Designation">Designation</label>
                                                <th class="font_size"><label for="Email">Email</label></th>
                                                <th class="font_size"><label for="Office">Office</label></th>
                                                <th class="font_size"><label for="Fax">Fax</label></th>
                                                <th class="font_size"><label for="EPABX">EPABX</label></th>
                                                <th style="min-width:100px" class="font_size"><label for="Room_No">Room No</label></th>
                                                <th class="font_size"><label for="Residence">Residence</label></th>
                                                
                                            </tr>

                                                <tr>
                                                    <td class="font_size">Dr. Abhilaksh Likhi</td>
                                                    <td class="font_size">Additional Secretary (GC/ PC/ MIDH/ RKVY/ Marketing/  Seeds/  INM/ Policy/ O &amp; M/ PG/ MPS/ I &amp; P/ DM/ EA/ RFS/ NRM)</td>
                                                    <td class="font_size">a[dot]likhi[at]nic[dot]in</td>
                                                    <td class="font_size">23382219, 23388656</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">4999</td>
                                                    <td class="font_size">134</td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Shri S.S. Rawat</td>
                                                    <td class="font_size">Sr. PPS</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">23382219, 23388656</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">4240</td>
                                                    <td class="font_size">132</td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Shri Sanjiv Kumar</td>
                                                    <td class="font_size">Additional Secretary &amp; F A</td>
                                                    <td class="font_size">asfa-agri[at]nic[dot]in</td>
                                                    <td class="font_size">23381363, 23382532</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">4968</td>
                                                    <td class="font_size">136</td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Tilak Raj</td>
                                                    <td class="font_size">Sr. PPS</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">23381363, 23382532</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">4135</td>
                                                    <td class="font_size">135</td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Dr. Pramod Kumar Meherda</td>
                                                    <td class="font_size">Additional Secretary (Farmers Welfare/ IT/ PP/ IC/ G20)</td>
                                                    <td class="font_size">pk[dot]meherda[at]nic[dot]in</td>
                                                    <td class="font_size">23381176, 23382417 </td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">4964</td>
                                                    <td class="font_size">131</td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Dr. Md Nazmuddin</td>
                                                    <td class="font_size">Senior Economic Advisor</td>
                                                    <td class="font_size">mdn[at]gov[dot]in</td>
                                                    <td class="font_size">23382719, 23385931</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">4940</td>
                                                    <td class="font_size">244</td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Nand Kishore</td>
                                                    <td class="font_size">PSO</td>
                                                    <td class="font_size">nand[dot]kishore64[at]nic[dot]in</td>
                                                    <td class="font_size">23382719, 23385931</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">4148</td>
                                                    <td class="font_size">243-A</td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Shri. Arun Kumar</td>
                                                    <td class="font_size">Sr. Economic and Statistical Adviser</td>
                                                    <td class="font_size">office[dot]esa-agri[at]nic[dot]in</td>
                                                    <td class="font_size">23384036, 23382016</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">4144</td>
                                                    <td class="font_size">144</td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Ms. Meena Nagpal</td>
                                                    <td class="font_size">Sr. PPS</td>
                                                    <td class="font_size">meena[dot]nagpal66[at]nic[dot]in</td>
                                                    <td class="font_size">23384036, 2338 2016</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">4952</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">N. Sankar</td>
                                                    <td class="font_size">PPS</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">23381176, 23382417</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">4297</td>
                                                    <td class="font_size">130</td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Dr. P. K. Singh</td>
                                                    <td class="font_size">Agriculture Commissioner</td>
                                                    <td class="font_size">comm-agri[at]gov[dot]in</td>
                                                    <td class="font_size">23383549, 23381012</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">5130</td>
                                                    <td class="font_size">223</td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">G.M. Rao</td>
                                                    <td class="font_size">PS</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">23381012, 23383549</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">4921</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                        </table>
                                        <div class="view-grouping-header font_size" style="font-weight:bold">JOINT SECRETARY &amp; EQUIVALENT</div>
                                        <table class="table table-bordered table-striped testdatatable">
                                            <tr>
                                                <th class="font_size"> <label for="Name">Name</label></th>
                                                <th class="font_size"><label for="Designation">Designation</label>
                                                <th class="font_size"><label for="Email">Email</label></th>
                                                <th class="font_size"><label for="Office">Office</label></th>
                                                <th class="font_size"><label for="Fax">Fax</label></th>
                                                <th class="font_size"><label for="EPABX">EPABX</label></th>
                                                <th style="min-width:100px" class="font_size"><label for="Room_No">Room No</label></th>
                                                <th class="font_size"><label for="Residence">Residence</label></th>
                                                
                                            </tr>

                                                <tr>
                                                    <td class="font_size">Shri Franklin L. Khobung</td>
                                                    <td class="font_size">Joint Secretary (NRM/RFS)</td>
                                                    <td class="font_size">franklin[dot]l[at]nic[dot]in</td>
                                                    <td class="font_size"> 23381757, 23388756</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">4220</td>
                                                    <td class="font_size">299 C</td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">S.K. Jassi</td>
                                                    <td class="font_size">PPS to JS (RFS/NRM)</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">23381757, 23388756</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">4883</td>
                                                    <td class="font_size">299 D</td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Sh. Sanjeev Khanna</td>
                                                    <td class="font_size">PPS</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">23386849, 23384280</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">4747</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Sh.Ashish Kumar Srivastav</td>
                                                    <td class="font_size">Joint Secretary (RKVY, RTI, M &amp; T O &amp; M/PG, PC &amp; NRM)</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">23382444, 23073779</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">4925</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Sri Suresh</td>
                                                    <td class="font_size">PS</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">23382444, 23073779</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">2014</td>
                                                    <td class="font_size">226</td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Smt. ShubhaThakur,CSS</td>
                                                    <td class="font_size">Joint Secretary (Crops, Oil Seeds &amp; Administration, C.V.O)</td>
                                                    <td class="font_size">sthakur[at]nic[dot]in</td>
                                                    <td class="font_size">23383744, 23382977 (Fax)</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">2705</td>
                                                    <td class="font_size">155</td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Manoj Khattar</td>
                                                    <td class="font_size">PS</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">23383744, 23382977(FAX)</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">4130</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Smt. Smita Sirohi</td>
                                                    <td class="font_size">Joint Secretary (G-20/BRICS, SCO)</td>
                                                    <td class="font_size">smita[dot]sirohi[at]gov[dot]in</td>
                                                    <td class="font_size">23389614 , 23386124</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">4355</td>
                                                    <td class="font_size">248</td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Arun Kumar Dhir</td>
                                                    <td class="font_size">PPS</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">23389614, 23386124</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">4958</td>
                                                    <td class="font_size">187</td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Priya Ranjan</td>
                                                    <td class="font_size">Joint Secretary (INM, MIDH/Horticulture)</td>
                                                    <td class="font_size">priya[dot]ranjan98[at]gov[dot]in</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">4224</td>
                                                    <td class="font_size">224</td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Ajay Wadhwa</td>
                                                    <td class="font_size">PPS</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">4624</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Shri Ritesh Chauhan</td>
                                                    <td class="font_size">Joint Secretary (CEO, PMFBY/IC)</td>
                                                    <td class="font_size">ritesh[dot]chauhan[at]gov[dot]in</td>
                                                    <td class="font_size">23074701, 23074702</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">2173</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Manoj Pandey</td>
                                                    <td class="font_size">PPS</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">23074701, 23074702</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Sh. Samuel Praveen Kumar</td>
                                                    <td class="font_size">Joint Secretary (Extension, AIF, Investment &amp; Price Support)</td>
                                                    <td class="font_size">sampraveen[dot]04[at]gov[dot]in</td>
                                                    <td class="font_size">011-23384468, 23073384</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">4928</td>
                                                    <td class="font_size">133</td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Tilak Raj</td>
                                                    <td class="font_size">Sr. PPS</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">011-23384468, 23073384</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">4632</td>
                                                    <td class="font_size">137-A</td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Sh.Binod Kumar</td>
                                                    <td class="font_size">Chief Controller of Accounts</td>
                                                    <td class="font_size">cca-agri[at]gov[dot]in</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">4967</td>
                                                    <td class="font_size">241</td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Sh .Viney Kumar</td>
                                                    <td class="font_size">PS to CCA</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">4242</td>
                                                    <td class="font_size">242</td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Sh. Anand Kumar Singh</td>
                                                    <td class="font_size">PA to CCA</td>
                                                    <td class="font_size">cca-agri[at]gov[dot]in</td>
                                                    <td class="font_size">23385240, 23384611</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">4242</td>
                                                    <td class="font_size">242</td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Dr. Amiya Chandra</td>
                                                    <td class="font_size">Adviser (Trade)</td>
                                                    <td class="font_size">advtrade-agri[at]gov[dot]in</td>
                                                    <td class="font_size">23382523</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">4037</td>
                                                    <td class="font_size">011</td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Sunita Vashistha</td>
                                                    <td class="font_size">PPS to Trade Advisor</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">2706</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Sh. C. F Joseph</td>
                                                    <td class="font_size">Hort. Statistics/Adviser Trade , IMC, COS, COM</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">5004</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Anil Kumar Sharma</td>
                                                    <td class="font_size">Adviser (FE/IAC)  Admin (Group B &amp; C)</td>
                                                    <td class="font_size">Anilk[dot]sharma[at]nic[dot]in</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Ms.Kalvinder Kaur</td>
                                                    <td class="font_size">PPS</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">4953</td>
                                                    <td class="font_size">447</td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">P. R Meshram</td>
                                                    <td class="font_size">Adviser (Admn / AS / Hindi)</td>
                                                    <td class="font_size">Pr[dot]meshram[at]nic[dot]in</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">4987</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">P. Sangeeth Kumar</td>
                                                    <td class="font_size">Adviser (SDDS/Vigilance)</td>
                                                    <td class="font_size">p[dot]sangeeth[at]gov[dot]in</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">4451</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Ruchika Gupta</td>
                                                    <td class="font_size">Adviser (AS / RTCSP)</td>
                                                    <td class="font_size">Ruchika[dot]gupta[at]nic[dot]in</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">4698</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">B.L. Meena</td>
                                                    <td class="font_size">Adviser(P &amp; M / Coord)</td>
                                                    <td class="font_size">Bl[dot]meena62[at]gov[dot]in</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">4643</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Ms. Mukta Manglani</td>
                                                    <td class="font_size">PS</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">4953</td>
                                                    <td class="font_size">447</td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Promodita Sathish</td>
                                                    <td class="font_size">Adviser (AER/ CC/ Publication/ Library)</td>
                                                    <td class="font_size">promodita[at]nic[dot]in</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">4649</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Dalip Singh</td>
                                                    <td class="font_size">DDG (AC)</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">5003</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Sh. G Pradhan</td>
                                                    <td class="font_size">Advisor (Costing Cell)</td>
                                                    <td class="font_size">advcosting-agri[at]gov[dot]in</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">2730</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Rama Vishal Malhotra</td>
                                                    <td class="font_size">PPS to Advisor</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">011-23382226/ 23384902</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">2729</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Dr. Prabhat Kumar</td>
                                                    <td class="font_size">Horticulture Commissioner /National Bamboo Mission</td>
                                                    <td class="font_size">hort[dot]comm-agri[at]gov[dot]in</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">4738</td>
                                                    <td class="font_size">237</td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Surjeet Kaur</td>
                                                    <td class="font_size">PS</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">23381503, 23387669</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">4131</td>
                                                    <td class="font_size">236</td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Ms. C. H Honey</td>
                                                    <td class="font_size">CFCC/CS</td>
                                                    <td class="font_size">ch[dot]honey[at]nic[dot]in</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">4763</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Shri Sanjeev</td>
                                                    <td class="font_size">PS</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">443</td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Dr. Vijaya Lakshmi Nadendla</td>
                                                    <td class="font_size">Joint Secretary (Marketing)</td>
                                                    <td class="font_size">nadendla[at]ias[dot]nic[dot]in</td>
                                                    <td class="font_size">23386849, 23384280</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">1194</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Smt. S. Rukmani</td>
                                                    <td class="font_size">Joint Secretary (M &amp; T, DM, EA, O &amp; M/PG, RTI)</td>
                                                    <td class="font_size">s[dot]rukmani[at]nic[dot]in</td>
                                                    <td class="font_size">011-23381305</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">2731</td>
                                                    <td class="font_size">149</td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Shri Rajnish</td>
                                                    <td class="font_size">PPS </td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">011-23381305</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">2732</td>
                                                    <td class="font_size">148</td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Sh. Manoj Kumar Gupta</td>
                                                    <td class="font_size">Adviser (FW &amp; SDDS)</td>
                                                    <td class="font_size">manojk[dot]gupta[at]nic[dot]in</td>
                                                    <td class="font_size">23384309  , 23382508</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">4451</td>
                                                    <td class="font_size">240 - A</td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Sh. Arun Kumar Dhir</td>
                                                    <td class="font_size">Sr. P.P.S to Adviser</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">23384309 ,123382508</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">4244</td>
                                                    <td class="font_size">240 - A</td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                        </table>
                                        <div class="view-grouping-header font_size" style="font-weight:bold">DIRECTOR</div>
                                        <table class="table table-bordered table-striped testdatatable">
                                            <tr>
                                                <th class="font_size"> <label for="Name">Name</label></th>
                                                <th class="font_size"><label for="Designation">Designation</label>
                                                <th class="font_size"><label for="Email">Email</label></th>
                                                <th class="font_size"><label for="Office">Office</label></th>
                                                <th class="font_size"><label for="Fax">Fax</label></th>
                                                <th class="font_size"><label for="EPABX">EPABX</label></th>
                                                <th style="min-width:100px" class="font_size"><label for="Room_No">Room No</label></th>
                                                <th class="font_size"><label for="Residence">Residence</label></th>
                                                
                                            </tr>

                                                <tr>
                                                    <td class="font_size">Sh. Muktanand Agrawal</td>
                                                    <td class="font_size">Director (RFS/NRM/IYoM)</td>
                                                    <td class="font_size">muktanand[dot]ias08[at]nic[dot]in</td>
                                                    <td class="font_size">23384348</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">2717</td>
                                                    <td class="font_size">150</td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Vijay Rajmohan</td>
                                                    <td class="font_size">Director (IC/ G20)</td>
                                                    <td class="font_size">vijay[dot]rajmohan[at]nic[dot]in</td>
                                                    <td class="font_size">23386681</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">4931</td>
                                                    <td class="font_size">415</td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Balram Prasad Bimal</td>
                                                    <td class="font_size">Director (DM, E.A.)</td>
                                                    <td class="font_size">bp[dot]bimal[at]gov[dot]in</td>
                                                    <td class="font_size">23383980</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">4356</td>
                                                    <td class="font_size">386</td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">K. N. Verma</td>
                                                    <td class="font_size">Director (Horticulture)</td>
                                                    <td class="font_size">kn[dot]verma[at]nic[dot]in</td>
                                                    <td class="font_size">23382383</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">4143</td>
                                                    <td class="font_size">398-A</td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">K.R. Meena</td>
                                                    <td class="font_size">Director (I &amp; PS)</td>
                                                    <td class="font_size">krmeena[at]ord[dot]gov[dot]in</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">4674</td>
                                                    <td class="font_size">33-A</td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Rajni Taneja</td>
                                                    <td class="font_size">Director (INM)</td>
                                                    <td class="font_size">rajni[dot]taneja66[at]nic[dot]in</td>
                                                    <td class="font_size">23382546</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">4210</td>
                                                    <td class="font_size">347</td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Rakesh Kumar Tiwari</td>
                                                    <td class="font_size">Director (FW, Digital Agriculture)</td>
                                                    <td class="font_size">rakeshk[dot]tiwari81[at]gov[dot]in</td>
                                                    <td class="font_size">23387388</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">4647</td>
                                                    <td class="font_size">26-A</td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Sudhir Kumar</td>
                                                    <td class="font_size">Director (Policy)</td>
                                                    <td class="font_size">sudhir[dot]kumar63[at]nic[dot]in</td>
                                                    <td class="font_size">23382357</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">4789</td>
                                                    <td class="font_size">350-A</td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Pankaj Tyagi</td>
                                                    <td class="font_size">Director (RFS, Oil Seeds)</td>
                                                    <td class="font_size">pankaj[dot]tyagi99[at]gov[dot]in</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">4829</td>
                                                    <td class="font_size">216</td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Dr. Ranjit Singh</td>
                                                    <td class="font_size">Director (IC &amp; PP)</td>
                                                    <td class="font_size">singhranjit[at]cag[dot]gov[dot]in</td>
                                                    <td class="font_size">23389023</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">4935</td>
                                                    <td class="font_size">348</td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Vacant</td>
                                                    <td class="font_size">Director (Credit)</td>
                                                    <td class="font_size">ss[dot]modi[at]nic[dot]in</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">5018</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Shri Kapil Ashok Bendre</td>
                                                    <td class="font_size">Director (Marketing-II)</td>
                                                    <td class="font_size">dir-agrimarketing[at]gov[dot]in</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">4189</td>
                                                    <td class="font_size">355</td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Prasanth Chandran</td>
                                                    <td class="font_size">Director (PC)</td>
                                                    <td class="font_size">prasanth[dot]c[at]gov[dot]in</td>
                                                    <td class="font_size">23385853</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">5019</td>
                                                    <td class="font_size">352-A</td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Shri Manoj Kumar</td>
                                                    <td class="font_size">Director (MIDH) &amp; IAS 2008</td>
                                                    <td class="font_size">manojias2008[at]nic[dot]in</td>
                                                    <td class="font_size">23384618</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">4529</td>
                                                    <td class="font_size">344</td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Sh. Harprit . K Singh</td>
                                                    <td class="font_size">Controller of Accounts</td>
                                                    <td class="font_size">ca-agri[at]gov[dot]in</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">4005</td>
                                                    <td class="font_size">287</td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Shri M.K. Mishra </td>
                                                    <td class="font_size">Director (Organic)</td>
                                                    <td class="font_size">mrityunjaya[dot]m[at]nic[dot]in</td>
                                                    <td class="font_size">23074238</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">434-KB</td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Shri Anand Krishan</td>
                                                    <td class="font_size">Director</td>
                                                    <td class="font_size">anand[dot]krishan63[at]nic[dot]in</td>
                                                    <td class="font_size">23782006</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">5006</td>
                                                    <td class="font_size">105-SB</td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Rajesh Jaiswal</td>
                                                    <td class="font_size">Director (Finance)</td>
                                                    <td class="font_size">rajesh[dot]jaiswal[at]nic[dot]in</td>
                                                    <td class="font_size">23382454</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">4149</td>
                                                    <td class="font_size">350</td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Shri. K.M.S. Khalsa</td>
                                                    <td class="font_size">Director (Finance)</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">23383053</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">2050</td>
                                                    <td class="font_size">37</td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Ruchi</td>
                                                    <td class="font_size">PA (Director- Finance)</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                        </table>
                                        <div class="view-grouping-header font_size" style="font-weight:bold">ADDITIONAL COMMISSIONERS</div>
                                        <table class="table table-bordered table-striped testdatatable">
                                            <tr>
                                                <th class="font_size"> <label for="Name">Name</label></th>
                                                <th class="font_size"><label for="Designation">Designation</label>
                                                <th class="font_size"><label for="Email">Email</label></th>
                                                <th class="font_size"><label for="Office">Office</label></th>
                                                <th class="font_size"><label for="Fax">Fax</label></th>
                                                <th class="font_size"><label for="EPABX">EPABX</label></th>
                                                <th style="min-width:100px" class="font_size"><label for="Room_No">Room No</label></th>
                                                <th class="font_size"><label for="Residence">Residence</label></th>
                                                
                                            </tr>

                                                <tr>
                                                    <td class="font_size">Y.R. Meena</td>
                                                    <td class="font_size">Additional Commissioner (Mass Media)</td>
                                                    <td class="font_size">yadram[dot]meena[at]gov[dot]in</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">4345</td>
                                                    <td class="font_size">345</td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Dr. Dhura Ram</td>
                                                    <td class="font_size">Addl. Commissioner (NRM)</td>
                                                    <td class="font_size">dram[dot]1965[at]gov[dot]in</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">4232</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Dr. B.K. Yadav</td>
                                                    <td class="font_size">Addl. Commissioner (Crops)</td>
                                                    <td class="font_size">yadav[dot]bk[at]gov[dot]in</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">4529</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Sh. Raj Pal Singh</td>
                                                    <td class="font_size">Additional Commissioner (Crops &amp; PHMF)</td>
                                                    <td class="font_size">rpsingh[dot]15863[at]gov[dot]in</td>
                                                    <td class="font_size">011-23386268</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">4333</td>
                                                    <td class="font_size">333 - B Wing,  Krishi Bhawan</td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Dr. Om Prakash Sharma</td>
                                                    <td class="font_size">Addl. Commissioner (NRM / RFS)</td>
                                                    <td class="font_size">Omprakash[dot]1967[at]gov[dot]in</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">4739</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">R P Singh</td>
                                                    <td class="font_size">Addl. Commissioner (Crops)</td>
                                                    <td class="font_size">rpsingh[dot]15863[at]gov[dot]in</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">2336</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Dr. Sanjay Kumar</td>
                                                    <td class="font_size">Addl. Commissioner (EXTN.)</td>
                                                    <td class="font_size">sanjay[dot]kr71[at]gov[dot]in</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">4142</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Sh. Naveen Kumar Patle</td>
                                                    <td class="font_size">Addl. Commissioner (Hort.)</td>
                                                    <td class="font_size">dchort-dac[at]gov[dot]in</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">2176</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Dr. V. N. Kale</td>
                                                    <td class="font_size">Addl. Commissioner (Machinery)</td>
                                                    <td class="font_size">vn[dot]kale[at]gov[dot]in</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">4298</td>
                                                    <td class="font_size">547</td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Dr. Anil Pratap Singh</td>
                                                    <td class="font_size">Additional Commissioner (Crops)</td>
                                                    <td class="font_size">ap[dot]singh62[at]nic[dot]in</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">4333</td>
                                                    <td class="font_size">333</td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                        </table>
                                        <div class="view-grouping-header font_size" style="font-weight:bold">DEPUTY SECRETARIES &amp; EQUIVALENT</div>
                                        <table class="table table-bordered table-striped testdatatable">
                                            <tr>
                                                <th class="font_size"> <label for="Name">Name</label></th>
                                                <th class="font_size"><label for="Designation">Designation</label>
                                                <th class="font_size"><label for="Email">Email</label></th>
                                                <th class="font_size"><label for="Office">Office</label></th>
                                                <th class="font_size"><label for="Fax">Fax</label></th>
                                                <th class="font_size"><label for="EPABX">EPABX</label></th>
                                                <th style="min-width:100px" class="font_size"><label for="Room_No">Room No</label></th>
                                                <th class="font_size"><label for="Residence">Residence</label></th>
                                                
                                            </tr>

                                                <tr>
                                                    <td class="font_size">Shri Ajay Kumar Sinha</td>
                                                    <td class="font_size">Deputy Secretary, O &amp; MPG and IT CELL</td>
                                                    <td class="font_size">ak[dot]sinha66[at]nic[dot]in</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">4336</td>
                                                    <td class="font_size">336</td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Rakesh Singh Nayal</td>
                                                    <td class="font_size">Deputy Secretary (GA, Welfare &amp; Vigilance)</td>
                                                    <td class="font_size">rakesh[dot]nayal[at]nic[dot]in</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">4340</td>
                                                    <td class="font_size">340</td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Gurpreet Gadhok</td>
                                                    <td class="font_size">Deputy Secretary (M &amp; T)</td>
                                                    <td class="font_size">gurpreet[dot]gadhok[at]nic[dot]in</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">4960</td>
                                                    <td class="font_size">143</td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Anil Jain</td>
                                                    <td class="font_size">Deputy Secretary (Extension)</td>
                                                    <td class="font_size">anil[dot]j[at]nic[dot]in</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">4679</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">M.K. Mishra</td>
                                                    <td class="font_size">Deputy Secretary (MIDH-Regular &amp; MRM-Add)</td>
                                                    <td class="font_size">mritunjaya[dot]m[at]nic[dot]in</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">4434</td>
                                                    <td class="font_size">434</td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Abhijit Chakraborty</td>
                                                    <td class="font_size">Deputy Secretary (MLC)</td>
                                                    <td class="font_size">abhijit169[at]nic[dot]in</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">339</td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Kailash Choudhary</td>
                                                    <td class="font_size">Deputy Secretary (GC)</td>
                                                    <td class="font_size">kailash[dot]c14[at]nic[dot]in</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">1127</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Ashish Malhotra</td>
                                                    <td class="font_size">Deputy Secretary (Admn, Pers, Parl)</td>
                                                    <td class="font_size">ashish[dot]malhotra[at]nic[dot]in</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">4350</td>
                                                    <td class="font_size">26</td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Rajesh Jaiswal</td>
                                                    <td class="font_size">Deputy Secretary (Finance)</td>
                                                    <td class="font_size">rajesh[dot]jaiswal[at]nic[dot]in</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">4149</td>
                                                    <td class="font_size">350</td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Sushil Pal Gahlaut</td>
                                                    <td class="font_size">Deputy Secretary (IFD)</td>
                                                    <td class="font_size">sp[dot]gahlaut[at]nic[dot]in</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">2050</td>
                                                    <td class="font_size">37</td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Shri Chandrajit Chatterjee</td>
                                                    <td class="font_size">Deputy Secretary (Budget)</td>
                                                    <td class="font_size">c[dot]chatterjee85[at]nic[dot]in</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">1155</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Sh. Madan Singh</td>
                                                    <td class="font_size">Deputy Controller of Accounts</td>
                                                    <td class="font_size">dca-agri[at]gov[dot]in</td>
                                                    <td class="font_size">011-23741360</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Vinay Awasthi</td>
                                                    <td class="font_size">Deputy Secretary (RFS)</td>
                                                    <td class="font_size">vinay[dot]awasthi[at]nic[dot]in</td>
                                                    <td class="font_size">011-23382454</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">4149</td>
                                                    <td class="font_size">350 Krishi Bhawan </td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Meghna</td>
                                                    <td class="font_size">PA</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">4748</td>
                                                    <td class="font_size">358-A</td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Moni sunder Baneriee</td>
                                                    <td class="font_size">Deputy Secretary (Seeds)</td>
                                                    <td class="font_size">ms[dot]banerjee67[at]nic[dot]in</td>
                                                    <td class="font_size">23386236</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">5018</td>
                                                    <td class="font_size">109 - B Winq</td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Sri Sanjai Kumar Mishra</td>
                                                    <td class="font_size">Deputy Secretary (Credit)</td>
                                                    <td class="font_size">sanjai[dot]mishra[at]nic[dot]in</td>
                                                    <td class="font_size">23389400</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">4845</td>
                                                    <td class="font_size">345 - B</td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                        </table>
                                        <div class="view-grouping-header font_size" style="font-weight:bold">DEPUTY COMMISSIONER</div>
                                        <table class="table table-bordered table-striped testdatatable">
                                            <tr>
                                                <th class="font_size"> <label for="Name">Name</label></th>
                                                <th class="font_size"><label for="Designation">Designation</label>
                                                <th class="font_size"><label for="Email">Email</label></th>
                                                <th class="font_size"><label for="Office">Office</label></th>
                                                <th class="font_size"><label for="Fax">Fax</label></th>
                                                <th class="font_size"><label for="EPABX">EPABX</label></th>
                                                <th style="min-width:100px" class="font_size"><label for="Room_No">Room No</label></th>
                                                <th class="font_size"><label for="Residence">Residence</label></th>
                                                
                                            </tr>

                                                <tr>
                                                    <td class="font_size">Dr. Maan Singh</td>
                                                    <td class="font_size">Deputy Commissioner (NRM/RFS)</td>
                                                    <td class="font_size">drmaansinghdc[at]gov[dot]in</td>
                                                    <td class="font_size">01123386692</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">106 ,Shastri Bhawan</td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Bipul Kr. Srivastava</td>
                                                    <td class="font_size">Dy. Commissioner (oil Seeds)</td>
                                                    <td class="font_size">srivastava[dot]bipul[at]nic[dot]in</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">1159</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">A.N. Meshram</td>
                                                    <td class="font_size">Deputy Commissioner (M&amp;T)</td>
                                                    <td class="font_size">arvind[dot]meshram[at]nic[dot]in</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">1110</td>
                                                    <td class="font_size">573</td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">C.R. Lohi</td>
                                                    <td class="font_size">Dy. Commissioner (M&amp;T)</td>
                                                    <td class="font_size">cr[dot]lohi[at]nic[dot]in</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">4492</td>
                                                    <td class="font_size">492</td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Dr. Rama Nand</td>
                                                    <td class="font_size">Deputy Commissioner (RFS)</td>
                                                    <td class="font_size">ramanand[at]gov[dot]in</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">5007</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Dr. B.V. Nageswara Rao</td>
                                                    <td class="font_size">Dy. Commissioner (RFS)</td>
                                                    <td class="font_size">bvn[dot]rao[at]nic[dot]in</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">4685</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Kamna R. Sharma</td>
                                                    <td class="font_size">Deputy Commissioner (Credit)</td>
                                                    <td class="font_size">kamna[dot]rajesh[at]gov[dot]in</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">4997</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Narender Kumar</td>
                                                    <td class="font_size">Deputy Commissioner (Crops)</td>
                                                    <td class="font_size">narender[dot]63[at]gov[dot]in</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">4411</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Shri Subhash Chandra Ram</td>
                                                    <td class="font_size">Deputy Commissioner (NRM/RFS)</td>
                                                    <td class="font_size">su[dot]chandra[at]gov[dot]in</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">5007</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">R.A.S Patel</td>
                                                    <td class="font_size">Deputy Commissioner (NRM/RFS)</td>
                                                    <td class="font_size">raspatel[at]nic[dot]in</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">5025</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Dr. Dilip Kr. Srivastava</td>
                                                    <td class="font_size">Deputy Commissioner (QC)</td>
                                                    <td class="font_size">dilipkumar[dot]srivastva[at]gov[dot]in</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">116, B-Wing</td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                        </table>
                                        <div class="view-grouping-header font_size" style="font-weight:bold">JOINT DIRECTOR</div>
                                        <table class="table table-bordered table-striped testdatatable">
                                            <tr>
                                                <th class="font_size"> <label for="Name">Name</label></th>
                                                <th class="font_size"><label for="Designation">Designation</label>
                                                <th class="font_size"><label for="Email">Email</label></th>
                                                <th class="font_size"><label for="Office">Office</label></th>
                                                <th class="font_size"><label for="Fax">Fax</label></th>
                                                <th class="font_size"><label for="EPABX">EPABX</label></th>
                                                <th style="min-width:100px" class="font_size"><label for="Room_No">Room No</label></th>
                                                <th class="font_size"><label for="Residence">Residence</label></th>
                                                
                                            </tr>

                                                <tr>
                                                    <td class="font_size">Dr. Deepak Kumar Yadav</td>
                                                    <td class="font_size">Assistant Director (NFSM)</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">4433</td>
                                                    <td class="font_size">433</td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Dr. Sudhir Kumar</td>
                                                    <td class="font_size">Joint Director (Mass Media)</td>
                                                    <td class="font_size">sudhir[dot]k34[at]gov[dot]in</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">4534</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Pankaj Sharma</td>
                                                    <td class="font_size">Assistant Director (MIDH)</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">4406</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Shri S.R. Ingle</td>
                                                    <td class="font_size">Joint Director (Mass Media)</td>
                                                    <td class="font_size">sanjivkumar[dot]ingle[at]gov[dot]in</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">2174</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Sh. Manoj Kumar Singh</td>
                                                    <td class="font_size">Joint Director</td>
                                                    <td class="font_size">manoj[dot]singh75[at]nic[dot]in</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">4348</td>
                                                    <td class="font_size">348</td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                        </table>
                                        <div class="view-grouping-header font_size" style="font-weight:bold">UNDER SECRETARIES &amp; EQUIVALENT</div>
                                        <table class="table table-bordered table-striped testdatatable">
                                            <tr>
                                                <th class="font_size"> <label for="Name">Name</label></th>
                                                <th class="font_size"><label for="Designation">Designation</label>
                                                <th class="font_size"><label for="Email">Email</label></th>
                                                <th class="font_size"><label for="Office">Office</label></th>
                                                <th class="font_size"><label for="Fax">Fax</label></th>
                                                <th class="font_size"><label for="EPABX">EPABX</label></th>
                                                <th style="min-width:100px" class="font_size"><label for="Room_No">Room No</label></th>
                                                <th class="font_size"><label for="Residence">Residence</label></th>
                                                
                                            </tr>

                                                <tr>
                                                    <td class="font_size">Chandan Kumar</td>
                                                    <td class="font_size">Under Secretary (Digital/IT)</td>
                                                    <td class="font_size">us-it[at]gov[dot]in</td>
                                                    <td class="font_size">23382926</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">1106</td>
                                                    <td class="font_size">39</td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Shri Dhrub Kumar</td>
                                                    <td class="font_size">Under Secretary (FW)</td>
                                                    <td class="font_size">dhrub[dot]kumar[at]nic[dot]in</td>
                                                    <td class="font_size">23383627</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">4440</td>
                                                    <td class="font_size">440</td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">T. Khaling</td>
                                                    <td class="font_size">Under Secretary (Oilseeds)</td>
                                                    <td class="font_size">t[dot]khaling[at]nic[dot]in</td>
                                                    <td class="font_size">23384551</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">4827</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">T. Kamzapau</td>
                                                    <td class="font_size">Under Secretary (Crops)</td>
                                                    <td class="font_size">rp[dot]tensing[at]nic[dot]in</td>
                                                    <td class="font_size">23384551</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">4827</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Umesh Kumar Sah</td>
                                                    <td class="font_size">Under Secretary (Pers-II)</td>
                                                    <td class="font_size">umeshr[dot]shah[at]nic[dot]in</td>
                                                    <td class="font_size">23389144</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">4637</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">V. Surendra</td>
                                                    <td class="font_size">Under Secretary (Pers.I)</td>
                                                    <td class="font_size">v[dot]surendra[at]nic[dot]in</td>
                                                    <td class="font_size">23388453</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">4629</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Achla Bhatia</td>
                                                    <td class="font_size">Under Secretary (Finance-III)</td>
                                                    <td class="font_size">achla[dot]bhatia[at]nic[dot]in</td>
                                                    <td class="font_size">23388453</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">2104</td>
                                                    <td class="font_size">356</td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Arun Kumar Singh</td>
                                                    <td class="font_size">Under Secretary (PP-I, Estt.)</td>
                                                    <td class="font_size">singh[dot]arun14[at]nic[dot]in</td>
                                                    <td class="font_size">23382922</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">4573</td>
                                                    <td class="font_size">573</td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Vijay Pratap Singh</td>
                                                    <td class="font_size">Under Secretary (Fin. IV)</td>
                                                    <td class="font_size">vijay[dot]pratap[at]nic[dot]in</td>
                                                    <td class="font_size">23389041</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">4850</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Aditya Pratap Yadav</td>
                                                    <td class="font_size">Under Secretary (GA)</td>
                                                    <td class="font_size">aditya[dot]yadav[at]nic[dot]in</td>
                                                    <td class="font_size">23384929	</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">4014</td>
                                                    <td class="font_size">14</td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Brajesh Godra</td>
                                                    <td class="font_size">Under Secretary (IFD)</td>
                                                    <td class="font_size">brajesh[dot]godra[at]nic[dot]in</td>
                                                    <td class="font_size">23383627</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">4440</td>
                                                    <td class="font_size">440</td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Ajit Kumar Singh</td>
                                                    <td class="font_size">Under Secretary (CDB &amp; NHB)</td>
                                                    <td class="font_size">ushorticulture-agri[at]gov[dot]in</td>
                                                    <td class="font_size">011-23382773</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">4514</td>
                                                    <td class="font_size">339, B- Wing, Krishi Bhawan	</td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">D. Ponni</td>
                                                    <td class="font_size">Under Secretary (Extension)</td>
                                                    <td class="font_size">ponni[dot]d[at]nic[dot]in</td>
                                                    <td class="font_size">23382013</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">2719</td>
                                                    <td class="font_size">17</td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Soumya Srikanth</td>
                                                    <td class="font_size">Under Secretary (GC)</td>
                                                    <td class="font_size">s[dot]srikanth[at]nic[dot]in</td>
                                                    <td class="font_size">23382926</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">4039</td>
                                                    <td class="font_size">39</td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Harit Kumar Shakya</td>
                                                    <td class="font_size">US (MIDH)</td>
                                                    <td class="font_size">haritk[dot]shakya[at]nic[dot]in</td>
                                                    <td class="font_size">23388795</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">2374</td>
                                                    <td class="font_size">457</td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Ram Naresh</td>
                                                    <td class="font_size">Under Secretary (Cash/Welfare)</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">4114</td>
                                                    <td class="font_size">14</td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Shri. S.S. Vagulaparham</td>
                                                    <td class="font_size">Under Secretary (Seeds)</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">23385784</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">4679</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Ajay Singh</td>
                                                    <td class="font_size">Under Secretary (RFS)</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">4678</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Anil Kumar Gupta</td>
                                                    <td class="font_size">Under Secretary (Fin.V)</td>
                                                    <td class="font_size">ak[dot]gupta[at]nic[dot]in</td>
                                                    <td class="font_size">23389207</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">4445</td>
                                                    <td class="font_size">445</td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Vinita Talwar</td>
                                                    <td class="font_size">Under Secretary (Credit-II)</td>
                                                    <td class="font_size">vinita[dot]talwar[at]nic[dot]in</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">4642</td>
                                                    <td class="font_size">27</td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Rajiv Sarswat</td>
                                                    <td class="font_size">Under Secretary (Fin.II)</td>
                                                    <td class="font_size">rajiv[dot]sarswat[at]nic[dot]in</td>
                                                    <td class="font_size">23389207</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">4445</td>
                                                    <td class="font_size">445</td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Ram Babu Mahato</td>
                                                    <td class="font_size">Under Secretary (M-II)</td>
                                                    <td class="font_size">ram[dot]mahato[at]nic[dot]in</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">4785</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Sunil Kumar</td>
                                                    <td class="font_size">Under Secretary (O&amp;M/PG/RTI)</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">23070047</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">2186</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Ashish Bagde</td>
                                                    <td class="font_size">Under Secretary (Mktg. II)</td>
                                                    <td class="font_size">b[dot]ashish[at]gov[dot]in</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">5507</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">K.S. Chitra</td>
                                                    <td class="font_size">Under Secretary (NRM)</td>
                                                    <td class="font_size">ks[dot]chitra[at]nic[dot]in</td>
                                                    <td class="font_size">23382013</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">5029</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Mohan Lal Meena</td>
                                                    <td class="font_size">Under Secretary (Mktg.I)</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">23389891</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">5505</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">A.K Vashist</td>
                                                    <td class="font_size">Under Secretary (Parl, E-3)</td>
                                                    <td class="font_size">aism[dot]25[at]gov[dot]in</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">4386</td>
                                                    <td class="font_size">356</td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Geetha Natarajan</td>
                                                    <td class="font_size">Under Secretary (Oil Seeds)</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">23071128</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">5554</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Pankaj Singh</td>
                                                    <td class="font_size">Under Secretary (IC-I)</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">23387848</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">4749</td>
                                                    <td class="font_size">478</td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Priya Ranjan Verma</td>
                                                    <td class="font_size">Under Secretary (IC-II)</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">23387848</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">4630</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Rakesh Kumar</td>
                                                    <td class="font_size">Under Secretary (Fin. VI)</td>
                                                    <td class="font_size">rakesh[dot]kumar39[at]nic[dot]in</td>
                                                    <td class="font_size">23071373</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">4329</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Vijay Soni</td>
                                                    <td class="font_size">Under Secretary (DM)</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">23389453, 23384555</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">4022</td>
                                                    <td class="font_size">22</td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Smt. Renu Mehra</td>
                                                    <td class="font_size">Under Secretary (E.III)</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">23382013, 9212210842</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">4017</td>
                                                    <td class="font_size">17</td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Sunil Kumar Swarnkar</td>
                                                    <td class="font_size">Under Secretary (FW)</td>
                                                    <td class="font_size">sk[dot]swarnkar[at]nic[dot]in</td>
                                                    <td class="font_size">23070047</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">4837</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Subodh Kumar Pankaj</td>
                                                    <td class="font_size">Under Secretary (AUU)</td>
                                                    <td class="font_size">subodh[dot]pankaj[at]nic[dot]in</td>
                                                    <td class="font_size">23070416</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">4634</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Chandra Shekhar Prasad</td>
                                                    <td class="font_size">Under Secretary (INM)</td>
                                                    <td class="font_size">chandra[dot]sp[at]nic[dot]in</td>
                                                    <td class="font_size">23381191</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">5061</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Shri Anil Kumar Meena</td>
                                                    <td class="font_size">Under Secretary (MIDH)</td>
                                                    <td class="font_size">anilkr[dot]meena[at]nic[dot]in</td>
                                                    <td class="font_size">23382773</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">4339</td>
                                                    <td class="font_size">339</td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Shri Kamal Arora</td>
                                                    <td class="font_size">Under Secretary (Policy)</td>
                                                    <td class="font_size">kamal[dot]arora[at]nic[dot]in</td>
                                                    <td class="font_size">23387375</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">5016</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">R.N. Soreitham</td>
                                                    <td class="font_size">Dy. Director</td>
                                                    <td class="font_size">Rn[dot]soreitham[at]gov[dot]in</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">2477</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Shekhar Bose</td>
                                                    <td class="font_size">Under Secretary (Coop)</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">1288</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Pushpa Kain</td>
                                                    <td class="font_size">Under Secretary (CA-V)</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">23382149</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">4585</td>
                                                    <td class="font_size">585</td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Raj Kumar</td>
                                                    <td class="font_size">Under Secretary (M&amp;T)</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">23381557</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">4478</td>
                                                    <td class="font_size">478</td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Amresh Kumar Jha</td>
                                                    <td class="font_size">Under Secretary (FW)</td>
                                                    <td class="font_size">akjha[dot]72[at]gov[dot]in</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">4440</td>
                                                    <td class="font_size">440</td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Shri Dinesh</td>
                                                    <td class="font_size">Under Secretary (Horticulture Technical)</td>
                                                    <td class="font_size">dinesh[dot]d13[at]nic[dot]in</td>
                                                    <td class="font_size">23389529</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">4477, 4403</td>
                                                    <td class="font_size"> 452-A</td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Ms. Kamini Tandekar</td>
                                                    <td class="font_size">Deputy Director</td>
                                                    <td class="font_size">kamini[dot]tandekar[at]nic[dot]in</td>
                                                    <td class="font_size">23380618</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">4584</td>
                                                    <td class="font_size">585</td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Shri Manoj Kumar Yadav</td>
                                                    <td class="font_size">Under Secretary (AIF)</td>
                                                    <td class="font_size">manojkumar[dot]yadav[at]nic[dot]in</td>
                                                    <td class="font_size">23386053</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">2726</td>
                                                    <td class="font_size">381</td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Shri S.S. Vagulaparnam</td>
                                                    <td class="font_size">Under Secretary (Seeds)</td>
                                                    <td class="font_size">sabrajan[dot]s[at]nic[dot]in</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">4410</td>
                                                    <td class="font_size">432</td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Shri Ram Kumar</td>
                                                    <td class="font_size">Under Secretary (EA)</td>
                                                    <td class="font_size">ram[dot]kumar66[at]nic[dot]in</td>
                                                    <td class="font_size">23389909</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">2723</td>
                                                    <td class="font_size">381</td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Gurvinder Singh</td>
                                                    <td class="font_size">Under Secretary (OIL SEED)</td>
                                                    <td class="font_size">gurvinder[dot]singh[at]nic[dot]in</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">4008</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Shri Ganesh Singh</td>
                                                    <td class="font_size">Under Secretary (RKVY)</td>
                                                    <td class="font_size">ganesh[dot]singh30[at]gov[dot]in</td>
                                                    <td class="font_size">23384322</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">4442</td>
                                                    <td class="font_size">442</td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                        </table>
                                        <div class="view-grouping-header font_size" style="font-weight:bold">ASSISTANT COMMISSIONERS</div>
                                        <table class="table table-bordered table-striped testdatatable">
                                            <tr>
                                                <th class="font_size"> <label for="Name">Name</label></th>
                                                <th class="font_size"><label for="Designation">Designation</label>
                                                <th class="font_size"><label for="Email">Email</label></th>
                                                <th class="font_size"><label for="Office">Office</label></th>
                                                <th class="font_size"><label for="Fax">Fax</label></th>
                                                <th class="font_size"><label for="EPABX">EPABX</label></th>
                                                <th style="min-width:100px" class="font_size"><label for="Room_No">Room No</label></th>
                                                <th class="font_size"><label for="Residence">Residence</label></th>
                                                
                                            </tr>

                                                <tr>
                                                    <td class="font_size">Dharmendra Gupta</td>
                                                    <td class="font_size">Assistant Commissioner (RFS)</td>
                                                    <td class="font_size">dharmendra[dot]gupta[at]nic[dot]in</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">4933</td>
                                                    <td class="font_size">542</td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Dr. K K Dash</td>
                                                    <td class="font_size">Assistant Commissioner(Crops)</td>
                                                    <td class="font_size">kk[dot]dash[at]gov[dot]in</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">4832</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Sreekant K S</td>
                                                    <td class="font_size">Assistant Commissioner (NRM)</td>
                                                    <td class="font_size">sreekant[dot]ks[at]gov[dot]in</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">1611</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Dr. Chander Mohan</td>
                                                    <td class="font_size">Assistant Commissioner (Seeds-III, VI)</td>
                                                    <td class="font_size">acseeds-agri[at]gov[dot]in</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">5513</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Dr. Satyendra Kumar Nayak</td>
                                                    <td class="font_size">Assistant Commissioner (Cooperation)</td>
                                                    <td class="font_size">satyendra[dot]nayak79[at]gov[dot]in</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">4403</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Vinod Giri</td>
                                                    <td class="font_size">Assistant Commissioner (MPS)</td>
                                                    <td class="font_size">b[dot]giri[at]nic[dot]in</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">4457</td>
                                                    <td class="font_size">457</td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Dr. Manda Verma</td>
                                                    <td class="font_size">Assistant Commissioner (NRM-II)</td>
                                                    <td class="font_size">m[dot]verma[at]nic[dot]in</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">2012</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">M. Gunasekaran</td>
                                                    <td class="font_size">Assistant Commissioner (Seeds)</td>
                                                    <td class="font_size">gunasekran[at]nic[dot]in</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">5516</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Dr. Maan Singh</td>
                                                    <td class="font_size">Assistant Commissioner (RFS)</td>
                                                    <td class="font_size">maansinghAC[at]gov[dot]in</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">5504</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td class="font_size">Dr. Mehraj Ali Shaikh</td>
                                                    <td class="font_size">Assistant Commissioner (NRM)</td>
                                                    <td class="font_size">ac[dot]nrm-agri[at]gov[dot]in</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size">1611</td>
                                                    <td class="font_size"></td>
                                                    <td class="font_size"></td>
                                                    
                                                </tr>
                                        </table>
                                    <div id="container" style="margin-left: 20px">
                                        <p></p>
                                        <p></p>
                                        <div class="pagination" style="margin-left: 400px">
                                            
                                            <div class="pagination-container"><ul class="pagination"><li class="active"><a>1</a></li><li><a href="/en/who?page=2">2</a></li><li><a href="/en/who?page=3">3</a></li><li><a href="/en/who?page=4">4</a></li><li><a href="/en/who?page=5">5</a></li><li class="PagedList-skipToNext"><a href="/en/who?page=2" rel="next">»</a></li></ul></div>
                                        </div>
                                    </div>
</form>                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<section class="content footer_logo">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="">
                    <div class="swiper mySwiper0">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide swiper-slide_" style="width:150px !important;height: 150px !important">
                                <a class="redirectconfirmation" href="http://cashlessindia.gov.in/" target="_blank"><img alt="cashlessindia" src="/public/images/cashlessindia.png"></a>
                            </div>
                            <div class="swiper-slide swiper-slide_" style="width:150px !important;height: 150px !important;">
                                <a class="redirectconfirmation"  href="https://pgportal.gov.in/" target="_blank"><img alt="public" src="/public/images/public.png"></a>
                            </div>

                            <div class="swiper-slide swiper-slide_" style="width:150px !important;height: 150px !important;">
                                <a class="redirectconfirmation"  href="https://igod.gov.in/" target="_blank"><img alt="webdirectory" src="/public/images/webdirectory.png"></a>
                            </div>
                            <div class="swiper-slide swiper-slide_" style="width:150px !important;height: 150px !important;">
                                <a class="redirectconfirmation"  href="https://www.digitalindia.gov.in/" target="_blank"><img alt="degitalindia" src="/public/images/degitalindia.png"></a>
                            </div>
                            <div class="swiper-slide swiper-slide_" style="width:150px !important;height: 150px !important;">
                                <a  class="redirectconfirmation" href="https://www.mygov.in/" target="_blank"><img alt="mygov" src="/public/images/mygov.png"></a>
                            </div>
                            <div class="swiper-slide swiper-slide_" style="width:150px !important;height: 150px !important;">
                                <a class="redirectconfirmation"  href="https://www.makeinindia.com/home" target="_blank"><img alt="makeinindia" src="/public/images/makeinindia.png" style="width:60%"></a>
                            </div>
                            
                            <div class="swiper-slide swiper-slide_" style="width:150px !important;height: 150px !important;">
                                <a class="redirectconfirmation"  href="https://data.gov.in/" target="_blank"><img alt="datagov" src="/public/images/datagov.png"></a>
                            </div>
                            <div class="swiper-slide swiper-slide_" style="width:150px !important;height: 150px !important;">
                                <a class="redirectconfirmation"  href="https://www.india.gov.in/" target="_blank"><img alt="indiagov" src="/public/images/indiagov.png"></a>
                            </div>

                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




<?php 
include 'include/footerr.php'; 
?>
  