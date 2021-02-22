<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>DBMS</title>
  <!-- Font Awesome -->
    <link rel="stylesheet" href="fontawesome/css/all.css">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="css/mdb.min.css">
    <!-- Your custom styles (optional) -->
    <style>
        *{
            padding: 0;
            margin: 0;
        }
        body, html{
            width: 100%;
            height: 100%;
            font-family: Cambria;
        }
    .content{
        width: 100%;
        height: 100%;
    }

    </style>
</head>

<body>

<div class="content row" id="app">
    <!-- Card Wider -->
    <div class="col-lg-2 col-md-2">
        <div class="card card-cascade wider" style="width: 14em; top: 10%; left: 8%; height: 25em; margin-bottom: 1em">
            <!-- Card image -->
            <div class="view view-cascade overlay">
                <img class="card-img-top" src="https://scontent.fsgn5-5.fna.fbcdn.net/v/t1.0-9/c0.0.1491.1491a/s851x315/46892933_2141281609227267_8126115962693877760_o.jpg?_nc_cat=100&ccb=2&_nc_sid=da31f3&_nc_ohc=MmhCOtDoC04AX8TMN07&_nc_ht=scontent.fsgn5-5.fna&tp=28&oh=26279ac971564bfb113c35eca4fe8b89&oe=60081976" alt="Card image cap">
                <a href="#!">
                    <div class="mask rgba-white-slight"></div>
                </a>
            </div>

            <!-- Card content -->
            <div class="card-body card-body-cascade text-center">

                <!-- Title -->
                <div class="card-title"><strong>Giảng viên hướng dẫn</strong></div>
                <!-- Subtitle -->
                <h5 class="blue-text pb-2"><strong>TS. Trần Công Án</strong></h5>
                <!-- Text -->
                <!-- Linkedin -->
                <a class="px-2 fa-lg li-ic"><i class="fab fa-linkedin-in"></i></a>
                <!-- Twitter -->
                <a href="mailto:tcan@ctu.edu.vn" class="px-2 fa-lg tw-ic"><i class="far fa-envelope"></i></a>
                <!-- Dribbble -->
                <a href="https://www.facebook.com/tcanvn.gmail" class="px-2 fa-lg fb-ic"><i class="fab fa-facebook-f"></i></a>
            </div>
        </div>
        <div class="card" style="top: 10%; left: 8%">
            <div class="card-body">
                <h3 class="card-title text-center">
                    Sinh viên
                </h3>
                <hr>
                <p class="card-text">
                    Nguyễn Văn Nhẫn <br>
                    B1809272
                </p>
            </div>
            <div class="rounded-bottom mdb-color lighten-3 text-center pt-3">
                <ul class="list-unstyled list-inline font-small">
                    <li class="list-inline-item pr-2 white-text"><i class="far fa-clock pr-1"></i><?php echo date("d/m/Y")?></li>
                    <li class="list-inline-item pr-2"><a href="https://www.facebook.com/profile.php?id=100012715928356" class="white-text"><i class="fab fa-facebook-f pr-1">
                            </i></a></li>
                    <li class="list-inline-item"><a href="mailto:nhanb1809272@student.ctu.edu.vn" class="white-text"><i class="far fa-envelope pr-1"> </i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Classic tabs -->
    <div class=" classic-tabs mx-5 my-2 col-lg-9">
        <ul class="nav tabs-blue-grey" id="myClassicTabOrange" role="tablist">
<!--            muon sach-->
            <li class="nav-item">
                <a class="nav-link  waves-light active show" id="profile-tab-classic-orange" data-toggle="tab" href="#muonsach"
                   role="tab" aria-controls="profile-classic-orange" aria-selected="true"><i class="fas fa-2x pb-2 fa-swatchbook" aria-hidden="true"></i><br>Mượn sách</a>
            </li>
<!--            tra sach-->
            <li class="nav-item">
                <a class="nav-link  waves-light" id="profile-tab-classic-orange" data-toggle="tab" href="#trasach"
                   role="tab" aria-controls="profile-classic-orange" aria-selected="true"><i class="fas fa-2x pb-2 fa-swatchbook" aria-hidden="true"></i><br>Trả sách</a>
            </li>
<!--                tac pham-->
            <li class="nav-item">
                <a class="nav-link  waves-light" id="profile-tab-classic-orange" data-toggle="tab" href="#tacpham"
                   role="tab" aria-controls="profile-classic-orange" aria-selected="false"><i class="fas fa-2x pb-2 fa-book-open" aria-hidden="true"></i><br>Tác phẩm</a>
            </li>
<!--            doc gia-->
            <li class="nav-item">
                <a class="nav-link waves-light" id="follow-tab-classic-orange" data-toggle="tab" href="#docgia"
                   role="tab" aria-controls="follow-classic-orange" aria-selected="false"><i class="fas fa-book-reader fa-2x pb-2" aria-hidden="true"></i><br>Đọc giả</a>
            </li>
<!--            sach-->
            <li class="nav-item">
                <a class="nav-link  waves-light" id="profile-tab-classic-orange" data-toggle="tab" href="#sach"
                   role="tab" aria-controls="profile-classic-orange" aria-selected="false"><i class="fas fa-2x pb-2 fa-book" aria-hidden="true"></i><br>Sách</a>
            </li>
            <li class="nav-item">
                <a class="nav-link  waves-light" id="profile-tab-classic-orange23" data-toggle="tab" href="#khac"
                   role="tab" aria-controls="profile-classic-orange" aria-selected="false"><i class="fas fa-2x pb-2 fa-cogs" aria-hidden="true"></i><br>Khác</a>
            </li>
        </ul>
        <div class="tab-content card" id="myClassicTabContentOrange">
<!--            muon sach-->
            <div class="tab-pane fade active show" id="muonsach" role="tabpanel" aria-labelledby="follow-tab-classic-orange">
<!--                sua sach muon-->
                <div class="modal fade" id="suasachmuon" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitlesuasachmuon">Sửa thông tin</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form class="form mx-5 my-2" id="sua-sachmuon">
                                    <label for="smmasach" class="text-center text-muted font-small">Mã sách</label>
                                    <select class="custom-select md-form"  id="smmasach" v-model="s_smmasach">
                                                <option value="" selected disabled>Mã sách</option>                                         <option v-for="n in laymasach" :value="n.MASACH">{{n.MASACH}}</option>
                                    </select>
                                            <label for="smngaymuon" class="text-center text-muted font-small">Ngày mượn</label>
                                            <input type="text" placeholder="dd/mm/yyyy" name="ngaymuon" id="smngaymuon" class="form-control" v-model="s_smngaymuon"/>
                                            <label for="smhantra" class="text-center text-muted font-small">Hạn trả</label>
                                            <input type="text" placeholder="dd/mm/yyyy" name="smhantra" id="smhantra" class="form-control" v-model="s_smhantra"/>
                                            <label for="smmadg" class="text-center text-muted font-small">Mã đọc giả</label>
                                            <select class="custom-select md-form" id="smmadg" v-model="s_smmadg">
                                                <option value="" selected disabled>Mã đọc giả</option>
                                                <option v-for="n in laymdg" :value="n.MADG">{{n.MADG}}</option>
                                            </select>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                                <button type="button" class="btn btn-primary"  data-dismiss="modal" @click="confirmSuaSachMuon(s_smmasachc,s_smngaymuonc, s_smmasach,  s_smngaymuon, s_smhantra, s_smmadg)">Lưu</button>
                            </div>
                        </div>
                    </div>
                </div>
<!--                sua sach muon-->
<!--                them sach muon-->
                <form class="form mx-5 my-2" id="add-sachmuon">
                    <div class="form-row">
                        <div class="col">
                            <select class="custom-select md-form"  v-model="sm_masach" @change="fetchSach()">
                                <option value="" selected disabled>Mã sách</option>
                                <option v-for="n in laymasach" :value="n.MASACH">{{n.MASACH}}</option>
                            </select>
                        </div>
                        <div class="col md-form">
                            <label for="ngaymuon" class="text-center text-muted font-small">Ngày mượn</label>
                            <input type="text" placeholder="dd/mm/yyyy" name="ngaymuon" id="ngaymuon" class="form-control" v-model="ngaymuon"/>
                        </div>
                        <div class="col md-form">
                            <label for="hantra" class="text-center text-muted font-small">Hạn trả</label>
                            <input type="text" placeholder="dd/mm/yyyy" id="hantra"  class="form-control"  v-model="hantra">
                        </div>
                        <div class="col">
                            <select class="custom-select md-form"  v-model="sm_madg" @change="fetchSachMuon()">
                                <option value="" selected disabled>Mã đọc giả</option>
                                <option v-for="n in laymdg" :value="n.MADG">{{n.MADG}}</option>
                            </select>
                        </div>
                        <div class="col" style="margin-top: 1.5em">
                            <button class="btn btn-cyan btn-sm" id="them-sm" type="button" @click="addSachMuon()" >Thêm</button>
                        </div>
                    </div>
                </form>
<!--                them sach muon-->
<!--                tim kiem sach muon-->
                <div class="form-row mx-5">
                    <div class="col-6 md-form">
                        <input type="text" id="searchSachMuon" class="form-control" name="searchTp" v-model="searchSachMuon" @keydown="fetchSachMuon()">
                        <label for="searchSachMuon" class="text-center text-muted font-small" >Tìm kiếm</label>
                    </div>
                </div>
<!--                tim kiem sach muon-->
<!--                table sach muon-->
                <table id="dtMaterialDesignExample3" class="table table-hover table-sm btn-table Tuyenduong" style="width=100%; height: 5em">
                    <thead class="thead-dark">
                    <tr>
                        <th class="th-sm text-center">Mã Sách</th>
                        <th class="th-sm text-center">Ngày mượn</th>
                        <th class="th-sm text-center">Hạn trả</th>
                        <th class="th-sm text-center">Mã đọc giả</th>
                        <th class="th-sm text-center">Tên đọc giả</th>
                        <th class="th-sm text-center" style="width: 20%"></th>
                    </tr>
                    </thead>
                    <tbody v-for="row in sachmuon">
                    <td class="text-center">{{row.MASACH}}</td>
                    <td class="text-center">{{row.NGAYMUON}}</td>
                    <td class="text-center">{{row.HANTRA}}</td>
                    <td class="text-center">{{row.MADG}}</td>
                    <td class="text-center">{{row.TENDG}}</td>
                    <td><button class="btn btn-sm btn-cyan" data-toggle="modal" data-target="#suasachmuon" @click="SuaSachMuon(row.MASACH, row.NGAYMUON, row.HANTRA, row.MADG)">Sửa</button></td>
                    </tbody>
                </table>
                <!--                    table sach muon-->
            </div>
<!--            tra sach -->
            <div class="tab-pane fade" id="trasach" role="tabpanel" aria-labelledby="follow-tab-classic-orange">
<!--                sua sach tra-->
                <div class="modal fade" id="suasachtra" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitlesuasachtra">Sửa thông tin</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form class="form mx-5 my-2" id="sua-sachtra">
                                    <label for="sstmadg" class="text-center text-muted font-small">Mã đọc giả</label>
                                    <select class="custom-select md-form" id="sstmadg" v-model="s_stmadg" @change="laymsm(s_stmadg)">
                                        <option value="" selected disabled>Mã đọc giả</option>
                                        <option v-for="n in laymdgsm" :value="n.MADG">{{n.MADG}}</option>
                                    </select>
                                    <label for="sstmasach" class="text-center text-muted font-small">Mã sách</label>
                                    <select class="custom-select md-form" id="sstmasach" v-model="s_stmasach" @change="layngaymuon(s_stmadg, s_stmasach)">
                                        <option value="" selected disabled>Mã sách</option>
                                        <option v-for="m in laymasachmuon" :value="m.MASACH">{{m.MASACH}}</option>
                                    </select>
                                    <label for="stngaymuon" class="text-center text-muted font-small">Ngày mượn</label>
                                    <select class="custom-select md-form" id="stngaymuon" v-model="s_stngaymuon" >
                                        <option value="" selected disabled >Ngày mượn</option>
                                        <option v-for="n in layngaym" :value="n.NGAYMUON">{{n.NGAYMUON}}</option>
                                    </select>
                                    <label for="stngaytra" class="text-center text-muted font-small">Ngày trả</label>
                                    <input type="text" placeholder="dd/mm/yyyy" name="ngaymuon" id="stngaytra" class="form-control" v-model="s_stngaytra"/>

                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                                <button type="button" class="btn btn-primary"  data-dismiss="modal" @click="confirmSuaSachTra(s_stmasachc,s_stngaytrac, s_stmasach,  s_stngaytra, s_stmadg, s_stngaymuon)">Lưu</button>
                            </div>
                        </div>
                    </div>
                </div>
<!--                sua sach tra-->

<!--                    them sach tra-->
                <form class="form mx-5 my-2" id="add-sachtra">
                    <div class="form-row">
                        <div class="col">
                            <select class="custom-select md-form"  v-model="st_madg" @change="laymsm(st_madg)">
                                <option value="" selected disabled >Mã đọc giả</option>
                                <option v-for="n in laymdgsm" :value="n.MADG">{{n.MADG}}</option>
                            </select>
                        </div>
                        <div class="col">
                            <select class="custom-select md-form"  v-model="st_masach" @change="layngaymuon(st_madg, st_masach)">
                                <option value="" selected disabled>Mã sách</option>
                                <option v-for="n in laymasachmuon" :value="n.MASACH">{{n.MASACH}}</option>
                            </select>
                        </div>
                        <div class="col">
                            <select class="custom-select md-form"  v-model="st_ngaymuon" >
                                <option value="" selected disabled >Ngày mượn</option>
                                <option v-for="n in layngaym" :value="n.NGAYMUON">{{n.NGAYMUON}}</option>
                            </select>
                        </div>
                        <div class="col md-form">
                            <label for="ngaytra" class="text-center text-muted font-small">Ngày trả</label>
                            <input type="text" placeholder="dd/mm/yyyy" id="ngaytra" class="form-control" v-model="st_ngaytra"/>
                        </div>
                        <div class="col" style="margin-top: 1.5em">
                            <button class="btn btn-cyan btn-sm" id="them-st" type="button" @click="addSachTra()" >Thêm</button>
                        </div>
                    </div>
                </form>
<!--                    them sach tra-->
<!--                tim kiem sach tra-->
                <div class="form-row mx-5">
                    <div class="col-6 md-form">
                        <input type="text" id="searchSachTra" class="form-control" name="searchsactra" v-model="searchSachTra" @keydown="fetchSachTra()">
                        <label for="searchSachTra" class="text-center text-muted font-small" >Tìm kiếm</label>
                    </div>
                </div>
<!--                tim kiem sach tra-->
                <!--                table sach tra-->
                <table id="dtMaterialDesignExample4" class="table table-hover table-sm btn-table" style="width=100%; height: 5em">
                    <thead class="thead-dark">
                    <tr>
                        <th class="th-sm text-center">Mã Sách</th>
                        <th class="th-sm text-center">Mã đọc giả</th>
                        <th class="th-sm text-center">Tên đọc giả</th>
                        <th class="th-sm text-center">Ngày Mượn</th>
                        <th class="th-sm text-center">Ngày trả</th>
                        <th class="th-sm text-center" style="width: 20%"></th>
                    </tr>
                    </thead>
                    <tbody v-for="row in sachtra">
                    <td class="text-center">{{row.MASACH}}</td>
                    <td class="text-center">{{row.MADG}}</td>
                    <td class="text-center">{{row.TENDG}}</td>
                    <td class="text-center">{{row.NGAYMUON}}</td>
                    <td class="text-center">{{row.NGAYTRA}}</td>
                    <td><button class="btn btn-sm btn-cyan" data-toggle="modal" data-target="#suasachtra" @click="SuaSachTra(row.MASACH, row.MADG, row.NGAYTRA, row.NGAYMUON)">Sửa</button></td>
                    </tbody>
                </table>
                <!--                    table sach tra-->
            </div>
<!--            doc gia-->
                <div class="tab-pane fade" id="docgia" role="tabpanel" aria-labelledby="follow-tab-classic-orange">
                <!--            xac nhan xoa doc gia-->
                <div class="modal fade" id="xoadg" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                     aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div><h4 class="text-info">Bạn mún xóa đọc giả</h4>{{eTenDg}}</div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                                <button type="button" class="btn btn-primary" data-dismiss="modal" @click="confirmXoa(eMaDg)">Xác nhận</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!--            xac nhan xoa doc gia-->
                <!--            sua doc gia-->
                <!-- Modal -->
                <div class="modal fade" id="suadg" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
                     aria-hidden="true">

                    <!-- Add .modal-dialog-centered to .modal-dialog to vertically center the modal -->
                    <div class="modal-dialog modal-dialog-centered" role="document">


                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Sửa thông tin</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form class="form mx-5">
                                    <div class="">
                                        <label for="smadg" class="text-center text-muted font-small">Mã đọc giả</label>
                                        <input type="text" id="smadg" class="form-control" name="madg" v-model="smadg">
                                        <label for="stendg" class="text-center text-muted font-small">Tên đọc giả</label>
                                        <input type="text" id="stendg" class="form-control" name="tendg" v-model="stendg">
                                        <label for="sdiachi" class="text-center text-muted font-small">Địa chỉ</label>
                                        <input type="text" id="sdiachi" class="form-control" name="diachi" v-model="sdiachi">
                                        <label for="ssdt" class="text-center text-muted font-small">Số điện thoại</label>
                                        <input type="text" id="ssdt" class="form-control" name="sdt" v-model="ssdt">
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                                <button type="button" class="btn btn-primary"  data-dismiss="modal" @click="confirmSuaDg(smdgc, smadg, stendg, sdiachi, ssdt)">Lưu</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!--            sua doc gia-->
                <form class="form mx-5" id="add-dg">
                    <div class="form-row">
                        <div class="md-form">
                            <input type="text" id="madg" class="form-control" name="madg" v-model="madg">
                            <label for="madg" class="text-center text-muted font-small">Mã đọc giả</label>
                        </div>
                        <div class="col md-form">
                            <input type="text" id="tendg" class="form-control" name="tendg" v-model="tendg">
                            <label for="tendg" class="text-center text-muted font-small">Tên đọc giả</label>
                        </div>
                        <div class="col md-form">
                            <input type="text" id="diachi" class="form-control" name="diachi" v-model="diachi">
                            <label for="diachi" class="text-center text-muted font-small">Địa chỉ</label>
                        </div>
                        <div class="col md-form">
                            <input type="text" id="sdt" class="form-control" name="sdt" v-model="sdt">
                            <label for="sdt" class="text-center text-muted font-small">Số điện thoại</label>
                        </div>
                        <div class="col" style="margin-top: 1em">
                            <button class="btn btn-cyan btn-sm" id="them-dg" type="button" @click="addDocGia()" >Thêm</button>
                        </div>
                    </div>
                </form>
                <div class="form-row mx-5">
                    <div class="col-6 md-form">
                        <input type="text" id="searchDg" class="form-control" name="searchDg" v-model="searchDg" @keydown="fetchDocgia()">
                        <label for="searchDg" class="text-center text-muted font-small">Tìm kiếm</label>
                    </div>
                </div>
                <table id="dtMaterialDesignExample" class="table table-hover table-sm btn-table Tuyenduong" style="width=100%; height: 5em">
                    <thead class="thead-dark">
                        <tr>
                            <th class="th-sm text-center">Mã đọc giả</th>
                            <th class="th-sm text-center">Tên đọc giả</th>
                            <th class="th-sm text-center">Địa chỉ</th>
                            <th class="th-sm text-center">Số điện thoại</th>
                            <th class="th-sm text-center" style="width: 20%"></th>
                        </tr>
                    </thead>
                    <tbody v-for="row in docgia">
                            <td class="text-center">{{row.MADG}}</td>
                            <td class="text-center">{{row.TENDG}}</td>
                            <td class="text-center">{{row.DIACHI}}</td>
                            <td class="text-center">{{row.SDT}}</td>
                            <td><button class="btn btn-sm btn-cyan" data-toggle="modal" data-target="#suadg" @click="SuaDg(row.MADG, row.TENDG, row.DIACHI, row.SDT)">Sửa</button>
                                <button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#xoadg" @click="deleteDg(row.MADG, row.TENDG)">Xóa</button>
                            </td>
                    </tbody>
                </table>
            </div>
<!--            tac pham-->
            <div class="tab-pane fade" id="tacpham" role="tabpanel" aria-labelledby="contact-tab-classic-orange">
<!--                xac nhan xoa tac pham-->
                <div class="modal fade" id="xoatp" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                     aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div><h4 class="text-info">Bạn mún xóa tác phẩm</h4>{{eTenTp}}</div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                                <button type="button" class="btn btn-primary"data-dismiss="modal" @click="confirmTP(eMaTp)">Xác nhận</button>
                            </div>
                        </div>
                    </div>
                </div>
<!--                xac nhan xoa tac pham-->
<!--                sua tac pham-->
                <div class="modal fade" id="suatp" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
                     aria-hidden="true">

                    <!-- Add .modal-dialog-centered to .modal-dialog to vertically center the modal -->
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Sửa thông tin</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form class="form mx-5">
                                    <div class="">
                                        <label for="smatp" class="text-center text-muted font-small">Mã tác phẩm</label>
                                        <input type="text" id="smatp" class="form-control" name="smatp" v-model="smatp">
                                        <label for="stentp" class="text-center text-muted font-small">Tên tác phẩm</label>
                                        <input type="text" id="stentp" class="form-control" name="stentp" v-model="stentp">
                                        <label for="stacgia" class="text-center text-muted font-small">Địa chỉ</label>
                                        <input type="text" id="stacgia" class="form-control" name="stacgia" v-model="stacgia">
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                                <button type="button" class="btn btn-primary"  data-dismiss="modal" @click="confirmSuaTp(smatpc, smatp, stentp, stacgia)">Lưu</button>
                            </div>
                        </div>
                    </div>
                </div>
<!--                sua tac pham-->
<!--                form them tac pham-->
                <form class="form mx-5" id="add-tp">
                    <div class="form-row">
                        <div class="md-form">
                            <input type="text" id="matp" class="form-control" name="matp" v-model="matp">
                            <label for="matp" class="text-center text-muted font-small">Mã tác phẩm</label>
                        </div>
                        <div class="col md-form">
                            <input type="text" id="tentp" class="form-control" name="tentp" v-model="tentp">
                            <label for="tentp" class="text-center text-muted font-small">Tên tác phẩm</label>
                        </div>
                        <div class="col md-form">
                            <input type="text" id="tacgia" class="form-control" name="tacgia" v-model="tacgia">
                            <label for="tacgia" class="text-center text-muted font-small">Tác giả</label>
                        </div>
                        <div class="col" style="margin-top: 1em">
                            <button class="btn btn-cyan btn-sm" id="them-tp" type="button" @click="addTacPham()" >Thêm</button>
                        </div>
                    </div>
                </form>
<!--                form them tac pham-->
<!--                tim kiem tac pham-->
                <div class="form-row mx-5">
                    <div class="col-6 md-form">
                        <input type="text" id="searchTp" class="form-control" name="searchTp" v-model="searchTp" @keydown="fetchTacPham()">
                        <label for="searchTp" class="text-center text-muted font-small" >Tìm kiếm</label>
                    </div>
                </div>
<!--                tim kiem tac pham-->
                <table id="dtMaterialDesignExample1" class="table table-hover table-sm btn-table Tuyenduong" style="width=100%; height: 5em">
                    <thead class="thead-dark">
                    <tr>
                        <th class="th-sm text-center">Mã Tác Phẩm</th>
                        <th class="th-sm text-center">Tên tác phẩm</th>
                        <th class="th-sm text-center">Tác giả</th>
                        <th class="th-sm text-center" style="width: 20%"></th>
                    </tr>
                    </thead>
                    <tbody v-for="row in tacpham">
                    <td class="text-center">{{row.MATP}}</td>
                    <td class="text-center">{{row.TENTP}}</td>
                    <td class="text-center">{{row.TACGIA}}</td>
                    <td><button class="btn btn-sm btn-cyan" data-toggle="modal" data-target="#suatp" @click="SuaTp(row.MATP, row.TENTP, row.TACGIA)">Sửa</button>
                        <button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#xoatp" @click="deleteTp(row.MATP, row.TENTP)">Xóa</button>
                    </td>
                    </tbody>
                </table>

            </div>
<!--            sach -->
            <div class="tab-pane fade" id="sach" role="tabpanel" aria-labelledby="awesome-tab-classic-orange">
                <!--                sua savh-->
                <div class="modal fade" id="suasach" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <!--            xac nhan xoa sach-->
                    <div class="modal fade" id="xoasach" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                         aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <div><h4 class="text-info">Bạn muốn xóa sách:</h4>{{eMaSach}}: {{eS_TenTp}} - {{eNxb}}</div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                                    <button type="button" class="btn btn-primary"data-dismiss="modal" @click="confirmXoaSach(eMaSach)">Xác nhận</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--            xac nhan xoa sach-->
                    <!-- Add .modal-dialog-centered to .modal-dialog to vertically center the modal -->
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Sửa thông tin</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form class="form mx-5">
                                    <div class="">
                                        <label for="smasach" class="text-center text-muted font-small">Mã sách</label>
                                        <input type="text" id="smasach" class="form-control" name="smatp" v-model="smasach">
                                        <label for="snxb" class="text-center text-muted font-small">Nhà xuất bản</label>
                                        <input type="text" id="snxb" class="form-control" name="stentp" v-model="snxb">
                                        <select class="custom-select md-form"  v-model="sss_matp" @change="fetchSach()">
                                            <option :value="ss_matp" selected disabled>{{ss_tentp}}</option>
                                             <option v-for="n in laymtp" :value="n.MATP">{{n.MATP}}</option>

                                        </select>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                                <button type="button" class="btn btn-primary"  data-dismiss="modal" @click="confirmSuaSach(smasachc, smasach, snxb, sss_matp)">Lưu</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!--                sua sach-->
<!--                form them sach-->
                <form class="form mx-5" id="add-sach">
                    <div class="form-row">
                        <div class="md-form">
                            <input type="text" id="masach" class="form-control" name="masach" v-model="masach">
                            <label for="masach" class="text-center text-muted font-small">Mã Sách</label>
                        </div>
                        <div class="col md-form">
                            <input type="text" id="nxb" class="form-control" name="tentp" v-model="nxb">
                            <label for="nxb" class="text-center text-muted font-small">Nhà xuất bản</label>
                        </div>
                        <div class="col">
                            <select class="custom-select md-form"  v-model="s_matp">
                                <option value="" disabled selected>Tác phẩm</option>
                                <option v-for="n in laymtp" :value="n.MATP">{{n.MATP}}</option>
                            </select>
                        </div>
                        <div class="col" style="margin-top: 1em">
                            <button class="btn btn-cyan btn-sm" id="them-sach" type="button" @click="addSach()" >Thêm</button>
                        </div>
                    </div>
                </form>
<!--                form them sach-->
<!--                tim kiem sach-->
                <div class="form-row mx-5">
                    <div class="col-6 md-form">
                        <input type="text" id="searchSach" class="form-control" name="searchTp" v-model="searchSach" @keydown="fetchSach()">
                        <label for="searchTp" class="text-center text-muted font-small" >Tìm kiếm</label>
                    </div>
                </div>
                <!--                tim kiem sach-->

<!--                    table sach-->
                <table id="dtMaterialDesignExample2" class="table table-hover table-sm btn-table Tuyenduong" style="width=100%; height: 5em">
                    <thead class="thead-dark">
                    <tr>
                        <th class="th-sm text-center">Mã Sách</th>
                        <th class="th-sm text-center">Nhà xuất bản</th>
                        <th class="th-sm text-center">Tác phẩm</th>
                        <th class="th-sm text-center" style="width: 20%"></th>
                    </tr>
                    </thead>
                    <tbody v-for="row in sach">
                    <td class="text-center">{{row.MASACH}}</td>
                    <td class="text-center">{{row.NXB}}</td>
                    <td class="text-center">{{row.TENTP}}</td>
                    <td><button class="btn btn-sm btn-cyan" data-toggle="modal" data-target="#suasach" @click="SuaSach(row.MASACH, row.NXB, row.MATP, row.TENTP)">Sửa</button>
                        <button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#xoasach" @click="deleteSach(row.MASACH, row.NXB, row.TENTP)">Xóa</button>
                    </td>
                    </tbody>
                </table>
<!--                    table sach-->
            </div>
            <div class="tab-pane fade" id="khac" role="tabpanel" aria-labelledby="awesome-tab-classic-orange">
                <h4 class="text-default">Tra cứu thông tin đọc giả mượn sách</h4>
                <div class="form-row mx-2">
                    <div class="md-form col">
                        <input type="text" id="tracuudg" class="form-control" v-model="tcmadg">
                        <label for="tracuudg">Nhập mã đọc giả</label>
                    </div>
                    <div class="col">
                        <button class="btn btn-cyan" @click="tracuudg(tcmadg)">Tra cứu</button>
                    </div>
                </div>
                    <div v-if="tracuumadg != ''">
                        <h4 class="text-info" v-for="n in sosachm"> Số sách mượn: <span class="text-dark">{{n.SOSACH}}</span> </h4>
                        <table  class="table table-hover table-sm btn-table" style="width=100%; height: 5em">
                            <thead class="thead-dark">
                            <tr>
                                <th class="th-sm text-center">Mã đọc giả</th>
                                <th class="th-sm text-center">Tên đọc giả</th>
                                <th class="th-sm text-center">Mã sách</th>
                                <th class="th-sm text-center">Tên tác phẩm</th>
                                <th class="th-sm text-center">Ngày mượn</th>
                                <th class="th-sm text-center">Ngày trả</th>
                                <th class="th-sm text-center">Hạn trả</th>
                                <th class="th-sm text-center" style="width: 20%"></th>
                            </tr>
                            </thead>
                            <tbody v-for="row in tracuumadg">
                            <td class="text-center">{{row.MADG}}</td>
                            <td class="text-center">{{row.TENDG}}</td>
                            <td class="text-center">{{row.MASACH}}</td>
                            <td class="text-center">{{row.TENTP}}</td>
                            <td class="text-center">{{row.NGAYMUON}}</td>
                            <td class="text-center">{{row.NGAYTRA}}</td>
                            <td class="text-center">{{row.HANTRA}}</td>
                            </tbody>
                        </table>
                    </div>
                    <div v-else>
                        <h4 class="text-dark">Thông tin trống</h4>
                    </div>
                <h4 class="text-default">Danh sách đọc giả trả sách trễ hạn</h4>
                <table  class="table table-hover table-sm btn-table" style="width=100%; height: 5em">
                    <thead class="thead-dark">
                    <tr>
                        <th class="th-sm text-center">Mã đọc giả</th>
                        <th class="th-sm text-center">Tên đọc giả</th>
                        <th class="th-sm text-center">Ngày trả</th>
                        <th class="th-sm text-center">Hạn trả</th>
                        <th class="th-sm text-center">Mã sách</th>
                        <th class="th-sm text-center">Tên tác phẩm</th>
                        <th class="th-sm text-center" style="width: 20%"></th>
                    </tr>
                    </thead>
                    <tbody v-for="row in dstacgiatrasachmuon">
                    <td class="text-center">{{row.madg}}</td>
                    <td class="text-center">{{row.tendg}}</td>
                    <td class="text-center">{{row.ngaytra}}</td>
                    <td class="text-center">{{row.hantra}}</td>
                    <td class="text-center">{{row.masach}}</td>
                    <td class="text-center">{{row.tentp}}</td>
                    </tbody>
                </table>

            </div>
        </div>

    </div>
    <!-- Classic tabs -->
</div>
<script type="text/javascript" src="js/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="js/mdb.min.js"></script>
<script src="js/vue.js"></script>
<script type="text/javascript" src="js/axios.min.js"></script>
<!-- Your custom scripts (optional) -->
<script type="text/javascript" src="js/main.js"></script>
</body>
</html>
