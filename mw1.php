<?php
require_once dirname(__DIR__,1).'/classes/Admin.php';

if(isset($_GET['s']))
{
    switch ($_GET['s']) {
        case 'unVerifiedAds':
            getUnverifiedAds();
            break;
        case 'VerifiedAds':
            getverifiedAds();
            break;

        case 'unVerifiedJobs':
            getUnverifiedJobs();
            break;
        case 'VerifiedJobs':
            getverifiedJobs();
            break;
        case 'unVerifiedMatrimony':
            getUnverifiedMatrimony();
            break;
        case 'VerifiedMatrimony':
            getverifiedMatrimony();
            break;
        case 'unVerifiedRealEstate':
            getUnverifiedRealEstate();
            break;
        case 'VerifiedRealEstate':
            getverifiedRealEstate();
            break;
        default:
            # code...
            break;
    } 
}else{
    $admin  = new Admin();
    $data = $admin->getUnverifiedNews();
    $data = json_encode($data);
    echo $data;
}

function getUnverifiedAds()
{
    $admin  = new Admin();
    $data = $admin->getUnverifiedAds();
    $data = json_encode($data);
    echo $data;
}

function getverifiedAds()
{
    $admin  = new Admin();
    $data = $admin->getverifiedAds();
    $data = json_encode($data);
    echo $data;
}


function getUnverifiedJobs()
{
    $admin  = new Admin();
    $data = $admin->getUnverifiedJobs();
    $data = json_encode($data);
    echo $data;
}

function getverifiedJobs()
{
    $admin  = new Admin();
    $data = $admin->getverifiedJobs();
    $data = json_encode($data);
    echo $data;
}

function getUnverifiedMatrimony()
{
    $id = null;
    if(isset($_GET['id']))
    {
        $id = $_GET['id'];
    }
    $admin  = new Admin();
    $data = $admin->getUnverifiedMatrimony($id);
    $data = json_encode($data);
    echo $data;
}


function getverifiedMatrimony()
{
    $id = null;
    if(isset($_GET['id']))
    {
        $id = $_GET['id'];
    }
    $admin  = new Admin();
    $data = $admin->getverifiedMatrimony($id);
    $data = json_encode($data);
    echo $data;
}

function getUnverifiedRealEstate(){
    $id = null;
    if(isset($_GET['id']))
    {
        $id = $_GET['id'];
    }
    $admin  = new Admin();
    $data = $admin->getUnverifiedRealEstate($id);
    $data = json_encode($data);
    echo $data;
}

function getverifiedRealEstate(){
    $id = null;
    if(isset($_GET['id']))
    {
        $id = $_GET['id'];
    }
    $admin  = new Admin();
    $data = $admin->getverifiedRealEstate($id);
    $data = json_encode($data);
    echo $data;
}



?>