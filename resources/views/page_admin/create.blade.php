<div class="container">
    <div class="row">
        <div class="col-md-12"> <br />
        <h3 align ="center" >เพิ่มข้อมูล</h3> <br/>
        <form method="post" action="{{url('nameuser')}}">
        <div class="form-group">
            <input type="text" name="fname" class="form-control" placeholder="ป้อนชื่อ" />
        </div>
        <div class="form-group">
            <input type="text" name="lname" class="form-control" placeholder="ป้อนนานสกุล" />
        </div>
        <div class="form-group">
            <input type="text" name="idcard" class="form-control" placeholder="บัตรประชาชน" />
        </div>
        <div class="form-group">
            <input type="text" name="phone" class="form-control" placeholder="ป้อนหมายเลขโทรศัพท์" />
        </div>
        <div class="form-group">
            <input type="text" name="email" class="form-control" placeholder="ป้อนอีเมล" />
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="บันทึก" />
        </div>
        </form>
        </div>
    </div>
</div>
