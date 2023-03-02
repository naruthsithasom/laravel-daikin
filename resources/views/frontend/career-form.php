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
            <div class="title-banner">careers</div>
            <img src="images/banner-careerform.webp" alt="">
        </figure>
    </div>
</section>

<section class="container">
    <div class="row">
        <div class="col-12 wrap-content wow fadeInDown">
            <div class="topic-cform">แบบฟอร์มสมัครงาน</div>
            <form>
                <div class="boxform-career">
                    <div class="head-careerform"><i class="bi bi-person-vcard"></i> ประวัติส่วนตัว/เงินเดือนที่ต้องการ</div>
                    <div class="row">
                        <div class="col-12 col-md-3 col-lg-2">
                            <div class="carer-profile"><img src="images/profile_03.jpg" alt=""></div>
                            <div class="btn-uploadimg">
                                <input type="file">
                                <i class="bi bi-camera"></i> แนบรูปถ่าย
                            </div>
                        </div>
                        <div class="col-12 col-md-9 col-lg-10">
                            <div class="row">
                                <div class="col-12 col-lg-7 frm-career">
                                    <label>สมัครตำแหน่ง<span>*</span></label>
                                    <input type="text" class="form-control" value="QC & QA Engineer">
                                </div>
                                <div class="col-12 col-lg-5 frm-career">
                                    <label>เงินเดือนที่คาดหวัง</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="col-12 frm-career box-startproject">
                                    <label>คุณสามารถเริ่มงานได้เมื่อใด<span>*</span></label>
                                    <div class="md-radio">
                                        <div class="row">
                                            <div class="col-12 col-md-6 col-xl-3">
                                                <input id="work01" type="radio" name="work">
                                                <label for="work01">แจ้งล่วงหน้า 1 อาทิตย์</label>
                                            </div>
                                            <div class="col-12 col-md-6 col-xl-3">
                                                <input id="work02" type="radio" name="work">
                                                <label for="work02">แจ้งล่วงหน้า 2 อาทิตย์</label>
                                            </div>
                                            <div class="col-12 col-md-6 col-xl-3">
                                                <input id="work03" type="radio" name="work">
                                                <label for="work03">แจ้งล่วงหน้า 1 เดือน</label>
                                            </div>
                                            <div class="col-12 col-md-6 col-xl-3">
                                                <input id="work04" type="radio" name="work">
                                                <label for="work04">เริ่มงานได้ทันที</label>
                                            </div>
                                            <div class="col-12 col-lg-6">
                                                <div class="frm-inline">
                                                    <input id="work04" type="radio" name="work">
                                                    <label for="work04">ระบุวันที่</label>
                                                </div>
                                                <div class="date">
                                                    <input type="text" class="form-control" placeholder=วว/ดด/ปป"><span class="input-group-addon"><i class="bi bi-calendar3"></i></span>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-6">
                                                <input id="work05" type="radio" name="work">
                                                <label for="work05">อื่นๆ</label>
                                                <input type="text" class="form-control" placeholder="โปรดระบุ">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 frm-career">
                                    <label>แนบเอกสารประกอบการสมัครงาน (เช่น Resume, Transcript, ใบผ่านการเกณฑ์ทหาร เป็นต้น)</label>
                                    <input class="form-control" type="file">
                                    <div class="frm-smalltext">(docx, doc, xlsx, xls, pdf, zip) ขนาดไฟล์แนบไม่เกิน 2 Mb</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="boxform-career">
                    <div class="head-careerform"><i class="bi bi-person"></i> ข้อมูลส่วนตัว</div>
                    <div class="row">
                        <div class="col-12 frm-career-mb frm-career">
                            <label>ชื่อ - นามสกุล (ไทย)<span>*</span></label>
                            <div class="row">
                                <div class="col-12 col-lg-2 frm-career">
                                    <select class="form-select" aria-label="Default select example">
										<option selected>คำนำหน้า</option>
										<option value="1">นาย</option>
										<option value="2">นาง</option>
										<option value="3">นางสาว</option>
									</select>
                                </div>
                                <div class="col-12 col-lg-5 frm-career">
                                    <input type="text" class="form-control" placeholder="ชื่อ">
                                </div>
                                <div class="col-12 col-lg-5 frm-career">
                                    <input type="text" class="form-control" placeholder="นามสกุล">
                                </div>
                            </div>
                        </div>
                        <div class="col-12 frm-career-mb frm-career">
                            <label>ชื่อ - นามสกุล (อังกฤษ)<span>*</span></label>
                            <div class="row">
                                <div class="col-12 col-lg-2 frm-career">
                                    <select class="form-select" aria-label="Default select example">
										<option selected>Please Select</option>
										<option value="1">Mr.</option>
										<option value="2">Mrs.</option>
										<option value="3">Miss</option>
									</select>
                                </div>
                                <div class="col-12 col-lg-5 frm-career">
                                    <input type="text" class="form-control" placeholder="First Name">
                                </div>
                                <div class="col-12 col-lg-5 frm-career">
                                    <input type="text" class="form-control" placeholder="Last Name">
                                </div>
                            </div>
                        </div>
                        <div class="col-12 frm-career">
                            <label>เลขที่บัตรประชาชน/เลขที่หนังสือเดินทาง<span>*</span></label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-12 col-md-6 col-lg-3 frm-career">
                            <label>เพศ<span>*</span></label>
                            <div class="md-radio">
                                <div class="md-radio-inline">
                                    <input id="male" type="radio" name="sex">
                                    <label for="male">ชาย</label>
                                </div>
                                <div class="md-radio-inline">
                                    <input id="female" type="radio" name="sex">
                                    <label for="female">หญิง</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3 frm-career">
                            <label>วัน/เดือน/ปี เกิด<span>*</span></label>
                            <div class="date">
                                <input type="text" class="form-control" placeholder=วว/ดด/ปป"><span class="input-group-addon"><i class="bi bi-calendar3"></i></span>
                            </div>
                        </div>
                        <div class="col-6 col-md-2 col-lg-3 frm-career">
                            <label>อายุ<span>*</span></label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-6 col-md-4 col-lg-3 frm-career">
                            <label>สถานภาพ<span>*</span></label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>กรุณาเลือก</option>
                                <option value="1">โสด</option>
                                <option value="2">สมรส</option>
                                <option value="3">แยกกันอยู่</option>
                                <option value="4">หม้าย</option>
                                <option value="5">ไม่ระบุ</option>
                            </select>
                        </div>
                        <div class="col-6 col-md-3 frm-career">
                            <label>ส่วนสูง<span>*</span></label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-6 col-md-3 frm-career">
                            <label>น้ำหนัก<span>*</span></label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-6 col-lg-3 frm-career">
                            <label>สัญชาติ<span>*</span></label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>กรุณาเลือก</option>
                                <option value="1">ไทย</option>
                                <option value="2">อื่นๆ</option>
                            </select>
                        </div>
                        <div class="col-6 col-lg-3 frm-career">
                            <label>ศาสนา<span>*</span></label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>กรุณาเลือก</option>
                                <option value="1">ศาสนาพุทธ</option>
                                <option value="2">ศาสนาคริสต์</option>
                                <option value="3">ศาสนาอิสลาม</option>
                                <option value="4">อื่นๆ</option>
                            </select>
                        </div>
                        <div class="col-12 frm-career">
                            <label>ภูมิลำเนาเดิม<span>*</span></label>
                            <textarea name="" id="" rows="3" class="form-control"></textarea>
                        </div>
                        <div class="col-12 frm-career">
                            <label>ที่อยู่ปัจจุบัน<span>*</span></label>
                            <textarea name="" id="" rows="3" class="form-control"></textarea>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3 frm-career">
                            <label>เบอร์โทรศัพท์<span>*</span></label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-12 col-md-6 col-lg-3 frm-career">
                            <label>เบอร์โทรศัพท์สำรอง</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-12 col-lg-3 frm-career">
                            <label>อีเมล<span>*</span></label>
                            <input type="text" class="form-control">
                            <div class="frm-smalltext">** อีเมลนี้จะเป็นอีเมลที่บริษัทติดต่อคุณเพื่อเรียกสัมภาษณ์</div>
                        </div>
                        <div class="col-12 col-lg-3 frm-career">
                            <label>อีเมลสำรอง</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="boxform-career">
                    <div class="head-careerform"><i class="bi bi-person"></i> ข้อมูลด้านสุขภาพ</div>
                    <div class="row">
                        <div class="col-12 frm-career">
                            <label>โปรดระบุหากมีความพิการทางร่างกาย,ความบกพร่องของร่างกายหรือโรคเรื้อรัง เช่น การมองเห็น การได้ยิน การพูด ตาบอดสี หัวใจ</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-12 frm-career">
                            <label>ความเจ็บป่วย หรือ อุบัติเหตุร้ายแรง ถ้ามีโปรดระบุ</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="boxform-career">
                    <div class="head-careerform"><i class="bi bi-mortarboard"></i> ประวัติการศึกษา </div>
                    <div class="txt-notecareer">* กรุณากรอกรายละเอียดอย่างน้อย 1 ประวัติ</div>
                    <div class="subhead-careerform">มัธยมศึกษาตอนปลาย </div>
                    <div class="row">
                        <div class="col-12 col-md-6 frm-career">
                            <label>ชื่อสถาบันการศึกษา</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-12 col-md-6 frm-career">
                            <label>วุฒิการศึกษา</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-12 col-lg-5 frm-career">
                            <label>วิชาเอก</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-12 col-md-8 col-lg-5 frm-career-mb frm-career">
                            <label>เข้าศึกษาปี (จาก - ถึง)</label>
                            <div class="row">
                                <div class="col-6 frm-career">
                                    <input type="text" class="form-control" placeholder="จาก">
                                </div>
                                <div class="col-6 frm-career">
                                    <input type="text" class="form-control" placeholder="ถึง">
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 col-lg-2 frm-career">
                            <label>คะแนนเฉลี่ย (GPA)</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="subhead-careerform">ประกาศนียบัตรวิชาชีพ </div>
                    <div class="row">
                        <div class="col-12 col-md-6 frm-career">
                            <label>ชื่อสถาบันการศึกษา</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-12 col-md-6 frm-career">
                            <label>วุฒิการศึกษา</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-12 col-lg-5 frm-career">
                            <label>วิชาเอก</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-12 col-md-8 col-lg-5 frm-career-mb frm-career">
                            <label>เข้าศึกษาปี (จาก - ถึง)</label>
                            <div class="row">
                                <div class="col-6 frm-career">
                                    <input type="text" class="form-control" placeholder="จาก">
                                </div>
                                <div class="col-6 frm-career">
                                    <input type="text" class="form-control" placeholder="ถึง">
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 col-lg-2 frm-career">
                            <label>คะแนนเฉลี่ย (GPA)</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="subhead-careerform">มหาวิทยาลัย/วิทยาลัย </div>
                    <div class="row">
                        <div class="col-12 col-md-6 frm-career">
                            <label>ชื่อสถาบันการศึกษา</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-12 col-md-6 frm-career">
                            <label>วุฒิการศึกษา</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-12 col-lg-5 frm-career">
                            <label>วิชาเอก</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-12 col-md-8 col-lg-5 frm-career-mb frm-career">
                            <label>เข้าศึกษาปี (จาก - ถึง)</label>
                            <div class="row">
                                <div class="col-6 frm-career">
                                    <input type="text" class="form-control" placeholder="จาก">
                                </div>
                                <div class="col-6 frm-career">
                                    <input type="text" class="form-control" placeholder="ถึง">
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 col-lg-2 frm-career">
                            <label>คะแนนเฉลี่ย (GPA)</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="subhead-careerform">อื่นๆ </div>
                    <div class="row">
                        <div class="col-12 col-md-6 frm-career">
                            <label>ชื่อสถาบันการศึกษา</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-12 col-md-6 frm-career">
                            <label>วุฒิการศึกษา</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-12 col-lg-5 frm-career">
                            <label>วิชาเอก</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-12 col-md-8 col-lg-5 frm-career-mb frm-career">
                            <label>เข้าศึกษาปี (จาก - ถึง)</label>
                            <div class="row">
                                <div class="col-6 frm-career">
                                    <input type="text" class="form-control" placeholder="จาก">
                                </div>
                                <div class="col-6 frm-career">
                                    <input type="text" class="form-control" placeholder="ถึง">
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 col-lg-2 frm-career">
                            <label>คะแนนเฉลี่ย (GPA)</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="boxform-career">
                    <div class="head-careerform"><i class="bi bi-briefcase"></i> ทักษะและงานอดิเรก</div>
                    <div class="career-boxskill">
                        <div class="topic-skill">ทักษะการพิมพ์</div>
                        <div class="row">
                            <div class="col-12 col-sm-6 frm-career">
                                <label>ไทย (คำ/นาที)</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-12 col-sm-6 frm-career">
                                <label>อังกฤษ (คำ/นาที)</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-12 frm-career">
                                <label>ความสามารถทางคอมพิวเตอร์ <div class="career-normaltext">(ทักษะทางโปรแกรมคอมพิวเตอร์ที่ใช้งานได้)</div> </label>
                                <textarea name="" id="" rows="3" class="form-control"></textarea>
                            </div>
                            <div class="col-12 frm-career">
                                <label>ความสามารถอื่นๆ / งานอดิเรก</label>
                                <textarea name="" id="" rows="3" class="form-control"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="career-boxskill">
                        <div class="topic-skill">ทักษะภาษา</div>
                        <div class="row row-cols-md-3 row-cols-lg-5">
                            <div class="col-12 col frm-career">
                                <label>ภาษา</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-6 col frm-career">
                                <label>พูด</label>
                                <select name="" id="" class="form-select">
                                    <option>กรุณาเลือก</option>
                                    <option>ดี</option>
                                    <option>พอใช้</option>
                                    <option>อ่อน</option>
                                </select>
                            </div>
                            <div class="col-6 col frm-career">
                                <label>อ่าน</label>
                                <select name="" id="" class="form-select">
                                    <option>กรุณาเลือก</option>
                                    <option>ดี</option>
                                    <option>พอใช้</option>
                                    <option>อ่อน</option>
                                </select>
                            </div>
                            <div class="col-6 col frm-career">
                                <label>เขียน</label>
                                <select name="" id="" class="form-select">
                                    <option>กรุณาเลือก</option>
                                    <option>ดี</option>
                                    <option>พอใช้</option>
                                    <option>อ่อน</option>
                                </select>
                            </div>
                            <div class="col-6 col frm-career">
                                <label>ความเข้าใจ</label>
                                <select name="" id="" class="form-select">
                                    <option>กรุณาเลือก</option>
                                    <option>ดี</option>
                                    <option>พอใช้</option>
                                    <option>อ่อน</option>
                                </select>
                            </div>
                        </div>
                        <div class="career-addmore">
                            <button class="btn-default btn-grey"><i class="bi bi-plus-circle-fill"></i> เพิ่ม</button>
                            <div>ท่านสามารถเพิ่มได้มากกว่า 1 รายการ</div>
                        </div>
                    </div>
                </div>

                <div class="boxform-career">
                    <div class="head-careerform"><i class="bi bi-briefcase"></i> ข้อมูลการฝึกอบรม</div>
                    <div class="row">
                        <div class="col-12 col-md-4 frm-career">
                            <label>ความรู้พิเศษ/ฝึกอบรม</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-12 col-md-4 frm-career">
                            <label>สถาบัน</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-12 col-md-4 frm-career">
                            <label>ระหว่างวันที่ (จำนวนชั่วโมง,วัน)</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-12 frm-career">
                            <div class="career-addmore">
                                <button class="btn-default btn-grey"><i class="bi bi-plus-circle-fill"></i> เพิ่ม</button>
                                <div>ท่านสามารถเพิ่มได้มากกว่า 1 รายการ</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="boxform-career">
                    <div class="head-careerform"><i class="bi bi-briefcase"></i> ประสบการณ์การทำงาน</div>
                    <div class="row">
                        <div class="col-12 col-md-4 frm-career">
                            <label>1. ชื่อบริษัท</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-12 col-md-4 frm-career">
                            <label>ตำแหน่ง</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-12 col-md-4 frm-career">
                            <label>เงินเดือน</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-12 col-lg-4 frm-career">
                            <label>ประเภทของธุรกิจ</label>
                            <select name="" id="" class="form-select">
                                <option>กรุณาเลือก</option>
                                <option>กฎหมาย/ที่ปรึกษาทางธุรกิจ</option>
                                <option>กราฟฟิก ดีไซน์</option>
                                <option>การก่อสร้าง/การตกแต่ง</option>
                                <option>การคมนาคมขนส่ง</option>
                                <option>การค้า/นำเข้า/ส่งออก</option>
                                <option>การตลาด</option>
                                <option>การท่องเที่ยว</option>
                                <option>การผลิต</option>
                                <option>การศึกษา</option>
                                <option>การเงิน/การธนาคาร/หลักทรัพย์</option>
                                <option>การเผยแพร่/การจำหน่ายจ่ายแจก</option>
                                <option>การโรงแรม/รีสอร์ท</option>
                                <option>กีฬา/นันทนาการ</option>
                                <option>ของเด็กเล่น</option>
                                <option>ความงาม/เครื่องสำอางค์</option>
                                <option>ค้าขายปลีก/ค้าขายส่ง</option>
                                <option>ตรวจสอบคุณภาพ/ควบคุมคุณภาพ</option>
                                <option>ทรัพยากรบุคคล</option>
                                <option>ธุรกิจบริการ</option>
                                <option>บรรจุภัณฑ์</option>
                                <option>บัญชี/ผู้ตรวจบัญชี</option>
                                <option>บันเทิง/สื่อ</option>
                                <option>ประกันภัย</option>
                                <option>ปิโตรเลียม/พลังงาน/เหมืองแร่</option>
                                <option>ยา/เภสัชกรรม</option>
                                <option>ยานพาหนะ/อะไหล่</option>
                                <option>สายการบิน</option>
                                <option>สินค้าอุปโภค/บริโภค</option>
                                <option>สุขภาพ/โรงพยาบาล</option>
                                <option>หน่วยงานรัฐบาล</option>
                                <option>องค์กรการกุศล</option>
                                <option>อสังหาริมทรัพย์</option>
                                <option>อัญมณี/เครื่องประดับ</option>
                                <option>อิเล็กโทรนิกส์/เครื่องใช้ไฟฟ้า</option>
                                <option>อุตสาหกรรมกระดาษ/เส้นใย</option>
                                <option>เกษตรกรรม/ป่าไม้</option>
                                <option>เคมีภัณฑ์/ปิโตรเคมีภัณฑ์</option>
                                <option>เครื่องจักร</option>
                                <option>เครื่องดื่ม/อาหาร/ภัตตาคาร</option>
                                <option>เฟอร์นิเจอร์</option>
                                <option>เสื้อผ้า/รองเท้า/เครื่องตกแต่ง</option>
                                <option>โฆษณา/ประชาสัมพันธ์</option>
                                <option>ไอที - ซอฟต์แวร์/โทรคมนาคม</option>
                                <option>ไอที - อินเทอร์เน็ต</option>
                                <option>ไอที - ฮาร์ดแวร์</option>
                            </select>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 frm-career-mb frm-career">
                            <label>เดือน/ปี เริ่มทำงาน</label>
                            <div class="row">
                                <div class="col-6 frm-career">
                                <select name="" id="" class="form-select">
                                    <option>เดือน</option>
                                    <option>มกราคม</option>
                                    <option>กุมภาพันธ์</option>
                                    <option>มีนาคม</option>
                                    <option>เมษายน</option>
                                    <option>พฤษภาคม</option>
                                    <option>มิถุนายน</option>
                                    <option>กรกฎาคม</option>
                                    <option>สิงหาคม</option>
                                    <option>กันยายน</option>
                                    <option>ตุลาคม</option>
                                    <option>พฤศจิกายน</option>
                                    <option>ธันวาคม</option>
                                </select>
                                </div>
                                <div class="col-6 frm-career">
                                    <select name="" id="" class="form-select">
                                        <option>ปี</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 frm-career-mb frm-career">
                            <label>เดือน/ปี ที่สิ้นสุดการทำงาน</label>
                            <div class="row">
                                <div class="col-6 frm-career">
                                <select name="" id="" class="form-select">
                                    <option>เดือน</option>
                                    <option>มกราคม</option>
                                    <option>กุมภาพันธ์</option>
                                    <option>มีนาคม</option>
                                    <option>เมษายน</option>
                                    <option>พฤษภาคม</option>
                                    <option>มิถุนายน</option>
                                    <option>กรกฎาคม</option>
                                    <option>สิงหาคม</option>
                                    <option>กันยายน</option>
                                    <option>ตุลาคม</option>
                                    <option>พฤศจิกายน</option>
                                    <option>ธันวาคม</option>
                                </select>
                                </div>
                                <div class="col-6 frm-career">
                                    <select name="" id="" class="form-select">
                                        <option>ปี</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 frm-career">
                            <label>ความรับผิดชอบ</label>
                            <textarea name="" id="" rows="3" class="form-control"></textarea>
                        </div>
                        <div class="col-12 col-md-6 frm-career">
                            <label>สาเหตุที่ลาออก</label>
                            <textarea name="" id="" rows="3" class="form-control"></textarea>
                        </div>
                        <div class="col-12 frm-career">
                            <div class="career-addmore">
                                <button class="btn-default btn-grey"><i class="bi bi-plus-circle-fill"></i> เพิ่ม</button>
                                <div>ท่านสามารถเพิ่มได้มากกว่า 1 รายการ</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="boxform-career">
                    <div class="head-careerform"><i class="bi bi-person"></i> บุคคลอ้างอิง</div>
                    <div class="row">
                        <div class="col-12 frm-career">
                            <div class="txt-notecareer">* ระบุ 2 ท่าน โดยที่บุคคลทั้งสองต้องไม่มีความเกี่ยวข้องและเป็นพนักงานของบริษัทไดกิ้น คอมเพรสเซอร์ อินดัสทรีส์ จำกัด</div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 frm-career">
                            <label>1. ชื่อ - นามสกุล</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 frm-career">
                            <label>เบอร์โทรศัพท์</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-12 col-lg-4 frm-career">
                            <label>อาชีพ</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-12 frm-career">
                            <label>ที่อยู่</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 frm-career">
                            <label>2. ชื่อ - นามสกุล</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 frm-career">
                            <label>เบอร์โทรศัพท์</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-12 col-lg-4 frm-career">
                            <label>อาชีพ</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-12 frm-career">
                            <label>ที่อยู่</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="boxform-career">
                    <div class="head-careerform"><i class="bi bi-card-list"></i> ข้อมูลอื่นๆ</div>
                    <div class="row">
                        <div class="col-12 frm-career">
                            <label>ข้อมูลที่สำคัญของผู้สมัครและเป็นประโยชน์ต่อบริษัท (ถ้ามี)</label>
                            <textarea name="" id="" rows="3" class="form-control"></textarea>
                        </div>
                        <div class="col-12 frm-career">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="careerCheck1">
                                <label class="form-check-label" for="careerCheck1">ข้าพเจ้าขอรับรองว่าข้อความดังกล่าวเบื้องต้นเป็นความจริง หากข้าพเจ้าให้ข้อมูลไม่ถูกต้อง ไม่ครบถ้วนหรือเจตนาปกปิดความจริงประการใด ข้าพเจ้ายินยอมให้บริษัทปฏิเสธการสมัครงาน
ครั้งนี้ หรือถ้ารับเข้าทำงานแล้ว ให้ถูกเลิกจ้างโดยทันที หากทราบว่าข้อมูล ที่ให้กับบริษัทเป็นเท็จ</label>
                            </div>
                        </div>
                        <div class="col-12 frm-career">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="careerCheck2">
                                <label class="form-check-label" for="careerCheck2">ข้าพเจ้าขอรับรองว่าข้อความดังกล่าวเบื้องต้นเป็นความจริง หากข้าพเจ้าให้ข้อมูลไม่ถูกต้อง ไม่ครบถ้วนหรือเจตนาปกปิดความจริงประการใด ข้าพเจ้ายินยอมให้บริษัทปฏิเสธการสมัครงาน
ครั้งนี้ หรือถ้ารับเข้าทำงานแล้ว ให้ถูกเลิกจ้างโดยทันที หากทราบว่าข้อมูล ที่ให้กับบริษัทเป็นเท็จ</label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="box-btncareer">
                    <a href="#" class="btn-default btn-grey"><i class="bi bi-arrow-clockwise"></i> ล้างค่า</a>
                    <a href="#" class="btn-default btn-blue"><i class="bi bi-send"></i> ส่งข้อมูลการสมัครงาน</a>
                </div>

            </form>
        </div>
    </div>
</section>


	
<?php require('inc_footer.php'); ?>

<script>
	$( ".menubar > li:nth-child(7) > a" ).addClass( "here" );
</script>

<script type="text/javascript">
	$('.date').datepicker({
		language: "th"
	});
</script>

		
</div>

</body>

</html>
