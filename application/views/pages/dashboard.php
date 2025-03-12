        <!-- MAIN SECTION -->
        <div class="pc-container">
            <div class="pc-content">
                <!-- BREADCRUMB -->
                <div class="page-header">
                    <div class="page-block">
                        <div class="row align-items-center">
                        <div class="col-md-12">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?= BASE_URL . 'v2/' ?>">Beranda</a></li>
                                <!-- <li class="breadcrumb-item"><a href="javascript: void(0)">Dashboard</a></li> -->
                                <li class="breadcrumb-item" aria-current="page">Dashboard</li>
                            </ul>
                        </div>
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h2 class="mb-0">Beranda</h2>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <!-- END OF BREADCRUMB-->

                <!-- MAIN CONTENT -->
                <div class="row">
                    <!-- CARD DESCRIPTIONS -->
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12 col-xl-12 d-flex align-items-center">
                                        <img src="<?= BASE_THEME; ?>images/institution/<?= $instansi['logo']; ?>" alt="user-image" class="user-avatar me-3 wid-100" />
                                        <div class="ms-3">
                                            <h3 class="fw-bold mb-1">
                                                <?= strtoupper($instansi['nama_instansi']); ?>
                                                <span class="badge bg-light-success ms-2 theme-version"><?= $instansi['status']; ?></span>
                                            </h3>
                                            <p class="mb-2"><?= $instansi['alamat']; ?></p>
                                            <p class="mb-0">
                                                <span class="pc-micon"><a class="pc-link link-success" href="https://pa-sumbawabesar.go.id/" target="blank"><i class="ti ti-world"></i> <?= $instansi['website']; ?> </a></span>
                                                <span class="pc-micon">&nbsp;&nbsp;|&nbsp;&nbsp;  <i class="ti ti-mail"></i> <?= $instansi['email']; ?> </span>
                                                <span class="pc-micon">&nbsp;&nbsp;|&nbsp;&nbsp;  <i class="ti ti-phone"></i> <?= $instansi['telp']; ?> </span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END OF CARD DESCRIPTION -->

                    <!-- CARD RESUME COUNTER 1 -->
                    <div class="col-md-6 col-xxl-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1 ms-3">
                                        <h6 class="mb-0 fs-5">Jumlah Surat Masuk</h6>
                                    </div>
                                </div>
                                <div class="bg-body p-3 mt-3 rounded">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="avtar avtar-l bg-light-success p-2 rounded">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="96" height="96" viewBox="0 0 24 24" stroke-width="2" stroke="#28a745" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                                <circle cx="12" cy="12" r="9" />
                                                <path d="M12 8v8" />
                                                <path d="M8 12l4 4l4 -4" />
                                            </svg>
                                        </div>
                                        <div class="d-flex flex-column align-items-end me-3">
                                            <h5 class="mb-0 fs-2 fw-bold text-end"><?= number_format($summary['surat_masuk'], 0, ",", "."); ?></h5>
                                            <p class="text-muted mb-0 fs-7">Surat</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- END OF CARD RESUME COUNTER 1  -->

                    <!-- CARD RESUME COUNTER 2 -->
                    <div class="col-md-6 col-xxl-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1 ms-3">
                                        <h6 class="mb-0 fs-5">Jumlah Surat Keluar</h6>
                                    </div>
                                </div>
                                <div class="bg-body p-3 mt-3 rounded">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="avtar avtar-l bg-light-danger p-2 rounded">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="96" height="96" viewBox="0 0 24 24" stroke-width="2" stroke="#dc2625" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                                <circle cx="12" cy="12" r="9" />
                                                <path d="M12 16V8" />
                                                <path d="M16 12l-4 -4l-4 4" />
                                            </svg>
                                        </div>
                                        <div class="d-flex flex-column align-items-end me-3">
                                            <h5 class="mb-0 fs-2 fw-bold text-end"><?= number_format($summary['surat_keluar'], 0, ",", "."); ?></h5>
                                            <p class="text-muted mb-0 fs-7">Surat</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END OF CARD RESUME COUNTER 2 -->

                    <!-- CARD RESUME COUNTER 3 -->
                    <div class="col-md-6 col-xxl-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1 ms-3">
                                        <h6 class="mb-0 fs-5">Jumlah Disposisi</h6>
                                    </div>
                                </div>
                                <div class="bg-body p-3 mt-3 rounded">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="avtar avtar-l bg-light-primary p-2 rounded">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="96" height="96" viewBox="0 0 24 24" stroke-width="2" stroke="#0d6efd" fill="none" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-pin">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path d="M15 4.5l-4 4l-4 1.5l-1.5 1.5l7 7l1.5 -1.5l1.5 -4l4 -4" />
                                                <path d="M9 15l-4.5 4.5" />
                                                <path d="M14.5 4l5.5 5.5" />
                                            </svg>         
                                        </div>
                                        <div class="d-flex flex-column align-items-end me-3">
                                            <h5 class="mb-0 fs-2 fw-bold text-end"><?= number_format($summary['disposisi'], 0, ",", "."); ?></h5>
                                            <p class="text-muted mb-0 fs-7">Disposisi</p>
                                        </div>
                                        <!-- <h5 class="mb-0 fs-2 fw-bold text-end me-3">2.004</h5>
                                        <p class="text-muted mb-0">Disposisi</p> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END OF CARD RESUME COUNTER 3 -->

                    <!-- CARD RESUME COUNTER 4 -->
                    <div class="col-md-6 col-xxl-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1 ms-3">
                                        <h6 class="mb-0 fs-5">Jumlah Klasifikasi Surat</h6>
                                    </div>
                                </div>
                                <div class="bg-body p-3 mt-3 rounded">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="avtar avtar-l bg-light-warning p-2 rounded">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="96" height="96" viewBox="0 0 24 24" stroke-width="2" stroke="#ffc107" fill="none" stroke-linecap="round" class="icon icon-tabler icons-tabler-outline icon-tabler-sitemap">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path d="M3 15m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v2a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" />
                                                <path d="M15 15m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v2a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" />
                                                <path d="M9 3m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v2a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" />
                                                <path d="M6 15v-1a2 2 0 0 1 2 -2h8a2 2 0 0 1 2 2v1" />
                                                <path d="M12 9l0 3" />
                                            </svg>
                                        </div>
                                        <div class="d-flex flex-column align-items-end me-3">
                                            <h5 class="mb-0 fs-2 fw-bold text-end"><?= number_format($summary['klasifikasi_surat'], 0, ",", "."); ?></h5>
                                            <p class="text-muted mb-0 fs-7">Klasifikasi</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END OF CARD RESUME COUNTER 4 -->

                    <div class="col-lg-9">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between">
                                    <h6 class="mb-0 fs-5" id="rekapTitle">Rekapitulasi Surat </h6>
                                    <select class="form-select form-select-sm w-auto text-md" aria-label="Default select example" id="listTahun">
                                        <!-- GENERATED FROM AJAX -->
                                    </select>
                                </div>
                                <div id="rekapitulasi-surat-graph"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between">
                                    <h6 class="mb-0 fs-5" id="sifatSuratTitle">Sifat Surat </h6>
                                    <select class="form-select form-select-sm w-auto" disabled="disabled" aria-label="Default select example" id="">
                                        <!-- GENERATED FROM AJAX -->
                                    </select>
                                </div>
                                <div class="" id="sifat-surat-graph"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END OF MAIN CONTENT -->
            </div>
        </div>
        <!-- END OF MAIN SECTION -->
        
        <script>
            $(function() {
                const base_theme = '<?= BASE_THEME; ?>';
                const base_url = '<?= BASE_URL ?>';
                let rekapSuratChart = null;
                let sifatSuratChart = null;
                let thisYear = new Date().getFullYear();

                $("#rekapTitle").text("Rekapitulasi Surat Tahun " + thisYear);

                $('#listTahun').on('change', function() {
                    thisYear = $(this).val();
                    $('#listTahun option').prop('selected', false);
                    $('#listTahun option[value="' + thisYear + '"]').prop('selected', true);
                    $("#rekapTitle").text("Rekapitulasi Surat Tahun " + thisYear);
                    $("#sifatSuratTitle").text("Sifat Surat Tahun " + thisYear);
                    populateDataSurat(thisYear, 'update');
                });

                populateListYear();
                populateDataSurat(thisYear);

                function populateListYear() {
                    $.ajax({
                        type: 'post',
                        url: base_url + 'v2/populate-list-tahun/',
                        async: false,
                        dataType: 'json',
                        success: function(response) {
                            let html = '';
                            for (let i = 0; i < response.listTahun.length; i++) {
                                html += `<option class="text-md" value="${response.listTahun[i].tahun}">${response.listTahun[i].tahun}</option>`;
                            }
                            $('#listTahun').html(html);
                        },
                        error: function() {
                            swal("Internal Server Error 500!", "Error!", "error");
                        }
                    });
                }

                function populateDataSurat(year, type = null) {
                    $.ajax({
                        type: 'post',
                        url: base_url + 'v2/populate-data-surat/' + year,
                        async: false,
                        dataType: 'json',
                        success: function(response) {
                            if (type == null) {
                                // console.log(response)
                                setTimeout(() => {
                                    lineChart(response);
                                    barChart(response)
                                }, 500);
                            } else {
                                lineChart(response, 'update');
                                barChart(response, 'update');
                            }
                        },
                        error: function() {
                            swal("Internal Server Error 500!", "Error!", "error");
                        }
                    });
                }

                function lineChart(param, type = null) {
                    if (!param || !param.suratMasuk || !param.suratKeluar) {
                        console.error("Data param tidak valid!", param);
                        return;
                    }

                    const chartElement = document.querySelector('#rekapitulasi-surat-graph');
                    if (!chartElement) {
                        console.error("Elemen #rekapitulasi-surat-graph tidak ditemukan di DOM!");
                        return;
                    }

                    const lineChartConfig = {
                        chart: {
                            fontFamily: 'Inter var, sans-serif',
                            type: 'area',
                            height: 370,
                            toolbar: {
                                show: false,
                                tools: {
                                    download: true, // Memunculkan opsi download
                                    selection: false,
                                    zoom: false,
                                    zoomin: false,
                                    zoomout: false,
                                    pan: false,
                                    reset: false
                                }
                            }
                            // toolbar: {
                            //     show: false
                            // },
                        },
                        colors: ['#28a745', '#dc2626'],
                        fill: {
                            type: 'gradient',
                            gradient: {
                                shadeIntensity: 1,
                                type: 'vertical',
                                inverseColors: false,
                                opacityFrom: 0.2,
                                opacityTo: 0
                            }
                        },
                        dataLabels: { 
                            enabled: false 
                        },
                        stroke: { 
                            width: 3 
                        },
                        plotOptions: {
                            bar: { 
                                columnWidth: '45%', 
                                borderRadius: 4 
                            }
                        },
                        grid: {
                            show: true,
                            borderColor: '#F3F5F7',
                            strokeDashArray: 2
                        },
                        series: [
                            { name: 'Surat Masuk', data: param.suratMasuk },
                            { name: 'Surat Keluar', data: param.suratKeluar }
                        ],
                        xaxis: {
                            categories: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'],
                            axisBorder: { show: false },
                            axisTicks: { show: false }
                        },
                        animations: {
                            enabled: true,
                            easing: 'easeinout',
                            speed: 800
                        }
                    };

                    if (type == null) {
                        if (rekapSuratChart) {
                            rekapSuratChart.destroy();
                        }
                        rekapSuratChart = new ApexCharts(chartElement, lineChartConfig);
                        rekapSuratChart.render();
                    } else {
                        rekapSuratChart.updateSeries([
                            { name: 'Surat Masuk', data: param.suratMasuk },
                            { name: 'Surat Keluar', data: param.suratKeluar }
                        ]);
                    }
                }

                function barChart(param, type = null) {
                    if (!param || !param.suratMasuk || !param.suratKeluar) {
                        console.error("Data param tidak valid!", param);
                        return;
                    }

                    const chartElement = document.querySelector('#sifat-surat-graph');
                    if (!chartElement) {
                        console.error("Elemen #sifat-surat-graph tidak ditemukan di DOM!");
                        return;
                    }
                    
                    const barChartConfig = {
                        chart: {
                            fontFamily: 'Inter var, sans-serif',
                            type: 'bar',
                            height: 370,
                            stacked: true,
                            toolbar: {
                                show: false
                            },
                            zoom: {
                                enabled: true
                            }
                        },
                        colors: ['#198754', '#dc3545'],
                        series: [
                            {
                                name: 'Surat Masuk',
                                data: [param.sifatSuratMasuk.Biasa, param.sifatSuratMasuk.Segera, param.sifatSuratMasuk.Penting, param.sifatSuratMasuk.Rahasia]
                            }, 
                            {
                                name: 'Surat Keluar',
                                data: [param.sifatSuratKeluar.Biasa, param.sifatSuratKeluar.Segera, param.sifatSuratKeluar.Penting, param.sifatSuratKeluar.Rahasia]
                            }, 
                        ],
                        responsive: [
                            {
                                breakpoint: 480,
                                options: {
                                    legend: {
                                        position: 'bottom',
                                        offsetX: -10,
                                        offsetY: 0
                                    }
                                }
                            }
                        ],
                        plotOptions: {
                            bar: {
                                horizontal: false,
                                borderRadius: 5,
                                // borderRadiusApplication: 'end', // 'around', 'end'
                                // borderRadiusWhenStacked: 'last', // 'all', 'last'
                                dataLabels: {
                                    total: {
                                        enabled: true,
                                        style: {
                                            fontSize: '13px',
                                            fontWeight: 900
                                        }
                                    }
                                }
                            },
                        },
                        xaxis: {
                            type: 'category',
                            categories: ['Biasa', 'Segera', 'Penting', 'Rahasia'],
                        },
                        fill: {
                            opacity: 1
                        },
                        animations: {
                            enabled: true,
                            easing: 'easeinout',
                            speed: 800
                        }
                    };

                    if (type == null) {
                        if (sifatSuratChart) {
                            sifatSuratChart.destroy();
                        }
                        sifatSuratChart = new ApexCharts(chartElement, barChartConfig);
                        sifatSuratChart.render();
                    } else {
                        sifatSuratChart.updateSeries([
                            {
                                name: 'Surat Masuk',
                                data: [param.sifatSuratMasuk.Biasa, param.sifatSuratMasuk.Segera, param.sifatSuratMasuk.Penting, param.sifatSuratMasuk.Rahasia]
                            }, 
                            {
                                name: 'Surat Keluar',
                                data: [param.sifatSuratKeluar.Biasa, param.sifatSuratKeluar.Segera, param.sifatSuratKeluar.Penting, param.sifatSuratKeluar.Rahasia]
                            }
                        ]);
                    }
                }

                // function validateMobilePhone() {
                //     $('#noTelp').on('keyup', function(e) {
                //         numberLength = $('#noTelp').val().length;
                //     });

                //     $('#noTelp').on('keypress', function(e) {
                //         var $this = $(this);
                //         var regex = new RegExp("^[0-9\b]+$");
                //         var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
                //         var currentNum = 48;
                //         // for 12 digit number only
                //         if ($this.val().length > 11) {
                //             e.preventDefault();
                //             return false;
                //         }
                //         if (numberLength == 0) {
                //             currentNum = 48;
                //         } else if (numberLength == 1) {
                //             currentNum = 56;
                //         }
                //         if (e.charCode != currentNum && e.charCode > 47 && e.charCode < 58) {
                //             if ($this.val().length == 0) {
                //                 e.preventDefault();
                //                 return false;
                //             } else {
                //                 var result = e.charCode != currentNum && numberLength == 1 ? false : true;
                //                 return result;
                //             }
                //         }
                //         if (regex.test(str)) {
                //             currentNum = 56;
                //             return true;
                //         }
                //         e.preventDefault();
                //         return false;
                //     });
                // }

                // function validateNIP() {
                //     $('#nip').on('keypress', function(e) {
                //         var $this = $(this);
                //         var regex = new RegExp("^[0-9\b]+$");
                //         var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
                //         // for 16 digit number only
                //         if ($this.val().length > 17) {
                //             e.preventDefault();
                //             return false;
                //         }
                //         if (regex.test(str)) {
                //             currentNum = 56;
                //             return true;
                //         }
                //         e.preventDefault();
                //         return false;
                //     });
                // }
            });
        </script>