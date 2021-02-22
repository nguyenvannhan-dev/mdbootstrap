<?php
define('servername', '127.0.0.1');
define('username', 'root');
define('password','');
define('database', 'thuvien');

function execute($sql){
    $conn = new mysqli(servername, username, password, database);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);

    }
    $conn -> set_charset("utf8");
    $conn->query($sql);
    $conn->close();
};
function executeResult($sql){
    $conn = new mysqli(servername, username, password, database);
    $conn -> set_charset("utf8");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $result = $conn->query($sql) ;
    $list = [];
    while ($row = mysqli_fetch_array($result,1)){
        $list[] = $row;
    }
    $conn->close();
    return $list;
};
$receive_data = json_decode(file_get_contents('php://input'));
        $data = array();
        if($receive_data->action == 'layDocGia'){
            $sql = '';
            if($receive_data->searchDg == '' ){
                $sql = 'SELECT * FROM docgia;';
            }
            else {
                $sql = "SELECT * FROM docgia WHERE MADG like '%".$receive_data->searchDg."%' or TENDG like '%".$receive_data->searchDg."%'or
                DIACHI like '%".$receive_data->searchDg."%' or SDT like '%".$receive_data->searchDg."%'";
            }
            $data = executeResult($sql);
            echo json_encode($data);
        }
        if($receive_data->action == 'layTacPham'){
            $sql = '';
            if($receive_data->searchTp == '' ){
                $sql = 'SELECT * FROM tacpham;';
            }
            else {
                $sql = "SELECT * FROM tacpham WHERE MATP like '%".$receive_data->searchTp."%' or TENTP like '%".$receive_data->searchTp."%'or TACGIA like '%".$receive_data->searchTp."%'";
            }
            $data = executeResult($sql);
            echo json_encode($data);
        }
        if($receive_data->action == 'laySachMuon'){
            $sql = '';
            if($receive_data->searchSachMuon == '' ){
                $sql = "SELECT MASACH, DATE_FORMAT(NGAYMUON,'%d/%m/%Y') as NGAYMUON, DATE_FORMAT(HANTRA,'%d/%m/%Y') as HANTRA, sachmuon.MADG, TENDG FROM sachmuon, docgia WHERE sachmuon.MADG=docgia.MADG;";
            }
            else {
                $sql = "SELECT MASACH, DATE_FORMAT(NGAYMUON,'%d/%m/%Y') as NGAYMUON, DATE_FORMAT(HANTRA,'%d/%m/%Y') as HANTRA, sachmuon.MADG, TENDG FROM sachmuon, docgia WHERE sachmuon.MADG=docgia.MADG and (MASACH  like '%".$receive_data->searchSachMuon."%' or NGAYMUON  like '%".$receive_data->searchSachMuon."%' or HANTRA like'%".$receive_data->searchSachMuon."%' OR docgia.MADG like '%".$receive_data->searchSachMuon."%' or docgia.TENDG like '%".$receive_data->searchSachMuon."%');";
            }
            $data = executeResult($sql);
            echo json_encode($data);
        }
        if($receive_data->action == 'laySachTra'){
            $sql = '';
            if($receive_data->searchSachTra == '' ){
                $sql = "SELECT MASACH, sachtra.MADG, TENDG, DATE_FORMAT(NGAYTRA,'%d/%m/%Y') as NGAYTRA, TENDG, DATE_FORMAT(NGAYMUON,'%d/%m/%Y') as NGAYMUON  FROM sachtra, docgia WHERE sachtra.MADG=docgia.MADG;";
            }
            else {
                $sql = "SELECT MASACH, sachtra.MADG, TENDG, DATE_FORMAT(NGAYTRA,'%d/%m/%Y') as NGAYTRA , DATE_FORMAT(NGAYMUON,'%d/%m/%Y') as NGAYMUON  FROM sachtra, docgia WHERE sachtra.MADG=docgia.MADG and (MASACH  like '%".$receive_data->searchSachTra."%' or NGAYTRA  like '%".$receive_data->searchSachTra."%' OR sachtra.MADG like '%".$receive_data->searchSachTra."%' or docgia.TENDG like '%".$receive_data->searchSachTra."%');";
            }
            $data = executeResult($sql);
            echo json_encode($data);
        }
        if($receive_data->action == 'laySach'){
            $sql = '';
            if($receive_data->searchSach == '' ){
                $sql = 'SELECT MASACH, NXB, t.MATP, t.TENTP
                        FROM sach, tacpham t
                        WHERE sach.MATP = t.MATP;';
            }
            else {
                $sql = "SELECT MASACH, NXB, t.MATP ,t.TENTP
                        FROM sach, tacpham t
                        WHERE sach.MATP = t.MATP and( MASACH like '%".$receive_data->searchSach."%' or NXB like '%".$receive_data->searchSach."%'or TENTP like '%".$receive_data->searchSach."%');";
            }
            $data = executeResult($sql);
            echo json_encode($data);
        }
        if($receive_data->action == 'themDocGia'){
            $sql ="CALL `ThemDocGia`('".$receive_data->madg."','".$receive_data->tendg."','".$receive_data->diachi."','".$receive_data->sdt."');";
            echo $sql;
            execute($sql);
        }
        if($receive_data->action == 'themTacPham'){
            $sql ="CALL `ThemTacPham`('".$receive_data->matp."','".$receive_data->tentp."','".$receive_data->tacgia."');";
            echo $sql;
            execute($sql);
}
        if($receive_data->action == 'themSach'){
            $sql ="CALL `ThemSach`('".$receive_data->maSach."','".$receive_data->nxb."','".$receive_data->s_matp."');";
            echo $sql;
            execute($sql);
        }
        if($receive_data->action == 'themSachMuon'){
            $sql ="CALL `ThemSachMuon`('".$receive_data->masach."','".$receive_data->ngaymuon."','".$receive_data->hantra."', '".$receive_data->madg."');";
            echo $sql;
            execute($sql);
        }
        if($receive_data->action == 'themSachTra'){
            $sql =
            $sql ="CALL `ThemSachTra`('".$receive_data->masach."','".$receive_data->madg."', '".$receive_data->ngaytra."', '".$receive_data->ngaymuon."');";
            echo $sql;
            execute($sql);
        }
        if($receive_data->action == 'suaDg'){
            $sql ="UPDATE `docgia` SET MADG = '".$receive_data->MaDgM."',TENDG='".$receive_data->TenDG."',DIACHI='".$receive_data->DiaChi."',SDT='".$receive_data->Sdt."' where MADG ='".$receive_data->MaDgC."';";
            echo $sql;
            execute($sql);
        }
        if($receive_data->action == 'suaTp'){
            $sql ="UPDATE `tacpham` SET MATP = '".$receive_data->MaTpM."',TENTP='".$receive_data->TenTp."',TACGIA='".$receive_data->TacGia."' where MATP ='".$receive_data->MaTpC."';";
            echo $sql;
            execute($sql);
        }
        if($receive_data->action == 'suaSach'){
            $sql ="UPDATE sach SET MASACH = '".$receive_data->smasach."',NXB='".$receive_data->snxb."',MATP='".$receive_data->sss_matp."' where MASACH ='".$receive_data->smasachc."';";
            echo $sql;
            execute($sql);
        }
        if($receive_data->action == 'suaSachMuon'){
            $sql ="UPDATE sachmuon 
                            SET MASACH = '".$receive_data->masach."',
                            NGAYMUON=STR_TO_DATE('".$receive_data->ngaymuon."','%d/%m/%Y'),
                            HANTRA=STR_TO_DATE('".$receive_data->hantra."','%d/%m/%Y'),
                            MADG = '".$receive_data->madg."'
                             where MASACH ='".$receive_data->masachc."' and NGAYMUON = STR_TO_DATE('".$receive_data->ngaymuonc."','%d/%m/%Y');";
            echo $sql;
            execute($sql);
        }
        if($receive_data->action == 'suaSachTra'){
            $sql ="UPDATE sachtra
                                    SET MASACH = '".$receive_data->masach."',
                                    NGAYTRA=STR_TO_DATE('".$receive_data->ngaytra."','%d/%m/%Y'),
                                    MADG = '".$receive_data->madg."',
                                    NGAYMUON=STR_TO_DATE('".$receive_data->ngaymuon."','%d/%m/%Y')
                                     where  NGAYTRA = STR_TO_DATE('".$receive_data->ngaytrac."','%d/%m/%Y');";
            echo $sql;
            execute($sql);
        }
        if($receive_data->action=='xoaDg'){
            $sql = "DELETE from docgia where MADG = '".$receive_data->MaDg."'";
            execute($sql);
        }
        if($receive_data->action=='xoaTp'){
            $sql = "DELETE from tacpham where MATP = '".$receive_data->MaTp."'";
            execute($sql);
        }
        if($receive_data->action=='xoaSach'){
            $sql = "DELETE from sach where MASACH = '".$receive_data->MaSach."'";
            execute($sql);
        }
        if($receive_data->action=='layngaymuon'){
            $sql = "SELECT DATE_FORMAT(NGAYMUON,'%d/%m/%Y') as NGAYMUON FROM sachmuon where MASACH = '".$receive_data->masach."' and MADG='".$receive_data->madg."';";
            $data=executeResult($sql);
            echo  json_encode(($data));
        }
        if($receive_data->action == 'layMaSach'){
            $sql = "SELECT MASACH FROM sach;";
            $data = executeResult($sql);
            echo json_encode($data);
        }
        if($receive_data->action == 'layMaTp'){
            $sql = "SELECT MATP FROM tacpham;";
            $data = executeResult($sql);
            echo json_encode($data);
        }
        if($receive_data->action == 'laymadg'){
            $sql = "SELECT MADG FROM docgia;";
            $data = executeResult($sql);
            echo json_encode($data);
        }
        if($receive_data->action == 'laymasachmuon'){
            $sql = '';
                $sql = "select MASACH from sachmuon where MADG='".$receive_data->madg."';";
            $data = executeResult($sql);
            echo json_encode($data);
        }
        if($receive_data->action == 'layMaDgSachMuon'){
            $sql = '';
                $sql = "select DISTINCT(MADG) from sachmuon;";
            $data = executeResult($sql);
            echo json_encode($data);
        }
        if ($receive_data->action == 'DSTacGiaTraSacMuon'){
            $sql ="CALL DSTacGiaTraSachMuon();";
            $data = executeResult($sql);
            echo json_encode($data);
        }
        if($receive_data->action == 'traccuudg'){
            $sql = '';
            $sql = "CALL ThongTinChungDGMuonSach('".$receive_data->madg."');";
            $data = executeResult($sql);
            echo json_encode($data);
        }
        if($receive_data->action == 'sosachmuon'){
            $sql = '';
            $sql = "SELECT soSachMuon('".$receive_data->madg."') as SOSACH;";
            $data2 = executeResult($sql);
            echo json_encode($data2);
        }









