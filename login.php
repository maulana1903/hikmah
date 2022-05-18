<!DOCTYPE html>
<html>
<head>
    <title>For Ayang</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.statically.io/gh/maulana1903/hikmah/main/style.css">
</head>
<body>
    <br/>
    <br/>
    <center><h2 class="text-light">Kmu Ayangnya Fatwa?</h2></center>
    <center><h2 class="text-light">Yakin??</h2></center>
    <center><h2 class="text-light">Yaudah Siapa Namamu?</h2></center>      
    <a class="text-warning"><?php 
    if(isset($_GET['pesan'])){
        if($_GET['pesan'] == "gagal"){
            echo "Dih Lu Siapa Anjir";
        }
    }
    ?></a>
    <div class="login">
    <form method="get">
            <div>
                <label class="text-light text-center">Nama</label>
                <input class="label text-left" type="text" placeholder="Nama" name="username" id="username"  />
            </div>         
            <diva class="m fl">     
            </diva>
    </div>
    <input class="btn btn-success m fcenter" type="submit" value="Submit" data-toggle="modal" data-target="#modalfade" >
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalfade">
    Modal Animasi Fade
</button>
    
<div class="modal fade" id="modalfade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" width="100%">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Modal Animasi Fade</h4>
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <?php 
session_start();
$nama = $_GET['username'];
if($nama =="aku"){
    $isi = "Haloo Sayangku Hikmah, Kabar Baik Kan, I LOVE YOU BEE";
}else{
    $isi = "Dih Lu siapa Ngaku Ngaku Anjir";
}
echo $isi;
?>
            </div>
            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
<script>  $(‘#modalfade’).modal(‘show’); </script>
<script type="text/javascript">
    function validasi() {
        var username = document.getElementById("username").value;  
        if (username != "") {
            return true;
        }else{
            alert('Nama Harus Diisi WOY Ngeyel Amat');
            return false;
        }
    }
</script>
</html>
