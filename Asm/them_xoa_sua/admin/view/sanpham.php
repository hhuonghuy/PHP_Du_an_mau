<section>
    <h2>Bài viết</h2>
    <form action="index.php?act=sanpham_add" method="post" enctype="multipart/form-data">
        <select name="id_dm" id="">
            <option value="0">Chọn bài viết</option>
            <?php
            if(isset($dsdm)){
                foreach ($dsdm as $dm) {
                    echo '<option value="'.$dm['id_dm'].'">'.$dm['ten_dm'].'</option>';
                }
            }
            ?>
        </select>
        <input type="text" name="ten_baiviet">
        <input type="file" name="hinh">
        <input type="submit" name="themmoi" value="Thêm mới">
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
                    <td> <a href="index.php?act=updatespform&id_baiviet='.$item['id_baiviet'].'">Sửa</a>  <a href="index.php?act=delsp&id_baiviet='.$item['id_baiviet'].'">Xóa</a> </td>
                </tr>
                </tbody>';
                $i++;
            }
        }
        ?>
    </table>
    </div>
</section>