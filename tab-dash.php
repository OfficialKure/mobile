<?php
include "config.php"
?>
<ion-view title="Dashboard">
  <ion-content class="has-header padding">
   <div class="content">
   <div class="box">
                <div class="box-body">
   <center>
    <?php
//We get the IDs, usernames and emails of users
$req = mysql_query('select name from users');
while($dnn = mysql_fetch_array($req))
{
?>
<h1><?php echo htmlentities($dnn['name'], ENT_QUOTES, 'UTF-8'); ?></h1><br />
<?php
}
?>
    </center>
     </div><!-- /.box-body -->
                </div>
    </div>
  </ion-content>
</ion-view>


                       
