    <?php 
    include "include/headerr.php"
    ?>


<head>
    <script src="/Scripts/dtjs/jquery.min.js"></script>
    
</head>

<style>

    /*td {
        font-size: 14px;
        width: 0%;
    }*/
    table#tblRecruitment td:last-child a {       
        color: blue;
    }
</style>

<section class="content">

    <div class="banner_slider banner_slider_one">

        <div class="swiper mySwiper">

            <div class="swiper-wrapper">

                <div class="swiper-slide">

                     <img alt="banner" src="assets/images/banner/breadcrumb-banner-1.jpg" style="width:100%">

                </div>




            </div>

            <div class="swiper-pagination"></div>

        </div>

    </div>

</section>


<section class="ab_msec">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12">
                <nav class="breadcrumb1" aria-label="breadcrumb">
                    <ol class="breadcrumb font_size">
                        <li class="breadcrumb-item">
                            <a href="index.php">
                                <img alt="Home" src="assets/images/social/home-icon2.png" class="homeIcon">Home
                            </a>
                        </li>


                        <li class="breadcrumb-item active" aria-current="page">Recruitments</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <div class="container">

        <div class="footer_content">
            <h4 class="font_size pb-2">Recruitments</h4>
        </div>

        <div class="row" style=" margin-bottom: 45px;">
            <div class="col-12">
                <div>
                    <h3 class="font_size" style="font-size: inherit; font-weight: bold; "></h3>
                </div>
                <div class="col-md-6" style="display:flex;">
                    <div class="col-md-4">
                        <select class="form-control" id="ddlVacancy_Type">
                            <option value="active">Active</option>
                            <option value="N">Archive</option>
                            <option value="">All</option>
                        </select>
                    </div>
                    <div class="col-md-2" style="margin-left: 10px;">
                        <button class="form-control btn-info" id="btnApply">Apply</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="form-control" id="divRecruitment" style="display:none;">
            <div class="row">
                <table id="tblRecruitment" class="table table-striped table-bordered table-hover dataTable no-footer" style="width:100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th style="width: 10% !important">Sr. No</th>
                            <th style="width: 40% !important">Title</th>
                            <th style="width: 10% !important">Start Date</th>
                            <th style="width: 10% !important">End Date</th>
                            <th style="width: 10% !important">Publish Date</th>
                            <th style="width: 20% !important">Details</th>
                        </tr>
                    </thead>
                    <tbody id="tbodyRecruitment">
                        <tr>
                            <td>1</td>
                            <td>Application are invited for the engagement of One Consultant to be filled on a purely contractual basis for working in the Directorate of Wheat Development (DWD), Gurugram under National Food Security Mission(NFSM) scheme during 2023-24.</td>
                            <td>03-04-2023</td>
                            <td>24-04-2023</td>
                            <td>03-04-2023</td>
                            <td>Download (3.42MB) pdf</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="Pager"></div>
        </div>
    </div>
</section>



<script type="text/javascript">
    $(document).ready(function () {
        bindData();
    });

    var bindData = function (type) {
        var type = $('#ddlVacancy_Type :selected').val();
        $("#divRecruitment").show();        
        $("#tblRecruitment").DataTable({
            bLengthChange: true,
            /* lengthMenu: [[2, 5, 10, -1], [2, 5, 10, "All"]],*/
            bFilter: false,
            bSort: true,
            bPaginate: true,
            bDestroy: true,

            "ajax": {
               // "url": '/agricoop/en/getRecruitmentDetail?vacancy_type=' + type,
                //local
                "url": '/en/getRecruitmentDetail?vacancy_type=' + type,
                "type": "POST",
                "datatype": "json"
            },

            responsive: true,

            "columns": [
                {
                    data: null,
                    render: (data, type, row, meta) => meta.row + 1
                },
                { "data": "title" },
                
                { "data": "StartDate" },
                { "data": "last_date" },
                { "data": "publish_date" },
                {
                    "data": "document_name",

                    "render": function (data, type, full, meta) {
                        var paths = full.document_path.split(',');
                        var downloadtext = full.downloadtext.split(',');
                        var aaa = '';
                        $.each(paths, function (i, value) {
                           
                            if (aaa == "") {
                                aaa = ' <a href="' + value + '" target="_blank">' + full.downloadtext + '</a> '
                            }
                            else {
                                aaa = aaa + '  <a href="' + value + '" target="_blank">' + full.downloadtext + '</a> '
                            }

                        });
                        return aaa


                    //"render": function (data, type, full, meta) {
                    //    var paths = full.document_path.split(',');
                    //    var downloadtext = full.downloadtext.split(',');
                    //    var aaa = '';
                    //    $.each(paths, function (i, value) {
                    //        if (aaa == "") {
                    //            aaa = ' <a href="' + value + '" target="_blank">' + downloadtext[i] + '</a> '
                    //        }
                    //        else {
                    //            aaa = aaa + '  <a href="' + value + '" target="_blank">' + downloadtext[i] + '</a> '
                    //        }

                    //    });
                    //    return aaa


                        //return (full.document_path==""?"":'<a class="button-link" href="' + full.document_path + '" target="_blank">' + full.downloadtext + '</a>');
                    }
                }


            ],
            drawCallback: function (settings) {
                var pagination = $(this).closest('.dataTables_wrapper').find('.dataTables_paginate');
                pagination.toggle(this.api().page.info().pages > 1);
                var paginateInfo = $(this).closest('.dataTables_wrapper').find('.dataTables_info');
                paginateInfo.toggle(this.api().page.info().pages > 1);
            }
        });

    };


    let searchParams = new URLSearchParams(window.location.search);
    let param = searchParams.get('vacancy_type');
    if (param != null) {
        $('#ddlVacancy_Type').val(param);

    }

    $('#btnApply').click(function (e) {

        bindData();

    });


    function getsize(fileUrl){
        var params = {
            method: "GET",
            headers: {
                Range: "bytes=0-0",
            },
        };
        var response = UrlFetchApp.fetch(fileUrl, params);
        var headers = response.getHeaders();
        var fileSizeString = headers['Content-Range']
        var fileSize = +headers['Content-Range'].split("/")[1];
        alert(fileSize);
        return fileSize;
    }

</script>











<?php
include "include/footerr.php"
?>