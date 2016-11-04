
    <style>

        table {
            border-collapse: collapse;
            border-spacing: 0;
            float:left;

        }
        table .num {
            float: left;
            width: 100%;
            height: 20px;
            line-height: 20px;
            text-align: center;
						font-size:14px
        }
        .tab{
            height:100%;
						background:#fff
        }
				.tab:after{
					content:'';
					clear:both;
					display:block;
					height:0;
					overflow:hidden}
        table td table td{
            width:54px;
            max-height:67px

        }
				.useable{
					background:#fff}
        .top_title{
					line-height:40px;
					background:#f3f3f3}
        table .yes_yd {
            color: #ff7466;
            float: left;
            width: 100%;
            height: 25px;
            text-align: center;
						font-size:12px;
						font-weight:500
        }
        .tab table .line_yes_yd{
            color: #f60;
            float: left;
            width: 100%;
            line-height: 16px;
            text-align: center;
            height: 16px;
        }
        .tab table .roombalance_b{
            color: #f60;
            font-weight: 300;
            font-size:11px;
        }
        .kucun{
            float: left;
            color: #ccc;
            width: 100%;
            height: 20px;
            line-height: 20px;
            text-align: center;
            font-weight: 400;
        }
        #tabl tr td{
            height: 50px;
        }
        .nouseable{
            color: #d7d7d7;
        }
        .current{
            background-color:#ffc35b;
            color:#fff
        }
    </style>


<header>
    <div class="header_top">

        <div class="st_back close_calendar"><a href="javascript:;"></a></div>
        <h1 class="tit">
            选择日期
        </h1>

    </div>
</header>
{$calendar}
<input type="hidden" id="typeid" value="{$typeid}">

