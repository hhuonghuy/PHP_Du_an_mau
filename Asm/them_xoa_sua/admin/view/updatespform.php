<section>
    <h2>Update bài viết</h2>
    <form action="index.php?act=sanpham_update" method="post" enctype="multipart/form-data">
        <select name="id_dm" id="">
            <option value="0">Chọn bài viết</option>
            <?php
            $iddmcur = $spct[0]['id_dm'];
            if(isset($dsdm)){
                foreach ($dsdm as $dm) {
                    if($dm['id_dm']==$iddmcur)
                        echo '<option value="'.$dm['id_dm'].'" selected>'.$dm['ten_dm'].'</option>';
                    else
                        echo '<option value="'.$dm['id_dm'].'">'.$dm['ten_dm'].'</option>';
                }
            }
            ?>
        </select>
        <input type="text" name="ten_baiviet" value="<?=$spct[0]['ten_baiviet']?>">
        <input type="file" name="hinh">
        <img src="<?=$spct[0]['hinh']?>" width="100px" alt="">
        <input type="hidden" name="id_baiviet" value="<?=$spct[0]['id_baiviet']?>">
        <input type="submit" name="capnhat" value="Cập nhật">
    </form>
    <br>
    <div class="tbl">
    <table class="table table-dark table-hover">
        <thead>
        <tr>
            <th style="text-align: center">STT</th>
            <th>Tên bài viết</th>
            <th>Hình</th>
            <th>Chỉnh sửa</th>
        </tr>
        </thead>
        <?php
        //var_dump($kq);
        ?>
        <?php
        if(isset($kq)&&(count($kq)>0)){
            $i=1;
            foreach ($kq as $item) {
                echo '<tbody>
                <tr>
                    <td style="text-align: center">'.$i.'</td>
                    <td>'.$item['ten_baiviet'].'</td>
                    <td><img src="'.$item['hinh'].'" width="100px"></td>
                    <td> <a href="index.php?act=updatespform&id_dm='.$dm['id_dm'].'">Sửa</a>  <a href="index.php?act=delsp&id_dm='.$dm['id_dm'].'">Xóa</a> </td>
                </tr>
                </tbody>';
                $i++;
            }
        }
        ?>
    </table>
    </div>
</section>