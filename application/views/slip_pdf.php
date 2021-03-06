<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=divice-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    <?php foreach ($news as $n) : ?>
    <title>Pay Slip <?=$n['fname'];?> <?=$n['lname'];?></title>
    <?php endforeach;?>
</head>
<body>  
    
<?php foreach ($news as $n) : ?>
<center> <h3>สำนักงานสาธารณสุขจังหวัดชุมพร <br/>รายงานการจ่ายเงินเดือน <?=$n['prename'];?><?=$n['fname'];?>  <?=$n['lname'];?></h3></center>
<?php endforeach ?>

<center>  
    
    <table class="table-striped table-bordered table-hover">
        <?php foreach ($news as $n) : ?>
        
        <tr><td>&nbsp;จังหวัด อำเภอ&nbsp;</td>             <td >&nbsp;<?= $n['Province']; ?>&nbsp;</td></tr>
        <tr><td>&nbsp;เลขประจำตัวประชาชน&nbsp;</td>       <td>&nbsp;<?= $n['id_card'];?>&nbsp;</td></tr>
        <tr><td>&nbsp;ธนาคาร&nbsp;</td>                 <td>&nbsp;<?= $n['bank'];?>&nbsp;</td></tr>
        <tr><td>&nbsp;สาขา&nbsp;</td>                   <td>&nbsp;<?= $n['branch'];?>&nbsp;</td></tr>
        <tr><td>&nbsp;เลขที่บัญชีธนาคาร&nbsp;</td>          <td>&nbsp;<?= $n['bank account']; ?>&nbsp;</td></tr>
        <tr><td>&nbsp;รายได้&nbsp;</td>                  <td align="right">&nbsp;<?= number_format($n['revenue'],2,'.',',');?>&nbsp;</td></tr>
        <tr><td>&nbsp;เงินเดือน(ตกเบิก)&nbsp;</td>          <td align="right">&nbsp;<?= number_format($n['Reimbursement'],2,'.',',');?>&nbsp;</td></tr>
        <tr><td>&nbsp;เงินปจต./วิชาชีพ/วิทยฐานะ&nbsp;</td>   <td align="right">&nbsp;<?= number_format($n['Professional_values'],2,'.',',');?>&nbsp;</td></tr>
        <tr><td>&nbsp;เงินปจต./วิชาชีพ/วิทยะฐานะ(ตกเบิก)&nbsp;</td><td align="right">&nbsp;<?= number_format($n['Professional_fees'],2,'.',',');?>&nbsp;</td></tr>
        <tr><td>&nbsp;ต.ข.ท.ปจต./ต.ข.8-8ว./ต.ด.ข.1-7&nbsp;</td><td align="right">&nbsp;<?= number_format($n['t_k_8_8'],2,'.',',');?>&nbsp;</td></tr>
        <tr><td>&nbsp;ต.ข.ท.ปจต./ต.ข.8-8ว./ต.ด.ข.1-7(ตกเบิก)&nbsp;</td><td align="right">&nbsp;<?= number_format($n['t_k_8_8_togbork'],2,'.',',');?>&nbsp;</td></tr>
        <tr><td>&nbsp;เงินช่วยเหลือบุตร&nbsp;</td>            <td align="right">&nbsp;<?= number_format($n['Child_allowance'],2,'.',',');?>&nbsp;</td></tr>
        <tr><td>&nbsp;เงิน พ.ส.ร/พ.ต.ก&nbsp;</td>         <td align="right">&nbsp;<?= number_format($n['ptk'],2,'.',',');?>&nbsp;</td></tr>
        <tr><td>&nbsp;เงินตอบแทนพิเศษ&nbsp;</td>            <td align="right">&nbsp;<?= number_format($n['Extra_money'],2,'.',',');?>&nbsp;</td></tr>
        <tr><td>&nbsp;อื่น ๆ&nbsp;</td>                   <td align="right">&nbsp;<?= number_format($n['other'],2,'.',',');?>&nbsp;</td></tr>
        <tr><td>&nbsp;รวมรับ&nbsp;</td>                  <td align="right">&nbsp;<?= number_format($n['revenue_sum'],2,'.',',');?>&nbsp;</td></tr>
        <tr><td>&nbsp;ภาษี&nbsp;</td>                    <td align="right">&nbsp;<?= number_format($n['tax'],2,'.',',');?>&nbsp;</td></tr>
        <tr><td>&nbsp;สหกรณ์ออมทรัพย์ สสจ.ชุมพร&nbsp;</td> <td align="right">&nbsp;<?= number_format($n['cooperative'],2,'.',',');?>&nbsp;</td></tr>
        <tr><td>&nbsp;กองทุนบำเหน็จบำนาญข้าราชการ&nbsp;</td><td align="right">&nbsp;<?= number_format($n['gpf'],2,'.',',');?>&nbsp;</td></tr>
        <tr><td>&nbsp;เงินกู้เพื่อที่อยู่อาศัย&nbsp;</td>           <td align="right">&nbsp;<?= number_format($n['Home_loan'],2,'.',',');?>&nbsp;</td></tr>
        <tr><td>&nbsp;เงินกู้เพื่อการศึกษา&nbsp;</td>           <td align="right">&nbsp;<?= number_format($n['Education_loan'],2,'.',',');?>&nbsp;</td></tr>
        <tr><td>&nbsp;เงินกู้ยานพาหนะ&nbsp;</td>            <td align="right">&nbsp;<?= number_format($n['Vehicle_loan'],2,'.',',');?>&nbsp;</td></tr>
        <tr><td>&nbsp;ฌาปณกิจ&nbsp;</td>                <td align="right">&nbsp;<?= number_format($n['chapanakit'],2,'.',',');?>&nbsp;</td></tr>
        <tr><td>&nbsp;เงินบำรุง/เงินทุน/กู้สวัสดิการ/สงเคราะห์&nbsp;</td> <td align="right">&nbsp;<?= number_format($n['Welfare_loan'],2,'.',',');?>&nbsp;</td></tr>
        <tr><td>&nbsp;เงินบำรุงเรียกคืน/ชดใช้ทางแพ่ง/อายัดเงิน&nbsp;</td><td align="right">&nbsp;<?= number_format($n['Attach_money'],2,'.',',');?>&nbsp;</td></tr>
        <tr><td>&nbsp;จ่ายอื่น ๆ&nbsp;</td>                <td align="right">&nbsp;<?= number_format($n['other2'],2,'.',',');?>&nbsp;</td></tr>
        <tr><td>&nbsp;รวมจ่าย&nbsp;</td>                 <td align="right">&nbsp;<?= number_format($n['pay_sum'],2,'.',',');?>&nbsp;</td></tr>
        <tr><td>&nbsp;รับสุทธิ&nbsp;</td>                  <td align="right">&nbsp;<?= number_format($n['net'],2,'.',',');?>&nbsp;</td></tr>
        <tr><td>&nbsp;วันที่ข้อมูล&nbsp;</td>               <td align="right">&nbsp;<?= substr($n['d_update'],0,2).'-'.substr($n['d_update'],2,2).'-'.substr($n['d_update'],4,4);?>&nbsp;</td></tr>
        
        <tbody>
        <tr>
        </tr>
        </tbody>
        <?php endforeach ?>
    </table>
    
</center>   

<?php $this->load->view('footer');?>