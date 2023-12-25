<?php 
include_once "db.php";
$schools=$GraduateSchool->all();
$options="";
if(isset($_GET['id'])){
    $user=$Student->find($_GET['id']);
}
foreach($schools as $school){
    
    $selected=(isset($user) && ($user['graduate_at']==$school['id']))?'selected':'';
    // <option selected value="12">台中市市立中山國中</option>
    $options.="<option $selected value='{$school['id']}'>{$school['county']}{$school['name']}</option>";
}
echo $options;