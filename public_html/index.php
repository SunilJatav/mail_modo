<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
$json = '{

    "data": [

        {

            "_id": "5d309ea2048c0a3321692de9",

            "awbno": "68816235",

            "carrier": "Safexpress",
            "pickup_date": "2019-07-11 00:00:00" ,

            "current_status": "Out for Delivery",

            "current_status_code": "OOD", 
            "order_data": "",

            "recipient": "", 

            "extra_fields": {

                "expected_delivery_date": "1970-01-01 05:30:00" 

            },

            "from": "WHITEFIELD",

            "to": "NEW DELHI", 

            "time": "2019-07-18 02:13:57",

            "scan": [ 

                {

                    "time": "2019-07-18 02:13:57",

                    "location": "Consignment Out for Delivery",
                    "status_detail": "OUT FOR DELIVERY"

                },

                {

                    "time": "2019-07-17 23:02:24",

                    "location": "Waybill Undelivered",

                    "status_detail": "UN-DELIVERED"

                },

                {

                    "time": "2019-07-17 03:59:19",

                    "location": "Consignment Out for Delivery",

                    "status_detail": "OUT FOR DELIVERY"

                },

                {

                    "time": "2019-07-15 18:49:46",

                    "location": "Waybill Undelivered",

                    "status_detail": "UN-DELIVERED"

                },
                 {

                    "time": "2019-07-15 04:14:20",

                    "location": "Consignment Out for Delivery",

                    "status_detail": "OUT FOR DELIVERY"

                },

                {

                    "time": "2019-07-13 20:41:28",

                    "location": "Consignment Arrived at DELHI",

                    "status_detail": "ARRIVED AT DESTINATION"

                },

                {

                    "time": "2019-07-11 07:01:53",

                    "location": "Consignment In Transit To Next Hub",

                    "status_detail": "IN-TRANSIT"

                },

                {

                    "time": "2019-07-11 03:05:26",

                    "location": "Consignment Arrived at BANGALORE",

                    "status_detail": "IN-TRANSIT"

                },
                 {

                    "time": "2019-07-11 00:00:00",

                    "location": "Waybill Generated at WHITEFIELD",

                    "status_detail": "BOOKED"

                }

            ],
            "tracking_url": "https://s.shipway.in/21759772/68816235",

            "createdAt": "2019-07-18T16:30:26.155Z"

        }


    ]

}';

$convert_data = json_decode($json);
?>
<html>
    <head>
        <title>Mailmodo</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" crossorigin="anonymous">
        <style>
            .header{
                height: 60px;
                background-color: #666565;
            }
            .dashboard{
                height: 100px;
                background-color: whitesmoke;
            }
            .img{
                margin-left: 12%;
                margin-top: 3%;
            }
            .logo_text{
                font-weight: bolder;
                font-size: larger;
            }
            .title{
                float: right;
                margin-top: 30px;
                margin-right: 130px;
                color: black;
            }
            .img_div{
                margin-left: 38px;
                margin-top: 8px;
            }
            .profile{
                float: right;
            }
            .font{
                font-size: 18px;
                font-weight: 600;
                margin-right: 10px;
                color: black;
            }
            .header2{
                margin-top: 36px;
            }
            .row3{
                margin-left: 30%;
                height: 120px;  
                margin-top: 40px;
            }
            .block{
                background-color: #416aff;
                height: 110px;
                width: 110px;
                margin-right: 25px;
                border-radius: 7px;
            }
            .block_num{
                color: white;
                font-size: xx-large;
            }
            .num2{
                color: black !important;
            }
            .num_div{
                margin-top: 30px;
            }
            .block_font{
                color: white;
                font-size: 18px;
            }
            .block_name{
                margin-top: 10px;
            }
            .tables{
                height: 570px;
                background-color: #efefff;
            }
            .timeline{
                background-color: red;
            }
            .tablerow{
                margin-top: 30px;
            }
            .table_head{
                color: gray;
                font-weight: 200;
                font-family: sans-serif;
                font-size: smaller;
            }
            .block0{
                background-color: #b2e3ffa6 !important;
            }
            .status_col{
                color: green;
            }
            .table_col{
                vertical-align: middle !important;
            }

            body{margin-top:20px;}
            .timeline {
                border-left: 3px solid #727cf5;
                border-bottom-right-radius: 4px;
                border-top-right-radius: 4px;
                background: rgba(114, 124, 245, 0.09);
                margin: 0 auto;
                letter-spacing: 0.2px;
                position: relative;
                line-height: 1.4em;
                font-size: 1.03em;
                padding: 50px;
                list-style: none;
                text-align: left;
                max-width: 40%;
            }

            @media (max-width: 767px) {
                .timeline {
                    max-width: 98%;
                    padding: 25px;
                }
            }

            .timeline h1 {
                font-weight: 300;
                font-size: 1.4em;
            }

            .timeline h2,
            .timeline h3 {
                font-weight: 600;
                font-size: 1rem;
                margin-bottom: 10px;
            }

            .timeline .event {
                border-bottom: 1px dashed #e8ebf1;
                padding-bottom: 25px;
                margin-bottom: 25px;
                position: relative;
            }

            @media (max-width: 767px) {
                .timeline .event {
                    padding-top: 30px;
                }
            }

            .timeline .event:last-of-type {
                padding-bottom: 0;
                margin-bottom: 0;
                border: none;
            }

            .timeline .event:before,
            .timeline .event:after {
                position: absolute;
                display: block;
                top: 0;
            }

            .timeline .event:before {
                left: -207px;
                content: attr(data-date);
                text-align: right;
                font-weight: 100;
                font-size: 0.9em;
                min-width: 120px;
            }

            @media (max-width: 767px) {
                .timeline .event:before {
                    left: 0px;
                    text-align: left;
                }
            }

            .timeline .event:after {
                -webkit-box-shadow: 0 0 0 3px #727cf5;
                box-shadow: 0 0 0 3px #727cf5;
                left: -55.8px;
                background: #fff;
                border-radius: 50%;
                height: 9px;
                width: 9px;
                content: "";
                top: 5px;
            }

            @media (max-width: 767px) {
                .timeline .event:after {
                    left: -31.8px;
                }
            }
            .timeline2{
                min-width: -webkit-fill-available;
                margin-right: 16px;
                margin-left: 23px;
            }

            .rtl .timeline {
                border-left: 0;
                text-align: right;
                border-bottom-right-radius: 0;
                border-top-right-radius: 0;
                border-bottom-left-radius: 4px;
                border-top-left-radius: 4px;
                border-right: 3px solid #727cf5;
            }

            .rtl .timeline .event::before {
                left: 0;
                right: -170px;
            }

            .rtl .timeline .event::after {
                left: 0;
                right: -55.8px;
            }
            .left_timeline{
                margin-left: 15%;
                margin-top: -49px;
            }
            .img2{
                margin-left: 11px;
                margin-bottom: 6px;
            }
            .img3{
                margin-left: -41px;
            }
            .table_row{
                height: 60px;
            }
        </style>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 header">

                </div>
            </div>
            <div class="row">
                <div class="col-md-3 dashboard">
                    <div class="img_div">
                        <img src="FrontendAssets/logo.svg" class="img">
                        <div class="title">
                            <span class="logo_text">Intuguin</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-9 dashboard">
                    <div class="row">
                        <div class="col-md-4 profile dashboard">
                            <div class="header2">
                                <span class="font">Home</span>
                                <span class="font">Brands</span>
                                <span class="font">Transporter</span>
                                <img class="font" src="FrontendAssets/profile.svg">
                                <span class="font">-</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 row3">
                    <div class="row">
                        <div class="col-md-2 block">
                            <div class="block_name">
                                <span class="block_font">DEL</span>
                            </div>
                            <div class="num_div">
                                <span class="block_num">916</span>
                            </div>
                        </div>
                        <div class="col-md-2 block block0">
                            <div class="block_name">
                                <span class="block_font num2">INT</span>
                            </div>
                            <div class="num_div">
                                <span class="block_num num2">232</span>
                            </div>
                        </div>
                        <div class="col-md-2 block block0">
                            <div class="block_name">
                                <span class="block_font num2">OOD</span>
                            </div>
                            <div class="num_div">
                                <span class="block_num num2">342</span>
                            </div>
                        </div>
                        <div class="col-md-2 block block0">
                            <div class="block_name">
                                <span class="block_font num2">DEX</span>
                            </div>
                            <div class="num_div">
                                <span class="block_num num2">916</span>
                            </div>
                        </div>
                        <div class="col-md-2 block block0">
                            <div class="block_name">
                                <span class="block_font num2">NFI</span>
                            </div>
                            <div class="num_div">
                                <span class="block_num num2">916</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row tablerow">
                <div class="col-md-4 timeline">
                    <div class="row">
                        <div class="col-md-12 left_timeline">
                            <div class="card">
                                <div class="img2">
                                    <img src="FrontendAssets/destination.svg" class="img img2">
                                </div>
                                <div class="card-body">
                                    <div id="content">
                                        <ul class="timeline timeline2">
                                            <li class="event" data-date="12:30 - 1:00pm">
                                                <h3>Delivered</h3>
                                            </li>
                                            <li class="event" data-date="2:30 - 4:00pm">
                                                <h3>Out for Delivery</h3>
                                            </li>
                                            <li class="event" data-date="5:00 - 8:00pm">
                                                <h3>Arrived at Mysore</h3>  
                                            </li>
                                            <li class="event" data-date="8:30 - 9:30pm">
                                                <h3>Arrived at Bangalore</h3>   
                                            </li>
                                            <li class="event" data-date="8:30 - 9:30pm">
                                                <h3>Transit to Next Hub</h3>   
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="img3">
                                    <img src="FrontendAssets/warehouse.svg" class="img">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 tables" id="tableList">
                    
                </div>
            </div>
        </div>
        <script>
            var list = JSON.parse(`<?php echo json_encode($convert_data) ?>`);
            var scanList = list.data[0].scan;
            var extradata = list.data[0];
            console.log(list, scanList, 'scanList');
            var table =
                    `
    <table class="table table-hover">
          <thead>
                            <tr class="table_row">
                                <th class="table_head">AWB NUMBER</th>
                                <th class="table_head">TRANSPORTER</th>
                                <th class="table_head">SOURCE</th>
                                <th class="table_head">DESTINATION</th>
                                <th class="table_head">BRAND</th>
                                <th class="table_head">START DATE</th>
                                <th class="table_head">ETD</th>
                                <th class="table_head">STATUS</th>
                            </tr>
                        </thead>
            
     `;
            for (var i = 0, scanList; i <= scanList.length; i++) {
                var row = scanList[i];
                console.log(row, extradata, 'row');
                if (row) {
                    table += `<tr class="table_row">
                             <td class="table_col">${extradata.awbno}</td>
                             <td class="table_col">${extradata.awbno}</td>
                     </tr>`;
                }
            }

            table += `</table>`;
            document.getElementById("tableList").innerHTML = table;
//            $('table').html()

        </script>
    </body>
</html>