<strong>สวัสดี, </strong>วันนี้มีลูกค้าสนใจจองโปรแกรม รายละเอียดด้านล่าง<br/><br/>
<strong>ชื่อ-สกุล</strong> <?=h($booking['fullname'])?><br/>
<strong>เพศ</strong> <?=($booking['gender']=='F'?'หญิง':'ชาย')?><br/>
<strong>ช่วงอายุ</strong> <?=h($booking['agerang'])?><br/>
<strong>โปรแกรมที่สนใจ</strong> <?=h($booking['program'])?><br/>
<strong>เบอร์โทรศัพท์</strong> <?=h($booking['phone'])?><br/>
<strong>อีเมล์</strong> <?=h($booking['email'])?><br/>
<strong>ช่วงเวลาที่สะดวก</strong> <?=h($booking['description']==''?'-':$booking['description'])?><br/>
<br/><br/><br/>