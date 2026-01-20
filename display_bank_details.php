<?php
session_start();
if (isset($_SESSION['bank_details']))
{
    $bank= $_SESSION['bank_details'];

?>
<h2>bank Details</h2>
<p><strong>Account Name : </strong> <?php echo $bank['account_name'];?></p>
<p><strong>Bank Name : </strong> <?php echo $bank['bank_name'];?></p>
<p><strong>Account Number : </strong> <?php echo $bank['account _number'];?></p>
<p><strong>IFSC Code : </strong> <?php echo $bank['ifsc_code'];?></p>
<p><strong>Branch: </strong> <?php echo $bank['branch'];?></p>
<p><strong>Account Type :</strong> <?php echo $bank['account_type'];?></p>
<?php
}
else{
    echo "No bank details found";
}
?>
