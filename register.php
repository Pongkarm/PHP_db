<link rel="stylesheet" href="styles.css">
<style>
    .input {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        box-sizing: border-box;
        border-radius: 20px;
        border: 1px solid #145820;
    }

    .botton {
        background-color: #a418e0;
        border: none;
        color: white;
        padding: 16px 32px;
        text-decoration: none;
        margin: 4px 2px;
        cursor: pointer;
        border-radius: 50px;
        font-size: 18px;
        width: 100%;

    }

    .botton:hover {
        background-color: #f1032f
    }
</style>
<div class="container">
    <h1 class="text-center">สมัครสมาชิก</h1>
    <form action="member_insert.php" method="post" enctype="multipart/form-data">
        ชื่อ <input type="text" name="firstname" class="input" />
        นามสกุล <input type="text" name="lastname" class="input" />
        อีเมล <input type="email" name="email" class="input" />
        รหัสผ่าน <input type="password" name="password" class="input" />
        เบอร์โทร <input type="text" name="phone" class="input" />
        ที่อยู่ <textarea name="address" class="input">  </textarea>
        แนบรูป <input type="file" name="photo" class="input" />
        <input type="submit" value="บันทึกข้อมูล" class="botton" />
    </form>
</div>