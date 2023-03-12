<!doctype html>
<html>

<head>
	<?php require('inc_head.php'); ?>
</head>

<body>

<div class="container-fluid">
	
<?php require('inc_menu.php'); ?>

<section class="row">
    <div class="col-12 banner-inside wow fadeInDown">
        <figure>
            <div class="title-banner">plant tour</div>
            <img src="images/banner-planttour.webp" alt="">
        </figure>
    </div>
</section>


<section class="row">
    <div class="col-12 wrap-planttour">
        <div class="container">
            <div class="row">
                <div class="col-12 wrap-content wow fadeInDown">
                    <div class="topic-cform">แบบฟอร์มขอเยี่ยมชมโรงงาน</div>
                    <div class="box-noteplant">
                        <div class="row">
                            <div class="col-12 col-md-5">
                                <img src="images/photo-office_03.webp" alt="">
                            </div>
                            <div class="col-12 col-md-7">
                                <div class="desc-noteplant">
                                    <div class="topic-noteplant">เงื่อนไขการคัดเลือกเยี่ยมชมโรงงาน</div>
                                    <ul>
                                        <li>บริษัทเปิดรับสมัครผู้เยี่ยมชมโรงงานผ่าน</li>
                                        <li>เปิดให้ลงทะเบียนล่วงหน้าภายใน 30 วัน</li>
                                    </ul>
                                    <p>หมายเหตุ :  ทางบริษัท จะพิจารณาและติดต่อกลับภายใน 7 วัน</p>
                                    <a href="planttour-detail.php" class="btn-default btn-blue"><i class="bi bi-card-list"></i> รายละเอียดการเยี่ยมชมโรงงาน</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="topic-planttour">กรอกข้อมูลสำหรับเยี่ยมชมโรงงาน</div>
                    <form>
                        <div class="row">
                            <div class="col-12 col-md-6 col-lg-4 col-xl-3 frm-career">
                                <label>เลือกวันที่เยี่ยมชม<span>*</span></label>
                                <div class="date">
                                    <input type="text" class="form-control" placeholder=วว/ดด/ปป"><span class="input-group-addon"><i class="bi bi-calendar3"></i></span>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4 col-xl-3 frm-career">
                                <label>ช่วงเวลาที่เยี่ยมชม<span>*</span></label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>กรุณาเลือก</option>
                                    <option value="1">10:00น. - 12.00น.</option>
                                    <option value="2">14:00น. - 16.00น.</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-lg-6 frm-career">
                                <label>ชื่อสถาบัน (คณะ) / บริษัท / หน่วยงาน<span>*</span></label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-12 col-lg-6 frm-career">
                                <label>ประเภทสถาบัน (คณะ) / บริษัท / หน่วยงาน<span>*</span></label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-12 frm-career">
                                <label>ที่อยู่<span>*</span></label>
                                <textarea name="" id="" rows="3" class="form-control"></textarea>
                            </div>
                            <div class="col-12 col-md-5 col-lg-4 col-xl-3 frm-career">
                                <label>จำนวนผู้เยี่ยมชม<span>*</span></label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>กรุณาเลือก</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                    <option value="16">16</option>
                                    <option value="17">17</option>
                                    <option value="18">18</option>
                                    <option value="19">19</option>
                                    <option value="20">20</option>
                                    <option value="21">21</option>
                                    <option value="22">22</option>
                                    <option value="23">23</option>
                                    <option value="24">24</option>
                                    <option value="25">25</option>
                                </select>
                            </div>
                            <div class="col-12 col-md-7 col-lg-8 col-xl-4 frm-career">
                                <label>ภาษาที่ใช้ในการบรรยาย<span>*</span></label>
                                <div class="md-radio">
                                    <div class="md-radio-inline">
                                        <input id="langth" type="radio" name="lang">
                                        <label for="langth">ภาษาไทย</label>
                                    </div>
                                    <div class="md-radio-inline">
                                        <input id="langen" type="radio" name="lang">
                                        <label for="langen">ภาษาอังกฤษ</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-xl-5 frm-career">
                                <label>จดหมายขอเยี่ยมชม (PDF)<span>*</span></label>
                                <input class="form-control" type="file">
                            </div>
                            <div class="col-12 frm-career">
                                <label>เว็บไซต์<span>*</span></label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-12 col-lg-6 frm-career">
                                <label>วัตถุประสงค์ในการเยี่ยมชม<span>*</span></label>
                                <textarea name="" id="" rows="3" class="form-control"></textarea>
                            </div>
                            <div class="col-12 col-lg-6 frm-career">
                                <label>ความคาดหวังในการเยี่ยมชม<span>*</span></label>
                                <textarea name="" id="" rows="3" class="form-control"></textarea>
                            </div>
                            <div class="col-12 col-md-6 frm-career">
                                <label>ชื่อ - นามสกุล ผู้ติดต่อ<span>*</span></label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-12 col-md-6 frm-career">
                                <label>ตำแหน่ง<span>*</span></label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-12 col-md-6 col-lg-4 frm-career">
                                <label>เบอร์โทรศัพท์<span>*</span></label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-12 col-md-6 col-lg-4 frm-career">
                                <label>เบอร์มือถือ<span>*</span></label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-12 col-lg-4 frm-career">
                                <label>อีเมล<span>*</span></label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-12 col-md-6 col-lg-4 frm-career">
                                <img src="images/capcha.png" class="capcha" alt="">
                            </div>
                            <div class="col-12 col-md-6 col-lg-8 frm-career text-end">
                                <button class="btn-default btn-blue"><i class="bi bi-envelope"></i> send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


<?php require('inc_contactplant.php'); ?>
<?php require('inc_footer.php'); ?>

<script>
	$( ".menubar > li:nth-child(8) > a" ).addClass( "here" );
</script>

<script type="text/javascript">
	$('.date').datepicker({
		language: "th"
	});
</script>

		
</div>

</body>

</html>
