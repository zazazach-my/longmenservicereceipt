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
    .m-5{
        margin: 5px;
    }
    .p-0{
        padding: 0px;
    }
    .p-5{
        padding: 5px;
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
    .mt-30{
        margin-top:30px;
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
    .w-48{
        width:48%;   
    }
    .w-4{
        width:4%;   
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
    .float-right{
        float:right;
    }
    .total-part{
        font-size:16px;
        line-height:12px;
    }
    .total-right p{
        padding-right:20px;
    }
    .line-right{
        width: 100%; 
        text-align: right; 
        border-bottom: 1px solid #000; 
        line-height: 0.1em;
        margin: 5px 0 10px; 
    }
    .line-center{
        width: 100%; 
        text-align: center; 
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
            <div><span class="m-0 text-bold ">KLANG LONGMEN (M) SDN.BHD.</span><h6 class="m-0 line-right" ><span class="line-span">(486132-M)</span></h6><span class="m-0 notice">Shaw Centrepoint, G-21, Jalan Melayu,<br> 41400 Klang, Selangor, Malaysia.<br><i class="fa fa-whatsapp" style="font-size:24px"></i> Whatsapp: +6011 - 564 80693</sapi_windows_cp_conv></div>
        </div>
        <div class="w-80 float-right">
            <h1 class="text-right ">修理单<br>Service Receipt</h1>
            <p class="m-0 pt-5 text-right text-bold w-100">Receipt No - <span class="gray-color">{{$invoicenumber}}</span></p>
            <p class="m-0 pt-5 text-right text-bold w-100">Date - <span class="gray-color">{{$invoicedate}}</span></p>
            <p class="m-0 pt-5 text-right text-bold w-100">Staff Name - <span class="gray-color">{{$user_name}}</span></p>
        </div>
    </div>
    <div style="clear: both;"></div>

    <div class="table-section bill-tbl w-100 mt-10">
        <table class="table w-100 mt-10">
            <tr>
                <td class="w-50">
                    <div class="text-bold">Name 姓名:</div>
                    <div class="text-center mt-10" style="font-size: 20px;">{{$customer_name}}</div>
                </td>
                <td class="w-50">
                    <div class="text-bold">Brand 牌子:</div>
                    <div class="text-center mt-10" style="font-size: 20px;">{{$brand}}</div>
                </td>
            </tr>
            <tr>
                <td class="w-50">
                    <div class="text-bold">Contact Number 联系号码:</div>
                    <div class="text-center  mt-10" style="font-size: 20px;">{{$customer_number}}</div>
                </td>
                <td class="w-50">
                    <div class="text-bold">Warranty Card 保证书：</div>
                    <div class="text-center mt-10" style="font-size: 20px;">{{$warranty_card}}</div>
                </td>
            </tr>
        </table>
    </div>
    <div class="table-section bill-tbl w-100 mt-10">
        <table class="table w-100 mt-10">
            <tr>
                <td class="w-50 topleft" rowspan="2" height="370">
                    <div class="text-bold">REMARKS 注明:</div>
                    <div class="text-center  mt-10" style="font-size: 20px;"><pre><code>{{$remark}}</pre></code></div>
                </td>
                <td class="w-50" height="370">
                    <div class="total-part">
                        <div class="total-left w-70 float-left" align="right">
                            <p>Estimated Price 预估价格 - </p>
                            <p>Deposit 订金 - </p>
                            <p>Balance 未结余额 -</p>
                        </div>
                        <div class="total-right w-30 float-left text-bold" align="right">
                            <p>{{$cost}}</p>
                            <p>{{$prepayment}}</p>
                            <p>TBC</p>
                        </div>
                        <div style="clear: both;"></div>
                    </div> 
                </td>
            </tr>
        </table>
    </div>
    <div class="w-100 p-5"> 
        <div class="w-48 float-left notice">
            <h3>CONDITIONS OF SERVICE</h3>
            <li>Goods sold are not returnable or exchangable.</li>
            <li>Repair Warranty - 90 days on the manufacture defects. Physical damage and Water damage are not included</li>
            <li>Please inspect your goods immediately and inform us any issue that you notice upon the collection of your goods from our store. We do not take responsibility for any progression in damage for your goods that have been damaged by liquid and physical impact. Although unlikely, opening the your goods could set off further damage and in some cases may be very serious and irreparable.</li>
            <li>We shall notify you when your goods has been repaired and is available for collection from store. If the your goods has not been collected it will be kept for future collection. If necessary, we shall send a reminder and your goods will be recycled if not collected by day 60.
        </div>
        <div class="w-48 float-right notice">
            <h3>服务条规</h3>
            <li>售出的商品不可退换货。</li>
            <li>维修保修 - 在90天期间有材质和制造的缺陷。不包括不当使用，意外损害或自然损耗（如电池）</li>
            <li>在本店取货时，请立即检查您的物品，如发现有任何问题必须立刻告知我们。稍后您的物品因液体和意外或自然损耗而损坏，我们概不负责。尽管不太可能，但打开您的物品可能会引发进一步的损坏，在某些情况下可能会非常严重且无法弥补。</li>
            <li>当您的物品已修好并可以从商店取货时，我们会通知您。我们将发送提醒，如果您的货物在第 60 天之前未被取走，我们将对其进行回收。</li>
        </div>
    </div>
    <div style="clear: both;"></div>

    <div class="line-center" style="margin-top: 30px;"><span class="line-span">Receipt was created on a computer and is valid without the signature.</span></div>
    
</body>
</html>
