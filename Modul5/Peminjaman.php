<?php
require('./Model.php');
if (isset($_GET['id_peminjaman'])) {
    deletePeminjaman($_GET['id_peminjaman']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@200&family=Patrick+Hand&display=swap');

    .button {
        display: inline-block;
        text-decoration: none;
        color: #fff;
        padding: 3px;
        border-radius: 6px;
        position: relative;
        overflow: hidden;
    }
    .button::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 200%;
        height: 100%;
        background:
        linear-gradient(115deg, #4fcf70, #fad648, #a767e5, #12bcfe, #44ce7b);
        background-size: 50% 100%;
        border-radius: inherit;
    }
    .button:hover::before {
        animation: animate_border
        .75s linear infinite;
    }
    .button span{
        display: block;
        background-color: #000;
        padding: 13px 20px;
        border-radius: 3px;
        position: relative;
        z-index: 2;
    }
    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        font-family: 'Patrick Hand', cursive;
        color: rgb(238, 236, 236);
    }
    body {
        width: 100%;
        height: 100vh;
        background-image: linear-gradient(to right bottom, #828282, #839fb5, #5fc5d0, #73e7b8, #d6fb84);
        display: flex;
        align-items: center;
        justify-content: space-around;
        flex-direction: column;
    }
    #table{
        text-align: center;
        border-collapse: collapse;
    }
    .items {
        padding: 15px 35px;
        font-size: 19px;
        border-bottom: 1px solid rgba(255, 255, 255, 0.7);
    }
    .header-row {
        background-color: rgba(255, 255, 255, 0.31);
    }
    @keyframes animate_border {
        to {
            transform: translateX(-50%)
        }
    }
</style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peminjaman</title>
</head>
<body>
<div class="table-section">
    <table id="table">
        <tr class="header-row">
            <th class="header-item items">Tanggal Pinjam</th>
            <th class="header-item items">Tanggal Kembali</th>
            <th class="header-item items">Tindakan</th>
        </tr>
        <?= showData("peminjaman") ?>
    </table>
    <br><a href="FormPeminjaman.php" class="button"><span>Tambah Peminjaman</span></a>
</div>
</body>
</html>