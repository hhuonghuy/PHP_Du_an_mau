<section>
    <h2>Cập nhật danh mục</h2>
    <?php
    //echo var_dump($kqone);
    ?>
    <form action="index.php?act=updatedmform" method="post">
        <input type="text" name="ten_dm" value="<?=$kqone[0]['ten_dm']?>">
        <input type="hidden" name="id_dm" value="<?=$kqone[0]['id_dm']?>">
        <input type="submit" name="them" value="Thêm">
    </form>
    <br>
    <div class="tbl">
    <table class="table table-dark table-hover">
        <thead>
        <tr>
            <th style="text-align: center">STT</th>
            <th>Tên danh mục</th>
            <th>Ưu tiên</th>
            <th>Hiển thị</th>
            <th>Chỉnh sửa</th>
        </tr>
        </thead>
        <?php
        //var_dump($kq);
        ?>
        <?php
        if(isset($kq)&&(count($kq)>0)){
            $i=1;
            foreach ($kq as $dm) {
                echo '<tbody>
                <tr>
                    <td style="text-align: center">'.$i.'</td>
                    <td>'.$dm['ten_dm'].'</td>
                    <td>'.$dm['uutien'].'</td>
                    <td>'.$dm['hienthi'].'</td>
                    <td> <a href="index.php?act=updatedmform&id_dm='.$dm['id_dm'].'">Sửa</a>  <a href="index.php?act=deldm&id_dm='.$dm['id_dm'].'">Xóa</a> </td>
                </tr>
                </tbody>';
                $i++;
            }
        }
        ?>
    </table>
    </div>
</section>