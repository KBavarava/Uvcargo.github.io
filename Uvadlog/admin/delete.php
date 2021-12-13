<?php
if(isset($_GET['type']) && $_GET['type']!='')
{
   $type=get_safe_value($con,$_GET['type']);
   if($type=='delete')
   {
      $id=get_safe_value($db,$_GET['uid']);
      $delete_sql="delete from  udetail where uid='$uid'";
      mysqli_query($db,$delete_sql);
   }
}

?>