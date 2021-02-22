$(document).ready(function () {
    const vm = new Vue({
        el: '#app',
        data: {
            docgia: '', tacpham:'', tendg: '', sach:'',sachmuon:'',sachtra:'',
            madg: '', diachi: '', sdt:'', searchDg:'', eTenDg: '', eTenTp:'', eMaDg: '', eMaTp:'', smadg: '', stendg:'', sdiachi:'', ssdt:'', smdgc:'',
            smatp:'', smatpc:'', stentp:'', stacgia:'', matp:'', tentp:'', tacgia:'', searchTp:'',
            searchSach:'', masach:'', nxb:'', s_matp:'', eMaSach:'',eNxb:'', eS_TenTp:'', smasach:'', smasachc:'', snxb:'',ss_tentp:'', ss_matp:'', sss_matp:'',
            searchSachMuon: '',sm_masach:'', ngaymuon: '', hantra:'',sm_madg:'',s_smmasach: '',s_smhantra:'', s_smngaymuon:'',s_smmadg:'', s_smmasachc: '', s_smngaymuonc:'',
            searchSachTra: '',st_madg:'', st_ngaytra:'',st_ngaymuon:'', st_masach:'',s_stmasachc:'',s_stngaytrac:'', s_stmasach:'', s_stmadg:'',s_stngaytra:'', layngaym:'', s_stngaymuon:'',
            laymasachmuon:'',dstacgiatrasachmuon:'',laymdgsm:'', laymasach:'', laymdg:'',laymtp:'', tracuumadg:'', tcmadg:'', sosachm:'',
        },
        methods: {
            fetchDocgia: function () {
                axios.post('data.php', {
                    action: 'layDocGia',
                    searchDg: this.searchDg,
                }).then(function (response) {
                    vm.docgia = response.data;
                    //  vm.fetchDocgia();
                })
            },
            fetchTacPham: function () {
                axios.post('data.php',{
                    action: 'layTacPham',
                    searchTp: this.searchTp
                }).then(function (response){
                    vm.tacpham = response.data;
                    // vm.fetchTacPham();
                });
            },
            fetchSach: function (){
                axios.post('data.php',{
                    action: 'laySach',
                    searchSach: this.searchSach
                }).then(function (response){
                    vm.sach = response.data;
                    //   vm.fetchSach();
                });
            },
            fetchSachMuon: function (){
                axios.post('data.php',{
                    action: 'laySachMuon',
                    searchSachMuon: this.searchSachMuon
                }).then(function (response){
                    vm.sachmuon = response.data;
                    //   vm.fetchSach();
                });
            },
            fetchSachTra: function (){
                axios.post('data.php',{
                    action: 'laySachTra',
                    searchSachTra: this.searchSachTra
                }).then(function (response){
                    vm.sachtra = response.data;
                    //   vm.fetchSach();
                });
            },
            layngaymuon: function (madg,masach){
                axios.post('data.php',{
                    action: 'layngaymuon',
                    madg:madg,
                    masach:masach
                }).then(function (response){
                    vm.layngaym = response.data;
                    //   vm.fetchSach();
                });
            },
            laymsm: function (madg) {
                axios.post('data.php', {
                    action: 'laymasachmuon',
                    madg: madg
                }).then(function (response) {
                    vm.laymasachmuon = response.data;
                    //   vm.fetchSach();
                });
            },
            layms: function () {
                axios.post('data.php', {
                    action: 'layMaSach',
                }).then(function (response) {
                    vm.laymasach = response.data;
                    //   vm.fetchSach();
                });
            },
            laymatp: function () {
                axios.post('data.php', {
                    action: 'layMaTp',
                }).then(function (response) {
                    vm.laymtp = response.data;
                    //   vm.fetchSach();
                });
            },
            laymadg: function () {
                axios.post('data.php', {
                    action: 'laymadg',
                }).then(function (response) {
                    vm.laymdg = response.data;
                    //   vm.fetchSach();
                });
            },
            layymdgsm: function () {
                axios.post('data.php', {
                    action: 'layMaDgSachMuon',
                }).then(function (response) {
                    vm.laymdgsm = response.data;
                    //   vm.fetchSach();
                });
            },
            tracuudg: function (madg) {
                axios.post('data.php', {
                    action: 'traccuudg',
                    madg: madg
                }).then(function (response) {
                    vm.tracuumadg = response.data;
                    vm.sosach(madg);
                    //   vm.fetchSach();
                });
            },
            sosach: function (madg) {
                axios.post('data.php', {
                    action: 'sosachmuon',
                    madg: madg
                }).then(function (response) {
                    vm.sosachm = response.data;
                    //   vm.fetchSach();
                });
            },
            fetchTacGiaTraSachMuon: function (){
                axios.post('data.php',{
                    action:'DSTacGiaTraSacMuon'
                }).then(function (response) {
                    vm.dstacgiatrasachmuon = response.data;
                    //   vm.fetchSach();
                });
            },
            confirmTP: function (eMaTp){
                axios.post('data.php', {
                    action: 'xoaTp',
                    MaTp: eMaTp
                }).then(function () {
                    vm.fetchTacPham();
                })
                    .catch(function (error) {
                        console.log(error);
                    });
            },
            deleteDg: function (MaDg, TenDg) {
                this.eTenDg = TenDg;
                this.eMaDg = MaDg;
            },
            deleteTp: function (matp, tentp){
                this.eMaTp = matp;
                this.eTenTp = tentp;
            },
            deleteSach: function(masach,nxb ,tentp){
                this.eMaSach = masach;
                this.eNxb = nxb;
                this.eS_TenTp = tentp;
            },
            SuaDg: function (madg, tendg, diachi, sdt) {
                this.smdgc = madg;
                this.smadg = madg;
                this.stendg = tendg;
                this.sdiachi = diachi;
                this.ssdt = sdt;
            },
            SuaTp: function (matp, tentp,tacgia) {
                this.smatp = matp;
                this.smatpc = matp;
                this.stentp = tentp;
                this.stacgia = tacgia;
            },
            SuaSach: function (masach, nxb, matp, tentp){
                this.smasach= this.smasachc = masach;
                this.snxb = nxb;
                this.ss_tentp = tentp;
                this.sss_matp=matp;
            },
            SuaSachMuon: function (masach, ngaymuon, hantra, madg){
                this.s_smmasach =this.s_smmasachc= masach;
                this.s_smngaymuon = this.s_smngaymuonc =  ngaymuon;
                this.s_smhantra = hantra;
                this.s_smmadg = madg;
            },
            SuaSachTra: function (masach, madg, ngaytra, ngaymuon){
                this.s_stmasach=this.s_stmasachc=masach;
                this.s_stngaytra=this.s_stngaytrac=ngaytra;
                this.s_stmadg=madg;
                this.s_stngaymuon=ngaymuon;
                this.layngaymuon(madg,masach);
                this.laymsm(this.s_stmadg);
            },
            confirmSuaDg: function (smadgc, smadg, stendg, sdiachi, ssdt){
                axios.post('data.php', {
                    action: 'suaDg',
                    MaDgC: smadgc,
                    MaDgM: smadg,
                    TenDG:stendg,
                    DiaChi: sdiachi,
                    Sdt: ssdt
                }).then(function () {
                    vm.fetchDocgia();
                })
                    .catch(function (error) {
                        console.log(error);
                    });
            },
            confirmSuaTp: function (smatpc, smatp, stentp, stacgia){
                axios.post('data.php', {
                    action: 'suaTp',
                    MaTpC: smatpc,
                    MaTpM: smatp,
                    TenTp:stentp,
                    TacGia: stacgia,
                }).then(function () {
                    vm.fetchTacPham();
                    this.laymatp();
                })
                    .catch(function (error) {
                        console.log(error);
                    });
            },
            confirmSuaSach: function (smasachc, smasach, snxb, sss_matp){
                axios.post('data.php', {
                    action: 'suaSach',
                    smasachc: smasachc,
                    smasach: smasach,
                    snxb: snxb,
                    sss_matp: sss_matp
                }).then(function () {
                    vm.fetchSach();
                })
                    .catch(function (error) {
                        console.log(error);
                    });
            },
            confirmSuaSachTra: function (masachc,ngaytrac, masach,  ngaytra, madg, ngaymuon){
                axios.post('data.php', {
                    action: 'suaSachTra',
                    masach:masach,
                    masachc:masachc,
                    ngaytra: ngaytra,
                    ngaytrac: ngaytrac,
                    madg: madg,
                    ngaymuon:ngaymuon
                }).then(function () {
                    vm.fetchSachTra();
                    vm.fetchTacGiaTraSachMuon();
                })
                    .catch(function (error) {
                        console.log(error);
                    });
            },
            confirmSuaSachMuon: function (masachc,ngaymuonc, masach, ngaymuon, hantra, madg){
                axios.post('data.php', {
                    action: 'suaSachMuon',
                    masachc: masachc,
                    masach: masach,
                    ngaymuonc: ngaymuonc,
                    ngaymuon: ngaymuon,
                    hantra: hantra,
                    madg: madg
                }).then(function () {
                    vm.fetchSachMuon();
                })
                    .catch(function (error) {
                        console.log(error);
                    });
            },
            confirmXoa: function (MaDg){
                axios.post('data.php', {
                    action: 'xoaDg',
                    MaDg: MaDg
                }).then(function () {
                    vm.fetchDocgia();
                    vm.fetchSachMuon();
                    vm.fetchSachTra();
                })
                    .catch(function (error) {
                        console.log(error);
                    });
            },
            confirmXoaSach: function (MaSach){
                axios.post('data.php', {
                    action: 'xoaSach',
                    MaSach: MaSach
                }).then(function () {
                    vm.fetchSach();
                    vm.fetchSachTra();
                    vm.fetchSachMuon();
                })
                    .catch(function (error) {
                        console.log(error);
                    });
            },
            addDocGia: function () {
                if(this.madg == '' && this.tendg=='' && this.diachi=='' && this.sdt=='' ){
                    alert('Du lieu khong duoc rong');
                }

                else if (this.madg.length != 5){
                    alert('Ma doc gia co 5 ky tu');
                }

                else {
                    axios.post('data.php',{
                        action: 'themDocGia',
                        madg: this.madg,
                        tendg: this.tendg,
                        diachi: this.diachi,
                        sdt: this.sdt
                    })
                        .then(function (response) {
                            console.log(response);
                            if(response.data[0].status==1){
                                alert('Data saved successfully');

                            }
                            vm.fetchDocgia();
                            vm.laymadg();
                        })
                        .catch(function (error) {
                            console.log(error);
                        });
                }
                this.madg=this.tendg=this.diachi=this.sdt='';


            },
            addTacPham: function () {

                if(this.matp == '' && this.tentp=='' && this.tacgia==''){
                    alert('Du lieu khong duoc rong');
                }

                else if (this.matp.length != 5){
                    alert('Ma tác phẩm co 5 ky tu');
                }

                else {
                    axios.post('data.php',{
                        action: 'themTacPham',
                        matp: this.matp,
                        tentp: this.tentp,
                        tacgia: this.tacgia,
                    })
                        .then(function (response) {
                            console.log(response);
                            if(response.data[0].status==1){
                                alert('Data saved successfully');

                            }
                            vm.fetchTacPham();
                            this.laymatp();
                        })
                        .catch(function (error) {
                            console.log(error);
                        });
                }
                this.matp=this.tentp=this.tacgia='';
            },
            addSach: function (){

                if(this.masach == '' && this.nxb=='' && this.s_matp==''){
                    alert('Du lieu khong duoc rong');
                }

                else if (this.masach.length != 5){
                    alert('Ma sách co 5 ky tu');
                }

                else {
                    axios.post('data.php',{
                        action: 'themSach',
                        maSach: this.masach,
                        nxb: this.nxb,
                        s_matp: this.s_matp,
                    })
                        .then(function (response) {
                            console.log(response);
                            if(response.data[0].status==1){
                                alert('Data saved successfully');

                            }
                            vm.fetchSach();
                            vm.layms();
                        })
                        .catch(function (error) {
                            console.log(error);
                        });
                }
                this.masach=this.nxb=this.s_matp='';
            },
            addSachMuon: function () {
                if(this.sm_masach == '' && this.ngaymuon=='' && this.hantra=='' && this.sm_madg==''){
                    alert('Du lieu khong duoc rong');
                }

                else if (this.sm_masach.length != 5){
                    alert('Ma sách co 5 ky tu');
                }
                else if (this.sm_madg.length != 5){
                    alert('Ma doc gia co 5 ky tu');
                }

                else {
                    axios.post('data.php',{
                        action: 'themSachMuon',
                        masach: this.sm_masach,
                        ngaymuon: this.ngaymuon,
                        hantra: this.hantra,
                        madg: this.sm_madg
                    })
                        .then(function (response) {
                            console.log(response);
                            if(response.data[0].status==1){
                                alert('Data saved successfully');

                            }
                            vm.fetchSachMuon();
                            vm.layymdgsm();
                            vm.laymsm();
                        })
                        .catch(function (error) {
                            console.log(error);
                        });
                }
                this.sm_masach=this.ngaymuon=this.hantra=this.sm_madg='';
            },
            addSachTra: function () {

                if(this.st_madg == '' && this.st_masach=='' && this.st_ngaytra=='' && this.st_ngaymuon ){
                    alert('Du lieu khong duoc rong');
                }

                else if (this.st_masach.length != 5){
                    alert('Ma sách co 5 ky tu');
                }
                else if (this.st_madg.length != 5){
                    alert('Ma doc gia co 5 ky tu');
                }
                else {
                    axios.post('data.php',{
                        action: 'themSachTra',
                        masach: this.st_masach,
                        ngaytra: this.st_ngaytra,
                        madg: this.st_madg,
                        ngaymuon: this.st_ngaymuon
                    })
                        .then(function (response) {
                            console.log(response);
                            if(response.data[0].status==1){
                                alert('Data saved successfully');

                            }
                            vm.fetchSachTra();
                            vm.fetchTacGiaTraSachMuon();
                        })
                        .catch(function (error) {
                            console.log(error);
                        });
                }
                this.sm_masach=this.ngaymuon=this.hantra=this.sm_madg='';
            }
        },

        created: function () {
            this.fetchDocgia();
            this.fetchTacPham();
            this.fetchSach();
            this.fetchSachMuon();
            this.fetchSachTra();
            this.fetchTacGiaTraSachMuon();
            this.layymdgsm();
            this.layms();
            this.laymadg();
            this.laymsm();
            this.laymatp();
        }
    });

})