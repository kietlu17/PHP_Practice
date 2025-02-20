<form action="index.php?pages=htdk" method='post'>

    <b>Thông tin đăng kí</b> <br>
    <label for="">Email</label>
    <input type="email" name="email" id="">
    <br>
    <label for="">Password</label>
    <input type="password" name="pwd" id="">
    <br>
    <label for="">Nhập lại Password</label>
    <input type="password" name="repwd" id="">
    <br>
    <label for="">Thông tin cá nhân</label>
    <input type="text" name="txt" id="">
    <br>
    <label for="">Họ và tên</label>
    <input type="text" name="name" id="">
    <br>
    <label for="">Quê quán</label>
    <select name="que" id="" >
        <option value="Quy Nhơn">Quy Nhơn</option>
        <option value="Hồ Chí Minh">Hồ Chí Minh</option>
        <option value="Hà Nội">Hà Nội</option>
    </select>
    <br>
    <label for="">Số điện thoại</label>
    <input type="number" name="sdt" id="">
    <br>
    <label for="">Giới tính</label>
    <input type="radio" name="sex" id="" value="Nam">Nam
    <input type="radio" name="sex" id="" value="Nữ">Nữ
    <br>
    <label for="">Sở thích</label>
    <input type="checkbox" name="st[]" id="" value="Màu xanh">Màu xanh
    <input type="checkbox" name="st[]" id="" value="Màu đỏ">Màu đỏ
    <input type="checkbox" name="st[]" id="" value="Đồng quê">Đồng quê
    <input type="checkbox" name="st[]" id="" value="Cao Nguyên">Cao Nguyên
    <br>
    <input type="submit" name='ok' value='Đăng Ký'>
    <input type="submit" name='ok' value='Làm lại'>
    </form>
