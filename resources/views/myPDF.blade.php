<!DOCTYPE html>
<html>
<head>
    <title>Larave Generate Invoice PDF - Nicesnippest.com</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style type="text/css">
    body{
        font-family: 'Roboto Condensed', sans-serif;
    }
    .m-0{
        margin: 0px;
    }
    .p-0{
        padding: 0px;
    }
    .pt-5{
        padding-top:5px;
    }
    .pt-10{
        padding-top:10px;
    }
    .mt-10{
        margin-top:10px;
    }
    .mb-10{
        margin-bottom:10px;
    }
    .text-center{
        text-align:center !important;
    }
    .text-right{
        text-align:right !important;
    }
    .text-wrap{
        white-space: pre-wrap;
        white-space: -moz-pre-wrap;
        white-space: -pre-wrap;
        white-space: -o-pre-wrap;
        word-wrap: break-word;
    }
    .w-100{
        width: 100%;
    }
    .w-50{
        width:50%;   
    }
    .w-40{
        width:40%;   
    }
    .w-85{
        width:85%;   
    }
    .w-30{
        width:30%;   
    }
    .w-70{
        width:70%;   
    }
    .w-15{
        width:15%;   
    }
    .logo img{
        width:45px;
        height:45px;
        padding-top:30px;
    }
    .logo span{
        margin-left:8px;
        top:19px;
        position: absolute;
        font-weight: bold;
        font-size:25px;
    }
    .gray-color{
        color:#5D5D5D;
    }
    .text-bold{
        font-weight: bold;
    }
    .border{
        border:1px solid black;
    }
    table tr,th,td{
        border: 1px solid #d2d2d2;
        border-collapse:collapse;
        padding:7px 8px;
    }
    table tr th{
        background: #F4F4F4;
        font-size:15px;
    }
    table tr td{
        font-size:13px;
    }
    table{
        border-collapse:collapse;
    }
    .box-text p{
        line-height:10px;
    }
    .float-left{
        float:left;
    }
    .total-part{
        font-size:16px;
        line-height:12px;
    }
    .total-right p{
        padding-right:20px;
    }
    .line{
        width: 100%; 
        text-align: right; 
        border-bottom: 1px solid #000; 
        line-height: 0.1em;
        margin: 5px 0 10px; 
    } 

    .line-span { 
        background:#fff; 
        padding:0 10px; 
    }
    .topleft {
        vertical-align: top;
        text-align: left;
    }
    .notice{
        font-size:13px;
    }
</style>
<body>
    <div class="w-100">
        <div class="w-20 float-left ">
            <div><h4 class="m-0">KLANG LONGMEN (M) SDN.BHD.</h4><h6 class="m-0 line" ><span class="line-span">(486132-M)</span></h6><h5 class="m-0">Shaw Centrepoint, G-21, Jalan Melayu,<br> 41400 Klang, Selangor, Malaysia.<br><i class="fa fa-whatsapp" style="font-size:24px"></i> Whatsapp: +6011 - 564 80693</h5></div>
        </div>
        <div class="w-80 float-left"></div>
    </div>
    <div style="clear: both;"></div>
    <div class="add-detail mt-10">
        <div class="w-30 float-left mt-10">
        </div>
        <div class="w-40 float-left mt-10">
            <h3 class="text-center m-0 p-0">修理单<br>SERVICE RECEIPT</h3>
        </div>
        <div class="w-30 float-left mt-10">
            <p class="m-0 pt-5 text-right text-bold w-100">Receipt No - <span class="gray-color">202211-1</span></p>
            <p class="m-0 pt-5 text-right text-bold w-100">Date - <span class="gray-color">31/12/2022</span></p>
            <p class="m-0 pt-5 text-right text-bold w-100">Staff Name - <span class="gray-color">Kajib</span></p>
        </div>
    </div>
    <div style="clear: both;"></div>

    <div class="table-section bill-tbl w-100 mt-10">
        <table class="table w-100 mt-10">
            <tr>
                <td class="w-50">
                    <div class="text-bold">Name 姓名:</div>
                    <div class="text-center mt-10">Chong Teck Lam</div>
                </td>
                <td class="w-50">
                    <div class="text-bold">Brand 牌子:</div>
                    <div class="text-center mt-10">Seiko</div>
                </td>
            </tr>
            <tr>
                <td class="w-50">
                    <div class="text-bold">Contact Number 联系号码:</div>
                    <div class="text-center  mt-10">01133069690</div>
                </td>
                <td class="w-50">
                    <div class="text-bold">Warranty Card 保证书：</div>
                    <div class="text-center mt-10">No</div>
                </td>
            </tr>
        </table>
    </div>
    <div class="table-section bill-tbl w-100 mt-10">
        <table class="table w-100 mt-10">
            <tr>
                <td class="w-50 topleft" rowspan="2">
                    <div class="text-bold">REMARKS:</div>
                    <div class="text-center  mt-10">Images of the item are saved in the system<br> - Battery Replacement ( Not yet Paid ) <br>- Service ( TBC ) </h3></div>
                </td>
                <td class="w-50">
                    <div class="total-part">
                        <div class="total-left w-70 float-left" align="right">
                            <p>Estimated Price</p>
                            <p>Prepayment</p>
                            <p>Balance</p>
                        </div>
                        <div class="total-right w-30 float-left text-bold" align="right">
                            <p>TBC</p>
                            <p>RM 20</p>
                            <p>TBC</p>
                        </div>
                        <div style="clear: both;"></div>
                    </div> 
                </td>
            </tr>
        </table>
    </div>
    <div>
        <h4>CONDITIONS OF SERVICE</h4>
        <div class="w-50 notice">
            <li>Goods sold are not returnable or exchangable.</li>
            <li>Repair Warranty - 90 days on the manufacture defects. Physical damage and Water damage are not included</li>
            <li>Please inspect your goods immediately and inform us any issue that you notice upon the collection of your goods from our store. We do not take responsibility for any progression in damage for your goods that have been damaged by liquid and physical impact. Although unlikely, opening the your goods could set off further damage and in some cases may be very serious and irreparable.</li>
            <li>We shall notify you when the Device has been repaired and is available for collection from store. If the device has not been collected it will be kept for future collection. If necessary, we shall send a reminder and the device will be recycled if not collected by day 60.
        </div>
    </div>
    
        Receipt was created on a computer and is valid without the signature.
    
</body>
</html>
