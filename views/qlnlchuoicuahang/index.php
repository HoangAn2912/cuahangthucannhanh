<!-- Sidebar -->
<?php
    require("layout/navqlchuoi.php");
?>
<div class="sidebar">
    <form action="post">
        <h4>Trạng thái</h4>
            <a href=""><label><input type="checkbox" name="trangthai"> Đã duyệt</label></a>
            <a href=""><label><input type="checkbox" name="trangthai"> Chờ duyệt</label></a>
            
        <h4>Cửa hàng</h4>
            <a href=""><label><input type="checkbox" name="cuahang" value="1"> Cửa hàng 1</label></a>
            <a href=""><label><input type="checkbox" name="cuahang" value="2"> Cửa hàng 2</label></a>
            <a href=""><label><input type="checkbox" name="cuahang" value="3"> Cửa hàng 3</label></a>
            <a href=""><label><input type="checkbox" name="cuahang" value="4"> Cửa hàng 4</label></a>
            <a href=""><label><input type="checkbox" name="cuahang" value="5"> Cửa hàng 5</label></a>
            <button class="themmoi" name="themmoi">Thêm mới</button>
            <button class="capnhat" namen="capnhat">Cập nhật</button>

    </form>
</div>
    <div style="margin-left: 210px; padding: 20px;" class="content">
        <h4 style="color: #db5a04">Quản lý nguyên liệu</h4>
        <form action="post">
            <table>
            <tr>
                <th>Mã NL</th>
                <th>Tên Nguyên Liệu</th>
                <th>Đơn vị tính</th>
                <th>Đơn giá (VND)</th>
                <th>Trạng thái</th>
                <th>Tùy Chọn</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Ức gà</td>
                <td>Kg</td>
                <td>100,000</td>
                <td>Đã duyệt</td>
                <td><button class="btn-detail">Xem chi tiết</button></td>
            </tr>
            <tr>
                <td>2</td>
                <td>Thịt bò</td>
                <td>Kg</td>
                <td>280,000</td>
                <td>Chờ duyệt</td>
                <td><button class="btn-detail">Xem chi tiết</button></td>
            </tr>
            <tr>
                <td>3</td>
                <td>Cá phi lê</td>
                <td>Kg</td>
                <td>300,000</td>
                <td>Đã duyệt</td>
                <td><button class="btn-detail">Xem chi tiết</button></td>
            </tr>
            <tr>
                <td>4</td>
                <td>Trứng gà</td>
                <td>Quả</td>
                <td>4,000</td>
                <td>Đã duyệt</td>
                <td><button class="btn-detail">Xem chi tiết</button></td>
            </tr>
            <tr>
                <td>5</td>
                <td>Khoai tây</td>
                <td>Kg</td>
                <td>20,000</td>
                <td>Đã duyệt</td>
                <td><button class="btn-detail">Xem chi tiết</button></td>
            </tr>
            <tr>
                <td>6</td>
                <td>Hành tây</td>
                <td>Kg</td>
                <td>35,000</td>
                <td>Đã duyệt</td>
                <td><button class="btn-detail">Xem chi tiết</button></td>
            </tr>
            <tr>
                <td>5</td>
                <td>Cà chua</td>
                <td>Kg</td>
                <td>30,000</td>
                <td>Đã duyệt</td>
                <td><button class="btn-detail">Xem chi tiết</button></td>
            </tr>
            <tr>
                <td>5</td>
                <td>Rau xà lách</td>
                <td>Kg</td>
                <td>25,000</td>
                <td>Đã duyệt</td>
                <td><button class="btn-detail">Xem chi tiết</button></td>
            </tr>
            <tr>
                <td>5</td>
                <td>Dưa leo</td>
                <td>Kg</td>
                <td>25,000</td>
                <td>Đã duyệt</td>
                <td><button class="btn-detail">Xem chi tiết</button></td>
            </tr>
            <tr>
                <td>5</td>
                <td>Đùi gà</td>
                <td>Kg</td>
                <td>120,000</td>
                <td>Chờ duyệt</td>
                <td><button class="btn-detail">Xem chi tiết</button></td>
            </tr>
            <tr>
                <td>5</td>
                <td>Ớt chuông</td>
                <td>Kg</td>
                <td>60,000</td>
                <td>Đã duyệt</td>
                <td><button class="btn-detail">Xem chi tiết</button></td>
            </tr>
            <tr>
                <td>5</td>
                <td>Phô mai lát</td>
                <td>Kg</td>
                <td>150,000</td>
                <td>Đã duyệt</td>
                <td><button class="btn-detail">Xem chi tiết</button></td>
            </tr>
                <!-- Add more rows as needed -->
            </table>
        </form>
        <div class="pagination">
            <a href="#">1</a>
            <a href="#">2</a>
            <a href="#">3</a>
            <a href="#">Tiếp theo</a>
        </div>
    </div>

</body>
</html>

