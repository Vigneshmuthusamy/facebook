<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor
 * SELECT * FROM `share` WHERE `date_time` BETWEEN NOW() AND DATE_ADD(NOW(), INTERVAL 1 DAY)
 * SELECT * FROM `share` WHERE `date_time` BETWEEN NOW() AND DATE_ADD(NOW(), INTERVAL 50 MINUTE)
 */
ini_set('display_erors',1);
include_once 'style.php';
require_once 'functionsClass.php';
?>
<div class="container">
    <h2>Queued Request</h2>
    <?php
    $obj = new functionsClass();
    $datas = $obj->queuedRequest();
    ?>
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>Id</th>
                <th>Status Message</th>
                <th>Status Link</th>
                <th>Status Image Link</th>
                <th>Photo Link</th>
                <th>Scheduled Time</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($datas as $data){
                if($data['is_status'] == 1){
                    $color = "success";
                }  else {
                    $color = "info";
                }
                print<<<HTML
                <tr class="$color">
                    <td>{$data['id']}</td>   
                    <td>{$data['status_message']}</td>
                    <td>{$data['status_link']}</td>
                    <td>{$data['status_image_link']}</td>
                    <td>{$data['photo_link']}</td>
                    <td>{$data['date_time']}</td>                           
                </tr>
HTML;
    
            } ?>
        </tbody>
    </table>
    <h2>Archieved Request</h2>
    <?php $archData= $obj->archievedRequest(); ?>
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>Id</th>
                <th>Status Message</th>
                <th>Status Link</th>
                <th>Status Image Link</th>
                <th>Photo Link</th>
                <th>Scheduled Time</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($archData as $data){
                if($data['is_status'] == 1){
                    $color = "success";
                }  else {
                    $color = "info";
                }
                print<<<HTML
                <tr class="$color">
                    <td>{$data['id']}</td>   
                    <td>{$data['status_message']}</td>
                    <td>{$data['status_link']}</td>
                    <td>{$data['status_image_link']}</td>
                    <td>{$data['photo_link']}</td>
                    <td>{$data['date_time']}</td>                           
                </tr>
HTML;
    
            } ?>
        </tbody>
    </table>
    </div>
</div>
</body>
</html>