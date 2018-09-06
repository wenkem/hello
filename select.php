<?php
public function role(){
    $role_id = input('role_id');
    $data = Db::table('vs_role')->where(['id'=>$role_id])->find();
    $is_oem = $data['is_oem'];
    if($is_oem){
      $oem = Db::table('vs_oem')->select();
      return ['code' =>1,'message'=>'是oem角色','data'=>$oem];
    }else{
      return ['code' =>2,'message'=>'不是oem角色','data'=>''];
    }
  }